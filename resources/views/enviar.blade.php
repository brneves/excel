@extends('layout.layout')

@section('conteudo')
    <h3>Enviar arquivo</h3>
    <form action="{{ route('seed') }}" enctype="multipart/form-data" method="post">
        @csrf

        <div class="formg-group">
            <label for="model">Model</label>
            <input type="text" name="model" id="model" required class="form-control">
        </div>

        <div class="form-group">
            <label for="inserts">INSERTS</label>
            <textarea name="inserts" id="inserts" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
