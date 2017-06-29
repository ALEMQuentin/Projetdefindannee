<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use App\Member;

//use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $datas = Post::all();
        return view('admin')->with('datas', $datas);
    }

    public function create()
    {
        return view('admin/new-post');
    }

    public function store()
    {
        return view('admin');
    }
    public function show_members()
    {
        $datas = Member::all();
        return view('admin/members')->with('datas', $datas);
    }
}
