<div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" id="modalEdit" wire:ignore.self
    class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">

    <!-- Modal -->
    <div x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0  transform translate-y-1/2"
        class="w-9-12 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4" role="dialog">
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-center border-b-fuchsia-800 border-b">
            <!-- Modal title -->
            <p class="justify-start mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
            <h1 class="text-black dark:text-white text-4xl1">
                {{ __('Editing the information of the vehicle with license plate') }}
                @if (!is_null($editVehicles))
                    {{ $editVehicles->plate_vehicle }}
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
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('plate vehicle') }}</label>
                                        <div class="border-ourple-50-s rounded-2xl p-4">
                                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                                {{ $editVehicles->plate_vehicle }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex space-x-4 ">

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('model vehicle') }}</label>
                                        <div class="border-ourple-50-s rounded-2xl p-4">
                                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                                {{ $editVehicles->model_vehicle }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('brand vehicle') }}</label>
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
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('color vehicle') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="color del vehiculo" type="text"
                                            wire:model="editVehicles.color_vehicle" />
                                    </div>

                                </div>

                                <div class="flex space-x-4 ">

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('side vehicle') }}</label>
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
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('engine number') }}</label>
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
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('owner vehicle') }}</label>

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
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('use vehicle') }}</label>
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
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('secure end date') }}</label>

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

                                        <span id="Tarjeta_de_Operación" class=" edit-upload-ico fas fa-file-upload"
                                            {{-- @if ($docCardOperation != '') icon-blue @else icon-green @endif" --}} aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor">
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
                                            wire:model="editVehicles.expiration_preventive" {{-- onchange="fechasSet('expiration_preventive')"  --}} />

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
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('civil contractual') }}</label>

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

                                    <div class="w-1-3">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('admission date') }}</label>
                                        <div class="border-ourple-50-s rounded-2xl p-4">
                                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                                {{ $editVehicles->admission_date }}
                                            </p>
                                        </div>
                                    </div>

                                    {{-- <div class="w-1-2">
                                    <label
                                        class="text-gray-700 dark:text-gray-400">{{ __('vehicle pickup date') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha de retiro del sitema del vahiculo" type="date"
                                        wire:model="editVehicles.vehicle_pickup_date"
                                        {{-- onchange="fechasSet('vehicle_pickup_date')" />
                                </div> --}}

                                    <div class="w-1-2">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('cylinder vehicle') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="número de Cilindraje del vehiculo" type="number"
                                            wire:model="editVehicles.cylinder_vehicle" />
                                    </div>

                                    {{-- <div class="w-1-2">
                                    <label
                                        class="text-gray-700 dark:text-gray-400">{{ __('quantity valves') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="cantidad de valvulas" type="number" step="0.01"
                                        min="0" max="10" maxlength="5"
                                        wire:model="editVehicles.quantity_valves" />
                                </div> --}}

                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-1-2">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('number passenger') }}</label>
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
                                        placeholder="Cantidad de cilindros" type="number" maxlength="5"
                                        wire:model="editVehicles.number_cylinders" />
                                </div> --}}

                                    {{-- <div class="w-1-2">
                                    <label class="text-gray-700 dark:text-gray-400">turbo</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="cantidad de turbo" type="number" maxlength="5"
                                        wire:model="editVehicles.turbo" />
                                </div> --}}

                                    {{-- <div class="w-1-2">
                                    <label
                                        class="text-gray-700 dark:text-gray-400">{{ __('orientation') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="tipo de orentación" type="number" step="0.01"
                                        min="0" max="10" maxlength="5"
                                        wire:model="editVehicles.orientation" />
                                </div> --}}


                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-1-2">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('front suspension') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="cantidad de suspensión frontal" type="number"
                                            maxlength="5" wire:model="editVehicles.front_suspension" />
                                    </div>

                                    <div class="w-1-2">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('rear suspension') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="cantidad de suspensión trasera" type="number"
                                            maxlength="5" wire:model="editVehicles.rear_suspension" />
                                    </div>

                                    <div class="w-1-2">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('rear brake type') }}</label>

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
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('front brake type') }}</label>

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
                                        placeholder="cantidad de neumaticos" type="number" step="0.01"
                                        min="0" max="10" maxlength="5"
                                        wire:model="editVehicles.tire_number" />
                                </div> --}}
                                    <div class="w-15">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('type direction') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="tipo de dirección" type="number" maxlength="5"
                                            wire:model="editVehicles.type_direction" />
                                    </div>

                                    {{-- <div class="w-15">
                                    <label
                                        class="text-gray-700 dark:text-gray-400">{{ __('transmission type') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Tipo de transmisión" type="number" maxlength="5"
                                        wire:model="editVehicles.transmission_type" />
                                </div> --}}

                                    {{-- <div class="w-15">
                                    <label
                                        class="text-gray-700 dark:text-gray-400">{{ __('number speeds') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="cantidad maxima de velocidades" type="number"
                                        maxlength="5" wire:model="editVehicles.number_speeds" />
                                </div> --}}

                                    {{-- <div class="w-15">
                                    <label
                                        class="text-gray-700 dark:text-gray-400">{{ __('type bearing') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="tipo de rodamiento" type="number" maxlength="5"
                                        wire:model="editVehicles.type_bearing" />
                                </div> --}}

                                    {{-- <div class="w-15">
                                    <label
                                        class="text-gray-700 dark:text-gray-400">{{ __('number windows') }}</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="número de ventanas" type="number" maxlength="5"
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
