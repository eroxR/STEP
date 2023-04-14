


<style>
    /*Overrides for Tailwind CSS */

    /* table.dataTable.dtr-inline.collapsed>tbody>tr>td.child {
        color: #f70707;
    } */

    /* .dataTables_wrapper .dataTables_filter {
        color: #f70707;
    } */

    /* .dataTables_wrapper .dataTables_info {
        color: #f70707;
    } */

    /* .previous{
        color: #f70707;
    } */

    /*Form fields*/
   

</style>

<div>
    {{-- otra actividad desde livewire --}}
    <div class="justify-center flex">
        <h1 class="text-black dark:text-white text-4xl rounded-lg border-b-acuamarine-800 p-1">
            {{ __('Manage Users') }}</h1>
    </div>

    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2" style="max-width: 100%">

        {{-- <div>
            
            <a class="toggle-vis dark:text-white" data-column="1">id</a> - 
            <a class="toggle-vis dark:text-white" data-column="2">{{ __('Names') }}</a> - 
            <a class="toggle-vis dark:text-white" data-column="3">{{ __('identificationcard') }}</a> - 
            <a class="toggle-vis dark:text-white" data-column="4">{{ __('usertype') }}</a> - 
            <a class="toggle-vis dark:text-white" data-column="5">{{ __('charge') }}</a> -
            <a class="toggle-vis dark:text-white" data-column="6">{{ __('user state') }}</a> -
            <a class="toggle-vis dark:text-white" data-column="7">{{ __('user entry date') }}</a> -
            <a class="toggle-vis dark:text-white" data-column="8">{{ __('email') }}</a> -
            <a class="toggle-vis dark:text-white" data-column="9">{{ __('username') }}</a> - --}}
            {{-- <a class="toggle-vis" data-column="10">Salary</a> - --}}
        {{-- </div> --}}

        <!--Card-->
        <div id='recipients'
            class="dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800 p-8 mt-6 lg:mt-0 rounded shadow bg-white">


            <table id="example"
                class="stripe dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800"
                style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr class="dark:text-white">
                        <th data-priority="0">{{ __('Actions') }}</th>
                        <th data-priority="1">ID</th>
                        <th data-priority="2">{{ __('Names') }}</th>
                        <th data-priority="3">{{ __('identificationcard') }}</th>
                        <th data-priority="4">{{ __('usertype') }}</th>
                        <th data-priority="5">{{ __('charge') }}</th>
                        <th data-priority="6">{{ __('user state') }}</th>
                        <th data-priority="7" style="width:80%">{{ __('user entry date') }}</th>
                        <th data-priority="8">{{ __('email') }}</th>
                        <th data-priority="9">{{ __('username') }}</th>

                    </tr>
                </thead>
                <tbody {{-- class="dark:bg-gray-800 dark:text-white" --}}>
                </tbody>

            </table>


        </div>
        <!--/Card-->


    </div>
    <!--/container-->


</div>

<!--Datatables -->


