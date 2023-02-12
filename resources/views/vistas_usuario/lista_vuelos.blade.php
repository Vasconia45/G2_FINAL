@extends('layouts.app')

@section('content')
    <script src="{{ asset('js/apivuelo.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/userDatos.css') }}">
    <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
    <div class="p-5">
        <div>
            <h1>Mapa</h1>
            <div style="width:100%;height:580px;" id = "map">
        </div>
        <h1 class="text-align-center mt-5">@lang('messages.Lista_vuelos')</h1>
         <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="background:#cdb46c;">
                
                <i class="bi bi-cloud-haze2"></i>&nbsp;&nbsp;Tiempo 
        </button>
        <div class="row">
            @foreach ($vuelos as $vuelo)
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-3">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top p-2" width="90%" height="250px" src="{{ URL('assets/img/vuelos/' . $vuelo->aeropuerto_origen . '.jpg') }}"
                            alt="Error en la foto">
                        <div class="card-body">
                            <div>
                                <p>@lang('messages.Origen'): {{ $vuelo->aeropuerto_origen }}</p>
                                <p>@lang('messages.Destino'): {{ $vuelo->aeropuerto_destino }}</p>
                                <p>@lang("messages.Available capacity"): {{ $vuelo->cantidad_pasajeros }}</p>
                                <p>@lang('messages.Comp'): {{ $vuelo->compañia }}</p>
                                <p>@lang('messages.fecha'): {{ $vuelo->fecha }}</p>
                                <p>@lang('messages.Precio'): {{ $vuelo->precio }}€</p>
                                <label>Tiene escala disponible:</label>
                                @foreach ($vuelo->aeropuertos as $vuelo)
                                    <p>{{ $vuelo->pivot->lugar }}</p>
                                @endforeach
                                
                                <div class="d-flex justify-content-center">
                                    <div class="row ">
                                    
                                </div>                                
                                <form method="post" action="{{ route('registrarse_en_vuelo', [$vuelo->id]) }}" class="col-5">
                                    @csrf
                                @method("put")
                                <div >
                                    <input type="submit" class="btn" name="reserva" style="background-color: #CCB26B;" value="@lang('messages.Reservar')">
                                </div>

                                
                                </form>


                                <form method="post" action="{{ route('cancelarse_en_vuelo', [$vuelo->id]) }}" class="col-5">
                                    @csrf
                                @method("put")
                                <div >
                                    <input type="submit" class="btn" name="reserva" style="background-color: #d12e19;" value="@lang('messages.C_reserva')">
                                </div>

                                </form> </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">@lang('messages.Weather')</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <div class="col-6 mb-5">
                                <select class="form-select" name="pais" id="pais" onchange="cargarTiempo()">
                                    <option>@lang('messages.Select location')</option>
                                    <option id="Spain" value="Spain">Spain</option>
                                    <option id="England" value="England">England</option>
                                    <option id="America" value="America">America</option>
                                    <option id="Qatar" value="Qatar">Qatar</option>
                                    <option id="Moscow" value="Moscow">Moscow</option>
                                    <option id="Khazan" value="Khazan">Khazan</option>
                                    <option id="Bilbao" value="Bilbao">Bilbao</option>
                                    <option id="Euskadi" value="Euskadi">Euskadi</option>
                                    <option id="Kyoto" value="Kyoto">Kyoto</option>
                                    <option id="Tokyo" value="Tokyo">Tokyo</option>
                                    <option id="Canada" value="Canada">Canada</option>
                                    <option id="China" value="China">China</option>
                                    <option id="Brasil" value="Brasil">Brasil</option>
                                    <option id="Camboya" value="Camboya">Camboya</option>
                                    <option id="Norway" value="Norway">Norway</option>
                                    <!--<option id="Austria" value="Austria">Austria</option>-->
                                </select>
                                </div>
                                <label>@lang('messages.Temperature'): </label>
                                <input type="text" class="form-control" readonly id="temp" placeholder="">
                                <label>@lang('messages.Wind'): </label>
                                <input type="text" class="form-control" readonly id="viento" placeholder="">
                                <label>@lang('messages.Weather condition'):</label>
                                <input type="text" class="form-control" readonly id="condicion" placeholder="">
                                <img id="im">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <script>
        $(document).ready(function() {
            $('.toast').toast('show');
            var map = L.map('map').setView([39.66, -4.72],3);
            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
                maxZoom: 15,
                minZoom: 3,
                }).addTo(map);
            L.control.scale().addTo(map);
            var iconoAvion = new L.Icon({
                iconUrl: "{{ URL('assets/img/IconoAvion.png') }}",
                iconSize: [30, 30],
            });

            var iconoTienda = new L.Icon({
                iconUrl: "{{ URL('assets/img/iconoTienda.png') }}",
                iconSize: [30, 30],
            });

            L.marker([38.94728 , -1.86307],{icon: iconoAvion}).bindPopup("<h4>Albacete</h4>").addTo(map);
            L.marker([36.8457661 , -2.3706129],{icon: iconoAvion}).bindPopup("<h4>Almeria</h4>").addTo(map);
            L.marker([40.4983953 , -3.5674759],{icon: iconoAvion}).bindPopup("<h4>Adolfo Suárez Madrid-Barajas</h4>").addTo(map);
            L.marker([38.2850929 , -0.5624981],{icon: iconoAvion}).bindPopup("<h4>Alicante-Elche Miguel Hernández</h4>").addTo(map);
            L.marker([43.3064408 , -2.9042053],{icon: iconoAvion}).bindPopup("<h4>Aeropuerto de Bilbao (BIO)</h4>").addTo(map);
            L.marker([43.3563455  , -1.7912035],{icon: iconoAvion}).bindPopup("<h4>Aeropuerto de San Sebastián (EAS)</h4>").addTo(map);
            L.marker([42.8833932  , -2.7311948],{icon: iconoAvion}).bindPopup("<h4>Aeropuerto de Vitoria (VIT)</h4>").addTo(map);
            L.marker([0.045108  , 32.4426736],{icon: iconoAvion}).bindPopup("<h4>Entebbe International Airport</h4>").addTo(map);
            L.marker([6.9367182  , 100.3936894],{icon: iconoAvion}).bindPopup("<h4>ท่าอากาศยานนานาชาติหาดใหญ่</h4>").addTo(map);
            L.marker([32.2912322  , -106.9208121],{icon: iconoAvion}).bindPopup("<h4>Las Cruces International Airport</h4>").addTo(map);
            L.marker([8.720727  , 167.73138],{icon: iconoAvion}).bindPopup("<h4>Bucholz Army Airfield</h4>").addTo(map);
            L.marker([54.4402767  , 30.2969393],{icon: iconoAvion}).bindPopup("<h4>Балбасава</h4>").addTo(map);
            L.marker([53.098014  , 17.9724949],{icon: iconoTienda}).bindPopup("<h4>Port Lotniczy Bydgoszcz-Szwederowo</h4>").addTo(map);
            L.marker([51.4504549  , 5.3784309],{icon: iconoAvion}).bindPopup("<h4>Eindhoven Airport</h4>").addTo(map);
            L.marker([53.1210752  , 6.5783833],{icon: iconoAvion}).bindPopup("<h4>Groningen Airport Eelde</h4>").addTo(map);
            L.marker([55.6123184  , 12.6472247],{icon: iconoAvion}).bindPopup("<h4>Københavns Lufthavn</h4>").addTo(map);
            L.marker([41.2533635  , 28.7388955],{icon: iconoAvion}).bindPopup("<h4>Istanbul Airport</h4>").addTo(map);
            L.marker([50.0379306  , 8.5621492],{icon: iconoTienda}).bindPopup("<h4>Frankfurt Airport</h4>").addTo(map);
            L.marker([10.5991691  , -67.0015034],{icon: iconoTienda}).bindPopup("<h4>Aeropuerto Internacional de Maiquetía Simón Bolívar</h4>").addTo(map);
            L.marker([49.0080832  , 2.5509585],{icon: iconoAvion}).bindPopup("<h4>Aeropuerto de París-Charles de Gaulle</h4>").addTo(map);
            L.marker([33.6407282  , -84.4277001],{icon: iconoAvion}).bindPopup("<h4>Hartsfield–Jackson Atlanta International Airport</h4>").addTo(map);
            L.marker([32.8998091  , -97.0403352],{icon: iconoAvion}).bindPopup("<h4>Dallas Fort Worth International Airport</h4>").addTo(map);
            L.marker([3.5356493  , -76.3870411],{icon: iconoAvion}).bindPopup("<h4>Aeropuerto Internacional Bonilla Aragón</h4>").addTo(map);
            L.marker([23.3959079  , 113.3079699],{icon: iconoAvion}).bindPopup("<h4>Guangzhou Baiyun International Airport</h4>").addTo(map);
            L.marker([28.5561624  , 77.0999578],{icon: iconoAvion}).bindPopup("<h4>Indira Gandhi International Airport</h4>").addTo(map);
            L.marker([26.0742344  , -80.1506022],{icon: iconoTienda}).bindPopup("<h4>Fort Lauderdale–Hollywood International Airport</h4>").addTo(map);
            L.marker([49.0080884  , 2.5509281],{icon: iconoAvion}).bindPopup("<h4>Charles de Gaulle Airport</h4>").addTo(map);
            L.marker([35.5493932  , 139.7798386],{icon: iconoAvion}).bindPopup("<h4>Tokyo Haneda Airport</h4>").addTo(map);
            L.marker([52.3105384  , 4.7682745],{icon: iconoAvion}).bindPopup("<h4>Amsterdam Airport Schiphol</h4>").addTo(map);
            L.marker([55.4103069  , 37.9024513],{icon: iconoAvion}).bindPopup("<h4>Moscow Domodedovo Airport</h4>").addTo(map);
            L.marker([40.9110512  , 29.3136776],{icon: iconoAvion}).bindPopup("<h4>Istanbul Sabiha Gökçen International Airport</h4>").addTo(map);
            L.marker([36.9043327  , 30.8018768],{icon: iconoTienda}).bindPopup("<h4>Antalya Airport</h4>").addTo(map);
            L.marker([37.5586545  , 126.7944739],{icon: iconoAvion}).bindPopup("<h4>Gimpo International Airport</h4>").addTo(map);
            L.marker([55.9736501  , 37.4125088],{icon: iconoAvion}).bindPopup("<h4>Sheremetyevo International Airport</h4>").addTo(map);
            L.marker([55.9736501  , 37.4125088],{icon: iconoAvion}).bindPopup("<h4>Sheremetyevo International Airport</h4>").addTo(map);

            var polyline = L.polyline([
                [10.5991691  , -67.0015034],
                [38.94728 , -1.86307],
            ]).addTo(map);

            var polyline = L.polyline([
                [10.5991691  , -67.0015034],
                [3.5356493  , -76.3870411],
            ]).addTo(map);

            var polyline = L.polyline([
                [36.7977089  , 30.7617042],
                [38.84728 , -1.86307],
            ],{color:'green'}).addTo(map);

            var polyline = L.polyline([
                [36.9977089  , 30.7617042],
                [39.04728 , -1.86307],
            ],{color:'grey'}).addTo(map);

            var polyline = L.polyline([
                [36.9043327  , 30.8018768],
                [38.94728 , -1.86307],
            ],{color:'red'}).addTo(map);

            var polyline = L.polyline([
                [36.9043327  , 30.8018768],
                [28.5561624  , 77.0999578],
            ],{color:'red'}).addTo(map);

            var polyline = L.polyline([
                [36.9043327  , 30.8018768],
                [0.045108  , 32.4426736],
            ],{color:'green'}).addTo(map);

            var polyline = L.polyline([
                [36.9043327  , 30.8018768],
                [35.5493932  , 139.7798386],
            ],{color:'grey'}).addTo(map);

            var polyline = L.polyline([
                [26.0742344  , -80.1506022],
                [38.94728 , -1.86307],
            ],{color:"blue"}).addTo(map);

            var polyline = L.polyline([
                [26.0742344  , -80.1506022],
                [32.8998091  , -97.0403352],
            ],{color:"blue"}).addTo(map);

            var polyline = L.polyline([
                [49.0080832  , 2.5509585],
                [53.098014  , 17.9724949],
            ],{color:"purple"}).addTo(map);

            var polyline = L.polyline([
                [55.4103069  , 37.9024513],
                [53.098014  , 17.9724949],
            ],{color:"purple"}).addTo(map);

            var polyline = L.polyline([
                [43.3563455  , -1.7912035],
                [50.0379306  , 8.5621492],
            ],{color:"orange"}).addTo(map);

            var polyline = L.polyline([
                [50.0379306  , 8.5621492],
                [55.6123184  , 12.6472247],
            ],{color:"orange"}).addTo(map);

        });
    </script>
@endsection
