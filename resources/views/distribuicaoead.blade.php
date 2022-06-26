@extends('layout.layout')

@section('conteudo')

    {{ ini_set('memory_limit', '-1') }}

    @php
        $i = 0;
    @endphp

    <!-- DISTRIBUICAO EVENTOS -->
    <h2>DISTRIBUICAO EAD EVENTOS</h2>
    <hr>

    @foreach($distribuicoes as $distribuicao)

        @php
        $inscricao = substr($distribuicao->INSCRICAO, 4);
        $inscricao = (string) ((int)($inscricao));

        @endphp

        INSERT INTO distribuicao_ead (id_eventos, id_tipos_distribuicoes, id_setores, local_prova, id_inscricoes, controle, colegio_prova, sala_prova, sequencia_prova, cpf, curso) VALUES (19, 1, {{ $distribuicao->ID_SETORES }}, '{{ $distribuicao->LOCAL_PROVA }}', {{ $inscricao }}, '{{ $distribuicao->CONTROLE }}', '{{ $distribuicao->COLEGIO_PROVA }}', '{{ $distribuicao->SALA_PROVA }}', '{{ $distribuicao->SEQUENCIA_PROVA }}', '{{ $distribuicao->CPF }}', '{{ $distribuicao->CURSO1 }}');

        <br>

    @endforeach


    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>COD_LOCAL</th>
            <th>LOCAL</th>
            <th>CODIGO</th>
            <th>NOME_ESCOLA</th>
            <th>ENDERECO</th>
            <th>NUMERO</th>
            <th>BAIRRO</th>
            <th>CIDADE</th>
            <th>UF</th>
            <th>CEP</th>
            <th>QTD_SALAS</th>
            <th>QTD_SALAS_UTILIZADAS</th>
        </tr>
        </thead>
        <tbody>

        {{--@foreach($setores as $setor)
            <tr>
                <td>{{ $setor->id_setores }}</td>
                <td>{{ $setor->cod_local }}</td>
                <td>{{ $setor->local }}</td>
                <td>{{ $setor->codigo }}</td>
                <td>{{ $setor->nome_escola }}</td>
                <td>{{ $setor->endereco }}</td>
                <td>{{ $setor->numero }}</td>
                <td>{{ $setor->bairro }}</td>
                <td>{{ $setor->cidade }}</td>
                <td>{{ $setor->uf }}</td>
                <td>{{ $setor->cep }}</td>
                <td>{{ $setor->qtd_salas }}</td>
                <td>{{ $setor->qtd_salas_utilizadas }}</td>
            </tr>
        @endforeach--}}
        </tbody>
    </table>

@endsection
