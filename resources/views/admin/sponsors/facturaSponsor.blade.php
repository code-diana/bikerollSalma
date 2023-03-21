<style>
    h1{
        text-align: center;
    }
    .importe{
        float: right;
        margin-right: 40px;
    }
    .price{
        float: right;
        position: relative;
        bottom: 56px;
    }
    img{
        width: 50px;
        height: 50px;
    }
</style>
<?php 
    $plana_principal = 0;
    $importe_total = 0;
?>
<div>
    <h1>{{$facturaSponsor[0]->name}}</h1>
    <?php 
    $logo=preg_replace('([^A-Za-z0-9 ])', '', $facturaSponsor[0]->logo);
    ?>
    <img src="../resources/img/<?php echo strtolower($logo) ?>.png" alt="">
    <p>Description : {{$facturaSponsor[0]->description}}</p>
    <p>---------------------------------------------------------------------</p>
</div>
<h2>Carreras patrozinadas</h2>
@foreach ($facturaSponsor as $item)
    <p>{{$item->title}} -------------- {{$item->price}}€</p>
    <?php
        $importe_total += $item->price;
        $plana_principal = $item->main_plain;
    ?>
@endforeach
@if($plana_principal == 1)
    <p>Coste plana principal : 30€</p>
@endif
<div class="importe">
    <p>--------------------------------------------------</p>
    <h2>Importe total</h2>
    @if($plana_principal == 1)
        <p class="price">{{$importe_total+=30}}€</p>
    @else
        <p class="price">{{$importe_total}}€</p>
    @endif
</div>