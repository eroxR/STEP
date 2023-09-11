<div>

    <div class="py-12 mb-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="roundedx1 mt5 mr3 fixed inset-y-0 flex items-end bg-black bg-opacity-50 sm:items-center">
                <input id="input"
                    class="mt0-5 w19 ml1-4 top-0 absolute mr-4 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text" placeholder="Buscar X N° placa" wire:model="search">
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
                    Total Vehiculos = {{ $totals }}
                </span>
                <span
                    class="absolute top-0 ml40 mt1 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                    Vehiculos Habilitados {{ $habilitado }}
                </span>
                <span
                    class="absolute top-0 ml57 mt1 px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                    Vehiculos Inhabilitados {{ $inhabilitado }}
                </span>
                <span wire:click="$set('filtre',4)"
                    class="absolute top-0 ml75 mt1 px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                    Vehiculos Inactivos {{ $inactivo }}
                </span>
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
                    <header class="flex justify-center border-b-fuchsia-800 border-b bg-orange-500 rounded-lg">
                        <!-- title -->
                        <button id="title" wire:click="order()">{{ __('vehicles List') }}</button>
                    </header>
                    <div class="h-4-7 overflow-y-auto">
                        <ul>
                            @foreach ($vehicles as $vehicle)
                                <li class="id hover:bg-orange-500 hover:text-white border-b rounded-lg">
                                    <a wire:click="$set('ide',{{ $vehicle->id }})" href="#" class="ml30">
                                        {{ $vehicle->plate_vehicle }}
                                    </a>

                                    <div
                                        class="descrip absolute rounded-lg top-0 p1-6 h91 w77 mt3-5 ml18-6 bg-white dark:bg-gray-800 hidden">
                                        <header class="flex border-b-fuchsia-800 ">
                                            <!-- title -->
                                            <div class="grid grid-cols-3 gap-12">
                                                <div class="col-span-1 ">
                                                    <h1 class="content-start text-black dark:text-white">
                                                        <strong class="dark:text-yellow-400"> placa</strong>
                                                        <span
                                                            class="content-center text-black dark:text-white ">{{ $vehicle->plate_vehicle }}</span>
                                                        <br>
                                                        <strong class="dark:text-yellow-400"> Lateral:</strong>
                                                        <span
                                                            class="content-center text-black dark:text-white ">{{ $vehicle->side_vehicle }}</span>
                                                        <br>
                                                        <span class="content-center text-black dark:text-white "><strong
                                                                class="dark:text-yellow-400">{{ $ownerType[$vehicle->internal_external_owner_type - 1] }}</strong></span>
                                                    </h1>
                                                </div>
                                                <div class="">
                                                    <h1 class="content-center text-black dark:text-white text-4xl1">
                                                        Estado:

                                                        <span
                                                            @if ($vehicle->state_vehicle == 1) class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">   
                                                            @else @if ($vehicle->state_vehicle == 2) class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">  
                                                            @else @if ($vehicle->state_vehicle == 3) class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700"> 
                                                            @else class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"> @endif
                                                            @endif
                            @endif
                            {{ $state[$vehicle->state_vehicle - 1] }} </span>

                            </h1>
                    </div>
                    <div>
                        <h1 class="content-center text-black dark:text-white">
                            <strong class="dark:text-yellow-400"> conductor</strong>
                            @foreach ($drives as $drive)
                                @if ($drive->id == $vehicle->driver_id)
                                    {{ $drive->firstname }}
                                    {{ $drive->secondname }}
                                    {{ $drive->lastname }}
                                    {{ $drive->motherslastname }}
                                @endif
                            @endforeach
                            <br>
                            <strong class="dark:text-yellow-400"> dueño</strong>
                            @foreach ($linked as $linkedy)
                                @if ($linkedy->id == $vehicle->owner_vehicle)
                                    {{ $linkedy->firstname }}
                                    {{ $linkedy->secondname }}
                                    {{ $linkedy->lastname }}
                                    {{ $linkedy->motherslastname }}
                                @endif
                            @endforeach
                        </h1>
                    </div>
                </div>

                </header>
                <!-- body -->
                <div class="grid grid-cols-5 gap-4">

                    <div class="border-b text-black text80 dark:text-white ">
                        <strong class="dark:text-yellow-400">Placa:</strong>
                        {{ $vehicle->plate_vehicle }} <br>
                        <strong class="dark:text-yellow-400">Modelo:</strong>
                        {{ $vehicle->model_vehicle }} <br>
                        <strong class="dark:text-yellow-400">Tipo de vehiculo:</strong>

                        @foreach ($vehicle_types as $id => $vehicle_type)
                            @if ($vehicle->vehicle_type == $id)
                                {{ $vehicle_type }}
                            @endif
                        @endforeach
                        <br>
                        <strong class="dark:text-yellow-400">Infraestructura:</strong>
                        @foreach ($vehicle_classes as $id => $vehicle_class)
                            @if ($vehicle->infrastructure_vehicle == $id)
                                {{ $vehicle_class }}
                            @endif
                        @endforeach
                        <br>
                        <strong class="dark:text-yellow-400">Marca:</strong>
                        {{ $vehicle->brand_vehicle }}
                    </div>
                    <div class="border-b text-black text80 dark:text-white ">
                        <strong class="dark:text-yellow-400">Cilindraje:</strong>
                        {{ $vehicle->cylinder_vehicle }} <br>
                        <strong class="dark:text-yellow-400">Número Chasis:</strong>
                        {{ $vehicle->vehicle_chassis_number }} <br>
                        <strong class="dark:text-yellow-400">Número Motor:</strong>
                        {{ $vehicle->engine_number }}
                    </div>
                    <div class="border-b text-black text80 dark:text-white ">
                        <strong class="dark:text-yellow-400">Número tarjeta de
                            propiedad:</strong>
                        {{ $vehicle->property_card_number }} <br>
                        <strong class="dark:text-yellow-400">Fecha de ingreso:</strong>
                        {{ $vehicle->admission_date }} <br>
                        <strong class="dark:text-yellow-400">Fecha de retiro:</strong>
                        {{ $vehicle->vehicle_pickup_date }}
                    </div>
                    <div class="border-b text-black text80 dark:text-white ">
                        <strong class="dark:text-yellow-400">Capacidad de pasajeros:</strong>
                        {{ $vehicle->number_passenger }} <br>
                        <strong class="dark:text-yellow-400">Servicio:</strong>
                        {{ $vehicle->service }} <br>
                        <strong class="dark:text-yellow-400">Color:</strong>
                        {{ $vehicle->color_vehicle }} <br>
                        <strong class="dark:text-yellow-400">Tipo dirección:</strong>
                        {{ $typeDirection[$vehicle->type_direction - 1] }} <br>
                        <strong class="dark:text-yellow-400">Dimensión del rin:</strong>
                        @foreach ($dimensionRims as $dimensionRim)
                            @if ($dimensionRim->id == $vehicle->dimension_rims)
                                {{ $dimensionRim->type_rims }} -
                                {{ $dimensionRim->inch }}
                            @endif
                        @endforeach
                    </div>
                    <div class="border-b text-black text80 dark:text-white ">
                        <strong class="dark:text-yellow-400">Suspensión frontal:</strong>
                        {{ $suspension[$vehicle->front_suspension - 1] }} <br>
                        <strong class="dark:text-yellow-400">Suspensión trasera:</strong>
                        {{ $suspension[$vehicle->rear_suspension - 1] }} <br>
                        <strong class="dark:text-yellow-400">Freno delantero:</strong>

                        @foreach ($braketypes as $id => $braketype)
                            @if ($vehicle->rear_brake_type == $id)
                                {{ $braketype }}
                            @endif
                        @endforeach
                        <br>
                        <strong class="dark:text-yellow-400">Freno Trasero:</strong>

                        @foreach ($braketypes as $id => $braketype)
                            @if ($vehicle->front_brake_type == $id)
                                {{ $braketype }}
                            @endif
                        @endforeach
                    </div>
                    <div class="border-b text-black text80 dark:text-white ">
                        <strong class="dark:text-yellow-400">Tarjeta de operación:</strong>
                        {{ $vehicle->card_operation }}
                        <br>
                        <strong class="dark:text-yellow-400">Vigencia:</strong> <br>
                        <span class=" @if ($vehicle->expiration_card_operation < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">

                            @if (!$vehicle->expiration_card_operation)
                                Sin información
                            @else
                                {{ $vehicle->expiration_card_operation }}
                            @endif
                        </span>
                        <br>
                        <strong class="dark:text-yellow-400">Preventiva:</strong> <br>
                        <span class=" @if ($vehicle->expiration_preventive < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                            <strong class="dark:text-yellow-400">Vigencia:</strong>

                            @if (!$vehicle->expiration_preventive)
                                Sin información
                            @else
                                {{ $vehicle->expiration_preventive }}
                            @endif
                        </span>
                    </div>
                    <div class="border-b text-black text80 dark:text-white ">
                        <strong class="dark:text-yellow-400">SOAT - Seguro
                            Obligatorio:</strong> <br>
                        <span class=" @if ($vehicle->secure_end_date < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                            <strong class="dark:text-yellow-400">Vigencia:</strong>
                            @if (!$vehicle->secure_end_date)
                                Sin información
                            @else
                                {{ $vehicle->secure_end_date }}
                            @endif
                        </span>
                        <br>
                        <strong class="dark:text-yellow-400">Tecnicomecanico:</strong> <br>
                        <span class=" @if ($vehicle->technomechanical_end_date < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                            <strong class="dark:text-yellow-400">Vigencia:</strong>

                            @if (!$vehicle->technomechanical_end_date)
                                Sin información
                            @else
                                {{ $vehicle->technomechanical_end_date }}
                            @endif
                        </span>
                        <br>
                    </div>
                    <div class="border-b text-black text80 dark:text-white ">
                        <strong class="dark:text-yellow-400">Extracontractual:</strong> <br>
                        <span class=" @if ($vehicle->certificate_extracontractual < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                            <strong class="dark:text-yellow-400">Vigencia:</strong>

                            @if (!$vehicle->certificate_extracontractual)
                                Sin información
                            @else
                                {{ $vehicle->certificate_extracontractual }}
                            @endif
                        </span>
                        <br>
                        <strong class="dark:text-yellow-400">Civil Contractual:</strong> <br>
                        <span class=" @if ($vehicle->civil_contractual < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                            <strong class="dark:text-yellow-400">Vigencia:</strong>

                            @if (!$vehicle->civil_contractual)
                                Sin información
                            @else
                                {{ $vehicle->civil_contractual }}
                            @endif
                        </span>
                        <br>
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

        @foreach ($vehiclesSelected as $vehiclesSelected)
            <header class="flex border-b-fuchsia-800 ">
                <!-- title -->
                <div class="grid grid-cols-3 gap-12">
                    <div class="col-span-1 ">
                        <h1 class="content-start text-black dark:text-white ">
                            <strong class="dark:text-yellow-400"> placa</strong>
                            <span
                                class="content-center text-black dark:text-white ">{{ $vehiclesSelected->plate_vehicle }}</span>
                            <br>
                            <strong class="dark:text-yellow-400"> Lateral</strong>
                            <span
                                class="content-center text-black dark:text-white ">{{ $vehiclesSelected->side_vehicle }}</span>
                            <br>
                            <span class="content-center text-black dark:text-white "><strong
                                    class="dark:text-yellow-400">{{ $ownerType[$vehiclesSelected->internal_external_owner_type - 1] }}</strong></span>
                        </h1>
                    </div>
                    <div class="">
                        <h1 class="content-center text-black dark:text-white text-4xl1">
                            Estado:

                            <span
                                @if ($vehiclesSelected->state_vehicle == 1) class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">   
                                        @else @if ($vehiclesSelected->state_vehicle == 2) class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">  
                                        @else @if ($vehiclesSelected->state_vehicle == 3) class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700"> 
                                        @else class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"> @endif
                                @endif
        @endif
        {{ $state[$vehiclesSelected->state_vehicle - 1] }} </span>

        </h1>
    </div>
    <div>
        <h1 class="content-center text-black dark:text-white">
            <strong class="dark:text-yellow-400"> conductor</strong>
            @foreach ($drives as $drive)
                @if ($drive->id == $vehiclesSelected->driver_id)
                    {{ $drive->firstname }}
                    {{ $drive->secondname }}
                    {{ $drive->lastname }}
                    {{ $drive->motherslastname }}
                @endif
            @endforeach
            <br>
            <strong class="dark:text-yellow-400"> dueño</strong>
            @foreach ($linked as $linkedy)
                @if ($linkedy->id == $vehiclesSelected->owner_vehicle)
                    {{ $linkedy->firstname }}
                    {{ $linkedy->secondname }}
                    {{ $linkedy->lastname }}
                    {{ $linkedy->motherslastname }}
                @endif
            @endforeach
        </h1>
    </div>
