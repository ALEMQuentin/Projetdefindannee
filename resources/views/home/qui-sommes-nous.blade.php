@extends('layouts.header')


@section('content')
<main>
    <div class="clearfix container">
        <div class="row">
            <section class="clearfix histoire col-sx-12 col-sm-12">
                <h2 class="deroule histoire">Notre Histoire <a href="">-</a></h2>
                <p class="content-1">Yalla! Pour les Enfants a été créée en juillet 2013 par des citoyens français connaisseurs de la Syrie et du Moyen-Orient, et soucieux du respect des droits l’Homme.</p>
                <p class="content-1">Cette initiative est née d’un triple constat:</p>
                <p class="content-1">La dégradation des conditions de vie des enfants syriens réfugiés et les besoins criant en terme d’éducation et de soutien psycho-social</p><p class="content-1">La volonté de la société française d’aider le peuple syrien tout en ayant des garanties sur la destination et l’utilisation de ses dons</p><p class="content-1">La multiplication d’initiatives lancées par les réfugiés syriens eux-mêmes et les communautés d’accueil nécessitant un soutien financier et technique.</p>
            </section>
            <section class="clearfix objectif col-xs-12 col-sm-12 obj">
                <h2 class="deroule objectif">Nos objectifs <a href="">-</a></h2>
                <h3 class="content-2">Garantir le droit a l'éducation et au developpement de l'enfant</h3>
                <p class="content-2">Permettre le développement de l’enfant dans un environnement sécurisé et adapté afin qu’il retrouve confiance en lui et panse ses blessures liées à l’exil et au conflit</p><p class="content-2">Remettre l’enfant à niveau et le réhabituer au rythme scolaire</p><p class="content-2">Intégrer l’enfant au sein du système scolaire classique afin qu’il puisse obtenir un diplôme et lui donner toutes les chances de succès dans sa vie future.</p><p class="content-2">L’enfant se réalise en tant qu’individu et s’intègre à la société dans laquelle il évolue.</p>
            </section>
        </div>
    </div>
    <div class="container-fluid img-connaitre content-2">
        <div class="row">
            <figure>
                <img class="col-xs-6 col-sm-6" src="img-content/photo-yalla.jpg"><img class="col-xs-6 col-sm-6" src="img-content/photo-yalla-2.jpg">
            </figure>
        </div>
    </div>
    <div class="container paix content-2">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h3 class="content-2">developper des mecanisme de construction de la paix</h3>
                <p class="content-2">Des bénévoles syriens et des libanais de toutes confessions, ethnies et origines socio-économiques travaillent ensemble autour d’un projet fédérateur et apprennent à se connaître dans un environnement positif, où priment l’égalité et le respect mutuel.</p><p>Enfants syriens et libanais de toutes origines se découvrent autour d’activités ludiques</p><p>Les relations entre les diverses communautés sont pacifiées</p>
            </div>
        </div>
    </div>
    <div class="container-fluid img-banner content-2">
        <div class="row">
            <figure>
                <img class="col-xs-6 col-sm-6" src="img-content/photo-yalla-5.jpg"><img class="col-xs-6 col-sm-6" src="img-content/photo-yalla-4.jpg">
            </figure>
        </div>
    </div>
    <section class="container clearfix equipe">
        <h2 class="deroule equipe">Notre équipe<a href="">-</a></h2>
        <article class="col-sx-12 col-sm-12 col-md-6 col-md-6 content-3">
            <figure><img src="img-content/mary.jpg"></figure>
            <figcaption>
                <h3>Mary LEMELAND-MELLIONEC</h3>
                <p>Présidente de l'association</p>
            </figcaption>
        </article>
        <article class="col-sx-12 col-sm-12 col-md-6 col-md-6 content-3">
            <figure><img src="img-content/sphie.jpg"></figure>
            <figcaption>
                <h3>Sophie FANUCCHI</h3>
                <p>Secrétaire et référente juridique</p>
            </figcaption>
        </article>
        <article class="col-sx-12 col-sm-12 col-md-6 col-md-6 content-3">
            <figure><img src="img-content/pierre.jpg"></figure>
            <figcaption>
                <h3>Pierre LEMELAND</h3>
                <p>Trésorier</p>
            </figcaption>
        </article>
        <article class="col-sx-12 col-sm-12 col-md-6 col-md-6 content-3">
            <figure><img src="img-content/melina.jpg"></figure>
            <figcaption>
                <h3>Mélina PELE</h3>
                <p>Vice-présidente et référente communication</p>
            </figcaption>
        </article>

    </section>
    </div>
</main>
<script type="text/javascript">
    let titles = document.querySelectorAll('h2');
    let firstSection = document.querySelectorAll('.content-1');
    let secSection = document.querySelectorAll('.content-2');
    let thirdSection = document.querySelectorAll('.content-3');


    for(let i = 0;i < titles.length; i++){
        titles[i].addEventListener('click', function(){
            console.log(this);
            if(this.classList.contains('histoire')){
                for(let j = 0; j < firstSection.length;j++){
                    firstSection[j].classList.toggle('hidden');
                }
            } else if(this.classList.contains('equipe')){
                for(let j = 0; j < thirdSection.length;j++){
                    thirdSection[j].classList.toggle('hidden');
                }
            } else if(this.classList.contains('objectif')){
                for(let j = 0; j < secSection.length;j++){
                    secSection[j].classList.toggle('hidden');
                }
            }
        })
    }
</script>
@endsection
