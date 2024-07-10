<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musics;

class MusicController extends Controller
{
    public function index()
    {
        $valores = Musics::paginate(10);
        return view('index')->with('valores', $valores);
    }

    public function create()
    {
        return view('formulario');
    }

    public function edit($id)
    {
        $reg = Musics::find($id);
        return view('formularioedit')->with('reg', $reg);
    }

    public function delete(Request $req)
    {
        $id = $req->id;
        $c = Musics::find($id);
        $c->delete();

        return redirect("/");
    }

    public function store(Request $req)
    {
        $name = strval($req->name);
        $artist = strval($req->artist);
        $records = strval($req->records);
        $feat = strval($req->feat);
        $release_date = strval($req->release_date);

        $musics = new Musics();

        $musics->name = $name;
        $musics->artist = $artist;
        $musics->records = $records;
        $musics->feat = $feat;
        $musics->release_date = $release_date;

        $musics->save();

        return redirect('/');
    }

    public function update(Request $req)
    {
        $musics = Musics::find($req->id);
        $musics->name = $req->name;
        $musics->artist = $req->artist;
        $musics->records = $req->records;
        $musics->feat = $req->feat;
        $musics->release_date = $req->release_date;

        $musics->save();
        return redirect('/');
    }
}
