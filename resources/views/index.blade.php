@foreach ($valilehdet as $valilehti)
<h1>
    <a href="/{{$valilehti['nimi']}}">
    {{$valilehti['nimi']}}</a>
</h1>
@endforeach
