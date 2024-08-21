<div>

    <!-- resources/views/livewire/arl-grid-view.blade.php -->
<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-4">ARL GridView Editable</h2>

    <div class="mb-4">
        <input type="text" wire:model="newDescriptionArl" class="border rounded px-2 py-1" placeholder="Nueva ARL">
        <button wire:click="addArl" class="bg-blue-500 text-white px-4 py-2 rounded">Agregar</button>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Descripción</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($arls as $index => $arl) --}}
                <tr>
                    {{-- <td class="border px-4 py-2">{{ $arl->id }}</td> --}}
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">
                        {{-- @if($editIndex === $index) --}}
                            <input type="text" wire:model="description_arl" class="border rounded px-2 py-1">
                        {{-- @else
                            {{ $arl->description_arl }}
                        @endif --}}
                    </td>
                    <td class="border px-4 py-2">
                        {{-- @if($editIndex === $index) --}}
                            {{-- <button wire:click="updateArl({{ $arl->id }})" class="bg-green-500 text-white px-4 py-2 rounded">Guardar</button> --}}
                            <button  class="bg-green-500 text-white px-4 py-2 rounded">Guardar</button>
                        {{-- @else --}}
                            <button  class="bg-yellow-500 text-white px-4 py-2 rounded">Editar</button>
                            {{-- <button wire:click="deleteArl({{ $arl->id }})" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button> --}}
                            <button  class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                        {{-- @endif --}}
                    </td>
                </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>


    {{-- codigo --}}

    {{-- 

    <div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <svg class="mb-2 w-10 h-10 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                clip-rule="evenodd"></path>
            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
        </svg>
        <a href="#">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a help in Claim?
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to
            certify for your weekly benefits:</p>
        <a href="#" class="inline-flex items-center text-blue-600 hover:underline">
            See our guideline
            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                </path>
                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
            </svg>
        </a>
    </div>

    {{-- <div
        class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <svg class="mb-2 w-10 h-10 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                clip-rule="evenodd"></path>
            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
        </svg>
        <a href="#">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a help in Claim?
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to
            certify for your weekly benefits:</p>
        <a href="#" class="inline-flex items-center text-blue-600 hover:underline">
            See our guideline
            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                </path>
                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
            </svg>
        </a>
    </div> --}}


    <!-- component -->


    {{-- <button onclick="passenger()">prueba</button> --}}



    {{-- fin codigo --}}


    {{-- <div class="h95 mt1">
        <center> <h1 class="text-black textp20 dark:text-white">Manuales</h1> </center>
        <div class="scroll h45 overflow-y-auto w-full border-red-800 rounded-lg p-1">
            
            
            <div class="grid grid-cols-5 gap-4">
                
                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

            </div>

        </div>
        <center> <h1 class="text-black textp20 dark:text-white">configuarciones</h1> </center>
        <div class="scroll h45 overflow-y-auto w-full border-orange-800 mt1 rounded-lg p-1">
            
            <div class="grid grid-cols-5 gap-4">
                
                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

                <div class="border-orange-800 rounded-lg p-1">
                    <img src="http://127.0.0.1:8000/img/logo.png" alt="" class="">
                </div>

            </div>
        </div>

    </div> --}}



    {{-- prueba modal --}}

    @include('livewire.arl-component')

    {{-- modal searchExpire --}}

    @include('livewire.parts.modalSettings-searchExpired')

    {{-- end modal searchExpire --}}

    <x-modalSettings>
    </x-contractframes>


</div>
@section('scripts')
    <script>
        // setTimeout(function() {
        //     Livewire.emit('searchExpired');
        // }, 0);

        // $(document).ready(function() {

        //     let timerInterval
        //     swal.fire({
        //         title: 'loading...',
        //         html: 'Loading system information into <b></b> milliseconds.', //Cargando la información del sistema en
        //         timer: 4000,
        //         timerProgressBar: true,
        //         didOpen: () => {
        //             swal.showLoading()
        //             const b = swal.getHtmlContainer().querySelector('b')
        //             timerInterval = setInterval(() => {
        //                 b.textContent = swal.getTimerLeft()
        //             }, 100)
        //         },
        //         willClose: () => {
        //             // clearInterval(timerInterval)

        //         }
        //     }).then((result) => {
        //         /* Read more about handling dismissals below */
        //         if (result.dismiss === swal.DismissReason.timer) {

        //         }
        //     })
        //     Livewire.emit('searchExpired');

        //     $("#active1").removeClass('hidden');

        // });

        const scroll = document.querySelector(".scroll");

        Livewire.on('openModalExpire', () => {
            viewhideinputs('modalExpire', 'block', 'hidden');
        })

        function closeModalExpire() {
            scroll.scrollTop = 0;
            document.getElementById('modalExpire').classList.add('hidden');
        }

        Livewire.on('expired', (shortTimeExpire, nearExpire) => {
            var shortTimeExpire = shortTimeExpire.shortTimeExpire;
            var nearExpire = nearExpire.nearExpire;
            var probando = ['licencia de conducción', 'Drogas y alchoolemia', 'Consultas SIMIT',
                'psicosensometrico', 'Normas de Transito', 'Manejo Defensivo', 'Primeros Auxilios',
                'Seguridad Vial', 'Eps', 'Pension', 'Cesantias', 'Arl', 'Caja Compensacion'
            ];

            // console.log(lengthshortTimeExpire);

            listExpire = [shortTimeExpire, nearExpire]

            // console.log(shortTimeExpire[0].documents.document1);
            // for (let a = 0; a < listExpire.length; a++) {

            //     if (a == 0) {
            //         console.log('en poco tiempo expiraran ');
            //     } else if (a == 1) {
            //         console.log('cerca de vencer ');
            //     }

            //     for (let i = 0; i < listExpire[a].length; i++) {
            //         console.log(i);
            //         console.log(listExpire[a][i].fullname);
            //         var key = 1;

            //         while (key <= 100) {

            //             switch (key) {
            //                 case 1:
            //                     if (listExpire[a][i].documents.document1 == null) {
            //                         key = 101;
            //                     } else {
            //                         console.log(listExpire[a][i].documents.document1);
            //                         key++;
            //                     }

            //                     break;
            //                 case 2:
            //                     if (listExpire[a][i].documents.document2 == null) {
            //                         key = 101;
            //                     } else {
            //                         console.log(listExpire[a][i].documents.document2);
            //                         key++;
            //                     }

            //                     break;
            //                 case 3:
            //                     if (listExpire[a][i].documents.document3 == null) {
            //                         key = 101;
            //                     } else {
            //                         console.log(listExpire[a][i].documents.document3);
            //                         key++;
            //                     }

            //                     break;
            //                 case 4:
            //                     if (listExpire[a][i].documents.document4 == null) {
            //                         key = 101;
            //                     } else {
            //                         console.log(listExpire[a][i].documents.document4);
            //                         key++;
            //                     }

            //                     break;
            //                 case 5:
            //                     if (listExpire[a][i].documents.document5 == null) {
            //                         key = 101;
            //                     } else {
            //                         console.log(listExpire[a][i].documents.document5);
            //                         key++;
            //                     }

            //                     break;
            //                 case 6:
            //                     if (listExpire[a][i].documents.document6 == null) {
            //                         key = 101;
            //                     } else {
            //                         console.log(listExpire[a][i].documents.document6);
            //                         key++;
            //                     }

            //                     break;
            //                 case 7:
            //                     if (listExpire[a][i].documents.document7 == null) {
            //                         key = 101;
            //                     } else {
            //                         console.log(listExpire[a][i].documents.document7);
            //                         key++;
            //                     }

            //                     break;
            //                 case 8:
            //                     if (listExpire[a][i].documents.document8 == null) {
            //                         key = 101;
            //                     } else {
            //                         console.log(listExpire[a][i].documents.document8);
            //                         key++;
            //                     }

            //                     break;
            //                 case 9:
            //                     if (listExpire[a][i].documents.document9 == null) {
            //                         key = 101;
            //                     } else {
            //                         console.log(listExpire[a][i].documents.document9);
            //                         key++;
            //                     }

            //                     break;
            //                 case 10:
            //                     if (listExpire[a][i].documents.document10 == null) {
            //                         key = 101;
            //                     } else {
            //                         console.log(listExpire[a][i].documents.document10);
            //                         key++;
            //                     }

            //                     break;
            //                 case 11:
            //                     if (listExpire[a][i].documents.document11 == null) {
            //                         key = 101;
            //                     } else {
            //                         console.log(listExpire[a][i].documents.document11);
            //                         key++;
            //                     }

            //                     break;
            //                 case 12:
            //                     if (listExpire[a][i].documents.document12 == null) {
            //                         key = 101;
            //                     } else {
            //                         console.log(listExpire[a][i].documents.document12);
            //                         key++;
            //                     }

            //                     break;

            //                 default:
            //                     break;
            //             }
            //         }

            //     }
            // }

            // console.log(shortTimeExpire.length)
            // console.log(shortTimeExpire.shortTimeExpire[0].documents.document3)
            // Construye el contenido HTML inicial antes del bucle
            var contenidoHTML = '';

            // Construye el contenido HTML usando un bucle
            for (let i = 0; i < probando.length; i++) {
                // contenidoHTML += 'Puedes usar ' + probando[i] + ' con <b>texto en negrita</b>, <br> ';
                contenidoHTML +=
                    '<span type="button">' +
                    // 'class="ml1 text-white w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file">' +
                    probando[i] +
                    '</span>';
            }

            // Agrega el resto del contenido HTML
            // contenidoHTML += 'y otras etiquetas HTML';

            // Muestra el cuadro de diálogo SweetAlert2 con el contenido HTML generado
            swal.fire({
                // title: '<strong> <u>ejemplo</u></strong>',
                // icon: 'info',
                html: contenidoHTML,
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                width: '95%',
                height: '100%',
                confirmButtonText: '<i class="fa fa-thumbs-up"></i> ¡Genial!',
                confirmButtonAriaLabel: 'Pulgar arriba, ¡genial!',
                cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
                cancelButtonAriaLabel: 'Pulgar abajo'
            });

        })
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
        // }).then((result) => {
        //     if (result.isConfirmed) {
        //         prueba();
        //     }
        // })

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

        function passenger() {
            swal.fire({
                title: '<header class="flex justify-center border-b-fuchsia-800 border-b">' +
                    '<p class="justify-start mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300"><h1 class="text-black dark:text-white text-4xl1">Lista de Pasajeros</h1></p>' +
                    '</header>',
                // icon: 'info',
                html:

                    // '<div class="w-9-12 h-4-8 mt-6 px-6 py-4 bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4">' +
                    '<div class="mt-11 border-gray-50-s container px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9">' +

                    '<div class="flex space-x-4 clonar">' +
                    '<div class="w-6-12 ">' +
                    '<label class=" text-gray-700 dark:text-gray-400">Documento' +
                    '<input id="inputDRow1" class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Documento pasajero" type="text" name="supplier_name" />' +
                    '</div>' +
                    '<div class="w-6-12 ">' +
                    '<label class=" text-gray-700 dark:text-gray-400">Nombre completo' +
                    '<input id="inputNRow1" class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Nombre completo" type="text" name="supplier_name" />' +
                    '</div>' +
                    '<div class="flex items-center space-x-4 text-sm">' +
                    '<button id="add" onclick="add()" class="inline-flex items-center justify-center  bg-sky-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-400 focus:outline-none focus:bg-sky-700 focus:ring focus:ring-red-200 active:bg-sky-700 readonly:opacity-25 transition">' +
                    '<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path> </svg>' +
                    '</button>' +
                    '</div>' +
                    '</div>' +

                    '<div id="newInput"></div>' +

                    '<div class="flex items-center space-x-4 text-sm pruebapers">' +
                    '<button onclick="savePeople()" class="pruebapersb inline-flex items-center justify-center  bg-emerald-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-400 focus:outline-none focus:bg-emerald-700 focus:ring focus:ring-red-200 active:bg-emerald-700 readonly:opacity-25 transition">' +
                    'Guardar' +
                    '</button>' +
                    '</div>' +

                    '</div>',
                // '</div>' ,
                showConfirmButton: false
            })
        }

        var i = 1;
        var total = [];
        total.push(i);

        function add() {
            i++;
            total.push(i);
            // alert(total);
            $('#newInput').append('<div class="flex space-x-4" id="newRow' + i + '">' +
                '<div class="w-6-12 ">' +
                '<label class=" text-gray-700 dark:text-gray-400">Documento' +
                '<input id="inputDRow' + i +
                '" class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Documento pasajero" type="text" name="supplier_name" />' +
                '</div>' +
                '<div class="w-6-12 ">' +
                '<label class=" text-gray-700 dark:text-gray-400">Nombre completo' +
                '<input id="inputNRow' + i +
                '" class=" block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Nombre completo" type="text" name="supplier_name" />' +
                '</div>' +
                '<div class="flex items-center space-x-4 text-sm">' +
                '<button onclick="deletteRow(' + i +
                ')" class="inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 readonly:opacity-25 transition">' +
                '<svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"> <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path> </svg>' +
                '</button>' +
                '</div>' +
                '</div>')
        }

        function deletteRow(id) {
            $('#newRow' + id + '').remove();
            total = total.filter(function(i) {
                return i !== id
            });
            // alert(total);
        }
        var passengers = [];

        function savePeople() {

            for (let index = 0; index < total.length; index++) {
                passengers.push({
                    documento: document.getElementById('inputDRow' + total[index] + '').value,
                    nombreC: document.getElementById('inputNRow' + total[index] + '').value
                });
            }
            // passengers.push({documento: document.getElementById('inputDRow2').value, nombreC: document.getElementById('inputNRow2').value});
            // alert(passengers[2].documento + ' - ' + passengers[2].nombreC);
        }

        function prueba() {
            alert('prueba');
        }


        function viewhideinputs(id, adhere, stirring) {

            if (adhere == '') {
                document.getElementById(id).classList.remove(stirring);
            } else {
                document.getElementById(id).classList.remove(stirring);
                document.getElementById(id).classList.add(adhere);
            }

        }
    </script>
@endsection
