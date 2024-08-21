<div x-cloak x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center" wire:ignore.self>
    <!-- Modal -->
    <div x-cloak x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0  transform translate-y-1/2"
        class="w-9-12 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 overflow-x-hidden overflow-y-auto"
        role="dialog" id="modal">
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
                class="ml-auto px-5-1 py-3-1 text-sm  rounded-lg  bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
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

            <form role="form" action="" method="post" id="Frmpermit"
                class="f1 px-4 my-32 max-w-3xl mx-auto space-y-6">

                <div class="f1-steps" wire:ignore>
                    <div class="f1-progress">
                        <div class="f1-progress-line" data-now-value="33" data-number-of-steps="3" style="width: 34%;">
                        </div>
                    </div>
                    <div class="f1-step-fuec active">
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
                    <div class="f1-step-fuec ">
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
                    <div class="f1-step-fuec ">
                        <div class="f1-step-icon">

                            <!-- Crea un icono envuelto por la clase fa-stack -->
                            <span class="fa-stack  ">
                                <!-- El icono que envolverá el número -->
                                <span class="fa fa-circle-o fa-stack-2x"></span>
                                <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                <strong class="fa-stack-1x -ml-1 numcolor" id="step3">
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
                    <fieldset wire:ignore.self>
                        {{-- <br> --}}

                        <div class="flex space-x-4">

                            <div class="w-6-12">

                                <label class="text-gray-700 dark:text-gray-400">Selecciona el tipo de
                                    contrato</label>

                                <select wire:model="typeContract" name="typeContract" id="typeContract"
                                    onchange="contractType()"
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                                    <option value="0">Tipo de contrato</option>
                                    @foreach ($typeContracts as $id => $typeContract)
                                        @if ($id == 1 || $id == 2 || $id == 3 || $id == 4 || $id == 5)
                                            <option value="{{ $id }}">{{ $typeContract }}</option>
                                        @endif
                                    @endforeach
                                </select>

                            </div>

                            <div class="w-6-12">

                                <label class="text-gray-700 dark:text-gray-400" wire:loading.remove
                                    wire:target="typeContract">Selecciona el numero de
                                    contrato</label><span wire:loading wire:target="typeContract"
                                    class="text-gray-700 dark:text-gray-400">Cargando
                                    Contractos...</span>

                                <select wire:model="contract" name="contract" id="contract"
                                    onchange="changeContract2()"
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                                    <option value="0">Selecciona el numero del contrato</option>
                                    @if (!is_null($contractSelects))
                                        @foreach ($contractSelects as $contractSelect)
                                            <option value="{{ $contractSelect->id }}">
                                                Contrato N° {{ $contractSelect->contract_number }}</option>
                                        @endforeach
                                    @endif
                                </select>

                            </div>

                        </div>


                        <div class="flex space-x-4" wire:ignore>

                            <div class="w-6-12" id="divPermitStartDate" onchange="changeDate()">
                                <label class="Inactive text-gray-700 dark:text-gray-400"
                                    id="labelPermitStartDate">{{ __('permit start date') }}</label>

                                <input readonly
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="fecha inicio permiso" type="text" name="permit_start_date"
                                    id="permit_start_date" wire:model="permit_start_date"
                                    onchange="fechasSet('permit_start_date')" />
                            </div>

                            <div class="w-6-12" id="divPermitEndDate" onchange="changeDate()">
                                <label class="Inactive text-gray-700 dark:text-gray-400"
                                    id="labelPermitEndDate">{{ __('permit end date') }}</label>

                                <input readonly
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="fecha fin permiso" type="text" name="permit_end_date"
                                    id="permit_end_date" wire:model="permit_end_date"
                                    onchange="fechasSet('permit_end_date')" />
                            </div>

                        </div>

                        <div class="flex space-x-4" wire:ignore>

                            <div class="w-full Inactive mt-12" id="divchangeDate">
                                <label
                                    class="ml-26 px-2 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"
                                    id="">
                                    {{ __('You have changed your contract, remember to check the dates') }}
                                </label>
                            </div>

                        </div>

                        <br>
                        <div wire:ignore class="f1-buttons Inactive" id="fieldset1Buttons">
                            <button type="button"
                                class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                        </div>

                    </fieldset>
                    <!--fin del paso 1 -->

                    <!---paso 2 -->
                    <fieldset wire:ignore>

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
                                    onchange="selectDriving()" class="select2 " multiple="muliple">

                                    @foreach ($drivers as $driver)
                                        <option value="{{ $driver->id }}">CC. {{ $driver->identificationcard }}
                                            -
                                            Nombre: {{ $driver->nameFull }}</option>
                                    @endforeach

                                </select>
                            </div>


                        </div>

                        <br>
                        <div class="flex space-x-4">
                            <button id="previous2" type="button"
                                class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                            <button type="button" id="next2"
                                class=" Inactive btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                        </div>
                    </fieldset>
                    <!--fin del paso 2 -->

                    <!--paso fin -->
                    <fieldset wire:ignore>

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
                                    onchange="selectCars()" class="car bg-green-700 bg-opacity-50"
                                    multiple="muliple">
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
                        <div class="flex space-x-4">
                            <button type="button" id="previous5"
                                class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                            {{-- <button type="button" id="btnFinalize"
                            class="btn btn-Finalize w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Finalizar</button> --}}
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
            <button id="btnStore"
                class="Inactive w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                wire:click="store">
                {{ __('Generate Permit') }}
            </button>
        </div>
    </div>
</div>
