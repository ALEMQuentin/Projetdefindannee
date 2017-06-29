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
<div class="content">
    <div class="logoadmin"><img src="{{ asset('img-layout/logo.png') }}" alt="logo"></div>

    <div id="app">

        <h1 class="title-admin">Voici les posts delete</h1>


        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>Title</td>
                <td>Slug</td>
                <td>resume</td>
                <td>meta_description</td>
                <td>meta_robot</td>
                <td>seo</td>
                <td>image_title</td>
                <td>tag</td>
                <td>catégorie</td>
                <td>Modification</td>
                <td>numero-article</td>
                <td>action</td>
            </tr>
            </thead>
            <tbody>

            @foreach($datas as $key => $value)
                <tr>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->slug }}</td>
                    <td>{{ $value->resume }}</td>
                    <td>{{ $value->meta_description }}</td>
                    <td>{{ $value->meta_robot }}</td>
                    <td>{{ $value->seo }}</td>
                    <td>{{ $value->image_title }}</td>
                    <td>{{ $value->tag }}</td>
                    <td>{{ $value->catégorie }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td>{{ $value->numero_article }}</td>
                    <td>
                        <a class="btn btn-small btn-default" href="{{ URL::to('admin/post-delete-restaure/' . $value->id) }}">Restaurer</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-default" href="/admin">retour vers l'admin</a>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>