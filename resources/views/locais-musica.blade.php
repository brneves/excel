@extends('layout.layout')

@section('conteudo')

    {{ ini_set('memory_limit', '-1') }}

    <h3>Enviar arquivo</h3>
    <form action="{{ route('local-musica.store') }}" enctype="multipart/form-data" method="post">
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

    @foreach($locais as $local)
        UPDATE inscricoes set local_the = {{ $local->id_unidade_curso }} where id_inscricoes = {{ $local->id_inscricao }}; <br>

    @endforeach

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID INSCRIÇÃO</th>
            <th>NOME</th>
            <th>LOCAL PROVA</th>
            <th>ID LOCAL PROVA</th>
            <th>LOCAL CURSO</th>
            <th>ID UNIDADE CURSO</th>
            <th>COD UNIDADE VAGA</th>
            <th>ID VAGAS EVENTOS</th>
        </tr>
        </thead>
        <tbody>
        @foreach($locais as $local)
            <tr>
                <td>{{ $local->id_inscricao }}</td>
                <td>{{ $local->nome }}</td>
                <td>{{ $local->local_prova }}</td>
                <td>{{ $local->id_local_prova }}</td>
                <td>{{ $local->local_curso }}</td>
                <td>{{ $local->id_unidade_curso }}</td>
                <td>{{ $local->cod_unidade_vaga }}</td>
                <td>{{ $local->id_vagas_eventos }}</td>
            </tr>

        @endforeach
        </tbody>
    </table>

@endsection
