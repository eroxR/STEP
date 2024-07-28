<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ public_path('img/favicon.ico') }}" />
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> --}}
    <title>Inspection</title>
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>
    <div style="margin: -3%;height: 99%;border: 2px solid #000;border-radius: 4px;">

        <div>
            <!-- cabecera o encabezado-->
            <div
                style="width: 99.9%;height: 6rem;display: flex;align-items: center;border-radius: 0.25rem;border: 1px solid rgb(0 0 0);">
                <!-- contenedormintransporte  -->
                <div
                    style="display: flex;justify-content: center;width: 37%;height: 5.9rem;border-right: 1px solid rgb(0 0 0);padding-top: 1px;padding-bottom: 1px;padding-left: 1px;padding-right: 1px;">
                    <!-- mintransporte -->
                    <img style="width: 90%;margin-top: 0.5rem;margin-left: 0.4rem;height: 70%;"
                        src="{{ public_path('img/logo.png') }}" alt="">
                    {{-- <img style="width: 90%;margin-top: 0.5rem;margin-left: 0.4rem;height: 70%;" src="{{ asset('img/logo.png') }}" alt=""> --}}
                </div>
                <!-- contenedorlogo -->
                <div
                    style="margin-top: -16%;display: flex;justify-content: center;width: 30%;margin-left: 40%;height: 5.9rem;border-right: 1px solid rgb(0 0 0);padding-top: 1px;padding-bottom: 1px;padding-left: 1px;padding-right: 1px;">
                    <!-- logo -->
                    <p style="margin-top: 20%;text-align: center;margin-left: -6%;">
                        <strong>INSPECCION DIARIA MES DE {{ $mes }} DE {{ $nowyear }}</strong>
                    </p>
                </div>
                {{-- contenedortextoversion --}}
                <div style="margin-top: -42%;margin-left: 72%;justify-content: center;width: 28%;height: 4rem;">
                    <!-- textoversion  -->
                    <p style="width: 80%;font-size: 15px;margin-left: 0.75rem;margin-top: 3%;">
                        <strong>CÓDIGO:</strong> PI-F-001
                        <br>
                        <strong>VERSIÓN:</strong> 001
                        <br>
                        <strong>VIGENCIA:</strong> 01-11-2019
                    </p>
                </div>

            </div>

            <!-- footer o pie de pagina -->

        </div>

        <div>
            <table style="width: 100%;border-collapse: collapse;font-size: 60%;text-align: center;">
                <tbody>
                    @foreach ($dateVehicles as $dateVehicle)
                        <tr>
                            <td style="width: 50%;border-collapse: collapse;text-align: center;">
                                LATERAL # {{ $dateVehicle->side_vehicle }}
                            </td>
                            <td style="width: 50%;border-collapse: collapse;">
                                PLACA: {{ $dateVehicle->plate_vehicle }}

                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%;border-collapse: collapse;text-align: center;">
                                RESPONSABLE:
                                @foreach ($responsibles as $responsible)
                                    @if ($responsible->id == $dateVehicle->driver_id)
                                        {{ $responsible->drive }}
                                    @endif
                                @endforeach
                                {{-- RESPONSABLE: JUAN ANTONIO ALDANA ESCOBAR --}}
                            </td>
                            <td style="width: 50%;border-collapse: collapse;">
                                VCTO SOAT: {{ $dateVehicle->secure_end_date }}

                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%;border-collapse: collapse;text-align: center;">
                                VCTO RTM: {{ $dateVehicle->technomechanical_end_date }}
                            </td>
                            <td style="width: 50%;border-collapse: collapse;">
                                RCC Y RCE: {{ $dateVehicle->civil_contractual }} /
                                {{ $dateVehicle->certificate_extracontractual }}

                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%;border-collapse: collapse;text-align: center;">
                                VCTO TARJ OPERACIÓN: {{ $dateVehicle->expiration_card_operation }}
                            </td>
                            <td style="width: 50%;border-collapse: collapse;">
                                KILOMETRAJE INICIO MES: {{ $kilometrajeInicial }}

                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%;border-collapse: collapse;text-align: center;">
                                KILOMETRAJE FIN MES: {{ $kilometrajeFinal }}
                            </td>
                            <td style="width: 50%;border-collapse: collapse;">
                                VCTO LIC CONDUCCION:
                                @foreach ($drives as $drive)
                                    @if ($drive->user_id == $dateVehicle->driver_id)
                                        {{ $drive->license_expiration }}
                                    @endif
                                @endforeach
                                {{-- VCTO LIC CONDUCCION: 14/02/2024 --}}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @php
            $original_start_date = $start_date; // Guarda una copia del valor original
            $bandera = false;
        @endphp
        @foreach ($inspectionsCategory as $id => $name_description)
            @switch($id)
                @case(1)
                    <div
                        style="width: 99.9%;height: 8rem;display: flex;align-items: center;border-radius: 0.25rem;border: 1px solid rgb(0 0 0);margin-top: 0.2%;">
                        <p style="font-size: 70%;position:absolute;margin-top: -1%;margin-left: 50%;background:#fff">
                            {{ $name_description }}</p>
                        <div>

                            <table
                                style="width: 100%;border-collapse: collapse;font-size: 50%;text-align: center;margin-top: 0.9%;">
                                <tbody>

                                    @php
                                        // $start_date = \Carbon\Carbon::parse($this->start_date)->format('Y-m-d');
                                        $miniday = ['LUN', 'MAR', 'MIE', 'JUE', 'VIE', 'SAB', 'DOM'];
                                    @endphp

                                    <tr>
                                        <td style="width: 16%;border-collapse: collapse;text-align: left;">

                                        </td>
                                        <td style="width: 80%;border-collapse: collapse;text-align: left;">
                                            <div>
                                                @for ($i = 0; $i < $numdays; $i++)
                                                    <span>{{ $miniday[($dayStart + $i) % 7] }}</span>
                                                @endfor
                                            </div>
                                        </td>
                                    </tr>
                                    @foreach ($inspections as $inspection)
                                        @php
                                            if ($start_date != $original_start_date) {
                                                $start_date = \Carbon\Carbon::parse($original_start_date)->format(
                                                    'Y-m-d',
                                                );
                                            }
                                        @endphp
                                        @if ($inspection->category == 1)
                                            <tr>
                                                <td style="width: 16%;border-collapse: collapse;text-align: left;">
                                                    <span style="display: inline-flex;">
                                                        {{ $inspection->name_description }}</span>
                                                </td>
                                                <td style="width: 80%;border-collapse: collapse;text-align: left;">

                                                    @foreach (range(1, $numdays) as $i)
                                                        @php
                                                            $isRed = false;
                                                            $nothing = false;
                                                            $weekend = false;

                                                            foreach ($weekendArrays as $index => $date) {
                                                                if ($start_date == $date) {
                                                                    $weekend = true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$weekend) {
                                                                foreach ($uninspectedArrays as $index => $date) {
                                                                    if ($start_date == $date) {
                                                                        $nothing = true;
                                                                        break;
                                                                    }
                                                                }

                                                                if (!$nothing) {
                                                                    foreach ($datesArrays as $index => $date) {
                                                                        if (
                                                                            $start_date == $date &&
                                                                            $inspectionArrays[$index] == $inspection->id
                                                                        ) {
                                                                            $isRed = true;
                                                                            break;
                                                                        }
                                                                    }
                                                                }
                                                            }

                                                        @endphp

                                                        <span
                                                            style="display: inline-flex; text-align: center;  {{ $nothing || $weekend ? 'background-color: #9c9392;' : ($isRed ? 'background-color: #df2e0f;' : ($start_date <= $endDates ? 'background-color: #53d94e;' : 'background-color: #9c9392;')) }} border: 1px solid transparent; width: 0.86rem; height: 0.5rem; border-radius: 3px;">
                                                            {{ $i }}
                                                        </span>

                                                        @php
                                                            $start_date = \Carbon\Carbon::parse($start_date)
                                                                ->addDay()
                                                                ->format('Y-m-d');
                                                        @endphp
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>


                        </div>

                    </div>
                @break

                @case(2)
                    <div
                        style="width: 99.9%;height: 5.7rem;display: flex;align-items: center;border-radius: 0.25rem;border: 1px solid rgb(0 0 0);margin-top: 0.9%;">
                        <p style="font-size: 70%;position:absolute;margin-top: -1%;margin-left: 50%;background:#fff">
                            {{ $name_description }}</p>
                        <div>

                            <table
                                style="width: 100%;border-collapse: collapse;font-size: 50%;text-align: center;margin-top: 0.9%;">
                                <tbody>

                                    @php
                                        // $start_date = \Carbon\Carbon::parse($this->start_date)->format('Y-m-d');
                                        $miniday = ['LUN', 'MAR', 'MIE', 'JUE', 'VIE', 'SAB', 'DOM'];
                                    @endphp

                                    <tr>
                                        <td style="width: 16%;border-collapse: collapse;text-align: left;">

                                        </td>
                                        <td style="width: 80%;border-collapse: collapse;text-align: left;">
                                            <div>
                                                @for ($i = 0; $i < $numdays; $i++)
                                                    <span>{{ $miniday[($dayStart + $i) % 7] }}</span>
                                                @endfor
                                            </div>
                                        </td>
                                    </tr>
                                    @foreach ($inspections as $inspection)
                                        @php
                                            if ($start_date != $original_start_date) {
                                                $start_date = \Carbon\Carbon::parse($original_start_date)->format(
                                                    'Y-m-d',
                                                );
                                            }
                                        @endphp
                                        @if ($inspection->category == 2)
                                            <tr>
                                                <td style="width: 16%;border-collapse: collapse;text-align: left;">
                                                    <span style="display: inline-flex;">
                                                        {{ $inspection->name_description }}</span>
                                                </td>
                                                <td style="width: 80%;border-collapse: collapse;text-align: left;">

                                                    @foreach (range(1, $numdays) as $i)
                                                        @php
                                                            $isRed = false;
                                                            $nothing = false;
                                                            $weekend = false;

                                                            foreach ($weekendArrays as $index => $date) {
                                                                if ($start_date == $date) {
                                                                    $weekend = true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$weekend) {
                                                                foreach ($uninspectedArrays as $index => $date) {
                                                                    if ($start_date == $date) {
                                                                        $nothing = true;
                                                                        break;
                                                                    }
                                                                }

                                                                if (!$nothing) {
                                                                    foreach ($datesArrays as $index => $date) {
                                                                        if (
                                                                            $start_date == $date &&
                                                                            $inspectionArrays[$index] == $inspection->id
                                                                        ) {
                                                                            $isRed = true;
                                                                            break;
                                                                        }
                                                                    }
                                                                }
                                                            }

                                                        @endphp

                                                        <span
                                                            style="display: inline-flex; text-align: center;  {{ $nothing || $weekend ? 'background-color: #9c9392;' : ($isRed ? 'background-color: #df2e0f;' : ($start_date <= $endDates ? 'background-color: #53d94e;' : 'background-color: #9c9392;')) }} border: 1px solid transparent; width: 0.86rem; height: 0.5rem; border-radius: 3px;">
                                                            {{ $i }}
                                                        </span>

                                                        @php
                                                            $start_date = \Carbon\Carbon::parse($start_date)
                                                                ->addDay()
                                                                ->format('Y-m-d');
                                                        @endphp
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>


                        </div>

                    </div>
                @break

                @case(3)
                    <div
                        style="width: 99.9%;height: 7.2rem;display: flex;align-items: center;border-radius: 0.25rem;border: 1px solid rgb(0 0 0);margin-top: 0.8%;">
                        <p style="font-size: 70%;position:absolute;margin-top: -1%;margin-left: 50%;background:#fff">
                            {{ $name_description }}</p>
                        <div>

                            <table
                                style="width: 100%;border-collapse: collapse;font-size: 50%;text-align: center;margin-top: 0.9%;">
                                <tbody>

                                    @php
                                        // $start_date = \Carbon\Carbon::parse($this->start_date)->format('Y-m-d');
                                        $miniday = ['LUN', 'MAR', 'MIE', 'JUE', 'VIE', 'SAB', 'DOM'];
                                    @endphp

                                    <tr>
                                        <td style="width: 16%;border-collapse: collapse;text-align: left;">

                                        </td>
                                        <td style="width: 80%;border-collapse: collapse;text-align: left;">
                                            <div>
                                                @for ($i = 0; $i < $numdays; $i++)
                                                    <span>{{ $miniday[($dayStart + $i) % 7] }}</span>
                                                @endfor
                                            </div>
                                        </td>
                                    </tr>
                                    @foreach ($inspections as $inspection)
                                        @php
                                            if ($start_date != $original_start_date) {
                                                $start_date = \Carbon\Carbon::parse($original_start_date)->format(
                                                    'Y-m-d',
                                                );
                                            }
                                        @endphp
                                        @if ($inspection->category == 3)
                                            <tr>
                                                <td style="width: 16%;border-collapse: collapse;text-align: left;">
                                                    <span style="display: inline-flex;">
                                                        {{ $inspection->name_description }}</span>
                                                </td>
                                                <td style="width: 80%;border-collapse: collapse;text-align: left;">

                                                    @foreach (range(1, $numdays) as $i)
                                                        @php
                                                            $isRed = false;
                                                            $nothing = false;
                                                            $weekend = false;

                                                            foreach ($weekendArrays as $index => $date) {
                                                                if ($start_date == $date) {
                                                                    $weekend = true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$weekend) {
                                                                foreach ($uninspectedArrays as $index => $date) {
                                                                    if ($start_date == $date) {
                                                                        $nothing = true;
                                                                        break;
                                                                    }
                                                                }

                                                                if (!$nothing) {
                                                                    foreach ($datesArrays as $index => $date) {
                                                                        if (
                                                                            $start_date == $date &&
                                                                            $inspectionArrays[$index] == $inspection->id
                                                                        ) {
                                                                            $isRed = true;
                                                                            break;
                                                                        }
                                                                    }
                                                                }
                                                            }

                                                        @endphp

                                                        <span
                                                            style="display: inline-flex; text-align: center;  {{ $nothing || $weekend ? 'background-color: #9c9392;' : ($isRed ? 'background-color: #df2e0f;' : ($start_date <= $endDates ? 'background-color: #53d94e;' : 'background-color: #9c9392;')) }} border: 1px solid transparent; width: 0.86rem; height: 0.5rem; border-radius: 3px;">
                                                            {{ $i }}
                                                        </span>

                                                        @php
                                                            $start_date = \Carbon\Carbon::parse($start_date)
                                                                ->addDay()
                                                                ->format('Y-m-d');
                                                        @endphp
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>


                        </div>

                    </div>
                @break

                @case(4)
                    <div
                        style="width: 99.9%;height: 17rem;display: flex;align-items: center;border-radius: 0.25rem;border: 1px solid rgb(0 0 0);margin-top: 0.8%;">
                        <p style="font-size: 70%;position:absolute;margin-top: -1%;margin-left: 50%;background:#fff">
                            {{ $name_description }}</p>
                        <div>

                            <table
                                style="width: 100%;border-collapse: collapse;font-size: 50%;text-align: center;margin-top: 0.9%;">
                                <tbody>

                                    @php
                                        // $start_date = \Carbon\Carbon::parse($this->start_date)->format('Y-m-d');
                                        $miniday = ['LUN', 'MAR', 'MIE', 'JUE', 'VIE', 'SAB', 'DOM'];
                                    @endphp

                                    <tr>
                                        <td style="width: 16%;border-collapse: collapse;text-align: left;">

                                        </td>
                                        <td style="width: 80%;border-collapse: collapse;text-align: left;">
                                            <div>
                                                @for ($i = 0; $i < $numdays; $i++)
                                                    <span>{{ $miniday[($dayStart + $i) % 7] }}</span>
                                                @endfor
                                            </div>
                                        </td>
                                    </tr>
                                    @foreach ($inspections as $inspection)
                                        @php
                                            if ($start_date != $original_start_date) {
                                                $start_date = \Carbon\Carbon::parse($original_start_date)->format(
                                                    'Y-m-d',
                                                );
                                            }
                                        @endphp
                                        @if ($inspection->category == 4)
                                            <tr>
                                                <td style="width: 16%;border-collapse: collapse;text-align: left;">
                                                    <span style="display: inline-flex;">
                                                        {{ $inspection->name_description }}</span>
                                                </td>
                                                <td style="width: 80%;border-collapse: collapse;text-align: left;">

                                                    @foreach (range(1, $numdays) as $i)
                                                        @php
                                                            $isRed = false;
                                                            $nothing = false;
                                                            $weekend = false;

                                                            foreach ($weekendArrays as $index => $date) {
                                                                if ($start_date == $date) {
                                                                    $weekend = true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$weekend) {
                                                                foreach ($uninspectedArrays as $index => $date) {
                                                                    if ($start_date == $date) {
                                                                        $nothing = true;
                                                                        break;
                                                                    }
                                                                }

                                                                if (!$nothing) {
                                                                    foreach ($datesArrays as $index => $date) {
                                                                        if (
                                                                            $start_date == $date &&
                                                                            $inspectionArrays[$index] == $inspection->id
                                                                        ) {
                                                                            $isRed = true;
                                                                            break;
                                                                        }
                                                                    }
                                                                }
                                                            }

                                                        @endphp

                                                        <span
                                                            style="display: inline-flex; text-align: center;  {{ $nothing || $weekend ? 'background-color: #9c9392;' : ($isRed ? 'background-color: #df2e0f;' : ($start_date <= $endDates ? 'background-color: #53d94e;' : 'background-color: #9c9392;')) }} border: 1px solid transparent; width: 0.86rem; height: 0.5rem; border-radius: 3px;">
                                                            {{ $i }}
                                                        </span>

                                                        @php
                                                            $start_date = \Carbon\Carbon::parse($start_date)
                                                                ->addDay()
                                                                ->format('Y-m-d');
                                                        @endphp
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>


                        </div>

                    </div>
                @break

                @default
            @endswitch
        @endforeach

        <div style="margin-top: 7%;">

            <div
                style="width: 99.9%;height: 7rem;display: flex;align-items: center;border-radius: 0.25rem;border: 1px solid rgb(0 0 0);">

                <div>

                    OBSERVACIONES:
                    <br>

                    @if (!empty($comments))
                        @foreach ($comments as $comment)
                            <span style="font-size: 50%;"> {{ $comment }}</span>
                            {{-- <span style="font-size: 50%;">{{ $comment }}</span> <br> --}}
                        @endforeach
                    @endif


                </div>
            </div>
            <div
                style="width: 99.9%;height: 32%;display: flex;align-items: center;border-radius: 0.25rem;border: 1px solid rgb(0 0 0);">

                <div>
                    <table style="width: 100%;border-collapse: collapse;font-size: 50%;text-align: center;">
                        <tbody>
                            <tr>
                                <td style="width: 50%;border-collapse: collapse;text-align: center;">
                                    TRANSPORTE ESPECIAL DE PASAJEROS STEP S.A.S.
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;border-collapse: collapse;text-align: center;">
                                    CR 2 A 8 26 Zona Industrial La Badea
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;border-collapse: collapse;text-align: center;">
                                    Correo Electronico: sertepsa2016@gmail.com
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;border-collapse: collapse;text-align: center;">
                                    Teléfono: 3303821 - 323 419 7103
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
