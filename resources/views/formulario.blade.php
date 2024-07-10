@extends('layouts.app')

@section('conteudo')


<form id="oi" action="/store" method="post">
    <main class="mainn">
        @csrf

        <section>
            <div id="leftt">
                <h1>PHP</h1>
                <h2>Play</h2>
            </div>

            <div id="rigthh">
                <div id="linha1">
                    <div class="juntooo">
                        <label for="name">NOME DA MUSICA:</label>
                        <input type="text" id="name" name="name" required class="primeiros">
                    </div>

                    <div class="juntooo">
                        <label for="artist">ARTISTA:</label>
                        <input type="text" id="artist" name="artist" required require class="primeiros">
                    </div>
                </div>

                <div id="linha2">
                    <div class="juntosss">
                        <label for="feat">FEATS:</label>
                        <input type="text" id="feat" required name="feat">
                    </div>

                </div>

                <div id="linha3">
                    <div class="juntosss">
                        <label for="records">GRAVADORA:</label>
                        <input type="text" id="records" required name="records">
                    </div>

                </div>

                <div id="linha4">
                    <div class="juntosss">
                        <label for="release_date">DATA DE LANÇAMENTO:</label>
                        <input type="date" id="release_date" required name="release_date">
                    </div>

                </div>

                <button type="submit">CADASTRAR</button>
            </div>

        </section>

        <!-- <img src="/babyy-removebg-preview.png" alt="" id="imagem"> -->

    </main>
</form>
@endsection