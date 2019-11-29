<!--View qui sert à voir son profil.-->
@extends('layouts.master')
@section('content')

<head>
    <title>Notifications</title>
</head>


    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12" >


                    <h2 class="panel-title text-center">Mon panier</h2>


                        <div class="row">

                                @if (isset($lignespanier))
                                <div class="col-md-12">
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
                                    <div class ="col-md-5 float-right">
                                        <div class="text-primary mt-2">TOTAL DE VOTRE COMMANDE</div>
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            <tbody><tr>
                                                <td align="float-right"><strong >Sous-total TTC :</strong></td>
                                                <td align="float-right"><div class="float-right" id="sous_total_ttc"></div></td>
                                            </tr>


                                            <tr>
                                                <td align="float-right"><strong >Frais de port TTC :</strong></td>
                                                <td align="float-right"><div class="float-right" id="frais_port"></div></td>
                                            </tr>
                                            <tr>
                                                <td align="float-right"><strong >Total TVA :</strong></td>
                                                <td align="float-right"><div class="float-right" id="total_tva" ></div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-primary" align="float-right">Total TTC :</td>
                                                <td class="text-primary" align="float-right">
                                                    <div class="text-primary float-right" id="total_ttc" ></div>
                                                </td>
                                            </tr>
                                            </tbody></table>
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
</div>
</div>

</div>

<script>
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

function lessQte(lignepanierid)
{

$.ajax({
url:"{!! URL::to('lessQte')!!}",
type: 'POST',
data: {_token: '{{csrf_token()}}', lignepanierid : lignepanierid},

success: function (data, statut) {

$("#qte"+lignepanierid).val(data["qte"]);
$("#prix"+lignepanierid).val(data["prix"]);

$("#sous_total_ttc").val(data["sous_total_ttc"]);
$("#frais_port").val(data["frais_port_ttc"]);
$("#total_tva").val(data["total_tva"]);
$("#total_ttc").val(data["total_ttc"]);

}


})
}
function deleteLignePanier(lignepanierid)
{
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

</script>
@stop
