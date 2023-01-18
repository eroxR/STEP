<div>

    <div class="py-12 mb-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="justify-center flex">
                {{-- class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-gray-50-s dark:bg-gray-800 dark:text-white" --}}
                <h1 class="text-black dark:text-white text-4xl rounded-lg border-b-green-800 p-1">Manage Contracts</h1>
                {{-- background: black;
                border-radius: 3px;
                padding: 0.3rem; --}}
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
                    create new contract
                </button>
            </div>

            <div class="w-full overflow-x-auto">
                @if ($contracts->count())
                    <table class="w-full ">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                {{-- <th class="cursor-pointer px-2 py-3" wire:click="order('id')">

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

                                </th> --}}
                                <th class="cursor-pointer px-2 py-3" wire:click="order('contract_number')">

                                    contract number

                                    @if ($sort == 'contract_number')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-3" wire:click="order('description_typeContract')">

                                    description typeContract

                                    @if ($sort == 'description_typeContract')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-3" wire:click="order('state_contract')">

                                    state contract

                                    @if ($sort == 'state_contract')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-3" wire:click="order('date_start_contract')">

                                    date start contract

                                    @if ($sort == 'date_start_contract')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-3" wire:click="order('contract_end_date')">

                                    contract end date

                                    @if ($sort == 'contract_end_date')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-3" wire:click="order('contracting_name')">

                                    contracting name

                                    @if ($sort == 'contracting_name')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-3" wire:click="order('school_name')">

                                    school name

                                    @if ($sort == 'school_name')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-3" wire:click="order('destination_place')">

                                    destination place

                                    @if ($sort == 'destination_place')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-2 py-3" wire:click="order('contract_value')">

                                    contract value

                                    @if ($sort == 'contract_value')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="px-2 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                            @foreach ($contracts as $contract)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    {{-- <td class="px-4 py-3 text-sm">
                                        {{ $contract->id }}
                                    </td> --}}
                                    <td class="px-4 py-3 text-sm">
                                        {{ $contract->contract_number }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $contract->description_typeContract }}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        {{-- ['INICIAL','CANCELADO','EN CURSO','FINALIZADO','PENDIENTE'] --}}
                                        @switch($contract->state_contract)
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

                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $contract->date_start_contract }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $contract->contract_end_date }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $contract->contracting_name }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $contract->school_name }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $contract->destination_place }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        ${{ number_format($contract->contract_value, 2, ',', '.') }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <button id="edit" onclick="edit({{ $contract }})"
                                                class="inline-flex items-center justify-center  bg-yellow-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-400 focus:outline-none focus:bg-yellow-700 focus:ring focus:ring-red-200 active:bg-yellow-700 disabled:opacity-25 transition"
                                                {{-- flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" --}} aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button onclick="deletes({{ $contract->id }})"
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
                        No existe Contratos que coincidan con lo que estas buscando...
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
                <h1 class="text-black dark:text-white text-4xl1">Creating new contract<span class="typed"></span>
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
                                    <strong class="fa-stack-2x -ml-1 numcolor" id="step3">
                                        3
                                    </strong>
                                </span>
                            </div>
                            <p>Paso 3</p>
                        </div>
                        <div class="f1-step ">
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
                        </div>
                        <div class="f1-step ">
                            <div class="f1-step-icon">

                                <!-- Crea un icono envuelto por la clase fa-stack -->
                                <span class="fa-stack  ">
                                    <!-- El icono que envolverá el número -->
                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                    <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                    <strong class="fa-stack-1x -ml-1 numcolor" id="step5">
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

                                <div class="w-1-3 ">

                                    <select wire:model.defer="type_contract" onchange="typeContract()"
                                        id="type_contract" name="type_contract"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Tipo de contrato</option>
                                        @foreach ($type_contracts as $type_contract)
                                            <option value="{{ $type_contract->id }}">
                                                {{ $type_contract->description_typeContract }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="flex space-x-4 ">

                                <div class="w-6-12 Inactive" id="divIdentification">
                                    <label class="text-gray-700 dark:text-gray-400">identification</label>
                                    <select wire:model.defer="identification" id="identification"
                                        name="identification"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">IDENTIFICACIÓN</option>
                                        @foreach ($identifications as $identification)
                                            <option value="{{ $identification->id }}">
                                                {{ $identification->description_identification }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="w-6-12 Inactive" id="divContractDocument">
                                    <label id="labelContractDocument"
                                        class="text-gray-700 dark:text-gray-400">contract_document</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="documento del contratante" type="number" id="contract_document"
                                        name="contract_document" wire:model.defer="contract_document" />
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12 Inactive" id="divContractingName">
                                    <label id="labelContractingName"
                                        class="text-gray-700 dark:text-gray-400">contracting_name</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="nombre del contratante" type="text" id="contracting_name"
                                        name="contracting_name" wire:model.defer="contracting_name" />
                                </div>

                                <div class="w-6-12 Inactive" id="divExpeditionIdentificationcard">
                                    <label id="labelExpeditionIdentificationcard"
                                        class="text-gray-700 dark:text-gray-400">expedition_identificationcard</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="fecha expedición cedula" type="text"
                                        id="expedition_identificationcard" name="expedition_identificationcard"
                                        wire:model.defer="expedition_identificationcard" />
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12  Inactive" id="divContractingDirection">
                                    <label id="labelContractingDirection"
                                        class="text-gray-700 dark:text-gray-400">contracting_direction</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="dirección contratante" type="text" id="contracting_direction"
                                        name="contracting_direction" wire:model.defer="contracting_direction" />
                                </div>

                                <div class="w-6-12  Inactive" id="divContractingPhone">
                                    <label id="labelContractingPhone"
                                        class="text-gray-700 dark:text-gray-400">contracting_phone</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="telefono contratante" type="tel" id="contracting_phone"
                                        name="contracting_phone" wire:model.defer="contracting_phone" />
                                </div>
                            </div>


                            <br>
                            <div class="f1-buttons Inactive" id="fieldset1Buttons">
                                <button type="button"
                                    class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                            </div>

                        </fieldset>
                        <!--fin del paso 1 -->

                        <!---paso 2 -->
                        <fieldset>

                            <div class="flex space-x-4">

                                <div class="w-6-12" id="divSchoolName">
                                    <label id="labelSchoolName"
                                        class="text-gray-700 dark:text-gray-400">school_name</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="nombre del colegio" type="text" id="school_name"
                                        name="school_name" wire:model.defer="school_name" />
                                </div>

                                <div class="w-6-12" id="divAddressSchool">
                                    <label id="labelAddressSchool"
                                        class="text-gray-700 dark:text-gray-400">address_school</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Dirección del colegio" type="text" id="address_school"
                                        name="address_school" wire:model.defer="address_school" />
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-full" id="divSecurePolicy">
                                    <label id="labelSecurePolicy"
                                        class="text-gray-700 dark:text-gray-400">secure_policy</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="secure_policy" type="text" id="secure_policy"
                                        name="secure_policy" wire:model.defer="secure_policy" />
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-full" id="divCooperationContract">
                                    <label id="labelCooperationContract"
                                        class="text-gray-700 dark:text-gray-400">cooperation_contract</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="cooperation_contract" type="text" id="cooperation_contract"
                                        name="cooperation_contract" wire:model.defer="cooperation_contract" />
                                </div>

                            </div>

                            <div class="flex space-x-4 justify-center Inacyive" id="nextstep">

                                <div class="w-1-3 mnext">

                                    <p class="text-gray-700 dark:text-gray-400 nextstep">next step</p>

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

                            <div class="flex space-x-4" id="divIdentificationLegalRepresentative">

                                <div class="w-6-12">
                                    <label id="labelIdentificationLegalRepresentative"
                                        class="text-gray-700 dark:text-gray-400">identification_legal_representative</label>
                                    <select wire:model.defer="identification_legal_representative"
                                        id="identification_legal_representative"
                                        name="identification_legal_representative"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">IDENTIFICACIÓN</option>
                                        @foreach ($identifications as $identification)
                                            <option value="{{ $identification->id }}">
                                                {{ $identification->description_identification }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="w-6-12">
                                    <label id="labelIdentificationcardRepresentLegal"
                                        class="text-gray-700 dark:text-gray-400">identificationcard_represent_legal</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="identificationcard_represent_legal" type="number"
                                        id="identificationcard_represent_legal"
                                        name="identificationcard_represent_legal"
                                        wire:model.defer="identificationcard_represent_legal" />
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelLegalRepresentative"
                                        class="text-gray-700 dark:text-gray-400">legal_representative</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Representante legal" type="text" id="legal_representative"
                                        name="legal_representative" wire:model.defer="legal_representative" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelLegalRepresentativeExpeditionIdentificationcard"
                                        class="text-gray-700 dark:text-gray-400">legal_representative_expedition_identificationcard</label>

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
                                        class="text-gray-700 dark:text-gray-400">identification_representative_group</label>
                                    <select wire:model.defer="identification_representative_group"
                                        id="identification_representative_group"
                                        name="identification_representative_group"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">IDENTIFICACIÓN</option>
                                        @foreach ($identifications as $identification)
                                            <option value="{{ $identification->id }}">
                                                {{ $identification->description_identification }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="w-6-12" id="divIdentificationcardRepresentativeGroup">
                                    <label id="labelIdentificationcardRepresentativeGroup"
                                        class="text-gray-700 dark:text-gray-400">identificationcard_representative_group</label>

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
                                        class="text-gray-700 dark:text-gray-400">group_representative_name</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="group_representative_name" type="text"
                                        id="group_representative_name" name="group_representative_name"
                                        wire:model.defer="group_representative_name" />
                                </div>

                                <div class="w-6-12" id="divDateofexpeditionRepresentativeGroup">
                                    <label id="labelDateofexpeditionRepresentativeGroup"
                                        class="text-gray-700 dark:text-gray-400">dateofexpedition_representative_group</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="dateofexpedition_representative_group" type="text"
                                        id="dateofexpedition_representative_group"
                                        name="dateofexpedition_representative_group"
                                        wire:model.defer="dateofexpedition_representative_group" />
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
                        <fieldset>

                            <div class="flex space-x-4">

                                <div class="w-full">
                                    <label class="text-gray-700 dark:text-gray-400">route_trip_contract</label>

                                    <textarea
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        name="" id="" cols="1" rows="1" placeholder="ruta del contrato"
                                        wire:model.defer="route_trip_contract">
                                        </textarea>
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label class="text-gray-700 dark:text-gray-400">trip_from</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="viaje desde" type="text" wire:model.defer="trip_from" />
                                </div>

                                <div class="w-6-12">

                                    <label class="text-gray-700 dark:text-gray-400">trip_to</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="viaje hasta" type="text" wire:model.defer="trip_to" />

                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-1-3">
                                    <label class="text-gray-700 dark:text-gray-400">place_of_origin</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="lugar de inicio" type="text"
                                        wire:model.defer="place_of_origin" />
                                </div>

                                <div class="w-1-3">
                                    <label class="text-gray-700 dark:text-gray-400">return_place</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="lugar de retorno" type="text"
                                        wire:model.defer="return_place" />
                                </div>

                                <div class="w-1-3">
                                    <label class="text-gray-700 dark:text-gray-400">destination_place</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="lugar de destino" type="text"
                                        wire:model.defer="destination_place" />
                                </div>
                            </div>

                            <br>
                            <div class="f1-buttons">
                                <button id="previous4" type="button"
                                    class="btn btn-previous ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white">Atrás</button>
                                <button type="button"
                                    class="btn btn-next w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Siguiente</button>
                            </div>

                        </fieldset>
                        <!--fin del paso 4 -->

                        <!--paso fin -->
                        <fieldset>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label class="text-gray-700 dark:text-gray-400">date_start_contract</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="date_start_contract" type="date"
                                        wire:model.defer="date_start_contract" />
                                </div>

                                <div class="w-6-12">
                                    <label class="text-gray-700 dark:text-gray-400">contract_end_date</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="fecha fin contrato" type="date"
                                        wire:model.defer="contract_end_date" />
                                </div>
                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label class="text-gray-700 dark:text-gray-400">quantity_vehicle</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="quantity_vehicle" type="number"
                                        wire:model.defer="quantity_vehicle" />
                                </div>

                                <div class="w-6-12">
                                    <label class="text-gray-700 dark:text-gray-400">passenger_quantity</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="passenger_quantity" type="number"
                                        wire:model.defer="passenger_quantity" />
                                </div>
                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label class="text-gray-700 dark:text-gray-400">total_disposition</label>
                                    <select wire:model.defer="total_disposition"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona si necesita Disposición Total</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>

                                <div class="w-6-12">
                                    <label class="text-gray-700 dark:text-gray-400">contract_signing_date</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="contract_signing_date" type="date"
                                        wire:model.defer="contract_signing_date" />
                                </div>
                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label class="text-gray-700 dark:text-gray-400">tipe_pay</label>
                                    <select wire:model.defer="tipe_pay"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona el tipo de pago</option>
                                        @foreach ($payment_types as $payment_type)
                                            <option value="{{ $payment_type->id }}">
                                                {{ $payment_type->description_typePayment }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="w-6-12">
                                    <label class="text-gray-700 dark:text-gray-400">contract_value</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Valor contrato" type="number"
                                        wire:model.defer="contract_value" />
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
                class="flex flex-col items-center justify-end px-6 py-3-1 -mx-6 -mb-4 -mt-3 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button id="btnStore" type="submit"
                    class="Inactive w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    wire:click="store" onclick="restart();" x-on:click="closeModal">
                    Generate Contract
                </button>
                <button x-on:click="closeModal"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                    wire:click="clear" onclick="restart();">
                    Cancel
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
            class="scroll w-9-12 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 overflow-x-hidden overflow-y-auto"
            role="dialog">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-center border-b-fuchsia-800 border-b">
                <!-- Modal title -->
                <p class="justify-start mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                <h1 class="text-black dark:text-white text-4xl1">Editing contract information type
                    <!-- editando información del contrato typo xxx numero xxx -->
                    @if (!is_null($editContracts))
                        {{ $descriptionTypeContract }}
                    @endif
                    number
                    @if (!is_null($editContracts))
                        {{ $editContracts->contract_number }}
                    @endif
                    <span class="typed2"></span>
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
                                        <label class="text-gray-700 dark:text-gray-400">identification</label>
                                        <select wire:model="editContracts.identification" name="identification"
                                            class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="0">IDENTIFICACIÓN</option>
                                            @foreach ($identifications as $identification)
                                                <option value="{{ $identification->id }}">
                                                    {{ $identification->description_identification }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="w-6-12 ">
                                        <label class="text-gray-700 dark:text-gray-400">contract_document</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="documento del contratante" type="number"
                                            name="contract_document" wire:model="editContracts.contract_document" />
                                    </div>

                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12 ">
                                        <label class="text-gray-700 dark:text-gray-400">contracting_name</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="nombre del contratante" type="text"
                                            name="contracting_name" wire:model="editContracts.contracting_name" />
                                    </div>

                                    <div class="w-6-12 ">
                                        <label
                                            class="text-gray-700 dark:text-gray-400">expedition_identificationcard</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="fecha expedición cedula" type="text"
                                            name="expedition_identificationcard"
                                            wire:model="editContracts.expedition_identificationcard" />
                                    </div>

                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12  ">
                                        <label class="text-gray-700 dark:text-gray-400">contracting_direction</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="dirección contratante" type="text"
                                            name="contracting_direction"
                                            wire:model="editContracts.contracting_direction" />
                                    </div>

                                    <div class="w-6-12  ">
                                        <label class="text-gray-700 dark:text-gray-400">contracting_phone</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="telefono contratante" type="tel"
                                            name="contracting_phone" wire:model="editContracts.contracting_phone" />
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
                                            <label class="text-gray-700 dark:text-gray-400">school_name</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="nombre del colegio" type="text" name="school_name"
                                                wire:model="editContracts.school_name" />
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">address_school</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Dirección del colegio" type="text"
                                                name="address_school" wire:model.defer="address_school" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-full">
                                            <label class="text-gray-700 dark:text-gray-400">secure_policy</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="secure_policy" type="text" name="secure_policy"
                                                wire:model="editContracts.secure_policy" />
                                        </div>

                                    </div>
                                @endif

                                @if ($editContracts->type_contract == 2 ||
                                    $editContracts->type_contract == 3 ||
                                    $editContracts->type_contract == 5)
                                    <div class="flex space-x-4">

                                        <div class="w-full">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">cooperation_contract</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="cooperation_contract" type="text"
                                                name="cooperation_contract"
                                                wire:model="editContracts.cooperation_contract" />
                                        </div>

                                    </div>
                                @endif

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
                                                        @endif --}} value="{{ $vehicle->id }}"> Placa:
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

                                @if ($editContracts->type_contract == 1 ||
                                    $editContracts->type_contract == 2 ||
                                    $editContracts->type_contract == 3 ||
                                    $editContracts->type_contract == 1)
                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">identification_legal_representative</label>
                                            <select wire:model="editContracts.identification_represent_legal"
                                                name="identification_legal_representative"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">IDENTIFICACIÓN</option>
                                                @foreach ($identifications as $identification)
                                                    <option value="{{ $identification->id }}">
                                                        {{ $identification->description_identification }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">identificationcard_represent_legal</label>

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
                                                class="text-gray-700 dark:text-gray-400">legal_representative</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Representante legal" type="text"
                                                name="legal_representative"
                                                wire:model="editContracts.legal_representative" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">legal_representative_expedition_identificationcard</label>

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
                                                class="text-gray-700 dark:text-gray-400">identification_representative_group</label>
                                            <select wire:model="editContracts.identification_representative_group"
                                                name="identification_representative_group"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">IDENTIFICACIÓN</option>
                                                @foreach ($identifications as $identification)
                                                    <option value="{{ $identification->id }}">
                                                        {{ $identification->description_identification }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">identificationcard_representative_group</label>

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
                                                class="text-gray-700 dark:text-gray-400">group_representative_name</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="group_representative_name" type="text"
                                                name="group_representative_name"
                                                wire:model="editContracts.group_representative_name" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">dateofexpedition_representative_group</label>

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
                                        <label class="text-gray-700 dark:text-gray-400">route_trip_contract</label>

                                        <textarea
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            name="" cols="1" rows="1" placeholder="ruta del contrato"
                                            wire:model="editContracts.route_trip_contract">
                                </textarea>
                                    </div>

                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">trip_from</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="viaje desde" type="text"
                                            wire:model="editContracts.trip_from" />
                                    </div>

                                    <div class="w-6-12">

                                        <label class="text-gray-700 dark:text-gray-400">trip_to</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="viaje hasta" type="text"
                                            wire:model="editContracts.trip_to" />

                                    </div>

                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-1-3">
                                        <label class="text-gray-700 dark:text-gray-400">place_of_origin</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="lugar de inicio" type="text"
                                            wire:model="editContracts.place_of_origin" />
                                    </div>

                                    <div class="w-1-3">
                                        <label class="text-gray-700 dark:text-gray-400">return_place</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="lugar de retorno" type="text"
                                            wire:model="editContracts.return_place" />
                                    </div>

                                    <div class="w-1-3">
                                        <label class="text-gray-700 dark:text-gray-400">destination_place</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="lugar de destino" type="text"
                                            wire:model="editContracts.destination_place" />
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
                                        <label class="text-gray-700 dark:text-gray-400">date_start_contract</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="date_start_contract" type="date"
                                            wire:model="editContracts.date_start_contract" />
                                    </div>

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">contract_end_date</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="fecha fin contrato" type="date"
                                            wire:model="editContracts.contract_end_date" />
                                    </div>
                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">quantity_vehicle</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="quantity_vehicle" type="number"
                                            wire:model="editContracts.quantity_vehicle" />
                                    </div>

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">passenger_quantity</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="passenger_quantity" type="number"
                                            wire:model="editContracts.passenger_quantity" />
                                    </div>
                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">total_disposition</label>
                                        <select wire:model="editContracts.total_disposition"
                                            class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="0">Selecciona si necesita Disposición Total</option>
                                            <option value="SI">SI</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </div>

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">contract_signing_date</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="contract_signing_date" type="date"
                                            wire:model="editContracts.contract_signing_date" />
                                    </div>
                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">tipe_pay</label>
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
                                        <label class="text-gray-700 dark:text-gray-400">contract_value</label>

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
                class="flex flex-col items-center justify-end px-6 py-3-1 -mx-6 -mb-4 -mt-3 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button
                    class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    wire:click="update" onclick="closeModalEdit()">
                    Update Contract
                </button>
                <button
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                    wire:click="clear" onclick="closeModalEdit()">
                    Cancel
                </button>
            </div>
        </div>
    </div>

    <!--end Modal edit -->

    {{-- end componentes de modal --}}

</div>



@section('scripts')
    <script>
        const typed = new Typed('.typed', {
            strings: ['...'],
            // stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
            typeSpeed: 500, // Velocidad en mlisegundos para poner una letra,
            startDelay: 100, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
            backSpeed: false, // Velocidad en milisegundos para borrrar una letra,
            smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
            shuffle: false, // Alterar el orden en el que escribe las palabras.
            backDelay: 100, // Tiempo de espera despues de que termina de escribir una palabra.
            loop: true, // Repetir el array de strings
            loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
            showCursor: false, // Mostrar cursor palpitanto
            cursorChar: '|', // Caracter para el cursor
            contentType: 'html', // 'html' o 'null' para texto sin formato
        });

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
                timer: 1000,
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

        // constante creada de la clase scroll que esta en el div principal de la modal
        const scroll = document.querySelector(".scroll");

        // con  el .scroll=0 subo el escroll cuando se cierra la modal editar
        // con esta funcion se cierra la modal editar
        function closeModalEdit() {
            scroll.scrollTop = 0;
            document.getElementById('modalEdit').classList.add('hidden');
        }

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
        Livewire.on('crud', (contractnumber, process, contractType, id) => {

            var process = process.process;
            var contractnumber = contractnumber.contractnumber;
            var contractType = contractType.contractType;
            var id = id.id;
            var main = '';
            var message = '';

            if (process == 1) {

                main = 'the contract type ' + contractType + ' number ' + contractnumber +
                    ' was created satisfactorily';
                message = 'you can create a public permission from the following url: ' +
                    'http://127.0.0.1:8000/pdfs/permit-public/' + id;

                // el contrato tipo xxx number xxx fue creado satisfactoriamente
                // puedes crear un permiso publico desde ala siguiente url: http://127.0.0.1:8000/pdfs/permit-public/' + id

                swal.fire({
                    title: 'you want to generate pdf or create a permit?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Generate PDF',
                    denyButtonText: `Create PERMITS`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {

                        window.open('http://127.0.0.1:8000/pdfs/pdf-contracts/' + id, '_blank')
                        swal.fire(main, message, 'success')
                    } else if (result.isDenied) {

                        window.open('http://127.0.0.1:8000/pdfs/permit-public/' + id, '_blank')
                        swal.fire(main, message, 'success')
                    } else {
                        swal.fire(main, message, 'success')
                    }
                })

            } else if (process == 2) {

                main = '';
                message = 'the information of the contract ' + contractnumber + ' type ' + contractType + ' has been satisfactorily updated';
                // se ha actualizado la información del contrato xxxx tipo xxx sactisfactoriamente
                
                swal.fire(main, message, 'success')

            } else if (process == 3) {

                main = '';
                message = 'Contract number ' + contractnumber + ' type ' + contractType +
                    ' has been successfully eliminated';
                // Se ha eliminado el contrato numero xxx tipo xxx sactisfactoriamente

                swal.fire(main, message, 'success')
            }

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
                var current_active_step = $(this).parents('.f1').find('.f1-step.active');
                // var icon_active_step = $(this).parents('.f1').find('.fa-stack-2x.-ml-1.flicker');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                // fields validation
                parent_fieldset.find(
                    'input[type="text"], input[type="password"], textarea, select, input[type="number"], input[type="tel"],input[type="email"],input[type="date"]'
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
                        current_active_step.removeClass('active').addClass('activated').next()
                            .addClass('active');
                        parpadeo(true);
                        // lastsaved();
                        // console.log(current_active_step);
                        // progress bar
                        bar_progress(progress_line, 'right');
                        // show next step
                        console.log(stepinfinite);
                        $(this).next().fadeIn();
                        // scroll window to beginning of the form
                        scroll_to_class($('.f1'), 20);
                    });
                }

            });

            // previous step
            $('.f1 .btn-previous').on('click', function() {
                // navigation steps / progress steps
                var current_active_step = $(this).parents('.f1').find('.f1-step.active');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                $(this).parents('fieldset').fadeOut(400, function() {
                    // change icons
                    current_active_step.removeClass('active').prev().removeClass('activated')
                        .addClass('active');
                    parpadeo(false);
                    lastsaved();
                    // progress bar
                    console.log(stepinfinite);
                    bar_progress(progress_line, 'left');
                    // show previous step
                    $(this).prev().fadeIn();
                    // scroll window to beginning of the form
                    scroll_to_class($('.f1'), 20);
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

                    if (stepinfinite >= 5) {
                        stepinfinite = 5;
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
                    if (stepinfinite == 5) {
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
                if (stepinfinite >= 5) {
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
            var current_active_step_s = $('.f1').find('.f1-step');
            var current_active_step = $('.f1').find('.f1-step.active');
            var current_active_step_a = $('.f1').find('.f1-step.activated');
            var progress_line = $('.f1').find('.f1-progress-line');
            // console.log(current_active_step_a);
            $('.f1 fieldset').fadeOut(400, function() {
                // change icons

                // parpadeo(false);
                // lastsaved();
                // progress bar
                // documentract();
                document.getElementById('type_contract').value = 0;
                typeContract();
                progress_line.attr('style', 'width: ' + 22.66 + '%;').data('now-value', 20.66);

                current_active_step.removeClass('active');
                current_active_step_a.removeClass('activated');
                var contador;
                if (stepinfinite < 5) {
                    contador = stepinfinite;
                } else {
                    contador = 5;
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

                $(this).prev().prev().prev().prev().fadeIn();
                // scroll window to beginning of the form
                scroll_to_class($('.f1'), 20);
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

        function typeContract() {

            var contractType = document.getElementById('type_contract').value;
            // console.log(contractType);

            switch (contractType) {
                case '0':
                    // removes
                    viewhideinputs('divIdentification', 'Inactive', 'Active');
                    viewhideinputs('divContractDocument', 'Inactive', 'Active');
                    viewhideinputs('divContractingName', 'Inactive', 'Active');
                    viewhideinputs('divExpeditionIdentificationcard', 'Inactive', 'Active');
                    viewhideinputs('divContractingDirection', 'Inactive', 'Active');
                    viewhideinputs('divContractingPhone', 'Inactive', 'Active');
                    viewhideinputs('fieldset1Buttons', 'Inactive', 'Active');

                    // adds

                    break;
                case '1':
                    // removes
                    viewhideinputs('labelCooperationContract', 'Inactive', 'Active');
                    viewhideinputs('cooperation_contract', 'Inactive', 'Active');
                    viewhideinputs('labelIdentificationRepresentativeGroup', 'Inactive', 'Active');
                    viewhideinputs('identification_representative_group', 'Inactive', 'Active');
                    viewhideinputs('labelIdentificationcardRepresentativeGroup', 'Inactive', 'Active');
                    viewhideinputs('identificationcard_representative_group', 'Inactive', 'Active');
                    viewhideinputs('labelGroupRepresentativeName', 'Inactive', 'Active');
                    viewhideinputs('group_representative_name', 'Inactive', 'Active');
                    viewhideinputs('labelDateofexpeditionRepresentativeGroup', 'Inactive', 'Active');
                    viewhideinputs('dateofexpedition_representative_group', 'Inactive', 'Active');
                    viewhideinputs('labelVehicle', 'Inactive', 'Active');
                    viewhideinputs('vehicle', 'Inactive', 'Active');
                    viewhideinputs('nextstep', 'Inactive', 'Active');

                    // adds
                    viewhideinputs('divIdentification', 'Active', 'Inactive');
                    viewhideinputs('divContractDocument', 'Active', 'Inactive');
                    viewhideinputs('divContractingName', 'Active', 'Inactive');
                    viewhideinputs('divExpeditionIdentificationcard', 'Active', 'Inactive');
                    viewhideinputs('divContractingDirection', 'Active', 'Inactive');
                    viewhideinputs('divContractingPhone', 'Active', 'Inactive');
                    viewhideinputs('fieldset1Buttons', 'Active', 'Inactive');
                    //
                    viewhideinputs('labelSchoolName', 'Active', 'Inactive');
                    viewhideinputs('school_name', 'Active', 'Inactive');
                    viewhideinputs('labelAddressSchool', 'Active', 'Inactive');
                    viewhideinputs('address_school', 'Active', 'Inactive');
                    viewhideinputs('labelSecurePolicy', 'Active', 'Inactive');
                    viewhideinputs('secure_policy', 'Active', 'Inactive');
                    viewhideinputs('labelIdentificationcardRepresentLegal', 'Active', 'Inactive');
                    viewhideinputs('identificationcard_represent_legal', 'Active', 'Inactive');
                    viewhideinputs('labelIdentificationLegalRepresentative', 'Active', 'Inactive');
                    viewhideinputs('identification_legal_representative', 'Active', 'Inactive');
                    viewhideinputs('labelLegalRepresentative', 'Active', 'Inactive');
                    viewhideinputs('legal_representative', 'Active', 'Inactive');
                    viewhideinputs('labelLegalRepresentativeExpeditionIdentificationcard', 'Active', 'Inactive');
                    viewhideinputs('legal_representative_expedition_identificationcard', 'Active', 'Inactive');
                    break;

                case '2':
                    // removes
                    viewhideinputs('labelSchoolName', 'Inactive', 'Active');
                    viewhideinputs('school_name', 'Inactive', 'Active');
                    viewhideinputs('labelAddressSchool', 'Inactive', 'Active');
                    viewhideinputs('address_school', 'Inactive', 'Active');
                    viewhideinputs('labelSecurePolicy', 'Inactive', 'Active');
                    viewhideinputs('secure_policy', 'Inactive', 'Active');
                    viewhideinputs('labelIdentificationRepresentativeGroup', 'Inactive', 'Active');
                    viewhideinputs('identification_representative_group', 'Inactive', 'Active');
                    viewhideinputs('labelIdentificationcardRepresentativeGroup', 'Inactive', 'Active');
                    viewhideinputs('identificationcard_representative_group', 'Inactive', 'Active');
                    viewhideinputs('labelGroupRepresentativeName', 'Inactive', 'Active');
                    viewhideinputs('group_representative_name', 'Inactive', 'Active');
                    viewhideinputs('labelDateofexpeditionRepresentativeGroup', 'Inactive', 'Active');
                    viewhideinputs('dateofexpedition_representative_group', 'Inactive', 'Active');
                    viewhideinputs('labelVehicle', 'Inactive', 'Active');
                    viewhideinputs('vehicle', 'Inactive', 'Active');
                    viewhideinputs('nextstep', 'Inactive', 'Active');

                    // adds
                    viewhideinputs('divIdentification', 'Active', 'Inactive');
                    viewhideinputs('divContractDocument', 'Active', 'Inactive');
                    viewhideinputs('divContractingName', 'Active', 'Inactive');
                    viewhideinputs('divExpeditionIdentificationcard', 'Active', 'Inactive');
                    viewhideinputs('divContractingDirection', 'Active', 'Inactive');
                    viewhideinputs('divContractingPhone', 'Active', 'Inactive');
                    viewhideinputs('fieldset1Buttons', 'Active', 'Inactive');
                    //
                    viewhideinputs('labelCooperationContract', 'Active', 'Inactive');
                    viewhideinputs('cooperation_contract', 'Active', 'Inactive');
                    viewhideinputs('labelIdentificationcardRepresentLegal', 'Active', 'Inactive');
                    viewhideinputs('identificationcard_represent_legal', 'Active', 'Inactive');
                    viewhideinputs('labelIdentificationLegalRepresentative', 'Active', 'Inactive');
                    viewhideinputs('identification_legal_representative', 'Active', 'Inactive');
                    viewhideinputs('labelLegalRepresentative', 'Active', 'Inactive');
                    viewhideinputs('legal_representative', 'Active', 'Inactive');
                    viewhideinputs('labelLegalRepresentativeExpeditionIdentificationcard', 'Active', 'Inactive');
                    viewhideinputs('legal_representative_expedition_identificationcard', 'Active', 'Inactive')
                    break;

                case '3':
                    // removes
                    viewhideinputs('labelSchoolName', 'Inactive', 'Active');
                    viewhideinputs('school_name', 'Inactive', 'Active');
                    viewhideinputs('labelAddressSchool', 'Inactive', 'Active');
                    viewhideinputs('address_school', 'Inactive', 'Active');
                    viewhideinputs('labelSecurePolicy', 'Inactive', 'Active');
                    viewhideinputs('secure_policy', 'Inactive', 'Active');
                    viewhideinputs('labelIdentificationRepresentativeGroup', 'Inactive', 'Active');
                    viewhideinputs('identification_representative_group', 'Inactive', 'Active');
                    viewhideinputs('labelIdentificationcardRepresentativeGroup', 'Inactive', 'Active');
                    viewhideinputs('identificationcard_representative_group', 'Inactive', 'Active');
                    viewhideinputs('labelGroupRepresentativeName', 'Inactive', 'Active');
                    viewhideinputs('group_representative_name', 'Inactive', 'Active');
                    viewhideinputs('labelDateofexpeditionRepresentativeGroup', 'Inactive', 'Active');
                    viewhideinputs('dateofexpedition_representative_group', 'Inactive', 'Active');
                    viewhideinputs('labelVehicle', 'Inactive', 'Active');
                    viewhideinputs('vehicle', 'Inactive', 'Active');
                    viewhideinputs('nextstep', 'Inactive', 'Active');

                    // adds
                    viewhideinputs('divIdentification', 'Active', 'Inactive');
                    viewhideinputs('divContractDocument', 'Active', 'Inactive');
                    viewhideinputs('divContractingName', 'Active', 'Inactive');
                    viewhideinputs('divExpeditionIdentificationcard', 'Active', 'Inactive');
                    viewhideinputs('divContractingDirection', 'Active', 'Inactive');
                    viewhideinputs('divContractingPhone', 'Active', 'Inactive');
                    viewhideinputs('fieldset1Buttons', 'Active', 'Inactive');
                    //
                    viewhideinputs('labelCooperationContract', 'Active', 'Inactive');
                    viewhideinputs('cooperation_contract', 'Active', 'Inactive');
                    viewhideinputs('labelIdentificationcardRepresentLegal', 'Active', 'Inactive');
                    viewhideinputs('identificationcard_represent_legal', 'Active', 'Inactive');
                    viewhideinputs('labelIdentificationLegalRepresentative', 'Active', 'Inactive');
                    viewhideinputs('identification_legal_representative', 'Active', 'Inactive');
                    viewhideinputs('labelLegalRepresentative', 'Active', 'Inactive');
                    viewhideinputs('legal_representative', 'Active', 'Inactive');
                    viewhideinputs('labelLegalRepresentativeExpeditionIdentificationcard', 'Active', 'Inactive');
                    viewhideinputs('legal_representative_expedition_identificationcard', 'Active', 'Inactive')
                    break;

                case '4':
                    // removes
                    viewhideinputs('labelCooperationContract', 'Inactive', 'Active');
                    viewhideinputs('cooperation_contract', 'Inactive', 'Active');
                    viewhideinputs('labelSchoolName', 'Inactive', 'Active');
                    viewhideinputs('school_name', 'Inactive', 'Active');
                    viewhideinputs('labelAddressSchool', 'Inactive', 'Active');
                    viewhideinputs('address_school', 'Inactive', 'Active');
                    viewhideinputs('labelSecurePolicy', 'Inactive', 'Active');
                    viewhideinputs('secure_policy', 'Inactive', 'Active');
                    viewhideinputs('labelIdentificationcardRepresentLegal', 'Inactive', 'Active');
                    viewhideinputs('identificationcard_represent_legal', 'Inactive', 'Active');
                    viewhideinputs('labelIdentificationLegalRepresentative', 'Inactive', 'Active');
                    viewhideinputs('identification_legal_representative', 'Inactive', 'Active');
                    viewhideinputs('labelLegalRepresentative', 'Inactive', 'Active');
                    viewhideinputs('legal_representative', 'Inactive', 'Active');
                    viewhideinputs('labelLegalRepresentativeExpeditionIdentificationcard', 'Inactive', 'Active');
                    viewhideinputs('legal_representative_expedition_identificationcard', 'Inactive', 'Active')

                    // adds
                    viewhideinputs('divIdentification', 'Active', 'Inactive');
                    viewhideinputs('divContractDocument', 'Active', 'Inactive');
                    viewhideinputs('divContractingName', 'Active', 'Inactive');
                    viewhideinputs('divExpeditionIdentificationcard', 'Active', 'Inactive');
                    viewhideinputs('divContractingDirection', 'Active', 'Inactive');
                    viewhideinputs('divContractingPhone', 'Active', 'Inactive');

                    viewhideinputs('fieldset1Buttons', 'Active', 'Inactive');
                    viewhideinputs('labelVehicle', 'Active', 'Inactive');
                    viewhideinputs('vehicle', 'Active', 'Inactive');
                    viewhideinputs('labelIdentificationRepresentativeGroup', 'Active', 'Inactive');
                    viewhideinputs('identification_representative_group', 'Active', 'Inactive');
                    viewhideinputs('labelIdentificationcardRepresentativeGroup', 'Active', 'Inactive');
                    viewhideinputs('identificationcard_representative_group', 'Active', 'Inactive');
                    viewhideinputs('labelGroupRepresentativeName', 'Active', 'Inactive');
                    viewhideinputs('group_representative_name', 'Active', 'Inactive');
                    viewhideinputs('labelDateofexpeditionRepresentativeGroup', 'Active', 'Inactive');
                    viewhideinputs('dateofexpedition_representative_group', 'Active', 'Inactive');
                    viewhideinputs('nextstep', 'Active', 'Inactive');
                    //
                    break;


                case '5':
                    // removes
                    viewhideinputs('labelSchoolName', 'Inactive', 'Active');
                    viewhideinputs('school_name', 'Inactive', 'Active');
                    viewhideinputs('labelAddressSchool', 'Inactive', 'Active');
                    viewhideinputs('address_school', 'Inactive', 'Active');
                    viewhideinputs('labelSecurePolicy', 'Inactive', 'Active');
                    viewhideinputs('secure_policy', 'Inactive', 'Active');
                    viewhideinputs('labelIdentificationRepresentativeGroup', 'Inactive', 'Active');
                    viewhideinputs('identification_representative_group', 'Inactive', 'Active');
                    viewhideinputs('labelIdentificationcardRepresentativeGroup', 'Inactive', 'Active');
                    viewhideinputs('identificationcard_representative_group', 'Inactive', 'Active');
                    viewhideinputs('labelGroupRepresentativeName', 'Inactive', 'Active');
                    viewhideinputs('group_representative_name', 'Inactive', 'Active');
                    viewhideinputs('labelDateofexpeditionRepresentativeGroup', 'Inactive', 'Active');
                    viewhideinputs('dateofexpedition_representative_group', 'Inactive', 'Active');
                    viewhideinputs('labelVehicle', 'Inactive', 'Active');
                    viewhideinputs('vehicle', 'Inactive', 'Active');
                    viewhideinputs('nextstep', 'Inactive', 'Active');

                    // adds
                    viewhideinputs('divIdentification', 'Active', 'Inactive');
                    viewhideinputs('divContractDocument', 'Active', 'Inactive');
                    viewhideinputs('divContractingName', 'Active', 'Inactive');
                    viewhideinputs('divExpeditionIdentificationcard', 'Active', 'Inactive');
                    viewhideinputs('divContractingDirection', 'Active', 'Inactive');
                    viewhideinputs('divContractingPhone', 'Active', 'Inactive');
                    viewhideinputs('fieldset1Buttons', 'Active', 'Inactive');
                    //
                    viewhideinputs('labelCooperationContract', 'Active', 'Inactive');
                    viewhideinputs('cooperation_contract', 'Active', 'Inactive');
                    viewhideinputs('labelIdentificationcardRepresentLegal', 'Active', 'Inactive');
                    viewhideinputs('identificationcard_represent_legal', 'Active', 'Inactive');
                    viewhideinputs('labelIdentificationLegalRepresentative', 'Active', 'Inactive');
                    viewhideinputs('identification_legal_representative', 'Active', 'Inactive');
                    viewhideinputs('labelLegalRepresentative', 'Active', 'Inactive');
                    viewhideinputs('legal_representative', 'Active', 'Inactive');
                    viewhideinputs('labelLegalRepresentativeExpeditionIdentificationcard', 'Active', 'Inactive');
                    viewhideinputs('legal_representative_expedition_identificationcard', 'Active', 'Inactive')
                    break;

                default:
                    break;
            }

        }


        function viewhideinputs(id, adhere, stirring) {

            document.getElementById(id).classList.remove(stirring);
            document.getElementById(id).classList.add(adhere);
        }

        function prueba() {
            console.log('si existe');
        }

        //fin scritp de formulario paso a paso
    </script>
@endsection
