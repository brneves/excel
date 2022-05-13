@extends('layout.layout')

@section('conteudo')

    {{ ini_set('memory_limit', '-1') }}

    <h3>Enviar arquivo</h3>
    <form action="{{ route('setores.store') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="formg-group">
            <label for="arquivo">Arquivo</label>
            <input type="file" name="arquivo" id="arquivo" required class="form-control">
        </div>
        <p><small>Limite de upload:</small> <strong>{{ ini_get('upload_max_filesize') }}</strong></p>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

    <br>
    @php
        $i = 0;
    @endphp

    <!-- DISTRIBUICAO EVENTOS -->
    <h2>DISTRIBUICAO EVENTOS</h2>


    <hr>

    <!-- SALAS SETORES -->
    <h2>SALAS SETORES</h2>

    <hr>

    <!-- SETORES EVENTOS -->
    <h2>SETORES EVENTOS</h2>
    @foreach($setores as $setor)

        @php
        $i++;
        @endphp

        INSERT INTO setores_eventos (id_setores_eventos,id_eventos, id_setores, id_tipos_distribuicoes, qtd_salas, qtd_salas_utilizadas, codigo) VALUES ({{ $i }}, 18, {{ $setor->id_setores }}, 1, '{{ $setor->qtd_salas }}', {{ $setor->qtd_salas_utilizadas }}, '{{ $setor->codigo }}');

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
