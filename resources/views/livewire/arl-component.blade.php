<div x-data="data()">
    <!-- Botones para abrir los modales -->
    <button @click="openModal('modal1')"
        class="buttons-crear font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white">
        Abrir Modal 1
    </button>
    <button @click="openModal('modal2')"
        class="buttons-crear font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white">
        Abrir Modal 2
    </button>
    <button @click="openModal('modal3')"
        class="buttons-crear font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white">
        Abrir Modal 3
    </button>

    <!-- Plantilla para los modales -->
    <template x-for="(isOpen, id) in modals" :key="id">
        <div x-show="isOpen" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
            wire:ignore>
            <div x-show="isOpen" x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0  transform translate-y-1/2"
                class="w-9-12 h-4-7 mt-6 px-6 py-4 bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 overflow-x-hidden overflow-y-auto"
                role="dialog">
                <header class="flex justify-between border-b-fuchsia-800 border-b">
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">
                        <!-- Título dinámico del modal -->
                        <span x-text="'Modal ' + id"></span>
                    </p>
                    <button @click="closeModal(id)"
                        class="text-sm bg-red-600 rounded-lg text-white px-2 py-1">
                        Cerrar
                    </button>
                </header>
                <div class="mt-4 mb-6">
                    <!-- Contenido dinámico del modal -->
                    <p x-text="'Contenido del ' + id"></p>
                </div>
                <div class="flex justify-end space-x-2">
                    <button @click="closeModal(id)"
                        class="bg-gray-300 text-gray-700 rounded-lg px-3 py-1">
                        Cancelar
                    </button>
                    <button class="bg-purple-600 text-white rounded-lg px-3 py-1"
                        @click="store">
                        Guardar
                    </button>
                </div>
            </div>
        </div>
    </template>
</div>