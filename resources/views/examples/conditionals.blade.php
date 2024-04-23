@if($comments === 1)
    <h1>Existe um comentário</h1>

@elseif ($comments > 1)
    <h1>Existem {{$comments}} comentários</h1>

@elseif($comments < 0)
    <h1>Existe um total de {{$comments}}, como é possível!? :O</h1>

@else
    <h1>Não existe um comentário</h1>
@endif

<hr>

@unless($test > 0)
    <h1>Valor é diferente da condição, ou seja {{$test}}</h1>
@endunless
