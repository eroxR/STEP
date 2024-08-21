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
            <h1 class="text-black dark:text-white text-4xl1">{{ __('Editing the information') }}

                @if (!is_null($editContracts))
                    {{ $descriptionTypeContract }}
                @endif
                {{ __('number') }}
                @if (!is_null($editContracts))
                    {{ $editContracts->contract_number }}
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

                @if (!is_null($editContracts))


                    <form role="form" action="" method="post" id="editfrmContracts"
                        class="f1 px-4 my-32 max-w-3xl mx-auto space-y-6">

                        <!-- Modal description -->
                        <div
                            class="mt-11 border-gray-50-s container px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9 ">

                            <!--paso 1 edit-->
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                paso 1
                            </p>
                            <div class="border-ourple-50-s rounded-2xl p-4">
                                <div class="flex space-x-4 justify-center">

                                    <div class="w-1-3 ">

                                        <div class="border-ourple-50-s rounded-2xl p-4">
                                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                                @foreach ($type_contracts as $type_contract)
                                                    @if ($editContracts->type_contract == $type_contract->id)
                                                        {{ $type_contract->description_typeContract }}
                                                    @endif
                                                @endforeach
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                <div class="flex space-x-4 ">

                                    <div class="w-6-12 ">
                                        <label class="text-gray-700 dark:text-gray-400">tipo de
                                            identification</label>
                                        <select wire:model="editContracts.identification" name="identification"
                                            class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="0">Tipo de Identificación</option>
                                            @foreach ($identifications as $identification)
                                                <option value="{{ $identification->id }}">
                                                    {{ $identification->description_identification }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="w-6-12 ">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('contract document') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="documento del contratante" type="number"
                                            name="contract_document" wire:model="editContracts.contract_document" />
                                    </div>

                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12 ">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('contracting name') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="nombre del contratante" type="text" name="contracting_name"
                                            wire:model="editContracts.contracting_name" />
                                    </div>

                                    <div class="w-6-12 ">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('expedition identificationcard') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="fecha expedición cedula" type="text"
                                            name="expedition_identificationcard"
                                            wire:model="editContracts.expedition_identificationcard" />
                                    </div>

                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12  ">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('contracting direction') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="dirección contratante" type="text"
                                            name="contracting_direction"
                                            wire:model="editContracts.contracting_direction" />
                                    </div>

                                    <div class="w-6-12  ">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('contracting phone') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="telefono contratante" type="tel" name="contracting_phone"
                                            wire:model="editContracts.contracting_phone" />
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
                                @if ($editContracts->type_contract == 1)
                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('school name') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="nombre del colegio" type="text" name="school_name"
                                                wire:model="editContracts.school_name" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('address school') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Dirección del colegio" type="text"
                                                name="address_school" wire:model.defer="address_school" />
                                        </div>

                                    </div>

                                    {{-- <div class="flex space-x-4">

                                    <div class="w-full">
                                        <label class="text-gray-700 dark:text-gray-400">secure_policy</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="secure_policy" type="text" name="secure_policy"
                                            wire:model="editContracts.secure_policy" />
                                    </div>

                                </div> --}}
                                @endif

                                {{-- @if ($editContracts->type_contract == 2 || $editContracts->type_contract == 3 || $editContracts->type_contract == 5)
                                <div class="flex space-x-4">

                                    <div class="w-full">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('cooperation contract') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="cooperation_contract" type="text"
                                            name="cooperation_contract"
                                            wire:model="editContracts.cooperation_contract" />
                                    </div>

                                </div>
                            @endif --}}

                                @if ($editContracts->type_contract == 4)
                                    <div class="flex space-x-4">

                                        <div class="w-full">
                                            <label class="text-gray-700 dark:text-gray-400">Selecciona el
                                                Vehiculo principal</label>
                                            <select wire:model="vehicleSelect" name="vehicle"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona el Vehiculo principal</option>

                                                @foreach ($vehicles as $vehicle)
                                                    <option {{-- @if ($vehicleSelect != null) @if ($vehicleSelect == $vehicle->id)
                                                        selected 
                                                        @endif
                                                    @endif --}} value="{{ $vehicle->id }}">
                                                        Placa:
                                                        {{ $vehicle->plate_vehicle }} ---
                                                        lateral: {{ $vehicle->side_vehicle }} ---
                                                        fecha fin SOAT: {{ $vehicle->secure_end_date }} ---
                                                        fecha fin tecno:
                                                        {{ $vehicle->technomechanical_end_date }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>
                                @endif


                            </div>
                            <!--fin del paso 2 edit-->

                            <br>
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                paso 3
                            </p>
                            <div class="border-ourple-50-s rounded-2xl p-4">

                                @if (
                                    $editContracts->type_contract == 1 ||
                                        $editContracts->type_contract == 2 ||
                                        $editContracts->type_contract == 3 ||
                                        $editContracts->type_contract == 1)
                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('identification legal representative') }}</label>
                                            <select wire:model="editContracts.identification_represent_legal"
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
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('identificationcard represent legal') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="identificationcard_represent_legal" type="number"
                                                name="identificationcard_represent_legal"
                                                wire:model="editContracts.identificationcard_represent_legal" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('legal representative') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Representante legal" type="text"
                                                name="legal_representative"
                                                wire:model="editContracts.legal_representative" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('legal representative expedition identificationcard') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Representante legal" type="text"
                                                name="legal_representative_expedition_identificationcard"
                                                wire:model="editContracts.legal_representative_expedition_identificationcard" />
                                        </div>

                                    </div>
                                @endif

                                @if ($editContracts->type_contract == 4)
                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('identification representative group') }}</label>
                                            <select wire:model="editContracts.identification_representative_group"
                                                name="identification_representative_group"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Tipo de Identificación</option>
                                                @foreach ($identifications as $identification)
                                                    <option value="{{ $identification->id }}">
                                                        {{ $identification->description_identification }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('identificationcard representative group') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="identificationcard_representative_group" type="number"
                                                name="identificationcard_representative_group"
                                                wire:model="editContracts.identificationcard_representative_group" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('group representative name') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="group_representative_name" type="text"
                                                name="group_representative_name"
                                                wire:model="editContracts.group_representative_name" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('dateofexpedition representative group') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="dateofexpedition_representative_group" type="text"
                                                name="dateofexpedition_representative_group"
                                                wire:model="editContracts.dateofexpedition_representative_group" />
                                        </div>

                                    </div>
                                @endif

                            </div>
                            <!--fin del paso 3 edit-->

                            <br>
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                paso 4
                            </p>
                            <div class="border-ourple-50-s rounded-2xl p-4">

                                <div class="flex space-x-4">

                                    <div class="w-full">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('route trip contract') }}</label>

                                        <textarea
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            name="" cols="1" rows="1" placeholder="ruta del contrato"
                                            wire:model="editContracts.route_trip_contract">
                            </textarea>
                                    </div>

                                </div>

                            </div>
                            <!--fin del paso 4 edit-->

                            <!--paso fin edit-->
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                paso fin
                            </p>
                            <div class="border-ourple-50-s rounded-2xl p-4">

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('date start contract') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="date_start_contract" type="date"
                                            wire:model="editContracts.date_start_contract" />
                                    </div>

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('contract end date') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="fecha fin contrato" type="date"
                                            wire:model="editContracts.contract_end_date" />
                                    </div>
                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('quantity vehicle') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="quantity_vehicle" type="number"
                                            wire:model="editContracts.quantity_vehicle" />
                                    </div>

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('passenger quantity') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="passenger_quantity" type="number"
                                            wire:model="editContracts.passenger_quantity" />
                                    </div>
                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('total disposition') }}</label>
                                        <select wire:model="editContracts.total_disposition"
                                            class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="0">Selecciona si necesita Disposición Total
                                            </option>
                                            <option value="SI">SI</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </div>

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('contract signing date') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="contract_signing_date" type="date"
                                            wire:model="editContracts.contract_signing_date" />
                                    </div>
                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">{{ __('tipe pay') }}</label>
                                        <select wire:model="editContracts.tipe_pay"
                                            class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="0">Selecciona el tipo de pago</option>
                                            @foreach ($payment_types as $payment_type)
                                                <option value="{{ $payment_type->id }}">
                                                    {{ $payment_type->description_typePayment }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('contract value') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Valor contrato" type="number"
                                            wire:model="editContracts.contract_value" />
                                    </div>
                                </div>

                            </div>
                            <!--fin edit-->

                        </div>

                    </form>
                @endif
            </div>

            <div
                class="flex flex-col items-center justify-end px-6 py-3-1 -mt-3 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button
                    class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    wire:click="update" onclick="closeModalEdit()">
                    {{ __('Update Contract') }}
                </button>
                <button
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                    wire:click="clear" onclick="closeModalEdit()">
                    {{ __('Cancel') }}
                </button>
            </div>

        </div>

    </div>
</div>
