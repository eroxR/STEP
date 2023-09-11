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
                                            {{-- @if ($contract->type_contract == 2 || $contract->type_contract == 3 || $contract->type_contract == 5)
                                                <div class="border-b text-black text80 dark:text-white">
                                                    <strong>Empresa:</strong> {{ $contract->entity_name }} <br>
                                                    <strong>Cooperación:</strong> {{ $contract->cooperation_contract }}
                                                </div>
                                            @endif --}}
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
                                                onclick="modalDocumentation({{ $contracSelected->id }},{{ $contracSelected->type_contract }},{{ $contracSelected->contract_number }})"
                                                onmouseover="Tooltip(true,'tooltip2')"
                                                onmouseleave="Tooltip(false,'tooltip2')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                                    id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24"
                                                    width="512" height="512">
                                                    <path
                                                        d="M19,3h-6.528c-.154,0-.31-.036-.447-.105l-3.153-1.576c-.415-.208-.879-.318-1.344-.318h-2.528C2.243,1,0,3.243,0,6v12c0,2.757,2.243,5,5,5h3c.552,0,1-.447,1-1s-.448-1-1-1h-3c-1.654,0-3-1.346-3-3V9H22v9c0,1.654-1.346,3-3,3h-3c-.552,0-1,.447-1,1s.448,1,1,1h3c2.757,0,5-2.243,5-5V8c0-2.757-2.243-5-5-5ZM2,6c0-1.654,1.346-3,3-3h2.528c.154,0,.308,.036,.447,.106l3.156,1.577c.415,.207,.878,.316,1.341,.316h6.528c1.302,0,2.402,.839,2.816,2H2v-1ZM14.293,15.896l-1.293-1.293v7.397c0,.553-.448,1-1,1s-1-.447-1-1v-7.397l-1.293,1.293c-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l1.613-1.613c1.118-1.119,3.069-1.119,4.188,0l1.613,1.613c.391,.391,.391,1.023,0,1.414s-1.023,.391-1.414,0Z" />
                                                </svg>
                                                <div id="tooltip2" role="tooltip"
                                                    class="hidden fixed mt4 border transition-colors duration-150 text-white text-sm bg-gray-900 px-2 rounded-md">
                                                    Firmar Contrato
                                                </div>
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
                                            aria-label="view" onmouseover="Tooltip(true,'tooltip')"
                                            onmouseleave="Tooltip(false,'tooltip')"
                                            onclick="openModalFuec({{ $contracSelected->id }},{{ $contracSelected->type_contract }},true)">
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
                                            class="inline-flex items-center justify-center  bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"
                                            onclick="openModalFuec({{ $contracSelected->id }},{{ $contracSelected->type_contract }},false)">
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
                            {{-- @if ($contracSelected->type_contract == 2 || $contracSelected->type_contract == 3 || $contracSelected->type_contract == 5)
                                <div class="border-b text-black text80 dark:text-white">
                                    <strong>Empresa:</strong> {{ $contracSelected->entity_name }} <br>
                                    <strong>Cooperación:</strong> {{ $contracSelected->cooperation_contract }}
                                </div>
                            @endif --}}
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

    <!--Modal Firma Contrato -->

    <div id="modalDoc" wire:ignore
        class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-md30"
            role="dialog" id="modalDoc">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-center border-b-fuchsia-800 border-b">
                <!-- Modal title -->
                <h1 class="dark:text-white">Adjuntar Contrato firmado</h1>
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

    <!--end Firma Contrato -->

    <!--Modal Fuec -->

    <div id="modalFuec" wire:ignore x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" id="modalEdit" wire:ignore.self
        class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2"
            class="w-9-12 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 "
            role="dialog">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-center border-b-fuchsia-800 border-b">
                <!-- Modal title -->
                <p class="justify-start mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                <h1 class="text-black dark:text-white text-4xl1">{{ __('Creating new permit') }}<span id="typed2"
                        class="typed2">.</span>
                    <span id="typed3" class="typed3">.</span>
                    <span id="typed4" class="typed4">.</span>
                    <span id="typed5" class="typed5">.</span>
                </h1>
                </p>
                <button
                    class="ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                    aria-label="close" onclick="closeModalFuec()">
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

                <form role="form" action="" method="post" id="Frmpermit"
                    class="f1 px-4 my-32 max-w-3xl mx-auto space-y-6">

                    <div class="f1-steps" wire:ignore>
                        <div class="f1-progress">
                            <div class="f1-progress-line" data-now-value="33" data-number-of-steps="3"
                                style="width: 100%;"></div>
                        </div>
                        <div class="f1-step-icon">
                        </div>
                    </div>

                    <!-- Modal description -->
                    <div
                        class="mt-11 border-gray-50-s container px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9 ">

                        <!--paso 1 -->
                        <fieldset wire:ignore.self>
                            {{-- <br> --}}

                            <div class="flex space-x-4" wire:ignore>

                                <div class="w-6-12" id="divPermitStartDate" onchange="changeDate()">
                                    <label class=" text-gray-700 dark:text-gray-400"
                                        id="labelPermitStartDate">{{ __('permit start date') }}</label>

                                    <input readonly
                                        class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="fecha inicio permiso" type="text" name="permit_start_date"
                                        id="permit_start_date" wire:model="permit_start_date"
                                        onchange="fechasSet('permit_start_date')" />
                                </div>

                                <div class="w-6-12" id="divPermitEndDate" onchange="changeDate()">
                                    <label class=" text-gray-700 dark:text-gray-400"
                                        id="labelPermitEndDate">{{ __('permit end date') }}</label>

                                    <input readonly
                                        class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="fecha fin permiso" type="text" name="permit_end_date"
                                        id="permit_end_date" wire:model="permit_end_date"
                                        onchange="fechasSet('permit_end_date')" />
                                </div>

                            </div>

                            <br>

                            <div class="flex space-x-4">

                                <div class="w-full" id="divDriving">

                                    <label class="text-gray-700 dark:text-gray-400" id="labelDriving">Selecciona un
                                        conductor</label>
                                    <button id="chooseDrivers"
                                        class="Inactive ml-1-5 px-2 py-1 font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white"
                                        type="button"
                                        onclick="enable('select2','chooseDrivers')">{{ __('choose drivers') }}
                                    </button>

                                    <select wire:model="driving" id="driving" name="driving" style="width: 100%"
                                        class="select2 " multiple="muliple">

                                        @foreach ($drivers as $driver)
                                            <option value="{{ $driver->id }}">CC. {{ $driver->identificationcard }}
                                                -
                                                Nombre: {{ $driver->nameFull }}</option>
                                        @endforeach

                                    </select>
                                </div>


                            </div>

                            <br>
                            <br>

                            <div class="flex space-x-4">

                                <div class="w-full" id="divCars">

                                    <label class="text-gray-700 dark:text-gray-400" id="labelCars">Selecciona los
                                        Vehiculos
                                    </label>
                                    <button id="chooseVehicles"
                                        class="Inactive ml-1-5 px-2 py-1 font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white"
                                        type="button"
                                        onclick="enable('car','chooseVehicles')">{{ __('choose vehicles') }}
                                    </button>

                                    <select wire:model="cars" name="cars" style="width: 100%;" id="cars"
                                        class="car bg-green-700 bg-opacity-50" multiple="muliple">
                                        @foreach ($vehicles as $vehicle)
                                            <option value="{{ $vehicle->id }}">
                                                placa: {{ $vehicle->plate_vehicle }}
                                                lateral: {{ $vehicle->side_vehicle }}
                                                SOAT:{{ $vehicle->secure_end_date }}
                                                {{-- fecha fin tecno: {{ $vehicle->technomechanical_end_date }} --}}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>

                            <br>
                            <div wire:ignore class="f1-buttons Inactive" id="fieldset1Buttons">
                                <button type="button"
                                    class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                            </div>

                        </fieldset>
                        <!--fin del paso 1 -->


                        <!--paso fin -->
                        <fieldset wire:ignore>

                            <br>
                            <div class="flex space-x-4">
                                <button type="button" id="previous5"
                                    class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                            </div>
                        </fieldset>
                        <!--fin -->

                    </div>

                </form>
            </div>
            <div wire:ignore
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button x-on:click="closeModal"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                    wire:click="clear" onclick="limpiar(),restart();">
                    {{ __('Cancel') }}
                </button>
                <button id="btnGenerate"
                    class="Inactive w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    wire:click="permission" {{-- onclick="restart()" x-on:click="closeModal" --}}>
                    {{ __('Generate Permit') }}
                </button>
            </div>
        </div>
    </div>


    <!--end Fuect -->




