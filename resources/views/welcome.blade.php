<h1>{{$heading}}</h1>

@foreach ($valilehdet as $valilehti)
<h1>
    <a href="/{{$valilehti['nimi']}}">
    {{ucfirst($valilehti['nimi'])}}</a>
</h1>
@endforeach