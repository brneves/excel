@extends('layout.layout')

@section('conteudo')

    {{ ini_set('memory_limit', '-1') }}

    <h3>Enviar arquivo</h3>
    <form action="{{ route('cfo-femi.store') }}" enctype="multipart/form-data" method="post">
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

    @foreach($femininos as $feminino)
        @if($feminino->id_vagas_eventos == 28)
            @php
            \App\Http\Controllers\CFOFemController::updateVaga($feminino->id_inscricoes, 31)
            @endphp
        @elseif($feminino->id_vagas_eventos == 29)
            @php
                \App\Http\Controllers\CFOFemController::updateVaga($feminino->id_inscricoes, 32)
            @endphp
        @elseif($feminino->id_vagas_eventos == 30)
            @php
                \App\Http\Controllers\CFOFemController::updateVaga($feminino->id_inscricoes, 33)
            @endphp
        @endif

        UPDATE inscricoes SET id_vagas_eventos = {{ $feminino->vaga_nova }}, id_vagas_eventos_final = {{ $feminino->vaga_final_nova }} WHERE id_inscricoes = {{ $feminino->id_inscricoes }};<br>

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
        @foreach($femininos as $feminino)
            <tr>
                <td>{{ $feminino->id_inscricoes }}</td>
                <td>{{ $feminino->nome }}</td>
                <td>{{ $feminino->cpf }}</td>
                <td>{{ $feminino->id_vagas_eventos }}</td>
                <td>{{ $feminino->id_vagas_eventos_final }}</td>
                <td>{{ $feminino->vaga_nova }}</td>
                <td>{{ $feminino->vaga_final_nova }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
