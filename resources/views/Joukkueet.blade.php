<a href="/">Takaisin</a>
@foreach ($joukkueet as $joukkue)
<h1>
    {{$joukkue['joukkueNimi']}}
</h1>
<p>
    {{$joukkue['jäsenet']}}
</p>
</form>
@csrf
<td><a href = 'delete/{{ $joukkue->id }}'>Poista</a></td>
@endforeach
<br>
<br>
<a href="/Joukkueet/lisaa">Lisää Joukkue</a>