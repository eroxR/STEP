<div>

    <div class="py-12 mb-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="justify-center flex">
                {{-- class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-gray-50-s dark:bg-gray-800 dark:text-white" --}}
                <h1 class="text-black dark:text-white text-4xl rounded-lg border-b-yellow-800 p-1">{{ __('Manage Permissions') }}
                </h1>
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
                    {{ __('create new permit') }}
                </button>
            </div>

            <div class="w-full overflow-x-auto">
                @if ($permissions->count())
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                {{-- <th class="cursor-pointer px-4 py-3" wire:click="order('id')">

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
                                <th class="cursor-pointer px-4 py-3" wire:click="order('permit_number')">

                                    {{ __('permit number') }}

                                    @if ($sort == 'permit_number')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-4 py-3" wire:click="order('contract_number')">

                                    {{ __('contract number') }}

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
                                <th class="cursor-pointer px-4 py-3" wire:click="order('description_typeContract')">

                                    {{ __('description typeContract') }}

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
                                <th class="cursor-pointer px-4 py-3" wire:click="order('permit_start_ate')">

                                    {{ __('permit start date') }}

                                    @if ($sort == 'permit_start_ate')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-4 py-3" wire:click="order('permit_end_date')">

                                    {{ __('permit end date') }}

                                    @if ($sort == 'permit_end_date')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-4 py-3" wire:click="order('fuec_state')">

                                    {{ __('fuec state') }}

                                    @if ($sort == 'fuec_state')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt "></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt "></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort "></i>
                                    @endif

                                </th>
                                <th class="px-4 py-3">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                            @foreach ($permissions as $permit)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    {{-- <td class="px-4 py-3 text-sm">
                                        {{ $permit->id }}
                                    </td> --}}
                                    <td class="px-4 py-3 text-sm">
                                        {{ $permit->permit_number }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $permit->contract_number }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $permit->description_typeContract }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $permit->permit_start_date }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $permit->permit_end_date }}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        @switch($permit->fuec_state)
                                            @case(0)
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                                                    INICIAL
                                                </span>
                                            @break

                                            @case(1)
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100">
                                                    EN CURSO
                                                </span>
                                            @break

                                            @case(2)
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100">
                                                    PENDIENTE
                                                </span>
                                            @break

                                            @case(3)
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-sky-700 bg-sky-300 rounded-full dark:bg-sky-700 dark:text-sky-100">
                                                    FINALIZADO
                                                </span>
                                            @break

                                            @case(4)
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                                    CANCELADO
                                                </span>
                                            @break

                                            @default
                                        @endswitch
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <button id="edit" onclick="edit({{ $permit }})"
                                                class="inline-flex items-center justify-center  bg-yellow-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-400 focus:outline-none focus:bg-yellow-700 focus:ring focus:ring-red-200 active:bg-yellow-700 disabled:opacity-25 transition"
                                                {{-- flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" --}} aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button onclick="deletes({{ $permit->id }})"
                                                class="inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"
                                                {{-- flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" --}} aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                            <button onclick="view({{ $permit->id }})"
                                                class="inline-flex items-center justify-center  bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"
                                                {{-- flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" --}} aria-label="view">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
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
                        No existe FUEC que coincidan con lo que estas buscando...
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
        class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
        wire:ignore.self>
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
                <h1 class="text-black dark:text-white text-4xl1">{{ __('Creating new permit') }}<span id="typed2" class="typed2">.</span>
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
                            <div class="f1-progress-line" data-now-value="33" data-number-of-steps="3"
                                style="width: 34%;"></div>
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

                                    <label class="text-gray-700 dark:text-gray-400">Selecciona el tipo de contrato</label>

                                    <select wire:model="typeContract" name="typeContract" id="typeContract"
                                        onchange="contractType()"
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                                        <option value="0">Tipo de contrato</option>
                                        @foreach ($typeContracts as $id => $typeContract)
                                            <option value="{{ $id }}">
                                                {{ $typeContract }}</option>
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

                                <div class="w-full Inactive" id="divchangeDate">
                                    <label
                                        class="ml-26 px-2 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"
                                        id=""> {{ __('You have changed your contract, remember to check the dates') }}
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
                                        type="button" onclick="enable('select2','chooseDrivers')">{{ __('choose drivers') }}
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

                                    <label class="text-gray-700 dark:text-gray-400" id="labelCars">Selecciona los Vehiculos
                                    </label>
                                    <button id="chooseVehicles"
                                        class="Inactive ml-1-5 px-2 py-1 font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white"
                                        type="button" onclick="enable('car','chooseVehicles')">{{ __('choose vehicles') }}
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
                    wire:click="store" onclick="restart()" x-on:click="closeModal">
                    {{ __('Generate Permit') }}
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
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('permit start date') }}</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="fecha inicio permiso" type="date"
                                                name="permit_start_date" wire:model="editPermit.permit_start_date" />
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">{{ __('permit end date') }}</label>

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
                                                <div
                                                    class="options-container-drive border-ourple-50-s dark:bg-gray-800">
                                                    @foreach ($drivers as $driver)
                                                        <div class="option-drive dark:bg-gray-800 dark:text-white">
                                                            <input type="checkbox" name="driverConduc" id=""
                                                                wire:model.defer="editDrives"
                                                                value="{{ $driver->id }}">
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
                                                <div
                                                    class="options-container-vehicle border-ourple-50-s dark:bg-gray-800">
                                                    @foreach ($vehicles as $vehicle)
                                                        <div class="option-vehicle dark:bg-gray-800 dark:text-white">
                                                            <input type="checkbox" name="carVheicle" id=""
                                                                wire:model.defer="editCars"
                                                                value="{{ $vehicle->id }}">
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

    <!--end Modal edit -->

    {{-- end componentes de modal --}}



</div>

@section('scripts')
    <script>
        var limitcars = 0;

        // Livewire.on('prueba', () => {
        //     swal.fire('prueba', 'esto termina la función en php', 'error')
        // })

        // abriendo modal para editar
        Livewire.on('openModalEdit', () => {
            viewhideinputs('modalEdit', 'block', 'hidden');


            let selectedAlldrive = document.querySelectorAll(".selected-drive");

            selectedAlldrive.forEach((selected) => {
                let optionsContainerdrive = selected.previousElementSibling;

                selected.addEventListener("click", () => {
                    optionsContainerdrive.classList.toggle('active');
                });

            });

            let selectedAllvehicle = document.querySelectorAll(".selected-vehicle");

            selectedAllvehicle.forEach((selected) => {
                let optionsContainervehicle = selected.previousElementSibling;

                selected.addEventListener("click", () => {
                    optionsContainervehicle.classList.toggle('active');
                });

            });

        })

        // enviando los datos para que los reciba la modal editar
        function edit(id) {

            let timerInterval
            swal.fire({
                title: 'loading...',
                html: 'Loading system information into <b></b> milliseconds.', //Cargando la información del sistema en
                timer: 2000,
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

            let selectedAlldrive = document.querySelectorAll(".selected-drive");

            selectedAlldrive.forEach((selected) => {
                let optionsContainerdrive = selected.previousElementSibling;

                selected.addEventListener("click", () => {
                    optionsContainerdrive.classList.toggle('active');
                });

            });

            let selectedAllvehicle = document.querySelectorAll(".selected-vehicle");

            selectedAllvehicle.forEach((selected) => {
                let optionsContainervehicle = selected.previousElementSibling;

                selected.addEventListener("click", () => {
                    optionsContainervehicle.classList.toggle('active');
                });

            });

            document.getElementById('modalEdit').classList.add('hidden');
        }

        function deletes(id) {

            // console.log(id);

            swal.fire({
                title: 'sure you want to delete?',
                // seguro que quieres eliminar?
                text: "If you delete this record, all the information and documents of this permit will be deleted.",
                // si eliminas este registro se borrara toda la información y documentos de este permiso
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

        function view(id) {
            window.open('http://127.0.0.1:8000/pdfs/pdf-fuec/' + id, '_blank')
        }

        Livewire.on('crud', (contractnumber, process, contractType, id, permit_number) => {

            var process = process.process;
            var contractnumber = contractnumber.contractnumber;
            var contractType = contractType.contractType;
            var id = id.id;
            var permit_number = permit_number.permit_number;
            var main = '';
            var message = '';

            if (process == 1) {

                main = 'Permit number ' + permit_number + ' of contract number ' + contractnumber + ' type ' +
                    contractType + ' has been successfully generated';

                // Se ha generado el permiso numero xxx del contrato  numero xxx tipo xxx sactisfactoriamente

                swal.fire({
                    title: 'you want to generate pdf?',
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: 'Generate PDF',
                    denyButtonText: ``,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {

                        window.open('http://127.0.0.1:8000/pdfs/pdf-fuec/' + id, '_blank')
                        swal.fire(main, message, 'success')
                    } else if (result.isDenied) {

                    } else {
                        swal.fire(main, message, 'success')
                    }
                })

            } else if (process == 2) {

                message = 'Permit number ' + permit_number + ' of contract number ' + contractnumber +
                    ' type ' + contractType + ' has been successfully updated';

                // Se ha actualizado el permiso numero xxx del contrato numero xxx tipo xxx sactisfactoriamente

                swal.fire(main, message, 'success')

            } else if (process == 3) {

                message = 'Permit number ' + permit_number + ' of contract number ' + contractnumber +
                    ' type ' + contractType + ' has been removed successfully';

                // Se ha eliminado el permiso numero xxx del contrato numero xxx tipo xxx sactisfactoriamente

                swal.fire(main, message, 'success')
            }

        })


        Livewire.on('assignLimit', (limitcar) => {

            limitcars = limitcar.limitcar;

            console.log(limitcars);

            if (limitcars > 1) {
                single = ' conductores y vehiculos';
            } else {
                single = ' conductor y un vehiculo';
            }

            var dateStart = document.getElementById('fecha_inicio_permiso').value;
            var dateEnd = document.getElementById('permit_end_date').value;

            if (dateStart != "" || dateEnd != "") {
                viewhideinputs('divchangeDate', 'Active', 'Inactive');
            }

            message = 'recuerda solo puedes escoger ' + limitcars + single;

            swal.fire({
                position: 'center',
                icon: 'warning',
                title: message,
                showConfirmButton: false,
                timer: 1500
            });

            changeContract();

        });

        function contractType() {
            var id = 'labelPermitStartDate';
            viewhideinputs('fieldset1Buttons', 'Inactive', 'Active');
            viewhideinputs('btnStore', 'Inactive', 'Active');
            // limpiar();
            for (var i = 0; i <= 3; i++) {
                // console.log('posición' + [i]);
                viewhideinputs(id, 'Inactive', 'Active');

                if (id == 'labelPermitStartDate') {
                    id = 'permit_start_date';
                } else if (id == 'permit_start_date') {
                    id = 'labelPermitEndDate';
                } else if (id == 'labelPermitEndDate') {
                    id = 'permit_end_date';
                }
            }
        }

        function changeContract2() {

            var id = 'labelPermitStartDate';
            for (var i = 1; i <= 4; i++) {
                // console.log('posición' + [i]);
                viewhideinputs(id, 'Inactive', 'Active');

                if (id == 'labelPermitStartDate') {
                    id = 'permit_start_date';
                } else if (id == 'permit_start_date') {
                    id = 'labelPermitEndDate';
                } else if (id == 'labelPermitEndDate') {
                    id = 'permit_end_date';
                }
            }
            // $('#permit_start_date').datetimepicker('reset');


            Livewire.emit('limitOfCars');
        }

        function changeContract() {
            // Livewire.emit('limitOfCars');
            var numContract = document.getElementById('contract').value;
            enable('select2', 'chooseDrivers');
            enable('car', 'chooseVehicles');
            if (numContract != 0 || numContract != "") {
                var id = 'labelPermitStartDate';
                for (var i = 1; i <= 4; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Active', 'Inactive');

                    if (id == 'labelPermitStartDate') {
                        id = 'permit_start_date';
                    } else if (id == 'permit_start_date') {
                        id = 'labelPermitEndDate';
                    } else if (id == 'labelPermitEndDate') {
                        id = 'permit_end_date';
                    }
                }

            }


        }

        function changeDate() {
            var dateStart = document.getElementById('permit_start_date').value;
            var dateEnd = document.getElementById('permit_end_date').value;

            if (dateStart != "" && dateEnd != "") {
                viewhideinputs('fieldset1Buttons', 'Active', 'Inactive');
            }
            console.log(limitcars);
            // console.log("🚀 ~ file: manage-permissions.blade.php ~ line 599 ~ limitcars", limitcars)
            // console.log("🚀 ~ file: manage-permissions.blade.php ~ line 717 ~ changeDate ~ limitcars", limitcars)
        }


        function selectDriving() {
            var driveSelect = document.getElementById('driving').value;

            if (driveSelect != "") {
                viewhideinputs('next2', 'Active', 'Inactive');
            } else {
                viewhideinputs('next2', 'Inactive', 'Active');
            }

        };

        function selectCars() {
            var vehicleSelect = document.getElementById('cars').value;

            if (vehicleSelect != "") {
                viewhideinputs('btnStore', 'Active', 'Inactive');
            } else {
                viewhideinputs('btnStore', 'Inactive', 'Active');
            }

        };

        $('#permit_start_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        $('#permit_end_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });


        function fechasSet(id) {

            $('#' + id).on('change', function(e) {
                @this.set(id, e.target.value);
            });
        }

        $('.select2').select2({}).on('change', function() {
            console.log($(this).val());
            @this.set('driving', $(this).val());

            if ($(this).val().length == limitcars) {
                swal.fire(
                    '',
                    'ya no puedes escoger mas Conductores',
                    'warning'
                )
                $(".select2").prop("disabled", true);
                document.getElementById('chooseDrivers').classList.remove('Inactive');
                save();
            }

        });


        $('.car').select2({}).on('change', function() {
            // console.log($(this).val())
            @this.set('cars', $(this).val());

            if ($(this).val().length == limitcars) {
                swal.fire(
                    '',
                    'ya no puedes escoger mas Vehiculos',
                    'warning'
                )
                $(".car").prop("disabled", true);
                document.getElementById('chooseVehicles').classList.remove('Inactive');
                save();
            }

        });

        function enable(id, botom) {

            // if ($("."+id).val().length >= 2) {
            $("." + id).val(null).trigger('change');
            // }
            // $("#select2").select2({disabled:false});
            $("." + id).prop("disabled", false);
            viewhideinputs(botom, 'Inactive', 'Active');
            viewhideinputs('btnStore', 'Inactive', 'Active');
        }

        function save() {
            if ($(".select2").val().length == limitcars && $(".car").val().length == limitcars) {
                // document.getElementById('chooseDrivers').classList.remove('Inactive');
                document.getElementById('btnStore').classList.remove('Inactive');
            } else {
                viewhideinputs('btnStore', 'Inactive', 'Active');
            }
        }

        function limpiar() {

            limitcars = 100;

            enable('select2', 'chooseDrivers');
            enable('car', 'chooseVehicles');
        }

        Livewire.on('Nopermit', () => {
            swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'The contract you entered does not exist!',
                footer: '<a href="{{ route('manage-contracts') }}">You want to create that contract?</a>'
            });
            limpiar();
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
                var current_active_step = $(this).parents('.f1').find('.f1-step-fuec.active');
                // var icon_active_step = $(this).parents('.f1').find('.fa-stack-2x.-ml-1.flicker');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                // fields validation
                parent_fieldset.find(
                    'input[type="text"], input[type="password"], input[type="number"], input[type="tel"],input[type="email"],input[type="date"]'
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
                        viewhideinputs('divchangeDate', 'Inactive', 'Active');
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
                var current_active_step = $(this).parents('.f1').find('.f1-step-fuec.active');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                $(this).parents('fieldset').fadeOut(400, function() {
                    // change icons
                    current_active_step.removeClass('active').prev().removeClass('activated')
                        .addClass('active');
                    parpadeo(false);
                    // lastsaved();
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
                // var Finalize = true;
                // fields validation
                parent_fieldset.find(
                    'input[type="text"], input[type="password"], select, input[type="number"], input[type="tel"],input[type="email"],input[type="date"]'
                ).each(function() {
                    if ($(this).hasClass('Inactive')) {
                        // console.log('no se bloquea');
                    } else if ($(this).val() == "" || $(this).val() == 0) {
                        $(this).addClass('input-error');
                        // Finalize = false;
                    } else {
                        $(this).removeClass('input-error');
                    }
                });

            });

            function parpadeo(step) {
                if (step == true) {
                    stepinfinite = stepinfinite + 1;

                    if (stepinfinite >= 3) {
                        stepinfinite = 3;
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
                    if (stepinfinite == 3) {
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

        });

        function restart() {
            // navigation steps / progress steps
            var current_active_step_s = $('.f1').find('.f1-step-fuec');
            var current_active_step = $('.f1').find('.f1-step-fuec.active');
            var current_active_step_a = $('.f1').find('.f1-step-fuec.activated');
            var progress_line = $('.f1').find('.f1-progress-line');
            // console.log(current_active_step_a);
            $('.f1 fieldset').fadeOut(400, function() {
                // change icons
                console.log('prueba');
                // parpadeo(false);
                // lastsaved();
                // progress bar
                // documentract();
                document.getElementById('typeContract').value = 0;
                contractType();
                progress_line.attr('style', 'width: ' + 34 + '%;').data('now-value', 33);

                current_active_step.removeClass('active');
                current_active_step_a.removeClass('activated');
                var contador;
                if (stepinfinite < 3) {
                    contador = stepinfinite;
                } else {
                    contador = 3;
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

                $(this).prev().prev().fadeIn();
                // scroll window to beginning of the form
                scroll_to_class($('.f1'), 20);
                current_active_step_s.first().addClass('active');
            });

            document.getElementById('btnStore').classList.remove('Active');
            document.getElementById('btnStore').classList.add('Inactive');
            // document.getElementById('btnFinalize').classList.remove('Inactive');
            // document.getElementById('btnFinalize').classList.add('Active');

            // console.log('si termina en la funcion prueba');
        }

        function viewhideinputs(id, adhere, stirring) {

            document.getElementById(id).classList.remove(stirring);
            document.getElementById(id).classList.add(adhere);
        }
        //fin scritp de formulario paso a paso
    </script>
@endsection
