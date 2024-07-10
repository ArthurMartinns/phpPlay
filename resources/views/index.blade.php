@extends('layouts.app')

@section('conteudo')

<main id="mainn">
    <header>
        <div id="left">
            <h2>CRIE SUA PLAYLIST</h2>
            <h1>HIP HOP <span>Hits</span></h1>
            <button><a href="/create">Criar Novo</a></button>

        </div>

        <!-- <div id="rigth">
            <img id="imgkendrick" src="paidodrake.png" alt="">
        </div> -->
    </header>

    <!-- <div id="up">
        <h1>MUSICA</h1>
        <h1>CANTOR</h1>
        <h1>FEATS</h1>
        <h1>GRAVADORA</h1>
        <h1>DATA DE LANÇ</h1>
        <h2 class="last"></h2>
        <h2 class="last"></h2>
    </div> -->

    <div class="grid-corpo">
        <table>
            <div id="up">
                <tr>
                    <th>
                        Música:
                    </th>
                    <th>
                        Artista:
                    </th>
                    <th>
                        Feat:
                    </th>
                    <th>
                        Gravadora:
                    </th>
                    <th>
                        Data:
                    </th>
                    <th>

                    </th>
                    <th>

                    </th>
                </tr>
            </div>
            @foreach($valores as $valor)
            <tr>
                <td>{{ $valor->name }}</td>
                <td>{{ $valor->artist }}</td>
                <td>{{ $valor->feat }}</td>
                <td>{{ $valor->records }}</td>
                <td>{{ $valor->release_date }}</td>
                <td>
                    <a class="btns" href="/{{ $valor->id }}/edit">Editar</a>
                </td>
                <td>
                    <form action="/delete" class="btns" method="post" id="form-delete-{{ $valor->id }}">
                        @method('DELETE')
                        <input type="hidden" class="btns" name="id" value="{{ $valor->id }}">
                        @csrf
                        <a class="btns" href="javascript:var c = confirm('Deseja realmente excluir?'); if (c) { document.getElementById('form-delete-{{ $valor->id }}').submit(); }">Deletar</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <!-- Adicione os links de paginação aqui -->
    <div class="pagination-links">
        {{ $valores->links() }}
    </div>

</main>


@endsection