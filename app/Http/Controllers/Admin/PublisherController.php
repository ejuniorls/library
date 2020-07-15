<?php

namespace App\Http\Controllers\Admin;

use App\Publisher;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = DB::table('publishers')
            ->orderBy('publisher', 'asc')
            ->paginate(5);
        return view('admin.publishers.index', ['publishers' => $publishers]);
    }

    public function new()
    {
        return view('admin.publishers.new');
    }

    public function save(Request $req)
    {
        $publisher = $req->all();

        if ($req->hasFile('logo')) {
            $imagem = $req->file('logo');
            $dir = "img/publishers";
            $ext = $imagem->guessClientExtension();
            $publisherName = strtolower(str_replace(' ', '_', $publisher['publisher']));
            $imageName = "logo_" . $publisherName . "." . $ext;
            $imagem->move($dir, $imageName);
            $publisher['logo'] = $dir . "/" . $imageName;
        }

        try {
            Publisher::create($publisher);
            return redirect()->route('admin.publishers', compact('error'));
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

            return redirect()->route('admin.publishers.new', compact('error'));
        }
    }

    public function edit($id)
    {
        $publisher = Publisher::find($id);
        return view('admin.publishers.edit', compact('publisher'));
    }

    public function update(Request $req, $id)
    {
        $publisher = $req->all();
        
        if ($req->hasFile('logo')) {
            $imagem = $req->file('logo');
            $dir = "img/publishers";
            $ext = $imagem->guessClientExtension();
            $publisherName = strtolower(str_replace(' ', '_', $publisher['publisher']));
            $imageName = "logo_" . $publisherName . "." . $ext;
            $imagem->move($dir, $imageName);
            $publisher['logo'] = $dir . "/" . $imageName;
        }

        try {
            Publisher::find($id)->update($publisher);
            return redirect()->route('admin.publishers');
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

            return redirect()->route('admin.publishers.edit', compact('error', 'id'));
        }
    }

    public function delete($id)
    {
        Publisher::find($id)->delete();
        return redirect()->route('admin.publishers');
    }
}
