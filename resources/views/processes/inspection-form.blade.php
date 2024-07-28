<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Inspección Diaria</title>

    <style>
        /* .radio input~label {
            background-color: rgb(233, 225, 225);
            color: rgb(158, 146, 146);
        }

        .radio input:checked~label {
            background-color: rgb(70, 230, 22);
            color: white;
        } */

        .radio input[type="radio"] {
            display: none;
        }

        .si-label {
            background-color: rgb(233, 225, 225);
            color: rgb(158, 146, 146);
        }

        .no-label {
            background-color: rgb(233, 225, 225);
            color: rgb(158, 146, 146);
        }

        .radio input[type="radio"]:checked+.si-label {
            background-color: rgb(70, 230, 22);
            color: white;
        }

        .radio input[type="radio"]:checked+.no-label {
            background-color: rgb(233, 22, 22);
            /* Cambia este color a tu preferencia para NO seleccionado */
            color: white;
        }
    </style>
</head>

<body>
    <!-- component -->
    <!-- component -->
    <div x-data="accordion" class="bg-gray-200 min-h-screen pt-2 font-mono my-16">
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 mx-auto">
                <h2 class="text-2xl text-gray-900">INSPECCION DIARIA</h2>
                <form class="mt-6 border-t border-gray-400 pt-4" action="{{ route('processes.inspection-store') }}"
                    method="post" id="formulario">
                    @csrf
                    <div class='flex flex-wrap -mx-3 mb-6'>
                        <div class='w-full md:w-full px-3 mb-6'>
                            {{-- <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Nombre quien realiza la inspección</label> --}}
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Nombre del
                                responsable</label>
                            <input
                                class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                type='text' name="responsible" required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Placa del
                                Vehiculo</label>
                            <div class="flex-shrink w-full inline-block relative">
                                <select
                                    class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded"
                                    name="vehicle">
                                    <option>selecciona la placa del vahiculo</option>
                                    @foreach ($cars as $id => $plate_vehicle)
                                        <option value="{{ $id }}">
                                            {{ $plate_vehicle }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            {{-- <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Nombre quien realiza la inspección</label> --}}
                            <label
                                class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Kilometraje</label>
                            <input
                                class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                type='number' name="Mileage" required>
                        </div>
                        <h3>Diligencie el formulario indicando si posee los elementos y estan en buen estado con la
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
                                            <h2 class="font-medium text-gray-800 py-2 dark:text-white">{{ $name_description }}:
                                            </h2>
                                            <div class="flex items-center justify-between mt-4">
                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                    <button type="button" id="" onclick="check('9','si','1')"
                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                        SI TODO
                                                    </button>
                                                </div>
                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                    <button type="button" id="" onclick="check('9','no','1')"
                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                        NO TODO
                                                    </button>
                                                </div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                x-bind:class="selected == 1 ? 'rotate-180' : ''"
                                                class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
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
                                                                    class="block text-gray-700 text-sm lg:text-base font-semibold mb-2">
                                                                    {{ $inspection->name_description }}:
                                                                </label>
                                                                <div class="w-full">
                                                                    <div class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                                                        <div class="inline-block radio">
                                                                            <input name="answer{{ $inspection->id }}"
                                                                                type="radio" id="si{{ $inspection->id }}"
                                                                                hidden="hidden" value="2" />
                                                                            <label for="si{{ $inspection->id }}"
                                                                                class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 si-label">
                                                                                SI
                                                                            </label>
                                                                        </div>
                                                                        <div class="inline-block radio">
                                                                            <input name="answer{{ $inspection->id }}"
                                                                                type="radio" id="no{{ $inspection->id }}"
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
                                            <h2 class="font-medium text-gray-800 py-2 dark:text-white">{{ $name_description }}:
                                            </h2>
                                            <div class="flex items-center justify-between mt-4">
                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                    <button type="button" id="" onclick="check('15','si','10')"
                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                        SI TODO
                                                    </button>
                                                </div>
                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                    <button type="button" id="" onclick="check('15','no','10')"
                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                        NO TODO
                                                    </button>
                                                </div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                x-bind:class="selected == 2 ? 'rotate-180' : ''"
                                                class="h-5 w-5 transition-all duration-300" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
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
                                                                    class="block text-gray-700 text-sm lg:text-base font-semibold mb-2">
                                                                    {{ $inspection->name_description }}:
                                                                </label>
                                                                <div class="w-full">
                                                                    <div class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                                                        <div class="inline-block radio">
                                                                            <input name="answer{{ $inspection->id }}"
                                                                                type="radio" id="si{{ $inspection->id }}"
                                                                                hidden="hidden" value="2" />
                                                                            <label for="si{{ $inspection->id }}"
                                                                                class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 si-label">
                                                                                SI
                                                                            </label>
                                                                        </div>
                                                                        <div class="inline-block radio">
                                                                            <input name="answer{{ $inspection->id }}"
                                                                                type="radio" id="no{{ $inspection->id }}"
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
                                                    <button type="button" id="" onclick="check('23','si','16')"
                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                        SI TODO
                                                    </button>
                                                </div>
                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                    <button type="button" id="" onclick="check('23','no','16')"
                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                        NO TODO
                                                    </button>
                                                </div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                x-bind:class="selected == 3 ? 'rotate-180' : ''"
                                                class="h-5 w-5 transition-all duration-300" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
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
                                                                    class="block text-gray-700 text-sm lg:text-base font-semibold mb-2">
                                                                    {{ $inspection->name_description }}:
                                                                </label>
                                                                <div class="w-full">
                                                                    <div class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                                                        <div class="inline-block radio">
                                                                            <input name="answer{{ $inspection->id }}"
                                                                                type="radio" id="si{{ $inspection->id }}"
                                                                                hidden="hidden" value="2" />
                                                                            <label for="si{{ $inspection->id }}"
                                                                                class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 si-label">
                                                                                SI
                                                                            </label>
                                                                        </div>
                                                                        <div class="inline-block radio">
                                                                            <input name="answer{{ $inspection->id }}"
                                                                                type="radio" id="no{{ $inspection->id }}"
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
                                                    <button type="button" id="" onclick="check('43','si','24')"
                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                        SI TODO
                                                    </button>
                                                </div>
                                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                                    <button type="button" id="" onclick="check('43','no','24')"
                                                        class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                        NO TODO
                                                    </button>
                                                </div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                x-bind:class="selected == 4 ? 'rotate-180' : ''"
                                                class="h-5 w-5 transition-all duration-300" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
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
                                                                    class="block text-gray-700 text-sm lg:text-base font-semibold mb-2">
                                                                    {{ $inspection->name_description }}:
                                                                </label>
                                                                <div class="w-full">
                                                                    <div class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                                                        <div class="inline-block radio">
                                                                            <input name="answer{{ $inspection->id }}"
                                                                                type="radio" id="si{{ $inspection->id }}"
                                                                                hidden="hidden" value="2" />
                                                                            <label for="si{{ $inspection->id }}"
                                                                                class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold h-10 lg:w-14 lg:h-14 si-label">
                                                                                SI
                                                                            </label>
                                                                        </div>
                                                                        <div class="inline-block radio">
                                                                            <input name="answer{{ $inspection->id }}"
                                                                                type="radio" id="no{{ $inspection->id }}"
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
                                class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>OBSERVACIONES</label>
                            <textarea name="observations" id="observations"
                                class='bg-gray-100 rounded-md leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white'>
                            </textarea>
                        </div>

                        <br>
                        <div class="flex justify-end">
                            <button
                                class="inline-block text-white text-sm font-medium transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                type="submit">Guardar Inspección</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @if (session('success') == 'ok')
        <script>
            swal.fire({
                icon: 'success',
                title: 'Inspeción realizada exitosamente',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @else
        @if (session('success') == 'no')
            <script>
                swal.fire({
                    icon: 'warning',
                    title: 'La inspeción del día de hoy, ya fue realizada para esta placa',
                    showConfirmButton: false,
                    timer: 2500
                })
            </script>
        @else
            @if (session('success') == 'nul')
                <script>
                    swal.fire({
                        icon: 'error',
                        title: 'Debes verificar que todos los elementos contenga un "SI" o un "NO"',
                        showConfirmButton: false,
                        timer: 2500
                    })
                </script>
            @else
                @if (session('success') == 'obs')
                    <script>
                        swal.fire({
                            icon: 'error',
                            title: 'si no cumples con algun elemento, debes llenar la observación del por que no se cumple con el elemento',
                            showConfirmButton: false,
                            timer: 2500
                        })
                    </script>
                @endif
            @endif
        @endif
    @endif

    <script>
        function accordion() {
            return {
                selected: null
            }
        }

        function check(cant, option, start) {
            for (let i = start; i <= cant; i++) {
                document.getElementById(option + [i]).checked = true;

            }

        }
    </script>
</body>

</html>

@section('js')
@endsection
