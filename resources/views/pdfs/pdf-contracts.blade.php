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

        .rff {
            width: 50%;
            text-align: start;
        }

        .marcadagua {
            background-image: url('img/marcadagua.png');
            background-position: top 50%;
            background-repeat: no-repeat;
            background-size: 95%;


        }
    </style>
</head>
@foreach ($contracts as $contract)

    <body>
        {{-- pagina 1 --}}
        <x-contractframes typeContract="{{ $titlecontract }}">

            @switch($contract->type_contract)
                @case(1)
                    <div
                        style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;margin-top: -0.5rem;">

                        {{-- @if ($contract->type_contract == 1) --}}
                        <h6 style="font-size: 95%;text-align: center;margin-top: 2%;">CONTRATO <span>NO.
                                {{ $contract->contract_number }}</span>
                        </h6>
                        {{-- @endif --}}

                        <div>
                            <div style="margin-top: -4%">

                                <div
                                    style="width: 100%;height: 3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>CONTRATANTE</strong>
                                </div>
                            </div>
                            <div style="margin-top: 4.1%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong> NOMBRE O RAZON SOCIAL</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">

                                    <strong>IDENTIFICACIÓN ó NIT</strong>

                                </div>
                            </div>
                            <div style="margin-top: 4%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_name }}
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contract_document }}
                                </div>
                            </div>
                            <div style="margin-top: 3.9%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong>TELÉFONO Y CORREO ELECTRONICO</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">

                                    <strong>DIRECCIÓN</strong>

                                </div>
                            </div>
                            <div style="margin-top: 3.8%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_phone }} - pendiente campo correo
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_direction }}
                                </div>
                            </div>
                            <div style="margin-top: 3.7%">

                                <div
                                    style="width: 100%;height: 3.3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>CONTRATISTA</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.9%;">

                                <div
                                    style="width: 50%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong> RAZON SOCIAL</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong>NIT</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.8%;">

                                <div
                                    style="width: 50%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    STEP S.A.S
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    900.973.862-1
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 33.3%;height:  3.5%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong> PÓLIZA DE SEGURO</strong>
                                </div>
                                <div
                                    style="width: 33%;height:  3.5%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong> CANAL PQRS</strong>
                                </div>
                                <div
                                    style="width: 33.1%;height:  3.5%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>SERVICIO AL CLIENTE</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 33.3%;height:  3.6%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    SEGUROS DEL ESTADO
                                </div>
                                <div
                                    style="width: 33%;height:  3.6%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <a href="">sertepsapqr@gmail.com</a>
                                </div>
                                <div
                                    style="width: 33.1%;height:  3.6%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    3303821-3234197103
                                </div>
                            </div>
                            <div style="margin-top: 3.6%;">

                                <div
                                    style="width: 50%;height:  3.8%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong> FECHA INICIO CONTRATO</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.8%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>FECHA FINAL CONTRATO</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.9%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{-- {{ $contract->date_start_contract }}  --}}
                                    {{ $fStartDay }} de {{ $fStartMont }} del {{ $fStartYear }}
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.9%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{-- {{ $contract->contract_end_date }}  --}}
                                    {{ $fEndDay }} de {{ $fEndMont }} del {{ $fEndYear }}
                                </div>
                            </div>
                        </div>

                        @switch($contract->contract_with)
                            {{-- grupo padres --}}
                            @case(1)
                                <p style="font-size: 99%;text-align: justify;">
                                    Entre los suscritos a saber, el <strong>CONTRATANTE</strong>
                                    <u>{{ $contract->contracting_name }}</u>,
                                    identificado (a) con {{ $tipeidentification }} No <u>{{ $contract->contract_document }}</u>
                                    expedida en ( <u>{{ $contract->expedition_identificationcard }}</u> )
                                    quien actúa en nombre propio y como <strong>Representante</strong> del grupo de padres de familia
                                    según listado
                                    adjunto y aceptado por éstos, cuyos estudiantes representados se encuentran matriculados en la
                                    <strong>INSTITUCION EDUCATIVA</strong> <u>{{ $contract->school_name }}</u> ubicada en
                                    <u>{{ $contract->address_school }}</u>
                                    y que en lo sucesivo será <strong>INSTITUCION EDUCATIVA</strong> y el <strong>CONTRATISTA</strong>,
                                    <strong>STEP S.A.S. SERVICIO DE TRANSPORTE ESPECIAL DE PASAJEROS</strong>, legalmente constituida,
                                    habilitada como empresa de servicio público de transporte terrestre automotor en la modalidad de
                                    especial mediante la Resolución 036 del 10 de noviembre de 2016 del Ministerio de Transporte,
                                    identificada con el NIT No. <strong>900.973.862-1</strong> y representada legalmente por la señora
                                    <strong>ALBA OSIRIS
                                        HIDALGO PESCADOR</strong> quien se identifica con la cédula de ciudadanía No. 42.077.205
                                    expedida en
                                    Pereira, hemos celebrado el presente <strong>CONTRATO DE PRESTACIÓN DE SERVICIOS DE
                                        TRANSPORTE DE ESTUDIANTE CON GRUPO DE PADRES</strong>, de conformidad a la legislación
                                    nacional, libres de todo vicio y según las cláusulas que a continuación se describen:
                                    <strong>PRIMERA</strong>.
                                    <strong>OBJETO</strong>. El <strong>CONTRATISTA</strong> se compromete para con el contratante a
                                    transportar <u>{{ $contract->passenger_quantity }}</u> estudiantes,
                                    desde el lugar de su residencia descrito en el documento adjunto - punto de origen - hasta las
                                    instalaciones de la institución educativa - punto de destino común - y viceversa hacia su punto de
                                    origen. <strong>SEGUNDA: CONDICIONES PLAN DE RODAMIENTO. 1. DISPONIBILIDAD GENERAL</strong>
                                    <strong>ORDINARIA Y EXTRAORDINARIA</strong>. Los estudiantes de cada padre representado por el
                                    <strong>CONTRATANTE</strong> serán transportados por el <strong>CONTRATISTA</strong> de manera
                                    ordinaria de lunes a
                                    viernes, durante los meses y días hábiles de conformidad con el calendario académico de la
                                    <strong>INSTITUCIÓN EDUCATIVA</strong>. No habrá lugar a servicios extraordinarios sin previa
                                    autorización de la.
                                </p>
                                {{-- <div style="display: flex;position: absolute;width: 1000%;height: 1000px;margin-left: 6.5rem;">
                                    <p style="font-size: 88%;text-align: justify;">
                                        <embed src="{{ public_path('img/CONTRATO_VINCULACION.pdf') }}" type="application/pdf">
            
                                    </p>
                                </div> --}}
                            @break

                            {{-- universitarios --}}
                            @case(2)
                                <p style="font-size: 82%;text-align: justify;">
                                    Entre los suscritos a saber <strong>SERVICIO DE TRANSPORTE ESPECIAL DE PASAJEROS S.A.S.</strong>
                                    “<strong>STEP S.A.S.</strong>”, legalmente constituida, habilitada como empresa de servicio público
                                    de transporte
                                    terrestre automotor en la modalidad de especial mediante la Resolución 036 del 10 de noviembre de
                                    2016 del Ministerio de Transporte, identificada con el NIT No. 900.973.862-1 y representada
                                    legalmente por la señora ALBA OSIRIS HIDALGO PESCADOR quien se identifica con la cédula de
                                    ciudadanía No. 42.077.205 de Pereira, y en adelante el <strong>CONTRATISTA</strong>, y
                                    <u>{{ $contract->contracting_name }}</u>, identificado con {{ $tipeidentification }}
                                    <u>{{ $contract->contract_document }}</u> expedida
                                    en <u>{{ $contract->expedition_identificationcard }}</u>, quien obra en nombre propio y en
                                    representación del grupo de estudiantes
                                    universitarios mayores de edad, según lista anexa, quien en adelante se denominara el
                                    <strong>CONTRATANTE</strong>, hemos celebrado el presente <strong>CONTRATO DE PRESTACIÓN DE
                                        SERVICIOS
                                        PARA TRANSPORTE ESPECIAL DE UN GRUPO DE ESTUDIANTES UNIVERSITARIOS
                                        MAYORES DE EDAD</strong>, de conformidad a la legislación nacional, libres de todo vicio y según
                                    las
                                    cláusulas que a continuación se describen: <strong>PRIMERA: OBJETO.</strong> El
                                    <strong>CONTRATISTA</strong> se compromete
                                    para con el contratante a transportar <u>{{ $contract->passenger_quantity }}</u> pasajeros según el
                                    listado adjunto, el cual hace parte
                                    integral
                                    del presente contrato, desde <u>{{ $route_from }}</u> hasta <u>{{ $route_to }}</u> y
                                    viceversa hacia su
                                    punto de origen. <strong>SEGUNDA: CONDICIONES PLAN DE RODAMIENTO 1. DISPONIBILIDAD
                                        GENERAL ORDINARIA Y EXTRAORDINARIA.</strong> Los estudiantes Universitarios serán transportados
                                    por EL CONTRATISTA de manera ordinaria de lunes a viernes durante los meses y días hábiles de
                                    conformidad con el calendario académico. No habrá lugar a servicios extraordinarios sin previa
                                    autorización y un nuevo contrato independiente suscrito entre CONTRATANTE Y CONTRATISTA.
                                    <strong>2. DISPONIBILIDAD HORARIA.</strong> Según el plan de rodamiento descrito, el tiempo estimado
                                    de
                                    servicio y disponibilidad del (os) vehículo (s) será de 1 hora, desde la fecha de iniciación hasta
                                    la terminación del contrato. <strong>TERCERA: CLASE Y NUMERO DE VEHÍCULOS.</strong> Para efectos de
                                    ejecutar el presente contrato, el <strong>CONTRATISTA</strong> pone a disposición del CONTRATANTE
                                    los
                                    siguiente (s) vehículo (s) que se detallan en hoja anexa. <strong>PARÁGRAFO 1 OBSERVACIONES:
                                        1.</strong> El
                                    vehículo podrá ser cambiado sin perjuicio de que previamente le sea comunicada tal situación al
                                    <strong>CONTRATANTE. 2.</strong> Aunque el vehículo sea cambiado, éste, al igual que todo el parque
                                    automotor,
                                    continuará cumpliendo con todas las especificaciones de seguridad, técnicas y operativas exigidas
                                    por la normatividad vigente. <strong>3.</strong> El <strong>CONTRATANTE</strong> podrá solicitar el
                                    cambio inmediato del vehículo
                                    si, según el marco legal, el mismo no se encuentra en las condiciones mínimas de seguridad,
                                    técnicas y/u operativas para prestar el servicio. <strong>CUARTA: PLAN DE CONTINGENCIA.</strong> El

                                </p>
                            @break

                            {{-- estudiante con acudiente --}}
                            @case(3)
                                <p style="font-size: 97%;text-align: justify;">
                                    Entre los suscritos a saber, el <strong>CONTRATANTE</strong>,
                                    <u>{{ $contract->contracting_name }}</u> identificado(a)
                                    con {{ $tipeidentification }} # <u>{{ $contract->contract_document }}</u>, quien actúa en nombre
                                    propio y como representante
                                    y acudiente del beneficiario del contrato de transporte, del estudiante a continuación relacionado,
                                    perteneciente a la institución educativa <u>{{ $contract->school_name }}</u> ubicada en el barrio
                                    <u>{{ $contract->address_school }}</u>
                                    y que en lo sucesivo será el <strong>CONTRATANTE</strong> y el <strong>CONTRATISTA</strong>,
                                    <strong>SERVICIO DE TRANSPORTE
                                        ESPECIAL DE PASAJEROS S.A.S.</strong> “<strong>STEP S.A.S.</strong>”, legalmente constituida,
                                    habilitada como
                                    empresa de servicio público de transporte terrestre automotor en la modalidad de especial mediante
                                    la Resolución 036 del 10 de noviembre de 2016 del Ministerio de Transporte, identificada con el NIT
                                    No. <strong>900.973.862-1</strong> y representada legalmente por la señora <strong>ALBA OSIRIS
                                        HIDALGO PESCADOR</strong>
                                    quien se identifica con la Cédula de Ciudadanía # 42.077.205 de Pereira, hemos celebrado el
                                    presente <strong>CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE DE ESTUDIANTE
                                        CON ACUDIENTE</strong>, de conformidad a la legislación nacional, libres de todo vicio y según
                                    las
                                    cláusulas que a continuación se describen: <strong>PRIMERA. OBJETO.</strong> El
                                    <strong>CONTRATISTA</strong> se compromete
                                    para con el <strong>CONTRATANTE</strong> a transportar al estudiante descrito a continuación, desde
                                    su lugar de
                                    residencia ubicado en <u>{{ $contract->contracting_direction }}</u> hasta las instalaciones de
                                    la institución educativa y viceversa hacia su sitio de origen.

                                </p>
                            @break

                            {{-- rector o representante legal del colegio --}}
                            @case(4)
                                <p style="font-size: 82%;text-align: justify;">
                                    Entre los suscritos a saber <strong>SERVICIO DE TRANSPORTE ESPECIAL DE PASAJEROS S.A.S</strong>
                                    “<strong>STEP S.A.S.</strong>”, legalmente constituida, habilitada como empresa de servicio público
                                    de transporte
                                    terrestre automotor en la modalidad de especial mediante la Resolución 036 del 10 de noviembre de
                                    2016 del Ministerio de Transporte, identificada con el NIT No. 900973862-1 y representada
                                    legalmente por la señora ALBA OSIRIS HIDALGO PESCADOR quien se identifica con la cédula de
                                    ciudadanía No. 42077205 de Pereira, y en adelante el CONTRATATISTA, y
                                    <u>{{ $contract->contracting_name }}</u> quien se identifica con {{ $tipeidentification }} #
                                    <u>{{ $contract->contract_document }}</u> expedida
                                    en <u>{{ $contract->expedition_identificationcard }}</u> quien obra en representación legal, de la
                                    institución
                                    educativa <u>{{ $contract->school_name }}</u> quien en adelante se denominara
                                    el CONTRATANTE, hemos celebrado el presente <strong>CONTRATO DE PRESTACIÓN DE SERVICIOS
                                        PARA TRANSPORTE ESPECIAL DE ESTUDIANTES</strong>, de conformidad a la legislación nacional,
                                    libres de todo vicio y según las cláusulas que a continuación se describen: <strong>PRIMERA. EL
                                        CONTRATISTA</strong> se compromete frente al <strong>CONTRATANTE</strong> a prestar el servicio
                                    de transporte
                                    especial de estudiantes en la modalidad especial <strong>PRIMERA: OBJETO:</strong> El COLEGIO
                                    autoriza y
                                    permite a LA EMPRESA transportadora prestar el servicio de transporte a sus estudiantes durante
                                    el año escolar <u>{{ $contract->school_year }}</u>, de acuerdo a los horarios y días en que debe
                                    funcionar el COLEGIO según las
                                    disposiciones emanadas por las autoridades educativas y en las rutas previamente establecidas, las
                                    que se presentan en un documento anexo a este Contrato y que hacen parte integral y constitutivo
                                    del mismo. <strong>PARAGRAFO 1:</strong> Los estudiantes están representados para todos los efectos
                                    legales,
                                    por sus respectivos PADRES DE FAMILIA y/o ACUDIENTES responsables. <strong>SEGUNDA:
                                        DISPONIBILIDAD VEHICULAR</strong> Para efectos de prestar el servicio, el
                                    <strong>CONTRATISTA</strong> colocará a<mark> disposición del <strong>CONTRATANTE</strong> vehículos
                                        tipo MICROBU/BUSETA.</mark> <strong>PARÁGRAFO 1
                                        OBSERVACIONES:
                                        1).</strong> Los vehículos podrán ser cambiados sin perjuicio de que previamente le sea
                                    comunicada tal
                                    situación al <strong>CONTRATANTE. 2).</strong> Aunque el vehículo sea cambiado, este, al igual que
                                    todo el parque
                                    automotor, continuará cumpliendo con todas las especificaciones de seguridad, técnicas y operativas
                                    exigidas por la normatividad vigente. <strong>3).</strong> El <strong>CONTRATANTE</strong> podrá:
                                    <strong>A.</strong> Solicitar el cambio inmediato
                                    de un vehículo con que se preste el servicio si, según el marco legal, el mismo no se encuentra en
                                    las condiciones mínimas de seguridad, técnicas y/u operativas para prestar el servicio.
                                    <strong>B.</strong> Solicitar
                                    el
                                    cambio de vehículo por cualquier otra razón siempre y cuando adjunte por escrito que deberá
                                    contener, la razón o razones por las cuales desean cambiar el vehículo pese a estar en óptimas
                                    condiciones técnicas, operativas y de seguridad. <strong>TERCERA: CONDICIONES PLAN DE</strong>

                                </p>
                            @break
                        @endswitch

                    </div>
                @break

                {{-- empresarial --}}
                @case(2)
                    <div style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;">

                        <h6 style="font-size: 95%;text-align: center;margin-top: 2%;">CONTRATO <span>NO.
                                {{ $contract->contract_number }}</span></h6>
                        <div>
                            <div style="margin-top: -4%">

                                <div
                                    style="width: 100%;height: 3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>CONTRATANTE</strong>
                                </div>
                            </div>
                            <div style="margin-top: 4.1%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong> NOMBRE O RAZON SOCIAL</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">

                                    <strong>IDENTIFICACIÓN ó NIT</strong>

                                </div>
                            </div>
                            <div style="margin-top: 4%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_name }}
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contract_document }}
                                </div>
                            </div>
                            <div style="margin-top: 3.9%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong>TELÉFONO Y CORREO ELECTRONICO</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">

                                    <strong>DIRECCIÓN</strong>

                                </div>
                            </div>
                            <div style="margin-top: 3.8%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_phone }} - pendiente campo correo
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_direction }}
                                </div>
                            </div>
                            <div style="margin-top: 3.7%">

                                <div
                                    style="width: 100%;height: 3.3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>CONTRATISTA</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.9%;">

                                <div
                                    style="width: 50%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong> RAZON SOCIAL</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong>NIT</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.8%;">

                                <div
                                    style="width: 50%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    STEP S.A.S
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    900.973.862-1
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.5%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong> CANAL PQRS</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.5%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>SERVICIO AL CLIENTE</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.6%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <a href="">sertepsapqr@gmail.com</a>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.6%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    3303821-3234197103
                                </div>
                            </div>
                            <div style="margin-top: 3.6%;">

                                <div
                                    style="width: 50%;height:  3.8%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong> FECHA INICIO CONTRATO</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.8%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>FECHA FINAL CONTRATO</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.9%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{-- {{ $contract->date_start_contract }} --}}
                                    {{ $fStartDay }} de {{ $fStartMont }} del {{ $fStartYear }}
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.9%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{-- {{ $contract->contract_end_date }} --}}
                                    {{ $fEndDay }} de {{ $fEndMont }} del {{ $fEndYear }}
                                </div>
                            </div>
                        </div>

                        <p style="font-size: 98%;text-align: justify;">
                            Entre los suscritos a saber, el <strong>CONTRATANTE</strong>
                            <u>{{ $contract->contracting_name }}</u>, identificado con
                            {{ $tipeidentification }} <u>{{ $contract->contract_document }}</u>, ubicado en
                            <u>{{ $contract->contracting_direction }}</u>, y representado legalmente por
                            <u>{{ $contract->legal_representative }}</u>, quien se identifica con la
                            {{ $tipeIdentificationRepresentLegal }}
                            No. <u>{{ $contract->identificationcard_represent_legal }}</u> expedida en
                            (<u>{{ $contract->legal_representative_expedition_identificationcard }}</u>)
                            y el
                            <strong>CONTRATISTA</strong>, <strong>SERVICIO DE
                                TRANSPORTE ESPECIAL DE PASAJEROS S.A.S. “STEP S.A.S.”,</strong> legalmente
                            constituida, habilitada como empresa de servicio público de transporte terrestre automotor
                            en la modalidad de especial mediante la Resolución 036 del 10 de noviembre de 2016 del
                            Ministerio de Transporte, identificada con el NIT No. <strong>900973862-1</strong> y representada
                            legalmente por la señora <strong>ALBA OSIRIS HIDALGO PESCADOR</strong> quien se identifica con la
                            cédula de ciudadanía No. 42077205 de Pereira, hemos celebrado el presente
                            <strong>CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE DE ESPECIAL
                                EMPRESARIAL</strong>, de conformidad a la legislación nacional, libres de todo vicio y según las
                            cláusulas que a continuación se describen: <strong>PRIMERA. EL CONTRATISTA</strong> se
                            compromete frente al <strong>CONTRATANTE</strong> a prestar el servicio de transporte especial
                            empresarial de sus funcionarios, empleados o contratistas, (según el listado adjunto) <mark> de
                                acuerdo a la orden del servicio en recorridos <u>{{ $contract->route_trip_contract }}</u> ( ) y
                                municipios del departamento de durante el año 2019.</mark> <strong>SEGUNDA:
                                DISPONIBILIDAD VEHICULAR</strong> Para efectos de prestar el servicio, el
                            <strong>CONTRATISTA</strong>
                            colocará a disposición del <strong>CONTRATANTE</strong> vehículos de tipo MICROBUS, vehículos
                            tipo BUS Y BUSETA, todos estos relacionados en un documento anexo al presente
                            contrato. , el <strong>CONTRATANTE</strong> entregará al momento de celebrar el presente contrato,
                            un
                            listado de rutas según demanda a satisfacer y con una relación completa de los
                        </p>
                    </div>
                @break
                {{-- empresa turismo--}}
                @case(3)
                    <div style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;">

                        <h6 style="font-size: 95%;text-align: center;margin-top: 2%;">CONTRATO <span>NO.
                                {{ $contract->contract_number }}</span></h6>

                        <div>
                            <div style="margin-top: -4%">

                                <div
                                    style="width: 100%;height: 3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>CONTRATANTE</strong>
                                </div>
                            </div>
                            <div style="margin-top: 4.1%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong> NOMBRE O RAZON SOCIAL</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">

                                    <strong>IDENTIFICACIÓN ó NIT</strong>

                                </div>
                            </div>
                            <div style="margin-top: 4%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_name }}
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contract_document }}
                                </div>
                            </div>
                            <div style="margin-top: 3.9%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong>TELÉFONO Y CORREO ELECTRONICO</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">

                                    <strong>DIRECCIÓN</strong>

                                </div>
                            </div>
                            <div style="margin-top: 3.8%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_phone }} - pendiente campo correo
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_direction }}
                                </div>
                            </div>
                            <div style="margin-top: 3.7%">

                                <div
                                    style="width: 100%;height: 3.3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>CONTRATISTA</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.9%;">

                                <div
                                    style="width: 50%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong> RAZON SOCIAL</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong>NIT</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.8%;">

                                <div
                                    style="width: 50%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    STEP S.A.S
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    900.973.862-1
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.5%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong> CANAL PQRS</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.5%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>SERVICIO AL CLIENTE</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.6%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <a href="">sertepsapqr@gmail.com</a>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.6%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    3303821-3234197103
                                </div>
                            </div>
                            <div style="margin-top: 3.6%;">

                                <div
                                    style="width: 50%;height:  3.8%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong> FECHA INICIO CONTRATO</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.8%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>FECHA FINAL CONTRATO</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.9%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{-- {{ $contract->date_start_contract }} --}}
                                    {{ $fStartDay }} de {{ $fStartMont }} del {{ $fStartYear }}
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.9%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{-- {{ $contract->contract_end_date }} --}}
                                    {{ $fEndDay }} de {{ $fEndMont }} del {{ $fEndYear }}
                                </div>
                            </div>
                        </div>

                        <p style="font-size: 80%;text-align: justify;">
                            Entre los suscritos a saber <strong>SERVICIO DE TRANSPORTE ESPECIAL DE PASAJEROS S.A.S.</strong>
                            “<strong>STEP S.A.S</strong>.”, legalmente constituida, habilitada como empresa de servicio público
                            de transporte
                            terrestre automotor en la modalidad de especial mediante la Resolución 036 del 10 de noviembre de
                            2016 del Ministerio de Transporte, identificada con el NIT No. 900973862-1 y representada
                            legalmente por la señora ALBA OSIRIS HIDALGO PESCADOR quien se identifica con la cédula de
                            ciudadanía No. 42077205 de Pereira, y en adelante el CONTRATATISTA,
                            <u>{{ $contract->legal_representative }}</u> quien se identifica con {{ $tipeIdentificationRepresentLegal }}
                            <u>{{ $contract->identificationcard_represent_legal }}</u> expedida en
                            <u>{{ $contract->legal_representative_expedition_identificationcard }}</u> quien obra en representación legal y a nombre
                            propio, de
                            {{-- verificar esto a que pertenece --}}
                            <u>{{ $contract->contract_document }}</u> quien en adelante se denominara el CONTRATANTE, hemos
                            <strong>celebrado el presente CONTRATO DE PRESTACIÓN DE SERVICIOS PARA TRANSPORTE
                                ESPECIAL DE TURISTAS</strong>, de conformidad a la legislación nacional, libres de todo vicio y
                            según las
                            cláusulas que a continuación se describen: <strong>PRIMERA</strong>. <strong>EL CONTRATISTA</strong>
                            se compromete frente
                            al <strong>CONTRATANTE</strong> a prestar el servicio de transporte especial de pasajeros en la
                            modalidad
                            especial, según la orden de servicio (la cual puede ser enviada al correo o WhatsApp donde indique
                            fechas, horas, sitios, anexe listado de pasajeros) las partes acuerdan como objeto contractual la
                            prestación del servicio de transporte de personal de turistas locales, nacionales e internacionales,
                            desde unos sitios de recogida previamente establecidos hasta unos sitios de llegada, teniendo luego
                            en regreso al lugar de origen, que para ello se destine por parte del operador turístico a nivel
                            nacional.
                            <strong>SEGUNDA</strong>: <strong>DISPONIBILIDAD VEHICULAR</strong> Para efectos de prestar el
                            servicio, el <strong>CONTRATISTA</strong>
                            colocará a disposición del <strong>CONTRATANTE</strong> vehículos tipo microbus/buseta.
                            <strong>PARÁGRAFO 1
                                OBSERVACIONES</strong>: <strong>1)</strong>. Los vehículos podrán ser cambiados sin perjuicio de
                            que previamente le sea
                            comunicada tal situación al <strong>CONTRATANTE. 2).</strong> Aunque el vehículo sea cambiado, este,
                            al igual
                            que todo el parque automotor, continuará cumpliendo con todas las especificaciones de seguridad,
                            técnicas y operativas exigidas por la normatividad vigente. <strong>3).</strong> El
                            <strong>CONTRATANTE</strong> podrá: <strong>A.</strong> Solicitar
                            el cambio inmediato de un vehículo con que se preste el servicio si, según el marco legal, el mismo
                            no se encuentra en las condiciones mínimas de seguridad, técnicas y/u operativas para prestar el
                            servicio. <strong>B.</strong> Solicitar el cambio de vehículo por cualquier otra razón siempre y
                            cuando adjunte por
                            escrito que deberá contener, la razón o razones por las cuales desean cambiar el vehículo pese a
                            estar en óptimas condiciones técnicas, operativas y de seguridad. <strong>TERCERA</strong>:
                            <strong>CONDICIONES
                                PLAN DE RODAMIENTO. 1. DISPONIBILIDAD GENERAL ORDINARIA Y EXTRAORDINARIA.</strong>
                            Todo servicio será pactado con anterioridad (huéspedes, turistas, empleados propios) del
                        </p>
                    </div>
                @break

                {{-- ocacional --}}
                @case(4)
                    <div style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;">


                        <h6 style="font-size: 95%;text-align: center;margin-top: 2%;">CONTRATO <span>NO.
                                {{ $contract->contract_number }}</span></h6>

                        <div>
                            <div style="margin-top: -4%">

                                <div
                                    style="width: 100%;height: 3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>CONTRATANTE</strong>
                                </div>
                            </div>
                            <div style="margin-top: 4.1%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong> NOMBRE O RAZON SOCIAL</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">

                                    <strong>IDENTIFICACIÓN ó NIT</strong>

                                </div>
                            </div>
                            <div style="margin-top: 4%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_name }}
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contract_document }}
                                </div>
                            </div>
                            <div style="margin-top: 3.9%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong>TELÉFONO Y CORREO ELECTRONICO</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">

                                    <strong>DIRECCIÓN</strong>

                                </div>
                            </div>
                            <div style="margin-top: 3.8%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_phone }} - pendiente campo correo
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_direction }}
                                </div>
                            </div>
                            <div style="margin-top: 3.7%">

                                <div
                                    style="width: 100%;height: 3.3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>CONTRATISTA</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.9%;">

                                <div
                                    style="width: 50%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong> RAZON SOCIAL</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong>NIT</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.8%;">

                                <div
                                    style="width: 50%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    STEP S.A.S
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    900.973.862-1
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.5%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong> CANAL PQRS</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.5%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>SERVICIO AL CLIENTE</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.6%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <a href="">sertepsapqr@gmail.com</a>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.6%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    3303821-3234197103
                                </div>
                            </div>
                            <div style="margin-top: 3.6%;">

                                <div
                                    style="width: 50%;height:  3.8%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong> FECHA INICIO CONTRATO</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.8%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>FECHA FINAL CONTRATO</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.9%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{-- {{ $contract->date_start_contract }} --}}
                                    {{ $fStartDay }} de {{ $fStartMont }} del {{ $fStartYear }}
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.9%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{-- {{ $contract->contract_end_date }} --}}
                                    {{ $fEndDay }} de {{ $fEndMont }} del {{ $fEndYear }}
                                </div>
                            </div>
                        </div>

                        <p style="font-size: 82%;text-align: justify;">
                            Entre los suscritos a saber, el <strong>CONTRATANTE</strong>
                            <u>{{ $contract->contracting_name }}</u>, identificado con {{ $tipeidentification }}
                            No <u>{{ $contract->contract_document }}</u> expedida en
                            <u>{{ $contract->expedition_identificationcard }}</u>, quien actúa en nombre propio y el
                            <strong>CONTRATISTA, STEP S.A.S. – SERVICIO DE TRANSPORTE ESPECIAL DE PASAJEROS S.A.S.,</strong>
                            legalmente constituida, habilitada como empresa de servicio público de transporte terrestre
                            automotor en
                            la modalidad de especial mediante la Resolución 036 del 10 de noviembre de 2016 del Ministerio de
                            Transporte, identificada con el NIT No. <strong>900.973.862-1</strong> y representada legalmente por
                            la señora <strong>ALBA
                                OSIRIS HIDALGO PESCADOR</strong> quien se identifica con la cédula de ciudadanía No. 42.077.205
                            expedida
                            en Pereira, hemos celebrado el presente <strong>CONTRATO DE PRESTACIÓN DE SERVICIOS DE
                                TRANSPORTE ESPECIAL CON GRUPO ESPECÍFICO DE USUARIOS (TRANSPORTE DE
                                PARTICULARES)</strong>, de conformidad a la legislación nacional, libres de todo vicio y según
                            las cláusulas
                            que
                            a continuación se describen: <strong>PRIMERA. OBJETO.</strong> El <strong>CONTRATISTA</strong> se
                            compromete para con el
                            contratante a transportar <u>{{ $contract->passenger_quantity }}</u> pasajeros según el listado
                            adjunto, el cual hace parte integral del
                            presente
                            contrato, desde <u>{{ $route_from }}</u> hasta <u>{{ $route_to }}</u> y viceversa hacia su
                            punto de origen.
                            <strong>SEGUNDA: CONDICIONES PLAN DE RODAMIENTO 1. DISPONIBILIDAD GENERAL ORDINARIA Y
                                EXTRAORDINARIA.</strong> El plan de rodamiento ordinario será el siguiente:
                        <div>
                            <table
                                style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-bottom: 1%;font-size: 80%;">
                                <thead>
                                    <tr>
                                        <th style="width: 18%;border: solid 1px #000;border-collapse: collapse;">
                                            PLAN
                                        </th>
                                        <th style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            UBICACION
                                        </th>
                                        <th style="width: 29%;border: solid 1px #000;border-collapse: collapse;">
                                            FECHA
                                        </th>
                                        <th style="width: 10%;border: solid 1px #000;border-collapse: collapse;">
                                            HORA
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 18%;border: solid 1px #000;border-collapse: collapse;">
                                            Lugar de Origen
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            {{ $route_from }}
                                        </td>
                                        <td style="width: 29%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            {{ $fStartMont }} {{ $fStartDay }}          
                                        </td>
                                        <td style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            8:00 pm
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 18%;border: solid 1px #000;border-collapse: collapse;">
                                            Lugar de Destino
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            {{ $route_to }}
                                        </td>
                                        <td style="width: 29%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            {{ $fStartMont }} {{ $fStartDay }}
                                        </td>
                                        <td style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            10:00 pm
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 18%;border: solid 1px #000;border-collapse: collapse;">
                                            Regreso
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            {{ $route_from }}
                                        </td>
                                        <td style="width: 29%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            {{ $fEndMont }} {{ $fEndDay }}
                                        </td>
                                        <td style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            12:30 am
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        PLAN UBICACION FECHA HORA
                        Lugar de Origen
                        Lugar de Destino
                        Regreso
                        No habrá lugar a servicios extraordinarios sin previa autorización y un nuevo contrato independiente
                        suscrito entre CONTRATANTE Y CONTRATISTA. <strong>2. DISPONIBILIDAD HORARIA.</strong> Según el plan
                        de
                        rodamiento descrito, el tiempo estimado de servicio y disponibilidad del (os) vehículo (s) será de
                        horas,
                        desde la fecha de iniciación hasta la terminación del contrato.
                        </p>
                    </div>
                @break
                
                {{-- usuarios de salud--}}
                @case(5)
                    <div style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;">

                        <h6 style="font-size: 95%;text-align: center;margin-top: 2%">CONTRATO <span>NO.
                                {{ $contract->contract_number }}</span></h6>
                        <div>
                            <div style="margin-top: -4%">

                                <div
                                    style="width: 100%;height: 3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>CONTRATANTE</strong>
                                </div>
                            </div>
                            <div style="margin-top: 4.1%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong> NOMBRE O RAZON SOCIAL</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">

                                    <strong>IDENTIFICACIÓN ó NIT</strong>

                                </div>
                            </div>
                            <div style="margin-top: 4%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_name }}
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contract_document }}
                                </div>
                            </div>
                            <div style="margin-top: 3.9%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong>TELÉFONO Y CORREO ELECTRONICO</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">

                                    <strong>DIRECCIÓN</strong>

                                </div>
                            </div>
                            <div style="margin-top: 3.8%;">

                                <div
                                    style="width: 50%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_phone }} - pendiente campo correo
                                </div>
                                <div
                                    style="width: 49.7%;height:  3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{ $contract->contracting_direction }}
                                </div>
                            </div>
                            <div style="margin-top: 3.7%">

                                <div
                                    style="width: 100%;height: 3.3%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>CONTRATISTA</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.9%;">

                                <div
                                    style="width: 50%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong> RAZON SOCIAL</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <strong>NIT</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.8%;">

                                <div
                                    style="width: 50%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    STEP S.A.S
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.4%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    900.973.862-1
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.5%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong> CANAL PQRS</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.5%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>SERVICIO AL CLIENTE</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.6%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    <a href="">sertepsapqr@gmail.com</a>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.6%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    3303821-3234197103
                                </div>
                            </div>
                            <div style="margin-top: 3.6%;">

                                <div
                                    style="width: 50%;height:  3.8%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong> FECHA INICIO CONTRATO</strong>
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.8%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;background: #f1f0f0;">
                                    <strong>FECHA FINAL CONTRATO</strong>
                                </div>
                            </div>
                            <div style="margin-top: 3.7%;">

                                <div
                                    style="width: 50%;height:  3.9%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{-- {{ $contract->date_start_contract }} --}}
                                    {{ $fStartDay }} de {{ $fStartMont }} del {{ $fStartYear }}
                                </div>
                                <div
                                    style="width: 49.7%;height:  3.9%;float: left;border: solid 1px #000;font-size: 14px;text-align: center;">
                                    {{-- {{ $contract->contract_end_date }} --}}
                                    {{ $fEndDay }} de {{ $fEndMont }} del {{ $fEndYear }}
                                </div>
                            </div>
                        </div>

                        <p style="font-size: 80%;text-align: justify;">
                            Entre los suscritos a saber <strong>SERVICIO DE TRANSPORTE ESPECIAL DE PASAJEROS S.A.S.</strong>
                            “<strong>STEP S.A.S.</strong>”, legalmente constituida, habilitada como empresa de servicio público
                            de transporte
                            terrestre automotor en la modalidad de especial mediante la Resolución 036 del 10 de noviembre de
                            2016 del Ministerio de Transporte, identificada con el NIT No. 900.973.862-1 y representada
                            legalmente por la señora ALBA OSIRIS HIDALGO PESCADOR quien se identifica con la cédula de
                            ciudadanía No. 42.077.205 de Pereira, y en adelante el <strong>CONTRATISTA</strong>, y
                            <u>{{ $contract->contracting_name }}</u>, identificado con {{ $tipeidentification }}
                            <u>{{ $contract->contract_document }}</u> expedida
                            en <u>{{ $contract->expedition_identificationcard }}</u>, quien obra en nombre propio y en
                            representación legal de
                            ________________________________________quien en adelante se denominara el
                            <strong>CONTRATANTE</strong>, hemos celebrado el presente <strong>CONTRATO DE PRESTACIÓN DE
                                SERVICIOS
                                PARA TRANSPORTE ESPECIAL DE USUARIOS DE SALUD</strong>, de conformidad a la legislación
                            nacional, libres de todo vicio y según las cláusulas que a continuación se describen:
                            <strong>PRIMERA:
                                OBJETO DEL CONTRATO. El CONTRATISTA</strong> se compromete con EL CONTRATANTE, a
                            transportar usuarios de salud con su acompañante, que no requieran de una ambulancia para su
                            traslado asistencial básico o medicalizado desde <u>{{ $route_from }}</u> hasta
                            <u>{{ $route_to }}</u> y
                            viceversa hacia su punto de origen. <strong>SEGUNDA: CONDICIONES PLAN DE RODAMIENTO 1.
                                DISPONIBILIDAD GENERAL ORDINARIA Y EXTRAORDINARIA.</strong> Los usuarios serán
                            transportados por <strong>EL CONTRATISTA</strong> de manera ordinaria para los días y horarios que
                            se pacte el
                            servicio. No habrá lugar a servicios extraordinarios sin previa autorización y un nuevo contrato
                            independiente suscrito entre CONTRATANTE Y CONTRATISTA. <strong>2. DISPONIBILIDAD HORARIA.</strong>
                            Según el plan de rodamiento descrito, el tiempo estimado de servicio y disponibilidad del (os)
                            vehículo (s) será de ___ horas, desde la fecha de iniciación hasta la terminación del contrato.
                            <strong>TERCERA: CLASE Y NUMERO DE VEHÍCULOS.</strong> Para efectos de ejecutar el presente
                            contrato, el
                            <strong>CONTRATISTA</strong> pone a disposición del <strong>CONTRATANTE</strong> los siguiente (s)
                            vehículo (s) que se detallan
                            en hoja anexa. <strong>PARÁGRAFO 1. OBSERVACIONES: 1.</strong> El vehículo podrá ser cambiado sin
                            perjuicio
                            de que previamente le sea comunicada tal situación al <strong>CONTRATANTE. 2.</strong> Aunque el
                            vehículo sea
                            cambiado, éste, al igual que todo el parque automotor, continuará cumpliendo con todas las
                            especificaciones de seguridad, técnicas y operativas exigidas por la normatividad vigente. 3. El
                            <strong>CONTRATANTE</strong> podrá solicitar el cambio inmediato del vehículo si, según el marco
                            legal, el mismo
                            no se encuentra en las condiciones mínimas de seguridad, técnicas y/u operativas para prestar el
                            servicio. <strong>CUARTA: PLAN DE CONTINGENCIA.</strong> El <strong>CONTRATISTA</strong> dispondrá
                            de la aplicación del
                            plan de contingencia respectivo, a fin de suplir los inconvenientes que puedan tener los vehículos
                        </p>
                    </div>
                @break

                {{-- convenio empresarial --}}
                @case(6)
                    <div
                        style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;margin-top: -7%;">

                        <h4 style="text-align: center;">CONVENIO DE COLABORACIÓN EMPRESARIAL</h4>

                        <h6 style="font-size: 95%;text-align: center;margin-top: -3%;">Convenio <span>NO.
                                {{ $contract->contract_number }}</span></h6>

                        <div style="text-align: center;margin-top: -7%;">
                            <h4 style="font-size: 95%;">PREVISTA EN EL ARTÍCULO. 2.2.1.6.3.4 DEL DECRETO 1079 DE 2015 Y DEL
                            </h4>
                            <h4 style="font-size: 95%;margin-top: -3.9%;">ART.09 DEL DECRETO 431 DE 2017 PARA LA PRESTACION DE
                            </h4>
                            <h4 style="font-size: 95%;margin-top: -3.9%;">SERVICIOS ESPECIALES DE TRANSPORTE</h4>
                        </div>

                        <div>
                            <table style="width: 100%;margin-bottom: 1%;font-size: 85%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;text-align: left;">
                                            EMPRESA CONTRATISTA:
                                        </th>
                                        <th style="width: 50%;text-align: left;">
                                            STEP SAS -SERVICIO DE TRANSPORTE ESPECIAL DE
                                            PASAJEROS SAS - Habilitada mediante la Resol.0036 de
                                            Nov.10 De 2016
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;">
                                            NIT
                                        </td>
                                        <td style="width: 50%;">
                                            900.973.862-1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">
                                            GERENTE
                                        </td>
                                        <td style="width: 50%;">
                                            ALBA OSIRIS HIDALGO PESCADOR
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">
                                            CÉDULA
                                        </td>
                                        <td style="width: 50%;">
                                            42.077.502 expedida en Pereira
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">
                                            DIRECCIÓN
                                        </td>
                                        <td style="width: 50%;">
                                            CR 2ª A # 8 26 Zona Industrial La Badea
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">
                                            TELÉFONO
                                        </td>
                                        <td style="width: 50%;">
                                            3234197103 - 3303821
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">
                                            MUNICIPIO
                                        </td>
                                        <td style="width: 50%;">
                                            Dosquebradas
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">
                                            DENOMINADO
                                        </td>
                                        <td style="width: 50%;">
                                            CONTRATISTA
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <div>
                            <table style="width: 100%;margin-bottom: 1%;font-size: 85%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;text-align: left;">
                                            EMPRESA COLABORADORA
                                        </th>
                                        <th style="width: 50%;text-align: left;">
                                            {{ $contract->contracting_name }}
                                            {{-- MAXTRANSPORTE S.A.S - Habilitada mediante Resol. 006
                                            de 12 de abril de 2017 --}}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;">
                                            {{ $tipeidentification }}
                                        </td>
                                        <td style="width: 50%;">
                                            {{ $contract->contract_document }}
                                            {{-- 901.035.856-7 --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">
                                            GERENTE
                                        </td>
                                        <td style="width: 50%;">
                                            {{-- DIANA YANETH ALZATE SALAZAR --}}
                                            {{ $contract->legal_representative }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">
                                            {{ $tipeIdentificationRepresentLegal }}
                                            {{-- CÉDULA --}}
                                        </td>
                                        <td style="width: 50%;">
                                            {{-- 41.916.949 Expedida en Armenia (Q) --}}
                                            {{ $contract->identificationcard_represent_legal }} Expedida en
                                            {{ $contract->legal_representative_expedition_identificationcard }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">
                                            DIRECCIÓN
                                        </td>
                                        <td style="width: 50%;">
                                            {{ $contract->contracting_direction }}
                                            {{-- cra 19 A 38 73 LT 1 --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">
                                            TELÉFONO
                                        </td>
                                        <td style="width: 50%;">
                                            {{ $contract->contracting_phone }}
                                            {{-- 3113721418 --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">
                                            MUNICIPIO
                                        </td>
                                        <td style="width: 50%;">
                                            Armenia
                                        </td>
                                    </tr>
                                    @foreach ($vehicles as $vehicle)
                                        <tr>
                                            <td style="width: 50%;">
                                                PLACA
                                            </td>
                                            <td style="width: 50%;">
                                                {{-- TGM449 --}}
                                                {{ $vehicle->plate_vehicle }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%;">
                                                MODELO
                                            </td>
                                            <td style="width: 50%;">
                                                {{-- 2004 --}}
                                                {{ $vehicle->model_vehicle }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                        <p style="font-size: 88%;text-align: justify;">
                            <strong>OBJETO:</strong> Por medio del presente, en conformidad a lo preceptuado por el Decreto 0431
                            de marzo 14 de 2017, hemos acordado celebrar el presente <strong>CONVENIO DE
                                COLABORACIÓN EMPRESARIAL</strong> para la racionalización del equipo y la mejor prestación
                            del servicio de transporte especial, bajo la modalidad de asociación de empresas.
                            <br>
                            <br>
                            <strong>NORMAS APLIC AB LES </strong>: Ley 336 de 1996, Decreto 1079 de 2015 y además
                            las disposiciones pertinentes del Código Civil y Código de Comercio, por tratarse de
                            una actividad privada y de carácter comercial. Debidamente facultado por los estatutos
                            para este contrato se ha celebrado el presente convenio de <strong>COLABORACION
                                EMPRESARIAL,</strong> para la prestación de servicios especiales, que se regirá por las
                            siguientes clausulas:

                            <strong>PRIMERA:</strong> El presente convenio tiene como finalidad posibilitar la realización en
                            uso del
                        </p>
                    </div>
                @break

                {{-- vinculación --}}
                @case(9)
                    <div style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;">
                        <p style="font-size: 88%;text-align: justify;">
                            Entre los suscritos a saber, <strong>EL PROPIETARIO (TENEDOR),
                                <u>{{ $contract->contracting_name }}</u></strong>
                            identificado con <u>{{ $tipeidentification }}</u> No. {{ $contract->contracting_name }}, expedida en
                            <u>{{ $contract->expedition_identificationcard }}</u> con domicilio en
                            <u>{{ $contract->contracting_direction }}</u>, y <strong>LA EMPRESA: SERVICIO DE TRANSPORTE
                                ESPECIAL DE PASAJEROS
                                <strong>S.A.S.</strong> “STEP S.A.S.</strong>”, legalmente constituida, habilitada como empresa
                            de servicio público de
                            transporte terrestre automotor en la modalidad de especial, mediante la Resolución 036 del 10 de
                            noviembre de 2016 del Ministerio de Transporte, identificada con el NIT No.
                            <strong>900973862-1</strong> con
                            domicilio
                            en el municipio de Dosquebradas y representada legalmente por la señora ALBA OSIRIS HIDALGO
                            PESCADOR, identificada con cédula de ciudadanía número 42.077.205 de Pereira, Risaralda, hemos
                            celebrado el presente <strong>CONTRATO DE VINCULACIÓN DE FLOTA FLOTANTE, BAJO LA
                                MODALIDAD DE AFILIACIÓN</strong>, que hará parte de la capacidad transportadora flotante; el
                            vehículo
                            automotor con las siguientes características:(Según Decreto 431, Artículo 2.2.1.6.7.1. Capacidad
                            transportadora parágrafo 2)

                        <table
                            style="width: 100%;border: solid 1px #2768f3;border-collapse: collapse;font-size: 88%;text-align: center">

                            <thead style="background: #2768f3;">
                                <tr style="">
                                    <th
                                        style="width: 14.6%;border-bottom: solid 1px #2768f3;border-collapse: collapse;text-align: center;color: #fff;height: 6%;">
                                        PLACA
                                    </th>
                                    <th
                                        style="width: 14.6%;border-bottom: solid 1px #2768f3;border-collapse: collapse;text-align: center;color: #fff;height: 6%;">
                                        MARCA
                                    </th>
                                    <th
                                        style="width: 14.6%;border-bottom: solid 1px #2768f3;border-collapse: collapse;text-align: center;color: #fff;height: 6%;">
                                        LÍNEA
                                    </th>
                                    <th
                                        style="width: 14.6%;border-bottom: solid 1px #2768f3;border-collapse: collapse;text-align: center;color: #fff;height: 6%;">
                                        MODELO
                                    </th>
                                    <th
                                        style="width: 14.6%;border-bottom: solid 1px #2768f3;border-collapse: collapse;text-align: center;color: #fff;height: 6%;">
                                        CILINDRAJE
                                    </th>
                                    <th
                                        style="width: 26.6%;border-bottom: solid 1px #2768f3;border-collapse: collapse;text-align: center;color: #fff;height: 6%;">
                                        VÍNCULO JURÍDICO
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicles as $vehicle)
                                    <tr style="background: #a8dff8;">
                                        <td
                                            style="width: 16.6%;border: solid 1px #2768f3;border-collapse: collapse;text-align: center;">
                                            {{-- SJS520 --}}
                                            {{ $vehicle->plate_vehicle }}
                                        </td>
                                        <td style="width: 16.6%;border: solid 1px #2768f3;border-collapse: collapse;">
                                            {{-- KIA --}}
                                            {{ $vehicle->brand_vehicle }}
                                        </td>
                                        <td
                                            style="width: 16.6%;border: solid 1px #2768f3;border-collapse: collapse;text-align: center;">
                                            PREGIO
                                            {{-- {{$vehicle->}} --}}
                                        </td>
                                        <td style="width: 16.6%;border: solid 1px #2768f3;border-collapse: collapse;">
                                            {{-- 2005 --}}
                                            {{ $vehicle->model_vehicle }}
                                        </td>
                                        <td style="width: 16.6%;border: solid 1px #2768f3;border-collapse: collapse;">
                                            {{-- 3.000 --}}
                                            {{ $vehicle->cylinder_vehicle }}
                                        </td>
                                        <td style="width: 16.6%;border: solid 1px #2768f3;border-collapse: collapse;">
                                            {{-- PROPIETARIO --}}
                                            {{ $vehicle->owner }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <br>

                        <table
                            style="width: 100%;border: solid 1px #2768f3;border-collapse: collapse;font-size: 88%;text-align: center;">

                            <thead>
                                <tr style="background: #2768f3;">
                                    <th
                                        style="width: 18%;border-bottom: solid 1px #2768f3;border-collapse: collapse;color: #fff;height: 6%;">
                                        COMBUSTIBLE
                                    </th>
                                    <th
                                        style="width: 18%;border-bottom: solid 1px #2768f3;border-collapse: collapse;color: #fff;height: 6%;">
                                        CLASE VEHÍCULO
                                    </th>
                                    <th
                                        style="width: 18%;border-bottom: solid 1px #2768f3;border-collapse: collapse;color: #fff;height: 6%;">
                                        NÚMERO MOTOR
                                    </th>
                                    <th
                                        style="width: 28%;border-bottom: solid 1px #2768f3;border-collapse: collapse;color: #fff;height: 6%;">
                                        NÚMERO CHASIS
                                    </th>
                                    <th
                                        style="width: 18%;border-bottom: solid 1px #2768f3;border-collapse: collapse;color: #fff;height: 6%;">
                                        CAPACIDAD
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicles as $vehicle)
                                    
                                <tr style="background: #a8dff8;">
                                    <td style="width: 18%;border: solid 1px #2768f3;border-collapse: collapse;">
                                        {{-- DIESEL --}}
                                        {{ $vehicle->vehicle_class_description }}
                                    </td>
                                    <td style="width: 18%;border: solid 1px #2768f3;border-collapse: collapse;">
                                        {{-- MICROBUS --}}
                                        {{ $vehicle->vehicle_type_name }}
                                    </td>
                                    <td style="width: 18%;border: solid 1px #2768f3;border-collapse: collapse;">
                                        {{-- JT548453 --}}
                                        {{ $vehicle->engine_number }}
                                    </td>
                                    <td style="width: 28%;border: solid 1px #2768f3;border-collapse: collapse;">
                                        {{-- KNHTS732257189620 --}}
                                        {{ $vehicle->vehicle_chassis_number }}
                                    </td>
                                    <td style="width: 18%;border: solid 1px #2768f3;border-collapse: collapse;">
                                        {{-- 19 PSJ --}}
                                        {{ $vehicle->number_passenger }} PSJ
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>

                        <p style="font-size: 88%;text-align: justify;">
                            Y de conformidad a la legislación nacional, las normas de derecho privado, libres de todo vicio y
                            según
                            las siguientes cláusulas: <strong>PRIMERA. OBJETO:</strong> A través del presente contrato,
                            <strong>LA EMPRESA</strong> se
                            compromete a incorporar a su parque automotor el vehículo del Propietario (TENEDOR), el cual será utilizado
                            para
                            cumplir con el objeto social planteado por la empresa y bajo unos términos de rotación y
                            remuneración
                            equitativos, de conformidad con la normatividad vigente, entre ellas, artículo 2.2.1.6.8.1. y
                            subsiguientes
                            del decreto único reglamentario sector transporte. <strong>SEGUNDA: VIGENCIA.</strong> El presente
                            contrato tendrá
                            {{-- cambiar la duración del contrato --}}
                            una duración de ( <u>{{ $difyear }}</u> ) años comenzando a ejecutarse el día
                            <u>{{ $fStartDay }}</u> del mes de <u>{{ $fStartMont }}</u> de <u>{{ $fStartYear }}</u>
                            y concluyendo
                            el día <u>{{ $fEndDay }}</u> del mes de <u>{{ $fEndMont }}</u> del
                            <u>{{ $fEndYear }}</u>. <strong>TERCERA: FORMA EN LA QUE SE DARÁ OPERACIÓN A
                                LOS VEHÍCULOS POR PARTE DE LA EMPRESA. LA EMPRESA</strong> operará a través de los contratos
                            a ejecutar donde se prestará el servicio de transporte especial de pasajeros de conformidad con la
                            habilitación dada por el ministerio de transporte, en cualquier parte del territorio nacional y
                            siguiendo, en
                            términos de rotación, un plan de rodamiento que mensualmente será remitido al PROPIETARIO (TENEDOR).
                            <strong>CUARTA: REMUNERACIÓN Y PAGOS A) A FAVOR DEL PROPIETARIO (TENEDOR): EL PROPIETARIO (TENEDOR)</strong> no
                            tendrá derecho a contraprestación alguna por la vinculación de su vehículo, porque <strong>LA
                                EMPRESA</strong> toma
                            el vehículo objeto del presente contrato <strong>POR LA MODALIDAD DE VINCULACIÓN DE FLOTA B) A
                                FAVOR DE LA EMPRESA</strong>: 1) <strong>EL PROPIETARIO (TENEDOR)</strong> pagará a <strong>LA
                                EMPRESA</strong> mensualmente durante los
                            primeros cinco (5) días de cada mes de conformidad con las tablas de liquidación vigentes, durante
                            la
                            duración del presente contrato y según políticas internas aprobadas
                        </p>

                        </p>
                    </div>
                @break

                @default
            @endswitch
        </x-contractframes>
        {{-- pagina 2 --}}
        <x-contractframes typeContract="{{ $titlecontract }}">
            @switch($contract->type_contract)
                @case(1)
                    <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">

                        @switch($contract->contract_with)
                            {{-- grupo padres --}}
                            @case(1)
                                <p style="font-size: 91%;text-align: justify;">
                                    <strong>INSTITUCIÓN EDUCATIVA</strong> y un nuevo contrato independiente suscrito entre
                                    <strong>CONTRATANTE</strong> Y
                                    <strong>CONTRATISTA</strong> o este último y un padre de familia a quien el primero represente.
                                    <strong>2.
                                        DISPONIBILIDAD HORARIA</strong>. El <strong>CONTRATISTA</strong> se obliga con el
                                    <strong>CONTRATANTE</strong> a transportar a <mark>
                                        los estudiantes iniciando el recorrido a las 5:10 a.m. colocándolos a disposición de la
                                        <strong>INSTITUCION
                                            EDUCATIVA</strong> antes del inicio jornada de académica a las 1:15 p.m. y/o recogerlo al
                                        finalizar la misma,
                                        a las12::40pm, siempre y cuando la escuela no cambie por más de cinco (5) días seguidos </mark>
                                    aspectos
                                    tales como hora de ingreso y de salida de los estudiantes a no ser que dichos cambios cuenten con
                                    la participación y aprobación previa del <strong>CONTRATISTA</strong> y se hagan con la suficiente
                                    previsión de
                                    tiempo. Para cambios cuya duración no se prolongue por más de cinco (5) días bastará con la
                                    comunicación por escrito que haga el <strong>CONTRATANTE</strong> a través del correo electrónico
                                    PQRS y con
                                    mínimo 2 días hábiles al <strong>CONTRATISTA. PARÁGRAFO 1</strong>: El cambio de horario o
                                    calendario
                                    académico que afecte la prestación del servicio y se realice incumpliendo los procedimientos
                                    previamente descritos dará lugar a la terminación unilateral del contrato por parte del
                                    <strong>CONTRATISTA. TERCERA. CLASE Y NUMERO DE VEHÍCULOS</strong>. Para efectos de ejecutar el
                                    presente contrato, el <strong>CONTRATISTA</strong> pone a disposición del
                                    <strong>CONTRATANTE</strong> un vehiculo tipo microbus/buseta.
                                    <br>
                                    <br>

                                    <strong>PARÁGRAFO 1</strong> OBSERVACIONES: 1. El vehículo podrá ser cambiado sin perjuicio de que
                                    previamente le sea comunicada tal situación al padre de familia. 2. Aunque el vehículo sea
                                    cambiado, éste, al igual que todo el parque automotor, continuará cumpliendo con todas las
                                    especificaciones de seguridad, técnicas y operativas exigidas por la normatividad vigente. 3. El
                                    contratista podrá: A. Solicitar el cambio inmediato del vehículo si, según el marco legal, el mismo
                                    no
                                    se encuentra en las condiciones mínimas de seguridad, técnicas y/u operativas para prestar el
                                    servicio. B. Solicitar el cambio de vehículo por cualquier otra razón siempre y cuando adjunte por
                                    escrito con su evidencia con su firma el deseo en igual sentido de como mínimo la mitad más uno
                                    de los padres de familia a quien este representa. Pese a lo anterior, el cambio de vehículo por el
                                    literal 3. B. será facultativo de la empresa y según disposición que este tenga de su parque
                                    automotor. <strong>CUARTA. PLAN DE CONTINGENCIA</strong>. El <strong>CONTRATISTA</strong> dispondrá
                                    de la aplicación del
                                    plan de contingencia respectivo, a fin de suplir los inconvenientes que puedan tener los vehículos
                                    que prestan el servicio al <strong>CONTRATANTE. QUINTA. OBLIGACIONES DEL CONTRATISTA</strong> 1)
                                    cumplir estrictamente con los horarios establecidos. 2) Recoger y entregar a los estudiantes en la
                                    puerta de la residencia o en la portería de los conjuntos residenciales sin ingresar a éstos 3)
                                    llevar
                                    con seguridad, aseo y comodidad al pasajero, respetando las normas de tránsito y de transporte
                                    especial vigentes. 4) Llevar una velocidad moderada durante todo el recorrido 5) Mantener su
                                    vehículo en excelentes condiciones de aseo, estado técnico-mecánico, haciendo los respectivos
                                    mantenimientos preventivos 6)Tener conductores y acompañantes de certificada experiencia,
                                    habilidad, responsabilidad, cultura seriedad y de conformidad con la ley.7) Expedir copia simple
                                    física o digital, previa solicitud en tal sentido del CONTRATANTE de la póliza de responsabilidad
                                    civil contractual y extracontractual contratada, habilitación, contrato, SOAT, licencia de
                                    conducción
                                    del conductor y demás documentos que requiera para verificar el cumplimiento de la normatividad
                                    vigente en materia de transporte especial y transporte en general y sobre condiciones de ejecución
                                    y cumplimiento del contrato. 8) Llevar las puertas cerradas, recogiendo y dejando los estudiantes en
                                </p>
                            @break

                            {{-- universitarios --}}
                            @case(2)
                                <p style="font-size: 82%;text-align: justify;">
                                    <strong>CONTRATISTA</strong> dispondrá de la aplicación del plan de contingencia respectivo, a fin
                                    de suplir los
                                    inconvenientes que puedan tener los vehículos que prestan el servicio al <strong>CONTRATANTE.
                                        QUINTA:
                                        OBLIGACIONES DEL CONTRATISTA 1.</strong> Cumplir estrictamente con los horarios establecidos.
                                    <strong>2.</strong>
                                    Recoger y entregar a los pasajeros de conformidad al plan de rodamiento y lista de pasajeros
                                    adjunta. <strong>3.</strong> Llevar con seguridad, aseo y comodidad al pasajero, respetando las
                                    normas de tránsito
                                    y de transporte especial vigente. <strong>4.</strong> Llevar una velocidad moderada durante todo el
                                    recorrido. <strong>5.</strong>
                                    Mantener su vehículo en excelentes condiciones de aseo, excelente estado técnico mecánico,
                                    haciendo los respectivos mantenimientos preventivos. <strong>6.</strong> Tener conductores de
                                    certificada
                                    experiencia, habilidad, responsabilidad, cultura, seriedad y de conformidad con la ley.
                                    <strong>7.</strong> Expedir
                                    copia simple física o digital, previa solicitud en tal sentido del <strong>CONTRATANTE</strong> de
                                    la póliza de
                                    responsabilidad civil contractual y extracontractual contratada, habilitación, contrato, SOAT,
                                    licencia
                                    de conducción del conductor y demás documentos que requiera para verificar el cumplimiento de la
                                    normatividad vigente en materia de transporte especial y transporte en general y sobre las
                                    condiciones de ejecución y cumplimiento del contrato. <strong>8.</strong> Llevar las puertas
                                    cerradas, recogiendo y
                                    dejando a los pasajeros según el plan de rodamiento. <strong>SEXTA: OBLIGACIONES DEL
                                        CONTRATANTE. 1.</strong> Asignar una persona que sea vigilante de que los pasajeros guarden la
                                    compostura y el orden durante la prestación del servicio, para tales efectos, socializará con ellos
                                    las
                                    normas básicas de conducta al interior del vehículo, este puede ser el mismo CONTRATANTE o
                                    designar a uno de los ocupantes del servicio. <strong>2.</strong> Pagar los daños que los (as)
                                    pasajeros ocasionen
                                    al vehículo durante la prestación del servicio. <strong>SÉPTIMA: VALOR DEL CONTRATO Y FORMA DE
                                        PAGO.</strong> El valor del transporte será la tarifa mensual acordada entre <strong>EL
                                        CONTRATISTA</strong> y los
                                    estudiantes Universitarios a quien <strong>EL CONTRATANTE</strong> representa, y será cancelado
                                    durante los
                                    primeros cinco (5) días de cada mes durante el periodo comprendido desde
                                    <u>{{ $fStartDay }}</u>
                                    del mes <u>{{ $fStartMont }}</u> de <u>{{ $fStartYear }}</u> hasta el día
                                    <u>{{ $fEndDay }}</u> del mes <u>{{ $fEndMont }}</u> de <u>{{ $fEndYear }}</u>,
                                    incluyendo semana santa, vacaciones de mitad de año, semana de receso,
                                    periodos de paro, incapacidades, según lo consignado en el documento adjunto. El pago podrá
                                    realizarse, directamente en la oficina o al acompañante o conductor del vehículo; en cualquier caso,
                                    deberá siempre conservar el comprobante de pago. El pago podrá realizarse también a través de
                                    consignación bancaría en la cuenta corriente # 127669997810 del Banco Davivienda, a nombre de
                                    STEP S.A.S. informando del pago al <strong>CONTRATISTA</strong>, o directamente en la oficina del
                                    <strong>CONTRATISTA</strong> o al conductor del vehículo; en cualquier caso, deberá siempre
                                    conservar el
                                    comprobante del pago e informar al <strong>CONTRATISTA</strong> o exigir recibo o constancia del
                                    pago realizado.
                                    <strong>OCTAVA: ATENCION Y RESPUESTA ANTE EMERGENCIAS.</strong> El conductor actuará de acuerdo
                                    con el plan de atención y respuesta ante emergencia establecido por la EMPRESA, ante eventos
                                    como vendaval, avalancha, terremoto, inundación, y /o cualquier situación que no sea convencional
                                    de y de acuerdo a la movilidad. <strong>NOVENA: TRATAMIENTO DE LA PROPIEDAD DEL CLIENTE.</strong>
                                    Cuidar la propiedad del usuario del servicio de transporte mientras esté bajo su control, tales como
                                    componentes, instalaciones, equipos, herramientas, propiedad intelectual y datos personales; bajo
                                    las condiciones establecidas por <strong>LA EMPRESA</strong> en los requisitos para la prestación de
                                    este servicio,
                                    o por motivos de capacidad del vehículo prestador de este servicio, LA EMPRESA NO se hace
                                    responsable de la Propiedad del cliente, se le comunicará esta condición a la persona asignada como
                                    responsable del grupo de usuarios del servicio. <strong>DECIMA: CAUSALES DE SUSPENSIÓN DEL
                                        SERVICIO:</strong> Serán causales de suspensión parcial o total del servicio, las siguientes:
                                    <strong>1.</strong> Los actos de
                                    indisciplina o vandalismo por parte de los pasajeros dentro del vehículo, como daños en la
                                    cojinería,
                                    vidrios, etc. <strong>2.</strong> El comportamiento agresivo, indecente, violento por parte de los
                                    pasajeros dentro
                                    y/o
                                    con los ocupantes del vehículo, o la tenencia de elementos inflamables, tóxicos, sustancias
                                    alucinógenas o explosivos. <strong>3.</strong> Conductas contra la moral y las buenas costumbres por
                                    parte de los
                                    pasajeros dentro del vehículo. <strong>PARÁGRAFO: PROCEDIMIENTO DE DENUNCIA:</strong> El acompañante
                                    o conductor documentará y recolectará pruebas de lo sucedido, le comunicará la situación a la
                                    empresa quien evaluará la situación e indicará el procedimiento a seguir según el evento que se
                                    presente a la persona responsable del grupo de pasajeros designada en el presente contrato, según
                                    listado adjunto, el cual forma parte integral del presente documento. o a la autoridad competente.
                                    Lo
                                </p>
                            @break

                            {{-- estudiante con acudiente --}}
                            @case(3)
                                <p style="font-size: 89%;text-align: justify;">

                                <div>
                                    <table
                                        style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-bottom: 1%;font-size: 75%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE ESTUDIANTE
                                                </th>
                                                <th style="width: 25%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                                <th style="width: 10%;border: solid 1px #000;border-collapse: collapse;">
                                                    GRADO
                                                </th>
                                                <th style="width: 20%;border: solid 1px #000;border-collapse: collapse;">
                                                    PARENTESCO
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td
                                                    style="width: 45%;border: solid 1px #000;border-collapse: collapse;text-align:center;">
                                                    {{ $contract->student_name }}
                                                </td>
                                                <td
                                                    style="width: 25%;border: solid 1px #000;border-collapse: collapse;text-align:center;">
                                                    {{ $contract->identificationcard_estudent }}
                                                </td>
                                                <td
                                                    style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align:center;">
                                                    {{ $contract->grade_student }}
                                                </td>
                                                <td
                                                    style="width: 20%;border: solid 1px #000;border-collapse: collapse;text-align:center;">
                                                    {{ $contract->family_relationship }}
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>

                                <p style="font-size: 94%;text-align: justify;">
                                    Para efectos de dejar constancia, el estudiante será recibido por
                                    <u>{{ $contract->who_receives }}</u>. Cualquier
                                    modificación en este aspecto deberá ser comunicada por escrito previamente al <strong>CONTRATISTA.
                                        SEGUNDA: CONDICIONES PLAN DE RODAMIENTO. 1.DISPONIBILIDAD GENERAL
                                        ORDINARIA Y EXTRAORDINARIA.</strong> El estudiante será transportado por el
                                    <strong>CONTRATISTA</strong> de
                                    manera ordinaria de lunes a viernes, durante los meses y días hábiles de conformidad con el
                                    calendario académico de la <strong>INSTITUCIÓN EDUCATIVA.</strong> No habrá lugar a servicios
                                    extraordinarios
                                    a no ser que exista un nuevo contrato independiente suscrito entre <strong>CONTRATANTE</strong> Y
                                    <strong>CONTRATISTA. 2. DISPONIBILIDAD HORARIA.</strong> El <strong>CONTRATISTA</strong> se obliga
                                    con el
                                    <strong>CONTRATANTE</strong> a transportar al estudiante, la cual debe estar en la Institución
                                    Educativa antes del
                                    inicio de la jornada académica a las <u>{{ $contract->start_day }}</u> y al concluir la jornada
                                    académica a las <u>{{ $contract->End_day }}</u>, siempre
                                    y cuando el colegio no cambie por más de cinco (5) días seguidos aspectos tales como hora de
                                    ingreso y hora de salida de los estudiantes, a no ser que dichos cambios cuenten con la
                                    participación
                                    y aprobación previa del <strong>CONTRATISTA</strong> y se hagan con la suficiente previsión de
                                    tiempo, la cual
                                    deberá comunicarse al <strong>CONTRATISTA</strong> 30 días hábiles antes del cambio de horario. Para
                                    cambios
                                    cuya duración no se prolongue por más de cinco (5) días bastará con la comunicación por escrito
                                    que haga el <strong>CONTRATANTE</strong> a través del correo electrónico <a
                                        href="">sertepsapqr@gmail.com</a> y con
                                    mínimo 2 días hábiles al <strong>CONTRATISTA</strong> informándole sobre el cambio y la necesidad de
                                    mover el
                                    horario de transporte. <strong>PARÁGRAFO 1:</strong> El cambio de horario o calendario académico que
                                    afecte la
                                    prestación del servicio y se realice incumpliendo los procedimientos previamente descritos dará
                                    lugar
                                    a la terminación unilateral del contrato por parte del <strong>CONTRATISTA</strong>.
                                    <strong>SEGUNDA. CLASE Y
                                        NUMERO DE VEHÍCULOS.</strong> Para efectos de ejecutar el presente contrato, el
                                    <strong>CONTRATISTA</strong> pone
                                    a disposición del <strong>CONTRATANTE</strong> el siguiente vehículo:
                                </p>

                                <div>
                                    <table
                                        style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-bottom: 1%;font-size: 75%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 25%;border: solid 1px #000;border-collapse: collapse;">
                                                    CLASE
                                                </th>
                                                <th style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                                    MARCA
                                                </th>
                                                {{-- <th style="width: 10%;border: solid 1px #000;border-collapse: collapse;">
                                                    MODELO
                                                </th> --}}
                                                <th style="width: 10%;border: solid 1px #000;border-collapse: collapse;">
                                                    PLACA
                                                </th>
                                                <th style="width: 5%;border: solid 1px #000;border-collapse: collapse;">
                                                    LATERAL
                                                </th>
                                                <th style="width: 20%;border: solid 1px #000;border-collapse: collapse;">
                                                    CAPACIDAD
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($vehicles as $vehicle)
                                                <tr>
                                                    <td
                                                        style="width: 20%;border: solid 1px #000;border-collapse: collapse;text-align:center;">
                                                        {{-- prueba --}}
                                                        {{ $vehicle->vehicle_type_name }}
                                                    </td>
                                                    <td
                                                        style="width: 20%;border: solid 1px #000;border-collapse: collapse;text-align:center;">
                                                        {{-- prueba --}}
                                                        {{ $vehicle->brand_vehicle }}
                                                    </td>
                                                    <td
                                                        style="width: 20%;border: solid 1px #000;border-collapse: collapse;text-align:center;">
                                                        {{-- prueba --}}
                                                        {{ $vehicle->plate_vehicle }}
                                                    </td>
                                                    <td
                                                        style="width: 20%;border: solid 1px #000;border-collapse: collapse;text-align:center;">
                                                        {{-- prueba --}}
                                                        {{ $vehicle->side_vehicle }}
                                                    </td>
                                                    <td
                                                        style="width: 20%;border: solid 1px #000;border-collapse: collapse;text-align:center;">
                                                        {{-- prueba --}}
                                                        {{ $vehicle->number_passenger }} PSJ
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>

                                <br>
                                <p style="font-size: 96%;text-align: justify;">
                                    <strong>PARÁGRAFO 1 OBSERVACIONES: 1.</strong> El vehículo podrá ser cambiado sin perjuicio de que
                                    previamente le sea comunicada tal situación al <strong>CONTRATANTE. 2.</strong> Aunque el vehículo
                                    sea
                                    cambiado, este, al igual que todo el parque automotor, continuará cumpliendo con todas las
                                    especificaciones de seguridad, técnicas y operativas exigidas por la normatividad vigente.
                                    <strong>3.</strong> El
                                    <strong>CONTRATANTE</strong> podrá: <strong>A.</strong> Solicitar el cambio inmediato del vehículo
                                    si, según el marco legal, el
                                    mismo no se encuentra en las condiciones mínimas de seguridad, técnicas y/u operativas para
                                    prestar el servicio. <strong>B.</strong> Solicitar el cambio de vehículo por cualquier otra razón
                                    siempre y cuando
                                    adjunte por escrito evidencia con su firma el deseo en igual sentido de como mínimo la mitad más
                                </p>

                                </p>
                            @break

                            {{-- rector o representante legal del colegio --}}
                            @case(4)
                                <p style="font-size: 83%;text-align: justify;">
                                    <strong>RODAMIENTO. 1. DISPONIBILIDAD GENERAL ORDINARIA Y EXTRAORDINARIA.</strong> Todo
                                    servicio será pactado con anterioridad con el <strong>CONTRATANTE</strong> que ponga a disposición
                                    del
                                    <strong>CONTRATISTA</strong> serán transportados de acuerdo con las rutas establecidas. No habrá
                                    lugar a
                                    servicios extraordinarios sin previa autorización del <strong>CONTRATANTE</strong>. Los estudiantes
                                    son
                                    responsables de sus pertenencias (celulares, Tablet, portátiles, bolsos de mano, joyas, etc) no
                                    revisamos el interior de maletas, por tal razón no se responde a reclamaciones de perdidas, el
                                    estudiante será el único responsable de su contenido. <strong>2. RADIO DE OPERACIÓN
                                        TERRITORIAL</strong>:
                                    La prestación del servicio es a nivel nacional <strong>PARAGRAFO</strong>: Para este contrato la
                                    Operación está
                                    sujeta a la ruta previamente establecida. <strong>CUARTA. PLAN DE CONTINGENCIA.</strong> El
                                    <strong>CONTRATISTA</strong>
                                    dispondrá de la aplicación del plan de contingencia respectivo, a fin de suplir los inconvenientes
                                    que
                                    puedan tener los vehículos que prestan el servicio al <strong>CONTRATANTE. QUINTA. OBLIGACIONES
                                        DEL CONTRATISTA 1)</strong> cumplir estrictamente con los horarios establecidos.
                                    <strong>2)</strong> Recoger y entregar
                                    a los estudiantes según las rutas establecidas por el contratante <strong>3)</strong> llevar con
                                    seguridad, aseo y
                                    comodidad al estudiante, respetando las normas de tránsito y de transporte especial vigente.
                                    <strong>4)</strong>
                                    Llevar una velocidad moderada durante todo el recorrido. <strong>5)</strong> Mantener el (los)
                                    vehículo (s) en
                                    excelentes condiciones de aseo, estado técnico mecánico, haciendo los respectivos mantenimientos
                                    preventivos. <strong>6)</strong> Tener conductores de certificada experiencia, habilidad,
                                    responsabilidad, cultura,
                                    seriedad y de conformidad con la ley. <strong>7)</strong> Expedir copia simple física o digital,
                                    previa solicitud en
                                    tal
                                    sentido del <strong>CONTRATANTE</strong> de la póliza de responsabilidad civil contractual y
                                    extracontractual
                                    contratada, habilitación, contrato, SOAT, licencia de conducción del conductor y demás documentos
                                    que requiera para verificar el cumplimiento de la normatividad vigente en materia de transporte
                                    especial. <strong>8)</strong> Llevar las puertas cerradas, recogiendo y dejando a los estudiantes en
                                    los sitios
                                    establecidos y seguros. <strong>9)</strong> Llevar en cada uno de los recorridos de los vehículos
                                    una persona adulta
                                    acompañante, con el fin de garantizar la protección, disciplina y cuidado de los estudiantes. Este
                                    adulto acompañante será directamente contratado por el conductor o vinculado y remunerado como
                                    costo adicional al servicio de transporte, según lo establece la Sección 10 del Capítulo 6 del
                                    Decreto
                                    Único Reglamentario del sector Transporte N°1079 de 2015. <strong>SEXTA: OBLIGACIONES DEL
                                        CONTRATANTE: 1)</strong> Suministrar al <strong>CONTRATISTA</strong> toda la información
                                    necesaria, oportuna sobre
                                    lugares y horarios de servicio. <strong>2)</strong> Pagar los daños que los estudiantes ocasionen al
                                    vehículo durante
                                    la prestación del servicio. <strong>3)</strong>. Destinar los espacios internos del establecimiento
                                    con acceso
                                    vehicular,
                                    al ascenso y descenso de estudiantes. <strong>4)</strong>. Contar con un Plan Estratégico de
                                    Seguridad Vial durante
                                    la prestación del servicio. <strong>5)</strong>. El Colegio debe dar instrucciones o manual de uso
                                    apropiado de la
                                    ruta el cual hace parte de este contrato. <strong>SÉPTIMA: VALOR DEL CONTRATO Y FORMA DE
                                        PAGO.</strong>
                                    El valor del presente contrato corresponde a la tarifa mensual a pagar durante
                                    <u>{{ $difmont }}</u> meses y fracción,
                                    iniciando el <u>{{ $fStartDay }}</u> de <u>{{ $fStartMont }}</u> y concluyendo el
                                    <u>{{ $fEndDay }}</u> de <u>{{ $fEndMont }}</u> del presente año,
                                    La empresa hará el cobro a cada padre responsable del estudiante para lo cual tendrá los primeros
                                    5 días de cada mes. <strong>El Valor pactado para el año 2023 se refleja en la lista anexa la cual
                                        hace
                                        parte integral de este contrato. PARAGRAFO</strong>: Para ejecutar la ruta se debe contar con un
                                    mínimo
                                    de 10 niños. Los niños que utilicen el transporte en media ruta (ida o regreso) el valor que se
                                    cobrará
                                    será el 70% sobre el valor de la mensualidad del sector de residencia. El pago pueden realizarlo a
                                    través de los diferentes medios de recaudo el cual se le informara a cada padre. De incurrir en
                                    mora,
                                    EL <strong>CONTRATISTA</strong> le informará de tal situación y podrá suspender de inmediato la
                                    prestación del
                                    servicio y sin perjuicio de las demás acciones legales, que, para sus efectos, el presente contrato
                                    y
                                    sus anexos prestará mérito ejecutivo. La mora se liquidará con base en las reglas generales de los
                                    negocios mercantiles. <strong>PARÁGRAFO:</strong> Cualquier cambio en la cuenta bancaría será
                                    notificado por el
                                    <strong>CONTRATISTA</strong> a través de correo. <strong>OCTAVA. OBLIGACIONES DEL COLEGIO</strong>:
                                    EL COLEGIO se
                                    obliga a: <strong>1)</strong> Efectuar los procedimientos de vigilancia y control, requeridos para
                                    mantener la
                                    disciplina
                                    y el orden de los estudiantes dentro del vehículo, garantizando el debido respeto por parte de los
                                    estudiantes hacia los conductores. <strong>2)</strong> Se obliga a no transportar dentro de la ruta,
                                    carga de ninguna
                                    naturaleza u origen, que no sean estudiantes. <strong>3)</strong> Exigirle el PAZ y SALVO al
                                    estudiante, por el
                                    servicio
                                    de transporte, en el momento de las matrículas o para efectuar el retiro de la institución.
                                    <strong>NOVENA.

                                </p>
                            @break

                            @default
                        @endswitch

                    </div>
                @break

                {{-- empresarial --}}
                @case(2)
                    <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">
                        <p style="font-size: 88%;text-align: justify;">
                            funcionarios, empleados o contratistas a transportar por vehículo y acompañada de sus
                            identificaciones, lugares de residencia, y números de contacto. Dicho listado podrá ser
                            actualizado periódicamente siempre y cuando el <strong>CONTRATANTE</strong> lo haga por escrito y
                            brinde por lo menos una semana al <strong>CONTRATISTA</strong> para proyectar las modificaciones a
                            su plan de rodamiento necesarias para efectos de cubrir la demanda. <strong>PARÁGRAFO 1:</strong> El
                            <strong>CONTRATISTA</strong> podrá participar de la creación de dicho documento adjunto, en especial
                            como consultor o asesor y a través de su coordinador de rutas, todo esto para efectos de
                            facilitar la logística y eficiencia en el diseño de las rutas y prestación del servicio.
                            <strong>PARÁGRAFO 2 OBSERVACIONES: 1)</strong>. Los vehículos podrán ser cambiados sin
                            perjuicio de que previamente le sea comunicada tal situación al <strong>CONTRATANTE. 2).</strong>
                            Aunque el vehículo sea cambiado, este, al igual que todo el parque automotor, continuará
                            cumpliendo con todas las especificaciones de seguridad, técnicas y operativas exigidas
                            por la normatividad vigente. <strong>3).</strong> El <strong>CONTRATANTE</strong> podrá:
                            <strong>A</strong>. Solicitar el cambio
                            inmediato de uno del vehículo con que se preste el servicio si, según el marco legal, el
                            mismo no se encuentra en las condiciones mínimas de seguridad, técnicas y/u operativas
                            para prestar el servicio. <strong>B</strong>. Solicitar el cambio de vehículo por cualquier otra
                            razón siempre
                            y cuando adjunte por escrito que deberá contener la razón o razones por las cuales
                            desean cambiar el vehículo pese a estar en óptimas condiciones técnicas, operativas y de
                            seguridad. <strong>TERCERA: CONDICIONES PLAN DE RODAMIENTO. 1. DISPONIBILIDAD
                                GENERAL ORDINARIA Y EXTRAORDINARIA.</strong> Los funcionarios, empleados o
                            contratistas del <strong>CONTRATANTE</strong> que ponga a disposición del
                            <strong>CONTRATISTA</strong> serán
                            transportados de acuerdo a la orden del servicio. No habrá lugar a servicios
                            extraordinarios sin previa autorización del <strong>CONTRATANTE. 2. RADIO DE OPERACIÓN
                                TERRITORIAL:</strong> La prestación del servicio queda limitada a un radio terrestre en el área
                            metropolitana de Pereira, Dosquebradas, La Virginia y los diferentes municipios del
                            departamento de Risaralda. <strong>PARÁGRAFO 1</strong>: El cambio de horario o calendario
                            académico que afecte la prestación del servicio y se realice incumpliendo los
                            procedimientos previamente descritos dará lugar a la terminación unilateral del contrato
                            por parte del <strong>CONTRATISTA. CUARTA. PLAN DE CONTINGENCIA.</strong> El
                            <strong>CONTRATISTA</strong>
                            dispondrá de la aplicación del plan de contingencia respectivo, a fin de suplir los
                            inconvenientes que puedan tener los vehículos que prestan el servicio al
                            <strong>CONTRATANTE. QUINTA. OBLIGACIONES DEL CONTRATISTA 1)</strong> cumplir
                            estrictamente con los horarios establecidos. <strong>2)</strong> Recoger y entregar a los pasajeros
                            en la
                            puerta de la residencia o en la portería de los condominios sin ingresar a éstos.
                            <strong>3)</strong> llevar
                            con seguridad, aseo y comodidad al pasajero, respetando las normas de tránsito y de
                            transporte especial vigente. <strong>4)</strong> Llevar una velocidad moderada durante todo el
                            recorrido.
                            <strong>5)</strong> Mantener el (los) vehículo (s) en excelentes condiciones de aseo, estado técnico
                            mecánico, haciendo los respectivos mantenimientos preventivos. <strong>6)</strong> Tener conductores
                            de
                            certificada experiencia, habilidad, responsabilidad, cultura, seriedad y de conformidad con
                            la ley. <strong>7)</strong> Expedir copia simple física o digital, previa solicitud en tal sentido
                            del
                            <strong>CONTRATANTE</strong> de la póliza de responsabilidad civil contractual y extracontractual
                            contratada, habilitación, contrato, SOAT, licencia de conducción del conductor y demás
                            documentos que requiera para verificar el cumplimiento de la normatividad vigente en
                            materia de transporte especial. <strong>8)</strong> Llevar las puertas cerradas, recogiendo y
                            dejando a los
                        </p>
                    </div>
                @break

                {{-- empresa turismo--}}
                @case(3)
                    <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">
                        <p style="font-size: 81%;text-align: justify;">
                            <strong>CONTRATANTE</strong> que ponga a disposición del <strong>CONTRATISTA</strong> serán
                            transportados de acuerdo con
                            la orden del servicio. No habrá lugar a servicios extraordinarios sin previa autorización del
                            <strong>CONTRATANTE</strong>. Los pasajeros son responsables de sus pertenencias (celulares, Tablet,
                            portátiles,
                            bolsos de mano, joyas, etc), el equipaje o maletas grandes va en los maleteros, y portaequipaje el
                            cual debe ir embalado y marcado no revisamos el interior de maletas, por tal razón no se responde
                            a reclamaciones de perdidas, el dueño será el único responsable de su contenido. <strong>2. RADIO DE
                                OPERACIÓN TERRITORIAL:</strong> La prestación del servicio es a nivel nacional. <strong>CUARTA.
                                PLAN DE
                                CONTINGENCIA.</strong> El <strong>CONTRATISTA</strong> dispondrá de la aplicación del plan de
                            contingencia respectivo,
                            a fin de suplir los inconvenientes que puedan tener los vehículos que prestan el servicio al
                            <strong>CONTRATANTE</strong>. <strong>QUINTA</strong>. <strong>OBLIGACIONES DEL CONTRATISTA
                                1)</strong> cumplir estrictamente con los
                            horarios establecidos. <strong>2)</strong> Recoger y entregar a los pasajeros según orden de
                            servicio del contratante
                            <strong>3)</strong> llevar con seguridad, aseo y comodidad al pasajero, respetando las normas de
                            tránsito y de
                            transporte especial vigente. <strong>4)</strong> Llevar una velocidad moderada durante todo el
                            recorrido. <strong>5)</strong> Mantener
                            el (los) vehículo (s) en excelentes condiciones de aseo, estado técnico mecánico, haciendo los
                            respectivos mantenimientos preventivos. <strong>6)</strong> Tener conductores de certificada
                            experiencia, habilidad,
                            responsabilidad, cultura, seriedad y de conformidad con la ley. <strong>7)</strong> Expedir copia
                            simple física o
                            digital,
                            previa solicitud en tal sentido del <strong>CONTRATANTE</strong> de la póliza de responsabilidad
                            civil contractual y
                            extracontractual contratada, habilitación, contrato, SOAT, licencia de conducción del conductor y
                            demás documentos que requiera para verificar el cumplimiento de la normatividad vigente en materia
                            de transporte especial. <strong>8)</strong> Llevar las puertas cerradas, recogiendo y dejando a los
                            pasajeros en
                            sitios
                            seguros. <strong>SEXTA: OBLIGACIONES DEL CONTRATANTE: 1)</strong> Suministrar al
                            <strong>CONTRATISTA</strong> toda la
                            información necesaria, oportuna sobre lugares y horarios de servicio. <strong>2)</strong> Pagar los
                            daños que los
                            pasajeros ocasionen al vehículo durante la prestación del servicio. <strong>3)</strong>. Destinar
                            los espacios
                            internos
                            del establecimiento con acceso vehicular, al ascenso y descenso de pasajeros. <strong>4)</strong>.
                            Contar con un
                            Plan Estratégico de Seguridad Vial durante la prestación del servicio <strong>SÉPTIMA. VALOR DEL
                                CONTRATO Y FORMA DE PAGO.</strong> El valor del contrato es de acuerdo a la orden de servicio. el pago
                            deberá realizarlo el <strong>CONTRATANTE</strong> a través de consignación bancaría en la cuenta
                            corriente
                            #127669997810 del banco Davivienda, informando del pago al <strong>CONTRATISTA</strong> o/y
                            directamente al
                            conductor, previa orden del <strong>CONTRATISTA</strong>, en cualquier caso, deberá siempre
                            conservar el
                            comprobante de la consignación e informar al <strong>CONTRATISTA</strong> o exigir recibo o
                            constancia del pago
                            por el pago realizado. De incurrir en mora, EL <strong>CONTRATISTA</strong> le informará de tal
                            situación y podrá
                            suspender de inmediato la prestación del servicio y sin perjuicio de las demás acciones legales,
                            que,
                            para sus efectos, el presente contrato y sus anexos prestará mérito ejecutivo. La mora se liquidará
                            con base en las reglas generales de los negocios mercantiles. <strong>PARÁGRAFO</strong>: Cualquier
                            cambio en
                            la cuenta bancaría será notificado por el <strong>CONTRATISTA</strong> a través de correo.
                            <strong>OCTAVA. CAUSALES
                                DE SUSPENSIÓN DEL SERVICIO</strong>: Serán causales de suspensión parcial o total del servicio
                            de
                            transporte, las siguientes: <strong>1)</strong> Los actos de indisciplina o vandalismo por parte del
                            pasajero dentro
                            del
                            bus, como daños en la cojinería, vidrios y en alguna otra parte del interior del vehículo.
                            <strong>2)</strong> El
                            comportamiento agresivo o violento por parte del pasajero dentro del vehículo, o la tenencia de
                            elementos inflamables, tóxicos, sustancias alucinógenas, embriagantes o explosivos, el
                            <strong>CONTRATANTE</strong>, tendrá el 100% de la responsabilidad de estos pasajeros y sus
                            pertenencias <strong>3)</strong> y
                            en general por incurrir en conductas que afecten el normal comportamiento y cuidado.
                            <strong>PARÁGRAFO</strong>: <strong>PROCEDIMIENTO DE DENUNCIA:</strong> El conductor documentará y
                            recolectará
                            pruebas de lo sucedido, le comunicará la situación al coordinador de ruta quien a su vez se pondrá
                            en contacto con el <strong>CONTRATISTA</strong> y/o autoridad competente. Lo anterior sin perjuicio
                            de las acciones
                            legales que El CONTRATISTA tenga, un servicio o viaje se puede ver afectado por incurrir en
                            acciones ilícitas de los pasajeros, si llegare a suceder y de comprobarse que la culpabilidad es de
                            un pasajero el servicio se cobrara en el 100% de lo pactado <strong>NOVENA. VIGENCIA.</strong> El
                            presente
                            contrato tendrá una duración de <u>{{ $difmont }}</u> meses, comenzando a ejecutarse el día <u>{{ $fStartDay }}</u> del mes de <u>{{ $fStartMont }}</u> del
                            año <u>{{ $fStartYear }}</u> y concluyendo el día <u>{{ $fEndDay }}</u> del mes de <u>{{ $fEndMont }}</u> del año <u>{{ $fEndYear }}</u>. Por ningún motivo podrá prorrogarse
                            automáticamente el presente contrato o cederse por la parte <strong>CONTRATANTE</strong>; pese a lo
                            anterior,

                        </p>
                    </div>
                @break

                {{-- ocacional --}}
                @case(4)
                    <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">
                        <p style="font-size: 82%;text-align: justify;">
                            <strong>TERCERA. CLASE Y NUMERO DE VEHÍCULOS.</strong> Para efectos de ejecutar el presente
                            contrato, el
                            <strong>CONTRATISTA</strong> pone a disposición del <strong>CONTRATANTE</strong> el (los) siguiente
                            (s)
                            vehículo (s):

                        <div>
                            <table
                                style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-bottom: 1%;font-size: 75%;">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;border: solid 1px #000;border-collapse: collapse;">
                                            TIPO VEHÍCULO
                                        </th>
                                        <th style="width: 35%;border: solid 1px #000;border-collapse: collapse;">
                                            MARCA
                                        </th>
                                        <th style="width: 10%;border: solid 1px #000;border-collapse: collapse;">
                                            MODELO
                                        </th>
                                        <th style="width: 20%;border: solid 1px #000;border-collapse: collapse;">
                                            PLACA
                                        </th>
                                        <th style="width: 10%;border: solid 1px #000;border-collapse: collapse;">
                                            LATERAL
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehicles as $vehicle)
                                        <tr>
                                            <td style="width: 25%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                                {{ $vehicle->vehicle_type_name }}
                                            </td>
                                            <td style="width: 35%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                                {{ $vehicle->brand_vehicle }}
                                            </td>
                                            <td style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                                {{ $vehicle->model_vehicle }}
                                            </td>
                                            <td style="width: 20%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                                {{ $vehicle->plate_vehicle }}
                                            </td>
                                            <td style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                                {{ $vehicle->side_vehicle }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                        <p style="font-size: 80%;text-align: justify;">
                            <strong>PARÁGRAFO 1 OBSERVACIONES: 1.</strong> El vehículo podrá ser cambiado sin perjuicio de que
                            previamente
                            le sea comunicada tal situación al <strong>CONTRATANTE. 2.</strong> Aunque el vehículo sea cambiado,
                            éste, al igual
                            que todo el parque automotor, continuará cumpliendo con todas las especificaciones de seguridad,
                            técnicas y operativas exigidas por la normatividad vigente. <strong>3.</strong> El
                            <strong>CONTRATANTE</strong> podrá solicitar el
                            cambio
                            inmediato del vehículo si, según el marco legal, el mismo no se encuentra en las condiciones mínimas
                            de
                            seguridad, técnicas y/u operativas para prestar el servicio. <strong>CUARTA. PLAN DE
                                CONTINGENCIA.</strong> El
                            <strong>CONTRATISTA</strong> dispondrá de la aplicación del plan de contingencia respectivo, a fin
                            de suplir los
                            inconvenientes que puedan tener los vehículos que prestan el servicio al <strong>CONTRATANTE.
                                QUINTA.
                                OBLIGACIONES DEL CONTRATISTA 1.</strong> Cumplir estrictamente con los horarios establecidos.
                            <strong>2.</strong> Recoger
                            y entregar a los pasajeros de conformidad al plan de rodamiento y lista de pasajeros adjunta.
                            <strong>3.</strong>
                            Llevar
                            con seguridad, aseo y comodidad al pasajero, respetando las normas de tránsito y de transporte
                            especial
                            vigente. <strong>4.</strong> Llevar una velocidad moderada durante todo el recorrido.
                            <strong>5.</strong> Mantener su vehículo en
                            excelentes condiciones de aseo, excelente estado técnico mecánico, haciendo los respectivos
                            mantenimientos preventivos. <strong>6.</strong> Tener conductores de certificada experiencia,
                            habilidad,
                            responsabilidad,
                            cultura, seriedad y de conformidad con la ley. <strong>7.</strong> Expedir copia simple física o
                            digital, previa
                            solicitud en tal
                            sentido del CONTRATANTE de la póliza de responsabilidad civil contractual y extracontractual
                            contratada,
                            habilitación, contrato, SOAT, licencia de conducción del conductor y demás documentos que requiera
                            para
                            verificar el cumplimiento de la normatividad vigente en materia de transporte especial y transporte
                            en
                            general y sobre las condiciones de ejecución y cumplimiento del contrato. <strong>8.</strong> Llevar
                            las puertas
                            cerradas,
                            recogiendo y dejando a los pasajeros según el plan de rodamiento. <strong>SEXTA: OBLIGACIONES DEL
                                CONTRATANTE. 1.</strong> Asignar una persona que sea vigilante de que los pasajeros guarden la
                            compostura
                            y el orden durante la prestación del servicio, para tales efectos, socializará con ellos las normas
                            básicas
                            de conducta al interior del vehículo, este puede ser el mismo CONTRATANTE o designar a uno de los
                            ocupantes del servicio. <strong>2.</strong> Pagar los daños que los (as) pasajeros ocasionen al
                            vehículo durante la
                            prestación del servicio. <strong>SÉPTIMA. VALOR DEL CONTRATO Y FORMA DE PAGO.</strong> Por el
                            servicio
                            prestado, las partes pactan que el <strong>CONTRATANTE</strong> pagará al
                            <strong>CONTRATISTA</strong> la suma de
                            <u>{{ $valueContractText }}</u> PESOS MCTE.
                            (<u>${{ number_format($contract->contract_value, 2, ',', '.') }}</u>),
                            los cuales pagará de la siguiente forma: el 50% a la firma del contrato y el resto al inicio del
                            servicio. El
                            pago podrá realizarse a través de consignación bancaría en la cuenta corriente # 127669997810 del
                            Banco Davivienda, a nombre de STEP S.A.S. informando del pago al <strong>CONTRATISTA</strong>, o
                            directamente en
                            la oficina del <strong>CONTRATISTA</strong> o al conductor del vehículo; en cualquier caso, deberá
                            siempre conservar
                            el
                            comprobante del pago e informar al <strong>CONTRATISTA</strong> o exigir recibo o constancia del
                            pago realizado.
                            <strong>OCTAVA. ATENCION Y RESPUESTA ANTE EMERGENCIAS.</strong> El conductor actuará de acuerdo con
                            el
                            plan de atención y respuesta ante emergencia establecido por la EMPRESA, ante eventos como vendaval,
                            avalancha, terremoto, inundación, y /o cualquier situación que no sea convencional de y de acuerdo a
                            la
                            movilidad. <strong>NOVENA. TRATAMIENTO DE LA PROPIEDAD DEL CLIENTE.</strong> Cuidar la propiedad del
                            usuario del servicio de transporte mientras esté bajo su control, tales como componentes,
                            instalaciones,
                            equipos, herramientas, propiedad intelectual y datos personales; bajo las condiciones establecidas
                            por <strong>LA
                                EMPRESA</strong> en los requisitos para la prestación de este servicio, o por motivos de
                            capacidad del
                            vehículo
                            prestador de este servicio, LA EMPRESA NO se pueda hace responsable de la Propiedad del cliente, se
                            le comunicará esta condición a la persona asignada como responsable del grupo de usuarios del
                            servicio.
                            <strong>DECIMA.CAUSALES DE SUSPENSIÓN DEL SERVICIO:</strong> Serán causales de suspensión parcial o
                            total
                            del servicio, las siguientes: <strong>1.</strong> Los actos de indisciplina o vandalismo por parte
                            de los pasajeros
                            dentro del
                            vehículo, como daños en la cojinería, vidrios, etc. <strong>2.</strong> El comportamiento agresivo,
                            indecente,
                            violento por
                            parte de los pasajeros dentro y/o con los ocupantes del vehículo, o la tenencia de elementos
                            inflamables,
                        </p>
                        </p>
                    </div>
                @break
                
                {{-- usuarios de salud--}}    
                @case(5)
                    <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">
                        <p style="font-size: 80%;text-align: justify;">
                            que prestan el servicio al <strong>CONTRATANTE. QUINTA: OBLIGACIONES DEL CONTRATISTA 1.</strong>
                            Cumplir estrictamente con los horarios establecidos. <strong>2.</strong> Recoger y entregar a los
                            pasajeros de
                            conformidad al plan de rodamiento y lista de pasajeros adjunta. <strong>3.</strong> Llevar con
                            seguridad, aseo y
                            comodidad al pasajero, respetando las normas de tránsito y de transporte especial vigente.
                            <strong>4.</strong> Llevar
                            una velocidad moderada durante todo el recorrido. <strong>5.</strong> Mantener su vehículo en
                            excelentes
                            condiciones de aseo, excelente estado técnico mecánico, haciendo los respectivos mantenimientos
                            preventivos. <strong>6.</strong> Tener conductores de certificada experiencia, habilidad,
                            responsabilidad, cultura,
                            seriedad y de conformidad con la ley. <strong>7.</strong> Expedir copia simple física o digital,
                            previa solicitud en
                            tal
                            sentido del <strong>CONTRATANTE</strong> de la póliza de responsabilidad civil contractual y
                            extracontractual
                            contratada, habilitación, contrato, SOAT, licencia de conducción del conductor y demás documentos
                            que requiera para verificar el cumplimiento de la normatividad vigente en materia de transporte
                            especial y transporte en general y sobre las condiciones de ejecución y cumplimiento del contrato.
                            <strong>8.</strong> Llevar las puertas cerradas, recogiendo y dejando a los pasajeros según el plan
                            de rodamiento.
                            <strong>SEXTA: OBLIGACIONES DEL CONTRATANTE. 1.</strong> Asignar una persona que sea vigilante de
                            que
                            los pasajeros guarden la compostura y el orden durante la prestación del servicio, para tales
                            efectos,
                            socializará con ellos las normas básicas de conducta al interior del vehículo, este puede ser el
                            mismo
                            CONTRATANTE o designar a uno de los ocupantes del servicio. <strong>2.</strong> Pagar los daños que
                            los (as)
                            pasajeros ocasionen al vehículo durante la prestación del servicio. <strong>SÉPTIMA: VALOR DEL
                                CONTRATO Y FORMA DE PAGO.</strong> El valor del transporte será la tarifa mensual acordada entre
                            <strong>EL
                                CONTRATISTA</strong> y los usuarios a quien <strong>EL CONTRATANTE</strong> representa, y será
                            cancelado durante
                            los primeros cinco (5) días de cada mes durante el periodo comprendido desde
                            <u>{{ $fStartDay }}</u> del mes de <u>{{ $fStartMont }}</u> del año
                            <u>{{ $fStartYear }}</u>
                            hasta <u>{{ $fEndDay }}</u> del mes <u>{{ $fEndMont }}</u> del año
                            <u>{{ $fEndYear }}</u>. El pago podrá realizarse, directamente en la oficina o al acompañante
                            o
                            conductor del vehículo; en cualquier caso, deberá siempre conservar el comprobante de pago. El
                            pago podrá realizarse también a través de consignación bancaría en la cuenta corriente #
                            127669997810 del Banco Davivienda, a nombre de STEP S.A.S. informando del pago al
                            <strong>CONTRATISTA</strong>, o directamente en la oficina del <strong>CONTRATISTA</strong> o al
                            conductor del vehículo; en
                            cualquier caso, deberá siempre conservar el comprobante del pago e informar al
                            <strong>CONTRATISTA</strong> o
                            exigir recibo o constancia del pago realizado. <strong>OCTAVA: ATENCION Y RESPUESTA ANTE
                                EMERGENCIAS.</strong> El conductor actuará de acuerdo con el plan de atención y respuesta ante
                            emergencia establecido por la EMPRESA, ante eventos como vendaval, avalancha, terremoto,
                            inundación, y /o cualquier situación que no sea convencional de y de acuerdo a la movilidad.
                            <strong>NOVENA: TRATAMIENTO DE LA PROPIEDAD DEL CLIENTE.</strong> Cuidar la propiedad del usuario
                            del
                            servicio de transporte mientras esté bajo su control, tales como componentes, instalaciones,
                            equipos,
                            herramientas, propiedad intelectual y datos personales; bajo las condiciones establecidas por
                            <strong>LA
                                EMPRESA</strong> en los requisitos para la prestación de este servicio, o por motivos de
                            capacidad del
                            vehículo prestador de este servicio, LA EMPRESA NO se hace responsable de la Propiedad del
                            cliente, se le comunicará esta condición a la persona asignada como responsable del grupo de
                            usuarios del servicio. <strong>DECIMA: CAUSALES DE SUSPENSIÓN DEL SERVICIO:</strong> Serán causales
                            de
                            suspensión parcial o total del servicio, las siguientes: <strong>1.</strong> Los actos de
                            indisciplina o vandalismo
                            por
                            parte de los pasajeros dentro del vehículo, como daños en la cojinería, vidrios, etc.
                            <strong>2.</strong> El
                            comportamiento agresivo, indecente, violento por parte de los pasajeros dentro y/o con los ocupantes
                            del vehículo, o la tenencia de elementos inflamables, tóxicos, sustancias alucinógenas o explosivos.
                            <strong>3.</strong> Conductas contra la moral y las buenas costumbres por parte de los pasajeros
                            dentro del vehículo.
                            <strong>PARÁGRAFO: PROCEDIMIENTO DE DENUNCIA:</strong> El acompañante o conductor documentará y
                            recolectará pruebas de lo sucedido, le comunicará la situación a la empresa quien evaluará la
                            situación e indicará el procedimiento a seguir según el evento que se presente a la persona
                            responsable del grupo de pasajeros designada en el presente contrato, según listado adjunto, el cual
                            forma parte integral del presente documento. o a la autoridad competente. Lo anterior sin perjuicio
                            de las acciones legales que El <strong>CONTRATISTA</strong> o sus funcionarios tenga. <strong>DECIMA
                                PRIMERA:
                                DURACION DEL CONTRATO.</strong> El presente contrato tendrá una duración de
                            <u>{{ $difmont + 1 }}</u> meses
                            comenzando a ejecutarse el día <u>{{ $fStartDay }}</u> del mes de <u>{{ $fStartMont }}</u>
                            del año <u>{{ $fStartYear }}</u> y concluyendo el día <u>{{ $fEndDay }}</u> del mes
                            <u>{{ $fEndMont }}</u> del año <u>{{ $fEndYear }}</u>.
                            Por ningún motivo podrá prorrogarse automáticamente el presente contrato o cederse por la

                        </p>
                    </div>
                @break

                {{-- convenio empresarial --}}
                @case(6)
                    <div
                        style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;margin-top: -7%;">
                        <p style="font-size: 88%;text-align: justify;">
                            equipo automotor del COLABORADOR, y la necesidad del CONTRATISTA, para la mejor
                            prestación del servicio transporte terrestre automotor especial de pasajeros, realizando
                            viajes ocasionales, con los clientes contratados para desarrollar el objeto indicado, dentro y
                            fuera del Departamento de Risaralda y para ejecutar el contrato del colegio LA
                            INSTITUCION EDUCATIVA JUAN MANUEL GONZALES, INSTITUCION EDUCATIVA
                            CRISTO REY, COLEGIO INEM FELIPE PEREZ
                            <br>
                            <br>
                            <strong>SEGUNDA</strong>: DURACION Este contrato tendrá una duración igual al término del contrato
                            que dio origen del presente convenio, el cual está vigente desde El 15 de febrero de
                            202 hasta el 15 de noviembre del 202 .
                            <br>
                            <br>
                            <strong>TERCERA</strong>: OBLIGACIONES DEL COLABORADOR A) Prestar los vehículos al
                            CONTRATISTA, para los servicios que requiera y que dieron origen a la suscripción de
                            este contrato, B) Mantener informado al CONTRATISTA, del estado de los vehículos y la
                            situación de los conductores y de los equipos, serán las exigidas en la resolución
                            N°007126 del 11 de octubre de 1995 C) Relacionar los vehículos que cumplan con todos
                            los documentos y seguros exigidos por la ley y el Código Nacional de Tránsito, como son
                            SOAT, Seguros de Responsabilidad Civil Contractual y Extracontractual, Tarjeta de
                            Operación Vigente, Revisión Técnico Mecánica y Preventiva. D) Revisar e inspeccionar el
                            estado de los vehículos.
                            <br>
                            <br>
                            PARAGRAFO 1: Responder de acuerdo con la ley, por los riesgos que se causen en
                            desarrollo del servicio de transporte con su automotor para la cual contará con los seguros
                            de responsabilidad civil contractual y extracontractual vigentes y de los conductores de los
                            vehículos de este convenio.
                            PARAGRAFO 2: Los aportes al sistema de seguridad social integral de los
                            conductores de los vehículos objeto de este convenio serán obligación del propietario y/o
                            conductor del mismo a la empresa a la cual está afiliado.
                            <br>
                            <br>
                            <strong>CUARTA</strong>: OBLIGACIONES DEL CONTRATISTA A) La responsabilidad de los
                            servicios contratados por una persona jurídica o por una persona natural, que se van a
                            prestar de acuerdo con este contrato, será exclusiva de la empresa de transporte
                            CONTRATISTA, B) Vigilar que los conductores de los vehículos porten durante la
                            operación el extracto del contrato conforme a lo requerido por el artículo 2.2.1.6.3.4 DEL
                            DECRETO 1079 de 2015. C) EL CONTRATISTA solicitará cada 30 días PAZ y SALVO por
                            gastos operativos expedido por la empresa COLABORADORA de los vehículos
                            relacionados en el presente convenio para la expedición del FUEC, en conformidad por lo
                            preceptuado en el Decreto 1079 de2015 y la Resolución 001069 de Abril 23 de 2015.
                            <br>
                            <br>
                            PARAGRAFO: Sera obligación del CONTRATISTA radicar el presente convenio en la
                            Dirección Regional del Ministerio de Transporte y a la Superintendencia de Puertos y
                            Transportes, dando así cumplimiento a lo dispuesto en el inciso segundo del
                            artículo2.2.1.6.3.4 DEL DECRETO 1079 DE 2015.
                        </p>
                    </div>
                @break

                {{-- vinculación --}}
                @case(9)
                    <div style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;">
                        <p style="font-size: 88%;text-align: justify;">
                            por la misma, en cada caso los siguientes conceptos: <strong>Parágrafo 1: Pago para renovación de
                                tarjeta
                                de operación:</strong> Los conceptos de este valor se describen en la siguiente tabla, los ítems
                            del 1 al 7
                            son obligatorios, el 8 y 9 son opcionales:

                        <div style="display: flex;width: 38.7rem;border: solid 1px #000;">
                            <div style="text-align: center;font-size: 88%;"><strong>TABLA DE APORTES VINCULADOS RENOVACIÓN
                                    TARJETA OPERACIÓN</strong></div>
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;font-size: 88%;">

                                <thead>
                                    <tr>
                                        <th style="width: 10%;border: solid 1px #000;border-collapse: collapse;">
                                            Ítem
                                        </th>
                                        <th style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Concepto
                                        </th>
                                        <th style="width: 15%;border: solid 1px #000;border-collapse: collapse;">
                                            Tiempo
                                        </th>
                                        <th style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Valor
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Cuota Administrativa
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            2
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            GPS
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            6 Meses
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            3
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Seguridad Social
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            4
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Salario Mínimo
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            5
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Auxilio de transporte
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            6
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Provisión Liquidación
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            <strong>Total Pago Renovación Tarjeta Operació</strong>
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            7
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Provisión Seguro Obligatorio
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            8
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Provisión RCC
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            <strong>Total Pago con Aprovisionamiento Seguros</strong>
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">

                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>

                        <p>
                            <strong>Parágrafo 2: Pago aportes mensuales:</strong> Los conceptos de este valor se describen en la
                            siguiente tabla,
                            Los ítems del 1 al 6 son obligatorios, el 7 y 8 son opcionales.
                        </p>

                        <div style="display: flex;width: 38.7rem;border: solid 1px #000;">
                            <div style="text-align: center;font-size: 88%;"><strong>TABLA DE APORTES VINCULADOS MES</strong>
                            </div>
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;font-size: 88%;">

                                <thead>
                                    <tr>
                                        <th style="width: 10%;border: solid 1px #000;border-collapse: collapse;">
                                            Ítem
                                        </th>
                                        <th style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Concepto
                                        </th>
                                        <th style="width: 15%;border: solid 1px #000;border-collapse: collapse;">
                                            Tiempo
                                        </th>
                                        <th style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Valor
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Cuota Administrativa
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            2
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Seguridad Social
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            3
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Salario Mínimo
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            4
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Auxilio de transporte
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            5
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Provisión Liquidación
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            <strong>Total Pago Renovación Tarjeta Operación</strong>
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            6
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Provisión Seguro Obligatorio
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            7
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Provisión RCC
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1 Mes
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Por el período del contrato
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            <strong>Total Pago con Aprovisionamiento Seguros</strong>
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">

                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>

                        <p>
                            A los valores anteriores se cargará el valor de los (6) meses correspondiente al excedente GPS,
                            además
                            de los anteriores valores el <strong>PROPIETARIO (TENEDOR)</strong> deberá asumir en su momento costos tales,
                            dotación para
                            conductores, capacitaciones obligatorios, marcación y emblemas de vehículos, Sanción no asistencia
                            capacitaciones, multas de puertos y transportes (IUIT), movilizar el vehículo sin FUEC, costo por
                            expedición de tarjeta de operación, pólizas RCC Y RCE valor promedio de cada vehículo en caso de no
                            realizar aprovisionamiento, exámenes médicos de ingresó, periódicos, retiro y complementarios del
                            conductor, alcoholímetros, aprovechamiento de los contratos ejecutados a través de la empresa,
                            cuando es convenio 7% y propios 3%, <strong>(Decreto 431, Artículo 2.2.1.6.4.1. Numeral 4). QUINTA:
                        </p>
                        </p>
                    </div>
                @break

                @default
            @endswitch
        </x-contractframes>
        {{-- pagina 3 --}}
        <x-contractframes typeContract="{{ $titlecontract }}">
            @switch($contract->type_contract)
                @case(1)
                    <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">

                        @switch($contract->contract_with)
                        {{-- grupo padres --}}
                            @case(1)
                                <p style="font-size: 88%;text-align: justify;">
                                    sitios seguros (no en la mitad de la calle ni en huecos o areneros). 9) Nunca dejar al menor con una
                                    persona distinta al acudiente o q quien éste señale o donde indique, en caso de no ser posible
                                    verificar la situación, la empresa de transporte intentará contactar directamente con el padre de
                                    familia o la institución, y de no ser posible, volverá con el menor al colegio una vez termine el
                                    recorrido para efectos de normalizar la situación o solicitar acompañamiento de la autoridad
                                    competente. <strong>PARÁGRAFO</strong>: El acompañante del vehículo no podrá separarse por más de 3
                                    metros
                                    de éste para recoger o entregar (Numeral 2) a un estudiante ya que con ello estaría descuidando a
                                    los demás pasajeros del vehículo, es por lo anterior que cuando al acompañante del vehículo no le
                                    sea posible recoger o entregar al estudiante en la residencia o portería respectiva, el padre, o a
                                    quien este designe previamente, tendrá que aproximarse al vehículo con el estudiante tomado de la
                                    mano o recibirlo allí. <strong>SEXTA: OBLIGACIONES DEL CONTRATANTE Y EN ESPECIAL LOS
                                        PADRES A QUIEN ESTE REPRESENTA</strong>: 1) Suministrar al <strong>CONTRATISTA</strong> toda la
                                    información
                                    necesaria, oportuna sobre inasistencia del (a) estudiante o cambio de la persona indicando nombre
                                    completo y número de identificación de quien estará pendiente de recoger al estudiante mínimo con
                                    24 horas de anticipación y cuando haya cambio de dirección con mínimo diez (10) días con el fin de
                                    asignar nueva ruta. 2) Ser vigilante para que los (as) estudiantes guarden la compostura y el orden
                                    durante la prestación del servicio, para tales efectos, socializará con el estudiante las normas
                                    básicas de conducta al interior del vehículo 3) Asumir la directriz: <strong>“EL (A) ESTUDIANTE
                                        ESPERA
                                        LA RUTA, NO LA RUTA ESPERA AL (A) ESTUDIANTE”</strong>. 4) Pagar los daños que los estudiantes
                                    ocasionen al vehículo durante la prestación del servicio. <strong>SÉPTIMA. VALOR DEL CONTRATO Y
                                        FORMA DE PAGO</strong>. El valor del transporte será la tarifa mensual acordada entre <strong>EL
                                        CONTRATISTA</strong>
                                    y los padres de familia a quien el <strong>CONTRATANTE</strong> representa, y será cancelado durante
                                    los primeros
                                    cinco (5) días de cada mes durante el periodo comprendido desde <u>{{ $fStartMont }}</u> hasta
                                    <u>{{ $fEndMont }}</u>, <strong>incluyendo semana santa, vacaciones de mitad de año, semana
                                        de receso, períodos de paro, incapacidades</strong>, según lo consignado en el documento
                                    adjunto. Los
                                    <strong>CONTRATANTES</strong> serán solidarios entre ellos. El pago podrá realizarse, directamente
                                    en la oficina
                                    o al acompañante o conductor del vehículo; en cualquier caso, deberá siempre conservar el
                                    comprobante del pago realizado. <strong>OCTAVA. VIGENCIA.</strong> El presente contrato se inicia el
                                    día <u>{{ $fStartDay }}</u>
                                    del mes de <u>{{ $fStartMont }}</u> de <u>{{ $fStartYear }}</u> y concluye el día
                                    <u>{{ $fEndDay }}</u> del mes de <u>{{ $fEndMont }}</u> de <u>{{ $fEndYear }}</u>.
                                    Por ningún motivo podrá prorrogarse el presente contrato o cederse por la parte <strong>CONTRATANTE.
                                        NOVENA. TERMINACIÓN</strong>. Cualquiera de las partes podrá dar por terminado este contrato
                                    dando
                                    un preaviso a la otra parte y en como mínimo en los últimos quince (15) días de cada mes. En caso
                                    de que sea el representante de los padres de familia quien desee retirarse del contrato, este tendrá
                                    que informar por escrito <strong>AL CONTRATISTA</strong> cuál de los padres de familia que continua
                                    en la
                                    ejecución del contrato, deberá ser quien continúe como representante del grupo de padres, de no
                                    hacerlo, aun renunciando al servicio, continuará con las obligaciones derivadas del presente
                                    contrato. <strong>DECIMA. CAUSALES DE TERMINACIÓN CON JUSTA CAUSA Y UNILATERALES. A)
                                        POR PARTE DEL CONTRATISTA:</strong> 1) El no pago por parte del PADRE DE FAMILIA Y/O
                                    ACUDIENTE 2) Actos de indisciplina, irrespeto o vandalismo por parte del estudiante. 3) Perdida del
                                    equilibrio financiero para el sostenimiento de la ruta, el cual, para efectos de dejar constancia,
                                    no
                                    podrá operar con la mitad más uno de su capacidad total según su manual del usuario. <strong>B) POR
                                        PARTE DEL CONTRATANTE:</strong> 1) Por inconformidad con la prestación del servicio, previa
                                    denuncia
                                    por escrito y por medio PQRS realizada al <strong>CONTRATISTA</strong> sin que este ejecute acciones
                                    o tome
                                    medidas correctivas, o explique justamente la situación. 2) Por incumplimiento con alguno de los
                                    compromisos adquiridos en el presente contrato

                                </p>
                            @break

                        {{-- universitarios --}}
                            @case(2)
                                <p style="font-size: 80%;text-align: justify;">
                                    anterior sin perjuicio de las acciones legales que El <strong>CONTRATISTA</strong> o sus
                                    funcionarios tenga.
                                    <strong>DECIMA PRIMERA: DURACION DEL CONTRATO.</strong> El presente contrato tendrá una duración de
                                    <u>{{ $difmont + 1 }}</u> meses comenzando a ejecutarse el día <u>{{ $fStartDay }}</u> de
                                    <u>{{ $fStartMont }}</u> de <u>{{ $fStartYear }}</u> y concluyendo el día
                                    <u>{{ $fEndDay }}</u>
                                    de <u>{{ $fEndMont }}</u> de <u>{{ $fEndYear }}</u>. Por ningún motivo podrá prorrogarse
                                    automáticamente el presente contrato
                                    o cederse por la parte <strong>CONTRATANTE. DECIMA SEGUNDA_ TERMINACIÓN.</strong> Cualquiera de las
                                    partes podrá dar por terminado este contrato dando un preaviso con no menos de quince (15) días
                                    de antelación al servicio. En cualquier caso, no se devolverá suma alguna por concepto de depósito.
                                    <strong>DECIMA TERCERA: CAUSALES DE TERMINACIÓN CON JUSTA CAUSA Y UNILATERALES. A.
                                        POR PARTE DEL CONTRATISTA: 1.</strong> El no pago por parte del <strong>CONTRATANTE 2.</strong>
                                    Actos de
                                    indisciplina, irrespeto o vandalismo por parte de los pasajeros. <strong>B. POR PARTE DEL
                                        CONTRATANTE: 1.</strong> Por inconformidad con la prestación del servicio, previa denuncia por
                                    escrito al
                                    correo electrónico: <a href="">sertepsapqr@gmail.com</a> al WhatsApp # 323 419 7103 al
                                    <strong>CONTRATISTA</strong> sin que
                                    este ejecute acciones o tome medidas correctivas, o explique justamente la situación.
                                    <strong>2.</strong> Por
                                    incumplimiento con alguno de los compromisos adquiridos en el presente contrato.
                                <p style="margin-left: 6.8%"> ----------------------------------- FIN CLAUSULADO
                                    ------------------------------------</p>
                                <p style="font-size: 84%;text-align: justify;">
                                    Para efectos de dejar constancia, <strong>CONTRATANTE</strong> y <strong>CONTRATISTA</strong>,
                                    libres de todo vicio y en pleno
                                    {{-- falta poner el campo de la ciudad de firma --}}
                                    uso de nuestras facultades suscribimos y aceptamos el presente contrato en {{$contract->signature_place}} a
                                    los <u>{{ $firmeday }}</u> días del mes de <u>{{ $firmemonth }}</u> del año
                                    <u>{{ $firmeyear }}</u>.
                                </p>
                                <br>
                                <br>
                                <br>

                                <p style="margin-left: 7.8%;">
                                    <strong> ACEPTAMOS:</strong>
                                </p>

                                <br>
                                <br>
                                <br>

                                <p style="font-size: 86%;">
                                    <strong> CONTRATISTA: <span style="margin-left: 31%;">CONTRATANTE:</span><br>
                                        ALBA OSIRIS HIDALGO PESCADOR <span
                                            style="margin-left: 9%;">_____________________________</span><br>
                                        C.C. 42.077.205 expedida en Pereira <span style="margin-left: 10%;">C.C.:</span><br>
                                        Representante Legal</strong>
                                </p>

                                </p>
                            @break

                        {{-- estudiante con acudiente --}}
                            @case(3)
                                <p style="font-size: 90%;text-align: justify;">
                                    uno de los padres de familia a quien éste representa. Pese a lo anterior, el cambio de vehículo por
                                    el literal <strong>3. B.</strong> Será facultativo de la empresa y según disposición que este tenga
                                    de su parque
                                    automotor. <strong>TERCERA.PLAN DE CONTINGENCIA.</strong> El <strong>CONTRATISTA</strong> dispondrá
                                    de la aplicación
                                    del plan de contingencia respectivo, a fin de suplir los inconvenientes que puedan tener los
                                    vehículos
                                    que prestan el servicio al <strong>CONTRATANTE. CUARTA. OBLIGACIONES DEL CONTRATISTA 1)</strong>
                                    cumplir con los horarios establecidos. <strong>2)</strong> El servicio se prestará puerta a puerta
                                    cuando las
                                    condiciones se den; en calles peatonales el acudiente o padre de familia debe estar presenta o
                                    atento
                                    para dejar y recibir el menor, el ingreso a condominios y conjuntos cerrados estarán sujetos a
                                    condiciones de movilidad dentro de éstos . <strong>3)</strong> llevar con seguridad, aseo y
                                    comodidad al pasajero,
                                    respetando las normas de tránsito y de transporte especial vigente. <strong>4)</strong> Llevar una
                                    velocidad
                                    moderada durante todo el recorrido. <strong>5)</strong> Mantener su vehículo en excelentes
                                    condiciones de aseo,
                                    estado técnico mecánico, haciendo los respectivos mantenimientos preventivos. <strong>6)</strong>
                                    Tener
                                    conductores y acompañantes de certificada experiencia, habilidad, responsabilidad, cultura, seriedad
                                    y de conformidad con la ley. <strong>7)</strong> Expedir copia simple física o digital, previa
                                    solicitud en tal
                                    sentido del
                                    <strong>CONTRATANTE</strong> de la póliza de responsabilidad civil contractual y extracontractual
                                    contratada,
                                    habilitación, contrato, SOAT, licencia de conducción del conductor y demás documentos que
                                    requiera para verificar el cumplimiento de la normatividad vigente en materia de transporte especial
                                    y transporte en general y sobre las condiciones de ejecución y cumplimiento del contrato.
                                    <strong>8)</strong> Llevar
                                    las puertas cerradas, recogiendo y dejando a los estudiantes en sitios seguros (no en la mitad de la
                                    calle, ni en huecos o areneros) <strong>9)</strong>. Nunca dejar al menor con una persona distinta
                                    al acudiente o a
                                    quien éste señale o donde indique. En caso de no ser posible verificar la situación, la empresa de
                                    transporte especial intentará contactar directamente con el padre de familia o la institución y de
                                    no
                                    ser posible, volverá con el menor al colegio una vez termine el recorrido para efectos de normalizar
                                    la situación o solicitar acompañamiento de la autoridad competente. <strong>PARÁGRAFO:</strong> El
                                    acompañante
                                    del vehículo no podrá separarse por más de 3 metros de éste para recoger o entregar <strong>(Ver
                                        Numeral
                                        2)</strong> a un estudiante ya que con ello estaría descuidando a los demás pasajeros del
                                    vehículo, es por
                                    lo anterior que cuando al acompañante del vehículo no le sea posible recoger o entregar al
                                    estudiante
                                    en la residencia o portería respectiva, el padre, o a quien este designe previamente, tendrá que
                                    aproximarse al vehículo con el estudiante tomado de la mano o recibirlo allí. <strong>QUINTA:
                                        OBLIGACIONES DEL CONTRATANTE: 1)</strong> Suministrar al <strong>CONTRATISTA</strong> toda la
                                    información
                                    necesaria, oportuna sobre inasistencia del (a) estudiante o cambio de la persona, indicando nombre
                                    completo y número de cédula, que estará pendiente de recoger al menor al terminar el recorrido
                                    mínimo con 24 horas de anticipación, cuando haya cambio de dirección con mínimo diez (10) días
                                    con el fin de asignar nueva ruta. <strong>2)</strong> Ser vigilante para que los (as) estudiantes
                                    guarden la
                                    compostura
                                    y el orden durante la prestación del servicio, para tales efectos, socializará con el estudiante las
                                    normas básicas de conducta al interior del vehículo. <strong>3)</strong> Asumir la directriz:
                                    <strong>“EL(A) ESTUDIANTE
                                        ESPERA LA RUTA, NO LA RUTA ESPERA AL ESTUDIANTE”. 5)</strong> Pagar los daños que los (as)
                                    estudiantes ocasionen al vehículo durante la prestación del servicio. <strong>6)</strong> Pagar las
                                    multas en las que
                                    incurra el conductor del vehículo por incumplimiento de las normas de tránsito por parte de los (as)
                                    estudiantes, como por ejemplo no portar el cinturón de seguridad.



                                </p>
                            @break

                        {{-- rector o representante legal del colegio --}}
                            @case(4)
                                <p style="font-size: 80%;text-align: justify;">
                                    OBLIGACIONES DEL PADRE DE FAMILIA Y/O ACUDIENTE</strong>: El Padre de Familia y/o Acudiente
                                    responsable, se obliga a: <strong>1)</strong> Inscribir al estudiante para el servicio de
                                    transporte, en el lugar
                                    indicado
                                    por el COLEGIO, firmando el respectivo Compromiso de pago, en el cual brindará toda la información
                                    requerida para asignar apropiadamente la Ruta de Transporte al estudiante. <strong>2)</strong> Pagar
                                    la Tarifa
                                    mensual, durante los primeros cinco (5) días de cada mes del servicio prestado. <strong>3)</strong>
                                    Informar por
                                    escrito el cambio de dirección de residencia, con un mínimo de quince (15) días calendario de
                                    anticipación al día del real cambio de dirección, con el objetivo de poder realizar los cambios en
                                    la
                                    Ruta de Transporte. Dejando establecido que el servicio quedará sujeto a la disponibilidad existente
                                    en el momento, sin garantizar la prestación del mismo y sin dar lugar a pago de indemnización de
                                    ninguna índole. <strong>4)</strong> Comprometerse a que el estudiante esté listo en el sitio y
                                    horario previamente
                                    acordado con la EMPRESA. El estudiante es quien debe esperar la Ruta, no la Ruta (o el conductor)
                                    al estudiante. <strong>5)</strong> Comunicar al conductor, al Coordinador del COLEGIO, y el colegio
                                    informara a su
                                    vez al coordinador de la empresa, cuando el estudiante no pueda asistir al Colegio o cuando vaya a
                                    ser retirado del mismo. <strong>PARAGRAFO 1:</strong> En el caso de presentarse el retiro no
                                    justificado de un
                                    estudiante, el PADRE DE FAMILIA y/o ACUDIENTE quedará comprometido a cancelar la Tarifa
                                    completa del mes en el que se hizo el retiro y perderá el cupo adquirido. <strong>PARAGRAFO
                                        2:</strong> El
                                    incumplimiento en el pago por parte del PADRE DE FAMILIA y/o ACUDIENTE, dará derecho a la
                                    EMPRESA a suspender la prestación del servicio de transporte, dando previo aviso con una
                                    antelación no inferior a tres (3) días hábiles. <strong>DECIMA. CAUSALES DE SUSPENSIÓN DEL
                                        SERVICIO:</strong> Serán causales de suspensión parcial o total del servicio de transporte, las
                                    siguientes:
                                    <strong>1)</strong> Los actos de indisciplina o vandalismo por parte del estudiante dentro del bus,
                                    como daños en la
                                    cojinería, vidrios y en alguna otra parte del interior del vehículo. <strong>2)</strong> El
                                    comportamiento agresivo o
                                    violento por parte del estudiante dentro del vehículo, o la tenencia de elementos inflamables,
                                    tóxicos,
                                    sustancias alucinógenas, embriagantes o explosivos, el <strong>CONTRATANTE</strong>, tendrá el 100%
                                    de la
                                    responsabilidad de estos estudiantes y sus pertenencias <strong>3)</strong> y en general por
                                    incurrir en conductas
                                    que afecten el normal comportamiento y cuidado. <strong>PARÁGRAFO: PROCEDIMIENTO DE
                                        DENUNCIA:</strong> El conductor documentará y recolectará pruebas de lo sucedido, le comunicará
                                    la
                                    situación al coordinador de ruta quien a su vez se pondrá en contacto con el CONTRATISTA y/o
                                    autoridad competente. Lo anterior sin perjuicio de las acciones legales que El
                                    <strong>CONTRATISTA</strong> tenga,
                                    un servicio o viaje se puede ver afectado por incurrir en acciones ilícitas de los estudiantes, si
                                    llegare
                                    a suceder y de comprobarse que la culpabilidad es de un estudiante el servicio se cobrara en el
                                    100% de lo pactado. Por ningún motivo podrá prorrogarse automáticamente el presente contrato o
                                    cederse por ninguna de las partes sin; pese a lo anterior, cualquiera de las partes podrá, faltando
                                    un
                                    mes para concluir el contrato, enviar oferta comercial pendiente a la celebración de un nuevo
                                    contrato; por su parte, si el contrato fue ejecutado con excelencia, el <strong>CONTRATANTE</strong>
                                    se
                                    compromete a preferir al <strong>CONTRATISTA</strong> en una nueva licitación y en caso de
                                    encontrarse en
                                    igualdad de condiciones frente a otros ofertantes. <strong>DECIMA PRIMERA. TERMINACIÓN.</strong>
                                    Cualquiera
                                    de las partes podrá dar por terminado este contrato dando un preaviso a la otra parte de por lo
                                    menos
                                    20 días hábiles y previos a vencerse el mes. <strong>DECIMA SEGUNDA. CAUSALES DE TERMINACIÓN
                                        CON JUSTA CAUSA Y UNILATERALES. A) POR PARTE DEL CONTRATISTA:</strong> 1) La mora del
                                    <strong>CONTRATANTE</strong> en el pago y según lo consagrado en la cláusula séptima del presente
                                    contrato 2)
                                    Actos de indisciplina, irrespeto o vandalismo por parte de los estudiantes que ocasionen daños de
                                    hasta en el 15% del parque automotor dispuesto para la prestación del servicio. <strong>B) POR PARTE
                                        DEL CONTRATANTE:</strong> 1) Por inconformidad expresa con la prestación del servicio, previa
                                    denuncia
                                    por escrito y por medio PQRS realizada al <strong>CONTRATISTA</strong> sin que este ejecute acciones
                                    o tome
                                    medidas correctivas, o explique justamente la situación. 2) Por incumplimiento con alguno de los
                                    compromisos adquiridos en el presente contrato. <strong>DECIMA TERCERA. MERITO EJECUTIVO</strong>:
                                    el
                                    presente contrato presta merito ejecutivo a favor de las partes por el incumplimiento de las
                                    responsabilidades establecidas en el clausulado del presente contrato y queda aceptado a la firma
                                    de este. <strong>DECIMA CUARTA. SOLUCIÓN DE CONTROVERSIAS:</strong> Toda controversia, conflicto o
                                    diferencias relativas a este contrato, su ejecución y liquidación, se resolverán preferiblemente


                                </p>
                            @break

                            @default
                        @endswitch


                    </div>
                @break

                {{-- empresarial --}}
                @case(2)
                    <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">
                        <p style="font-size: 88%;text-align: justify;">
                            pasajeros en sitios seguros. <strong>SEXTA: OBLIGACIONES DEL CONTRATANTE: 1)</strong>
                            Suministrar al <strong>CONTRATISTA</strong> toda la información necesaria, oportuna sobre lugares y
                            horarios de servicio, como mínimo con cinco (05) días de anticipación.
                            <strong>2)</strong> Pagar los daños que los pasajeros ocasionen al vehículo durante la prestación
                            del
                            servicio. <strong>3).</strong> Destinar los espacios internos del establecimiento con acceso
                            vehicular, al
                            ascenso y descenso de pasajeros. <strong>4).</strong> Contar con un Plan Estratégico de Seguridad
                            Vial
                            durante la prestación del servicio <strong>SÉPTIMA. VALOR DEL CONTRATO Y FORMA DE
                                PAGO</strong>. El valor de <u>{{ $valueContractText }}</u> PESOS MCTE.
                            (<u>${{ number_format($contract->contract_value, 2, ',', '.') }}</u>)
                            del contrato será de <u>{{ $tipe_pay }}</u>. Pagados en la segunda mitad del
                            presente año, de acuerdo a las órdenes de servicio, y con el respectivo anticipo, dentro de
                            los primeros diez (10) días hábiles de acuerdo al servicio prestado. El pago deberá
                            realizarlo el <strong>CONTRATANTE</strong> a través de consignación bancaría en la cuenta corriente
                            #127669997810 del banco Davivienda, informando del pago al <strong>CONTRATISTA</strong> o/y
                            directamente en la oficina del <strong>CONTRATISTA</strong>, en cualquier caso, deberá siempre
                            conservar el comprobante de la consignación e informar al <strong>CONTRATISTA</strong> o exigir
                            recibo
                            o constancia del pago por el pago realizado. De incurrir en mora, EL <strong>CONTRATISTA</strong> le
                            informará de tal situación y podrá suspender de inmediato la prestación del servicio y sin
                            perjuicio de las demás acciones legales, que, para sus efectos, el presente contrato y sus
                            anexos prestará mérito ejecutivo. La mora se liquidará con base en las reglas generales
                            de los negocios mercantiles. <strong>PARÁGRAFO</strong>: Cualquier cambio en la cuenta bancaría será
                            notificado por el <strong>CONTRATISTA</strong> a través de correo. <strong>OCTAVA. CAUSALES DE
                                SUSPENSIÓN DEL SERVICIO</strong>: Serán causales de suspensión parcial o total del servicio
                            de transporte, las siguientes: <strong>1)</strong> Los actos de indisciplina o vandalismo por parte
                            del
                            pasajero dentro del bus, como daños en la cojinería, vidrios y en alguna otra parte del
                            interior del vehículo. <strong>2)</strong> El comportamiento agresivo o violento por parte del
                            pasajero
                            dentro del vehículo, o la tenencia de elementos inflamables, tóxicos, sustancias
                            alucinógenas, embriagantes o explosivos. <strong>3)</strong> y en general por incurrir en conductas
                            que
                            afecten el normal comportamiento y cuidado. <strong>PARÁGRAFO: PROCEDIMIENTO DE
                                DENUNCIA:</strong> El conductor o su acompañante, de haber, documentará y recolectará
                            pruebas de lo sucedido, le comunicará la situación al coordinador de ruta quien a su vez
                            se pondrá en contacto con el CONTRATISTA y/o autoridad competente. Lo anterior sin
                            perjuicio de las acciones legales que El <strong>CONTRATISTA</strong> tenga. <strong>NOVENA.
                                VIGENCIA.</strong> El
                            presente contrato tendrá una duración de <u>{{ $difmont + 1 }}</u> meses, comenzando a ejecutarse
                            el día <u>{{ $fStartDay }}</u> del
                            mes de <u>{{ $fStartMont }}</u>
                            de <u>{{ $fStartYear }}</u> y concluyendo el día <u>{{ $fEndDay }}</u> del mes
                            <u>{{ $fEndMont }}</u> de <u>{{ $fEndYear }}</u>. Por ningún motivo
                            podrá prorrogarse automáticamente el presente contrato o cederse por la parte
                            <strong>CONTRATANTE;</strong> pese a lo anterior, cualquiera de las partes podrá, faltando un mes
                            para
                            concluir el contrato, enviar oferta comercial tendiente a la celebración de un nuevo
                            contrato; por su parte, si el contrato fue ejecutado con excelencia, el <strong>CONTRATANTE</strong>
                            se
                            compromete a preferir al <strong>CONTRATISTA</strong> en una nueva licitación y en caso de
                            encontrarse en igualdad de condiciones frente a otros ofertantes. <strong>DECIMA.
                                TERMINACIÓN.</strong> Cualquiera de las partes podrá dar por terminado este contrato dando un
                            preaviso a la otra parte de por lo menos 20 días hábiles y previos a vencerse el mes.
                            <strong>DECIMA PRIMERA. CAUSALES DE TERMINACIÓN CON JUSTA CAUSA Y
                        </p>
                    </div>
                @break

                {{-- empresa turismo--}}
                @case(3)
                    <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">
                        <p style="font-size: 80%;text-align: justify;">
                            cualquiera de las partes podrá, faltando un mes para concluir el contrato, enviar oferta comercial
                            tendiente a la celebración de un nuevo contrato; por su parte, si el contrato fue ejecutado con
                            excelencia, el <strong>CONTRATANTE</strong> se compromete a preferir al <strong>CONTRATISTA</strong>
                            en una nueva licitación
                            y en caso de encontrarse en igualdad de condiciones frente a otros ofertantes. <strong>DECIMA.
                                TERMINACIÓN.</strong> Cualquiera de las partes podrá dar por terminado este contrato dando un
                            preaviso
                            a la otra parte de por lo menos 20 días hábiles y previos a vencerse el mes. <strong>DECIMA PRIMERA.
                                CAUSALES DE TERMINACIÓN CON JUSTA CAUSA Y UNILATERALES. A) POR PARTE DEL
                                CONTRATISTA: 1)</strong> La mora del <strong>CONTRATANTE</strong> en el pago y según lo
                            consagrado en la cláusula
                            séptima del presente contrato 2) Actos de indisciplina, irrespeto o vandalismo por parte de los
                            pasajeros que ocasionen daños de hasta en el 15% del parque automotor dispuesto para la
                            prestación del servicio. <strong>B) POR PARTE DEL CONTRATANTE</strong>: 1) Por inconformidad expresa
                            con la prestación del servicio, previa denuncia por escrito y por medio PQRS realizada al
                            <strong>CONTRATISTA</strong>
                            sin que este ejecute acciones o tome medidas correctivas, o explique justamente la situación. 2) Por
                            incumplimiento con alguno de los compromisos adquiridos en el presente contrato. <strong>DECIMA
                                SEGUNDA. MERITO EJECUTIVO</strong>: el presente contrato presta merito ejecutivo a favor de las
                            partes
                            por el incumplimiento de las responsabilidades establecidas en el clausulado del presente contrato
                            y queda aceptado a la firma de este. <strong>DECIMA TERCERA: SOLUCIÓN DE CONTROVERSIAS:</strong>
                            Toda controversia, conflicto o diferencias relativas a este contrato, su ejecución y liquidación, se
                            resolverán preferiblemente mediante los mecanismos de arreglo directo y conciliación entre las
                            partes involucradas, que para el caso serán: El representante legal de la empresa directamente y el
                            <strong>CONTRATISTA</strong> o a quien este designe.

                        <p style="font-size: 86%;">---------------------------------------- <strong>AVISO
                                DE PROTECCIÓN DE DATOS</strong> -------------------------------------</p>
                        <p style="font-size: 82%;margin-top: -2%;">
                            En mi calidad de titular de información personal, actuando libre y voluntariamente, al diligenciar
                            los
                            datos aquí solicitados, autorizo al STEP SAS – Servicio de Transporte Especial de Pasajeros s.a.s
                            Dirección en la ciudad de Dosquebradas, teléfono 3303821 , con correo electrónico
                            sertepsapqr@gmail.com; para que realice el tratamiento de mi información personal, en
                            cumplimiento de la Ley 1581 de 2012 y a lo previsto en el numeral 3 y el parágrafo del artículo 10
                            del Decreto 1377 de 2013.
                            En todo caso en cualquier momento el titular de la información podrá revocar su consentimiento y
                            ejercer su derecho a la supresión de datos personales consagrado en la Ley 1581 de 2012.
                        </p>
                        <p style="margin-left: 6.8%;font-size: 86%;"> -----------------------------------
                            <strong>FIN CLAUSULADO</strong> ------------------------------------
                        </p>
                        <p style="font-size: 82%;margin-top: -2%;">
                            Para efectos de dejar constancia, <strong>CONTRATANTE</strong> y <strong>CONTRATISTA</strong>,
                            libres de
                            todo vicio y en pleno
                            {{-- pendiente colocar el camppo lugar de la firma --}}
                            uso de sus facultades suscribimos y aceptamos el presente contrato en {{$contract->signature_place}} a
                            los <u>{{ $firmeday }}</u> días del mes de <u>{{ $firmemonth }}</u> del año
                            <u>{{ $firmeyear }}</u>.
                        </p>

                        <br>

                        <p style="margin-left: 7.8%;">
                            <strong> ACEPTAMOS:</strong>
                        </p>

                        <br>

                        <p style="font-size: 86%;">
                            <strong> CONTRATISTA: <span style="margin-left: 31%;">CONTRATANTE:</span><br>
                                ALBA OSIRIS HIDALGO PESCADOR <span
                                    style="margin-left: 9%;">_____________________________</span><br>
                                C.C. 42.077.205 expedida en Pereira <span style="margin-left: 10%;">C.C.:</span><br>
                                Representante Legal</strong>
                        </p>
                        </p>
                    </div>
                @break

                {{-- ocacional --}}
                @case(4)
                    <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">
                        <p style="font-size: 82%;text-align: justify;">
                            tóxicos, sustancias alucinógenas o explosivos. <strong>3.</strong> Conductas contra la moral y las
                            buenas costumbres
                            por
                            parte de los pasajeros dentro del vehículo. <strong>PARÁGRAFO: PROCEDIMIENTO DE DENUNCIA:</strong>
                            El
                            acompañante o conductor documentará y recolectará pruebas de lo sucedido, le comunicará la situación
                            a la empresa quien evaluará la situación e indicará el procedimiento a seguir según el evento que se
                            presente a la persona responsable del grupo de pasajeros designada en el presente contrato, según
                            listado adjunto, el cual forma parte integral del presente documento. o a la autoridad competente.
                            Lo
                            anterior sin perjuicio de las acciones legales que El <strong>CONTRATISTA</strong> o sus
                            funcionarios tenga. <strong>DECIMA
                                {{-- pendiente para este tipo de contratos poner duración del contrato --}}
                                PRIMERA. DURACION DEL CONTRATO.</strong> El presente contrato tendrá una duración de __ ______ ,
                            comenzando a ejecutarse el día <u>{{ $fStartDay }}</u> de <u>{{ $fStartMont }}</u> de
                            <u>{{ $fStartYear }}</u> y concluyendo el día <u>{{ $fEndDay }}</u> de
                            <u>{{ $fEndMont }}</u> de <u>{{ $fEndYear }}</u>.
                            Por ningún motivo podrá prorrogarse automáticamente el presente contrato o cederse por la parte
                            <strong>CONTRATANTE. DECIMA SEGUNDA. TERMINACIÓN.</strong> Cualquiera de las partes podrá dar por
                            terminado este contrato dando un preaviso con no menos de dos (2) días de antelación al servicio. En
                            cualquier caso, no se devolverá suma alguna por concepto de depósito. <strong>DECIMA TERCERA.
                                CAUSALES
                                DE TERMINACIÓN CON JUSTA CAUSA Y UNILATERALES. A. POR PARTE DEL CONTRATISTA: 1.</strong>
                            El no pago por parte del <strong>CONTRATANTE 2.</strong> Actos de indisciplina, irrespeto o
                            vandalismo por parte de
                            los
                            pasajeros. <strong>B. POR PARTE DEL CONTRATANTE: 1.</strong> Por inconformidad con la prestación del
                            servicio,
                            previa denuncia por escrito al correo electrónico: <a
                                href="">sertepsapqr@gmail.com</a> al WhatsApp # 323
                            419
                            7103 al <strong>CONTRATISTA</strong> sin que este ejecute acciones o tome medidas correctivas, o
                            explique justamente
                            la situación. <strong>2.</strong> Por incumplimiento con alguno de los compromisos adquiridos en el
                            presente
                            contrato.
                        <p style="font-size: 78%;margin-left: 6.8%"> ----------------------------------- FIN CLAUSULADO
                            ------------------------------------</p>
                        <p style="font-size: 80%;margin-top: -2%;">
                            Para efectos de dejar constancia, <strong>CONTRATANTE</strong> y <strong>CONTRATISTA</strong>,
                            libres de todo vicio y en pleno uso
                            de nuestras facultades suscribimos y aceptamos el presente contrato en _______________ a los
                            <u>{{ $firmeday }}</u> días
                            del mes de <u>{{ $firmemonth }}</u> del año <u>{{ $firmeyear }}</u>.
                        </p>



                        <p style="margin-left: 7.8%;">
                            <strong> ACEPTAMOS:</strong>
                        </p>


                        <p style="font-size: 86%;">
                            <strong> CONTRATISTA: <span style="margin-left: 31%;">CONTRATANTE:</span><br>
                                ALBA OSIRIS HIDALGO PESCADOR <span
                                    style="margin-left: 9%;">_____________________________</span><br>
                                C.C. 42.077.205 expedida en Pereira <span style="margin-left: 10%;">C.C.:</span><br>
                                Representante Legal</strong>
                        </p>

                        <br>

                        <p style="font-size: 80%;text-align: center;">
                            <strong>LISTADO USUARIOS CONTRATO DE PRESTACIÓN DE SERVICIO DE TRANSPORTE ESPECIAL CON
                                GRUPO ESPECÍFICO DE USUARIOS (TRANSPORTE DE PARTICULARES)</strong>
                        </p>

                        <br>

                        <p style="font-size: 80%;text-align: justify;">
                            Adicionalmente, el <strong>CONTRATANTE</strong> designa a
                            <u>{{ $contract->group_representative_name }}</u>
                            identificado(a) con {{$tipeIdentificationcardRepresentativeGroup}}
                            # <u>{{ $contract->identificationcard_representative_group }}</u>, expedida en
                            <u>{{ $contract->dateofexpedition_representative_group }}</u>, como
                            <strong>RESPONSABLE</strong>
                            del grupo de usuarios del servicio, de la presente relación.
                        </p>

                        <br>

                        <p style="font-size: 80%;text-align: justify;">
                            <strong>FIRMA RESPONSABLE GRUPO <br>
                                Teléfono:</strong>
                        </p>
                        </p>
                    </div>
                @break

                {{-- usuarios de salud--}}
                @case(5)
                    <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">
                        <p style="font-size: 80%;text-align: justify;">
                            parte <strong>CONTRATANTE. DECIMA SEGUNDA: TERMINACIÓN.</strong> Cualquiera de las partes podrá dar
                            por terminado este contrato dando un preaviso con no menos de quince (15) días de antelación al
                            servicio. En cualquier caso, no se devolverá suma alguna por concepto de depósito. <strong>DECIMA
                                TERCERA: CAUSALES DE TERMINACIÓN CON JUSTA CAUSA Y UNILATERALES. A. POR
                                PARTE DEL CONTRATISTA: 1.</strong> El no pago por parte del <strong>CONTRATANTE 2.</strong>
                            Actos de indisciplina,
                            irrespeto o vandalismo por parte de los pasajeros. <strong>B. POR PARTE DEL CONTRATANTE: 1.</strong>
                            Por
                            inconformidad con la prestación del servicio, previa denuncia por escrito al correo electrónico:
                            <a href="">sertepsapqr@gmail.com</a> al WhatsApp # 323 419 7103 al
                            <strong>CONTRATISTA</strong> sin que este ejecute
                            acciones o tome medidas correctivas, o explique justamente la situación. <strong>2.</strong> Por
                            incumplimiento con
                            alguno de los compromisos adquiridos en el presente contrato.
                        <p style="margin-left: 6.8%;font-size: 86%;"> -----------------------------------
                            <strong>FIN CLAUSULADO</strong> ------------------------------------
                        </p>
                        <p style="font-size: 82%;margin-top: -2%;">
                            Para efectos de dejar constancia, <strong>CONTRATANTE</strong> y <strong>CONTRATISTA</strong>,
                            libres de todo vicio y en pleno
                            uso de nuestras facultades suscribimos y aceptamos el presente contrato en {{$contract->signature_place}} a
                            los <u>{{ $firmeday }}</u> días del mes de <u>{{ $firmemonth }}</u> del año
                            <u>{{ $firmeyear }}</u>.
                        </p>

                        <br>

                        <p style="margin-left: 7.8%;">
                            <strong> ACEPTAMOS:</strong>
                        </p>

                        <br>

                        <p style="font-size: 86%;">
                            <strong> CONTRATISTA: <span style="margin-left: 31%;">CONTRATANTE:</span><br>
                                ALBA OSIRIS HIDALGO PESCADOR <span
                                    style="margin-left: 9%;">_____________________________</span><br>
                                C.C. 42.077.205 expedida en Pereira <span style="margin-left: 10%;">C.C.:</span><br>
                                Representante Legal</strong>
                        </p>
                        </p>
                    </div>
                @break

                {{-- convenio empresarial --}}
                @case(6)
                    <div
                        style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;margin-top: -7%;">
                        <p style="font-size: 88%;text-align: justify;">
                            <strong>QUINTA:</strong> PRECIO Y FORMA DE PAGO EL CONTRATISTA pagará mes vencido al
                            propietario por su parque automotor afiliado a la empresa COLABORADORA las sumas
                            acordadas correspondientes a los Servicios Prestados
                            <br>
                            <br>
                            <strong>SEXTA:</strong>El presente convenio no genera relación ni vinculación laboral entre el
                            COLABORADOR y el CONTRATISTA, así mismo tampoco genera relación o vínculo
                            laboral entre el personal que el COLABORADOR designe para la ejecución del presente
                            convenio.
                            <br>
                            <br>
                            <strong>SEPTIMA</strong>. - EL CONTRATISTA solicitará cada 30 días PAZ y SALVO por gastos
                            operativos expedido por la empresa COLABORADORA de los vehículos relacionados en el
                            presente convenio para la expedición del FUEC, en conformidad por lo preceptuado en el
                            Decreto 1079 de 2015 y la Resolución 001069 de Abril 23 de 2015.
                            <br>
                            <br>
                            <strong>OCTAVA:</strong> VIGENCIA Cualquiera de las partes podrá dar por terminado el presente
                            convenio unilateralmente con previo aviso de veinte (20) días hábiles.
                            <br>
                        <p style=""> ------------------------------------------ FIN CLAUSULADO
                            ------------------------------------------</p>

                        <p style="font-size: 88%;text-align: justify;">
                            Para efectos de dejar constancia, CONTRATISTA y EMPRESA COLABORADORA, libres
                            de todo vicio y en pleno uso de nuestras facultades suscribimos y aceptamos el presente
                            contrato en Dosquebradas a los 5 días del mes de febrero del año 202 .

                        </p>

                        <br>
                        <br>
                        POR EL CONTRATITA
                        <br>
                        <br>
                        ________________________________________ <br>
                        TRANSPORTE ESPECIAL DE PASAJEROS S.A.S <br>
                        REPRESENTANTE LEGAL <br>
                        ALBA OSIRIS HIDALGO PESCADOR <br>
                        <br>
                        <br>

                        POR EL COLABORADOR
                        <br>
                        <br>
                        _________________________________ <br>
                        MAXTRANSPORTE S.A.S <br>
                        NIT. 901035856-7 <br>
                        REPRESENTANTE LEGAL <br>
                        DIANA YANETH ALZATE SALAZAR <br>
                        </p>
                    </div>
                @break

                {{-- vinculación --}}
                @case(9)
                    <div style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;">
                        <p style="font-size: 84%;text-align: justify;">
                            OBLIGACIONES DE LAS PARTES A. OBLIGACIONES DE LA EMPRESA</strong> 1) Expedir mensualmente
                            al <strong>PROPIETARIO (TENEDOR)</strong> un extracto que contenga en forma discriminada los rubros y montos
                            cobrados y
                            pagados, por cada concepto detallado en el presente contrato. 2) Deberá llevar permanentemente
                            actualizado su plan de rodamiento, el cual debe ser remitido en físico o digital al
                            <strong>PROPIETARIO (TENEDOR)</strong> la
                            primera semana de cada mes; a dicho plan deberá acompañarse el plan de rodamiento realmente
                            ejecutado en el mes anterior. 3) Entregar <strong>al PROPIETARIO (TENEDOR)</strong>, el programa de revisión y
                            mantenimiento
                            preventivo diseñado e implementado por <strong>LA EMPRESA</strong>. 4) Capacitar a los conductores y
                            personal
                            encargado de operar los vehículos vinculados con el presente contrato. 5) Designar centro de
                            mantenimiento para que el <strong>PROPIETARIO (TENEDOR)</strong> se acerque, con el propósito de que se cumpla
                            con el
                            programa de mantenimiento preventivo de la empresa. 6) Contratar directamente con empresas
                            legalmente constituidas, los seguros reglamentarios de RCC y RCE, la plataforma tecnológica para el
                            monitoreo y control de flota, la marcación de vehículos, para amparar la actividad del transporte.
                            7) Los
                            impuestos ordinarios que se causen con ocasión del servicio especial de transporte de pasajeros
                            estarán
                            a cargo de la empresa 8) Comunicarle al usuario del servicio de transporte, en caso de que, por
                            motivos
                            de capacidad del vehículo objeto de este contrato, <strong>LA EMPRESA</strong> no se hace
                            responsable de la
                            Propiedad del cliente (tales como componentes, instalaciones, equipos, herramientas, propiedad
                            intelectual y datos personales). 9) La empresa adquirirá uniformes con distintivos de la empresa
                            para
                            los conductores. 10) Demás obligaciones contempladas en el artículo 2.2.1.6.8.13. del Decreto 1079 y
                            demás normas que lo modifiquen. <strong>B. OBLIGACIONES DEL PROPIETARIO (TENEDOR)</strong> 1) La gestión del
                            automotor
                            corresponde al propietario (TENEDOR) del vehículo, el cual deberá mantenerlo en óptimas condiciones técnicas,
                            mecánicas, de aseo, presentación y seguridad, so pena de que <strong>LA EMPRESA</strong> se abstenga
                            legítimamente de incluirlo en su plan de rodamiento. 2) Cumplir estrictamente el programa de
                            revisión y
                            mantenimiento preventivo diseñado e implementado por <strong>LA EMPRESA</strong>, de lo contrario,
                            <strong>LA EMPRESA</strong>
                            podrá abstenerse legítimamente de incluirlo en su plan de rodamiento. 3) Realizar inspecciones
                            diarias
                            al vehículo y de existir alguna anormalidad, reportar a <strong>LA EMPRESA</strong> lo antes
                            posible. Lo anterior
                            deberá
                            realizarse antes de que el vehículo salga a operación de conformidad con el plan de rodamiento. 4)
                            Cumplir con los reglamentos, estatutos y normas que le sean aplicables de la empresa, asistir a las
                            reuniones y capacitaciones a las que ésta convoque. 5) De llegar a tratar con los clientes de
                            <strong>LA
                                EMPRESA</strong>, hacerlo con respeto, dignidad y únicamente por medio de los mecanismos de
                            comunicación
                            que ésta establezca a través del Sistema de Gestión DE CALIDAD. 6) Permitir que <strong>LA
                                EMPRESA</strong>
                            inspeccione el vehículo de acuerdo con lo establecido en la Resolución 315 de febrero 6 del 2013
                            expedida por el Ministerio de Transporte y realizar los correctivos a la mayor brevedad posible,
                            donde
                            <strong>LA EMPRESA</strong> lo indique. 7) Cuidar la propiedad del usuario del servicio de
                            transporte mientras esté
                            bajo su control, tales como componentes, instalaciones, equipos, herramientas, propiedad intelectual
                            y
                            datos personales, bajo las condiciones establecidas por la empresa en los requisitos para prestación
                            de
                            cada servicio. 8) Suministrar oportunamente los documentos referentes a reparaciones y partes
                            cambiadas con el fin de mantener actualizada la ficha técnica del vehículo. 9) Suministrar los
                            documentos que identifiquen el vehículo y/o AL <strong>PROPIETARIO (TENEDOR)</strong> para diligenciar ante
                            las autoridades
                            competentes la tarjeta de operación o cualquier otro documento indispensable en la operación del
                            transporte. En caso de vencimiento de alguno de estos documentos, deberá aportarlos antes de sesenta
                            (60) días del vencimiento. 10) Cumplir con los requisitos establecidos por <strong>LA
                                EMPRESA</strong> a través del
                            Sistema de Gestión de Calidad para cada servicio (Escolar, Empresarial, Grupo específico de
                            usuarios,
                            Turismo). 11) Comunicar a <strong>LA EMPRESA</strong> todo cambio que ocurra dentro de la prestación
                            del servicio
                            antes de su modificación. 12) <strong>LOS PROPIETARIOS (TENEDOR)</strong> suscribirán un pagaré en blanco que
                            tendrá como
                            objeto garantizar el pago de las obligaciones derivadas de la suscripción del presente contrato y
                            demás
                        </p>
                    </div>
                @break

                @default
            @endswitch
        </x-contractframes>
        {{-- pagina 4 --}}
        @if ($contract->type_contract != 6)
            <x-contractframes typeContract="{{ $titlecontract }}">
                @switch($contract->type_contract)
                    @case(1)
                        @switch($contract->contract_with)
                        {{-- grupo padres --}}
                            @case(1)
                                <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">

                                    <p style="margin-left: 6.8%"> ----------------------------------- FIN CLAUSULADO
                                        ------------------------------------</p>
                                    <p style="font-size: 84%;text-align: justify;">
                                        Para efectos de dejar constancia, CONTRATANTE y CONTRATISTA, libres de todo vicio y en pleno
                                        uso de nuestras facultades suscribimos y aceptamos el presente contrato en {{$contract->signature_place}} a
                                        los <u>{{ $firmeday }}<u>
                                                días del mes de <u>{{ $firmemonth }}</u> del año <u>{{ $firmeyear }}</u>.
                                    </p>
                                    <br>
                                    <br>
                                    <br>

                                    <p style="margin-left: 7.8%;">
                                        <strong> ACEPTAMOS:</strong>
                                    </p>

                                    <br>
                                    <br>
                                    <br>

                                    <p style="font-size: 86%;">
                                        <strong> CONTRATISTA: <span style="margin-left: 31%;">CONTRATANTE:</span><br>
                                            ALBA OSIRIS HIDALGO PESCADOR <span
                                                style="margin-left: 9%;">_____________________________</span><br>
                                            C.C. 42.077.205 expedida en Pereira <span style="margin-left: 10%;">C.C.:</span><br>
                                            Representante Legal</strong>
                                    </p>



                                </div>
                            @break

                        {{-- universitarios --}}
                            @case(2)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break

                        {{-- estudiante con acudiente --}}
                            @case(3)
                                <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">

                                    <p style="font-size: 81%;text-align: justify;">
                                        <strong>SEXTA. VALOR DEL CONTRATO Y FORMA DE PAGO.</strong> En los primeros cinco (5) días de
                                        cada
                                        mes, el <strong>CONTRATANTE</strong> pagará al <strong>CONTRATISTA</strong> la suma de
                                        <u>{{ $valueContractText }}</u> PESOS MCTE.
                                        (<u>${{ number_format($contract->contract_value, 2, ',', '.') }}</u>)
                                        durante los meses comprendidos entre enero y noviembre 30 del año
                                        lectivo, <strong>INCLUYENDO SEMANA SANTA, VACACIONES DE MITAD DE AÑO, SEMANA DE
                                            RECESO, PERÍODOS DE PARO, INCAPACIDADES.</strong> De incurrir en mora, <strong>EL
                                            CONTRATISTA</strong>
                                        podrá suspender de inmediato la prestación del servicio y sin perjuicio de las demás acciones
                                        legales, que, para sus efectos, el presente contrato y sus anexos prestará mérito ejecutivo. El
                                        pago
                                        podrá realizarse a través de consignación bancaría en la Cuenta Corriente # 127669997810 del
                                        Banco Davivienda, informando del pago al <strong>CONTRATISTA</strong>, directamente en la
                                        oficina o al
                                        acompañante o conductor del vehículo; en cualquier caso, deberá siempre conservar el comprobante
                                        de la consignación e informar al <strong>CONTRATISTA</strong> o exigir recibo o constancia del
                                        pago realizado.
                                        <strong>SEPTIMA. CAUSALES DE SUSPENSIÓN DEL SERVICIO:</strong> Serán causales de suspensión
                                        parcial
                                        o total del servicio de transporte escolar, las siguientes: <strong>1)</strong> Los actos de
                                        indisciplina o
                                        vandalismo por
                                        parte del estudiante dentro del vehículo, <strong>2)</strong> El comportamiento agresivo o
                                        violento por parte del
                                        estudiante dentro del vehículo, o la tenencia de elementos inflamables, tóxicos, sustancias
                                        alucinógenas o explosivos. <strong>3)</strong> Conductas contra la moral y las buenas costumbres
                                        por parte del
                                        estudiante dentro del vehículo y en general por incurrir en conductas que afecten el normal
                                        proceso
                                        formativo, de acuerdo con lo establecido en el MANUAL DE USO DEL TRANSPORTE.
                                        <strong>PARÁGRAFO 1: PROCEDIMIENTO DE DENUNCIA:</strong> El acompañante documentará y
                                        recolectará
                                        pruebas de lo sucedido, le comunicará la situación al coordinador de ruta quien a su vez se
                                        pondrá
                                        en contacto con el acudiente. Lo anterior sin perjuicio de las acciones legales que el
                                        <strong>CONTRATISTA</strong>
                                        tenga. <strong>PARAGRAFO 2</strong>: En caso de que el vehículo no tenga el cupo mínimo
                                        requerido de pasajeros
                                        (10), se procederá a la suspensión de la ruta; con previo aviso se hará saber al acudiente o
                                        padre de familia de dicha situación. <strong>OCTAVA.</strong> El presente contrato tendrá una
                                        duración
                                        de <u>{{ $difmont + 1 }}</u> meses
                                        comenzando a ejecutarse el día <u>{{ $fStartDay }}</u> del mes de
                                        <u>{{ $fStartMont }}</u> del año <u>{{ $fStartYear }}</u> y
                                        concluyendo el día <u>{{ $fEndDay }}</u> del mes <u>{{ $fEndMont }}</u> del año
                                        <u>{{ $fEndYear }}</u>. Por ningún motivo podrá prorrogarse
                                        automáticamente el presente contrato o cederse por la parte <strong>CONTRATANTE. NOVENA.
                                            TERMINACIÓN.</strong> Cualquiera de las partes podrá dar por terminado este contrato dando
                                        un preaviso
                                        a la otra parte como mínimo quince (15) días antes. <strong>DECIMA. CAUSALES DE TERMINACIÓN CON
                                            JUSTA CAUSA Y UNILATERALES. A) POR PARTE DEL CONTRATISTA:</strong> 1) El no pago por parte
                                        del PADRE DE FAMILIA y/o ACUDIENTE 2) Actos de indisciplina, irrespeto o vandalismo por parte
                                        del estudiante. <strong>B) POR PARTE DEL CONTRATANTE:</strong> 1) Por inconformidad con la
                                        prestación del
                                        servicio, previa denuncia por escrito y por medio PQRS realizada al <strong>CONTRATISTA</strong>
                                        sin que este
                                        ejecute acciones o tome medidas correctivas, o explique justamente la situación. 2) Por
                                        incumplimiento con alguno de los compromisos adquiridos en el presente contrato. <strong>DÉCIMA
                                            PRIMERA. OBSERVACIONES:</strong> Como <strong>CONTRATISTA</strong>, me gustaría hacer las
                                        siguientes
                                        observaciones
                                    <p style="margin-left: 4.8%;font-size: 86%;"> -----------------------------------------
                                        <strong>FIN CLAUSULADO</strong> ---------------------------------------------
                                    </p>
                                    <p style="font-size: 82%;margin-top: -2%;">
                                        Para efectos de dejar constancia, CONTRATANTE y CONTRATISTA, libres de todo vicio y en pleno
                                        uso de nuestras facultades suscribimos y aceptamos el presente contrato en {{$contract->signature_place}} a los
                                        <u>{{ $firmeday }}</u>
                                        días del mes de <u>{{ $firmemonth }}</u> del año <u>{{ $firmeyear }}</u>.
                                    </p>
                                    <p style="margin-left: 7.8%;">
                                        <strong> ACEPTAMOS:</strong>
                                    </p>

                                    <p style="font-size: 86%;">
                                        <strong> CONTRATISTA: <span style="margin-left: 31%;">CONTRATANTE:</span><br>
                                            ALBA OSIRIS HIDALGO PESCADOR <span
                                                style="margin-left: 9%;">_____________________________</span><br>
                                            C.C. 42.077.205 expedida en Pereira <span style="margin-left: 10%;">C.C.:</span><br>
                                            Representante Legal</strong>
                                    </p>

                                    </p>

                                </div>
                            @break

                        {{-- rector o representante legal del colegio --}}
                            @case(4)
                                <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">

                                    <p style="font-size: 80%;text-align: justify;">
                                        mediante los mecanismos de arreglo directo y conciliación entre las partes involucradas, que
                                        para el
                                        caso serán: El representante legal de la empresa directamente y el <strong>CONTRATISTA</strong>
                                        o a quien este
                                        designe.
                                    <p style="font-size: 86%;">---------------------------------------- <strong>AVISO
                                            DE PROTECCIÓN DE DATOS</strong> -------------------------------------</p>
                                    <p style="font-size: 82%;margin-top: -2%;">
                                        En mi calidad de titular de información personal, actuando libre y voluntariamente, al
                                        diligenciar los
                                        datos aquí solicitados, autorizo al STEP SAS – Servicio de Transporte Especial de Estudiantes
                                        s.a.s
                                        Dirección en la ciudad de Dosquebradas, teléfono 3303821 , con correo electrónico
                                        sertepsapqr@gmail.com; para que realice el tratamiento de mi información personal, en
                                        cumplimiento de la Ley 1581 de 2012 y a lo previsto en el numeral 3 y el parágrafo del artículo
                                        10
                                        del Decreto 1377 de 2013.
                                        En todo caso en cualquier momento el titular de la información podrá revocar su consentimiento y
                                        ejercer su derecho a la supresión de datos personales consagrado en la Ley 1581 de 2012.
                                    </p>
                                    <p style="margin-left: 6.8%;font-size: 86%;"> -----------------------------------
                                        <strong>FIN CLAUSULADO</strong> ------------------------------------
                                    </p>
                                    <p style="font-size: 82%;margin-top: -2%;">
                                        Para efectos de dejar constancia, <strong>CONTRATANTE</strong> y <strong>CONTRATISTA</strong>,
                                        libres de todo vicio y en pleno
                                        uso de sus facultades suscribimos y aceptamos el presente contrato en {{$contract->signature_place}} a
                                        los {{ $firmeday }} días del mes {{ $firmemonth }} de del año {{ $firmeyear }}.
                                    </p>

                                    <br>
                                    <br>
                                    <br>

                                    <p style="margin-left: 7.8%;">
                                        <strong> ACEPTAMOS:</strong>
                                    </p>

                                    <br>
                                    <br>
                                    <br>

                                    <p style="font-size: 86%;">
                                        <strong> CONTRATISTA: <span style="margin-left: 31%;">CONTRATANTE:</span><br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <br>
                                            ALBA OSIRIS HIDALGO PESCADOR <span
                                                style="margin-left: 9%;">_____________________________</span><br>
                                            C.C. 42.077.205 expedida en Pereira <span style="margin-left: 10%;">C.C.:</span><br>
                                            Representante Legal</strong>
                                    </p>
                                    </p>

                                </div>
                            @break

                            @default
                        @endswitch
                    @break

                    {{-- empresarial --}}
                    @case(2)
                        <div style="display: flex;position: absolute;width: 37.5rem;height: 819px;margin-left: 6.5rem;">
                            <p style="font-size: 88%;text-align: justify;">
                                UNILATERALES. A) POR PARTE DEL CONTRATISTA:</strong> 1) La mora del <strong>CONTRATANTE</strong>
                                en el pago y según lo consagrado en la cláusula séptima del presente contrato 2) Actos
                                de indisciplina, irrespeto o vandalismo por parte de los pasajeros que ocasionen daños de
                                hasta en el 15% del parque automotor dispuesto para la prestación del servicio. <strong>B) POR
                                    PARTE DEL CONTRATANTE</strong>: 1) Por inconformidad expresa con la prestación del
                                servicio, previa denuncia por escrito y por medio PQRS realizada al <strong>CONTRATISTA</strong>
                                sin
                                que este ejecute acciones o tome medidas correctivas, o explique justamente la situación.
                                2) Por incumplimiento con alguno de los compromisos adquiridos en el presente contrato.
                                <strong>DECIMA SEGUNDA. SOLUCIÓN DE CONTROVERSIAS:</strong> Toda controversia, conflicto o
                                diferencias relativas a este contrato, su ejecución y liquidación, se resolverán
                                preferiblemente mediante los mecanismos de arreglo directo y conciliación entre las
                                partes involucradas, que para el caso serán: El representante legal de la empresa
                                directamente y el <strong>CONTRATISTA</strong> o a quien este designe.
                            <p style="margin-left: 6.8%"> ----------------------------------- FIN CLAUSULADO
                                ------------------------------------</p>
                            Para efectos de dejar constancia, CONTRATANTE y CONTRATISTA, libres de todo vicio
                            y en pleno uso de sus facultades suscribimos y aceptamos el presente contrato en
                            {{$contract->signature_place}} a los <u>{{ $firmeday }}</u> días del mes <u>{{ $firmemonth }}</u> de del año
                            <u>{{ $firmeyear }}</u>.
                            <br>

                            <p style="margin-left: 7.8%;">
                                <strong> ACEPTAMOS:</strong>
                            </p>
                            <br>
                            <br>
                            <br>

                            <p style="font-size: 86%;">
                                <strong> CONTRATISTA: <span style="margin-left: 31%;">CONTRATANTE:</span><br>
                                    ALBA OSIRIS HIDALGO PESCADOR <span
                                        style="margin-left: 9%;">_____________________________</span><br>
                                    C.C. 42.077.205 expedida en Pereira <span style="margin-left: 10%;">C.C.:</span><br>
                                    Representante Legal</strong>
                            </p>
                            </p>
                        </div>
                    @break

                    {{-- empresa turismo--}}
                    @case(3)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- ocacional --}}
                    @case(4)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- usuarios de salud--}}
                    @case(5)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- convenio empresarial --}}
                    @case(6)
                    @break

                    {{-- vinculación --}}
                    @case(9)
                        <div style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;">
                            <p style="font-size: 84%;text-align: justify;">
                                documentos que suscriban las partes sean o no con ocasión del presente contrato. Al cancelarse
                                el
                                contrato de vinculación por algunas de las partes éste pagaré no se devolverá hasta pasados
                                cinco
                                años 13) Los impuestos ordinarios del vehículo que se tengan con entidades territoriales o
                                nacionales
                                deberán ser pagados por <strong>LOS PROPIETARIOS (TENEDOR)</strong> y según la normatividad fiscal
                                vigente.14 <strong>EL
                                    PROPIETARIO (TENEDOR)</strong> no podrá vender, hacer traspaso, ceder la propiedad del vehículo que
                                respalda este
                                contrato cuando el conductor del vehículo este incapacitado, o en estudio médico para pensión
                                15) <strong>EL
                                    PROPIETARIO (TENEDOR)</strong> deberá guardar reserva frente a terceros de la información que conozca
                                de <strong>LA
                                    EMPRESA</strong> a razón de sus operaciones internas o de la prestación del servicio de
                                transporte especial
                                de sus pasajeros. 16) <strong>EL PROPIETARIO (TENEDOR)</strong> deberá cancelar de manera oportuna los
                                valores definidos en
                                la <strong>CLÁUSULA 4 REMUNERACIÓN Y PAGOS</strong>, parágrafos 1 y 2 respectivamente.
                                </strong>SEXTA. DERECHOS
                                DE LAS PARTES A. DERECHOS MUTUOS</strong> 1) La mora en el pago de acreencias de naturaleza
                                dinerarias derivadas del presente contrato genera, a favor de la parte acreedora, un interés
                                moratorio
                                equivalente a la tasa máxima, legal y certificada por Superintendencia Financiera para los
                                créditos
                                bancarios corrientes. <strong>B. DERECHOS DE LA EMPRESA:</strong> 1) Abstenerse de incluir en su
                                plan de
                                rodamiento el vehículo vinculado por medio del presente contrato que no se encuentren en óptimas
                                condiciones o que no hayan dado estricto cumplimiento al programa de mantenimiento preventivo de
                                la
                                empresa. 2) Ejercer el control efectivo durante la operación del vehículo que por medio del
                                presente
                                contrato sea vinculado a su flota. 3) en el caso que el conductor del vehículo ya sea contratado
                                o el
                                propietario (TENEDOR) sea el conductor resulte lesionado, enfermo, incapacitado, y como resultado de este
                                tratamiento médico haya que reubicarlo dentro de la empresa, en una labor diferente a la
                                contratada
                                inicialmente por el propietario (TENEDOR) del vehículo, este rubro será descontado de los ingresos del
                                vehículo por
                                tal razón, la prohibición de la venta del vehículo, hasta tanto el incapacitado se mejore
                                medicamente o
                                resulte pensionado laboralmente, de no alcanzar con la propiedad del vehículo se deberá
                                suscribir
                                nuevos compromisos con la empresa para éstos eventos. Es de resaltar que la empresa adquiere
                                anualmente pólizas de seguro que cubren siniestros de tipo laboral y de responsabilidad tanto
                                contractual como extracontractual, pese a lo anterior, el propietario (TENEDOR) será deudor en un 100% de
                                las
                                sumas que deba pagar la empresa con ocasión a la utilización de su (s) vehículos del presente
                                contrato,
                                dando con ello, derecho a repetir en contra del propietario (TENEDOR) por lo pagado 4) <strong>LA
                                    EMPRESA</strong> podrá
                                verificar
                                en la página web “ESTADO DE CUENTA IUIT POR PLACA” todos los vehículos que se encuentre dentro
                                del parque automotor, y así mismo hacer saber al propietario (TENEDOR) de dicha consulta. 5) <strong>LA
                                    EMPRESA</strong>,
                                hará
                                revisiones constantes a la plataforma del GPS-TRACKER dando cumplimiento al decreto 431(Artículo
                                2.2.1.6.9.5.) numeral 10, cuando la empresa corroboré, verifiqué, compruebe, por cualquier medio
                                que
                                un vehículo vinculado a la empresa, esté prestando un servicio o movilizando el vehículo con
                                pasajeros;
                                sin el respectivo FUEC, le acarreará un llamado de atención, el cobro de una sanción de 01 SMMLV
                                MENSUAL y se iniciará el proceso de desvinculación de dicho vehículo. <strong>DERECHOS DEL
                                    PROPIETARIO (TENEDOR)</strong> 1) En caso de pérdida, hurto o destrucción del vehículo, tiene derecho
                                a
                                reemplazarlo
                                por otro de la misma clase, bajo el mismo contrato de vinculación de flota, dentro del término
                                de tres
                                meses contado a partir de la fecha en que se cancela el registro inicial o matrícula del
                                vehículo. Si el
                                contrato de vinculación de flota vence antes de este término, se entenderá prorrogado hasta el
                                cumplimiento de este término. <strong>SÉPTIMA. PROHIBICIONES DE LAS PARTES A. PROHIBICIONES DE
                                    LA EMPRESA</strong> 1) No podrán generar en el contrato de vinculación ni a través de otros
                                medios
                                obligación
                                pecuniaria alguna para permitir la desvinculación del vehículo. <strong>B. PROHIBICIONES DEL
                                    PROPIETARIO (TENEDOR)</strong> 1) En ninguna circunstancia podrá celebrar contratos de prestación de
                                servicio de
                                transporte directamente con usuarios. 2) Cualquier tipo de perjuicio patrimonial a la honra o
                                imagen
                                corporativa que sufra la empresa producto de un acto que cometa <strong>EL PROPIETARIO (TENEDOR)</strong>,
                                éste deberá

                            </p>
                        </div>
                    @break

                    @default
                @endswitch
            </x-contractframes>
        @endif
        {{-- pagina 5 --}}
        @if ($contract->type_contract == 9)
            <x-contractframes typeContract="{{ $titlecontract }}">
                @switch($contract->type_contract)
                    @case(1)
                        @switch($contract->contract_with)
                        {{-- grupo padres --}}
                            @case(1)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break

                        {{-- universitarios --}}
                            @case(2)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break

                        {{-- estudiante con acudiente --}}
                            @case(3)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break

                        {{-- rector o representante legal del colegio --}}
                            @case(4)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break

                            @default
                        @endswitch
                    @break

                    {{-- empresarial --}}
                    @case(2)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- empresa turismo--}}
                    @case(3)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- ocacional --}}
                    @case(4)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- usuarios de salud--}}
                    @case(5)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- convenio empresarial --}}
                    @case(6)
                    @break

                    {{-- vinculación --}}
                    @case(9)
                        <div style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;">
                            <p style="font-size: 98%;text-align: justify;">
                                responder por ello, sin perjuicio de otras situaciones se considerará como un perjuicio para la
                                empresa
                                utilizar el vehículo sin autorización de ésta, es decir, sin portar el FUEC, modificar los
                                emblemas y/o
                                distintivos de <strong>LA EMPRESA</strong>A o instalarlos en sitios no autorizados por la misma.
                                3) Ceder el presente
                                contrato, transferir o limitar la propiedad del vehículo automotor sin autorización previa, de
                                requerir
                                autorización para tales fines, ésta será solicitada por medio de una carta detallada y enviada a
                                <strong>LA
                                    EMPRESA</strong> quien tendrá un mes para resolverla, de no resolver en dicho término, se
                                presume aceptada
                                la cesión del contrato, la transferencia o limitación de la propiedad del vehículo automotor, si
                                <strong>LA
                                    EMPRESA</strong> admite tales acciones, <strong>EL PROPIETARIO (TENEDOR)</strong> deberá cancelar a
                                favor de <strong>LA EMPRESA</strong> la suma
                                de 2 Salarios Mínimos Legales Mensuales Vigentes al momento de proferirse la aceptación de la
                                empresa y para perfeccionar esta; de no admitirse o de no haber solicitado autorización, el
                                <strong>PROPIETARIO (TENEDOR)</strong> no podrá ceder el presente contrato, transferir o limitar la
                                propiedad del vehículo
                                automotor y de hacerlo, el negocio jurídico en cuestión no será válido, por lo tanto, LA EMPRESA
                                unilateralmente desvincular el vehículo sin perjuicio de que EL PROPIETARIO (TENEDOR) adeude por concepto
                                de
                                penalidad el equivalente a 2 Salarios Mínimos Legales Mensuales Vigentes a la <strong>EMPRESA.
                                    OCTAVA:
                                    SANCIONES.</strong> Se aplicará el siguiente régimen sancionatorio, de acuerdo con la tabla
                                adjunta; para
                                proceder a la aplicación de estas sanciones se deberá realizar los descargos respectivos y el
                                comité de
                                disciplina determinará la sanción a aplicar y las medidas preventivas, el momento de aplicación
                                y
                                notificación al afectado – <strong>TABLA DE SANCIONES</strong>

                            <table
                                style="width: 100%;border: solid 1px #000;border-collapse: collapse;font-size: 85%;text-align: center;">

                                <thead>
                                    <tr>
                                        <th style="width: 10%;border: solid 1px #000;border-collapse: collapse;">
                                            ITEMS
                                        </th>
                                        <th style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            FALTA COMETIDA
                                        </th>
                                        <th style="width: 15%;border: solid 1px #000;border-collapse: collapse;">
                                            DÍAS SIN FUEC
                                        </th>
                                        <th style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            PENALES Y ADMINISTRATIVAS
                                        </th>
                                        <th style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            SANCIÓN ECONÓMICA
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            1
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            No asistir a las capacitaciones
                                            requeridas por la actividad económica
                                            de la empresa
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            N/A
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            1 SMMLV
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            2
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Movilizar el vehículo sin FUEC
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            N/A
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            1 SMMLV
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            3
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Reiteración Movilizar el vehículo sin FUEC
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            N/A
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Desvinculaciones administrativas
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Las estipuladas en el contrato de vinculación
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            4
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Falsedad en documentos Privado o públic
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            N/A
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Desvinculación administrativa
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Las estipuladas en el contrato de vinculación
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            5
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            No cumplir con las actividades del programa de mantenimiento vehicular, Protocolo
                                            diario de alistamiento
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            Suspensión del FUEC
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            6
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Manipularlo- apagarlo Plataforma de GPS Identificado por primera vez
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            Suspensión del FUEC por 15 días
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Cancelación del contrato con justa causa del conductor no propietario (TENEDOR)
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                    </tr>

                                    {{-- <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            7
                                        </td>
                                        <td style="width: 45%;border: solid 1px #000;border-collapse: collapse;">
                                            Reiteración Manipularlo- apagarlo Plataforma de GPS
                                        </td>
                                        <td
                                            style="width: 15%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            N/A
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Desvinculación administrativa
                                        </td>
                                        <td style="width: 30%;border: solid 1px #000;border-collapse: collapse;">
                                            Las estipuladas en el contrato de vinculación
                                        </td>
                                    </tr> --}}

                                </tbody>
                            </table>

                            </p>
                        </div>
                    @break

                    @default
                @endswitch
            </x-contractframes>
        @endif
        {{-- pagina 6 --}}
        @if ($contract->type_contract == 9)
            <x-contractframes typeContract="{{ $titlecontract }}">
                @switch($contract->type_contract)
                    @case(1)
                        @switch($contract->contract_with)
                        {{-- grupo padres --}}
                            @case(1)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break

                        {{-- universitarios --}}
                            @case(2)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break

                        {{-- estudiante con acudiente --}}
                            @case(3)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break

                            @case(4)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break
                        {{-- rector o representante legal del colegio --}}
                            @default
                        @endswitch
                    @break

                    {{-- empresarial --}}
                    @case(2)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- empresa turismo--}}
                    @case(3)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- ocacional --}}
                    @case(4)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- usuarios de salud--}}
                    @case(5)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- convenio empresarial --}}
                    @case(6)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- vinculación --}}
                    @case(9)
                        <div style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;">
                            <p style="font-size: 88%;text-align: justify;">



                            <table
                                style="width: 100%;border: solid 1px #000;border-collapse: collapse;font-size: 85%;text-align: center;">

                                <tbody>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            7
                                        </td>
                                        <td style="width: 27%;border: solid 1px #000;border-collapse: collapse;">
                                            Reiteración Manipularlo- apagarlo Plataforma de GPS
                                        </td>
                                        <td
                                            style="width: 21%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            N/A
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            Desvinculación administrativa
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            Las estipuladas en el contrato de vinculación
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            8
                                        </td>
                                        <td style="width: 27%;border: solid 1px #000;border-collapse: collapse;">
                                            No asistir oportunamente al llamado de la empresa a la inspección y revisión visual
                                            del vehículo
                                        </td>
                                        <td
                                            style="width: 21%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            Suspensión del FUEC por 3 días
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            Las sanciones impuestas a la empresa por los entes de control o de certificación
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            9
                                        </td>
                                        <td style="width: 27%;border: solid 1px #000;border-collapse: collapse;">
                                            Irrespetar al personal de la empresa
                                        </td>
                                        <td
                                            style="width: 21%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            3 días sin FUEC
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            10
                                        </td>
                                        <td style="width: 27%;border: solid 1px #000;border-collapse: collapse;">
                                            Irrespetar a clientes
                                        </td>
                                        <td
                                            style="width: 21%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            Irrespetar a clientes
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            11
                                        </td>
                                        <td style="width: 27%;border: solid 1px #000;border-collapse: collapse;">
                                            Modificar emblemas, marcación de los vehículos
                                        </td>
                                        <td
                                            style="width: 21%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            Modificar emblemas, marcación de los vehículos
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            12
                                        </td>
                                        <td style="width: 27%;border: solid 1px #000;border-collapse: collapse;">
                                            Vender o hacer traspaso del vehículo sin autorización de la empresa
                                        </td>
                                        <td
                                            style="width: 21%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            N/A
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            Desvinculación de mutuo acuerdo
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            Las estipuladas en el contrato de vinculación
                                        </td>
                                    </tr>

                                    <tr>
                                        <td
                                            style="width: 10%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            13
                                        </td>
                                        <td style="width: 27%;border: solid 1px #000;border-collapse: collapse;">
                                            Las estipuladas en el contrato de vinculación
                                        </td>
                                        <td
                                            style="width: 21%;border: solid 1px #000;border-collapse: collapse;text-align: center;">
                                            Las estipuladas en el contrato de vinculación
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                        <td style="width: 21%;border: solid 1px #000;border-collapse: collapse;">
                                            N/A
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                            <p style="font-size: 87%;text-align: justify;">
                                <strong>NOVENA: LIBERTAD DEL VEHÍCULO. EL PROPIETARIO (TENEDOR)</strong> manifiesta que el vehículo
                                descrito con
                                anterioridad proviene de actividades lícitas, se encuentra libre de embargos, secuestros,
                                pleitos,
                                limitaciones a su propiedad, y además se encuentra a paz y salvo frente al cumplimiento de
                                cualquier
                                tipo de obligación de naturaleza civil, penal, administrativa, de tránsito y fiscal. De igual
                                forma, <strong>EL
                                    PROPIETARIO (TENEDOR)</strong> se compromete a mantenerlo en tal estado durante la vigencia del
                                presente contrato, de
                                tal forma que, durante la vigencia del presente contrato, el vehículo referenciado con
                                anterioridad, no
                                podrá fungir como garantía real y patrimonial frente a obligaciones constituidas con terceros.
                                De resultar
                                embargado o perturbada la tenencia, uso y goce del vehículo referenciado con anterioridad, el
                                <strong>PROPIETARIO (TENEDOR)</strong> tendrá 15 días hábiles para devolverlo a su estado original
                                recuperando el statu con <strong>LA
                                    EMPRESA</strong>, de lo contrario <strong>L PROPIETARIO (TENEDOR)</strong> adeuda 1 Salario Mínimo
                                Mensual Legal Vigente sin
                                perjuicio de la eventual terminación del contrato con justa causa que <strong>LA
                                    EMPRESA</strong> podrá solicitar.
                                <strong>DÉCIMA. CAUSALES DE TERMINACIÓN CON JUSTA CAUSA DEL PRESENTE CONTRATO.</strong> Sin
                                perjuicio de las responsabilidades penales, civiles que surjan: <strong>A) POR PARTE DE LA
                                    EMPRESA</strong>: 1) El
                                incumplimiento del <strong>PROPIETARIO (TENEDOR)</strong> de cualquiera de las obligaciones, prohibiciones
                                o deberes fijados
                                por medio del presente contrato y demás documentos conexos al presente contrato y suscritos
                                entre las
                                partes. 2) Siendo <strong>PROPIETARIO (TENEDOR)</strong>, actuar por acción, omisión o extralimitación en
                                perjuicio de la
                                empresa, sus bienes, imagen o la de los socios y su honra. 3) Por autorización de desvinculación
                                expedida por el Ministerio de Transporte. <strong>B) POR PARTE DEL PROPIETARIO (TENEDOR)</strong>: 1) El
                                incumplimiento
                                de <strong>LA EMPRESA</strong> de cualquiera de los deberes fijados por medio del presente
                                contrato y demás
                                documentos conexos a este y suscritos entre las partes. <strong>PARÁGRAFO 1</strong> Sin
                                perjuicio de la
                                responsabilidad civil y comercial que de ello se derive, cualquiera de las partes puede terminar
                            </p>

                            </p>
                        </div>
                    @break

                    @default
                @endswitch
            </x-contractframes>
        @endif
        {{-- pagina 7 --}}
        @if ($contract->type_contract == 9)
            <x-contractframes typeContract="{{ $titlecontract }}">
                @switch($contract->type_contract)
                    @case(1)
                        @switch($contract->contract_with)
                        {{-- grupo padres --}}
                            @case(1)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break

                        {{-- universitarios --}}
                            @case(2)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break

                        {{-- estudiante con acudiente --}}
                            @case(3)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break
                        {{-- rector o representante legal del colegio --}}
                            @case(4)
                                <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                                    <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    NOMBRE COMPLETO
                                                </th>
                                                <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    IDENTIFICACIÓN
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba *35
                                                </td>
                                                <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                                    pruaba
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            @break

                            @default
                        @endswitch
                    @break

                    {{-- empresarial --}}
                    @case(2)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- empresa turismo--}}
                    @case(3)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- ocacional --}}
                    @case(4)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- usuarios de salud--}}
                    @case(5)
                        <div style="display: flex;position: absolute;width: 38.7rem;height: 819px;margin-left: 6rem;">
                            <table style="width: 100%;border: solid 1px #000;border-collapse: collapse;margin-top: 4%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            NOMBRE COMPLETO
                                        </th>
                                        <th style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            IDENTIFICACIÓN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba *35
                                        </td>
                                        <td style="width: 50%;border: solid 1px #000;border-collapse: collapse;">
                                            pruaba
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    @break

                    {{-- convenio empresarial --}}
                    @case(6)
                    @break

                    {{-- vinculación --}}
                    @case(9)
                        <div style="display: flex;position: absolute;width: 76%;height: 819px;margin-left: 6.5rem;">
                            <p style="font-size: 88%;text-align: justify;">
                                unilateralmente el contrato de vinculación. Tal decisión deberá ser informada a través de correo
                                certificado a la dirección del domicilio registrada en el presente documento con una antelación
                                no menor
                                de 60 días calendario a la terminación del contrato o al plazo en el cual se espera darlo por
                                terminado.
                                <strong>DÉCIMA PRIMERA ANEXOS:</strong> Son anexos del presente contrato: 1) Documento que
                                prueba el título
                                que el <strong>PROPIETARIO (TENEDOR)</strong>, tiene sobre el vehículo referenciado con anterioridad. 2)
                                Fotocopia cédula
                                de
                                ciudadanía del <strong>PROPIETARIO (TENEDOR)</strong>, Técnico-mecánico, SOAT y demás pólizas de seguro
                                vigentes a la
                                fecha, del vehículo. <strong>DÉCIMA SEGUNDA. SOLUCIÓN DE CONTROVERSIAS:</strong> Toda
                                controversia,
                                conflicto o diferencias relativas a este contrato, su ejecución y liquidación, se resolverán
                                preferentemente, haciendo uso de los mecanismos alternativos de solución del conflicto
                                estipulados en
                                la norma y aplicables al caso concreto; inicialmente se intentará un arreglo directo, luego la
                                conciliación
                                en derecho y de no ser posible, se seguirán entonces las reglas generales del derecho procesal
                                Colombiano contenidas en el Código General del Proceso.
                            <p style="margin-left: 6.8%"> ----------------------------------- FIN CLAUSULADO
                                ------------------------------------</p>
                            <p style="font-size: 84%;text-align: justify;">
                                Para efectos de dejar constancia: 1) Del presente se extienden tantas copias o ejemplares como
                                partes
                                suscribientes. 2) <strong>LA EMPRESA</strong> y <strong>EL PROPIETARIO (TENEDOR)</strong> , libres de todo
                                vicio y en pleno uso de sus
                                facultades suscribimos y aceptamos el presente contrato en {{$contract->signature_place}} el día
                                <u>{{ $firmeday }}</u> de <u>{{ $firmemonth }}</u> del <u>{{ $firmeyear }}</u>.
                            </p>


                            <br>
                            <br>
                            <br>

                            <p style="margin-left: 7.8%;">
                                <strong> ACEPTAMOS:</strong>
                            </p>

                            <br>
                            <br>
                            <br>

                            <p style="font-size: 80%;">
                                <strong> LA EMPRESA: <span style="margin-left: 40%;">EL PROPIETARIO (TENEDOR):</span>
                                    <br>

                                    <div style="border: solid 1px #000;height: 85px;width: 15%;margin-left: 88%;"></div>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                    ALBA OSIRIS HIDALGO PESCADOR <span
                                        style="margin-left: 16%;">Firma:________________________HUELLA</span><br>
                                    C.C. 42.077.205 expedida en Pereira <span
                                        style="margin-left: 16.7%;">Nombre:______________________________</span><br>
                                    Representante Legal<span
                                        style="margin-left: 32.6%;">Dirección:_____________________________</span><br>
                                    <span style="margin-left: 53.5%;">Teléfonos:_____________________________</span>
                                </strong>
                            </p>
                            </p>
                        </div>
                    @break

                    @default
                @endswitch
            </x-contractframes>
        @endif
    </body>
@endforeach

</html>
