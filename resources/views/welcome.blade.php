@extends('layouts/main')
@section('contenido')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="display-2 mb-5">Hardware</h1>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Modelo</th>
                        <th>Precio</th>
                    </thead>
                    <tbody>
                        @foreach ($hardwares as $item)
                            <tr>
                                <td>{{$item -> id_hardware}}</td>
                                <td>{{$item -> nombre}}</td>
                                <td>{{$item -> modelo}}</td>
                                <td>{{$item -> precio}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection