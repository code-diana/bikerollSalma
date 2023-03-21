<style>
    td,th{border: 1px solid;}
    td:last-child img{width: 50px}
    td{width: 12.85%}
    table{width: 90%;margin: auto;text-align: center;}
    img{width: 40px;height: 40px}
</style>
<h1>sponsors</h1>
{{-- Para mostrar la alerta con el mensaje --}}
@if (session('mensaje'))
    <script>
        alert('{{ session('mensaje') }}');
    </script>
@endif
{{-- -------------------------------------- --}}
<table style="border-collapse:collapse">
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>logo</th>
        <th>plana principal</th>
        <th>Estado</th>
        <th>Editar</th>
        <th>Seleccionar carreras</th>
        <th>Descargar pdf</th>
    </tr>
    @foreach($sponsor as $row)
        @php
            $id = $row['id'];
        @endphp
        <tr>
            <td>{{$row['name']}}</td>
            <td>{{$row['description']}}</td>
            
            <?php 
            $logo=preg_replace('([^A-Za-z0-9 ])', '', $row['logo']);
            ?>
            <td><img src="../resources/img/<?php echo strtolower($logo) ?>.png" alt=""></td>

            <td>
                @if($row['main_plain'] == 0)
                    {{"No"}}
                @else
                    {{"Sí"}}
                @endif
            </td>
            <td>
                @if ($row['sponsorState'] == 0)
                    <a href="activarSponsor/{{$id}}"><img src="../resources/img/off.png" alt=""></a>
                @else
                    <a href="activarSponsor/{{$id}}"><img src="../resources/img/on.png" alt=""></a>
                @endif
            </td>
            <td>
                <a href="editarSponsor/{{$id}}"><img src="../resources/img/edit.png" alt=""></a>
                <a href="editarLogo/{{$id}}"><img src="../resources/img/pic.png" alt=""></a>
            </td>
            <td>
                <a href="selectRaces/{{$id}}"><img src="../resources/img/choice.png" alt="checkbox icon"></a>
            </td>
            <td>
                <a href="download-pdf/{{$id}}"><img src="../resources/img/download.png" alt="descargar pdf"></a>
            </td>
        </tr>
    @endforeach
</table>

<a href="{{url('/paginaPrincipal')}}">Pagina principal</a>