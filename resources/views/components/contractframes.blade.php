@props(['typeContract'])

<div class="marcadagua">

    {{-- CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE DE ESTUDIANTE GRUPO --}}
    {{-- PADRES --}}
    <!-- pagina 1-->
    <div>
        <!-- cabecera o encabezado-->
        @if ($typeContract == 'CONTRATO DE CONVENIO DE COLABORACIÓN EMPRESARIAL')
            <div
                style="width: 78%;margin-top: 0.5rem;margin-left: 5%;height: 11rem;display: flex;align-items: center;border-radius: 0.25rem;">
                <img style="width: 55%;margin-top: 0.5rem;height: 70%;"
                    src="{{ public_path('img/logoC1.png') }}" alt="">
            </div>
        @else
            <div
                style="width: 78%;margin-top: 3rem;margin-left: 12%;height: 5rem;display: flex;align-items: center;border-radius: 0.25rem;border: 1px solid rgb(0 0 0);">
                <!-- contenedormintransporte  -->
                <div
                    style="display: flex;justify-content: center;width: 37%;height: 4.9rem;border-right: 1px solid rgb(0 0 0);padding-top: 1px;padding-bottom: 1px;padding-left: 1px;padding-right: 1px;">
                    <!-- mintransporte -->
                    {{-- <img style="width: 100%;margin-top: 1rem;height: 70%;" src="{{ public_path('img/Mintransporte_Colombia.svg') }}" alt=""> --}}
                    {{-- <img src="{{ asset('img/Mintransporte_Colombia.svg') }}" alt=""> --}}
                    <img style="width: 90%;margin-top: 0.5rem;margin-left: 0.4rem;height: 70%;"
                        src="{{ public_path('img/logo.png') }}" alt="">
                    {{-- <img src="{{ asset('img/logo.png') }}" alt=""> --}}
                </div>
                <!-- contenedorlogo -->
                <div
                    style="margin-top: -15%;@if (
                        $typeContract ==
                            'CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE ESPECIAL CON GRUPO ESPECÍFICO DE USUARIOS (TRANSPORTE DE PARTICULARES)') font-size: 80%; @elseif(
                        $typeContract ==
                            'CONTRATO DE PRESTACIÓN DE SERVICIOS PARA TRANSPORTE ESPECIAL DE UN GRUPO DE ESTUDIANTES UNIVERSITARIOS MAYORES DE EDAD') font-size: 76%; @else font-size: 90%; @endif  display: flex;justify-content: center;width: 39%;margin-left: 40%;height: 4.9rem;border-right: 1px solid rgb(0 0 0);padding-top: 1px;padding-bottom: 1px;padding-left: 1px;padding-right: 1px;">
                    <!-- logo -->
                    <p style="margin-top: 4%;text-align: center;margin-left: -6%;">
                        <strong>{{ $typeContract }}</strong>
                    </p>
                </div>
                {{-- contenedortextoversion --}}
                <div style="margin-top: -42%;margin-left: 72%;justify-content: center;width: 28%;height: 4rem;">
                    <!-- textoversion  -->
                    <p style="width: 80%;font-size: 11px;margin-left: 3rem;margin-top: 3%;">
                        <strong>CÓDIGO:</strong> PPS-O-002
                        <br>
                        <strong>VERSIÓN:</strong> 01
                        <br>
                        <strong>VIGENCIA:</strong> 01-11-2019
                    </p>
                </div>

            </div>
        @endif

        <div style="display: grid;">
            <!-- texto y logo lateral izquierdo -->
            {{-- contenedorlateral --}}
            <div style="display: flex;position: absolute;width: 6.5rem;height: 819px;">
                {{-- contenedorqr --}}
                <div style="position: absolute;margin-top: 45rem;margin-left: 0.6rem;">
                    {{-- qr --}}
                    <img style="width: 5, 7rem;" src="{{ public_path('img/QR.png') }}" alt="">
                    {{-- <img src="{{ asset('img/QR.png') }}" alt=""> --}}
                </div>
                {{-- textolateral1 --}}
                <p
                    style="transform: rotate(270deg);margin-top: 42.5rem;margin-left: -0.8rem;width: 76px;font-size: 0.7rem;position: absolute;color: #818080;">
                    <strong>STEP S.A.S.</strong>
                </p>
                {{-- textolateral2 --}}
                <p
                    style="transform: rotate(270deg);margin-top: 38.6rem;margin-left: -3.9rem;width: 200px;font-size: 0.7rem;position: absolute;color: #818080;">
                    Identificación: NIT <strong>900973862-1.</strong></p>
                {{-- textolateral3 --}}
                <p
                    style="transform: rotate(270deg);margin-top: 36.4rem;margin-left: -5.3rem;width: 270px;font-size: 0.7rem;position: absolute;color: #818080;">
                    Empresa de Trasnporte especial de pasajeros.</p>
                {{-- textolateral4 --}}
                <p
                    style="transform: rotate(270deg);margin-top: 32.4rem;margin-left: -8.5rem;width: 400px;font-size: 0.7rem;position: absolute;color: #818080;">
                    Habilitación: Resolución N° 036 del 10-11-2016 del Min.Transporte.</p>
                {{-- textolateral5 --}}
                <p
                    style="transform: rotate(270deg);margin-top: 31.7rem;margin-left: -8.3rem;width: 420px;font-size: 0.7rem;position: absolute;color: #818080;">
                    Vigilado Min. Transporte y Super. Puertos y Transporte de Colombia.</p>
            </div>

            {{ $slot }}

        </div>

        <!-- footer o pie de pagina -->
        @if ($typeContract == 'CONTRATO DE CONVENIO DE COLABORACIÓN EMPRESARIAL')
            <div style="width: 100%;height: 10rem;display: flex;align-items: center;margin-top: 48.6rem;">
                {{-- imgfoter --}}
                <img style="width: 38%;height: 7rem;position: absolute;margin-left: 60%;" src="{{ public_path('img/logoD.png') }}" alt="">
                <img style="width: 99.8%;height: 10rem;" src="{{ public_path('img/prueba3.png') }}" alt="">
            </div>
        @else
            <div style="width: 100%;height: 10rem;display: flex;align-items: center;margin-top: 52rem;">
                {{-- imgfoter --}}
                <img style="width: 38%;height: 7rem;position: absolute;margin-left: 60%;" src="{{ public_path('img/logoD.png') }}" alt="">
                <img style="width: 99.8%;height: 10rem;" src="{{ public_path('img/prueba3.png') }}" alt="">
            </div>
        @endif
    </div>


</div>
