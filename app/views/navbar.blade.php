<html>
@section('contenu')

    <nav>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
        <div class="navbar-header">
        <form class="navbar-form navbar-right" role="form" action="connexion" method="POST">
            <div class="form-group">
                <input type="text" name='nom' placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name='password' placeholder="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
            <a class="btn btn-success" href="/inscription" role="button">S'inscrire</a>
        </form>

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"> Cooking Time</a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Accueil</a></li>
                <li> <a href="salees">Recettes Salées</a></li>
                <li class=""><a href="sucree">Recettes Sucrées</a></li>
                <li> <a href="nouvelles">News</a></li>
                <li> <a href="critiques">Critiques</a></li>
            </ul>
        </div> <!--/.nav-collapse -->    </div>
        </div>
    </nav>
@show

</html>