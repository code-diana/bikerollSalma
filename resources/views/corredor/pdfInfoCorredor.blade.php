<h1>Factura</h1>
@foreach($results as $data)
    <?php 
        $precioCarrera = $data->price;
    ?>
    - Nombre del corredor: {{$data->name." ".$data->last_name}} <br>
    - Dirección: {{$data->adress}} <br>
    - Cuenta PayPal: {{$data->PayPal_email}} <br>
    - Carrera: {{$data->title}} <br>
    - Descripción carrera: {{$data->description}} <br>

    @if ($data->id_insurances != null)
        TOTAL : {{$precioCarrera+30}}€        
    @else
        TOTAL : {{$precioCarrera}}€        
    @endif
@endforeach