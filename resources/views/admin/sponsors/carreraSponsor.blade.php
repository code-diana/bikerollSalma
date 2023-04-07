@extends('layouts.layout')

@section('content')
    <h1>Carreras que patroniza el sponsor {{$id}}</h1>

    @foreach ($races as $race)
        <?php $imagen=preg_replace('([^A-Za-z0-9 ])', '', $race->promotion); ?>
        <img  src="	http://localhost/bikerollSalma/resources/img/<?php echo strtolower($imagen) ?>.jpg" alt="Card image cap">

        <p>{{$race->title}}</p>
    @endforeach
@endsection
