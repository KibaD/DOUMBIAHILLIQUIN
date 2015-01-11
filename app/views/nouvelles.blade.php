<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" >

<head>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <meta charset="UTF-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>
    <script type="text/JavaScript" src="js/cloud-carousel.1.0.5.js"> </script>
    <link rel="stylesheet" href="/fond.css" type="texte/css">
    <title>Nouvelles recettes</title>
</head>



<body>

    @extends('navbar')

    <div class="container">
    <header class="page-header">

        @section('contenu')
        @parent
        @stop

        <p>
            </br>
            </br>
            </br>
        </p>

        <div id="titre_principal">
            <h1> <center> Cooking Blog : Les actualités </center> </h1>
        </div>

    </header>
    </div>

    <section class="col-lg-12">

        <div class="col-md-1">
        <div class="row">
            </br>
        </div>
        </div>

        <div class="col-md-4">
        <div class="row">
            <aside>
                <h2>Record phénoménal : 26 000 Big Mac consommés </h2>
                <p> Ce record étonne: Donald A. Gorske, un américain, a décidé de faire le pari de manger un Big Mac par jour  à vie. </br>
                En Octobre 2012 , il en était à son 26 000 ème Big Mac mangé (en moins de 40 ans). </br>
                Etonnant: cet américain est toujours aussi maigre... </p>
                <center> <img src="http://docteurbonnebouffe.com/wp-content/uploads/2013/05/record-Le-plus-grand-nombre-de-Big-Mac-consommés.jpg" width=70% height=70% /> </center>
            </aside>
        </div>
        </div>

        <div class="col-md-1">
        <div class="row">
            </br>
        </div>
        </div>

        <div class="col-md-4">
        <div class="row">
            <aside>
                <h2>Derniers styles de restaurants à la mode: les japonais </h2>
                <p>Installation phénoménale ces dernières années sur Paris, les restaurants japonais à volonté...
                </p>
                <center> <img src="http://blog.tableetambiance.fr/wp-content/uploads/2011/04/buffet.jpg" alt="" id="fleche_bulle" width=70% height=70% /> </center>

            </aside>
        </div>
        </div>

        <div class="col-md-2">
        <div class="row">
            </br>
        </div>
        </div>

    </section>



    <section class="col-lg-12">

        <div class="col-md-1">
        <div class="row">
            </br>
        </div>
        </div>

        <div class="col-md-4">
        <div class="row">
            <aside>
                <h2>Restaurant coup de coeur </h2>
                <p>Le 6 New York à Paris: nourriture excellente avec un service rapide. </br>
                Vous craquerez de suite pour la vue sur la tour Eiffel et la Seine.
                </p>
                <center> <img src="http://image-restaurant.linternaute.com/image/300/paris-6-new-york-27068.jpg" width=70% height=70% /> </center>
            </aside>
        </div>
        </div>

        <div class="col-md-1">
        <div class="row">
            </br>
        </div>
        </div>

        <div class="col-md-4">
        <div class="row">
            <aside>
                <h2>Un peu de diet... </h2>
                <p>N'oubliez pas de manger 5 fruits et légumes par jour!
                </p>
                <center> <img src="http://dajjalmagazine.e-monsite.com/medias/images/5fruits-legumes.jpg" width=70% height=70% /> </center>
            </aside>
        </div>
        </div>

        <div class="col-md-2">
        <div class="row">
            </br>
        </div>
        </div>

    </section>


</body>

    @extends('footer')
    @section('nav')
    @parent
    @stop

</html>

