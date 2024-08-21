<div id="modalDoc" wire:ignore
    class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
    <!-- Modal -->
    <div class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-md30"
        role="dialog" id="modalDoc">
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-center border-b-fuchsia-800 border-b">
            <!-- Modal title -->
            <h1 class="dark:text-white">Nueva Documentación</h1>
            <button
                class="ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                aria-label="close" onclick="closeModalDoc()">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                    <path
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </button>
        </header>
        <!-- Modal body -->
        <div class="-mt-11 mb-6">
            <!-- Modal description -->
            <form role="form" action="" method="post" id="frmDocument"
                class="f1 px-4 my-32 max-w-3xl mx-auto space-y-6">
                <div
                    class="mt-11 border-gray-50-s container px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9 ">
                    <div class="flex space-x-4">

                        <div class="w-full">
                            <label id="labelOperationDocument" class="text-gray-700 dark:text-gray-400">Nuevo
                                Número</label>

                            <input
                                class="w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                type="text" id="operationDocument" name="operationDocument"
                                wire:model.defer="operationDocument" />
                        </div>

                    </div>
                    <div class="flex space-x-4">

                        <div class="w-full">
                            <label id="" class="text-gray-700 dark:text-gray-400">Documento</label>

                            <input
                                class="w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                type="file" id="fileDocument" name="fileDocument" wire:model.defer="fileDocument"
                                onchange="upDocument()" />
                        </div>

                    </div>
                    <div class="flex space-x-4">

                        <div class="w-full">
                            <label id="labelDateDocument" class="text-gray-700 dark:text-gray-400">Nueva
                                Fecha</label>

                            <input
                                class="w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                type="text" id="dateDocument" name="dateDocument" readonly
                                wire:model.defer="dateDocument" onchange="fechasSet('dateDocument')" />
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <div wire:ignore
            class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
            <button onclick="closeModalDoc()"
                class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                Cancel
            </button>
            <button id="" wire:click="updateDocumentation"
                class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Accept
            </button>
        </div>
    </div>
</div>