</div>

@section('scripts')
    <script>
        var limitcars = 0;
        // abriendo modal para crear Fuec
        function openModalFuec(id, typeContract, contingency) {
            Livewire.emit('limitOfCars', [id], [typeContract], [contingency]);
        }

        Livewire.on('assignLimit', (limitcar) => {

            limitcars = limitcar.limitcar;

            console.log(limitcars);

            if (limitcars > 1) {
                single = ' conductores y vehiculos';
            } else {
                single = ' conductor y un vehiculo';
            }

            message = 'recuerda solo puedes escoger ' + limitcars + single;

            if (limitcars => 1) {
                swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                });


            }
            // viewhideinputs('fieldset1Buttons', 'Inactive', 'Active');
            viewhideinputs('modalFuec', 'block', 'hidden');


        });

        function closeModalFuec() {
            viewhideinputs('modalFuec', 'hidden', 'block');

            // $('#frmDocument').trigger("reset");
        }

        // $(document).ready(function() {
        //     // viewhideinputs('modalFuec', 'block', 'hidden');
        //     Livewire.emit('limitOfCars', [9064], [5], [true]);
        // });

        function changeDate() {
            var dateStart = document.getElementById('permit_start_date').value;
            var dateEnd = document.getElementById('permit_end_date').value;

            if (dateStart != "" && dateEnd != "") {
                save();
            }
            console.log(limitcars);
        }

        $('.select2').select2({}).on('change', function() {
            console.log($(this).val());
            @this.set('driving', $(this).val());

            if ($(this).val().length == limitcars) {
                swal.fire(
                    '',
                    'ya no puedes escoger mas Conductores',
                    'warning'
                )
                $(".select2").prop("disabled", true);
                document.getElementById('chooseDrivers').classList.remove('Inactive');
                save();
            }

        });


        $('.car').select2({}).on('change', function() {
            // console.log($(this).val())
            @this.set('cars', $(this).val());

            if ($(this).val().length == limitcars) {
                swal.fire(
                    '',
                    'ya no puedes escoger mas Vehiculos',
                    'warning'
                )
                $(".car").prop("disabled", true);
                document.getElementById('chooseVehicles').classList.remove('Inactive');
                save();
            }

        });

        function save() {

            var dateStart = document.getElementById('permit_start_date').value;
            var dateEnd = document.getElementById('permit_end_date').value;

            if ($(".select2").val().length == limitcars && $(".car").val().length == limitcars && dateStart != "" &&
                dateEnd != "") {
                // document.getElementById('chooseDrivers').classList.remove('Inactive');
                // document.getElementById('btnStore').classList.remove('Inactive');
                viewhideinputs('btnGenerate', 'Active', 'Inactive');
            } else {
                viewhideinputs('btnGenerate', 'Inactive', 'Active');
            }
        }

        function enable(id, botom) {

            // if ($("."+id).val().length >= 2) {
            $("." + id).val(null).trigger('change');
            // }
            // $("#select2").select2({disabled:false});
            $("." + id).prop("disabled", false);
            viewhideinputs(botom, 'Inactive', 'Active');
            viewhideinputs('btnGenerate', 'Inactive', 'Active');
        }

        $('#permit_start_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        $('#permit_end_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });


        function fechasSet(id) {

            $('#' + id).on('change', function(e) {
                @this.set(id, e.target.value);
            });
        }

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

        const steps = ['1', '2'];
        const swalQueueStep = swal.mixin({
            icon: 'error',
            confirmButtonText: 'Vehiculos',
            cancelButtonText: 'Conductores',
            progressSteps: steps,
            // input: 'text',
            // inputAttributes: {
            //     required: true
            // },
            reverseButtons: true,
            // validationMessage: 'This field is required'
        });

        const values = [];
        let currentStep;

        Livewire.on('crud', (contractnumber, process, contractType, id, permit_number, contingency) => {

            var process = process.process;
            var contractnumber = contractnumber.contractnumber;
            var contractType = contractType.contractType;
            var id = id.id;
            var permit_number = permit_number.permit_number;
            var contingency = contingency.contingency;
            var main = '';
            var message = '';

            if (process == 1) {

                main = 'Permit number ' + permit_number + ' of contract number ' + contractnumber + ' type ' +
                    contractType + ' has been successfully generated';

                // Se ha generado el permiso numero xxx del contrato  numero xxx tipo xxx sactisfactoriamente

                if (contingency == true) {
                    window.open('http://127.0.0.1:8000/pdfs/pdf-fuec/' + id, '_blank')
                    swal.fire(main, message, 'success')
                } else {
                    swal.fire({
                        title: 'you want to generate pdf?',
                        showDenyButton: false,
                        showCancelButton: true,
                        confirmButtonText: 'Generate PDF',
                        denyButtonText: ``,
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {

                            window.open('http://127.0.0.1:8000/pdfs/pdf-fuec/' + id, '_blank')
                            swal.fire(main, message, 'success')
                        } else if (result.isDenied) {

                        } else {
                            swal.fire(main, message, 'success')
                        }
                    })
                }

            } else if (process == 2) {

                message = 'Permit number ' + permit_number + ' of contract number ' + contractnumber +
                    ' type ' + contractType + ' has been successfully updated';

                // Se ha actualizado el permiso numero xxx del contrato numero xxx tipo xxx sactisfactoriamente

                swal.fire(main, message, 'success')

            } else if (process == 3) {

                message = 'Permit number ' + permit_number + ' of contract number ' + contractnumber +
                    ' type ' + contractType + ' has been removed successfully';

                // Se ha eliminado el permiso numero xxx del contrato numero xxx tipo xxx sactisfactoriamente

                swal.fire(main, message, 'success')
            } else if (process == 4) {

                var driverHTML = '';

                driverHTML +=
                    '<strong><h2>Revisa la fecha final del FUEC, puesto que para los siguientes conductores o vehiculos estan vencidos o se vencen documentos dentro de la vigencia del FUEC</h2></strong> <br>';
                if (id != null) {
                    for (let a = 0; a < id.length; a++) {
                        driverHTML += '<div>' +
                            '<h1> <strong>Conductor</strong> ' + id[a]['fullname'] + '</h1>' +
                            '<table class="w-full whitespace-no-wrap">' +
                            '<thead>' +
                            '<tr' +
                            'class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">' +
                            '<th class="">Documento</th>' +
                            '<th class="">Fecha Vencimiento</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody class=" divide-y dark:divide-gray-700 ">';

                        for (let i = 1; i < Object.keys(id[a].documents).length; i++) {

                            driverHTML += '<tr class="text-gray-700 dark:text-gray-400">' +
                                '<td class=" text-sm">' +
                                '<span type = "button"' +
                                'class ="text-white w-full text-xs leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file" >' +
                                id[a]['documents']['document' + [i]] +
                                '</span>' +
                                '</td>' +
                                '<td class=" text-xs">' +
                                '<span type = "button"' +
                                'class ="text-white w-full text-xs leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file" >' +
                                id[a]['dates']['date' + [i]] +
                                '</span>' +
                                '</td>' +
                                '</tr>';

                        }
                        driverHTML += '</tbody>' +
                            '</table>' +
                            '</div>';
                    }
                }

                var vehicleHTML = '';

                vehicleHTML +=
                    '<strong><h2>Revisa la fecha final del FUEC, puesto que para los siguientes conductores o vehiculos estan vencidos o se vencen documentos dentro de la vigencia del FUEC</h2></strong> <br>';
                if (permit_number != null) {
                    for (let a = 0; a < permit_number.length; a++) {
                        vehicleHTML += '<div>' +
                            '<h1> <strong>Placa</strong> ' + permit_number[a]['plate'] + '</h1>' +
                            '<table class="w-full whitespace-no-wrap">' +
                            '<thead>' +
                            '<tr' +
                            'class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">' +
                            '<th class="">Documento</th>' +
                            '<th class="">Fecha Vencimiento</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody class=" divide-y dark:divide-gray-700 ">';

                        for (let i = 1; i < Object.keys(permit_number[a].documents).length; i++) {

                            vehicleHTML += '<tr class="text-gray-700 dark:text-gray-400">' +
                                '<td class=" text-sm">' +
                                '<span type = "button"' +
                                'class ="text-white w-full text-xs leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file" >' +
                                permit_number[a]['documents']['document' + [i]] +
                                '</span>' +
                                '</td>' +
                                '<td class=" text-xs">' +
                                '<span type = "button"' +
                                'class ="text-white w-full text-xs leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file" >' +
                                permit_number[a]['dates']['date' + [i]] +
                                '</span>' +
                                '</td>' +
                                '</tr>';

                        }
                        vehicleHTML += '</tbody>' +
                            '</table>' +
                            '</div>';
                    }
                }

                // Definimos una función asincrónica que contiene el bucle
                async function runSteps() {
                    for (currentStep = 0; currentStep < steps.length;) {

                        // console.log(currentStep);
                        // let newcontenidoHTML = '';

                        if (currentStep == 1) {
                            // console.log('si');
                            contenidoHTML = vehicleHTML;
                        } else {
                            // console.log('no');
                            contenidoHTML = driverHTML;
                        }

                        const result = await swalQueueStep.fire({
                            // title: `Question ${steps[currentStep]}`,
                            html: contenidoHTML,
                            // inputValue: values[currentStep],
                            showCancelButton: currentStep > 0,
                            showConfirmButton: currentStep == 0,
                            currentProgressStep: currentStep
                        });

                        if (result.value) {
                            values[currentStep] = result.value;
                            currentStep++;
                        } else if (result.dismiss === swal.DismissReason.cancel) {
                            currentStep--;
                        } else {
                            break;
                        }
                    }

                    // if (currentStep === steps.length) {
                    //     swal.fire(JSON.stringify(values));
                    // }
                }

                // Llamamos a la función asincrónica para ejecutar el código
                runSteps();
            } else if (process == 5) {

                message =
                    'Las fechas del Fuec deben de estar dentro de la fecha de inicio y la fecha final del contrato N° ' +
                    contractnumber + ' de ' + contractType;

                swal.fire(main, message, 'error')
            } else if (process == 6) {

                message =
                    'El contrato N° ' + contractnumber + ' de ' + contractType +
                    ' debe de estar en estado "EN CURSO" para poder asignarle un permiso';

                swal.fire(main, message, 'error')
            }

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

        function Tooltip(flag, camp) {

            flag ? $('#' + camp).removeClass('hidden') : $('#' + camp).addClass('hidden');

        }

        function modalDocumentation(contract_id, contractType, numberContract) {

            // console.log(contract_id, contractType, numberContract);
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
                'No se pudo firmar el contrato de ' + contractType + ' número ' + contractnumber,
                'Primero debes agregar el pdf de un contrato ya firmado para poder firmar este contrato'
            ];

            if (process == 1) {
                swal.fire('', message[0], 'success')
            } else if (process == 2) {
                swal.fire('', message[1], 'error')
            } else if (process == 3) {
                swal.fire('', message[2], 'error')
            }
        })

        //scritp de formulario paso a paso

        jQuery(document).ready(function() {


            $('#top-navbar-1').on('shown.bs.collapse', function() {
                $.backstretch("resize");
            });
            $('#top-navbar-1').on('hidden.bs.collapse', function() {
                $.backstretch("resize");
            });

            $('.f1 fieldset:first').fadeIn('slow');

            $('.f1 input[type="text"], .f1 input[type="password"], .f1 textarea, .f1 select, .f1 input[type="number"], .f1 input[type="tel"], .f1 input[type="email"], .f1 input[type="date"]')
                .on('focus', function() {
                    $(this).removeClass('input-error');
                });
            // console.log('estado inicial ' + stepinfinite)
        });

        //fin scritp de formulario paso a paso

        function restart() {
            // console.log(current_active_step_a);
            $('.f1 fieldset').fadeOut(400, function() {

                progress_line.attr('style', 'width: ' + 34 + '%;').data('now-value', 33);

                // scroll window to beginning of the form
                scroll_to_class($('.f1'), 20);
            });

            document.getElementById('btnGenerate').classList.remove('Active');
            document.getElementById('btnGenerate').classList.add('Inactive');
        }

        function viewhideinputs(id, adhere, stirring) {

            document.getElementById(id).classList.remove(stirring);
            document.getElementById(id).classList.add(adhere);
        }
    </script>
@endsection
