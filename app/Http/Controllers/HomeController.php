<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Member;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Post::all();
        return view('index')->with('datas', $datas);
    }

    public function show($id)
    {
        $data = Post::findOrFail($id);
        return view('home/article')->with($id)->with('data', $data);
    }

    public function store_member()
    {
        $email = Input::get('email');
        $membres = Member::where('email', '=', $email)->get();
        $check = '';
        $data = "";

        foreach($membres as $key => $value){
            $check = $value->email;
        }
        if($check !== ''){
            $data = 'email-pris';
        } else {
            $data = Member::create([
                'email' =>          Input::get('email'),
                'nom' =>            Input::get('nom'),
                'prenom' =>         Input::get('prenom'),
                'adresse' =>        Input::get('adresse'),
                'code_postale' =>   Input::get('code_postale'),
                'region' =>         Input::get('region'),
            ]);
            $data = 'email-cree';

        }

        return view('home/page-inscription')->with('data', $data);
    }
}
