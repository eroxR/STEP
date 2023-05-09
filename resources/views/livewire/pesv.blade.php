<div x-data="accordion">
    {{-- The Master doesn't talk, he acts. --}}

    <div class="py-12 mb-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="w-full max-w-lg mx-auto space-y-4 dark:bg-gray-800">
                    <!-- Accordion 1 -->
                    <div
                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-fuchsia-800">
                        <!-- Head -->
                        <div @click="selected != 1 ? selected = 1 : selected =null"
                            class="flex justify-between items-center shadow-md px-2 border-b-fuchsia-800">
                            <h1 class="font-medium text-gray-800 py-2 dark:text-white ">Contexto de la organización</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 1 ? 'rotate-180' : ''"
                                class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <!-- Content -->
                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:bg-gray-800 dark:text-white"
                            x-ref="tab1" :style="selected == 1 ? 'max-height:450%;' : ''">

                            <div class=" p-2 text-justify">
                                <!--actual component start-->
                                <div x-data="contexto()">
                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                                :class="activeTab === index ? 'text-purple-800 roundedx5 border-ourple-50-s' :
                                                    ''"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div
                                        class="w-80 bg-white p-16 text-center mx-auto  dark:text-white dark:bg-gray-800">
                                        <div x-show="activeTab===0">Content Contexto DOFA

                                            <div class="grid grid-cols-2 gap-2">
                                                <div id="1" class="">
                                                    <div id="2" class="bg-gray-800 max-w-sm w-full lg:max-w-full lg:flex">
                                                        <div id="3"
                                                            class="dark:bg-gray-800 border-ourple-50-s roundedx5 border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                                            <div class="mb-8">
                                                                <div
                                                                    class="text-gray-900 font-bold text-xl mb-2 dark:text-white">
                                                                    Fortalezas
                                                                </div>
                                                                <div
                                                                    class="w-full overflow-hidden rounded-lg shadow-xs mt-4">
                                                                    <div class="w-full overflow-x-auto">
                                                                        <table class="w-full ">
                                                                            <thead>
                                                                                <tr
                                                                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                                                                    <th class="px-4 py-3">Codigo</th>
                                                                                    <th class="px-4 py-3">Capacidad</th>
                                                                                    <th class="px-4 py-3">Fortaleza</th>
                                                                                    <th class="px-4 py-3">Accion</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody
                                                                                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                                                                                @foreach ($dofasF as $dofaF)
                                                                                    <tr
                                                                                        class="text-gray-700 dark:text-gray-400">
                                                                                        <td class="px-4 py-3 text-sm">
                                                                                            {{ $dofaF->codigo }}
                                                                                        </td>
                                                                                        <td class="px-4 py-3 text-xs">
                                                                                            {{ $dofaF->capacidad_factor }}
                                                                                        </td>
                                                                                        <td class="px-4 py-3 text-sm">
                                                                                            {{ $dofaF->contexto }}
                                                                                        </td>
                                                                                        <td class="px-4 py-3 text-sm">

                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="max-w-sm w-full lg:max-w-full lg:flex">
                                                        <div
                                                            class="dark:bg-gray-800 border-ourple-50-s roundedx5 border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                                            <div class="mb-8">
                                                                <div
                                                                    class="text-gray-900 font-bold text-xl mb-2 dark:text-white">
                                                                    Debilidades
                                                                </div>
                                                                <div
                                                                    class="w-full overflow-hidden rounded-lg shadow-xs mt-4">
                                                                    <div class="w-full overflow-x-auto">
                                                                        <table class="w-full ">
                                                                            <thead>
                                                                                <tr
                                                                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                                                                    <th class="px-4 py-3">Codigo</th>
                                                                                    <th class="px-4 py-3">Capacidad</th>
                                                                                    <th class="px-4 py-3">Debilidad</th>
                                                                                    <th class="px-4 py-3">Accion</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody
                                                                                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                                                                @foreach ($dofasD as $dofaD)
                                                                                    <tr
                                                                                        class="text-gray-700 dark:text-gray-400">
                                                                                        <td class="px-4 py-3 text-sm">
                                                                                            {{ $dofaD->codigo }}
                                                                                        </td>
                                                                                        <td class="px-4 py-3 text-xs">
                                                                                            {{ $dofaD->capacidad_factor }}
                                                                                        </td>
                                                                                        <td class="px-4 py-3 text-sm">
                                                                                            {{ $dofaD->contexto }}
                                                                                        </td>
                                                                                        <td class="px-4 py-3 text-sm">

                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pb-3">
                                                    <div class="max-w-sm w-full lg:max-w-full lg:flex">
                                                        <div
                                                            class="dark:bg-gray-800 border-ourple-50-s roundedx5 border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                                            <div class="mb-8">
                                                                <div
                                                                    class="text-gray-900 font-bold text-xl mb-2 dark:text-white">
                                                                    Oportunidades
                                                                </div>
                                                                <div
                                                                    class="w-full overflow-hidden rounded-lg shadow-xs mt-4">
                                                                    <div class="w-full overflow-x-auto">
                                                                        <table class="w-full ">
                                                                            <thead>
                                                                                <tr
                                                                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                                                                    <th class="px-4 py-3">Codigo</th>
                                                                                    <th class="px-4 py-3">factor
                                                                                    </th>
                                                                                    <th class="px-4 py-3">Oportunidad
                                                                                    </th>
                                                                                    <th class="px-4 py-3">Accion</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody
                                                                                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                                                                @foreach ($dofasO as $dofaO)
                                                                                    <tr
                                                                                        class="text-gray-700 dark:text-gray-400">
                                                                                        <td class="px-4 py-3 text-sm">
                                                                                            {{ $dofaO->codigo }}
                                                                                        </td>
                                                                                        <td class="px-4 py-3 text-xs">
                                                                                            {{ $dofaO->capacidad_factor }}
                                                                                        </td>
                                                                                        <td class="px-4 py-3 text-sm">
                                                                                            {{ $dofaO->contexto }}
                                                                                        </td>
                                                                                        <td class="px-4 py-3 text-sm">

                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pb-3">
                                                    <div class="max-w-sm w-full lg:max-w-full lg:flex">
                                                        <div
                                                            class="dark:bg-gray-800 border-ourple-50-s roundedx5 border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                                            <div class="mb-8">
                                                                <div
                                                                    class="text-gray-900 font-bold text-xl mb-2 dark:text-white">
                                                                    Amenazas
                                                                </div>
                                                                <div
                                                                    class="w-full overflow-hidden rounded-lg shadow-xs mt-4">
                                                                    <div class="w-full overflow-x-auto">
                                                                        <table class="w-full ">
                                                                            <thead>
                                                                                <tr
                                                                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                                                                    <th class="px-4 py-3">Codigo</th>
                                                                                    <th class="px-4 py-3">Factor
                                                                                    </th>
                                                                                    <th class="px-4 py-3">Amenaza
                                                                                    </th>
                                                                                    <th class="px-4 py-3">Accion</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody
                                                                                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                                                                @foreach ($dofasA as $dofaA)
                                                                                    <tr
                                                                                        class="text-gray-700 dark:text-gray-400">
                                                                                        <td class="px-4 py-3 text-sm">
                                                                                            {{ $dofaA->codigo }}
                                                                                        </td>
                                                                                        <td class="px-4 py-3 text-xs">
                                                                                            {{ $dofaA->capacidad_factor }}
                                                                                        </td>
                                                                                        <td class="px-4 py-3 text-sm">
                                                                                            {{ $dofaA->contexto }}
                                                                                        </td>
                                                                                        <td class="px-4 py-3 text-sm">

                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div x-show="activeTab===1">Content Partes Interesadas</div>
                                        <div x-show="activeTab===2">Content Estrategias</div>
                                        <div x-show="activeTab===3">Content Objetivos</div>
                                        <div x-show="activeTab===4">Content Plan de Acción</div>
                                        <div x-show="activeTab===5">Content Procesos</div>
                                        <div x-show="activeTab===6">Content Lista Entrada Revisión por la Dirección
                                        </div>
                                    </div>

                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-3 px-4 rounded transition"
                                                :class="activeTab === index ?
                                                    'bg-green-500 text-purple-800 border-ourple-50-s' : ' text-gray-500'"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div class="flex gap-4 justify-center border-t p-4">
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab--" x-show="activeTab>0">Back</button>
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab++" x-show="activeTab<tabs.length-1">Next</button>
                                    </div>
                                </div>
                                <!--actual component end-->
                            </div>

                        </div>
                    </div>
                    <!-- Accordion 2 -->
                    <div
                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-acuamarine-800">
                        <!-- Head -->
                        <div @click="selected != 2 ? selected = 2 : selected =null"
                            class="flex justify-between items-center shadow-md px-2 border-b-acuamarine-800">
                            <h1 class="font-medium text-gray-800 py-2 dark:text-white">Planificación Y Liderazgo</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 2 ? 'rotate-180' : ''"
                                class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <!-- Content -->
                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:text-white dark:bg-gray-800"
                            x-ref="tab2"
                            :style="selected == 2 ? 'max-height: ' + $refs.tab2.scrollHeight + 'px;' : ''">

                            <div class=" p-2 text-justify">
                                <!--actual component start-->
                                <div x-data="planificacion()">
                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                                :class="activeTab === index ?
                                                    'text-acuamarine-800 roundedx5 border-acuamarine-50-s' :
                                                    ''"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div
                                        class="w-80 bg-white p-16 text-center mx-auto  dark:text-white dark:bg-gray-800">
                                        <div x-show="activeTab===0">Content Listado de Riesgos</div>
                                        <div x-show="activeTab===1">Content Matriz de Riesgos</div>
                                        <div x-show="activeTab===2">Content Priorización de Riesgos</div>
                                        <div x-show="activeTab===3">Content Informe de Riesgos</div>
                                        <div x-show="activeTab===4">Content Informe de Riesgos Inherentes</div>
                                        <div x-show="activeTab===5">Content Informe de Riesgos Residual</div>
                                        <div x-show="activeTab===6">Content Planificación de cambios</div>
                                        <div x-show="activeTab===7">Content Conocimiento de la organización</div>
                                        <div x-show="activeTab===8">Content Politicas</div>
                                    </div>

                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-3 px-4 rounded transition"
                                                :class="activeTab === index ?
                                                    'bg-green-500 text-acuamarine-800 roundedx5 border-acuamarine-50-s' :
                                                    ' text-gray-500'"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div class="flex gap-4 justify-center border-t p-4">
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab--" x-show="activeTab>0">Back</button>
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab++" x-show="activeTab<tabs.length-1">Next</button>
                                    </div>
                                </div>
                                <!--actual component end-->
                            </div>

                        </div>
                    </div>
                    <!-- Accordion 3 -->
                    <div
                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-green-800">
                        <!-- Head -->
                        <div @click="selected != 3 ? selected = 3 : selected =null"
                            class="flex justify-between items-center shadow-md px-2 border-b-green-800">
                            <h1 class="font-medium text-gray-800 py-2 dark:text-white">Apoyo</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 3 ? 'rotate-180' : ''"
                                class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <!-- Content -->
                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:text-white dark:bg-gray-800"
                            x-ref="tab3"
                            :style="selected == 3 ? 'max-height: ' + $refs.tab3.scrollHeight + 'px;' : ''">

                            <div class=" p-2 text-justify">
                                <!--actual component start-->
                                <div x-data="operaciones()">
                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                                :class="activeTab === index ? 'text-green-800 roundedx5 border-green-50-s' :
                                                    ''"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div
                                        class="w-80 bg-white p-16 text-center mx-auto  dark:text-white dark:bg-gray-800">
                                        <div x-show="activeTab===0">Content Selección Proveedores</div>
                                        <div x-show="activeTab===1">Content Seguimiento Desempeño Proveedores</div>
                                        <div x-show="activeTab===2">Content Evaluación - Reevaluación Proveedores</div>
                                        <div x-show="activeTab===3">Content Resultados Ejecuciones evaluaciones</div>
                                    </div>

                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-3 px-4 rounded transition"
                                                :class="activeTab === index ?
                                                    'bg-green-500 text-green-800 roundedx5 border-green-50-s' :
                                                    ' text-gray-500'"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div class="flex gap-4 justify-center border-t p-4">
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab--" x-show="activeTab>0">Back</button>
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab++" x-show="activeTab<tabs.length-1">Next</button>
                                    </div>
                                </div>
                                <!--actual component end-->
                            </div>

                        </div>
                    </div>
                    <!-- Accordion 4 -->
                    <div
                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-orange-800">
                        <!-- Head -->
                        <div @click="selected != 4 ? selected = 4 : selected =null"
                            class="flex justify-between items-center shadow-md px-2 border-b-orange-800">
                            <h1 class="font-medium text-gray-800 py-2 dark:text-white">Operaciones</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 4 ? 'rotate-180' : ''"
                                class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <!-- Content -->
                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:text-white dark:bg-gray-800"
                            x-ref="tab4"
                            :style="selected == 4 ? 'max-height: ' + $refs.tab4.scrollHeight + 'px;' : ''">

                            <div class=" p-2 text-justify">
                                <!--actual component start-->
                                <div x-data="operaciones()">
                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                                :class="activeTab === index ? 'text-orange-800 roundedx5 border-orange-50-s' :
                                                    ''"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div
                                        class="w-80 bg-white p-16 text-center mx-auto  dark:text-white dark:bg-gray-800">
                                        <div x-show="activeTab===0">Content 1</div>
                                        <div x-show="activeTab===1">Content 2</div>
                                        <div x-show="activeTab===2">Content 3</div>
                                        <div x-show="activeTab===3">Content 4</div>
                                        <div x-show="activeTab===4">Content 5</div>
                                        <div x-show="activeTab===5">Content 6</div>
                                        <div x-show="activeTab===6">Content 7</div>
                                        <div x-show="activeTab===7">Content 8</div>
                                        <div x-show="activeTab===8">Content 9</div>
                                    </div>

                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-3 px-4 rounded transition"
                                                :class="activeTab === index ?
                                                    'bg-green-500 text-orange-800 roundedx5 border-orange-50-s' :
                                                    ' text-gray-500'"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div class="flex gap-4 justify-center border-t p-4">
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab--" x-show="activeTab>0">Back</button>
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab++" x-show="activeTab<tabs.length-1">Next</button>
                                    </div>
                                </div>
                                <!--actual component end-->
                            </div>

                        </div>
                    </div>
                    <!-- Accordion 5 -->
                    <div
                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-yellow-800">
                        <!-- Head -->
                        <div @click="selected != 5 ? selected = 5 : selected =null"
                            class="flex justify-between items-center shadow-md px-2 border-b-yellow-800">
                            <h1 class="font-medium text-gray-800 py-2 dark:text-white">Evaluación y Desempeño</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 5 ? 'rotate-180' : ''"
                                class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <!-- Content -->
                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:text-white dark:bg-gray-800"
                            x-ref="tab5"
                            :style="selected == 5 ? 'max-height: ' + $refs.tab5.scrollHeight + 'px;' : ''">

                            <div class=" p-2 text-justify">
                                <!--actual component start-->
                                <div x-data="evaluacionDesempeño()">
                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                                :class="activeTab === index ? 'text-yellow-800 roundedx5 border-yellow-50-s' :
                                                    ''"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div
                                        class="w-80 bg-white p-16 text-center mx-auto  dark:text-white dark:bg-gray-800">
                                        <div x-show="activeTab===0">Content Auditoria</div>
                                        <div x-show="activeTab===1">Content Ejecutar Auditoria</div>
                                        <div x-show="activeTab===2">Content Conclusiones de la Auditoría</div>
                                        <div x-show="activeTab===3">Content Revisión por la Dirección</div>
                                        <div x-show="activeTab===4">Content Gestión de Indicadores</div>
                                    </div>

                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-3 px-4 rounded transition"
                                                :class="activeTab === index ?
                                                    'bg-green-500 text-yellow-800 roundedx5 border-yellow-50-s' :
                                                    ' text-gray-500'"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div class="flex gap-4 justify-center border-t p-4">
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab--" x-show="activeTab>0">Back</button>
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab++" x-show="activeTab<tabs.length-1">Next</button>
                                    </div>
                                </div>
                                <!--actual component end-->
                            </div>

                        </div>
                    </div>
                    <!-- Accordion 6 -->
                    <div
                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-blue-800">
                        <!-- Head -->
                        <div @click="selected != 6 ? selected = 6 : selected =null"
                            class="flex justify-between items-center shadow-md px-2 border-b-blue-800">
                            <h1 class="font-medium text-gray-800 py-2 dark:text-white">Mejora</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 6 ? 'rotate-180' : ''"
                                class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <!-- Content -->
                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:text-white dark:bg-gray-800"
                            x-ref="tab6"
                            :style="selected == 6 ? 'max-height: ' + $refs.tab6.scrollHeight + 'px;' : ''">

                            <div class=" p-2 text-justify">
                                <!--actual component start-->
                                <div x-data="mejora()">
                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                                :class="activeTab === index ? 'text-blue-800 roundedx5 border-blue-50-s' :
                                                    ''"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div
                                        class="w-80 bg-white p-16 text-center mx-auto  dark:text-white dark:bg-gray-800">
                                        <div x-show="activeTab===0">Content Mejoramiento</div>
                                        <div x-show="activeTab===1">Content Evaluación Clima Organizacional</div>
                                        <div x-show="activeTab===2">Content Resultados Ejecución Evaluación Clima
                                            Organizacional</div>
                                    </div>

                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-3 px-4 rounded transition"
                                                :class="activeTab === index ?
                                                    'bg-green-500 text-blue-800 roundedx5 border-blue-50-s' :
                                                    ' text-gray-500'"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div class="flex gap-4 justify-center border-t p-4">
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab--" x-show="activeTab>0">Back</button>
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab++" x-show="activeTab<tabs.length-1">Next</button>
                                    </div>
                                </div>
                                <!--actual component end-->
                            </div>

                        </div>
                    </div>
                    <!-- Accordion 7 -->
                    <div
                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-pink-800">
                        <!-- Head -->
                        <div @click="selected != 7 ? selected = 7 : selected =null"
                            class="flex justify-between items-center shadow-md px-2 border-b-pink-800">
                            <h1 class="font-medium text-gray-800 py-2 dark:text-white">Gestión</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 7 ? 'rotate-180' : ''"
                                class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <!-- Content -->
                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:text-white dark:bg-gray-800"
                            x-ref="tab7"
                            :style="selected == 7 ? 'max-height: ' + $refs.tab7.scrollHeight + 'px;' : ''">

                            <div class=" p-2 text-justify">
                                <!--actual component start-->
                                <div x-data="gestion()">
                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                                :class="activeTab === index ? 'text-pink-800 roundedx5 border-pink-50-s' :
                                                    ''"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div
                                        class="w-80 bg-white p-16 text-center mx-auto  dark:text-white dark:bg-gray-800">
                                        <div x-show="activeTab===0">Content Rendición de Cuentas</div>
                                        <div x-show="activeTab===1">Content Cuadro de Mando Integral</div>
                                        <div x-show="activeTab===2">Content Captura PQR</div>
                                        <div x-show="activeTab===3">Content Planes Calidad</div>
                                        <div x-show="activeTab===4">Content Capacitación de Personal</div>
                                        <div x-show="activeTab===5">Content Evaluación Capacitaciones</div>
                                        <div x-show="activeTab===6">Content Resultados Ejecuciones Evaluaciones</div>
                                        <div x-show="activeTab===7">Content Matriz de Requisitos Legales</div>
                                        <div x-show="activeTab===8">Content Programas Calidad</div>
                                    </div>

                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-3 px-4 rounded transition"
                                                :class="activeTab === index ?
                                                    'bg-green-500 text-pink-800 roundedx5 border-pink-50-s' :
                                                    ' text-gray-500'"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div class="flex gap-4 justify-center border-t p-4">
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab--" x-show="activeTab>0">Back</button>
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab++" x-show="activeTab<tabs.length-1">Next</button>
                                    </div>
                                </div>
                                <!--actual component end-->
                            </div>

                        </div>
                    </div>
                    <!-- Accordion 8 -->
                    <div
                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-red-800">
                        <!-- Head -->
                        <div @click="selected != 8 ? selected = 8 : selected =null"
                            class="flex justify-between items-center shadow-md px-2 border-b-red-800">
                            <h1 class="font-medium text-gray-800 py-2 dark:text-white">Contexto de la Organización -
                                Recursos</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 8 ? 'rotate-180' : ''"
                                class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <!-- Content -->
                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:text-white dark:bg-gray-800"
                            x-ref="tab8"
                            :style="selected == 8 ? 'max-height: ' + $refs.tab8.scrollHeight + 'px;' : ''">


                            <div class=" p-2 text-justify">
                                <!--actual component start-->
                                <div x-data="recursos()">
                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                                :class="activeTab === index ? 'text-red-800 roundedx5 border-red-50-s' :
                                                    ''"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div
                                        class="w-80 bg-white p-16 text-center mx-auto  dark:text-white dark:bg-gray-800">
                                        <div x-show="activeTab===0">Content Evaluación Inicial</div>
                                        <div x-show="activeTab===1">Content Resultados Ejecuciones evaluaciones
                                            iniciales</div>
                                        <div x-show="activeTab===2">Content Plan Anual de Trabajo</div>
                                        <div x-show="activeTab===3">Content Planes SG-SST</div>
                                    </div>

                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-3 px-4 rounded transition"
                                                :class="activeTab === index ?
                                                    'bg-green-500 text-red-800 roundedx5 border-red-50-s' :
                                                    ' text-gray-500'"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div class="flex gap-4 justify-center border-t p-4">
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab--" x-show="activeTab>0">Back</button>
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab++" x-show="activeTab<tabs.length-1">Next</button>
                                    </div>
                                </div>
                                <!--actual component end-->
                            </div>

                        </div>
                    </div>
                    <!-- Accordion 9 -->
                    <div
                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-coffee-800">
                        <!-- Head -->
                        <div @click="selected != 9 ? selected = 9 : selected =null"
                            class="flex justify-between items-center shadow-md px-2 border-b-coffee-800">
                            <h1 class="font-medium text-gray-800 py-2 dark:text-white">Planificación - Gestión Integral
                                - Gestión de Peligros y Riesgos</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 9 ? 'rotate-180' : ''"
                                class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <!-- Content -->
                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:text-white dark:bg-gray-800"
                            x-ref="tab9"
                            :style="selected == 9 ? 'max-height: ' + $refs.tab9.scrollHeight + 'px;' : ''">

                            <div class=" p-2 text-justify">
                                <!--actual component start-->
                                <div x-data="peligrosriesgos()">
                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                                :class="activeTab === index ? 'text-coffee-800 roundedx5 border-coffee-50-s' :
                                                    ''"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div
                                        class="w-80 bg-white p-16 text-center mx-auto  dark:text-white dark:bg-gray-800">
                                        <div x-show="activeTab===0">Content Listado de Peligros y Riesgos</div>
                                        <div x-show="activeTab===1">Content Matriz de Peligros y Riesgos</div>
                                        <div x-show="activeTab===2">Content Priorización de Peligros y Riesgos</div>
                                        <div x-show="activeTab===3">Content Informe de Peligros y Riesgos</div>
                                        <div x-show="activeTab===3">Content Evaluación de Inspecciones</div>
                                        <div x-show="activeTab===3">Content Resultados Ejecuciones Evaluaciones de
                                            Inspecciones</div>
                                        <div x-show="activeTab===3">Content Elementos de Proteccíon</div>
                                        <div x-show="activeTab===3">Content Elementos por Empleado</div>
                                        <div x-show="activeTab===3">Content Informe Individual</div>
                                        <div x-show="activeTab===3">Content Informe Matricial</div>
                                        <div x-show="activeTab===3">Content Lista entrada revisión por la dirección
                                        </div>
                                    </div>

                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-3 px-4 rounded transition"
                                                :class="activeTab === index ?
                                                    'bg-green-500 text-coffee-800 roundedx5 border-coffee-50-s' :
                                                    ' text-gray-500'"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div class="flex gap-4 justify-center border-t p-4">
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab--" x-show="activeTab>0">Back</button>
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab++" x-show="activeTab<tabs.length-1">Next</button>
                                    </div>
                                </div>
                                <!--actual component end-->
                            </div>

                        </div>
                    </div>
                    <!-- Accordion 10 -->
                    <div
                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-golden-800">
                        <!-- Head -->
                        <div @click="selected != 10 ? selected = 10 : selected =null"
                            class="flex justify-between items-center shadow-md px-2 border-b-golden-800">
                            <h1 class="font-medium text-gray-800 py-2 dark:text-white">Operaciones - Gestión Integral -
                                Gestión de Salud</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 10 ? 'rotate-180' : ''"
                                class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <!-- Content -->
                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:text-white dark:bg-gray-800"
                            x-ref="tab10"
                            :style="selected == 10 ? 'max-height: ' + $refs.tab10.scrollHeight + 'px;' : ''">


                            <div class=" p-2 text-justify">
                                <!--actual component start-->
                                <div x-data="gestionsalud()">
                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                                :class="activeTab === index ? 'text-golden-800 roundedx5 border-golden-50-s' :
                                                    ''"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div
                                        class="w-80 bg-white p-16 text-center mx-auto  dark:text-white dark:bg-gray-800">
                                        <div x-show="activeTab===0">Content Condiciones de Salud</div>
                                        <div x-show="activeTab===1">Content Perfil Sociodem</div>
                                        <div x-show="activeTab===2">Content Exportar</div>
                                        <div x-show="activeTab===3">Content Evaluaciones Medicas</div>
                                        <div x-show="activeTab===4">Content Diligenciar Resultados</div>
                                        <div x-show="activeTab===5">Content Historico Resultados</div>
                                        <div x-show="activeTab===6">Content Informe</div>
                                        <div x-show="activeTab===7">Content Ausentismo</div>
                                        <div x-show="activeTab===8">Content Informe Individual</div>
                                        <div x-show="activeTab===9">Content Informe Matricial</div>
                                    </div>

                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-3 px-4 rounded transition"
                                                :class="activeTab === index ?
                                                    'bg-green-500 text-golden-800 roundedx5 border-golden-50-s' :
                                                    ' text-gray-500'"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div class="flex gap-4 justify-center border-t p-4">
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab--" x-show="activeTab>0">Back</button>
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab++" x-show="activeTab<tabs.length-1">Next</button>
                                    </div>
                                </div>
                                <!--actual component end-->
                            </div>

                        </div>
                    </div>
                    <!-- Accordion 11 -->
                    <div
                        class="w-full bg-white shadow-md rounded-md dark:bg-gray-800 dark:text-white border-b-vichegreen-800">
                        <!-- Head -->
                        <div @click="selected != 11 ? selected = 11 : selected =null"
                            class="flex justify-between items-center shadow-md px-2 border-b-vichegreen-800">
                            <h1 class="font-medium text-gray-800 py-2 dark:text-white">Evaluación y Desempeño -
                                Verificación del SG SST</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 11 ? 'rotate-180' : ''"
                                class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <!-- Content -->
                        <div class="max-h-0 overflow-hidden transition-all duration-300 dark:text-white dark:bg-gray-800"
                            x-ref="tab11"
                            :style="selected == 11 ? 'max-height: ' + $refs.tab11.scrollHeight + 'px;' : ''">


                            <div class=" p-2 text-justify">
                                <!--actual component start-->
                                <div x-data="SST()">
                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                                :class="activeTab === index ?
                                                    'text-vichegreen-800 roundedx5 border-vichegreen-50-s' :
                                                    ''"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div
                                        class="w-80 bg-white p-16 text-center mx-auto  dark:text-white dark:bg-gray-800">
                                        <div x-show="activeTab===0">Content Programas SG-SST</div>
                                        <div x-show="activeTab===1">Content Reportes</div>
                                        <div x-show="activeTab===2">Content Informe Matricial</div>
                                        <div x-show="activeTab===3">Content Informe Detallado</div>
                                        <div x-show="activeTab===4">Content Lista Entrada Revisión por la Dirección
                                        </div>
                                        <div x-show="activeTab===5">Content Matriz de Requisitos Legales</div>
                                    </div>

                                    <ul class="flex justify-center items-center my-4">
                                        <template x-for="(tab, index) in tabs" :key="index">
                                            <li class="cursor-pointer py-3 px-4 rounded transition"
                                                :class="activeTab === index ?
                                                    'bg-green-500 text-vichegreen-800 roundedx5 border-vichegreen-50-s' :
                                                    ' text-gray-500'"
                                                @click="activeTab = index" x-text="tab"></li>
                                        </template>
                                    </ul>

                                    <div class="flex gap-4 justify-center border-t p-4">
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab--" x-show="activeTab>0">Back</button>
                                        <button
                                            class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                                            @click="activeTab++" x-show="activeTab<tabs.length-1">Next</button>
                                    </div>
                                </div>
                                <!--actual component end-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function accordion() {
            return {
                selected: null
            }
        }

        function contexto() {
            return {
                activeTab: 0,
                tabs: [
                    "Contexto DOFA",
                    "Partes Interesadas",
                    "Estrategias",
                    "Objetivos",
                    "Plan de Acción",
                    "Procesos",
                    "Lista Entrada Revisión por la Dirección",
                ]
            };
        };

        function planificacion() {
            return {
                activeTab: 0,
                tabs: [
                    "Listado de Riesgos",
                    "Matriz de Riesgos",
                    "Priorización de Riesgos",
                    "Informe de Riesgos",
                    "Informe de Riesgos Inherentes",
                    "Informe de Riesgos Residual",
                    "Planificación de cambios",
                    "Conocimiento de la organización",
                    "Politicas",
                ]
            };
        };

        function apoyo() {
            return {
                activeTab: 0,
                tabs: [
                    "Fichas Vehiculos",
                    "Fichas Maquinaria y Equipo",
                    "Fichas Equipo Computo",
                    "Fichas Locativas",
                    "Informe individual",
                    "Informe detallado",
                    "Informe detallado encabezado",
                    "Solicitud de Operaciones",
                    "Listado de Vencimientos",
                    "Registro de Operación",
                    "Informe Detallado",
                    "Ejecución Evaluación Desempeño",
                ]
            };
        };

        function operaciones() {
            return {
                activeTab: 0,
                tabs: [
                    "Selección Proveedores",
                    "Seguimiento Desempeño Proveedores",
                    "Evaluación - Reevaluación Proveedores",
                    "Resultados Ejecuciones evaluaciones",
                ]
            };
        };

        function evaluacionDesempeño() {
            return {
                activeTab: 0,
                tabs: [
                    "Auditoria",
                    "Ejecutar Auditoria",
                    "Conclusiones de la Auditoría",
                    "Revisión por la Dirección",
                    "Gestión de Indicadores",
                ]
            };
        };

        function mejora() {
            return {
                activeTab: 0,
                tabs: [
                    "Mejoramiento",
                    "Evaluación Clima Organizacional",
                    "Resultados Ejecución Evaluación Clima Organizacional",
                ]
            };
        };

        function gestion() {
            return {
                activeTab: 0,
                tabs: [
                    "Rendición de Cuentas",
                    "Cuadro de Mando Integral",
                    "Captura PQR",
                    "Planes Calidad",
                    "Capacitación de Personal",
                    "Evaluación Capacitaciones",
                    "Resultados Ejecuciones Evaluaciones",
                    "Matriz de Requisitos Legales",
                    "Programas Calidad",
                ]
            };
        };

        function recursos() {
            return {
                activeTab: 0,
                tabs: [
                    "Evaluación Inicial",
                    "Resultados Ejecuciones evaluaciones iniciales",
                    "Plan Anual de Trabajo",
                    "Planes SG-SST",
                ]
            };
        };

        function peligrosriesgos() {
            return {
                activeTab: 0,
                tabs: [
                    "Listado de Peligros y Riesgos",
                    "Matriz de Peligros y Riesgos",
                    "Priorización de Peligros y Riesgos",
                    "Informe de Peligros y Riesgos",
                    "Evaluación de Inspecciones",
                    "Resultados Ejecuciones Evaluaciones de Inspecciones",
                    "Elementos de Proteccíon",
                    "Elementos por Empleado",
                    "Informe Individual",
                    "Informe Matricial",
                    "Lista entrada revisión por la dirección",
                ]
            };
        };

        function gestionsalud() {
            return {
                activeTab: 0,
                tabs: [
                    "Condiciones de Salud",
                    "Perfil Sociodem",
                    "Exportar",
                    "Evaluaciones Medicas",
                    "Diligenciar Resultados",
                    "Historico Resultados",
                    "Informe",
                    "Ausentismo",
                    "Informe Individual",
                    "Informe Matricial",
                ]
            };
        };

        function SST() {
            return {
                activeTab: 0,
                tabs: [
                    "Programas SG-SST",
                    "Reportes",
                    "Informe Matricial",
                    "Informe Detallado",
                    "Lista Entrada Revisión por la Dirección",
                    "Matriz de Requisitos Legales",
                ]
            };
        };
    </script>



</div>

@section('scripts')
@endsection
