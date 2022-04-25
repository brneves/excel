@extends('layout.layout')

@section('conteudo')

    {{ ini_set('memory_limit', '-1') }}

    <h3>Enviar arquivo</h3>
    <form action="{{ route('cfo-masc.store') }}" enctype="multipart/form-data" method="post">
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

    @foreach($masculinos as $masculino)
        @if($masculino->id_vagas_eventos == 31)
            @php
            \App\Http\Controllers\CFOMascController::updateVaga($masculino->id_inscricoes, 28)
            @endphp
        @elseif($masculino->id_vagas_eventos == 32)
            @php
                \App\Http\Controllers\CFOMascController::updateVaga($masculino->id_inscricoes, 29)
            @endphp
        @elseif($masculino->id_vagas_eventos == 33)
            @php
                \App\Http\Controllers\CFOMascController::updateVaga($masculino->id_inscricoes, 30)
            @endphp
        @endif

        UPDATE inscricoes SET id_vagas_eventos = {{ $masculino->vaga_nova }}, id_vagas_eventos_final = {{ $masculino->vaga_final_nova }} WHERE id_inscricoes = {{ $masculino->id_inscricoes }};<br>





    @endforeach


    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>ID VAGA</th>
            <th>ID VAGA FINAL</th>
            <th>ID VAGA NOVA</th>
            <th>ID VAGA NOVA FINAL</th>
        </tr>
        </thead>
        <tbody>
        @foreach($masculinos as $masculino)
            <tr>
                <td>{{ $masculino->id_inscricoes }}</td>
                <td>{{ $masculino->nome }}</td>
                <td>{{ $masculino->cpf }}</td>
                <td>{{ $masculino->id_vagas_eventos }}</td>
                <td>{{ $masculino->id_vagas_eventos_final }}</td>
                <td>{{ $masculino->vaga_nova }}</td>
                <td>{{ $masculino->vaga_final_nova }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
