<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Yalla') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/screen.css') }}" rel="stylesheet">

</head>
<body>

<div class="content">
    <div class="logoadmin"><img src="{{ asset('img-layout/logo.png') }}" alt="logoa"> </div>
    <div id="app">
        <h1 class="title-admin">Voici les modification de l'article {{ $post->title }}</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>resume</td>
                    <td>description</td>
                    <td>tag</td>
                    <td>catégorie</td>
                    <td>Modification</td>
                    <td>action</td>
                </tr>
            </thead>
        <tbody>

        @foreach($datas as $key => $value)
        <tr>
            <td>{{ $value->title }}</td>
            <td>{{ $value->resume }}</td>
            <td>{{ $value->meta_description }}</td>
            <td>{{ $value->tag }}</td>
            <td>{{ $value->catégorie }}</td>
            <td>{{ $value->created_at }}</td>
            <td>
                <a class="btn btn-small btn-default" href="{{ URL::to('admin/post-restaure/' . $value->id . '/' . $post->id) }}">Restaurer</a>
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