<div>
    <div class="py-12 mb-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="justify-center flex">
                <h1 class="text-black dark:text-white text-4xl rounded-lg border-b-orange-800 p-1">
                    {{ __('Manage Vehicles') }}</h1>
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
                            <th class="pl-4 py-2" data-priority="2">{{ __('plate vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="3">{{ __('model') }}</th>
                            <th class="pl-4 py-2" data-priority="4">{{ __('vehicle type') }}</th>
                            <th class="pl-4 py-2" data-priority="5">{{ __('side') }}</th>
                            <th class="pl-4 py-2" data-priority="6">{{ __('state') }}</th>
                            <th class="pl-4 py-2" data-priority="7">{{ __('infrastructure vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="8">{{ __('secure end date') }}</th>
                            <th class="pl-4 py-2" data-priority="9">{{ __('technomechanical end date') }}</th>
                            <th class="pl-4 py-2" data-priority="10">{{ __('internal external owner type') }}</th>
                            <th class="pl-4 py-2" data-priority="11">{{ __('owner vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="12">{{ __('driver id') }}</th>
                            <th class="pl-4 py-2" data-priority="13">{{ __('brand vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="14">{{ __('vehicle chassis number') }}</th>
                            <th class="pl-4 py-2" data-priority="15">{{ __('property card number') }}</th>
                            <th class="pl-4 py-2" data-priority="16">{{ __('cylinder vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="17">{{ __('number passenger') }}</th>
                            <th class="pl-4 py-2" data-priority="18">{{ __('certificate extracontractual') }}</th>
                            <th class="pl-4 py-2" data-priority="19">{{ __('civil contractual') }}</th>
                            <th class="pl-4 py-2" data-priority="20">{{ __('card operation') }}</th>
                            <th class="pl-4 py-2" data-priority="21">{{ __('expiration card operation') }}</th>
                            <th class="pl-4 py-2" data-priority="22">{{ __('expiration preventive') }}</th>
                            <th class="pl-4 py-2" data-priority="23">{{ __('admission date') }}</th>
                            <th class="pl-4 py-2" data-priority="24">{{ __('vehicle pickup date') }}</th>
                            <th class="pl-4 py-2" data-priority="25">{{ __('engine number') }}</th>
                            <th class="pl-4 py-2" data-priority="26">{{ __('use vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="27">{{ __('color vehicle') }}</th>
                            <th class="pl-4 py-2" data-priority="28">{{ __('type direction') }}</th>
                            <th class="pl-4 py-2" data-priority="29">{{ __('front suspension') }}</th>
                            <th class="pl-4 py-2" data-priority="30">{{ __('rear suspension') }}</th>
                            <th class="pl-4 py-2" data-priority="31">{{ __('dimension rims') }}</th>
                            <th class="pl-4 py-2" data-priority="32">{{ __('rear brake type') }}</th>
                            <th class="pl-4 py-2" data-priority="33">{{ __('front brake type') }}</th>

                        </tr>
                    </thead>
                    <tbody {{-- class="dark:bg-gray-800 dark:text-white" --}}>
                    </tbody>

                </table>

            </div>

        </div>

    </div>

    {{-- componentes de modal --}}

    <!--Modal create -->

@include('livewire.vehicles.modalVehicles-create')

    <!--end Modal create -->



    <!-- Modal edit -->

    @include('livewire.vehicles.modalVehicles-edit')
 
    <!--end Modal edit -->

    {{-- fin componentes de modal --}}



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
                        text: '<button @click="openModal" class=""> crear usuario nuevo</button>',
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
                    // {
                    //     "targets": [8],
                    //     "visible": false,
                    //     "searchable": false
                    // },
                    // {
                    //     "targets": [10],
                    //     "visible": false,
                    //     "searchable": false
                    // },
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
                ajax: "{{ route('datatable.vehicle') }}",
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
                        // data: 'plate_vehicle',
                        "render": function(data, type, row) {
                            if (row['vahicle_photo_path'] == null || row['vahicle_photo_path'] ==
                                "") {
                                // return "si hay imagen empresa" + row['profile_photo_path'];
                                return (
                                    "<div class='lex items-center text-sm'>" +
                                    "<div class='relative  w-8 h-8 mr-3 rounded-full md:block'>" +
                                    "<img src='{{ asset('img/l_logo_step.png') }}' alt=''" +
                                    "class='object-cover w-full h-full rounded-full' loading='lazy'>" +
                                    "<div class='absolute inset-0 rounded-full shadow-inner'" +
                                    "aria-hidden='true'>" +
                                    "</div>" +
                                    "</div>" +
                                    "<div class='flex items-center text-sm'>" +
                                    "<div>" +
                                    "<p class='font-semibold centered'>" + row[
                                        'plate_vehicle'] +
                                    "</p>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>");

                            } else {
                                // return "no hay imagen empresa";
                                // documentImage(file, name)
                                return (
                                    "<div class='flex items-center text-sm'>" +
                                    "<div class='relative  w-8 h-8 mr-3 rounded-full md:block'>" +
                                    "<a class='cursor-pointer' onclick='searchImg(" + row[
                                        'id'] + ")'>" +
                                    "<img src='" + row['vahicle_photo_path'] +
                                    "' alt=''" +
                                    "class='object-cover w-full h-full rounded-full' loading='lazy'>" +
                                    "</a>" +
                                    // "<div class='absolute inset-0 rounded-full shadow-inner'" +
                                    // "aria-hidden='true'>" +
                                    // "</div>" +
                                    "</div>" +
                                    "<div class='flex items-center text-sm'>" +
                                    "<div>" +
                                    "<p class='font-semibold'>" + row[
                                        'plate_vehicle'] +
                                    "</p>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>");

                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'model_vehicle',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'vehicle_type_name',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'side_vehicle',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        "render": function(data, type, row) {
                            // if (row['state_vehicle'] == 1) {
                            //     return "<span class='px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700'>{{ __('Inhabilitado') }}</span>";
                            // } else if (row['state_vehicle'] == 2) {
                            //     return "<span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>{{ __('Habilitado') }}</span>";
                            // } else if (row['state_vehicle'] == 3) {
                            //     return "<button wire:click='reactivado' id='' onclick='reactive(" +
                            //         row['id'] +
                            //         ")' class='px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700'>{{ __('Inactivo') }}</button>";
                            // } else if (row['state_vehicle'] == 4) {
                            //     return "<span class='px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600'>{{ __('PENDIENTE') }}</span>";
                            // return ("<button wire:click='updateState' id='' onclick='changeState(" + row['id'] + ")'>" +}
                            if (row['state_vehicle'] == 1) {
                                return ("<button id='' onclick='changeState(" + row['id'] + ")'>" +
                                    "<span class='px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700'>{{ __('Inhabilitado') }}</span>" +
                                    "</button>");
                            } else if (row['state_vehicle'] == 2) {

                                return ("<button id='' onclick='changeState(" + row['id'] + ")'>" +
                                    "<span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>{{ __('Habilitado') }}</span>" +
                                    "</button>");
                            } else if (row['state_vehicle'] == 3) {

                                return ("<button id='' onclick='changeState(" + row['id'] + ")'>" +
                                    "<span class='px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700'>{{ __('Inactivo') }}</span>" +
                                    "</button>");
                            } else if (row['state_vehicle'] == 4) {

                                return ("<button id='' onclick='changeState(" + row['id'] + ")'>" +
                                    "<span class='px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600'>{{ __('PENDIENTE') }}</span>" +
                                    "</button>");
                            }

                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'vehicle_class_description',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'secure_end_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'technomechanical_end_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['internal_external_owner_type'] == 1) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>{{ __('Interno') }}</span>";
                            } else {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100'>{{ __('Externo') }}</span>";
                            }
                        },
                        data: 'internal_external_owner_type',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'owner',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'drive',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'brand_vehicle',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'vehicle_chassis_number',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'property_card_number',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'cylinder_vehicle',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'number_passenger',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'certificate_extracontractual',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'civil_contractual',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'card_operation',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'expiration_card_operation',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'expiration_preventive',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'admission_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'vehicle_pickup_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'engine_number',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'service',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'color_vehicle',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'type_direction',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'front_suspension',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'rear_suspension',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'type_rims',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'brake_Type_Description',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'front',
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

            $("#active7").removeClass('hidden');

        });

        function documentImage(file) {
            swal.fire({
                // title: 'Sweet!',
                // imageUrl: `${file}`, \\img\l_logo_step.png
                imageUrl: '/storage/STEP/users/Ident_q11111111111/profile_user_q11111111111.webp',
                // text: '<strong></strong>',
                // html: '<strong>' + `${name}` + '</strong>',
                imageWidth: 800,
                imageHeight: 400,
                imageAlt: '',
            })
        }

        Livewire.on('documentImage', (photo) => {
            var photo = photo.file;
            // console.log(photo);
            swal.fire({
                // title: 'Sweet!',
                imageUrl: `${photo}`,
                // imageUrl: '/storage/STEP/users/Ident_q11111111111/profile_user_q11111111111.webp',
                // text: '<strong></strong>',
                // html: '<strong>' + `${name}` + '</strong>',
                imageWidth: 800,
                imageHeight: 400,
                imageAlt: '',
            })
        })

        function searchImg(id) {
            // alert('reactivar el ' + id);
            Livewire.emit('searchImg', [id]);
        }

        function changeState(id) {
            // alert('reactivar el ' + id);
            Livewire.emit('updateState', [id]);
        }

        Livewire.on('stateNew', () => {
            location.reload();
            swal.fire({
                position: 'center',
                title: 'Cambio de estado', //documento actualizado
                showConfirmButton: false,
                timer: 1500
            })
        })


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
                timer: 1500,
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

        Livewire.on('documentStatus', (docSecureEndDate, docTechnomechanical, docCardOperation, docPreventive,
            docCivilContractual, docExtracontractual) => {

            docSecureEndDate = docSecureEndDate.docSecureEndDate;
            docTechnomechanical = docTechnomechanical.docTechnomechanical;
            docCardOperation = docCardOperation.docCardOperation;
            docPreventive = docPreventive.docPreventive;
            docExtracontractual = docExtracontractual.docExtracontractual;
            docCivilContractual = docCivilContractual.docCivilContractual;

            var statusInput = [
                'SOAT', 'Tecnomecanica', 'Tarjeta_de_Operación',
                'Preventiva', 'Extracontractual', 'civil'
            ];

            var status = [
                docSecureEndDate, docTechnomechanical, docCardOperation, docPreventive,
                docExtracontractual, docCivilContractual
            ];

            for (let i = 0; i < 6; i++) {
                // console.log(status[i],statusInput[i]);
                if (status[i] != '') {
                    document.getElementById(statusInput[i]).classList.add('icon-blue');

                } else {
                    document.getElementById(statusInput[i]).classList.add('icon-green');

                }

            }

        })

        // constante creada de la clase scroll que esta en el div principal de la modal
        const scroll = document.querySelector(".scroll");

        // con  el .scroll=0 subo el escroll cuando se cierra la modal editar
        // con esta funcion se cierra la modal editar
        function closeModalEdit() {
            colorChange = [];

            var statusInput = [
                'SOAT', 'Tecnomecanica', 'Tarjeta_de_Operación',
                'Preventiva', 'Extracontractual', 'civil'
            ];

            for (let i = 0; i < 6; i++) {

                document.getElementById(statusInput[i]).classList.remove('icon-blue');
                document.getElementById(statusInput[i]).classList.remove('icon-green');
                document.getElementById(statusInput[i]).classList.remove('icon-yellow');
            }

            scroll.scrollTop = 0;
            document.getElementById('modalEdit').classList.add('hidden');
        }

        // enviar los datos para editar el documento/archivo 
        function updateDocument(param, documentName) {

            let timerInterval
            swal.fire({
                title: 'uploading document!',
                html: 'Your document will be in the system at <b></b> milliseconds.', //Tu documento estara en el sistema en
                timer: 8000,
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

            setTimeout(() => (
                Livewire.emit('documentUpdate', [param], [documentName])
            ), 4000);
        }

        var colorChange = [];
        // recive el tipo de docuemnto arriba o actualización, y llama la funcion que cambia el color del icono
        Livewire.on('documentup', (up, input) => {

            up = up.up;
            input = input.input;

            // console.log('input '+input);
            var inp = [
                'noValido', 'SOAT', 'Tecnomecanica', 'Tarjeta_de_Operación',
                'Preventiva', 'Extracontractual', 'civil'
            ];
            colorChange.push(input);

            // console.log(colorChange);
            for (let i = 0; i < colorChange.length; i++) {
                // if (input == i) {
                var num = colorChange[i];
                var color = inp[num];
                // console.log(color);
                if (up == 1) {
                    if (color != 'noValido') {
                        document.getElementById(color).classList.remove('icon-blue');
                        document.getElementById(color).classList.add('icon-yellow');
                    }

                } else {
                    if (color != 'noValido') {
                        document.getElementById(color).classList.remove('icon-green');
                        document.getElementById(color).classList.add('icon-yellow');
                    }

                }
                // }
                // console.log('inp '+inp[i])
                // console.log('color '+color);
            }
            // console.log('color '+color);

            if (up == 1) {
                swal.fire({
                    position: 'center',
                    title: 'actualized document', //documento actualizado
                    showConfirmButton: false,
                    timer: 1500
                })
                // document.getElementById(color).classList.remove('icon-blue');
                // document.getElementById(color).classList.add('icon-yellow');
            } else {
                swal.fire({
                    position: 'center',
                    title: 'document above', //documento arribba
                    showConfirmButton: false,
                    timer: 1500
                })
                // document.getElementById(color).classList.remove('icon-green');
                // document.getElementById(color).classList.add('icon-yellow');
            }

        })

        // enviar el id para eliminar el registro de la base de datos
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

        // mensajes despues de que se crea,edita o elimina un vehiculo
        Livewire.on('crud', (plate, process) => {

            var process = process.process;
            var plateVehicle = plate.plate;
            var message = ['Se ha registrado el vehiculo con placa  ' + plateVehicle + ' sactisfactoriamente',
                'Se ha actualizado la información del vehiculo con placa ' + plateVehicle +
                ' sactisfactoriamente',
                'Se ha eliminado el Vehiculo con placa ' + plateVehicle + ' y toda su documentación',
                'El vehiculo con placa ' + plateVehicle + ' ya esta registrado en el sistema',
                'El lateral ' + plateVehicle + ' ya esta registrado en el sistema'
            ];

            // var message = ['The vehicle with license plate ' + plateVehicle + ' has been successfully registered',
            // 'The information of the vehicle with license plate ' + plateVehicle + ' has been successfully updated',
            // 'The vehicle with plate ' + plateVehicle + ' and all its documentation have been eliminated',
            // 'The vehicle with plate ' + plateVehicle + ' is already registered in the system',
            // 'The side of the vehicle with plate ' + plateVehicle + ' is already registered in the system'
            // ];


            var newmessage = message[process - 1];

            if (process == 1 || process == 2 || process == 3) {
                swal.fire('', newmessage, 'success')
                $("#btnCalcel").trigger("click");
            } else {
                swal.fire('', newmessage, 'error')
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
                var current_active_step = $(this).parents('.f1').find('.f1-step-vehicle.active');
                // var icon_active_step = $(this).parents('.f1').find('.fa-stack-2x.-ml-1.flicker');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                // fields validation
                parent_fieldset.find(
                    // 'input[type="text"], input[type="password"], textarea, select, input[type="number"], input[type="tel"],input[type="email"],input[type="date"]'
                ).each(
                    function() {
                        // $('div').hasClass('container')
                        if ($(this).hasClass('Inactive')) {
                            // console.log('no se bloquea');
                        } else if ($(this).val() == "" || $(this).val() == 0) {
                            $(this).addClass('input-error');
                            next_step = false;
                        } else {
                            $(this).removeClass('input-error');
                        }
                    });


                // fields validation

                if (next_step) {
                    parent_fieldset.fadeOut(400, function() {
                        // change icons
                        // console.log(current_active_step);
                        current_active_step.removeClass('active').addClass('activated').next()
                            .addClass('active');
                        parpadeo(true);
                        // lastsaved();

                        // progress bar
                        bar_progress(progress_line, 'right');
                        // show next step
                        // console.log(stepinfinite);
                        $(this).next().fadeIn();
                        // scroll window to beginning of the form
                        scroll_to_class($('.f1'), 25);
                    });
                }

            });

            // previous step
            $('.f1 .btn-previous').on('click', function() {
                // navigation steps / progress steps
                var current_active_step = $(this).parents('.f1').find('.f1-step-vehicle.active');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                $(this).parents('fieldset').fadeOut(400, function() {
                    // change icons
                    current_active_step.removeClass('active').prev().removeClass('activated')
                        .addClass('active');
                    parpadeo(false);
                    lastsaved();
                    // progress bar
                    // console.log(stepinfinite);
                    bar_progress(progress_line, 'left');
                    // show previous step
                    $(this).prev().fadeIn();
                    // scroll window to beginning of the form
                    scroll_to_class($('.f1'), 25);
                });
            });

            $('.f1 .btn-Finalize').on('click', function() {

                var parent_fieldset = $(this).parents('fieldset');
                var Finalize = true;
                // fields validation
                parent_fieldset.find(
                    'input[type="text"], input[type="password"], textarea, select, input[type="number"], input[type="tel"],input[type="email"],input[type="date"]'
                ).each(function() {
                    if ($(this).hasClass('Inactive')) {
                        // console.log('no se bloquea');
                    } else if ($(this).val() == "" || $(this).val() == 0) {
                        $(this).addClass('input-error');
                        Finalize = false;
                    } else {
                        $(this).removeClass('input-error');
                    }
                });
                // fields validation

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

                    if (stepinfinite >= 4) {
                        stepinfinite = 4;
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
                    if (stepinfinite == 4) {
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
                if (stepinfinite >= 4) {
                    document.getElementById('btnStore').classList.remove('Inactive');
                    document.getElementById('btnStore').classList.add('Active');
                } else {
                    document.getElementById('btnStore').classList.remove('Active');
                    document.getElementById('btnStore').classList.add('Inactive');
                    document.getElementById('btnFinalize').classList.remove('Inactive');
                    // document.getElementById('btnFinalize').classList.add('Active');
                }
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
            var current_active_step_s = $('.f1').find('.f1-step-vehicle');
            var current_active_step = $('.f1').find('.f1-step-vehicle.active');
            var current_active_step_a = $('.f1').find('.f1-step-vehicle.activated');
            var progress_line = $('.f1').find('.f1-progress-line');
            // console.log(current_active_step_a);

            $('#frm-vehicle').trigger("reset");

            documentOn('property_card_number', 'DocPropertyCardNumber');
            documentAbove('InputDocPropertyCardNumber', 'DocPropertyCardNumber');

            documentOn('secure_end_date', 'DocNumberAccreditationSoat');
            documentAbove('InputDocNumberAccreditationSoat', 'DocNumberAccreditationSoat');

            documentOn('technomechanical_end_date', 'DocNumberTechnomechanicalAccreditation');
            documentAbove('InputDocNumberTechnomechanicalAccreditation', 'DocNumberTechnomechanicalAccreditation');

            documentOn('expiration_card_operation', 'DocCardOperation');
            documentAbove('InputDocCardOperation', 'DocCardOperation');

            documentOn('expiration_preventive', 'DocPreventive');
            documentAbove('InputDocPreventive', 'DocPreventive');

            documentOn('certificate_extracontractual', 'DocCertificateExtracontractual');
            documentAbove('InputDocCertificateExtracontractual', 'DocCertificateExtracontractual');

            documentOn('civil_contractual', 'DocCivilContractual');
            documentAbove('InputDocCivilContractual', 'DocCivilContractual');

            $('.f1 fieldset').fadeOut(400, function() {
                // change icons

                // parpadeo(false);
                // lastsaved();
                // progress bar
                // documentract();
                progress_line.attr('style', 'width: ' + 25.66 + '%;').data('now-value', 25.66);

                current_active_step.removeClass('active');
                current_active_step_a.removeClass('activated');
                var contador;
                if (stepinfinite < 4) {
                    contador = stepinfinite;
                } else {
                    contador = 4;
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

                $(this).prev().prev().prev().fadeIn();
                // scroll window to beginning of the form
                scroll_to_class($('.f1'), 25);
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

        function viewhideinputs(id, adhere, stirring) {

            document.getElementById(id).classList.remove(stirring);
            document.getElementById(id).classList.add(adhere);
        }

        //fin scritp de formulario paso a paso

        jQuery('#secure_end_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#technomechanical_end_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#expiration_card_operation').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#expiration_preventive').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#certificate_extracontractual').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#civil_contractual').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#admission_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        jQuery('#vehicle_pickup_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });


        function fechasSet(id) {

            $('#' + id).on('change', function(e) {
                @this.set(id, e.target.value);
            });
        }

        function documentAbove(input, color) {

            var inputDocument = document.getElementById(input).value;

            if (inputDocument != '' || inputDocument != 0) {

                let timerInterval
                swal.fire({
                    title: 'Cargando...',
                    html: 'Cargando documento <b></b> milliseconds.', //Cargando la información del sistema en
                    timer: 4000,
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
                        document.getElementById(color).classList.remove('icon-green');
                        document.getElementById(color).classList.add('icon-blue');
                    }
                })
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
