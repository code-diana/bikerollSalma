@extends('layouts.layout')
@section('content')
<h1>Información carrera</h1>

{{-- info carrera --}}
<div>
    <?php $image=preg_replace('([^A-Za-z0-9 ])', '', $races['image'])?>
    <img src="../../resources/img/<?php echo strtolower($image) ?>.jpg" alt=""/>
</div>
<div>
    <h3>{{$races['title']}}</h3>
</div>
<div>
    <p>Descripción : {{$races['description']}}</p>
</div>  
<div>
    <p>Desnivel : {{$races['unevenness']}}</p>
</div>
<div>
    <p>Numero participantes : {{$races['number_participants']}}</p>
</div>
<div>
    <p>Kilometros : {{$races['km']}}</p>
</div>
<div>
    <p>Fecha y hora de salida  : {{$races['date']}}</p>
</div>
<div>
    <p>Punto de salida : {{$races['start']}}</p>
</div>
<div>
    <p>Precio : {{$races['price']}}</p>
</div>

<div>
    <p>Cartel de promoción</p>
    <?php $promocion=preg_replace('([^A-Za-z0-9 ])', '', $races['promotion'])?>
    <img src="../../resources/img/<?php echo strtolower($promocion) ?>.jpg" alt=""/>
</div>

<?php $id=$races['id']; 


//revisar

//ver si la fecha de la carrera es más grande que hoy
$fecha_actual = date("d-m-Y");
$newDate = date("d-m-Y", strtotime($races['date'])); 

//calcular el intervalo
$hoy=now();
$carrera=$races->date;
$intervalo = $hoy->diff($carrera);


if ($intervalo->m<=1 && $intervalo->d<=30 && $newDate>$fecha_actual){ ?>

<h3><a href="{{ url('/altaCorredor/'.$id) }}">Darse de alta</a></h3>

<?php } ?>

<div>
    <a href="{{url('/')}}">Pagina principal</a>
</div>
@endsection
