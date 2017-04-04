@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Modificar Producto</h2>
    <table class="table table-collapsed table-condensed">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th></th>
        </tr>
        <!-- @foreach($productos as $p){
            <tr>
                    <td>$p->nombre</td>
                    <td>$p->descripcion</td>
                    <td>$p->precio</td>
                    <td><a href="que lleve a modificarprod/id pasado por parametro">Modificar</a></td>
                </tr>
                @endforeach -->
    </table>
    @endsection
@endsection