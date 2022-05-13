@extends('layout.layout')

@section('conteudo')

    {{ ini_set('memory_limit', '-1') }}

    <br>

    <!-- SALAS SETORES -->

    @foreach($salasSetores as $sala)

        @foreach($distribuicoes as $dist)
            INSERT INTO distribuicao_eventos(id_salas_setores,id_tipos_distribuicao,id_inscricoes,controle,sequencia_prova) VALUES ({{ $sala->id_salas_setores }},1,{{ $dist->inscricao }},'{{ $dist->controle }}','{{ $dist->sequencia_prova }}');<br>
        @endforeach

    @endforeach

@endsection
