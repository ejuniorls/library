<?php

namespace App\Http\Controllers\Admin;

use App\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function index()
    {
        $genres = DB::table('genres')
            ->orderBy('genre', 'asc')
            ->paginate(5);
        return view('admin.genres.index', ['genres' => $genres]);
    }

    public function new()
    {
        return view('admin.genres.new');
    }

    public function save(Request $req)
    {
        $genres = $req->all();

        try {
            Genre::create($genres);
            return redirect()->route('admin.genres');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                $error = 'Genre already exists!';
            } else {
                throw $e;
            }

            return redirect()->route('admin.genres.new', compact('error'));
        }
    }

    public function edit($id)
    {
        $genre = Genre::find($id);
        return view('admin.genres.edit', compact('genre'));
    }

    public function update(Request $req, $id)
    {
        $genres = $req->all();
        
        try {
            Genre::find($id)->update($genres);
            return redirect()->route('admin.genres');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                $error = 'Genre already exists!';
            } else {
                throw $e;
            }

            return redirect()->route('admin.genres.edit', compact('error', 'id'));
        }
    }

    public function delete($id)
    {
        Genre::find($id)->delete();
        return redirect()->route('admin.genres');
    }
}
