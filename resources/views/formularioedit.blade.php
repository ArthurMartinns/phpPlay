@extends('layouts.app')

@section('conteudo')
<form id="oi" action="/update" method="post">

    @csrf
    <input type="hidden" name="id" value="{{ $reg->id }}">
    @method('PUT')
    <main>
        <div class="edit">
            <p>
                <label for="name">Nome da Música</label>
                <input type="text" id="name" name="name" value="{{ $reg->name }}">
            </p>
            <p>
                <label for="artist">Artista</label>
                <input type="text" id="artist" name="artist" value="{{ $reg->artist }}">
            </p>
            <p>
                <label for="feat">Feat</label>
                <input type="text" id="feat" name="feat" value="{{ $reg->feat }}">
            </p>
            <p>
                <label for="records">Gravadora</label>
                <input type="text" id="records" name="records" value="{{ $reg->records }}">
            </p>
            <p>
                <label for="release_date">Data de lançamento</label>
                <input type="text" id="release_date" name="release_date" value="{{ $reg->release_date }}">
            </p>

            <p>
                <button type="submit">Salvar</button>
            </p>
        </div>
    </main>
</form>
@endsection