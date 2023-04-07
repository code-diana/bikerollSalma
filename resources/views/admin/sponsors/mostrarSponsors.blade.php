@extends('layouts.layout')
{{-- Para mostrar la alerta con el mensaje --}}
@if (session('mensaje'))
    <script>
        alert('{{ session('mensaje') }}');
    </script>
@endif
{{-- -------------------------------------- --}}
@section('content')
    <h2>Patrocinadores</h2>
    <a href="{{url('anyadirSponsor')}}" class="btn btn-primary">Añadir nuevo sponsor</a>
    <div class="row">
    @foreach($sponsor as $row)
        @php
            $id = $row['id'];
            $logo=preg_replace('([^A-Za-z0-9 ])', '', $row['logo']);
        @endphp
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="	http://localhost/bikerollSalma/resources/img/<?php echo strtolower($logo) ?>.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$row['name']}}</h5>
                <p class="card-text">{{$row['description']}}</p>
                <p class="card-text">
                    <small class="text-muted">
                        Plana principal: 
                        @if($row['main_plain'] == 0)
                            No
                        @else
                            Sí
                        @endif
                    </small>
                </p>
                <p>
                    Estado: 
                    @if ($row['sponsorState'] == 0)
                        <a href="activarSponsor/{{$id}}"><img style="width:40px;height:40px" src="	http://localhost/bikerollSalma/resources/img/off.png" alt=""></a>
                    @else
                        <a href="activarSponsor/{{$id}}"><img style="width:40px;height:40px" src="	http://localhost/bikerollSalma/resources/img/on.png" alt=""></a>
                    @endif
                </p>
                <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="editarSponsor/{{$id}}">Editar datos</a>
                    <a class="btn btn-sm btn-outline-secondary" href="editarLogo/{{$id}}">Editar logo</a>
                    <a class="btn btn-sm btn-outline-secondary" href="selectRaces/{{$id}}">Seleccionar carreras</a>
                    <a class="btn btn-sm btn-outline-secondary" href="carreras-sponsor/{{$id}}">Ver carreras</a>
                </div>
                <a href="download-pdf/{{$id}}" class="btn btn-primary">Descargar PDF</a>
            </div>

        </div>
            {{-- <td>
                <a href="editarSponsor/{{$id}}"><img src="../resources/img/edit.png" alt=""></a>
                <a href="editarLogo/{{$id}}"><img src="../resources/img/pic.png" alt=""></a>
            </td>
            <td>
                <a href="selectRaces/{{$id}}"><img src="../resources/img/choice.png" alt="checkbox icon"></a>
            </td>
            <td>
                <a href="download-pdf/{{$id}}"><img src="../resources/img/download.png" alt="descargar pdf"></a>
            </td> --}}
    @endforeach
    </div>
    <a href="{{url('/paginaPrincipal')}}">Pagina principal</a>
@endsection