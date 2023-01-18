<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> --}}
    <title>Document</title>
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        @page {
            /* margin-left: 0.5cm;
  margin-right: 0; */
            margin: 0px;
        }

        .parrafo2 {
            font-size: 0.8rem;
        }

        .parrafo3 {
            font-size: 0.8rem;
        }

        .parrafo2-2 {
            font-size: 0.8rem;
            margin-top: 5.7%;
        }

        .parrafo5 {
            font-size: 0.8rem;
            text-align: center;
        }


        .parrafo6 {
            font-size: 0.8rem;
        }

        .parrafo6-1 {
            margin-top: -1.9%;
            font-size: 0.8rem;
        }

        .cabecera {
            width: 98%;
            margin-top: 0.5rem;
            margin-left: 0.5rem;
            height: 6rem;
            display: flex;
            align-items: center;
            border: 1px solid rgb(0 0 0);
            border-radius: 0.25rem;
        }

        .contenedormintransporte {
            display: flex;
            justify-content: center;
            width: 37%;
            height: 6rem;
            border-right: 1px solid rgb(0 0 0);
            padding-top: 1px;
            padding-bottom: 1px;
            padding-left: 1px;
            padding-right: 1px;
        }

        .mintransporte {
            width: 100%;
            margin-top: 1rem;
            height: 70%;
        }

        .contenedorlogo {
            /* display: flex; */
            margin-top: -13%;
            margin-left: 35%;
            justify-content: center;
            width: 39%;
            height: 6rem;
            border-right: 1px solid rgb(0 0 0);
        }

        .logo {
            width: 94%;
            margin-top: 0.8rem;
            margin-left: 0.9rem;
            height: 70%;
        }

        .contenedortextoversion {
            margin-top: -13%;
            margin-left: 70%;
            display: flex;
            justify-content: center;
            width: 28%;
            height: 5rem;
            align-items: center;
        }

        .textoversion {
            width: 80%;
            font-size: 14px;
            margin-left: 3rem;
        }

        .contenedorlateral {
            /* background-color: rgb(185 28 28); */
            display: flex;
            position: absolute;
            width: 6.5rem;
            height: 819px;
        }

        .contenedorqr {
            position: absolute;
            margin-top: 45rem;
            margin-left: 0.6rem;
        }

        .qr {
            width: 5, 7rem;
        }

        .textolateral5 {
            transform: rotate(270deg);
            margin-top: 31.7rem;
            margin-left: -8.3rem;
            width: 420px;
            font-size: 0.7rem;
            position: absolute;
            color: #818080;
        }

        .textolateral4 {
            transform: rotate(270deg);
            margin-top: 32.4rem;
            margin-left: -8.5rem;
            width: 400px;
            font-size: 0.7rem;
            position: absolute;
            color: #818080;
        }

        .textolateral3 {
            transform: rotate(270deg);
            margin-top: 36.4rem;
            margin-left: -5.3rem;
            width: 270px;
            font-size: 0.7rem;
            position: absolute;
            color: #818080;
        }

        .textolateral2 {
            transform: rotate(270deg);
            margin-top: 38.6rem;
            margin-left: -3.9rem;
            width: 200px;
            /* font-size: 13px; */
            font-size: 0.7rem;
            position: absolute;
            color: #818080;
        }

        .textolateral1 {
            transform: rotate(270deg);
            margin-top: 42.5rem;
            margin-left: -0.8rem;
            width: 76px;
            /* font-size: 13px; */
            font-size: 0.7rem;
            position: absolute;
            color: #818080;
        }

        .contenedorcentral {
            /* background-color: rgb(31 41 55); */
            display: flex;
            position: absolute;
            /* width: 36.6rem; */
            width: 40rem;
            height: 819px;
            margin-left: 6.5rem;
            /* width: 52rem; */
        }

        .titulocontrato {
            font-size: 12px;
            text-align: center;
        }

        .cuadroinformacion {
            /* margin: 0.3rem; */
            border-top: 1px solid rgb(0 0 0);
            border-right: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0);
            border-radius: 2px;
            text-align: center;
            width: 100%;
        }

        .cuadroinformacion2 {
            /* margin: 0.3rem; */
            border-top: 1px solid rgb(0 0 0);
            border-right: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0);
            /* border-radius: 2px; */
            text-align: center;
            width: 100%;
        }

        .cuadroinformacion3 {
            /* margin: 0.3rem; */
            /* border-right: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0); */
            border: 1px solid rgb(0 0 0);
            border-radius: 2px;
            text-align: center;
            width: 100%;
        }

        .span1 {
            /* width: 100%; */
            padding: 1px;
            border-bottom: 1px solid rgb(0 0 0);


        }

        .span2 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .span3 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0);
        }

        .span4 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
        }

        .span5 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0);
        }

        .span6 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
        }

        .span7 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0);
        }

        .span8 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
        }

        .span9 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0);
        }

        .span10 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
        }

        .span11 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
        }

        .span12 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0);
        }

        .span11-1 {
            /* padding: 1px; */
            border-top: 1px solid rgb(0 0 0);
            border-bottom: 1px solid rgb(0 0 0);
        }

        .span12-1 {
            /* padding: 1px; */
            border-top: 1px solid rgb(0 0 0);
            border-bottom: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0);
        }

        .span13 {
            /* padding: 1px; */
            /* border-bottom: 1px solid rgb(0 0 0); */
        }

        .span14 {
            /* padding: 1px; */
            /* border-bottom: 1px solid rgb(0 0 0); */
            border-left: 1px solid rgb(0 0 0);
        }

        .span13-1 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
        }

        .span14-1 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0);
        }

        .span15 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
        }

        .span16 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0);
        }

        .span17 {
            /* padding: 1px; */
            border-bottom: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0);
        }

        .span18 {}

        .span19 {
            border-left: 1px solid rgb(0 0 0);
        }

        .span20 {
            border-left: 1px solid rgb(0 0 0);
        }

        .span21 {
            border-bottom: 1px solid rgb(0 0 0);
        }

        .span22 {
            border-left: 1px solid rgb(0 0 0);
            border-bottom: 1px solid rgb(0 0 0);
        }

        .span23 {}

        .span24 {
            border-left: 1px solid rgb(0 0 0);

        }

        .span23-1 {
            border-bottom: 1px solid rgb(0 0 0);
        }

        .span24-1 {
            border-left: 1px solid rgb(0 0 0);
            border-bottom: 1px solid rgb(0 0 0);
        }

        .parrafo1 {
            /* font-size: 15px; */
        }

        }

        .planrodamiento {
            border: 1px solid rgb(0 0 0);
        }

        .text27 {
            margin-top: -0.1%;
            /* margin-left: 0.7%; */
            font-size: 14px;
            text-align: center;
        }

        .text28 {
            margin-top: 7%;
            /* margin-left: 0.7%; */
            font-size: 14px;
            text-align: center;
        }

        .colum1 {
            position: absolute;
            width: 19%;
            height: 1.9%;
            /* margin-left: 16.7%; */
            /* margin-top: 1%; */
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum2 {
            position: absolute;
            width: 42.9%;
            height: 1.9%;
            margin-left: 19.2%;
            /* margin-top: -6.9%; */
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum3 {
            position: absolute;
            width: 22%;
            height: 1.9%;
            margin-left: 62.3%;
            /* margin-top: -6.9%; */
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum4 {
            position: absolute;
            width: 15%;
            height: 1.9%;
            margin-left: 84.5%;
            /* margin-top: -6.9%; */
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum5 {
            position: absolute;
            width: 19%;
            height: 4%;
            /* margin-left: 16.7%; */
            margin-top: 2.8%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum6 {
            position: absolute;
            width: 42.9%;
            height: 4%;
            margin-left: 19.2%;
            margin-top: 2.8%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum7 {
            position: absolute;
            width: 22%;
            height: 4%;
            margin-left: 62.3%;
            margin-top: 2.8%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum8 {
            position: absolute;
            width: 15%;
            height: 4%;
            margin-left: 84.5%;
            margin-top: 2.8%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum9 {
            position: absolute;
            width: 19%;
            height: 1.9%;
            /* margin-left: 16.7%; */
            margin-top: 7.9%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum10 {
            position: absolute;
            width: 42.9%;
            height: 1.9%;
            margin-left: 19.2%;
            margin-top: 7.9%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum11 {
            position: absolute;
            width: 22%;
            height: 1.9%;
            margin-left: 62.3%;
            margin-top: 7.9%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum12 {
            position: absolute;
            width: 15%;
            height: 1.9%;
            margin-left: 84.5%;
            margin-top: 7.9%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum13 {
            position: absolute;
            width: 19%;
            height: 4%;
            /* margin-left: 16.7%; */
            margin-top: 10.6%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum14 {
            position: absolute;
            width: 42.9%;
            height: 4%;
            margin-left: 19.2%;
            margin-top: 10.6%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum15 {
            position: absolute;
            width: 22%;
            height: 4%;
            margin-left: 62.3%;
            margin-top: 10.6%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum16 {
            position: absolute;
            width: 15%;
            height: 4%;
            margin-left: 84.5%;
            margin-top: 10.6%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum17 {
            position: absolute;
            width: 26%;
            height: 1.9%;
            /* margin-left: 16.7%; */
            /* margin-top: 1%; */
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum18 {
            position: absolute;
            width: 18%;
            height: 1.9%;
            margin-left: 26%;
            /* margin-top: -6.9%; */
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum19 {
            position: absolute;
            width: 17%;
            height: 1.9%;
            margin-left: 44%;
            /* margin-top: -6.9%; */
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum20 {
            position: absolute;
            width: 18%;
            height: 1.9%;
            margin-left: 61.3%;
            /* margin-top: -6.9%; */
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum21 {
            position: absolute;
            width: 20%;
            height: 1.9%;
            margin-left: 79.5%;
            /* margin-top: -6.9%; */
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum22 {
            position: absolute;
            width: 26%;
            height: 1.9%;
            /* margin-left: 16.7%; */
            margin-top: 2.8%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum23 {
            position: absolute;
            width: 18%;
            height: 1.9%;
            margin-left: 26%;
            margin-top: 2.8%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum24 {
            position: absolute;
            width: 17%;
            height: 1.9%;
            margin-left: 44%;
            margin-top: 2.8%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum25 {
            position: absolute;
            width: 18%;
            height: 1.9%;
            margin-left: 61.3%;
            margin-top: 2.8%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum26 {
            position: absolute;
            width: 20%;
            height: 1.9%;
            margin-left: 79.5%;
            margin-top: 2.8%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .firmacontratante {
            margin-left: 60%;
            margin-top: -19%;
        }
        }

        .firmacontratante-1 {
            position: absolute;
            margin-left: 60%;
            margin-top: -13%;
        }

        .contenedorfinal {
            background-color: rgb(99 102 241);
            display: flex;
            position: absolute;
            width: 6.5rem;
            height: 819px;
            margin-left: 43.1rem;
        }

        .footer {
            width: 100%;
            height: 10rem;
            display: flex;
            align-items: center;
            /* border: 1px solid rgb(0 0 0);
            border-radius: 0.25rem; */
            margin-top: 53.4rem;
            /* background-color: rgb(31 41 55); */
        }

        .imgfoter {
            width: 99.8%;
            height: 10rem;
            /* margin-top: 0.1%; */
        }
    </style>
</head>
@foreach ($contracts as $contract)

    <body>

        <x-contractframes>
            <!-- texto central -->
            <div class="contenedorcentral">
                @if ($contract->type_contract == 1)
                    <h6 class="titulocontrato">CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE DE ESTUDIANTE GRUPO
                        PADRES
                        <br><span>#{{ $contract->contract_number }}</span>
                    </h6>
                @endif

                @if ($contract->type_contract == 2)
                    <h6 class="titulocontrato">CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE ESPECIAL EMPRESARIAL
                        <br><span>#{{ $contract->contract_number }}</span>
                    </h6>
                @endif

                @if ($contract->type_contract == 3)
                    <h6 class="titulocontrato">CONTRATO DE Empresa Turismo
                        <br><span>#{{ $contract->contract_number }}</span>
                    </h6>
                @endif

                @if ($contract->type_contract == 4)
                    <h6 class="titulocontrato">CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE ESPECIAL CON GRUPO
                        ESPECÍFICO DE USUARIOS (TRANSPORTE DE PARTICULARES)
                        <br><span>#{{ $contract->contract_number }}</span>
                    </h6>
                @endif

                @if ($contract->type_contract == 5)
                    <h6 class="titulocontrato">CONTRATO DE Usuarios de Servicios de Salud
                        <br><span>#{{ $contract->contract_number }}</span>
                    </h6>
                @endif


                <div>
                    <table class="cuadroinformacion">
                        <thead></thead>
                        <tbody>
                            <tr>
                                <th class="span1" colspan="2">CONTRATANTE</th>
                            </tr>
                            <tr>
                                <th class="span2" colspan="1">NOMBRE</th>
                                <th class="span3" colspan="1"># IDENTIFICACIÓN</th>
                            </tr>
                            <tr>
                                <td class="span4">{{ $contract->contracting_name }}</td>
                                <td class="span5">{{ $contract->contract_document }}</td>
                            </tr>
                            <tr>
                                <th class="span6">TELÉFONO</th>
                                <th class="span7">DIRECCIÓN</th>
                            </tr>
                            <tr>
                                <td class="span8">{{ $contract->contracting_phone }}</td>
                                <td class="span9">{{ $contract->contracting_direction }}</td>
                            </tr>
                            <tr>
                                <th class="span10" colspan="2">CONTRATISTA</th>
                            </tr>
                            <tr>
                                <th class="span11">RAZON SOCIAL</th>
                                <th class="span12">NIT</th>
                            </tr>
                            <tr>
                                <td class="span13">STEP S.A.S.</td>
                                <td class="span14">900973862-1</td>
                            </tr>

                            @if ($contract->type_contract == 2 || $contract->type_contract == 4)
                                <tr>
                                    <th class="span11-1">CANAL PQRS</th>
                                    <th class="span12-1">SERVICIO AL CLIENTE</th>
                                </tr>
                                <tr>
                                    <td class="span13-1"><a href="www.google.com">servicioalcliente@step.com.co</a></td>
                                    <td class="span14-1">606 3303021</td>
                                </tr>
                                <tr>
                                    <th class="span21">FECHA INICIO CONTRATO</th>
                                    <th class="span22">FECHA FINAL CONTRATO</th>

                                </tr>
                                <tr>
                                    <td class="span23-1">{{ $fstart }} </td>
                                    <td class="span24-1">{{ $fend }}</td>
                                </tr>
                            @endif

                    </table>

                    @if ($contract->type_contract == 1)
                        <table class="cuadroinformacion2">
                            <tr>
                                <th class="span15">PÓLIZA DE SEGURO</th>
                                <th class="span16">CANAL PQRS</th>
                                <th class="span17">SERVICIO AL CLIENTE</th>
                            </tr>
                            <tr>
                                <td class="span18">{{ $contract->secure_policy }}</td>
                                <td class="span19"><a href="www.google.com">servicioalcliente@step.com.co</a></td>
                                <td class="span20">606 3303021</td>
                            </tr>
                        </table>


                        <table class="cuadroinformacion3">
                            <tr>
                                <th class="span21">FECHA INICIO CONTRATO</th>
                                <th class="span22">FECHA FINAL CONTRATO</th>

                            </tr>
                            <tr>
                                <td class="span23">{{ $fstart }}</td>
                                <td class="span24">{{ $fend }}</td>
                            </tr>
                            </tbody>
                        </table>
                    @endif
                </div>
                <div>
                    <p style="font-size: 0.8rem;" class="parrafo1">
                        Entre los suscritos a saber, el <strong> CONTRATANTE,</strong>

                        @if ($contract->type_contract == 1)
                            <strong> {{ $contract->contracting_name }}
                            </strong>
                            identificado (a) con cédula de ciudadanía No. {{ $contract->contract_document }},
                            <strong> {{ $contract->school_name }} </strong>
                            ubicado en <strong> {{ $contract->address_school }} </strong> y
                            representado legalmente por <strong> {{ $contract->legal_representative }} </strong>,
                            quien se identifica con la
                            cédula de ciudadanía Nº <strong> {{ $contract->identificationcard_represent_legal }}
                                expedida en {{ $contract->expedition_identificationcard }} </strong>
                        @endif

                        @if ($contract->type_contract == 4)
                            {{ $contract->contracting_name }} , identificado
                            con cédula de ciudadanía No. {{ $contract->contract_document }} expedida en
                            {{ $contract->expedition_identificationcard }}, quien actúa en nombre
                            propio
                        @endif



                        @if ($contract->type_contract == 2)
                            {{ $contract->contracting_name }}
                            identificado con Nit. {{ $contract->contract_document }} ubicado en
                            {{ $contract->contracting_direction }} y representado
                            legalmente por {{ $contract->legal_representative }} quien se identifica con la cédula de
                            ciudadanía
                            No. {{ $contract->identificationcard_represent_legal }} expedida en
                            {{ $contract->legal_representative_expedition_identificationcard }}
                        @endif





                        y el
                        <strong> CONTRATISTA, STEP S.A.S. SERVICIO DE TRANSPORTE ESPECIAL DE PASAJEROS</strong>,
                        legalmente constituida, habilitada como empresa de servicio público de transporte
                        terrestre
                        automotor en la modalidad de especial mediante la Resolución 036 del 10 de noviembre de
                        2016
                        del Ministerio de Transporte, identificada con el NIT No.<strong>900.973.862-1 </strong>
                        y representada
                        legalmente
                        por la señora <strong>ALBA OSIRIS HIDALGO PESCADOR</strong> quien se identifica con la
                        cédula de ciudadanía
                        No. 42.077.205 expedida en Pereira, hemos celebrado el presente <strong>CONTRATO DE
                            PRESTACIÓN
                            DE SERVICIOS DE TRANSPORTE DE
                            @if ($contract->type_contract == 1)
                                ESTUDIANTE DEL INSTITUTO
                        </strong>,
@endif

@if ($contract->type_contract == 2)
    ESPECIAL EMPRESARIAL</strong>,
@endif

@if ($contract->type_contract == 4)
    TRANSPORTE ESPECIAL CON GRUPO ESPECÍFICO DE USUARIOS (TRANSPORTE
    DE PARTICULARES)</strong>,
@endif


de conformidad a la
legislación nacional, libres de todo vicio y según las cláusulas que a continuación se
describen:
<strong>PRIMERA</strong>. <strong>OBJETO</strong>. El <strong>CONTRATISTA</strong>
@if ($contract->type_contract == 1 || $contract->type_contract == 2)
    se
    compromete frente al contratante a prestar el servicio
    de transporte especial colegio de los estudiantes, (según el listado adjunto) de acuerdo
    a la
    orden
    de servicio en recorridos (Área metropolitana) y municipios del departamento de
    Risaralda
    durante
    el {{$fyear}}. <strong>SEGUNDA: CONDICIONES PLAN DE RODAMIENTO. 1. DISPONIBILIDAD GENERAL
        VEHÍCULAR</strong>. Para efectos de prestar el servicio el
    <strong>CONTRATISTA</strong> colocará a disposición del
    <strong>CONTRATANTE</strong>
@endif

@if ($contract->type_contract == 4)
    se compromete para con el
    contratante a transportar {{ $contract->passenger_quantity }} pasajeros según el listado adjunto, el cual hace
    parte integral del presente
    contrato, desde {{ $contract->trip_from }} hasta {{ $contract->trip_to }} y viceversa hacia su punto de origen.
    <strong>SEGUNDA: CONDICIONES PLAN DE RODAMIENTO 1. DISPONIBILIDAD GENERAL ORDINARIA Y
        EXTRAORDINARIA.</strong> El plan de rodamiento ordinario será el siguiente:

    <div class="planrodamiento">
        <div class="colum1">
            <p class="text27"><strong>PLAN</strong> </p>
        </div>
        <div class="colum2">
            <p class="text27"><strong>UBICACION</strong> </p>
        </div>
        <div class="colum3">
            <p class="text27"><strong>FECHA</strong> </p>
        </div>
        <div class="colum4">
            <p class="text27"><strong>HORA</strong> </p>
        </div>

        <div>
            <div class="colum5">
                <p class="text28">Lugar de Origen </p>
            </div>
            <div class="colum6">
                <p class="text27"><strong>{{ $contract->place_of_origin }}</strong> </p>
            </div>
            <div class="colum7">
                <p class="text28"><strong>{{ $fstart }}</strong></p>
            </div>
            <div class="colum8">
                <p class="text28"><strong>14:15 PM</strong></p>
            </div>
        </div>

        <div class="colum9">
            <p class="text27">Lugar de Destino</p>
        </div>
        <div class="colum10">
            <p class="text27"><strong>{{ $contract->destination_place }}</strong> </p>
        </div>
        <div class="colum11">
            <p class="text27"><strong>{{ $fstart }}</strong></p>
        </div>
        <div class="colum12">
            <p class="text27"><strong></strong></p>
        </div>

        <div>
            <div class="colum13">
                <p class="text28">Regreso </p>
            </div>
            <div class="colum14">
                <p class="text27"><strong>{{ $contract->return_place }}</strong></p>
            </div>
            <div class="colum15">
                <p class="text28"><strong>{{ $fend }}</strong></p>
            </div>
            <div class="colum16">
                <p class="text28"><strong>16:.00 P.M</strong></p>
            </div>
        </div>
    </div>
@endif

@if ($contract->type_contract == 1)
    unos vehículos tipo MICROBUS,
@endif
@if ($contract->type_contract == 2)
    vehículos tipo MICROBUS, BUS Y BUSETA,
@endif

@if ($contract->type_contract == 1 || $contract->type_contract == 2)
    todos estos relacionados en
    un documento anexo
    al presente contrato, el <strong>CONTRATANTE</strong> entregará al momento de celebrar
    el presente contrato, un listado de rutas según demanda a satisfacer y con
@endif

@if ($contract->type_contract == 1)
    unas identificaciones,
@endif

@if ($contract->type_contract == 2)
    una relación completa de los funcionarios, empleados o contratistas a transportar por
    vehículo y acompañada de sus identificaciones,
@endif

@if ($contract->type_contract == 1 || $contract->type_contract == 2)
    lugares de residencia,
    y
@endif

</p>
</div>
</div>
<!-- espacio final -->
{{-- <div class="contenedorfinal">C</div> --}}
</x-contractframes>
<x-contractframes>
    <!-- texto central -->
    <div class="contenedorcentral">
        <div>
            <p sstyle="font-size: 7rem;" class="parrafo2">
                @if ($contract->type_contract == 1 || $contract->type_contract == 2)
                    números de contacto. Dicho listado podrá ser actualizado periódicamente siempre y cuando
                    el
                    <strong>CONTRATANTE</strong> lo haga por escrito y brinde por lo menos una semana al
                    <strong>CONTRATISTA</strong> para
                    proyectar las modificaciones a su plan de rodamiento necesarias para efectos de cubrir
                    la
                    demanda.
                    <strong>PARÁGRAFO 1</strong>: El <strong>CONTRATISTA</strong> podrá participar de la
                    creación de dicho documento adjunto,
                    en especial como consultor o asesor y a través de su coordinador de rutas y prestación
                    de
                    servicio.
                    <strong>PARÁGRAFO 2: OBSERVACIONES: 1)</strong> Los vehículos podrán ser cambiados sin
                    perjuicio de que
                    previamente le sea comunicada tal situación al <strong>CONTRATANTE. 2.</strong> Aunque
                    el vehículo sea
                    cambiado, este, al igual, continuará cumpliendo con todas las obligaciones de seguridad,
                    técnicas y
                    operativas exigidas por la normatividad vigente. <strong>3) EL CONTRATANTE</strong>
                    podrá: <strong>A</strong> Solicitar el cambio
                    inmediato de uno de los vehículos con que se preste el servicio si, según el marco
                    legal, el
                    mismo
                    ni se encuentra en las condiciones mínimas, de seguridad técnicas y/u operativas para
                    prestar el
                    servicio .<strong>B</strong>. Solicitar el cambio del vehículo por cualquier otra razón
                    y siempre cuando adjunte
                    por
                    escrito que deberá contener la razón por las cuales desean cambiar el vehículo pese a
                    estar en
                    óptimas condiciones técnicas operativas y de seguridad. <strong>TERCERA: CONDICIONES DEL
                        PLAN DEL PLAN
                        DE RODAMIENTO. 1. DISPONIBLIDAD GENERAL ORDINARIA Y
                        EXTRAORDINARIA</strong>. Los estudiantes y funcionarios del
                    <strong>CONTRATANTE</strong> que pongan a disposición
                    del <strong>CONTRATISTA</strong> serán transportados de acuerdo a la orden del servicio.
                    No habrá lugar a
                    servicios extraordinarios sin previa autorización del <strong>CONTRATANTE. 2. RADIO
                        OPERACIÓN
                        TERRITORIAL</strong>: La prestación del servicio queda limitada a un radio terrestre
                    en el área
                    metropolita
                    {{-- corregir --}} nana de Pereira, Dosquebradas La Virginia y los diferentes
                    municipios del
                    departamento de
                    Risaralda. <strong>PARÁGRAFO 1</strong>: El cambio de horario o calendario académico que
                    afecte la prestación
                    del servicio y se realice incumplimiento los procedimientos previamente descritos dará
                    lugar a
                    la
                    terminación unilateral del contrato por parte del <strong>CONTRATISTA. CUARTA. PLAN DE
                        CONTIGENCIA. EL CONTRATISTA</strong> dispondrá de la aplicación del plan de
                    contingencia respectivo,
                    a fin de suplir los inconvenientes que puedan tener los vehículos que prestan el
                    servicio al
                    <strong>CONTRATANTE. QUINTA. OLBIGACIONES DEL CONTRATISTA 1)</strong> Cumplir
                    estrictamente con
                    los horarios establecidos. <strong>2)</strong> Recoger y entregar a los pasajeros en la
                    puerta de la residencia o
                    en
                    la portería delos condominios sin ingresar a éstos. <strong>3)</strong> Llevar con
                    seguridad, aseo y comodidad al
                    pasajero, respetando las normas de tránsito y de transporte especial vigente. Llevar a
                    una
                    velocidad
                    moderada durante todo el recorrido. <strong>5)</strong> Mantener el (los) vehículo (s)
                    en excelentes condiciones
                    de
                    aseo, estado técnico mecánico, haciendo los respectivos mantenimientos preventivos.
                    <strong>6)</strong> Tener
                    conductores de certificada experiencia, habilidad, responsabilidad, cultura, seriedad y
                    de
                    conformidad con la ley. <strong>7)</strong> Expedir copia simple física o digital,
                    previa solicitud en tal
                    sentido del
                    <strong>CONTRANTANTE</strong> de la póliza de responsabilidad civil contractual y
                    extracontractual contratada,
                    habilitación contrato, SOAT, licencia, de conducción del conductor y demás documentos
                    que
                    requiera para verificar el cumplimiento de la normatividad vigente en materia de
                    transporte
                    especial
                    parte de los pasajeros que ocasionen daños de hasta 15% del parque automotor dispuestos
                    para la
                    prestación de servicio. <strong>B) POR PARTE DEL CONTRATANTE: 1)</strong> Por
                    inconformidad expresa con la
                    prestación del servicio, previa denuncia por escrito y por medio PQRS realizada al
                    <strong>CONTRATISTA</strong>
                    sin que este ejecute acciones o tome medidas correctivas, o explique justamente la
                    situación. 2)
                    Por
                    incumplimiento con alguno de los compromisos adquiridos en el presente contrato.
                    <strong>8)</strong> Llevar las
                    puertas cerradas, recogiendo y dejando a los pasajeros en sitios seguros. <strong>SEXTA:
                        OBLIGACIONES
                        DEL CONTRATANTE: 1)</strong> Suministrar al <strong>CONTRATISTA</strong> toda la
                    información necesaria, oportuna
                    sobre lugares y horarios de servicio, como mínimo con cinco (05) días de anticipación.
                @endif

                @if ($contract->type_contract == 4)
                    No habrá lugar a servicios extraordinarios sin previa autorización y un nuevo contrato independiente
                    suscrito entre CONTRATANTE Y CONTRATISTA. <strong>2. DISPONIBILIDAD HORARIA</strong>. Según el plan
                    de
                    rodamiento descrito, el tiempo estimado de servicio y disponibilidad del (os) vehículo (s) será de
                    horas,
                    desde la fecha de iniciación hasta la terminación del contrato.
                    <strong>TERCERA. CLASE Y NUMERO DE VEHÍCULOS</strong>. Para efectos de ejecutar el presente
                    contrato, el
                    <strong>CONTRATISTA</strong> pone a disposición del <strong>CONTRATANTE</strong> el (los) siguiente
                    (s) vehículo (s):

                    @foreach ($vehicles as $vehicle)
                        <div class="datosVehiculo">
                            <div class="colum17">
                                <p class="text27"><strong>TIPO VEHÍCULO</strong> </p>
                            </div>
                            <div class="colum18">
                                <p class="text27"><strong>MARCA</strong> </p>
                            </div>
                            <div class="colum19">
                                <p class="text27"><strong>MODELO</strong> </p>
                            </div>
                            <div class="colum20">
                                <p class="text27"><strong>PLACA</strong> </p>
                            </div>
                            <div class="colum21">
                                <p class="text27"><strong>LATERAL</strong> </p>
                            </div>

                            <div>
                                <div class="colum22">
                                    <p class="text27">{{$vehicle->vehicle_type_name}} </p>
                                </div>
                                <div class="colum23">
                                    <p class="text27"><strong>{{$vehicle->brand_vehicle}}</strong> </p>
                                </div>
                                <div class="colum24">
                                    <p class="text27"><strong>{{$vehicle->model_vehicle}}</strong></p>
                                </div>
                                <div class="colum25">
                                    <p class="text27"><strong>{{$vehicle->plate_vehicle}}</strong></p>
                                </div>
                                <div class="colum26">
                                    <p class="text27"><strong>{{$vehicle->side_vehicle}}</strong></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <p class="parrafo2-2">
                        <strong>PARÁGRAFO 1 OBSERVACIONES: 1</strong>. El vehículo podrá ser cambiado sin perjuicio de
                        que
                        previamente
                        le sea comunicada tal situación al <strong>CONTRATANTE. 2</strong>. Aunque el vehículo sea
                        cambiado,
                        éste, al igual
                        que todo el parque automotor, continuará cumpliendo con todas las especificaciones de seguridad,
                        técnicas y operativas exigidas por la normatividad vigente. <strong>3</strong>. El
                        <strong>CONTRATANTE</strong> podrá solicitar el
                        cambio
                        inmediato del vehículo si, según el marco legal, el mismo no se encuentra en las condiciones
                        mínimas
                        de
                        seguridad, técnicas y/u operativas para prestar el servicio. <strong>CUARTA. PLAN DE
                            CONTINGENCIA</strong>. El
                        <strong>CONTRATISTA</strong> dispondrá de la aplicación del plan de contingencia respectivo, a
                        fin
                        de suplir los
                        inconvenientes que puedan tener los vehículos que prestan el servicio al <strong>CONTRATANTE.
                            QUINTA</strong>.
                        <strong>OBLIGACIONES DEL CONTRATISTA 1</strong>. Cumplir estrictamente con los horarios
                        establecidos. <strong>2</strong>. Recoger
                        y entregar a los pasajeros de conformidad al plan de rodamiento y lista de pasajeros adjunta.
                        <strong>3</strong>.
                        Llevar
                        con seguridad, aseo y comodidad al pasajero, respetando las normas de tránsito y de transporte
                        especial
                        vigente. <strong>4</strong>. Llevar una velocidad moderada durante todo el recorrido.
                        <strong>5</strong>. Mantener su vehículo en
                        excelentes condiciones de aseo, excelente estado técnico mecánico, haciendo los respectivos
                        mantenimientos preventivos. <strong>6</strong>. Tener conductores de certificada experiencia,
                        habilidad,
                        responsabilidad,
                        cultura, seriedad y de conformidad con la ley. <strong>7</strong>. Expedir copia simple física o
                        digital, previa
                        solicitud en tal
                        sentido del <strong>CONTRATANTE</strong> de la póliza de responsabilidad civil contractual y
                        extracontractual
                        contratada,
                        habilitación, contrato, SOAT, licencia de conducción del conductor y demás documentos que
                        requiera
                        para
                        verificar el cumplimiento de la normatividad vigente en materia de transporte especial y
                        transporte
                        en
                        general y sobre las condiciones de ejecución y cumplimiento del contrato. <strong>8</strong>.
                        Llevar
                        las puertas
                        cerradas,
                        recogiendo y dejando a los pasajeros según el plan de rodamiento. <strong>SEXTA: OBLIGACIONES
                            DEL
                            CONTRATANTE. 1</strong>. Asignar una persona que sea vigilante de que los pasajeros guarden
                        la
                        compostura
                        y el orden durante la prestación del servicio, para tales efectos, socializará con ellos las
                        normas
                        básicas
                        de conducta al interior del vehículo, este puede ser el mismo CONTRATANTE o designar a uno de
                        los
                        ocupantes del servicio. <strong>2</strong>. Pagar los daños que los (as) pasajeros ocasionen al
                        vehículo durante la
                        prestación del servicio. <strong>SÉPTIMA. VALOR DEL CONTRATO Y FORMA DE PAGO</strong>. Por el
                        servicio
                        prestado, las partes pactan que el <strong>CONTRATANTE</strong> pagará al
                        <strong>CONTRATISTA</strong> la suma de {{$valueContractText}} PESOS MCTE. (${{ number_format($contract->contract_value, 2, ',', '.') }}) , los cuales pagará de la siguiente forma: {{$tipe_pay}}. El pago podrá realizarse a través de consignación
                        bancaría en la
                        cuenta corriente # 127669997810 del Banco Davivienda, a nombre de STEP S.A.S. informando del
                        pago
                        al <strong>CONTRATISTA</strong>, o directamente en la oficina del <strong>CONTRATISTA</strong> o
                        al
                        conductor del vehículo; en
                        cualquier caso, deberá siempre conservar el comprobante del pago e informar al
                        <strong>CONTRATISTA</strong> o exigir
                        recibo o constancia del pago realizado. <strong>OCTAVA. ATENCION Y RESPUESTA ANTE
                            EMERGENCIAS</strong>.
                        El conductor actuará de acuerdo con el plan de atención y respuesta ante emergencia establecido
                        por
                        la
                        EMPRESA, ante eventos como vendaval, avalancha, terremoto, inundación, y /o cualquier situación
                        que
                        no sea convencional de y de acuerdo a la movilidad. <strong>NOVENA. TRATAMIENTO DE LA PROPIEDAD
                            DEL CLIENTE</strong>. Cuidar la propiedad del usuario del servicio de transporte mientras
                        esté
                        bajo su
                        control,
                        tales como componentes, instalaciones, equipos, herramientas, propiedad intelectual y datos
                        personales;
                        bajo las condiciones establecidas por <strong>LA EMPRESA</strong> en los requisitos para la
                        prestación de este
                        servicio,
                        o por motivos de capacidad del vehículo prestador de este servicio, <strong>LA EMPRESA</strong>
                        NO
                        se pueda hace
                        responsable de la Propiedad del cliente, se le comunicará esta condición a la persona asignada
                        como
                        responsable del grupo de usuarios del servicio.
                    </p>
                @endif

            </p>
        </div>
    </div>
    <!-- espacio final -->
    {{-- <div class="contenedorfinal">C</div> --}}
</x-contractframes>
<x-contractframes>
    <!-- texto central -->
    <div class="contenedorcentral">
        <div>
            <p class="parrafo3">
                @if ($contract->type_contract == 1 || $contract->type_contract == 2)
                    <strong>2)</strong> Pagar los daños que los pasajeros ocasionan al vehículo durante la
                    prestación del servicio.
                    <strong>3)</strong>.
                    Destinar los espa{cios internos del establecimiento con acceso vehicular al ascenso y
                    descenso de
                    pasajeros. <strong>4)</strong>. Contar con un Plan Estratégico de Seguridad Vial durante
                    la prestación del
                    servicio.
                    <strong>SÉPTIMA. VALOR DEL CONTRATO Y FORMA PAGO</strong>. El pago se hará de acuerdo a
                    la orden de
                    servicio, la cual será facturada al finalizar cada periodo y será cancelada los primeros
                    10 días
                    del
                    mes siguiente. El pago deberá realizarlo el <strong>CONTRATANTE</strong> a través de
                    consignación bancaria en
                    la cuenta corriente #127669997810 del banco Davivienda, informando del pago al
                    <strong>CONTRATISTA</strong>
                    o/y directamente en la oficina del <strong>CONTRATISTA</strong>, en cualquier caso,
                    deberá siempre conservar el
                    comprobante de la consignación e informar al <strong>CONTRATISTA</strong> o exigir
                    recibo o
                    constancia del pago por el pago realizado. De incurrir en mora, el
                    <strong>CONTRATISTA</strong> le informará de
                    tal situación y podrá suspender de inmediato la prestación del servicio y sin perjuicio
                    de las
                    demás
                    acciones legales, que, para sus efectos, el presente contrato y sus anexos prestará
                    mérito
                    ejecutivo.
                    La mora se liquidará con base en las reglas generales de los negocios mercantiles.
                    <strong>PARÁGRAFO</strong>:
                    Cualquier cambio en la cuenta bancaria será notificado por el
                    <strong>CONTRATISTA</strong> a través de correo.
                    <strong>OCTAVA. CAUSALES DE SUSPENSIÓN DEL SERVICIO</strong>: Será causales de
                    suspensión parcial o
                    total del servicio de transporte, las siguientes: <strong>1)</strong> Los actos de
                    indisciplina o vandalismo por
                    parte
                    del pasajero dentro del bus, como daños en la cojinería, vidrios y en alguna otra parte
                    del
                    pasajero
                    dentro del vehículo, o l tenencia de elementos inflamable, tóxicos, sustancias
                    alucinógenas,
                    embriagantes o explosivos. <strong>3)</strong> y en general por incurrir en conductas
                    que afecten el normal
                    comportamiento y cuidado. <strong>PARÁGRAFO: PROCEDIMIENTO DE DENUNCIA</strong>: El
                    conductor o su
                    acompañante, de haber, documentará y recolectará pruebas de lo sucedido, le comunicará
                    la
                    situación al coordinador de la ruta quien a su vez se pondrá en contacto con el
                    <strong>CONTRATISTA</strong> y/o
                    autoridad competente. Lo anterior sin perjuicio de las acciones legales que el tenga.
                    <strong>NOVENA.
                        VIGENCIA</strong>. El presente contrato tendrá una duración de {{ $difmont }}

                    @if ($difmont > 1)
                        meses
                    @else
                        mes
                    @endif


                    con ({{ $difday }})
                    {{ $difdayletter }}

                    @if ($difday > 1)
                        días
                    @else
                        día
                    @endif


                    comenzando a ejecutarse el día {{ $fstart }} al {{ $fend }}. Por ningún
                    motivo
                    podrá prorrogarse automáticamente el presente contrato o cederse por la parte
                    <strong>CONTRATANTE</strong>:
                    Pese a lo anterior, cualquiera de las partes podrá, faltando un mes para concluir el
                    contrato,
                    enviar
                    oferta comercial tendiente a la celebración de un nuevo contrato; por su parte si el
                    contrato
                    fue
                    ejecutado con excelencia, el <strong>CONTRATANTE</strong> se compromete a preferir al
                    <strong>CONTRATISTA</strong> en una
                    nueva licitación y en caso de encontrarse en igualdad de condiciones frente a otros
                    ofertantes
                    ce
                    <strong>DECIMA. TERMINACIÓN</strong>. Cualquiera de las partes podrá dar por terminado
                    este contrato dando un
                    preaviso a la otra parte por menos 20 días hábiles y previos a vencerse al mes.
                    <strong>DECIMA PRIMERA.
                        CAUSALES DE TERMINACIÓN CON JUSTA CAUSA Y UNILATERALES. A) POR PARTE DEL
                        CONTRATISTA</strong>: 1) La mora del <strong>CONTRATANTE</strong> en el pago según
                    lo consagrado en la cláusula
                    séptima del presente contrato 2) Actos de indisciplina, irrespeto o vandalismo por parte
                    de los
                    pasajeros que ocasionan daños de hasta en el 15% del parque automotor dispuesto para la
                    prestación del servicio. <strong>B) POR PARTE DEL CONTRATANTE</strong>: 1) Por
                    inconformidad expresa con la
                    prestación del servicio, previa denuncia por escrito y por medio PQRS realizada al
                    <strong>CONTRATISTA</strong>
                    sin que este ejecute acciones o tome medidas correctivas, o explique justamente la
                    situación. 2)
                    Por
                    incumplimiento con alguno de los compromisos adquiridos en el presente contrato.
                    <strong>DECIMA
                        SEGUNDA. SOLUCIÓN D CONTROVERSIAS:</strong> Toda controversia, conflicto o
                    diferencias relativas
                    a este contrato, su ejecución y liquidación, se resolverán preferiblemente mediante los
                    mecanismos
                @endif
                @if ($contract->type_contract == 4)
                    DECIMA.CAUSALES DE SUSPENSIÓN DEL SERVICIO: Serán causales de suspensión parcial o total
                    del servicio, las siguientes: 1. Los actos de indisciplina o vandalismo por parte de los pasajeros
                    dentro del
                    vehículo, como daños en la cojinería, vidrios, etc. 2. El comportamiento agresivo, indecente,
                    violento por
                    parte de los pasajeros dentro y/o con los ocupantes del vehículo, o la tenencia de elementos
                    inflamables,
                    tóxicos, sustancias alucinógenas o explosivos. 3. Conductas contra la moral y las buenas costumbres
                    por
                    parte de los pasajeros dentro del vehículo. PARÁGRAFO: PROCEDIMIENTO DE DENUNCIA: El
                    acompañante o conductor documentará y recolectará pruebas de lo sucedido, le comunicará la situación
                    a la empresa quien evaluará la situación e indicará el procedimiento a seguir según el evento que se
                    presente a la persona responsable del grupo de pasajeros designada en el presente contrato, según
                    listado adjunto, el cual forma parte integral del presente documento. o a la autoridad competente.
                    Lo
                    anterior sin perjuicio de las acciones legales que El CONTRATISTA o sus funcionarios tenga. DECIMA
                    PRIMERA. DURACION DEL CONTRATO. El presente contrato tendrá una duración de 
                    {{ $difday }}
                    @if ($difday > 1)
                        días
                    @else
                        día
                    @endif
                    ,
                    comenzando a ejecutarse el día {{ $fstart }} hasta {{ $fend }} automáticamente el
                    presente contrato o cederse por la parte CONTRATANTE. DECIMA SEGUNDA. TERMINACIÓN.
                    Cualquiera de las partes podrá dar por terminado este contrato dando un preaviso con no menos de dos
                    (2) días de antelación al servicio. En cualquier caso, no se devolverá suma alguna por concepto de
                    depósito. DECIMA TERCERA. CAUSALES DE TERMINACIÓN CON JUSTA CAUSA Y
                    UNILATERALES. A. POR PARTE DEL CONTRATISTA: 1. El no pago por parte del CONTRATANTE 2.
                    Actos de indisciplina, irrespeto o vandalismo por parte de los pasajeros. B. POR PARTE DEL
                    CONTRATANTE: 1. Por inconformidad con la prestación del servicio, previa denuncia por escrito al
                    correo
                    electrónico: servicioalcliente@step.com.co al WhatsApp # 323 419 7103 al CONTRATISTA sin que este
                    ejecute acciones o tome medidas correctivas, o explique justamente la situación. 2. Por
                    incumplimiento
                    con alguno de los compromisos adquiridos en el presente contrato.
                    <p class="parrafo5">
                        ----------------------------------------- FIN
                        CLAUSULADO-----------------------------------------
                    </p>
                    <p class="parrafo6-1">
                        Para efectos de dejar constancia, <strong>CONTRATANTE</strong> y <strong>CONTRATISTA</strong>,
                        libres de todo vicio y en
                        pleno uso
                        de nuestras facultades suscribimos y aceptamos el presente contrato en Dosquebradas a
                        los
                        {{ $firmeday }}
                        @if ($firmeday == 1)
                            día
                        @else
                            días
                        @endif
                        del mes de {{ $firmemonth }} del año {{ $firmeyear }}

                        <br>
                        <br>
                    </p>
                    <p class="parrafo6" style="width: 80%;text-align: center;"> <strong>ACEPTAMOS:</strong> </p>

                    <div>
                        <p class="parrafo6">
                            <strong>CONTRATISTA:________________</strong>
                            <br>
                            <strong>ALBA OSIRIS HIDALGO PESCADOR</strong>
                            <br>
                            <strong>C.C. 42.077.205 expedida en Pereira</strong>
                            <br>
                            <strong>Representante Legal</strong>

                        </p>
                    </div>
                    <div class="firmacontratante-1">
                        <p class="parrafo6">
                            <strong>CONTRATANTE:_______________</strong>
                            <br>
                            <strong>NOMBRE</strong>
                            <br>
                            <strong>C.C.</strong>
                        </p>
                    </div>

                    <br>
                    <br>

                    <p class="parrafo6 titulocontrato">
                        <strong>
                            LISTADO USUARIOS CONTRATO DE PRESTACIÓN DE SERVICIO DE TRANSPORTE ESPECIAL CON
                            GRUPO ESPECÍFICO DE USUARIOS (TRANSPORTE DE PARTICULARES)
                        </strong>
                    </p>

                    <br>

                    <p class="parrafo6">
                        Adicionalmente, el <strong>CONTRATANTE</strong> designa a __{{$contract->group_representative_name}}__
                        identificado(a) con Cédula
                        de ciudadanía # __{{$contract->identificationcard_representative_group}}__, expedida en __{{$contract->dateofexpedition_representative_group}}__, como
                        <strong>RESPONSABLE</strong>
                        del grupo de usuarios del servicio, de la presente relación.
                    </p>

                    <br>
                    <br>

                    <p class="parrafo6">
                        <strong>FIRMA RESPONSABLE GRUPO <br>
                            Teléfono:</strong>
                    </p>
                @endif

            </p>
        </div>
    </div>
    <!-- espacio final -->
    {{-- <div class="contenedorfinal">C</div> --}}
</x-contractframes>
@if ($contract->type_contract == 1 || $contract->type_contract == 2)
    <x-contractframes>
        <!-- texto central -->
        <div class="contenedorcentral">
            <div>
                <p class="parrafo4">
                    de arreglo directo y conciliación entre las partes involucradas, que para el caso serán:
                    El
                    representante legal de la empresa directamente y el <strong>CONTRATISTA</strong> o a
                    quien este designe
                </p>
                <p class="parrafo5">
                    ----------------------------------------- FIN
                    CLAUSULADO-----------------------------------------
                </p>
                <p class="parrafo6">
                    Para efectos de dejar constancia, CONTRATANTE y CONTRATISTA, libres de todo vicio y en
                    pleno uso
                    de nuestras facultades suscribimos y aceptamos el presente contrato en Dosquebradas a
                    los
                    {{ $firmeday }}
                    @if ($firmeday == 1)
                        día
                    @else
                        días
                    @endif
                    del mes de {{ $firmemonth }} del año {{ $firmeyear }}

                    <br>
                    <br>
                </p>
                <p style="width: 80%;text-align: center;"> <strong>ACEPTAMOS:</strong> </p>

                <div>
                    <p>
                        <strong>CONTRATISTA:</strong>
                        <br>
                        <strong>ALBA OSIRIS HIDALGO PESCADOR</strong>
                        <br>
                        <strong>C.C. 42.077.205 expedida en Pereira</strong>
                        <br>
                        <strong>Representante Legal</strong>

                    </p>
                </div>
                <div class="firmacontratante">
                    <p>
                        <strong>CONTRATANTE:</strong>
                        <br>
                        _____________________________
                        <br>
                        <strong>C.C.</strong>
                    </p>
                </div>

            </div>
        </div>
        <!-- espacio final -->
        {{-- <div class="contenedorfinal">C</div> --}}
    </x-contractframes>
@endif




</body>
@endforeach

</html>
