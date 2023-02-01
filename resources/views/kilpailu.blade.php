<?php
$eräNumero = 1;
?>
<body>
<style>
  div {

    }
</style>
<a href="/">Takaisin</a>
@foreach ($joukkueet->chunk(6) as $erä)
<h1>Erä <?php echo $eräNumero++ ?></h1>
<div>
@foreach ($erä as $joukkue)
<h1>
    {{$joukkue['joukkueNimi']}}
</h1>
@endforeach
</div>
<br>
@endforeach


</body>
