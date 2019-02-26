@extends('layouts.master')
@section('content')

<h1>Connexion</h1>

{!! Form::open(['url' => 'login']) !!}

<div class="col-md-8 col-md-offset-2">

    <div class="form-group">
        <input class="form-control col-md-11" placeholder="Login" name="login" type="text" required>

    </div>
    <div class="form-group">
        <input class="form-control col-md-11" placeholder="Mot de passe" name="pwd" type="password" required>
    </div>
    @if ( $erreur != null)
    <p>{{ $erreur }}</p>
    @endif
    <br/>
    <input class="btn btn-lg btn-success btn-block" type="submit" value="Se connecter">
</div>


{!! Form::close() !!}  
@stop


