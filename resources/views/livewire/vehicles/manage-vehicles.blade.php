<div>
    <div class="py-12 mb-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="justify-center flex">
                {{-- class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-gray-50-s dark:bg-gray-800 dark:text-white" --}}
                <h1 class="text-black dark:text-white text-4xl rounded-lg border-b-orange-800 p-1">{{ __('Manage Vehicles') }}</h1>
            </div>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs mt-4">
            <div class="px-4 py-2 mb-2 mt-1 ml-2 flex items-center border-b-fuchsia-800 border-b">
                {{-- <h1 class="text-black dark:text-white">cambio de contraseña desde livewire</h1> --}}
                <input
                    class="flex-1 mr-4 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text" placeholder="Escribe una consulta sobre la tabla" wire:model="search">

                <button @click="openModal"
                    class="px-2 py-1 font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white">
                    {{ __('create new Vehicle') }}
                </button>
            </div>

            <div class=" overflow-x-auto" style="width:100%;" wire:ignore>

                <table id="example" class="stripe dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="pl-4 py-2" data-priority="0">{{ __('Actions') }}</th>
                            <th class="pl-4 py-2" data-priority="1">ID</th>
                            <th class="pl-4 py-2" data-priority="2">{{ __('plate vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="3">{{ __('model') }}</th>
                            <th class="pl-4 py-2" data-priority="4">{{ __('vehicle type') }}</th>
                            <th class="pl-4 py-2" data-priority="5">{{ __('side') }}</th>
                            <th class="pl-4 py-2" data-priority="6">{{ __('state') }}</th>
                            <th class="pl-4 py-2" data-priority="7">{{ __('infrastructure vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="8">{{ __('secure end date') }}</th>
                            <th class="pl-4 py-2" data-priority="9">{{ __('technomechanical end date') }}</th>
                            <th class="pl-4 py-2" data-priority="10">{{ __('internal external owner type') }}</th>
                            <th class="pl-4 py-2" data-priority="11">{{ __('owner vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="12">{{ __('driver id') }}</th>
                            <th class="pl-4 py-2" data-priority="13">{{ __('brand vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="14">{{ __('vehicle chassis number') }}</th>
                            <th class="pl-4 py-2" data-priority="15">{{ __('property card number') }}</th>
                            <th class="pl-4 py-2" data-priority="16">{{ __('cylinder vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="17">{{ __('number passenger') }}</th>
                            <th class="pl-4 py-2" data-priority="18">{{ __('certificate extracontractual') }}</th>
                            <th class="pl-4 py-2" data-priority="19">{{ __('civil contractual') }}</th>
                            <th class="pl-4 py-2" data-priority="20">{{ __('card operation') }}</th>
                            <th class="pl-4 py-2" data-priority="21">{{ __('expiration card operation') }}</th>
                            <th class="pl-4 py-2" data-priority="22">{{ __('expiration preventive') }}</th>
                            <th class="pl-4 py-2" data-priority="23">{{ __('admission date') }}</th>
                            <th class="pl-4 py-2" data-priority="24">{{ __('vehicle pickup date') }}</th>
                            <th class="pl-4 py-2" data-priority="25">{{ __('engine number') }}</th>
                            <th class="pl-4 py-2" data-priority="26">{{ __('use vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="27">{{ __('color vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="28">{{ __('type direction') }}</th>
                            <th class="pl-4 py-2" data-priority="29">{{ __('front suspension') }}</th>
                            <th class="pl-4 py-2" data-priority="30">{{ __('rear suspension') }}</th>
                            <th class="pl-4 py-2" data-priority="31">{{ __('dimension rims') }}</th>
                            <th class="pl-4 py-2" data-priority="32">{{ __('rear brake type') }}</th>
                            <th class="pl-4 py-2" data-priority="33">{{ __('front brake type') }}</th>

                        </tr>
                    </thead>
                    <tbody {{-- class="dark:bg-gray-800 dark:text-white" --}}>
                    </tbody>

                </table>

                                    ID

                                    @if ($sort == 'id')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-2" wire:click="order('plate_vehicle')">

                                    {{ __('plate vehicle') }}

                                    @if ($sort == 'plate_vehicle')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-2" wire:click="order('model_vehicle')">

                                    {{ __('model vehicle') }}

                                    @if ($sort == 'model_vehicle')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-2" wire:click="order('vehicle_type_name')">

                                    {{ __('vehicle type name') }}

                                    @if ($sort == 'vehicle_type_name')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-2" wire:click="order('side_vehicle')">

                                    {{ __('side vehicle') }}

                                    @if ($sort == 'side_vehicle')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-2" wire:click="order('vehicle_class_description')">

                                    {{ __('vehicle class description') }}

                                    @if ($sort == 'vehicle_class_description')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-2" wire:click="order('secure_end_date')">

                                    {{ __('secure end date') }}

                                    @if ($sort == 'secure_end_date')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-2" wire:click="order('technomechanical_end_date')">

                                    {{ __('technomechanical end date') }}

                                    @if ($sort == 'technomechanical_end_date')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-2" wire:click="order('owner')">

                                    {{ __('owner') }}

                                    @if ($sort == 'owner')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="px-2 py-2">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">


                            @foreach ($vehicles as $vehicle)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-2 py-2 text-sm">
                                        {{ $vehicle->id }}
                                    </td>
                                    <td class="px-2 py-2 text-sm">
                                        {{ $vehicle->plate_vehicle }}
                                    </td>
                                    <td class="px-2 py-2 text-sm">
                                        {{ $vehicle->model_vehicle }}
                                    </td>
                                    <td class="px-2 py-2 text-sm">
                                        {{ $vehicle->vehicle_type_name }}
                                    </td>
                                    <td class="px-2 py-2 text-sm">
                                        {{ $vehicle->side_vehicle }}
                                    </td>
                                    <td class="px-2 py-2 text-sm">
                                        {{ $vehicle->vehicle_class_description }}
                                    </td>
                                    <td class="px-2 py-2 text-sm">
                                        {{ $vehicle->secure_end_date }}
                                    </td>
                                    <td class="px-2 py-2 text-sm">
                                        {{ $vehicle->technomechanical_end_date }}
                                    </td>
                                    <td class="px-2 py-2 text-sm">
                                        {{ $vehicle->owner }}
                                    </td>
                                    <td class="px-2 py-2">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <button id="edit" onclick="edit({{ $vehicle }})"
                                                class="inline-flex items-center justify-center  bg-yellow-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-400 focus:outline-none focus:bg-yellow-700 focus:ring focus:ring-red-200 active:bg-yellow-700 disabled:opacity-25 transition"
                                                {{-- flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" --}} aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button onclick="deletes({{ $vehicle->id }})" id="delete"
                                                class="inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"
                                                {{-- flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" --}} aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="px-6 py-4 text-black dark:text-white">
                        No existe Vehiculos que coincidan con lo que estas buscando...
                    </div>
                @endif

            </div>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Previous">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    1
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    2
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    3
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    8
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    9
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div>

    </div>

    {{-- componentes de modal --}}

    <!--Modal create -->

    <div x-cloak x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center" wire:ignore>
        <!-- Modal -->
        <div x-cloak x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2" {{-- x-on:click.away="closeModal" --}}
            class="w-9-12 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 overflow-x-hidden overflow-y-auto"
            role="dialog" id="modal">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-center border-b-fuchsia-800 border-b">
                <!-- Modal title -->
                <p class="justify-start mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                <h1 class="text-black dark:text-white text-4xl1">{{ __('Creating new vehicle') }}<span id="typed2" class="typed2">.</span>
                    <span id="typed3" class="typed3">.</span>
                    <span id="typed4" class="typed4">.</span>
                    <span id="typed5" class="typed5">.</span>
                </h1>
                </p>
                <button
                    class="ml-auto px-5-1 py-3-1 text-sm  rounded-lg  bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                    aria-label="close" x-on:click="closeModal" wire:click="clear" onclick="restart()">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="mt-4 mb-6">

                <form role="form" action="" method="post" id="frm-vehicle"
                    class="f1 px-4 my-32 max-w-3xl mx-auto space-y-6">

                    <div class="f1-steps">
                        <div class="f1-progress">
                            <div class="f1-progress-line" data-now-value="25.66" data-number-of-steps="4"
                                style="width: 25.66%;"></div>
                        </div>
                        <div class="f1-step-vehicle active">
                            <div class="f1-step-icon">

                                <!-- Crea un icono envuelto por la clase fa-stack -->
                                <span class="fa-stack  ">
                                    <!-- El icono que envolverá el número -->
                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                    <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                    <strong class="fa-stack-2x -ml-1 numcolor flicker" id="step1">
                                        1
                                    </strong>
                                </span>
                            </div>
                            <p>Paso 1</p>
                        </div>
                        <div class="f1-step-vehicle ">
                            <div class="f1-step-icon">

                                <!-- Crea un icono envuelto por la clase fa-stack -->
                                <span class="fa-stack  ">
                                    <!-- El icono que envolverá el número -->
                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                    <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                    <strong class="fa-stack-2x -ml-1 numcolor" id="step2">
                                        2
                                    </strong>
                                </span>
                            </div>
                            <p>Paso 2</p>
                        </div>
                        <div class="f1-step-vehicle ">
                            <div class="f1-step-icon">

                                <!-- Crea un icono envuelto por la clase fa-stack -->
                                <span class="fa-stack  ">
                                    <!-- El icono que envolverá el número -->
                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                    <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                    <strong class="fa-stack-2x -ml-1 numcolor" id="step3">
                                        3
                                    </strong>
                                </span>
                            </div>
                            <p>Paso 3</p>
                        </div>
                        {{-- <div class="f1-step ">
                        <div class="f1-step-icon">

                            <!-- Crea un icono envuelto por la clase fa-stack -->
                            <span class="fa-stack  ">
                                <!-- El icono que envolverá el número -->
                                <span class="fa fa-circle-o fa-stack-2x"></span>
                                <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                <strong class="fa-stack-2x -ml-1 numcolor" id="step4">
                                    4
                                </strong>
                            </span>
                        </div>
                        <p>Paso 4</p>
                    </div> --}}
                        <div class="f1-step-vehicle ">
                            <div class="f1-step-icon">

                                <!-- Crea un icono envuelto por la clase fa-stack -->
                                <span class="fa-stack  ">
                                    <!-- El icono que envolverá el número -->
                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                    <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                    <strong class="fa-stack-1x -ml-1 numcolor" id="step4">
                                        FIN
                                    </strong>
                                </span>
                            </div>
                            <p>Fin</p>
                        </div>
                    </div>

                    <!-- Modal description -->
                    <div
                        class="mt-11 border-gray-50-s container px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9 ">

                        <!--paso 1 -->
                        <fieldset>
                            {{-- <br> --}}

                            <div class="flex space-x-4 justify-center">

                                <div class="w-6-12">
                                    <label id="labelVehicleType"
                                        class="text-gray-700 dark:text-gray-400">{{ __('vehicle type') }}</label>

                                    <select wire:model.defer="vehicle_type" id="vehicle_type" name="vehicle_type"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Tipo de Vehiculo</option>
                                        @foreach ($vehicle_types as $id => $vehicle_type)
                                            <option value="{{ $id }}">
                                                {{ $vehicle_type }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="w-6-12" id="divPlateVehicle">
                                    <label id="labelPlateVehicle"
                                        class="text-gray-700 dark:text-gray-400">{{ __('plate vehicle') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="placa del vehiculo" type="text" id="plate_vehicle"
                                        name="plate_vehicle" wire:model.defer="plate_vehicle" />
                                </div>
                            </div>

                            <div class="flex space-x-4 ">

                                <div class="w-6-12" id="divModelVehicle">
                                    <label id="labelModelVehicle"
                                        class="text-gray-700 dark:text-gray-400">{{ __('model vehicle') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="modelo del vehiculo" type="text" id="model_vehicle"
                                        name="model_vehicle" maxlength="4" wire:model.defer="model_vehicle" />
                                </div>

                                <div class="w-6-12" id="divBrandVehicle">
                                    <label id="labelBrandVehicle"
                                        class="text-gray-700 dark:text-gray-400">{{ __('brand vehicle') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="marca del vehiculo" type="text" id="brand_vehicle"
                                        name="brand_vehicle" wire:model.defer="brand_vehicle" />
                                </div>

                            </div>

                            <div class="flex space-x-4 ">

                                <div class="w-6-12" id="divVehicleChassisNumber">
                                    <label id="labelVehicleChassisNumber"
                                        class="text-gray-700 dark:text-gray-400">{{ __('vehicle chassis number') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="número chasis del vehiculo" type="text"
                                        id="vehicle_chassis_number" name="vehicle_chassis_number"
                                        wire:model.defer="vehicle_chassis_number" />
                                </div>

                                <div class="w-6-12" id="divColorVehicle">
                                    <label id="labelColorVehicle"
                                        class="text-gray-700 dark:text-gray-400">{{ __('color vehicle') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="color del vehiculo" type="text" id="color_vehicle"
                                        name="color_vehicle" wire:model.defer="color_vehicle" />
                                </div>

                            </div>

                            <div class="flex space-x-4 ">

                                <div class="w-6-12" id="divSideVehicle">
                                    <label id="labelSideVehicle"
                                        class="text-gray-700 dark:text-gray-400">{{ __('side vehicle') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="número lateral del vehiculo" type="text" id="side_vehicle"
                                        name="side_vehicle" maxlength="4" wire:model.defer="side_vehicle" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelInfrastructureVehicle"
                                        class="text-gray-700 dark:text-gray-400">{{ __('infrastructure vehicle') }}</label>

                                    <select wire:model.defer="infrastructure_vehicle" id="infrastructure_vehicle"
                                        name="infrastructure_vehicle"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">infrastructura del Vehiculo</option>
                                        @foreach ($vehicle_classes as $id => $vehicle_class)
                                            <option value="{{ $id }}">
                                                {{ $vehicle_class }}</option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>

                            <br>
                            <div class="f1-buttons" id="fieldset1Buttons">
                                <button type="button"
                                    class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                            </div>

                        </fieldset>
                        <!--fin del paso 1 -->

                        <!---paso 2 -->
                        <fieldset>

                            <div class="flex space-x-4 ">

                                <div class="w-6-12" id="divengine_number">
                                    <label id="labelengine_number"
                                        class="text-gray-700 dark:text-gray-400">{{ __('engine number') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Número del motor del vehiculo" type="text" id="engine_number"
                                        name="engine_number" wire:model.defer="engine_number" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelpropertycardnumber"
                                        class="text-gray-700 dark:text-gray-400">{{ __('property card number') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="número de tarjeta de propiedad" type="text"
                                        id="property_card_number" name="property_card_number"
                                        wire:model.defer="property_card_number"
                                        onchange="documentOn('property_card_number','DocPropertyCardNumber')" />

                                    <span id="DocPropertyCardNumber"
                                        class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <input id="InputDocPropertyCardNumber"
                                            wire:model.defer="DocPropertyCardNumber"
                                            onchange="documentAbove('InputDocPropertyCardNumber','DocPropertyCardNumber')"
                                            class="upload-input" type="file">
                                    </span>
                                </div>

                            </div>

                            <div class="flex space-x-4 ">

                                <div class="w-6-12">
                                    <label id="labelDimensionRims"
                                        class="text-gray-700 dark:text-gray-400">{{ __('dimension rims') }}</label>

                                    <select wire:model.defer="dimension_rims" id="dimension_rims"
                                        name="dimension_rims"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona la dimensión de los rines</option>
                                        @foreach ($dimensionRims as $dimensionRim)
                                            <option value="{{ $dimensionRim->id }}">{{ $dimensionRim->type_rims }} de
                                                {{ $dimensionRim->inch }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="w-6-12" id="divInternalExternalOwnerType">

                                    <label id="labelCheck" class="text-gray-700 dark:text-gray-400">Selecciona si el
                                        vehiculo es Interno o Externo</label>

                                    <div class="form-check check3">
                                        <input class="form-check-input" type="radio"
                                            name="internal_external_owner_type" id="external_owner_type"
                                            value="0" wire:model.defer="internal_external_owner_type">
                                        <label id="labelexternal_owner_type"
                                            class="form-check-label text-gray-700 dark:text-gray-400"
                                            for="external_owner_type">
                                            EXTERNO
                                        </label>
                                    </div>
                                    <div class="form-check check4">
                                        <input class="form-check-input" type="radio"
                                            name="internal_external_owner_type" id="internal_owner_type"
                                            value="1" wire:model.defer="internal_external_owner_type">
                                        <label id="labelinternal_owner_type"
                                            class="form-check-label text-gray-700 dark:text-gray-400"
                                            for="internal_owner_type">
                                            INTERNO
                                        </label>
                                    </div>

                                </div>

                            </div>

                            <div class="flex space-x-4 ">

                                <div class="w-6-12">
                                    <label id="labelowner_vehicle"
                                        class="text-gray-700 dark:text-gray-400">{{ __('owner vehicle') }}</label>

                                    <select wire:model.defer="owner_vehicle" id="owner_vehicle" name="owner_vehicle"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona el dueño del Vehiculo</option>
                                        @foreach ($owners as $owner)
                                            <option value="{{ $owner->id }}">
                                                {{ $owner->owner }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="w-6-12">
                                    <label id="labeldriver_id"
                                        class="text-gray-700 dark:text-gray-400">{{ __('driver id') }}</label>

                                    <select wire:model.defer="driver_id" id="driver_id" name="driver_id"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Conductor del Vehiculo</option>
                                        @foreach ($conducs as $conduc)
                                            <option value="{{ $conduc->id }}">
                                                {{ $conduc->conduc }}</option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12" id="divCylinderVehicle">
                                    <label id="labelCylinderVehicle"
                                        class="text-gray-700 dark:text-gray-400">{{ __('cylinder vehicle') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="número de Cilindraje del vehiculo" type="number"
                                        id="cylinder_vehicle" name="cylinder_vehicle"
                                        wire:model.defer="cylinder_vehicle" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelNumberPassenger"
                                        class="text-gray-700 dark:text-gray-400">{{ __('number passenger') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Cantidad de pasajeros" type="number" id="number_passenger"
                                        name="number_passenger" maxlength="5" wire:model.defer="number_passenger" />
                                </div>

                            </div>

                            <br>
                            <div class="f1-buttons">
                                <button id="previous2" type="button"
                                    class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                                <button type="button"
                                    class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                            </div>
                        </fieldset>
                        <!--fin del paso 2 -->


                        <!--paso 3 -->
                        <fieldset>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelSecureEndDate"
                                        class="text-gray-700 dark:text-gray-400">{{ __('secure end date') }}</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha fin de SOAT" type="text" id="secure_end_date"
                                        name="secure_end_date" wire:model.defer="secure_end_date"
                                        onchange="fechasSet('secure_end_date'),documentOn('secure_end_date','DocNumberAccreditationSoat')" />

                                    <span id="DocNumberAccreditationSoat"
                                        class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <input id="InputDocNumberAccreditationSoat"
                                            wire:model.defer="DocNumberAccreditationSoat"
                                            onchange="documentAbove('InputDocNumberAccreditationSoat','DocNumberAccreditationSoat')"
                                            class="upload-input" type="file">
                                    </span>
                                </div>

                                <div class="w-6-12">
                                    <label id="labelTechnomechanicalEndDate"
                                        class="text-gray-700 dark:text-gray-400">{{ __('technomechanical end date') }}</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha fin de Tecnomecanica" type="text"
                                        id="technomechanical_end_date" name="technomechanical_end_date"
                                        wire:model.defer="technomechanical_end_date"
                                        onchange="fechasSet('technomechanical_end_date'),documentOn('technomechanical_end_date','DocNumberTechnomechanicalAccreditation')" />

                                    <span id="DocNumberTechnomechanicalAccreditation"
                                        class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <input id="InputDocNumberTechnomechanicalAccreditation"
                                            wire:model.defer="DocNumberTechnomechanicalAccreditation"
                                            onchange="documentAbove('InputDocNumberTechnomechanicalAccreditation','DocNumberTechnomechanicalAccreditation')"
                                            class="upload-input" type="file">
                                    </span>
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelNumberCardOperation"
                                        class="text-gray-700 dark:text-gray-400">{{ __('number card operation') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Numero de Acreditación Tarjeta de Operación" type="text"
                                        id="card_operation" name="card_operation"
                                        wire:model.defer="card_operation" />

                                </div>

                                <div class="w-6-12">
                                    <label id="labelExpirationCardOperation"
                                        class="text-gray-700 dark:text-gray-400">{{ __('expiration card operation') }}</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha fin de tarjeta de operación" type="text"
                                        id="expiration_card_operation" name="expiration_card_operation"
                                        wire:model.defer="expiration_card_operation"
                                        onchange="fechasSet('expiration_card_operation'),documentOn('expiration_card_operation','DocCardOperation')" />

                                    <span id="DocCardOperation"
                                        class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <input id="InputDocCardOperation" wire:model.defer="DocCardOperation"
                                            onchange="documentAbove('InputDocCardOperation','DocCardOperation')"
                                            class="upload-input" type="file">
                                    </span>
                                </div>



                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelCertificateExtracontractual"
                                        class="text-gray-700 dark:text-gray-400">{{ __('certificate extracontractual') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Certificado extracontractual" type="text"
                                        id="certificate_extracontractual" name="certificate_extracontractual"
                                        wire:model.defer="certificate_extracontractual"
                                        onchange="fechasSet('certificate_extracontractual'),documentOn('certificate_extracontractual','DocCertificateExtracontractual')" />

                                    <span id="DocCertificateExtracontractual"
                                        class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <input id="InputDocCertificateExtracontractual"
                                            wire:model.defer="DocCertificateExtracontractual"
                                            onchange="documentAbove('InputDocCertificateExtracontractual','DocCertificateExtracontractual')"
                                            class="upload-input" type="file">
                                    </span>
                                </div>

                                <div class="w-6-12">
                                    <label id="labelCivilContractual"
                                        class="text-gray-700 dark:text-gray-400">{{ __('civil contractual') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Certificado Civil contractual" type="text"
                                        id="civil_contractual" name="civil_contractual"
                                        wire:model.defer="civil_contractual"
                                        onchange="fechasSet('civil_contractual'),documentOn('civil_contractual','DocCivilContractual')" />

                                    <span id="DocCivilContractual"
                                        class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <input id="InputDocCivilContractual" wire:model.defer="DocCivilContractual"
                                            onchange="documentAbove('InputDocCivilContractual','DocCivilContractual')"
                                            class="upload-input" type="file">
                                    </span>
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelExpirationPreventive"
                                        class="text-gray-700 dark:text-gray-400">{{ __('expiration preventive') }}</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha fin de acreditación preventiva" type="text"
                                        id="expiration_preventive" name="expiration_preventive"
                                        wire:model.defer="expiration_preventive"
                                        onchange="fechasSet('expiration_preventive'),documentOn('expiration_preventive','DocPreventive')" />

                                    <span id="DocPreventive" class="Inactive upload-ico fas fa-file-upload icon-green"
                                        aria-hidden="true" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <input id="InputDocPreventive" wire:model.defer="DocPreventive"
                                            onchange="documentAbove('InputDocPreventive','DocPreventive')"
                                            class="upload-input" type="file">
                                    </span>
                                </div>

                                <div class="w-6-12">
                                    <label id="labeltype_direction"
                                        class="text-gray-700 dark:text-gray-400">{{ __('type direction') }}</label>
                                    {{-- 
                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="tipo de dirección" type="number" id="type_direction"
                                        name="type_direction" maxlength="5" wire:model.defer="type_direction" /> --}}


                                    <select wire:model.defer="type_direction" id="type_direction"
                                        name="type_direction"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona el tipo de dirección</option>
                                        <option value="1">dirección mecánica</option>
                                        <option value="2">dirección hidráulica</option>
                                        <option value="3">dirección eléctrica</option>
                                    </select>
                                </div>

                            </div>

                            <br>
                            <div class="f1-buttons">
                                <button id="previous3" type="button"
                                    class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                                <button type="button"
                                    class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                            </div>
                        </fieldset>
                        <!--fin del paso 3 -->

                        <!---paso 4 -->
                        {{-- <fieldset>



                        <br>
                        <div class="f1-buttons">
                            <button id="previous4" type="button"
                                class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                            <button type="button"
                                class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                        </div>

                    </fieldset> --}}
                        <!--fin del paso 4 -->

                        <!--paso fin -->
                        <fieldset>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelFrontSuspension"
                                        class="text-gray-700 dark:text-gray-400">{{ __('front suspension') }}</label>

                                    {{-- <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="cantidad de suspensión frontal" type="number"
                                        id="front_suspension" name="front_suspension" maxlength="5"
                                        wire:model.defer="front_suspension" /> --}}


                                    <select wire:model.defer="front_suspension" id="front_suspension"
                                        name="front_suspension"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona la suspension delantera</option>
                                        <option value="1">Suspensión McPherson</option>
                                        <option value="2">Suspensión de doble horquilla</option>
                                        <option value="3">Suspensión de eje rígido</option>

                                    </select>
                                </div>

                                <div class="w-6-12">
                                    <label id="labelRearSuspension"
                                        class="text-gray-700 dark:text-gray-400">{{ __('rear suspension') }}</label>

                                    {{-- <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="cantidad de suspensión trasera" type="number"
                                        id="rear_suspension" name="rear_suspension" maxlength="5"
                                        wire:model.defer="rear_suspension" /> --}}


                                    <select wire:model.defer="rear_suspension" id="rear_suspension"
                                        name="rear_suspension"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona la suspension trasera</option>
                                        <option value="1">Suspensión McPherson</option>
                                        <option value="2">Suspensión de doble horquilla</option>
                                        <option value="3">Suspensión de eje rígido</option>

                                    </select>
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelRearBrakeType"
                                        class="text-gray-700 dark:text-gray-400">{{ __('rear brake type') }}</label>

                                    <select wire:model.defer="rear_brake_type" id="rear_brake_type"
                                        name="rear_brake_type"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona el tipo de freno</option>
                                        @foreach ($braketypes as $id => $braketype)
                                            <option value="{{ $id }}">
                                                {{ $braketype }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="w-6-12">
                                    <label id="labelFrontBrakeType"
                                        class="text-gray-700 dark:text-gray-400">{{ __('front brake type') }}</label>

                                    <select wire:model.defer="front_brake_type" id="front_brake_type"
                                        name="front_brake_type"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona el tipo de freno</option>
                                        @foreach ($braketypes as $id => $braketype)
                                            <option value="{{ $id }}">
                                                {{ $braketype }}</option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12" id="divAdmissionDate">
                                    <label id="labelAdmissionDate"
                                        class="text-gray-700 dark:text-gray-400">{{ __('admission date') }}</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha ingreso del vehiculo al sistema" type="text"
                                        id="admission_date" name="admission_date" wire:model.defer="admission_date"
                                        onchange="fechasSet('admission_date')" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelVahiclePhotoPath" 
                                        class="text-gray-700 dark:text-gray-400">{{ __('vahicle photo path') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Selecciona una foto de perfil para este usuario" type="file"
                                        id="vahicle_photo_path" name="vahicle_photo_path"
                                        wire:model.defer="vahicle_photo_path" />
                                </div>

                            </div>

                            <br>
                            <div class="f1-buttons">
                                <button type="button" id="previous5"
                                    class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                                <button type="button" id="btnFinalize"
                                    class="btn btn-Finalize w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Finalizar</button>
                            </div>
                        </fieldset>
                        <!--fin -->

                    </div>

                </form>

            </div>
            <div
                class="flex flex-col items-center justify-end px-6 py-3-1 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button x-on:click="closeModal"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                    wire:click="clear" onclick="restart()">
                    {{ __('Cancel') }}
                </button>
                <button id="btnStore"
                    class="Inactive w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    wire:click="store">
                    {{ __('Generate Technical Sheet') }}
                </button>
            </div>
        </div>
    </div>

    <!--end Modal create -->



    <!-- Modal edit -->
    <div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" id="modalEdit" wire:ignore.self
        class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">

        <!-- Modal -->
        <div x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2"
            class="w-9-12 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4"
            role="dialog">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-center border-b-fuchsia-800 border-b">
                <!-- Modal title -->
                <p class="justify-start mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                <h1 class="text-black dark:text-white text-4xl1">{{ __('Editing the information of the vehicle with license plate') }} 
                    @if (!is_null($editVehicles))
                        {{ $editVehicles->plate_vehicle }}
                    @endif<span id="typed2" class="typed2">.</span>
                    <span id="typed3" class="typed3">.</span>
                    <span id="typed4" class="typed4">.</span>
                    <span id="typed5" class="typed5">.</span>
                </h1>
                </p>
                <button onclick="closeModalEdit()"
                    class="ml-auto px-5-1 py-3-1 text-sm  rounded-lg  bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
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
                    @if (!is_null($editVehicles))

                        {{-- <br> --}}

                        <form role="form" action="" method="put" id="frmEditVehicle"
                            class="px-4 my-32 max-w-3xl mx-auto space-y-6">
                            <!-- Modal description -->
                            <div
                                class="mt-11 border-gray-50-s container px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9 ">

                                <!--paso 1 edit-->
                                {{-- <br> --}}
                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                    paso 1
                                </p>
                                <div class="border-ourple-50-s rounded-2xl p-4">

                                    <div class="flex space-x-4 justify-center">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('vehicle type') }}</label>

                                            @foreach ($vehicle_types as $id => $vehicle_type)
                                                @if ($editVehicles->vehicle_type == $id)
                                                    <div class="border-ourple-50-s rounded-2xl p-4">
                                                        <p class="text-sm text-gray-700 dark:text-gray-400">
                                                            {{ $vehicle_type }}
                                                        </p>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('plate vehicle') }}</label>
                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    {{ $editVehicles->plate_vehicle }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('model vehicle') }}</label>
                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    {{ $editVehicles->model_vehicle }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('brand vehicle') }}</label>
                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    {{ $editVehicles->brand_vehicle }}
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('vehicle chassis number') }}</label>
                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    {{ $editVehicles->vehicle_chassis_number }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('color vehicle') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="color del vehiculo" type="text"
                                                wire:model="editVehicles.color_vehicle" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('side vehicle') }}</label>
                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    {{ $editVehicles->side_vehicle }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('infrastructure vehicle') }}</label>

                                            <select wire:model="editVehicles.infrastructure_vehicle"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">infrastructura del Vehiculo</option>
                                                @foreach ($vehicle_classes as $id => $vehicle_class)
                                                    <option value="{{ $id }}">
                                                        {{ $vehicle_class }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>



                                </div>
                                <!--fin del paso 1 edit-->
                                <br>
                                <!---paso 2 edit-->
                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                    paso 2
                                </p>
                                <div class="border-ourple-50-s rounded-2xl p-4">

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('engine number') }}</label>
                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    {{ $editVehicles->engine_number }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('property card number') }}</label>

                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    {{ $editVehicles->property_card_number }}
                                                </p>
                                            </div>


                                            {{-- <span class="Inactive upload-ico fas fa-file-upload icon-green"
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <input wire:model="editVehicles.DocPropertyCardNumber"
                                                    onchange="documentAbove('InputDocPropertyCardNumber','DocPropertyCardNumber')"
                                                    class="upload-input" type="file">
                                            </span> --}}
                                        </div>

                                    </div>

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('dimension rims') }}</label>

                                            <select wire:model="editVehicles.dimension_rims"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona la dimensión de los rines</option>
                                                @foreach ($dimensionRims as $dimensionRim)
                                                    <option value="{{ $dimensionRim->id }}">
                                                        {{ $dimensionRim->type_rims }} de
                                                        {{ $dimensionRim->inch }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="w-6-12">

                                            <label class="text-gray-700 dark:text-gray-400">Selecciona si el
                                                vehiculo es Interno o Externo</label>
                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    @if ($editVehicles->internal_external_owner_type == 0)
                                                        EXTERNO
                                                    @else
                                                        INTERNO
                                                    @endif

                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('owner vehicle') }}</label>

                                            @foreach ($owners as $owner)
                                                @if ($editVehicles->owner_vehicle == $owner->id)
                                                    <div class="border-ourple-50-s rounded-2xl p-4">
                                                        <p class="text-sm text-gray-700 dark:text-gray-400">
                                                            {{ $owner->owner }}
                                                        </p>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('driver id') }}</label>

                                            <select wire:model="editVehicles.driver_id" readonly
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Conductor del Vehiculo</option>
                                                @foreach ($conducs as $conduc)
                                                    <option value="{{ $conduc->id }}">
                                                        {{ $conduc->conduc }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('use vehicle') }}</label>
                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    {{ $editVehicles->service }}
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!--fin del paso 2 edit-->
                                <br>
                                <!--paso 3 edit-->
                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                    paso 3
                                </p>
                                <div class="border-ourple-50-s rounded-2xl p-4">

                                    <div class="flex space-x-4">

                                        {{-- <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('number accreditation soat') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Numero de Acreditación SOAT" type="text"
                                                wire:model="editVehicles.number_accreditation_soat" />

                                        </div> --}}

                                        <div class="w-6-12" wire:ignore>
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('secure end date') }}</label>

                                            <input
                                                class="flex-1 block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha fin de SOAT" type="date"
                                                wire:model="editVehicles.secure_end_date" {{-- onchange="fechasSet('secure_end_date')"  --}} />

                                            <span id="SOAT" class="edit-upload-ico fas fa-file-upload"
                                                {{-- @if ($docSecureEndDate != '') icon-blue @else @if ($docSecureEndDate == -1) icon-yellow @else icon-green @endif @endif" --}} {{-- @if ($docSecureEndDate != '') icon-blue @else icon-green @endif" --}} aria-hidden="true"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                <input wire:model="DocNumberAccreditationSoat"
                                                    onchange="documentAbove('InputDocNumberAccreditationSoat','DocNumberAccreditationSoat')
                                                    updateDocument('1','SOAT')"
                                                    class="edit-upload-input" type="file">
                                            </span>

                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        {{-- <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('number technomechanical accreditation') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Numero de Acreditación Tecnomecanica" type="text"
                                                wire:model="editVehicles.number_technomechanical_accreditation" />

                                        </div> --}}

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('technomechanical end date') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha fin de Tecnomecanica" type="date"
                                                wire:model="editVehicles.technomechanical_end_date"
                                                {{-- onchange="fechasSet('technomechanical_end_date')"  --}} />

                                            <span id="Tecnomecanica" class="edit-upload-ico fas fa-file-upload"
                                                {{-- @if ($docTechnomechanical != '') icon-blue @else icon-green @endif" --}} aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <input wire:model="DocNumberTechnomechanicalAccreditation"
                                                    onchange="documentAbove('InputDocNumberTechnomechanicalAccreditation','DocNumberTechnomechanicalAccreditation'),
                                                    updateDocument('2','Tecnomecanica')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('expiration card operation') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha fin de tarjeta de operación" type="date"
                                                wire:model="editVehicles.expiration_card_operation"
                                                {{-- onchange="fechasSet('expiration_card_operation')"  --}} />

                                            <span id="Tarjeta_de_Operación"
                                                class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docCardOperation != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <input wire:model="DocCardOperation"
                                                    onchange="documentAbove('InputDocCardOperation','DocCardOperation'),
                                                    updateDocument('3','Tarjeta_de_Operación')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('expiration preventive') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha fin de acreditación preventiva" type="date"
                                                wire:model="editVehicles.expiration_preventive"
                                                {{-- onchange="fechasSet('expiration_preventive')"  --}} />

                                            <span id="Preventiva" class="edit-upload-ico fas fa-file-upload"
                                                {{-- @if ($docPreventive != '') icon-blue @else icon-green @endif" --}} aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <input wire:model="DocPreventive"
                                                    onchange="documentAbove('InputDocPreventive','DocPreventive'),
                                                    updateDocument('4','Preventiva')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('certificate extracontractual') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Certificado extracontractual" type="date"
                                                wire:model="editVehicles.certificate_extracontractual"
                                                {{-- onchange="fechasSet('certificate_extracontractual')" --}} />

                                            <span id="Extracontractual" class="edit-upload-ico fas fa-file-upload"
                                                {{-- @if ($docExtracontractual != '') icon-blue @else icon-green @endif" --}} aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <input wire:model="DocCertificateExtracontractual"
                                                    onchange="documentAbove('InputDocCertificateExtracontractual','DocCertificateExtracontractual'),
                                                    updateDocument('5','Extracontractual')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('civil contractual') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Certificado Civil contractual" type="date"
                                                wire:model="editVehicles.civil_contractual" {{-- onchange="fechasSet('civil_contractual')" --}} />
                                            <span id="civil" class="edit-upload-ico fas fa-file-upload"
                                                {{-- @if ($docCivilContractual != '') icon-blue @else icon-green @endif" --}} aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <input wire:model.defer="DocCivilContractual"
                                                    onchange="documentAbove('InputDocCivilContractual','DocCivilContractual'),
                                                    updateDocument('6','civil')"
                                                    class="edit-upload-input" type="file">
                                            </span>


                                        </div>

                                    </div>



                                </div>
                                <!--fin del paso 3 edit-->
                                <br>
                                <!--paso fin edit-->
                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                    paso final
                                </p>
                                <div class="border-ourple-50-s rounded-2xl p-4">
                                    <div class="flex space-x-4">

                                        <div class="w-1-2">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('admission date') }}</label>
                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    {{ $editVehicles->admission_date }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="w-1-2">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('vehicle pickup date') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha de retiro del sitema del vahiculo" type="date"
                                                wire:model="editVehicles.vehicle_pickup_date"
                                                {{-- onchange="fechasSet('vehicle_pickup_date')"  --}} />
                                        </div>

                                        <div class="w-1-2">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('cylinder vehicle') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="número de Cilindraje del vehiculo" type="text"
                                                wire:model="editVehicles.cylinder_vehicle" />
                                        </div>

                                        {{-- <div class="w-1-2">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('quantity valves') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="cantidad de valvulas" type="text" step="0.01"
                                                min="0" max="10" maxlength="5"
                                                wire:model="editVehicles.quantity_valves" />
                                        </div> --}}

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-1-2">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('number passenger') }}</label>
                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    {{ $editVehicles->number_passenger }}
                                                </p>
                                            </div>

                                        </div>

                                        {{-- <div class="w-1-2">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('number cylinders') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Cantidad de cilindros" type="text" maxlength="5"
                                                wire:model="editVehicles.number_cylinders" />
                                        </div> --}}

                                        {{-- <div class="w-1-2">
                                            <label class="text-gray-700 dark:text-gray-400">turbo</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="cantidad de turbo" type="text" maxlength="5"
                                                wire:model="editVehicles.turbo" />
                                        </div> --}}

                                        {{-- <div class="w-1-2">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('orientation') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="tipo de orentación" type="text" step="0.01"
                                                min="0" max="10" maxlength="5"
                                                wire:model="editVehicles.orientation" />
                                        </div> --}}


                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-1-2">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('front suspension') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="cantidad de suspensión frontal" type="text"
                                                maxlength="5" wire:model="editVehicles.front_suspension" />
                                        </div>

                                        <div class="w-1-2">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('rear suspension') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="cantidad de suspensión trasera" type="text"
                                                maxlength="5" wire:model="editVehicles.rear_suspension" />
                                        </div>

                                        <div class="w-1-2">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('rear brake type') }}</label>

                                            <select wire:model="editVehicles.rear_brake_type"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona el tipo de freno</option>
                                                @foreach ($braketypes as $id => $braketype)
                                                    <option value="{{ $id }}">
                                                        {{ $braketype }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="w-1-2">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('front brake type') }}</label>

                                            <select wire:model="editVehicles.front_brake_type"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona el tipo de freno</option>
                                                @foreach ($braketypes as $id => $braketype)
                                                    <option value="{{ $id }}">
                                                        {{ $braketype }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        {{-- <div class="w-15">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('tire number') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="cantidad de neumaticos" type="text" step="0.01"
                                                min="0" max="10" maxlength="5"
                                                wire:model="editVehicles.tire_number" />
                                        </div> --}}
                                        <div class="w-15">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('type direction') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="tipo de dirección" type="text" maxlength="5"
                                                wire:model="editVehicles.type_direction" />
                                        </div>

                                        {{-- <div class="w-15">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('transmission type') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Tipo de transmisión" type="text" maxlength="5"
                                                wire:model="editVehicles.transmission_type" />
                                        </div> --}}

                                        {{-- <div class="w-15">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('number speeds') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="cantidad maxima de velocidades" type="text"
                                                maxlength="5" wire:model="editVehicles.number_speeds" />
                                        </div> --}}

                                        {{-- <div class="w-15">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('type bearing') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="tipo de rodamiento" type="text" maxlength="5"
                                                wire:model="editVehicles.type_bearing" />
                                        </div> --}}

                                        {{-- <div class="w-15">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('number windows') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="número de ventanas" type="text" maxlength="5"
                                                wire:model="editVehicles.number_windows" />
                                        </div> --}}

                                    </div>


                                </div>
                                <!--fin edit-->
                                <br>

                            </div>

                        </form>


                    @endif

                </div>
                <footer
                    class="flex flex-col items-center justify-end px-6 py-3-1 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                    <button onclick="closeModalEdit()"
                        class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                        {{ __('Cancel') }}
                    </button>
                    <button wire:click="update" onclick="closeModalEdit()"
                        class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        {{ __('Update Technical Sheet') }}
                    </button>
                </footer>
            </div>

        </div>
    </div>
    <!--end Modal edit -->

    {{-- fin componentes de modal --}}



</div>

@section('scripts')
    <script>
        $(document).ready(function() {


            var table = $('#example').DataTable({
                // "scrollX": true,
                lengthMenu: [
                    [5, 10, 50, 100, 200, -1],
                    [5, 10, 50, 100, 200, "∞"]
                ],
                responsive: true,
                autoWidth: false,
                autoFill: true,
                // stateSave: true,
                "order": [
                    [1, "desc"]
                ],
                dom: "<'ui stackable grid'" +
                    "<'row'" +
                    "<'eight wide column'l>" +
                    "<'ml30'B>" +
                    "<'right aligned eight wide column'f>" +
                    ">" +
                    "<'row dt-table'" +
                    "<'sixteen wide column'tr>" +
                    ">" +
                    "<'row'" +
                    "<'seven wide column'i>" +
                    "<'right aligned nine wide column'p>" +
                    ">" +
                    ">",
                buttons: [
                    // {
                    // extend:    'copyHtml5',
                    // text:      '<i class="far fa-copy"></i>',
                    // titleAttr: 'copiar',
                    // className: "dark:bg-gray-800 dark:text-white"
                    // },
                    {
                        text: '<button @click="openModal" class=""> crear usuario nuevo</button>',
                        titleAttr: 'Crear usuario',
                        className: "buttons-crear font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white"
                    },
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fa fa-file-excel"></i>',
                        titleAttr: 'Excel',
                        filename: 'listado de usuarios',
                        className: "dark:bg-gray-800 dark:text-white",

                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i>',
                        titleAttr: 'Imprimir',
                        filename: 'listado de usuarios',
                        className: "dark:bg-gray-800 dark:text-white"
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fa fa-file-pdf"></i>',
                        titleAttr: 'PDF',
                        filename: 'listado de usuarios',
                        className: "dark:bg-gray-800 dark:text-white text-gray-800 rounded-md"
                    },
                    {
                        extend: 'colvis',
                        text: '±columnas',
                        collectionLayout: 'fixed columns',
                        collectionTitle: 'Control de visibilidad de columna',
                        className: "dark:bg-gray-800 dark:text-white"
                    }
                ],
                columnDefs: [{
                        "targets": [1],
                        "visible": false,
                        "searchable": false
                    },
                    // {
                    //     "targets": [8],
                    //     "visible": false,
                    //     "searchable": false
                    // },
                    // {
                    //     "targets": [10],
                    //     "visible": false,
                    //     "searchable": false
                    // },
                    // {"targets": [10],"visible": false,"searchable": false},
                    // {"targets": [11],"visible": false,"searchable": false},
                    // {"targets": [12],"visible": false,"searchable": false},
                    // {"targets": [13],"visible": false,"searchable": false},
                    // {"targets": [14],"visible": false,"searchable": false},
                    // {"targets": [15],"visible": false,"searchable": false},
                    // {"targets": [16],"visible": false,"searchable": false},
                    // {"targets": [17],"visible": false,"searchable": false},
                    // {"targets": [18],"visible": false,"searchable": false},
                    // {"targets": [19],"visible": false,"searchable": false},
                    // {"targets": [20],"visible": false,"searchable": false},
                    // {"targets": [21],"visible": false,"searchable": false},
                    // {"targets": [22],"visible": false,"searchable": false},
                    // {"targets": [23],"visible": false,"searchable": false},
                    // {"targets": [24],"visible": false,"searchable": false},
                    // {"targets": [25],"visible": false,"searchable": false},
                    // {"targets": [26],"visible": false,"searchable": false},
                    // {"targets": [27],"visible": false,"searchable": false},
                    // {"targets": [28],"visible": false,"searchable": false},
                    // {"targets": [29],"visible": false,"searchable": false},
                    // {"targets": [30],"visible": false,"searchable": false},
                    // {"targets": [31],"visible": false,"searchable": false},
                    // {"targets": [32],"visible": false,"searchable": false},
                    // {"targets": [33],"visible": false,"searchable": false},
                    // {"targets": [35],"visible": false,"searchable": false},
                    // {"targets": [36],"visible": false,"searchable": false},
                ],
                "drawCallback": function(settings) {
                    $('.dataTables_wrapper .dataTables_filter input').addClass(
                        "mr-4 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    );
                    $('#example_length').removeClass("dataTables_length");
                    $('#example_length').addClass("dark:text-white float-left");
                    $('#example_filter').removeClass("dataTables_filter");
                    $('#example_filter').addClass("dark:text-white float-right text-right");
                    $('#example_info').removeClass("dataTables_info");
                    $('#example_info').addClass("dark:text-white pt-7 float-left clear-both");
                    $('#example tbody>tr>td').addClass("dark:bg-gray-800 dark:text-white");
                    $('.dataTables_wrapper .dataTables_paginate .paginate_button').addClass(
                        "dark:bg-gray-800 dark:text-white");
                },
                language: {
                    "emptyTable": "Tabla Vacia",
                    "info": "",
                    "infoEmpty": "Sin informacion",
                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                    "loadingRecords": "Cargando...",
                    "decimal": ".",
                    "infoFiltered": "filtrado de _MAX_ entradas totales",
                    "infoPostFix": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                    "infoThousands": ",",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "thousands": ",",
                    "zeroRecords": "No se encontro información",
                },
                ajax: "{{ route('datatable.vehicle') }}",
                columns: [{

                        "render": function(data, type, row) {

                            return "<div class='flex items-center space-x-4 text-sm'>" +

                                // "<button id='edit' onclick='edit(" + row['id'] + ")'" +
                                // "class='inline-flex items-center justify-center  bg-yellow-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-400 focus:outline-none focus:bg-yellow-700 focus:ring focus:ring-red-200 active:bg-yellow-700 readonly:opacity-25 transition' aria-label='Edit'>" +
                                // "<svg class='w-5 h-5' aria-hidden='true' fill='currentColor'" +
                                // "viewBox='0 0 20 20'>" +
                                // "<path fill-rule='evenodd'" +
                                // "d='M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z'>" +
                                // "</path>" +
                                // "</svg>" +
                                // "</button>" +

                                "<button onclick='deletes(" + row['id'] + ")'" +
                                "class='inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 readonly:opacity-25 transition' aria-label='Delete'>" +
                                "<svg class='w-5 h-5' aria-hidden='true' fill='currentColor'" +
                                "viewBox='0 0 20 20'>" +
                                "<path fill-rule='evenodd'" +
                                "d='M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z'" +
                                "clip-rule='evenodd'></path>" +
                                "</svg>" +
                                "</button>" +

                                // "<button onclick='view(" + row['id'] + ")'" +
                                // "class='inline-flex items-center justify-center  bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition'>" +
                                // "<svg class='w-5 h-5' fill='none' stroke='currentColor'" +
                                // "stroke-width='1.5' viewBox='0 0 24 24'" +
                                // "xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>" +
                                // "<path stroke-linecap='round' stroke-linejoin='round'" +
                                // "d='M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z'>" +
                                // "</path>" +
                                // "<path stroke-linecap='round' stroke-linejoin='round'" +
                                // "d='M15 12a3 3 0 11-6 0 3 3 0 016 0z'></path>" +
                                // "</svg>" +
                                // "</button>" +

                                "</div>";
                        },
                        "className": "dark:bg-gray-800 dark:text-white border-b"
                    },
                    {
                        data: 'id',
                        "className": "dark:bg-gray-800 dark:text-white border-b"
                    },
                    {
                        // data: 'plate_vehicle',
                        "render": function(data, type, row) {
                            if (row['vahicle_photo_path'] == null || row['vahicle_photo_path'] ==
                                "") {
                                // return "si hay imagen empresa" + row['profile_photo_path'];
                                return (
                                    "<div class='lex items-center text-sm'>" +
                                    "<div class='relative  w-8 h-8 mr-3 rounded-full md:block'>" +
                                    "<img src='{{ asset('img/l_logo_step.png') }}' alt=''" +
                                    "class='object-cover w-full h-full rounded-full' loading='lazy'>" +
                                    "<div class='absolute inset-0 rounded-full shadow-inner'" +
                                    "aria-hidden='true'>" +
                                    "</div>" +
                                    "</div>" +
                                    "<div class='flex items-center text-sm'>" +
                                    "<div>" +
                                    "<p class='font-semibold centered'>" + row[
                                        'plate_vehicle'] +
                                    "</p>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>");

                            } else {
                                // return "no hay imagen empresa";
                                // documentImage(file, name)
                                return (
                                    "<div class='flex items-center text-sm'>" +
                                    "<div class='relative  w-8 h-8 mr-3 rounded-full md:block'>" +
                                    "<a class='cursor-pointer' onclick='searchImg(" + row['id'] + ")'>" +
                                    "<img src='" + row['vahicle_photo_path'] +
                                    "' alt=''" +
                                    "class='object-cover w-full h-full rounded-full' loading='lazy'>" +
                                    "</a>" +
                                    // "<div class='absolute inset-0 rounded-full shadow-inner'" +
                                    // "aria-hidden='true'>" +
                                    // "</div>" +
                                    "</div>" +
                                    "<div class='flex items-center text-sm'>" +
                                    "<div>" +
                                    "<p class='font-semibold'>" + row[
                                        'plate_vehicle'] +
                                    "</p>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>");

                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'model_vehicle',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'vehicle_type_name',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'side_vehicle',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['state_vehicle'] == 1) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700'>{{ __('Inhabilitado') }}</span>";
                            } else if (row['state_vehicle'] == 2) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>{{ __('Habilitado') }}</span>";
                            } else if (row['state_vehicle'] == 3) {

                                // "<span class='px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700'>{{ __('Inactivo') }}</span>";
                                return "<button wire:click='reactivado' id='' onclick='reactive(" +
                                    row['id'] +
                                    ")' class='px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700'>{{ __('Inactivo') }}</button>";
                            } else if (row['state_vehicle'] == 4) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600'>{{ __('PENDIENTE') }}</span>";
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'vehicle_class_description',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'secure_end_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'technomechanical_end_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['internal_external_owner_type'] == 1) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>{{ __('Interno') }}</span>";
                            } else {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100'>{{ __('Externo') }}</span>";
                            }
                        },
                        data: 'internal_external_owner_type',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'owner',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'drive',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'brand_vehicle',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'vehicle_chassis_number',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'property_card_number',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'cylinder_vehicle',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'number_passenger',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'certificate_extracontractual',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'civil_contractual',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'card_operation',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'expiration_card_operation',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'expiration_preventive',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'admission_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'vehicle_pickup_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'engine_number',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'service',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'color_vehicle',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'type_direction',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'front_suspension',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'rear_suspension',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'type_rims',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'brake_Type_Description',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'front',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                ]
            }).columns.adjust().responsive.recalc();

            $('a.toggle-vis').on('click', function(e) {
                e.preventDefault();

                // Get the column API object
                var column = table.column($(this).attr('data-column'));

                // Toggle the visibility
                column.visible(!column.visible());
            });

            $('#example tbody').on('click', 'tr', function() {

                var tr = $(this).closest('tr');
                var row = table.row(tr);
                if (row.child.isShown()) {
                    $('table.dataTable.dtr-inline.collapsed>tbody>tr>td.child').removeClass("child");
                    $('table.dataTable.dtr-inline.collapsed>tbody>tr>td').addClass(
                        "dark:bg-gray-800 dark:text-white");
                }
            });


        });

        function documentImage(file) {
            swal.fire({
                // title: 'Sweet!',
                // imageUrl: `${file}`, \\img\l_logo_step.png
                imageUrl: '/storage/STEP/users/Ident_q11111111111/profile_user_q11111111111.webp',
                // text: '<strong></strong>',
                // html: '<strong>' + `${name}` + '</strong>',
                imageWidth: 800,
                imageHeight: 400,
                imageAlt: '',
            })
        }

        Livewire.on('documentImage', (photo) => {
            var photo = photo.file;
            // console.log(photo);
            swal.fire({
                // title: 'Sweet!',
                imageUrl: `${photo}`, 
                // imageUrl: '/storage/STEP/users/Ident_q11111111111/profile_user_q11111111111.webp',
                // text: '<strong></strong>',
                // html: '<strong>' + `${name}` + '</strong>',
                imageWidth: 800,
                imageHeight: 400,
                imageAlt: '',
            })
        })

        function searchImg(id) {
            // alert('reactivar el ' + id);
            Livewire.emit('searchImg', [id]);
        }

        function reactive(id) {
            // alert('reactivar el ' + id);
            Livewire.emit('reactivado', [id]);
        }


        // abriendo modal para editar
        Livewire.on('openModalEdit', () => {
            viewhideinputs('modalEdit', 'block', 'hidden');
        })

        // enviando los datos para que los reciba la modal editar
        function edit(id) {

            let timerInterval
            swal.fire({
                title: 'loading...',
                html: 'Loading system information into <b></b> milliseconds.', //Cargando la información del sistema en
                timer: 1500,
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

            Livewire.emit('edit', [id]);

        }

        Livewire.on('documentStatus', (docSecureEndDate, docTechnomechanical, docCardOperation, docPreventive,
            docCivilContractual, docExtracontractual) => {

            docSecureEndDate = docSecureEndDate.docSecureEndDate;
            docTechnomechanical = docTechnomechanical.docTechnomechanical;
            docCardOperation = docCardOperation.docCardOperation;
            docPreventive = docPreventive.docPreventive;
            docExtracontractual = docExtracontractual.docExtracontractual;
            docCivilContractual = docCivilContractual.docCivilContractual;

            var statusInput = [
                'SOAT', 'Tecnomecanica', 'Tarjeta_de_Operación',
                'Preventiva', 'Extracontractual', 'civil'
            ];

            var status = [
                docSecureEndDate, docTechnomechanical, docCardOperation, docPreventive,
                docExtracontractual, docCivilContractual
            ];

            for (let i = 0; i < 6; i++) {
                // console.log(status[i],statusInput[i]);
                if (status[i] != '') {
                    document.getElementById(statusInput[i]).classList.add('icon-blue');

                } else {
                    document.getElementById(statusInput[i]).classList.add('icon-green');

                }

            }

        })

        // constante creada de la clase scroll que esta en el div principal de la modal
        const scroll = document.querySelector(".scroll");

        // con  el .scroll=0 subo el escroll cuando se cierra la modal editar
        // con esta funcion se cierra la modal editar
        function closeModalEdit() {
            colorChange = [];

            var statusInput = [
                'SOAT', 'Tecnomecanica', 'Tarjeta_de_Operación',
                'Preventiva', 'Extracontractual', 'civil'
            ];

            for (let i = 0; i < 6; i++) {

                document.getElementById(statusInput[i]).classList.remove('icon-blue');
                document.getElementById(statusInput[i]).classList.remove('icon-green');
                document.getElementById(statusInput[i]).classList.remove('icon-yellow');
            }

            scroll.scrollTop = 0;
            document.getElementById('modalEdit').classList.add('hidden');
        }

        // enviar los datos para editar el documento/archivo 
        function updateDocument(param, documentName) {

            let timerInterval
            swal.fire({
                title: 'uploading document!',
                html: 'Your document will be in the system at <b></b> milliseconds.', //Tu documento estara en el sistema en
                timer: 8000,
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

            setTimeout(() => (
                Livewire.emit('documentUpdate', [param], [documentName])
            ), 4000);
        }

        var colorChange = [];
        // recive el tipo de docuemnto arriba o actualización, y llama la funcion que cambia el color del icono
        Livewire.on('documentup', (up, input) => {

            up = up.up;
            input = input.input;

            // console.log('input '+input);
            var inp = [
                'noValido', 'SOAT', 'Tecnomecanica', 'Tarjeta_de_Operación',
                'Preventiva', 'Extracontractual', 'civil'
            ];
            colorChange.push(input);

            // console.log(colorChange);
            for (let i = 0; i < colorChange.length; i++) {
                // if (input == i) {
                var num = colorChange[i];
                var color = inp[num];
                // console.log(color);
                if (up == 1) {
                    if (color != 'noValido') {
                        document.getElementById(color).classList.remove('icon-blue');
                        document.getElementById(color).classList.add('icon-yellow');
                    }

                } else {
                    if (color != 'noValido') {
                        document.getElementById(color).classList.remove('icon-green');
                        document.getElementById(color).classList.add('icon-yellow');
                    }

                }
                // }
                // console.log('inp '+inp[i])
                // console.log('color '+color);
            }
            // console.log('color '+color);

            if (up == 1) {
                swal.fire({
                    position: 'center',
                    title: 'actualized document', //documento actualizado
                    showConfirmButton: false,
                    timer: 1500
                })
                // document.getElementById(color).classList.remove('icon-blue');
                // document.getElementById(color).classList.add('icon-yellow');
            } else {
                swal.fire({
                    position: 'center',
                    title: 'document above', //documento arribba
                    showConfirmButton: false,
                    timer: 1500
                })
                // document.getElementById(color).classList.remove('icon-green');
                // document.getElementById(color).classList.add('icon-yellow');
            }

        })

        // enviar el id para eliminar el registro de la base de datos
        function deletes(id) {

            // console.log(id);

            swal.fire({
                title: 'sure you want to delete?',
                // seguro que quieres eliminar?
                text: "If you delete this record, all the information and documents of this vehicle will be deleted",
                // si eliminas este registro se borrara toda la información y documentos de este vehiculo
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('destroy', [id]);
                }
            })

        }

        // mensajes despues de que se crea,edita o elimina un vehiculo
        Livewire.on('crud', (plate, process) => {

            var process = process.process;
            var plateVehicle = plate.plate;
            var message = ['Se ha registrado el vehiculo con placa  ' + plateVehicle + ' sactisfactoriamente',
                'Se ha actualizado la información del vehiculo con placa ' + plateVehicle +
                ' sactisfactoriamente',
                'Se ha eliminado el Vehiculo con placa ' + plateVehicle + ' y toda su documentación',
                'El vehiculo con placa ' + plateVehicle + ' ya esta registrado en el sistema',
                'El lateral ' + plateVehicle + ' ya esta registrado en el sistema'
            ];

            if (process == 1) {
                message = 'The vehicle with license plate ' + plateVehicle +
                    ' has been successfully registered';
                //Se ha registrado el vehiculo con placa xxx sactisfactoriamente
            } else if (process == 2) {

                message = 'The information of the vehicle with license plate ' + plateVehicle +
                    ' has been successfully updated';
                // Se ha actualizado la información del vehiculo con placa xxx sactisfactoriamente

            } else if (process == 3) {

                message = 'The vehicle with plate ' + plateVehicle +
                    ' and all its documentation have been eliminated';
                // Se ha eliminado el Vehiculo con placa xxx y toda su documentación
            }

            swal.fire(
                '',
                message,
                'success'
            )
        })

        //scritp de formulario paso a paso

        function scroll_to_class(element_class, removed_height) {
            var scroll_to = $(element_class).offset().top - removed_height;
            // console.log($(window).scrollTop());
            if ($(window).scrollTop() != scroll_to) {
                $('html, body').stop().animate({
                    scrollTop: scroll_to
                }, 0);
            }
        }

        function bar_progress(progress_line_object, direction) {
            var number_of_steps = progress_line_object.data('number-of-steps');
            var now_value = progress_line_object.data('now-value');
            var new_value = 0;
            if (direction == 'right') {
                new_value = now_value + (100 / number_of_steps);
            } else if (direction == 'left') {
                new_value = now_value - (100 / number_of_steps);
            }
            progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
        }

        var stepinfinite = 1;

        jQuery(document).ready(function() {


            $('#top-navbar-1').on('shown.bs.collapse', function() {
                $.backstretch("resize");
            });
            $('#top-navbar-1').on('hidden.bs.collapse', function() {
                $.backstretch("resize");
            });

            //     /*
            //         Form
            //     */
            $('.f1 fieldset:first').fadeIn('slow');

            $('.f1 input[type="text"], .f1 input[type="password"], .f1 textarea, .f1 select, .f1 input[type="number"], .f1 input[type="tel"], .f1 input[type="email"], .f1 input[type="date"]')
                .on('focus', function() {
                    $(this).removeClass('input-error');
                });
            // console.log('estado inicial ' + stepinfinite)

            // next step
            $('.f1 .btn-next').on('click', function() {
                var parent_fieldset = $(this).parents('fieldset');
                var next_step = true;
                // navigation steps / progress steps
                var current_active_step = $(this).parents('.f1').find('.f1-step-vehicle.active');
                // var icon_active_step = $(this).parents('.f1').find('.fa-stack-2x.-ml-1.flicker');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                // fields validation
                parent_fieldset.find(
                    // 'input[type="text"], input[type="password"], textarea, select, input[type="number"], input[type="tel"],input[type="email"],input[type="date"]'
                ).each(
                    function() {
                        // $('div').hasClass('container')
                        if ($(this).hasClass('Inactive')) {
                            // console.log('no se bloquea');
                        } else if ($(this).val() == "" || $(this).val() == 0) {
                            $(this).addClass('input-error');
                            next_step = false;
                        } else {
                            $(this).removeClass('input-error');
                        }
                    });


                // fields validation

                if (next_step) {
                    parent_fieldset.fadeOut(400, function() {
                        // change icons
                        // console.log(current_active_step);
                        current_active_step.removeClass('active').addClass('activated').next()
                            .addClass('active');
                        parpadeo(true);
                        // lastsaved();

                        // progress bar
                        bar_progress(progress_line, 'right');
                        // show next step
                        // console.log(stepinfinite);
                        $(this).next().fadeIn();
                        // scroll window to beginning of the form
                        scroll_to_class($('.f1'), 25);
                    });
                }

            });

            // previous step
            $('.f1 .btn-previous').on('click', function() {
                // navigation steps / progress steps
                var current_active_step = $(this).parents('.f1').find('.f1-step-vehicle.active');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                $(this).parents('fieldset').fadeOut(400, function() {
                    // change icons
                    current_active_step.removeClass('active').prev().removeClass('activated')
                        .addClass('active');
                    parpadeo(false);
                    lastsaved();
                    // progress bar
                    // console.log(stepinfinite);
                    bar_progress(progress_line, 'left');
                    // show previous step
                    $(this).prev().fadeIn();
                    // scroll window to beginning of the form
                    scroll_to_class($('.f1'), 25);
                });
            });

            $('.f1 .btn-Finalize').on('click', function() {

                var parent_fieldset = $(this).parents('fieldset');
                var Finalize = true;
                // fields validation
                parent_fieldset.find(
                    'input[type="text"], input[type="password"], textarea, select, input[type="number"], input[type="tel"],input[type="email"],input[type="date"]'
                ).each(function() {
                    if ($(this).hasClass('Inactive')) {
                        // console.log('no se bloquea');
                    } else if ($(this).val() == "" || $(this).val() == 0) {
                        $(this).addClass('input-error');
                        Finalize = false;
                    } else {
                        $(this).removeClass('input-error');
                    }
                });
                // fields validation

                if (Finalize) {
                    document.getElementById('btnStore').classList.remove('Inactive');
                    document.getElementById('btnStore').classList.add('Active');
                    document.getElementById('btnFinalize').classList.add('Inactive');
                }
            });

            // submit
            // $('.f1').on('submit', function(e) {

            //     // fields validation
            //     $(this).find(
            //         'input[type="text"], input[type="password"], textarea,select,input[type="number"],input[type="tel"],input[type="email"],input[type="date"]'
            //     ).each(function() {
            //         if ($(this).val() == "") {
            //             e.preventDefault();
            //             $(this).addClass('input-error');
            //         } else {
            //             $(this).removeClass('input-error');
            //         }
            //     });
            //     // fields validation

            // });

            // finalizar


            function parpadeo(step) {
                if (step == true) {
                    stepinfinite = stepinfinite + 1;

                    if (stepinfinite >= 4) {
                        stepinfinite = 4;
                        nextStep = 'step' + stepinfinite
                        // console.log(nextStep);
                        document.getElementById(nextStep).classList.add('flicker');
                    } else {
                        nextStep = 'step' + stepinfinite
                        // console.log('el estado quedo en ' + stepinfinite);

                        document.getElementById(nextStep).classList.add('flicker');
                    }
                } else if (step == false) {
                    stepinfinite = stepinfinite - 1;
                    if (stepinfinite == 4) {
                        previousstep = 'step' + 2
                        // console.log('el estado se le quita al 2');
                        document.getElementById(previousstep).classList.remove('flicker');
                    } else {
                        quitState = stepinfinite + 1;
                        previousstep = 'step' + quitState
                        // console.log('el estado se le quita al ' + quitState);
                        document.getElementById(previousstep).classList.remove('flicker');
                    }
                }
            }

            function lastsaved() {
                if (stepinfinite >= 4) {
                    document.getElementById('btnStore').classList.remove('Inactive');
                    document.getElementById('btnStore').classList.add('Active');
                } else {
                    document.getElementById('btnStore').classList.remove('Active');
                    document.getElementById('btnStore').classList.add('Inactive');
                    document.getElementById('btnFinalize').classList.remove('Inactive');
                    // document.getElementById('btnFinalize').classList.add('Active');
                }
            }


            // $('#btnStore').on('click', function() {

            //     // navigation steps / progress steps
            //     var current_active_step_s = $('.f1').find('.f1-step');
            //     var current_active_step = $('.f1').find('.f1-step.active');
            //     var current_active_step_a = $('.f1').find('.f1-step.activated');
            //     var progress_line = $('.f1').find('.f1-progress-line');
            //     // console.log(current_active_step_a);
            //     $('.f1 fieldset').fadeOut(400, function() {
            //         // change icons

            //         // parpadeo(false);
            //         // lastsaved();
            //         // progress bar
            //         // documentract();
            //         document.getElementById('type_contract').value = 0;
            //         typeContract();
            //         progress_line.attr('style', 'width: ' + 22.66 + '%;').data('now-value', 20.66);

            //         current_active_step.removeClass('active');
            //         current_active_step_a.removeClass('activated');

            //         stepinfinite = 1;
            //         var contador = 5;

            //         for (var i = 1; i <= 4; i++) {

            //             var toreset = 'step' + contador;
            //             document.getElementById(toreset).classList.remove('flicker');
            //             // $(this).prev().fadeIn();

            //             var contador = contador - 1;
            //         }

            //         $(this).prev().prev().prev().prev().fadeIn();
            //         // scroll window to beginning of the form
            //         scroll_to_class($('.f1'), 20);
            //         current_active_step_s.first().addClass('active');
            //     });

            //     document.getElementById('btnStore').classList.remove('Active');
            //     document.getElementById('btnStore').classList.add('Inactive');
            //     document.getElementById('btnFinalize').classList.remove('Inactive');
            //     document.getElementById('btnFinalize').classList.add('Active');

            //     // console.log('si termina en la funcion prueba');

            // });

            // Livewire.on('cleaner', () => {
            //     console.log('si se ejecuta el livewire');
            //     prueba();

            //     // closeModal();


            // });



        });

        function restart() {
            // navigation steps / progress steps
            var current_active_step_s = $('.f1').find('.f1-step-vehicle');
            var current_active_step = $('.f1').find('.f1-step-vehicle.active');
            var current_active_step_a = $('.f1').find('.f1-step-vehicle.activated');
            var progress_line = $('.f1').find('.f1-progress-line');
            // console.log(current_active_step_a);

            $('#frm-vehicle').trigger("reset");

            documentOn('property_card_number', 'DocPropertyCardNumber');
            documentAbove('InputDocPropertyCardNumber', 'DocPropertyCardNumber');

            documentOn('secure_end_date', 'DocNumberAccreditationSoat');
            documentAbove('InputDocNumberAccreditationSoat', 'DocNumberAccreditationSoat');

            documentOn('technomechanical_end_date', 'DocNumberTechnomechanicalAccreditation');
            documentAbove('InputDocNumberTechnomechanicalAccreditation', 'DocNumberTechnomechanicalAccreditation');

            documentOn('expiration_card_operation', 'DocCardOperation');
            documentAbove('InputDocCardOperation', 'DocCardOperation');

            documentOn('expiration_preventive', 'DocPreventive');
            documentAbove('InputDocPreventive', 'DocPreventive');

            documentOn('certificate_extracontractual', 'DocCertificateExtracontractual');
            documentAbove('InputDocCertificateExtracontractual', 'DocCertificateExtracontractual');

            documentOn('civil_contractual', 'DocCivilContractual');
            documentAbove('InputDocCivilContractual', 'DocCivilContractual');

            $('.f1 fieldset').fadeOut(400, function() {
                // change icons

                // parpadeo(false);
                // lastsaved();
                // progress bar
                // documentract();
                progress_line.attr('style', 'width: ' + 25.66 + '%;').data('now-value', 25.66);

                current_active_step.removeClass('active');
                current_active_step_a.removeClass('activated');
                var contador;
                if (stepinfinite < 4) {
                    contador = stepinfinite;
                } else {
                    contador = 4;
                }
                // console.log('contador: ' + contador);
                // console.log('parpadeo: ' + stepinfinite);

                for (var i = 1; i <= stepinfinite; i++) {

                    if (contador != 1) {
                        var toreset = 'step' + contador;
                        document.getElementById(toreset).classList.remove('flicker');
                    }

                    // $(this).prev().fadeIn();

                    var contador = contador - 1;
                }
                stepinfinite = 1;

                $(this).prev().prev().prev().fadeIn();
                // scroll window to beginning of the form
                scroll_to_class($('.f1'), 25);
                current_active_step_s.first().addClass('active');
            });

            document.getElementById('btnStore').classList.remove('Active');
            document.getElementById('btnStore').classList.add('Inactive');
            document.getElementById('btnFinalize').classList.remove('Inactive');
            // document.getElementById('btnFinalize').classList.add('Active');

            // console.log('si termina en la funcion prueba');
        }

        function submited() {
            $(this).find(
                'input[type="text"], input[type="password"], textarea,select,input[type="number"],input[type="tel"],input[type="email"],input[type="date"]'
            ).each(function() {
                if ($(this).val() == "") {
                    e.preventDefault();
                    $(this).addClass('input-error');
                } else {
                    $(this).removeClass('input-error');
                }
            });
        }

        function viewhideinputs(id, adhere, stirring) {

            document.getElementById(id).classList.remove(stirring);
            document.getElementById(id).classList.add(adhere);
        }

        //fin scritp de formulario paso a paso

        jQuery('#secure_end_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#technomechanical_end_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#expiration_card_operation').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#expiration_preventive').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#certificate_extracontractual').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#civil_contractual').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#admission_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#vehicle_pickup_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });


        function fechasSet(id) {

            $('#' + id).on('change', function(e) {
                @this.set(id, e.target.value);
            });
        }

        function documentAbove(input, color) {

            var inputDocument = document.getElementById(input).value;

            if (inputDocument != '' || inputDocument != 0) {

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
                        document.getElementById(color).classList.remove('icon-green');
                        document.getElementById(color).classList.add('icon-blue');
                    }
                })
                // console.log('si');
            } else {

                document.getElementById(color).classList.remove('icon-blue');
                document.getElementById(color).classList.add('icon-green');
            }
        }


        function documentOn(paramInput, docInput) {

            var fechDoc = document.getElementById(paramInput).value;

            if (fechDoc != "" || fechDoc != 0) {
                document.getElementById(paramInput).classList.remove('w-full');
                document.getElementById(paramInput).classList.add('w90');
                document.getElementById(docInput).classList.remove('Inactive');
            } else {
                document.getElementById(paramInput).classList.remove('w90');
                document.getElementById(paramInput).classList.add('w-full');
                document.getElementById(docInput).classList.add('Inactive');
            }
        }
    </script>
@endsection
