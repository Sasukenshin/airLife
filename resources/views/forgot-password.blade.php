@extends('layouts.master')
@section('content')

<body>

    <div class="splash-container">
        <div id='connexion-contain'>
        <div class="card">
            <div class="card-header text-center"><a href="/ProjetSCU/public/"><img class="logo-img" src="img\logo.png" width="80px" height="80px" alt="logo"></a><span class="splash-description">S'il vous plait, veuillez saisir vos informations</span></div>
            <div class="card-body">
                <form>
                    <p>Nous allons vous envoyer un e-mail pour que vous puissiez modifier votre mot de passe</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Votre adresse électronique" autocomplete="off">
                    </div>
                    <div class="form-group pt-1"><a class="btn btn-block btn-primary btn-xl" href="../index.html">Changer de mot de passe</a></div>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Vous n'avez pas de compte ? <a href="inscription">Inscrivez-vous</a></span>
            </div>
        </div>
        </div>
    </div>

</body>

@stop