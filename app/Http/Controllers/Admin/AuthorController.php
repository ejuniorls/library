<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = DB::table('authors')
            ->orderBy('firstName', 'asc')
            ->paginate(5);
        return view('admin.authors.index', ['authors' => $authors]);
    }

    public function new()
    {
        return view('admin.authors.new');
    }

    public function save(Request $req)
    {
        $author = $req->all();

        if ($req->hasFile('photo')) {
            $imagem = $req->file('photo');
            $dir = "img/authors";
            $ext = $imagem->guessClientExtension();
            $authorName = strtolower(str_replace(' ', '_', $author['popularName']));
            $imageName = "photo_" . $authorName . "." . $ext;
            $imagem->move($dir, $imageName);
            $author['photo'] = $dir . "/" . $imageName;
        }

        #dd($author);

        try {
            Author::create($author);
            return redirect()->route('admin.authors');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                $error = 'Dados já existentes.';
            } elseif ($e->errorInfo[1] == 1048) {
                $error = 'Não pode estar vazio.';
            } elseif ($e->errorInfo[1] == 1364) {
                $error = 'Don\'t have a default value';
            } else {
                throw $e;
            }

            return redirect()->route('admin.authors.new', compact('error'));
        }
    }

    public function edit($id)
    {
        $author = Author::find($id);
        return view('admin.authors.edit', compact('author'));
    }

    public function update(Request $req, $id)
    {
        $author = $req->all();

        if ($req->hasFile('photo')) {
            $imagem = $req->file('photo');
            $dir = "img/authors";
            $ext = $imagem->guessClientExtension();
            $authorName = strtolower(str_replace(' ', '_', $author['popularName']));
            $imageName = "photo_" . $authorName . "." . $ext;
            $imagem->move($dir, $imageName);
            $author['photo'] = $dir . "/" . $imageName;
        }

        try {
            Author::find($id)->update($author);
            return redirect()->route('admin.authors');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                $error = 'Dados já existentes.';
            } elseif ($e->errorInfo[1] == 1048) {
                $error = 'Não pode estar vazio.';
            } elseif ($e->errorInfo[1] == 1364) {
                $error = 'Don\'t have a default value';
            } else {
                throw $e;
            }

            return redirect()->route('admin.authors.edit', compact('error'));
        }
    }

    public function delete($id)
    {
        Author::find($id)->delete();
        return redirect()->route('admin.authors');
    }
}
