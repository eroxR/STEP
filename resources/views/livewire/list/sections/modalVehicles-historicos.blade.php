<div id="modalHistoricos" wire:ignore.self
    class="hidden fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
    <!-- Modal -->
    <div class="w-9-9 h-4-7 mt-6 px-6 py-4  bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 overflow-x-hidden overflow-y-auto"
        role="dialog" id="modalHistoricos">
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-center border-b-fuchsia-800 border-b">
            <!-- Modal title -->
            <h1 class="dark:text-white">Historial de Documentos @if (!is_null($title))
                    {{ $title }}
                @endif
            </h1>
            <button onclick="closeModalHistorico()"
                class="ml-auto px-5 py-3 text-sm font-medium leading-5 rounded-lg sm:w-auto sm:px-4 sm:py-2 bg-red-600 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple text-white"
                aria-label="close">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                    <path
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </button>
        </header>
        <!-- Modal body -->
        <div class="scroll h-4-7 overflow-y-auto">


            <div class="mt-4 mb-6">
                <!-- Modal description -->
                <div class="f1 px-4 my-32 max-w-3xl mx-auto space-y-6">
                    <div
                        class="mt-11 border-gray-50-s container py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9 ">
                        @if (!is_null($Lists))

                            @if ($Lists->count())
                                <h1
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    Cantidad de Documentos: <strong style="color: red;">{{ $amount }}</strong>
                                </h1>
                                <br>
                                <table class="w-full">
                                    <thead>
                                        <tr
                                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                            <th class="pl-4 py-2">
                                                NOMBRE
                                            </th>
                                            <th class="px-3 py-2">
                                                DOCUMENTO
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                        @foreach ($Lists as $List)
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="px-2 py-1 text-sm">
                                                    {{ is_array($List) ? $List['document_name'] : $List->document_name }}
                                                </td>
                                                <td class="px-2 py-1">

                                                    @if ((is_array($List) ? $List['extension'] : $List->extension) == 'pdf')
                                                        <button id="documentPdf" class="icon-red"
                                                            onclick="documentPdf('{{ asset(is_array($List) ? $List['directory'] : $List->directory) }}','{{ is_array($List) ? $List['document_name'] : $List->document_name }}')"><i
                                                                class="fas fa-file-pdf"></i>
                                                        </button>
                                                    @elseif (
                                                        (is_array($List) ? $List['extension'] : $List->extension) == 'jpg' ||
                                                            (is_array($List) ? $List['extension'] : $List->extension) == 'png')
                                                        <button id="documentImage" class="icon-green"
                                                            onclick="documentImage('{{ asset(is_array($List) ? $List['directory'] : $List->directory) }}','{{ is_array($List) ? $List['document_name'] : $List->document_name }}')"><i
                                                                class="fas fa-images"></i>
                                                        </button>
                                                    @else
                                                        <i class="fas fa-exclamation-circle icon-red"></i> <br>
                                                        documento no legible
                                                    @endif

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            @else
                                <p class="rounded-3xl p-1 bg-red-600 dark:text-yellow-400 text-white">No se ha
                                    registrado información para mostrar</p>
                            @endif


                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div
            class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800 border-t-fuchsia-800">
        </div>
    </div>
</div>
