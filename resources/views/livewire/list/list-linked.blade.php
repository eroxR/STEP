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
                        <button id="title" wire:click="order()">{{ __('Linked List') }}</button>
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
                                            <div class="border-b text-black text80 dark:text-white "><strong>Viaje
                                                    desde:</strong>
                                                {{ $contract->trip_from }}
                                                <br> <strong>Viaje hasta:</strong> {{ $contract->trip_to }}
                                            </div>
                                            <div class="border-b text-black text80 dark:text-white "><strong>Lugar de
                                                    Origen:</strong>
                                                {{ $contract->place_of_origin }}
                                                <br> <strong>Retorno:</strong> {{ $contract->return_place }}
                                                <br> <strong>destino:</strong> {{ $contract->destination_place }}
                                            </div>
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

                                            @default
                                        @endswitch
                                    </h1>
                                </div>
                                <div class="text-black dark:text-white">
                                    <h1>
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
                            <div class="border-b text-black text80 dark:text-white "><strong>Viaje
                                    desde:</strong>
                                {{ $contracSelected->trip_from }}
                                <br> <strong>Viaje hasta:</strong> {{ $contracSelected->trip_to }}
                            </div>
                            <div class="border-b text-black text80 dark:text-white "><strong>Lugar de
                                    Origen:</strong>
                                {{ $contracSelected->place_of_origin }}
                                <br> <strong>Retorno:</strong> {{ $contracSelected->return_place }}
                                <br> <strong>destino:</strong> {{ $contracSelected->destination_place }}
                            </div>
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
    </script>
@endsection
