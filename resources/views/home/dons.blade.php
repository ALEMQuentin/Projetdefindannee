@extends('layouts.header')

@section('content')
<main class="container">
<div class="row"> 
	<section class="col-xs-12 col-sm-12 col-md-4 col-lg-4 choisir-don">
		<article>
			<h2>mon don</h2>
			<div class="une-fois">
				<h3>je donne une fois</h3>
				<span>60 €</span>
				<span>80 €</span>
				<span>100 €</span>
				<p>Autre Montant<input type="text" name="montant">€</p>
			</div>
			<h2>ou</h2>
			<div class="mois">
				<h3>Je donne tous les mois</h3>
				<span>10 €</span>
				<span>15 €</span>
				<span>20 €</span>
				<p>Autre Montant<input type="text" name="montant">€</p>
			</div>
		</article>
	</section>
	<section class="col-xs-12 col-sm-12 col-md-4 col-lg-4 coordonee">
		<h2>Mes coordonnées</h2>
		<div>
			<label for="mail">Mail</label> 
			<input type="email" id="mail" name="mail">
		</div>
		<div>
			<label for="mme">Mme</label> <input type="radio" id="mme" name="civilite" checked>
			<label for="m">M.</label> <input type="radio" id="m" name="civilite">
		</div>
		<div>
			<label for="nom">Nom *</label> 
			<input type="text" id="nom" name="nom"> 
		</div>
		<div>
			<label for="prenom">Prenom *</label> 
			<input type="text" id="prenom" name="prenom" required>
		</div>
		<div>
			<label for="date">Date de naissance *</label> 
			<input type="date" id="couleur" name="couleur">
		</div>
		<div>
			<label for="adresse">Adresse *</label> 
			<input type="text" id="adresse" name="adresse"> 
		</div>
		<div>
			<label for="complement-adresse">Complément adresse</label> 
			<input type="text" id="complement-adresse" name="complement-adresse"> 
		</div>
		<div>
			<label for="">Code postal</label> 
			<input type="text" id="code-postal" name="code-postal" maxlength="5"> 
		</div>
		<div>
			<label for="">Ville</label> 
			<input type="text" id="ville" name="ville"> 
		</div>
	</section>
	<section class="col-xs-12 col-sm-12 col-md-4 col-lg-4 paiement">
		<h2>Mon réglement</h2>
		<img class="paiement-securise" src="img-layout/paiement-securise.png" alt="paiement-securise">
		<div class="carte">
		<p>Séléctionnez votre mode de paiement</p>
			<label for="visa"><img src="img-layout/cb.png" alt="cb"></label> <input type="radio" id="visa" name="civilite" checked>
			<label for="cb"><img src="img-layout/visa.png" alt="visa"></label> <input type="radio" id="cb" name="civilite">
			<label for="mastercard"><img src="img-layout/Mastercard.png" alt="mastercard"></label> <input type="radio" id="mastercard" name="civilite">
		</div>
		<div class="carte-bancaire">
			<label for="carte-bancaire">Saisissez votre numéros de carte bancaire</label> 
			<input type="text" name="carte-bancaire" maxlength="16">
		</div>
		<p>Date d'expiration</p>
		<div class="expiration">
			<select name="card-mois" id="card-mois">
				<option value="---"></option>
				<option value="01">01 / Janvier</option>
				<option value="02">02 / Février</option>
				<option value="03">03 / Mars</option>
				<option value="04">04 / Avril</option>
				<option value="05">05 / Mai</option>
				<option value="06">06 / Juin</option>
				<option value="07">07 / Juillet</option>
				<option value="08">08 / Août</option>
				<option value="09">09 / Septembre</option>
				<option value="10">10 / Octobre</option>
				<option value="11">11 / Novembre</option>
				<option value="12">12 / Décembre</option>
			</select>
		</div>
		<div class="expiration">
			<label></label> 
			<select name="card-ans" class="card-ans">
				<option value="---"></option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
				<option value="2025">2025</option>
				<option value="2026">2026</option>
				<option value="2027">2027</option>
			</select>
		</div>
		<div class="cryptogramme">
			<label for="Cryptogramme">Cryptogramme</label>
			<input type="text" name="Cryptogramme" id="Cryptogramme" maxlength="3" autocomplete="off">
			<p>Le cryptogramme est constitué des 3 derniers chiffres qui sont au dos de votre carte bancaire</p>
		</div>
		<div class="choix-paiement">
			<span><a href="#">Paiement par cb</a></span>
			<span><a href="#">PayPal</a></span>
			<span><a href="#">Paiement par chéque</a></span>
		</div>
	</section>
	<section class="clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12 pourquoi">
		<h2>Pourquoi</h2>
		<p>Votre don sert directement à la mise en œuvre des projets de Yalla! sur le terrain et notamment au paiement des indemnités des professeurs et animateurs, du loyer des locaux de l’école, des fournitures scolaires et celles destinées aux activités socio-éducatives.Les frais administratifs de Yalla ! sont réduits au minimum afin que l’ensemble des dons bénéficient aux enfants et aux bénévoles locaux. Les dépenses administratives de Yalla! représentent 2% du budget de l’association, alors que 98% des fonds sont dédiés à la mise en oeuvre des projets sur le terrain.</p>
	</section>
</div>
</main>
	<script>
		var spn = document.querySelectorAll()
	</script>
@endsection