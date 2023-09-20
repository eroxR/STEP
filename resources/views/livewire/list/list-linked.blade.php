<div>

    <div class="py-12 mb-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="roundedx1 mt5 mr3 fixed inset-y-0 flex items-end bg-black bg-opacity-50 sm:items-center">
                <input id="input"
                    class="mt0-5 w19 ml1-4 top-0 absolute mr-4 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text" placeholder="Buscar X N° contrato" wire:model="search">
                <button wire:click="$set('search','')" class="absolute top-0 ml18 mt1-3 ml10">
                    <svg class="w-5 h-5 icon-red" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2" />
                        <line x1="15" y1="9" x2="9" y2="15" />
                        <line x1="9" y1="9" x2="15" y2="15" />
                    </svg>
                </button>
                {{-- <button wire:click="$set('filtre',0)" class="absolute top-0 ml22 mt1-3">
                    <svg class="w-5 h-5 icon-red" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2" />
                        <line x1="15" y1="9" x2="9" y2="15" />
                        <line x1="9" y1="9" x2="15" y2="15" />
                    </svg>
                </button> --}}
                <span 
                    class="absolute top-0 ml25 mt1 px-2 py-1 font-semibold leading-tight text-sky-700 bg-sky-300 rounded-full dark:bg-sky-700 dark:text-sky-100">
                    Total Conductores = {{$totals}} 
                </span>
                <span 
                    class="absolute top-0 ml40 mt1 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                    Conductores Habilitados {{$habilitado }}
                </span>
                <span 
                    class="absolute top-0 ml57 mt1 px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                    Conductores Inhabilitados {{$inhabilitado}}
                </span>
                {{-- <button wire:click="$set('filtre',4)"
                    class="absolute top-0 ml53 mt1 px-2 py-1 font-semibold leading-tight text-white bg-emerald-700 rounded-full dark:bg-sky-700 dark:text-white">
                    Ocacionales
                </button> --}}
                {{-- <button wire:click="$set('filtre',5)"
                    class="absolute top-0 ml62 mt1 border-transparent px-2 py-1 font-semibold leading-tight text-white bg-emerald-700 rounded-full dark:bg-sky-700 dark:text-white">
                    Empresas Salud
                </button> --}}
                <div class="mt0-1 right-0 top-0 absolute mr1-4">

                    <button
                        class="inline-flex items-center justify-cente border border-transparent rounded-md font-semibold uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:ring disabled:opacity-25 transition">
                        <span class="text-2-6xl" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <i class="fas fa-file-excel icon-green"></i>
                        </span>
                    </button>
                    <button
                        class="inline-flex items-center justify-cente border border-transparent rounded-md font-semibold uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:ring disabled:opacity-25 transition">
                        <span class="text-2-6xl" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <i class="fas fa-file-pdf icon-red w-5 h-5"></i>
                        </span>
                    </button>
                </div>
                <div class="w20 h-4-7 mt-12 mr-4 ml-4 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 dark:text-white sm:rounded-lg overflow-x-hidden overflow-y-auto"
                    role="dialog">
                    <header class="flex justify-center border-b-fuchsia-800 border-b bg-red-500 rounded-lg">
                        <!-- title -->
                        <button id="title" wire:click="order()">{{ __('Driver List') }}</button>
                    </header>
                    <div class="h-4-7 overflow-y-auto">
                        <ul>
                            @foreach ($drivers as $driver)
                                <li class="id hover:bg-red-500 hover:text-white border-b rounded-lg">
                                    <a wire:click="$set('ide',{{ $driver->user_id }})" href="#">
                                        {{ $driver->firstname }} {{ $driver->secondname }}
                                        {{ $driver->lastname }} {{ $driver->motherslastname }}
                                    </a>

                                    <div
                                        class="descrip absolute rounded-lg top-0 p1-6 h91 w77 mt3-5 ml18-6 bg-white dark:bg-gray-800 hidden">
                                        <header class="flex border-b-fuchsia-800 ">
                                            <!-- title -->
                                            <div class="grid grid-cols-3 gap-20">
                                                <div class="col-span-2 ">
                                                    <h1 class="content-start text-black dark:text-white text-4xl0-9">
                                                        <strong class="dark:text-yellow-400"> conductor</strong>
                                                        {{ $driver->firstname }}
                                                        {{ $driver->lastname }}
                                                        <strong class="dark:text-yellow-400"> docum.</strong>
                                                        {{ $driver->identificationcard }}
                                                        <strong class="dark:text-yellow-400"> vinculado</strong>
                                                        @foreach ($linked as $linkedy)
                                                            @if ($linkedy->id == $driver->Linked)
                                                                {{ $linkedy->firstname }}
                                                                {{ $linkedy->lastname }}
                                                            @endif
                                                        @endforeach
                                                    </h1>
                                                </div>
                                                <div class="">
                                                    <h1 class="content-center text-black dark:text-white text-4xl1">
                                                        Estado:

                                                        <span
                                                            @if ($driver->driver_status == 1) class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">   
                                                            @else
                                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> @endif
                                                            {{ $state[$driver->driver_status - 1] }} </span>
                                                    </h1>
                                                </div>
                                            </div>

                                        </header>
                                        <!-- body -->

                                        <div class="grid grid-cols-5 gap-4">
                                            <div class="border-b text-black text80 dark:text-white "><strong
                                                    class="dark:text-yellow-400">Nombre:</strong>
                                                {{ $driver->firstname }}
                                                {{ $driver->secondname }}
                                                {{ $driver->lastname }}
                                                {{ $driver->motherslastname }} <br>
                                                <strong class="dark:text-yellow-400">
                                                    @foreach ($identifitations as $id => $description_identification)
                                                        @if ($id == $driver->identification)
                                                            {{ $description_identification }}
                                                        @endif
                                                    @endforeach
                                                    N°:
                                                </strong> {{ $driver->identificationcard }}
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong class="dark:text-yellow-400">Expedida:</strong> falta agregar
                                                este campo <br>
                                                <strong class="dark:text-yellow-400">Fecha nacimiento:</strong>
                                                {{ $driver->birthdate }} <br>
                                                <strong class="dark:text-yellow-400">Edad:</strong>
                                                {{ $driver->age }}
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong class="dark:text-yellow-400">Tipo Sexo:</strong>
                                                {{ $driver->type_sex == 'M' ? 'Masculino' : 'Femenino' }}
                                                <br>
                                                <strong class="dark:text-yellow-400">Estado Civil:</strong>
                                                @foreach ($maritalStatuses as $id => $description_maritalstatus)
                                                    @if ($id == $driver->civil_status)
                                                        {{ $description_maritalstatus }}
                                                    @endif
                                                @endforeach
                                                <br>
                                                <strong class="dark:text-yellow-400">Ciudad:</strong>
                                                @foreach ($cities as $id => $city_name)
                                                    @if ($id == $driver->city)
                                                        {{ $city_name }}
                                                    @endif
                                                @endforeach
                                                <br>
                                                <strong class="dark:text-yellow-400">Departamento:</strong>
                                                @foreach ($provinces as $id => $department_name)
                                                    @if ($id == $driver->Department)
                                                        {{ $department_name }}
                                                    @endif
                                                @endforeach
                                                <br>
                                                <strong class="dark:text-yellow-400">Pais:</strong>
                                                @foreach ($countries as $id => $country_name)
                                                    @if ($id == $driver->country)
                                                        {{ $country_name }}
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong class="dark:text-yellow-400">Dirección de residencia:</strong>
                                                {{ $driver->address }} <br>
                                                <strong class="dark:text-yellow-400">Teléfono:</strong>
                                                {{ $driver->phone }}
                                                <br>
                                                <strong class="dark:text-yellow-400">Celular:</strong>
                                                {{ $driver->phone_cellular }}
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong class="dark:text-yellow-400">EPS:</strong>
                                                @foreach ($eps as $id => $description_eps)
                                                    @if ($id == $driver->eps)
                                                        {{ $description_eps }}
                                                    @endif
                                                @endforeach
                                                <br>
                                                <span
                                                    class=" @if ($driver->date_eps < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    <strong class="dark:text-yellow-400">Vigencia:</strong>
                                                    {{ $driver->date_eps }}
                                                </span>
                                                <br>
                                                <strong class="dark:text-yellow-400">Tipo sangre:</strong>
                                                @foreach ($bloodTypes as $id => $blood_type_description)
                                                    @if ($id == $driver->blood_type)
                                                        {{ $blood_type_description }}
                                                    @endif
                                                @endforeach
                                                <br>
                                                <strong class="dark:text-yellow-400">peso:</strong>
                                                {{ $driver->weight }} Kilos<br>
                                                <strong class="dark:text-yellow-400">talla pantalon:</strong>
                                                {{ $driver->pant_size }} <br>
                                                <strong class="dark:text-yellow-400">talla camisa:</strong>
                                                {{ $driver->shirt_size }} <br>
                                                <strong class="dark:text-yellow-400">calzado:</strong>
                                                {{ $driver->shoe_size }}
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong class="dark:text-yellow-400">Cesantias:</strong>
                                                @foreach ($layoffs as $id => $description_layoffs)
                                                    @if ($id == $driver->layoffs)
                                                        {{ $description_layoffs }}
                                                    @endif
                                                @endforeach
                                                <br>
                                                <span
                                                    class=" @if ($driver->date_layoffs < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    <strong class="dark:text-yellow-400">Vigencia:</strong>
                                                    {{ $driver->date_layoffs }}
                                                </span><br>
                                                <strong class="dark:text-yellow-400">ARL:</strong>
                                                @foreach ($alrs as $id => $description_arl)
                                                    @if ($id == $driver->arl)
                                                        {{ $description_arl }}
                                                    @endif
                                                @endforeach
                                                <br>
                                                <span
                                                    class=" @if ($driver->arl_date < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    <strong class="dark:text-yellow-400">Vigencia:</strong>
                                                    {{ $driver->arl_date }}
                                                </span><br>
                                                <strong class="dark:text-yellow-400">Pensión:</strong>
                                                @foreach ($pensions as $id => $description_pension)
                                                    @if ($id == $driver->pension)
                                                        {{ $description_pension }}
                                                    @endif
                                                @endforeach
                                                <br>
                                                <span
                                                    class=" @if ($driver->date_pension < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    <strong class="dark:text-yellow-400">Vigencia:</strong>
                                                    {{ $driver->date_pension }}
                                                </span>
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong class="dark:text-yellow-400">Caja de compensación:</strong>
                                                @foreach ($compensationboxes as $id => $description_compensationbox)
                                                    @if ($id == $driver->compensationbox)
                                                        {{ $description_compensationbox }}
                                                    @endif
                                                @endforeach
                                                <br>
                                                <span
                                                    class=" @if ($driver->date_compensationbox < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    <strong class="dark:text-yellow-400">Vigencia:</strong>
                                                    {{ $driver->date_compensationbox }}
                                                </span><br>
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong class="dark:text-yellow-400">Nombre Familiar:</strong>
                                                {{ $driver->family_names }} <br>
                                                <strong class="dark:text-yellow-400">
                                                    @foreach ($identifitations as $id => $description_identification)
                                                        @if ($id == $driver->family_document_type)
                                                            {{ $description_identification }}
                                                        @endif
                                                    @endforeach
                                                    N°:
                                                </strong> {{ $driver->identificationcard_family }} <br>
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong class="dark:text-yellow-400">Dirección:</strong>
                                                {{ $driver->family_address }} <br>
                                                <strong class="dark:text-yellow-400">Telefono:</strong>
                                                {{ $driver->family_phone }} <br>
                                                <strong class="dark:text-yellow-400">Celular:</strong>
                                                {{ $driver->family_phone_cellular }} <br>
                                                <strong class="dark:text-yellow-400">Parentezco:</strong>
                                                @foreach ($relationships as $id => $description_relationship)
                                                    @if ($id == $driver->relationship)
                                                        {{ $description_relationship }}
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong class="dark:text-yellow-400">Contrato:</strong>
                                                @foreach ($bondings as $id => $bonding_type_description)
                                                    @if ($id == $driver->bonding_type)
                                                        {{ $bonding_type_description }}
                                                    @endif
                                                @endforeach
                                                <br>
                                                <strong class="dark:text-yellow-400">Salario:</strong>
                                                ${{ number_format($driver->salary, 2, ',', '.') }}<br>
                                                <strong class="dark:text-yellow-400">Aux. Transporte:</strong>
                                                ${{ number_format($driver->aid_transport, 2, ',', '.') }}
                                            </div>

                                            @foreach ($beneficiaries as $beneficiary)
                                                @if ($beneficiary->user_id == $driver->user_id)
                                                    <div class="border-b text-black text80 dark:text-white ">
                                                        <strong class="dark:text-yellow-400">Tipo
                                                            Beneficiario:</strong>
                                                        <br>
                                                        {{ $beneficiaryType[$beneficiary->beneficiaryType - 1] }}
                                                        <br>
                                                        <strong class="dark:text-yellow-400">Documento
                                                            Beneficiarios:</strong> <br>
                                                        {{ $beneficiary->document }} <br>
                                                        <strong class="dark:text-yellow-400">Nombre Completo:</strong>
                                                        <br>
                                                        {{ $beneficiary->full_name }}
                                                    </div>
                                                @endif
                                            @endforeach
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong class="dark:text-yellow-400">Licencia:</strong>
                                                {{ $driver->license_number }} <br>
                                                <strong class="dark:text-yellow-400">Categoria:</strong>
                                                @foreach ($licenseCategories as $id => $code_licenseCategory)
                                                    @if ($id == $driver->license_category)
                                                        {{ $code_licenseCategory }}
                                                    @endif
                                                @endforeach
                                                <br>
                                                <strong class="dark:text-yellow-400">Vigencia:</strong> <br>
                                                <span
                                                    class=" @if ($driver->license_expiration < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    {{ $driver->license_expiration }}
                                                </span><br>
                                                <strong class="dark:text-yellow-400">Drogas y
                                                    Alcoholemia:</strong> <br>
                                                <span
                                                    class=" @if ($driver->certificate_drugs_alchoolemia < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    {{ $driver->certificate_drugs_alchoolemia }} </span><br>
                                                <strong class="dark:text-yellow-400">Consultas SIMIT:</strong> <br>
                                                <span
                                                    class=" @if ($driver->SIMIT_queries < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    {{ $driver->SIMIT_queries }}
                                                </span>
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong class="dark:text-yellow-400">psicosensométrico:</strong> <br>
                                                <span
                                                    class=" @if ($driver->psicosensometrico < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    {{ $driver->psicosensometrico }}
                                                </span>
                                                <br>
                                                <strong class="dark:text-yellow-400">Normas Transito:</strong> <br>
                                                <span
                                                    class=" @if ($driver->Rules_Transit < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    @if (!$driver->Rules_Transit)
                                                        Sin información
                                                    @else
                                                        {{ $driver->Rules_Transit }}
                                                    @endif
                                                </span>
                                                <br>
                                                <strong class="dark:text-yellow-400">Manejo Defensivo:</strong> <br>
                                                <span
                                                    class=" @if ($driver->Defensive_driving < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    @if (!$driver->Defensive_driving)
                                                        Sin información
                                                    @else
                                                        {{ $driver->Defensive_driving }}
                                                    @endif
                                                </span>
                                                <br>
                                                <strong class="dark:text-yellow-400">Primeros Auxilios:</strong> <br>
                                                <span
                                                    class=" @if ($driver->First_aid < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    @if (!$driver->First_aid)
                                                        Sin información
                                                    @else
                                                        {{ $driver->First_aid }}
                                                    @endif
                                                </span>

                                            </div>
                                            <div class="border-b text-black text80 dark:text-white ">


                                                <strong class="dark:text-yellow-400">Seguridad Vial:</strong>
                                                <br>
                                                <span
                                                    class=" @if ($driver->Road_safety < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif ">
                                                    @if (!$driver->Road_safety)
                                                        Sin información
                                                    @else
                                                        {{ $driver->Road_safety }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                </div>

                <div class="w-9-12 h-4-7 mt-12 mr-4 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg  overflow-x-hidden overflow-y-auto"
                    role="dialog" id="modal">

                    @foreach ($driversSelected as $driverSelected)
                        <header class="flex border-b-fuchsia-800 ">
                            <!-- title -->
                            <div class="grid grid-cols-3 gap-20">
                                <div class="col-span-2 ">
                                    <h1 class="content-start text-black dark:text-white text-4xl0-9">
                                        <strong class="dark:text-yellow-400"> conductor</strong>
                                        {{ $driverSelected->firstname }}
                                        {{ $driverSelected->lastname }}
                                        <strong class="dark:text-yellow-400"> docum.</strong>
                                        {{ $driverSelected->identificationcard }}
                                        <strong class="dark:text-yellow-400"> vinculado</strong>
                                        @foreach ($linked as $linkedy)
                                            @if ($linkedy->id == $driverSelected->Linked)
                                                {{ $linkedy->firstname }}
                                                {{ $linkedy->lastname }}
                                            @endif
                                        @endforeach
                                    </h1>
                                </div>
                                <div class="">
                                    <h1 class="content-center text-black dark:text-white text-4xl1">
                                        Estado:

                                        <span
                                            @if ($driverSelected->driver_status == 1) class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">   
                                        @else
                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> @endif
                                            {{ $state[$driverSelected->driver_status - 1] }} </span>
                                    </h1>
                                </div>
                            </div>

                        </header>
                        <!-- body -->

                        <div class="grid grid-cols-5 gap-4">
                            <div class="border-b text-black text80 dark:text-white "><strong
                                    class="dark:text-yellow-400">Nombre:</strong>
                                {{ $driverSelected->firstname }}
                                {{ $driverSelected->secondname }}
                                {{ $driverSelected->lastname }}
                                {{ $driverSelected->motherslastname }} <br>
                                <strong class="dark:text-yellow-400">
                                    @foreach ($identifitations as $id => $description_identification)
                                        @if ($id == $driverSelected->identification)
                                            {{ $description_identification }}
                                        @endif
                                    @endforeach
                                    N°:
                                </strong> {{ $driverSelected->identificationcard }}
                            </div>
                            <div class="border-b text-black text80 dark:text-white ">
                                <strong class="dark:text-yellow-400">Expedida:</strong> falta agregar este campo <br>
                                <strong class="dark:text-yellow-400">Fecha nacimiento:</strong>
                                {{ $driverSelected->birthdate }} <br>
                                <strong class="dark:text-yellow-400">Edad:</strong> {{ $driverSelected->age }}
                            </div>
                            <div class="border-b text-black text80 dark:text-white ">
                                <strong class="dark:text-yellow-400">Tipo Sexo:</strong>
                                {{ $driverSelected->type_sex == 'M' ? 'Masculino' : 'Femenino' }}
                                <br>
                                <strong class="dark:text-yellow-400">Estado Civil:</strong>
                                @foreach ($maritalStatuses as $id => $description_maritalstatus)
                                    @if ($id == $driverSelected->civil_status)
                                        {{ $description_maritalstatus }}
                                    @endif
                                @endforeach
                                <br>
                                <strong class="dark:text-yellow-400">Ciudad:</strong>
                                @foreach ($cities as $id => $city_name)
                                    @if ($id == $driverSelected->city)
                                        {{ $city_name }}
                                    @endif
                                @endforeach
                                <br>
                                <strong class="dark:text-yellow-400">Departamento:</strong>
                                @foreach ($provinces as $id => $department_name)
                                    @if ($id == $driverSelected->Department)
                                        {{ $department_name }}
                                    @endif
                                @endforeach
                                <br>
                                <strong class="dark:text-yellow-400">Pais:</strong>
                                @foreach ($countries as $id => $country_name)
                                    @if ($id == $driverSelected->country)
                                        {{ $country_name }}
                                    @endif
                                @endforeach
                            </div>
                            <div class="border-b text-black text80 dark:text-white ">
                                <strong class="dark:text-yellow-400">Dirección de residencia:</strong>
                                {{ $driverSelected->address }} <br>
                                <strong class="dark:text-yellow-400">Teléfono:</strong> {{ $driverSelected->phone }}
                                <br>
                                <strong class="dark:text-yellow-400">Celular:</strong>
                                {{ $driverSelected->phone_cellular }}
                            </div>
                            <div class="border-b text-black text80 dark:text-white ">
                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','8','')">
                                    <strong class="dark:text-yellow-400">EPS:</strong>
                                </button>
                                @foreach ($eps as $id => $description_eps)
                                    @if ($id == $driverSelected->eps)
                                        {{ $description_eps }}
                                    @endif
                                @endforeach
                                <br>

                                {{-- @php
                                
                                    $fend = Carbon::createFromDate($driverSelected->date_eps);
                                   $cantidad =  Carbon::createFromDate($this->$fend)->diffInDays($hoy);
                                @endphp --}}

                                <button class=""
                                    onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'8', '{{ $driverSelected->user_id }}',''),viewDate()">
                                    <span
                                        class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->date_eps < $hoy) bg-red-600 text-white @endif">
                                        <strong class="dark:text-yellow-400">Vigencia:</strong>
                                        {{ $driverSelected->date_eps }}
                                    </span>
                                </button>
                                <br>
                                <strong class="dark:text-yellow-400">Tipo sangre:</strong>
                                @foreach ($bloodTypes as $id => $blood_type_description)
                                    @if ($id == $driverSelected->blood_type)
                                        {{ $blood_type_description }}
                                    @endif
                                @endforeach
                                <br>
                                <strong class="dark:text-yellow-400">peso:</strong>
                                {{ $driverSelected->weight }} Kilos<br>
                                <strong class="dark:text-yellow-400">talla pantalon:</strong>
                                {{ $driverSelected->pant_size }} <br>
                                <strong class="dark:text-yellow-400">talla camisa:</strong>
                                {{ $driverSelected->shirt_size }} <br>
                                <strong class="dark:text-yellow-400">calzado:</strong>
                                {{ $driverSelected->shoe_size }}
                            </div>
                            <div class="border-b text-black text80 dark:text-white ">
                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','10','')">
                                    <strong class="dark:text-yellow-400">Cesantias:</strong>
                                </button>
                                @foreach ($layoffs as $id => $description_layoffs)
                                    @if ($id == $driverSelected->layoffs)
                                        {{ $description_layoffs }}
                                    @endif
                                @endforeach
                                <br>
                                <button class=""
                                    onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'10', '{{ $driverSelected->user_id }}',''),viewDate()">
                                    <span
                                        class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->date_layoffs < $hoy) bg-red-600 text-white @endif">
                                        <strong class="dark:text-yellow-400">Vigencia:</strong>
                                        {{ $driverSelected->date_layoffs }}
                                    </span>
                                </button><br>
                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','11','')">
                                    <strong class="dark:text-yellow-400">ARL:</strong>
                                </button>
                                @foreach ($alrs as $id => $description_arl)
                                    @if ($id == $driverSelected->arl)
                                        {{ $description_arl }}
                                    @endif
                                @endforeach
                                <br>
                                <button class=""
                                    onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'11', '{{ $driverSelected->user_id }}',''),viewDate()">
                                    <span
                                        class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->arl_date < $hoy) bg-red-600 text-white @endif">
                                        <strong class="dark:text-yellow-400">Vigencia:</strong>
                                        {{ $driverSelected->arl_date }}
                                    </span>
                                </button><br>
                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','9','')">
                                    <strong class="dark:text-yellow-400">Pensión:</strong>
                                </button>
                                @foreach ($pensions as $id => $description_pension)
                                    @if ($id == $driverSelected->pension)
                                        {{ $description_pension }}
                                    @endif
                                @endforeach
                                <br>
                                <button class=""
                                    onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'9', '{{ $driverSelected->user_id }}',''),viewDate()">
                                    <span
                                        class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->date_pension < $hoy) bg-red-600 text-white @endif">
                                        <strong class="dark:text-yellow-400">Vigencia:</strong>
                                        {{ $driverSelected->date_pension }}
                                    </span>
                                </button>
                            </div>
                            <div class="border-b text-black text80 dark:text-white ">
                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','12','')">
                                    <strong class="dark:text-yellow-400">Caja de compensación:</strong>
                                </button>
                                @foreach ($compensationboxes as $id => $description_compensationbox)
                                    @if ($id == $driverSelected->compensationbox)
                                        {{ $description_compensationbox }}
                                    @endif
                                @endforeach
                                <br>
                                <button class=""
                                    onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'12', '{{ $driverSelected->user_id }}',''),viewDate()">
                                    <span
                                        class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->date_compensationbox < $hoy) bg-red-600 text-white @endif">
                                        <strong class="dark:text-yellow-400">Vigencia:</strong>
                                        {{ $driverSelected->date_compensationbox }}
                                    </span>
                                </button><br>
                            </div>
                            <div class="border-b text-black text80 dark:text-white ">
                                <strong class="dark:text-yellow-400">Nombre Familiar:</strong>
                                {{ $driverSelected->family_names }} <br>
                                <strong class="dark:text-yellow-400">
                                    @foreach ($identifitations as $id => $description_identification)
                                        @if ($id == $driverSelected->family_document_type)
                                            {{ $description_identification }}
                                        @endif
                                    @endforeach
                                    N°:
                                </strong> {{ $driverSelected->identificationcard_family }} <br>
                            </div>
                            <div class="border-b text-black text80 dark:text-white ">
                                <strong class="dark:text-yellow-400">Dirección:</strong>
                                {{ $driverSelected->family_address }} <br>
                                <strong class="dark:text-yellow-400">Telefono:</strong>
                                {{ $driverSelected->family_phone }} <br>
                                <strong class="dark:text-yellow-400">Celular:</strong>
                                {{ $driverSelected->family_phone_cellular }} <br>
                                <strong class="dark:text-yellow-400">Parentezco:</strong>
                                @foreach ($relationships as $id => $description_relationship)
                                    @if ($id == $driverSelected->relationship)
                                        {{ $description_relationship }}
                                    @endif
                                @endforeach
                            </div>
                            <div class="border-b text-black text80 dark:text-white ">
                                <strong class="dark:text-yellow-400">Contrato:</strong>
                                @foreach ($bondings as $id => $bonding_type_description)
                                    @if ($id == $driverSelected->bonding_type)
                                        {{ $bonding_type_description }}
                                    @endif
                                @endforeach
                                <br>
                                <strong class="dark:text-yellow-400">Salario:</strong>
                                ${{ number_format($driverSelected->salary, 2, ',', '.') }}<br>
                                <strong class="dark:text-yellow-400">Aux. Transporte:</strong>
                                ${{ number_format($driverSelected->aid_transport, 2, ',', '.') }}
                            </div>
                            @foreach ($beneficiaries as $beneficiary)
                                @if ($beneficiary->user_id == $driverSelected->user_id)
                                    <div class="border-b text-black text80 dark:text-white ">
                                        <button id="historicos"
                                            onclick="historicos('{{ $driverSelected->user_id }}','13','{{ $beneficiary->id }}')">
                                            <strong class="dark:text-yellow-400">Tipo Beneficiario:</strong>
                                        </button>
                                        <br>

                                        @if ($beneficiaryType[$beneficiary->beneficiaryType - 1] == 'Hijo o Hijastro')
                                            <span class="hover:bg-blue-700 hover:text-black rounded-3xl p-1">
                                                <button class=""
                                                    onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'13', '{{ $driverSelected->user_id }}','{{ $beneficiary->id }}'),hideDate()">
                                                    {{ $beneficiaryType[$beneficiary->beneficiaryType - 1] }}
                                                </button>
                                            </span>
                                        @else
                                            {{ $beneficiaryType[$beneficiary->beneficiaryType - 1] }}
                                        @endif
                                        <br>
                                        <strong class="dark:text-yellow-400">Documento Beneficiarios:</strong> <br>
                                        {{ $beneficiary->document }} <br>
                                        <strong class="dark:text-yellow-400">Nombre Completo:</strong> <br>
                                        {{ $beneficiary->full_name }}
                                    </div>
                                @endif
                            @endforeach
                            <div class="border-b text-black text80 dark:text-white ">
                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','0','')">
                                    <strong class="dark:text-yellow-400">Licencia:</strong>
                                </button>
                                {{ $driverSelected->license_number }} <br>
                                <strong class="dark:text-yellow-400">Categoria:</strong>
                                @foreach ($licenseCategories as $id => $code_licenseCategory)
                                    @if ($id == $driverSelected->license_category)
                                        {{ $code_licenseCategory }}
                                    @endif
                                @endforeach
                                <br>
                                <strong class="dark:text-yellow-400">Vigencia:</strong> <br>
                                <span
                                    class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->license_expiration < $hoy) bg-red-600 text-white @endif">
                                    <button class=""
                                        onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'0', '{{ $driverSelected->user_id }}',''),viewDate()">
                                        {{ $driverSelected->license_expiration }}
                                    </button>
                                </span>
                                <br>
                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','1','')">
                                    <strong class="dark:text-yellow-400">Drogas y Alcoholemia:</strong>
                                </button>
                                <br>
                                <span
                                    class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->certificate_drugs_alchoolemia < $hoy) bg-red-600 text-white @endif">
                                    <button class=""
                                        onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'1', '{{ $driverSelected->user_id }}',''),viewDate()">
                                        {{ $driverSelected->certificate_drugs_alchoolemia }}
                                    </button></span><br>
                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','2','')">
                                    <strong class="dark:text-yellow-400">Consultas SIMIT:</strong>
                                </button> <br>
                                <span
                                    class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->SIMIT_queries < $hoy) bg-red-600 text-white @endif">
                                    <button class=""
                                        onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'2', '{{ $driverSelected->user_id }}',''),viewDate()">
                                        {{ $driverSelected->SIMIT_queries }}

                                    </button></span>
                            </div>
                            <div class="border-b text-black text80 dark:text-white ">

                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','3','')">
                                    <strong class="dark:text-yellow-400">psicosensométrico:</strong>
                                </button>
                                <br>
                                <span
                                    class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->psicosensometrico < $hoy) bg-red-600 text-white @endif">
                                    <button class=""
                                        onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'3', '{{ $driverSelected->user_id }}',''),viewDate()">
                                        {{ $driverSelected->psicosensometrico }}

                                    </button>
                                </span>
                                <br>
                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','4','')">
                                    <strong class="dark:text-yellow-400">Normas Transito:</strong>
                                </button>
                                <br>
                                <span
                                    class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->Rules_Transit < $hoy) bg-red-600 text-white @endif">
                                    <button class=""
                                        onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'4', '{{ $driverSelected->user_id }}',''),viewDate()">
                                        @if (!$driverSelected->Rules_Transit)
                                            Sin información
                                        @else
                                            {{ $driverSelected->Rules_Transit }}
                                        @endif

                                    </button>
                                </span>
                                <br>
                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','5','')">
                                    <strong class="dark:text-yellow-400">Manejo_Defensivo:</strong>
                                </button>
                                <br>
                                <span
                                    class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->Defensive_driving < $hoy) bg-red-600 text-white @endif">
                                    <button class=""
                                        onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'5', '{{ $driverSelected->user_id }}',''),viewDate()">
                                        @if (!$driverSelected->Defensive_driving)
                                            Sin información
                                        @else
                                            {{ $driverSelected->Defensive_driving }}
                                        @endif

                                    </button>
                                </span>
                                <br>
                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','6','')">
                                    <strong class="dark:text-yellow-400">Primeros Auxilios:</strong>
                                </button>
                                <br>
                                <span
                                    class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->First_aid < $hoy) bg-red-600 text-white @endif">
                                    <button class=""
                                        onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'6', '{{ $driverSelected->user_id }}',''),viewDate()">
                                        @if (!$driverSelected->First_aid)
                                            Sin información
                                        @else
                                            {{ $driverSelected->First_aid }}
                                        @endif

                                    </button>
                                </span>
                            </div>
                            <div class="border-b text-black text80 dark:text-white ">

                                <button id="historicos"
                                    onclick="historicos('{{ $driverSelected->user_id }}','7','')">
                                    <strong class="dark:text-yellow-400"> Seguridad Vial:</strong>
                                </button>
                                <br>
                                <span
                                    class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($driverSelected->Road_safety < $hoy) bg-red-600 text-white @endif ">
                                    <button class=""
                                        onclick="modalDocumentation('{{ $driverSelected->identificationcard }}' ,'7', '{{ $driverSelected->user_id }}',''),viewDate()">
                                        @if (!$driverSelected->Road_safety)
                                            Sin información
                                        @else
                                            {{ $driverSelected->Road_safety }}
                                        @endif
                                    </button>
                                </span>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    {{-- componentes de modal --}}

    <!--Modal Document -->

    <div id="modalDoc" wire:ignore
        class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-md30"
            role="dialog" id="modalDoc">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-center border-b-fuchsia-800 border-b">
                <!-- Modal title -->
                <h1 class="dark:text-white">Nueva Documentación</h1>
                <button
                    class="ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                    aria-label="close" onclick="closeModalDoc()">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="-mt-11 mb-6">
                <!-- Modal description -->
                <form role="form" action="" method="post" id="frmDocument"
                    class="f1 px-4 my-32 max-w-3xl mx-auto space-y-6">
                    <div
                        class="mt-11 border-gray-50-s container px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9 ">
                        <div class="flex space-x-4">

                            <div class="w-full">
                                <label id="" class="text-gray-700 dark:text-gray-400">Documento</label>

                                <input
                                    class="w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    type="file" id="fileDocument" name="fileDocument"
                                    wire:model.defer="fileDocument" onchange="upDocument()" />
                            </div>

                        </div>
                        <div class="flex space-x-4">

                            <div class="w-full">
                                <label id="labelDateDocument" class="text-gray-700 dark:text-gray-400">Nueva
                                    Fecha</label>

                                <input
                                    class="w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    type="text" id="dateDocument" name="dateDocument" readonly
                                    wire:model.defer="dateDocument" onchange="fechasSet('dateDocument')" />
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div wire:ignore
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button onclick="closeModalDoc()"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
                <button id="" wire:click="updateDocumentation"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Accept
                </button>
            </div>
        </div>
    </div>

    <!--end Modal Document -->

    <!--Modal historicos -->

    <div id="modalHistoricos" wire:ignore.self
        class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div class="w-9-9 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 overflow-x-hidden overflow-y-auto"
            role="dialog" id="modalHistoricos">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-center border-b-fuchsia-800 border-b">
                <!-- Modal title -->
                <h1 class="dark:text-white">Historial de Documentos @if (!is_null($title))
                        {{ $title }}
                    @endif
                </h1>
                <button onclick="closeModalHistorico()"
                    class="ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                    aria-label="close">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="scroll h-4-7 overflow-y-auto">


                <div class="mt-4 mb-6">
                    <!-- Modal description -->
                    <div class="f1 px-4 my-32 max-w-3xl mx-auto space-y-6">
                        <div
                            class="mt-11 border-gray-50-s container py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9 ">
                            @if (!is_null($Lists))

                                @if ($Lists->count())
                                    <table class="w-full">
                                        <thead>
                                            <tr
                                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                                <th class="pl-4 py-2">
                                                    NOMBRE
                                                </th>
                                                <th class="px-3 py-2">
                                                    DOCUMENTO
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                            @foreach ($Lists as $List)
                                                <tr class="text-gray-700 dark:text-gray-400">
                                                    <td class="px-2 py-1 text-sm">
                                                        {{ is_array($List) ? $List['document_name'] : $List->document_name }}
                                                    </td>
                                                    <td class="px-2 py-1">

                                                        @if ((is_array($List) ? $List['extension'] : $List->extension) == 'pdf')
                                                            <button id="documentPdf" class="icon-red"
                                                                onclick="documentPdf('{{ asset(is_array($List) ? $List['directory'] : $List->directory) }}','{{ is_array($List) ? $List['document_name'] : $List->document_name }}')"><i
                                                                    class="fas fa-file-pdf"></i>
                                                            </button>
                                                        @elseif (
                                                            (is_array($List) ? $List['extension'] : $List->extension) == 'jpg' ||
                                                                (is_array($List) ? $List['extension'] : $List->extension) == 'png')
                                                            <button id="documentImage" class="icon-green"
                                                                onclick="documentImage('{{ asset(is_array($List) ? $List['directory'] : $List->directory) }}','{{ is_array($List) ? $List['document_name'] : $List->document_name }}')"><i
                                                                    class="fas fa-images"></i>
                                                            </button>
                                                        @else
                                                            <i class="fas fa-exclamation-circle icon-red"></i> <br>
                                                            documento no legible
                                                        @endif

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                @else
                                    <p class="rounded-3xl p-1 bg-red-600 dark:text-yellow-400 text-white">No se ha
                                        registrado información para mostrar</p>
                                @endif


                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
            </div>
        </div>
    </div>

    <!--end Modal historicod -->

