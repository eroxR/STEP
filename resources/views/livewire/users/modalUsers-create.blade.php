<div x-cloak x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center" wire:ignore.self>
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
            <h1 class="text-black dark:text-white text-4xl1">{{ __('Creating new user') }}
                <span id="typ0" class="Inactive">Cliente</span>
                <span id="typ1" class="Inactive">Proveedor</span>
                <span id="typ2" class="Inactive">Vinculado</span>
                <span id="typ3" class="Inactive">Monitor(a)</span>
                <span id="typ4" class="Inactive">Coodinador(a) Operativo</span>
                <span id="typ5" class="Inactive">Coordinador(a) de Recursos</span>
                <span id="typ6" class="Inactive">Coordinador(a) Compras y Suministros</span>
                <span id="typ7" class="Inactive">Conductor(a)</span>
                <span id="typ8" class="Inactive">Coordinador(a) Sistemas de Gestión</span>
                <span id="typ9" class="Inactive">Gerente General</span>
                <span id="typ10" class="Inactive">Auditor(a) Interno</span>
                <span id="typed2" class="typed2">.</span>
                <span id="typed3" class="typed3">.</span>
                <span id="typed4" class="typed4">.</span>
                <span id="typed5" class="typed5">.</span>
            </h1>
            </p>
            <button
                class="ml-auto px-5-1 py-3-1 text-sm  rounded-lg  bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                aria-label="close" onclick="restart()" x-on:click="closeModal" wire:click="clear">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                    <path
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </button>
        </header>
        <!-- Modal body -->
        <div class="mt-4 mb-4">

            <!-- Modal description -->

            <form role="form" action="" method="post" id="frmUser"
                class="f1 px-4 my-32 max-w-3xl mx-auto space-y-6">

                <div class="f1-steps" wire:ignore>
                    <div class="f1-progress">
                        <div class="f1-progress-line" data-now-value="10.66" data-number-of-steps="10"
                            style="width: 9.66%;"></div>
                    </div>
                    <div id="f1-step-user1" class="f1-step-user active">
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
                        <p id="pass1">Paso 1</p>
                    </div>
                    <div id="f1-step-user2" class="f1-step-user ">
                        <div class="f1-step-icon">

                            <!-- Crea un icono envuelto por la clase fa-stack -->
                            <span class="fa-stack  ">
                                <!-- El icono que envolverá el número -->
                                <span class="fa fa-circle-o fa-stack-2x"></span>
                                <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                <strong class="fa-stack-2x -ml-1 numcolor" id="step2">
                                    2
                                </strong>
                                <strong class="Inactive fa-stack-1x -ml-1 numcolor" id="finalUser3">
                                    FIN
                                </strong>
                            </span>
                        </div>
                        <p id="pass2">Paso 2</p>
                        <p class="Inactive" id="passfinalUser3">fin</p>
                    </div>
                    <div id="f1-step-user3" class="f1-step-user ">
                        <div class="f1-step-icon">

                            <!-- Crea un icono envuelto por la clase fa-stack -->
                            <span class="fa-stack  ">
                                <!-- El icono que envolverá el número -->
                                <span class="fa fa-circle-o fa-stack-2x"></span>
                                <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                <strong class="fa-stack-2x -ml-1 numcolor" id="step3">
                                    3
                                </strong>
                                <strong class="Inactive fa-stack-1x -ml-1 numcolor" id="finalUser1">
                                    FIN
                                </strong>
                            </span>
                        </div>
                        <p id="pass3">Paso 3</p>
                        <p class="Inactive" id="passfinalUser1">fin</p>
                    </div>
                    <div id="f1-step-user4" class="f1-step-user ">
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
                        <p id="pass4">Paso 4</p>
                    </div>
                    <div id="f1-step-user5" class="f1-step-user">
                        <div class="f1-step-icon">

                            <!-- Crea un icono envuelto por la clase fa-stack -->
                            <span class="fa-stack  ">
                                <!-- El icono que envolverá el número -->
                                <span class="fa fa-circle-o fa-stack-2x"></span>
                                <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                <strong class="fa-stack-2x -ml-1 numcolor" id="step5">
                                    5
                                </strong>
                            </span>
                        </div>
                        <p id="pass5">Paso 5</p>
                    </div>
                    <div id="f1-step-user6" class="f1-step-user ">
                        <div class="f1-step-icon">

                            <!-- Crea un icono envuelto por la clase fa-stack -->
                            <span class="fa-stack  ">
                                <!-- El icono que envolverá el número -->
                                <span class="fa fa-circle-o fa-stack-2x"></span>
                                <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                <strong class="fa-stack-2x -ml-1 numcolor" id="step6">
                                    6
                                </strong>
                                <strong class="Inactive fa-stack-1x -ml-1 numcolor" id="finalUser2">
                                    FIN
                                </strong>
                            </span>
                        </div>
                        <p id="pass6">Paso 6</p>
                    </div>
                    <div id="f1-step-user7" class="f1-step-user ">
                        <div class="f1-step-icon">

                            <!-- Crea un icono envuelto por la clase fa-stack -->
                            <span class="fa-stack">
                                <!-- El icono que envolverá el número -->
                                <span class="fa fa-circle-o fa-stack-2x"></span>
                                <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                <strong class="fa-stack-2x -ml-1 numcolor" id="step7">
                                    7
                                </strong>
                            </span>
                        </div>
                        <p id="pass7">Paso 7</p>
                        <p class="Inactive" id="passfinalUser2">fin</p>
                    </div>
                    {{-- <div id="f1-step-user8" class="f1-step-user "> --}}
                    {{-- <div class="f1-step-icon"> --}}

                    <!-- Crea un icono envuelto por la clase fa-stack -->
                    {{-- <span class="fa-stack  "> --}}
                    <!-- El icono que envolverá el número -->
                    {{-- <span class="fa fa-circle-o fa-stack-2x"></span> --}}
                    <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                    {{-- <strong class="fa-stack-2x -ml-1 numcolor" id="step8"> --}}
                    {{-- 8 --}}
                    {{-- </strong> --}}
                    {{-- </span> --}}
                    {{-- </div> --}}
                    {{-- <p id="pass8">Paso 8</p> --}}
                    {{-- </div> --}}
                    {{-- <div id="f1-step-user9" class="f1-step-user ">
                    <div class="f1-step-icon">

                        <!-- Crea un icono envuelto por la clase fa-stack -->
                        <span class="fa-stack  ">
                            <!-- El icono que envolverá el número -->
                            <span class="fa fa-circle-o fa-stack-2x"></span>
                            <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                            <strong class="fa-stack-2x -ml-1 numcolor" id="step9">
                                9
                            </strong>
                        </span>
                    </div>
                    <p id="pass9">Paso 9</p>
                </div> --}}
                    <div id="f1-step-user8" class="f1-step-user ">
                        <div class="f1-step-icon">

                            <!-- Crea un icono envuelto por la clase fa-stack -->
                            <span class="fa-stack  ">
                                <!-- El icono que envolverá el número -->
                                <span class="fa fa-circle-o fa-stack-2x"></span>
                                <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                <strong class="fa-stack-1x -ml-1 numcolor" id="step8">
                                    FIN
                                </strong>
                            </span>
                        </div>
                        <p id="pass8">Fin</p>
                    </div>
                </div>

                <!-- Modal description -->
                <div
                    class="mt-11 border-gray-50-s container px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9 ">

                    <!--paso 1 -->
                    <fieldset wire:ignore>
                        {{-- <br> --}}
                        <div class="flex space-x-4 ">

                            <div class="w-6-12 ">

                                <label id="labelUsertype" class="text-gray-700 dark:text-gray-400">tipo de
                                    usuario</label>

                                <select wire:model="usertype" onchange="typeUser()" id="usertype"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona el tipo de usuario</option>
                                    {{-- <option value="1">Aspirante</option> --}}
                                    <option value="1">Cliente</option>
                                    <option value="2">Empleado</option>
                                    <option value="3">Proveedor</option>
                                    <option value="4">Vinculado</option>
                                </select>

                            </div>

                            <div class="w-6-12 Inactive" id="divCharge">

                                <label id="labelCharge" class="Inactive text-gray-700 dark:text-gray-400">Selecciona
                                    un Cargo</label>

                                <select wire:model="charge" onchange="typeCharge()" id="charge"
                                    class="Inactive block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona un Cargo</option>

                                    @foreach ($charges as $charge)
                                        <option value="{{ $charge->id }}">{{ $charge->code_charge }} -
                                            {{ $charge->description_charge }}</option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="w-6-12 Inactive" id="divSupplierName">
                                <label id="labelSupplierName"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('supplier name') }}
                                    <input
                                        class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Nombre del proveedor" type="text" id="supplier_name"
                                        name="supplier_name" wire:model.defer="supplier_name" />
                            </div>

                        </div>

                        <div class="flex space-x-4 ">

                            <div class="w-6-12" id="divIdentification">
                                <label id="labelIdentification"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('identification') }}</label>
                                <select wire:model.defer="identification" id="identification" name="identification"
                                    class="Inactive block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Tipo de Identificación</option>
                                    @foreach ($identifications as $identification)
                                        <option value="{{ $identification->id }}">
                                            {{ $identification->description_identification }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-6-12" id="divContractDocument">
                                <label id="labeIdentificationcard"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('identificationcard') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="documento" type="text" id="identificationcard" maxlength="12"
                                    name="identificationcard" wire:model.defer="identificationcard"
                                    onchange="documentOn('identificationcard','docu')" />

                                <span id="docu" class="Inactive upload-ico fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocu" wire:model.defer="Docu"
                                        onchange="documentAbove('InputDocu','docu')" class="upload-input"
                                        type="file">
                                </span>

                            </div>

                        </div>

                        <div class="flex space-x-4 ">

                            <div class="w-6-12">
                                <label id="labelFirstname"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('firstname') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Primer nombre" type="text" id="firstname" name="firstname"
                                    wire:model.defer="firstname" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelSecondname"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('secondname') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Segundo nombre" type="text" id="secondname" name="secondname"
                                    wire:model.defer="secondname" />
                            </div>

                        </div>

                        <div class="flex space-x-4 ">

                            <div class="w-6-12">
                                <label id="labelLastname"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('lastname') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Apellido paterno" type="text" id="lastname" name="lastname"
                                    wire:model.defer="lastname" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelMotherslastname"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('motherslastname') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Apellido materno" type="text" id="motherslastname"
                                    name="motherslastname" wire:model.defer="motherslastname" />
                            </div>

                        </div>

                        <div class="flex space-x-4 ">

                            <div class="w-6-12">
                                <label id="labelCompanyNameProvider"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('company name provider') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="nombre de la empresa proveedor" type="text"
                                    id="company_name_provider" name="company_name_provider"
                                    wire:model.defer="company_name_provider" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelCommercialReasonSupplier"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('commercial reason supplier') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="proveedor de razón comercial" type="text"
                                    id="commercial_reason_supplier" name="commercial_reason_supplier"
                                    wire:model.defer="commercial_reason_supplier" />
                            </div>

                        </div>

                        <div class="flex space-x-4 ">


                            <div class="w-6-12">

                                <label id="labelSupplierCategory"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('supplier category') }}</label>

                                <select wire:model.defer="supplier_category" id="supplier_category"
                                    name="supplier_category"
                                    class="Inactive block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona la descripción de la categoria</option>

                                    @foreach ($supplierCategories as $id => $supplierCategory)
                                        <option value="{{ $id }}">
                                            {{ $supplierCategory }}
                                        </option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="w-6-12">

                                <label id="labelProductsAndServices"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('products and services') }}</label>

                                <select wire:model.defer="products_and_services" id="products_and_services"
                                    name="products_and_services"
                                    class="Inactive block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona una actividad económica</option>

                                    @foreach ($productsAndServices as $productsAndService)
                                        <option value="{{ $productsAndService->id }}">
                                            {{ $productsAndService->ProductandService_description }}</option>
                                    @endforeach

                                </select>

                            </div>


                        </div>

                        <div class="flex space-x-4 ">

                            <div class="w-6-12">
                                <label id="labelEconomicActivity"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('economic activity') }}</label>

                                <select wire:model.defer="economic_activity" id="economic_activity"
                                    name="economic_activity"
                                    class="Inactive block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona una actividad económica</option>

                                    @foreach ($economicActivitys as $economicActivity)
                                        <option value="{{ $economicActivity->id }}">
                                            {{ $economicActivity->EconomicActivity_number }} -
                                            {{ $economicActivity->description_EconomicActivity }}</option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="w-6-12">
                                <label id="labelSupplierDescription"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('supplier description') }}</label>

                                <textarea
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    name="supplier_description" id="supplier_description" cols="1" rows="1"
                                    placeholder="descripción del proveedor" wire:model.defer="supplier_description">
                                    </textarea>
                            </div>

                        </div>

                        <br>
                        <div class="f1-buttons ">
                            <button type="button" id="fieldset1Buttons"
                                class="Inactive btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                        </div>

                    </fieldset>
                    <!--fin del paso 1 -->

                    <!---paso 2 -->
                    <fieldset wire:ignore.self>

                        <div class="flex space-x-4-N">

                            <div wire:ignore class="w-6-12 Inactive" id="divPlaceExpeditionIdentificationcard">
                                <label id="labelPlaceExpeditionIdentificationcard"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('place expedition identificationcard') }}</label>

                                <input
                                    class="Inactive block w-98 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="categoría de proveedor" type="text"
                                    id="place_expedition_identificationcard"
                                    name="place_expedition_identificationcard"
                                    wire:model.defer="place_expedition_identificationcard" />
                            </div>

                            <div wire:ignore class="w-6-12 Inactive" id="divNit">
                                <label id="labelNit" class="Inactive text-gray-700 dark:text-gray-400">Nit</label>

                                <input
                                    class="Inactive w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Nit de proveedor" type="text" id="nit" name="nit"
                                    wire:model.defer="nit" onchange="documentOn('nit','DocNit')" />

                                <span id="DocNit" class="Inactive upload-ico fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocNit" wire:model.defer="DocNit"
                                        onchange="documentAbove('InputDocNit','DocNit')" class="upload-input"
                                        type="file">
                                </span>
                            </div>

                            {{-- <div class="w-6-12">

                            <label id="label" class="text-gray-700 dark:text-gray-400">Selecciona un pais</label>

                            <select wire:model.defer="country" id="country" name="country"
                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                <option value="0">Selecciona un pais</option>

                                @foreach ($countries as $country)
                                    <option @if value="{{ $country->id }}">
                                        {{ $country->code_country }} - {{ $country->country_name }}
                                    </option>
                                @endforeach

                            </select>

                        </div> --}}

                            <div class="w-6-12">

                                <label id="labelCountry" class="text-gray-700 dark:text-gray-400">Selecciona pais de
                                    residencia</label>

                                <select wire:model="country" id="country" name="country"
                                    class="block w-98 ml-1-5 py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona un pais</option>
                                    <option value="114">CO - Colombia</option>
                                </select>

                            </div>


                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12">

                                <label id="labelDepartment" wire:loading.remove wire:target="country"
                                    class="text-gray-700 dark:text-gray-400">{{ __('Residence Department') }}</label><span
                                    wire:loading wire:target="country"
                                    class="text-gray-700 dark:text-gray-400">Cargando
                                    Departamentos...</span>

                                <select wire:model="Department" id="Department" name="Department"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona una Departamento</option>
                                    @if (!is_null($Departments))
                                        @foreach ($Departments as $Department)
                                            <option value="{{ $Department->id }}">
                                                {{ $Department->department_name }}</option>
                                        @endforeach
                                    @endif
                                </select>

                            </div>

                            <div class="w-6-12">

                                <label id="labelCity" wire:loading.remove wire:target="Department"
                                    class="text-gray-700 dark:text-gray-400">{{ __('city of residence') }}</label><span
                                    wire:loading wire:target="Department"
                                    class="text-gray-700 dark:text-gray-400">Cargando
                                    Ciudades...</span>

                                <select wire:model="city" id="city" name="city"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona una Ciudad</option>
                                    @if (!is_null($citiesSelects))
                                        @foreach ($citiesSelects as $citiesSelect)
                                            <option value="{{ $citiesSelect->id }}">
                                                {{ $citiesSelect->city_name }}</option>
                                        @endforeach
                                    @endif
                                </select>

                            </div>


                        </div>

                        <div class="flex space-x-4" wire:ignore>

                            <div class="w-3-4" id="divAddress">
                                <label id="labelAddress"
                                    class="text-gray-700 dark:text-gray-400">{{ __('address') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Dirección" type="text" id="address" name="address"
                                    wire:model.defer="address" />
                            </div>

                            <div class="w-1-3" id="divCheck">

                                <label id="labelCheck" class="text-gray-700 dark:text-gray-400">Selecciona el tipo
                                    de Sexo</label>

                                <div class="form-check check1">
                                    <input class="form-check-input" type="radio" name="type_sex" id="sexM"
                                        value="M" wire:model.defer="type_sex">
                                    <label id="labelSexM" class="text-gray-700 dark:text-gray-400 form-check-label"
                                        for="sexM">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check check2">
                                    <input class="form-check-input" type="radio" name="type_sex" id="sexF"
                                        value="F" wire:model.defer="type_sex">
                                    <label id="labelSexF" class="text-gray-700 dark:text-gray-400 form-check-label"
                                        for="sexF">
                                        Femenino
                                    </label>
                                </div>

                            </div>


                        </div>

                        <div class="flex space-x-4" wire:ignore>

                            <div class="w-6-12">
                                <label id="labelPhone"
                                    class="text-gray-700 dark:text-gray-400">{{ __('phone') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="phone" type="tel" id="phone" name="phone"
                                    wire:model.defer="phone" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelPhoneCellular"
                                    class="text-gray-700 dark:text-gray-400">{{ __('phone cellular') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="phone_cellular" type="tel" id="phone_cellular"
                                    name="phone_cellular" wire:model.defer="phone_cellular" />
                            </div>

                        </div>

                        <br>
                        <div class="f1-buttons" wire:ignore>
                            {{-- <button type="button" onclick="restart()"
                            class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">restart</button> --}}
                            <button type="button"
                                class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                            <button type="button"
                                class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                        </div>
                    </fieldset>
                    <!--fin del paso 2 -->

                    <!--paso 3 -->
                    <fieldset wire:ignore>

                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelBirthdate"
                                    class="text-gray-700 dark:text-gray-400">{{ __('birthdate') }}</label>

                                <input readonly
                                    class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="birthdate" type="text" id="birthdate" name="birthdate"
                                    wire:model.defer="birthdate" onchange="fechasSet('birthdate')" />
                            </div>

                            <div class="w-6-12">

                                <label id="labelCityBirth"
                                    class="text-gray-700 dark:text-gray-400">{{ __('city birth') }}</label>

                                <select wire:model.defer="city_birth" id="city_birth" name="city_birth"
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
                                <label id="labelWeight"
                                    class="text-gray-700 dark:text-gray-400">{{ __('weight') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="peso" type="text" id="weight" name="weight" step="0.01"
                                    min="0" max="10" maxlength="5" wire:model.defer="weight" />
                            </div>

                            <div class="w-1-2">
                                <label id="labelPantSize"
                                    class="text-gray-700 dark:text-gray-400">{{ __('pant size') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="talla de pantalón" type="text" id="pant_size" name="pant_size"
                                    maxlength="5" wire:model.defer="pant_size" />
                            </div>

                            <div class="w-1-2">
                                <label id="labelShirtSize"
                                    class="text-gray-700 dark:text-gray-400">{{ __('shirt size') }}</label>

                                {{-- <input
                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Talla de camisa" type="text" id="shirt_size"
                                name="shirt_size" maxlength="3" wire:model.defer="shirt_size" /> --}}

                                <select wire:model="shirt_size" id="shirt_size" name="shirt_size"
                                    wire:model.defer="shirt_size"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona la Talla de Camisa</option>
                                    <option value="1">Talla XS</option>
                                    <option value="2">Talla S</option>
                                    <option value="3">Talla M</option>
                                    <option value="4">Talla L</option>
                                    <option value="5">Talla XL</option>
                                    <option value="6">Talla XXL</option>
                                </select>


                            </div>

                            <div class="w-1-2">
                                <label id="labelShoeSize"
                                    class="text-gray-700 dark:text-gray-400">{{ __('shoe size') }}</label>

                                {{-- <input
                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="calzado del zapato" type="text" id="shoe_size"
                                name="shoe_size" maxlength="5" wire:model.defer="shoe_size" /> --}}

                                <select wire:model="shoe_size" id="shoe_size" name="shoe_size"
                                    wire:model.defer="shoe_size"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona la Talla de Zapato</option>
                                    <option value="1">Talla 21 - 22</option>
                                    <option value="2">Talla 23 - 24</option>
                                    <option value="3">Talla 25 - 26</option>
                                    <option value="4">Talla 27 - 28</option>
                                    <option value="5">Talla 29 - 30</option>
                                    <option value="6">Talla 31 - 32</option>
                                    <option value="7">Talla 33 - 34</option>
                                    <option value="8">Talla 35 - 36</option>
                                    <option value="9">Talla 37 - 38</option>
                                    <option value="10">Talla 39 - 40</option>
                                    <option value="11">Talla 41 - 42</option>
                                    <option value="12">Talla 43 - 44</option>
                                    <option value="13">Talla 45 - 46</option>
                                    <option value="14">Talla 47 - 48</option>
                                    <option value="15">Talla 49 - 50</option>
                                </select>
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12">

                                <label id="labelCivilStatus"
                                    class="text-gray-700 dark:text-gray-400">{{ __('civil status') }}</label>

                                <select wire:model.defer="civil_status" id="civil_status" name="civil_status"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona un estado civil</option>

                                    @foreach ($maritalstatus as $maritalstat)
                                        <option value="{{ $maritalstat->id }}">
                                            {{ $maritalstat->description_maritalstatus }}</option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="w-6-12">

                                <label id="labelWorkArea"
                                    class="text-gray-700 dark:text-gray-400">{{ __('work area') }}</label>

                                <select wire:model.defer="work_area" id="work_area" name="work_area"
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

                                <label id="labelBindingType"
                                    class="text-gray-700 dark:text-gray-400">{{ __('binding type') }}</label>

                                <select wire:model.defer="bonding_type" id="binding_type" name="binding_type"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona el tipo de contrato</option>

                                    @foreach ($bondingTypes as $bondingType)
                                        <option value="{{ $bondingType->id }}">
                                            {{ $bondingType->bonding_type_description }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="w-1-3">
                                <label id="labelSalary"
                                    class="text-gray-700 dark:text-gray-400">{{ __('salary') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="lugar de retorno" type="number" id="salary" name="salary"
                                    wire:model.defer="salary" />
                            </div>

                            <div class="w-1-3">
                                <label id="labelAidTransport"
                                    class="text-gray-700 dark:text-gray-400">{{ __('aid transport') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="lugar de destino" type="number" id="aid_transport"
                                    name="aid_transport" wire:model.defer="aid_transport" />
                            </div>

                        </div>

                        <br>
                        <div class="f1-buttons">
                            <button type="button"
                                class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                            <button type="button"
                                class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                        </div>
                    </fieldset>
                    <!--fin del paso 3 -->

                    <!---paso 4 -->
                    <fieldset wire:ignore>

                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelEducationLevel"
                                    class="text-gray-700 dark:text-gray-400">{{ __('education level') }}</label>

                                <select wire:model.defer="education_level" id="education_level"
                                    name="education_level"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona el Nivel educativo</option>

                                    @foreach ($educationLevels as $educationLevel)
                                        <option value="{{ $educationLevel->id }}">
                                            {{ $educationLevel->description_levelEducation }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="w-6-12">
                                <label id="labelEducationalInstitution"
                                    class="text-gray-700 dark:text-gray-400">{{ __('educational institution') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Institución educativa" type="text" id="educational_institution"
                                    name="educational_institution" wire:model.defer="educational_institution" />
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelLastYear"
                                    class="text-gray-700 dark:text-gray-400">{{ __('last year study') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="ultimo año cursado" type="text" id="last_year" name="last_year"
                                    maxlength="4" wire:model.defer="last_year" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelStudyEndDate"
                                    class="text-gray-700 dark:text-gray-400">{{ __('study end date') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="fecha de finalización" type="text" id="study_end_date"
                                    name="study_end_date" wire:model.defer="study_end_date"
                                    onchange="fechasSet('study_end_date')" />
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelObtainedTitle"
                                    class="text-gray-700 dark:text-gray-400">{{ __('obtained title') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="titulo obtenido" type="text" id="obtained_title"
                                    name="obtained_title" wire:model.defer="obtained_title"
                                    onchange="documentOn('obtained_title','docObtainedTitle')" />

                                <span id="docObtainedTitle" class="Inactive upload-ico fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocObtainedTitle" wire:model.defer="DocObtainedTitle"
                                        onchange="documentAbove('InputDocObtainedTitle','docObtainedTitle')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                            <div class="w-6-12">
                                <label id="labelLastCompanyName"
                                    class="text-gray-700 dark:text-gray-400">{{ __('last company name') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Ultima empresa donde trabajaste" type="text"
                                    id="last_company_name" name="last_company_name"
                                    wire:model.defer="last_company_name"
                                    onchange="documentOn('last_company_name','docLastCompanyName')" />

                                <span id="docLastCompanyName"
                                    class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocLastCompanyName" wire:model.defer="DocLastCompanyName"
                                        onchange="documentAbove('InputDocLastCompanyName','docLastCompanyName')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelChargesLastCompany"
                                    class="text-gray-700 dark:text-gray-400">{{ __('charges last company') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="cargo de la ultima empresa" type="text" id="charges_last_company"
                                    name="charges_last_company" wire:model.defer="charges_last_company" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelStartDateLastCompany"
                                    class="text-gray-700 dark:text-gray-400">{{ __('start date last company') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="fecha de ingreso contrato de la ultima empresa" type="text"
                                    id="start_date_last_company" name="start_date_last_company"
                                    wire:model.defer="start_date_last_company"
                                    onchange="fechasSet('start_date_last_company')" />
                            </div>

                        </div>

                        <br>
                        <div class="f1-buttons">
                            <button type="button"
                                class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                            <button type="button"
                                class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                        </div>

                    </fieldset>
                    <!--fin del paso 4 -->

                    <!--paso 5 -->
                    <fieldset wire:ignore>

                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelDateEndLastCompany"
                                    class="text-gray-700 dark:text-gray-400">{{ __('date end last company') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="fecha de finalización contrato de la ultima empresa" type="text"
                                    id="date_end_last_company" name="date_end_last_company"
                                    wire:model.defer="date_end_last_company"
                                    onchange="fechasSet('date_end_last_company')" />
                            </div>

                            <div class="w-6-12">

                                <label id="labelFunctionsPerformed"
                                    class="text-gray-700 dark:text-gray-400">{{ __('functions performed') }}</label>

                                <textarea
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    name="functions_performed" id="functions_performed" cols="1" rows="1"
                                    placeholder="funciones realizadas" wire:model.defer="functions_performed">
                            </textarea>
                            </div>

                        </div>


                        <div class="flex space-x-4">

                            <div class="w-1-3">
                                <label id="labelFamilyDocumentType"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('family document type') }}</label>
                                <select wire:model.defer="family_document_type" id="family_document_type"
                                    name="family_document_type"
                                    class="Inactive block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Documento del familiar</option>
                                    @foreach ($identifications as $identification)
                                        <option value="{{ $identification->id }}">
                                            {{ $identification->description_identification }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="w-1-3" id="divContractDocument">
                                <label id="labeIdentificationcardFamily"
                                    class="Inactive text-gray-700 dark:text-gray-400">{{ __('identificationcard family') }}</label>

                                <input
                                    class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="documento" type="text" id="identificationcard_family"
                                    name="identificationcard_family" wire:model.defer="identificationcard_family" />
                            </div>

                            <div class="w-1-3">
                                <label id="labelRelationship"
                                    class="text-gray-700 dark:text-gray-400">{{ __('relationship') }}</label>

                                <select wire:model.defer="relationship" id="relationship" name="relationship"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona la relación con el familiar</option>

                                    @foreach ($relationships as $relationship)
                                        <option value="{{ $relationship->id }}">
                                            {{ $relationship->description_relationship }}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>


                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelFamilyNames"
                                    class="text-gray-700 dark:text-gray-400">{{ __('family names') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Nombre completo del familiar" type="text" id="family_names"
                                    name="family_names" wire:model.defer="family_names" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelFamilyAddress"
                                    class="text-gray-700 dark:text-gray-400">{{ __('family address') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Dirección del familiar" type="text" id="family_address"
                                    name="family_address" wire:model.defer="family_address" />
                            </div>

                        </div>


                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelFamilyPhone"
                                    class="text-gray-700 dark:text-gray-400">{{ __('family phone') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="telefono del familiar" type="tel" id="family_phone"
                                    name="family_phone" wire:model.defer="family_phone" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelFamilyPhoneCellular"
                                    class="text-gray-700 dark:text-gray-400">{{ __('family phone cellular') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="telefono celular del familiar" type="tel"
                                    id="family_phone_cellular" name="family_phone_cellular"
                                    wire:model.defer="family_phone_cellular" />
                            </div>

                        </div>

                        <br>
                        <div class="f1-buttons">
                            <button type="button"
                                class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                            <button type="button"
                                class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                        </div>

                    </fieldset>
                    <!--fin del paso 5 -->

                    <!--paso 6 -->
                    <fieldset wire:ignore>

                        <div class="flex space-x-4">

                            <div class="w-1-3">
                                <label id="labelEps" class="text-gray-700 dark:text-gray-400">EPS</label>

                                <select wire:model.defer="eps" id="eps" name="eps"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona la eps del usuario</option>

                                    @foreach ($epses as $eps)
                                        <option value="{{ $eps->id }}">
                                            {{ $eps->description_eps }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="w-1-3">
                                <label id="labelDateEps"
                                    class="text-gray-700 dark:text-gray-400">{{ __('date eps') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha documento de eps" type="text" id="date_eps"
                                    name="date_eps" wire:model.defer="date_eps"
                                    onchange="fechasSet('date_eps'),documentOn('date_eps','docEps')" />

                                <span id="docEps" class="Inactive upload-ico33 fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocEps" wire:model.defer="DocEps"
                                        onchange="documentAbove('InputDocEps','docEps')" class="upload-input"
                                        type="file">
                                </span>
                            </div>

                            <div class="w-1-3">
                                <label id="labelBloodType"
                                    class="text-gray-700 dark:text-gray-400">{{ __('blood type') }}</label>

                                <select wire:model.defer="blood_type" id="blood_type" name="blood_type"
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

                            <div class="w-1-3">
                                <label id="labelPension" class="text-gray-700 dark:text-gray-400">PENSION</label>

                                <select wire:model.defer="pension" id="pension" name="pension"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona la pension del usuario</option>

                                    @foreach ($pensions as $pension)
                                        <option value="{{ $pension->id }}">
                                            {{ $pension->description_pension }}</option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="w-1-3">
                                <label id="labelDatePension"
                                    class="text-gray-700 dark:text-gray-400">{{ __('date pension') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha de documento pensión" type="text" id="date_pension"
                                    name="date_pension" wire:model.defer="date_pension"
                                    onchange="fechasSet('date_pension'),documentOn('date_pension','docPension')" />

                                <span id="docPension" class="Inactive upload-ico33 fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocPension" wire:model.defer="DocPension"
                                        onchange="documentAbove('InputDocPension','docPension')" class="upload-input"
                                        type="file">
                                </span>
                            </div>

                            <div class="w-1-3">
                                <label id="labelLayoffs"
                                    class="text-gray-700 dark:text-gray-400">{{ __('layoffs') }}</label>

                                <select wire:model.defer="layoffs" id="layoffs" name="layoffs"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona el tipo de cesantias</option>

                                    @foreach ($layoffes as $layoff)
                                        <option value="{{ $layoff->id }}">
                                            {{ $layoff->description_layoffs }}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-1-3">
                                <label id="labelDateLayoffs"
                                    class="text-gray-700 dark:text-gray-400">{{ __('date layoffs') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha documento de cesantias" type="text" id="date_layoffs"
                                    name="date_layoffs" wire:model.defer="date_layoffs"
                                    onchange="fechasSet('date_layoffs'),documentOn('date_layoffs','docLayoffs')" />

                                <span id="docLayoffs" class="Inactive upload-ico33 fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocLayoffs" wire:model.defer="DocLayoffs"
                                        onchange="documentAbove('InputDocLayoffs','docLayoffs')" class="upload-input"
                                        type="file">
                                </span>
                            </div>

                            <div class="w-1-3">
                                <label id="labelArl" class="text-gray-700 dark:text-gray-400">ARL</label>

                                <select wire:model.defer="arl" id="arl" name="arl"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona la arl del usuario</option>

                                    @foreach ($arls as $arl)
                                        <option value="{{ $arl->id }}">
                                            {{ $arl->description_arl }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="w-1-3">
                                <label id="labelArlDate"
                                    class="text-gray-700 dark:text-gray-400">{{ __('arl date') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha documento de arl" type="text" id="arl_date"
                                    name="arl_date" wire:model.defer="arl_date"
                                    onchange="fechasSet('arl_date'),documentOn('arl_date','docArl')" />

                                <span id="docArl" class="Inactive upload-ico33 fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocArl" wire:model.defer="DocArl"
                                        onchange="documentAbove('InputDocArl','docArl')" class="upload-input"
                                        type="file">
                                </span>
                            </div>

                        </div>

                        <div class="flex space-x-4">

                            <div class="w-1-3">
                                <label id="labelCompensationbox" class="text-gray-700 dark:text-gray-400">
                                    {{ __('compensationbox') }}</label>

                                <select wire:model.defer="compensationbox" id="compensationbox"
                                    name="compensationbox"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona el tipo de caja de compensación</option>

                                    @foreach ($compensationboxes as $compensationbox)
                                        <option value="{{ $compensationbox->id }}">
                                            {{ $compensationbox->description_compensationbox }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="w-1-3">
                                <label id="labelDateCompensationbox"
                                    class="text-gray-700 dark:text-gray-400">{{ __('date compensationbox') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="fecha documento caja compensación" type="text"
                                    id="date_compensationbox" name="date_compensationbox"
                                    wire:model.defer="date_compensationbox"
                                    onchange="fechasSet('date_compensationbox'),documentOn('date_compensationbox','docCompensationbox')" />

                                <span id="docCompensationbox"
                                    class="Inactive upload-ico33 fas fa-file-upload icon-green" aria-hidden="true"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocCompensationbox" wire:model.defer="DocCompensationbox"
                                        onchange="documentAbove('InputDocCompensationbox','docCompensationbox')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                            <div class="w-1-3">
                                <label id="labelBeneficiary"
                                    class="text-gray-700 dark:text-gray-400">{{ __('beneficiary') }}</label>

                                <select wire:model.defer="beneficiary" id="beneficiary" name="beneficiary"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona el beneficiario del usuario</option>
                                    <option value="1">Adulto mayor</option>
                                    <option value="2">Conyugue</option>
                                    <option value="3">Hijo o Hijastro</option>
                                </select>
                            </div>

                        </div>

                        {{-- <div class="flex space-x-4">

                    </div> --}}

                        <br>
                        <div class="f1-buttons">
                            <button type="button"
                                class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                            <button type="button"
                                class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                        </div>

                    </fieldset>
                    <!--fin del paso 6 -->

                    <!--paso 7 -->
                    <fieldset wire:ignore>

                        <div class="flex space-x-4">

                            <div class="w-6-12">
                                <label id="labelDocumentBeneficiary"
                                    class=" text-gray-700 dark:text-gray-400">{{ __('document beneficiary') }}</label>
                                <input
                                    class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="documento del beneficiario" type="text" id="documentBeneficiary"
                                    name="documentBeneficiary" wire:model.defer="documentBeneficiary"
                                    onchange="documentOn('documentBeneficiary','docBeneficiary')" />

                                <span id="docBeneficiary" class="Inactive upload-ico fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <input id="InputDocBeneficiary" wire:model.defer="DocBeneficiary"
                                        onchange="documentAbove('InputDocBeneficiary','docBeneficiary')"
                                        class="upload-input" type="file">
                                </span>
                            </div>


                            <div class="w-6-12" id="divNameBeneficiary">
                                <label id="labelNameBeneficiary"
                                    class=" text-gray-700 dark:text-gray-400">{{ __('name beneficiary') }}</label>

                                <input
                                    class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="nombre del beneficiario" type="text" id="nameBeneficiary"
                                    name="nameBeneficiary" wire:model.defer="nameBeneficiary"
                                    onchange="beneficiaryChild()" />

                                <span id="docNameBeneficiary"
                                    class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocNameBeneficiary" wire:model.defer="DocNameBeneficiary"
                                        onchange="documentAbove('InputDocNameBeneficiary','docNameBeneficiary')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                            {{-- <div class="w-1-3">
                            <label id="labelRelationshipBeneficiary"
                                class="text-gray-700 dark:text-gray-400">{{ __('relationship beneficiary') }}</label>

                            <select wire:model.defer="relationshipBeneficiary" id="relationshipBeneficiary"
                                name="relationshipBeneficiary"
                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                <option value="0">Selecciona la relación con el familiar</option>

                                @foreach ($relationships as $relationship)
                                    <option value="{{ $relationship->id }}">
                                        {{ $relationship->description_relationship }}</option>
                                @endforeach

                            </select>
                        </div> --}}

                        </div>

                        <div class="flex space-x-4" wire:ignore>

                            <div class="w-6-12">
                                <label id="labelLicenseNumber"
                                    class="text-gray-700 dark:text-gray-400">{{ __('license number') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Numero de Licencia de conducción" type="number"
                                    id="license_number" name="license_number" wire:model.defer="license_number" />

                            </div>

                            <div class="w-6-12">
                                <label id="labelLicenseCategory"
                                    class="text-gray-700 dark:text-gray-400">{{ __('license category') }}</label>

                                <select wire:model.defer="license_category" id="license_category"
                                    name="license_category"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona la categoria de licencia de conducción
                                    </option>

                                    @foreach ($licenseCategories as $licenseCategory)
                                        <option value="{{ $licenseCategory->id }}">
                                            {{ $licenseCategory->code_licenseCategory }} -
                                            {{ $licenseCategory->description_licenseCategory }}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>

                        <div class="flex space-x-4" wire:ignore>

                            <div class="w-6-12">
                                <label id="labelLicenseExpiration"
                                    class="text-gray-700 dark:text-gray-400">{{ __('license expiration') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha del certificado de espiracion licencia" type="text"
                                    id="license_expiration" name="license_expiration"
                                    wire:model.defer="license_expiration"
                                    onchange="fechasSet('license_expiration'),documentOn('license_expiration','Doclicense')" />

                                <span id="Doclicense" class="Inactive upload-ico fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <input id="InputDoclicense" wire:model.defer="Doclicense"
                                        onchange="documentAbove('InputDoclicense','Doclicense')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                            <div class="w-6-12">
                                <label id="labelCertificateDrugsAlchoolemia"
                                    class="text-gray-700 dark:text-gray-400">{{ __('certificate drugs alchoolemia') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha del certificado de drogas alchoolemia" type="text"
                                    id="certificate_drugs_alchoolemia" name="certificate_drugs_alchoolemia"
                                    wire:model.defer="certificate_drugs_alchoolemia"
                                    onchange="fechasSet('certificate_drugs_alchoolemia'),documentOn('certificate_drugs_alchoolemia','DocAlchoolemia')" />

                                <span id="DocAlchoolemia" class="Inactive upload-ico fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <input id="InputDocAlchoolemia" wire:model.defer="DocAlchoolemia"
                                        onchange="documentAbove('InputDocAlchoolemia','DocAlchoolemia')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                        </div>

                        <div class="flex space-x-4" wire:ignore>

                            <div class="w-6-12">
                                <label id="labelSIMITQueries"
                                    class="text-gray-700 dark:text-gray-400">{{ __('SIMIT queries') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha del certificado de Consultas SIMIT" type="text"
                                    id="SIMIT_queries" name="SIMIT_queries" wire:model.defer="SIMIT_queries"
                                    onchange="fechasSet('SIMIT_queries'),documentOn('SIMIT_queries','DocSimitQueries')" />

                                <span id="DocSimitQueries" class="Inactive upload-ico fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <input id="InputDocSimitQueries" wire:model.defer="DocSimitQueries"
                                        onchange="documentAbove('InputDocSimitQueries','DocSimitQueries')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                            <div class="w-6-12">
                                <label id="labelRulesTransit"
                                    class="text-gray-700 dark:text-gray-400">{{ __('Rules Transit') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha del certificado de Normas Transito" type="text"
                                    id="Rules_Transit" name="Rules_Transit" wire:model.defer="Rules_Transit"
                                    onchange="fechasSet('Rules_Transit'),documentOn('Rules_Transit','DocRulesTransit')" />

                                <span id="DocRulesTransit" class="Inactive upload-ico fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <input id="InputDocRulesTransit" wire:model.defer="DocRulesTransit"
                                        onchange="documentAbove('InputDocRulesTransit','DocRulesTransit')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                        </div>

                        <br>
                        <div class="f1-buttons">
                            <button type="button"
                                class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                            <button type="button"
                                class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                        </div>

                    </fieldset>
                    <!--fin del paso 7 -->

                    <!--paso 8 -->
                    <fieldset wire:ignore>

                        <div class="flex space-x-4" wire:ignore>

                            <div class="w-6-12">
                                <label id="labelDefensiveDriving"
                                    class="text-gray-700 dark:text-gray-400">{{ __('Defensive driving') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha del certificado de Manejo_Defensivo" type="text"
                                    id="Defensive_driving" name="Defensive_driving"
                                    wire:model.defer="Defensive_driving"
                                    onchange="fechasSet('Defensive_driving'),documentOn('Defensive_driving','DocDefensiveDriving')" />

                                <span id="DocDefensiveDriving"
                                    class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocDefensiveDriving" wire:model.defer="DocDefensiveDriving"
                                        onchange="documentAbove('InputDocDefensiveDriving','DocDefensiveDriving')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                            <div class="w-6-12">
                                <label id="labelFirstaid"
                                    class="text-gray-700 dark:text-gray-400">{{ __('First aid') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha del certificado de Primeros_Auxilios" type="text"
                                    id="First_aid" name="First_aid" wire:model.defer="First_aid"
                                    onchange="fechasSet('First_aid'),documentOn('First_aid','DocFirstAid')" />

                                <span id="DocFirstAid" class="Inactive upload-ico fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <input id="InputDocFirstAid" wire:model.defer="DocFirstAid"
                                        onchange="documentAbove('InputDocFirstAid','DocFirstAid')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                        </div>

                        <div class="flex space-x-4" wire:ignore>

                            <div class="w-6-12">
                                <label id="labelfiveSensesDriving"
                                    class="text-gray-700 dark:text-gray-400">{{ __('psychosensometric certificate') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha del certificado psicosensometrico" type="text"
                                    id="psicosensometrico" name="psicosensometrico"
                                    wire:model.defer="psicosensometrico"
                                    onchange="fechasSet('psicosensometrico'),documentOn('psicosensometrico','DocfiveSensesDriving')" />

                                <span id="DocfiveSensesDriving"
                                    class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <input id="InputDocfiveSensesDriving" wire:model.defer="DocfiveSensesDriving"
                                        onchange="documentAbove('InputDocfiveSensesDriving','DocfiveSensesDriving')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                            <div class="w-6-12">
                                <label id="labelRoadSafety"
                                    class="text-gray-700 dark:text-gray-400">{{ __('Road safety') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha del certificado de la Seguridad Vial" type="text"
                                    id="Road_safety" name="Road_safety" wire:model.defer="Road_safety"
                                    onchange="fechasSet('Road_safety'),documentOn('Road_safety','DocRoadSafety')" />

                                <span id="DocRoadSafety" class="Inactive upload-ico fas fa-file-upload icon-green"
                                    aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <input id="InputDocRoadSafety" wire:model.defer="DocRoadSafety"
                                        onchange="documentAbove('InputDocRoadSafety','DocRoadSafety')"
                                        class="upload-input" type="file">
                                </span>
                            </div>

                        </div>

                        <div class="flex space-x-4" wire:ignore>

                            <div class="w-6-12" id="divLinked">
                                <label id="labelLinked"
                                    class="text-gray-700 dark:text-gray-400">{{ __('Linked') }}</label>

                                <select wire:model.defer="Linked" id="Linked" name="Linked"
                                    class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="0">Selecciona el vinculado asociado a este conductor
                                    </option>

                                    @foreach ($linkers as $linker)
                                        <option value="{{ $linker->id }}">
                                            {{ $linker->owner }} </option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="w-6-12" id="divUserEntryDate">
                                <label id="labelUserEntryDate"
                                    class="text-gray-700 dark:text-gray-400">{{ __('user entry date') }}</label>

                                <input readonly
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Fecha inicio de contrato con STEP" type="text"
                                    id="user_entry_date" name="user_entry_date" wire:model.defer="user_entry_date"
                                    onchange="fechasSet('user_entry_date')" />
                            </div>

                            <div class="w-6-12" id="divUsername">
                                <label id="labelUsername"
                                    class="text-gray-700 dark:text-gray-400">{{ __('username') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Escribe el nombre identificador de usuario para el sistema"
                                    type="text" id="username" name="username" wire:model.defer="username" />
                            </div>

                        </div>

                        <div class="flex space-x-4" wire:ignore>

                            <div class="w-6-12">
                                <label id="labelProfilePhotoPath"
                                    class="text-gray-700 dark:text-gray-400">{{ __('profile photo path') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Selecciona una foto de perfil para este usuario" type="file"
                                    id="profile_photo_path" name="profile_photo_path"
                                    wire:model.defer="profile_photo_path" />
                            </div>

                            <div class="w-6-12">
                                <label id="labelEmail"
                                    class="text-gray-700 dark:text-gray-400">{{ __('email') }}</label>

                                <input
                                    class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Escribe un correo electronico" type="email" id="email"
                                    name="email" wire:model.defer="email" />
                            </div>

                        </div>

                        <br>
                        {{-- <div class="f1-buttons">
                        <button type="button"
                            class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                        <button type="button"
                            class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                    </div> --}}
                        <div class="f1-buttons">
                            <button type="button"
                                class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                            <button type="button" id="btnFinalize"
                                class="btn btn-Finalize w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Finalizar</button>
                        </div>


                    </fieldset>
                    <!--fin del paso 8 -->


                    <!--paso fin -->
                    {{-- <fieldset wire:ignore> --}}

                    {{-- <div class="flex space-x-4" wire:ignore> --}}

                    {{-- <div class="w-6-12">
                            <label id="labelNormOverlandTransportationAutomotive"
                                class="text-gray-700 dark:text-gray-400">{{ __('Norm Overland Transportation Automotive') }}</label>

                            <input readonly
                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Fecha del certificado de las Norma_Transporte_terrestre_automotor"
                                type="text" id="Norm_Overland_Transportation_Automotive"
                                name="Norm_Overland_Transportation_Automotive"
                                wire:model.defer="Norm_Overland_Transportation_Automotive"
                                onchange="fechasSet('Norm_Overland_Transportation_Automotive'),documentOn('Norm_Overland_Transportation_Automotive','DocNormOverlandTransportationAutomotive')" />

                            <span id="DocNormOverlandTransportationAutomotive"
                                class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <input id="InputDocNormOverlandTransportationAutomotive"
                                    wire:model.defer="DocNormOverlandTransportationAutomotive"
                                    onchange="documentAbove('InputDocNormOverlandTransportationAutomotive','DocNormOverlandTransportationAutomotive')"
                                    class="upload-input" type="file">
                            </span>
                        </div> --}}

                    {{-- </div> --}}

                    {{-- <div class="w-6-12">
                            <label id="labelActivePassiveSecurityVehicle"
                                class="text-gray-700 dark:text-gray-400">{{ __('Active Passive Security vehicle') }}</label>

                            <input readonly
                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Fecha del certificado de la Seguridad_activa_pasiva_vehiculo"
                                type="text" id="Active_Passive_Security_vehicle"
                                name="Active_Passive_Security_vehicle"
                                wire:model.defer="Active_Passive_Security_vehicle"
                                onchange="fechasSet('Active_Passive_Security_vehicle'),documentOn('Active_Passive_Security_vehicle','DocActivePassiveSecurityVehicle')" />

                            <span id="DocActivePassiveSecurityVehicle"
                                class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <input id="InputDocActivePassiveSecurityVehicle"
                                    wire:model.defer="DocActivePassiveSecurityVehicle"
                                    onchange="documentAbove('InputDocActivePassiveSecurityVehicle','DocActivePassiveSecurityVehicle')"
                                    class="upload-input" type="file">
                            </span>
                        </div> --}}

                    {{-- <div class="w-6-12">
                            <label id="labelDistractions"
                                class="text-gray-700 dark:text-gray-400">{{ __('distractions') }}</label>

                            <input readonly
                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Fecha del certificado de Distracciones" type="text"
                                id="distractions" name="distractions" wire:model.defer="distractions"
                                onchange="fechasSet('distractions'),documentOn('distractions','Docdistractions')" />

                            <span id="Docdistractions"
                                class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <input id="InputDocdistractions" wire:model.defer="Docdistractions"
                                    onchange="documentAbove('InputDocdistractions','Docdistractions')"
                                    class="upload-input" type="file">
                            </span>
                        </div> --}}

                    {{-- <div class="flex space-x-4" wire:ignore>
                    </div> --}}

                    {{-- <div class="flex space-x-4" wire:ignore> --}}
                    {{-- <div class="w-6-12">
                            <label id="labelFirstResponder"
                                class="text-gray-700 dark:text-gray-400">{{ __('First Responder') }}</label>

                            <input readonly
                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Fecha del certificado de Primero_Respondiente" type="text"
                                id="First_Responder" name="First_Responder"
                                wire:model.defer="First_Responder"
                                onchange="fechasSet('First_Responder'),documentOn('First_Responder','DocFirstResponder')" />

                            <span id="DocFirstResponder"
                                class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <input id="InputDocFirstResponder" wire:model.defer="DocFirstResponder"
                                    onchange="documentAbove('InputDocFirstResponder','DocFirstResponder')"
                                    class="upload-input" type="file">
                            </span>
                        </div> --}}

                    {{-- </div> --}}

                    {{-- <div class="w-6-12">
                            <label id="labelDateWithdrawalUser"
                                class="text-gray-700 dark:text-gray-400">{{ __('date withdrawal user') }}</label>

                            <input readonly
                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Fecha fin de contrato con STEP" type="text"
                                id="date_withdrawal_user" name="date_withdrawal_user"
                                wire:model.defer="date_withdrawal_user"
                                onchange="fechasSet('date_withdrawal_user')" />
                        </div> --}}

                    {{-- <div class="flex space-x-4" wire:ignore>

                        <div class="w-6-12">
                            <label id="labelUsername"
                                class="text-gray-700 dark:text-gray-400">{{ __('username') }}</label>

                            <input
                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Escribe el nombre de usuario para el sistema" type="text"
                                id="username" name="username" wire:model.defer="username" />
                        </div>

                        <div class="w-6-12">
                            <label id="labelPassword"
                                class="text-gray-700 dark:text-gray-400">{{ __('password') }}</label>

                            <input
                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Escribe la contraseña del usuario para el sistema"
                                type="password" id="password" name="password"
                                wire:model.defer="password" />
                        </div>

                    </div> --}}

                    {{-- <div class="flex space-x-4" wire:ignore> --}}

                    {{-- <div class="w-6-12">
                            <label id="labelNormativeTips"
                                class="text-gray-700 dark:text-gray-400">{{ __('Normative Tips') }}</label>

                            <input readonly
                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Fecha del certificado de Tips_normativos" type="text"
                                id="Normative_Tips" name="Normative_Tips"
                                wire:model.defer="Normative_Tips"
                                onchange="fechasSet('Normative_Tips'),documentOn('Normative_Tips','DocNormativeTips')" />

                            <span id="DocNormativeTips"
                                class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <input id="InputDocNormativeTips" wire:model.defer="DocNormativeTips"
                                    onchange="documentAbove('InputDocNormativeTips','DocNormativeTips')"
                                    class="upload-input" type="file">
                            </span>
                        </div> --}}

                    {{-- <div class="w-6-12">
                            <label id="labelDrivingMethods"
                                class="text-gray-700 dark:text-gray-400">{{ __('Driving Methods') }}</label>

                            <input readonly
                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Fecha del certificado de Metodos_Conduccion" type="text"
                                id="Driving_Methods" name="Driving_Methods"
                                wire:model.defer="Driving_Methods"
                                onchange="fechasSet('Driving_Methods'),documentOn('Driving_Methods','DocDrivingMethods')" />

                            <span id="DocDrivingMethods"
                                class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <input id="InputDocDrivingMethods" wire:model.defer="DocDrivingMethods"
                                    onchange="documentAbove('InputDocDrivingMethods','DocDrivingMethods')"
                                    class="upload-input" type="file">
                            </span>
                        </div> --}}

                    {{-- <div class="w-6-12">
                            <label id="labelDrivingExam"
                                class="text-gray-700 dark:text-gray-400">{{ __('driving exam') }}</label>

                            <input readonly
                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Fecha del certificado del Examen_Conduccion" type="text"
                                id="driving_exam" name="driving_exam" wire:model.defer="driving_exam"
                                onchange="fechasSet('driving_exam'),documentOn('driving_exam','DocdrivingExam')" />

                            <span id="DocdrivingExam"
                                class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <input id="InputDocdrivingExam" wire:model.defer="DocdrivingExam"
                                    onchange="documentAbove('InputDocdrivingExam','DocdrivingExam')"
                                    class="upload-input" type="file">
                            </span>
                        </div> --}}

                    {{-- </div> --}}

                    {{-- <br>
                    <div class="f1-buttons">
                        <button type="button"
                            class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                        <button type="button" id="btnFinalize"
                            class="btn btn-Finalize w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Finalizar</button>
                    </div>
                </fieldset> --}}
                    <!--fin -->

                </div>

            </form>

        </div>
        <div
            class="flex flex-col items-center justify-end px-6 py-3-1 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
            <button id="btnStore"
                class="Inactive w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                wire:click="store">
                {{ __('Create User') }}
            </button>
            <button x-on:click="closeModal" onclick="restart()" id="btnCalcel"
                class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                wire:click="clear">
                {{ __('Cancel') }}
            </button>
        </div>
    </div>
</div>
