@extends('layout.layout')

@section('conteudo')

    {{ ini_set('memory_limit', '-1') }}

    <h3>Enviar arquivo</h3>
    <form action="{{ route('distribuicao-up.store') }}" enctype="multipart/form-data" method="post">
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

    <!-- SALAS SETORES -->

    @foreach($setoresEventos as $setor)

        @if($setor->qtd_salas_utilizadas != 0)
            @for($i = 1; $i <= $setor->qtd_salas_utilizadas; $i++)
                @if($i < 10)
                    @php
                    $i = '0' . $i;
                    @endphp
                @endif
                INSERT INTO salas_setores(id_setores_eventos,sala,qtd_candidatos) VALUES ({{ $setor->id_setores_eventos }}, '{{ $i }}',30);<br>
            @endfor
        @endif

        {{--
        @if($setor->qtd_salas_utilizadas != 0)
            @for($i = 1; $i <= $setor->qtd_salas; $i++)
                {{ $setor->id_setores_eventos }} - {{ $i }}<br>
            @endfor
        @elseif($setor->qtd_salas_utilizadas > 0 && $setor->qtd_salas_utilizadas < $setor->qtd_salas)
            @for($i = 1; $i <= $setor->qtd_salas - $setor->qtd_salas_utilizadas; $i++)
                {{ $setor->id_setores_eventos }} - {{ $i }}<br>
            @endfor
        @endif
        --}}

        {{--INSERT INTO salas_setores(id_setores_eventos,sala,qtd_candidatos) VALUES ({{ $setor->id_setores_eventos }}, {{ $dist->sala_prova }});<br>--}}

    @endforeach



    @foreach($setoresEventos as $setor)

    @endforeach

@endsection
