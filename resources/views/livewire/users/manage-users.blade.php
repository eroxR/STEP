<div>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="justify-center flex">
                <h1 class="text-black dark:text-white text-4xl rounded-lg border-b-acuamarine-800 p-1">
                    {{ __('Manage Users') }}</h1>
            </div>
        </div>
        <div class="px-4 pb-3 mb-2 mt-1 ml-2 flex items-center border-b-fuchsia-800 border-b">
            {{-- <input
                class="flex-1 mr-4 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                type="text" placeholder="Escribe una consulta sobre la tabla" wire:model="search"> --}}

            {{-- <button @click="openModal"
                class="px-2 py-1 font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white">
                {{ __('create new user') }}
            </button> --}}
        </div>
        <div class="overflow-hidden rounded-lg shadow-xs mt-4">


            <div class="w-full overflow-x-auto" wire:ignore>

                <table id="example" class="stripe dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="pl-4 py-2" data-priority="0">{{ __('Actions') }}</th>
                            <th class="pl-4 py-2" data-priority="1">ID</th>
                            <th class="pl-4 py-2" data-priority="2">{{ __('Names') }}</th>
                            <th class="pl-4 py-2" data-priority="3">{{ __('identification') }}</th>
                            <th class="pl-4 py-2" data-priority="4">{{ __('identificationcard') }}</th>
                            <th class="pl-4 py-2" data-priority="5">{{ __('usertype') }}</th>
                            <th class="pl-4 py-2" data-priority="6">{{ __('charge') }}</th>
                            <th class="pl-4 py-2" data-priority="7">{{ __('user state') }}</th>
                            <th class="pl-4 py-2" data-priority="8">{{ __('user entry date') }}</th>
                            <th class="pl-4 py-2" data-priority="9">{{ __('email') }}</th>
                            <th class="pl-4 py-2" data-priority="10">{{ __('username') }}</th>
                            <th class="pl-4 py-2" data-priority="11">{{ __('age') }}</th>
                            <th class="pl-4 py-2" data-priority="12">{{ __('type_sex') }}</th>
                            <th class="pl-4 py-2" data-priority="13">{{ __('country') }}</th>
                            <th class="pl-4 py-2" data-priority="14">{{ __('Department') }}</th>
                            <th class="pl-4 py-2" data-priority="15">{{ __('city') }}</th>
                            <th class="pl-4 py-2" data-priority="16">{{ __('address') }}</th>
                            <th class="pl-4 py-2" data-priority="17">{{ __('phone') }}</th>
                            <th class="pl-4 py-2" data-priority="18">{{ __('phone cellular') }}</th>
                            <th class="pl-4 py-2" data-priority="19">{{ __('eps') }}</th>
                            <th class="pl-4 py-2" data-priority="21">{{ __('date eps') }}</th>
                            <th class="pl-4 py-2" data-priority="22">{{ __('blood type') }}</th>
                            <th class="pl-4 py-2" data-priority="23">{{ __('pension') }}</th>
                            <th class="pl-4 py-2" data-priority="25">{{ __('date pension') }}</th>
                            <th class="pl-4 py-2" data-priority="26">{{ __('layoffs') }}</th>
                            <th class="pl-4 py-2" data-priority="28">{{ __('date layoffs') }}</th>
                            <th class="pl-4 py-2" data-priority="29">{{ __('arl') }}</th>
                            <th class="pl-4 py-2" data-priority="31">{{ __('arl date') }}</th>
                            <th class="pl-4 py-2" data-priority="32">{{ __('compensationbox') }}</th>
                            <th class="pl-4 py-2" data-priority="34">{{ __('date compensationbox') }}</th>
                            <th class="pl-4 py-2" data-priority="35">{{ __('date withdrawal user') }}</th>
                            <th class="pl-4 py-2" data-priority="36">{{ __('civil status') }}</th>
                            <th class="pl-4 py-2" data-priority="37">{{ __('family document type') }}</th>
                            <th class="pl-4 py-2" data-priority="38">{{ __('family names') }}</th>
                            <th class="pl-4 py-2" data-priority="39">{{ __('relationship') }}</th>
                            <th class="pl-4 py-2" data-priority="40">{{ __('family address') }}</th>
                            <th class="pl-4 py-2" data-priority="41">{{ __('family phone') }}</th>
                            <th class="pl-4 py-2" data-priority="42">{{ __('family phone cellular') }}</th>
                            <th class="pl-4 py-2" data-priority="43">{{ __('city birth') }}</th>
                            <th class="pl-4 py-2" data-priority="44">{{ __('place expedition identificationcard') }}
                            </th>
                            <th class="pl-4 py-2" data-priority="45">{{ __('identificationcard family') }}</th>
                            <th class="pl-4 py-2" data-priority="46">{{ __('bonding type') }}</th>
                            <th class="pl-4 py-2" data-priority="47">{{ __('weight') }}</th>
                            <th class="pl-4 py-2" data-priority="48">{{ __('pant size') }}</th>
                            <th class="pl-4 py-2" data-priority="49">{{ __('shirt size') }}</th>
                            <th class="pl-4 py-2" data-priority="50">{{ __('shoe size') }}</th>
                            <th class="pl-4 py-2" data-priority="51">{{ __('education level') }}</th>
                            <th class="pl-4 py-2" data-priority="52">{{ __('educational institution') }}</th>
                            <th class="pl-4 py-2" data-priority="53">{{ __('last year') }}</th>
                            <th class="pl-4 py-2" data-priority="54">{{ __('study end date') }}</th>
                            <th class="pl-4 py-2" data-priority="55">{{ __('obtained title') }}</th>
                            <th class="pl-4 py-2" data-priority="56">{{ __('last company name') }}</th>
                            <th class="pl-4 py-2" data-priority="57">{{ __('charges last company') }}</th>
                            <th class="pl-4 py-2" data-priority="58">{{ __('start date last company') }}</th>
                            <th class="pl-4 py-2" data-priority="59">{{ __('date end last company') }}</th>
                            <th class="pl-4 py-2" data-priority="60">{{ __('functions performed') }}</th>
                            <th class="pl-4 py-2" data-priority="61">{{ __('company name provider') }}</th>
                            <th class="pl-4 py-2" data-priority="62">{{ __('commercial reason supplier') }}</th>
                            <th class="pl-4 py-2" data-priority="63">{{ __('supplier web page') }}</th>
                            <th class="pl-4 py-2" data-priority="64">{{ __('economic activity') }}</th>
                            <th class="pl-4 py-2" data-priority="65">{{ __('products and services') }}</th>
                            <th class="pl-4 py-2" data-priority="66">{{ __('salary') }}</th>
                            <th class="pl-4 py-2" data-priority="67">{{ __('aid transport') }}</th>
                            <th class="pl-4 py-2" data-priority="68">{{ __('work area') }}</th>

                        </tr>
                    </thead>
                    <tbody {{-- class="dark:bg-gray-800 dark:text-white" --}}>
                    </tbody>

                </table>

                {{-- @if ($users->count())
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="cursor-pointer pl-4 py-2" wire:click="order('id')">

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

                                </th>
                                <th class="cursor-pointer px-3 py-2" wire:click="order('firstname')">

                                    {{ __('Name') }}

                                    @if ($sort == 'firstname')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort"></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-3 py-2" wire:click="order('identificationcard')">

                                    {{ __('identificationcard') }}

                                    @if ($sort == 'identificationcard')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort"></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-3 py-2" wire:click="order('description_usertype')">

                                    {{ __('usertype') }}

                                    @if ($sort == 'description_usertype')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort"></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer px-3 py-2" wire:click="order('user_state')">

                                    {{ __('user state') }}

                                    @if ($sort == 'user_state')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort"></i>
                                    @endif


                                </th>
                                <th class="cursor-pointer px-3 py-2" wire:click="order('user_entry_date')">

                                    {{ __('user entry date') }}

                                    @if ($sort == 'user_entry_date')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort"></i>
                                    @endif


                                </th>
                                <th class="cursor-pointer px-3 py-2" wire:click="order('username')">

                                    {{ __('username') }}

                                    @if ($sort == 'username')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort"></i>
                                    @endif


                                </th>
                                <th class="cursor-pointer px-3 py-2" wire:click="order('email')">

                                    {{ __('email') }}

                                    @if ($sort == 'email')

                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort"></i>
                                    @endif


                                </th>
                                <th class="px-3 py-2">

                                    {{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                            @foreach ($users as $user)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-2 py-1 text-sm">
                                        {{ $user->id }}
                                    </td>
                                    <td class="px-2 py-1">
                                        <div class="flex items-center text-sm">
                                            <div class="relative  w-8 h-8 mr-3 rounded-full md:block">
                                                @if ($user->profile_photo_path != '')
                                                    <img src="{{ asset($user->profile_photo_path) }}" alt=""
                                                        class="object-cover w-full h-full rounded-full" loading="lazy">
                                                @else
                                                    <img src="{{ asset('img/l_logo_step.png') }}" alt=""
                                                        class="object-cover w-full h-full rounded-full" loading="lazy">
                                                @endif
                                                <div class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true">
                                                </div>
                                            </div>
                                            <div>
                                                @if ($user->usertype == 3)
                                                    <p class="font-semibold">{{ $user->supplier_name }}</p>
                                                @else
                                                    <p class="font-semibold">{{ $user->firstname }}</p>
                                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                                        {{ $user->lastname }}
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-2 py-1 text-sm">

                                        @if ($user->usertype == 3)
                                            {{ $user->nit }}
                                        @else
                                            {{ $user->identificationcard }}
                                        @endif

                                    </td>
                                    <td class="px-2 py-1 text-sm">
                                        {{ $user->description_usertype }}
                                    </td>
                                    <td class="px-2 py-1 text-xs">
                                        @if ($user->user_state == '1')
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                {{ __('ACTIVE') }}
                                            </span>
                                        @else
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                                {{ __('INACTIVE') }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-2 py-1 text-sm">
                                        {{ $user->user_entry_date }}
                                    </td>
                                    <td class="px-2 py-1 text-sm">
                                        {{ $user->user_entry_date }}
                                    </td>
                                    <td class="px-2 py-1 text-sm">
                                        {{ $user->user_entry_date }}
                                    </td>
                                    <td class="px-2 py-1 text-sm">
                                        {{ $user->user_entry_date }}
                                    </td>
                                    <td class="px-2 py-1 text-sm">
                                        {{ $user->user_entry_date }}
                                    </td>
                                    <td class="px-2 py-1 text-sm">
                                        {{ $user->user_entry_date }}
                                    </td>
                                    <td class="px-2 py-1 text-sm">
                                        {{ $user->user_entry_date }}
                                    </td>
                                    <td class="px-2 py-1 text-sm">
                                        {{ $user->username }}
                                    </td>
                                    <td class="px-2 py-1 text-sm">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-2 py-1">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <button id="edit" onclick="edit({{ $user }})"
                                                class="inline-flex items-center justify-center  bg-yellow-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-400 focus:outline-none focus:bg-yellow-700 focus:ring focus:ring-red-200 active:bg-yellow-700 readonly:opacity-25 transition"
                                                 aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button onclick="deletes({{ $user->id }})"
                                                class="inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 readonly:opacity-25 transition"
                                                aria-label="Delete">
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
                        No existe Usuarios que coincidan con lo que estas buscando...
                    </div>
                @endif --}}
            </div>
            {{-- <div
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
            </div> --}}
        </div>

    </div>

    {{-- componentes de modal --}}

    <!--Modal create -->

    @include('livewire.users.modalUsers-create')

    <!--end Modal create -->


    <!-- Modal edit -->

    @include('livewire.users.modalUsers-edit')

    <!--end Modal edit -->

    {{-- end componentes de modal --}}



</div>

@section('scripts')
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                lengthMenu: [
                    [5, 10, 50, 100, 200, -1],
                    [5, 10, 50, 100, 200, "∞"]
                ],
                responsive: true,
                autoWidth: false,
                autoFill: true,
                // stateSave: true,
                "order": [
                    [1, "desc"]
                ],
                dom: "<'ui stackable grid'" +
                    "<'row'" +
                    "<'eight wide column'l>" +
                    "<'ml30'B>" +
                    "<'right aligned eight wide column'f>" +
                    ">" +
                    "<'row dt-table'" +
                    "<'sixteen wide column'tr>" +
                    ">" +
                    "<'row'" +
                    "<'seven wide column'i>" +
                    "<'right aligned nine wide column'p>" +
                    ">" +
                    ">",
                buttons: [
                    // {
                    // extend:    'copyHtml5',
                    // text:      '<i class="far fa-copy"></i>',
                    // titleAttr: 'copiar',
                    // className: "dark:bg-gray-800 dark:text-white"
                    // },
                    {
                        text: '<button @click="openModal" class=""> crear usuario nuevo</button>',
                        titleAttr: 'Crear usuario',
                        className: "buttons-crear font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white"
                    },
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fa fa-file-excel"></i>',
                        titleAttr: 'Excel',
                        filename: 'listado de usuarios',
                        className: "dark:bg-gray-800 dark:text-white",

                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i>',
                        titleAttr: 'Imprimir',
                        filename: 'listado de usuarios',
                        className: "dark:bg-gray-800 dark:text-white"
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fa fa-file-pdf"></i>',
                        titleAttr: 'PDF',
                        filename: 'listado de usuarios',
                        className: "dark:bg-gray-800 dark:text-white text-gray-800 rounded-md"
                    },
                    {
                        extend: 'colvis',
                        text: '±columnas',
                        collectionLayout: 'fixed columns',
                        collectionTitle: 'Control de visibilidad de columna',
                        className: "dark:bg-gray-800 dark:text-white"
                    }
                ],
                columnDefs: [{
                        "targets": [1],
                        "visible": false,
                        "searchable": false
                    },
                    {
                        "targets": [3],
                        "visible": false,
                        "searchable": false
                    },
                    {
                        "targets": [11],
                        "visible": false,
                        "searchable": false
                    },
                    // {"targets": [10],"visible": false,"searchable": false},
                    // {"targets": [12],"visible": false,"searchable": false},
                    // {"targets": [13],"visible": false,"searchable": false},
                    // {"targets": [14],"visible": false,"searchable": false},
                    // {"targets": [15],"visible": false,"searchable": false},
                    // {"targets": [16],"visible": false,"searchable": false},
                    // {"targets": [17],"visible": false,"searchable": false},
                    // {"targets": [18],"visible": false,"searchable": false},
                    // {"targets": [19],"visible": false,"searchable": false},
                    // {"targets": [20],"visible": false,"searchable": false},
                    // {"targets": [21],"visible": false,"searchable": false},
                    // {"targets": [22],"visible": false,"searchable": false},
                    // {"targets": [23],"visible": false,"searchable": false},
                    // {"targets": [24],"visible": false,"searchable": false},
                    // {"targets": [25],"visible": false,"searchable": false},
                    // {"targets": [26],"visible": false,"searchable": false},
                    // {"targets": [27],"visible": false,"searchable": false},
                    // {"targets": [28],"visible": false,"searchable": false},
                    // {"targets": [29],"visible": false,"searchable": false},
                    // {"targets": [30],"visible": false,"searchable": false},
                    // {"targets": [31],"visible": false,"searchable": false},
                    // {"targets": [32],"visible": false,"searchable": false},
                    // {"targets": [33],"visible": false,"searchable": false},
                    // {"targets": [34],"visible": false,"searchable": false},
                    // {"targets": [35],"visible": false,"searchable": false},
                    // {"targets": [36],"visible": false,"searchable": false},
                    // {"targets": [37],"visible": false,"searchable": false},
                    // {"targets": [38],"visible": false,"searchable": false},
                    // {"targets": [39],"visible": false,"searchable": false},
                    // {"targets": [40],"visible": false,"searchable": false},
                    // {"targets": [41],"visible": false,"searchable": false},
                    // {"targets": [42],"visible": false,"searchable": false},
                    // {"targets": [43],"visible": false,"searchable": false},
                    // {"targets": [44],"visible": false,"searchable": false},
                    // {"targets": [45],"visible": false,"searchable": false},
                    // {"targets": [46],"visible": false,"searchable": false},
                    // {"targets": [47],"visible": false,"searchable": false},
                    // {"targets": [48],"visible": false,"searchable": false},
                    // {"targets": [49],"visible": false,"searchable": false},
                    // {"targets": [50],"visible": false,"searchable": false},
                    // {"targets": [51],"visible": false,"searchable": false},
                    // {"targets": [52],"visible": false,"searchable": false},
                    // {"targets": [53],"visible": false,"searchable": false},
                    // {"targets": [54],"visible": false,"searchable": false},
                    // {"targets": [55],"visible": false,"searchable": false},
                    // {"targets": [56],"visible": false,"searchable": false},
                    // {"targets": [57],"visible": false,"searchable": false},
                    // {"targets": [58],"visible": false,"searchable": false},
                    // {"targets": [59],"visible": false,"searchable": false},
                    // {"targets": [60],"visible": false,"searchable": false},
                    // {"targets": [61],"visible": false,"searchable": false},
                    // {"targets": [62],"visible": false,"searchable": false},
                    // {"targets": [63],"visible": false,"searchable": false},
                    // {"targets": [64],"visible": false,"searchable": false},
                    // {"targets": [65],"visible": false,"searchable": false},
                    // {"targets": [66],"visible": false,"searchable": false},
                    // {"targets": [67],"visible": false,"searchable": false},
                    // {"targets": [68],"visible": false,"searchable": false},
                ],
                "drawCallback": function(settings) {
                    $('.dataTables_wrapper .dataTables_filter input').addClass(
                        "mr-4 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    );
                    $('#example_length').removeClass("dataTables_length");
                    $('#example_length').addClass("dark:text-white float-left");
                    $('#example_filter').removeClass("dataTables_filter");
                    $('#example_filter').addClass("dark:text-white float-right text-right");
                    $('#example_info').removeClass("dataTables_info");
                    $('#example_info').addClass("dark:text-white pt-7 float-left clear-both");
                    $('#example tbody>tr>td').addClass("dark:bg-gray-800 dark:text-white");
                    $('.dataTables_wrapper .dataTables_paginate .paginate_button').addClass(
                        "dark:bg-gray-800 dark:text-white");
                },
                language: {
                    "emptyTable": "Tabla Vacia",
                    "info": "",
                    "infoEmpty": "Sin informacion",
                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                    "loadingRecords": "Cargando...",
                    "decimal": ".",
                    "infoFiltered": "filtrado de _MAX_ entradas totales",
                    "infoPostFix": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                    "infoThousands": ",",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "thousands": ",",
                    "zeroRecords": "No se encontro información",
                },
                ajax: "{{ route('datatable.user') }}",
                columns: [{

                        "render": function(data, type, row) {

                            return "<div class='flex items-center space-x-4 text-sm'>" +

                                // "<button id='edit' onclick='edit(" + row['id'] + ")'" +
                                // "class='inline-flex items-center justify-center  bg-yellow-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-400 focus:outline-none focus:bg-yellow-700 focus:ring focus:ring-red-200 active:bg-yellow-700 readonly:opacity-25 transition' aria-label='Edit'>" +
                                // "<svg class='w-5 h-5' aria-hidden='true' fill='currentColor'" +
                                // "viewBox='0 0 20 20'>" +
                                // "<path fill-rule='evenodd'" +
                                // "d='M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z'>" +
                                // "</path>" +
                                // "</svg>" +
                                // "</button>" +

                                "<button onclick='deletes(" + row['id'] + ")'" +
                                "class='inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 readonly:opacity-25 transition' aria-label='Delete'>" +
                                "<svg class='w-5 h-5' aria-hidden='true' fill='currentColor'" +
                                "viewBox='0 0 20 20'>" +
                                "<path fill-rule='evenodd'" +
                                "d='M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z'" +
                                "clip-rule='evenodd'></path>" +
                                "</svg>" +
                                "</button>" +
                                "</div>";
                        },
                        "className": "dark:bg-gray-800 dark:text-white border-b"
                    },
                    {
                        data: 'id',
                        "className": "dark:bg-gray-800 dark:text-white border-b"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['usertype'] == 3) {
                                // return 1;
                                if (row['supplier_name'] == "" || row['supplier_name'] == null) {
                                    return "";
                                } else {
                                    // return 1;
                                    if (row['profile_photo_path'] == null || row[
                                            'profile_photo_path'] == "") {
                                        // return "si hay imagen empresa" + row['profile_photo_path'];
                                        return (
                                            "<div class='lex items-center text-sm'>" +
                                            "<div class='relative  w-8 h-8 mr-3 rounded-full md:block'>" +
                                            "<img src='{{ asset('img/l_logo_step.png') }}' alt=''" +
                                            "class='object-cover w-full h-full rounded-full' loading='lazy'>" +
                                            "<div class='absolute inset-0 rounded-full shadow-inner'" +
                                            "aria-hidden='true'>" +
                                            "</div>" +
                                            "</div>" +
                                            "<div class='flex items-center text-sm'>" +
                                            "<div>" +
                                            "<p class='text-xs text-gray-600 dark:text-gray-400'>" +
                                            row['supplier_name'] + "</p>" +
                                            "</div>" +
                                            "</div>" +
                                            "</div>");

                                    } else {
                                        // return "no hay imagen empresa";

                                        return (
                                            "<div class='flex items-center text-sm'>" +
                                            "<div class='relative  w-8 h-8 mr-3 rounded-full md:block'>" +
                                            "<a class='cursor-pointer' onclick='searchImg(" +
                                            row['id'] + ")'>" +
                                            "<img src='" + row['profile_photo_path'] +
                                            "' alt=''" +
                                            "class='object-cover w-full h-full rounded-full' loading='lazy'>" +
                                            "</a>" +
                                            // "<div class='absolute inset-0 rounded-full shadow-inner'" +
                                            // "aria-hidden='true'>" +
                                            // "</div>" +
                                            "</div>" +
                                            "<div class='flex items-center text-sm'>" +
                                            "<div>" +
                                            "<p class='font-semibold'>" + row['supplier_name'] +
                                            "</p>" +
                                            "</div>" +
                                            "</div>" +
                                            "</div>");

                                    }
                                }
                            } else {
                                // return 0;
                                if (row['firstname'] == "" || row['firstname'] == null) {
                                    return "";
                                } else {
                                    // return 2;
                                    if (row['profile_photo_path'] == null || row[
                                            'profile_photo_path'] == "") {
                                        // return "si hay imagen usuario" + row['profile_photo_path'];                                            
                                        return (
                                            "<div class='flex items-center text-sm'>" +
                                            "<div class='relative  w-8 h-8 mr-3 rounded-full md:block'>" +
                                            "<img src='{{ asset('img/l_logo_step.png') }}' alt=''" +
                                            "class='object-cover w-full h-full rounded-full' loading='lazy'>" +
                                            "<div class='absolute inset-0 rounded-full shadow-inner'" +
                                            "aria-hidden='true'>" +
                                            "</div>" +
                                            "</div>" +
                                            "<div class='flex items-center text-sm'>" +
                                            "<div>" +
                                            "<p class='font-semibold'>" + row['firstname'] +
                                            "</p>" +
                                            "<p class='text-xs text-gray-600 dark:text-gray-400'>" +
                                            row['lastname'] +
                                            "</p>" +
                                            "</div>" +
                                            "</div>" +
                                            "</div>");

                                    } else {
                                        // return "no hay imagen usuario";

                                        return (
                                            "<div class='flex items-center text-sm'>" +
                                            "<div class='relative  w-8 h-8 mr-3 rounded-full md:block'>" +
                                            "<a class='cursor-pointer' onclick='searchImg(" +
                                            row['id'] + ")'>" +
                                            "<img src='" + row['profile_photo_path'] +
                                            "' alt=''" +
                                            "class='object-cover w-full h-full rounded-full' loading='lazy'>" +
                                            "</a>" +
                                            // "<div class='absolute inset-0 rounded-full shadow-inner'" +
                                            // "aria-hidden='true'>" +
                                            // "</div>" +
                                            "</div>" +
                                            "<div class='flex items-center text-sm'>" +
                                            "<div>" +
                                            "<p class='font-semibold'>" + row['firstname'] +
                                            "</p>" +
                                            "<p class='text-xs text-gray-600 dark:text-gray-400'>" +
                                            row['lastname'] +
                                            "</p>" +
                                            "</div>" +
                                            "</div>" +
                                            "</div>");
                                    }
                                }
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white border-b"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_identification'] == null || row[
                                    'description_identification'] == "") {
                                return ""
                            } else {
                                return row['description_identification'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {

                        "render": function(data, type, row) {
                            if (row['usertype'] == 3) {
                                return row['nit'];
                            } else {
                                return row['identificationcard'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'description_usertype',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_charge'] == null || row['description_charge'] ==
                                "") {
                                return ""
                            } else {
                                return row['description_charge'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['user_state'] == 2) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100 '>{{ __('ACTIVE') }}</span>";
                            } else {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700 '>{{ __('INACTIVE') }}</span>";
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'user_entry_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'email',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'username',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        "render": function(data, type, row) {
                            return (row['age'] +
                                "<p class='text-xs text-gray-600 dark:text-gray-400'> Años</p>");
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {

                        "render": function(data, type, row) {
                            if (row['type_sex'] == "M") {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-white bg-blue-600 rounded-full dark:bg-blue-600 dark:text-white '>{{ __('MASCULINE') }}</span>";
                            } else if (row['type_sex'] == "F") {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-white bg-yellow-700 rounded-full dark:bg-yellow-700 dark:text-white '>{{ __('FEMENINE') }}</span>";
                            } else {
                                return "";
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['country_name'] == null || row['country_name'] == "") {
                                return ""
                            } else {
                                return row['country_name'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['department_name'] == null || row['department_name'] == "") {
                                return ""
                            } else {
                                return row['department_name'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['city_name'] == null || row['city_name'] == "") {
                                return ""
                            } else {
                                return row['city_name'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'address',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'phone',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'phone_cellular',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_eps'] == null || row['description_eps'] == "") {
                                return ""
                            } else {
                                return row['description_eps'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'date_eps',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['blood_type_description'] == null || row[
                                    'blood_type_description'] == "") {
                                return ""
                            } else {
                                return row['blood_type_description'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_pension'] == null || row['description_pension'] ==
                                "") {
                                return ""
                            } else {
                                return row['description_pension'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'date_pension',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_layoffs'] == null || row['description_layoffs'] ==
                                "") {
                                return ""
                            } else {
                                return row['description_layoffs'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'date_layoffs',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_arl'] == null || row['description_arl'] == "") {
                                return ""
                            } else {
                                return row['description_arl'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'arl_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_compensationbox'] == null || row[
                                    'description_compensationbox'] == "") {
                                return ""
                            } else {
                                return row['description_compensationbox'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'date_compensationbox',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'date_withdrawal_user',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_maritalstatus'] == null || row[
                                    'description_maritalstatus'] == "") {
                                return ""
                            } else {
                                return row['description_maritalstatus'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_identification'] == null || row[
                                    'description_identification'] == "") {
                                return ""
                            } else {
                                return row['description_identification'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'family_names',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_relationship'] == null || row[
                                    'description_relationship'] == "") {
                                return ""
                            } else {
                                return row['description_relationship'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'family_address',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'family_phone',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'family_phone_cellular',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['city_birth'] == null || row['city_birth'] == "") {
                                return ""
                            } else {
                                return row['city_birth'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'place_expedition_identificationcard',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'identificationcard_family',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['bonding_type_description'] == null || row[
                                    'bonding_type_description'] == "") {
                                return ""
                            } else {
                                return row['bonding_type_description'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'weight',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'pant_size',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'shirt_size',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'shoe_size',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_levelEducation'] == null || row[
                                    'description_levelEducation'] == "") {
                                return ""
                            } else {
                                return row['description_levelEducation'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'educational_institution',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'last_year',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'study_end_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'obtained_title',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'last_company_name',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'charges_last_company',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'start_date_last_company',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'date_end_last_company',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'functions_performed',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'company_name_provider',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'commercial_reason_supplier',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'supplier_web_page',
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_EconomicActivity'] == null || row[
                                    'description_EconomicActivity'] == "") {
                                return ""
                            } else {
                                return row['description_EconomicActivity'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['ProductandService_description'] == null || row[
                                    'ProductandService_description'] == "") {
                                return ""
                            } else {
                                return row['ProductandService_description'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'salary',
                        render: DataTable.render.number(null, null, 2, '$'),
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        data: 'aid_transport',
                        render: DataTable.render.number(null, null, 2, '$'),
                        "className": "dark:bg-gray-800 dark:text-white text-center"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['workarea_description'] == null || row[
                                    'workarea_description'] == "") {
                                return ""
                            } else {
                                return row['workarea_description'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                ]
            }).columns.adjust().responsive.recalc();

            $('a.toggle-vis').on('click', function(e) {
                e.preventDefault();

                // Get the column API object
                var column = table.column($(this).attr('data-column'));

                // Toggle the visibility
                column.visible(!column.visible());
            });

            $('#example tbody').on('click', 'tr', function() {

                var tr = $(this).closest('tr');
                var row = table.row(tr);
                if (row.child.isShown()) {
                    $('table.dataTable.dtr-inline.collapsed>tbody>tr>td.child').removeClass("child");
                    $('table.dataTable.dtr-inline.collapsed>tbody>tr>td').addClass(
                        "dark:bg-gray-800 dark:text-white");
                }
            });

            $("#active6").removeClass('hidden');

        });

        Livewire.on('documentImage', (photo) => {

            var photo = photo.file;
            // console.log(photo);
            swal.fire({
                // title: 'Sweet!',
                imageUrl: `${photo}`,
                // imageUrl: '/storage/STEP/users/Ident_q11111111111/profile_user_q11111111111.webp',
                // text: '<strong></strong>',
                // html: '<strong>' + `${name}` + '</strong>',
                imageWidth: 800,
                imageHeight: 400,
                imageAlt: '',
            })
        })

        function searchImg(id) {
            // alert('reactivar el ' + id);
            Livewire.emit('searchImg', [id]);
        }

        jQuery.datetimepicker.setLocale('es');

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

        Livewire.on('documentStatus', (doclicense, docAlchoolemia, docSimitQueries, docdrivingExam,
            docNormOverlandTransportationAutomotive, docRulesTransit,
            docNormativeTips, docDrivingMethods, docDefensiveDriving, docdistractions, docFirstAid,
            docFirstResponder, docfiveSensesDriving, docActivePassiveSecurityVehicle,
            docRoadSafety) => {

            doclicense = doclicense.doclicense;
            docAlchoolemia = docAlchoolemia.docAlchoolemia;
            docSimitQueries = docSimitQueries.docSimitQueries;
            docdrivingExam = docdrivingExam.docdrivingExam;
            docNormOverlandTransportationAutomotive = docNormOverlandTransportationAutomotive
                .docNormOverlandTransportationAutomotive;
            docRulesTransit = docRulesTransit.docRulesTransit;
            docNormativeTips = docNormativeTips.docNormativeTips;
            docDrivingMethods = docDrivingMethods.docDrivingMethods;
            docDefensiveDriving = docDefensiveDriving.docDefensiveDriving;
            docdistractions = docdistractions.docdistractions;
            docFirstAid = docFirstAid.docFirstAid;
            docFirstResponder = docFirstResponder.docFirstResponder;
            docfiveSensesDriving = docfiveSensesDriving.docfiveSensesDriving;
            docActivePassiveSecurityVehicle = docActivePassiveSecurityVehicle.docActivePassiveSecurityVehicle;
            docRoadSafety = docRoadSafety.docRoadSafety;

            var statusInput = [
                'Doclicense2', 'DocAlchoolemia2', 'DocSimitQueries2', 'DocdrivingExam2',
                'DocNormOverlandTransportationAutomotive2',
                'DocRulesTransit2', 'DocNormativeTips2', 'DocDrivingMethods2', 'DocDefensiveDriving2',
                'Docdistractions2', 'DocFirstAid2',
                'DocFirstResponder2', 'DocfiveSensesDriving2', 'DocActivePassiveSecurityVehicle2',
                'DocRoadSafety2'
            ];

            var status = [
                doclicense, docAlchoolemia, docSimitQueries, docdrivingExam,
                docNormOverlandTransportationAutomotive,
                docRulesTransit, docNormativeTips, docDrivingMethods, docDefensiveDriving,
                docdistractions, docFirstAid, docFirstResponder, docfiveSensesDriving,
                docActivePassiveSecurityVehicle, docRoadSafety
            ];

            for (let i = 0; i <= 14; i++) {
                // console.log(status[i],statusInput[i]);
                if (status[i] != '') {
                    document.getElementById(statusInput[i]).classList.add('icon-blue');

                } else {
                    document.getElementById(statusInput[i]).classList.add('icon-green');

                }

            }

        })

        // constante creada de la clase scroll que esta en el div principal de la modal
        const scroll = document.querySelector(".scroll");

        // con  el .scroll=0 subo el escroll cuando se cierra la modal editar
        // con esta funcion se cierra la modal editar
        function closeModalEdit() {
            colorChange = [];

            var statusInput = [
                'Doclicense2', 'DocAlchoolemia2', 'DocSimitQueries2', 'DocdrivingExam2',
                'DocNormOverlandTransportationAutomotive2',
                'DocRulesTransit2', 'DocNormativeTips2', 'DocDrivingMethods2', 'DocDefensiveDriving2',
                'Docdistractions2', 'DocFirstAid2',
                'DocFirstResponder2', 'DocfiveSensesDriving2', 'DocActivePassiveSecurityVehicle2',
                'DocRoadSafety2'
            ];

            for (let i = 0; i <= 14; i++) {

                if (document.getElementById(statusInput[i]) != null) {
                    document.getElementById(statusInput[i]).classList.remove('icon-blue');
                    document.getElementById(statusInput[i]).classList.remove('icon-green');
                    document.getElementById(statusInput[i]).classList.remove('icon-yellow');
                }
            }

            scroll.scrollTop = 0;
            document.getElementById('modalEdit').classList.add('hidden');
        }

        // enviar los datos para editar el documento/archivo 
        function updateDocument(param, documentName) {

            let timerInterval
            swal.fire({
                title: 'uploading document!',
                html: 'Your document will be in the system at <b></b> milliseconds.', //Tu documento estara en el sistema en
                timer: 9000,
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

            setTimeout(() => (
                Livewire.emit('documentUpdate', [param], [documentName])
            ), 5000);
        }

        var colorChange = [];
        // recive el tipo de docuemnto arriba o actualización, y llama la funcion que cambia el color del icono
        Livewire.on('documentup', (up, input) => {

            up = up.up;
            input = input.input;

            var inp = [
                'Doclicense2', 'DocAlchoolemia2', 'DocSimitQueries2', 'DocdrivingExam2',
                'DocNormOverlandTransportationAutomotive2',
                'DocRulesTransit2', 'DocNormativeTips2', 'DocDrivingMethods2', 'DocDefensiveDriving2',
                'Docdistractions2', 'DocFirstAid2',
                'DocFirstResponder2', 'DocfiveSensesDriving2', 'DocActivePassiveSecurityVehicle2',
                'DocRoadSafety2'
            ];
            colorChange.push(input);

            for (let i = 0; i < colorChange.length; i++) {

                var num = colorChange[i];
                var color = inp[num];
                // console.log(color);
                if (up == 1) {

                    document.getElementById(color).classList.remove('icon-blue');
                    document.getElementById(color).classList.add('icon-yellow');

                } else {

                    document.getElementById(color).classList.remove('icon-green');
                    document.getElementById(color).classList.add('icon-yellow');


                }
            }

            if (up == 1) {
                swal.fire({
                    position: 'center',
                    title: 'actualized document', //documento actualizado
                    showConfirmButton: false,
                    timer: 1500
                })


            } else {
                swal.fire({
                    position: 'center',
                    title: 'document above', //documento arriba
                    showConfirmButton: false,
                    timer: 1500
                })


            }

        })


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

        Livewire.on('crud', (document, process, name) => {

            var process = process.process;
            var document = document.document;
            var name = name.name;


            if (process == 4) {
                var nit = document;
            } else if (process == 5) {
                var email = document;
            } else if (process == 6) {
                var username = document;
            } else if (process == 7) {
                var file = document;
            }

            var message = ['Se ha registrado el usuario ' + name + ' con documento ' + document +
                ' sactisfacoriamente',
                'se ha actualizado la información del usuario ' + name + ' con documento ' + document +
                ' sactisfactoriamente',
                'se ha eliminado el usuario ' + name + ' con documento ' + document + ' sactisfactoriamente',
                'el documento o nit ' + nit + ' ya esta registrado en nuestro sistema',
                'el correo electronico "' + email + '" ya esta registrado en nuestro sistema',
                'el nombre de usuario "' + username + '" ya esta registrado en nuestro sistema',
                'Recuerda adjuntar el pdf de ' + file,
                'Favor recuerda no dejar ningun campo importante vacio'
            ];
            // var state = ['success', 'error'];


            var newmessage = message[process - 1];

            if (process == 1 || process == 2 || process == 3) {
                swal.fire('', newmessage, 'success')
                $("#btnCalcel").trigger("click");
            } else {
                swal.fire('', newmessage, 'error')
            }

            $('#example').DataTable().ajax.reload(null, 1);

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

        // function changeuser(){

        //     console.log(tipeUsernum);
        // }

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
                var current_active_step = $(this).parents('.f1').find('.f1-step-user.active');
                // var icon_active_step = $(this).parents('.f1').find('.fa-stack-2x.-ml-1.flicker');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                // fields validation
                parent_fieldset.find(
                    // 'input[type="text"], input[type="password"], textarea, select, input[type="number"], input[type="tel"],input[type="email"],input[type="date"],input[type="radio"]'
                    // ,input[type="file"]'
                ).each(
                    function() {
                        // $('div').hasClass('container')
                        if ($(this).hasClass('Inactive')) {
                            // console.log('no se bloquea');
                        } else if ($(this).val() == "" || $(this).val() == 0 || $(this).val().checked) {
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
                        // console.log(current_active_step);
                        current_active_step.removeClass('active').addClass('activated').next()
                            .addClass('active');
                        parpadeo(true);
                        // lastsaved();
                        // console.log(current_active_step);
                        // progress bar
                        bar_progress(progress_line, 'right');
                        // show next step
                        var tipeUsernum = document.getElementById('usertype').value;
                        var tipeChargenum = document.getElementById('charge').value;
                        if (tipeUsernum == 1 && stepinfinite > 2 || tipeUsernum == 4 &&
                            stepinfinite > 2 || tipeUsernum == 3 && stepinfinite > 2) {
                            $(this).next().next().next().next().next().next().fadeIn();
                            current_active_step.removeClass('active').addClass('activated').next()
                                .addClass('active');
                            // } else if (tipeChargenum != 5 && stepinfinite > 5) {
                            //     $(this).next().next().fadeIn();
                            //     current_active_step.removeClass('active').addClass('activated').next()
                            //         .addClass('active')
                        } else {
                            $(this).next().fadeIn();
                        }

                        // scroll window to beginning of the form
                        scroll_to_class($('.f1'), 20);
                    });
                }

            });

            // previous step
            $('.f1 .btn-previous').on('click', function() {
                // navigation steps / progress steps
                var current_active_step = $(this).parents('.f1').find('.f1-step-user.active');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                $(this).parents('fieldset').fadeOut(400, function() {
                    // change icons
                    current_active_step.removeClass('active').prev().removeClass('activated')
                        .addClass('active');
                    parpadeo(false);
                    lastsaved();
                    // progress bar
                    // console.log(stepinfinite);
                    bar_progress(progress_line, 'left');
                    // show previous step
                    var tipeUsernum = document.getElementById('usertype').value;
                    var tipeChargenum = document.getElementById('charge').value;
                    if (tipeUsernum == 1 && stepinfinite == 2 || tipeUsernum == 4 && stepinfinite ==
                        2 || tipeUsernum == 3 && stepinfinite == 2) {
                        $(this).prev().prev().prev().prev().prev().prev().fadeIn();
                        current_active_step.removeClass('active').prev().removeClass('activated')
                            .addClass('active');
                        // } else if (tipeUsernum == 3 && stepinfinite == 1) {
                        //     $(this).prev().prev().prev().prev().prev().prev().prev().prev().prev()
                        //         .fadeIn();
                        //     current_active_step.removeClass('active').prev().removeClass('activated')
                        //         .addClass('active');
                        // } else if (tipeChargenum != 5 && stepinfinite == 6) {
                        //     $(this).prev().prev().prev().fadeIn();
                        //     current_active_step.removeClass('active').prev().removeClass('activated')
                        //         .addClass('active');
                    } else {
                        $(this).prev().fadeIn();
                    }

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
                    // if ($(this).hasClass('Inactive')) {
                    //     // console.log('no se bloquea');
                    // } else if ($(this).val() == "" || $(this).val() == 0) {
                    //     $(this).addClass('input-error');
                    //     Finalize = false;
                    // } else {
                    //     $(this).removeClass('input-error');
                    // }
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

                    if (stepinfinite >= 8) {
                        stepinfinite = 8;
                        nextStep = 'step' + stepinfinite
                        // console.log0(nextStep);
                        document.getElementById(nextStep).classList.add('flicker');
                    } else {
                        nextStep = 'step' + stepinfinite
                        // console.log('el estado quedo en ' + stepinfinite);

                        document.getElementById(nextStep).classList.add('flicker');
                    }
                } else if (step == false) {
                    stepinfinite = stepinfinite - 1;
                    if (stepinfinite == 8) {
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
                if (stepinfinite >= 8) {
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
            var current_active_step_s = $('.f1').find('.f1-step-user');
            var current_active_step = $('.f1').find('.f1-step-user.active');
            var current_active_step_a = $('.f1').find('.f1-step-user.activated');
            var progress_line = $('.f1').find('.f1-progress-line');
            // console.log(current_active_step_a);
            $('#frmUser').trigger("reset");

            let certif = ['identificationcard', 'nit', 'obtained_title', 'last_company_name', 'date_eps', 'date_pension',
                'date_layoffs',
                'arl_date', 'date_compensationbox', 'documentBeneficiary', 'license_expiration',
                'certificate_drugs_alchoolemia',
                'SIMIT_queries', 'Rules_Transit', 'Defensive_driving', 'First_aid', 'psicosensometrico', 'Road_safety'
            ]
            let doc = ['docu', 'DocNit', 'docObtainedTitle', 'docLastCompanyName', 'docEps', 'docPension', 'docLayoffs',
                'docArl', 'docCompensationbox',
                'docBeneficiary', 'Doclicense', 'DocAlchoolemia', 'DocSimitQueries', 'DocRulesTransit',
                'DocDefensiveDriving', 'DocFirstAid',
                'DocfiveSensesDriving', 'DocRoadSafety'
            ]
            let inp = ['InputDocu', 'InputDocNit', 'InputDocObtainedTitle', 'InputDocLastCompanyName', 'InputDocEps',
                'InputDocPension', 'InputDocLayoffs',
                'InputDocArl', 'InputDocCompensationbox', 'InputDocBeneficiary', 'InputDoclicense',
                'InputDocAlchoolemia', 'InputDocSimitQueries',
                'InputDocRulesTransit', 'InputDocDefensiveDriving', 'InputDocFirstAid', 'InputDocfiveSensesDriving',
                'InputDocRoadSafety'
            ]

            for (let i = 0; i < certif.length; i++) {

                documentOn(certif[i], doc[i]);
                documentAbove(inp[i], doc[i]);

            }

            $('.f1 fieldset').fadeOut(400, function() {
                // change icons

                // parpadeo(false);
                // lastsaved();
                // progress bar
                // documentract();
                document.getElementById('usertype').value = 0;
                typeUser();
                progress_line.attr('style', 'width: ' + 9.66 + '%;').data('now-value', 10.66);

                current_active_step.removeClass('active');
                current_active_step_a.removeClass('activated');
                var contador;
                if (stepinfinite < 9) {
                    contador = stepinfinite;
                } else {
                    contador = 9;
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

                $(this).prev().prev().prev().prev().prev().prev().prev().fadeIn();
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

        // function submited() {
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
        // }

        var camps = [
            /*0:*/
            'labelUsertype',
            /*1:*/
            'usertype',
            /*2:*/
            'divCharge',
            /*3:*/
            'labelCharge',
            /*4:*/
            'charge',
            /*5:*/
            'divSupplierName',
            /*6:*/
            'labelSupplierName',
            /*7:*/
            'supplier_name',
            /*8:*/
            'divIdentification',
            /*9:*/
            'labelIdentification',
            /*10:*/
            'identification',
            /*11:*/
            'divContractDocument',
            /*12:*/
            'labeIdentificationcard',
            /*13:*/
            'identificationcard',
            /*14:*/
            'labelFirstname',
            /*15:*/
            'firstname',
            /*16:*/
            'labelSecondname',
            /*17:*/
            'secondname',
            /*18:*/
            'labelLastname',
            /*19:*/
            'lastname',
            /*20:*/
            'labelMotherslastname',
            /*21:*/
            'motherslastname',
            /*22:*/
            'labelCompanyNameProvider',
            /*23:*/
            'company_name_provider',
            /*24:*/
            'labelCommercialReasonSupplier',
            /*25:*/
            'commercial_reason_supplier',
            /*26:*/
            'labelSupplierCategory',
            /*27:*/
            'supplier_category',
            /*28:*/
            'labelProductsAndServices',
            /*29:*/
            'products_and_services',
            /*30:*/
            'labelEconomicActivity',
            /*31:*/
            'economic_activity',
            /*32:*/
            'labelSupplierDescription',
            /*33:*/
            'supplier_description',
            /*34:*/
            'divPlaceExpeditionIdentificationcard',
            /*35:*/
            'labelPlaceExpeditionIdentificationcard',
            /*36:*/
            'place_expedition_identificationcard',
            /*37:*/
            'divNit',
            /*38:*/
            'labelNit',
            /*39:*/
            'nit',
            /*40:*/
            'labelCountry',
            /*41:*/
            'country',
            /*42:*/
            'labelDepartment',
            /*43:*/
            'Department',
            /*44:*/
            'labelCity',
            /*45:*/
            'city',
            /*46:*/
            'divAddress',
            /*47:*/
            'labelAddress',
            /*48:*/
            'address',
            /*49:*/
            'divCheck',
            /*50:*/
            'labelCheck',
            /*51:*/
            'sexM',
            /*52:*/
            'sexF',
            /*53:*/
            'labelSexF',
            /*54:*/
            'labelPhone',
            /*55:*/
            'phone',
            /*56:*/
            'labelPhoneCellular',
            /*57:*/
            'phone_cellular',
            /*58:*/
            'labelBirthdate',
            /*59:*/
            'birthdate',
            /*60:*/
            'labelCityBirth',
            /*61:*/
            'city_birth',
            /*62:*/
            'labelWeight',
            /*63:*/
            'weight',
            /*64:*/
            'labelPantSize',
            /*65:*/
            'pant_size',
            /*66:*/
            'labelShirtSize',
            /*67:*/
            'shirt_size',
            /*68:*/
            'labelShoeSize',
            /*69:*/
            'shoe_size',
            /*70:*/
            'labelCivilStatus',
            /*71:*/
            'civil_status',
            /*72:*/
            'labelWorkArea',
            /*73:*/
            'work_area',
            /*74:*/
            'labelBindingType',
            /*75:*/
            'binding_type',
            /*76:*/
            'labelSalary',
            /*77:*/
            'salary',
            /*78:*/
            'labelAidTransport',
            /*79:*/
            'aid_transport',
            /*80:*/
            'labelEducationLevel',
            /*81:*/
            'education_level',
            /*82:*/
            'labelEducationalInstitution',
            /*83:*/
            'educational_institution',
            /*84:*/
            'labelLastYear',
            /*85:*/
            'last_year',
            /*86:*/
            'labelStudyEndDate',
            /*87:*/
            'study_end_date',
            /*88:*/
            'labelObtainedTitle',
            /*89:*/
            'obtained_title',
            /*90:*/
            'labelLastCompanyName',
            /*91:*/
            'last_company_name',
            /*92:*/
            'labelChargesLastCompany',
            /*93:*/
            'charges_last_company',
            /*94:*/
            'labelStartDateLastCompany',
            /*95:*/
            'start_date_last_company',
            /*96:*/
            'labelDateEndLastCompany',
            /*97:*/
            'date_end_last_company',
            /*98:*/
            'labelFunctionsPerformed',
            /*99:*/
            'functions_performed',
            /*100:*/
            'labelFamilyDocumentType',
            /*101:*/
            'family_document_type',
            /*102:*/
            'labelSexM',
            /*103:*/
            'labeIdentificationcardFamily',
            /*104:*/
            'identificationcard_family',
            /*105:*/
            'labelRelationship',
            /*106:*/
            'relationship',
            /*107:*/
            'labelFamilyNames',
            /*108:*/
            'family_names',
            /*109:*/
            'labelFamilyAddress',
            /*110:*/
            'family_address',
            /*111:*/
            'labelFamilyPhone',
            /*112:*/
            'family_phone',
            /*113:*/
            'labelFamilyPhoneCellular',
            /*114:*/
            'family_phone_cellular',
            /*115:*/
            'labelEps',
            /*116:*/
            'eps',
            /*117:*/
            'labelDateEps',
            /*118:*/
            'date_eps',
            /*119:*/
            'labelBloodType',
            /*120:*/
            'blood_type',
            /*121:*/
            'labelPension',
            /*122:*/
            'pension',
            /*123:*/
            'labelDatePension',
            /*124:*/
            'date_pension',
            /*125:*/
            'labelLayoffs',
            /*126:*/
            'layoffs',
            /*127:*/
            'labelDateLayoffs',
            /*128:*/
            'date_layoffs',
            /*129:*/
            'labelArl',
            /*130:*/
            'arl',
            /*131:*/
            'labelArlDate',
            /*132:*/
            'arl_date',
            /*133:*/
            'labelCompensationbox',
            /*134:*/
            'compensationbox',
            /*135:*/
            'labelDateCompensationbox',
            /*136:*/
            'date_compensationbox',
            /*137:*/
            'labelLicenseNumber',
            /*138:*/
            'license_number',
            /*139:*/
            'labelLicenseCategory',
            /*140:*/
            'license_category',
            /*141:*/
            'labelLicenseExpiration',
            /*142:*/
            'license_expiration',
            /*143:*/
            'finalUser1',
            /*144:*/
            'passfinalUser1',
            /*145:*/
            'labelCertificateDrugsAlchoolemia',
            /*146:*/
            'certificate_drugs_alchoolemia',
            /*147:*/
            'labelSIMITQueries',
            /*148:*/
            'SIMIT_queries',
            /*149:*/
            'finalUser3',
            /*150:*/
            'passfinalUser3',
            /*151:*/
            'step2',
            /*152:*/
            'pass2',
            /*153:*/
            'step3',
            /*154:*/
            'pass3',
            /*155:*/
            'labelRulesTransit',
            /*156:*/
            'Rules_Transit',
            /*157:*/
            'labelDefensiveDriving',
            /*158:*/
            'Defensive_driving',
            /*159:*/
            'labelFirstaid',
            /*160:*/
            'First_aid',
            /*161:*/
            'labelfiveSensesDriving',
            /*162:*/
            'psicosensometrico',
            /*163:*/
            'labelRoadSafety',
            /*164:*/
            'Road_safety',
            /*165:*/
            'labelLinked',
            /*166:*/
            'Linked',
            /*167:*/
            'labelUserEntryDate',
            /*168:*/
            'user_entry_date',
            /*169:*/
            'labelUsername',
            /*170:*/
            'username',
            /*171:*/
            'labelProfilePhotoPath',
            /*172:*/
            'profile_photo_path',
            /*173:*/
            'divLinked',
            /*174:*/
            'divUserEntryDate',
            /*175:*/
            'divUsername',
            /*176:*/
            'labelBeneficiary',
            /*177:*/
            'beneficiary',
            /*178:*/

            /*179:*/

            /*180:*/


        ]

        clave = [];

        function typeUser() {

            var userType = document.getElementById('usertype').value;
            clave = [];
            // $('#typ').html('cambio');
            // console.log(userType);

            switch (userType) {
                case '1':

                    clave.push(2, 3, 4, 5, 6, 7, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 37, 38, 39, 58, 59, 60, 61,
                        62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85,
                        86, 87,
                        88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 103, 104, 105, 106, 107, 108, 109,
                        110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128,
                        129,
                        130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 145, 146, 147, 148, 149, 150,
                        153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 169, 170, 173, 175); //1-4
                    changeInput(1);
                    document.getElementById('fieldset1Buttons').classList.remove('Inactive');

                    break;

                case '2':
                    clave.push(5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28,
                        29, 30, 31, 32, 33, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 50, 51, 52, 53, 54,
                        55, 56, 57,
                        102, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 155, 156, 157, 158,
                        159, 160, 161, 162, 163, 164, 165, 166, 169, 170); //0
                    viewhideinputs('fieldset1Buttons', 'Inactive', 'Active');
                    changeInput(0);
                    break;

                case '3':
                    clave.push(
                        2, 3, 4, 8, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 34, 35, 36, 49, 50, 51, 52, 53, 58, 59,
                        60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83,
                        84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105,
                        106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124,
                        125, 126, 127, 128, 129, 130, 131, 132,
                        133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 145, 146, 147, 148, 149, 150, 153, 154, 155,
                        156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 173); //3

                    document.getElementById('fieldset1Buttons').classList.remove('Inactive');

                    changeInput(3);
                    //
                    break;


                case '4':
                    clave.push(
                        2, 3, 4, 5, 6, 7, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 37, 38, 39, 58, 59, 60, 61,
                        62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84,
                        85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 103, 104, 105, 106, 107,
                        108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126,
                        127, 128, 129, 130, 131, 132, 133,
                        134, 135, 136, 137, 138, 139, 140, 141, 142, 145, 146, 147, 148, 149, 150, 153, 154, 155, 156,
                        157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 169, 170, 173, 175); //1-4

                    document.getElementById('fieldset1Buttons').classList.remove('Inactive');
                    changeInput(4);
                    break;

                default:
                    clave.push(
                        2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27,
                        28, 29, 30, 31, 32, 33, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 50, 51,
                        52, 53, 54, 55, 56, 57, 102, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149,
                        150, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 169, 170
                    ); //0
                    viewhideinputs('fieldset1Buttons', 'Inactive', 'Active');
                    changeInput(0);
                    break;
            }

        }

        function typeCharge() {

            var charges = document.getElementById('charge').value;
            clave = [];
            // console.log(charges);

            switch (charges) {

                case '0':
                    clave.push(
                        5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29,
                        30, 31, 32, 33, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 50, 51, 52, 53,
                        54, 55, 56, 57, 102, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 155,
                        156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 169, 170); //0
                    viewhideinputs('fieldset1Buttons', 'Inactive', 'Active');
                    changeInput(0);
                    break;

                default:
                    clave.push(
                        5, 6, 7, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 37, 38, 39, 143, 144, 149, 150, 169,
                        170, 175); //2

                    document.getElementById('fieldset1Buttons').classList.remove('Inactive');

                    changeInput(2);
                    break;
            }

        }


        function viewhideinputs(id, adhere, stirring) {

            document.getElementById(id).classList.remove(stirring);
            document.getElementById(id).classList.add(adhere);
        }

        function changeInput(opcion) {

            let change = false;
            prueba = [];

            // console.log(camps[clave[0]] + '-' + clave + '-' + change);
            for (let i = 0; i < camps.length; i++) {

                let j = 0;
                while (j <= clave.length) {

                    if (camps[i] == camps[clave[j]]) {
                        j = clave.length;
                        change = true;
                    } else {
                        change = false;
                    }

                    j++;
                }
                if (camps[i] == 'change') {
                    // console.log('cambiar');
                } else {
                    // console.log(camps[i]);
                    if (change == true) {
                        viewhideinputs(camps[i], 'Inactive', 'Active');
                    } else {
                        viewhideinputs(camps[i], 'Active', 'Inactive');
                    }
                }

            }

            if (opcion == 0 || opcion == 2 || opcion == 6) {
                // console.log('si');
                // viewhideinputs('step3', 'Active', 'Inactive');
                // viewhideinputs('finalUser1', 'Inactive', 'Active');
                // viewhideinputs('passfinalUser1', 'Inactive', 'Active');
                // viewhideinputs('finalUser2', 'Inactive', 'Active');
                // viewhideinputs('passfinalUser2', 'Inactive', 'Active');
                // viewhideinputs('finalUser3', 'Inactive', 'Active');
                // viewhideinputs('passfinalUser3', 'Inactive', 'Active');

                for (var i = 1; i <= 8; i++) {
                    var noSteps = 'step' + [i];
                    var noText = 'pass' + [i];
                    // console.log(noText);
                    document.getElementById(noSteps).classList.remove('Inactive');
                    document.getElementById(noText).classList.remove('Inactive');
                    // document.getElementById(noSteps).classList.add('Active');

                }
            }

            if (opcion == 3) {
                document.getElementById('divAddress').classList.add('w-full');
                document.getElementById('divAddress').classList.remove('w-3-4');
            } else {
                document.getElementById('divAddress').classList.add('w-3-4');
                document.getElementById('divAddress').classList.remove('w-full');
            }

            if (opcion == 1 || opcion == 4 || opcion == 3) {

                // viewhideinputs('step2', 'Active', 'Inactive');
                // viewhideinputs('pass2', 'Active', 'Inactive');
                // viewhideinputs('step3', 'Inactive', 'Active');
                // viewhideinputs('pass3', 'Inactive', 'Active');
                // viewhideinputs('finalUser3', 'Inactive', 'Active');
                // viewhideinputs('passfinalUser3', 'Inactive', 'Active');
                // viewhideinputs('finalUser2', 'Inactive', 'Active');
                // viewhideinputs('passfinalUser2', 'Inactive', 'Active');
                // viewhideinputs('finalUser1', 'Active', 'Inactive');
                // viewhideinputs('passfinalUser1', 'Active', 'Inactive');
                contador = 4;
                for (var i = 4; i <= 8; i++) {
                    var noSteps = 'step' + [i];
                    var noText = 'pass' + contador;
                    // console.log(noText);
                    document.getElementById(noSteps).classList.add('Inactive');
                    document.getElementById(noText).classList.add('Inactive');
                    contador = contador + 1;
                }
            }

            if (opcion == 5 || opcion == 6) {

                var Chargenum = document.getElementById('charge').value;
                // console.log(Chargenum);
                // if (Chargenum != 5) {
                // viewhideinputs('finalUser1', 'Inactive', 'Active');
                // viewhideinputs('passfinalUser1', 'Inactive', 'Active');
                // viewhideinputs('step2', 'Active', 'Inactive');
                // viewhideinputs('step3', 'Active', 'Inactive');
                // viewhideinputs('finalUser3', 'Inactive', 'Active');
                // viewhideinputs('passfinalUser3', 'Inactive', 'Active');
                // viewhideinputs('finalUser2', 'Active', 'Inactive');
                // viewhideinputs('passfinalUser2', 'Active', 'Inactive');
                //     contador = 8;
                //     for (var i = 8; i <= 8; i++) {

                //         var noSteps = 'step' + [i];
                //         var noText = 'pass' + contador;
                //         // console.log(noText)
                //         document.getElementById(noSteps).classList.add('Inactive');
                //         document.getElementById(noText).classList.add('Inactive');
                //         contador = contador + 1;
                //     }
                // } else {

                // viewhideinputs('finalUser2', 'Inactive', 'Active');
                // viewhideinputs('passfinalUser2', 'Inactive', 'Active');
                // viewhideinputs('finalUser1', 'Inactive', 'Active');
                // viewhideinputs('passfinalUser1', 'Inactive', 'Active');
                // viewhideinputs('step2', 'Active', 'Inactive');
                // viewhideinputs('step3', 'Active', 'Inactive');
                // viewhideinputs('finalUser3', 'Inactive', 'Active');
                // viewhideinputs('passfinalUser3', 'Inactive', 'Active');

                for (var i = 8; i <= 8; i++) {
                    var noSteps = 'step' + [i];
                    var noText = 'pass' + [i];
                    document.getElementById(noSteps).classList.remove('Inactive');
                    document.getElementById(noText).classList.remove('Inactive');
                }
                // }


            }

        }

        function typeTitle() {
            var userType = document.getElementById('usertype').value;
            var charges = document.getElementById('charge').value;
            for (let index = 0; index <= 10; index++) {

                if (index == userType) {
                    viewhideinputs('typ' + index, 'Active', 'Inactive');
                } else {
                    viewhideinputs('typ' + index, 'Inactive', 'Active');
                }

            }
        }

        function beneficiaryChild() {
            var beneficiaryType = document.getElementById('beneficiary').value;
            if (beneficiaryType == 3) {
                documentOn('nameBeneficiary', 'docNameBeneficiary');
            }
        }

        jQuery('#birthdate').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#birthdate').on('change', function(e) {
        //     @this.set('birthdate', e.target.value);
        // });

        jQuery('#study_end_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#start_date_last_company').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#start_date_last_company').on('change', function(e) {
        //     @this.set('start_date_last_company', e.target.value);
        // });

        jQuery('#date_end_last_company').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#date_end_last_company').on('change', function(e) {
        //     @this.set('date_end_last_company', e.target.value);
        // });

        jQuery('#date_layoffs').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#date_layoffs').on('change', function(e) {
        //     @this.set('date_layoffs', e.target.value);
        // });

        jQuery('#date_eps').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#date_eps').on('change', function(e) {
        //     @this.set('date_eps', e.target.value);
        // });

        jQuery('#date_pension').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#date_pension').on('change', function(e) {
        //     @this.set('date_pension', e.target.value);
        // });

        jQuery('#arl_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#arl_date').on('change', function(e) {
        //     @this.set('arl_date', e.target.value);
        // });

        jQuery('#date_compensationbox').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#date_compensationbox').on('change', function(e) {
        //     @this.set('date_compensationbox', e.target.value);
        // });

        jQuery('#license_expiration').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#license_expiration').on('change', function(e) {
        //     @this.set('license_expiration', e.target.value);
        // });

        jQuery('#certificate_drugs_alchoolemia').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#certificate_drugs_alchoolemia').on('change', function(e) {
        //     @this.set('certificate_drugs_alchoolemia', e.target.value);
        // });

        jQuery('#SIMIT_queries').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#SIMIT_queries').on('change', function(e) {
        //     @this.set('SIMIT_queries', e.target.value);
        // });

        // jQuery('#driving_exam').datetimepicker({
        //     format: 'Y-m-d',
        //     theme: 'dark',
        //     timepicker: false
        // });
        // $('#driving_exam').on('change', function(e) {
        //     @this.set('driving_exam', e.target.value);
        // });

        // jQuery('#Norm_Overland_Transportation_Automotive').datetimepicker({
        //     format: 'Y-m-d',
        //     theme: 'dark',
        //     timepicker: false
        // });
        // $('#Norm_Overland_Transportation_Automotive').on('change', function(e) {
        //     @this.set('Norm_Overland_Transportation_Automotive', e.target.value);
        // });

        jQuery('#Rules_Transit').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#Rules_Transit').on('change', function(e) {
        //     @this.set('Rules_Transit', e.target.value);
        // });

        // jQuery('#Normative_Tips').datetimepicker({
        //     format: 'Y-m-d',
        //     theme: 'dark',
        //     timepicker: false
        // });
        // $('#Normative_Tips').on('change', function(e) {
        //     @this.set('Normative_Tips', e.target.value);
        // });

        // jQuery('#Driving_Methods').datetimepicker({
        //     format: 'Y-m-d',
        //     theme: 'dark',
        //     timepicker: false
        // });
        // $('#Driving_Methods').on('change', function(e) {
        //     @this.set('Driving_Methods', e.target.value);
        // });

        jQuery('#Defensive_driving').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#Defensive_driving').on('change', function(e) {
        //     @this.set('Defensive_driving', e.target.value);
        // });

        // jQuery('#distractions').datetimepicker({
        //     format: 'Y-m-d',
        //     theme: 'dark',
        //     timepicker: false
        // });
        // $('#distractions').on('change', function(e) {
        //     @this.set('distractions', e.target.value);
        // });

        jQuery('#First_aid').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#First_aid').on('change', function(e) {
        //     @this.set('First_aid', e.target.value);
        // });

        // jQuery('#First_Responder').datetimepicker({
        //     format: 'Y-m-d',
        //     theme: 'dark',
        //     timepicker: false
        // });
        // $('#First_Responder').on('change', function(e) {
        //     @this.set('First_Responder', e.target.value);
        // });

        jQuery('#psicosensometrico').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#psicosensometrico').on('change', function(e) {
        //     @this.set('psicosensometrico', e.target.value);
        // });

        jQuery('#Active_Passive_Security_vehicle').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#Active_Passive_Security_vehicle').on('change', function(e) {
        //     @this.set('Active_Passive_Security_vehicle', e.target.value);
        // });

        jQuery('#Road_safety').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#Road_safety').on('change', function(e) {
        //     @this.set('Road_safety', e.target.value);
        // });

        jQuery('#user_entry_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#user_entry_date').on('change', function(e) {
        //     @this.set('user_entry_date', e.target.value);
        // });

        jQuery('#date_withdrawal_user').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // format:'Y-m-d' });
        // $('#date_withdrawal_user').on('change', function(e) {
        //     @this.set('date_withdrawal_user', e.target.value);
        // });

        // $('#datepicker').on('change', function(e) {
        //     @this.set('taskduedate', e.target.value);
        // });

        // $('#InputDoclicense').on('change', function(){
        //     if ($(this).val() != '' || $(this).val() != 0) {
        //         document.getElementById('Doclicense').classList.remove('icon-green');
        //         document.getElementById('Doclicense').classList.add('icon-blue');
        //         // console.log('si');
        //     }
        // });

        function fechasSet(id) {

            $('#' + id).on('change', function(e) {
                @this.set(id, e.target.value);
            });
        }


        function documentAbove(input, color) {

            var inputDocument = document.getElementById(input).value;

            if (inputDocument != '' || inputDocument != 0) {

                let timerInterval
                swal.fire({
                    title: 'Cargando...',
                    html: 'Cargando documento <b></b> milliseconds.', //Cargando la información del sistema en
                    timer: 4000,
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
                        document.getElementById(color).classList.remove('icon-green');
                        document.getElementById(color).classList.add('icon-blue');
                    }
                })
                // console.log('si');
            } else {

                document.getElementById(color).classList.remove('icon-blue');
                document.getElementById(color).classList.add('icon-green');
            }
        }

        function documentOn(paramInput, docInput) {

            var fechDoc = document.getElementById(paramInput).value;

            if (fechDoc != "" || fechDoc != 0) {
                document.getElementById(paramInput).classList.remove('w-full');
                document.getElementById(paramInput).classList.add('w90');
                document.getElementById(docInput).classList.remove('Inactive');
            } else {
                document.getElementById(paramInput).classList.remove('w90');
                document.getElementById(paramInput).classList.add('w-full');
                document.getElementById(docInput).classList.add('Inactive');
            }
        }


        // jQuery(dateField).datetimepicker({
        //     theme: 'dark',
        //     step: 5,
        //     minDate: '2022/08/01', //yesterday is minimum date(for today use 0 or -1970/01/01)
        //     maxDate: '2022/09/01' //tomorrow is maximum date calendar

        // });
        // // format0Date:'Y-m-d',
        // //  minDate:'2022/08/01',//yesterday is minimum date(for today use 0 or -1970/01/01)
        // //  maxDate:'2022/09/01',//tomorrow is maximum date calendar
        // //  theme:'darK'
        // // });
    </script>
@endsection
