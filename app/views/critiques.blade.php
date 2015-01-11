<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" >


<head>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <meta charset="UTF-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>
    <script type="text/JavaScript" src="js/cloud-carousel.1.0.5.js"> </script>
    <link rel="stylesheet" href="/fond.css" type="texte/css">
    <title> Critiques </title>

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

</div>
</header> 

    <section class="col-lg-12">

<div class="col-md-1">
<div class="row">

</div>
</div>

<div class="col-md-6">
<div class="row">
    @foreach($entries as $entry)
        <p>{{ $entry->comment }}</p>
        <p>Posted on {{ $entry->created_at->format('M jS, Y') }}  by
            <a href="mailto:{{ $entry->email }}">{{ $entry->username}}</a>
        </p>
        <p>
            {{ Form::open(array('url'=>'critiques/delete', 'class' => 'inline', 'method' => 'DELETE')) }}
            {{ Form::hidden('id',$entry->id)}}
            {{ Form::submit('Delete')}}
            {{ Form::close()}}

            {{ HTML::linkRoute('edit_critiques', 'Edit', array($entry->id), array('class' => 'btn')) }}

        </p>
        <hr />
    @endforeach

    <form action="critiques" method="POST">
        <table border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="Name" value="" size="30" maxlength="50"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="Email" value="" size="30" maxlength="100"></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td><textarea name="Comment" rows="5" cols="30"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit">
            <input type="reset" name="reset" value="reset"></td>
        </tr>
        </table>
    </form>
</div>
</div class="row">

<div class="col-md-5">
<div class="row">

</div>
</div>

    </section>

    <section class="col-lg-12">
<p>
</br>
</br>
</br>
</br>
</p>
    </section>


    @extends('footer')
    @section('nav')
    @parent
    @stop


</BODY>
</HTML>
