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
    <link href="{{asset('css/screen.css')}}" rel="stylesheet">
    <link href="{{ asset('../font/') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="content">
    <div class="logoadmin"><img src="{{ asset('img-layout/logo.png') }}" alt="logo"> </div>
    <div id="app">

        <h1 class="title-admin">Gestion des tags</h1>
        <div class="container">
        @foreach($datas as $key => $value)
                @if($value->type === "tag")
                    <a href="/admin/new-tag-or-categorie/{{$value->id}}" class="btn btn-default" style="background:{{ $value->style }};color: white">
                        <span class="glyphicon glyphicon-remove"></span>{{ $value->title }}
                    </a>
                @endif
                @if($value->type === "categorie")
                    <li class="" style="background:{{ $value->style }};color: white">
                        <span class="glyphicon glyphicon-remove"></span>{{ $value->title }}
                    </li>
                @endif
        @endforeach
            <nav>
                <ul>
                    @foreach($datas as $key => $value)

                    @if($value->type === "categorie")
                        <li class="" style="background:{{ $value->style }};color: white">
                            <span class="glyphicon glyphicon-remove"></span>{{ $value->title }}
                        </li>
                    @endif
                    @endforeach
                </ul>
            </nav>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label for="title">title</label>
                <input type="text" name ="title" id="title" placeholder="title">
                <label for="type">Tag or Catégorie</label>
                <select id="type" name="type">
                    <option value="tag">tag</option>
                    <option value="categorie">Catégorie</option>
                </select>
                <label for="style">Color</label>
                <input type="text" name ="style" id="style" placeholder="Color" value="">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Valider</button>
                <a href="/admin" class="btn btn-default">Retour vers l'administration</a>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>