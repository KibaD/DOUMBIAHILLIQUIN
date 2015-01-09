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
        <p>Le but de ce blog répond à un projet proposé dans le cadre de la 4ème année.</br>
        Nous avons réalisé un blog de cuisine afin d'utiliser les fonctions de laravel (gestion d'une base de données), de bootstrap, de JavaScript, et pour finir de blade. </br>
        Dans un premier onglet, on pourra trouver quelques recettes salées, dans un second onglet, des recettes sucrées. </br>
        Si nous sommes en tant qu'administrateur, nous pouvons rajouter des recettes nous mêmes, qui se situeront dans l'onglet "New". </br>
        Pour finir, chaque personne peut commenter dans l'onglet "Critique" ou bien en cliquant sur "Réagissez" sous les photos des recettes salées et sucrées.
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
            <h2>À propos Kiba et Laura</h2>
            <p> Nous sommes deux étudiants en 4ème année à l'ESIEA. Nous avons tous les deux intégrés l'école en première année et nous avons pris l'habitude de travailler ensemble. C'est pour cela que nous avons décidé de réaliser ce site web ensemble. </p>
        </aside>
    </div>
    </div>

</section>

<footer class="row">


<div class="col-md-3">
</div>

<div class="col-md-1">
</div>

<div class="col-md-2">
</div>

<div class="col-md-3">
</br>
<img src="/esiea.jpg" alt="Flag 1 Description" title="Flag 1 Title" width=50% height=50%  />
</div>
</div>

<div class="col-md-2">
</br>
</div>
</div>

</footer>


</body>
</html>