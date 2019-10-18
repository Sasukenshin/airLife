@extends('layouts.master')
@section('content')

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="post" action="{!! URL::to('inscription') !!}">
        {{ csrf_field() }}
       <div id="connexion-contain">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Formulaire d'inscription</h3>
                <p>S'il vous plait, veuillez saisir vos informations</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" name="login" type="text" placeholder="Identifiant" value="{{ old('login') }}" required="">
                    @if($errors->has('login'))
                        <p class="text-danger">{{ $errors->first('login') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="firstname" type="text" placeholder="Prénom" value="{{ old('firstname') }}" required="" >
                    @if($errors->has('firstname'))
                        <p class="text-danger">{{ $errors->first('firstname') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="lastname" type="text" placeholder="Nom"  value="{{ old('lastname') }}" required="">
                    @if($errors->has('lastname'))
                        <p class="text-danger">{{ $errors->first('lastname') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="email" type='email' placeholder="E-mail" value="{{ old('email') }}" required="">
                    @if($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="num_tel" type='tel' placeholder="Numero de téléphone" value="{{ old('num_tel') }}" required="">
                    @if($errors->has('num_tel'))
                        <p class="text-danger">{{ $errors->first('numTel') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="address" type='text' placeholder="Adresse" value="{{ old('address') }}" required="">
                    @if($errors->has('address'))
                        <p class="text-danger">{{ $errors->first('address') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="mdp" type="password"  placeholder="Mot de passe" required="">
                    @if($errors->has('mdp'))
                        <p class="text-danger">{{ $errors->first('mdp') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="mdp_confirmation" type="password" placeholder="Confirmation du mot de passe" required="">
                    @if($errors->has('mdp_confirmation'))
                        <p class="text-danger">{{ $errors->first('mdp_confirmation') }}</p>
                    @endif
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Enregistrer mon compte</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" required="" type="checkbox"><span class="custom-control-label">Pour créer votre compte, veuillez accepter les <a href="#">conditions générales du site</a></span>
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
                <p>Déjà membre? <a href="connexion" class="text-secondary">Se connecter ici.</a></p>
            </div>
        </div>
       </div>
    </form>
</body>

@stop