@extends('layouts.layout')
<style>
    td,th{border: 1px solid;}
    td{width: 15%}
    img{width: 50%;height: 50%}
</style>
@section('content')
    <div>
        <h1>Aseguradoras</h1>
        <table>
            <tr>
                <th>CIF</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Precio base</th>
                <th>Estado</th>
                <th>Editar</th>
            </tr>
            @foreach($insurance as $row)
                @php
                    $id = $row['id'];
                @endphp
                <tr>
                    <td>{{$row['CIF']}}</td>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['address']}}</td>
                    <td>{{$row['price']}}€</td>
                    <td>
                        @if ($row['estado'] == 0)
                            <a href="activarAseguradora/{{$id}}"><img src="../resources/img/off.png" alt=""></a>
                        @else
                            <a href="activarAseguradora/{{$id}}"><img src="../resources/img/on.png" alt=""></a>
                        @endif
                    </td>
                    <td>
                        <a href="editarAseguradora/{{$id}}"><img src="../resources/img/edit.png" alt=""></a>
                    </td>
                </tr>
            @endforeach
        </table>

        <a href="{{url('/paginaPrincipal')}}">Volver atras</a>
    </div>
@endsection