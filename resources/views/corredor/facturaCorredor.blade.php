<div>
    <img src="../../resources/img/bicicleta-de-montana.png" alt="" style="width:70px;height:70px">
    <h2>BIKEROLL</h1>
</div>
<h1>Factura</h1>
{{-- DATOS CORREDOR --}}
<div>
    <p>Datos corredor</p>
    @foreach($results as $data)
        <?php 
            $precioCarrera = $data->price;
        ?>

        <strong> Nombre: </strong>{{$data->name." ".$data->last_name}} <br>
        <strong>Dirección: </strong> {{$data->adress}} <br>

    @endforeach
</div>
{{-- DATOS CARRERA --}}
<div>
    <p>Datos carrera</p>
    @foreach($results as $data)
        <strong>Carrera: </strong> {{$data->title}} <br>
        <strong>Descripción carrera: </strong>{{$data->description}} <br>
    @endforeach
</div>

{{-- METODO DE PAGO --}}
<div>
    @foreach($results as $data)
        <p>Metodo de pago</p>
        <strong>Cuenta PayPal: </strong> {{$data->PayPal_email}} <br>
    @endforeach

</div>

{{-- IMPORTE  --}}
<div>

</div>






{{-- @if ($data->id_insurances != null)
TOTAL : {{$precioCarrera+30}}€        
@else
TOTAL : {{$precioCarrera}}€        
@endif --}}