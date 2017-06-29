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
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Yalla') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/admin">
                                        Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="row container">
        <h1 class="col-md-10">Admin Zone</h1>
        <a class="btn btn-default col-md-2" href="admin/new-tag-or-categorie">new tag or categorie</a>
        <a class="btn btn-default col-md-2" href="admin/membres">Membre</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Title</td>
            <td>resume</td>
            <td>description</td>
            <td>tag</td>
            <td>catégorie</td>
            <td>Date de création</td>
            <td>action</td>
            <td>Modification</td>
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
                    <a class="btn btn-small btn-success" href="{{ URL::to('admin/post/' . $value->id) }}">Show/Edit</a>
                    <button class="btn btn-small btn-danger delete" value="{{ URL::to('admin/post/' . $value->id . '/delete') }}">Delete</button>
                </td>
                <td>
                    <a class="btn btn-small btn-default" href="{{ URL::to('admin/post-history/' . $value->id) }}">Historique</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="confirm container">
    </div>

    <div class="container">
        <a class="btn btn-default" href="/admin/new-post">new content</a>
        <a class="btn btn-default" href="/admin/post-delete">deleted post</a>
    </div>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let delete_links = document.querySelectorAll('button.delete');
        let confirmation = document.querySelector(".confirm");

        for(let i = 0; i < delete_links.length; i++) {
            delete_links[i].addEventListener('click', function(e){
                let titre = this.parentNode.parentNode.childNodes[0].textContent;
                let r = confirm("Etes vous sur de vouloir supprimer l'element " + titre);
                if(r === true){
                    document.location.href = this.value;
                }
            });
        }
    </script>
</body>
</html>