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
<script>
    function data() {
        function getThemeFromLocalStorage() {
            // if user already changed the theme, use it
            if (window.localStorage.getItem('dark')) {
                return JSON.parse(window.localStorage.getItem('dark'));
            }

            // else return their preferences
            return (
                !!window.matchMedia &&
                window.matchMedia('(prefers-color-scheme: dark)').matches
            );
        }

        function getMenuFromLocalStorage() {
            // if user already changed the theme, use it
            if (window.localStorage.getItem('isSideMenuOpen')) {
                return JSON.parse(window.localStorage.getItem('isSideMenuOpen'));
            }
        }

        function setThemeToLocalStorage(value) {
            window.localStorage.setItem('dark', value);
        }

        function setMenuToLocalStorage(value) {
            window.localStorage.setItem('isSideMenuOpen', value);
        }

        return {
            dark: getThemeFromLocalStorage(),
            toggleTheme() {
                this.dark = !this.dark;
                setThemeToLocalStorage(this.dark);
            },
            tuser: 0,
            typeUser(valor) {
                console.log(valor);
            },
            show: false,
            flotan: '',
            view: 'manuals',
            minidisplay: 'block fixed mt5 -ml-7 border transition-colors duration-150 text-white  text-sm bg-gray-900 px-2 py-1 rounded-md',
            minidisplay2: 'block fixed mt0 -ml-7 border transition-colors duration-150 text-white  text-sm bg-gray-900 px-2 py-1 rounded-md',
            selectdisplay: 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg',
            changesView(v) {
                view = v;
                console.log(view);
            },
            // variable: null,
            // titleflotan(id) {

            // },
            isSideMenuOpen: getMenuFromLocalStorage(),
            toggleSideMenu() {
                this.isSideMenuOpen = !this.isSideMenuOpen;
                setMenuToLocalStorage(this.isSideMenuOpen);
            },
            // closeSideMenu() {
            //     this.isSideMenuOpen = false;
            // },
            isNotificationsMenuOpen: false,
            toggleNotificationsMenu() {
                this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen;
            },
            closeNotificationsMenu() {
                this.isNotificationsMenuOpen = false;
            },
            isProfileMenuOpen: false,
            toggleProfileMenu() {
                this.isProfileMenuOpen = !this.isProfileMenuOpen;
            },
            closeProfileMenu() {
                this.isProfileMenuOpen = false;
            },
            isPagesMenuOpen: false,
            togglePagesMenu() {
                this.isPagesMenuOpen = !this.isPagesMenuOpen;
            },
            // Modal
            isModalOpen: false,
            isModalOpen2: false,
            // trapCleanup: null,
            openModal() {
                this.isModalOpen = true;
                // this.trapCleanup = focusTrap(document.querySelector('#modal'));
                // console.log(isModalOpen2);
            },
            closeModal() {
                this.isModalOpen = false;
                // this.trapCleanup();
                // console.log(isModalOpen2);
            },
            openModal2() {
                this.isModalOpen2 = true;
                // this.trapCleanup = focusTrap(document.querySelector('#modal'));
            },
            closeModal2() {
                this.isModalOpen2 = false;
                // this.trapCleanup();
            },
        };
    }
