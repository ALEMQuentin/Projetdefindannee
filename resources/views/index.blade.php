@extends('layouts.header')

@section('content')
<section class="container-fluid slide">
	<div class="row">
		<img class="col-xs-12 col-sm-12 col-md-12 col-lg-12" src="{{ asset('img-content/inner-banner.jpg') }}">
		<section class="clearfix apropos">
				<article class="col-xs-12">
					<figure>
						<img src="img-content/apropos.jpg">
					</figure>
					<figcaption>
						<h2>Qui somme-nous ?</h2>
						<p>Yalla ! est dirigée par un Bureau composé de quatre membres, qui rendent compte des actions de Yalla ! aux adhérents de l'association à travers des rapports d'activités concernant chaque projet et lors des Assemblées générales tenues une fois par an à Paris.</p>
					</figcaption>
				</article>
		</section>
	</div>
</section>
<main class="container clearfix">
	<div class="row">
		<section class="clearfix actualites">
			@foreach($datas as $key => $value)
				@if($key%2 === 0 )
					<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 article">
				@else
					<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 articles">
				@endif
						<figure class="survole"><a href="/article/{{$value->id}}"><img src="img-content/{{$value->media_link}}"></a></figure>
						<div class="date">
							<p>{{$value->created_at}}</p>
						</div>
						<figcaption>
							<h2>{{$value->title}}</h2>
							<p>{{$value->resume}}</p>
							<a href="/article/{{$value->id}}">Lire la suite</a>
						</figcaption>
					</article>
			@endforeach
		</section>
	</div>
</main>
<div class="clearfix container-fluid">
<section class=" row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 association">
		<h2>je veux aider l'association</h2>
		<div class="don-membre">
			<span><a href="#">faire un don</a></span>
			<span><a href="#">devenir membre</a></span>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newsletter">
		<h2>inscrivez vous a notre newsletter</h2>
		<label for="newsletter"></label>
		<div class="mail">
			<input type="text" name="email" placeholder="votre mail">
			<input type="submit" name="" value="ok" placeholder="ok">
		</div>
	</div>
</section>

@endsection
