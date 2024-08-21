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
            <h1 class="text-black dark:text-white text-4xl1">{{ __('Editing the information of the user') }}
                @if (!is_null($editUsers))
                    {{ $editUsers->firstname }} {{ $editUsers->lastname }}
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
            <div class="-mt-11 mb-6">
                <!-- Modal description -->

                @if (!is_null($editUsers))
                    <form role="form" action="" method="post" id="editfrmUser"
                        class="f1 px-4 my-32 max-w-3xl mx-auto space-y-6">

                        <div
                            class="mt-11 border-gray-50-s container px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9 ">

                            <!--paso 1 edit-->
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                paso 1
                            </p>
                            <div class="border-ourple-50-s rounded-2xl p-4">

                                {{-- <br> --}}
                                <div class="flex space-x-4 ">

                                    <div class="w-6-12 ">

                                        <label class="text-gray-700 dark:text-gray-400">tipo de
                                            usuario</label>
                                        <div class="border-ourple-50-s rounded-2xl p-4">
                                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                                @if ($editUsers->usertype == 1)
                                                    Cliente
                                                @else
                                                    @if ($editUsers->usertype == 2)
                                                        Empleado
                                                    @else
                                                        @if ($editUsers->usertype == 3)
                                                            Proveedor
                                                        @else
                                                            @if ($editUsers->usertype == 4)
                                                                Vinculado
                                                            @endif

                                                        @endif

                                                    @endif

                                                @endif

                                            </p>
                                        </div>

                                    </div>

                                    @if ($editUsers->usertype == 2)
                                        <div class="w-6-12 ">

                                            <label class=" text-gray-700 dark:text-gray-400">Selecciona un
                                                Cargo</label>

                                            @if ($editUsers->charge == 5)
                                                <div class="border-ourple-50-s rounded-2xl p-4">
                                                    <p class="text-sm text-gray-700 dark:text-gray-400">
                                                        CO - Conductor(a)
                                                    </p>
                                                </div>
                                            @else
                                                <select wire:model="editUsers.charge" onchange="typeCharge()"
                                                    class=" block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                    <option value="0">Selecciona un Cargo</option>

                                                    @foreach ($charges as $charge)
                                                        @if ($charge->id != 5)
                                                            <option value="{{ $charge->id }}">
                                                                {{ $charge->code_charge }} -
                                                                {{ $charge->description_charge }}</option>
                                                        @endif
                                                    @endforeach

                                                </select>
                                            @endif

                                        </div>
                                    @endif

                                    @if ($editUsers->usertype == 3)
                                        <div class="w-6-12 ">
                                            <label class=" text-gray-700 dark:text-gray-400">supplier_name
                                                <input
                                                    class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                    placeholder="Nombre del proveedor" type="text"
                                                    name="supplier_name" wire:model="editUsers.supplier_name" />
                                        </div>
                                    @endif

                                </div>

                                @if ($editUsers->usertype == 1 || $editUsers->usertype == 2 || $editUsers->usertype == 4)

                                    <div class="flex space-x-4 ">



                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('identification') }}</label>
                                            <select wire:model="editUsers.identification" name="identification"
                                                class=" block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">IDENTIFICACIÓN</option>
                                                @foreach ($identifications as $identification)
                                                    <option value="{{ $identification->id }}">
                                                        {{ $identification->description_identification }}</option>
                                                @endforeach
                                            </select>
                                        </div>



                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('identificationcard') }}</label>

                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    {{ $editUsers->identificationcard }}
                                                </p>
                                            </div>
                                        </div>



                                    </div>

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('firstname') }}</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Primer nombre" type="text"
                                                wire:model="editUsers.firstname" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('secondname') }}</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Segundo nombre" type="text" name="secondname"
                                                wire:model="editUsers.secondname" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('lastname') }}</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Apellido paterno" type="text"
                                                wire:model="editUsers.lastname" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('motherslastname') }}</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Apellido materno" type="text" name="motherslastname"
                                                wire:model="editUsers.motherslastname" />
                                        </div>

                                    </div>

                                @endif

                                @if ($editUsers->usertype == 3)

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('company name provider') }}</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="nombre de la empresa proveedor" type="text"
                                                name="company_name_provider"
                                                wire:model="editUsers.company_name_provider" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('commercial reason supplier') }}</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="proveedor de razón comercial" type="text"
                                                name="commercial_reason_supplier"
                                                wire:model="editUsers.commercial_reason_supplier" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4 ">


                                        <div class="w-6-12">

                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('supplier category') }}</label>

                                            <select wire:model="editUsers.supplier_category" name="supplier_category"
                                                class=" block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona la descripción de la categoria
                                                </option>

                                                @foreach ($supplierCategories as $id => $supplierCategory)
                                                    <option value="{{ $id }}">
                                                        {{ $supplierCategory }}
                                                    </option>
                                                @endforeach

                                            </select>

                                        </div>

                                        <div class="w-6-12">

                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('products and services') }}</label>

                                            <select wire:model="editUsers.products_and_services"
                                                name="products_and_services"
                                                class=" block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona una actividad económica</option>

                                                @foreach ($productsAndServices as $productsAndService)
                                                    <option value="{{ $productsAndService->id }}">
                                                        {{ $productsAndService->ProductandService_description }}
                                                    </option>
                                                @endforeach

                                            </select>

                                        </div>


                                    </div>

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('economic activity') }}</label>

                                            <select wire:model="editUsers.economic_activity" name="economic_activity"
                                                class=" block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona una actividad económica</option>

                                                @foreach ($economicActivitys as $economicActivity)
                                                    <option value="{{ $economicActivity->id }}">
                                                        {{ $economicActivity->EconomicActivity_number }} -
                                                        {{ $economicActivity->description_EconomicActivity }}
                                                    </option>
                                                @endforeach

                                            </select>

                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('supplier description') }}</label>

                                            <textarea
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                name="supplier_description" cols="1" rows="1" placeholder="descripción del proveedor"
                                                wire:model="editUsers.supplier_description">
                                </textarea>
                                        </div>

                                    </div>

                                @endif

                            </div>
                            <!--fin del paso 1 edit-->
                            <br>
                            <!---paso 2 edit-->
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                paso 2
                            </p>
                            <div class="border-ourple-50-s rounded-2xl p-4">
                                <div class="flex space-x-4-N">

                                    @if ($editUsers->usertype == 1 || $editUsers->usertype == 2 || $editUsers->usertype == 4)
                                        <div class="w-6-12 ">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('place expedition identificationcard') }}</label>

                                            <input
                                                class=" block w-98 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="categoría de proveedor" type="text"
                                                name="place_expedition_identificationcard"
                                                wire:model="editUsers.place_expedition_identificationcard" />
                                        </div>
                                    @endif

                                    @if ($editUsers->usertype == 3)
                                        <div class="w-6-12 ">
                                            <label class=" text-gray-700 dark:text-gray-400">Nit</label>

                                            <input
                                                class=" block w-98 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Nit de proveedor" type="text" name="nit"
                                                wire:model="editUsers.nit" />
                                        </div>
                                    @endif

                                    <div class="w-6-12">

                                        <label class="text-gray-700 dark:text-gray-400">Selecciona un
                                            pais</label>

                                        <select wire:model="editUsers.country" name="country"
                                            class="block w-98 ml-1-5 py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="0">Selecciona un pais</option>
                                            <option value="114">CO - Colombia</option>
                                        </select>

                                    </div>


                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">

                                        <label wire:loading.remove wire:target="country"
                                            class="text-gray-700 dark:text-gray-400">{{ __('Department') }}</label><span
                                            wire:loading wire:target="country"
                                            class="text-gray-700 dark:text-gray-400">Cargando
                                            Departamentos...</span>

                                        <select wire:model="editUsers.Department" name="Department"
                                            class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="0">Selecciona una Departamento</option>
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}">
                                                    {{ $province->department_name }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="w-6-12">

                                        <label wire:loading.remove wire:target="Department"
                                            class="text-gray-700 dark:text-gray-400">{{ __('city') }}</label><span
                                            wire:loading wire:target="Department"
                                            class="text-gray-700 dark:text-gray-400">Cargando
                                            Ciudades...</span>

                                        <select wire:model="editUsers.city" name="city"
                                            class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="0">Selecciona una Ciudad</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">
                                                    {{ $city->city_name }}</option>
                                            @endforeach
                                        </select>

                                    </div>


                                </div>

                                <div class="flex space-x-4">

                                    <div class="@if ($editUsers->usertype == 3) w-full @else w-3-4 @endif">
                                        <label class="text-gray-700 dark:text-gray-400">{{ __('address') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Dirección" type="text" name="address"
                                            wire:model="editUsers.address" />
                                    </div>

                                    @if ($editUsers->usertype == 1 || $editUsers->usertype == 2 || $editUsers->usertype == 4)
                                        <div class="w-1-3">

                                            <label class="text-gray-700 dark:text-gray-400">Selecciona el tipo
                                                de Sexo</label>

                                            <div class="form-check check1">
                                                <input class="form-check-input" type="radio" name="type_sex"
                                                    id="sexeditM" value="M" wire:model="editUsers.type_sex">
                                                <label class="text-gray-700 dark:text-gray-400 form-check-label"
                                                    for="sexM">
                                                    Masculino
                                                </label>
                                            </div>
                                            <div class="form-check check2">
                                                <input class="form-check-input" type="radio" name="type_sex"
                                                    id="sexeditF" value="F" wire:model="editUsers.type_sex">
                                                <label class="text-gray-700 dark:text-gray-400 form-check-label"
                                                    for="sexF">
                                                    Femenino
                                                </label>
                                            </div>

                                        </div>
                                    @endif

                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">{{ __('phone') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="phone" type="tel" name="phone"
                                            wire:model="editUsers.phone" />
                                    </div>

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('phone cellular') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="phone_cellular" type="tel" name="phone_cellular"
                                            wire:model="editUsers.phone_cellular" />
                                    </div>

                                </div>
                            </div>
                            <!--fin del paso 2 edit-->

                            <!--paso 3 edit-->
                            @if ($editUsers->usertype == 2)
                                <br>
                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                    paso 3
                                </p>
                                <div class="border-ourple-50-s rounded-2xl p-4">

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('birthdate') }}</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="birthdate" type="text" name="birthdate"
                                                wire:model="editUsers.birthdate" />
                                        </div>

                                        <div class="w-6-12">

                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('city birth') }}</label>

                                            <select wire:model="editUsers.city_birth" name="city_birth"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona una Ciudad</option>

                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">
                                                        {{ $city->city_name }}</option>
                                                @endforeach

                                            </select>

                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-1-2">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('weight') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="peso" type="text" name="weight" step="0.01"
                                                min="0" max="10" maxlength="5"
                                                wire:model="editUsers.weight" />
                                        </div>

                                        <div class="w-1-2">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('pant size') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="talla de pantalón" type="text" name="pant_size"
                                                maxlength="5" wire:model="editUsers.pant_size" />
                                        </div>

                                        <div class="w-1-2">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('shirt size') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Talla de camisa" type="text" name="shirt_size"
                                                maxlength="5" wire:model="editUsers.shirt_size" />
                                        </div>

                                        <div class="w-1-2">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('shoe size') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="calzado del zapato" type="text" name="shoe_size"
                                                maxlength="5" wire:model="editUsers.shoe_size" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">

                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('civil status') }}</label>

                                            <select wire:model="editUsers.civil_status" name="civil_status"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona un estado civil</option>

                                                @foreach ($maritalstatus as $maritalstat)
                                                    <option value="{{ $maritalstat->id }}">
                                                        {{ $maritalstat->description_maritalstatus }}</option>
                                                @endforeach

                                            </select>

                                        </div>

                                        <div class="w-6-12">

                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('work area') }}</label>

                                            <select wire:model="editUsers.work_area" name="work_area"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona el area de trabajo</option>

                                                @foreach ($workAreas as $workArea)
                                                    <option value="{{ $workArea->id }}">
                                                        {{ $workArea->workarea_description }}</option>
                                                @endforeach

                                            </select>

                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-1-3">

                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('binding type') }}</label>

                                            <select wire:model="editUsers.bonding_type" name="binding_type"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona el tipo de contrato</option>

                                                @foreach ($bondingTypes as $bondingType)
                                                    <option value="{{ $bondingType->id }}">
                                                        {{ $bondingType->bonding_type_description }}</option>
                                                @endforeach

                                            </select>
                                        </div>


                                        <div class="w-1-3">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('salary') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="lugar de retorno" type="number" name="salary"
                                                wire:model="editUsers.salary" />
                                        </div>

                                        <div class="w-1-3">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('aid transport') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="lugar de destino" type="number" name="aid_transport"
                                                wire:model="editUsers.aid_transport" />
                                        </div>

                                    </div>
                                </div>
                            @endif
                            <!--fin del paso 3 edit-->

                            <!---paso 4 edit-->
                            @if ($editUsers->usertype == 2)
                                <br>
                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                    paso 4
                                </p>
                                <div class="border-ourple-50-s rounded-2xl p-4">

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('education level') }}</label>

                                            <select wire:model="editUsers.education_level" name="education_level"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona el tipo de contrato</option>

                                                @foreach ($educationLevels as $educationLevel)
                                                    <option value="{{ $educationLevel->id }}">
                                                        {{ $educationLevel->description_levelEducation }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('educational institution') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Institución educativa" type="text"
                                                name="educational_institution"
                                                wire:model="editUsers.educational_institution" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('last year') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="ultimo año cursado" type="text" name="last_year"
                                                maxlength="4" wire:model="editUsers.last_year" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('study end date') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="fecha de finalización" type="text"
                                                name="study_end_date" wire:model="editUsers.study_end_date" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('obtained title') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="titulo obtenido" type="text" name="obtained_title"
                                                wire:model="editUsers.obtained_title" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('last company name') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Ultima empresa donde trabajaste" type="text"
                                                name="last_company_name" wire:model="editUsers.last_company_name" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('charges last company') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="cargo de la ultima empresa" type="text"
                                                name="charges_last_company"
                                                wire:model="editUsers.charges_last_company" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('start date last company') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="fecha de ingreso conrato de la ultima empresa"
                                                type="text" name="start_date_last_company"
                                                wire:model="editUsers.start_date_last_company" />
                                        </div>

                                    </div>
                                </div>
                            @endif
                            <!--fin del paso 4 edit-->

                            <!--paso 5 edit-->
                            @if ($editUsers->usertype == 2)
                                <br>
                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                    paso 5
                                </p>
                                <div class="border-ourple-50-s rounded-2xl p-4">

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('date end last company') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="fecha de finalización contrato de la ultima empresa"
                                                type="text" name="date_end_last_company"
                                                wire:model="editUsers.date_end_last_company" />
                                        </div>

                                        <div class="w-6-12">

                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('functions performed') }}</label>

                                            <textarea
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                name="functions_performed" cols="1" rows="1" placeholder="funciones realizadas"
                                                wire:model="editUsers.functions_performed">
                            </textarea>
                                        </div>

                                    </div>


                                    <div class="flex space-x-4">

                                        <div class="w-1-3">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('family document type') }}</label>
                                            <select wire:model="editUsers.family_document_type"
                                                name="family_document_type"
                                                class=" block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Documento del familiar</option>
                                                @foreach ($identifications as $identification)
                                                    <option value="{{ $identification->id }}">
                                                        {{ $identification->description_identification }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="w-1-3">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">{{ __('identificationcard family') }}</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="documento" type="text"
                                                name="identificationcard_family"
                                                wire:model="editUsers.identificationcard_family" />
                                        </div>

                                        <div class="w-1-3">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('relationship') }}</label>

                                            <select wire:model="editUsers.relationship" name="relationship"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona el tipo de contrato</option>

                                                @foreach ($relationships as $relationship)
                                                    <option value="{{ $relationship->id }}">
                                                        {{ $relationship->description_relationship }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>


                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('family names') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Nombre completo del familiar" type="text"
                                                name="family_names" wire:model="editUsers.family_names" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('family address') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Dirección del familiar" type="text"
                                                name="family_address" wire:model="editUsers.family_address" />
                                        </div>

                                    </div>


                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('family phone') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="telefono del familiar" type="tel"
                                                name="family_phone" wire:model="editUsers.family_phone" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('family phone cellular') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="telefono celular del familiar" type="tel"
                                                name="family_phone_cellular"
                                                wire:model.="editUsers.family_phone_cellular" />
                                        </div>

                                    </div>
                                </div>
                            @endif

                            <!--fin del paso 5 edit-->

                            <!--paso 6 edit-->
                            @if ($editUsers->usertype == 2)
                                <br>
                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                    paso 6
                                </p>
                                <div class="border-ourple-50-s rounded-2xl p-4">

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">EPS</label>

                                            <select wire:model="editUsers.eps" name="eps"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona la eps del usuario</option>

                                                @foreach ($epses as $eps)
                                                    <option value="{{ $eps->id }}">
                                                        {{ $eps->description_eps }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        {{-- 
                                    <div class="w-6-12 ">

                                        <label class="text-gray-700 dark:text-gray-400">Selecciona el
                                            estado de la
                                            eps</label>

                                        <select wire:model="editUsers.eps_status" name="eps_status"
                                            class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="">Selecciona el estado de la eps</option>
                                            <option value="1">ACTIVO</option>
                                            <option value="2">PENDIENTE</option>
                                            <option value="3">INACTIVO</option>
                                        </select>

                                    </div> --}}

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('date eps') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Dirección del familiar" type="date" name="date_eps"
                                                wire:model="editUsers.date_eps" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('blood type') }}</label>

                                            <select wire:model="editUsers.blood_type" name="blood_type"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona el tipo de sangre</option>

                                                @foreach ($bloodTypes as $bloodType)
                                                    <option value="{{ $bloodType->id }}">
                                                        {{ $bloodType->blood_type_description }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">PENSION</label>

                                            <select wire:model="editUsers.pension" name="pension"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona la pension del usuario</option>

                                                @foreach ($pensions as $pension)
                                                    <option value="{{ $pension->id }}">
                                                        {{ $pension->description_pension }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        {{-- <div class="w-6-12 ">

                                        <label class="text-gray-700 dark:text-gray-400">Selecciona
                                            el estado de la
                                            pension</label>

                                        <select wire:model="editUsers.pension_status" name="pension_status"
                                            class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="">Selecciona el estado de la pension</option>
                                            <option value="1">ACTIVO</option>
                                            <option value="2">PENDIENTE</option>
                                            <option value="3">INACTIVO</option>
                                        </select>

                                    </div> --}}

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('date pension') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Dirección del familiar" type="date"
                                                name="date_pension" wire:model="editUsers.date_pension" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('layoffs') }}</label>

                                            <select wire:model="editUsers.layoffs" name="layoffs"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona el tipo de cesantias</option>

                                                @foreach ($layoffes as $layoff)
                                                    <option value="{{ $layoff->id }}">
                                                        {{ $layoff->description_layoffs }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>
                                </div>
                            @endif

                            <!--fin del paso 6 edit-->

                            <!--paso 7 edit-->
                            @if ($editUsers->usertype == 2)
                                <br>
                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                    paso 7
                                </p>
                                <div class="border-ourple-50-s rounded-2xl p-4">

                                    <div class="flex space-x-4">

                                        {{-- <div class="w-6-12 ">

                                        <label class="text-gray-700 dark:text-gray-400">Selecciona
                                            el estado de la
                                            status_layoffs</label>

                                        <select wire:model="editUsers.status_layoffs" name="status_layoffs"
                                            class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="">Selecciona el estado de las cesantias
                                            </option>
                                            <option value="1">ACTIVO</option>
                                            <option value="2">PENDIENTE</option>
                                            <option value="3">INACTIVO</option>
                                        </select>

                                    </div> --}}

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('date layoffs') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del inicio de las cesantias" type="date"
                                                name="date_layoffs" wire:model="editUsers.date_layoffs" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">ARL</label>

                                            <select wire:model="editUsers.arl" name="arl"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona la arl del usuario</option>

                                                @foreach ($arls as $arl)
                                                    <option value="{{ $arl->id }}">
                                                        {{ $arl->description_arl }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        {{-- <div class="w-6-12 ">

                                        <label class="text-gray-700 dark:text-gray-400">Selecciona el
                                            estado de la
                                            arl_status</label>

                                        <select wire:model="editUsers.arl_status" name="arl_status"
                                            class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="">Selecciona el estado de la arl</option>
                                            <option value="1">ACTIVO</option>
                                            <option value="2">PENDIENTE</option>
                                            <option value="3">INACTIVO</option>
                                        </select>

                                    </div> --}}

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('arl date') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del inicio de la arl" type="date"
                                                name="arl_date" wire:model="editUsers.arl_date" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('compensationbox') }}</label>

                                            <select wire:model="editUsers.compensationbox" name="compensationbox"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona el tipo de caja de compensación
                                                </option>

                                                @foreach ($compensationboxes as $compensationbox)
                                                    <option value="{{ $compensationbox->id }}">
                                                        {{ $compensationbox->description_compensationbox }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        {{-- <div class="w-6-12 ">

                                        <label class="text-gray-700 dark:text-gray-400">Selecciona el estado
                                            de la
                                            compensationbox_status</label>

                                        <select wire:model="editUsers.compensationbox_status"
                                            name="compensationbox_status"
                                            class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="">Selecciona el estado de la caja de
                                                compensación
                                            </option>
                                            <option value="1">ACTIVO</option>
                                            <option value="2">PENDIENTE</option>
                                            <option value="3">INACTIVO</option>
                                        </select>

                                    </div> --}}

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('date compensationbox') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="fecha de caja de compensación" type="date"
                                                name="date_compensationbox"
                                                wire:model="editUsers.date_compensationbox" />
                                        </div>

                                    </div>
                                </div>
                            @endif

                            <!--fin del paso 7 edit-->

                            <!--paso 8 edit-->
                            @if ($editUsers->charge == 5)
                                <br>
                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                    paso 8
                                </p>
                                <div class="border-ourple-50-s rounded-2xl p-4">

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('license number') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="numero de licencia conductor" type="number"
                                                name="license_number" wire:model="license_number2" />

                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('license category') }}</label>

                                            <select wire:model="license_category2" name="license_category"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona la categoria de licencia de
                                                    conducción
                                                </option>

                                                @foreach ($licenseCategories as $licenseCategory)
                                                    <option value="{{ $licenseCategory->id }}">
                                                        {{ $licenseCategory->code_licenseCategory }} -
                                                        {{ $licenseCategory->description_licenseCategory }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('license expiration') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de espiracion_licencia"
                                                type="date" name="license_expiration"
                                                wire:model="license_expiration2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($doclicense != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="Doclicense2">
                                                <input wire:model="Doclicense" id="InputDoclicense2"
                                                    onchange="updateDocument('0','Licencia')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('certificate drugs alchoolemia') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de drogas_alchoolemia"
                                                type="date" name="certificate_drugs_alchoolemia"
                                                wire:model="certificate_drugs_alchoolemia2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docAlchoolemia != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocAlchoolemia2">
                                                <input wire:model="DocAlchoolemia"
                                                    onchange="updateDocument('1','alchoolemia')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('SIMIT queries') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de Consultas_SIMIT" type="date"
                                                name="SIMIT_queries" wire:model="SIMIT_queries2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docSimitQueries != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocSimitQueries2">
                                                <input wire:model="DocSimitQueries"
                                                    onchange="updateDocument('2','SIMIT')" class="edit-upload-input"
                                                    type="file">
                                            </span>
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('driving exam') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado del Examen_Conduccion"
                                                type="date" name="driving_exam" wire:model="driving_exam2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docdrivingExam != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocdrivingExam2">
                                                <input wire:model="DocdrivingExam"
                                                    onchange="updateDocument('3','Examen')" class="edit-upload-input"
                                                    type="file">
                                            </span>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        {{-- <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('Norm Overland Transportation Automotive') }}</label>

                                        <input
                                            class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Fecha del certificado de las Norma_Transporte_terrestre_automotor"
                                            type="date" name="Norm_Overland_Transportation_Automotive"
                                            wire:model="Norm_Overland_Transportation_Automotive2" />

                                        <span class=" edit-upload-ico fas fa-file-upload"
                                             aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                                            id="DocNormOverlandTransportationAutomotive2">
                                            <input wire:model="DocNormOverlandTransportationAutomotive"
                                                onchange="updateDocument('4','Norma_Transporte')"
                                                class="edit-upload-input" type="file">
                                        </span>
                                    </div> --}}

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('Rules Transit') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de Normas_Transito" type="date"
                                                name="Rules_Transit" wire:model="Rules_Transit2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docRulesTransit != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocRulesTransit2">
                                                <input wire:model="DocRulesTransit"
                                                    onchange="updateDocument('5','Normas_Transito')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            @endif

                            <!--fin del paso 8 edit-->

                            <!--paso 9 edit-->
                            @if ($editUsers->charge == 5)
                                <br>
                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                    paso 9
                                </p>
                                <div class="border-ourple-50-s rounded-2xl p-4">

                                    <div class="flex space-x-4">

                                        {{-- <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('Normative Tips') }}</label>

                                        <input
                                            class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Fecha del certificado de Tips_normativos"
                                            type="date" name="Normative_Tips"
                                            wire:model="Normative_Tips2" />

                                        <span class=" edit-upload-ico fas fa-file-upload"
                                            aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                                            id="DocNormativeTips2">
                                            <input wire:model="DocNormativeTips"
                                                onchange="updateDocument('6','Tips_normativos')"
                                                class="edit-upload-input" type="file">
                                        </span>
                                    </div> --}}

                                        {{-- <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('Driving Methods') }}</label>

                                        <input
                                            class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Fecha del certificado de Metodos_Conduccion"
                                            type="date" name="Driving_Methods"
                                            wire:model="Driving_Methods2" />

                                        <span class=" edit-upload-ico fas fa-file-upload"
                                            aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                                            id="DocDrivingMethods2">
                                            <input wire:model="DocDrivingMethods"
                                                onchange="updateDocument('7','Metodos_Conduccion')"
                                                class="edit-upload-input" type="file">
                                        </span>
                                    </div> --}}

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('Defensive driving') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de Manejo_Defensivo" type="date"
                                                name="Defensive_driving" wire:model="Defensive_driving2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docDefensiveDriving != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocDefensiveDriving2">
                                                <input wire:model="DocDefensiveDriving"
                                                    onchange="updateDocument('8','Defensivo')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                        {{-- <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('distractions') }}</label>

                                        <input
                                            class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Fecha del certificado de Distracciones"
                                            type="date" name="distractions"
                                            wire:model="distractions2" />

                                        <span class=" edit-upload-ico fas fa-file-upload"
                                             aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                                            id="Docdistractions2">
                                            <input wire:model="Docdistractions"
                                                onchange="updateDocument('9','Distracciones')"
                                                class="edit-upload-input" type="file">
                                        </span>
                                    </div> --}}

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('First aid') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de Primeros_Auxilios"
                                                type="date" name="First_aid" wire:model="First_aid2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docFirstAid != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocFirstAid2">
                                                <input wire:model="DocFirstAid"
                                                    onchange="updateDocument('10','Primeros_Auxilios')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                        {{-- <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('First Responder') }}</label>

                                        <input
                                            class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Fecha del certificado de Primero_Respondiente"
                                            type="date" name="First_Responder"
                                            wire:model="First_Responder2" />

                                        <span class=" edit-upload-ico fas fa-file-upload"
                                             aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                                            id="DocFirstResponder2">
                                            <input wire:model="DocFirstResponder"
                                                onchange="updateDocument('11','Primero_Respondiente')"
                                                class="edit-upload-input" type="file">
                                        </span>
                                    </div> --}}

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('five senses driving') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de los cinco_sentidos_conduccion"
                                                type="date" name="psicosensometrico"
                                                wire:model="psicosensometrico2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docfiveSensesDriving != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocfiveSensesDriving2">
                                                <input wire:model="DocfiveSensesDriving"
                                                    onchange="updateDocument('12','Cinco_Sentidos')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                        {{-- <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('Active Passive Security vehicle') }}</label>

                                        <input
                                            class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Fecha del certificado de la Seguridad_activa_pasiva_vehiculo"
                                            type="date" name="Active_Passive_Security_vehicle"
                                            wire:model="Active_Passive_Security_vehicle2" />

                                        <span class=" edit-upload-ico fas fa-file-upload"
                                            aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                                            id="DocActivePassiveSecurityVehicle2">
                                            <input wire:model="DocActivePassiveSecurityVehicle"
                                                id="InputDocActivePassiveSecurityVehicle2"
                                                onchange="updateDocument('13','Seguridad_activa_pasiva')"
                                                class="edit-upload-input" type="file">
                                        </span>
                                    </div> --}}

                                    </div>
                                </div>
                            @endif
                            <!--fin del paso 9 edit-->
                            <br>
                            <!--paso fin edit-->
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                paso fin
                            </p>
                            <div class="border-ourple-50-s rounded-2xl p-4">

                                @if ($editUsers->charge == 5)
                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('Road safety') }}</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de la Seguridad_Vial"
                                                type="date" name="Road_safety" wire:model="Road_safety2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docRoadSafety != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocRoadSafety2">
                                                <input wire:model="DocRoadSafety" id="InputDocRoadSafety2"
                                                    onchange="updateDocument('14','Seguridad_Vial')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">{{ __('Linked') }}</label>

                                            <select wire:model="Linked2" name="Linked"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona el vinculado asociado a este
                                                    conductor
                                                </option>

                                                @foreach ($linkers as $linker)
                                                    <option value="{{ $linker->id }}">
                                                        {{ $linker->owner }} </option>
                                                @endforeach

                                            </select>

                                        </div>

                                    </div>
                                @endif

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('user entry date') }}</label>

                                        <div class="border-ourple-50-s rounded-2xl p-4">
                                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                                {{ $editUsers->user_entry_date }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('date withdrawal user') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Fecha fin de contrato con STEP" type="text"
                                            name="date_withdrawal_user" wire:model="editUsers.date_withdrawal_user" />
                                    </div>


                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">{{ __('profile photo path') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Selecciona una foto de perfil para este usuario"
                                            type="file" name="profile_photo_path"
                                            wire:model="editUsers.profile_photo_path" />
                                    </div>

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">{{ __('email') }}</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Escribe un correo electronico" type="email" name="email"
                                            wire:model="editUsers.email" />
                                    </div>

                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">{{ __('username') }}</label>

                                        <div class="border-ourple-50-s rounded-2xl p-4">
                                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                                {{ $editUsers->username }}
                                            </p>
                                        </div>
                                    </div>

                                    {{-- <div class="w-6-12">
                                <label class="text-gray-700 dark:text-gray-400">password</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Escribe la contraseña del usuario para el sistema"
                                    type="password" name="password" wire:model="editUsers.password" />
                                </div> --}}

                                </div>

                            </div>
                            <!--fin edit-->

                        </div>

                    </form>
                @endif


            </div>
            <div
                class="flex flex-col items-center justify-end px-6 py-3-1 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button id="btnUpdate"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    wire:click="update" onclick="closeModalEdit()">
                    {{ __('Update User') }}
                </button>
                <button wire:click="clear"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                    onclick="closeModalEdit()">
                    {{ __('Cancel') }}
                </button>
            </div>
        </div>

    </div>
</div>
