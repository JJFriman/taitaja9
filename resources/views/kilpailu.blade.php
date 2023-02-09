<?php
?>
<body>
<style>
  svg {
    width: 20;
    }
</style>
<a href="/">Takaisin</a>
@foreach ($joukkueet->chunk(6) as $erä)
<h1>AlkuErä {{ $joukkueet->currentPage()}}</h1>

<div>
@foreach ($erä as $joukkue)
<h1>
    {{$joukkue['joukkueNimi']}}
</h1>
@endforeach
</div>
<br>
@endforeach
<div class="w-2 p-4">
  {{$joukkueet->links()}}
</div>



</body>
