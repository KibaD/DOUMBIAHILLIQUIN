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

</body>

@extends('footer')
 @section('nav')
		    @parent
	 @stop



</html>

