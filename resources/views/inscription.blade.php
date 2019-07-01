@extends('layouts.master')
@section('content')

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container">
       <div id="connexion-contain">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Formulaire d'inscription</h3>
                <p>S'il vous plait, veuillez saisir vos informations</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nick" required="" placeholder="Identifiant" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" required="" placeholder="Mot de passe">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" placeholder="Confirmation du mot de passe">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Enregistrer mon compte</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Pour créer votre compte, veuillez accepter les <a href="#">conditions générales du site</a></span>
                    </label>
                </div>
                <div class="form-group row pt-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                        <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Déjà membre? <a href="logintmp" class="text-secondary">Se connecter ici.</a></p>
            </div>
        </div>
       </div>
    </form>
</body>

@stop