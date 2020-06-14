
@extends('layouts.master')
@section('content')

    <head>
        <title>Accueil</title>
    </head>


    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12" >


                <h1 class="panel-title text-center">Nos produits</h1>


                <div class="row">



                        @isset($articles)

                            @foreach ($articles as $unArt)
                                <div class="col-md-4  rounded  mb-5" style="margin-right:2%; background-color: white; min-height:650px;" >

                                        <input id="artid" name="artid" type="hidden" value=" {{ $unArt->artid }}">

                                    <div class="text-center mt-4" style="min-height:80%">
                                        <h2 >{{ $unArt->libelle }}</h2>
                                        </br>
                                        <img  src="img\capteur_img.png">


                                       <h3 class="mt-4 mb-4"> Description</h3>

                                        <h4>
                                        {{ $unArt->description }}
                                        </h4>
                                    </div>
                                    <div class="text-center">
                                     <h4>
                                        <span>Prix</span>
                                        <span> {{ $unArt->prix }} euros </span>
                                    </h4>
                                    </div>
                                        <button class="btn btn-primary btn-lg btn-block btnaddpanier" onclick="addpanier({{ $unArt->artid }})">Ajouter au panier</button>


                                </div>


                            @endforeach
                </div>
                        @endisset



                </div>
            </div>

        <!-- Modal -->
        <div class="modal fade" id="addArticleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=
                        </div><span aria-hidden="true">&times; Continuer mes achats</span></button>
                    </div>
                    <div class="modal-body" id="SuccessModal" style="overflow-x: scroll;">
                        //ajax success content here.

                    </div>
                </div>
            </div>
        </div>
        </div>



<script>



   function addpanier(artid)
   {
        $.ajax({
            url:"{!! URL::to('addpanier')!!}",
            type: 'POST',
            data: {_token: '{{csrf_token()}}', artid : artid},

            success: function (data, statut) {

                $("#SuccessModal").html("L'article "+data + " a été ajouté au panier. <a href = '{!! URL::to('panier') !!}' ><strong> Voir mon panier</strong></a>");

                $("#addArticleModal").modal('show');
                }


        })
    };


</script>
@stop
