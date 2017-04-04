@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Modificar Categoria</h2>
        <table class="table table-collapsed table-condensed">
            <tr>
                <th>Nombre</th>
                    <th>Descripcion</th>
                    
                    <th></th>
                </tr>
                <!-- @foreach($categoria as $cat){
                    <tr>
                        <td>$cat->nombre</td>
                        <td>$cat->descripcion</td>
                        <td><a href="que lleve a modificarcat/id pasado por parametro">Modificar</a></td>
                    </tr>
                    @endforeach -->
        </table>
    @endsection
@endsection