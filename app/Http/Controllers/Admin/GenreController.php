<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = DB::table('genres')->paginate(5);
        return view('admin.genres.index', ['genres' => $genres]);
    }

    public function new()
    {
        return view('admin.genres.new');
    }

    public function save(Request $req)
    {
        $genres = $req->all();
        Genre::create($genres);
        return redirect()->route('admin.genres');
    }

    public function edit($id)
    {
        $genre = Genre::find($id);
        return view('admin.genres.edit', compact('genre'));
    }

    public function update(Request $req, $id)
    {
        $genres = $req->all();
        Genre::find($id)->update($genres);
        return redirect()->route('admin.genres');
    }

    public function delete($id)
    {
        Genre::find($id)->delete();
        return redirect()->route('admin.genres');
    }
}
