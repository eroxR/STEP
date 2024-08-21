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
            <h1 class="text-black dark:text-white text-4xl1">{{ __('Creating new contract') }}<span id="typed2"
                    class="typed2">.</span>
                <span id="typed3" class="typed3">.</span>
                <span id="typed4" class="typed4">.</span>
                <span id="typed5" class="typed5">.</span>
            </h1>
            </p>
            <button
                class="ml-auto px-5-1 py-3-1 text-sm  rounded-lg  bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                aria-label="close" onclick="restart();" x-on:click="closeModal" wire:click="clear">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                    <path
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </button>
        </header>
        <!-- Modal body -->
        <div class="mt-4 mb-6">
            <form role="form" action="" method="post" id="frm-contracts"
                class="f1 px-4 my-32 max-w-3xl mx-auto space-y-6">

                <div class="f1-steps">
                    <div class="f1-progress">
                        <div class="f1-progress-line" data-now-value="20.66" data-number-of-steps="5"
                            style="width: 22.66%;"></div>
                    </div>
                    <div class="f1-step active">
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
                    <div class="f1-step ">
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
                    <div class="f1-step ">
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
                        <p>Paso final</p>
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

                                <select wire:model.defer="type_contract" onchange="typeContract()" id="type_contract"
                                    name="type_contract"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Tipo de contrato</option>
                                    @foreach ($type_contracts as $type_contract)
                                        <option value="{{ $type_contract->id }}">
                                            {{ $type_contract->description_typeContract }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="w-6-12 Inactive" id="divContract_with">

                                <select wire:model.defer="contract_with" id="contract_with" name="contract_with"
                                    onchange="withContract()"
                                    class="Inactive block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Contrato Con </option>
                                    <option value="1">Con Grupo PADRES</option>
                                    <option value="2">Con UNIVERSITARIOS</option>
                                    <option value="3">Con ESTUDIANTE CON ACUDIENTE</option>
                                    <option value="4">Con RECTOR O REPRESENTANTE LEGAL Del Colegio</option>
                                </select>

                            </div>
                            <div class="w-6-12 Inactive" id="divhealthWith">

                                <select {{-- wire:model.defer="contract_with"  --}} id="healthWith" name="healthWith" onchange="Withhealth()"
                                    class="Inactive block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Contrato Con </option>
                                    <option value="1">Con persona natural</option>
                                    <option value="2">Con HOSPITAL</option>
                                </select>

                            </div>
                        </div>

                        <div class="flex space-x-4 ">

                            <div class="w-6-12" id="divIdentification">
                                <label id="labelIdentification" class="Inactive text-gray-700 dark:text-gray-400">Tipo
                                    de
                                    Identificación</label>
                                <select wire:model.defer="identification" id="identification" name="identification"
                                    class="Inactive block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">IDENTIFICACIÓN</option>
                                    @foreach ($identifications as $identification)
                                        <option value="{{ $identification->id }}">
                                            {{ $identification->description_identification }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-6-12" id="divContractDocument">
                                <label id="labelContractDocument"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('contract document') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="documento del contratante" type="text" id="contract_document"
                                    name="contract_document" wire:model.defer="contract_document"
                                    onchange="documentOn('contract_document','DocNit')" />

                                <span id="DocNit" class="Inactive upload-ico fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocNit" wire:model.defer="DocNit"
                                        onchange="documentAbove('InputDocNit','DocNit')" class="upload-input"
                                        type="file">
                                </span>
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12 " id="divContractingName">
                                <label id="labelContractingName"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('contracting name') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="nombre del contratante" type="text" id="contracting_name"
                                    name="contracting_name" wire:model.defer="contracting_name" />
                            </div>

                            <div class="w-6-12 " id="divExpeditionIdentificationcard">
                                <label id="labelExpeditionIdentificationcard"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('expedition identificationcard') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="fecha expedición cedula" type="text"
                                    id="expedition_identificationcard" name="expedition_identificationcard"
                                    wire:model.defer="expedition_identificationcard" />
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12" id="divContractingDirection">
                                <label id="labelContractingDirection"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('contracting direction') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="dirección contratante" type="text" id="contracting_direction"
                                    name="contracting_direction" wire:model.defer="contracting_direction" />
                            </div>

                            <div class="w-6-12" id="divContractingPhone">
                                <label id="labelContractingPhone"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('contracting phone') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="telefono contratante" type="tel" id="contracting_phone"
                                    name="contracting_phone" wire:model.defer="contracting_phone" />
                            </div>
                        </div>


                        <br>
                        <div class="f1-buttons " id="fieldset1Buttons">
                            <button type="button" id="firstButtons"
                                class="Inactive btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">
                                Siguiente
                            </button>
                        </div>

                    </fieldset>
                    <!--fin del paso 1 -->

                    <!---paso 2 -->
                    <fieldset>

                        <div class="flex space-x-4">

                            <div class="w-6-12" id="divSchoolName">
                                <label id="labelSchoolName"
                                    class="text-gray-700 dark:text-gray-400">{{ __('school name or university') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="nombre del colegio" type="text" id="school_name"
                                    name="school_name" wire:model.defer="school_name" />
                            </div>

                            <div class="w-6-12" id="divAddressSchool">
                                <label id="labelAddressSchool"
                                    class="text-gray-700 dark:text-gray-400">{{ __('address school') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Dirección del colegio" type="text" id="address_school"
                                    name="address_school" wire:model.defer="address_school" />
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-full" id="divVehicle">
                                <label id="labelVehicle" class="text-gray-700 dark:text-gray-400">Selecciona el
                                    Vehiculo principal</label>
                                <select wire:model.defer="vehicle" id="vehicle" name="vehicle"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona el Vehiculo principal</option>
                                    @foreach ($vehicles as $vehicle)
                                        <option value="{{ $vehicle->id }}"> Placa: {{ $vehicle->plate_vehicle }}
                                            -
                                            lateral: {{ $vehicle->side_vehicle }} -
                                            fecha fin SOAT: {{ $vehicle->secure_end_date }} -
                                            fecha fin tecno: {{ $vehicle->technomechanical_end_date }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="flex space-x-4" id="divIdentificationLegalRepresentative">

                            <div class="w-6-12">
                                <label id="labelIdentificationLegalRepresentative"
                                    class="text-gray-700 dark:text-gray-400">{{ __('identification legal representative') }}</label>
                                <select wire:model.defer="identification_legal_representative"
                                    id="identification_legal_representative"
                                    name="identification_legal_representative"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Tipo de Identificación</option>
                                    @foreach ($identifications as $identification)
                                        <option value="{{ $identification->id }}">
                                            {{ $identification->description_identification }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-6-12">
                                <label id="labelIdentificationcardRepresentLegal"
                                    class="text-gray-700 dark:text-gray-400">{{ __('identificationcard represent legal') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="identificationcard_represent_legal" type="number"
                                    id="identificationcard_represent_legal" name="identificationcard_represent_legal"
                                    wire:model.defer="identificationcard_represent_legal" />
                            </div>

                        </div>

                        <div class="flex space-x-4" id="divEstudiante">

                            <div class="w30">
                                <label id="labelEstudiante"
                                    class="text-gray-700 dark:text-gray-400">{{ __('Student name') }}</label>
                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Nombre de estudiante" type="text" id="Student_name"
                                    name="Student_name" wire:model.defer="student_name" />
                            </div>

                            <div class="w30">
                                <label id="labelIdentificationcardEstudent"
                                    class="text-gray-700 dark:text-gray-400">{{ __('identificación estudiante') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="# identificación estudiante" type="number"
                                    id="identificationcard_Estudent" name="identificationcard_Estudent"
                                    wire:model.defer="identificationcard_estudent" />
                            </div>


                            <div class="w20">
                                <label id="labelGrade"
                                    class="text-gray-700 dark:text-gray-400">{{ __('grade tudent') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Grado del Estudiante" type="text" id="grade_student"
                                    name="grade_student" wire:model.defer="grade_student" />
                            </div>


                            <div class="w10">
                                <label id="labelStartDay"
                                    class="text-gray-700 dark:text-gray-400">{{ __('start day') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="inicio" type="text" id="start_day" name="start_day"
                                    wire:model.defer="start_day" onchange="fechasSet('start_day')" />
                            </div>


                            <div class="w10">
                                <label id="labelEndDay"
                                    class="text-gray-700 dark:text-gray-400">{{ __('end of day') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="final" type="text" id="End_day" name="End_day"
                                    wire:model.defer="End_day" onchange="fechasSet('End_day')" />
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelLegalRepresentative"
                                    class="text-gray-700 dark:text-gray-400">{{ __('legal representative') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Representante legal" type="text" id="legal_representative"
                                    name="legal_representative" wire:model.defer="legal_representative" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelLegalRepresentativeExpeditionIdentificationcard"
                                    class="text-gray-700 dark:text-gray-400">{{ __('legal representative expedition identificationcard') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Representante legal" type="text"
                                    id="legal_representative_expedition_identificationcard"
                                    name="legal_representative_expedition_identificationcard"
                                    wire:model.defer="legal_representative_expedition_identificationcard" />
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12" id="divIdentificationRepresentativeGroup">
                                <label id="labelIdentificationRepresentativeGroup"
                                    class="text-gray-700 dark:text-gray-400">{{ __('identification representative group') }}</label>
                                <select wire:model.defer="identification_representative_group"
                                    id="identification_representative_group"
                                    name="identification_representative_group"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Tipo de Identificación</option>
                                    @foreach ($identifications as $identification)
                                        <option value="{{ $identification->id }}">
                                            {{ $identification->description_identification }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-6-12" id="divIdentificationcardRepresentativeGroup">
                                <label id="labelIdentificationcardRepresentativeGroup"
                                    class="text-gray-700 dark:text-gray-400">{{ __('identificationcard representative group') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="identificationcard_representative_group" type="number"
                                    id="identificationcard_representative_group"
                                    name="identificationcard_representative_group"
                                    wire:model.defer="identificationcard_representative_group" />
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12" id="divGroupRepresentativeName">
                                <label id="labelGroupRepresentativeName"
                                    class="text-gray-700 dark:text-gray-400">{{ __('group representative name') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="group_representative_name" type="text"
                                    id="group_representative_name" name="group_representative_name"
                                    wire:model.defer="group_representative_name" />
                            </div>

                            <div class="w-6-12" id="divDateofexpeditionRepresentativeGroup">
                                <label id="labelDateofexpeditionRepresentativeGroup"
                                    class="text-gray-700 dark:text-gray-400">{{ __('dateofexpedition representative group') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="dateofexpedition_representative_group" type="text"
                                    id="dateofexpedition_representative_group"
                                    name="dateofexpedition_representative_group"
                                    wire:model.defer="dateofexpedition_representative_group" />
                            </div>

                        </div>

                        <div class="flex space-x-4" id="">

                            <div id="divRouteTrip" class="w-full">
                                <label id="labelRouteTrip"
                                    class="text-gray-700 dark:text-gray-400">{{ __('route trip contract') }}</label>

                                <textarea
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    name="" id="route_trip_contract" cols="1" rows="1" placeholder="ruta del contrato"
                                    wire:model.defer="route_trip_contract">
                                </textarea>
                            </div>

                            <div id="divExit" class="w16">
                                <label id="labelExit"
                                    class="text-gray-700 dark:text-gray-400">{{ __('departure time') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Hora salida" type="text" id="exit" name="exit"
                                    wire:model.defer="exit" onchange="fechasSet('exit')" />
                            </div>

                            <div id="divArrival" class="w16">
                                <label id="labelArrival"
                                    class="text-gray-700 dark:text-gray-400">{{ __('arrival time') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Hora de llegada" type="text" id="arrival" name="arrival"
                                    wire:model.defer="arrival" onchange="fechasSet('arrival')" />
                            </div>

                            <div id="divReturn" class="w16">
                                <label id="labelReturn"
                                    class="text-gray-700 dark:text-gray-400">{{ __('return time') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Hora de regreso" type="text" id="return" name="return"
                                    wire:model.defer="return" onchange="fechasSet('return')" />
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-full" id="divMunicipality">
                                <label id="labelMunicipality" class="text-gray-700 dark:text-gray-400">Selecciona
                                    el municipio</label>
                                <select wire:model.defer="municipality" id="municipality" name="municipality"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona el municipio</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">
                                            {{ $city->city_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelplate"
                                    class="text-gray-700 dark:text-gray-400">{{ __('plate') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="placa" type="text" id="plate" name="plate"
                                    wire:model.defer="plate" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelbrand"
                                    class="text-gray-700 dark:text-gray-400">{{ __('brand') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="brand" type="text" id="brand" name="brand"
                                    wire:model.defer="brand" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelline"
                                    class="text-gray-700 dark:text-gray-400">{{ __('line') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="line" type="text" id="line" name="line"
                                    wire:model.defer="line" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelmodel"
                                    class="text-gray-700 dark:text-gray-400">{{ __('model') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="model" type="text" id="model" name="model"
                                    wire:model.defer="model" />
                            </div>

                        </div>


                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelcylindercapacity"
                                    class="text-gray-700 dark:text-gray-400">{{ __('cylinder capacity') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="placa" type="text" id="cylinder_capacity"
                                    name="cylinder_capacity" wire:model.defer="cylinder_capacity" />
                            </div>

                            <div class="w-6-12">
                                <label id="labellegalbond"
                                    class="text-gray-700 dark:text-gray-400">{{ __('legal bond') }}</label>

                                <select wire:model.defer="legal_bond" id="legal_bond" name="legal_bond"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Vinculo Juridico</option>
                                    <option value="1">PROPIETARIO</option>
                                    <option value="2">TENEDOR</option>
                                </select>
                            </div>

                            <div class="w-6-12">
                                <label id="labelfuel"
                                    class="text-gray-700 dark:text-gray-400">{{ __('fuel') }}</label>

                                <select wire:model.defer="fuel" id="fuel" name="fuel"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">infrastructura del Vehiculo</option>
                                    @foreach ($vehicle_classes as $id => $vehicle_class)
                                        <option value="{{ $id }}">
                                            {{ $vehicle_class }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-6-12">
                                <label id="labelvehicleclass"
                                    class="text-gray-700 dark:text-gray-400">{{ __('vehicle class') }}</label>

                                <select wire:model.defer="vehicle_class" id="vehicle_class" name="vehicle_class"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Tipo de Vehiculo</option>
                                    @foreach ($vehicle_types as $id => $vehicle_type)
                                        <option value="{{ $id }}">
                                            {{ $vehicle_type }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelenginenumber"
                                    class="text-gray-700 dark:text-gray-400">{{ __('engine number') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="engine_number" type="text" id="engine_number"
                                    name="engine_number" wire:model.defer="engine_number" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelchassisnumber"
                                    class="text-gray-700 dark:text-gray-400">{{ __('chassis number') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="chassis_number" type="text" id="chassis_number"
                                    name="chassis_number" wire:model.defer="chassis_number" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelability"
                                    class="text-gray-700 dark:text-gray-400">{{ __('ability') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="ability" type="number" id="ability" name="ability"
                                    wire:model.defer="ability" />
                            </div>

                        </div>

                        <br>
                        <div class="f1-buttons">
                            <button type="button" id="DocRUT"
                                class="text-white w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file">
                                RUT <input id="InputDocRUT" wire:model.defer="DocRUT" type="file"
                                    onchange="documentAboveC('InputDocRUT','DocRUT')" class="upload-input">
                            </button>

                            <button type="button" id="DocResolution"
                                class="text-white w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file">
                                Resolución <input id="InputDocResolution" wire:model.defer="DocResolution"
                                    type="file" onchange="documentAboveC('InputDocResolution','DocResolution')">
                            </button>

                            <button type="button" id="DocCamaraComercio"
                                class="text-white w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file">
                                Camara de Comercio
                                <input id="InputDocCamaraComercio" wire:model.defer="DocCamaraComercio"
                                    type="file"
                                    onchange="documentAboveC('InputDocCamaraComercio','DocCamaraComercio')">
                            </button>

                            <button type="button" id="Docrnt"
                                class="text-white w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file">
                                registro nacional de turismo(RNT) <input id="InputDocrnt" wire:model.defer="Docrnt"
                                    type="file" onchange="documentAboveC('InputDocrnt','Docrnt')"
                                    class="upload-input">
                            </button>

                            <button type="button" id="Docempowerment"
                                class="text-white w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file">
                                Abilitación <input id="InputDocempowerment" wire:model.defer="Docempowerment"
                                    type="file" onchange="documentAboveC('InputDocempowerment','Docempowerment')">
                            </button>
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

                            <div class="w-6-12" id="divFamilyRelationship">
                                <label id="labelFamilyRelationship"
                                    class="text-gray-700 dark:text-gray-400">{{ __('Family Relationship') }}</label>

                                <select wire:model.defer="family_relationship" id="family_relationship"
                                    name="family_relationship"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona el Parentezco</option>

                                    @foreach ($relationships as $relationship)
                                        <option value="{{ $relationship->id }}">
                                            {{ $relationship->description_relationship }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="w-6-12" id="divWhoReceives">
                                <label id="labelWhoReceives"
                                    class="text-gray-700 dark:text-gray-400">{{ __('who receives') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="nombre de quien recibe al niño" type="text" id="who_receives"
                                    wire:model.defer="who_receives" />
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12" id="divDateStartContract">
                                <label id="labelDateStartContract"
                                    class="text-gray-700 dark:text-gray-400">{{ __('date start contract') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="fecha inicio del contrato" type="text" id="date_start_contract"
                                    readonly wire:model.defer="date_start_contract"
                                    onchange="fechasSet('date_start_contract')" />
                            </div>

                            <div class="w-6-12" id="divContractEndDate">
                                <label id="labelContractEndDate"
                                    class="text-gray-700 dark:text-gray-400">{{ __('contract end date') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="fecha fin contrato" type="text" id="contract_end_date" readonly
                                    wire:model.defer="contract_end_date" onchange="fechasSet('contract_end_date')" />
                            </div>
                        </div>

                        <div class="flex space-x-4" id="">

                            <div class="w-6-12" id="divQuantityVehicle">
                                <label id="labelQuantityVehicle"
                                    class="text-gray-700 dark:text-gray-400">{{ __('quantity vehicle') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="cantidad de vehiculos" type="number" id="quantity_vehicle"
                                    wire:model.defer="quantity_vehicle" />
                            </div>

                            <div class="w-6-12" id="divPassengerQuantity">
                                <label id="labelPassengerQuantity"
                                    class="text-gray-700 dark:text-gray-400">{{ __('passenger quantity') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="cantidad de pasajeros" type="number" id="passenger_quantity"
                                    wire:model.defer="passenger_quantity" />
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12" id="divSignaturePlace">
                                <label id="labelSignaturePlace"
                                    class="text-gray-700 dark:text-gray-400">{{ __('signature place') }}</label>
                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="ciudad y departamento donde se firma el contrato" type="text"
                                    id="signature_place" wire:model.defer="signature_place" />
                            </div>

                            <div class="w-6-12" id="divSigningDate">
                                <label id="labelSigningDate"
                                    class="text-gray-700 dark:text-gray-400">{{ __('contract signing date') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="fecha de cuando se firma el contrato" type="text"
                                    id="contract_signing_date" wire:model.defer="contract_signing_date"
                                    onchange="fechasSet('contract_signing_date')" />
                            </div>
                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelTipePay"
                                    class="text-gray-700 dark:text-gray-400">{{ __('tipe pay') }}</label>
                                <select wire:model.defer="tipe_pay" id="tipe_pay"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona el tipo de pago</option>
                                    @foreach ($payment_types as $payment_type)
                                        <option value="{{ $payment_type->id }}">
                                            {{ $payment_type->description_typePayment }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-6-12">
                                <label id="labelContractValue"
                                    class="text-gray-700 dark:text-gray-400">{{ __('contract value') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Valor contrato sin puntos ni comas" type="number"
                                    id="contract_value" wire:model.defer="contract_value" />
                            </div>
                        </div>

                        <br>
                        <div class="f1-buttons">

                            <button type="button" id="DocAttachContract"
                                class="text-white w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file">
                                Adjuntar contrato <input id="InputDocAttachContract"
                                    wire:model.defer="DocAttachContract" type="file"
                                    onchange="documentAboveC('InputDocAttachContract','DocAttachContract')"
                                    class="upload-input">
                            </button>

                            <button type="button" type="button" id="bpassenger" onclick="passenger()"
                                class="text-white w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Adjuntar
                                Pasajeros
                            </button>

                            <div
                                class="relative inline-block w4 mr-2 align-middle select-none transition duration-200 ease-in">
                                <input type="checkbox" name="toggle" id="toggle"
                                    wire:model.defer="total_disposition"
                                    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                <label for="toggle"
                                    class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                            </div>
                            <label for="toggle" class="text-xs text-gray-700 dark:text-gray-400">Disposición
                                Total</label>

                            <button type="button" id="previous3"
                                class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>

                            <button type="button" id="btnFinalize"
                                class="btn btn-Finalize w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Finalizar</button>

                        </div>

                    </fieldset>

                </div>

            </form>
        </div>

        <div
            class="flex flex-col items-center justify-end px-6 py-3-1 -mx-6 -mb-4 -mt-3 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
            <button id="btnStore" type="submit"
                class="Inactive w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                wire:click="store">
                {{ __('Generate Contract') }}
            </button>
            <button x-on:click="closeModal" id="btnCalcel"
                class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                wire:click="clear" onclick="restart();">
                {{ __('Cancel') }}
            </button>
        </div>
    </div>
</div>
