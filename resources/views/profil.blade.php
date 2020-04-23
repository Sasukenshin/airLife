<!--View qui sert à voir son profil.-->
@extends('layouts.master')
@section('content')


   <style>
    .details li {
    list-style: none;
    }
    li {
    margin-bottom:10px;

    }
    </style>
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="container">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-md-8 col-xs-12 col-sm-6 col-lg-4">
                                <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                            </div>
                            <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                                <div class="container" style="border-bottom:1px solid black">
                                    <h1 class="panel-title">{{$unC->FIRSTNAME}} {{$unC->LASTNAME}}</h1>
                                </div>
                                <hr>
                                <ul class="container details">
                                    <li><p><span class="fas fa-map-marker" style="width:40%;"> Adresse : </span>{{$unC->ADDRESS}}</p></li>
                                    <li><p><span class="fas fa-phone" style="width:40%;"> Numero de téléphone : </span>{{$unC->NUM_TEL}}</p></li>
                                    <li><p><span class="fas fa-at" style="width:40%;"> Email : </span>{{$unC->EMAIL}}</p></li>

                                </ul>

                                <div class="panel-footer">
                                    <a href="{{url( '/modificationProfil') }}"data-original-title="Editer preference utilisateur" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="fas fa-edit"> Editer profil</i></a>
                                    <a href="{{url( '/modificationPreference') }}"data-original-title="Editer preference utilisateur" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="fas fa-edit"> Editer preference utilisateur</i></a>
                                    <a href="{{url( '/deconnexion') }}"data-original-title="Se deconnecter" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="fas fa-power-off"> Se deconnecter</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@stop
