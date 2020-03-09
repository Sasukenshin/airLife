
@extends('layouts.master')
@section('content')

<head>
    <title>Panier</title>
</head>


    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12" >


                    <h2 class="panel-title text-center">Mon panier</h2>


                        <div class="row">

                                @if (isset($lignespanier))
                                <div class="col-md-12">
                                    <input type="hidden" id="panierid" value="{{$data['panierid']}}">
                                    <table id="notification" class="table">
                                    <thead class="bg-light">
                                    <tr class="border-0">
                                        <th class='border-0 text-center'> Image </th>
                                        <th class='border-0 text-center'> Article </th>
                                        <th class='border-0 text-center'> Quantité </th>
                                        <th class='border-0 text-center'> Prix </th>
                                        <th class='border-0 text-center'> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody id="allData">
                                    @foreach ($lignespanier as $uneL)
                                        <tr id="tr{{ $uneL->lignepanierid }}">
                                            <td class="text-center">

                                            </td>
                                            <td class="text-center">
                                                {{ $uneL->libelle }}
                                            </td>
                                            <td class="text-center">
                                                <button onclick="lessQte({{ $uneL->lignepanierid }})"><i class="far fa-minus-square"></i></button>
                                                <input id="qte{{$uneL->lignepanierid}}" type="text" value="{{ $uneL->qte }}" style="width:40px;" disabled>
                                                <button onclick="addQte({{ $uneL->lignepanierid }})"> <i class="far fa-plus-square"></i></button>
                                            </td>
                                            <td class="text-center">
                                                <input id="prix{{$uneL->lignepanierid}}" value=" {{ $uneL->prix }}" style="width:60px;" disabled>
                                            </td>
                                            <td class="text-center">
                                                <button onclick="deleteLignePanier({{ $uneL->lignepanierid }})"> <i class="far fa-trash-alt"></i>  </button >
                                            </td>


                                        </tr>
                                    @endforeach
                                    </tbody>

                            </table>


                                </div>




</div>
</div>

