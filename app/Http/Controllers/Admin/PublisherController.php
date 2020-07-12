<?php

namespace App\Http\Controllers\Admin;

use App\Publisher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = DB::table('publishers')->paginate(5);
        return view('admin.publishers.index', ['publishers' => $publishers]);
    }

    public function new()
    {
        return view('admin.publishers.new');
    }

    public function save(Request $req)
    {
        $publisher = $req->all();
        
        $publisher['logo'] = 'teste';

        Publisher::create($publisher);
        return redirect()->route('admin.publishers');
    }

    public function edit($id)
    {
        $publisher = Publisher::find($id);
        return view('admin.publishers.edit', compact('publisher'));
    }

    public function update(Request $req, $id)
    {
        $publisher = $req->all();
        Publisher::find($id)->update($publisher);
        return redirect()->route('admin.publishers');
    }

    public function delete($id)
    {
        Publisher::find($id)->delete();
        return redirect()->route('admin.publishers');
    }
}