</script>
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
    <link href="{{ asset('librerias/select2/select2.min.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="C:/xampp/htdocs/step/node_modules/jquery-datetimepicker/jquery.datetimepicker.css"/> --}}
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" />



    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css"> --}}

    <link rel="stylesheet" href="{{ asset('librerias/datetimepicker-master/jquery.datetimepicker.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('virtualSelect/virtual-select.min.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('css/mobiscroll.javascript.min.css') }}" />
    <link href="{{ asset('librerias/dataTables/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('librerias/dataTables/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('librerias/dataTables/buttons.dataTables.min.css') }}" rel="stylesheet">

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
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900 " {{-- :class="{ 'overflow-hidden': isSideMenuOpen }" --}}>
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
                                <li class="flex" onclick="active(1)">
                                    <span id="active1"
                                        class="absolute inset-y-0 left-0 bg-purple-600 li-active hidden"></span>
                                    <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                                        href="{{ route('manual') }}" x-on:mouseover="flotan= 'manuals'"
                                        x-on:mouseleave="flotan=''" @click="changesView('manuals')">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="fas fa-book icon-coffee"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'manuals' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan !=
                                                'manuals' ? 'hidden' : ''">
                                            {{ __('manuals') }}
                                        </span>
                                    </a>
                                </li>
                                @can('pesv')
                                    <li class="flex ml-8">
                                        <span id="active2"
                                            class="absolute inset-y-0 left-0 bg-purple-600 li-active hidden"></span>
                                        <a x-on:mouseover="flotan='PESV'" x-on:mouseleave="flotan=''"
                                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                            href="{{ route('pesv') }}" @click="changesView('PESV')">
                                            <span class="text-2-2xl" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor"
                                                :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                                {{-- <i class="fas fa-traffic-light " --}}
                                                <i class="fas fa-route icon-blue"
                                                    :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                {{-- <svg class="icon-black" width="40" height="40" viewBox="0 0 800 800" fill="#FF0000" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_2_3)">
                                                    <path d="M399.996 165.014C357.987 165.014 323.807 199.193 323.807 241.204C323.807 283.216 357.987 317.394 399.996 317.394C442.006 317.394 476.185 283.216 476.185 241.204C476.185 199.193 442.007 165.014 399.996 165.014ZM399.996 264.429C387.191 264.429 376.773 254.01 376.773 241.204C376.773 228.399 387.193 217.98 399.996 217.98C412.801 217.98 423.22 228.399 423.22 241.204C423.22 254.01 412.802 264.429 399.996 264.429Z" fill="#FF0000"/>
                                                    <path d="M399.996 358.094C357.987 358.094 323.807 392.273 323.807 434.284C323.807 476.295 357.987 510.473 399.996 510.473C442.006 510.473 476.185 476.295 476.185 434.284C476.185 392.273 442.007 358.094 399.996 358.094ZM399.996 457.504C387.191 457.504 376.773 447.085 376.773 434.281C376.773 421.476 387.193 411.057 399.996 411.057C412.801 411.057 423.22 421.476 423.22 434.281C423.22 447.085 412.802 457.504 399.996 457.504Z" fill="#ECAC08"/>
                                                    <path d="M399.996 551.17C357.987 551.17 323.807 585.348 323.807 627.359C323.807 669.368 357.985 703.548 399.996 703.548C442.007 703.548 476.185 669.37 476.185 627.359C476.185 585.348 442.007 551.17 399.996 551.17ZM399.996 650.584C387.191 650.584 376.773 640.165 376.773 627.361C376.773 614.556 387.191 604.137 399.996 604.137C412.801 604.137 423.22 614.556 423.22 627.361C423.22 640.165 412.802 650.584 399.996 650.584Z" fill="#27FA15"/>
                                                    <path d="M667.75 411.437V328.435C667.75 313.81 655.892 301.952 641.267 301.952H587.232L659.995 229.191C664.956 224.227 667.745 217.489 667.745 210.466V127.464C667.745 112.839 655.887 100.981 641.262 100.981H550.251V100.127C550.251 85.5017 538.393 73.6439 523.768 73.6439H516.131C503.526 31.1204 464.12 0 417.562 0H382.435C335.877 0 296.471 31.1204 283.868 73.6439H276.23C261.605 73.6439 249.747 85.5017 249.747 100.127V100.981H158.733C144.108 100.981 132.25 112.839 132.25 127.464V210.466C132.25 217.491 135.039 224.227 140.008 229.191L212.769 301.952H158.733C144.108 301.952 132.25 313.81 132.25 328.435V411.437C132.25 418.462 135.039 425.198 140.008 430.162L212.772 502.923H158.733C144.108 502.923 132.25 514.781 132.25 529.406V612.406C132.25 619.431 135.039 626.167 140.008 631.131L242.432 733.555C245.324 736.447 248.727 738.5 252.344 739.775C261.369 774.383 292.888 800 330.28 800H469.715C507.11 800 538.628 774.381 547.651 739.775C551.268 738.5 554.671 736.447 557.564 733.555L659.987 631.131C664.953 626.165 667.745 619.429 667.745 612.406V529.406C667.745 514.781 655.887 502.923 641.262 502.923H587.226L659.99 430.162C664.958 425.196 667.75 418.46 667.75 411.437ZM249.744 665.967L185.214 601.437V555.889H249.744V665.967ZM249.744 464.995L185.214 400.468V354.918H249.744V464.995ZM249.744 264.026L185.214 199.496V153.947H249.744V264.026ZM382.434 52.9657H417.56C434.16 52.9657 448.879 61.1298 457.943 73.6455H342.052C351.115 61.1282 365.834 52.9657 382.434 52.9657ZM497.284 719.467C497.284 734.669 484.915 747.037 469.713 747.037H330.279C315.077 747.037 302.708 734.669 302.708 719.467V126.61H497.282L497.284 719.467ZM550.25 153.947H614.779V199.497L550.25 264.027V153.947ZM614.779 555.889V601.437L550.25 665.967V555.89H614.779V555.889ZM614.779 400.468L550.25 464.995V354.918H614.779V400.468Z" fill="black"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_2_3">
                                                    <rect width="800" height="800" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg> --}}
                                            </span>
                                            <span class="ml-4"
                                                :class="!isSideMenuOpen && flotan == 'PESV' ? minidisplay : '' || !
                                                    isSideMenuOpen &&
                                                    flotan != 'PESV' ? 'hidden' : ''">
                                                {{ __('PESV') }}
                                            </span>
                                        </a>
                                    </li>
                                @endcan

                                @can('listas')
                                    <li class="flex ml-8">
                                        <span id="active3"
                                            class="absolute inset-y-0 left-0 bg-purple-600 li-active hidden"></span>
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
                                                    :class="!isSideMenuOpen && flotan == 'Information_lists' ? minidisplay :
                                                        '' || !
                                                        isSideMenuOpen &&
                                                        flotan != 'Information_lists' ? 'hidden' : ''">
                                                    {{ __('Information lists.') }}
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
                                                    @can('listaContratos')
                                                        <div>
                                                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                                :class="{ '-ml-5': !isSideMenuOpen }">
                                                                <a x-on:mouseover="flotan='List_Contracts'"
                                                                    x-on:mouseleave="flotan=''" class="w-full"
                                                                    href="{{ route('list-contracts') }}">
                                                                    <i class="fas fa-fw fa-database icon-green"
                                                                        :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                                    <span
                                                                        :class="!isSideMenuOpen && flotan == 'List_Contracts' ?
                                                                            minidisplay2 : '' || !
                                                                            isSideMenuOpen && flotan !=
                                                                            'List_Contracts' ?
                                                                            'hidden' : ''">
                                                                        {{ __('List of Contracts') }}
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </div>
                                                    @endcan
                                                    @can('listaFuec')
                                                        <div>
                                                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                                :class="{ '-ml-5': !isSideMenuOpen }">
                                                                <a x-on:mouseover="flotan='Fuec_List'"
                                                                    x-on:mouseleave="flotan=''" class="w-full"
                                                                    href="{{ route('list-fuec') }}">
                                                                    <i class="fas fa-fw fa-database icon-yellow"
                                                                        :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                                    <span
                                                                        :class="!isSideMenuOpen && flotan == 'Fuec_List' ?
                                                                            minidisplay2 :
                                                                            '' || !
                                                                            isSideMenuOpen &&
                                                                            flotan != 'Fuec_List' ? 'hidden' : ''">
                                                                        {{ __('Fuec List') }}
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </div>
                                                    @endcan
                                                    @can('listaConductores')
                                                        <div>
                                                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                                :class="{ '-ml-5': !isSideMenuOpen }">
                                                                <a x-on:mouseover="flotan='Driver_List'"
                                                                    x-on:mouseleave="flotan=''" class="w-full"
                                                                    href="{{ route('list-drivers') }}">
                                                                    <i class="fas fa-fw fa-database icon-red"
                                                                        :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                                    <span
                                                                        :class="!isSideMenuOpen && flotan == 'Driver_List' ?
                                                                            minidisplay2 : '' || !
                                                                            isSideMenuOpen &&
                                                                            flotan != 'Driver_List' ? 'hidden' : ''">
                                                                        {{ __('Driver List') }}
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </div>
                                                    @endcan
                                                    @can('listaVehiculos')
                                                        <div>
                                                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                                :class="{ '-ml-5': !isSideMenuOpen }">
                                                                <a x-on:mouseover="flotan='List_vehicles'"
                                                                    x-on:mouseleave="flotan=''" class="w-full"
                                                                    href="{{ route('list-vehicles') }}">
                                                                    <i class="fas fa-fw fa-database icon-orange"
                                                                        :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                                    <span
                                                                        :class="!isSideMenuOpen && flotan == 'List_vehicles' ?
                                                                            minidisplay2 : '' || !
                                                                            isSideMenuOpen && flotan !=
                                                                            'List_vehicles' ?
                                                                            'hidden' : ''">
                                                                        {{ __('List of vehicles') }}
                                                                    </span>

                                                                </a>
                                                            </li>
                                                        </div>
                                                    @endcan
                                                    @can('listaVinculados')
                                                        <div>
                                                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                                :class="{ '-ml-5': !isSideMenuOpen }">
                                                                <a x-on:mouseover="flotan='Linked_List'"
                                                                    x-on:mouseleave="flotan=''" class="w-full"
                                                                    href="{{ route('list-linked') }}">
                                                                    <i class="fas fa-fw fa-database icon-purple"
                                                                        :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                                    <span
                                                                        :class="!isSideMenuOpen && flotan == 'Linked_List' ?
                                                                            minidisplay2 : '' || !
                                                                            isSideMenuOpen &&
                                                                            flotan != 'Linked_List' ? 'hidden' : ''">
                                                                        {{ __('Linked List') }}
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </div>
                                                    @endcan

                                                    {{-- <div>
                                                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                        :class="{ '-ml-5': !isSideMenuOpen }">
                                                        <a x-on:mouseover="flotan='providers_list'"
                                                            x-on:mouseleave="flotan=''" class="w-full"
                                                            href="{{ route('pruebas.listapendiente') }}">
                                                            <i class="fas fa-fw fa-database icon-blue"
                                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                            <span
                                                                :class="!isSideMenuOpen && flotan == 'providers_list' ?
                                                                    minidisplay2 : '' || !
                                                                    isSideMenuOpen &&
                                                                    flotan != 'providers_list' ? 'hidden' : ''">
                                                                {{ __('providers list') }}
                                                            </span>
                                                        </a>
                                                    </li>
                                                </div> --}}
                                                    {{-- <div>
                                                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                                        :class="{ '-ml-5': !isSideMenuOpen }">
                                                        <a x-on:mouseover="flotan='pending_list'"
                                                            x-on:mouseleave="flotan=''" class="w-full"
                                                            href="{{ route('pruebas.listapendiente') }}">
                                                            <i class="fas fa-fw fa-database icon-blue"
                                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                                            <span
                                                                :class="!isSideMenuOpen && flotan == 'pending_list' ?
                                                                    minidisplay2 : '' || !
                                                                    isSideMenuOpen &&
                                                                    flotan != 'pending_list' ? 'hidden' : ''">
                                                                {{ __('pending list') }}
                                                            </span>
                                                        </a>
                                                    </li>
                                                </div> --}}
                                                </div>

                                            </ul>
                                        </template>
                                    </li>
                                @endcan


                                @can('mantenimientoContratos')
                                    <li class="flex ml-8">
                                        <span id="active4"
                                            class="absolute inset-y-0 left-0 bg-purple-600 li-active hidden"></span>
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
                                                {{ __('Manage Contract') }}
                                            </span>
                                        </a>
                                    </li>
                                @endcan


                                @can('mantenimientoFuec')
                                    <li class="flex ml-8">
                                        <span id="active5"
                                            class="absolute inset-y-0 left-0 bg-purple-600 li-active hidden"></span>
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
                                                {{ __('Manage Fuec') }}
                                            </span>
                                        </a>
                                    </li>
                                @endcan

                                @can('mantenimientoUsuarios')
                                <li class="flex ml-8">
                                    <span id="active6"
                                        class="absolute inset-y-0 left-0 bg-purple-600 li-active hidden"></span>
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
                                            {{ __('Manage User') }}
                                        </span>
                                    </a>
                                </li>
                                @endcan
                                @can('mantenimientoVehiculos')
                                <li class="flex ml-8">
                                    <span id="active7"
                                        class="absolute inset-y-0 left-0 bg-purple-600 li-active hidden"></span>
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
                                            {{ __('Manage Technical Sheet') }}
                                        </span>
                                    </a>
                                </li>
                                @endcan
  
                                <li class="flex ml-8">
                                    <span id="active8"
                                        class="absolute inset-y-0 left-0 bg-purple-600 li-active hidden"></span>
                                    <a x-on:mouseover="flotan='plan_rodamiento'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        href="{{ route('pruebas.otraactividad') }}">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="fas fa-calendar-alt icon-pink"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'plan_rodamiento' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan !=
                                                'plan_rodamiento' ? 'hidden' : ''">
                                            {{ __('Bearing plan') }}
                                        </span>
                                    </a>
                                </li>
                                {{-- <li class="flex ml-8">
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
                                </li> --}}
                                <li class="flex ml-8">
                                    <span id="active9"
                                        class="absolute inset-y-0 left-0 bg-purple-600 li-active hidden"></span>
                                    <a x-on:mouseover="flotan='totals'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        href="{{ route('totals') }}" @click="changesView('totals')">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="fas fa-list-ol icon-greenaquamarine"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'totals' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan != 'totals' ? 'hidden' : ''">
                                            {{ __('Totals') }}
                                        </span>
                                    </a>
                                </li>
                                {{-- <li class="flex ml-8">
                                    <span id="active10"
                                        class="absolute inset-y-0 left-0 bg-purple-600 li-active hidden"></span>
                                    <a x-on:mouseover="flotan='accounting'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        href="{{ route('cambiocontraseña') }}" @click="changesView('accounting')">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="fas fa-money-check-alt icon-gold"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'accounting' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan != 'accounting' ? 'hidden' : ''">
                                            {{ __('Accounting') }}
                                        </span>
                                    </a>
                                </li> --}}
                                {{-- <li class="flex ml-8">
                                    <span id="active11"
                                        class="absolute inset-y-0 left-0 bg-purple-600 li-active hidden"></span>
                                    <a x-on:mouseover="flotan='change_password'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        href="{{ route('cambiocontraseña') }}"
                                        @click="changesView('changePassword')">
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
                                </li> --}}
                                {{-- <li class="flex ml-8">
                                    <span id="active12"
                                        class="absolute inset-y-0 left-0 bg-purple-600 li-active hidden"></span>
                                    <a x-on:mouseover="flotan='Testing'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        href="{{ route('list.ListContracts') }}">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="fas fa-keyboard icon-gray"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'Testing' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan !=
                                                'Testing' ? 'hidden' : ''">
                                            Testing
                                        </span>
                                    </a>
                                </li> --}}
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

                                <img class="object-cover w-8 h-8 rounded-full"
                                    src=" @if (Auth::user()->profile_photo_path != '') {{ asset(Auth::user()->profile_photo_path) }} @else {{ asset('img/l_logo_step.png') }} @endif"
                                    alt="" aria-hidden="true" />

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
                                            <span> {{ __('Profile') }}</span>
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
                                            <span> {{ __('Settings') }}</span>
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

            <main class="h-4-7 overflow-y-auto">

                <div class="container px-6 mx-auto">
                    {{ $slot }}
                </div>
            </main>

        </div>
    </div>
    @stack('modals')

    @livewireScripts
    <script src="{{ asset('js/datos.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('librerias/jquery-3.6.0.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
    <script src="{{ asset('librerias/select2/select2.min.js') }}"></script>
    <script src="{{ asset('librerias/datetimepicker-master/build/jquery.datetimepicker.full.js') }}"></script>
    <script src="{{ asset('librerias/dataTables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('librerias/dataTables/dataTables.responsive.min.js') }}"></script>

    <script src="{{ asset('librerias/dataTables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('librerias/dataTables/jszip.min.js') }}"></script>
    <script src="{{ asset('librerias/dataTables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('librerias/dataTables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('librerias/dataTables/buttons.html5.min.js') }}"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> --}}
    <script src="{{ asset('librerias/dataTables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('librerias/dataTables/buttons.colVis.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script> --}}


    {{-- <script src="{{ asset('virtualSelect/virtual-select.min.js') }}"></script> --}}
    {{-- <script src="C:/xampp/htdocs/step/node_modules/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js"></script> --}}
    {{-- @livewire('contac-modal') --}}
    {{-- <Livewire:contac-modal/> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script> --}}
    {{-- <script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js1"></script>  --}}
    {{-- <script src="pikaday.js"></script> --}}
    <script>
        function active(id) {
            for (let index = 0; index < 12; index++) {

                index == id ? $("#active" + [index]).removeClass('hidden') : $("#active" + [index]).addClass('hidden');

            }
        }
    </script>
    @yield('scripts')

    <script>
        // swal.fire({
        // icon: 'error',
        // title: 'Oops...',
        // text: 'Something went wrong!',
        // footer: '<a href="">Why do I have this issue?</a>'
        // });
        // swal.fire({
        //     title: '<strong>HTML <u>example</u></strong>',
        //     icon: 'info',
        //     html: 'You can use <b>bold text</b>, ' +
        //         '<a href="//sweetalert2.github.io">links</a> ' +
        //         'and other HTML tags',
        //     showCloseButton: true,
        //     showCancelButton: true,
        //     focusConfirm: false,
        //     confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        //     confirmButtonAriaLabel: 'Thumbs up, great!',
        //     cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
        //     cancelButtonAriaLabel: 'Thumbs down'
        // })
    </script>




</body>

</html>
