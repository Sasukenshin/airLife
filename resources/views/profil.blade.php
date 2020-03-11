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

                {!! Form::open(['url' => '/modificationProfil']) !!}
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
                                    <li><span class="fas fa-map-marker" style="width:40%;">&nbsp Adresse : </span>{{$unC->ADDRESS}}</li>
                                    <li><span class="fas fa-map-marker" style="width:40%;">&nbsp Code postal : </span>{{$unC->POSTALCODE}}</li>
                                    <li><span class="fas fa-map-marker" style="width:40%;">&nbsp Ville : </span>{{$unC->CITY}}</li>
                                    <li><span class="fas fa-phone" style="width:40%;"> Numero de téléphone : </span>{{$unC->NUM_TEL}}</li>
                                    <li><span class="fas fa-at" style="width:40%;"> Email : </span>{{$unC->EMAIL}}</li>


                                </ul>

                                <div class="panel-footer">


                                    <button type="submit"data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Editer profil</button>
                                    <a href="{{url( '/deconnexion') }}"data-original-title="Se deconnecter" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="fas fa-power-off"> Se deconnecter</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop
