<div id="modalInspection" wire:ignore
    class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
    <!-- Modal -->
    <div class="w40 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4" role="dialog"
        id="modalInspection">
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-center border-b-fuchsia-800 border-b">
            <!-- Modal title -->
            <h1 class="dark:text-white">INSPECCIONANDO LA PLACA XXX147</h1>
            <button
                class="ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                aria-label="close" onclick="closeModalInspection()">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                    <path
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </button>
        </header>
        <!-- Modal body -->
        <div class="scroll h-4-7 overflow-y-auto">
            <div class="-mt-11 mb-6 ">
                <!-- Modal description -->
                <div x-data="accordion" class="bg-gray-200 min-h-screen pt-2 font-mono my-16">
                    <div class="container mx-auto">
                        <div class="inputs w-full max-w-2xl p-6 mx-auto">
                            <form class="mt-6 pt-4" action="" method="post" id="formulario">
                                @csrf
                                <div class='flex flex-wrap -mx-3 mb-6'>
                                    <div class='w-full md:w-full px-3 mb-6'>
                                        <label
                                            class='block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2'>Nombre
                                            del responsable</label>
                                        <input wire:model.defer="responsible"
                                            class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 dark:bg-gray-700 dark:text-gray-300 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                            type='text' name="responsible" required>
                                    </div>
                                    <div class='w-full md:w-full px-3 mb-6'>
                                        <label
                                            class='block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2'>Kilometraje</label>
                                        <input wire:model.defer="mileage"
                                            class='appearance-none block w-full bg-white text-gray-700 dark:bg-gray-700 dark:text-gray-300 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                            type='number' name="Mileage" required>
                                    </div>
                                    <div class="flex space-x-4" wire:ignore>

                                        <div class="w-6-12">
                                            <label id="" class="text-gray-700 dark:text-gray-400">Desde</label>

                                            <input readonly
                                                class="appearance-none block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700  dark:text-gray-300 form-input"
                                                placeholder="Fecha inicial inspeción" type="text" id="fInicial"
                                                name="fInicial" wire:model.defer="fInicial"
                                                onchange="fechasSet('fInicial')" />
                                        </div>

                                        <div class="w-6-12">
                                            <label id="" class="text-gray-700 dark:text-gray-400">Hasta</label>

                                            <input readonly
                                                class="appearance-none block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700  dark:text-gray-300 form-input"
                                                placeholder="Fecha final inspeción" type="text" id="fFinal"
                                                name="fFinal" wire:model.defer="fFinal"
                                                onchange="fechasSet('fFinal')" />
                                        </div>

                                    </div>
                                    <h3 class="text-gray-700 dark:text-gray-400">Diligencie el formulario indicando
                                        si posee los elementos y estan en buen
                                        estado
                                        con la
                                        palabra "SI", de lo contrario con la palabra "NO"</h3>
                                    @foreach ($inspectionsCategory as $id => $name_description)
                                        @switch($id)
                                            @case(1)
                                                <!-- Accordion 1 -->
                                                <div
                                                    class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-green-800">
                                                    <!-- Head -->
                                                    <div @click="selected != 1 ? selected = 1 : selected =null"
                                                        class="flex justify-between items-center shadow-md px-2 border-b-green-800">
                                                        <h2 class="font-medium text-gray-800 dark:text-white py-2">
                                                            {{ $name_description }}:
                                                        </h2>
                                                        <div class="flex items-center justify-between mt-4">
                                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                <button type="button" id=""
                                                                    onclick="check('9','si','1','9')"
                                                                    class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                    SI TODO
                                                                </button>
                                                            </div>
                                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                <button type="button" id=""
                                                                    onclick="check('9','no','1','9')"
                                                                    class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                    NO TODO
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            x-bind:class="selected == 1 ? 'rotate-180' : ''"
                                                            class="h-5 w-5 transition-all duration-300" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M19 9l-7 7-7-7" />
                                                        </svg>
                                                    </div>
                                                    <!-- Content -->
                                                    <div class="max-h-0 overflow-hidden transition-all duration-300 dark:bg-gray-800 dark:text-white"
                                                        x-ref="tab1" :style="selected == 1 ? 'max-height:450%;' : ''">
                                                        <div class="personal w-full border-t border-gray-400 pt-4">
                                                            @foreach ($inspections as $inspection)
                                                                @if ($inspection->category == 1)
                                                                    <div class="flex items-center justify-between mt-4">
                                                                        <div class="mb-2">
                                                                            <label for="entry"
                                                                                class="block text-gray-800 dark:text-white text-sm lg:text-base font-semibold mb-2">
                                                                                {{ $inspection->name_description }}:
                                                                            </label>
                                                                            <div class="w-full">
                                                                                <div
                                                                                    class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                                                                    <div class="inline-block radio">
                                                                                        <input
                                                                                            name="answer{{ $inspection->id }}"
                                                                                            wire:model.defer="answer{{ $inspection->id }}"
                                                                                            type="radio"
                                                                                            id="si{{ $inspection->id }}"
                                                                                            hidden="hidden" value="2" />
                                                                                        <label for="si{{ $inspection->id }}"
                                                                                            class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 si-label">
                                                                                            SI
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="inline-block radio">
                                                                                        <input
                                                                                            name="answer{{ $inspection->id }}"
                                                                                            wire:model.defer="answer{{ $inspection->id }}"
                                                                                            type="radio"
                                                                                            id="no{{ $inspection->id }}"
                                                                                            hidden="hidden" value="1" />
                                                                                        <label for="no{{ $inspection->id }}"
                                                                                            class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 no-label">
                                                                                            NO
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @break

                                            @case(2)
                                                <!-- Accordion 2 -->
                                                <div
                                                    class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-green-800">
                                                    <!-- Head -->
                                                    <div @click="selected != 2 ? selected = 2 : selected =null"
                                                        class="flex justify-between items-center shadow-md px-2 border-b-green-800">
                                                        {{-- <h1 class="font-medium text-gray-800 py-2 dark:text-white">prueba2</h1> --}}
                                                        <h2 class="font-medium text-gray-800 dark:text-white py-2">
                                                            {{ $name_description }}:
                                                        </h2>
                                                        <div class="flex items-center justify-between mt-4">
                                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                <button type="button" id=""
                                                                    onclick="check('15','si','10')"
                                                                    class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                    SI TODO
                                                                </button>
                                                            </div>
                                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                <button type="button" id=""
                                                                    onclick="check('15','no','10')"
                                                                    class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                    NO TODO
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            x-bind:class="selected == 2 ? 'rotate-180' : ''"
                                                            class="h-5 w-5 transition-all duration-300" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M19 9l-7 7-7-7" />
                                                        </svg>
                                                    </div>
                                                    <!-- Content -->
                                                    <div class="max-h-0 overflow-hidden transition-all duration-300 dark:bg-gray-800 dark:text-white"
                                                        x-ref="tab1" :style="selected == 2 ? 'max-height:450%;' : ''">
                                                        <div class="personal w-full border-t border-gray-400 pt-4">

                                                            @foreach ($inspections as $inspection)
                                                                @if ($inspection->category == 2)
                                                                    <div class="flex items-center justify-between mt-4">
                                                                        <div class="mb-2">
                                                                            <label for="entry"
                                                                                class="block text-gray-800 dark:text-white text-sm lg:text-base font-semibold mb-2">
                                                                                {{ $inspection->name_description }}:
                                                                            </label>
                                                                            <div class="w-full">
                                                                                <div
                                                                                    class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                                                                    <div class="inline-block radio">
                                                                                        <input
                                                                                            name="answer{{ $inspection->id }}"
                                                                                            wire:model.defer="answer{{ $inspection->id }}"
                                                                                            type="radio"
                                                                                            id="si{{ $inspection->id }}"
                                                                                            hidden="hidden" value="2" />
                                                                                        <label for="si{{ $inspection->id }}"
                                                                                            class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 si-label">
                                                                                            SI
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="inline-block radio">
                                                                                        <input
                                                                                            name="answer{{ $inspection->id }}"
                                                                                            wire:model.defer="answer{{ $inspection->id }}"
                                                                                            type="radio"
                                                                                            id="no{{ $inspection->id }}"
                                                                                            hidden="hidden" value="1" />
                                                                                        <label for="no{{ $inspection->id }}"
                                                                                            class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 no-label">
                                                                                            NO
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                </div>
                                            @break

                                            @case(3)
                                                <!-- Accordion 3 -->
                                                <div
                                                    class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-green-800">
                                                    <!-- Head -->
                                                    <div @click="selected != 3 ? selected = 3 : selected =null"
                                                        class="flex justify-between items-center shadow-md px-2 border-b-green-800">
                                                        <h2 class="font-medium text-gray-800 py-2 dark:text-white">
                                                            {{ $name_description }}:</h2>
                                                        <div class="flex items-center justify-between mt-4">
                                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                <button type="button" id=""
                                                                    onclick="check('23','si','16')"
                                                                    class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                    SI TODO
                                                                </button>
                                                            </div>
                                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                <button type="button" id=""
                                                                    onclick="check('23','no','16')"
                                                                    class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                    NO TODO
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            x-bind:class="selected == 3 ? 'rotate-180' : ''"
                                                            class="h-5 w-5 transition-all duration-300" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M19 9l-7 7-7-7" />
                                                        </svg>
                                                    </div>
                                                    <!-- Content -->
                                                    <div class="max-h-0 overflow-hidden transition-all duration-300 dark:bg-gray-800 dark:text-white"
                                                        x-ref="tab1" :style="selected == 3 ? 'max-height:450%;' : ''">
                                                        <div class="personal w-full border-t border-gray-400 pt-4">
                                                            @foreach ($inspections as $inspection)
                                                                @if ($inspection->category == 3)
                                                                    <div class="flex items-center justify-between mt-4">
                                                                        <div class="mb-2">
                                                                            <label for="entry"
                                                                                class="block text-gray-800 dark:text-white text-sm lg:text-base font-semibold mb-2">
                                                                                {{ $inspection->name_description }}:
                                                                            </label>
                                                                            <div class="w-full">
                                                                                <div
                                                                                    class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                                                                    <div class="inline-block radio">
                                                                                        <input
                                                                                            name="answer{{ $inspection->id }}"
                                                                                            wire:model.defer="answer{{ $inspection->id }}"
                                                                                            type="radio"
                                                                                            id="si{{ $inspection->id }}"
                                                                                            hidden="hidden" value="2" />
                                                                                        <label for="si{{ $inspection->id }}"
                                                                                            class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 si-label">
                                                                                            SI
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="inline-block radio">
                                                                                        <input
                                                                                            name="answer{{ $inspection->id }}"
                                                                                            wire:model.defer="answer{{ $inspection->id }}"
                                                                                            type="radio"
                                                                                            id="no{{ $inspection->id }}"
                                                                                            hidden="hidden" value="1" />
                                                                                        <label for="no{{ $inspection->id }}"
                                                                                            class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 no-label">
                                                                                            NO
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                </div>
                                            @break

                                            @case(4)
                                                <!-- Accordion 4 -->
                                                <div
                                                    class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-green-800">
                                                    <!-- Head -->
                                                    <div @click="selected != 4 ? selected = 4 : selected =null"
                                                        class="flex justify-between items-center shadow-md px-2 border-b-green-800">
                                                        <h2 class="font-medium text-gray-800 py-2 dark:text-white">
                                                            {{ $name_description }}:</h2>
                                                        <div class="flex items-center justify-between mt-4">
                                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                <button type="button" id=""
                                                                    onclick="check('43','si','24')"
                                                                    class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                    SI TODO
                                                                </button>
                                                            </div>
                                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                                <button type="button" id=""
                                                                    onclick="check('43','no','24')"
                                                                    class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                                    NO TODO
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            x-bind:class="selected == 4 ? 'rotate-180' : ''"
                                                            class="h-5 w-5 transition-all duration-300" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M19 9l-7 7-7-7" />
                                                        </svg>
                                                    </div>
                                                    <!-- Content -->
                                                    <div class="max-h-0 overflow-hidden transition-all duration-300 dark:bg-gray-800 dark:text-white"
                                                        x-ref="tab1" :style="selected == 4 ? 'max-height:450%;' : ''">
                                                        <div class="personal w-full border-t border-gray-400 pt-4">
                                                            @foreach ($inspections as $inspection)
                                                                @if ($inspection->category == 4)
                                                                    <div class="flex items-center justify-between mt-4">
                                                                        <div class="mb-2">
                                                                            <label for="entry"
                                                                                class="block text-gray-800 dark:text-white text-sm lg:text-base font-semibold mb-2">
                                                                                {{ $inspection->name_description }}:
                                                                            </label>
                                                                            <div class="w-full">
                                                                                <div
                                                                                    class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                                                                    <div class="inline-block radio">
                                                                                        <input
                                                                                            name="answer{{ $inspection->id }}"
                                                                                            wire:model.defer="answer{{ $inspection->id }}"
                                                                                            type="radio"
                                                                                            id="si{{ $inspection->id }}"
                                                                                            hidden="hidden" value="2" />
                                                                                        <label for="si{{ $inspection->id }}"
                                                                                            class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 si-label">
                                                                                            SI
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="inline-block radio">
                                                                                        <input
                                                                                            name="answer{{ $inspection->id }}"
                                                                                            wire:model.defer="answer{{ $inspection->id }}"
                                                                                            type="radio"
                                                                                            id="no{{ $inspection->id }}"
                                                                                            hidden="hidden" value="1" />
                                                                                        <label for="no{{ $inspection->id }}"
                                                                                            class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 no-label">
                                                                                            NO
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @break

                                            @default
                                        @endswitch
                                    @endforeach
                                    <div class='w-full md:w-full px-3 mb-6'>
                                        <label
                                            class='block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2'>OBSERVACIONES</label>
                                        <textarea name="observations" wire:model.defer="observations"
                                            class='bg-gray-100 dark:bg-gray-700 dark:text-gray-300 rounded-md leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white'
                                            required>
                                    </textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div wire:ignore
            class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
            <button onclick="closeModalInspection()"
                class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                Cancel
            </button>
            <button id="" wire:click="toInspect()"
                class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Guardar Inspección
            </button>
        </div>
    </div>
</div>
