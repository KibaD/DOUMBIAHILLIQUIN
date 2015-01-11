<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" >



<head>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <meta charset="UTF-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>
    <script type="text/JavaScript" src="js/cloud-carousel.1.0.5.js"> </script>
    <link rel="stylesheet" href="/fond.css" type="texte/css">
    <title>Cooking Blog </title>



    <script>

        $(document).ready(function(){
                  
                  var $carrousel = $('#carrousel'), // on cible le bloc du carrousel
                  $img = $('#carrousel img'), // on cible les images contenues dans le carrousel
                  indexImg = $img.length - 1, // on définit l'index du dernier élément
                  i = 0, // on initialise un compteur
                  $currentImg = $img.eq(i); // enfin, on cible l'image courante, qui possède l'index i (0 pour l'instant)
                  
                  $img.css('display', 'none'); // on cache les images
                  $currentImg.css('display', 'block'); // on affiche seulement l'image courante
                  
                  //$carrousel.append('<div class="controls"> <span class="prev">Precedent</span> <span class="next">Suivant</span> </div>');
                          
                  
                  $('.next').click(function(){ // image suivante
                                   
                                   i++; // on incrémente le compteur
                                   
                                   if( i <= indexImg ){
                                   $img.css('display', 'none'); // on cache les images
                                   $currentImg = $img.eq(i); // on définit la nouvelle image
                                   $currentImg.css('display', 'block'); // puis on l'affiche
                                   }
                                   else{
                                   i = indexImg;
                                   }
                                   
                                   });
                  
                  $('.prev').click(function(){ // image précédente
                                   
                                   i--; // on décrémente le compteur, puis on réalise la même chose que pour la fonction "suivante"
                                   
                                   if( i >= 0 ){
                                   $img.css('display', 'none');
                                   $currentImg = $img.eq(i);
                                   $currentImg.css('display', 'block');
                                   }
                                   else{
                                   i = 0;
                                   }
                                   
                                   });
                  
                  function slideImg(){
                  setTimeout(function(){ // on utilise une fonction anonyme
                             
                             if(i < indexImg){ // si le compteur est inférieur au dernier index
                             i++; // on l'incrémente
                             }
                             else{ // sinon, on le remet à 0 (première image)
                             i = 0;
                             }
                             
                             $img.css('display', 'none');
                             
                             $currentImg = $img.eq(i);
                             $currentImg.css('display', 'block');
                             
                             slideImg(); // on oublie pas de relancer la fonction à la fin
                             
                             }, 2500); // on définit l'intervalle à 7000 millisecondes (7s)
                  }
                  
                  slideImg(); // enfin, on lance la fonction une première fois
                  
                  });

    </script>

</head>


@extends('navbar')

<body>

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
            <h1> <center> Cooking Blog </br> Accueil </center> </h1>
        </div>
    </div>
    </header>



    <section class="col-lg-12">
    <div id = "carrousel" style="overflow:scroll;">

        <center> <img class = "cloudcarousel" src="/amusee.png" alt="Flag 1 Description" title="Amuse Bouche"  /> </center>
        <center><img class = "cloudcarousel" src="/cafee.png" alt="Flag 2 Description" title="Café Gourmand" /></center>
        <center><img class = "cloudcarousel" src="/terrinee.png" alt="Flag 3 Description" title="Terrines" /></center>

    </div>
    </section>


    <section class="col-lg-12">

    <div class="col-md-1">
    <div class="row">
        </br>
        </br>
    </div>
    </div>


    <div class="col-md-4">
    <div class="row">
        <aside>
            <h2>Notre blog</h2>
            <p>Cooking blog est un blog sur la cuisine.</br>
            Ce blog propose dans un premier temps de recettes salées, sucrées que l'on peut trouver en cliquant sur les onglets "recettes salées" et "recettes sucrées".</br> 
            La rebrique News affichera des actualités: un restaurant coup de coeur, un record qui marque etc.    </br>
            </p>
        </aside>
    </div>
    </div>

    <div class="col-md-1">
    <div class="row">
        </br>
        </br>
    </div>
    </div>

    <div class="col-md-4">
    <div class="row">
    <aside>
        <h2>Création d'un système de gestion d'objet et son API (ex : blog, bibliothèque...)</h2>
        <p>
Afin de réaliser ce projet, nous avons décidé de créer un blog de cuisine assez simple. Chaque utilisateur sera libre de commenter les recettes. </br>
Les objectifs conceptuels et pratiques ont été respecté au maximum dans ce projet. </br>
Nous nous sommes servis de laravel, nous avons utilisé sur toutes les pages des templates blade et des layout.
Nous avons utiliser les options afficher, ajouter et supprimer.</br>
Un défaut de notre site est de ne pas avoir gérer les utilisateurs à l’aide du module Laravel: un commentaire déjà posté peut ainsi donc être supprimé par tout le monde. Cependant, en mettant « Email:admin » et « mdp:admin », cela permet de se connecter en tant qu'admnin sans pour autant gérer nos utilisateurs. </br>
La mise en forme a été réalisé par CSS et bootstrap. </br>
Afin de faire le carrousel sur la page d’accueil, nous avons utilisé du javascript.</br>
</p>
    </aside>
    </div>
    </div>

    </section>

    @extends('footer')
    @section('nav')
    @parent
    @stop

</body>
</html>