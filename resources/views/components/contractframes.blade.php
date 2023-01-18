<div>

    <!-- pagina 1-->
    <div>
        <!-- cabecera o encabezado-->
        <div class="cabecera">
            <!-- rounded  -->
            <div class="contenedormintransporte">
                <!-- bg-white -->
                <img class="mintransporte" src="{{ public_path('img/Mintransporte_Colombia.svg') }}" alt="">
                {{-- <img src="{{ asset('img/Mintransporte_Colombia.svg') }}" alt=""> --}}
            </div>

            <div class="contenedorlogo">
                <!-- bg-gray-100 -->
                <img class="logo" src="{{ public_path('img/logo.png') }}" alt="">
                {{-- <img src="{{ asset('img/logo.png') }}" alt=""> --}}
            </div>

            <div class="contenedortextoversion">
                <!-- bg-red-700  -->
                <p class="textoversion">
                    CÓDIGO: PPS-O-002
                    <br>
                    VERSIÓN: 01
                    <br>
                    FECHA DE VIGENCIA: 01-11-2019
                </p>
            </div>

        </div>

        <div style="display: grid;">
            <!-- texto y logo lateral izquierdo -->
            <div class="contenedorlateral">
                <div class="contenedorqr">
                    <img class="qr" src="{{ public_path('img/QR.png') }}" alt="">
                    {{-- <img src="{{ asset('img/QR.png') }}" alt=""> --}}
                </div>
                <p class="textolateral1"><strong>STEP S.A.S.</strong></p>
                <p class="textolateral2">Identificación: NIT <strong>900973862-1.</strong></p>
                <p class="textolateral3">Empresa de Trasnporte especial de pasajeros.</p>
                <p class="textolateral4">Habilitación: Resolución N° 036 del 10-11-2016 del Min.Transporte.</p>
                <p class="textolateral5">Vigilado Min. Transporte y Super. Puertos y Transporte de Colombia.</p>
            </div>

            {{$slot}}

        </div>

        <!-- footer o pie de pagina -->

        <div class="footer">
            <img class="imgfoter" src="{{ public_path('img/prueba3.png') }}" alt="">
        </div>
    </div>


</div>