@extends('layout.layout')

@section('conteudo')

    {{ ini_set('memory_limit', '-1') }}

    <h3>Enviar arquivo</h3>
    <form action="{{ route('user-questionario.store') }}" enctype="multipart/form-data" method="post">
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

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID USER</th>
            <th>ID QUESTIONARIO</th>
        </tr>
        </thead>
        <tbody>
        @php $i = 0; @endphp

        @forelse($usuarios as $usuario)

            @if($usuario->ok == 1)
                UPDATE user_questionarios SET deleted_at = '2022-04-22 10:21:10' where id_users_questionarios = {{ $usuario->id_users_questionarios }};<br>
            @endif


            @php
            //\App\Http\Controllers\UserQuestionarioController::updateRepetido($usuario->id_users)
            @endphp


            {{--<tr>
                <td>{{ $usuario->id_users_questionarios }}</td>
                <td>{{ $usuario->id_users }}</td>
                <td>{{ $usuario->id_questionarios }}</td>
                <td>{{ $usuario->created_at }}</td>
                <td>{{ $usuario->updated_at }}</td>
            </tr>--}}

        @empty
            <tr><td colspan="7">Nenhum usuario cadastrado</td></tr>
        @endforelse
        </tbody>
    </table>

    <h1>{{ $i }}</h1>

@endsection
