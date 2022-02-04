@extends('layout.layout')

@section('conteudo')
    <h3>Enviar arquivo</h3>
    <form action="{{ route('seed') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <label for="sql">SQL</label>
            <textarea name="sql" id="sql" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
