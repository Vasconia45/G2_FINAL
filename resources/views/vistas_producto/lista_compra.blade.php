@extends('layouts.app')

@section('content')
    <div class="p-5">
        <h1 class="text-align-center">@lang('messages.Shopping list')</h1>
        <div class="row">
            @foreach ($pedido->productos as $producto)
                <div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">@lang('messages.Product')</th>
                                <th scope="col">@lang('messages.Price for unit')</th>
                                <th scope="col">@lang('messages.Amount')</th>
                                <th scope="col">@lang('messages.Total price of the units')</th>
                                <td>@lang('messages.Delete')</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->precio }}</td>
                                <td>{{ $producto->pivot->cantidad }}</td>
                                <td>{{ $producto->precio * $producto->pivot->cantidad }}</td>
                                <form action="{{ route('lista_compra_borrar', [$producto->id]) }}" method="POST">
                                    @csrf
                                    <td class="inner-table">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-sharp fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
            <br><br>
            <h2>@lang('messages.Total price of all products'):{{ $pedido->total }}</h2>
            <div>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    @lang("messages.End purchase")
                </button>
                <button type="button" class="btn btn-success">
                    <a style="text-decoration: none;color: white;" href="{{ route('productos_mostrar_lista_productos') }}">@lang("messages.Continue purchasing")</a>
                </button>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Recibo</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($pedido->productos as $producto)
                        <div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">@lang('messages.Product')</th>
                                        <th scope="col">@lang('messages.Price for unit')</th>
                                        <th scope="col">@lang('messages.Amount')</th>
                                        <th scope="col">@lang('messages.Total price of the units')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>{{ $producto->precio }}</td>
                                        <td>{{ $producto->pivot->cantidad }}</td>
                                        <td>{{ $producto->precio * $producto->pivot->cantidad }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                    <h2>@lang('messages.Total price of all products'):{{ $pedido->total }}</h2>
                </div>
                <div class="modal-footer">
                    <form action="{{route('lista_compra_finalizar_compra')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">@lang("messages.End purchase")</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
