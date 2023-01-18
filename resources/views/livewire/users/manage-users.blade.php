<div>


    <div class="py-12 mb-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="justify-center flex">
                {{-- class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-gray-50-s dark:bg-gray-800 dark:text-white" --}}
                <h1 class="text-black dark:text-white text-4xl rounded-lg border-b-acuamarine-800 p-1">
                    Manage Users</h1>
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
                    create new user
                </button>
            </div>

            <div class="w-full overflow-x-auto">
                @if ($users->count())
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

                                    Name

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

                                    identificationcard

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

                                    usertype

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

                                    user state

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

                                    user entry date

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

                                    username

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

                                    email

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

                                    Actions</th>
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
                                            <!-- Avatar with inset shadow -->
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
                                                ACTIVE
                                            </span>
                                        @else
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                                INACTIVE
                                            </span>
                                        @endif
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
                                                {{-- flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" --}} aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button onclick="deletes({{ $user->id }})"
                                                class="inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 readonly:opacity-25 transition"
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
                        No existe Usuarios que coincidan con lo que estas buscando...
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
            x-transition:leave-end="opacity-0  transform translate-y-1/2" {{-- x-on:click.away="closeModal" --}}
            class="w-9-12 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 overflow-x-hidden overflow-y-auto"
            role="dialog" id="modal">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-center border-b-fuchsia-800 border-b">
                <!-- Modal title -->
                <p class="justify-start mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                <h1 class="text-black dark:text-white text-4xl1">Creating new user<span class="typed"></span></h1>
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
                                </span>
                            </div>
                            <p id="pass6">Paso 6</p>
                        </div>
                        <div id="f1-step-user7" class="f1-step-user ">
                            <div class="f1-step-icon">

                                <!-- Crea un icono envuelto por la clase fa-stack -->
                                <span class="fa-stack  ">
                                    <!-- El icono que envolverá el número -->
                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                    <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                    <strong class="fa-stack-2x -ml-1 numcolor" id="step7">
                                        7
                                    </strong>
                                </span>
                            </div>
                            <p id="pass7">Paso 7</p>
                        </div>
                        <div id="f1-step-user8" class="f1-step-user ">
                            <div class="f1-step-icon">

                                <!-- Crea un icono envuelto por la clase fa-stack -->
                                <span class="fa-stack  ">
                                    <!-- El icono que envolverá el número -->
                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                    <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                    <strong class="fa-stack-2x -ml-1 numcolor" id="step8">
                                        8
                                    </strong>
                                    <strong class="Inactive fa-stack-1x -ml-1 numcolor" id="finalUser2">
                                        FIN
                                    </strong>
                                </span>
                            </div>
                            <p id="pass8">Paso 8</p>
                            <p class="Inactive" id="passfinalUser2">fin</p>
                        </div>
                        <div id="f1-step-user9" class="f1-step-user ">
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
                        </div>
                        <div id="f1-step-user10" class="f1-step-user ">
                            <div class="f1-step-icon">

                                <!-- Crea un icono envuelto por la clase fa-stack -->
                                <span class="fa-stack  ">
                                    <!-- El icono que envolverá el número -->
                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                    <!-- un elemento strong con el contenido personalizado, en este caso un número -->
                                    <strong class="fa-stack-1x -ml-1 numcolor" id="step10">
                                        FIN
                                    </strong>
                                </span>
                            </div>
                            <p id="pass10">Fin</p>
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
                                        <option value="4" selected>Vinculado</option>
                                    </select>

                                </div>

                                <div class="w-6-12 Inactive" id="divCharge">

                                    <label id="labelCharge"
                                        class="Inactive text-gray-700 dark:text-gray-400">Selecciona un Cargo</label>

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
                                        class="Inactive text-gray-700 dark:text-gray-400">supplier_name
                                        <input
                                            class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Nombre del proveedor" type="text" id="supplier_name"
                                            name="supplier_name" wire:model.defer="supplier_name" />
                                </div>

                            </div>

                            <div class="flex space-x-4 ">

                                <div class="w-6-12" id="divIdentification">
                                    <label id="labelIdentification"
                                        class="Inactive text-gray-700 dark:text-gray-400">identification</label>
                                    <select wire:model.defer="identification" id="identification"
                                        name="identification"
                                        class="Inactive block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">IDENTIFICACIÓN</option>
                                        @foreach ($identifications as $identification)
                                            <option value="{{ $identification->id }}">
                                                {{ $identification->description_identification }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="w-6-12" id="divContractDocument">
                                    <label id="labeIdentificationcard"
                                        class="Inactive text-gray-700 dark:text-gray-400">identificationcard</label>

                                    <input
                                        class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="documento" type="text" id="identificationcard"
                                        maxlength="12" name="identificationcard"
                                        wire:model.defer="identificationcard" />
                                </div>

                            </div>

                            <div class="flex space-x-4 ">

                                <div class="w-6-12">
                                    <label id="labelFirstname"
                                        class="Inactive text-gray-700 dark:text-gray-400">firstname</label>

                                    <input
                                        class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Primer nombre" type="text" id="firstname" name="firstname"
                                        wire:model.defer="firstname" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelSecondname"
                                        class="Inactive text-gray-700 dark:text-gray-400">secondname</label>

                                    <input
                                        class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Segundo nombre" type="text" id="secondname"
                                        name="secondname" wire:model.defer="secondname" />
                                </div>

                            </div>

                            <div class="flex space-x-4 ">

                                <div class="w-6-12">
                                    <label id="labelLastname"
                                        class="Inactive text-gray-700 dark:text-gray-400">lastname</label>

                                    <input
                                        class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Apellido paterno" type="text" id="lastname" name="lastname"
                                        wire:model.defer="lastname" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelMotherslastname"
                                        class="Inactive text-gray-700 dark:text-gray-400">motherslastname</label>

                                    <input
                                        class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Apellido materno" type="text" id="motherslastname"
                                        name="motherslastname" wire:model.defer="motherslastname" />
                                </div>

                            </div>

                            <div class="flex space-x-4 ">

                                <div class="w-6-12">
                                    <label id="labelCompanyNameProvider"
                                        class="Inactive text-gray-700 dark:text-gray-400">company_name_provider</label>

                                    <input
                                        class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="nombre de la empresa proveedor" type="text"
                                        id="company_name_provider" name="company_name_provider"
                                        wire:model.defer="company_name_provider" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelCommercialReasonSupplier"
                                        class="Inactive text-gray-700 dark:text-gray-400">commercial_reason_supplier</label>

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
                                        class="Inactive text-gray-700 dark:text-gray-400">supplier_category</label>

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
                                        class="Inactive text-gray-700 dark:text-gray-400">products_and_services</label>

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
                                        class="Inactive text-gray-700 dark:text-gray-400">economic_activity</label>

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
                                        class="Inactive text-gray-700 dark:text-gray-400">supplier_description</label>

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
                                        class="Inactive text-gray-700 dark:text-gray-400">place_expedition_identificationcard</label>

                                    <input
                                        class="Inactive block w-98 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="categoría de proveedor" type="text"
                                        id="place_expedition_identificationcard"
                                        name="place_expedition_identificationcard"
                                        wire:model.defer="place_expedition_identificationcard" />
                                </div>

                                <div wire:ignore class="w-6-12 Inactive" id="divNit">
                                    <label id="labelNit"
                                        class="Inactive text-gray-700 dark:text-gray-400">Nit</label>

                                    <input
                                        class="Inactive block w-98 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Nit de proveedor" type="text" id="nit" name="nit"
                                        wire:model.defer="nit" />
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

                                    <label id="labelCountry" class="text-gray-700 dark:text-gray-400">Selecciona un
                                        pais</label>

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
                                        class="text-gray-700 dark:text-gray-400">Department</label><span wire:loading
                                        wire:target="country" class="text-gray-700 dark:text-gray-400">Cargando
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
                                        class="text-gray-700 dark:text-gray-400">city</label><span wire:loading
                                        wire:target="Department" class="text-gray-700 dark:text-gray-400">Cargando
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
                                    <label id="labelAddress" class="text-gray-700 dark:text-gray-400">address</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Dirección" type="text" id="address" name="address"
                                        wire:model.defer="address" />
                                </div>

                                <div class="w-1-3" id="divCheck">

                                    <label id="labelCheck" class="text-gray-700 dark:text-gray-400">Selecciona el tipo
                                        de Sexo</label>

                                    <div class="form-check check1">
                                        <input class="form-check-input" type="radio" name="type_sex"
                                            id="sexM" value="M" wire:model.defer="type_sex">
                                        <label id="labelSexM" class="form-check-label" for="sexM">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="form-check check2">
                                        <input class="form-check-input" type="radio" name="type_sex"
                                            id="sexF" value="F" wire:model.defer="type_sex">
                                        <label id="labelSexF" class="form-check-label" for="sexF">
                                            Femenino
                                        </label>
                                    </div>

                                </div>


                            </div>

                            <div class="flex space-x-4" wire:ignore>

                                <div class="w-6-12">
                                    <label id="labelPhone" class="text-gray-700 dark:text-gray-400">phone</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="phone" type="tel" id="phone" name="phone"
                                        wire:model.defer="phone" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelPhoneCellular"
                                        class="text-gray-700 dark:text-gray-400">phone_cellular</label>

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
                                        class="text-gray-700 dark:text-gray-400">birthdate</label>

                                    <input readonly
                                        class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="birthdate" type="text" id="birthdate" name="birthdate"
                                        wire:model.defer="birthdate" onchange="fechasSet('birthdate')" />
                                </div>

                                <div class="w-6-12">

                                    <label id="labelCityBirth"
                                        class="text-gray-700 dark:text-gray-400">city_birth</label>

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
                                    <label id="labelWeight" class="text-gray-700 dark:text-gray-400">weight</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="peso" type="text" id="weight" name="weight"
                                        step="0.01" min="0" max="10" maxlength="5"
                                        wire:model.defer="weight" />
                                </div>

                                <div class="w-1-2">
                                    <label id="labelPantSize"
                                        class="text-gray-700 dark:text-gray-400">pant_size</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="talla de pantalón" type="text" id="pant_size"
                                        name="pant_size" maxlength="5" wire:model.defer="pant_size" />
                                </div>

                                <div class="w-1-2">
                                    <label id="labelShirtSize"
                                        class="text-gray-700 dark:text-gray-400">shirt_size</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Talla de camisa" type="text" id="shirt_size"
                                        name="shirt_size" maxlength="5" wire:model.defer="shirt_size" />
                                </div>

                                <div class="w-1-2">
                                    <label id="labelShoeSize"
                                        class="text-gray-700 dark:text-gray-400">shoe_size</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="calzado del zapato" type="text" id="shoe_size"
                                        name="shoe_size" maxlength="5" wire:model.defer="shoe_size" />
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">

                                    <label id="labelCivilStatus"
                                        class="text-gray-700 dark:text-gray-400">civil_status</label>

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
                                        class="text-gray-700 dark:text-gray-400">work_area</label>

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
                                        class="text-gray-700 dark:text-gray-400">binding_type</label>

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
                                    <label id="labelSalary" class="text-gray-700 dark:text-gray-400">salary</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="lugar de retorno" type="number" id="salary" name="salary"
                                        wire:model.defer="salary" />
                                </div>

                                <div class="w-1-3">
                                    <label id="labelAidTransport"
                                        class="text-gray-700 dark:text-gray-400">aid_transport</label>

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
                                        class="text-gray-700 dark:text-gray-400">education_level</label>

                                    <select wire:model.defer="education_level" id="education_level"
                                        name="education_level"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona el tipo de contrato</option>

                                        @foreach ($educationLevels as $educationLevel)
                                            <option value="{{ $educationLevel->id }}">
                                                {{ $educationLevel->description_levelEducation }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="w-6-12">
                                    <label id="labelEducationalInstitution"
                                        class="text-gray-700 dark:text-gray-400">educational_institution</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Institución educativa" type="text"
                                        id="educational_institution" name="educational_institution"
                                        wire:model.defer="educational_institution" />
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelLastYear"
                                        class="text-gray-700 dark:text-gray-400">last_year</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="ultimo año cursado" type="text" id="last_year"
                                        name="last_year" maxlength="4" wire:model.defer="last_year" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelStudyEndDate"
                                        class="text-gray-700 dark:text-gray-400">study_end_date</label>

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
                                        class="text-gray-700 dark:text-gray-400">obtained_title</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="titulo obtenido" type="text" id="obtained_title"
                                        name="obtained_title" wire:model.defer="obtained_title" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelLastCompanyName"
                                        class="text-gray-700 dark:text-gray-400">last_company_name</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Ultima empresa donde trabajaste" type="text"
                                        id="last_company_name" name="last_company_name"
                                        wire:model.defer="last_company_name" />
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelChargesLastCompany"
                                        class="text-gray-700 dark:text-gray-400">charges_last_company</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="cargo de la ultima empresa" type="text"
                                        id="charges_last_company" name="charges_last_company"
                                        wire:model.defer="charges_last_company" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelStartDateLastCompany"
                                        class="text-gray-700 dark:text-gray-400">start_date_last_company</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="fecha de ingreso conrato de la ultima empresa" type="text"
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
                                        class="text-gray-700 dark:text-gray-400">date_end_last_company</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="fecha de finalización contrato de la ultima empresa"
                                        type="text" id="date_end_last_company" name="date_end_last_company"
                                        wire:model.defer="date_end_last_company"
                                        onchange="fechasSet('date_end_last_company')" />
                                </div>

                                <div class="w-6-12">

                                    <label id="labelFunctionsPerformed"
                                        class="text-gray-700 dark:text-gray-400">functions_performed</label>

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
                                        class="Inactive text-gray-700 dark:text-gray-400">family_document_type</label>
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
                                        class="Inactive text-gray-700 dark:text-gray-400">identificationcard_family</label>

                                    <input
                                        class="Inactive block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="documento" type="text" id="identificationcard_family"
                                        name="identificationcard_family"
                                        wire:model.defer="identificationcard_family" />
                                </div>

                                <div class="w-1-3">
                                    <label id="labelRelationship"
                                        class="text-gray-700 dark:text-gray-400">relationship</label>

                                    <select wire:model.defer="relationship" id="relationship" name="relationship"
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
                                    <label id="labelFamilyNames"
                                        class="text-gray-700 dark:text-gray-400">family_names</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Nombre completo del familiar" type="text" id="family_names"
                                        name="family_names" wire:model.defer="family_names" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelFamilyAddress"
                                        class="text-gray-700 dark:text-gray-400">family_address</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Dirección del familiar" type="text" id="family_address"
                                        name="family_address" wire:model.defer="family_address" />
                                </div>

                            </div>


                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelFamilyPhone"
                                        class="text-gray-700 dark:text-gray-400">family_phone</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="telefono del familiar" type="tel" id="family_phone"
                                        name="family_phone" wire:model.defer="family_phone" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelFamilyPhoneCellular"
                                        class="text-gray-700 dark:text-gray-400">family_phone_cellular</label>

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

                                <div class="w-6-12">
                                    <label id="labelEps" class="text-gray-700 dark:text-gray-400">eps</label>

                                    <select wire:model.defer="eps" id="eps" name="eps"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona la eps del usuario</option>

                                        @foreach ($epses as $eps)
                                            <option value="{{ $eps->id }}">
                                                {{ $eps->description_eps }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="w-6-12 ">

                                    <label id="labelEpsStatus" class="text-gray-700 dark:text-gray-400">Selecciona el
                                        estado de la
                                        eps</label>

                                    <select wire:model.defer="eps_status" id="eps_status" name="eps_status"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="">Selecciona el estado de la eps</option>
                                        <option value="1">ACTIVO</option>
                                        <option value="2">PENDIENTE</option>
                                        <option value="3">INACTIVO</option>
                                    </select>

                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelDateEps" class="text-gray-700 dark:text-gray-400">date_eps</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Dirección del familiar" type="text" id="date_eps"
                                        name="date_eps" wire:model.defer="date_eps" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelBloodType"
                                        class="text-gray-700 dark:text-gray-400">blood_type</label>

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

                                <div class="w-6-12">
                                    <label id="labelPension" class="text-gray-700 dark:text-gray-400">pension</label>

                                    <select wire:model.defer="pension" id="pension" name="pension"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona la pension del usuario</option>

                                        @foreach ($pensions as $pension)
                                            <option value="{{ $pension->id }}">
                                                {{ $pension->description_pension }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="w-6-12 ">

                                    <label id="labelPensionStatus" class="text-gray-700 dark:text-gray-400">Selecciona
                                        el estado de la
                                        pension</label>

                                    <select wire:model.defer="pension_status" id="pension_status"
                                        name="pension_status"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="">Selecciona el estado de la pension</option>
                                        <option value="1">ACTIVO</option>
                                        <option value="2">PENDIENTE</option>
                                        <option value="3">INACTIVO</option>
                                    </select>

                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelDatePension"
                                        class="text-gray-700 dark:text-gray-400">date_pension</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Dirección del familiar" type="text" id="date_pension"
                                        name="date_pension" wire:model.defer="date_pension"
                                        onchange="fechasSet('date_pension')" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelLayoffs" class="text-gray-700 dark:text-gray-400">layoffs</label>

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

                                <div class="w-6-12 ">

                                    <label id="labelStatusLayoffs" class="text-gray-700 dark:text-gray-400">Selecciona
                                        el estado de la
                                        status_layoffs</label>

                                    <select wire:model.defer="status_layoffs" id="status_layoffs"
                                        name="status_layoffs"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="">Selecciona el estado de las cesantias</option>
                                        <option value="1">ACTIVO</option>
                                        <option value="2">PENDIENTE</option>
                                        <option value="3">INACTIVO</option>
                                    </select>

                                </div>

                                <div class="w-6-12">
                                    <label id="labelDateLayoffs"
                                        class="text-gray-700 dark:text-gray-400">date_layoffs</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha del inicio de las cesantias" type="text"
                                        id="date_layoffs" name="date_layoffs" wire:model.defer="date_layoffs"
                                        onchange="fechasSet('date_layoffs')" />
                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelArl" class="text-gray-700 dark:text-gray-400">arl</label>

                                    <select wire:model.defer="arl" id="arl" name="arl"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="0">Selecciona la arl del usuario</option>

                                        @foreach ($arls as $arl)
                                            <option value="{{ $arl->id }}">
                                                {{ $arl->description_arl }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="w-6-12 ">

                                    <label id="labelArlStatus" class="text-gray-700 dark:text-gray-400">Selecciona el
                                        estado de la
                                        arl_status</label>

                                    <select wire:model.defer="arl_status" id="arl_status" name="arl_status"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="">Selecciona el estado de la arl</option>
                                        <option value="1">ACTIVO</option>
                                        <option value="2">PENDIENTE</option>
                                        <option value="3">INACTIVO</option>
                                    </select>

                                </div>

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12">
                                    <label id="labelArlDate" class="text-gray-700 dark:text-gray-400">arl_date</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha del inicio de la arl" type="text" id="arl_date"
                                        name="arl_date" wire:model.defer="arl_date"
                                        onchange="fechasSet('arl_date')" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelCompensationbox"
                                        class="text-gray-700 dark:text-gray-400">compensationbox</label>

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

                            </div>

                            <div class="flex space-x-4">

                                <div class="w-6-12 ">

                                    <label id="labelCompensationboxStatus"
                                        class="text-gray-700 dark:text-gray-400">Selecciona el estado de la
                                        compensationbox_status</label>

                                    <select wire:model.defer="compensationbox_status" id="compensationbox_status"
                                        name="compensationbox_status"
                                        class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <option value="">Selecciona el estado de la caja de compensación</option>
                                        <option value="1">ACTIVO</option>
                                        <option value="2">PENDIENTE</option>
                                        <option value="3">INACTIVO</option>
                                    </select>

                                </div>

                                <div class="w-6-12">
                                    <label id="labelDateCompensationbox"
                                        class="text-gray-700 dark:text-gray-400">date_compensationbox</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Dirección del familiar" type="text"
                                        id="date_compensationbox" name="date_compensationbox"
                                        wire:model.defer="date_compensationbox"
                                        onchange="fechasSet('date_compensationbox')" />
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
                                    <label id="labelLicenseNumber"
                                        class="text-gray-700 dark:text-gray-400">license_number</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="telefono del familiar" type="number" id="license_number"
                                        name="license_number" wire:model.defer="license_number" />

                                </div>

                                <div class="w-6-12">
                                    <label id="labelLicenseCategory"
                                        class="text-gray-700 dark:text-gray-400">license_category</label>

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
                                        class="text-gray-700 dark:text-gray-400">license_expiration</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha del certificado de espiracion_licencia" type="text"
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
                                        class="text-gray-700 dark:text-gray-400">certificate_drugs_alchoolemia</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha del certificado de drogas_alchoolemia" type="text"
                                        id="certificate_drugs_alchoolemia" name="certificate_drugs_alchoolemia"
                                        wire:model.defer="certificate_drugs_alchoolemia"
                                        onchange="fechasSet('certificate_drugs_alchoolemia'),documentOn('certificate_drugs_alchoolemia','DocAlchoolemia')" />

                                    <span id="DocAlchoolemia"
                                        class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <input id="InputDocAlchoolemia" wire:model.defer="DocAlchoolemia"
                                            onchange="documentAbove('InputDocAlchoolemia','DocAlchoolemia')"
                                            class="upload-input" type="file">
                                    </span>
                                </div>

                            </div>

                            <div class="flex space-x-4" wire:ignore>

                                <div class="w-6-12">
                                    <label id="labelSIMITQueries"
                                        class="text-gray-700 dark:text-gray-400">SIMIT_queries</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha del certificado de Consultas_SIMIT" type="text"
                                        id="SIMIT_queries" name="SIMIT_queries" wire:model.defer="SIMIT_queries"
                                        onchange="fechasSet('SIMIT_queries'),documentOn('SIMIT_queries','DocSimitQueries')" />

                                    <span id="DocSimitQueries"
                                        class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <input id="InputDocSimitQueries" wire:model.defer="DocSimitQueries"
                                            onchange="documentAbove('InputDocSimitQueries','DocSimitQueries')"
                                            class="upload-input" type="file">
                                    </span>
                                </div>

                                <div class="w-6-12">
                                    <label id="labelDrivingExam"
                                        class="text-gray-700 dark:text-gray-400">driving_exam</label>

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
                                </div>

                            </div>

                            <div class="flex space-x-4" wire:ignore>

                                <div class="w-6-12">
                                    <label id="labelNormOverlandTransportationAutomotive"
                                        class="text-gray-700 dark:text-gray-400">Norm_Overland_Transportation_Automotive</label>

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
                                </div>

                                <div class="w-6-12">
                                    <label id="labelRulesTransit"
                                        class="text-gray-700 dark:text-gray-400">Rules_Transit</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha del certificado de Normas_Transito" type="text"
                                        id="Rules_Transit" name="Rules_Transit" wire:model.defer="Rules_Transit"
                                        onchange="fechasSet('Rules_Transit'),documentOn('Rules_Transit','DocRulesTransit')" />

                                    <span id="DocRulesTransit"
                                        class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
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
                        <!--fin del paso 8 -->

                        <!--paso 9 -->
                        <fieldset wire:ignore>

                            <div class="flex space-x-4" wire:ignore>

                                <div class="w-6-12">
                                    <label id="labelNormativeTips"
                                        class="text-gray-700 dark:text-gray-400">Normative_Tips</label>

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
                                </div>

                                <div class="w-6-12">
                                    <label id="labelDrivingMethods"
                                        class="text-gray-700 dark:text-gray-400">Driving_Methods</label>

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
                                </div>

                            </div>

                            <div class="flex space-x-4" wire:ignore>

                                <div class="w-6-12">
                                    <label id="labelDefensiveDriving"
                                        class="text-gray-700 dark:text-gray-400">Defensive_driving</label>

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
                                    <label id="labelDistractions"
                                        class="text-gray-700 dark:text-gray-400">distractions</label>

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
                                </div>

                            </div>

                            <div class="flex space-x-4" wire:ignore>

                                <div class="w-6-12">
                                    <label id="labelFirstaid"
                                        class="text-gray-700 dark:text-gray-400">First_aid</label>

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

                                <div class="w-6-12">
                                    <label id="labelFirstResponder"
                                        class="text-gray-700 dark:text-gray-400">First_Responder</label>

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
                                </div>

                            </div>

                            <div class="flex space-x-4" wire:ignore>

                                <div class="w-6-12">
                                    <label id="labelfiveSensesDriving"
                                        class="text-gray-700 dark:text-gray-400">five_senses_driving</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha del certificado de los cinco_sentidos_conduccion"
                                        type="text" id="five_senses_driving" name="five_senses_driving"
                                        wire:model.defer="five_senses_driving"
                                        onchange="fechasSet('five_senses_driving'),documentOn('five_senses_driving','DocfiveSensesDriving')" />

                                    <span id="DocfiveSensesDriving"
                                        class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <input id="InputDocfiveSensesDriving"
                                            wire:model.defer="DocfiveSensesDriving"
                                            onchange="documentAbove('InputDocfiveSensesDriving','DocfiveSensesDriving')"
                                            class="upload-input" type="file">
                                    </span>
                                </div>

                                <div class="w-6-12">
                                    <label id="labelActivePassiveSecurityVehicle"
                                        class="text-gray-700 dark:text-gray-400">Active_Passive_Security_vehicle</label>

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
                        <!--fin del paso 9 -->


                        <!--paso fin -->
                        <fieldset wire:ignore>

                            <div class="flex space-x-4" wire:ignore>

                                <div class="w-6-12">
                                    <label id="labelRoadSafety"
                                        class="text-gray-700 dark:text-gray-400">Road_safety</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha del certificado de la Seguridad_Vial" type="text"
                                        id="Road_safety" name="Road_safety" wire:model.defer="Road_safety"
                                        onchange="fechasSet('Road_safety'),documentOn('Road_safety','DocRoadSafety')" />

                                    <span id="DocRoadSafety"
                                        class="Inactive upload-ico fas fa-file-upload icon-green" aria-hidden="true"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <input id="InputDocRoadSafety" wire:model.defer="DocRoadSafety"
                                            onchange="documentAbove('InputDocRoadSafety','DocRoadSafety')"
                                            class="upload-input" type="file">
                                    </span>
                                </div>

                                <div class="w-6-12">
                                    <label id="labelLinked" class="text-gray-700 dark:text-gray-400">Linked</label>

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

                            </div>

                            <div class="flex space-x-4" wire:ignore>

                                <div class="w-6-12">
                                    <label id="labelUserEntryDate"
                                        class="text-gray-700 dark:text-gray-400">user_entry_date</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha inicio de contrato con STEP" type="text"
                                        id="user_entry_date" name="user_entry_date"
                                        wire:model.defer="user_entry_date"
                                        onchange="fechasSet('user_entry_date')" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelDateWithdrawalUser"
                                        class="text-gray-700 dark:text-gray-400">date_withdrawal_user</label>

                                    <input readonly
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Fecha fin de contrato con STEP" type="text"
                                        id="date_withdrawal_user" name="date_withdrawal_user"
                                        wire:model.defer="date_withdrawal_user"
                                        onchange="fechasSet('date_withdrawal_user')" />
                                </div>


                            </div>

                            <div class="flex space-x-4" wire:ignore>

                                <div class="w-6-12">
                                    <label id="labelProfilePhotoPath"
                                        class="text-gray-700 dark:text-gray-400">profile_photo_path</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Selecciona una foto de perfil para este usuario" type="file"
                                        id="profile_photo_path" name="profile_photo_path"
                                        wire:model.defer="profile_photo_path" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelEmail" class="text-gray-700 dark:text-gray-400">email</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Escribe un correo electronico" type="email" id="email"
                                        name="email" wire:model.defer="email" />
                                </div>

                            </div>

                            <div class="flex space-x-4" wire:ignore>

                                <div class="w-6-12">
                                    <label id="labelUsername"
                                        class="text-gray-700 dark:text-gray-400">username</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Escribe el nombre de usuario para el sistema" type="text"
                                        id="username" name="username" wire:model.defer="username" />
                                </div>

                                <div class="w-6-12">
                                    <label id="labelPassword"
                                        class="text-gray-700 dark:text-gray-400">password</label>

                                    <input
                                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Escribe la contraseña del usuario para el sistema"
                                        type="password" id="password" name="password"
                                        wire:model.defer="password" />
                                </div>

                            </div>

                            <br>
                            <div class="f1-buttons">
                                <button type="button"
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
                <button id="btnStore"
                    class="Inactive w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    wire:click="store" onclick="restart()" x-on:click="closeModal">
                    Accept
                </button>
                <button x-on:click="closeModal" onclick="restart()"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                    wire:click="clear">
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
                <h1 class="text-black dark:text-white text-4xl1">Editing the information of the user
                    @if (!is_null($editUsers))
                        {{ $editUsers->firstname }} {{ $editUsers->lastname }}
                    @endif
                    <span class="typed2"></span>
                </h1>
                </p>
                <button onclick="closeModalEdit()"
                    class="ml-auto px-5-1 py-3-1 text-sm  rounded-lg  bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                    aria-label="close">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img"
                        aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
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
                                            <label class=" text-gray-700 dark:text-gray-400">identification</label>
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
                                                class=" text-gray-700 dark:text-gray-400">identificationcard</label>

                                            <div class="border-ourple-50-s rounded-2xl p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    {{ $editUsers->identificationcard }}
                                                </p>
                                            </div>
                                        </div>



                                    </div>

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label class=" text-gray-700 dark:text-gray-400">firstname</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Primer nombre" type="text"
                                                wire:model="editUsers.firstname" />
                                        </div>

                                        <div class="w-6-12">
                                            <label class=" text-gray-700 dark:text-gray-400">secondname</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Segundo nombre" type="text" name="secondname"
                                                wire:model="editUsers.secondname" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label class=" text-gray-700 dark:text-gray-400">lastname</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Apellido paterno" type="text"
                                                wire:model="editUsers.lastname" />
                                        </div>

                                        <div class="w-6-12">
                                            <label class=" text-gray-700 dark:text-gray-400">motherslastname</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Apellido materno" type="text"
                                                name="motherslastname" wire:model="editUsers.motherslastname" />
                                        </div>

                                    </div>

                                @endif

                                @if ($editUsers->usertype == 3)

                                    <div class="flex space-x-4 ">

                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">company_name_provider</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="nombre de la empresa proveedor" type="text"
                                                name="company_name_provider"
                                                wire:model="editUsers.company_name_provider" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">commercial_reason_supplier</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="proveedor de razón comercial" type="text"
                                                name="commercial_reason_supplier"
                                                wire:model="editUsers.commercial_reason_supplier" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4 ">


                                        <div class="w-6-12">

                                            <label class=" text-gray-700 dark:text-gray-400">supplier_category</label>

                                            <select wire:model="editUsers.supplier_category"
                                                name="supplier_category"
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
                                                class=" text-gray-700 dark:text-gray-400">products_and_services</label>

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
                                            <label class=" text-gray-700 dark:text-gray-400">economic_activity</label>

                                            <select wire:model="editUsers.economic_activity"
                                                name="economic_activity"
                                                class=" block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona una actividad económica</option>

                                                @foreach ($economicActivitys as $economicActivity)
                                                    <option value="{{ $economicActivity->id }}">
                                                        {{ $economicActivity->EconomicActivity_number }} -
                                                        {{ $economicActivity->description_EconomicActivity }}</option>
                                                @endforeach

                                            </select>

                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class=" text-gray-700 dark:text-gray-400">supplier_description</label>

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
                                                class=" text-gray-700 dark:text-gray-400">place_expedition_identificationcard</label>

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
                                            class="text-gray-700 dark:text-gray-400">Department</label><span
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
                                            class="text-gray-700 dark:text-gray-400">city</label><span wire:loading
                                            wire:target="Department"
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
                                        <label class="text-gray-700 dark:text-gray-400">address</label>

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
                                                <label class="form-check-label" for="sexM">
                                                    Masculino
                                                </label>
                                            </div>
                                            <div class="form-check check2">
                                                <input class="form-check-input" type="radio" name="type_sex"
                                                    id="sexeditF" value="F" wire:model="editUsers.type_sex">
                                                <label class="form-check-label" for="sexF">
                                                    Femenino
                                                </label>
                                            </div>

                                        </div>
                                    @endif

                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">phone</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="phone" type="tel" name="phone"
                                            wire:model="editUsers.phone" />
                                    </div>

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">phone_cellular</label>

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
                                            <label class="text-gray-700 dark:text-gray-400">birthdate</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="birthdate" type="text" name="birthdate"
                                                wire:model="editUsers.birthdate" />
                                        </div>

                                        <div class="w-6-12">

                                            <label class="text-gray-700 dark:text-gray-400">city_birth</label>

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
                                            <label class="text-gray-700 dark:text-gray-400">weight</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="peso" type="text" name="weight" step="0.01"
                                                min="0" max="10" maxlength="5"
                                                wire:model="editUsers.weight" />
                                        </div>

                                        <div class="w-1-2">
                                            <label class="text-gray-700 dark:text-gray-400">pant_size</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="talla de pantalón" type="text" name="pant_size"
                                                maxlength="5" wire:model="editUsers.pant_size" />
                                        </div>

                                        <div class="w-1-2">
                                            <label class="text-gray-700 dark:text-gray-400">shirt_size</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Talla de camisa" type="text" name="shirt_size"
                                                maxlength="5" wire:model="editUsers.shirt_size" />
                                        </div>

                                        <div class="w-1-2">
                                            <label class="text-gray-700 dark:text-gray-400">shoe_size</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="calzado del zapato" type="text" name="shoe_size"
                                                maxlength="5" wire:model="editUsers.shoe_size" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">

                                            <label class="text-gray-700 dark:text-gray-400">civil_status</label>

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

                                            <label class="text-gray-700 dark:text-gray-400">work_area</label>

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

                                            <label class="text-gray-700 dark:text-gray-400">binding_type</label>

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
                                            <label class="text-gray-700 dark:text-gray-400">salary</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="lugar de retorno" type="number" name="salary"
                                                wire:model="editUsers.salary" />
                                        </div>

                                        <div class="w-1-3">
                                            <label class="text-gray-700 dark:text-gray-400">aid_transport</label>

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
                                            <label class="text-gray-700 dark:text-gray-400">education_level</label>

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
                                                class="text-gray-700 dark:text-gray-400">educational_institution</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Institución educativa" type="text"
                                                name="educational_institution"
                                                wire:model="editUsers.educational_institution" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">last_year</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="ultimo año cursado" type="text" name="last_year"
                                                maxlength="4" wire:model="editUsers.last_year" />
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">study_end_date</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="fecha de finalización" type="text"
                                                name="study_end_date" wire:model="editUsers.study_end_date" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">obtained_title</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="titulo obtenido" type="text" name="obtained_title"
                                                wire:model="editUsers.obtained_title" />
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">last_company_name</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Ultima empresa donde trabajaste" type="text"
                                                name="last_company_name" wire:model="editUsers.last_company_name" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">charges_last_company</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="cargo de la ultima empresa" type="text"
                                                name="charges_last_company"
                                                wire:model="editUsers.charges_last_company" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">start_date_last_company</label>

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
                                                class="text-gray-700 dark:text-gray-400">date_end_last_company</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="fecha de finalización contrato de la ultima empresa"
                                                type="text" name="date_end_last_company"
                                                wire:model="editUsers.date_end_last_company" />
                                        </div>

                                        <div class="w-6-12">

                                            <label
                                                class="text-gray-700 dark:text-gray-400">functions_performed</label>

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
                                                class=" text-gray-700 dark:text-gray-400">family_document_type</label>
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
                                                class=" text-gray-700 dark:text-gray-400">identificationcard_family</label>

                                            <input
                                                class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="documento" type="text"
                                                name="identificationcard_family"
                                                wire:model="editUsers.identificationcard_family" />
                                        </div>

                                        <div class="w-1-3">
                                            <label class="text-gray-700 dark:text-gray-400">relationship</label>

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
                                            <label class="text-gray-700 dark:text-gray-400">family_names</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Nombre completo del familiar" type="text"
                                                name="family_names" wire:model="editUsers.family_names" />
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">family_address</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Dirección del familiar" type="text"
                                                name="family_address" wire:model="editUsers.family_address" />
                                        </div>

                                    </div>


                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">family_phone</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="telefono del familiar" type="tel"
                                                name="family_phone" wire:model="editUsers.family_phone" />
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">family_phone_cellular</label>

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
                                            <label class="text-gray-700 dark:text-gray-400">eps</label>

                                            <select wire:model="editUsers.eps" name="eps"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona la eps del usuario</option>

                                                @foreach ($epses as $eps)
                                                    <option value="{{ $eps->id }}">
                                                        {{ $eps->description_eps }}</option>
                                                @endforeach

                                            </select>
                                        </div>

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

                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">date_eps</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Dirección del familiar" type="date"
                                                name="date_eps" wire:model="editUsers.date_eps" />
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">blood_type</label>

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
                                            <label class="text-gray-700 dark:text-gray-400">pension</label>

                                            <select wire:model="editUsers.pension" name="pension"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona la pension del usuario</option>

                                                @foreach ($pensions as $pension)
                                                    <option value="{{ $pension->id }}">
                                                        {{ $pension->description_pension }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="w-6-12 ">

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

                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">date_pension</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Dirección del familiar" type="date"
                                                name="date_pension" wire:model="editUsers.date_pension" />
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">layoffs</label>

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

                                        <div class="w-6-12 ">

                                            <label class="text-gray-700 dark:text-gray-400">Selecciona
                                                el estado de la
                                                status_layoffs</label>

                                            <select wire:model="editUsers.status_layoffs" name="status_layoffs"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="">Selecciona el estado de las cesantias</option>
                                                <option value="1">ACTIVO</option>
                                                <option value="2">PENDIENTE</option>
                                                <option value="3">INACTIVO</option>
                                            </select>

                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">date_layoffs</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del inicio de las cesantias" type="date"
                                                name="date_layoffs" wire:model="editUsers.date_layoffs" />
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">arl</label>

                                            <select wire:model="editUsers.arl" name="arl"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona la arl del usuario</option>

                                                @foreach ($arls as $arl)
                                                    <option value="{{ $arl->id }}">
                                                        {{ $arl->description_arl }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="w-6-12 ">

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

                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">arl_date</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del inicio de la arl" type="date"
                                                name="arl_date" wire:model="editUsers.arl_date" />
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">compensationbox</label>

                                            <select wire:model="editUsers.compensationbox" name="compensationbox"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona el tipo de caja de compensación
                                                </option>

                                                @foreach ($compensationboxes as $compensationbox)
                                                    <option value="{{ $compensationbox->id }}">
                                                        {{ $compensationbox->description_compensationbox }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12 ">

                                            <label class="text-gray-700 dark:text-gray-400">Selecciona el estado de la
                                                compensationbox_status</label>

                                            <select wire:model="editUsers.compensationbox_status"
                                                name="compensationbox_status"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="">Selecciona el estado de la caja de compensación
                                                </option>
                                                <option value="1">ACTIVO</option>
                                                <option value="2">PENDIENTE</option>
                                                <option value="3">INACTIVO</option>
                                            </select>

                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">date_compensationbox</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Dirección del familiar" type="date"
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
                                            <label class="text-gray-700 dark:text-gray-400">license_number</label>

                                            <input
                                                class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="numero de licencia conductor" type="number"
                                                name="license_number" wire:model="license_number2" />

                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">license_category</label>

                                            <select wire:model="license_category2" name="license_category"
                                                class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="0">Selecciona la categoria de licencia de
                                                    conducción
                                                </option>

                                                @foreach ($licenseCategories as $licenseCategory)
                                                    <option value="{{ $licenseCategory->id }}">
                                                        {{ $licenseCategory->code_licenseCategory }} -
                                                        {{ $licenseCategory->description_licenseCategory }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">license_expiration</label>

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
                                                class="text-gray-700 dark:text-gray-400">certificate_drugs_alchoolemia</label>

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
                                            <label class="text-gray-700 dark:text-gray-400">SIMIT_queries</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de Consultas_SIMIT"
                                                type="date" name="SIMIT_queries" wire:model="SIMIT_queries2" />

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
                                            <label class="text-gray-700 dark:text-gray-400">driving_exam</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado del Examen_Conduccion"
                                                type="date" name="driving_exam" wire:model="driving_exam2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docdrivingExam != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocdrivingExam2">
                                                <input wire:model="DocdrivingExam"
                                                    onchange="updateDocument('3','Examen')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">Norm_Overland_Transportation_Automotive</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de las Norma_Transporte_terrestre_automotor"
                                                type="date" name="Norm_Overland_Transportation_Automotive"
                                                wire:model="Norm_Overland_Transportation_Automotive2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docNormOverlandTransportationAutomotive != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocNormOverlandTransportationAutomotive2">
                                                <input wire:model="DocNormOverlandTransportationAutomotive"
                                                    onchange="updateDocument('4','Norma_Transporte')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">Rules_Transit</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de Normas_Transito"
                                                type="date" name="Rules_Transit" wire:model="Rules_Transit2" />

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

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">Normative_Tips</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de Tips_normativos"
                                                type="date" name="Normative_Tips"
                                                wire:model="Normative_Tips2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docNormativeTips != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocNormativeTips2">
                                                <input wire:model="DocNormativeTips"
                                                    onchange="updateDocument('6','Tips_normativos')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">Driving_Methods</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de Metodos_Conduccion"
                                                type="date" name="Driving_Methods"
                                                wire:model="Driving_Methods2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docDrivingMethods != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocDrivingMethods2">
                                                <input wire:model="DocDrivingMethods"
                                                    onchange="updateDocument('7','Metodos_Conduccion')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">Defensive_driving</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de Manejo_Defensivo"
                                                type="date" name="Defensive_driving"
                                                wire:model="Defensive_driving2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docDefensiveDriving != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocDefensiveDriving2">
                                                <input wire:model="DocDefensiveDriving"
                                                    onchange="updateDocument('8','Defensivo')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">distractions</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de Distracciones" type="date"
                                                name="distractions" wire:model="distractions2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docdistractions != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="Docdistractions2">
                                                <input wire:model="Docdistractions"
                                                    onchange="updateDocument('9','Distracciones')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">First_aid</label>

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

                                        <div class="w-6-12">
                                            <label class="text-gray-700 dark:text-gray-400">First_Responder</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de Primero_Respondiente"
                                                type="date" name="First_Responder"
                                                wire:model="First_Responder2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docFirstResponder != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocFirstResponder2">
                                                <input wire:model="DocFirstResponder"
                                                    onchange="updateDocument('11','Primero_Respondiente')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                    </div>

                                    <div class="flex space-x-4">

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">five_senses_driving</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de los cinco_sentidos_conduccion"
                                                type="date" name="five_senses_driving"
                                                wire:model="five_senses_driving2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docfiveSensesDriving != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocfiveSensesDriving2">
                                                <input wire:model="DocfiveSensesDriving"
                                                    onchange="updateDocument('12','Cinco_Sentidos')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

                                        <div class="w-6-12">
                                            <label
                                                class="text-gray-700 dark:text-gray-400">Active_Passive_Security_vehicle</label>

                                            <input
                                                class="block w90 py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Fecha del certificado de la Seguridad_activa_pasiva_vehiculo"
                                                type="date" name="Active_Passive_Security_vehicle"
                                                wire:model="Active_Passive_Security_vehicle2" />

                                            <span class=" edit-upload-ico fas fa-file-upload" {{-- @if ($docActivePassiveSecurityVehicle != '') icon-blue @else icon-green @endif" --}}
                                                aria-hidden="true" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor" id="DocActivePassiveSecurityVehicle2">
                                                <input wire:model="DocActivePassiveSecurityVehicle"
                                                    id="InputDocActivePassiveSecurityVehicle2"
                                                    onchange="updateDocument('13','Seguridad_activa_pasiva')"
                                                    class="edit-upload-input" type="file">
                                            </span>
                                        </div>

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
                                            <label class="text-gray-700 dark:text-gray-400">Road_safety</label>

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
                                            <label class="text-gray-700 dark:text-gray-400">Linked</label>

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
                                        <label class="text-gray-700 dark:text-gray-400">user_entry_date</label>

                                        <div class="border-ourple-50-s rounded-2xl p-4">
                                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                                {{ $editUsers->user_entry_date }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">date_withdrawal_user</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Fecha fin de contrato con STEP" type="text"
                                            name="date_withdrawal_user"
                                            wire:model="editUsers.date_withdrawal_user" />
                                    </div>


                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">profile_photo_path</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Selecciona una foto de perfil para este usuario"
                                            type="file" name="profile_photo_path"
                                            wire:model="editUsers.profile_photo_path" />
                                    </div>

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">email</label>

                                        <input
                                            class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Escribe un correo electronico" type="email"
                                            name="email" wire:model="editUsers.email" />
                                    </div>

                                </div>

                                <div class="flex space-x-4">

                                    <div class="w-6-12">
                                        <label class="text-gray-700 dark:text-gray-400">username</label>

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
                class="flex flex-col items-center justify-end px-6 py-3-1 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button id="btnUpdate"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    wire:click="update" onclick="closeModalEdit()">
                    Accept
                </button>
                <button wire:click="clear"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                    onclick="closeModalEdit()">
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
        jQuery.datetimepicker.setLocale('es');

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

            if (process == 1) {
                message = 'The user ' + name + ' with document ' + document + ' has been successfully registered';
                // Se ha registrado el usuario xxxx con documento xxx sactisfacoriamente
            } else if (process == 2) {
                message = 'user ' + name + ' information has been successfully updated with ' + document;
                // se ha actualizado la información del usuario xxxx con documento xxx sactisfactoriamente
            } else if (process == 3) {
                message = 'user ' + name + ' with document ' + document + ' has been successfully deleted';
                // se ha eliminado el usuario xxxx con documento xxx sactisfactoriamente
            }

            swal.fire(
                '',
                message,
                'success'
            )
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
                            $(this).next().next().next().next().next().next().next().next()
                                .fadeIn();
                            current_active_step.removeClass('active').addClass('activated').next()
                                .addClass('active');
                            // } else if (tipeUsernum == 3 && stepinfinite > 1) {
                            //     $(this).next().next().next().next().next().next().next().next().next()
                            //         .fadeIn();
                            //     current_active_step.removeClass('active').addClass('activated').next()
                            //         .addClass('active')
                        } else if (tipeChargenum != 5 && stepinfinite > 7) {
                            $(this).next().next().next().fadeIn();
                            current_active_step.removeClass('active').addClass('activated').next()
                                .addClass('active')
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
                        $(this).prev().prev().prev().prev().prev().prev().prev().prev().fadeIn();
                        current_active_step.removeClass('active').prev().removeClass('activated')
                            .addClass('active');
                        // } else if (tipeUsernum == 3 && stepinfinite == 1) {
                        //     $(this).prev().prev().prev().prev().prev().prev().prev().prev().prev()
                        //         .fadeIn();
                        //     current_active_step.removeClass('active').prev().removeClass('activated')
                        //         .addClass('active');
                    } else if (tipeChargenum != 5 && stepinfinite == 7) {
                        $(this).prev().prev().prev().fadeIn();
                        current_active_step.removeClass('active').prev().removeClass('activated')
                            .addClass('active');
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

                    if (stepinfinite >= 10) {
                        stepinfinite = 10;
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
                    if (stepinfinite == 10) {
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
                if (stepinfinite >= 10) {
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

            documentOn('license_expiration', 'Doclicense');
            documentAbove('InputDoclicense', 'Doclicense');

            documentOn('certificate_drugs_alchoolemia', 'DocAlchoolemia');
            documentAbove('InputDocAlchoolemia', 'DocAlchoolemia');

            documentOn('SIMIT_queries', 'DocSimitQueries');
            documentAbove('InputDocSimitQueries', 'DocSimitQueries');

            documentOn('driving_exam', 'DocdrivingExam');
            documentAbove('InputDocdrivingExam', 'DocdrivingExam');

            documentOn('Norm_Overland_Transportation_Automotive', 'DocNormOverlandTransportationAutomotive');
            documentAbove('InputDocNormOverlandTransportationAutomotive', 'DocNormOverlandTransportationAutomotive');

            documentOn('Rules_Transit', 'DocRulesTransit');
            documentAbove('InputDocRulesTransit', 'DocRulesTransit');

            documentOn('Normative_Tips', 'DocNormativeTips');
            documentAbove('InputDocNormativeTips', 'DocNormativeTips');

            documentOn('Driving_Methods', 'DocDrivingMethods');
            documentAbove('InputDocDrivingMethods', 'DocDrivingMethods');

            documentOn('Defensive_driving', 'DocDefensiveDriving');
            documentAbove('InputDocDefensiveDriving', 'DocDefensiveDriving');

            documentOn('distractions', 'Docdistractions');
            documentAbove('InputDocdistractions', 'Docdistractions');

            documentOn('First_aid', 'DocFirstAid');
            documentAbove('InputDocFirstAid', 'DocFirstAid');

            documentOn('First_Responder', 'DocFirstResponder');
            documentAbove('InputDocFirstResponder', 'DocFirstResponder');

            documentOn('five_senses_driving', 'DocfiveSensesDriving');
            documentAbove('InputDocfiveSensesDriving', 'DocfiveSensesDriving');

            documentOn('Active_Passive_Security_vehicle', 'DocActivePassiveSecurityVehicle');
            documentAbove('InputDocActivePassiveSecurityVehicle', 'DocActivePassiveSecurityVehicle');

            documentOn('Road_safety', 'DocRoadSafety');
            documentAbove('InputDocRoadSafety', 'DocRoadSafety');

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
                if (stepinfinite < 10) {
                    contador = stepinfinite;
                } else {
                    contador = 10;
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

                $(this).prev().prev().prev().prev().prev().prev().prev().prev().prev().fadeIn();
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

        function typeUser() {

            var userType = document.getElementById('usertype').value;
            // console.log(userType);

            switch (userType) {
                // case '1':
                // // removes
                // viewhideinputs('divCharge', 'Inactive', 'Active');
                // viewhideinputs('labelCharge', 'Inactive', 'Active');
                // viewhideinputs('charge', 'Inactive', 'Active');
                // viewhideinputs('labelCompanyNameProvider', 'Inactive', 'Active');
                // viewhideinputs('company_name_provider', 'Inactive', 'Active');
                // viewhideinputs('labelSupplierCategory', 'Inactive', 'Active');
                // viewhideinputs('supplier_category', 'Inactive', 'Active');
                // viewhideinputs('labelProductsAndServices', 'Inactive', 'Active');
                // viewhideinputs('products_and_services', 'Inactive', 'Active');
                // viewhideinputs('labelEconomicActivity', 'Inactive', 'Active');
                // viewhideinputs('economic_activity', 'Inactive', 'Active');
                // viewhideinputs('labelSupplierDescription', 'Inactive', 'Active');
                // viewhideinputs('supplier_description', 'Inactive', 'Active');
                // viewhideinputs('labelCommercialReasonSupplier', 'Inactive', 'Active');
                // viewhideinputs('commercial_reason_supplier', 'Inactive', 'Active');
                // viewhideinputs('divSupplierName', 'Inactive', 'Active');
                // viewhideinputs('labelSupplierName', 'Inactive', 'Active');
                // viewhideinputs('supplier_name', 'Inactive', 'Active');

                // viewhideinputs('labelBirthdate', 'Inactive', 'Active');
                // viewhideinputs('birthdate', 'Inactive', 'Active');
                // viewhideinputs('labelCityBirth', 'Inactive', 'Active');
                // viewhideinputs('city_birth', 'Inactive', 'Active');
                // viewhideinputs('labelWeight', 'Inactive', 'Active');
                // viewhideinputs('weight', 'Inactive', 'Active');
                // viewhideinputs('labelPantSize', 'Inactive', 'Active');
                // viewhideinputs('pant_size', 'Inactive', 'Active');
                // viewhideinputs('labelShirtSize', 'Inactive', 'Active');
                // viewhideinputs('shirt_size', 'Inactive', 'Active');
                // viewhideinputs('labelShoeSize', 'Inactive', 'Active');
                // viewhideinputs('shoe_size', 'Inactive', 'Active');
                // viewhideinputs('labelCivilStatus', 'Inactive', 'Active');
                // viewhideinputs('civil_status', 'Inactive', 'Active');
                // viewhideinputs('labelWorkArea', 'Inactive', 'Active');
                // viewhideinputs('work_area', 'Inactive', 'Active');
                // viewhideinputs('labelBindingType', 'Inactive', 'Active');
                // viewhideinputs('binding_type', 'Inactive', 'Active');
                // viewhideinputs('labelSalary', 'Inactive', 'Active');
                // viewhideinputs('salary', 'Inactive', 'Active');
                // viewhideinputs('labelAidTransport', 'Inactive', 'Active');
                // viewhideinputs('aid_transport', 'Inactive', 'Active');


                // // adds
                // document.getElementById('fieldset1Buttons').classList.remove('Inactive');

                // viewhideinputs('labelIdentification', 'Active', 'Inactive');
                // viewhideinputs('identification', 'Active', 'Inactive');
                // viewhideinputs('labeIdentificationcard', 'Active', 'Inactive');
                // viewhideinputs('identificationcard', 'Active', 'Inactive');
                // viewhideinputs('labelFirstname', 'Active', 'Inactive');
                // viewhideinputs('firstname', 'Active', 'Inactive');
                // viewhideinputs('labelSecondname', 'Active', 'Inactive');
                // viewhideinputs('secondname', 'Active', 'Inactive');
                // viewhideinputs('labelLastname', 'Active', 'Inactive');
                // viewhideinputs('lastname', 'Active', 'Inactive');
                // viewhideinputs('labelMotherslastname', 'Active', 'Inactive');
                // viewhideinputs('motherslastname', 'Active', 'Inactive');

                // viewhideinputs('labelPlaceExpeditionIdentificationcard', 'Active', 'Inactive');
                // viewhideinputs('place_expedition_identificationcard', 'Active', 'Inactive');
                // viewhideinputs('labelCountry', 'Active', 'Inactive');
                // viewhideinputs('country', 'Active', 'Inactive');
                // viewhideinputs('labelDepartment', 'Active', 'Inactive');
                // viewhideinputs('Department', 'Active', 'Inactive');
                // viewhideinputs('labelCity', 'Active', 'Inactive');
                // viewhideinputs('city', 'Active', 'Inactive');
                // viewhideinputs('labelAddress', 'Active', 'Inactive');
                // viewhideinputs('address', 'Active', 'Inactive');
                // viewhideinputs('labelCheck', 'Active', 'Inactive');
                // viewhideinputs('sexM', 'Active', 'Inactive');
                // viewhideinputs('labelSexM', 'Active', 'Inactive');
                // viewhideinputs('sexF', 'Active', 'Inactive');
                // viewhideinputs('labelSexF', 'Active', 'Inactive');
                // viewhideinputs('labelPhone', 'Active', 'Inactive');
                // viewhideinputs('phone', 'Active', 'Inactive');
                // viewhideinputs('labelPhoneCellular', 'Active', 'Inactive');
                // viewhideinputs('phone_cellular', 'Active', 'Inactive');


                // break;

                case '1':


                    changeInput(1, 'divCharge', 'labelCompanyNameProvider', 'labelBirthdate', 'labelLicenseNumber', '', '',
                        'labelIdentification', '', '', '');


                    // removes

                    // adds
                    document.getElementById('fieldset1Buttons').classList.remove('Inactive');


                    break;

                case '2':
                    // removes


                    // adds
                    document.getElementById('fieldset1Buttons').classList.remove('Inactive');
                    changeInput(2, '', 'labelCompanyNameProvider', '', 'labelLicenseNumber', '', '', 'labelIdentification',
                        'divCharge', '', '');

                    break;

                case '3':
                    // removes


                    // adds
                    document.getElementById('fieldset1Buttons').classList.remove('Inactive');
                    changeInput(3, 'divCharge', '', 'labelBirthdate', 'labelLicenseNumber', 'labelIdentification',
                        'labelPlaceExpeditionIdentificationcard', '', '', 'labelCompanyNameProvider', '');

                    //
                    break;


                case '4':
                    // removes

                    // adds
                    document.getElementById('fieldset1Buttons').classList.remove('Inactive');
                    changeInput(4, 'divCharge', 'labelCompanyNameProvider', 'labelBirthdate', 'labelLicenseNumber', '', '',
                        'labelIdentification', '', '', '');

                    break;

                default:

                    viewhideinputs('fieldset1Buttons', 'Inactive', 'Active');
                    changeInput(0, 'divCharge', 'labelCompanyNameProvider', '', 'labelLicenseNumber', 'labelIdentification',
                        'labelPlaceExpeditionIdentificationcard', '', '', '', '');

                    break;
            }

        }

        function typeCharge() {

            var charges = document.getElementById('charge').value;
            // console.log(charges);

            switch (charges) {
                case '5':

                    changeInput(5, '', '', '', '', '', '', '', '', '', 'labelLicenseNumber');

                    break;

                default:
                    changeInput(6, '', '', '', 'labelLicenseNumber', '', '', '', '', '', '');

                    break;
            }

        }


        function viewhideinputs(id, adhere, stirring) {

            document.getElementById(id).classList.remove(stirring);
            document.getElementById(id).classList.add(adhere);
        }

        function changeInput(opcion, clave1, clave2, clave3, clave4, clave5, clave6, clave7, clave8, clave9, clave10) {

            // removes

            if (opcion == 0 || opcion == 1 || opcion == 3 || opcion == 4) {
                // console.log('si existe');

                var id = clave1;
                for (var i = 1; i <= 3; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Inactive', 'Active');

                    if (id == 'divCharge') {
                        id = 'labelCharge';
                    } else if (id == 'labelCharge') {
                        id = 'charge';
                    } else {
                        id = 'divCharge';
                    }
                }
            }

            if (opcion == 0 || opcion == 1 || opcion == 2 || opcion == 4) {
                // console.log('si existe');

                var id = clave2;
                for (var i = 1; i <= 18; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Inactive', 'Active');

                    if (id == 'labelCompanyNameProvider') {
                        id = 'company_name_provider';

                    } else if (id == 'company_name_provider') {
                        id = 'labelSupplierCategory';

                    } else if (id == 'labelSupplierCategory') {
                        id = 'supplier_category';

                    } else if (id == 'supplier_category') {
                        id = 'labelProductsAndServices';

                    } else if (id == 'labelProductsAndServices') {
                        id = 'products_and_services';

                    } else if (id == 'products_and_services') {
                        id = 'labelEconomicActivity';

                    } else if (id == 'labelEconomicActivity') {
                        id = 'economic_activity';

                    } else if (id == 'economic_activity') {
                        id = 'labelSupplierDescription';

                    } else if (id == 'labelSupplierDescription') {
                        id = 'supplier_description';

                    } else if (id == 'supplier_description') {
                        id = 'labelCommercialReasonSupplier';

                    } else if (id == 'labelCommercialReasonSupplier') {
                        id = 'commercial_reason_supplier';

                    } else if (id == 'commercial_reason_supplier') {
                        id = 'divSupplierName';

                    } else if (id == 'divSupplierName') {
                        id = 'labelSupplierName';

                    } else if (id == 'labelSupplierName') {
                        id = 'supplier_name';

                    } else if (id == 'supplier_name') {
                        id = 'divNit';

                    } else if (id == 'divNit') {
                        id = 'labelNit';

                    } else if (id == 'labelNit') {
                        id = 'nit';

                    } else if (id == 'nit') {
                        id = 'labelCompanyNameProvider';

                    }
                }
            }

            if (opcion == 1 || opcion == 3 || opcion == 4) {
                // console.log('si existe');

                var id = clave3;
                for (var i = 1; i <= 86; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Inactive', 'Active');

                    if (id == 'labelBirthdate') {
                        id = 'birthdate';
                    } else if (id == 'birthdate') {
                        id = 'labelCityBirth';
                    } else if (id == 'labelCityBirth') {
                        id = 'city_birth';
                    } else if (id == 'city_birth') {
                        id = 'labelWeight';
                    } else if (id == 'labelWeight') {
                        id = 'weight';
                    } else if (id == 'weight') {
                        id = 'labelPantSize';
                    } else if (id == 'labelPantSize') {
                        id = 'pant_size';
                    } else if (id == 'pant_size') {
                        id = 'labelShirtSize';
                    } else if (id == 'labelShirtSize') {
                        id = 'shirt_size';
                    } else if (id == 'shirt_size') {
                        id = 'labelShoeSize';
                    } else if (id == 'labelShoeSize') {
                        id = 'shoe_size';
                    } else if (id == 'shoe_size') {
                        id = 'labelCivilStatus';
                    } else if (id == 'labelCivilStatus') {
                        id = 'civil_status';
                    } else if (id == 'civil_status') {
                        id = 'labelWorkArea';
                    } else if (id == 'labelWorkArea') {
                        id = 'work_area';
                    } else if (id == 'work_area') {
                        id = 'labelBindingType';
                    } else if (id == 'labelBindingType') {
                        id = 'binding_type';
                    } else if (id == 'binding_type') {
                        id = 'labelSalary';
                    } else if (id == 'labelSalary') {
                        id = 'salary';
                    } else if (id == 'salary') {
                        id = 'labelAidTransport';
                    } else if (id == 'labelAidTransport') {
                        id = 'aid_transport';
                    } else if (id == 'aid_transport') {
                        id = 'labelEducationLevel';
                    } else if (id == 'labelEducationLevel') {
                        id = 'education_level';
                    } else if (id == 'education_level') {
                        id = 'labelEducationalInstitution';
                    } else if (id == 'labelEducationalInstitution') {
                        id = 'educational_institution';
                    } else if (id == 'educational_institution') {
                        id = 'labelLastYear';
                    } else if (id == 'labelLastYear') {
                        id = 'last_year';
                    } else if (id == 'last_year') {
                        id = 'labelStudyEndDate';
                    } else if (id == 'labelStudyEndDate') {
                        id = 'study_end_date';
                    } else if (id == 'study_end_date') {
                        id = 'labelObtainedTitle';
                    } else if (id == 'labelObtainedTitle') {
                        id = 'obtained_title';
                    } else if (id == 'obtained_title') {
                        id = 'labelLastCompanyName';
                    } else if (id == 'labelLastCompanyName') {
                        id = 'last_company_name';
                    } else if (id == 'last_company_name') {
                        id = 'labelChargesLastCompany';
                    } else if (id == 'labelChargesLastCompany') {
                        id = 'charges_last_company';
                    } else if (id == 'charges_last_company') {
                        id = 'labelStartDateLastCompany';
                    } else if (id == 'labelStartDateLastCompany') {
                        id = 'start_date_last_company';
                    } else if (id == 'start_date_last_company') {
                        id = 'labelDateEndLastCompany';
                    } else if (id == 'labelDateEndLastCompany') {
                        id = 'date_end_last_company';
                    } else if (id == 'date_end_last_company') {
                        id = 'labelFunctionsPerformed';
                    } else if (id == 'labelFunctionsPerformed') {
                        id = 'functions_performed';
                    } else if (id == 'functions_performed') {
                        id = 'labelFamilyDocumentType';
                    } else if (id == 'labelFamilyDocumentType') {
                        id = 'family_document_type';
                    } else if (id == 'family_document_type') {
                        id = 'labelFamilyNames';
                    } else if (id == 'labelFamilyNames') {
                        id = 'family_names';
                    } else if (id == 'family_names') {
                        id = 'labelRelationship';
                    } else if (id == 'labelRelationship') {
                        id = 'relationship';
                    } else if (id == 'relationship') {
                        id = 'labelFamilyAddress';
                    } else if (id == 'labelFamilyAddress') {
                        id = 'family_address';
                    } else if (id == 'family_address') {
                        id = 'labelFamilyPhone';
                    } else if (id == 'labelFamilyPhone') {
                        id = 'family_phone';
                    } else if (id == 'family_phone') {
                        id = 'labelFamilyPhoneCellular';
                    } else if (id == 'labelFamilyPhoneCellular') {
                        id = 'family_phone_cellular';
                    } else if (id == 'family_phone_cellular') {
                        id = 'labelEps';
                    } else if (id == 'labelEps') {
                        id = 'eps';
                    } else if (id == 'eps') {
                        id = 'labelEpsStatus';
                    } else if (id == 'labelEpsStatus') {
                        id = 'eps_status';
                    } else if (id == 'eps_status') {
                        id = 'labelDateEps';
                    } else if (id == 'labelDateEps') {
                        id = 'date_eps';
                    } else if (id == 'date_eps') {
                        id = 'labelBloodType';
                    } else if (id == 'labelBloodType') {
                        id = 'blood_type';
                    } else if (id == 'blood_type') {
                        id = 'labelPension';
                    } else if (id == 'labelPension') {
                        id = 'pension';
                    } else if (id == 'pension') {
                        id = 'labelPensionStatus';
                    } else if (id == 'labelPensionStatus') {
                        id = 'pension_status';
                    } else if (id == 'pension_status') {
                        id = 'labelDatePension';
                    } else if (id == 'labelDatePension') {
                        id = 'date_pension';
                    } else if (id == 'date_pension') {
                        id = 'labelLayoffs';
                    } else if (id == 'labelLayoffs') {
                        id = 'layoffs';
                    } else if (id == 'layoffs') {
                        id = 'labelStatusLayoffs';
                    } else if (id == 'labelStatusLayoffs') {
                        id = 'status_layoffs';
                    } else if (id == 'status_layoffs') {
                        id = 'labelDateLayoffs';
                    } else if (id == 'labelDateLayoffs') {
                        id = 'date_layoffs';
                    } else if (id == 'date_layoffs') {
                        id = 'labelArl';
                    } else if (id == 'labelArl') {
                        id = 'arl';
                    } else if (id == 'arl') {
                        id = 'labelArlStatus';
                    } else if (id == 'labelArlStatus') {
                        id = 'arl_status';
                    } else if (id == 'arl_status') {
                        id = 'labelArlDate';
                    } else if (id == 'labelArlDate') {
                        id = 'arl_date';
                    } else if (id == 'arl_date') {
                        id = 'labelCompensationbox';
                    } else if (id == 'labelCompensationbox') {
                        id = 'compensationbox';
                    } else if (id == 'compensationbox') {
                        id = 'labelCompensationboxStatus';
                    } else if (id == 'labelCompensationboxStatus') {
                        id = 'compensationbox_status';
                    } else if (id == 'compensationbox_status') {
                        id = 'labelDateCompensationbox';
                    } else if (id == 'labelDateCompensationbox') {
                        id = 'date_compensationbox';
                    } else if (id == 'date_compensationbox') {
                        id = 'labelBirthdate';
                    }

                }
            }

            if (opcion == 0 || opcion == 1 || opcion == 2 || opcion == 3 || opcion == 4 || opcion == 6) {
                // console.log('si existe');

                var id = clave4;
                for (var i = 1; i <= 36; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Inactive', 'Active');

                    if (id == 'labelLicenseNumber') {
                        id = 'license_number';
                    } else if (id == 'license_number') {
                        id = 'labelLicenseCategory';
                    } else if (id == 'labelLicenseCategory') {
                        id = 'license_category';
                    } else if (id == 'license_category') {
                        id = 'labelLicenseExpiration';
                    } else if (id == 'labelLicenseExpiration') {
                        id = 'license_expiration';
                    } else if (id == 'license_expiration') {
                        id = 'labelCertificateDrugsAlchoolemia';
                    } else if (id == 'labelCertificateDrugsAlchoolemia') {
                        id = 'certificate_drugs_alchoolemia';
                    } else if (id == 'certificate_drugs_alchoolemia') {
                        id = 'labelSIMITQueries';
                    } else if (id == 'labelSIMITQueries') {
                        id = 'SIMIT_queries';
                    } else if (id == 'SIMIT_queries') {
                        id = 'labelDrivingExam';
                    } else if (id == 'labelDrivingExam') {
                        id = 'driving_exam';
                    } else if (id == 'driving_exam') {
                        id = 'labelNormOverlandTransportationAutomotive';
                    } else if (id == 'labelNormOverlandTransportationAutomotive') {
                        id = 'Norm_Overland_Transportation_Automotive';
                    } else if (id == 'Norm_Overland_Transportation_Automotive') {
                        id = 'labelRulesTransit';
                    } else if (id == 'labelRulesTransit') {
                        id = 'Rules_Transit';
                    } else if (id == 'Rules_Transit') {
                        id = 'labelNormativeTips';
                    } else if (id == 'labelNormativeTips') {
                        id = 'Normative_Tips';
                    } else if (id == 'Normative_Tips') {
                        id = 'labelDrivingMethods';
                    } else if (id == 'labelDrivingMethods') {
                        id = 'Driving_Methods';
                    } else if (id == 'Driving_Methods') {
                        id = 'labelDefensiveDriving';
                    } else if (id == 'labelDefensiveDriving') {
                        id = 'Defensive_driving';
                    } else if (id == 'Defensive_driving') {
                        id = 'labelDistractions';
                    } else if (id == 'labelDistractions') {
                        id = 'distractions';
                    } else if (id == 'distractions') {
                        id = 'labelFirstaid';
                    } else if (id == 'labelFirstaid') {
                        id = 'First_aid';
                    } else if (id == 'First_aid') {
                        id = 'labelFirstResponder';
                    } else if (id == 'labelFirstResponder') {
                        id = 'First_Responder';
                    } else if (id == 'First_Responder') {
                        id = 'labelfiveSensesDriving';
                    } else if (id == 'labelfiveSensesDriving') {
                        id = 'five_senses_driving';
                    } else if (id == 'five_senses_driving') {
                        id = 'labelActivePassiveSecurityVehicle';
                    } else if (id == 'labelActivePassiveSecurityVehicle') {
                        id = 'Active_Passive_Security_vehicle';
                    } else if (id == 'Active_Passive_Security_vehicle') {
                        id = 'labelRoadSafety';
                    } else if (id == 'labelRoadSafety') {
                        id = 'Road_safety';
                    } else if (id == 'Road_safety') {
                        id = 'labelLinked';
                    } else if (id == 'labelLinked') {
                        id = 'Linked';
                    } else if (id == 'Linked') {
                        id = 'labelLicenseNumber';

                    }
                }
            }

            if (opcion == 0 || opcion == 3) {
                // console.log('si existe');

                var id = clave5;
                for (var i = 1; i <= 12; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Inactive', 'Active');

                    if (id == 'labelIdentification') {
                        id = 'identification';
                    } else if (id == 'identification') {
                        id = 'labeIdentificationcard';
                    } else if (id == 'labeIdentificationcard') {
                        id = 'identificationcard';
                    } else if (id == 'identificationcard') {
                        id = 'labelFirstname';
                    } else if (id == 'labelFirstname') {
                        id = 'firstname';
                    } else if (id == 'firstname') {
                        id = 'labelSecondname';
                    } else if (id == 'labelSecondname') {
                        id = 'secondname';
                    } else if (id == 'secondname') {
                        id = 'labelLastname';
                    } else if (id == 'labelLastname') {
                        id = 'lastname';
                    } else if (id == 'lastname') {
                        id = 'labelMotherslastname';
                    } else if (id == 'labelMotherslastname') {
                        id = 'motherslastname';
                    } else if (id == 'motherslastname') {
                        id = 'labelIdentification';

                    }
                }
            }

            if (opcion == 0) {
                // console.log('si existe');

                var id = clave6;
                for (var i = 1; i <= 19; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Inactive', 'Active');

                    if (id == 'labelPlaceExpeditionIdentificationcard') {
                        id = 'place_expedition_identificationcard';
                    } else if (id == 'place_expedition_identificationcard') {
                        id = 'labelCountry';
                    } else if (id == 'labelCountry') {
                        id = 'country';
                    } else if (id == 'country') {
                        id = 'labelDepartment';
                    } else if (id == 'labelDepartment') {
                        id = 'Department';
                    } else if (id == 'Department') {
                        id = 'labelCity';
                    } else if (id == 'labelCity') {
                        id = 'city';
                    } else if (id == 'city') {
                        id = 'labelAddress';
                    } else if (id == 'labelAddress') {
                        id = 'address';
                    } else if (id == 'address') {
                        id = 'labelCheck';
                    } else if (id == 'labelCheck') {
                        id = 'sexM';
                    } else if (id == 'sexM') {
                        id = 'labelSexM';
                    } else if (id == 'labelSexM') {
                        id = 'sexF';
                    } else if (id == 'sexF') {
                        id = 'labelSexF';
                    } else if (id == 'labelSexF') {
                        id = 'labelPhone';
                    } else if (id == 'labelPhone') {
                        id = 'phone';
                    } else if (id == 'phone') {
                        id = 'labelPhoneCellular';
                    } else if (id == 'labelPhoneCellular') {
                        id = 'phone_cellular';
                    } else if (id == 'phone_cellular') {
                        id = 'labelPlaceExpeditionIdentificationcard';

                    }
                }
            }

            if (opcion == 3) {
                // console.log('si existe');

                var id = clave6;
                for (var i = 1; i <= 9; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Inactive', 'Active');

                    if (id == 'labelPlaceExpeditionIdentificationcard') {
                        id = 'place_expedition_identificationcard';
                    } else if (id == 'place_expedition_identificationcard') {
                        id = 'labelCheck';
                    } else if (id == 'labelCheck') {
                        id = 'sexM';
                    } else if (id == 'sexM') {
                        id = 'labelSexM';
                    } else if (id == 'labelSexM') {
                        id = 'sexF';
                    } else if (id == 'sexF') {
                        id = 'labelSexF';
                    } else if (id == 'labelSexF') {
                        id = 'divPlaceExpeditionIdentificationcard';
                    } else if (id == 'divPlaceExpeditionIdentificationcard') {
                        id = 'divCheck';
                    } else if (id == 'divCheck') {
                        id = 'labelPlaceExpeditionIdentificationcard';
                    }
                }
            }

            if (opcion == 0 || opcion == 2 || opcion == 6) {

                // viewhideinputs('step3', 'Active', 'Inactive');
                viewhideinputs('finalUser1', 'Inactive', 'Active');
                viewhideinputs('passfinalUser1', 'Inactive', 'Active');
                viewhideinputs('finalUser2', 'Inactive', 'Active');
                viewhideinputs('passfinalUser2', 'Inactive', 'Active');
                viewhideinputs('finalUser3', 'Inactive', 'Active');
                viewhideinputs('passfinalUser3', 'Inactive', 'Active');

                for (var i = 1; i <= 10; i++) {
                    var noSteps = 'step' + [i];
                    var noText = 'pass' + [i];
                    // console.log(noText);
                    document.getElementById(noSteps).classList.remove('Inactive');
                    document.getElementById(noText).classList.remove('Inactive');
                    // document.getElementById(noSteps).classList.add('Active');

                }
            }


            // adds

            if (opcion == 1 || opcion == 2 || opcion == 4) {
                // console.log('si existe');

                var id = clave7;
                for (var i = 1; i <= 33; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Active', 'Inactive');

                    if (id == 'labelIdentification') {
                        id = 'identification';
                    } else if (id == 'identification') {
                        id = 'labeIdentificationcard';
                    } else if (id == 'labeIdentificationcard') {
                        id = 'identificationcard';
                    } else if (id == 'identificationcard') {
                        id = 'labelFirstname';
                    } else if (id == 'labelFirstname') {
                        id = 'firstname';
                    } else if (id == 'firstname') {
                        id = 'labelSecondname';
                    } else if (id == 'labelSecondname') {
                        id = 'secondname';
                    } else if (id == 'secondname') {
                        id = 'labelLastname';
                    } else if (id == 'labelLastname') {
                        id = 'lastname';
                    } else if (id == 'lastname') {
                        id = 'labelMotherslastname';
                    } else if (id == 'labelMotherslastname') {
                        id = 'motherslastname';
                    } else if (id == 'motherslastname') {
                        id = 'divPlaceExpeditionIdentificationcard';
                    } else if (id == 'divPlaceExpeditionIdentificationcard') {
                        id = 'labelPlaceExpeditionIdentificationcard';
                    } else if (id == 'labelPlaceExpeditionIdentificationcard') {
                        id = 'place_expedition_identificationcard';
                    } else if (id == 'place_expedition_identificationcard') {
                        id = 'labelCountry';
                    } else if (id == 'labelCountry') {
                        id = 'country';
                    } else if (id == 'country') {
                        id = 'labelDepartment';
                    } else if (id == 'labelDepartment') {
                        id = 'Department';
                    } else if (id == 'Department') {
                        id = 'labelCity';
                    } else if (id == 'labelCity') {
                        id = 'city';
                    } else if (id == 'city') {
                        id = 'labelAddress';
                    } else if (id == 'labelAddress') {
                        id = 'address';
                    } else if (id == 'address') {
                        id = 'divCheck';
                    } else if (id == 'divCheck') {
                        id = 'labelCheck';
                    } else if (id == 'labelCheck') {
                        id = 'sexM';
                    } else if (id == 'sexM') {
                        id = 'labelSexM';
                    } else if (id == 'labelSexM') {
                        id = 'sexF';
                    } else if (id == 'sexF') {
                        id = 'labelSexF';
                    } else if (id == 'labelSexF') {
                        id = 'labelPhone';
                    } else if (id == 'labelPhone') {
                        id = 'phone';
                    } else if (id == 'phone') {
                        id = 'labelPhoneCellular';
                    } else if (id == 'labelPhoneCellular') {
                        id = 'phone_cellular';
                    } else if (id == 'phone_cellular') {
                        id = 'labelIdentification';
                    }
                }
            }

            if (opcion == 2) {
                // console.log('si existe');

                var id = clave8;
                for (var i = 1; i <= 91; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Active', 'Inactive');

                    if (id == 'divCharge') {
                        id = 'labelCharge';
                    } else if (id == 'labelCharge') {
                        id = 'charge';
                    } else if (id == 'charge') {
                        id = 'labelBirthdate';
                    } else if (id == 'labelBirthdate') {
                        id = 'birthdate';
                    } else if (id == 'birthdate') {
                        id = 'labelCityBirth';
                    } else if (id == 'labelCityBirth') {
                        id = 'city_birth';
                    } else if (id == 'city_birth') {
                        id = 'labelWeight';
                    } else if (id == 'labelWeight') {
                        id = 'weight';
                    } else if (id == 'weight') {
                        id = 'labelPantSize';
                    } else if (id == 'labelPantSize') {
                        id = 'pant_size';
                    } else if (id == 'pant_size') {
                        id = 'labelShirtSize';
                    } else if (id == 'labelShirtSize') {
                        id = 'shirt_size';
                    } else if (id == 'shirt_size') {
                        id = 'labelShoeSize';
                    } else if (id == 'labelShoeSize') {
                        id = 'shoe_size';
                    } else if (id == 'shoe_size') {
                        id = 'labelCivilStatus';
                    } else if (id == 'labelCivilStatus') {
                        id = 'civil_status';
                    } else if (id == 'civil_status') {
                        id = 'labelWorkArea';
                    } else if (id == 'labelWorkArea') {
                        id = 'work_area';
                    } else if (id == 'work_area') {
                        id = 'labelBindingType';
                    } else if (id == 'labelBindingType') {
                        id = 'binding_type';
                    } else if (id == 'binding_type') {
                        id = 'labelSalary';
                    } else if (id == 'labelSalary') {
                        id = 'salary';
                    } else if (id == 'salary') {
                        id = 'labelAidTransport';
                    } else if (id == 'labelAidTransport') {
                        id = 'aid_transport';
                    } else if (id == 'aid_transport') {
                        id = 'labelEducationLevel';
                    } else if (id == 'labelEducationLevel') {
                        id = 'education_level';
                    } else if (id == 'education_level') {
                        id = 'labelEducationalInstitution';
                    } else if (id == 'labelEducationalInstitution') {
                        id = 'educational_institution';
                    } else if (id == 'educational_institution') {
                        id = 'labelLastYear';
                    } else if (id == 'labelLastYear') {
                        id = 'last_year';
                    } else if (id == 'last_year') {
                        id = 'labelStudyEndDate';
                    } else if (id == 'labelStudyEndDate') {
                        id = 'study_end_date';
                    } else if (id == 'study_end_date') {
                        id = 'labelObtainedTitle';
                    } else if (id == 'labelObtainedTitle') {
                        id = 'obtained_title';
                    } else if (id == 'obtained_title') {
                        id = 'labelLastCompanyName';
                    } else if (id == 'labelLastCompanyName') {
                        id = 'last_company_name';
                    } else if (id == 'last_company_name') {
                        id = 'labelChargesLastCompany';
                    } else if (id == 'labelChargesLastCompany') {
                        id = 'charges_last_company';
                    } else if (id == 'charges_last_company') {
                        id = 'labelStartDateLastCompany';
                    } else if (id == 'labelStartDateLastCompany') {
                        id = 'start_date_last_company';
                    } else if (id == 'start_date_last_company') {
                        id = 'labelDateEndLastCompany';
                    } else if (id == 'labelDateEndLastCompany') {
                        id = 'date_end_last_company';
                    } else if (id == 'date_end_last_company') {
                        id = 'labelFunctionsPerformed';
                    } else if (id == 'labelFunctionsPerformed') {
                        id = 'functions_performed';
                    } else if (id == 'functions_performed') {
                        id = 'labelFamilyDocumentType';
                    } else if (id == 'labelFamilyDocumentType') {
                        id = 'family_document_type';
                    } else if (id == 'family_document_type') {
                        id = 'labelFamilyNames';
                    } else if (id == 'labelFamilyNames') {
                        id = 'family_names';
                    } else if (id == 'family_names') {
                        id = 'labelRelationship';
                    } else if (id == 'labelRelationship') {
                        id = 'relationship';
                    } else if (id == 'relationship') {
                        id = 'labelFamilyAddress';
                    } else if (id == 'labelFamilyAddress') {
                        id = 'family_address';
                    } else if (id == 'family_address') {
                        id = 'labelFamilyPhone';
                    } else if (id == 'labelFamilyPhone') {
                        id = 'family_phone';
                    } else if (id == 'family_phone') {
                        id = 'labelFamilyPhoneCellular';
                    } else if (id == 'labelFamilyPhoneCellular') {
                        id = 'family_phone_cellular';
                    } else if (id == 'family_phone_cellular') {
                        id = 'labelEps';
                    } else if (id == 'labelEps') {
                        id = 'eps';
                    } else if (id == 'eps') {
                        id = 'labelEpsStatus';
                    } else if (id == 'labelEpsStatus') {
                        id = 'eps_status';
                    } else if (id == 'eps_status') {
                        id = 'labelDateEps';
                    } else if (id == 'labelDateEps') {
                        id = 'date_eps';
                    } else if (id == 'date_eps') {
                        id = 'labelBloodType';
                    } else if (id == 'labelBloodType') {
                        id = 'blood_type';
                    } else if (id == 'blood_type') {
                        id = 'labelPension';
                    } else if (id == 'labelPension') {
                        id = 'pension';
                    } else if (id == 'pension') {
                        id = 'labelPensionStatus';
                    } else if (id == 'labelPensionStatus') {
                        id = 'pension_status';
                    } else if (id == 'pension_status') {
                        id = 'labelDatePension';
                    } else if (id == 'labelDatePension') {
                        id = 'date_pension';
                    } else if (id == 'date_pension') {
                        id = 'labelLayoffs';
                    } else if (id == 'labelLayoffs') {
                        id = 'layoffs';
                    } else if (id == 'layoffs') {
                        id = 'labelStatusLayoffs';
                    } else if (id == 'labelStatusLayoffs') {
                        id = 'status_layoffs';
                    } else if (id == 'status_layoffs') {
                        id = 'labelDateLayoffs';
                    } else if (id == 'labelDateLayoffs') {
                        id = 'date_layoffs';
                    } else if (id == 'date_layoffs') {
                        id = 'labelArl';
                    } else if (id == 'labelArl') {
                        id = 'arl';
                    } else if (id == 'arl') {
                        id = 'labelArlStatus';
                    } else if (id == 'labelArlStatus') {
                        id = 'arl_status';
                    } else if (id == 'arl_status') {
                        id = 'labelArlDate';
                    } else if (id == 'labelArlDate') {
                        id = 'arl_date';
                    } else if (id == 'arl_date') {
                        id = 'labelCompensationbox';
                    } else if (id == 'labelCompensationbox') {
                        id = 'compensationbox';
                    } else if (id == 'compensationbox') {
                        id = 'labelCompensationboxStatus';
                    } else if (id == 'labelCompensationboxStatus') {
                        id = 'compensationbox_status';
                    } else if (id == 'compensationbox_status') {
                        id = 'labelDateCompensationbox';
                    } else if (id == 'labelDateCompensationbox') {
                        id = 'date_compensationbox';
                    } else if (id == 'date_compensationbox') {
                        id = 'labeIdentificationcardFamily';
                    } else if (id == 'labeIdentificationcardFamily') {
                        id = 'identificationcard_family';
                    } else if (id == 'identificationcard_family') {
                        id = 'divCharge';
                    }
                }
            }

            if (opcion == 3) {
                // console.log('si existe');

                var id = clave9;
                for (var i = 1; i <= 30; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Active', 'Inactive');

                    if (id == 'labelCompanyNameProvider') {
                        id = 'company_name_provider';
                    } else if (id == 'company_name_provider') {
                        id = 'labelSupplierCategory';
                    } else if (id == 'labelSupplierCategory') {
                        id = 'supplier_category';
                    } else if (id == 'supplier_category') {
                        id = 'labelProductsAndServices';
                    } else if (id == 'labelProductsAndServices') {
                        id = 'products_and_services';
                    } else if (id == 'products_and_services') {
                        id = 'labelEconomicActivity';
                    } else if (id == 'labelEconomicActivity') {
                        id = 'economic_activity';
                    } else if (id == 'economic_activity') {
                        id = 'labelSupplierDescription';
                    } else if (id == 'labelSupplierDescription') {
                        id = 'supplier_description';
                    } else if (id == 'supplier_description') {
                        id = 'labelCommercialReasonSupplier';
                    } else if (id == 'labelCommercialReasonSupplier') {
                        id = 'commercial_reason_supplier';
                    } else if (id == 'commercial_reason_supplier') {
                        id = 'divSupplierName';
                    } else if (id == 'divSupplierName') {
                        id = 'labelSupplierName';
                    } else if (id == 'labelSupplierName') {
                        id = 'supplier_name';
                    } else if (id == 'supplier_name') {
                        id = 'labelPhone';
                    } else if (id == 'labelPhone') {
                        id = 'phone';
                    } else if (id == 'phone') {
                        id = 'labelPhoneCellular';
                    } else if (id == 'labelPhoneCellular') {
                        id = 'phone_cellular';
                    } else if (id == 'phone_cellular') {
                        id = 'labelCountry';
                    } else if (id == 'labelCountry') {
                        id = 'country';
                    } else if (id == 'country') {
                        id = 'labelDepartment';
                    } else if (id == 'labelDepartment') {
                        id = 'Department';
                    } else if (id == 'Department') {
                        id = 'labelCity';
                    } else if (id == 'labelCity') {
                        id = 'city';
                    } else if (id == 'city') {
                        id = 'labelAddress';
                    } else if (id == 'labelAddress') {
                        id = 'address';
                    } else if (id == 'address') {
                        id = 'divNit';
                    } else if (id == 'divNit') {
                        id = 'labelNit';
                    } else if (id == 'labelNit') {
                        id = 'nit';
                    } else if (id == 'nit') {
                        id = 'labelCompanyNameProvider';
                    }
                }
            }

            if (opcion == 3) {
                document.getElementById('divAddress').classList.add('w-full');
                document.getElementById('divAddress').classList.remove('w-3-4');
            } else {
                document.getElementById('divAddress').classList.add('w-3-4');
                document.getElementById('divAddress').classList.remove('w-full');
            }

            if (opcion == 5) {
                // console.log('si existe');

                var id = clave10;
                for (var i = 1; i <= 36; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Active', 'Inactive');

                    if (id == 'labelLicenseNumber') {
                        id = 'license_number';
                    } else if (id == 'license_number') {
                        id = 'labelLicenseCategory';
                    } else if (id == 'labelLicenseCategory') {
                        id = 'license_category';
                    } else if (id == 'license_category') {
                        id = 'labelLicenseExpiration';
                    } else if (id == 'labelLicenseExpiration') {
                        id = 'license_expiration';
                    } else if (id == 'license_expiration') {
                        id = 'labelCertificateDrugsAlchoolemia';
                    } else if (id == 'labelCertificateDrugsAlchoolemia') {
                        id = 'certificate_drugs_alchoolemia';
                    } else if (id == 'certificate_drugs_alchoolemia') {
                        id = 'labelSIMITQueries';
                    } else if (id == 'labelSIMITQueries') {
                        id = 'SIMIT_queries';
                    } else if (id == 'SIMIT_queries') {
                        id = 'labelDrivingExam';
                    } else if (id == 'labelDrivingExam') {
                        id = 'driving_exam';
                    } else if (id == 'driving_exam') {
                        id = 'labelNormOverlandTransportationAutomotive';
                    } else if (id == 'labelNormOverlandTransportationAutomotive') {
                        id = 'Norm_Overland_Transportation_Automotive';
                    } else if (id == 'Norm_Overland_Transportation_Automotive') {
                        id = 'labelRulesTransit';
                    } else if (id == 'labelRulesTransit') {
                        id = 'Rules_Transit';
                    } else if (id == 'Rules_Transit') {
                        id = 'labelNormativeTips';
                    } else if (id == 'labelNormativeTips') {
                        id = 'Normative_Tips';
                    } else if (id == 'Normative_Tips') {
                        id = 'labelDrivingMethods';
                    } else if (id == 'labelDrivingMethods') {
                        id = 'Driving_Methods';
                    } else if (id == 'Driving_Methods') {
                        id = 'labelDefensiveDriving';
                    } else if (id == 'labelDefensiveDriving') {
                        id = 'Defensive_driving';
                    } else if (id == 'Defensive_driving') {
                        id = 'labelDistractions';
                    } else if (id == 'labelDistractions') {
                        id = 'distractions';
                    } else if (id == 'distractions') {
                        id = 'labelFirstaid';
                    } else if (id == 'labelFirstaid') {
                        id = 'First_aid';
                    } else if (id == 'First_aid') {
                        id = 'labelFirstResponder';
                    } else if (id == 'labelFirstResponder') {
                        id = 'First_Responder';
                    } else if (id == 'First_Responder') {
                        id = 'labelfiveSensesDriving';
                    } else if (id == 'labelfiveSensesDriving') {
                        id = 'five_senses_driving';
                    } else if (id == 'five_senses_driving') {
                        id = 'labelActivePassiveSecurityVehicle';
                    } else if (id == 'labelActivePassiveSecurityVehicle') {
                        id = 'Active_Passive_Security_vehicle';
                    } else if (id == 'Active_Passive_Security_vehicle') {
                        id = 'labelRoadSafety';
                    } else if (id == 'labelRoadSafety') {
                        id = 'Road_safety';
                    } else if (id == 'Road_safety') {
                        id = 'labelLinked';
                    } else if (id == 'labelLinked') {
                        id = 'Linked';
                    } else if (id == 'Linked') {
                        id = 'labelLicenseNumber';

                    }
                }
            }

            if (opcion == 1 || opcion == 4 || opcion == 3) {

                viewhideinputs('step2', 'Active', 'Inactive');
                viewhideinputs('pass2', 'Active', 'Inactive');
                viewhideinputs('step3', 'Inactive', 'Active');
                viewhideinputs('pass3', 'Inactive', 'Active');
                viewhideinputs('finalUser3', 'Inactive', 'Active');
                viewhideinputs('passfinalUser3', 'Inactive', 'Active');
                viewhideinputs('finalUser2', 'Inactive', 'Active');
                viewhideinputs('passfinalUser2', 'Inactive', 'Active');
                viewhideinputs('finalUser1', 'Active', 'Inactive');
                viewhideinputs('passfinalUser1', 'Active', 'Inactive');
                contador = 4;
                for (var i = 4; i <= 10; i++) {
                    var noSteps = 'step' + [i];
                    var noText = 'pass' + contador;
                    // console.log(noText);
                    document.getElementById(noSteps).classList.add('Inactive');
                    document.getElementById(noText).classList.add('Inactive');
                    contador = contador + 1;
                }
            }

            // if (opcion == 3) {
            //     viewhideinputs('finalUser1', 'Inactive', 'Active');
            //     viewhideinputs('passfinalUser1', 'Inactive', 'Active');
            //     viewhideinputs('finalUser2', 'Inactive', 'Active');
            //     viewhideinputs('passfinalUser2', 'Inactive', 'Active');
            //     viewhideinputs('step2', 'Inactive', 'Active');
            //     viewhideinputs('finalUser3', 'Active', 'Inactive');
            //     viewhideinputs('passfinalUser3', 'Active', 'Inactive');
            //     contador = 2;
            //     for (var i = 3; i <= 10; i++) {
            //         var noSteps = 'step' + [i];
            //         var noText = 'pass' + contador;
            //         console.log(noText);
            //         document.getElementById(noSteps).classList.add('Inactive');
            //         document.getElementById(noText).classList.add('Inactive');
            //         contador = contador + 1;
            //     }
            // }

            if (opcion == 5 || opcion == 6) {

                var Chargenum = document.getElementById('charge').value;

                if (Chargenum != 5) {
                    viewhideinputs('finalUser1', 'Inactive', 'Active');
                    viewhideinputs('passfinalUser1', 'Inactive', 'Active');
                    viewhideinputs('step2', 'Active', 'Inactive');
                    viewhideinputs('step3', 'Active', 'Inactive');
                    viewhideinputs('finalUser3', 'Inactive', 'Active');
                    viewhideinputs('passfinalUser3', 'Inactive', 'Active');
                    viewhideinputs('finalUser2', 'Active', 'Inactive');
                    viewhideinputs('passfinalUser2', 'Active', 'Inactive');
                    contador = 8;
                    for (var i = 8; i <= 10; i++) {

                        var noSteps = 'step' + [i];
                        var noText = 'pass' + contador;
                        // console.log(noText)
                        document.getElementById(noSteps).classList.add('Inactive');
                        document.getElementById(noText).classList.add('Inactive');
                        contador = contador + 1;
                    }
                } else {

                    viewhideinputs('finalUser2', 'Inactive', 'Active');
                    viewhideinputs('passfinalUser2', 'Inactive', 'Active');
                    viewhideinputs('finalUser1', 'Inactive', 'Active');
                    viewhideinputs('passfinalUser1', 'Inactive', 'Active');
                    viewhideinputs('step2', 'Active', 'Inactive');
                    viewhideinputs('step3', 'Active', 'Inactive');
                    viewhideinputs('finalUser3', 'Inactive', 'Active');
                    viewhideinputs('passfinalUser3', 'Inactive', 'Active');

                    for (var i = 8; i <= 10; i++) {
                        var noSteps = 'step' + [i];
                        var noText = 'pass' + [i];
                        document.getElementById(noSteps).classList.remove('Inactive');
                        document.getElementById(noText).classList.remove('Inactive');
                    }
                }


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

        jQuery('#driving_exam').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#driving_exam').on('change', function(e) {
        //     @this.set('driving_exam', e.target.value);
        // });

        jQuery('#Norm_Overland_Transportation_Automotive').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
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

        jQuery('#Normative_Tips').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#Normative_Tips').on('change', function(e) {
        //     @this.set('Normative_Tips', e.target.value);
        // });

        jQuery('#Driving_Methods').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
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

        jQuery('#distractions').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
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

        jQuery('#First_Responder').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#First_Responder').on('change', function(e) {
        //     @this.set('First_Responder', e.target.value);
        // });

        jQuery('#five_senses_driving').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });
        // $('#five_senses_driving').on('change', function(e) {
        //     @this.set('five_senses_driving', e.target.value);
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
                document.getElementById(color).classList.remove('icon-green');
                document.getElementById(color).classList.add('icon-blue');
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
