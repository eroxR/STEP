<div>

    <style>
        /* CHECKBOX TOGGLE SWITCH */
        /* @apply rules for documentation, these do not work as inline style */
        .toggle-checkbox:checked {
            @apply: right-0 border-green-400;
            right: 0;
            border-color: #68D391;
        }

        .toggle-checkbox:checked+.toggle-label {
            @apply: bg-green-400;
            background-color: #68D391;
        }
    </style>

    <div class="py-12 mb-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="justify-center flex">
                <h1 class="text-black dark:text-white text-4xl rounded-lg border-b-green-800 p-1">
                    {{ __('Manage Contracts') }}</h1>
            </div>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs mt-4">

            <div class=" overflow-x-auto" style="width:100%;" wire:ignore>

                <table id="example" class="stripe dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="pl-4 py-2" data-priority="0">{{ __('Actions') }}</th>
                            <th class="pl-4 py-2" data-priority="1">ID</th>
                            <th class="pl-4 py-2" data-priority="2">{{ __('contract number') }}</th>
                            <th class="pl-4 py-2" data-priority="3">{{ __('description typeContract') }}</th>
                            <th class="pl-4 py-2" data-priority="4">{{ __('state contract') }}</th>
                            <th class="pl-4 py-2" data-priority="5">{{ __('date start contract') }}</th>
                            <th class="pl-4 py-2" data-priority="6">{{ __('contract end date') }}</th>
                            <th class="pl-4 py-2" data-priority="7">{{ __('contracting name') }}</th>
                            <th class="pl-4 py-2" data-priority="8">{{ __('identification') }}</th>
                            <th class="pl-4 py-2" data-priority="9">{{ __('contract document') }}</th>
                            <th class="pl-4 py-2" data-priority="10">{{ __('expedition identificationcard') }}</th>
                            <th class="pl-4 py-2" data-priority="11">{{ __('contract value') }}</th>
                            <th class="pl-4 py-2" data-priority="12">{{ __('school name') }}</th>
                            <th class="pl-4 py-2" data-priority="13">{{ __('route trip contract') }}</th>
                            {{-- <th class="pl-4 py-2" data-priority="14">{{ __('contract_value') }}</th> --}}
                            <th class="pl-4 py-2" data-priority="14">{{ __('contracting phone') }}</th>
                            <th class="pl-4 py-2" data-priority="15">{{ __('contracting direction') }}</th>
                            <th class="pl-4 py-2" data-priority="16">{{ __('legal representative') }}</th>
                            <th class="pl-4 py-2" data-priority="17">
                                {{ __('legal representative expedition identificationcard') }}</th>
                            <th class="pl-4 py-2" data-priority="18">{{ __('passenger quantity') }}</th>
                            <th class="pl-4 py-2" data-priority="19">{{ __('total disposition') }}</th>
                            <th class="pl-4 py-2" data-priority="20">{{ __('quantity vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="21">{{ __('cooperation contract') }}</th>
                            <th class="pl-4 py-2" data-priority="22">{{ __('entity name') }}</th>
                            <th class="pl-4 py-2" data-priority="23">{{ __('secure policy') }}</th>
                            <th class="pl-4 py-2" data-priority="24">{{ __('tipe pay') }}</th>
                            <th class="pl-4 py-2" data-priority="25">{{ __('contract signing date') }}</th>
                            <th class="pl-4 py-2" data-priority="26">{{ __('address school') }}</th>
                            <th class="pl-4 py-2" data-priority="27">{{ __('school year') }}</th>
                            <th class="pl-4 py-2" data-priority="28">{{ __('contract with') }}</th>
                            <th class="pl-4 py-2" data-priority="29">{{ __('identification legal representative') }}
                            </th>
                            <th class="pl-4 py-2" data-priority="30">{{ __('identificationcard represent legal') }}
                            </th>
                            <th class="pl-4 py-2" data-priority="31">
                                {{ __('identificationcard representative group') }}</th>
                            <th class="pl-4 py-2" data-priority="32">{{ __('group representative name') }}</th>
                            <th class="pl-4 py-2" data-priority="33">{{ __('dateofexpedition representative group') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody {{-- class="dark:bg-gray-800 dark:text-white" --}}>
                    </tbody>

                </table>

            </div>
        </div>

    </div>

    {{-- <embed src="{{ asset('storage/STEP/contract/Empresas/Contrato_para_transporte_empresarial_N-9007.pdf') }}" type="application/pdf" width="100%" height="100%"> --}}
    {{-- componentes de modal --}}

    <!--Modal create -->

    @include('livewire.contracts.modalContract-create')

    <!--end Modal create -->

    <!-- Modal edit -->

    @include('livewire.contracts.modalContract-edit')

    <!--end Modal edit -->

    {{-- end componentes de modal --}}



</div>



@section('scripts')
    <script>
        $(document).ready(function() {


            var table = $('#example').DataTable({
                // "scrollX": true,
                lengthMenu: [
                    [5, 10, 50, 100, 200, -1],
                    [5, 10, 50, 100, 200, "∞"]
                ],
                responsive: true,
                autoWidth: false,
                autoFill: true,
                // stateSave: true,
                "order": [
                    [1, "desc"]
                ],
                dom: "<'ui stackable grid'" +
                    "<'row'" +
                    "<'eight wide column'l>" +
                    "<'ml30'B>" +
                    "<'right aligned eight wide column'f>" +
                    ">" +
                    "<'row dt-table'" +
                    "<'sixteen wide column'tr>" +
                    ">" +
                    "<'row'" +
                    "<'seven wide column'i>" +
                    "<'right aligned nine wide column'p>" +
                    ">" +
                    ">",
                buttons: [
                    // {
                    // extend:    'copyHtml5',
                    // text:      '<i class="far fa-copy"></i>',
                    // titleAttr: 'copiar',
                    // className: "dark:bg-gray-800 dark:text-white"
                    // },
                    {
                        text: '<button @click="openModal" class=""> crear contrato nuevo</button>',
                        titleAttr: 'Crear usuario',
                        className: "buttons-crear font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white"
                    },
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fa fa-file-excel"></i>',
                        titleAttr: 'Excel',
                        filename: 'listado de usuarios',
                        className: "dark:bg-gray-800 dark:text-white",

                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i>',
                        titleAttr: 'Imprimir',
                        filename: 'listado de usuarios',
                        className: "dark:bg-gray-800 dark:text-white"
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fa fa-file-pdf"></i>',
                        titleAttr: 'PDF',
                        filename: 'listado de usuarios',
                        className: "dark:bg-gray-800 dark:text-white text-gray-800 rounded-md"
                    },
                    {
                        extend: 'colvis',
                        text: '±columnas',
                        collectionLayout: 'fixed columns',
                        collectionTitle: 'Control de visibilidad de columna',
                        className: "dark:bg-gray-800 dark:text-white"
                    }
                ],
                columnDefs: [{
                        "targets": [1],
                        "visible": false,
                        "searchable": false
                    },
                    {
                        "targets": [8],
                        "visible": false,
                        "searchable": false
                    },
                    {
                        "targets": [10],
                        "visible": false,
                        "searchable": false
                    },
                    // {"targets": [10],"visible": false,"searchable": false},
                    // {"targets": [11],"visible": false,"searchable": false},
                    // {"targets": [12],"visible": false,"searchable": false},
                    // {"targets": [13],"visible": false,"searchable": false},
                    // {"targets": [14],"visible": false,"searchable": false},
                    // {"targets": [15],"visible": false,"searchable": false},
                    // {"targets": [16],"visible": false,"searchable": false},
                    // {"targets": [17],"visible": false,"searchable": false},
                    // {"targets": [18],"visible": false,"searchable": false},
                    // {"targets": [19],"visible": false,"searchable": false},
                    // {"targets": [20],"visible": false,"searchable": false},
                    // {"targets": [21],"visible": false,"searchable": false},
                    // {"targets": [22],"visible": false,"searchable": false},
                    // {"targets": [23],"visible": false,"searchable": false},
                    // {"targets": [24],"visible": false,"searchable": false},
                    // {"targets": [25],"visible": false,"searchable": false},
                    // {"targets": [26],"visible": false,"searchable": false},
                    // {"targets": [27],"visible": false,"searchable": false},
                    // {"targets": [28],"visible": false,"searchable": false},
                    // {"targets": [29],"visible": false,"searchable": false},
                    // {"targets": [30],"visible": false,"searchable": false},
                    // {"targets": [31],"visible": false,"searchable": false},
                    // {"targets": [32],"visible": false,"searchable": false},
                    // {"targets": [33],"visible": false,"searchable": false},
                    // {"targets": [35],"visible": false,"searchable": false},
                    // {"targets": [36],"visible": false,"searchable": false},
                ],
                "drawCallback": function(settings) {
                    $('.dataTables_wrapper .dataTables_filter input').addClass(
                        "mr-4 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    );
                    $('#example_length').removeClass("dataTables_length");
                    $('#example_length').addClass("dark:text-white float-left");
                    $('#example_filter').removeClass("dataTables_filter");
                    $('#example_filter').addClass("dark:text-white float-right text-right");
                    $('#example_info').removeClass("dataTables_info");
                    $('#example_info').addClass("dark:text-white pt-7 float-left clear-both");
                    $('#example tbody>tr>td').addClass("dark:bg-gray-800 dark:text-white");
                    $('.dataTables_wrapper .dataTables_paginate .paginate_button').addClass(
                        "dark:bg-gray-800 dark:text-white");
                },
                language: {
                    "emptyTable": "Tabla Vacia",
                    "info": "",
                    "infoEmpty": "Sin informacion",
                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                    "loadingRecords": "Cargando...",
                    "decimal": ".",
                    "infoFiltered": "filtrado de _MAX_ entradas totales",
                    "infoPostFix": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                    "infoThousands": ",",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "thousands": ",",
                    "zeroRecords": "No se encontro información",
                },
                ajax: "{{ route('datatable.contract') }}",
                columns: [{

                        "render": function(data, type, row) {

                            return "<div class='flex items-center space-x-4 text-sm'>" +
                                // "<button id='edit' onclick='edit(" + row['id'] + ")'" +
                                // "class='inline-flex items-center justify-center  bg-yellow-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-400 focus:outline-none focus:bg-yellow-700 focus:ring focus:ring-red-200 active:bg-yellow-700 readonly:opacity-25 transition' aria-label='Edit'>" +
                                // "<svg class='w-5 h-5' aria-hidden='true' fill='currentColor'" +
                                // "viewBox='0 0 20 20'>" +
                                // "<path fill-rule='evenodd'" +
                                // "d='M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z'>" +
                                // "</path>" +
                                // "</svg>" +
                                // "</button>" +
                                
                                "<button onclick='deletes(" + row['id'] + ")'" +
                                "class='inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 readonly:opacity-25 transition' aria-label='Delete'>" +
                                "<svg class='w-5 h-5' aria-hidden='true' fill='currentColor'" +
                                "viewBox='0 0 20 20'>" +
                                "<path fill-rule='evenodd'" +
                                "d='M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z'" +
                                "clip-rule='evenodd'></path>" +
                                "</svg>" +
                                "</button>" +

                                // "<button onclick='view(" + row['id'] + ")'" +
                                // "class='inline-flex items-center justify-center  bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition'>" +
                                // "<svg class='w-5 h-5' fill='none' stroke='currentColor'" +
                                // "stroke-width='1.5' viewBox='0 0 24 24'" +
                                // "xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>" +
                                // "<path stroke-linecap='round' stroke-linejoin='round'" +
                                // "d='M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z'>" +
                                // "</path>" +
                                // "<path stroke-linecap='round' stroke-linejoin='round'" +
                                // "d='M15 12a3 3 0 11-6 0 3 3 0 016 0z'></path>" +
                                // "</svg>" +
                                // "</button>" +

                                "</div>";
                        },
                        "className": "dark:bg-gray-800 dark:text-white border-b"
                    },
                    {
                        data: 'id',
                        "className": "dark:bg-gray-800 dark:text-white border-b"
                    },
                    {
                        data: 'contract_number',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'description_typeContract',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['state_contract'] == 1) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700'>{{ __('INICIAL') }}</span>";
                            } else if (row['state_contract'] == 2) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>{{ __('CANCELADO') }}</span>";
                            } else if (row['state_contract'] == 3) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-sky-700 bg-sky-300 rounded-full dark:bg-sky-700 dark:text-sky-100'>{{ __('EN CURSO') }}</span>";
                            } else if (row['state_contract'] == 4) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100'>{{ __('FINALIZADO') }}</span>";
                            } else if (row['state_contract'] == 5) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600'>{{ __('PENDIENTE') }}</span>";
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'date_start_contract',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'contract_end_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'contracting_name',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'description_identification',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'contract_document',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'expedition_identificationcard',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'contract_value',
                        render: DataTable.render.number(null, null, 2, '$'),
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'school_name',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'route_trip_contract',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'contracting_phone',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'contracting_direction',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'legal_representative',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'legal_representative_expedition_identificationcard',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'passenger_quantity',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'total_disposition',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'quantity_vehicle',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'cooperation_contract',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    // {
                    //     data: 'entity_name',
                    //     "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    // },
                    {
                        data: 'secure_policy',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'description_typePayment',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'contract_signing_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'address_school',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'school_year',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        // data: 'contract_with',
                        // "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                        "render": function(data, type, row) {
                            if (row['contract_with'] == 1) {
                                return "Grupo Padres";
                            } else if (row['contract_with'] == 2) {
                                return "UNIVERSITARIOS";

                            } else if (row['contract_with'] == 3) {
                                return "ESTUDIANTE CON ACUDIENTE";

                            } else if (row['contract_with'] == 4) {
                                return "RECTOR O REPRESENTANTE LEGAL Del Colegio";

                            } else {
                                return "";
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'identF',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'identificationcard_represent_legal',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'identificationcard_representative_group',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'group_representative_name',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'dateofexpedition_representative_group',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                ]
            }).columns.adjust().responsive.recalc();

            $('a.toggle-vis').on('click', function(e) {
                e.preventDefault();

                // Get the column API object
                var column = table.column($(this).attr('data-column'));

                // Toggle the visibility
                column.visible(!column.visible());
            });

            $('#example tbody').on('click', 'tr', function() {

                var tr = $(this).closest('tr');
                var row = table.row(tr);
                if (row.child.isShown()) {
                    $('table.dataTable.dtr-inline.collapsed>tbody>tr>td.child').removeClass("child");
                    $('table.dataTable.dtr-inline.collapsed>tbody>tr>td').addClass(
                        "dark:bg-gray-800 dark:text-white");
                }
            });

            $("#active4").removeClass('hidden');

        });

        function view(id) {
            window.open('http://127.0.0.1:8000/pdfs/pdf-contracts/' + id, '_blank')
        }

        var passengers = [];
        var totalPassengers = [];
        var i = 1;
        var total = [];
        total.push(i);
        var globalv = false;


        function passenger() {
            swal.fire({
                title: '<header class="dark:bg-gray-800 flex justify-center border-b-fuchsia-800 border-b">' +
                    '<p class="justify-start mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300"><h1 class="text-black dark:text-white text-4xl1">Lista de Pasajeros</h1></p>' +
                    '</header>',
                // icon: 'info',
                html:

                    // '<div class="w-9-12 h-4-8 mt-6 px-6 py-4 bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4">' +
                    '<div class="mt-11 border-gray-50-s container px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9">' +

                    '<div class="flex space-x-4 clonar">' +
                    '<div class="w-6-12 ">' +
                    '<span class="mr10 p-1 inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">1</span>' + 
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
                    '</div>',
                // '</div>' ,
                showConfirmButton: true,
                showCancelButton: false,
                confirmButtonText: 'Save',
                // denyButtonText: `Don't save`,
                allowOutsideClick: false,
                willClose: function() {

                    // console.log('este es el valor de i ' + i);
                    savePeople();

                }
            }).then((result) => {
                if (!result.isConfirmed) {

                    // swal.fire('Changes are not saved', '', 'info')
                    

                } else {

                    if (globalv == true) {
                        // passengers.length = 0;
                        swal.fire('', 'Los campos vacios no fueron agregados al listado', 'error');
                    // console.log('entro al no');
                    }
                    

                    if (globalv == false) {
                        
                        if (i != 1) {
                            swal.fire('', 'Los pasajeros fueron agregados al listado', 'success');
                        } else {
                            swal.fire('', 'El pasajero fue agtregado al listado', 'success');
                        }
                        @this.set('passengers', passengers);

                        // totalPassengers.push(passengers);

                        // console.log('entro al si');
                        // passengers.length = 0;
                    }
                    
                }
                // console.log('array 1: ' + passengers);
                // console.log('array total: ' + totalPassengers);
                // Livewire.emit('passenger', [passengers]);
            })
        }


        function add() {
            i++;
            total.push(i);
            // alert(total);
            $('#newInput').append('<div class="flex space-x-4" id="newRow' + i + '">' +
                '<div class="w-6-12 ">' +
                    '<span class="mr10 p-1 inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">'+ i +'</span>' + 
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
        }

        function savePeople() {

            for (let index = 0; index < total.length; index++) {
                var inputDRow = document.getElementById('inputDRow' + total[index] + '').value;
                var inputNRow = document.getElementById('inputNRow' + total[index] + '').value;
                // console.log(total[index]);
                // console.log(inputDRow);
                if (inputDRow != '' && inputNRow != '') {
                    passengers.push({
                        documento: document.getElementById('inputDRow' + total[index] + '').value,
                        nombreC: document.getElementById('inputNRow' + total[index] + '').value
                    });
                    globalv = false;
                }else {
                    globalv = true;
                }
            }
            // passengers.push({documento: document.getElementById('inputDRow2').value, nombreC: document.getElementById('inputNRow2').value});
            // alert(passengers[2].documento + ' - ' + passengers[2].nombreC);
            // @this.set('pps', document.getElementById('inputDRow1').value);
            // Livewire.emit('passenger', [passengers]);
            i = 1;
            total = [];
            total.push(i);
        }

        // abriendo modal para editar
        Livewire.on('openModalEdit', () => {
            viewhideinputs('modalEdit', 'block', 'hidden');
        })

        // enviando los datos para que los reciba la modal editar
        function edit(id) {

            let timerInterval
            swal.fire({
                title: 'loading...',
                html: 'Loading system information into <b></b> milliseconds.', //Cargando la información del sistema en
                timer: 1000,
                timerProgressBar: true,
                didOpen: () => {
                    swal.showLoading()
                    const b = swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === swal.DismissReason.timer) {
                    // console.log('document above')//documento arribba
                }
            })

            Livewire.emit('edit', [id]);

        }

        // constante creada de la clase scroll que esta en el div principal de la modal
        const scroll = document.querySelector(".scroll");

        // con  el .scroll=0 subo el escroll cuando se cierra la modal editar
        // con esta funcion se cierra la modal editar
        function closeModalEdit() {
            scroll.scrollTop = 0;
            document.getElementById('modalEdit').classList.add('hidden');
        }

        function deletes(id) {

            // console.log(id);

            swal.fire({
                title: 'sure you want to delete?',
                // seguro que quieres eliminar?
                text: "If you delete this record, all the information and documents of this vehicle will be deleted",
                // si eliminas este registro se borrara toda la información y documentos de este vehiculo
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('destroy', [id]);
                }
            })

        }
        Livewire.on('crud', (contractnumber, process, contractType, id) => {

            var process = process.process;
            var contractnumber = contractnumber.contractnumber;
            var contractType = contractType.contractType;
            var id = id.id;
            var main = '';
            var message = '';

            if (process == 1) {

                main = 'El ' + contractType + ' numero ' + contractnumber + ' fue creado satisfactoriamente';
                // main = 'the contract type ' + contractType + ' number ' + contractnumber + ' was created satisfactorily';
                message = 'puedes crear un permiso publico desde la siguiente url: ' +
                    'http://127.0.0.1:8000/pdfs/permit-public/' + id;
                // message = 'you can create a public permission from the following url: ' + 'http://127.0.0.1:8000/pdfs/permit-public/' + id;

                // el contrato tipo xxx number xxx fue creado satisfactoriamente
                // puedes crear un permiso publico desde ala siguiente url: http://127.0.0.1:8000/pdfs/permit-public/' + id

                swal.fire({
                    // title: 'you want to generate pdf or create a permit?',
                    title: '¿quieres generar pdf o crear un permiso?',
                    showDenyButton: true,
                    showCancelButton: true,
                    // confirmButtonText: 'Generate PDF',
                    confirmButtonText: 'Generar PDF',
                    // denyButtonText: `Create PERMITS`,
                    denyButtonText: `Crear PERMISOS`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {

                        window.open('http://127.0.0.1:8000/pdfs/pdf-contracts/' + id, '_blank')
                        swal.fire(main, message, 'success')
                    } else if (result.isDenied) {

                        window.open('http://127.0.0.1:8000/pdfs/permit-public/' + id, '_blank')
                        swal.fire(main, message, 'success')
                    } else {
                        swal.fire(main, message, 'success')
                    }
                })
                $("#btnCalcel").trigger("click");

            } else if (process == 2) {

                main = '';
                message = 'Se ha actualizado la información del contrato ' + contractnumber + ' tipo ' +
                    contractType + ' se ha actualizado sactisfactoriamente';
                // message = 'the information of the contract ' + contractnumber + ' type ' + contractType + ' has been satisfactorily updated';

                swal.fire(main, message, 'success')

            } else if (process == 3) {

                main = '';
                message = 'Se ha eliminado el contrato numero ' + contractnumber + ' tipo ' + contractType +
                    ' se ha eliminado sactisfactoriamente';
                // message = 'Contract number ' + contractnumber + ' type ' + contractType + ' has been successfully eliminated';

                swal.fire(main, message, 'success')
            } else if (process == 4) {

                main = '';
                message = 'No se ha adjuntado el fisico del documento del contratante para realizar este contrato';
                // message = 'The physical document of the contracting party has not been attached to carry out this contract';

                swal.fire(main, message, 'error')
            } else if (process == 5) {

                main = '';
                message = 'Faltan 1 o mas documentos fisicos para realizar este contrato';
                // message = '1 or more physical documents are missing to carry out this contract';

                swal.fire(main, message, 'error')
            } else if (process == 6) {

                main = '';
                message = 'No has diligenciado una lista de pasajeros';
                // message = 'You have not completed a passenger list';

                swal.fire(main, message, 'error')
            }

            $('#example').DataTable().ajax.reload(null, 1);

        })

        //scritp de formulario paso a paso

        function scroll_to_class(element_class, removed_height) {
            var scroll_to = $(element_class).offset().top - removed_height;
            // console.log($(window).scrollTop());
            if ($(window).scrollTop() != scroll_to) {
                $('html, body').stop().animate({
                    scrollTop: scroll_to
                }, 0);
            }
        }

        function bar_progress(progress_line_object, direction) {
            var number_of_steps = progress_line_object.data('number-of-steps');
            var now_value = progress_line_object.data('now-value');
            var new_value = 0;
            if (direction == 'right') {
                new_value = now_value + (100 / number_of_steps);
            } else if (direction == 'left') {
                new_value = now_value - (100 / number_of_steps);
            }
            progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
        }

        var stepinfinite = 1;

        jQuery(document).ready(function() {


            $('#top-navbar-1').on('shown.bs.collapse', function() {
                $.backstretch("resize");
            });
            $('#top-navbar-1').on('hidden.bs.collapse', function() {
                $.backstretch("resize");
            });

            //     /*
            //         Form
            //     */
            $('.f1 fieldset:first').fadeIn('slow');

            $('.f1 input[type="text"], .f1 input[type="password"], .f1 textarea, .f1 select, .f1 input[type="number"], .f1 input[type="tel"], .f1 input[type="email"], .f1 input[type="date"]')
                .on('focus', function() {
                    $(this).removeClass('input-error');
                });
            // console.log('estado inicial ' + stepinfinite)

            // next step
            $('.f1 .btn-next').on('click', function() {
                var parent_fieldset = $(this).parents('fieldset');
                var next_step = true;
                // navigation steps / progress steps
                var current_active_step = $(this).parents('.f1').find('.f1-step.active');
                // var icon_active_step = $(this).parents('.f1').find('.fa-stack-2x.-ml-1.flicker');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                // fields validation
                // parent_fieldset.find(
                //     // 'input[type="text"]' 
                //     //input[type="password"], textarea, select, input[type="number"], input[type="tel"],input[type="email"],input[type="date"]'
                // ).each(
                //     function() {
                //         // $('div').hasClass('container')
                //         if ($(this).hasClass('Inactive')) {
                //             // console.log('no se bloquea');
                //         } else if ($(this).val() == "" || $(this).val() == 0 || $(this).is(
                //             ':checked')) {
                //             $(this).addClass('input-error');
                //             next_step = false;
                //         } else {
                //             $(this).removeClass('input-error');
                //         }
                //     });

                // validate(stepinfinite) ? next_step = true : next_step = false;
                // fields validation



                if (next_step) {
                    parent_fieldset.fadeOut(400, function() {
                        // change icons
                        current_active_step.removeClass('active').addClass('activated').next()
                            .addClass('active');
                        parpadeo(true);
                        // lastsaved();
                        // console.log(current_active_step);
                        // progress bar
                        bar_progress(progress_line, 'right');
                        // show next step
                        console.log(stepinfinite);
                        $(this).next().fadeIn();
                        // scroll window to beginning of the form
                        scroll_to_class($('.f1'), 20);
                    });
                }

            });

            // previous step
            $('.f1 .btn-previous').on('click', function() {
                // navigation steps / progress steps
                var current_active_step = $(this).parents('.f1').find('.f1-step.active');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                $(this).parents('fieldset').fadeOut(400, function() {
                    // change icons
                    current_active_step.removeClass('active').prev().removeClass('activated')
                        .addClass('active');
                    parpadeo(false);
                    lastsaved();
                    // progress bar
                    console.log(stepinfinite);
                    bar_progress(progress_line, 'left');
                    // show previous step
                    $(this).prev().fadeIn();
                    // scroll window to beginning of the form
                    scroll_to_class($('.f1'), 20);
                });
            });

            $('.f1 .btn-Finalize').on('click', function() {

                var parent_fieldset = $(this).parents('fieldset');
                var Finalize = true;
                // fields validation
                // parent_fieldset.find(
                //     // 'input[type="text"], input[type="password"], textarea, select, input[type="number"], input[type="tel"],input[type="email"],input[type="date"]'
                // ).each(function() {
                //     if ($(this).hasClass('Inactive')) {
                //         // console.log('no se bloquea');
                //     } else if ($(this).val() == "" || $(this).val() == 0) {
                //         $(this).addClass('input-error');
                //         Finalize = false;
                //     } else {
                //         $(this).removeClass('input-error');
                //     }
                // });
                // fields validation

                // validate(stepinfinite) ? Finalize = true : Finalize = false;

                if (Finalize) {
                    document.getElementById('btnStore').classList.remove('Inactive');
                    document.getElementById('btnStore').classList.add('Active');
                    document.getElementById('btnFinalize').classList.add('Inactive');
                }
            });

            // submit
            // $('.f1').on('submit', function(e) {

            //     // fields validation
            //     $(this).find(
            //         'input[type="text"], input[type="password"], textarea,select,input[type="number"],input[type="tel"],input[type="email"],input[type="date"]'
            //     ).each(function() {
            //         if ($(this).val() == "") {
            //             e.preventDefault();
            //             $(this).addClass('input-error');
            //         } else {
            //             $(this).removeClass('input-error');
            //         }
            //     });
            //     // fields validation

            // });

            // finalizar


            function parpadeo(step) {
                if (step == true) {
                    stepinfinite = stepinfinite + 1;

                    if (stepinfinite >= 3) {
                        stepinfinite = 3;
                        nextStep = 'step' + stepinfinite
                        // console.log(nextStep);
                        document.getElementById(nextStep).classList.add('flicker');
                    } else {
                        nextStep = 'step' + stepinfinite
                        // console.log('el estado quedo en ' + stepinfinite);

                        document.getElementById(nextStep).classList.add('flicker');
                    }
                } else if (step == false) {
                    stepinfinite = stepinfinite - 1;
                    if (stepinfinite == 3) {
                        previousstep = 'step' + 2
                        // console.log('el estado se le quita al 2');
                        document.getElementById(previousstep).classList.remove('flicker');
                    } else {
                        quitState = stepinfinite + 1;
                        previousstep = 'step' + quitState
                        // console.log('el estado se le quita al ' + quitState);
                        document.getElementById(previousstep).classList.remove('flicker');
                    }
                }
            }

            function lastsaved() {
                if (stepinfinite >= 3) {
                    document.getElementById('btnStore').classList.remove('Inactive');
                    document.getElementById('btnStore').classList.add('Active');
                } else {
                    document.getElementById('btnStore').classList.remove('Active');
                    document.getElementById('btnStore').classList.add('Inactive');
                    document.getElementById('btnFinalize').classList.remove('Inactive');
                    // document.getElementById('btnFinalize').classList.add('Active');
                }
            }

            var fields = [
                $('#identification'),
                $('#contract_document'),
                $('#contracting_name'),
                $('#expedition_identificationcard'),
                $('#contracting_direction'),
                $('#contracting_phone'),
                $('#school_name'),
                $('#address_school'),
                $('#vehicle'),
                $('#identification_legal_representative'),
                $('#identificationcard_represent_legal'),
                $('#Student_name'),
                $('#identificationcard_Estudent'),
                $('#grade_student'),
                $('#start_day'),
                $('#End_day'),
                $('#legal_representative'),
                $('#legal_representative_expedition_identificationcard'),
                $('#identification_representative_group'),
                $('#identificationcard_representative_group'),
                $('#group_representative_name'),
                $('#dateofexpedition_representative_group'),
                $('#route_trip_contract'),
                $('#exit'),
                $('#arrival'),
                $('#return'),
                $('#family_relationship'),
                $('#who_receives'),
                $('#date_start_contract'),
                $('#contract_end_date'),
                $('#quantity_vehicle'),
                $('#passenger_quantity'),
                $('#signature_place'),
                $('#contract_signing_date'),
                $('#tipe_pay'),
                $('#contract_value'),
                $('#municipality'),
                $('#plate'),
                $('#brand'),
                $('#line_model'),
                $('#cylinder_capacity'),
                $('#legal_bond'),
                $('#fuel'),
                $('#vehicle_class'),
                $('#chassis_number'),
                $('#ability'),
                $('#engine_number'),
                // $('toggle'),


            ]


            validating = [];

            function validate(view) {

                var contractWith = $('#contract_with').val();
                var contractType = $('#type_contract').val();
                var healthWith = $('#healthWith').val();
                validating = [];

                if (view == 1) {

                    if (contractType == 1 || contractType == 2 || contractType == 4 || contractType == 5 ||
                        contractType == 7) {
                        validating.push(0, 1, 2, 3, 4, 5);
                    } else {
                        validating.push(0, 1, 2, 4, 5);
                    }

                } else if (view == 2) {

                    switch (contractType) {
                        case '1':

                            if (contractWith == 1 || contractWith == 2 || contractWith == 4) {
                                validating.push(6, 7, 22);
                            } else {
                                validating.push(6, 7, 22, 8, 11, 12, 13, 14, 15);
                            }
                            break;

                        case '2':
                            validating.push(9, 10, 16, 17, 22);
                            break;

                        case '3':
                            validating.push(9, 10, 16, 17, 22);
                            break;

                        case '4':
                            validating.push(8, 18, 19, 20, 21, 22, 23, 24, 25);
                            break;

                        case '5':

                            if (healthWith == 1) {
                                validating.push(22);
                            } else {
                                validating.push(9, 10, 16, 17, 22);
                            }
                            break;

                        case '6':
                            validating.push(9, 10, 16, 17, 36);
                            break;

                        case '7':
                            validating.push(137, 38, 39, 40, 41, 42, 43, 44);
                            break;

                        default:
                            break;
                    }

                } else if (view == 3) {

                    if (contractType == 1) {

                        if (contractWith == 1 || contractWith == 4) {
                            validating.push(28, 29, 30, 31, 32, 33, 34, 35);

                        } else if (contractWith == 2) {
                            validating.push(28, 29, 32, 33, 34, 35);

                        } else if (contractWith == 3) {
                            validating.push(28, 29, 32, 33, 34, 35, 26, 27);
                        }
                    } else if (contractType == 2 || contractType == 4 || contractType == 5 || contractType == 6) {

                        validating.push(28, 29, 30, 31, 32, 33, 34, 35);

                    } else if (contractType == 3) {
                        validating.push(28, 29, 30, 31, 32, 33, );

                    } else {
                        validating.push(28, 29, 32, 33, 34, 35);
                    }

                } else {
                    validating.push(1, 13, 14, 15, 16, 17, 18);
                }

                return valid(validating.length);
            }


            function valid(e) {

                var contador = 0;
                for (let i = 0; i < e; i++) {

                    if (fields[validating[i]].val() == "" || fields[validating[i]].val() == 0 || fields[validating[
                            i]].is(':checked')) {

                        fields[validating[i]].addClass('input-error');
                        contador++;
                    }
                    contador > 0 ? next_step = false : next_step = true;
                }

                return next_step;

            }



            // $('#btnStore').on('click', function() {

            //     // navigation steps / progress steps
            //     var current_active_step_s = $('.f1').find('.f1-step');
            //     var current_active_step = $('.f1').find('.f1-step.active');
            //     var current_active_step_a = $('.f1').find('.f1-step.activated');
            //     var progress_line = $('.f1').find('.f1-progress-line');
            //     // console.log(current_active_step_a);
            //     $('.f1 fieldset').fadeOut(400, function() {
            //         // change icons

            //         // parpadeo(false);
            //         // lastsaved();
            //         // progress bar
            //         // documentract();
            //         document.getElementById('type_contract').value = 0;
            //         typeContract();
            //         progress_line.attr('style', 'width: ' + 22.66 + '%;').data('now-value', 20.66);

            //         current_active_step.removeClass('active');
            //         current_active_step_a.removeClass('activated');

            //         stepinfinite = 1;
            //         var contador = 5;

            //         for (var i = 1; i <= 4; i++) {

            //             var toreset = 'step' + contador;
            //             document.getElementById(toreset).classList.remove('flicker');
            //             // $(this).prev().fadeIn();

            //             var contador = contador - 1;
            //         }

            //         $(this).prev().prev().prev().prev().fadeIn();
            //         // scroll window to beginning of the form
            //         scroll_to_class($('.f1'), 20);
            //         current_active_step_s.first().addClass('active');
            //     });

            //     document.getElementById('btnStore').classList.remove('Active');
            //     document.getElementById('btnStore').classList.add('Inactive');
            //     document.getElementById('btnFinalize').classList.remove('Inactive');
            //     document.getElementById('btnFinalize').classList.add('Active');

            //     // console.log('si termina en la funcion prueba');

            // });

            // Livewire.on('cleaner', () => {
            //     console.log('si se ejecuta el livewire');
            //     prueba();

            //     // closeModal();


            // });



        });

        function restart() {
            // navigation steps / progress steps
            var current_active_step_s = $('.f1').find('.f1-step');
            var current_active_step = $('.f1').find('.f1-step.active');
            var current_active_step_a = $('.f1').find('.f1-step.activated');
            var progress_line = $('.f1').find('.f1-progress-line');
            // console.log(current_active_step_a);
            $('.f1 fieldset').fadeOut(400, function() {
                // change icons
                $('#frm-contracts').trigger("reset");
                

                var Inputd = ['InputDocNit', 'InputDocAttachContract', 'InputDocempowerment', 'InputDocrnt',
                    'InputDocCamaraComercio', 'InputDocResolution', 'InputDocRUT'
                ];
                for (let index = 0; index < Inputd.length; index++) {
                    $('#' + Inputd[index]).val('');
                }

                var color = ['', 'DocRUT', 'DocAttachContract', 'Docempowerment', 'Docrnt', 'DocCamaraComercio',
                    'DocResolution'
                ];
                for (let index = 0; index < color.length; index++) {
                    if (color[index] != '') {
                        documentAboveC(Inputd[index], color[index])
                    }
                }

                document.getElementById('type_contract').value = 0;
                document.getElementById('contract_with').value = 0;
                document.getElementById('healthWith').value = 0;
                typeContract();

                documentOn('contract_document', 'DocNit');
                documentAbove('InputDocNit', 'DocNit');


                progress_line.attr('style', 'width: ' + 22.66 + '%;').data('now-value', 20.66);

                current_active_step.removeClass('active');
                current_active_step_a.removeClass('activated');
                var contador;
                if (stepinfinite < 3) {
                    contador = stepinfinite;
                } else {
                    contador = 3;
                }
                // console.log('contador: ' + contador);
                // console.log('parpadeo: ' + stepinfinite);

                for (var i = 1; i <= stepinfinite; i++) {

                    if (contador != 1) {
                        var toreset = 'step' + contador;
                        document.getElementById(toreset).classList.remove('flicker');
                    }

                    // $(this).prev().fadeIn();

                    var contador = contador - 1;
                }
                stepinfinite = 1;

                $(this).prev().prev().fadeIn();
                // scroll window to beginning of the form
                scroll_to_class($('.f1'), 20);
                current_active_step_s.first().addClass('active');
            });

            document.getElementById('btnStore').classList.remove('Active');
            document.getElementById('btnStore').classList.add('Inactive');
            document.getElementById('btnFinalize').classList.remove('Inactive');
            // document.getElementById('btnFinalize').classList.add('Active');

            // console.log('si termina en la funcion prueba');
        }

        function submited() {
            $(this).find(
                'input[type="text"], input[type="password"], textarea,select,input[type="number"],input[type="tel"],input[type="email"],input[type="date"]'
            ).each(function() {
                if ($(this).val() == "") {
                    e.preventDefault();
                    $(this).addClass('input-error');
                } else {
                    $(this).removeClass('input-error');
                }
            });
        }

        jQuery('#date_start_contract').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#contract_end_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#contract_signing_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#start_day').datetimepicker({
            datepicker: false,
            format: 'H:i',
            step: 5,
            theme: 'dark'
        });

        jQuery('#End_day').datetimepicker({
            datepicker: false,
            format: 'H:i',
            step: 5,
            theme: 'dark'
        });

        jQuery('#return').datetimepicker({
            datepicker: false,
            format: 'H:i',
            step: 5,
            theme: 'dark'
        });

        jQuery('#arrival').datetimepicker({
            datepicker: false,
            format: 'H:i',
            step: 5,
            theme: 'dark'
        });

        jQuery('#exit').datetimepicker({
            datepicker: false,
            format: 'H:i',
            step: 5,
            theme: 'dark'
        });

        function fechasSet(id) {

            $('#' + id).on('change', function(e) {
                @this.set(id, e.target.value);
            });
        }


        var camps = [
            /*1:*/
            'type_contract',
            /*2:*/
            'contract_with',
            /*3:*/
            'identification',
            /*4:*/
            'labelContractDocument',
            /*5:*/
            'contract_document',
            /*6:*/
            'labelContractingName',
            /*7:*/
            'contracting_name',
            /*8:*/
            'labelExpeditionIdentificationcard',
            /*9:*/
            'expedition_identificationcard',
            /*10:*/
            'labelContractingDirection',
            /*11:*/
            'contracting_direction',
            /*12:*/
            'labelContractingPhone',
            /*13:*/
            'contracting_phone',
            /*14:*/
            'labelSchoolName',
            /*15:*/
            'school_name',
            /*16:*/
            'labelAddressSchool',
            /*17:*/
            'address_school',
            /*18:*/
            'labelVehicle',
            /*19:*/
            'vehicle',
            /*20:*/
            'labelIdentificationLegalRepresentative',
            /*21:*/
            'identification_legal_representative',
            /*22:*/
            'labelIdentificationcardRepresentLegal',
            /*23:*/
            'identificationcard_represent_legal',
            /*24:*/
            'labelLegalRepresentative',
            /*25:*/
            'legal_representative',
            /*26:*/
            'labelLegalRepresentativeExpeditionIdentificationcard',
            /*27:*/
            'legal_representative_expedition_identificationcard',
            /*28:*/
            'labelIdentificationRepresentativeGroup',
            /*29:*/
            'identification_representative_group',
            /*30:*/
            'labelIdentificationcardRepresentativeGroup',
            /*31:*/
            'identificationcard_representative_group',
            /*32:*/
            'labelGroupRepresentativeName',
            /*33:*/
            'group_representative_name',
            /*34:*/
            'labelDateofexpeditionRepresentativeGroup',
            /*35:*/
            'dateofexpedition_representative_group',
            /*36:*/
            'labelRouteTrip',
            /*37:*/
            'route_trip_contract',
            /*38:*/
            'labelQuantityVehicle',
            /*39:*/
            'quantity_vehicle',
            /*40:*/
            'labelPassengerQuantity',
            /*41:*/
            'passenger_quantity',
            /*42:*/
            'labelSignaturePlace',
            /*43:*/
            'signature_place',
            /*44:*/
            'labelSigningDate',
            /*45:*/
            'contract_signing_date',
            /*46:*/
            'labelTipePay',
            /*47:*/
            'tipe_pay',
            /*48:*/
            'labelContractValue',
            /*49:*/
            'contract_value',
            /*50:*/
            'fieldset1Buttons',
            /*51:*/
            'previous2',
            /*52:*/
            'previous3',
            /*53:*/
            'labelIdentification',
            /*54:*/
            'divEstudiante',
            /*55:*/
            'labelEstudiante',
            /*56:*/
            'Student_name',
            /*57:*/
            'labelIdentificationcardEstudent',
            /*58:*/
            'identificationcard_Estudent',
            /*59:*/
            'labelGrade',
            /*60:*/
            'grade_student',
            /*61:*/
            'labelFamilyRelationship',
            /*62:*/
            'family_relationship',
            /*63:*/
            'labelStartDay',
            /*64:*/
            'start_day',
            /*65:*/
            'labelEndDay',
            /*66:*/
            'End_day',
            /*67:*/
            'divWhoReceives',
            /*68:*/
            'labelWhoReceives',
            /*69:*/
            'who_receives',
            /*70:*/
            'divDateStartContract',
            /*71:*/
            'labelDateStartContract',
            /*72:*/
            'date_start_contract',
            /*73:*/
            'divContractEndDate',
            /*74:*/
            'labelContractEndDate',
            /*75:*/
            'contract_end_date',
            /*76:*/
            'Docrnt',
            /*77:*/
            'Docempowerment',
            /*78:*/
            'DocRUT',
            /*79:*/
            'DocResolution',
            /*80:*/
            'DocCamaraComercio',
            /*81:*/
            'labelMunicipality',
            /*82:*/
            'municipality',
            /*83:*/
            'labelplate',
            /*84:*/
            'plate',
            /*85:*/
            'bpassenger',
            /*86:*/
            'divPassengerQuantity',
            /*87:*/
            'divQuantityVehicle',
            /*88:*/
            'divFamilyRelationship',
            /*89:*/
            'divSignaturePlace',
            /*90:*/
            'labelbrand',
            /*91:*/
            'divExit',
            /*92:*/
            'labelExit',
            /*93:*/
            'exit',
            /*94:*/
            'divArrival',
            /*95:*/
            'labelArrival',
            /*96:*/
            'arrival',
            /*97:*/
            'divReturn',
            /*98:*/
            'labelReturn',
            /*99:*/
            'return',
            /*100:*/
            'brand',
            /*101:*/
            'labelline',
            /*102:*/
            'line',
            /*103:*/
            'labelmodel',
            /*104:*/
            'model',
            /*105:*/
            'labelcylindercapacity',
            /*106:*/
            'cylinder_capacity',
            /*107:*/
            'labellegalbond',
            /*108:*/
            'legal_bond',
            /*109:*/
            'labelfuel',
            /*110:*/
            'fuel',
            /*111:*/
            'labelvehicleclass',
            /*112:*/
            'vehicle_class',
            /*113:*/
            'labelenginenumber',
            /*114:*/
            'engine_number',
            /*115:*/
            'labelchassisnumber',
            /*116:*/
            'chassis_number',
            /*117:*/
            'labelability',
            /*118:*/
            'ability',
            /*119:*/
            'firstButtons',
            /*120:*/
            'labelIdentification',
            /*121:*/
            'healthWith',
            /*122:*/
            'divhealthWith',
            /*123:*/
            'divContract_with',
            /*124:*/
            'DocAttachContract',
        ];

        clave = [];

        function typeContract() {

            var contractType = document.getElementById('type_contract').value;

            clave = [];
            // console.log(contractType);

            switch (contractType) {
                // colegios
                case '1':

                    viewhideinputs('contract_with', 'Active', 'Inactive');
                    viewhideinputs('divRouteTrip', 'w-full', 'w-6-12');
                    clave.push(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 118, 119, 120, 121);

                    break;
                    // empresarial
                case '2':
                    viewhideinputs('divRouteTrip', 'w-full', 'w-6-12');
                    clave.push(1, 13, 14, 15, 16, 17, 18, 27, 28, 29, 30, 31, 32, 33, 34, 53, 54, 55, 56, 57, 58, 59, 60,
                        61, 62, 63, 64, 65, 66, 67, 68,
                        75, 78, 80, 81, 82, 83, 87, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104,
                        105, 106, 107, 108, 109, 110, 111,
                        112, 113, 114, 115, 116, 117, 120, 121, 122);
                    document.getElementById('contract_with').value = 0;

                    break;
                    // empresa turismo
                case '3':
                    viewhideinputs('divRouteTrip', 'w-full', 'w-6-12');
                    clave.push(1, 7, 8, 13, 14, 15, 16, 17, 18, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 45, 46, 47, 48, 53,
                        54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65,
                        66, 67, 68, 76, 78, 80, 81, 82, 83, 87, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101,
                        102, 103, 104, 105, 106, 107, 108, 109,
                        110, 111, 112, 113, 114, 115, 116, 117, 120, 121, 122, 123);
                    document.getElementById('contract_with').value = 0;

                    break;
                    // ocacional
                case '4':
                    viewhideinputs('divRouteTrip', 'w-6-12', 'w-full');
                    clave.push(1, 13, 14, 15, 16, 19, 20, 21, 22, 23, 24, 25, 26, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62,
                        63, 64, 65, 66, 67, 68, 75, 76, 77, 78,
                        79, 80, 81, 82, 83, 87, 89, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112,
                        113, 114, 115, 116, 117, 120, 121, 122, 123);
                    document.getElementById('contract_with').value = 0;

                    break;

                    // usuarios de salud
                case '5':

                    viewhideinputs('contract_with', 'Active', 'Inactive');
                    viewhideinputs('divRouteTrip', 'w-full', 'w-6-12');
                    clave.push(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 118, 119, 122, 123);

                    break;

                    // convenio empresarial
                case '6':

                    clave.push(1, 7, 8, 13, 14, 15, 16, 17, 18, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 53, 54, 55, 56, 57,
                        58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 75, 76, 78, 79, 82, 83, 87,
                        89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109,
                        110, 111, 112, 113, 114, 115, 116, 117, 120, 121, 122, 123);
                    document.getElementById('contract_with').value = 0;

                    break;

                    // vinculación
                case '7':

                    clave.push(1, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34,
                        35, 36, 37, 38, 39, 40, 53, 54, 55, 56, 57,
                        58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 75, 76, 77, 78, 79, 80, 81, 84, 87, 90, 91, 92, 93,
                        94, 95, 96, 97, 98, 120, 121, 122, 123);
                    document.getElementById('contract_with').value = 0;

                    break;

                default:

                    clave.push(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 49, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63,
                        64, 65, 66, 67, 68, 75,
                        76, 77, 78, 79, 80, 81, 82, 83, 87, 90, 91, 92, 93, 94, 95, 96, 97, 98, 120, 121, 122);
                    document.getElementById('contract_with').value = 0;

                    break;
            }
            changeInput();

        }

        function withContract() {
            var contractWith = document.getElementById('contract_with').value;

            clave = [];

            if (contractWith == 1) {
                // grupo padres
                clave.push(17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 53, 54, 55, 56, 57, 58,
                    59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 75, 76, 77, 78, 79, 80, 81,
                    82, 83, 87, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108,
                    109, 110, 111, 112, 113, 114, 115, 116, 117, 120, 121);

            } else if (contractWith == 2) {
                // universitarios
                clave.push(17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 37, 38, 39, 40, 53, 54,
                    55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 75, 76, 77, 78, 79, 80, 81, 82, 83,
                    85, 86, 87, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108,
                    109, 110, 111, 112, 113, 114, 115, 116, 117, 120, 121);

            } else if (contractWith == 3) {
                // estudiante con acudiente 
                clave.push(19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 37, 38, 39, 40, 75, 76, 77, 78,
                    79, 80, 81, 82, 83, 84, 85, 86, 89, 90, 91, 92, 93, 94, 95, 96,
                    97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116,
                    117, 120, 121);

            } else if (contractWith == 4) {
                // rector o representante legal del colegio
                clave.push(17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 53, 54, 55, 56, 57, 58,
                    59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 75, 76, 80, 81, 82,
                    83, 87, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108,
                    109, 110, 111, 112, 113, 114, 115, 116, 117, 120, 121);

            } else {
                viewhideinputs('divRouteTrip', 'w-full', 'w-6-12');
                clave.push(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 118, 119, 120, 121);
            }

            changeInput();
        }

        function Withhealth() {

            var Withhealth = document.getElementById('healthWith').value;
            // console.log(Withhealth);
            clave = [];

            if (Withhealth == 1) {
                console.log('si dio 1');

                viewhideinputs('divRouteTrip', 'w-full', 'w-6-12');
                clave.push(1, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 53,
                    54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 75,
                    76, 78, 79, 80, 81, 82, 83, 87, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104,
                    105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 122, 123);
                document.getElementById('contract_with').value = 0;
            } else if (Withhealth == 2) {
                console.log('si dio 2');

                viewhideinputs('divRouteTrip', 'w-full', 'w-6-12');
                clave.push(1, 7, 8, 13, 14, 15, 16, 17, 18, 27, 28, 29, 30, 31, 32, 33, 34, 53, 54, 55, 56, 57, 58, 59, 60,
                    61, 62, 63, 64, 65, 66, 67, 68, 75, 76, 78, 79, 80, 81, 82,
                    83, 87, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108,
                    109, 110, 111, 112, 113, 114, 115, 116, 117, 122, 123);
                document.getElementById('contract_with').value = 0;
            } else {
                clave.push(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 118, 119);
            }

            changeInput();
        }


        function viewhideinputs(id, adhere, stirring) {

            if (adhere == '') {
                document.getElementById(id).classList.remove(stirring);
            } else {
                document.getElementById(id).classList.remove(stirring);
                document.getElementById(id).classList.add(adhere);
            }

        }
        //fin scritp de formulario paso a paso

        function changeInput() {
            let change = false;
            // prueba = [];

            // console.log(camps[clave[0]] + '-' + clave + '-' + change);
            for (let i = 0; i < camps.length; i++) {

                let j = 0;
                while (j <= clave.length) {

                    if (camps[i] == camps[clave[j]]) {
                        j = clave.length;
                        change = true;
                    } else {
                        change = false;
                    }

                    j++;
                }
                if (camps[i] == 'change') {
                    // console.log('cambiar');
                } else {
                    // console.log(camps[i]);
                    if (change == true) {
                        viewhideinputs(camps[i], 'Inactive', 'Active');
                    } else {
                        if (camps[i] == 'previous2' || camps[i] == 'previous3') {
                            document.getElementById(camps[i]).classList.remove('Inactive');
                        } else {
                            viewhideinputs(camps[i], '', 'Inactive');
                        }

                    }
                }

            }
        }

        function documentAboveC(input, color) {

            var inputDocument = document.getElementById(input).value;

            if (inputDocument != '' || inputDocument != 0) {
                document.getElementById(color).classList.remove('bg-purple-600', 'text-white', 'active:bg-purple-600',
                    'hover:bg-purple-700');
                document.getElementById(color).classList.add('bg-green-600', 'active:bg-green-600', 'hover:bg-green-700');
                // console.log('si');
            } else {
                document.getElementById(color).classList.add('bg-purple-600', 'text-white', 'active:bg-purple-600',
                    'hover:bg-purple-700');
                document.getElementById(color).classList.remove('bg-green-600', 'active:bg-green-600',
                    'hover:bg-green-700');
            }
        }

        function documentAbove(input, color) {

            var inputDocument = document.getElementById(input).value;

            if (inputDocument != '' || inputDocument != 0) {
                document.getElementById(color).classList.remove('icon-green');
                document.getElementById(color).classList.add('icon-blue');
                // console.log('si');
            } else {

                document.getElementById(color).classList.remove('icon-blue');
                document.getElementById(color).classList.add('icon-green');
            }
        }

        function documentOn(paramInput, docInput) {

            var fechDoc = document.getElementById(paramInput).value;

            if (fechDoc != "" || fechDoc != 0) {
                document.getElementById(paramInput).classList.remove('w-full');
                document.getElementById(paramInput).classList.add('w90');
                document.getElementById(docInput).classList.remove('Inactive');
            } else {
                document.getElementById(paramInput).classList.remove('w90');
                document.getElementById(paramInput).classList.add('w-full');
                document.getElementById(docInput).classList.add('Inactive');
            }
        }
    </script>
@endsection
