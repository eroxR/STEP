<div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" id="modalEdit" wire:ignore.self
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
            <h1 class="text-black dark:text-white text-4xl1">{{ __('editing permit information number') }}
                @if (!is_null($editPermit))
                    {{ $editPermit->permit_number }},
                @endif
                {{ __('number contract') }}
                @if (!is_null($editPermit))
                    {{ $editContrat }} {{ __('type') }}

                    @switch($editContratype)
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
                            Usuarios de Servicios de Salud
                        @break

                        @default
                    @endswitch
                @endif
                <span id="typed2" class="typed2">.</span>
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
            <div class="mt-4 mb-6" wire:ignore.self>
                <!-- Modal description -->

                @if (!is_null($editPermit))
                    <form role="form" action="" method="post" id="editFrmPermit"
                        class="f1 px-4 my-32 max-w-3xl mx-auto space-y-6">

                        <!-- Modal description -->
                        <div
                            class="-mt-11 border-gray-50-s container px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 h-9 ">

                            <!--paso 1 edit-->
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                paso 1
                            </p>
                            <div class="border-ourple-50-s rounded-2xl p-4">

                                <div class="flex space-x-4">

                                    <div class="w-6-12">

                                        <label class="text-gray-700 dark:text-gray-400">Tipo de contrato
                                        </label>

                                        <div class="border-ourple-50-s rounded-2xl p-4">
                                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                                {{ $editContratype }}
                                            </p>
                                        </div>

                                    </div>

                                    <div class="w-6-12">

                                        <label class="text-gray-700 dark:text-gray-400">Numero de contrato
                                        </label>

                                        <div class="border-ourple-50-s rounded-2xl p-4">
                                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                                {{ $editContrat }}
                                            </p>
                                        </div>

                                    </div>

                                </div>


                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('permit start date') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="fecha inicio permiso" type="date" name="permit_start_date"
                                            wire:model="editPermit.permit_start_date" />
                                    </div>

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('permit end date') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="fecha fin permiso" type="date" name="permit_end_date"
                                            wire:model="editPermit.permit_end_date" />
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

                                <div class="flex space-x-4">

                                    <div class="w-full">

                                        <div class="select-box-drive">
                                            <div class="options-container-drive border-ourple-50-s dark:bg-gray-800">
                                                @foreach ($drivers as $driver)
                                                    <div class="option-drive dark:bg-gray-800 dark:text-white">
                                                        <input type="checkbox" name="driverConduc" id=""
                                                            wire:model.defer="editDrives" value="{{ $driver->id }}">
                                                        <label>
                                                            CC. {{ $driver->identificationcard }} -
                                                            Nombre: {{ $driver->nameFull }}</label>
                                                    </div>
                                                @endforeach

                                            </div>

                                            <div
                                                class="selected-drive dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                                                Edita los conductores para este permiso
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!--fin del paso 2 edit-->

                            <!--paso fin edit-->
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                paso fin
                            </p>
                            <div class="border-ourple-50-s rounded-2xl p-4">

                                <div class="flex space-x-4">

                                    <div class="w-full">

                                        <div class="select-box-vehicle">
                                            <div class="options-container-vehicle border-ourple-50-s dark:bg-gray-800">
                                                @foreach ($vehicles as $vehicle)
                                                    <div class="option-vehicle dark:bg-gray-800 dark:text-white">
                                                        <input type="checkbox" name="carVheicle" id=""
                                                            wire:model.defer="editCars" value="{{ $vehicle->id }}">
                                                        <label>placa:
                                                            {{ $vehicle->plate_vehicle }}-
                                                            lateral: {{ $vehicle->side_vehicle }}-
                                                            SOAT: {{ $vehicle->secure_end_date }}-
                                                            fecha fin tecno:
                                                            {{ $vehicle->technomechanical_end_date }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>

                                            <div
                                                class="selected-vehicle dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                                                Edita los vehículos para este permiso
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!--fin edit-->

                        </div>

                    </form>
                @endif
            </div>
            <div wire:ignore
                class="flex flex-col items-center justify-end px-6 py-3 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                    wire:click="clear" onclick="closeModalEdit()">
                    {{ __('Cancel') }}
                </button>
                <button
                    class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    wire:click="update" onclick="closeModalEdit()">
                    {{ __('Update FUEC') }}
                </button>
            </div>
        </div>

    </div>
</div>
