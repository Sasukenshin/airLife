@extends('layouts.master')
@section('content')
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="PaymentPaypal" id="PaymentPaypal">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="jeremycosta@laposte.net">
    <input type="hidden" name="amount" value="{{$panier->totalTTC}}">
    <input type="hidden" name="item_name" value="Commande {{$panier->idpanier}} sur Airlife">
    <input type="hidden" name="item_number" value="{{$panier->idpanier}}">
    <input type="hidden" name="no_note" value="1">
    <input type="hidden" name="no_shipping" value="2">
    <input type="hidden" name="currency_code" value="EUR">
    <input type="hidden" name="address1" value="{{$panier->idpanier}}">
    <input type="hidden" name="city" value="{{$panier->city}}">
    <input type="hidden" name="country\" value="FR">
    <input type="hidden" name="first_name" value="{{$panier->firstname}}">
    <input type="hidden" name="last_name" value="{{$panier->lastname}}">
    <input type="hidden" name="zip" value="{{$panier->postalCode}}">
    <input type="hidden" name="H_PhoneNumber" value="{{$panier->num_tel}}">
    <input type="hidden" name="email-address" value="{{$panier->email}}">
    <input type="hidden" name="lc" value="FR">
    <input type="hidden" name="bn" value="Airlife">
    <input type="hidden" name="return" value="http://localhost/COSTA/airLife/public/retourcommande/{{$panier->idpanier}}">
    <input type="hidden" name="cancel_return" value="error">
    <input type="hidden" name="tax" value="0">
    <!--<input type=\"submit\" value=\"Procéder au paiement\" name=\"submit\" alt=\"paiement CB\">-->
    <img alt="\" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">

</form>

<script>
    $(document).ready(function(){
         $("#PaymentPaypal").submit();

});
</script>
    @stop