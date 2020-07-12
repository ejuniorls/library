<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index()
    {
        #$authors = Author::latest()->paginate(4);
        #return view('admin.authors.index', compact('authors'))->with('i', (request()->input('page', 1) - 1) * 4);

        $authors = DB::table('authors')->paginate(5);
        return view('admin.authors.index', ['authors' => $authors]);
    }

    public function new()
    {
        return view('admin.authors.new');
    }

    public function save(Request $req)
    {
        $authors = $req->all();
        $authors['image'] = 'teste.img';
        
        Author::create($authors);

        
        #dd($authors);
        
        return redirect()->route('admin.authors');
    }

    public function edit($id)
    {
        $author = Author::find($id);
        return view('admin.authors.edit', compact('author'));
    }

    public function update(Request $req, $id)
    {
        $authors = $req->all();
        Author::find($id)->update($authors);
        return redirect()->route('admin.authors');
    }

    public function delete($id)
    {
        Author::find($id)->delete();
        return redirect()->route('admin.authors');
    }

}
