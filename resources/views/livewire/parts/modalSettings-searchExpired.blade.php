<div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" id="modalExpire" wire:ignore.self
    class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
    <!-- Modal -->
    <div x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0  transform translate-y-1/2"
        class="w90 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4" role="dialog">
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-center border-b-fuchsia-800 border-b">
            <!-- Modal title -->
            <p class="justify-start mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">

            </p>
            <button onclick="closeModalExpire()"
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
        <div class="h95 ">

            <div class="scroll h50 overflow-y-auto w-full border-red-800 rounded-lg p-1">

                {{-- conductores --}}

                <h1 class="text-black text80 dark:text-white">CONDUCTORES</h1>

                @for ($a = 0; $a < count($listExpire); $a++)

                    <h1 @switch($a)
                    @case(0)
                    class="mt1 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                        @break
                    @case(1)
                    class="mt1 px-2 py-1 font-semibold leading-tight text-sky-700 bg-sky-300 rounded-full dark:bg-sky-700 dark:text-sky-100">
                        @break
                    @case(2)
                    class="mt1 px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100">
                        @break
                    @case(3)
                    class="mt1 px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                        @break
                    @case(4)
                    class="mt1 px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                        @break
                    @default
                        
                @endswitch
                        {{ $listType[$a] }} </h1>
                        <br>

                        @for ($i = 0; $i < count($listExpire[$a]); $i++)
                            <h1 class="text-black text80 dark:text-white">{{ $listExpire[$a][$i]['fullname'] }}</h1>
                            <div class="border-b-fuchsia-800">
                                @for ($key = 0; $key < count($listExpire[$a][$i]['documents']); $key++)
                                    <span type="button"
                                        class="text-white w-full text-xs leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file">
                                        {{ $listExpire[$a][$i]['documents']['document' . $key + 1] }}
                                    </span>
                                @endfor
                            </div>
                        @endfor

                @endfor

            </div>
            <div class="scroll h50 overflow-y-auto w-full border-orange-800 mt1 rounded-lg p-1">

                {{-- vehiculos --}}
                <h1 class="text-black text80 dark:text-white">VEHICULOS</h1>

                @for ($a = 0; $a < count($listExpireV); $a++)

                    <h1 @switch($a)
                @case(0)
                class="mt1 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                    @break
                @case(1)
                class="mt1 px-2 py-1 font-semibold leading-tight text-sky-700 bg-sky-300 rounded-full dark:bg-sky-700 dark:text-sky-100">
                    @break
                @case(2)
                class="mt1 px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100">
                    @break
                @case(3)
                class="mt1 px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                    @break
                @case(4)
                class="mt1 px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                    @break
                @default
                    
            @endswitch
                        {{ $listType[$a] }} </h1>
                        <br>

                        @for ($i = 0; $i < count($listExpireV[$a]); $i++)
                            <h1 class="text-black text80 dark:text-white">Placa {{ $listExpireV[$a][$i]['placa'] }}</h1>
                            <div class="border-b-fuchsia-800">
                                @for ($key = 0; $key < count($listExpireV[$a][$i]['documents']); $key++)
                                    <span type="button"
                                        class="text-white w-full text-xs leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file">
                                        {{ $listExpireV[$a][$i]['documents']['document' . $key + 1] }}
                                    </span>
                                @endfor
                            </div>
                        @endfor

                @endfor

            </div>

            <div
                class="flex flex-col items-center justify-end px-6 py-3-1 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
            </div>

        </div>

    </div>
</div>