</div>
        <div class="row">

            <div class="col-md-4">


                <div class="col-md-12">
                    <div class="text-primary mt-2">Information</div>
                    @if (isset($userinfo))

                        <div class="text-center">
                            Bienvenue <b>{{$userinfo->firstname}}  {{$userinfo->lastname}}!</b><br>
                            ({{$userinfo->email}}) <br>
                            <a href="javascript:void(0);" onclick="deconnexion()" title="Se déconnecter"><i class="fas fa-sign-out-alt"></i></i>Se déconnecter</a>

                        </div>

                        <div class="text-primary mt-2">Adresse de livraison</div>
                        <div class="form-group">
                            <label class="col-md-6">Nom <b>*</b> : </label>
                            <input type="text"  class="col-md-5" placeholder="Nom" id="Flastname" name="Flastname" value="{{$userinfo->lastname}}" required >
                            @if($errors->has('Flastname2'))
                                <p class="text-danger">{{ $errors->first('Flastname2') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-md-6">Prénom <b>*</b> : </label>
                            <input type="text"  class="col-md-5" placeholder="Prénom" id="Ffirstname" name="Ffirstname" value="{{$userinfo->firstname}}" required>
                            @if($errors->has('Ffirstname2'))
                                <p class="text-danger">{{ $errors->first('Ffirstname2') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-6">Adresse <b>*</b> : </label>
                            <input type="text" class="col-md-5" placeholder="Adresse" id="Faddress" name="Faddress" value="{{$userinfo->address}}" required>
                            @if($errors->has('Faddress2'))
                                <p class="text-danger">{{ $errors->first('Faddress2') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-6">Ville  <b>*</b> : </label>
                            <input type="text" class="col-md-5" placeholder="Ville" id="Fville" name="Fville" value="{{$userinfo->city}}" required>
                            @if($errors->has('Fville2'))
                                <p class="text-danger">{{ $errors->first('Fville2') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-6">Code postal  <b>*</b> : </label>
                            <input type="text" class="col-md-5" placeholder="Code postal" id="Fcp" name="Fcp" value="{{$userinfo->postalCode}}" required>
                            @if($errors->has('Fcp2'))
                                <p class="text-danger">{{ $errors->first('Fcp2') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-6">Numéro de téléphone <b>*</b> : </label>
                            <input type="phone"  class="col-md-5" placeholder="Numero de téléphone" id="Ftel" name="Ftel" value="{{$userinfo->num_tel}}" required>
                            @if($errors->has('Ftel2'))
                                <p class="text-danger">{{ $errors->first('Ftel2') }}</p>
                            @endif
                        </div>

                    @else
                        <form action="connexion" method="post" id="formulaireConnexion">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input class="form-control form-control-lg" name="login" type="text" placeholder="Identifiant" autocomplete="off" required="" value="{{ old('login') }}">
                                @if($errors->has('login'))
                                    <p class="text-danger">{{ $errors->first('login') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" name="mdp" type="password" placeholder="Mot de passe" required="">
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Se souvenir de moi</span>
                                </label>
                            </div>
                            <button  id= "submitConnexion" class="btn btn-primary btn-lg btn-block">Se connecter</button>
                        </form>
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                    @endif

                </div>

            </div>
            <div class="col-md-4">

                <div class="text-primary mt-2">Moyen de paiement</div>
                <div class="content_etape">

                    @foreach ($moyenpaiements as $unP)
                        <div>
                            <label>

                                    @if($unP->moyenpaiementid == $data['moyenpaiementid'])
                                            <input type="radio" checked name="moyenpaiement" value="{{$unP->moyenpaiementid}}" id="{{$unP->moyenpaiementid}}" onclick="updateMoyenPaiement();" style="display:inline-block;" >
                                    @else
                                            <input type="radio" name="moyenpaiement" value="{{$unP->moyenpaiementid}}" id="{{$unP->moyenpaiementid}}" onclick="updateMoyenPaiement();" style="display:inline-block;" >
                                    @endif
                                    <strong>{{$unP->libelle}}</strong>


                            </label>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-md-4">

                <div class="text-primary mt-2">Mode de livraison</div>
                <div class="content_etape">

                    @foreach ($moyenlivraisons as $unM)
                        <div>
                            <label>
                                <div>
                                    @if($unM->moyenlivraisonid == $data['moyenlivraisonid'])
                                        <input type="radio" name="modelivraison"  value="{{$unM->moyenlivraisonid}}" class="modeLivraison" checked id="{{$unM->moyenlivraisonid}}" onclick="updateModeTransport();"style="display:inline-block;" >
                                    @else
                                        <input type="radio" name="modelivraison"  value="{{$unM->moyenlivraisonid}}" class="modeLivraison" id="{{$unM->moyenlivraisonid}}" onclick="updateModeTransport();" style="display:inline-block;" >
                                    @endif
                                    <strong>{{$unM->libelle}}</strong>

                                    <span>{{$unM->prix}} euros</span>



                                </div>
                            </label>
                        </div>
                    @endforeach
                </div>

            <div class="text-primary mt-2">TOTAL DE VOTRE COMMANDE</div>
            <table class="col-md-12" cellspacing="0" cellpadding="0">
                <tbody><tr>
                    <td align="float-right"><strong>Sous-total TTC :</strong></td>
                    <td align="float-right"><div   class="float-right"  id="sous_total_ttc">{{$data['sousTotalTcc']}} €</div></td>
                </tr>


                <tr>
                    <td align="float-right"><strong >Frais de port TTC :</strong></td>
                    <td align="float-right"><div class="float-right" id="frais_port">{{$data['fraisport']}} €</div></td>
                </tr>
                <tr>
                    <td align="float-right"><strong >Total TVA :</strong></td>
                    <td align="float-right"><div class="float-right" id="total_tva" >{{$data['totalTva']}} €</div></td>
                </tr>
                <tr>
                    <td class="text-primary" align="float-right">Total TTC :</td>
                    <td class="text-primary" align="float-right">
                        <div class="text-primary float-right" id="total_ttc" >{{$data['totalTtc']}} €</div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

</div>
    <div class="row">
        <div class="valider_commande col-md-12 float-right">
            <form action="validerPanier" method="post" id="formulairePanier">
                {{ csrf_field() }}
            <div class="box_cgv ">
               <input type="checkbox" name="cgv" id="cgv" class="checkStyle" required><span>j'ai lu et j'accepte les</span>
                <a href="{{route('cgu')}}" title="Conditions génerales de vente" id="linkcgv" target="_blank"> Conditions génerales de vente</a>
            </div>

                <input type="hidden" name="panierid" value="{{$data['panierid']}}">
                <input type="hidden" name="Flastname2" id="Flastname2" value="">
                <input type="hidden" name="Ffirstname2" id="Ffirstname2" value="">
                <input type="hidden" name="Faddress2" id="Faddress2" value="">
                <input type="hidden" name="Fville2" id="Fville2" value="">
                <input type="hidden" name="Fcp2" id="Fcp2" value="">
                <input type="hidden" name="Ftel2" id="Ftel2" value="">
                @if (isset($userinfo))
                <input type="hidden" name="Fmail" id="Fmail" value="{{$userinfo->email}}">
                @endif

            <div class="text-center">
                    <button type="submit" id="submitPanier" class="valid_client opacity_hover">Valider le panier</button>

            </div>
            </form>
        </div>
        <div id="col-md-12">
            <!--Texte du panier pour la loi Chatel-->
            <div class="texteperso"><p style="text-align: justify; "><span style="color:#e63937;"><strong>*</strong></span> Conformément au code de la consommation, vous avez un droit de rétractation dans un délai de 14 jours à partir de la livraison, sauf sur les produits visés par ce code.</p>
            </div>
        </div>
    </div>
@else

    <h2>Panier vide</h2>
    <br>
    <div class="row">
        <div class="col-md-12">
            Votre panier est vide actuellement..
        </div>
        @if (!auth()->check())
            <div class="col-md-12">
                Si vous avez déjà un compte <a href="{{route('connexion')}}">Connectez-vous</a> pour voir votre panier. Si ce n'est pas encore le cas, vous pouvez <a href="inscription">vous inscrire.</a>
            </div>
        @endif
    </div>

@endif
    </div>

<script>

    $(document).ready(function(){
        $("#submitPanier").click(function(){
            if($("#Flastname").val() != "")
                 $("#Flastname2").val($("#Flastname").val());
            if($("#Ffirstname").val() != "")
                 $("#Ffirstname2").val($("#Ffirstname").val());
            if($("#Faddress").val() != "")
                 $("#Faddress2").val($("#Faddress").val());
            if($("#Fville").val() != "")
                 $("#Fville2").val($("#Fville").val());
            if($("#Fcp").val() != "")
                 $("#Fcp2").val($("#Fcp").val());
            if($("#Ftel").val() != "")
                $("#Ftel2").val($("#Ftel").val());
            $("formulairePanier").submit(); // Submit the form
        });

        $("#submitConnexion").click(function(){
            $("formulaireConnexion").submit(); // Submit the form
        });
    });
    function updateModeTransport(){

            var radioValue = $("input[name='modelivraison']:checked").val();
            var idpanier = $('#panierid').val();
          //  var radioValue = $('.modeLivraison').val();
            if(radioValue){
                $.ajax({
                    url:"{!! URL::to('updateTransport')!!}",
                    type: 'POST',
                    data: {_token: '{{csrf_token()}}', radioValue : radioValue, idpanier : idpanier},
                 success: function (data, statut) {


                        $("#sous_total_ttc").text(data["sous_total_ttc"]+" €");
                        $("#frais_port").text(data["frais_port_ttc"]+" €");
                        $("#total_tva").text(data["total_tva"]+" €");
                        $("#total_ttc").text(data["total_ttc"]+" €");
                    }
            });
        }

    }


    function updateMoyenPaiement(){

        var radioValue = $("input[name='moyenpaiement']:checked").val();
        var idpanier = $('#panierid').val();
        //  var radioValue = $('.modeLivraison').val();
        if(radioValue){
            $.ajax({
                url:"{!! URL::to('updateMoyenPaiement')!!}",
                type: 'POST',
                data: {_token: '{{csrf_token()}}', radioValue : radioValue, idpanier : idpanier},
                success: function (data, statut) {
                }
            });
        }

    }


    function addQte(lignepanierid)
    {
        $.ajax({
        url:"{!! URL::to('addQte')!!}",
        type: 'POST',
        data: {_token: '{{csrf_token()}}', lignepanierid : lignepanierid},

    success: function (data, statut) {

        $("#qte"+lignepanierid).val(" "+ data["qte"]);
        $("#prix"+lignepanierid).val(" " +data["prix"]);
        $("#sous_total_ttc").text(data["sous_total_ttc"]+" €");
        $("#frais_port").text(data["frais_port_ttc"]+" €");
        $("#total_tva").text(data["total_tva"]+" €");
        $("#total_ttc").text(data["total_ttc"]+" €");
    }


    })
    }

    function lessQte(lignepanierid) {

        $.ajax({
        url:"{!! URL::to('lessQte')!!}",
        type: 'POST',
        data: {_token: '{{csrf_token()}}', lignepanierid : lignepanierid},

    success: function (data, statut) {

        $("#qte"+lignepanierid).val(" "+data["qte"]);
        $("#prix"+lignepanierid).val(" "+data["prix"]);

        $("#sous_total_ttc").text(data["sous_total_ttc"]+" €");
        $("#frais_port").text(data["frais_port_ttc"]+" €");
        $("#total_tva").text(data["total_tva"]+" €");
        $("#total_ttc").text(data["total_ttc"]+" €");

    }


    })
    }
    function deleteLignePanier(lignepanierid) {
        $.ajax({
        url:"{!! URL::to('deleteLignePanier')!!}",
        type: 'POST',
        data: {_token: '{{csrf_token()}}', lignepanierid : lignepanierid},

    success: function (data, statut) {

    // $("#tr+data").remove();
        window.location = "panier";
    }

    })
    }

    function deconnexion() {
     $.ajax({
        url:"{!! URL::to('deconnexionPanier')!!}",
        type: 'POST',
        data: {_token: '{{csrf_token()}}'},
        success: function (data, statut) {

            window.location = "panier";
        }

    });

}

</script>
@stop
