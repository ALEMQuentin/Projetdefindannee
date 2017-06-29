<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taxonomies;
use Illuminate\Support\Facades\Input;



class TaxonomieController extends Controller
{

    public function index()
    {

        $datas = Taxonomies::all();
        return view('admin/new-tag-or-categorie')->with('datas', $datas);

    }


    public function create()
    {
        $taxonomie = Taxonomies::create([
            'title' => Input::get('title'),
            'type' => Input::get('type'),
            'style' => Input::get('style'),
        ]);

        $datas = Taxonomies::all();

        return redirect('admin/new-tag-or-categorie');
    }


    public function delete($id)
    {
        $taxonomie = Taxonomies::findOrFail($id);

        $taxonomie->delete();

        $datas = Taxonomies::all();

        return redirect('admin/new-tag-or-categorie');
    }
}


