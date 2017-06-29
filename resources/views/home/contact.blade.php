@extends('layouts.header')

@section('content')
<main>
        <section class="section_page-contact">
            <div class="block-containers col-md-4 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <div class="align-contenu">
                    <h2 class="col-md-11 col-md-offset-1">Contact</h2>
                    <hr class="col-md-6 col-md-offset-2">
                    <h3 class="h3_page_contact col-md-10 col-md-offset-2">Adresse postal</h3>
                    <p class="para_contact col-md-9 col-md-offset-3">Yalla pour les Enfants</p>
                    <p class="para_contact col-md-9 col-md-offset-3">13, rue René Villeme - 75001 PARIS</p>

                    <h3 class="h3_page_contact col-md-10 col-md-offset-2">Mentions Légales</h3>
                    <p class="para_contact col-md-9 col-md-offset-3">Association Yalla! Pour les Enfants<br>
                        13, rue René Villerme – 75011 PARIS<br>
                        Directrice de publication : Mary<br> Lemeland-Mellionec<br>
                        Téléphone : +33 (0)6.17.77.71.22</p>


                    <h3 class="h3_page_contact col-md-10 col-md-offset-2">Hébergeur</h3>
                    <p class="para_contact col-md-9 col-md-offset-3">Hébergeur : OVH
                        2 rue Kellermann – 59100 Roubaix – France</p>
                </div>
            </div>
            <div class="block-containers_two col-md-4 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <div class="align-contenu_two">
                    <p class="para_align col-md-12">Pour toute demande de renseignements sur notre association, n’hésitez pas à nous envoyer un message</p>
                    <form class="form_page-contact col-md-12">
                        <label class="col-md-4 col-md-offset-3 col-sm-4 col-sm-offset-3 col-xs-12 label_page-contact">Nom</label>
                        <input class="col-md-4 col-md-offset-3 col-sm-4 col-sm-offset-3 col-xs-11" type="Name" name="" placeholder="Nom">
                        <label class="col-md-4 col-md-offset-3 col-sm-4 col-sm-offset-3 col-xs-12 label_page-contact">E-mail</label>
                        <input class="col-md-4 col-md-offset-3 col-sm-4 col-sm-offset-3 col-xs-11" type="e-mail" name="" placeholder="E-mail">
                        <label class="col-md-9 col-md-offset-3 col-sm-4 col-sm-offset-3 col-xs-12 label_page-contact">Message</label>
                        <input class="textarea-block col-md-8 col-sm-4 col-sm-offset-3 col-md-offset-3 col-xs-11" type="textarea" name="" placeholder="écrivez votre message">
                        <input class="btn_message col-md-4 col-md-offset-4 col-xs-offset-5" type="submit" name="">
                    </form>
                </div>
            </div>
        </section>

</main>
@endsection