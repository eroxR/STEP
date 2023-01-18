<div>
    mantenimiento de contratos desde livewire

    <x-jet-danger-button @click="openModal">
        contract
    </x-jet-danger-button>


    <div x-cloak x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center
         ">
        <!-- Modal -->
        <div x-cloak x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2" x-on:click.away="closeModal"
            class="w-9-12 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 overflow-x-hidden overflow-y-auto"
            role="dialog" id="modal">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-center border-b-fuchsia-800 border-b">
                <!-- Modal title -->
                <p class="justify-start mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                    modal de contratos
                </p>
                <button
                    class="ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                    aria-label="close" x-on:click="closeModal">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="mt-4 mb-6">
                <!-- Modal description -->
                <div class="border-gray-50-s container px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9 ">

                  <form class="px-4 my-32 max-w-3xl mx-auto space-y-6">

                      <div class="flex space-x-4 justify-center">

                        <div class="w-1-3 ">

                          <select x-on:change="typeUser($el.value)"
                          class="block w-full py-2 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="0">Tipo de Usuario</option>
                            <option value="1">Aspirante</option>
                            <option value="2">Cliente</option>
                            <option value="3">Empleado</option>
                            <option value="4">Proveedor</option>
                          </select>

                        </div>
                      </div>

                      <div class="flex space-x-4">

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>
                      </div>

                      <div class="flex space-x-4">

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>
                      </div>  
                      
                      <div class="flex space-x-4">

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>
                      </div>

                      <div class="flex space-x-4">

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>
                      </div>

                      <div class="flex space-x-4">

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>
                      </div>

                      <div class="flex space-x-4">

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>
                      </div>

                      <div class="flex space-x-4">

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>

                        <div class="w-6-12">
                          <label class="text-gray-700 dark:text-gray-400">Name</label>

                          <input
                          class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          placeholder="Jane Doe" />
                        </div>
                      </div>
                  </form>
                </div>
            </div>
            <div
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
                <button x-on:click="closeModal"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
                <button
                    class="w-full px-5 py-3 text-sm font-medium leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Accept
                </button>
            </div>
      </div>
    </div>
