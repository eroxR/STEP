<div>


    <div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <svg class="mb-2 w-10 h-10 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                clip-rule="evenodd"></path>
            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
        </svg>
        <a href="#">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a help in Claim?
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to
            certify for your weekly benefits:</p>
        <a href="#" class="inline-flex items-center text-blue-600 hover:underline">
            See our guideline
            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                </path>
                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
            </svg>
        </a>
    </div>

    {{-- <div
        class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <svg class="mb-2 w-10 h-10 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                clip-rule="evenodd"></path>
            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
        </svg>
        <a href="#">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a help in Claim?
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to
            certify for your weekly benefits:</p>
        <a href="#" class="inline-flex items-center text-blue-600 hover:underline">
            See our guideline
            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                </path>
                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
            </svg>
        </a>
    </div> --}}


    <!-- component -->
    

    <button onclick="passenger()">prueba</button>



</div>
@section('scripts')
    <script>
        // swal.fire({
        //     title: '<strong>HTML <u>example</u></strong>',
        //     icon: 'info',
        //     html: 'You can use <b>bold text</b>, ' +
        //         '<a href="//sweetalert2.github.io">links</a> ' +
        //         'and other HTML tags',
        //     showCloseButton: true,
        //     showCancelButton: true,
        //     focusConfirm: false,
        //     confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        //     confirmButtonAriaLabel: 'Thumbs up, great!',
        //     cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
        //     cancelButtonAriaLabel: 'Thumbs down'
        // }).then((result) => {
        //     if (result.isConfirmed) {
        //         prueba();
        //     }
        // })

        function passenger() {
            swal.fire({
                title: '<header class="flex justify-center border-b-fuchsia-800 border-b">' +
                    '<p class="justify-start mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300"><h1 class="text-black dark:text-white text-4xl1">Lista de Pasajeros</h1></p>' +
                    '</header>',
                // icon: 'info',
                html:

                    // '<div class="w-9-12 h-4-8 mt-6 px-6 py-4 bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4">' +
                    '<div class="mt-11 border-gray-50-s container px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-auto h-9">' +

                    '<div class="flex space-x-4 clonar">' +
                    '<div class="w-6-12 ">' +
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

                    '<div class="flex items-center space-x-4 text-sm pruebapers">' +
                    '<button onclick="savePeople()" class="pruebapersb inline-flex items-center justify-center  bg-emerald-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-400 focus:outline-none focus:bg-emerald-700 focus:ring focus:ring-red-200 active:bg-emerald-700 readonly:opacity-25 transition">' +
                    'Guardar' +
                    '</button>' +
                    '</div>' +

                    '</div>',
                // '</div>' ,
                showConfirmButton: false
            })
        }

        var i = 1;
        var total = [];
        total.push(i);

        function add() {
            i++;
            total.push(i);
            // alert(total);
            $('#newInput').append('<div class="flex space-x-4" id="newRow' + i + '">' +
                '<div class="w-6-12 ">' +
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
            // alert(total);
        }
        var passengers = [];

        function savePeople() {

            for (let index = 0; index < total.length; index++) {
                passengers.push({
                    documento: document.getElementById('inputDRow' + total[index] + '').value,
                    nombreC: document.getElementById('inputNRow' + total[index] + '').value
                });
            }
            // passengers.push({documento: document.getElementById('inputDRow2').value, nombreC: document.getElementById('inputNRow2').value});
            // alert(passengers[2].documento + ' - ' + passengers[2].nombreC);
        }

        function prueba() {
            alert('prueba');
        }
    </script>
@endsection