</div>

</header>
<!-- body -->

<div class="grid grid-cols-5 gap-4">

    <div class="border-b text-black text80 dark:text-white ">
        <strong class="dark:text-yellow-400">Placa:</strong>
        {{ $vehiclesSelected->plate_vehicle }} <br>
        <strong class="dark:text-yellow-400">Modelo:</strong>
        {{ $vehiclesSelected->model_vehicle }} <br>
        <strong class="dark:text-yellow-400">Tipo de vehiculo:</strong>
        @foreach ($vehicle_types as $id => $vehicle_type)
            @if ($vehiclesSelected->vehicle_type == $id)
                {{ $vehicle_type }}
            @endif
        @endforeach
        <br>
        <strong class="dark:text-yellow-400">Infraestructura:</strong>
        @foreach ($vehicle_classes as $id => $vehicle_class)
            @if ($vehiclesSelected->infrastructure_vehicle == $id)
                {{ $vehicle_class }}
            @endif
        @endforeach
        <br>
        <strong class="dark:text-yellow-400">Marca:</strong>
        {{ $vehiclesSelected->brand_vehicle }}
    </div>
    <div class="border-b text-black text80 dark:text-white ">
        <strong class="dark:text-yellow-400">Cilindraje:</strong>
        {{ $vehiclesSelected->cylinder_vehicle }} <br>
        <strong class="dark:text-yellow-400">Número Chasis:</strong>
        {{ $vehiclesSelected->vehicle_chassis_number }} <br>
        <strong class="dark:text-yellow-400">Número Motor:</strong>
        {{ $vehiclesSelected->engine_number }}
    </div>
    <div class="border-b text-black text80 dark:text-white ">
        <button id="historicos" onclick="historicos('{{ $vehiclesSelected->id }}','0')">
            <strong class="dark:text-yellow-400">Número tarjeta de propiedad:</strong>
        </button>
        <br>
        <a class=""
            onclick="modalDocumentation('{{ $vehiclesSelected->plate_vehicle }}' ,'0', '{{ $vehiclesSelected->id }}'),viewDate()">
            <span {{-- class="hover:bg-blue-700 hover:text-black rounded-3xl p-1" --}}>
                {{ $vehiclesSelected->property_card_number }}
            </span>
        </a>
        <br>
        <strong class="dark:text-yellow-400">Fecha de ingreso:</strong>
        {{ $vehiclesSelected->admission_date }} <br>
        <strong class="dark:text-yellow-400">Fecha de retiro:</strong>
        {{ $vehiclesSelected->vehicle_pickup_date }}
    </div>

    <div class="border-b text-black text80 dark:text-white ">
        <strong class="dark:text-yellow-400">Capacidad de pasajeros:</strong>
        {{ $vehiclesSelected->number_passenger }} <br>
        <strong class="dark:text-yellow-400">Servicio:</strong>
        {{ $vehiclesSelected->service }} <br>
        <strong class="dark:text-yellow-400">Color:</strong>
        {{ $vehiclesSelected->color_vehicle }} <br>
        <strong class="dark:text-yellow-400">Tipo dirección:</strong>
        {{ $typeDirection[$vehiclesSelected->type_direction - 1] }} <br>
        <strong class="dark:text-yellow-400">Dimensión del rin:</strong>
        @foreach ($dimensionRims as $dimensionRim)
            @if ($dimensionRim->id == $vehiclesSelected->dimension_rims)
                {{ $dimensionRim->type_rims }} -
                {{ $dimensionRim->inch }}
            @endif
        @endforeach
    </div>
    <div class="border-b text-black text80 dark:text-white ">
        <strong class="dark:text-yellow-400">Suspensión frontal:</strong>
        {{ $suspension[$vehiclesSelected->front_suspension - 1] }} <br>
        <strong class="dark:text-yellow-400">Suspensión trasera:</strong>
        {{ $suspension[$vehiclesSelected->rear_suspension - 1] }} <br>
        <strong class="dark:text-yellow-400">Freno delantero:</strong>
        @foreach ($braketypes as $id => $braketype)
            @if ($vehiclesSelected->rear_brake_type == $id)
                {{ $braketype }}
            @endif
        @endforeach
        <br>
        <strong class="dark:text-yellow-400">Freno Trasero:</strong>
        @foreach ($braketypes as $id => $braketype)
            @if ($vehiclesSelected->front_brake_type == $id)
                {{ $braketype }}
            @endif
        @endforeach
    </div>


    <div class="border-b text-black text80 dark:text-white ">
        <button id="historicos" onclick="historicos('{{ $vehiclesSelected->id }}','3')">
            <strong class="dark:text-yellow-400">Tarjeta de operación:</strong>
        </button>
        {{ $vehiclesSelected->card_operation }}
        <br>
        <strong class="dark:text-yellow-400">Vigencia:</strong> <br>
        <span
            class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($vehiclesSelected->expiration_card_operation < $hoy) bg-red-600 text-white @endif">
            <button class=""
                onclick="modalDocumentation('{{ $vehiclesSelected->plate_vehicle }}' ,'3', '{{ $vehiclesSelected->id }}'),viewDate()">

                @if (!$vehiclesSelected->expiration_card_operation)
                    Sin información
                @else
                    {{ $vehiclesSelected->expiration_card_operation }}
                @endif
            </button>
        </span>
        <br>
        <button id="historicos" onclick="historicos('{{ $vehiclesSelected->id }}','4')">
            <strong class="dark:text-yellow-400">Preventiva:</strong>
        </button>
        <br>
        <button class=""
            onclick="modalDocumentation('{{ $vehiclesSelected->plate_vehicle }}' ,'4', '{{ $vehiclesSelected->id }}'),hideDate()">
            <span
                class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($vehiclesSelected->expiration_preventive < $hoy) bg-red-600 text-white @endif">
                <strong class="dark:text-yellow-400">Vigencia:</strong>

                @if (!$vehiclesSelected->expiration_preventive)
                    Sin información
                @else
                    {{ $vehiclesSelected->expiration_preventive }}
                @endif
            </span>
        </button>
    </div>

    <div class="border-b text-black text80 dark:text-white ">
        <button id="historicos" onclick="historicos('{{ $vehiclesSelected->id }}','1')">
            <strong class="dark:text-yellow-400">SOAT - Seguro Obligatorio:</strong>
        </button>
        <br>
        <button class=""
            onclick="modalDocumentation('{{ $vehiclesSelected->plate_vehicle }}' ,'1', '{{ $vehiclesSelected->id }}'),hideDate()">
            <span
                class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($vehiclesSelected->secure_end_date < $hoy) bg-red-600 text-white @endif">
                <strong class="dark:text-yellow-400">Vigencia:</strong>

                @if (!$vehiclesSelected->secure_end_date)
                    Sin información
                @else
                    {{ $vehiclesSelected->secure_end_date }}
                @endif
            </span>
        </button>
        <br>
        <button id="historicos" onclick="historicos('{{ $vehiclesSelected->id }}','2')">
            <strong class="dark:text-yellow-400">Tecnicomecanica:</strong>
        </button>
        <br>
        <button class=""
            onclick="modalDocumentation('{{ $vehiclesSelected->plate_vehicle }}' ,'2', '{{ $vehiclesSelected->id }}'),hideDate()">
            <span
                class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($vehiclesSelected->technomechanical_end_date < $hoy) bg-red-600 text-white @endif">
                <strong class="dark:text-yellow-400">Vigencia:</strong>

                @if (!$vehiclesSelected->technomechanical_end_date)
                    Sin información
                @else
                    {{ $vehiclesSelected->technomechanical_end_date }}
                @endif
            </span>
        </button>
    </div>

    <div class="border-b text-black text80 dark:text-white ">
        <button id="historicos" onclick="historicos('{{ $vehiclesSelected->id }}','5')">
            <strong class="dark:text-yellow-400">Extracontractual:</strong>
        </button>
        <br>
        <button class=""
            onclick="modalDocumentation('{{ $vehiclesSelected->plate_vehicle }}' ,'5', '{{ $vehiclesSelected->id }}'),hideDate()">
            <span
                class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($vehiclesSelected->certificate_extracontractual < $hoy) bg-red-600 text-white @endif">
                <strong class="dark:text-yellow-400">Vigencia:</strong>

                @if (!$vehiclesSelected->certificate_extracontractual)
                    Sin información
                @else
                    {{ $vehiclesSelected->certificate_extracontractual }}
                @endif
            </span>
        </button>
        <br>
        <button id="historicos" onclick="historicos('{{ $vehiclesSelected->id }}','6')">
            <strong class="dark:text-yellow-400">Civil Contractual:</strong>
        </button>
        <br>
        <button class=""
            onclick="modalDocumentation('{{ $vehiclesSelected->plate_vehicle }}' ,'6', '{{ $vehiclesSelected->id }}'),hideDate()">
            <span
                class="hover:bg-blue-700 hover:text-black rounded-3xl p-1 @if ($vehiclesSelected->civil_contractual < $hoy) bg-red-600 text-white @endif">
                <strong class="dark:text-yellow-400">Vigencia:</strong>
                @if (!$vehiclesSelected->civil_contractual)
                    Sin información
                @else
                    {{ $vehiclesSelected->civil_contractual }}
                @endif
            </span>
        </button>
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
                            <label id="labelOperationDocument" class="text-gray-700 dark:text-gray-400">Nuevo Número
                                tarjeta de Operación</label>

                            <input
                                class="w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                type="text" id="operationDocument" name="operationDocument"
                                wire:model.defer="operationDocument" />
                        </div>

                    </div>
                    <div class="flex space-x-4">

                        <div class="w-full">
                            <label id="" class="text-gray-700 dark:text-gray-400">Documento</label>

                            <input
                                class="w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                type="file" id="fileDocument" name="fileDocument" wire:model.defer="fileDocument"
                                onchange="upDocument()" />
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
        function historicos(id, document) {
            Livewire.emit('Historicos', [id], [document]);
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

        function modalDocumentation(doc, paramText, id) {

            viewhideinputs('modalDoc', 'block', 'hidden');
            @this.set('plate', doc);
            @this.set('paramText', paramText);
            @this.set('vehicle', id);
            // Livewire.emit('updateDocumentation');

        }

        function hideDate() {
            viewhideinputs('operationDocument', 'Inactive', 'Active');
            viewhideinputs('labelOperationDocument', 'Inactive', 'Active');
        }

        function viewDate() {
            viewhideinputs('operationDocument', 'Active', 'Inactive');
            viewhideinputs('labelOperationDocument', 'Active', 'Inactive');
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
            } else if (exit == 5) {
                swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Recuerda debes actualizar el número de la tarjeta de operación',
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
