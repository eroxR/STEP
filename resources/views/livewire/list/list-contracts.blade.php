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
                <button wire:click="$set('filtre',0)" class="absolute top-0 ml22 mt1-3">
                    <svg class="w-5 h-5 icon-red" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2" />
                        <line x1="15" y1="9" x2="9" y2="15" />
                        <line x1="9" y1="9" x2="15" y2="15" />
                    </svg>
                </button>
                <button wire:click="$set('filtre',1)"
                    class="absolute top-0 ml25 mt1 px-2 py-1 font-semibold leading-tight text-white bg-emerald-700 rounded-full dark:bg-sky-700 dark:text-white">
                    Colegios
                </button>
                <button wire:click="$set('filtre',2)"
                    class="absolute top-0 ml32 mt1 px-2 py-1 font-semibold leading-tight text-white bg-emerald-700 rounded-full dark:bg-sky-700 dark:text-white">
                    Empresas
                </button>
                <button wire:click="$set('filtre',3)"
                    class="absolute top-0 ml40 mt1 px-2 py-1 font-semibold leading-tight text-white bg-emerald-700 rounded-full dark:bg-sky-700 dark:text-white">
                    Empresas Turismo
                </button>
                <button wire:click="$set('filtre',4)"
                    class="absolute top-0 ml53 mt1 px-2 py-1 font-semibold leading-tight text-white bg-emerald-700 rounded-full dark:bg-sky-700 dark:text-white">
                    Ocacionales
                </button>
                <button wire:click="$set('filtre',5)"
                    class="absolute top-0 ml62 mt1 border-transparent px-2 py-1 font-semibold leading-tight text-white bg-emerald-700 rounded-full dark:bg-sky-700 dark:text-white">
                    Empresas Salud
                </button>
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
                    <header class="flex justify-center border-b-fuchsia-800 border-b bg-green-500 rounded-lg">
                        <!-- title -->
                        <button id="title" wire:click="order()">{{ __('List of Contracts') }}</button>
                    </header>
                    <div class="h-4-7 overflow-y-auto">
                        <ul>
                            @foreach ($contracts as $contract)
                                <li class="id hover:bg-green-500 hover:text-white border-b rounded-lg">
                                    <a wire:click="$set('ide',{{ $contract->id }})" href="#">
                                        N° {{ $contract->contract_number }}
                                        (@switch($contract->type_contract)
                                            @case(1)
                                                Colegios
                                            @break

                                            @case(2)
                                                Empresas
                                            @break

                                            @case(3)
                                                Empresa Turismo
                                            @break

                                            @case(4)
                                                Ocacionales
                                            @break

                                            @case(5)
                                                Empresas Salud
                                            @break

                                            @default
                                        @endswitch)
                                    </a>

                                    <div
                                        class="descrip absolute rounded-lg top-0 p1-6 h91 w77 mt3-5 ml18-6 bg-white dark:bg-gray-800 hidden">
                                        <header class="flex border-b-fuchsia-800">
                                            <!-- title -->
                                            <div class="grid grid-cols-3 gap-20">
                                                <div class="">
                                                    <h1
                                                        class="content-start text-black dark:text-white text-4xl0-9 justify-">
                                                        Contrato N° {{ $contract->contract_number }} de
                                                        @switch($contract->type_contract)
                                                            @case(1)
                                                                Colegios
                                                            @break

                                                            @case(2)
                                                                Empresas
                                                            @break

                                                            @case(3)
                                                                Empresa Turismo
                                                            @break

                                                            @case(4)
                                                                Ocacionales
                                                            @break

                                                            @case(5)
                                                                Empresas Salud
                                                            @break

                                                            @default
                                                        @endswitch
                                                    </h1>
                                                </div>
                                                <div class="">
                                                    <h1 class="content-center text-black dark:text-white text-4xl1">
                                                        <button
                                                            class="inline-flex items-center justify-center  bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"
                                                            {{-- flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" --}} aria-label="view">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z">
                                                                </path>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        Estado:
                                                        @switch($contract->state_contract)
                                                            @case('0')
                                                                <span
                                                                    class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                                                                    INICIAL
                                                                </span>
                                                            @break

                                                            @case('1')
                                                                <span
                                                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                                    CANCELADO
                                                                </span>
                                                            @break

                                                            @case('2')
                                                                <span
                                                                    class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100">
                                                                    EN CURSO
                                                                </span>
                                                            @break

                                                            @case('3')
                                                                <span
                                                                    class="px-2 py-1 font-semibold leading-tight text-sky-700 bg-sky-300 rounded-full dark:bg-sky-700 dark:text-sky-100">
                                                                    FINALIZADO
                                                                </span>
                                                            @break

                                                            @case('4')
                                                                <span
                                                                    class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                                                    PENDIENTE
                                                                </span>
                                                            @break

                                                            @default
                                                        @endswitch
                                                    </h1>
                                                </div>
                                                <div class="text-black dark:text-white">
                                                    <h1>
                                                        Permiso N°
                                                        @foreach ($allpermits as $allpermit)
                                                            @if ($allpermit->contract == $contract->id)
                                                                <button {{-- onclick="deletes({{ $contract->id }})" --}}
                                                                    class="p-1 inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
                                                                    <span>{{ $allpermit->permit_number }}</span>
                                                                </button>
                                                            @endif
                                                        @endforeach
                                                        <button {{-- onclick="view({{ $permit->id }})" --}}
                                                            class="inline-flex items-center justify-center  bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </h1>
                                                </div>
                                            </div>
                                        </header>
                                        <!-- body -->
                                        <div class="grid grid-cols-5 gap-4">
                                            <div class="border-b text-black text80 dark:text-white "><strong>Fecha
                                                    Inicio:</strong>
                                                {{ $contract->date_start_contract }}
                                                <strong>Fecha final:</strong> {{ $contract->contract_end_date }} <br>
                                                <strong>Se firma el:</strong>{{ $contract->contract_signing_date }}
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white "><strong>tipo de
                                                    Pago:</strong>
                                                @switch($contract->tipe_pay)
                                                    @case(1)
                                                        De Contado
                                                    @break

                                                    @case(2)
                                                        el 50% a la firma del
                                                        contrato...
                                                    @break

                                                    @case(3)
                                                        Otro
                                                    @break

                                                    @default
                                                @endswitch
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white "><strong>Valor del
                                                    Contrato:</strong>
                                                ${{ number_format($contract->contract_value, 2, ',', '.') }}</div>
                                            <div class="border-b text-black text80 dark:text-white "><strong>Cant.
                                                    Vehiculos:</strong>
                                                {{ $contract->quantity_vehicle }} <br>
                                                <strong>Cant. Pasajeros:</strong> {{ $contract->passenger_quantity }}
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white "><strong>Nombre
                                                    Contratante:</strong>
                                                {{ $contract->contracting_name }}</div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong>Identificación:</strong>
                                                @switch($contract->identification)
                                                    @case(1)
                                                        Cedula de Ciudadania
                                                    @break

                                                    @case(2)
                                                        Cedula de Extranjeria
                                                    @break

                                                    @case(3)
                                                        Documento Definido para información Exógena
                                                    @break

                                                    @case(4)
                                                        Nit
                                                    @break

                                                    @case(5)
                                                        Pasaporte
                                                    @break

                                                    @case(6)
                                                        Registro Civil
                                                    @break

                                                    @case(7)
                                                        Tarjeta de Extranjeria
                                                    @break

                                                    @case(8)
                                                        Tarjeta de Identidad
                                                    @break

                                                    @case(9)
                                                        Tipo de Documento Extranjero
                                                    @break

                                                    @default
                                                @endswitch
                                                <br> <strong>Cedula Contratante:</strong>
                                                {{ $contract->contract_document }}
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white "><strong>Expedida
                                                    en:</strong>
                                                {{ $contract->expedition_identificationcard }}</div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong>Dirección:</strong>
                                                {{ $contract->contracting_direction }}
                                                <br> <strong>Telefono:</strong> {{ $contract->contracting_phone }}
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white "><strong>Nombre
                                                    Representante
                                                    Legal:</strong> {{ $contract->legal_representative }}</div>
                                            <div class="border-b text-black text80 dark:text-white ">
                                                <strong>Identificación Repres.
                                                    Legal:</strong>
                                                @switch($contract->identification_represent_legal)
                                                    @case(1)
                                                        Cedula de Ciudadania
                                                    @break

                                                    @case(2)
                                                        Cedula de Extranjeria
                                                    @break

                                                    @case(3)
                                                        Documento Definido para información Exógena
                                                    @break

                                                    @case(4)
                                                        Nit
                                                    @break

                                                    @case(5)
                                                        Pasaporte
                                                    @break

                                                    @case(6)
                                                        Registro Civil
                                                    @break

                                                    @case(7)
                                                        Tarjeta de Extranjeria
                                                    @break

                                                    @case(8)
                                                        Tarjeta de Identidad
                                                    @break

                                                    @case(9)
                                                        Tipo de Documento Extranjero
                                                    @break

                                                    @default
                                                @endswitch
                                                <br> <strong>Expedida en:</strong>
                                                {{ $contract->legal_representative_expedition_identificationcard }}
                                            </div>
                                            @if ($contract->type_contract == 1)
                                                <div class="border-b text-black text80 dark:text-white "><strong>Nombre
                                                        Colegio:</strong>
                                                    {{ $contract->school_name }}
                                                    <br> <strong>Poliza:</strong> {{ $contract->secure_policy }}
                                                </div>
                                                <div class="border-b text-black text80 dark:text-white ">
                                                    <strong>Dirección:</strong>
                                                    {{ $contract->address_school }}
                                                </div>
                                            @endif
                                            @if ($contract->type_contract == 2 || $contract->type_contract == 3 || $contract->type_contract == 5)
                                                <div class="border-b text-black text80 dark:text-white">
                                                    <strong>Empresa:</strong> {{ $contract->entity_name }} <br>
                                                    <strong>Cooperación:</strong> {{ $contract->cooperation_contract }}
                                                </div>
                                            @endif
                                            {{-- <div class="border-b text-black text80 dark:text-white "><strong>Viaje
                                                    desde:</strong>
                                                {{ $contract->trip_from }}
                                                <br> <strong>Viaje hasta:</strong> {{ $contract->trip_to }}
                                            </div> --}}
                                            {{-- <div class="border-b text-black text80 dark:text-white "><strong>Lugar de
                                                    Origen:</strong>
                                                {{ $contract->place_of_origin }}
                                                <br> <strong>Retorno:</strong> {{ $contract->return_place }}
                                                <br> <strong>destino:</strong> {{ $contract->destination_place }}
                                            </div> --}}
                                            <div class="border-b text-black text80 dark:text-white "><strong>Ruta
                                                    Contrato:</strong>
                                                {{ $contract->route_trip_contract }}</div>
                                            @if ($contract->type_contract == 4)
                                                <div class="border-b text-black text80 dark:text-white">
                                                    <strong>Representante del grupo:</strong> <br>
                                                    {{ $contract->group_representative_name }}
                                                    <strong>Identificación:</strong>
                                                    @switch($contract->identificationcard_representative_group)
                                                        @case(1)
                                                            Cedula de Ciudadania
                                                        @break

                                                        @case(2)
                                                            Cedula de Extranjeria
                                                        @break

                                                        @case(3)
                                                            Documento Definido para información Exógena
                                                        @break

                                                        @case(4)
                                                            Nit
                                                        @break

                                                        @case(5)
                                                            Pasaporte
                                                        @break

                                                        @case(6)
                                                            Registro Civil
                                                        @break

                                                        @case(7)
                                                            Tarjeta de Extranjeria
                                                        @break

                                                        @case(8)
                                                            Tarjeta de Identidad
                                                        @break

                                                        @case(9)
                                                            Tipo de Documento Extranjero
                                                        @break

                                                        @default
                                                    @endswitch
                                                </div>
                                                <div class="border-b text-black text80 dark:text-white">
                                                    <strong>Expedida
                                                        en:</strong>
                                                    {{ $contract->dateofexpedition_representative_group }}
                                                </div>
                                            @endif

                                            {{-- <div class="border-b text-black text80 dark:text-white"></div> --}}
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>


                </div>

                <div class="w-9-12 h-4-7 mt-12 mr-4 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg  overflow-x-hidden overflow-y-auto"
                    role="dialog" id="modal">
                    @foreach ($contracsSelected as $contracSelected)
                        <header class="flex border-b-fuchsia-800 ">
                            <!-- title -->
                            <div class="grid grid-cols-3 gap-20">
                                <div class="bg">
                                    <h1 class="content-start text-black dark:text-white text-4xl0-9">
                                        Contrato N° {{ $contracSelected->contract_number }} de
                                        @switch($contracSelected->type_contract)
                                            @case(1)
                                                Colegios
                                            @break

                                            @case(2)
                                                Empresas
                                            @break

                                            @case(3)
                                                Empresa Turismo
                                            @break

                                            @case(4)
                                                Ocacionales
                                            @break

                                            @case(5)
                                                Empresas Salud
                                            @break

                                            @default
                                        @endswitch
                                    </h1>
                                </div>
                                <div class="">
                                    <h1 class="content-center text-black dark:text-white text-4xl1">
                                        <button
                                            class="inline-flex items-center justify-center  bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"
                                            {{-- flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" --}} aria-label="view">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        Estado:
                                        @switch($contracSelected->state_contract)
                                            @case('0')
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                                                    INICIAL
                                                </span>
                                            @break

                                            @case('1')
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                    CANCELADO
                                                </span>
                                            @break

                                            @case('2')
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100">
                                                    EN CURSO
                                                </span>
                                            @break

                                            @case('3')
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-sky-700 bg-sky-300 rounded-full dark:bg-sky-700 dark:text-sky-100">
                                                    FINALIZADO
                                                </span>
                                            @break

                                            @case('4')
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                                    PENDIENTE
                                                </span>
                                            @break

                                            5901125

                                            @default
                                        @endswitch
                                        @if ($contracSelected->signed_contract == 1)
                                            <button
                                                class="inline-flex items-center justify-center  bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"
                                                onclick="modalDocumentation({{ $contracSelected->id }},{{ $contracSelected->type_contract }},{{ $contracSelected->contract_number }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                                    id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24"
                                                    width="512" height="512">
                                                    <path
                                                        d="M19,3h-6.528c-.154,0-.31-.036-.447-.105l-3.153-1.576c-.415-.208-.879-.318-1.344-.318h-2.528C2.243,1,0,3.243,0,6v12c0,2.757,2.243,5,5,5h3c.552,0,1-.447,1-1s-.448-1-1-1h-3c-1.654,0-3-1.346-3-3V9H22v9c0,1.654-1.346,3-3,3h-3c-.552,0-1,.447-1,1s.448,1,1,1h3c2.757,0,5-2.243,5-5V8c0-2.757-2.243-5-5-5ZM2,6c0-1.654,1.346-3,3-3h2.528c.154,0,.308,.036,.447,.106l3.156,1.577c.415,.207,.878,.316,1.341,.316h6.528c1.302,0,2.402,.839,2.816,2H2v-1ZM14.293,15.896l-1.293-1.293v7.397c0,.553-.448,1-1,1s-1-.447-1-1v-7.397l-1.293,1.293c-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l1.613-1.613c1.118-1.119,3.069-1.119,4.188,0l1.613,1.613c.391,.391,.391,1.023,0,1.414s-1.023,.391-1.414,0Z" />
                                                </svg>
                                            </button>
                                        @endif
                                    </h1>
                                </div>
                                <div class="text-black dark:text-white">
                                    <h1>
                                        {{-- <a tabindex="0" role="link" aria-label="tooltip 1"
                                            class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative mt-20 md:mt-0"
                                            onmouseover="showTooltip(1)" onfocus="showTooltip(1)"
                                            onmouseout="hideTooltip(1)">
                                            <div class=" cursor-pointer">
                                                <svg aria-haspopup="true" xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-info-circle" width="25"
                                                    height="25" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="#A0AEC0" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <circle cx="12" cy="12" r="9" />
                                                    <line x1="12" y1="8" x2="12.01"
                                                        y2="8" />
                                                    <polyline points="11 12 12 12 12 16 13 16" />
                                                </svg>
                                            </div>

                                        </a> --}}

                                        <button
                                            class="inline-flex items-center justify-center  bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest
                                            hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"
                                            aria-label="view" onmouseover="Tooltip(true)"
                                            onmouseleave="Tooltip(false)">
                                            {{-- <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 576 512">
                                                <path
                                                    d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 
                                                    143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm48 96a144 144 0 1 1 0 288 144 144 0 1 1 
                                                    0-288zm16 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v48H368c-8.8 0-16 7.2-16 16s7.2 16 16 16h48v48c0 8.8 7.2 16 16 16s16-7.2 
                                                    16-16V384h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H448V304z" />
                                            </svg> --}}
                                            <svg id="Layer_1" class="w-5 h-5" viewBox="0 0 24 24" width="512"
                                                xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                                <path d="m9.5 24h-8a1.5 1.5 0 0 1 0-3h8a1.5 1.5 0 0 1 0 3z" />
                                                <path d="m7.5 19h-6a1.5 1.5 0 0 1 0-3h6a1.5 1.5 0 0 1 0 3z" />
                                                <path d="m5.5 14h-4a1.5 1.5 0 0 1 0-3h4a1.5 1.5 0 0 1 0 3z" />
                                                <path
                                                    d="m14.5 23.722a1.5 1.5 0 0 1 -.354-2.958 9.022 9.022 0 1 0 -10.303-12.622 1.5 1.5 0 0 1 -2.711-1.284 12.023 12.023 0 1 1 13.723 
                                                16.821 1.513 1.513 0 0 1 -.355.043z" />
                                                <path
                                                    d="m12.5 6a1.5 1.5 0 0 0 -1.5 1.5v4.293a2 2 0 0 0 .586 1.414l1.793 1.793a1.5 1.5 0 0 0 
                                                2.121-2.121l-1.5-1.5v-3.879a1.5 1.5 0 0 0 -1.5-1.5z" />
                                            </svg>
                                            <div id="tooltip" role="tooltip"
                                                class="hidden fixed mt-12 -ml-7 border transition-colors duration-150 text-white  text-sm bg-gray-900 px-2 py-1 rounded-md">
                                                FUEC DE CONTINGENCIA
                                            </div>
                                        </button>
                                        <strong>Permiso N°</strong>
                                        @foreach ($permits as $permit)
                                            <button onclick="permit({{ $permit->id }})"
                                                class="p-1 inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
                                                <span>{{ $permit->permit_number }}</span>
                                            </button>
                                        @endforeach
                                        <button {{-- onclick="view({{ $permit->id }})" --}}
                                            class="inline-flex items-center justify-center  bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </button>
                                    </h1>
                                </div>
                            </div>

                        </header>
                        <!-- body -->
                        <div class="grid grid-cols-5 gap-4">
                            <div class="border-b text-black text80 dark:text-white "><strong>Fecha
                                    Inicio:</strong>
                                {{ $contracSelected->date_start_contract }}
                                <strong>Fecha final:</strong> {{ $contracSelected->contract_end_date }} <br>
                                <strong>Se firma el:</strong>{{ $contracSelected->contract_signing_date }}
                            </div>
                            <div class="border-b text-black text80 dark:text-white "><strong>tipo de
                                    Pago:</strong>
                                @switch($contracSelected->tipe_pay)
                                    @case(1)
                                        De Contado
                                    @break

                                    @case(2)
                                        el 50% a la firma del
                                        contrato...
                                    @break

                                    @case(3)
                                        Otro
                                    @break

                                    @default
                                @endswitch
                            </div>
                            <div class="border-b text-black text80 dark:text-white "><strong>Valor del
                                    Contrato:</strong>
                                ${{ number_format($contracSelected->contract_value, 2, ',', '.') }}</div>
                            <div class="border-b text-black text80 dark:text-white "><strong>Cant.
                                    Vehiculos:</strong>
                                {{ $contracSelected->quantity_vehicle }} <br>
                                <strong>Cant. Pasajeros:</strong> {{ $contracSelected->passenger_quantity }}
                            </div>
                            <div class="border-b text-black text80 dark:text-white "><strong>Nombre
                                    Contratante:</strong>
                                {{ $contracSelected->contracting_name }}</div>
                            <div class="border-b text-black text80 dark:text-white ">
                                <strong>Identificación:</strong>
                                @switch($contracSelected->identification)
                                    @case(1)
                                        Cedula de Ciudadania
                                    @break

                                    @case(2)
                                        Cedula de Extranjeria
                                    @break

                                    @case(3)
                                        Documento Definido para información Exógena
                                    @break

                                    @case(4)
                                        Nit
                                    @break

                                    @case(5)
                                        Pasaporte
                                    @break

                                    @case(6)
                                        Registro Civil
                                    @break

                                    @case(7)
                                        Tarjeta de Extranjeria
                                    @break

                                    @case(8)
                                        Tarjeta de Identidad
                                    @break

                                    @case(9)
                                        Tipo de Documento Extranjero
                                    @break

                                    @default
                                @endswitch
                                <br> <strong>Cedula Contratante:</strong>
                                {{ $contracSelected->contract_document }}
                            </div>
                            <div class="border-b text-black text80 dark:text-white "><strong>Expedida
                                    en:</strong>
                                {{ $contracSelected->expedition_identificationcard }}</div>
                            <div class="border-b text-black text80 dark:text-white ">
                                <strong>Dirección:</strong>
                                {{ $contracSelected->contracting_direction }}
                                <br> <strong>Telefono:</strong> {{ $contracSelected->contracting_phone }}
                            </div>
                            <div class="border-b text-black text80 dark:text-white "><strong>Nombre
                                    Representante
                                    Legal:</strong> {{ $contracSelected->legal_representative }}</div>
                            <div class="border-b text-black text80 dark:text-white ">
                                <strong>Identificación Repres.
                                    Legal:</strong>
                                @switch($contracSelected->identification_represent_legal)
                                    @case(1)
                                        Cedula de Ciudadania
                                    @break

                                    @case(2)
                                        Cedula de Extranjeria
                                    @break

                                    @case(3)
                                        Documento Definido para información Exógena
                                    @break

                                    @case(4)
                                        Nit
                                    @break

                                    @case(5)
                                        Pasaporte
                                    @break

                                    @case(6)
                                        Registro Civil
                                    @break

                                    @case(7)
                                        Tarjeta de Extranjeria
                                    @break

                                    @case(8)
                                        Tarjeta de Identidad
                                    @break

                                    @case(9)
                                        Tipo de Documento Extranjero
                                    @break

                                    @default
                                @endswitch
                                <br> <strong>Expedida en:</strong>
                                {{ $contracSelected->legal_representative_expedition_identificationcard }}
                            </div>
                            @if ($contracSelected->type_contract == 1)
                                <div class="border-b text-black text80 dark:text-white "><strong>Nombre
                                        Colegio:</strong>
                                    {{ $contracSelected->school_name }}
                                    <br> <strong>Poliza:</strong> {{ $contracSelected->secure_policy }}
                                </div>
                                <div class="border-b text-black text80 dark:text-white ">
                                    <strong>Dirección:</strong>
                                    {{ $contracSelected->address_school }}
                                </div>
                            @endif
                            @if (
                                $contracSelected->type_contract == 2 ||
                                    $contracSelected->type_contract == 3 ||
                                    $contracSelected->type_contract == 5)
                                <div class="border-b text-black text80 dark:text-white">
                                    <strong>Empresa:</strong> {{ $contracSelected->entity_name }} <br>
                                    <strong>Cooperación:</strong> {{ $contracSelected->cooperation_contract }}
                                </div>
                            @endif
                            {{-- <div class="border-b text-black text80 dark:text-white "><strong>Viaje
                                    desde:</strong>
                                {{ $contracSelected->trip_from }}
                                <br> <strong>Viaje hasta:</strong> {{ $contracSelected->trip_to }}
                            </div> --}}
                            {{-- <div class="border-b text-black text80 dark:text-white "><strong>Lugar de
                                    Origen:</strong>
                                {{ $contracSelected->place_of_origin }}
                                <br> <strong>Retorno:</strong> {{ $contracSelected->return_place }}
                                <br> <strong>destino:</strong> {{ $contracSelected->destination_place }}
                            </div> --}}
                            <div class="border-b text-black text80 dark:text-white "><strong>Ruta
                                    Contrato:</strong>
                                {{ $contracSelected->route_trip_contract }}</div>
                            @if ($contracSelected->type_contract == 4)
                                <div class="border-b text-black text80 dark:text-white">
                                    <strong>Representante del grupo:</strong> <br>
                                    {{ $contracSelected->group_representative_name }}
                                    <strong>Identificación:</strong>
                                    @switch($contracSelected->identificationcard_representative_group)
                                        @case(1)
                                            Cedula de Ciudadania
                                        @break

                                        @case(2)
                                            Cedula de Extranjeria
                                        @break

                                        @case(3)
                                            Documento Definido para información Exógena
                                        @break

                                        @case(4)
                                            Nit
                                        @break

                                        @case(5)
                                            Pasaporte
                                        @break

                                        @case(6)
                                            Registro Civil
                                        @break

                                        @case(7)
                                            Tarjeta de Extranjeria
                                        @break

                                        @case(8)
                                            Tarjeta de Identidad
                                        @break

                                        @case(9)
                                            Tipo de Documento Extranjero
                                        @break

                                        @default
                                    @endswitch
                                </div>
                                <div class="border-b text-black text80 dark:text-white"><strong>Expedida
                                        en:</strong>
                                    {{ $contracSelected->dateofexpedition_representative_group }}
                                </div>
                            @endif
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    {{-- componentes de modal --}}

    <!--Modal View -->

    <div id="modalView"
        class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div class="w-9-12 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 overflow-x-hidden overflow-y-auto"
            role="dialog" id="modalView">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-center border-b-fuchsia-800 border-b">
                <!-- Modal title -->
                <button
                    class="ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                    aria-label="close" x-on:click="closeModal"onclick="limpiar(),restart();" wire:click="clear">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="mt-4 mb-6" wire:ignore.self>
                <!-- Modal description -->
            </div>
            <div wire:ignore
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button x-on:click="closeModal"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
                <button id="btnStore"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Accept
                </button>
            </div>
        </div>
    </div>

    <!--end Modal View -->

    <!--Modal Permit -->

    <div id="modalPermit"
        class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div class="w-9-12 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 overflow-x-hidden overflow-y-auto"
            role="dialog" id="modalPermit">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-center border-b-fuchsia-800 border-b">
                <!-- Modal title -->
                <button
                    class="ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                    aria-label="close" x-on:click="closeModal"onclick="limpiar(),restart();" wire:click="clear">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="mt-4 mb-6" wire:ignore.self>
                <!-- Modal description -->
                {{-- <iframe src="{{ asset('img/CONTRATO_VINCULACION.pdf') }}
                &embedded=true" style="width:1000%; height:700px;" frameborder="0" >
            </iframe> --}}


                <embed src="{{ asset('img/CONTRATO_VINCULACION.pdf') }}" type="application/pdf" width="100%"
                    height="100%">

            </div>
            <div wire:ignore
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button x-on:click="closeModal"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
                <button id="btnStore"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Accept
                </button>
            </div>
        </div>
    </div>

    <!--end Modal Permit -->

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
                                <button type="button" id="contractSigned"
                                    class="text-white w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file">
                                    Seleciona el Contrato Firmado<input id="InputContractSigned"
                                        wire:model.defer="contractSigned" type="file"
                                        onchange="waitingDocument(),documentAboveC('InputContractSigned','contractSigned')"
                                        class="upload-input">
                                </button>
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
                <button id="" wire:click="contractSigned()"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Subir
                </button>
            </div>
        </div>
    </div>


</div>

@section('scripts')
    <script>
        // abriendo modal para editar
        Livewire.on('openModalView', () => {
            viewhideinputs('modalView', 'block', 'hidden');
        })

        // enviando los datos para que los reciba la modal editar
        function veiw(id) {

            let timerInterval
            swal.fire({
                title: 'loading...',
                html: 'Loading system information into <b></b> milliseconds.', //Cargando la información del sistema en
                timer: 2000,
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

            Livewire.emit('veiw', [id]);

        }

        // abriendo modal para editar
        Livewire.on('openModalPermit', () => {
            viewhideinputs('modalPermit', 'block', 'hidden');
        })

        // enviando los datos para que los reciba la modal editar
        function permit(id) {

            let timerInterval
            swal.fire({
                title: 'loading...',
                html: 'Loading system information into <b></b> milliseconds.', //Cargando la información del sistema en
                timer: 2000,
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

            Livewire.emit('permit', [id]);

        }

        function viewhideinputs(id, adhere, stirring) {

            document.getElementById(id).classList.remove(stirring);
            document.getElementById(id).classList.add(adhere);
        }

        function Tooltip(flag) {

            flag ? $('#tooltip').removeClass('hidden') : $('#tooltip').addClass('hidden');

        }

        function modalDocumentation(contract_id, contractType, numberContract) {

            console.log(contract_id, contractType, numberContract);
            @this.set('contract_id', contract_id);
            @this.set('contractType', contractType);
            @this.set('numberContract', numberContract);
            viewhideinputs('modalDoc', 'block', 'hidden');
            // Livewire.emit('updateDocumentation');

        }

        function waitingDocument() {
            let timerInterval
            swal.fire({
                title: '',
                html: 'Cargando contrato firmado en <b></b> milliseconds.',
                timer: 2000,
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
                    // console.log('I was closed by the timer')
                    swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Documento cargado',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })
        }

        function closeModalDoc() {
            viewhideinputs('modalDoc', 'hidden', 'block');
            
            $('#frmDocument').trigger("reset");
        }

        function documentAboveC(input, color) {

            var inputDocument = document.getElementById(input).value;

            if (inputDocument != '' || inputDocument != 0) {
                document.getElementById(color).classList.remove('bg-purple-600', 'text-white', 'active:bg-purple-600',
                    'hover:bg-purple-700');
                document.getElementById(color).classList.add('bg-green-600', 'active:bg-green-600', 'hover:bg-green-700');
                // console.log('si');
            } else {
                document.getElementById(color).classList.add('bg-purple-600', 'text-white', 'active:bg-purple-600',
                    'hover:bg-purple-700');
                document.getElementById(color).classList.remove('bg-green-600', 'active:bg-green-600',
                    'hover:bg-green-700');
            }
        }

        Livewire.on('outputs', (contractnumber, contractType, process) => {

            var process = process.process;
            var contractnumber = contractnumber.contractnumber;
            var contractType = contractType.contractType;
            var message = ['El contrato numero ' + contractnumber + ' de ' + contractType +
                ' se ha firmado',
                'No se pudo firmar el contrato de ' + contractType + ' número ' + contractnumber];

            if (process == 1) {
                swal.fire('', message[0], 'success')
            } else {
                swal.fire('', message[1], 'error')
            }
        })
    </script>
@endsection
