@extends('layout.layout')

@section('conteudo')
    <h3>Enviar arquivo</h3>
    <form action="{{ route('diploma.store') }}" enctype="multipart/form-data" method="post">
        @csrf

        <div class="formg-group">
            <label for="arquivo">Arquivo</label>
            <input type="file" name="arquivo" id="arquivo" required class="form-control">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

    <br>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Código</th>
            <th>CPF</th>
            <th>Curso</th>
            <th>Centro</th>
            <th>Data</th>
            <th>Hash</th>
            <th>Termo</th>
        </tr>
        </thead>
        <tbody>
        @forelse($diplomas as $diploma)
            <tr>
                <td>{{ $diploma->nome }}</td>
                <td>{{ $diploma->codigo }}</td>
                <td>{{ $diploma->cpf }}</td>
                <td>{{ $diploma->curso }}</td>
                <td>{{ $diploma->centro }}</td>
                <td>{{ $diploma->data }}</td>
                <td>{{ $diploma->hash }}</td>
                <td>{{ $diploma->termo }}</td>
            </tr>
        @empty
            <tr><td colspan="7">Nenhum diploma cadastrado</td></tr>
        @endforelse
        </tbody>
    </table>

@endsection