</div>

@section('scripts')
    <script>
        // abriendo modal de historicos documentos
        Livewire.on('openModalHistorico', () => {

            viewhideinputs('modalHistoricos', 'block', 'hidden');
        })

        // enviando los datos para que los reciba la modal editar
        function historicos(id, document, bemeficiary) {
            Livewire.emit('Historicos', [id], [document], [bemeficiary]);
        }

        function closeModalHistorico() {
            viewhideinputs('modalHistoricos', 'hidden', 'block');
        }

        function documentImage(file, name) {
            swal.fire({
                // title: 'Sweet!',
                imageUrl: `${file}`,
                // text: '<strong></strong>',
                html: '<strong>' + `${name}` + '</strong>',
                imageWidth: 800,
                imageHeight: 400,
                imageAlt: '',
            })
        }
        // $('#documentImage').on('click', function() {

        // });

        function documentPdf(file, name) {
            swal.fire({
                // title: '<strong>HTML <u>example</u></strong>',
                // icon: 'info',
                html: '<embed src="' + `${file}` + '" type="application/pdf" width="420px" height="400px"> <br> ' +
                    '<strong>' + `${name}` + '</strong>',
                // showCloseButton: true,
                // showCancelButton: true,
                focusConfirm: true,
                confirmButtonText: '<h1>OK</h1>',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                // cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
                // cancelButtonAriaLabel: 'Thumbs down'
            })
        }

        // $('#documentPdf').on('click', function(id) {

        // });

        function modalDocumentation(doc, id, user, idbeneficiary) {
            // ('{{ $driverSelected->identificationcard }}' ,'8', '{{ $driverSelected->user_id }}')
            viewhideinputs('modalDoc', 'block', 'hidden');
            @this.set('identificationcard', doc);
            @this.set('paramText', id);
            @this.set('user', user);
            @this.set('idbeneficiary', idbeneficiary);
            // Livewire.emit('updateDocumentation');

        }

        function hideDate() {
            viewhideinputs('dateDocument', 'Inactive', 'Active');
            viewhideinputs('labelDateDocument', 'Inactive', 'Active');
        }

        function viewDate() {
            viewhideinputs('dateDocument', 'Active', 'Inactive');
            viewhideinputs('labelDateDocument', 'Active', 'Inactive');
        }

        Livewire.on('newDocument', (exit) => {

            exit = exit.exit;

            if (exit == 1) {
                swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Nuevo Documento Guardado sactisfactoriamente',
                    showConfirmButton: false,
                    timer: 1500
                })
                closeModalDoc();
            } else if (exit == 2) {
                swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'La fecha no puede ser menor o igual a la fecha de hoy',
                    showConfirmButton: false
                    // timer: 1500
                })
            } else if (exit == 3) {
                swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'La fecha no puede ser menor o igual a la ultima fecha puesta para este documento',
                    showConfirmButton: false
                    // timer: 1500
                })
            } else if (exit == 4) {
                swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Debes escoger una fecha y un documento valido',
                    showConfirmButton: false
                    // timer: 1500
                })
            }

            // closeModalDoc();
        })

        function closeModalDoc() {
            viewhideinputs('modalDoc', 'hidden', 'block');
            document.getElementById("fileDocument").value = "";
            $('#frmDocument').trigger("reset");
        }

        jQuery('#dateDocument').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });


        function fechasSet(id) {

            $('#' + id).on('change', function(e) {
                @this.set(id, e.target.value);
            });
        }

        function viewhideinputs(id, adhere, stirring) {

            document.getElementById(id).classList.remove(stirring);
            document.getElementById(id).classList.add(adhere);
        }

        // setInterval(tiempo_certificados,28800000);
        // setInterval(tiempo_certificados, 360000); //1800000

        function tiempo_certificados() {
            Livewire.emit('expiration');
        }

        Livewire.on('warning', () => {
            swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        })

        function upDocument() {
            let timerInterval
            swal.fire({
                title: 'Cargando...',
                html: 'Cargando documento <b></b> milliseconds.', //Cargando la información del sistema en
                timer: 4000,
                timerProgressBar: true,
                didOpen: () => {
                    swal.showLoading()
                    const b = swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === swal.DismissReason.timer) {
                    // console.log('document above')//documento arribba

                }
            })
        }
    </script>
@endsection
