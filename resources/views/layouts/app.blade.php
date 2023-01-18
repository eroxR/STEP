{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

 
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" ></script>

        <script>
             
            swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href="">Why do I have this issue?</a>'
            });
        </script>

    </body>
</html> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" :class="{ 'theme-dark': dark }" x-data="data()"
    lang="en" x-cloak>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>Windmill Dashboard</title> --}}
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="C:/xampp/htdocs/step/node_modules/jquery-datetimepicker/jquery.datetimepicker.css"/> --}}



    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css"> --}}

    <link rel="stylesheet" href="{{ asset('datetimepicker-master/jquery.datetimepicker.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('virtualSelect/virtual-select.min.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('css/mobiscroll.javascript.min.css') }}" />

    {{-- <link rel="stylesheet" type="text/css" href="/jquery.datetimepicker.css"/> --}}
    {{-- <link  rel=”stylesheet”  href=”https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css”   /> --}}
    {{-- <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/> --}}
    {{-- <script src="jquery.datetimepicker.full.js"></script> --}}
    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="C:/xampp/htdocs/step/node_modules/jquery-datetimepicker/jquery.datetimepicker.css"/> --}}


    @livewireStyles

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"defer></script> --}}
    {{-- <script src="{{asset('js/charts-lines.js')}}" defer></script> --}}
    {{-- <script src="{{asset('js/charts-pie.js')}}" defer></script> --}}
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900 " 
    {{-- :class="{ 'overflow-hidden': isSideMenuOpen }" --}}
    >
        {{--
<aside x-cloak
class="z-20 w-48 bg-white dark:bg-gray-800  border-r-fuchsia-800 rounded-r-md overflow-y-auto"{{-- class="fixed inset-y-0 z-20 flex-shrink-0 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden" --}}
        {{-- x-show="isSideMenuOpen"  --}}{{-- :class="{ 'w-48': isSideMenuOpen, 'w-16-1': !isSideMenuOpen }"
x-transition:enter="transition ease-in-out duration-150"
x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
x-transition:leave-end="opacity-0 transform -translate-x-20">
<div class="py-1-5 text-gray-500 dark:text-gray-400"
    :class="{ 'py-1-5': isSideMenuOpen, 'py-4': !isSideMenuOpen }">
    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="{{ route('dashboard') }}"
        :class="{ 'ml-6': isSideMenuOpen }">
        <div class="-mt-7 border-b-fuchsia-800 rounded-b-2xl" :class="{ 'hidden': !isSideMenuOpen }">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <div class="hidden border-bt-fuchsia-800 rounded-full mb-3-7" :class="{ 'hidden': isSideMenuOpen }">
            <img src="{{ asset('img/l_logo_step.png') }}" alt="" class="">
        </div>
    </a>
    <ul class="mt-6">
        <li class="relative px-6 py-2" :class="{ 'py-2': isSideMenuOpen, 'py-3': !isSideMenuOpen }">
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg hidden"
                aria-hidden="true"
                :class="{ 'block': view == 'manuals', 'hidden': view != 'manuals' }"></span>
            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="{{ route('manual') }}" x-on:mouseover="flotan= 'manuals'" x-on:mouseleave="flotan=''"
                @click="changesView('manuals')">
                <span class="text-2-2xl" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                    :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                    <i class="fas fa-book icon-green" :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                </span>
                <span class="ml-4"
                    :class="!isSideMenuOpen && flotan == 'manuals' ? minidisplay : '' || !isSideMenuOpen &&
                        flotan !=
                        'manuals' ? 'hidden' : ''">
                    manuals
                </span>
            </a>
        </li>
    </ul>
    <ul>
        <div class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-gray-800 dark:text-gray-200"
            :class="{ 'hidden': !isSideMenuOpen }">
            <span class="ml-4">account_settings</span>
        </div>
        <li class="relative px-6 py-2" :class="{ 'py-2': isSideMenuOpen, 'py-3': !isSideMenuOpen }">
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg hidden"
                aria-hidden="true"
                :class="{ 'block': view == 'changePassword', 'hidden': view != 'changePassword' }"></span>
            <a x-on:mouseover="flotan='change_password'" x-on:mouseleave="flotan=''"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{ route('cambiocontraseña') }}" @click="changesView('changePassword')">
                <span class="text-2-2xl" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                    :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                    <i class="fas fa-unlock-alt icon-red" :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                </span>
                <span class="ml-4"
                    :class="!isSideMenuOpen && flotan == 'change_password' ? minidisplay : '' || !isSideMenuOpen &&
                        flotan != 'change_password' ? 'hidden' : ''">
                    change password
                </span>
            </a>
        </li>
        <li class="relative px-6 py-2" :class="{ 'py-2': isSideMenuOpen, 'py-3': !isSideMenuOpen }">
            <button x-on:mouseover="flotan='Information_lists'" x-on:mouseleave="flotan=''"
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                @click="togglePagesMenu" aria-haspopup="true">

                <span class="inline-flex items-center">
                    <span class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                        :class="{ 'w-5 h-5': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                        <i class="fas fa-fw fa-list" :class="{ 'hidden': !isSideMenuOpen }"></i>
                        <i class="fas fa-fw fa-database text-3xl"
                            :class="{ 'hidden': isSideMenuOpen }"></i>
                    </span>
                    <span class="ml-4"
                        :class="!isSideMenuOpen && flotan == 'Information_lists' ? minidisplay : '' || !
                            isSideMenuOpen &&
                            flotan != 'Information_lists' ? 'hidden' : ''">
                        Information lists.
                    </span>
                </span>
                <svg class="text-2-2xl" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <template x-if="isPagesMenuOpen">
                <ul x-transition:enter="transition-all ease-in-out duration-300"
                    x-transition:enter-start="opacity-25 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-xl"
                    x-transition:leave="transition-all ease-in-out duration-300"
                    x-transition:leave-start="opacity-100 max-h-xl"
                    x-transition:leave-end="opacity-0 max-h-0"
                    class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium g-black bg-opacity-50 rounded-md shadow-inner bg-gray-701 dark:text-gray-400 dark:bg-gray-900"
                    :class="{
                        'p-2': isSideMenuOpen,
                        'mt-2': isSideMenuOpen,
                        'p-6': !isSideMenuOpen,
                        '-ml-7': !
                            isSideMenuOpen
                    }"
                    aria-label="submenu">
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        :class="{ '-ml-5': !isSideMenuOpen }">
                        <a x-on:mouseover="flotan='List_Contracts'" x-on:mouseleave="flotan=''"
                            class="w-full" href="{{ route('pruebas.listacontratos') }}">
                            <i class="fas fa-fw fa-database icon-green"
                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                            <span
                                :class="!isSideMenuOpen && flotan == 'List_Contracts' ? minidisplay : '' || !
                                    isSideMenuOpen && flotan != 'List_Contracts' ? 'hidden' : ''">
                                List of Contracts
                            </span>
                        </a>
                    </li>
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        :class="{ '-ml-5': !isSideMenuOpen }">
                        <a x-on:mouseover="flotan='Fuec_List'" x-on:mouseleave="flotan=''" class="w-full"
                            href="{{ route('pruebas.listafuec') }}">
                            <i class="fas fa-fw fa-database icon-yellow"
                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                            <span
                                :class="!isSideMenuOpen && flotan == 'Fuec_List' ? minidisplay : '' || !
                                    isSideMenuOpen &&
                                    flotan != 'Fuec_List' ? 'hidden' : ''">
                                Fuec List
                            </span>
                        </a>
                    </li>
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        :class="{ '-ml-5': !isSideMenuOpen }">
                        <a x-on:mouseover="flotan='Driver_List'" x-on:mouseleave="flotan=''"
                            class="w-full" href="{{ route('pruebas.listaconductores') }}">
                            <i class="fas fa-fw fa-database icon-red"
                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                            <span
                                :class="!isSideMenuOpen && flotan == 'Driver_List' ? minidisplay : '' || !
                                    isSideMenuOpen &&
                                    flotan != 'Driver_List' ? 'hidden' : ''">
                                Driver List
                            </span>
                        </a>
                    </li>
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        :class="{ '-ml-5': !isSideMenuOpen }">
                        <a x-on:mouseover="flotan='Linked_List'" x-on:mouseleave="flotan=''"
                            class="w-full" href="{{ route('pruebas.listavinculados') }}">
                            <i class="fas fa-fw fa-database icon-purple"
                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                            <span
                                :class="!isSideMenuOpen && flotan == 'Linked_List' ? minidisplay : '' || !
                                    isSideMenuOpen &&
                                    flotan != 'Linked_List' ? 'hidden' : ''">
                                Linked List
                            </span>
                        </a>
                    </li>
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        :class="{ '-ml-5': !isSideMenuOpen }">
                        <a x-on:mouseover="flotan='List_vehicles'" x-on:mouseleave="flotan=''"
                            class="w-full" href="{{ route('pruebas.listavehiculos') }}">
                            <i class="fas fa-fw fa-database icon-gray"
                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                            <span
                                :class="!isSideMenuOpen && flotan == 'List_vehicles' ? minidisplay : '' || !
                                    isSideMenuOpen && flotan != 'List_vehicles' ? 'hidden' : ''">
                                List of vehicles
                            </span>

                        </a>
                    </li>
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        :class="{ '-ml-5': !isSideMenuOpen }">
                        <a x-on:mouseover="flotan='pending_list'" x-on:mouseleave="flotan=''"
                            class="w-full" href="{{ route('pruebas.listapendiente') }}">
                            <i class="fas fa-fw fa-database icon-blue"
                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                            <span
                                :class="!isSideMenuOpen && flotan == 'pending_list' ? minidisplay : '' || !
                                    isSideMenuOpen &&
                                    flotan != 'pending_list' ? 'hidden' : ''">
                                pending list
                            </span>
                        </a>
                    </li>
                </ul>
            </template>
        </li>
        <div class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-gray-800 dark:text-gray-200"
            :class="{ 'hidden': !isSideMenuOpen }">
            <span class="ml-4">OPERATIONS</span>
        </div>
        <li class="relative px-6 py-2" :class="{ 'py-2': isSideMenuOpen, 'py-3': !isSideMenuOpen }">
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"></span>
            <a x-on:mouseover="flotan='Manage_Contract'" x-on:mouseleave="flotan=''"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{ route('manage-contracts') }}">
                <span class="text-2-2xl" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                    :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                    <i class="fas fa-fw fa-file-contract icon-green"
                        :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                </span>
                <span class="ml-4"
                    :class="!isSideMenuOpen && flotan == 'Manage_Contract' ? minidisplay : '' || !isSideMenuOpen &&
                        flotan != 'Manage_Contract' ? 'hidden' : ''">
                    Manage Contract
                </span>
            </a>
        </li>
        <li class="relative px-6 py-2" :class="{ 'py-2': isSideMenuOpen, 'py-3': !isSideMenuOpen }">
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"></span>
            <a x-on:mouseover="flotan='Manage_Fuec'" x-on:mouseleave="flotan=''"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{ route('manage-permissions') }}">
                <span class="text-2-2xl" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                    :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                    <i class="fas fa-fw fa-road icon-yellow" :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                </span>
                <span class="ml-4"
                    :class="!isSideMenuOpen && flotan == 'Manage_Fuec' ? minidisplay : '' || !isSideMenuOpen &&
                        flotan !=
                        'Manage_Fuec' ? 'hidden' : ''">
                    Manage Fuec
                </span>
            </a>
        </li>
        <li class="relative px-6 py-2" :class="{ 'py-2': isSideMenuOpen, 'py-3': !isSideMenuOpen }">
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"></span>
            <a x-on:mouseover="flotan='Manage_User'" x-on:mouseleave="flotan=''"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{ route('manage-users') }}">
                <span class="text-2-2xl" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                    :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                    <i class="fas fa-fw fa-user-plus icon-aquamarine"
                        :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                </span>
                <span class="ml-4"
                    :class="!isSideMenuOpen && flotan == 'Manage_User' ? minidisplay : '' || !isSideMenuOpen &&
                        flotan !=
                        'Manage_User' ? 'hidden' : ''">
                    Manage User
                </span>
            </a>
        </li>
        <li class="relative px-6 py-2" :class="{ 'py-2': isSideMenuOpen, 'py-3': !isSideMenuOpen }">
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"></span>
            <a x-on:mouseover="flotan='ManageTechnicalSheet'" x-on:mouseleave="flotan=''"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{ route('manage-vehicles') }}">
                <span class="text-2-2xl" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                    :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                    <i class="fas fa-fw fa-car-side icon-orange"
                        :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                </span>
                <span class="ml-4"
                    :class="!isSideMenuOpen && flotan == 'ManageTechnicalSheet' ? minidisplay : '' || !
                        isSideMenuOpen &&
                        flotan != 'ManageTechnicalSheet' ? 'hidden' : ''">
                    Manage Technical Sheet
                </span>
            </a>
        </li>
        <li class="relative px-6 py-2" :class="{ 'py-2': isSideMenuOpen, 'py-3': !isSideMenuOpen }">
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"></span>
            <a x-on:mouseover="flotan='Other_activity'" x-on:mouseleave="flotan=''"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{ route('pruebas.otraactividad') }}">
                <span class="text-2-2xl" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                    :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                    <i class="far fa-question-circle icon-gray"
                        :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                </span>
                <span class="ml-4"
                    :class="!isSideMenuOpen && flotan == 'Other_activity' ? minidisplay : '' || !isSideMenuOpen &&
                        flotan !=
                        'Other_activity' ? 'hidden' : ''">
                    Other activity
                </span>
            </a>
        </li>

    </ul>
    {{-- <div class="px-6 my-6">
<button
    class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
    Create account
    <span class="ml-2" aria-hidden="true">+</span>
</button>
</div> --}}
        {{-- </div>
</aside> --}}
        <!-- Desktop sidebar -->
        {{-- <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div> --}}
        {{-- @livewire('menu') --}}

        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        {{-- <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div> --}}

        {{-- <aside class="fixed w-12 inset-y-0 z-20 flex-shrink-0 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
                x-show="isSideMenuOpen2" x-transition:enter="transition ease-in-out duration-150"
                x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 transform -translate-x-20">
                <div class="py-4 text-gray-500 dark:text-gray-400">
                    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                        Windmill
                    </a>
                    <ul class="mt-6">
                        <li class="relative px-6 py-3">
                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                                aria-hidden="true"></span>
                            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                                href="index.html">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                <span class="ml-4">prueba</span>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="forms.html">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                    </path>
                                </svg>
                                <span class="ml-4">Forms</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="cards.html">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                    </path>
                                </svg>
                                <span class="ml-4">Cards</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="charts.html">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                    <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                                </svg>
                                <span class="ml-4">Charts</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="buttons.html">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                                    </path>
                                </svg>
                                <span class="ml-4">Buttons</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="modals.html">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="ml-4">Modals</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="tables.html">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                                </svg>
                                <span class="ml-4">Tables</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <button
                                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                @click="togglePagesMenu" aria-haspopup="true">
                                <span class="inline-flex items-center">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                                        </path>
                                    </svg>
                                    <span class="ml-4">Pages</span>
                                </span>
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <template x-if="isPagesMenuOpen">
                                <ul x-transition:enter="transition-all ease-in-out duration-300"
                                    x-transition:enter-start="opacity-25 max-h-0"
                                    x-transition:enter-end="opacity-100 max-h-xl"
                                    x-transition:leave="transition-all ease-in-out duration-300"
                                    x-transition:leave-start="opacity-100 max-h-xl"
                                    x-transition:leave-end="opacity-0 max-h-0"
                                    class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                    aria-label="submenu">
                                    <li
                                        class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                        <a class="w-full" href="pages/login.html">Login</a>
                                    </li>
                                    <li
                                        class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                        <a class="w-full" href="pages/create-account.html">
                                            Create account
                                        </a>
                                    </li>
                                    <li
                                        class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                        <a class="w-full" href="pages/forgot-password.html">
                                            Forgot password
                                        </a>
                                    </li>
                                    <li
                                        class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                        <a class="w-full" href="pages/404.html">404</a>
                                    </li>
                                    <li
                                        class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                        <a class="w-full" href="pages/blank.html">Blank</a>
                                    </li>
                                </ul>
                            </template>
                        </li>
                    </ul>
                    <div class="px-6 my-6">
                        <button
                            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Create account
                            <span class="ml-2" aria-hidden="true">+</span>
                        </button>
                    </div>
                </div>
            </aside>  --}}

        <!-- fin Mobile sidebar -->




        <div class="flex flex-col flex-1 w-full">
            <header
                class="mx-8 mt-1 z-10 p-1 bg-white shadow-md dark:bg-gray-800 border-bt-fuchsia-800 border-b rounded-full">
                <div
                    class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                    {{-- icono --}}
                    <div class="w-10">
                        <a class="text-lg font-bold text-gray-800 dark:text-gray-200" href="{{ route('dashboard') }}">
                            <div class="rounded-b-2xl w-full" :class="{ 'hidden': isSideMenuOpen }">
                                <img src="{{ asset('img/logo.png') }}" alt="" class="">
                            </div>
                            <div class="hidden rounded-full w-full" :class="{ 'hidden': !isSideMenuOpen }">
                                <img src="{{ asset('img/l_logo_step.png') }}" alt="" class="">
                            </div>
                        </a>
                    </div>
                    <!-- Search input -->
                    <div class="relative w-full mx-14 focus-within:text-purple-500">
                        <div class="">
                            {{-- <div class="absolute inset-y-0 flex items-center pl-2">
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input
                                class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                type="text" placeholder="Search for projects" aria-label="Search" /> --}}

                            <ul class="flex items-center flex-shrink-0 ">
                                <li class="flex">
                                    <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                                        href="{{ route('manual') }}" x-on:mouseover="flotan= 'manuals'"
                                        x-on:mouseleave="flotan=''" @click="changesView('manuals')">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="fas fa-book icon-green"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'manuals' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan !=
                                                'manuals' ? 'hidden' : ''">
                                            manuals
                                        </span>
                                    </a>
                                </li>
                                <li class="flex ml-8">
                                    <a x-on:mouseover="flotan='change_password'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        href="{{ route('cambiocontraseña') }}" @click="changesView('changePassword')">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="fas fa-unlock-alt icon-red"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'change_password' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan != 'change_password' ? 'hidden' : ''">
                                            change password
                                        </span>
                                    </a>
                                </li>
                                <li class="flex ml-8">
                                    <button x-on:mouseover="flotan='Information_lists'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        @click="togglePagesMenu" aria-haspopup="true">

                                        <span class="inline-flex items-center">
                                            <span class="w-5 h-5" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor"
                                                :class="{ 'w-5 h-5': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                                <i class="fas fa-fw fa-list"
                                                    :class="{ 'hidden': !isSideMenuOpen }"></i>
                                                <i class="fas fa-fw fa-database text-3xl"
                                                    :class="{ 'hidden': isSideMenuOpen }"></i>
                                            </span>
                                            <span class="ml-4"
                                                :class="!isSideMenuOpen && flotan == 'Information_lists' ? minidisplay : '' || !
                                                    isSideMenuOpen &&
                                                    flotan != 'Information_lists' ? 'hidden' : ''">
                                                Information lists.
                                            </span>
                                        </span>
                                        <svg class="text-2-2xl" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <template x-if="isPagesMenuOpen">
                                        <ul x-transition:enter="transition-all ease-in-out duration-300"
                                            x-transition:enter-start="opacity-25 max-h-0"
                                            x-transition:enter-end="opacity-100 max-h-xl"
                                            x-transition:leave="transition-all ease-in-out duration-300"
                                            x-transition:leave-start="opacity-100 max-h-xl"
                                            x-transition:leave-end="opacity-0 max-h-0" {{-- class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium g-black bg-opacity-50 rounded-md shadow-inner bg-gray-701 dark:text-gray-400 dark:bg-gray-900" --}}
                                            class="absolute p-2 mt-8 ml-4 space-y-2 overflow-hidden text-sm font-medium g-black bg-opacity-50 rounded-md shadow-inner bg-gray-701 dark:text-gray-400 dark:bg-gray-900"
                                            :class="{
                                                'p-2': isSideMenuOpen,
                                                'mt-2': isSideMenuOpen,
                                                'p-6': !isSideMenuOpen,
                                                '-ml-7': !
                                                    isSideMenuOpen
                                            }"
                                            aria-label="submenu">
                                            <div class="grid grid-cols-4 gap-4">
                                                <div>
                                                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                        :class="{ '-ml-5': !isSideMenuOpen }">
                                                        <a x-on:mouseover="flotan='List_Contracts'"
                                                            x-on:mouseleave="flotan=''" class="w-full"
                                                            href="{{ route('pruebas.listacontratos') }}">
                                                            <i class="fas fa-fw fa-database icon-green"
                                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                            <span
                                                                :class="!isSideMenuOpen && flotan == 'List_Contracts' ?
                                                                    minidisplay : '' || !
                                                                    isSideMenuOpen && flotan != 'List_Contracts' ?
                                                                    'hidden' : ''">
                                                                List of Contracts
                                                            </span>
                                                        </a>
                                                    </li>
                                                </div>
                                                <div>
                                                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                        :class="{ '-ml-5': !isSideMenuOpen }">
                                                        <a x-on:mouseover="flotan='Fuec_List'"
                                                            x-on:mouseleave="flotan=''" class="w-full"
                                                            href="{{ route('pruebas.listafuec') }}">
                                                            <i class="fas fa-fw fa-database icon-yellow"
                                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                            <span
                                                                :class="!isSideMenuOpen && flotan == 'Fuec_List' ? minidisplay :
                                                                    '' || !
                                                                    isSideMenuOpen &&
                                                                    flotan != 'Fuec_List' ? 'hidden' : ''">
                                                                Fuec List
                                                            </span>
                                                        </a>
                                                    </li>
                                                </div>
                                                <div>
                                                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                        :class="{ '-ml-5': !isSideMenuOpen }">
                                                        <a x-on:mouseover="flotan='Driver_List'"
                                                            x-on:mouseleave="flotan=''" class="w-full"
                                                            href="{{ route('pruebas.listaconductores') }}">
                                                            <i class="fas fa-fw fa-database icon-red"
                                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                            <span
                                                                :class="!isSideMenuOpen && flotan == 'Driver_List' ?
                                                                    minidisplay : '' || !
                                                                    isSideMenuOpen &&
                                                                    flotan != 'Driver_List' ? 'hidden' : ''">
                                                                Driver List
                                                            </span>
                                                        </a>
                                                    </li>
                                                </div>
                                                <div>
                                                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                        :class="{ '-ml-5': !isSideMenuOpen }">
                                                        <a x-on:mouseover="flotan='Linked_List'"
                                                            x-on:mouseleave="flotan=''" class="w-full"
                                                            href="{{ route('pruebas.listavinculados') }}">
                                                            <i class="fas fa-fw fa-database icon-purple"
                                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                            <span
                                                                :class="!isSideMenuOpen && flotan == 'Linked_List' ?
                                                                    minidisplay : '' || !
                                                                    isSideMenuOpen &&
                                                                    flotan != 'Linked_List' ? 'hidden' : ''">
                                                                Linked List
                                                            </span>
                                                        </a>
                                                    </li>
                                                </div>
                                                <div>
                                                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                        :class="{ '-ml-5': !isSideMenuOpen }">
                                                        <a x-on:mouseover="flotan='List_vehicles'"
                                                            x-on:mouseleave="flotan=''" class="w-full"
                                                            href="{{ route('pruebas.listavehiculos') }}">
                                                            <i class="fas fa-fw fa-database icon-gray"
                                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                            <span
                                                                :class="!isSideMenuOpen && flotan == 'List_vehicles' ?
                                                                    minidisplay : '' || !
                                                                    isSideMenuOpen && flotan != 'List_vehicles' ?
                                                                    'hidden' : ''">
                                                                List of vehicles
                                                            </span>

                                                        </a>
                                                    </li>
                                                </div>
                                                <div>
                                                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                        :class="{ '-ml-5': !isSideMenuOpen }">
                                                        <a x-on:mouseover="flotan='pending_list'"
                                                            x-on:mouseleave="flotan=''" class="w-full"
                                                            href="{{ route('pruebas.listapendiente') }}">
                                                            <i class="fas fa-fw fa-database icon-blue"
                                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                            <span
                                                                :class="!isSideMenuOpen && flotan == 'pending_list' ?
                                                                    minidisplay : '' || !
                                                                    isSideMenuOpen &&
                                                                    flotan != 'pending_list' ? 'hidden' : ''">
                                                                pending list
                                                            </span>
                                                        </a>
                                                    </li>
                                                </div>
                                                <div>G</div>
                                            </div>

                                        </ul>
                                    </template>
                                </li>
                                <li class="flex ml-8">
                                    <a x-on:mouseover="flotan='Manage_Contract'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        href="{{ route('manage-contracts') }}">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="fas fa-fw fa-file-contract icon-green"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'Manage_Contract' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan != 'Manage_Contract' ? 'hidden' : ''">
                                            Manage Contract
                                        </span>
                                    </a>
                                </li>
                                <li class="flex ml-8">
                                    <a x-on:mouseover="flotan='Manage_Fuec'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        href="{{ route('manage-permissions') }}">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="fas fa-fw fa-road icon-yellow"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'Manage_Fuec' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan !=
                                                'Manage_Fuec' ? 'hidden' : ''">
                                            Manage Fuec
                                        </span>
                                    </a>
                                </li>
                                <li class="flex ml-8">
                                    <a x-on:mouseover="flotan='Manage_User'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        href="{{ route('manage-users') }}">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="fas fa-fw fa-user-plus icon-aquamarine"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'Manage_User' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan !=
                                                'Manage_User' ? 'hidden' : ''">
                                            Manage User
                                        </span>
                                    </a>
                                </li>
                                <li class="flex ml-8">
                                    <a x-on:mouseover="flotan='ManageTechnicalSheet'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        href="{{ route('manage-vehicles') }}">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="fas fa-fw fa-car-side icon-orange"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'ManageTechnicalSheet' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan != 'ManageTechnicalSheet' ? 'hidden' : ''">
                                            Manage Technical Sheet
                                        </span>
                                    </a>
                                </li>
                                <li class="flex ml-8">
                                    <a x-on:mouseover="flotan='Other_activity'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        href="{{ route('pruebas.otraactividad') }}">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="far fa-question-circle icon-gray"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'Other_activity' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan !=
                                                'Other_activity' ? 'hidden' : ''">
                                            Other activity
                                        </span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md sm:display lg:hidden focus:outline-none"
                        @click="toggleSideMenu" aria-label="Menu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Theme toggler -->
                        <li class="flex">
                            <button class="rounded-md focus:outline-none" @click="toggleTheme"
                                aria-label="Toggle color mode">
                                <template x-if="!dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                        </path>
                                    </svg>
                                </template>
                                <template x-if="dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template>
                            </button>
                        </li>
                        <!-- Notifications menu -->
                        <li class="relative">
                            <button class="relative align-middle rounded-md focus:outline-none"
                                x-on:click="toggleNotificationsMenu" x-on:click.away="closeNotificationsMenu"
                                aria-label="Notifications" aria-haspopup="true">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                                <!-- Notification badge -->
                                <span aria-hidden="true"
                                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
                            </button>
                            <template x-if="isNotificationsMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                    x.show="closeNotificationsMenu" @keydown.escape="closeNotificationsMenu"
                                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700">
                                    <li class="flex">
                                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                            <span>Messages</span>
                                            <span
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                                                13
                                            </span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                            <span>Sales</span>
                                            <span
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                                                2
                                            </span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                            <span>Alerts</span>
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </li>
                        <!-- Profile menu -->
                        <li class="relative">
                            <button class="align-middle rounded-full focus:outline-none"
                                x-on:click="toggleProfileMenu" x-on:click.away="closeProfileMenu"
                                aria-label="Account" aria-haspopup="true">
                                <img class="object-cover w-8 h-8 rounded-full" {{-- src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82" --}}
                                    src="{{ asset('img/l_logo_step.png') }}" alt="" aria-hidden="true" />
                            </button>
                            <template x-if="isProfileMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                    x.show="closeProfileMenu" x-on:keydown.scape="closeProfileMenu"
                                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                                    aria-label="submenu">
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="{{ route('profile.show') }}">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                </path>
                                            </svg>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path
                                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                                </path>
                                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li class="flex">

                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf

                                            <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                                href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                                <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path
                                                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                                    </path>
                                                </svg>
                                                <span>{{ __('Log Out') }}</span>
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </template>
                        </li>
                    </ul>
                </div>
            </header>

            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">


                    {{ $slot }}
                    {{-- <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            Dashboard
                        </h2> --}}
                    <!-- CTA -->
                    {{-- <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                            href="https://github.com/estevanmaito/windmill-dashboard">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <span>Star this project on GitHub</span>
                            </div>
                            <span>View more &RightArrow;</span>
                        </a> --}}
                    <!-- Cards -->
                    {{-- <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                            <!-- Card -->
                            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                <div
                                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                        Total clients
                                    </p>
                                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                        6389
                                    </p>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                <div
                                    class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                        Account balance
                                    </p>
                                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                        $ 46,760.89
                                    </p>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                <div
                                    class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                        New sales
                                    </p>
                                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                        376
                                    </p>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                <div
                                    class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                        Pending contacts
                                    </p>
                                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                        35
                                    </p>
                                </div>
                            </div>
                        </div> --}}

                    <!-- New Table -->
                    {{-- <div class="w-full overflow-hidden rounded-lg shadow-xs">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full whitespace-no-wrap">
                                    <thead>
                                        <tr
                                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                            <th class="px-4 py-3">Client</th>
                                            <th class="px-4 py-3">Amount</th>
                                            <th class="px-4 py-3">Status</th>
                                            <th class="px-4 py-3">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                            alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                                            aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Hans Burger</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            10x Developer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                    Approved
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                6/10/2020
                                            </td>
                                        </tr>

                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6"
                                                            alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                                            aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Jolina Angelie</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            Unemployed
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 369.95
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                                    Pending
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                6/10/2020
                                            </td>
                                        </tr>

                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                            alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                                            aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Sarah Curry</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            Designer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 86.00
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                                    Denied
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                6/10/2020
                                            </td>
                                        </tr>

                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                            alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                                            aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Rulia Joberts</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            Actress
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 1276.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                    Approved
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                6/10/2020
                                            </td>
                                        </tr>

                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1546456073-6712f79251bb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                            alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                                            aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Wenzel Dashington</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            Actor
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                                                    Expired
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                6/10/2020
                                            </td>
                                        </tr>

                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=b8377ca9f985d80264279f277f3a67f5"
                                                            alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                                            aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Dave Li</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            Influencer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                    Approved
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                6/10/2020
                                            </td>
                                        </tr>

                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                            alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                                            aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Maria Ramovic</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            Runner
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                    Approved
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                6/10/2020
                                            </td>
                                        </tr>

                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                            alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                                            aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Hitney Wouston</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            Singer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                    Approved
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                6/10/2020
                                            </td>
                                        </tr>

                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                            alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                                            aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Hans Burger</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            10x Developer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                    Approved
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                6/10/2020
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                                    <svg aria-hidden="true" class="w-4 h-4 fill-current"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                                    1
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
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
                                                <button
                                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                                    4
                                                </button>
                                            </li>
                                            <li>
                                                <span class="px-3 py-1">...</span>
                                            </li>
                                            <li>
                                                <button
                                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                                    8
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                                    9
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                                    aria-label="Next">
                                                    <svg class="w-4 h-4 fill-current" aria-hidden="true"
                                                        viewBox="0 0 20 20">
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
                        </div> --}}

                    <!-- Charts -->
                    {{-- <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            Charts
                        </h2> --}}
                    {{-- <div class="grid gap-6 mb-8 md:grid-cols-2">
                            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                                    Revenue
                                </h4>
                                <canvas id="pie"></canvas>
                                <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                                    <!-- Chart legend -->
                                    <div class="flex items-center">
                                        <span class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"></span>
                                        <span>Shirts</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                                        <span>Shoes</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                        <span>Bags</span>
                                    </div>
                                </div>
                            </div>
                            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                                    Traffic
                                </h4>
                                <canvas id="line"></canvas>
                                <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                                    <!-- Chart legend -->
                                    <div class="flex items-center">
                                        <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                                        <span>Organic</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                        <span>Paid</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </main>

        </div>
    </div>
    @stack('modals')

    @livewireScripts
    <script src="{{ asset('js/datos.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('datetimepicker-master/build/jquery.datetimepicker.full.js') }}"></script>
    {{-- <script src="{{ asset('virtualSelect/virtual-select.min.js') }}"></script> --}}
    {{-- <script src="C:/xampp/htdocs/step/node_modules/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js"></script> --}}
    {{-- @livewire('contac-modal') --}}
    {{-- <Livewire:contac-modal/> --}}
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script> --}}
    {{-- <script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js1"></script>  --}}
    {{-- <script src="pikaday.js"></script> --}}

    @yield('scripts')

    {{-- <script>
            swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href="">Why do I have this issue?</a>'
            });
        </script> --}}

</body>

</html>