@section('scripts')
    <script>
        $(document).ready(function() {

            
            var table = $('#example').DataTable({
                lengthMenu: [
                    [5, 10, 50, 100, 200, -1],
                    [5, 10, 50, 100, 200, "∞"]
                ],
                responsive: true,
                autoWidth: false,
                autoFill: true,
                // stateSave: true,
                // data-order='[[ 1, "desc" ]]',
                "order": [[ 1, "desc" ]],
                dom: "<'ui stackable grid'"+
                         "<'row'"+
                             "<'eight wide column'l>"+
                             "<'ml30'B>"+
                             "<'right aligned eight wide column'f>"+
                         ">"+
                         "<'row dt-table'"+
                             "<'sixteen wide column'tr>"+
                         ">"+
                         "<'row'"+
                             "<'seven wide column'i>"+
                             "<'right aligned nine wide column'p>"+
                         ">"+
                     ">",
                buttons: [
                        // {
                        // extend:    'copyHtml5',
                        // text:      '<i class="far fa-copy"></i>',
                        // titleAttr: 'copiar',
                        // className: "dark:bg-gray-800 dark:text-white"
                        // },
                        {
                            text: '<button onclick="crea()" class=""> crear usuario nuevo</button>',
                            titleAttr: 'Crear usuario',
                            className: "buttons-crear font-semibold leading-tight text-black bg-sky-700 rounded-full dark:bg-sky-700 dark:text-white"
                        },
                        {
                            extend:    'excelHtml5',
                            text:      '<i class="fa fa-file-excel"></i>',
                            titleAttr: 'Excel',
                            filename: 'listado de usuarios',
                            className: "dark:bg-gray-800 dark:text-white",
                            
                        },
                        {
                            extend:    'print',
                            text:      '<i class="fas fa-print"></i>',
                            titleAttr: 'Imprimir',
                            filename: 'listado de usuarios',
                            className: "dark:bg-gray-800 dark:text-white"
                        },
                        {
                            extend:    'pdfHtml5',
                            text:      '<i class="fa fa-file-pdf"></i>',
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
                columnDefs: [
                    {
                        "targets": [1],
                        "visible": false,
                        "searchable": false
                    },
                    {
                        "targets": [9],
                        "visible": false,
                        "searchable": false
                    },
                    // {
                    //     "targets": [9],
                    //     "visible": false,
                    //     "searchable": false
                    // },
                    // {
                    //     "targets": [10],
                    //     "visible": false,
                    //     "searchable": false
                    // },
                    // {
                    //     "targets": [11],
                    //     "visible": false,
                    //     "searchable": false
                    // },
                    // {
                    //     "targets": [12],
                    //     "visible": false,
                    //     "searchable": false
                    // },
                ],
                "drawCallback": function(settings) 
                {
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
                },
                // "language": {
                //     "lengthMenu": "Mostrar _MENU_ registros por pagina",
                //     "zeroRecords": "ningun registro encontrado - disculpa",
                //     "info": "mostrando la pagina _PAGE_ de _PAGES_",
                //     "infoEmpty": "No records available",
                //     "infoFiltered": "(filtrado de _MAX_ registros totales)",
                //     "search": 'Buscar:',
                //     "paginate": {
                //         "next": "Siguiente",
                //         "previous": "Anterior"
                //         }
                // },
                language: {
                    // "buttons": {
                    //     "copy": "Copiar",
                    //     "copySuccess": {
                    //         "_": "Copiado con exito",
                    //         "1": "Fila copiada con exito"
                    //     },
                    //     "copyTitle": "Tabla Copiada",
                    //     "createState": "Crear estado",
                    //     "pageLength": {
                    //         "_": "ver %d filas",
                    //         "-1": "Ver todas las Filas",
                    //         "1": "Ver una fila"
                    //     },
                    //     "renameState": "Renombrar",
                    //     "updateState": "Actualizar",
                    //     "csv": "CSV",
                    //     "excel": "Excel",
                    //     "pdf": "PDF",
                    //     "collection": "Colección",
                    //     "colvis": "Visibilidad Columna",
                    //     "colvisRestore": "Restaurar Visibilidad",
                    //     "copyKeys": "Presione Inicio + C para copiar la información de la tabla.  Para Cancelar hacer click en este mensaje para o ESC",
                    //     "print": "Imprimir",
                    //     "removeAllStates": "Eliminar todos los estados",
                    //     "removeState": "Eliminar",
                    //     "savedStates": "Estados Guardados",
                    //     "stateRestore": "Estado %d"
                    // },
                    // "datetime": {
                    //     "months": {
                    //         "0": "Enero",
                    //         "1": "Febrero",
                    //         "10": "Noviembre",
                    //         "11": "Diciembre",
                    //         "2": "Marzo",
                    //         "3": "Abril",
                    //         "4": "Mayo",
                    //         "5": "Junio",
                    //         "6": "Julio",
                    //         "7": "Agosto",
                    //         "8": "Septiembre",
                    //         "9": "Octubre"
                    //     },
                    //     "weekdays": {
                    //         "0": "Dom",
                    //         "1": "Lun",
                    //         "2": "Mar",
                    //         "4": "Jue",
                    //         "5": "Vie",
                    //         "3": "Mié",
                    //         "6": "Sáb"
                    //     },
                    //     "amPm": [
                    //         "am",
                    //         "pm"
                    //     ],
                    //     "previous": "Anterior",
                    //     "next": "Siguiente",
                    //     "hours": "Hora",
                    //     "minutes": "Minuto",
                    //     "seconds": "Segundo",
                    //     "unknown": "Desconocido"
                    // },
                    // "editor": {
                    //     "close": "Cerrar",
                    //     "create": {
                    //         "button": "Nuevo",
                    //         "submit": "Crear",
                    //         "title": "Crear nueva entrada"
                    //     },
                    //     "edit": {
                    //         "button": "Editar",
                    //         "submit": "Actualizar",
                    //         "title": "Editar Registro"
                    //     },
                    //     "remove": {
                    //         "button": "Borrar",
                    //         "submit": "Borrar",
                    //         "title": "Borrar",
                    //         "confirm": {
                    //             "_": "Esta seguro de eliminar %d registros",
                    //             "1": "Esta seguro de eliminar 1 registro"
                    //         }
                    //     },
                    //     "multi": {
                    //         "info": "Los elementos seleccionados contienen diferentes valores para esta entrada. Para editar y configurar todos los elementos de esta entrada en el mismo valor, haga clic o toque aquí, de lo contrario, conservar sus valores individuales.",
                    //         "noMulti": "Múltiples valores",
                    //         "title": "Valores multiples",
                    //         "restore": "Deshacer cambios"
                    //     },
                    //     "error": {
                    //         "system": "Ha ocurrido un error del sistema ( Mas Información)"
                    //     }
                    // },
                    "emptyTable": "Tabla Vacia",
                    "info": "",
                    "infoEmpty": "Sin informacion",
                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                    "loadingRecords": "Cargando...",
                    // "searchBuilder": {
                    //     "button": {
                    //         "_": "Creador de búsquedas (%d)",
                    //         "0": "Creador de búsquedas"
                    //     },
                    //     "clearAll": "Quitar filtro",
                    //     "data": "Datos",
                    //     "logicAnd": "Y",
                    //     "logicOr": "O",
                    //     "value": "Valor",
                    //     "add": "Agragar condición",
                    //     "condition": "Condición",
                    //     "conditions": {
                    //         "date": {
                    //             "after": "Después",
                    //             "before": "Antes",
                    //             "between": "Entre",
                    //             "empty": "Vacío",
                    //             "equals": "Igual",
                    //             "not": "No",
                    //             "notBetween": "No Entre",
                    //             "notEmpty": "No Vacío"
                    //         },
                    //         "number": {
                    //             "between": "Entre",
                    //             "empty": "Vacío",
                    //             "equals": "Igual",
                    //             "gt": "Mayor",
                    //             "gte": "Mayor o Igual",
                    //             "lt": "Menor",
                    //             "lte": "Menor o Igual",
                    //             "not": "No",
                    //             "notBetween": "No Entre",
                    //             "notEmpty": "No vacío"
                    //         },
                    //         "string": {
                    //             "contains": "Contine",
                    //             "empty": "Vacío",
                    //             "endsWith": "Termina en",
                    //             "equals": "Iguales",
                    //             "not": "No",
                    //             "notEmpty": "No Vacío",
                    //             "startsWith": "Empieza en",
                    //             "notContains": "No Contiene",
                    //             "notStartsWith": "No empieza en",
                    //             "notEndsWith": "No finaliza en"
                    //         },
                    //         "array": {
                    //             "equals": "Iguales",
                    //             "empty": "Vacío",
                    //             "contains": "Contiene",
                    //             "not": "No",
                    //             "notEmpty": "No Vacío",
                    //             "without": "Con"
                    //         }
                    //     },
                    //     "deleteTitle": "Eliminar regla",
                    //     "leftTitle": "Izquierda",
                    //     "rightTitle": "Derecha",
                    //     "title": {
                    //         "0": "Generador de Consultas",
                    //         "_": "Generador de Consultas (%d)"
                    //     }
                    // },
                    // "searchPanes": {
                    //     "clearMessage": "Borrar Filtro",
                    //     "collapseMessage": "desplegar todo",
                    //     "loadMessage": "Cargando informacion",
                    //     "showMessage": "Mostrar todos",
                    //     "title": "Filtros Activos - %d",
                    //     "collapse": {
                    //         "0": "Paneles de Búsqueda",
                    //         "_": "Paneles de Búsqueda (%d)"
                    //     },
                    //     "count": "Cuenta",
                    //     "countFiltered": "Cuenta Filtro",
                    //     "emptyPanes": "No hay información"
                    // },
                    // "searchPlaceholder": "Busqueda en tabla",
                    // "select": {
                    //     "cells": {
                    //         "_": "%d celdas seleccionadas",
                    //         "1": "1 celda seleccionada"
                    //     },
                    //     "columns": {
                    //         "_": "%d columnas seleccionadas",
                    //         "1": "1 columna seleccionada"
                    //     },
                    //     "rows": {
                    //         "1": "Fila seleccionada",
                    //         "_": "Filas Seleccionadas"
                    //     }
                    // },
                    // "aria": {
                    //     "sortAscending": "Activar para ordenar ascendente",
                    //     "sortDescending": "Activar para ordenar descendente"
                    // },
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
                    // "stateRestore": {
                    //     "creationModal": {
                    //         "button": "Crear",
                    //         "columns": {
                    //             "search": "Búsqueda columnas",
                    //             "visible": "Visibilidad de columa"
                    //         },
                    //         "name": "Nombre:",
                    //         "order": "Ordenar",
                    //         "paging": "Paginado",
                    //         "scroller": "Posición desplazamiento",
                    //         "search": "Buscar",
                    //         "searchBuilder": "Generador de Consultas",
                    //         "select": "Seleccionar",
                    //         "title": "Crear Nuevo Estado",
                    //         "toggleLabel": "Incluir:"
                    //     },
                    //     "duplicateError": "Ya existe un estado con este nombre",
                    //     "emptyError": "El nombre no puede estar vacío",
                    //     "emptyStates": "Estado sin Guardar",
                    //     "removeConfirm": "Esta seguro de eliminar el estado %d?",
                    //     "removeError": "Error al eliminar el estado",
                    //     "removeJoiner": "y",
                    //     "removeSubmit": "Eliminar",
                    //     "removeTitle": "Eliminar Estado",
                    //     "renameButton": "Eliminar",
                    //     "renameLabel": "Nuevo nombre para %s",
                    //     "renameTitle": "Renombrar Estado"
                    // }
                },
                ajax: "{{ route('datatable.user') }}",
                columns: [
                    {
                       
                         "render": function(data, type, row) {

                                                return          "<div class='flex items-center space-x-4 text-sm'>" +
                                                                    "<button id='edit' onclick='edit(" + row['id'] + ")'" +
                                                                        "class='inline-flex items-center justify-center  bg-yellow-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-400 focus:outline-none focus:bg-yellow-700 focus:ring focus:ring-red-200 active:bg-yellow-700 readonly:opacity-25 transition' aria-label='Edit'>" +
                                                                        "<svg class='w-5 h-5' aria-hidden='true' fill='currentColor'" +
                                                                            "viewBox='0 0 20 20'>" +
                                                                            "<path fill-rule='evenodd'" +
                                                                                "d='M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z'>" +
                                                                            "</path>" +
                                                                        "</svg>" +
                                                                    "</button>" +
                                                                    "<button onclick='deletes(" + row['id'] + ")'" +
                                                                        "class='inline-flex items-center justify-center  bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 readonly:opacity-25 transition' aria-label='Delete'>" +
                                                                        "<svg class='w-5 h-5' aria-hidden='true' fill='currentColor'" +
                                                                            "viewBox='0 0 20 20'>" +
                                                                            "<path fill-rule='evenodd'" +
                                                                                "d='M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z'" +
                                                                                "clip-rule='evenodd'></path>" +
                                                                        "</svg>" +
                                                                    "</button>" +
                                                                "</div>";
                                                            },"className": "dark:bg-gray-800 dark:text-white border-b"
                    },
                    {
                        data: 'id',
                        "className": "dark:bg-gray-800 dark:text-white border-b"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['usertype'] == 3) {
                                // return 1;
                                if (row['supplier_name'] == "" || row['supplier_name'] == null) {
                                    return "";
                                } else {
                                    // return 1;
                                    if (row['profile_photo_path'] == null || row['profile_photo_path'] == "") {
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
                                                        "<p class='font-semibold'>" + row['supplier_name'] + "</p>" +
                                                    "</div>" +
                                                "</div>" +
                                            "</div>"); 

                                    } else {
                                        // return "no hay imagen empresa";
   
                                        return (  
                                            "<div class='flex items-center text-sm'>" +
                                                "<div class='relative  w-8 h-8 mr-3 rounded-full md:block'>" +
                                                            "<img src='" + row['profile_photo_path'] + "' alt=''" +
                                                                "class='object-cover w-full h-full rounded-full' loading='lazy'>" +
                                                        "<div class='absolute inset-0 rounded-full shadow-inner'" +
                                                            "aria-hidden='true'>" +
                                                        "</div>" +
                                                "</div>" +
                                                "<div class='flex items-center text-sm'>" +
                                                    "<div>" +
                                                        "<p class='font-semibold'>" + row['supplier_name'] + "</p>" +
                                                    "</div>" +
                                                "</div>" +
                                            "</div>");  

                                    }
                                }
                            } else {
                                // return 0;
                                if (row['firstname'] == "" || row['firstname'] == null) {
                                    return "";
                                } else {                                  
                                    // return 2;
                                        if (row['profile_photo_path'] == null || row['profile_photo_path'] == "") {
                                            // return "si hay imagen usuario" + row['profile_photo_path'];                                            
                                            return ( 
                                                "<div class='flex items-center text-sm'>" +
                                                    "<div class='relative  w-8 h-8 mr-3 rounded-full md:block'>" +                                                        
                                                                "<img src='{{ asset('img/l_logo_step.png') }}' alt=''" +
                                                                    "class='object-cover w-full h-full rounded-full' loading='lazy'>" +
                                                            "<div class='absolute inset-0 rounded-full shadow-inner'" +
                                                                "aria-hidden='true'>" +
                                                            "</div>" +
                                                    "</div>" +
                                                    "<div class='flex items-center text-sm'>" +
                                                        "<div>" +
                                                                "<p class='font-semibold'>" + row['firstname'] + "</p>" +
                                                                "<p class='text-xs text-gray-600 dark:text-gray-400'>" +
                                                                     row['lastname'] +
                                                                "</p>" +
                                                        "</div>" +
                                                    "</div>" +
                                                "</div>");

                                        } else {
                                            // return "no hay imagen usuario";

                                            return ( 
                                                "<div class='flex items-center text-sm'>" +
                                                    "<div class='relative  w-8 h-8 mr-3 rounded-full md:block'>" +
                                                                "<img src='" + row['profile_photo_path'] + "' alt=''" +
                                                                    "class='object-cover w-full h-full rounded-full' loading='lazy'>" +
                                                            "<div class='absolute inset-0 rounded-full shadow-inner'" +
                                                                "aria-hidden='true'>" +
                                                            "</div>" +
                                                    "</div>" +
                                                    "<div class='flex items-center text-sm'>" +
                                                        "<div>" +
                                                                "<p class='font-semibold'>" + row['firstname'] + "</p>" +
                                                                "<p class='text-xs text-gray-600 dark:text-gray-400'>" +
                                                                    row['lastname'] +
                                                                "</p>" +
                                                        "</div>" +
                                                    "</div>" +
                                                "</div>");
                                        }
                                }
                            }
                        },"className": "dark:bg-gray-800 dark:text-white border-b"
                    },
                    {

                        "render": function(data, type, row) {
                            if (row['usertype'] == 3) {
                                return row['nit'];
                            } else {
                                return row['identificationcard'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'description_usertype',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['description_charge'] == null || row['description_charge'] == "") {
                                return ""
                            } else {
                                return row['description_charge'];
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        "render": function(data, type, row) {
                            if (row['user_state'] == 1) {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100 '>{{ __('ACTIVE') }}</span>";
                            } else {
                                return "<span class='px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700 '>{{ __('INACTIVE') }}</span>";
                            }
                        },
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'user_entry_date',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'email',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    {
                        data: 'username',
                        "className": "dark:bg-gray-800 dark:text-white text-center border-b"
                    },
                    // {
                    //     data: 'supplier_category',
                    //     "className": "dark:bg-gray-800 dark:text-white text-center"
                    // },
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


        });

        function edit(id){
            alert(id
            );
        }

        function crea(){
            alert("crear");
        }
    </script>
@endsection
