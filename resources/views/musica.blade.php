@extends('layout.layout')

@section('conteudo')

    {{ ini_set('memory_limit', '-1') }}

    <h3>Enviar arquivo</h3>
    <form action="{{ route('musica.store') }}" enctype="multipart/form-data" method="post">
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

    @foreach($musicas as $musica)
        @php
        \App\Http\Controllers\MusicaController::mudaVaga($musica->id_inscricoes)
        @endphp
    @endforeach

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>ID VAGA</th>
            <th>ID SISTEMA VAGA</th>
            <th>ID VAGA SEGUNDA OPCAO</th>
            <th>ID SISTEMA VAGA 2ª</th>
            <th>VAGA FINAL</th>
            <th>NOTA</th>
        </tr>
        </thead>
        <tbody>
        @foreach($musicas as $musica)
            <tr>
                <td>{{ $musica->id_inscricoes }}</td>
                <td>{{ $musica->nome }}</td>
                <td>{{ $musica->cpf }}</td>
                <td>{{ $musica->id_vagas_eventos }}</td>
                <td>{{ $musica->id_sistema_vaga_v1 }}</td>
                <td>{{ $musica->id_vagas_eventos_segunda_opcao }}</td>
                <td>{{ $musica->id_sistema_vagas_v2 }}</td>
                <td>{{ $musica->id_vagas_eventos_final }}</td>
                <td>{{ $musica->nota_teste_aptidao }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
