<a href="/">Takaisin</a>
@foreach ($tehtävät as $tehtävä)
<h1>
    {{$tehtävä['tehtäväNimi']}}
</h1>
<p>
    Max Aika: {{$tehtävä['maxAika']}}
</p>
</form>
@csrf
<td><a href = 'delete/{{ $tehtävä->id }}'>Poista</a></td>
@endforeach
<br>
<br>
<a href="/Joukkueet/lisaa">Lisää tehtävä</a>

