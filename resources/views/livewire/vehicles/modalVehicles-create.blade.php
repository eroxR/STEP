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
            <h1 class="text-black dark:text-white text-4xl1">{{ __('Creating new vehicle') }}<span id="typed2"
                    class="typed2">.</span>
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
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocPropertyCardNumber" wire:model.defer="DocPropertyCardNumber"
                                        onchange="documentAbove('InputDocPropertyCardNumber','DocPropertyCardNumber')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                        </div>

                        <div class="flex space-x-4 ">

                            <div class="w-6-12">
                                <label id="labelDimensionRims"
                                    class="text-gray-700 dark:text-gray-400">{{ __('dimension rims') }}</label>

                                <select wire:model.defer="dimension_rims" id="dimension_rims" name="dimension_rims"
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
                                        name="internal_external_owner_type" id="external_owner_type" value="0"
                                        wire:model.defer="internal_external_owner_type">
                                    <label id="labelexternal_owner_type"
                                        class="form-check-label text-gray-700 dark:text-gray-400"
                                        for="external_owner_type">
                                        EXTERNO
                                    </label>
                                </div>
                                <div class="form-check check4">
                                    <input class="form-check-input" type="radio"
                                        name="internal_external_owner_type" id="internal_owner_type" value="1"
                                        wire:model.defer="internal_external_owner_type">
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
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor">
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
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor">
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
                                    id="card_operation" name="card_operation" wire:model.defer="card_operation" />

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

                                <span id="DocCardOperation" class="Inactive upload-ico fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
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
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor">
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
                                    placeholder="Certificado Civil contractual" type="text" id="civil_contractual"
                                    name="civil_contractual" wire:model.defer="civil_contractual"
                                    onchange="fechasSet('civil_contractual'),documentOn('civil_contractual','DocCivilContractual')" />

                                <span id="DocCivilContractual"
                                    class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor">
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
                                    aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
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


                                <select wire:model.defer="type_direction" id="type_direction" name="type_direction"
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
            <button x-on:click="closeModal" id="btnCalcel"
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
