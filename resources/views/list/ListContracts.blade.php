<x-app-layout>
    <div class="py-12 mb-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="roundedx1 mt5 mr3 fixed inset-y-0 flex items-end bg-black bg-opacity-50 sm:items-center">
                <!-- Modal -->
                <div class="w20 h-4-7 mt-12 mr-4 ml-4 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg overflow-x-hidden overflow-y-auto"
                    role="dialog">
                    <header class="flex justify-center border-b-fuchsia-800 border-b">
                        <!-- Modal title -->
                        {{ __('List of Contracts') }}
                    </header>
                    <ul>
                        <li class="id hover:bg-orange-500 hover:text-white border-b">
                            <a href="">
                                N° 1 (ocasionales)
                            </a>

                            <div
                                class="descrip absolute rounded-lg top-0 p1-6 h91 w77 mt3-5 ml18-6 bg-white dark:bg-gray-800 hidden">
                                <header class="flex justify-center">
                                    <!-- Modal title -->
                                    <h1 class="text-black dark:text-white text-4xl1">Estado</h1>
                                </header>
                                <!-- Modal body -->
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                                    <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                                    <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                                    <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                                    <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                                    <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                                    <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                                    <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                                    <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                                    <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                                    <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                                    <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                                    <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                                    <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                                    <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                                    <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                                    <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                                    <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                                    <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                                    <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                                    <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                                    <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                                    <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                                    <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                                    <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                                    <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                                    <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                                    <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                                    <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                                    <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                                    <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                                    <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                                    <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                                    <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                                    <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                                    <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                                    <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                                    <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                                    <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                                    <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                                    <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                                    <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                                    <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                                    <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                                </div>
                            </div>

                        </li>

                    </ul>

                </div>

                <div class="w-9-12 h-4-7 mt-12 mr-4 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg  overflow-x-hidden overflow-y-auto"
                    role="dialog" id="modal">

                    <header class="flex justify-center ">
                        <!-- Modal title -->
                        <h1 class="text-black dark:text-white text-4xl1">Estado </h1>

                    </header>
                    <!-- Modal body -->
                    <div class="grid grid-cols-4 gap-4">
                        <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                        <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                        <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                        <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                        <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                        <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                        <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                        <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                        <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                        <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                        <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                        <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                        <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                        <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                        <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                        <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                        <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                        <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                        <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                        <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                        <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                        <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                        <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                        <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                        <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                        <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                        <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                        <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                        <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                        <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                        <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                        <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                        <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                        <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                        <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                        <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                        <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                        <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                        <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                        <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                        <div class="border-b text-black text80">aaaaaaaaaaaaaaaaaaaaaaa</div>
                        <div class="border-b text-black text80">bbbbbbbbbbbbbbbbbbbbb</div>
                        <div class="border-b text-black text80">ccccccccccccccccccccccc</div>
                        <div class="border-b text-black text80">ddddddddddddddddddddd</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
