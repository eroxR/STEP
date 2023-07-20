<?php

namespace App\Http\Livewire\List;

use App\Models\contract;
use App\Models\permit;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

use iio\libmergepdf\Merger;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ListContracts extends Component
{

    use WithFileUploads;

    public $filtre = 0, $direction = 'desc', $search = '', $ide = 0, $contract_id,$contractType,$numberContract,$contractSigned;
    public $fileContract = ['','colegios/', 'Empresas/', 'Empresa_Turismo/', 'Ocacionales/', 'Usuarios_Salud/', 'Comvenio_Empresarial/', 'Contrato_Vinculacion/'],
    $tContra = ['','colegios', 'Empresas', 'Empresa Turismo', 'Ocacionales', 'Usuarios Salud', 'Comvenio Empresarial', 'Contrato Vinculacion'],
    $doc = [
        'documentación_contrato_N-', 'Contrato_para_transporte_de_estudiantes_N-', 'Contrato_para_transporte_empresarial_N-', 'Contrato_para_transporte_de_turistas_N-',
        'Contrato_para_un_grupo_específico_de_usuarios_N-', 'Contrato_para_Transporte_de_usuarios_del_servicio_de_salud_N-',
        'convenio_de_colaboracion_empresarial_N-', 'Contrato_de_Vinculación_N-'];

    protected $listeners = ['veiw','permit'];

    public function render()
    {

        switch ($this->filtre) {
            case '1':
                $contracts = DB::table('contracts')->where('type_contract', 1)->orderBy('id', $this->direction)
                ->where('contract_number', 'like', '%' . $this->search . '%')->get();
                break;

            case '2':
                $contracts = DB::table('contracts')->where('type_contract', 2)->orderBy('id', $this->direction)
                ->where('contract_number', 'like', '%' . $this->search . '%')->get();
                break;

            case '3':
                $contracts = DB::table('contracts')->where('type_contract', 3)->orderBy('id', $this->direction)
                ->where('contract_number', 'like', '%' . $this->search . '%')->get();
                break;

            case '4':
                $contracts = DB::table('contracts')->where('type_contract', 4)->orderBy('id', $this->direction)
                ->where('contract_number', 'like', '%' . $this->search . '%')->get();
                break;

            case '5':
                $contracts = DB::table('contracts')->where('type_contract', 5)->orderBy('id', $this->direction)
                ->where('contract_number', 'like', '%' . $this->search . '%')->get();
                break;

            default:
            $contracts = DB::table('contracts')->orderBy('id', $this->direction)
            ->where('contract_number', 'like', '%' . $this->search . '%')->get();
            
                break;
        }

        $this->ide != (0) ? $contracsSelected = DB::table('contracts')->where('id', $this->ide)->get() : $contracsSelected = DB::table('contracts')->orderBy('id', 'desc')->limit(1)->get();

        foreach ($contracsSelected as $key) {
            $contractNow = $key->id;
        }

        
        $this->ide != (0) ? $permits = DB::table('permits')->where('contract', $this->ide)->get() : $permits = DB::table('permits')->where('contract', $contractNow)->get();
        // $prueba = DB::table('permits')->where('contract', 102)->get();
        // dd($contracsSelected,$contractNow,$this->ide,$permits,$prueba);

        $allpermits = permit::all();
        

        return view('livewire.list.list-contracts', compact('contracts','contracsSelected','permits','allpermits'));
    }

    public function order(){
        
        if ($this->direction == 'asc') {
            $this->direction = 'desc';
        } else {
            $this->direction = 'asc';
        }
        

    }

    public function veiw($id){

        $this->emit('openModalView');
    }

    public function permit($id){

        $this->emit('openModalPermit');
    }

    public function contractSigned()
    {

        // dd($this->contract_id,$this->contractType,$this->numberContract);
        // dd($this->contractSigned);

        // documentación_contrato_N-6029.pdf
        $directory = DB::table('documents')->where('documentable_id', $this->contract_id)->where('documentable_Type', 'like', '%\contract%')->value('directory');
        $document_id = DB::table('documents')->where('documentable_id', $this->contract_id)->where('documentable_Type', 'like', '%\contract%')->value('id');

        // dd($newRuta);

        $agree = new Merger;

        $agree->addFile($this->contractSigned->getRealPath());
        $agree->addFile($directory);


        $output = $agree->merge();

        $fileName = $this->doc[$this->contractType] . $this->numberContract . '.pdf';

        $url = 'storage/STEP/contract/' . $this->fileContract[$this->contractType] . $fileName;

        $bytesEscritos = file_put_contents($url, $output);

        if ($bytesEscritos > 0) {
            $newRuta = str_replace('storage', 'public', $directory);
            Storage::delete($newRuta);
    
            DB::table('documents')->where('id', $document_id)->update(['document_name' => $fileName, 'directory' => $url, 'extension' => '.pdf']);
    
            DB::table('contracts')->where('id', $this->contract_id)->update(['signed_contract' => 2]);

            $this->emit('outputs', ['contractnumber' => $this->numberContract], ['contractType' => $this->tContra[$this->contractType]], ['process' => 1],);
        } else {
            $this->emit('outputs', ['contractnumber' => $this->numberContract], ['contractType' => $this->tContra[$this->contractType]], ['process' => 2],);
        }
        



        // dd($bytesEscritos);
    }
}


