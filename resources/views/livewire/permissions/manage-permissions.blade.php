<div>
    <div class="py-12 mb-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="justify-center flex">
                {{-- class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-gray-50-s dark:bg-gray-800 dark:text-white" --}}
                <h1 class="text-black dark:text-white text-4xl rounded-lg border-b-yellow-800 p-1">
                    {{ __('Manage Permissions') }}
                </h1>
            </div>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs mt-4">
            {{-- <div class="px-4 py-2 mb-2 mt-1 ml-2 flex items-center border-b-fuchsia-800 border-b"> --}}
            {{-- <h1 class="text-black dark:text-white">cambio de contraseña desde livewire</h1> --}}
            {{-- <input
                    class="flex-1 mr-4 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text" placeholder="Escribe una consulta sobre la tabla" wire:model="search">

                <button @click="openModal"
                    class="px-2 py-1 font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white">
                    {{ __('create new permit') }}
                </button>
            </div> --}}

            <div class=" overflow-x-auto" style="width:100%;" wire:ignore>

                <table id="example" class="stripe dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="pl-4 py-2" data-priority="0">{{ __('Actions') }}</th>
                            <th class="pl-4 py-2" data-priority="1">ID</th>
                            <th class="pl-4 py-2" data-priority="2">{{ __('permit number') }}</th>
                            <th class="pl-4 py-2" data-priority="3">{{ __('contract number') }}</th>
                            <th class="pl-4 py-2" data-priority="4">{{ __('description typeContract') }}</th>
                            <th class="pl-4 py-2" data-priority="5">{{ __('permit start date') }}</th>
                            <th class="pl-4 py-2" data-priority="6">{{ __('permit end date') }}</th>
                            <th class="pl-4 py-2" data-priority="7">{{ __('permit code') }}</th>
                            <th class="pl-4 py-2" data-priority="8">{{ __('fuec state') }}</th>
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

    @include('livewire.permissions.modalPermissions-create')

    <!--end Modal create -->

    <!-- Modal edit -->

    @include('livewire.permissions.modalPermissions-edit')

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
                ajax: "{{ route('datatable.permit') }}",
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
                        data: 'permit_number',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
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
                        data: 'permit_start_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'permit_end_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        data: 'permit_code',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b text-xs text-gray-600"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['fuec_state'] == 1) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700'>{{ __('INICIAL') }}</span>";
                            } else if (row['fuec_state'] == 2) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100'>{{ __('EN CURSO') }}</span>";
                            } else if (row['fuec_state'] == 3) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100'>{{ __('PENDIENTE') }}</span>";
                            } else if (row['fuec_state'] == 4) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-sky-700 bg-sky-300 rounded-full dark:bg-sky-700 dark:text-sky-100'>{{ __('FINALIZADO') }}</span>";
                            } else if (row['fuec_state'] == 5) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700'>{{ __('CANCELADO') }}</span>";
                            }
                        },
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

            $("#active5").removeClass('hidden');

        });

        var limitcars = 0;

        // Livewire.on('prueba', () => {
        //     swal.fire('prueba', 'esto termina la función en php', 'error')
        // })

        // abriendo modal para editar
        Livewire.on('openModalEdit', () => {
            viewhideinputs('modalEdit', 'block', 'hidden');


            let selectedAlldrive = document.querySelectorAll(".selected-drive");

            selectedAlldrive.forEach((selected) => {
                let optionsContainerdrive = selected.previousElementSibling;

                selected.addEventListener("click", () => {
                    optionsContainerdrive.classList.toggle('active');
                });

            });

            let selectedAllvehicle = document.querySelectorAll(".selected-vehicle");

            selectedAllvehicle.forEach((selected) => {
                let optionsContainervehicle = selected.previousElementSibling;

                selected.addEventListener("click", () => {
                    optionsContainervehicle.classList.toggle('active');
                });

            });

        })

        // enviando los datos para que los reciba la modal editar
        function edit(id) {

            let timerInterval
            swal.fire({
                title: 'loading...',
                html: 'Loading system information into <b></b> milliseconds.', //Cargando la información del sistema en
                timer: 2000,
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

            let selectedAlldrive = document.querySelectorAll(".selected-drive");

            selectedAlldrive.forEach((selected) => {
                let optionsContainerdrive = selected.previousElementSibling;

                selected.addEventListener("click", () => {
                    optionsContainerdrive.classList.toggle('active');
                });

            });

            let selectedAllvehicle = document.querySelectorAll(".selected-vehicle");

            selectedAllvehicle.forEach((selected) => {
                let optionsContainervehicle = selected.previousElementSibling;

                selected.addEventListener("click", () => {
                    optionsContainervehicle.classList.toggle('active');
                });

            });

            document.getElementById('modalEdit').classList.add('hidden');
        }

        function deletes(id) {

            // console.log(id);

            swal.fire({
                title: 'sure you want to delete?',
                // seguro que quieres eliminar?
                text: "If you delete this record, all the information and documents of this permit will be deleted.",
                // si eliminas este registro se borrara toda la información y documentos de este permiso
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

        function view(id) {
            window.open('http://127.0.0.1:8000/pdfs/pdf-fuec/' + id, '_blank')
        }

        const steps = ['1', '2'];
        const swalQueueStep = swal.mixin({
            icon: 'error',
            confirmButtonText: 'Vehiculos',
            cancelButtonText: 'Conductores',
            progressSteps: steps,
            // input: 'text',
            // inputAttributes: {
            //     required: true
            // },
            reverseButtons: true,
            // validationMessage: 'This field is required'
        });

        const values = [];
        let currentStep;

        Livewire.on('crud', (contractnumber, process, contractType, id, permit_number) => {

            var process = process.process;
            var contractnumber = contractnumber.contractnumber;
            var contractType = contractType.contractType;
            var id = id.id;
            var permit_number = permit_number.permit_number;
            var main = '';
            var message = '';

            if (process == 1) {

                main = 'Permit number ' + permit_number + ' of contract number ' + contractnumber + ' type ' +
                    contractType + ' has been successfully generated';

                // Se ha generado el permiso numero xxx del contrato  numero xxx tipo xxx sactisfactoriamente

                swal.fire({
                    title: 'you want to generate pdf?',
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: 'Generate PDF',
                    denyButtonText: ``,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {

                        window.open('http://127.0.0.1:8000/pdfs/pdf-fuec/' + id, '_blank')
                        swal.fire(main, message, 'success')
                    } else if (result.isDenied) {

                    } else {
                        swal.fire(main, message, 'success')
                    }
                })

            } else if (process == 2) {

                message = 'Permit number ' + permit_number + ' of contract number ' + contractnumber +
                    ' type ' + contractType + ' has been successfully updated';

                // Se ha actualizado el permiso numero xxx del contrato numero xxx tipo xxx sactisfactoriamente

                swal.fire(main, message, 'success')

            } else if (process == 3) {

                message = 'Permit number ' + permit_number + ' of contract number ' + contractnumber +
                    ' type ' + contractType + ' has been removed successfully';

                // Se ha eliminado el permiso numero xxx del contrato numero xxx tipo xxx sactisfactoriamente

                swal.fire(main, message, 'success')
            } else if (process == 4) {

                var driverHTML = '';

                driverHTML +=
                    '<strong><h2>Revisa la fecha final del FUEC, puesto que para los siguientes conductores o vehiculos estan vencidos o se vencen documentos dentro de la vigencia del FUEC</h2></strong> <br>';
                if (id != null) {
                    for (let a = 0; a < id.length; a++) {
                        driverHTML += '<div>' +
                            '<h1> <strong>Conductor</strong> ' + id[a]['fullname'] + '</h1>' +
                            '<table class="w-full whitespace-no-wrap">' +
                            '<thead>' +
                            '<tr' +
                            'class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">' +
                            '<th class="">Documento</th>' +
                            '<th class="">Fecha Vencimiento</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody class=" divide-y dark:divide-gray-700 ">';

                        for (let i = 1; i < Object.keys(id[a].documents).length; i++) {

                            driverHTML += '<tr class="text-gray-700 dark:text-gray-400">' +
                                '<td class=" text-sm">' +
                                '<span type = "button"' +
                                'class ="text-white w-full text-xs leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file" >' +
                                id[a]['documents']['document' + [i]] +
                                '</span>' +
                                '</td>' +
                                '<td class=" text-xs">' +
                                '<span type = "button"' +
                                'class ="text-white w-full text-xs leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file" >' +
                                id[a]['dates']['date' + [i]] +
                                '</span>' +
                                '</td>' +
                                '</tr>';

                        }
                        driverHTML += '</tbody>' +
                            '</table>' +
                            '</div>';
                    }
                }

                var vehicleHTML = '';

                vehicleHTML +=
                    '<strong><h2>Revisa la fecha final del FUEC, puesto que para los siguientes conductores o vehiculos estan vencidos o se vencen documentos dentro de la vigencia del FUEC</h2></strong> <br>';
                if (permit_number != null) {
                    for (let a = 0; a < permit_number.length; a++) {
                        vehicleHTML += '<div>' +
                            '<h1> <strong>Placa</strong> ' + permit_number[a]['plate'] + '</h1>' +
                            '<table class="w-full whitespace-no-wrap">' +
                            '<thead>' +
                            '<tr' +
                            'class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">' +
                            '<th class="">Documento</th>' +
                            '<th class="">Fecha Vencimiento</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody class=" divide-y dark:divide-gray-700 ">';

                        for (let i = 1; i < Object.keys(permit_number[a].documents).length; i++) {

                            vehicleHTML += '<tr class="text-gray-700 dark:text-gray-400">' +
                                '<td class=" text-sm">' +
                                '<span type = "button"' +
                                'class ="text-white w-full text-xs leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file" >' +
                                permit_number[a]['documents']['document' + [i]] +
                                '</span>' +
                                '</td>' +
                                '<td class=" text-xs">' +
                                '<span type = "button"' +
                                'class ="text-white w-full text-xs leading-5 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple btn-file" >' +
                                permit_number[a]['dates']['date' + [i]] +
                                '</span>' +
                                '</td>' +
                                '</tr>';

                        }
                        vehicleHTML += '</tbody>' +
                            '</table>' +
                            '</div>';
                    }
                }

                // Definimos una función asincrónica que contiene el bucle
                async function runSteps() {
                    for (currentStep = 0; currentStep < steps.length;) {

                        // console.log(currentStep);
                        // let newcontenidoHTML = '';

                        if (currentStep == 1) {
                            // console.log('si');
                            contenidoHTML = vehicleHTML;
                        } else {
                            // console.log('no');
                            contenidoHTML = driverHTML;
                        }

                        const result = await swalQueueStep.fire({
                            // title: `Question ${steps[currentStep]}`,
                            html: contenidoHTML,
                            // inputValue: values[currentStep],
                            showCancelButton: currentStep > 0,
                            showConfirmButton: currentStep == 0,
                            currentProgressStep: currentStep
                        });

                        if (result.value) {
                            values[currentStep] = result.value;
                            currentStep++;
                        } else if (result.dismiss === swal.DismissReason.cancel) {
                            currentStep--;
                        } else {
                            break;
                        }
                    }

                    // if (currentStep === steps.length) {
                    //     swal.fire(JSON.stringify(values));
                    // }
                }

                // Llamamos a la función asincrónica para ejecutar el código
                runSteps();
            } else if (process == 5) {
                // message = 'Permit number ' + permit_number + ' of contract number ' + contractnumber +
                //     ' type ' + contractType + ' has been removed successfully';

                // Se ha eliminado el permiso numero xxx del contrato numero xxx tipo xxx sactisfactoriamente
                message =
                    'Las fechas del Fuec deben de estar dentro de la fecha de inicio y la fecha final del contrato N° ' +
                    contractnumber + ' de ' + contractType;

                swal.fire(main, message, 'error')
            }


            $('#example').DataTable().ajax.reload(null, 1);

        })


        Livewire.on('assignLimit', (limitcar) => {

            limitcars = limitcar.limitcar;

            console.log(limitcars);

            if (limitcars > 1) {
                single = ' conductores y vehiculos';
            } else {
                single = ' conductor y un vehiculo';
            }

            var dateStart = document.getElementById('permit_start_date').value;
            var dateEnd = document.getElementById('permit_end_date').value;

            if (dateStart != "" || dateEnd != "") {
                viewhideinputs('divchangeDate', 'Active', 'Inactive');
            }

            message = 'recuerda solo puedes escoger ' + limitcars + single;

            if (limitcars > 1) {
                swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                });

                changeContract();
            } else {
                viewhideinputs('fieldset1Buttons', 'Inactive', 'Active');

            }

        });

        function contractType() {
            var id = 'labelPermitStartDate';
            viewhideinputs('fieldset1Buttons', 'Inactive', 'Active');
            viewhideinputs('btnStore', 'Inactive', 'Active');
            // limpiar();
            for (var i = 0; i <= 3; i++) {
                // console.log('posición' + [i]);
                viewhideinputs(id, 'Inactive', 'Active');

                if (id == 'labelPermitStartDate') {
                    id = 'permit_start_date';
                } else if (id == 'permit_start_date') {
                    id = 'labelPermitEndDate';
                } else if (id == 'labelPermitEndDate') {
                    id = 'permit_end_date';
                }
            }
        }

        function changeContract2() {

            var id = 'labelPermitStartDate';
            for (var i = 1; i <= 4; i++) {
                // console.log('posición' + [i]);
                viewhideinputs(id, 'Active', 'Inactive');

                if (id == 'labelPermitStartDate') {
                    id = 'permit_start_date';
                } else if (id == 'permit_start_date') {
                    id = 'labelPermitEndDate';
                } else if (id == 'labelPermitEndDate') {
                    id = 'permit_end_date';
                }
            }
            // $('#permit_start_date').datetimepicker('reset');


            Livewire.emit('limitOfCars');
        }

        function changeContract() {
            // Livewire.emit('limitOfCars');
            var numContract = document.getElementById('contract').value;
            enable('select2', 'chooseDrivers');
            enable('car', 'chooseVehicles');
            if (numContract != 0 || numContract != "") {
                var id = 'labelPermitStartDate';
                for (var i = 1; i <= 4; i++) {
                    // console.log('posición' + [i]);
                    viewhideinputs(id, 'Active', 'Inactive');

                    if (id == 'labelPermitStartDate') {
                        id = 'permit_start_date';
                    } else if (id == 'permit_start_date') {
                        id = 'labelPermitEndDate';
                    } else if (id == 'labelPermitEndDate') {
                        id = 'permit_end_date';
                    }
                }

            }


        }

        function changeDate() {
            var dateStart = document.getElementById('permit_start_date').value;
            var dateEnd = document.getElementById('permit_end_date').value;

            if (dateStart != "" && dateEnd != "") {
                viewhideinputs('fieldset1Buttons', 'Active', 'Inactive');
            }
            console.log(limitcars);
            // console.log("🚀 ~ file: manage-permissions.blade.php ~ line 599 ~ limitcars", limitcars)
            // console.log("🚀 ~ file: manage-permissions.blade.php ~ line 717 ~ changeDate ~ limitcars", limitcars)
        }


        function selectDriving() {
            var driveSelect = document.getElementById('driving').value;

            if (driveSelect != "") {
                viewhideinputs('next2', 'Active', 'Inactive');
            } else {
                viewhideinputs('next2', 'Inactive', 'Active');
            }

        };

        function selectCars() {
            var vehicleSelect = document.getElementById('cars').value;

            if (vehicleSelect != "") {
                viewhideinputs('btnStore', 'Active', 'Inactive');
            } else {
                viewhideinputs('btnStore', 'Inactive', 'Active');
            }

        };

        $('#permit_start_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });

        $('#permit_end_date').datetimepicker({
            format: 'Y-m-d',
            theme: 'dark',
            timepicker: false
        });


        function fechasSet(id) {

            $('#' + id).on('change', function(e) {
                @this.set(id, e.target.value);
            });
        }

        $('.select2').select2({}).on('change', function() {
            console.log($(this).val());
            @this.set('driving', $(this).val());

            if ($(this).val().length == limitcars) {
                swal.fire(
                    '',
                    'ya no puedes escoger mas Conductores',
                    'warning'
                )
                $(".select2").prop("disabled", true);
                document.getElementById('chooseDrivers').classList.remove('Inactive');
                save();
            }

        });


        $('.car').select2({}).on('change', function() {
            // console.log($(this).val())
            @this.set('cars', $(this).val());

            if ($(this).val().length == limitcars) {
                swal.fire(
                    '',
                    'ya no puedes escoger mas Vehiculos',
                    'warning'
                )
                $(".car").prop("disabled", true);
                document.getElementById('chooseVehicles').classList.remove('Inactive');
                save();
            }

        });

        function enable(id, botom) {

            // if ($("."+id).val().length >= 2) {
            $("." + id).val(null).trigger('change');
            // }
            // $("#select2").select2({disabled:false});
            $("." + id).prop("disabled", false);
            viewhideinputs(botom, 'Inactive', 'Active');
            viewhideinputs('btnStore', 'Inactive', 'Active');
        }

        function save() {
            if ($(".select2").val().length == limitcars && $(".car").val().length == limitcars) {
                // document.getElementById('chooseDrivers').classList.remove('Inactive');
                document.getElementById('btnStore').classList.remove('Inactive');
            } else {
                viewhideinputs('btnStore', 'Inactive', 'Active');
            }
        }

        function limpiar() {

            limitcars = 100;

            enable('select2', 'chooseDrivers');
            enable('car', 'chooseVehicles');
        }

        Livewire.on('Nopermit', () => {
            swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'The contract you entered does not exist!',
                footer: '<a href="{{ route('manage-contracts') }}">You want to create that contract?</a>'
            });
            limpiar();
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
                var current_active_step = $(this).parents('.f1').find('.f1-step-fuec.active');
                // var icon_active_step = $(this).parents('.f1').find('.fa-stack-2x.-ml-1.flicker');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                // fields validation
                parent_fieldset.find(
                    'input[type="text"], input[type="password"], input[type="number"], input[type="tel"],input[type="email"],input[type="date"]'
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
                        current_active_step.removeClass('active').addClass('activated').next()
                            .addClass('active');
                        parpadeo(true);
                        viewhideinputs('divchangeDate', 'Inactive', 'Active');
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
                var current_active_step = $(this).parents('.f1').find('.f1-step-fuec.active');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                $(this).parents('fieldset').fadeOut(400, function() {
                    // change icons
                    current_active_step.removeClass('active').prev().removeClass('activated')
                        .addClass('active');
                    parpadeo(false);
                    // lastsaved();
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
                // var Finalize = true;
                // fields validation
                parent_fieldset.find(
                    'input[type="text"], input[type="password"], select, input[type="number"], input[type="tel"],input[type="email"],input[type="date"]'
                ).each(function() {
                    if ($(this).hasClass('Inactive')) {
                        // console.log('no se bloquea');
                    } else if ($(this).val() == "" || $(this).val() == 0) {
                        $(this).addClass('input-error');
                        // Finalize = false;
                    } else {
                        $(this).removeClass('input-error');
                    }
                });

            });

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

        });

        function restart() {
            // navigation steps / progress steps
            var current_active_step_s = $('.f1').find('.f1-step-fuec');
            var current_active_step = $('.f1').find('.f1-step-fuec.active');
            var current_active_step_a = $('.f1').find('.f1-step-fuec.activated');
            var progress_line = $('.f1').find('.f1-progress-line');
            // console.log(current_active_step_a);
            $('.f1 fieldset').fadeOut(400, function() {
                // change icons
                // console.log('prueba');
                // parpadeo(false);
                // lastsaved();
                // progress bar
                // documentract();
                document.getElementById('typeContract').value = 0;
                contractType();
                progress_line.attr('style', 'width: ' + 34 + '%;').data('now-value', 33);

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
            // document.getElementById('btnFinalize').classList.remove('Inactive');
            // document.getElementById('btnFinalize').classList.add('Active');

            // console.log('si termina en la funcion prueba');
        }

        function viewhideinputs(id, adhere, stirring) {

            document.getElementById(id).classList.remove(stirring);
            document.getElementById(id).classList.add(adhere);
        }
        //fin scritp de formulario paso a paso
    </script>
@endsection
