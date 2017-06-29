
@extends('layouts.header')
@section('content')
	<main class="clearfix">
		<div class="container-fluid don-page-inscription">
			<div class="row">
				<h2 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 color-last">Espace membre</h2>
			</div>
		</div>
		<div class="container contenu-page-inscription">
			<div class="row">
				@if($data === 'email-pris')
					<div class="confirmation-email alert alert-danger">
						<p>Cette email est déja utilisé</p>
					</div>
				@elseif($data === 'email-cree')
					<div class="confirmation alert alert-success">
						<p>Votre inscription à était faite</p>
					</div>
				@endif
				<h3 class="subscribe col-xs-6 col-xs-offset-3">S'inscrire</h3>
				<form action="" method="post" class="height-page-inscription col-xs-12 clearfix">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<label for="email"></label>
					<input class="inpt_page-inscription col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" type="text" name="email" placeholder="Email">
					<label for="nom"></label>
					<input class="inpt_page-inscription col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" type="text" name="nom" placeholder="Nom">
					<label for="prenom"></label>
					<input class="inpt_page-inscription col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" type="text" name="prenom" placeholder="Prenom">
					<label for="adresse"></label>
					<input class="inpt_page-inscription col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" type="text" name="adresse" placeholder="Adresse">
					<label for="code-postale"></label>
					<input class="inpt-page-inscription col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" type="number" name="code_postale" placeholder="Code Postal">
					<label for="region"></label>
					<input class="inpt-page-inscription col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" type="text" name="region" placeholder="Région">
					<div class="btn-valider">
						<input class="valider col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-4 col-xs-offset-4" type="submit" name="">
					</div>
				</form>
			</div>
		</div>
	</main>
@endsection