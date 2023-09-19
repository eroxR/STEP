<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $Cliente = Role::create(['name' => 'Cliente']);      
        $Monitor = Role::create(['name' => 'Monitor']);
        $CoodinadorOperativo = Role::create(['name' => 'CoodinadorOperativo']);
        $RecursosHumanosEI = Role::create(['name' => 'RecursosHumanosEI']);
        $ComprasSuministros = Role::create(['name' => 'ComprasSuministros']);
        $Conductor = Role::create(['name' => 'Conductor']);
        $SistemasGestión = Role::create(['name' => 'SistemasGestión']);
        $GerenteGeneral = Role::create(['name' => 'GerenteGeneral']);
        $AuditorInterno = Role::create(['name' => 'AuditorInterno']);
        $Proveedor = Role::create(['name' => 'Proveedor']);
        $Vinculado = Role::create(['name' => 'Vinculado']);
        $Administrador = Role::create(['name' => 'Administrador']);
        // usuarios
        Permission::create(['name' => 'mantenimientoUsuarios'])->syncRoles([$Administrador,$GerenteGeneral,$RecursosHumanosEI]);
        Permission::create(['name' => 'mantenimientoUsuarios.crear'])->syncRoles([$Administrador,$GerenteGeneral,$RecursosHumanosEI]);
        Permission::create(['name' => 'mantenimientoUsuarios.actualizar'])->syncRoles([$Administrador,$GerenteGeneral,$RecursosHumanosEI]);
        Permission::create(['name' => 'mantenimientoUsuarios.eliminar'])->syncRoles([$Administrador,$GerenteGeneral,$RecursosHumanosEI]);
        // contratos
        Permission::create(['name' => 'mantenimientoContratos'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);
        Permission::create(['name' => 'mantenimientoContratos.crear'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);
        Permission::create(['name' => 'mantenimientoContratos.actualizar'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);
        Permission::create(['name' => 'mantenimientoContratos.eliminar'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);
        // permisos
        Permission::create(['name' => 'mantenimientoFuec'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);
        Permission::create(['name' => 'mantenimientoFuec.crear'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);
        Permission::create(['name' => 'mantenimientoFuec.actualizar'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);
        Permission::create(['name' => 'mantenimientoFuec.eliminar'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);
        // vehiculos
        Permission::create(['name' => 'mantenimientoVehiculos'])->syncRoles([$Administrador,$GerenteGeneral,$RecursosHumanosEI]);
        Permission::create(['name' => 'mantenimientoVehiculos.crear'])->syncRoles([$Administrador,$GerenteGeneral,$RecursosHumanosEI]);
        Permission::create(['name' => 'mantenimientoVehiculos.acctualizar'])->syncRoles([$Administrador,$GerenteGeneral,$RecursosHumanosEI]);
        Permission::create(['name' => 'mantenimientoVehiculos.eliminar'])->syncRoles([$Administrador,$GerenteGeneral,$RecursosHumanosEI]);
        // listas
        Permission::create(['name' => 'listas'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo,$RecursosHumanosEI,$ComprasSuministros,$SistemasGestión,$AuditorInterno,$Monitor]);

        Permission::create(['name' => 'listaContratos'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo,$RecursosHumanosEI,$ComprasSuministros,$SistemasGestión,$AuditorInterno,$Monitor]);
        Permission::create(['name' => 'listaContratos.crearFuec'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);
        Permission::create(['name' => 'listaContratos.crearFuecContingencia'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);
        Permission::create(['name' => 'listaContratos.firmarContrato'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);

        Permission::create(['name' => 'listaVehiculos'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo,$RecursosHumanosEI,$ComprasSuministros,$SistemasGestión,$AuditorInterno,$Monitor]);
        Permission::create(['name' => 'listaVehiculos.actualizarDocumentos'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);

        Permission::create(['name' => 'listaFuec'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo,$RecursosHumanosEI,$ComprasSuministros,$SistemasGestión,$AuditorInterno,$Monitor]);

        Permission::create(['name' => 'listaConductores'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo,$RecursosHumanosEI,$ComprasSuministros,$SistemasGestión,$AuditorInterno,$Monitor]);
        Permission::create(['name' => 'listaConductores.actualizarDocumentos'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo]);

        Permission::create(['name' => 'listaVinculados'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo,$RecursosHumanosEI,$ComprasSuministros,$SistemasGestión,$AuditorInterno,$Monitor]);
        
        Permission::create(['name' => 'listaProveedores'])->syncRoles([$Administrador,$GerenteGeneral,$CoodinadorOperativo,$RecursosHumanosEI,$ComprasSuministros,$SistemasGestión,$AuditorInterno,$Monitor]);
        // pesv
        Permission::create(['name' => 'pesv'])->syncRoles([$Administrador,$GerenteGeneral]);
        // plan de rodamiento
        Permission::create(['name' => 'planRodamiento'])->syncRoles([$Administrador,$GerenteGeneral]);
        Permission::create(['name' => 'totales'])->syncRoles([$Administrador,$GerenteGeneral]);
    }
}
