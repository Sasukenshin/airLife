@extends('layouts.master')
@section('content')

        <div class="col-md-12 well well-md">

            <center><h1>Modification du profil</h1></center>
            <br><br>

            {!! Form::open(['url' => 'modifierProfil']) !!}
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-8 col-xs-12 col-sm-6 col-lg-4">
                            <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                        </div>
                        <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                            <div class="container" style="border-bottom:1px solid black">
                                <h2 class="panel-title">{{$unC->FIRSTNAME}} {{$unC->LASTNAME}}</h2>
                            </div>
                            <hr>
                            <ul class="container details">
                                <li> <label class="col-md-4 control-label"><i class="far fa-arrow-alt-circle-right"></i> Prénom : </label><input type="text"  style="width:150px;" value="{{$unC->FIRSTNAME}}" name="firstname"></li>
                                <li> <label class="col-md-4 control-label"><i class="far fa-arrow-alt-circle-right"></i> Nom : </label><input type="text"  style="width:150px;" value="{{$unC->LASTNAME}}" name="lastname"></li>
                                <li> <label class="col-md-4 control-label"><i class="fas fa-key"> </i> Mot de passe : </label><input type="password" style="width:150px;" value="*******" name="password"></li>
                                <li> <label class="col-md-4 control-label"><i class= "fas fa-phone"> </i> Numéro de téléphone : </label><input type="text"  style="width:150px;" value="NUMTEL" name="numerotel"></li>
                                <li> <label class="col-md-4 control-label"><i class= "fas fa-at"> </i> Email : </label><input type="email" style="width:150px;"value="{{$unC->EMAIL}}" name="mail"></li>

                            </ul>

                            <div class="panel-footer">

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Valider</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        @stop

