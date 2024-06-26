@isset($month)

    @switch($month)
        @case(1)
            <p>Janeiro</p>
            @break
        @case(2)
            <p>Fevereiro</p>
            @break
        @case(3)
            <p>Março</p>
            @break
        @case(4)
            <p>Abril</p>
            @break
        @case(5)
            <p>Maio</p>
            @break
        @case(6)
            <p>Junho</p>
            @break
        @case(7)
            <p>Julho</p>
            @break
        @case(8)
            <p>Agosto</p>
            @break
        @case(9)
            <p>Setembro</p>
            @break
        @case(10)
            <p>Outubro</p>
            @break
        @case(11)
            <p>Novembro</p>
            @break
        @case(12)
            <p>Dezembro</p>
            @break
        @default
            <h1>Você digitou {{$month}}, não existe um mês associado com essa numeração >:(</h1>
    @endswitch
@endisset

@empty($month)
    <h1>Parece que você não digitou nada, é isso mesmo que queria me passar?</h1>
@endempty
