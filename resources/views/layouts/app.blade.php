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
            view: 'settings',
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
                        {{-- <p>{{auth()->user()->usertype}}</p> --}}
                    </div>
                    <!-- Search input -->
                    <div class="relative w-full mx-14 focus-within:text-purple-500">
                        <div class="">
                            <ul class="flex items-center flex-shrink-0 ">
                                <li class="flex" onclick="active(1)">
                                    <span id="active1"
                                        class="absolute inset-y-0 left-0 bg-purple-600 li-active1 hidden"></span>
                                    <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                                        href="{{ route('settings') }}" x-on:mouseover="flotan= 'settings'"
                                        x-on:mouseleave="flotan=''" @click="changesView('settings')">
                                        <span class="text-2-2xl" aria-hidden="true" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor"
                                            :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                            <i class="fas fa-book icon-coffee"
                                                :class="{ 'text-3xl': !isSideMenuOpen }"></i>
                                        </span>
                                        <span class="ml-4"
                                            :class="!isSideMenuOpen && flotan == 'settings' ? minidisplay : '' || !
                                                isSideMenuOpen &&
                                                flotan !=
                                                'settings' ? 'hidden' : ''">
                                            {{ __('settings') }}
                                        </span>
                                    </a>
                                </li>
                                @can('pesv')
                                    <li class="flex ml-8">
                                        <span id="active2"
                                            class="absolute inset-y-0 left-0 bg-purple-600 li-active2 hidden"></span>
                                        <a x-on:mouseover="flotan='PESV'" x-on:mouseleave="flotan=''"
                                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                            href="{{ route('pesv') }}" @click="changesView('PESV')">
                                            <span class="text-2-2xl" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor"
                                                :class="{ 'text-2-2xl': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                                <i class="fas fa-route icon-blue"
                                                    :class="{ 'text-3xl': !isSideMenuOpen }"></i>
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
                                            class="absolute inset-y-0 left-0 bg-purple-600 li-active3 hidden"></span>
                                        <button x-on:mouseover="flotan='Information_lists'" x-on:mouseleave="flotan=''"
                                            class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                            @click="togglePagesMenu" aria-haspopup="true">

                                            <span class="inline-flex items-center">
                                                <span class="w-5 h-5" aria-hidden="true" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                    :class="{ 'w-5 h-5': isSideMenuOpen, '-ml-3-5': !isSideMenuOpen }">
                                                    <i class="fas fa-fw fa-list" :class="{ 'hidden': !isSideMenuOpen }"></i>
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
                                                </div>
                                            </ul>
                                        </template>
                                    </li>
                                @endcan


                                @can('mantenimientoContratos')
                                    <li class="flex ml-8">
                                        <span id="active4"
                                            class="absolute inset-y-0 left-0 bg-purple-600 li-active4 hidden"></span>
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
                                            class="absolute inset-y-0 left-0 bg-purple-600 li-active5 hidden"></span>
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
                                            class="absolute inset-y-0 left-0 bg-purple-600 li-active6 hidden"></span>
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
                                            class="absolute inset-y-0 left-0 bg-purple-600 li-active7 hidden"></span>
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
                                                :class="!isSideMenuOpen && flotan == 'ManageTechnicalSheet' ? minidisplay :
                                                    '' || !
                                                    isSideMenuOpen &&
                                                    flotan != 'ManageTechnicalSheet' ? 'hidden' : ''">
                                                {{ __('Manage Technical Sheet') }}
                                            </span>
                                        </a>
                                    </li>
                                @endcan

                                <li class="flex ml-8">
                                    <span id="active8"
                                        class="absolute inset-y-0 left-0 bg-purple-600 li-active8 hidden"></span>
                                    <a x-on:mouseover="flotan='plan_rodamiento'" x-on:mouseleave="flotan=''"
                                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                        href="{{ route('bearing-plan') }}">
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
                                        class="absolute inset-y-0 left-0 bg-purple-600 li-active9 hidden"></span>
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
                                    {{-- <li class="flex">
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
                                    </li> --}}
                                    <div>
                                        <svg width="200" height="150" viewBox="0 0 1100 636" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="ultimate">
                                                <g id="coming-soon-icon 1" clip-path="url(#clip0_3_334)">
                                                    <g id="Group">
                                                        <path id="Vector"
                                                            d="M22.2753 407.369C26.5832 391.496 38.9818 376.516 59.4708 362.459C85.4236 344.709 124.195 328.538 175.575 313.975C226.956 299.412 284.01 288.423 346.738 281.067C409.256 273.74 477.027 270.048 549.947 270.048C622.868 270.048 690.639 273.74 753.262 281.067C815.99 288.423 873.044 299.382 924.425 313.975C975.805 328.538 1014.58 344.709 1040.42 362.489C1061.02 376.575 1073.42 391.585 1077.72 407.488C1071.21 406.684 1064.38 406.059 1057.34 405.582C1046.73 404.808 1035.7 404.361 1024.24 404.212C1019.41 391.436 1008.8 379.404 992.301 368.088C969.08 352.214 934.091 337.681 887.439 324.428C840.682 311.205 789.407 301.288 733.508 294.707C677.505 288.125 616.353 284.849 550.053 284.849C483.752 284.849 422.6 288.155 366.597 294.707C310.593 301.258 259.318 311.176 212.561 324.428C165.909 337.681 130.92 352.244 107.699 368.088C91.2026 379.375 80.4852 391.406 75.757 404.183C67.2462 404.272 58.7353 404.57 50.4346 405.016C40.4528 405.582 31.1013 406.357 22.2753 407.369ZM249.546 554.072H152.355V545.644C152.355 541.683 151.094 539.181 148.572 538.079C146.155 537.007 141.952 536.501 136.173 536.501C129.869 536.501 125.141 537.216 121.884 538.675C118.626 540.134 117.05 542.308 117.05 545.286C117.05 549.068 118.837 551.927 122.514 553.893C125.981 555.829 135.858 558.122 152.144 560.862C198.691 568.694 228.006 575.127 240.09 580.16C252.173 585.193 258.267 593.264 258.267 604.462C258.267 612.592 254.8 618.578 248.18 622.42C241.456 626.262 228.532 629.478 209.304 632.099C190.075 634.719 167.695 636.03 142.163 636.03C114.108 636.03 90.2569 634.511 70.5034 631.503C50.6448 628.495 37.6158 624.653 31.6267 620.037C25.5325 615.391 22.4854 608.78 22.4854 600.233V592.787H119.572V606.636C119.572 610.924 120.938 613.664 123.67 614.885C126.507 616.106 131.235 616.702 138.17 616.702C145.105 616.702 150.358 615.927 153.721 614.379C157.083 612.83 158.764 610.537 158.764 607.499C158.764 600.769 155.507 596.391 149.097 594.306C142.478 592.222 126.192 588.797 100.134 583.972C74.0758 579.088 56.844 575.544 48.3332 573.31C39.9274 571.107 32.8876 568.039 27.4238 564.138C21.855 560.236 19.1231 555.263 19.1231 549.217C19.1231 540.491 23.0108 534.088 30.8912 530.068C38.7716 526.018 51.3803 522.891 68.9273 520.598C86.4744 518.334 107.699 517.173 132.601 517.173C159.815 517.173 182.931 518.424 202.054 520.895C221.282 523.397 233.996 526.554 240.09 530.336C246.289 534.088 249.441 540.521 249.441 549.575V554.072H249.546ZM529.984 586.325C529.984 597.791 529.038 605.891 527.147 610.626C525.255 615.421 519.266 619.769 509.285 623.7C499.303 627.631 485.748 630.669 468.727 632.784C451.6 634.898 431.741 635.97 409.151 635.97C387.611 635.97 368.173 634.958 351.151 632.962C333.919 630.967 320.155 627.989 309.753 623.998C299.35 620.007 292.941 615.63 291.05 610.954C289.158 606.278 288.108 598.029 288.108 586.295V566.788C288.108 555.323 289.053 547.222 291.05 542.427C292.941 537.662 298.825 533.314 308.912 529.353C318.894 525.422 332.448 522.384 349.47 520.27C366.597 518.155 386.455 517.113 409.151 517.113C430.691 517.113 450.024 518.126 467.151 520.121C484.277 522.116 498.147 525.095 508.549 529.085C518.951 533.076 525.15 537.424 527.147 542.129C529.038 546.805 530.089 555.025 530.089 566.788V586.325H529.984ZM425.437 548.86C425.437 543.559 424.386 540.164 422.285 538.675C420.288 537.216 415.981 536.471 409.466 536.471C404.002 536.471 399.799 537.067 396.962 538.258C394.02 539.419 392.549 542.963 392.549 548.86V602.109C392.549 608.72 393.495 612.83 395.386 614.379C397.383 615.927 401.796 616.702 408.731 616.702C415.875 616.702 420.394 615.808 422.495 614.051C424.386 612.235 425.437 607.976 425.437 601.275V548.86ZM808.11 586.325C808.11 597.791 807.164 605.891 805.273 610.626C803.276 615.421 797.392 619.769 787.41 623.7C777.324 627.631 763.769 630.669 746.748 632.784C729.726 634.898 709.762 635.97 687.172 635.97C665.632 635.97 646.299 634.958 629.172 632.962C611.94 630.967 598.176 627.989 587.773 623.998C577.371 620.007 571.067 615.63 569.071 610.954C567.179 606.278 566.129 598.029 566.129 586.295V566.788C566.129 555.323 567.074 547.222 568.966 542.427C570.857 537.662 576.741 533.314 586.828 529.353C596.81 525.422 610.469 522.384 627.491 520.27C644.512 518.155 664.371 517.113 687.172 517.113C708.711 517.113 728.045 518.126 745.171 520.121C762.298 522.116 776.168 525.095 786.57 529.085C796.972 533.076 803.276 537.424 805.168 542.129C807.059 546.805 808.11 555.025 808.11 566.788V586.325ZM703.458 548.86C703.458 543.559 702.407 540.164 700.306 538.675C698.204 537.216 694.001 536.471 687.592 536.471C682.023 536.471 677.925 537.067 675.088 538.258C672.146 539.419 670.675 542.963 670.675 548.86V602.109C670.675 608.72 671.621 612.83 673.617 614.379C675.509 615.927 679.922 616.702 686.961 616.702C694.106 616.702 698.625 615.808 700.621 614.051C702.512 612.235 703.563 607.976 703.563 601.275V548.86H703.458ZM1080.67 519.585V633.588H989.044L934.616 581.768V633.588H847.196V519.585H934.616L993.352 570.928V519.585H1080.67ZM168.746 456.24H97.4019V442.69C97.4019 438.759 96.6663 436.287 95.0903 435.304C93.5142 434.351 90.1519 433.845 84.8983 433.845C79.0142 433.845 75.2316 434.44 73.7606 435.632C72.1845 436.823 71.344 439.384 71.344 443.315V479.47C71.344 483.252 72.1845 485.724 73.7606 486.885C75.3367 488.047 78.9092 488.612 84.478 488.612C89.8367 488.612 93.304 488.047 94.8801 486.885C96.5613 485.753 97.4019 483.014 97.4019 478.755V468.987H168.746V471.994C168.746 480.035 166.644 485.753 162.757 489.119C158.764 492.484 149.833 495.432 136.068 497.964C122.304 500.495 105.387 501.776 85.3186 501.776C64.4092 501.776 47.1774 500.704 33.518 498.53C19.9637 496.385 11.0326 493.407 6.61954 489.625C2.20651 485.843 0 480.125 0 472.501V449.778C0 444.179 0.630433 439.98 1.99637 437.15C3.36231 434.351 7.35505 431.641 14.1847 429.05C20.9094 426.459 30.1557 424.404 42.1339 422.915C54.0071 421.426 67.7715 420.681 83.2171 420.681C104.232 420.681 121.568 421.843 135.333 424.136C148.992 426.459 157.923 429.318 162.336 432.773C166.644 436.227 168.851 441.588 168.851 448.854V456.24H168.746ZM360.397 467.885C360.397 475.717 359.767 481.256 358.506 484.503C357.14 487.749 353.147 490.727 346.318 493.437C339.488 496.117 330.137 498.172 318.579 499.632C306.916 501.061 293.361 501.806 277.916 501.806C263.311 501.806 250.072 501.121 238.304 499.751C226.535 498.381 217.184 496.356 210.039 493.616C202.999 490.906 198.691 487.927 197.325 484.741C195.96 481.554 195.329 475.926 195.329 467.914V454.632C195.329 446.8 195.96 441.26 197.22 438.014C198.481 434.768 202.579 431.79 209.409 429.109C216.238 426.399 225.59 424.344 237.148 422.915C248.811 421.485 262.26 420.741 277.811 420.741C292.521 420.741 305.76 421.426 317.423 422.796C329.086 424.166 338.542 426.191 345.687 428.931C352.832 431.641 357.035 434.619 358.401 437.806C359.662 440.992 360.397 446.621 360.397 454.632V467.885ZM289.053 442.332C289.053 438.699 288.423 436.406 286.952 435.393C285.481 434.381 282.644 433.845 278.231 433.845C274.448 433.845 271.716 434.262 269.72 435.066C267.724 435.87 266.673 438.282 266.673 442.303V478.606C266.673 483.133 267.409 485.932 268.669 486.974C270.035 488.047 272.977 488.553 277.706 488.553C282.644 488.553 285.796 487.957 287.057 486.736C288.318 485.485 289.053 482.597 289.053 478.01V442.332ZM610.364 422.349V500.138H548.056V447.604L523.049 500.138H478.814L452.546 448.825V500.138H390.133V422.349H482.491C485.223 427.025 488.06 432.534 491.107 438.878L500.879 458.682L517.165 422.349H610.364ZM713.335 422.349V500.138H641.991V422.349H713.335ZM904.461 422.349V500.138H841.838L804.642 464.787V500.138H744.961V422.349H804.642L844.78 457.372V422.349H904.461ZM1100 450.969H1028.66V443.911C1028.66 439.473 1028.03 436.674 1026.66 435.542C1025.19 434.411 1021.93 433.845 1016.89 433.845C1012.47 433.845 1009.43 434.321 1007.85 435.304C1006.28 436.287 1005.44 438.729 1005.44 442.69V480.006C1005.44 483.52 1006.17 485.813 1007.85 486.915C1009.32 488.017 1012.58 488.553 1017.31 488.553C1022.56 488.553 1026.13 487.927 1028.03 486.706C1029.92 485.426 1030.86 483.014 1030.86 479.38V470.148H1016.36V458.325H1099.89V500.078H1055.03L1048.41 494.509C1043.58 496.921 1037.48 498.738 1030.13 499.929C1022.67 501.121 1013.95 501.746 1003.86 501.746C991.881 501.746 980.638 500.912 970.236 499.274C959.834 497.636 951.848 495.581 946.385 493.139C940.921 490.697 937.558 488.166 936.193 485.456C934.827 482.775 934.091 478.755 934.091 473.424V450.314C934.091 442.868 935.457 437.478 938.294 434.142C941.131 430.777 949.222 427.68 962.671 424.881C976.015 422.081 993.457 420.652 1014.68 420.652C1035.59 420.652 1052.93 421.873 1066.69 424.315C1080.46 426.787 1089.49 429.646 1093.7 433.011C1097.9 436.346 1100 441.201 1100 447.604V450.969ZM549.317 311.831L602.484 337.86H572.118V386.165H695.893V377.558L787.726 392.598L707.24 405.791H695.893V399.03L526.832 399.06V386.344H526.727V337.86H496.361L549.317 311.831Z"
                                                            fill="black" />
                                                    </g>
                                                </g>
                                                <g id="undraw_lightbulb_moment_re_ulyo 2"
                                                    clip-path="url(#clip1_3_334)">
                                                    <g id="luz">
                                                        <path id="luz_2"
                                                            d="M524.858 93.3134C524.858 107.009 513.14 118.702 490.84 127.404C475.016 133.581 450.643 142.24 450.643 151.396V158.97H376.427V151.396C376.427 142.145 351.958 133.468 336.23 127.404C314.434 119.007 302.212 106.52 302.212 93.3134V93.0334C302.308 80.9788 314.126 69.4332 335.067 60.9363C356.007 52.4393 384.356 47.6867 413.878 47.7238C443.399 47.761 471.676 52.5848 492.488 61.1342C513.3 69.6837 524.944 81.2588 524.858 93.3134Z"
                                                            fill="#EABE10" />
                                                    </g>
                                                    <path id="Path 2546"
                                                        d="M450.642 160.034C449.951 160.034 449.289 159.921 448.8 159.722C448.312 159.523 448.038 159.252 448.038 158.97V151.394C448.038 142.489 469.546 134.176 485.252 128.106C486.554 127.601 487.822 127.113 489.039 126.636C510.765 118.155 522.249 106.633 522.249 93.314C522.249 68.4219 474.496 48.9227 413.537 48.9227H413.229C384.541 48.9359 357.033 53.5867 336.718 61.8584C316.404 70.1301 304.937 81.3497 304.824 93.0641V93.3122C304.824 106.356 316.923 118.5 338.021 126.632C339.09 127.044 340.2 127.469 341.34 127.904C357.248 133.986 379.035 142.315 379.035 151.395V158.97C379.035 159.252 378.761 159.523 378.272 159.722C377.784 159.921 377.121 160.034 376.431 160.034C375.74 160.034 375.078 159.921 374.589 159.722C374.101 159.523 373.827 159.252 373.827 158.97V151.394C373.827 143.237 352.994 135.272 337.78 129.455C336.635 129.017 335.524 128.591 334.446 128.177C312.311 119.645 299.616 106.937 299.616 93.3125V93.0573C299.79 67.5217 350.729 46.7947 413.222 46.7947H413.544C443.599 46.7309 472.485 51.545 493.848 60.1779C515.211 68.8109 527.3 80.5555 527.457 92.8282C527.459 92.9901 527.459 93.152 527.457 93.314C527.457 107.228 515.416 119.282 492.639 128.174C491.416 128.651 490.142 129.143 488.832 129.65C473.815 135.454 453.243 143.404 453.243 151.394V158.97C453.243 159.252 452.969 159.523 452.48 159.722C451.992 159.921 451.33 160.034 450.639 160.034H450.642Z"
                                                        fill="#3F3D56" />
                                                    <path id="Path 2547"
                                                        d="M438.274 173.678H388.797C387.646 173.678 386.542 173.491 385.729 173.159C384.915 172.826 384.457 172.376 384.457 171.906C384.457 171.436 384.915 170.985 385.729 170.652C386.542 170.32 387.646 170.133 388.797 170.133H438.274C439.425 170.133 440.529 170.32 441.343 170.652C442.157 170.985 442.614 171.436 442.614 171.906C442.614 172.376 442.157 172.826 441.343 173.159C440.529 173.491 439.425 173.678 438.274 173.678Z"
                                                        fill="#EABE10" />
                                                    <path id="Vector_2"
                                                        d="M418.856 185.551H408.208C404.509 185.552 400.88 185.142 397.71 184.364C397.24 184.252 396.876 184.079 396.676 183.872C396.477 183.665 396.453 183.437 396.609 183.225C396.752 183.006 397.068 182.813 397.508 182.676C397.948 182.538 398.487 182.464 399.041 182.465H428.023C428.577 182.464 429.116 182.538 429.556 182.676C429.996 182.813 430.312 183.006 430.455 183.225C430.611 183.437 430.587 183.665 430.388 183.872C430.188 184.079 429.824 184.252 429.354 184.364C426.184 185.142 422.554 185.552 418.856 185.551Z"
                                                        fill="#3F3D56" />
                                                    <path id="Vector_3"
                                                        d="M438.283 179.276L388.512 179.273L388.358 179.138C388.211 178.89 388.205 178.632 388.341 178.382C388.476 178.133 388.749 177.9 389.139 177.7C389.535 177.495 390.039 177.33 390.614 177.217C391.189 177.103 391.819 177.044 392.458 177.045H434.606C435.245 177.044 435.876 177.103 436.45 177.217C437.025 177.33 437.53 177.496 437.925 177.7C438.312 177.897 438.584 178.127 438.721 178.373C438.858 178.619 438.856 178.875 438.716 179.121L438.637 179.258L438.283 179.276Z"
                                                        fill="#3F3D56" />
                                                    <path id="Path 2550"
                                                        d="M450.642 167.388H376.426C375.275 167.388 374.171 167.201 373.358 166.869C372.544 166.537 372.086 166.086 372.086 165.616C372.086 165.146 372.544 164.695 373.358 164.363C374.171 164.03 375.275 163.844 376.426 163.844H450.642C451.793 163.844 452.897 164.03 453.711 164.363C454.524 164.695 454.982 165.146 454.982 165.616C454.982 166.086 454.524 166.537 453.711 166.869C452.897 167.201 451.793 167.388 450.642 167.388Z"
                                                        fill="#EABE10" />
                                                    <path id="Vector_4"
                                                        d="M411.712 121.091L396.279 158.97H387.469L403.145 120.51C403.334 120.046 403.966 119.631 404.903 119.358C405.84 119.084 407.004 118.974 408.14 119.051C409.276 119.128 410.291 119.386 410.961 119.769C411.631 120.151 411.901 120.627 411.712 121.091Z"
                                                        fill="#E6E6E6" />
                                                    <path id="Vector_5"
                                                        d="M441.372 158.97H432.562L417.129 121.091C416.94 120.627 417.21 120.151 417.88 119.769C418.55 119.386 419.564 119.128 420.7 119.051C421.836 118.974 423.001 119.084 423.938 119.358C424.875 119.631 425.507 120.046 425.696 120.51L441.372 158.97Z"
                                                        fill="#E6E6E6" />
                                                    <g id="luces">
                                                        <path id="Path 2548"
                                                            d="M298.437 51.5396C297.388 51.5401 296.374 51.3847 295.585 51.1026L258.313 37.8178C257.459 37.5072 256.94 37.0715 256.869 36.6055C256.797 36.1395 257.179 35.6808 257.931 35.329C258.683 34.9773 259.744 34.7609 260.885 34.727C262.025 34.693 263.152 34.8443 264.021 35.1478L301.293 48.4326C301.959 48.6698 302.431 48.9844 302.647 49.3343C302.863 49.6841 302.813 50.0526 302.502 50.3904C302.192 50.7282 301.636 51.0193 300.91 51.2247C300.183 51.4301 299.321 51.5401 298.437 51.5399V51.5396Z"
                                                            fill="#E4E4E4" />
                                                        <path id="Path 2549"
                                                            d="M522.453 51.5396C521.569 51.5397 520.706 51.4298 519.98 51.2243C519.253 51.0189 518.698 50.7278 518.387 50.39C518.077 50.0522 518.026 49.6838 518.242 49.3339C518.459 48.984 518.931 48.6695 519.597 48.4322L556.868 35.1463C557.736 34.8428 558.864 34.6916 560.004 34.7256C561.145 34.7595 562.206 34.9759 562.958 35.3276C563.71 35.6794 564.092 36.1381 564.02 36.6041C563.949 37.0701 563.429 37.5057 562.576 37.8163L525.304 51.1011C524.515 51.3837 523.502 51.5396 522.453 51.5396Z"
                                                            fill="#E4E4E4" />
                                                        <path id="Path 2553"
                                                            d="M413.536 33.8491C412.385 33.8491 411.281 33.6624 410.467 33.33C409.653 32.9977 409.196 32.5469 409.196 32.0769V1.7722C409.196 1.30219 409.653 0.851419 410.467 0.519066C411.281 0.186714 412.385 0 413.536 0C414.687 0 415.791 0.186714 416.605 0.519066C417.419 0.851419 417.876 1.30219 417.876 1.7722V32.0769C417.876 32.5469 417.419 32.9977 416.605 33.33C415.791 33.6624 414.687 33.8491 413.536 33.8491Z"
                                                            fill="#E4E4E4" />
                                                    </g>
                                                    <g id="undraw_road_to_knowledge_m8s0 1"
                                                        clip-path="url(#clip2_3_334)">
                                                        <path id="Vector_6"
                                                            d="M504.485 190.689C503.414 190.688 502.384 190.446 501.603 190.013C500.822 189.58 500.348 188.988 500.278 188.356L499.652 182.702C499.579 182.041 499.952 181.391 500.691 180.893C501.429 180.395 502.471 180.092 503.589 180.048L578.533 177.147C579.714 177.101 580.899 177.194 582.02 177.419C583.141 177.643 584.176 177.997 585.066 178.458C585.956 178.92 586.684 179.48 587.207 180.108C587.731 180.736 588.04 181.418 588.118 182.116C588.195 182.815 588.039 183.515 587.658 184.178C587.278 184.841 586.68 185.452 585.899 185.978C585.119 186.505 584.17 186.935 583.109 187.244C582.047 187.554 580.892 187.736 579.711 187.782L504.767 190.683C504.673 190.687 504.579 190.689 504.485 190.689Z"
                                                            fill="#6963FF" />
                                                        <path id="Vector_7"
                                                            d="M519.263 191.418C518.171 191.417 517.122 191.166 516.336 190.718C515.55 190.27 515.088 189.66 515.046 189.015L514.512 180.569C514.491 180.242 514.58 179.915 514.772 179.608C514.965 179.301 515.259 179.019 515.636 178.779C516.013 178.539 516.466 178.345 516.97 178.208C517.474 178.071 518.019 177.995 518.573 177.983L580.201 176.621C581.32 176.596 582.41 176.835 583.231 177.286C584.051 177.736 584.536 178.36 584.578 179.022L585.112 187.467C585.133 187.795 585.044 188.122 584.851 188.429C584.658 188.736 584.365 189.018 583.988 189.258C583.611 189.498 583.157 189.692 582.653 189.829C582.149 189.966 581.605 190.042 581.051 190.054L519.422 191.416C519.369 191.417 519.315 191.418 519.263 191.418Z"
                                                            fill="#2F2E41" />
                                                        <path id="Vector_8"
                                                            d="M591.481 269.272H581.895C580.776 269.271 579.703 269.008 578.911 268.54C578.12 268.072 577.674 267.438 577.673 266.777V219.547C577.674 218.886 578.12 218.251 578.911 217.783C579.703 217.316 580.776 217.052 581.895 217.052H591.481C592.601 217.052 593.674 217.316 594.465 217.783C595.257 218.251 595.702 218.886 595.703 219.547V266.777C595.702 267.438 595.257 268.072 594.465 268.54C593.674 269.008 592.601 269.271 591.481 269.272Z"
                                                            fill="#2F2E41" />
                                                        <path id="Vector_9"
                                                            d="M548.931 244.307L540.733 241.37C539.777 241.026 539.09 240.472 538.823 239.83C538.557 239.187 538.732 238.508 539.311 237.942L580.726 197.553C581.307 196.988 582.244 196.582 583.331 196.424C584.418 196.266 585.567 196.37 586.525 196.713L594.723 199.65C595.679 199.993 596.366 200.547 596.633 201.19C596.899 201.833 596.724 202.511 596.145 203.078L554.73 243.467C554.148 244.032 553.211 244.438 552.124 244.596C551.037 244.753 549.889 244.649 548.931 244.307Z"
                                                            fill="#2F2E41" />
                                                        <path id="Vector_10"
                                                            d="M576.922 167.763C595.216 167.763 610.046 158.996 610.046 148.182C610.046 137.368 595.216 128.602 576.922 128.602C558.627 128.602 543.797 137.368 543.797 148.182C543.797 158.996 558.627 167.763 576.922 167.763Z"
                                                            fill="#6963FF" />
                                                        <path id="Vector_11"
                                                            d="M558.991 154.868C557.926 154.661 556.948 154.321 556.123 153.872C555.576 153.552 555.155 153.164 554.888 152.737C554.621 152.31 554.516 151.854 554.579 151.4C554.613 151.077 554.774 150.763 555.048 150.482C555.322 150.202 555.702 149.963 556.159 149.783C557.343 149.334 558.927 149.333 560.54 149.753L560.479 142.109L561.778 142.105L561.85 151.092L560.849 150.72C559.689 150.289 558.031 149.986 556.86 150.43C556.571 150.547 556.331 150.702 556.159 150.883C555.988 151.064 555.89 151.266 555.872 151.474C555.828 151.812 555.908 152.151 556.106 152.469C556.304 152.787 556.616 153.076 557.02 153.317C558.454 154.127 560.547 154.38 562.933 154.606L562.728 155.364C561.46 155.265 560.209 155.099 558.991 154.868Z"
                                                            fill="#2F2E41" />
                                                        <path id="Vector_12"
                                                            d="M547.089 141.723L546.919 142.484L553.855 143.026L554.025 142.264L547.089 141.723Z"
                                                            fill="#2F2E41" />
                                                        <path id="Vector_13"
                                                            d="M568.982 143.432L568.812 144.193L575.748 144.734L575.918 143.973L568.982 143.432Z"
                                                            fill="#2F2E41" />
                                                        <path id="Vector_14"
                                                            d="M604.581 232.219H548.724C547.26 232.218 545.857 231.874 544.822 231.262C543.787 230.65 543.205 229.821 543.203 228.956L554.897 175.948C554.906 175.087 555.491 174.263 556.525 173.656C557.559 173.049 558.958 172.709 560.415 172.709H580.237C588.155 172.715 595.746 174.576 601.344 177.886C606.943 181.195 610.092 185.682 610.101 190.363V228.956C610.1 229.821 609.517 230.65 608.482 231.262C607.447 231.874 606.044 232.218 604.581 232.219Z"
                                                            fill="#2F2E41" />
                                                        <path id="Vector_15"
                                                            d="M652.637 211.332C652.982 211.768 653.107 212.254 652.995 212.732C652.884 213.209 652.541 213.657 652.009 214.022L645.742 218.31C645.379 218.558 644.938 218.761 644.442 218.908C643.947 219.056 643.407 219.144 642.854 219.167C642.302 219.191 641.746 219.15 641.22 219.047C640.693 218.944 640.207 218.781 639.787 218.567L582.956 189.543C582.059 189.085 581.325 188.528 580.793 187.902C580.261 187.277 579.943 186.596 579.857 185.898C579.77 185.2 579.918 184.499 580.29 183.834C580.662 183.17 581.252 182.555 582.026 182.026C582.8 181.496 583.743 181.062 584.801 180.748C585.859 180.433 587.011 180.246 588.192 180.195C589.373 180.144 590.559 180.231 591.683 180.451C592.807 180.671 593.847 181.02 594.742 181.478L651.574 210.502C652.024 210.731 652.386 211.014 652.637 211.332Z"
                                                            fill="#6963FF" />
                                                        <path id="Vector_16"
                                                            d="M640.094 201.754C640.439 202.19 640.563 202.676 640.452 203.153C640.34 203.631 639.998 204.079 639.466 204.444L628.761 211.768C628.028 212.268 626.99 212.576 625.873 212.624C624.757 212.672 623.654 212.457 622.806 212.025L576.139 188.192C575.72 187.977 575.376 187.716 575.127 187.423C574.878 187.131 574.729 186.812 574.689 186.485C574.648 186.158 574.717 185.83 574.892 185.518C575.066 185.207 575.342 184.92 575.705 184.672L586.409 177.348C586.772 177.1 587.213 176.896 587.709 176.749C588.204 176.602 588.744 176.514 589.296 176.49C589.849 176.466 590.405 176.507 590.931 176.61C591.457 176.713 591.944 176.876 592.364 177.091L639.031 200.924C639.48 201.153 639.843 201.436 640.094 201.754Z"
                                                            fill="#2F2E41" />
                                                        <path id="Vector_17"
                                                            d="M577.541 136.569C573.113 134.403 567.194 136.452 562.186 136.161C557.395 135.883 553.539 133.39 552.488 130.708C551.263 127.58 553.92 124.401 557.923 122.397C562.307 120.202 568.193 119.519 573.802 119.853C580.231 120.236 586.154 121.938 591.487 124.016C596.632 125.959 601.379 128.247 605.635 130.835C609.448 133.231 612.705 136.102 613.821 139.371C614.835 142.342 614.24 145.654 611.34 148.214C609.8 149.526 607.714 150.582 605.284 151.279C602.751 152.05 600.04 152.611 597.59 153.478C593.885 154.789 590.33 157.461 591.591 160.185C591.862 160.781 592.376 161.327 593.088 161.777C593.944 162.318 595.432 161.574 594.574 161.032C593.067 160.08 593.084 158.788 593.833 157.623C594.727 156.309 596.348 155.214 598.432 154.517C600.997 153.611 603.843 153.038 606.475 152.21C608.995 151.452 611.168 150.346 612.81 148.985C615.906 146.336 616.749 142.925 615.926 139.787C615.036 136.392 611.978 133.331 608.185 130.781C604.058 128.005 599.022 125.673 593.888 123.584C588.379 121.343 582.311 119.464 575.643 118.835C569.864 118.29 563.632 118.735 558.655 120.648C554.009 122.432 550.499 125.452 550.248 128.786C550.168 130.302 550.772 131.803 552 133.135C553.228 134.468 555.034 135.582 557.232 136.365C559.486 137.128 562.089 137.454 564.674 137.296C567.438 137.161 570.192 136.629 572.981 136.736C574.243 136.767 575.453 137.041 576.429 137.515C577.396 137.988 578.501 137.038 577.541 136.569Z"
                                                            fill="#2F2E41" />
                                                        <path id="Vector_18"
                                                            d="M538.591 238.624C538.603 238.581 538.617 238.538 538.633 238.495C538.748 238.174 538.97 237.87 539.286 237.6C539.601 237.331 540.004 237.101 540.471 236.924L548.527 233.852C549.468 233.495 550.611 233.372 551.706 233.511C552.8 233.651 553.755 234.041 554.363 234.597L579.214 257.372C579.821 257.928 580.029 258.604 579.793 259.251C579.556 259.898 578.895 260.463 577.954 260.822L569.898 263.893C568.957 264.251 567.814 264.374 566.72 264.234C565.626 264.095 564.67 263.704 564.062 263.149L539.212 240.374C538.644 239.857 538.423 239.233 538.591 238.624Z"
                                                            fill="#2F2E41" />
                                                    </g>
                                                    <g id="Group 1">
                                                        <g id="logo">
                                                            <rect id="l_logo_step 1" x="377" y="68" width="70.5568"
                                                                height="50.8571" fill="url(#pattern0)" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <defs>
                                                <pattern id="pattern0" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#image0_3_334"
                                                        transform="matrix(0.00252911 0 0 0.00350877 -0.0209973 0)" />
                                                </pattern>
                                                <clipPath id="clip0_3_334">
                                                    <rect width="1100" height="365.952" fill="white"
                                                        transform="translate(0 270.048)" />
                                                </clipPath>
                                                <clipPath id="clip1_3_334">
                                                    <rect width="570.317" height="275.095" fill="white"
                                                        transform="translate(256.86)" />
                                                </clipPath>
                                                <clipPath id="clip2_3_334">
                                                    <rect width="592.084" height="173.302" fill="white"
                                                        transform="translate(60.9498 118.619)" />
                                                </clipPath>
                                                <image id="image0_3_334" data-name="l_logo_step.png" width="412"
                                                    height="285"
                                                    xlink:href="data:image/png;base64,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" />
                                            </defs>
                                        </svg>
                                    </div>

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
                        <li class="relative">
                            <div class='flex items-center text-sm'>
                                <div>
                                    <p class='font-semibold'> {{ auth()->user()->firstname }}
                                    </p>
                                    <p class='text-xs text-gray-600 dark:text-gray-400'>
                                        {{ auth()->user()->lastname }}
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="relative">
                            <div class='flex items-center text-sm'>
                                <div>
                                    <p class='font-semibold'>

                                        @if (auth()->user()->usertype != 2)
                                            @switch(auth()->user()->usertype)
                                                @case(1)
                                                    Cliente
                                                @break

                                                @case(3)
                                                    Proveedor
                                                @break

                                                @case(4)
                                                    Vinculado
                                                @break

                                                @case(5)
                                                    Administrador
                                                @break

                                                @default
                                            @endswitch
                                        @else
                                            @switch(auth()->user()->charge)
                                                @case(1)
                                                    Monitor(a)
                                                @break

                                                @case(2)
                                                    Coodinador(a) Operativo
                                                @break

                                                @case(3)
                                                    Coordinador(a) de Recursos
                                                @break

                                                @case(4)
                                                    Coordinador(a) Compras y Suministros
                                                @break

                                                @case(5)
                                                    Conductor(a)
                                                @break

                                                @case(6)
                                                    Coordinador(a) Sistemas de Gestión
                                                @break

                                                @case(7)
                                                    Gerente General
                                                @break

                                                @case(8)
                                                    Auditor(a) Interno
                                                @break

                                                @default
                                            @endswitch
                                        @endif
                                    </p>
                                </div>
                            </div>
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
        // function active(id) {
        //     for (let index = 0; index < 12; index++) {

        //         index == id ? $("#active" + [index]).removeClass('hidden') : $("#active" + [index]).addClass('hidden');

        //     }
        // }
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
