@extends('layouts.app')
@section('styles')
    <script src="{{ asset('js/radioBtn.js')}}"></script>
@endsection
@section('content')
    <div>
        <div class="d-flex mt-5">
            <div style="width: 30%;">
                <canvas id="pie-chart"></canvas>
                <canvas id="pie-chart_2"></canvas>
            </div>
            <div style="width: 30%;">
                <div>
                    <h4>@lang('messages.Find the products that interest you')</h4>
                </div>
                <form method="get" action="{{ route('buscar.productos') }}">
                    <input type="text" name="texto" class="col-12">
                    <div id="div">

                    </div>
                    <div class="mb-2 mt-2"style="text-align: center;">
                        <button type="submit" class="btn"
                            style="background-color: #CCB26B;">@lang('messages.Search')</button>
                    </div>
                </form>
            </div>
            <center style="width: 40%;">
                <img src="{{ URL('assets/img/Oferta.jpg') }}" class="w-75 h-75" valt="" />
            </center>
        </div>
    </div>
    <div class="p-5">
        <h1 style="text-align: center">@lang('messages.List of product')</h1>
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-3">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top p-2" style="height: 300px;witdh: 150px;" src="{{ URL('assets/img/' . $producto->nombre . '.jpg') }}"
                            alt="Error en la foto">
                        <div class="card-body">
                            <div>
                                <p>@lang('messages.Name'):{{ $producto->nombre }}</p>
                                <p>@lang('messages.Expiration date'):{{ $producto->fecha_cad }}</p>
                                <p>@lang('messages.Prize'):{{ $producto->precio }}</p>
                                <p>@lang('messages.Description'):{{ $producto->descripcion }}</p>
                                <p>@lang('messages.Categories'):{{ $producto->categoria->nombre }}</p>
                                <p>@lang('messages.Brand'):{{ $producto->marca->nombre }}</p>
                                <form action="{{ route('productos_comprar', [$producto->id]) }}" method="post">
                                    <div style="text-align: center" class="p-2">
                                        @csrf
                                        @method('post')
                                        <label>Cantidad:</label><select name="cantidad" id="cantidad">
                                            @for ($i = 1; $i <= 10; $i++)
                                                <option>{{ $i }}</option>
                                            @endfor
                                        </select>
                                        <button type="submit" class="btn"
                                            style="background-color: #CCB26B;">@lang('messages.Buy')
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            <div>
                                <h3>@lang('messages.Characteristics')</h3>
                                <div class="d-flex p-2 gap-2">
                                    <div class=col-4>
                                        <p>@lang('messages.Hydrates'):{{ $producto->hidratos }}</p>
                                        <p>@lang('messages.Sugars'):{{ $producto->azucares }}</p>
                                        <p>@lang('messages.Proteins'):{{ $producto->proteinas }}</p>
                                    </div>
                                    <div class="col-4">
                                        <p>@lang('messages.Salt'):{{ $producto->sal }}</p>
                                        <p>@lang('messages.Source'):{{ $producto->origen }}</p>
                                        <p>@lang('messages.Ingredients'):{{ $producto->ingredientes }}</p>
                                    </div>
                                    <div class="col-4">
                                        <p>@lang('messages.Calories'):{{ $producto->calorias }}</p>
                                        <p>@lang('messages.Weight'):{{ $producto->peso }}</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3>@lang('messages.Comments')</h3>
                                <table class="table borderless">
                                    <tr>
                                        <td>@lang('messages.User')</td>
                                        <td>@lang('messages.Comment_2')</td>
                                        <td>@lang('messages.Assessment')</td>
                                    </tr>
                                    @foreach ($producto->comentarios as $comentario)
                                        <tr>
                                            <td>{{ $comentario->usuario->nombre }}</td>
                                            <td>{{ $comentario->texto }}</td>
                                            <td>{{ $comentario->puntuacion }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                                <div class="p-2 gap-2">
                                    <form action="{{ route('productos_comentar', [$producto->id]) }}" method="post">
                                        @csrf
                                        <div class="col-12 p-2">
                                            <div class="col-6">
                                                <label>{{ auth()->user()->nombre }}:</label><input type="text" name="comentario"
                                                id="comentario">
                                            </div>
                                            <div class="col-6 mt-2">
                                                <select name="puntuacion" id="puntuacion">
                                                    @for ($i = 1; $i <= 10; $i++)
                                                        <option>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn"
                                            style="background-color: #CCB26B;">@lang('messages.Comment')</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script type="text/javascript">

        var nombres = <?php echo json_encode($nombre_marcas); ?>;
        var nombres_marcas=[];
        for (let i = 0; i < nombres.length; i++) {
            nombres_marcas.push(nombres[i]["nombre"]);
        }

        var cantidad = <?php echo json_encode($cantidad_marcas); ?>;
        var cantidad_marcas=[];
        for (let i = 0; i < cantidad.length; i++) {
            cantidad_marcas.push(cantidad[i]["productos_count"]);
        }
        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
                labels: nombres_marcas,
                datasets: [{
                    label: "Cantidad de productos",
                    backgroundColor: ["#C0392B","#CB4335","#884EA0","#2980B9","#3498DB ","#48C9B0","#45B39D ","#F7DC6F","#F8C471 ","#F0B27A ","#E59866"],
                    data: cantidad_marcas,
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Cantidad de productos por marca'
                }
            }
        });

        var nombres_2 = <?php echo json_encode($nombre_categorias); ?>;
        var nombre_categorias=[];
        for (let i = 0; i < nombres_2.length; i++) {
            nombre_categorias.push(nombres_2[i]["nombre"]);
        }
        var cantidad_2 = <?php echo json_encode($cantidad_categorias); ?>;
        var cantidad_categorias=[];
        for (let i = 0; i < cantidad_2.length; i++) {
            cantidad_categorias.push(cantidad_2[i]["productos_count"]);
        }
        new Chart(document.getElementById("pie-chart_2"), {
            type: 'pie',
            data: {
                labels: nombre_categorias,
                datasets: [{
                    label: "Cantidad de productos",
                    backgroundColor: ["#C0392B","#CB4335","#884EA0","#2980B9","#3498DB ","#48C9B0","#45B39D ","#F7DC6F","#F8C471 ","#F0B27A ","#E59866"],
                    data: cantidad_categorias,
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Cantidad de productos por categoria',
                }
            }
        });
    </script>
@endsection
