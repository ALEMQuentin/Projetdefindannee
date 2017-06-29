@extends('layouts.header')

@section('content')
<div class="col-sx-12 col-sm-12 col-md-12 col-lg-12 titre-article">
	<h2>{{ $data->title }}</h2>
</div>
<main class="clearfix">
<div class="container-fluid img-article">
	<div class="row">
		<img class="col-xs-12 col-sm-12 col-md-12 col-lg-12" src="{{ asset('img-content/'. $data->media_link) }}" alt="article">
	</div>
</div>
	<section class="container article">
		<div class="row">
		<div class="col-sx-12 col-sm-12 col-md-12 col-lg-12">
			<p>{{ $data->resume }}</p>
		</div>
		</div>
	</section>
</main>
@endsection