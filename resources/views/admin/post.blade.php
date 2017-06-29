<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="css/app.css" rel="stylesheet">
    <title>{{ $datas->title }}</title>
    <link href="{{ asset('css/screen.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="logoadmin"><img src="{{ asset('img-layout/logo.png') }}" alt="logo"> </div>

<h1 class="title-admin" >{{ $datas->title }}</h1>

@if($datas->media === "image")
    <img class='dark' src={{asset('img-content/' . $datas->media_link)}} alt="Logo">
@elseif($datas->media === "video")

    <div>
        <object type="application/x-shockwave-flash" width="425" height="355" data="{{$data->media_link}}">
            <param name="movie" value="{{$data->meda_link}}" />
            <param name="wmode" value="transparent" />
        </object>
        <embed src="{{$data->meda_link}}" type="application/x-shockwave-flash" wmode="transparent" width="425" height="355"></embed>
    </div>

@endif

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Slug</td>
        <td>resume</td>
        <td>description</td>
        <td>meta robot</td>
        <td>seo</td>
        <td>image title</td>
        <td>tag</td>
        <td>catégorie</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $datas->title }}</td>
        <td>{{ $datas->slug }}</td>
        <td>{{ $datas->resume }}</td>
        <td>{{ $datas->meta_description }}</td>
        <td>{{ $datas->meta_robot }}</td>
        <td>{{ $datas->seo }}</td>
        <td>{{ $datas->image_title }}</td>
        <td>{{ $datas->tag }}</td>
        <td>{{ $datas->catégorie }}</td>
    </tr>
    </tbody>
</table>
<a href="/admin">Retour vers l'admin</a>

<h2 class="title-admin">Modifier le post</h2>

<form class="container" action="" method="post">
    <div class="form-group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="title">Title</label>
        <input type="text" name ="title" id="title" value="{{ $datas->title }}"><br>
        <label for="slug">Slug</label>
        <input type="text" name ="slug" id="slug" value="{{ $datas->slug }}"><br>
        <label for="resume">Resume</label>
        <textarea name ="resume" id="resume">{{ $datas->meta_resume }}</textarea><br>
        <label for="meta_description">Meta-description</label>
        <input type="text" name ="meta_description" id="meta_description" value="{{ $datas->meta_description }}"><br>
        <label for="media">Media</label>
        <select id="media" name="media">
            <option value="{{ $datas->media }}" selected>{{ $datas->media }}</option><br>
            <option value="video">Video</option>
            <option value="image">Image</option>
            <option value="sans media">Sans média</option>
        </select>
        <label for="media_link">Media</label>
        <input type="text" name ="media_link" id="media_link" value="{{ $datas->media_link }}"><br>
        <label for="meta_robot">Meta-robot</label>
        <input type="text" name ="meta_robot" id="meta_robot" value="{{ $datas->meta_robot }}"><br>
        <label for="seo">SEO</label>
        <input type="text" name ="seo" id="seo" value="{{ $datas->seo }}"><br>
        <label for="image_title">Image-title</label>
        <input type="text" name ="image_title" id="image_title" value="{{ $datas->image_title }}"><br>
        <label for="tag">Tag</label>
        <input type="text" name ="tag" id="tag" value="{{ $datas->tag }}"><br>
        <label for="catégorie">Category</label>
        <input type="text" name ="catégorie" id="catégorie" value="{{ $datas->catégorie }}">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Valider</button>
    </div>
</form>

</body>
</html>