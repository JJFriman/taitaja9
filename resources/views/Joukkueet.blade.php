<a href="/">Takaisin</a>
@foreach ($joukkueet as $joukkue)
<h1>
    {{$joukkue['joukkueNimi']}}
</h1>
<p>
    {{$joukkue['jäsenet']}}
</p>
<td><a href = 'delete/{{ $joukkue->id }}'>Poista</a></td>
@endforeach
<br>
<br>
<a href="/joukkueet/lisaa">Lisää Joukkue</a>

