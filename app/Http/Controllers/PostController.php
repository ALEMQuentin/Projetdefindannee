<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Post_histories;

use Illuminate\Support\Facades\Input;


class PostController extends Controller
{
    public function create()
    {
        return view('admin/new-post');
    }

    public function store()
    {
        $data = Post::create([
            'title' =>              Input::get('title'),
            'slug' =>               Input::get('slug'),
            'resume' =>             Input::get('resume'),
            'meta_description' =>   Input::get('meta_description'),
            'media' =>              Input::get('media'),
            'media_link' =>         Input::get('media_link'),
            'meta_robot' =>         Input::get('meta_robot'),
            'seo' =>                Input::get('seo'),
            'image_title' =>        Input::get('image_title'),
            'tag' =>                Input::get('tag'),
            'delete'=>              false,
            'catégorie' =>          Input::get('catégorie')
        ]);
        $id = $data->id;
        return redirect('admin/post/' . $id);
    }

    public function show($id)
    {
        $datas = Post::findOrFail($id);
        return view('admin/post')->with($id)->with('datas', $datas);
    }



    public function update($id)
    {
        $post = Post::findOrFail($id);
        $post_histories = Post_histories::create([
            'title' =>              $post->title,
            'slug' =>               $post->slug,
            'resume' =>             $post->resume,
            'meta_description' =>   $post->meta_description,
            'media' =>              $post->media,
            'media_link' =>         $post->media_link,
            'meta_robot' =>         $post->meta_robot,
            'seo' =>                $post->seo,
            'image_title' =>        $post->image_title,
            'tag' =>                $post->tag,
            'catégorie' =>          $post->catégorie,
            'time' =>               $post->created_at,
            'numero_article' =>     $post->id,
            'delete' =>             false
        ]);

        $post->title            = Input::get('title');
        $post->slug             = Input::get('slug');
        $post->resume           = Input::get('resume');
        $post->meta_description = Input::get('meta_description');
        $post->media            = Input::get('media');
        $post->media_link       = Input::get('media_link');
        $post->meta_robot       = Input::get('meta_robot');
        $post->seo              = Input::get('seo');
        $post->image_title      = Input::get('image_title');
        $post->tag              = Input::get('tag');
        $post->catégorie        = Input::get('catégorie');

        $post->save();
        return redirect('admin/post/' . $id);

    }


    public function delete($id)
    {
        $post = Post::findOrFail($id);

        $post_histories = Post_histories::create([
            'title' => $post->title,
            'slug' => $post->slug,
            'resume' => $post->resume,
            'meta_description' => $post->meta_description,
            'media' => $post->media,
            'media_link' => $post->media_link,
            'meta_robot' => $post->meta_robot,
            'seo' => $post->seo,
            'image_title' => $post->image_title,
            'tag' => $post->tag,
            'catégorie' => $post->catégorie,
            'time' => $post->created_at,
            'numero_article' => $post->id,
            'delete' => true
        ]);

        $post->delete();

        return redirect('admin');
    }

    public function show_history($id)
    {
        $post = Post::findOrFail($id);

        $datas = Post_histories::where('numero_article', '=', $id)->get();

        return view('admin/post-history')->with($id)->with(['datas' => $datas, 'post' => $post]);
    }

    public function show_delete()
    {
        $datas = Post_histories::where('delete', '=', true)->get();

        return view('admin/post-delete')->with('datas', $datas);
    }


    public function restaure_delete($id)
    {
        $post_delete = Post_histories::findOrFail($id);

        $restaure_history = Post_histories::where('numero_article', '=', $post_delete->numero_article)->where('delete', '=', false)->get();

        $post = Post::create([
            'title' =>            $post_delete->title,
            'slug' =>             $post_delete->slug,
            'resume' =>           $post_delete->resume,
            'meta_description' => $post_delete->meta_description,
            'media' =>            $post_delete->media,
            'media_link' =>       $post_delete->media_link,
            'meta_robot' =>       $post_delete->meta_robot,
            'seo' =>              $post_delete->seo,
            'image_title' =>      $post_delete->image_title,
            'tag' =>              $post_delete->tag,
            'catégorie' =>        $post_delete->catégorie,
            'delete' =>           false
        ]);

        foreach ($restaure_history as $key => $value) {
            $value->numero_article = $post->id;
            $value->save();
        }

        $post_delete->delete();

        return redirect('admin');
    }




    public function restaure_history($history_id, $post_id)
    {
        $post_history = Post_histories::findOrFail($history_id);

        $post = Post::findOrFail($post_id);

        $post_histories = Post_histories::create([
            'title' =>              $post->title,
            'slug' =>               $post->slug,
            'resume' =>             $post->resume,
            'meta_description' =>   $post->meta_description,
            'media' =>              $post->media,
            'media_link' =>         $post->media_link,
            'meta_robot' =>         $post->meta_robot,
            'seo' =>                $post->seo,
            'image_title' =>        $post->image_title,
            'tag' =>                $post->tag,
            'catégorie' =>          $post->catégorie,
            'time' =>               $post->created_at,
            'numero_article' =>     $post->id,
            'delete' =>             false
        ]);


        $post->title            = $post_history->title;
        $post->slug             = $post_history->slug;
        $post->resume           = $post_history->resume;
        $post->meta_description = $post_history->meta_description;
        $post->media            = $post_history->media;
        $post->media_link       = $post_history->media_link;
        $post->meta_robot       = $post_history->meta_robot;
        $post->seo              = $post_history->seo;
        $post->image_title      = $post_history->image_title;
        $post->tag              = $post_history->tag;
        $post->catégorie        = $post_history->catégorie;

        $post->save();

        return redirect('admin');
    }
}
