<div>

    <div class="py-12 mb-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="roundedx1 mt5 mr3 fixed inset-y-0 flex items-end bg-black bg-opacity-50 sm:items-center">
                <input id="input"
                    class="mt0-5 w19 ml1-4 top-0 absolute mr-4 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text" placeholder="Buscar X N° Fuec" wire:model="search">
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
                {{-- <button wire:click="$set('filtre',1)"
                    class="absolute top-0 ml25 mt1 px-2 py-1 font-semibold leading-tight text-white bg-emerald-700 rounded-full dark:bg-sky-700 dark:text-white">
                    Colegios
                </button> --}}
                {{-- <button wire:click="$set('filtre',2)"
                    class="absolute top-0 ml32 mt1 px-2 py-1 font-semibold leading-tight text-white bg-emerald-700 rounded-full dark:bg-sky-700 dark:text-white">
                    Empresas
                </button> --}}
                {{-- <button wire:click="$set('filtre',3)"
                    class="absolute top-0 ml40 mt1 px-2 py-1 font-semibold leading-tight text-white bg-emerald-700 rounded-full dark:bg-sky-700 dark:text-white">
                    Empresas Turismo
                </button> --}}
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
                    <header class="flex justify-center border-b-fuchsia-800 border-b bg-green-500 rounded-lg">
                        <!-- title -->
                        <button id="title" wire:click="order()">{{ __('Fuec List') }}</button>
                    </header>
                    <div class="h-4-7 overflow-y-auto">
                        <ul>
                            @foreach ($permits as $permit)
                                <li class="id hover:bg-green-500 hover:text-white border-b rounded-lg">
                                    <a wire:click="$set('ide',{{ $permit->id }})" href="#">
                                        N° {{ $permit->permit_number }}
                                        {{-- del contrato {{ $permit->contract_number }} --}}
                                        {{-- (@switch($permit->type_contract)
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
                                        @endswitch) --}}

                                        @foreach ($typeContracts as $typeContract)
                                            @if ($typeContract->id == $permit->contract)
                                                del contrato {{ $typeContract->contract_number }}
                                                @switch($typeContract->type_contract)
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
                                            @endif
                                        @endforeach

                                    </a>

                                    <div
                                        class="descrip absolute rounded-lg top-0 p1-6 h91 w77 mt3-5 ml18-6 bg-white dark:bg-gray-800 hidden">
                                        <header class="flex border-b-fuchsia-800 ">
                                            <!-- title -->
                                            <div class="grid grid-cols-2 gap-20">
                                                <div class="bg">
                                                    <h1 class="content-start text-black dark:text-white text-4xl0-9">
                                                        Permiso N° {{ $permit->permit_number }}
                                                        @foreach ($typeContracts as $typeContract)
                                                            @if ($typeContract->id == $permit->contract)
                                                                del contrato {{ $typeContract->contract_number }}
                                                                @switch($typeContract->type_contract)
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
                                                            @endif
                                                        @endforeach
                                                    </h1>
                                                </div>
                                                <div class="">
                                                    <h1 class="content-center text-black dark:text-white text-4xl1">
                                                        <button
                                                            class="inline-flex items-center justify-center  bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"
                                                            aria-label="view">
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
                                                        @switch($permit->fuec_state)
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
                                            </div>

                                        </header>
                                        <div class="grid grid-cols-5 gap-4">
                                            <div class="border-b text-black text80 dark:text-white "><strong>Fecha
                                                    Inicio:</strong>
                                                {{ $permit->permit_start_date }} <br>
                                                <strong>Fecha final:</strong> {{ $permit->permit_end_date }} <br>
                                                <strong>Codigo fuec:</strong> {{ $permit->permit_code }}
                                            </div>
                                            {{-- <div class="border-b text-yellow-600 text80 text-2xl">
                                                <br>
                                                <br>
                                                <strong>Vehiculos -></strong>
                                            </div> --}}
                                            @foreach ($allCars as $allCar)
                                                @if ($allCar->permit_id == $permit->id)
                                                    <div class="border-b text-black text80 dark:text-white ">
                                                        <p class="text-yellow-600 text-base"><strong>Vehiculo->{{$countCars = $countCars + 1}}</strong></p>
                                                        {{-- <strong>id:</strong> {{ $car->id }} <br> --}}
                                                        <strong>placa:</strong> {{ $allCar->plate_vehicle }} <br>
                                                        <strong>lateral:</strong> {{ $allCar->side_vehicle }} <br>
                                                        <strong>fin tecno.:</strong>
                                                        {{ $allCar->technomechanical_end_date }} <br>
                                                        <strong>fin Soat:</strong> {{ $allCar->secure_end_date }} <br>
                                                        <strong>fin tarjeta OP:</strong>
                                                        {{ $allCar->expiration_card_operation }}
                                                        <br>
                                                        <strong>fin Prevent.:</strong>
                                                        {{ $allCar->expiration_preventive }}
                                                    </div>
                                                @endif
                                            @endforeach
                                            {{$countCars = 0}}
                                            {{-- <div class="border-b text-yellow-600 text-xl">
                                                <br>
                                                <br>
                                                <strong>Conductores -></strong>
                                            </div> --}}
                                            @foreach ($allDrivers as $allDriver)
                                                @if ($allDriver->permit_id == $permit->id)
                                                    <div class="border-b text-black text80 dark:text-white ">
                                                        <p class="text-yellow-600 text-base"><strong>Conductor->{{$countDrive = $countDrive + 1}}</strong></p>
                                                        {{-- <strong>id:</strong> {{ $driver->id }} <br> --}}
                                                        <strong>documento:</strong>
                                                        {{ $allDriver->identificationcard }}
                                                        <br>
                                                        <strong>nombre:</strong> {{ $allDriver->firstname }}
                                                        {{ $allDriver->secondname }}
                                                        {{ $allDriver->lastname }} {{ $allDriver->motherslastname }}
                                                        <br>
                                                        <strong>tipo sangre:</strong> {{ $allDriver->blood_type }} <br>
                                                        <strong>fin licencia.:</strong>
                                                        {{ $allDriver->license_expiration }} <br>
                                                    </div>
                                                @endif
                                            @endforeach
                                            {{$countDrive = 0}}
                                        </div>

                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>


                </div>

                <div class="w-9-12 h-4-7 mt-12 mr-4 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg  overflow-x-hidden overflow-y-auto"
                    role="dialog" id="modal">
                    @foreach ($permitsSelected as $permitSelected)
                        <header class="flex border-b-fuchsia-800 ">
                            <!-- title -->
                            <div class="grid grid-cols-2 gap-20">
                                <div class="bg">
                                    <h1 class="content-start text-black dark:text-white text-4xl0-9">
                                        Permiso N° {{ $permitSelected->permit_number }}
                                        del contrato {{ $permitSelected->contract_number }}
                                        @switch($permitSelected->type_contract)
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
                                            aria-label="view">
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
                                        @switch($permitSelected->fuec_state)
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
                            </div>

                        </header>
                        <!-- body -->
                        <div class="grid grid-cols-5 gap-4">
                            <div class="border-b text-black text80 dark:text-white "><strong>Fecha
                                    Inicio:</strong>
                                {{ $permitSelected->permit_start_date }}
                                <strong>Fecha final:</strong> {{ $permitSelected->permit_end_date }} <br>
                                <strong>Codigo fuec:</strong> {{ $permitSelected->permit_code }}
                            </div>
                            {{-- <div class="border-b text-yellow-600 text80 text-2xl">
                            </div> --}}
                            
                            @foreach ($cars as $car)
                                <div class="border-b text-black text80 dark:text-white ">
                                    <p class="text-yellow-600 text-base"><strong>Vehiculo->{{$countCars = $countCars + 1}}</strong></p>
                                    {{-- <strong>id:</strong> {{ $car->id }} <br> --}}
                                    <strong>placa:</strong> {{ $car->plate_vehicle }} <br>
                                    <strong>lateral:</strong> {{ $car->side_vehicle }} <br>
                                    <strong>fin tecno.:</strong> {{ $car->technomechanical_end_date }} <br>
                                    <strong>fin Soat:</strong> {{ $car->secure_end_date }} <br>
                                    <strong>fin tarjeta OP:</strong> {{ $car->expiration_card_operation }} <br>
                                    <strong>fin Prevent.:</strong> {{ $car->expiration_preventive }}
                                </div>
                            @endforeach
                            {{-- <div class="border-b text-yellow-600 text-xl">
                                
                            </div> --}}
                            
                            @foreach ($drivers as $driver)
                                <div class="border-b text-black text80 dark:text-white ">
                                    <p class="text-yellow-600 text-base"><strong>Conductor->{{$countDrive = $countDrive + 1}}</strong></p>
                                    {{-- <strong>id:</strong> {{ $driver->id }} <br> --}}
                                    <strong>documento:</strong> {{ $driver->identificationcard }} <br>
                                    <strong>nombre:</strong> {{ $driver->firstname }} {{ $driver->secondname }}
                                    {{ $driver->lastname }} {{ $driver->motherslastname }} <br>
                                    <strong>tipo sangre:</strong> {{ $driver->blood_type }} <br>
                                    <strong>fin licencia.:</strong> {{ $driver->license_expiration }} <br>
                                </div>
                            @endforeach
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
