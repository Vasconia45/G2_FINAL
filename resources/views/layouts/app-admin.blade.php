@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<script src="{{ asset('js/admin.js')}}"></script>
@endsection
@section('content')
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                class="fas fa-user-secret me-2"></i>@lang('messages.Dashboard')</div>
        <div class="list-group list-group-flush my-3">
            <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                href="{{ route('admin_lista_usuarios') }}"><i
                    class="bi bi-list-task me-2"></i></i>@lang('messages.Users')</a>
            <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                href="{{ route('admin_mostar_crear_usuarios') }}"><i
                    class="bi bi-pencil-square me-2"></i>@lang('messages.Create user')</a>
            <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                href="{{ route('admin_lista_usuarios_mostrar_recuperar') }}"><i
                class="bi bi-person-dash me-2"></i>@lang('messages.Retrieve user')</a>
            <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                href="{{ route('admin_lista_productos') }}"><i
                    class="bi bi-list-task me-2"></i>@lang('messages.Products')</a>
            <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                href="{{ route('admin_mostar_crear_productos') }}"><i
                    class="bi bi-pencil-square me-2"></i>@lang('messages.Create product')</a>
            <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                href="{{ route('admin_lista_categorias') }}"><i
                    class="bi bi-list-task me-2"></i>@lang('messages.Categories')</a>
            <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                href="{{ route('admin_mostar_crear_categorias') }}"><i
                    class="bi bi-pencil-square me-2"></i>@lang("messages.Create category")</a>
            <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                href="{{ route('admin_lista_marcas') }}"><i
                    class="bi bi-list-task me-2"></i>@lang("messages.brands")</a>
            <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                href="{{ route('admin_mostar_crear_marcas') }}"><i
                    class="bi bi-pencil-square me-2"></i>@lang("messages.Create brand")</a>
            <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                href="{{ route('admin_lista_vuelos') }}"><i
                    class="bi bi-list-task me-2"></i>@lang("messages.Flights")</a>
            <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                href="{{ route('admin_mostar_crear_vuelos') }}"><i
                    class="bi bi-pencil-square me-2"></i>@lang("messages.Create flight")</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-3 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            </div>
        </nav>
        <div class="container-fluid px-4">
            <div class="row g-3 my-2">
                <div class="col-lg-3 col-6">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $usuarios }}</h3>
                            <p class="fs-5">@lang('messages.Users')</p>
                        </div>
                        <a href="{{ route('admin_lista_usuarios') }}"><i
                                class="data-links fa-solid fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $productos }}</h3>
                            <p class="fs-5">@lang('messages.Products')</p>
                        </div><a href="{{ route('admin_lista_productos') }}"><i
                                class="data-links fas fa-solid fa-bag-shopping fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $brands }}</h3>
                            <p class="fs-5">@lang('messages.brands')</p>
                        </div>
                        <a href="{{ route('admin_lista_marcas') }}"><i
                                class="data-links fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $flights }}</h3>
                            <p class="fs-5">@lang('messages.Flights')</p>
                        </div>
                        <a href="{{ route('admin_lista_vuelos') }}"><i
                                class="data-links fas fa-regular fa-plane-departure fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <h3 class="fs-4 mb-3">@lang("messages.orders")</h3>
                <div class="col">
                    <table class="table bg-white rounded shadow-sm  table-hover">
                        <thead>
                            <tr>
                                <th scope="col">@lang("messages.customers")</th>
                                <th scope="col">@lang("messages.Prize")</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($recibos as $recibo)
                                <tr>
                                    <td>{{$recibo->pedido->usuario->nombre}}</td>
                                    <td>{{$recibo->total}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection