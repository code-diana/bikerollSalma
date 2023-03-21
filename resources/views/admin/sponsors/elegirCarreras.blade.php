<h1>Elegir Carreras disponibles</h1>
@if (count($races)==0)
    <p>Ya has seleccionado todas las carreras!</p>
@else
    <form action="../chooseRaces/{{$id}}" method="post">
        @csrf
        <table>
            <tr>
                @foreach ($races as $race)
                    <?php $id = $race['id']; ?>
                    <td>
                        <input type="checkbox" name="racescheck[]" value="{{$id}}">
                        <label>{{$race['title']}}</label><br>
                    </td>
                @endforeach
            </tr> 
        </table>
        <input type="submit" value="Seleccionar" name="select">
    </form>
@endif

<a href="{{url('/paginaPrincipal')}}">Pagina principal</a>