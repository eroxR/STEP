<div>

    <style>
        /* .radio input~label {
            background-color: rgb(233, 225, 225);
            color: rgb(158, 146, 146);
        }

        .radio input:checked~label {
            background-color: rgb(70, 230, 22);
            color: white;
        } */

        .radio input[type="radio"] {
            display: none;
        }

        .si-label {
            background-color: rgb(233, 225, 225);
            color: rgb(158, 146, 146);
        }

        .no-label {
            background-color: rgb(233, 225, 225);
            color: rgb(158, 146, 146);
        }

        .radio input[type="radio"]:checked+.si-label {
            background-color: rgb(70, 230, 22);
            color: white;
        }

        .radio input[type="radio"]:checked+.no-label {
            background-color: rgb(233, 22, 22);
            /* Cambia este color a tu preferencia para NO seleccionado */
            color: white;
        }
    </style>

    {{-- @if ($bandera)
    <p class="rounded-3xl p-1 bg-red-600 dark:text-yellow-400 text-white">
        No hay información para mostrar
    </p>
@else --}}
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
                <span
                    class="absolute top-0 ml25 mt1 px-2 py-1 font-semibold leading-tight text-sky-700 bg-sky-300 rounded-full dark:bg-sky-700 dark:text-sky-100">
                    Total Vehículos = {{ $totals }}
                </span>
                <span
                    class="absolute top-0 ml40 mt1 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                    Vehículos Habilitados {{ $habilitado }}
                </span>
                <span
                    class="absolute top-0 ml57 mt1 px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                    Vehículos Inhabilitados {{ $inhabilitado }}
                </span>
                <span wire:click="$set('filtre',4)"
                    class="absolute top-0 ml75 mt1 px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                    Vehículos Inactivos {{ $inactivo }}
                </span>
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

                        <button id="title" wire:click="order()">{{ __('vehicles List') }}</button>
                    </header>
                    <div class="h-4-7 overflow-y-auto">
                        <ul>
                            @foreach ($vehicles as $vehicle)
                                <li class="id hover:bg-orange-500 hover:text-white border-b rounded-lg">
                                    <a wire:click="$set('ide',{{ $vehicle->id }})" href="#" class="ml18">
                                        {{ $vehicle->plate_vehicle }} ___ <span class="dark:text-yellow-400">
                                            L{{ $vehicle->side_vehicle }}</span>
                                    </a>

                                    <div
                                        class="descrip absolute rounded-lg top-0 p1-6 h91 w77 mt3-5 ml18-6 bg-white dark:bg-gray-800 hidden">
                                        <header class="flex border-b-fuchsia-800">

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
                                                            class="px-2 py-1 font-semibol leading-tightd rounded-full @if ($vehicle->state_vehicle - 1 == 3) text-orange-700 bg-orange-100 dark:text-white dark:bg-orange-600 @else {{ $getStateClasses[$vehicle->state_vehicle - 1] }} @endif">
                                                            {{ $state[$vehicle->state_vehicle - 1] }}
                                                        </span>

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
                                                <span
                                                    class=" @if ($vehicle->expiration_card_operation < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">

                                                    @if (!$vehicle->expiration_card_operation)
                                                        Sin información
                                                    @else
                                                        {{ $vehicle->expiration_card_operation }}
                                                    @endif
                                                </span>
                                                <br>
                                                <strong class="dark:text-yellow-400">Preventiva:</strong> <br>
                                                <span
                                                    class=" @if ($vehicle->expiration_preventive < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
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
                                                <span
                                                    class=" @if ($vehicle->secure_end_date < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    <strong class="dark:text-yellow-400">Vigencia:</strong>
                                                    @if (!$vehicle->secure_end_date)
                                                        Sin información
                                                    @else
                                                        {{ $vehicle->secure_end_date }}
                                                    @endif
                                                </span>
                                                <br>
                                                <strong class="dark:text-yellow-400">Tecnicomecanica:</strong> <br>
                                                <span
                                                    class=" @if ($vehicle->technomechanical_end_date < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
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
                                                <span
                                                    class=" @if ($vehicle->certificate_extracontractual < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                    <strong class="dark:text-yellow-400">Vigencia:</strong>

                                                    @if (!$vehicle->certificate_extracontractual)
                                                        Sin información
                                                    @else
                                                        {{ $vehicle->certificate_extracontractual }}
                                                    @endif
                                                </span>
                                                <br>
                                                <strong class="dark:text-yellow-400">Civil Contractual:</strong> <br>
                                                <span
                                                    class=" @if ($vehicle->civil_contractual < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
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
                                            class="px-2 py-1 font-semibol leading-tightd rounded-full @if ($vehiclesSelected->state_vehicle - 1 == 3) text-orange-700 bg-orange-100 dark:text-white dark:bg-orange-600 @else {{ $getStateClasses[$vehiclesSelected->state_vehicle - 1] }} @endif">
                                            {{ $state[$vehiclesSelected->state_vehicle - 1] }}
                                        </span>

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

                        <div class=" p-2 text-justify">
                            <div x-data="contexto()">
                                <ul class="flex justify-center items-center my-4">
                                    <template x-for="(tab, index) in tabs" :key="index">
                                        <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                            :class="activeTab === index ?
                                                'text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900' :
                                                ''"
                                            @click="activeTab = index" x-text="tab"></li>
                                    </template>
                                </ul>

                                <div
                                    class="w-80 bg-white p-16 mx-auto  dark:text-white dark:bg-gray-800 scroll h-4-7 overflow-y-auto">

                                    <div x-show="activeTab===0">

                                        <br>
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
                                                @can('listaVehiculos.actualizarDocumentos')
                                                    <button id="historicos"
                                                        onclick="historicos('{{ $vehiclesSelected->id }}','0')">
                                                        <strong class="dark:text-yellow-400">Número tarjeta de
                                                            propiedad:</strong>
                                                    </button>
                                                    <br>
                                                    <button class=""
                                                        onclick="modalDocumentation('{{ $vehiclesSelected->plate_vehicle }}' ,'0', '{{ $vehiclesSelected->id }}'),hideDate()">

                                                        <span class="hover:bg-blue-700 hover:text-black rounded-3xl p-1">
                                                            <strong class="dark:text-yellow-400">N°:</strong>

                                                            @if (!$vehiclesSelected->property_card_number)
                                                                Sin información
                                                            @else
                                                                {{ $vehiclesSelected->property_card_number }}
                                                            @endif
                                                        </span>
                                                    </button>
                                                @else
                                                    <strong class="dark:text-yellow-400">Número tarjeta de
                                                        propiedad:</strong> <br>
                                                    <span class="">
                                                        <strong class="dark:text-yellow-400">N°:</strong>

                                                        @if (!$vehiclesSelected->property_card_number)
                                                            Sin información
                                                        @else
                                                            {{ $vehiclesSelected->property_card_number }}
                                                        @endif
                                                    </span>
                                                @endcan
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
                                                @can('listaVehiculos.actualizarDocumentos')
                                                    <button id="historicos"
                                                        onclick="historicos('{{ $vehiclesSelected->id }}','3')">
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
                                                @else
                                                    <strong class="dark:text-yellow-400">Tarjeta de operación:</strong>
                                                    {{ $vehiclesSelected->card_operation }}
                                                    <br>
                                                    <strong class="dark:text-yellow-400">Vigencia:</strong> <br>
                                                    <span
                                                        class=" @if ($vehiclesSelected->expiration_card_operation < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">

                                                        @if (!$vehiclesSelected->expiration_card_operation)
                                                            Sin información
                                                        @else
                                                            {{ $vehiclesSelected->expiration_card_operation }}
                                                        @endif
                                                    </span>
                                                @endcan

                                                <br>
                                                @can('listaVehiculos.actualizarDocumentos')
                                                    <button id="historicos"
                                                        onclick="historicos('{{ $vehiclesSelected->id }}','4')">
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
                                                @else
                                                    <strong class="dark:text-yellow-400">Preventiva:</strong> <br>
                                                    <span
                                                        class=" @if ($vehiclesSelected->expiration_preventive < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                        <strong class="dark:text-yellow-400">Vigencia:</strong>

                                                        @if (!$vehiclesSelected->expiration_preventive)
                                                            Sin información
                                                        @else
                                                            {{ $vehiclesSelected->expiration_preventive }}
                                                        @endif
                                                    </span>
                                                @endcan

                                            </div>

                                            <div class="border-b text-black text80 dark:text-white ">
                                                @can('listaVehiculos.actualizarDocumentos')
                                                    <button id="historicos"
                                                        onclick="historicos('{{ $vehiclesSelected->id }}','1')">
                                                        <strong class="dark:text-yellow-400">SOAT - Seguro
                                                            Obligatorio:</strong>
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
                                                @else
                                                    <strong class="dark:text-yellow-400">SOAT - Seguro
                                                        Obligatorio:</strong> <br>
                                                    <span
                                                        class=" @if ($vehiclesSelected->secure_end_date < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                        <strong class="dark:text-yellow-400">Vigencia:</strong>
                                                        @if (!$vehiclesSelected->secure_end_date)
                                                            Sin información
                                                        @else
                                                            {{ $vehiclesSelected->secure_end_date }}
                                                        @endif
                                                    </span>
                                                @endcan

                                                <br>
                                                @can('listaVehiculos.actualizarDocumentos')
                                                    <button id="historicos"
                                                        onclick="historicos('{{ $vehiclesSelected->id }}','2')">
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
                                                @else
                                                    <strong class="dark:text-yellow-400">Tecnicomecanica:</strong> <br>
                                                    <span
                                                        class=" @if ($vehicle->technomechanical_end_date < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                        <strong class="dark:text-yellow-400">Vigencia:</strong>

                                                        @if (!$vehiclesSelected->technomechanical_end_date)
                                                            Sin información
                                                        @else
                                                            {{ $vehiclesSelected->technomechanical_end_date }}
                                                        @endif
                                                    </span>
                                                @endcan

                                            </div>

                                            <div class="border-b text-black text80 dark:text-white ">
                                                @can('listaVehiculos.actualizarDocumentos')
                                                    <button id="historicos"
                                                        onclick="historicos('{{ $vehiclesSelected->id }}','5')">
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
                                                @else
                                                    <strong class="dark:text-yellow-400">Extracontractual:</strong> <br>
                                                    <span
                                                        class=" @if ($vehiclesSelected->certificate_extracontractual < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                        <strong class="dark:text-yellow-400">Vigencia:</strong>

                                                        @if (!$vehiclesSelected->certificate_extracontractual)
                                                            Sin información
                                                        @else
                                                            {{ $vehiclesSelected->certificate_extracontractual }}
                                                        @endif
                                                    </span>
                                                @endcan

                                                <br>
                                                @can('listaVehiculos.actualizarDocumentos')
                                                    <button id="historicos"
                                                        onclick="historicos('{{ $vehiclesSelected->id }}','6')">
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
                                                @else
                                                    <strong class="dark:text-yellow-400">Civil Contractual:</strong> <br>
                                                    <span
                                                        class=" @if ($vehiclesSelected->civil_contractual < $hoy) bg-red-600 text-white rounded-3xl p-1 @endif">
                                                        <strong class="dark:text-yellow-400">Vigencia:</strong>

                                                        @if (!$vehiclesSelected->civil_contractual)
                                                            Sin información
                                                        @else
                                                            {{ $vehiclesSelected->civil_contractual }}
                                                        @endif
                                                    </span>
                                                @endcan

                                            </div>

                                        </div>

                                    </div>


                                    <div x-show="activeTab===1">
                                        <br>
                                        <div class="flex ml40">
                                            <div class="inline-flex items-center rounded-md shadow-sm">

                                                <button type="button" id="next"
                                                    wire:click="changeMonth({{ $other }})" onclick="month()"
                                                    class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                    <h1>{{ $mes }} {{ $yearNow }}</h1>
                                                </button>

                                            </div>

                                            <div class="flex space-x-4 ml40">
                                                {{-- <button
                                                    class="text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100 font-bold py-2 px-4 rounded text-sm">
                                                    
                                                </button> --}}
                                                <button type="button"
                                                    onclick="modalInspection({{ $vehiclesSelected->id }})"
                                                    class="inline-block dark:text-black text-white text-sm font-medium transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-700 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">
                                                    <h1>inspeccionar</h1>
                                                </button>
                                                <button
                                                    onclick="pdfView('{{ $vehiclesSelected->id }}','{{ $montPdf }}')"
                                                    class="inline-flex items-center justify-cente border border-transparent rounded-md font-semibold uppercase tracking-widest focus:outline-none focus:ring disabled:opacity-25 transition">
                                                    <span class="text-2-6xl" aria-hidden="true" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                        <i class="fas fa-file-pdf icon-red w-5 h-5"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                        {{-- <center>
                                            <div class="inline-flex items-center rounded-md shadow-sm">

                                                <button type="button" id="next"
                                                    wire:click="changeMonth({{ $other }})" onclick="month()"
                                                    class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                    <h1>{{ $mes }} 2024</h1>
                                                </button>

                                            </div>
                                        </center> --}}

                                        @foreach ($inspectionsCategory as $id => $name_description)
                                            @switch($id)
                                                @case(1)
                                                    <h1
                                                        class="til-inspect1 text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                                        {{ $name_description }}
                                                    </h1>
                                                    <br>
                                                    @foreach ($inspections as $inspection)
                                                        @php
                                                            $start_date = \Carbon\Carbon::parse(
                                                                $this->start_date,
                                                            )->format('Y-m-d');
                                                        @endphp
                                                        @if ($inspection->category == 1)
                                                            <div>
                                                                <span>{{ $inspection->name_description }}
                                                                    {{ $inspection->id }}</span>
                                                                <div>
                                                                    @for ($i = 0; $i < $numdays; $i++)
                                                                        <span
                                                                            style="font-size: 14.7px">{{ $miniday[($dayStart + $i) % 7] }}</span>
                                                                    @endfor
                                                                </div>

                                                                @foreach (range(1, $numdays) as $i)
                                                                    @php
                                                                        $isRed = false;
                                                                        $nothing = false;
                                                                        $weekend = false;

                                                                        foreach ($WeekendArrays as $index => $date) {
                                                                            if ($start_date == $date) {
                                                                                $weekend = true;
                                                                                break;
                                                                            }
                                                                        }
                                                                        if (!$weekend) {
                                                                            foreach (
                                                                                $uninspectedArrays
                                                                                as $index => $date
                                                                            ) {
                                                                                if ($start_date == $date) {
                                                                                    $nothing = true;
                                                                                    break;
                                                                                }
                                                                            }

                                                                            if (!$nothing) {
                                                                                foreach (
                                                                                    $datesArrays
                                                                                    as $index => $date
                                                                                ) {
                                                                                    if (
                                                                                        $start_date == $date &&
                                                                                        $inspectionArrays[$index] ==
                                                                                            $inspection->id
                                                                                    ) {
                                                                                        $isRed = true;
                                                                                        break;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }

                                                                    @endphp

                                                                    <span
                                                                        class="p-1 inline-flex items-center justify-center {{ $nothing || $weekend ? 'bg-gray-600 text-white' : ($isRed ? 'bg-red-600 text-white' : ($start_date <= $endDates ? 'text-black bg-green-600' : 'bg-gray-600 text-white')) }} border border-transparent w-6 h-6 rounded-full font-semibold text-xs">
                                                                        {{ $i }}
                                                                    </span>

                                                                    @php
                                                                        $start_date = \Carbon\Carbon::parse($start_date)
                                                                            ->addDay()
                                                                            ->format('Y-m-d');
                                                                    @endphp
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @break

                                                @case(2)
                                                    <br>
                                                    <h1
                                                        class="til-inspect1 text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                                        {{ $name_description }}
                                                    </h1>
                                                    <br>
                                                    @foreach ($inspections as $inspection)
                                                        @php
                                                            $start_date = \Carbon\Carbon::parse(
                                                                $this->start_date,
                                                            )->format('Y-m-d');
                                                        @endphp
                                                        @if ($inspection->category == 2)
                                                            <div>
                                                                <span>{{ $inspection->name_description }}
                                                                    {{ $inspection->id }}</span>
                                                                <div>
                                                                    @for ($i = 0; $i < $numdays; $i++)
                                                                        <span
                                                                            style="font-size: 14.7px">{{ $miniday[($dayStart + $i) % 7] }}</span>
                                                                    @endfor
                                                                </div>

                                                                @foreach (range(1, $numdays) as $i)
                                                                    @php
                                                                        $isRed = false;
                                                                        $nothing = false;
                                                                        $weekend = false;

                                                                        foreach ($WeekendArrays as $index => $date) {
                                                                            if ($start_date == $date) {
                                                                                $weekend = true;
                                                                                break;
                                                                            }
                                                                        }
                                                                        if (!$weekend) {
                                                                            foreach (
                                                                                $uninspectedArrays
                                                                                as $index => $date
                                                                            ) {
                                                                                if ($start_date == $date) {
                                                                                    $nothing = true;
                                                                                    break;
                                                                                }
                                                                            }

                                                                            if (!$nothing) {
                                                                                foreach (
                                                                                    $datesArrays
                                                                                    as $index => $date
                                                                                ) {
                                                                                    if (
                                                                                        $start_date == $date &&
                                                                                        $inspectionArrays[$index] ==
                                                                                            $inspection->id
                                                                                    ) {
                                                                                        $isRed = true;
                                                                                        break;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }

                                                                    @endphp

                                                                    <span
                                                                        class="p-1 inline-flex items-center justify-center {{ $nothing || $weekend ? 'bg-gray-600 text-white' : ($isRed ? 'bg-red-600 text-white' : ($start_date <= $endDates ? 'text-black bg-green-600' : 'bg-gray-600 text-white')) }} border border-transparent w-6 h-6 rounded-full font-semibold text-xs">
                                                                        {{ $i }}
                                                                    </span>

                                                                    @php
                                                                        $start_date = \Carbon\Carbon::parse($start_date)
                                                                            ->addDay()
                                                                            ->format('Y-m-d');
                                                                    @endphp
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @break

                                                @case(3)
                                                    <h1
                                                        class="til-inspect1 text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                                        {{ $name_description }}
                                                    </h1>
                                                    <br>
                                                    @foreach ($inspections as $inspection)
                                                        @php
                                                            $start_date = \Carbon\Carbon::parse(
                                                                $this->start_date,
                                                            )->format('Y-m-d');
                                                        @endphp
                                                        @if ($inspection->category == 3)
                                                            <div>
                                                                <span>{{ $inspection->name_description }}
                                                                    {{ $inspection->id }}</span>
                                                                <div>
                                                                    @for ($i = 0; $i < $numdays; $i++)
                                                                        <span
                                                                            style="font-size: 14.7px">{{ $miniday[($dayStart + $i) % 7] }}</span>
                                                                    @endfor
                                                                </div>

                                                                @foreach (range(1, $numdays) as $i)
                                                                    @php
                                                                        $isRed = false;
                                                                        $nothing = false;
                                                                        $weekend = false;

                                                                        foreach ($WeekendArrays as $index => $date) {
                                                                            if ($start_date == $date) {
                                                                                $weekend = true;
                                                                                break;
                                                                            }
                                                                        }
                                                                        if (!$weekend) {
                                                                            foreach (
                                                                                $uninspectedArrays
                                                                                as $index => $date
                                                                            ) {
                                                                                if ($start_date == $date) {
                                                                                    $nothing = true;
                                                                                    break;
                                                                                }
                                                                            }

                                                                            if (!$nothing) {
                                                                                foreach (
                                                                                    $datesArrays
                                                                                    as $index => $date
                                                                                ) {
                                                                                    if (
                                                                                        $start_date == $date &&
                                                                                        $inspectionArrays[$index] ==
                                                                                            $inspection->id
                                                                                    ) {
                                                                                        $isRed = true;
                                                                                        break;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }

                                                                    @endphp

                                                                    <span
                                                                        class="p-1 inline-flex items-center justify-center {{ $nothing || $weekend ? 'bg-gray-600 text-white' : ($isRed ? 'bg-red-600 text-white' : ($start_date <= $endDates ? 'text-black bg-green-600' : 'bg-gray-600 text-white')) }} border border-transparent w-6 h-6 rounded-full font-semibold text-xs">
                                                                        {{ $i }}
                                                                    </span>

                                                                    @php
                                                                        $start_date = \Carbon\Carbon::parse($start_date)
                                                                            ->addDay()
                                                                            ->format('Y-m-d');
                                                                    @endphp
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @break

                                                @case(4)
                                                    <h1
                                                        class="til-inspect1 text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                                        {{ $name_description }}
                                                    </h1>
                                                    <br>
                                                    @foreach ($inspections as $inspection)
                                                        @php
                                                            $start_date = \Carbon\Carbon::parse(
                                                                $this->start_date,
                                                            )->format('Y-m-d');
                                                        @endphp
                                                        @if ($inspection->category == 4)
                                                            <div>
                                                                <span>{{ $inspection->name_description }}
                                                                    {{ $inspection->id }}</span>
                                                                <div>
                                                                    @for ($i = 0; $i < $numdays; $i++)
                                                                        <span
                                                                            style="font-size: 14.7px">{{ $miniday[($dayStart + $i) % 7] }}</span>
                                                                    @endfor
                                                                </div>

                                                                @foreach (range(1, $numdays) as $i)
                                                                    @php
                                                                        $isRed = false;
                                                                        $nothing = false;
                                                                        $weekend = false;

                                                                        foreach ($WeekendArrays as $index => $date) {
                                                                            if ($start_date == $date) {
                                                                                $weekend = true;
                                                                                break;
                                                                            }
                                                                        }
                                                                        if (!$weekend) {
                                                                            foreach (
                                                                                $uninspectedArrays
                                                                                as $index => $date
                                                                            ) {
                                                                                if ($start_date == $date) {
                                                                                    $nothing = true;
                                                                                    break;
                                                                                }
                                                                            }

                                                                            if (!$nothing) {
                                                                                foreach (
                                                                                    $datesArrays
                                                                                    as $index => $date
                                                                                ) {
                                                                                    if (
                                                                                        $start_date == $date &&
                                                                                        $inspectionArrays[$index] ==
                                                                                            $inspection->id
                                                                                    ) {
                                                                                        $isRed = true;
                                                                                        break;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }

                                                                    @endphp

                                                                    <span
                                                                        class="p-1 inline-flex items-center justify-center {{ $nothing || $weekend ? 'bg-gray-600 text-white' : ($isRed ? 'bg-red-600 text-white' : ($start_date <= $endDates ? 'text-black bg-green-600' : 'bg-gray-600 text-white')) }} border border-transparent w-6 h-6 rounded-full font-semibold text-xs">
                                                                        {{ $i }}
                                                                    </span>

                                                                    @php
                                                                        $start_date = \Carbon\Carbon::parse($start_date)
                                                                            ->addDay()
                                                                            ->format('Y-m-d');
                                                                    @endphp
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @break
                                            @endswitch
                                        @endforeach
                                        <br>
                                        <h1
                                            class="til-inspect1 text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                            OBSERVACIONES:
                                        </h1>
                                        <div class="border-golden-800 rounded-md w90 p-1">
                                            @if (!empty($comments))
                                                @foreach ($comments as $comment)
                                                    <p class="border-b-fuchsia-800 border-b rounded-lg">
                                                        {{ $comment }}</p> <br>
                                                @endforeach
                                            @endif

                                        </div>



                                    </div>
                                </div>

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
                                <label id="labelOperationDocument" class="text-gray-700 dark:text-gray-400">Nuevo
                                    Número
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
                                    <h1
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        Cantidad de Documentos: <strong
                                            style="color: red;">{{ $amount }}</strong></h1>
                                    <br>
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

    <!--end Modal historicos -->

    <!--Modal inspection -->

    <div id="modalInspection" wire:ignore
        class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div class="w40 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4"
            role="dialog" id="modalInspection">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-center border-b-fuchsia-800 border-b">
                <!-- Modal title -->
                <h1 class="dark:text-white">INSPECCIONANDO LA PLACA XXX147</h1>
                <button
                    class="ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                    aria-label="close" onclick="closeModalInspection()">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="scroll h-4-7 overflow-y-auto">
                <div class="-mt-11 mb-6 ">
                    <!-- Modal description -->
                    <div x-data="accordion" class="bg-gray-200 min-h-screen pt-2 font-mono my-16">
                        <div class="container mx-auto">
                            <div class="inputs w-full max-w-2xl p-6 mx-auto">
                                <form class="mt-6 pt-4" action="" method="post" id="formulario">
                                    @csrf
                                    <div class='flex flex-wrap -mx-3 mb-6'>
                                        <div class='w-full md:w-full px-3 mb-6'>
                                            <label
                                                class='block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2'>Nombre
                                                del responsable</label>
                                            <input wire:model.defer="responsible"
                                                class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 dark:bg-gray-700 dark:text-gray-300 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                                type='text' name="responsible" required>
                                        </div>
                                        <div class='w-full md:w-full px-3 mb-6'>
                                            <label
                                                class='block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2'>Kilometraje</label>
                                            <input wire:model.defer="mileage"
                                                class='appearance-none block w-full bg-white text-gray-700 dark:bg-gray-700 dark:text-gray-300 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                                type='number' name="Mileage" required>
                                        </div>
                                        <div class="flex space-x-4" wire:ignore>

                                            <div class="w-6-12">
                                                <label id=""
                                                    class="text-gray-700 dark:text-gray-400">Desde</label>

                                                <input readonly
                                                    class="appearance-none block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700  dark:text-gray-300 form-input"
                                                    placeholder="Fecha inicial inspeción" type="text"
                                                    id="fInicial" name="fInicial" wire:model.defer="fInicial"
                                                    onchange="fechasSet('fInicial')" />
                                            </div>

                                            <div class="w-6-12">
                                                <label id=""
                                                    class="text-gray-700 dark:text-gray-400">Hasta</label>

                                                <input readonly
                                                    class="appearance-none block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700  dark:text-gray-300 form-input"
                                                    placeholder="Fecha final inspeción" type="text" id="fFinal"
                                                    name="fFinal" wire:model.defer="fFinal"
                                                    onchange="fechasSet('fFinal')" />
                                            </div>

                                        </div>
                                        <h3 class="text-gray-700 dark:text-gray-400">Diligencie el formulario indicando
                                            si posee los elementos y estan en buen
                                            estado
                                            con la
                                            palabra "SI", de lo contrario con la palabra "NO"</h3>
                                        @foreach ($inspectionsCategory as $id => $name_description)
                                            @switch($id)
                                                @case(1)
                                                    <!-- Accordion 1 -->
                                                    <div
                                                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-green-800">
                                                        <!-- Head -->
                                                        <div @click="selected != 1 ? selected = 1 : selected =null"
                                                            class="flex justify-between items-center shadow-md px-2 border-b-green-800">
                                                            <h2 class="font-medium text-gray-800 dark:text-white py-2">
                                                                {{ $name_description }}:
                                                            </h2>
                                                            <div class="flex items-center justify-between mt-4">
                                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                    <button type="button" id=""
                                                                        onclick="check('9','si','1','9')"
                                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                        SI TODO
                                                                    </button>
                                                                </div>
                                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                    <button type="button" id=""
                                                                        onclick="check('9','no','1','9')"
                                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                        NO TODO
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                x-bind:class="selected == 1 ? 'rotate-180' : ''"
                                                                class="h-5 w-5 transition-all duration-300" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M19 9l-7 7-7-7" />
                                                            </svg>
                                                        </div>
                                                        <!-- Content -->
                                                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:bg-gray-800 dark:text-white"
                                                            x-ref="tab1" :style="selected == 1 ? 'max-height:450%;' : ''">
                                                            <div class="personal w-full border-t border-gray-400 pt-4">
                                                                @foreach ($inspections as $inspection)
                                                                    @if ($inspection->category == 1)
                                                                        <div class="flex items-center justify-between mt-4">
                                                                            <div class="mb-2">
                                                                                <label for="entry"
                                                                                    class="block text-gray-800 dark:text-white text-sm lg:text-base font-semibold mb-2">
                                                                                    {{ $inspection->name_description }}:
                                                                                </label>
                                                                                <div class="w-full">
                                                                                    <div
                                                                                        class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                                                                        <div class="inline-block radio">
                                                                                            <input
                                                                                                name="answer{{ $inspection->id }}"
                                                                                                wire:model.defer="answer{{ $inspection->id }}"
                                                                                                type="radio"
                                                                                                id="si{{ $inspection->id }}"
                                                                                                hidden="hidden"
                                                                                                value="2" />
                                                                                            <label
                                                                                                for="si{{ $inspection->id }}"
                                                                                                class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 si-label">
                                                                                                SI
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="inline-block radio">
                                                                                            <input
                                                                                                name="answer{{ $inspection->id }}"
                                                                                                wire:model.defer="answer{{ $inspection->id }}"
                                                                                                type="radio"
                                                                                                id="no{{ $inspection->id }}"
                                                                                                hidden="hidden"
                                                                                                value="1" />
                                                                                            <label
                                                                                                for="no{{ $inspection->id }}"
                                                                                                class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 no-label">
                                                                                                NO
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break

                                                @case(2)
                                                    <!-- Accordion 2 -->
                                                    <div
                                                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-green-800">
                                                        <!-- Head -->
                                                        <div @click="selected != 2 ? selected = 2 : selected =null"
                                                            class="flex justify-between items-center shadow-md px-2 border-b-green-800">
                                                            {{-- <h1 class="font-medium text-gray-800 py-2 dark:text-white">prueba2</h1> --}}
                                                            <h2 class="font-medium text-gray-800 dark:text-white py-2">
                                                                {{ $name_description }}:
                                                            </h2>
                                                            <div class="flex items-center justify-between mt-4">
                                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                    <button type="button" id=""
                                                                        onclick="check('15','si','10')"
                                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                        SI TODO
                                                                    </button>
                                                                </div>
                                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                    <button type="button" id=""
                                                                        onclick="check('15','no','10')"
                                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                        NO TODO
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                x-bind:class="selected == 2 ? 'rotate-180' : ''"
                                                                class="h-5 w-5 transition-all duration-300" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M19 9l-7 7-7-7" />
                                                            </svg>
                                                        </div>
                                                        <!-- Content -->
                                                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:bg-gray-800 dark:text-white"
                                                            x-ref="tab1" :style="selected == 2 ? 'max-height:450%;' : ''">
                                                            <div class="personal w-full border-t border-gray-400 pt-4">

                                                                @foreach ($inspections as $inspection)
                                                                    @if ($inspection->category == 2)
                                                                        <div class="flex items-center justify-between mt-4">
                                                                            <div class="mb-2">
                                                                                <label for="entry"
                                                                                    class="block text-gray-800 dark:text-white text-sm lg:text-base font-semibold mb-2">
                                                                                    {{ $inspection->name_description }}:
                                                                                </label>
                                                                                <div class="w-full">
                                                                                    <div
                                                                                        class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                                                                        <div class="inline-block radio">
                                                                                            <input
                                                                                                name="answer{{ $inspection->id }}"
                                                                                                wire:model.defer="answer{{ $inspection->id }}"
                                                                                                type="radio"
                                                                                                id="si{{ $inspection->id }}"
                                                                                                hidden="hidden"
                                                                                                value="2" />
                                                                                            <label
                                                                                                for="si{{ $inspection->id }}"
                                                                                                class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 si-label">
                                                                                                SI
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="inline-block radio">
                                                                                            <input
                                                                                                name="answer{{ $inspection->id }}"
                                                                                                wire:model.defer="answer{{ $inspection->id }}"
                                                                                                type="radio"
                                                                                                id="no{{ $inspection->id }}"
                                                                                                hidden="hidden"
                                                                                                value="1" />
                                                                                            <label
                                                                                                for="no{{ $inspection->id }}"
                                                                                                class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 no-label">
                                                                                                NO
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>

                                                    </div>
                                                @break

                                                @case(3)
                                                    <!-- Accordion 3 -->
                                                    <div
                                                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-green-800">
                                                        <!-- Head -->
                                                        <div @click="selected != 3 ? selected = 3 : selected =null"
                                                            class="flex justify-between items-center shadow-md px-2 border-b-green-800">
                                                            <h2 class="font-medium text-gray-800 py-2 dark:text-white">
                                                                {{ $name_description }}:</h2>
                                                            <div class="flex items-center justify-between mt-4">
                                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                    <button type="button" id=""
                                                                        onclick="check('23','si','16')"
                                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                        SI TODO
                                                                    </button>
                                                                </div>
                                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                    <button type="button" id=""
                                                                        onclick="check('23','no','16')"
                                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                        NO TODO
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                x-bind:class="selected == 3 ? 'rotate-180' : ''"
                                                                class="h-5 w-5 transition-all duration-300" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M19 9l-7 7-7-7" />
                                                            </svg>
                                                        </div>
                                                        <!-- Content -->
                                                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:bg-gray-800 dark:text-white"
                                                            x-ref="tab1" :style="selected == 3 ? 'max-height:450%;' : ''">
                                                            <div class="personal w-full border-t border-gray-400 pt-4">
                                                                @foreach ($inspections as $inspection)
                                                                    @if ($inspection->category == 3)
                                                                        <div class="flex items-center justify-between mt-4">
                                                                            <div class="mb-2">
                                                                                <label for="entry"
                                                                                    class="block text-gray-800 dark:text-white text-sm lg:text-base font-semibold mb-2">
                                                                                    {{ $inspection->name_description }}:
                                                                                </label>
                                                                                <div class="w-full">
                                                                                    <div
                                                                                        class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                                                                        <div class="inline-block radio">
                                                                                            <input
                                                                                                name="answer{{ $inspection->id }}"
                                                                                                wire:model.defer="answer{{ $inspection->id }}"
                                                                                                type="radio"
                                                                                                id="si{{ $inspection->id }}"
                                                                                                hidden="hidden"
                                                                                                value="2" />
                                                                                            <label
                                                                                                for="si{{ $inspection->id }}"
                                                                                                class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 si-label">
                                                                                                SI
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="inline-block radio">
                                                                                            <input
                                                                                                name="answer{{ $inspection->id }}"
                                                                                                wire:model.defer="answer{{ $inspection->id }}"
                                                                                                type="radio"
                                                                                                id="no{{ $inspection->id }}"
                                                                                                hidden="hidden"
                                                                                                value="1" />
                                                                                            <label
                                                                                                for="no{{ $inspection->id }}"
                                                                                                class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 no-label">
                                                                                                NO
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>

                                                    </div>
                                                @break

                                                @case(4)
                                                    <!-- Accordion 4 -->
                                                    <div
                                                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-green-800">
                                                        <!-- Head -->
                                                        <div @click="selected != 4 ? selected = 4 : selected =null"
                                                            class="flex justify-between items-center shadow-md px-2 border-b-green-800">
                                                            <h2 class="font-medium text-gray-800 py-2 dark:text-white">
                                                                {{ $name_description }}:</h2>
                                                            <div class="flex items-center justify-between mt-4">
                                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                    <button type="button" id=""
                                                                        onclick="check('43','si','24')"
                                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                        SI TODO
                                                                    </button>
                                                                </div>
                                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                    <button type="button" id=""
                                                                        onclick="check('43','no','24')"
                                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                        NO TODO
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                x-bind:class="selected == 4 ? 'rotate-180' : ''"
                                                                class="h-5 w-5 transition-all duration-300" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M19 9l-7 7-7-7" />
                                                            </svg>
                                                        </div>
                                                        <!-- Content -->
                                                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:bg-gray-800 dark:text-white"
                                                            x-ref="tab1" :style="selected == 4 ? 'max-height:450%;' : ''">
                                                            <div class="personal w-full border-t border-gray-400 pt-4">
                                                                @foreach ($inspections as $inspection)
                                                                    @if ($inspection->category == 4)
                                                                        <div class="flex items-center justify-between mt-4">
                                                                            <div class="mb-2">
                                                                                <label for="entry"
                                                                                    class="block text-gray-800 dark:text-white text-sm lg:text-base font-semibold mb-2">
                                                                                    {{ $inspection->name_description }}:
                                                                                </label>
                                                                                <div class="w-full">
                                                                                    <div
                                                                                        class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                                                                        <div class="inline-block radio">
                                                                                            <input
                                                                                                name="answer{{ $inspection->id }}"
                                                                                                wire:model.defer="answer{{ $inspection->id }}"
                                                                                                type="radio"
                                                                                                id="si{{ $inspection->id }}"
                                                                                                hidden="hidden"
                                                                                                value="2" />
                                                                                            <label
                                                                                                for="si{{ $inspection->id }}"
                                                                                                class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 si-label">
                                                                                                SI
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="inline-block radio">
                                                                                            <input
                                                                                                name="answer{{ $inspection->id }}"
                                                                                                wire:model.defer="answer{{ $inspection->id }}"
                                                                                                type="radio"
                                                                                                id="no{{ $inspection->id }}"
                                                                                                hidden="hidden"
                                                                                                value="1" />
                                                                                            <label
                                                                                                for="no{{ $inspection->id }}"
                                                                                                class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 no-label">
                                                                                                NO
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break

                                                @default
                                            @endswitch
                                        @endforeach
                                        <div class='w-full md:w-full px-3 mb-6'>
                                            <label
                                                class='block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2'>OBSERVACIONES</label>
                                            <textarea name="observations" wire:model.defer="observations"
                                                class='bg-gray-100 dark:bg-gray-700 dark:text-gray-300 rounded-md leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white'
                                                required>
                                            </textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div wire:ignore
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button onclick="closeModalInspection()"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
                <button id="" wire:click="toInspect()"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Guardar Inspección
                </button>
            </div>
        </div>
    </div>

    <!--end Modal inspection -->

    {{-- end componentes de modal --}}

    <script>
        function contexto() {
            return {
                activeTab: 0,
                tabs: [
                    "Información Basica",
                    "Inspección Diaria ",
                    // "Estrategias",
                ]
            };
        };

        function accordion() {
            return {
                selected: null
            }
        }
        //43     'si'    24
        function check(cant, option, start, total) {
            for (let i = start; i <= cant; i++) {
                document.getElementById(option + [i]).checked = true;
                // @this.set('answer'+[i], option == 'si' ? '2' : '1');                
            }
            Livewire.emit('check', cant, option, start);

        }
    </script>

</div>

@section('scripts')
    <script>
        $(document).ready(function() {
            // alert('prueba');
            $("#active3").removeClass('hidden');
        });

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

        jQuery('#fInicial').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#fFinal').datetimepicker({
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

        function modalInspection(vehicle_id) {

            viewhideinputs('modalInspection', 'block', 'hidden');
            @this.set('vehicle_id', vehicle_id);

        }

        Livewire.on('inspected', (inspec) => {


            inspec = inspec.inspec;
            // alert(inspec)
            var states = ['success', 'warning', 'error'];

            var inspectedExit = ['Inspeción realizada exitosamente',
                'La inspeción del día de hoy, ya fue realizada para esta placa',
                'no puedes inspecionar meses superiores al mes actual',
                'el kilometraje no puede ser menor al kilometraje puesto anteriormente',
                'solo puedes inspeccionar un mes a la vez',
                'la fecha final debe ser mayor a la fecha inicial',
                'si no cumples con algun elemento, debes llenar la observación del por que no se cumple con el elemento',
                'Debes verificar que todos los elementos contenga un "SI" o un "NO"'
            ];

            for (let i = 0; i < inspectedExit.length; i++) {

                if (inspec == 2 || inspec == 3 || inspec == 4 || inspec == 5) {
                    newState = states[2];
                    break;
                } else if (inspec == 1 || inspec == 6 || inspec == 7) {
                    newState = states[1];
                    break;
                } else {
                    newState = states[0];
                    closeModalInspection();
                    break;
                }

            }


            swal.fire({
                // position: 'top-end',
                icon: newState,
                title: inspectedExit[inspec],
                showConfirmButton: true
                // timer: 2500
            })
        })

        function closeModalInspection() {
            viewhideinputs('modalInspection', 'hidden', 'block');
            $('#frmDocument').trigger("reset");
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

        function month() {
            let timerInterval
            swal.fire({
                title: 'Cargando...',
                html: 'Cambiando mes <b></b> milliseconds.', //Cargando la información del sistema en
                timer: 6000,
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

        function pdfView(vehicle_id, montPdf) {
            // alert(montPdf);
            // var id = 93;
            // var date = '2024-03-20'
            // window.open('http://127.0.0.1:8000/pdfs/pdf-inspection/' + vehicle_id + '/' + montPdf, '_blank')
            window.open('http://127.0.0.1:8000/pdfs/pdf-inspection/' + vehicle_id + '/' + montPdf, '_blank')
        }

        Livewire.on('options', (option) => {

            console.log(option);

            // closeModalDoc();
        })

        Livewire.on('pruebas', (datos, datos1, datos3) => {

            datos = datos.datos;
            datos1 = datos1.datos1;
            datos3 = datos3.datos3;
            console.log('nextdate: ' + datos);
            console.log('enddates: ' + datos1);
            console.log('expresion: ' + datos3);

            // closeModalDoc();
        })
    </script>
@endsection
