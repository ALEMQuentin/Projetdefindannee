<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Yalla') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/screen.css') }}" rel="stylesheet">
</head>
<body>
<div class="logoadmin"><img src="{{ asset('img-layout/logo.png') }}" alt="logo"> </div>
<div id="app">


    <h1 class="title-admin">Créer un nouveau post</h1>

    <form action="" method="post" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label for="title"></label>
            <input type="text" name ="title" id="title" placeholder="Title"><br>
            <label for="slug"></label>
            <input type="text" name ="slug" id="slug" placeholder="Slug"><br>
            <label for="resume"></label>
            <input type="text" name ="resume" id="resume" placeholder="Resume"><br>
            <label for="meta_description"></label>
            <input type="text" name ="meta_description" id="meta_description" placeholder="Meta-description"><br>
            <label for="media">Media :</label>
            <select id="media" name="media">
                <option value="video">video</option>
                <option value="image">image</option>
                <option value="sans media">sans média</option>
            </select>
            <label for="media_link"></label>
            <input type="text" name ="media_link" id="media_link" placeholder="Media link"><br>
            <label for="meta_robot"></label>
            <input type="text" name ="meta_robot" id="meta_robot" placeholder="Meta-robot"><br>
            <label for="seo"></label>
            <input type="text" name ="seo" id="seo" placeholder="SEO"><br>
            <label for="image_title"></label>
            <input type="text" name ="image_title" id="image_title" placeholder="Image-title"><br>
            <label for="tag"></label>
            <input type="text" name ="tag" id="tag" placeholder="Tag"><br>
            <label for="catégorie"></label>
            <input type="text" name ="catégorie" id="catégorie" placeholder="Category"><br>

        </div>
        <div class="form-group">
            <button class="btn btn-primary">Valider</button>
            <a href="/admin" class="btn btn-default">Retour</a>
        </div>
    </form>

</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>