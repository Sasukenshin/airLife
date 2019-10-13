@extends('layouts.master')
@section('content')

    <head>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        @php $ua = $_SERVER['HTTP_USER_AGENT'] @endphp
    </head>
<br>
    <br>

<div class="col-md-12">
    <div class="row">
            <div class="col-md-10" style="background-color: #CECECE; border:1px solid black; margin:auto;">
                <div class="row">
            <div class="col-md-6 " >



                {!! Form::open(['url' => 'contactMail']) !!}

                <div class="form-horizontal">


                    <div class="col-md-12" style="text-align: center;">

                        <h2 class="col-md-offset-2 ">Contact par mail</h2>
                        <br/>
                        <label class="col-md-4 control-label contact"><i class="far fa-arrow-alt-circle-right"></i> </i> Nom : </label>
                        <div class="col-md-6" style="margin:auto;">
                            <input type='text' name='nom' placeholder="Votre nom" class='form-control col-md-11' required>
                        </div>



                        <label class="col-md-4 control-label contact"><i class="far fa-arrow-alt-circle-right"></i> Prénom : </label>
                        <div class="col-md-6 " style="margin:auto;">
                            <input type='text' name='prenom' placeholder="Votre prénom" class='col-md-11 form-control' required>
                        </div>


                        <label class="col-md-4 control-label contact"><i class="fas fa-at"> </i> Adresse e-mail : </label>
                        <div class="col-md-6" style="margin:auto;">
                            <input type='email' name='mail' placeholder="Votre adresse email"  class='col-md-11 form-control' required >
                        </div>



                        <label class="col-md-4 control-label contact"><i class="fas fa-phone"> </i> Téléphone : </label>
                        <div class="col-md-6" style="margin:auto;">
                            <input type='tel' name='tel' placeholder="Votre numéro de téléphone"  class='col-md-11 form-control' required >
                        </div>



                        <label class="col-md-4 control-label contact"><i class="fas fa-pencil-alt"></i> Votre message : </label>
                        <div class="col-md-6 " style="margin:auto;">

                            <textarea class="form-control col-md-11 " id="message" name="message" placeholder="Entrez votre message ici" rows="10" required></textarea>

                        </div>



                        <center> <div class="col-md-12" >



                                <br/>
                                <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey="6LeRoxYUAAAAANuFSTRfs0EUDvxXjVANuOWmSNkH"></div>
                                    @if(isset($erreur))
                                        {{$erreur}}
                                    @endif

                                    <div class="col-md-12  button_contact">
                                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-ok"></span> Envoyer la demande</button>
                                    </div>

                                </div>
                            </div>
                        </center>

                    </div>
                </div>

                {!! Form::close() !!}
            </div>
            <div class="col-md-6 " style="margin:auto; text-align: center;">
                <h2 class="contact">Contact par téléphone </h2>



                <label class="col-md-12 control-label contact"><i class="glyphicon glyphicon-earphone"> </i> Numéro de contact : 06 11 10 15 48</label>
                <label class="col-md-12 control-label contact">de 10h à 13h et de 14h30 à 19h.</label>
                <label>Fermé le Lundi matin, et Samedi après-midi </label>

                <h2 class="contact"> Contact par voie postale</h2>

                @if(preg_match('/iphone/i',$ua) || preg_match('/android/i',$ua) || preg_match('/blackberry/i',$ua) || preg_match('/symb/i',$ua) || preg_match('/ipad/i',$ua) || preg_match('/ipod/i',$ua) || preg_match('/phone/i',$ua) )
                    <a href="geo:45.7676342,4.9579445">Situer le magasin</a>
                @endif

                <label class="col-md-12  control-label"> SARL AIRLIFE </label>
                <label class="col-md-12  control-label " > 53 Cours Albert Thomas, 69003 Lyon </label>
                </br>
                </br>
                </br>
                <div class="full_carte" class="content-area">
                    <div style="width: 500px;position: relative; margin:auto;"><iframe width="500" height="350" src="https://maps.google.com/maps?width=500&amp;height=350&amp;hl=en&amp;q=sciences%20u%20lyon+(Titre)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/pt/">googlemapsgen (pt)</a> & <a href="https://www.buyinstagramfollowersreviews.net/">become popular on instagram</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
                </div>

            </div>
        </div>

            @if(preg_match('/iphone/i',$ua) || preg_match('/android/i',$ua) || preg_match('/blackberry/i',$ua) || preg_match('/symb/i',$ua) || preg_match('/ipad/i',$ua) || preg_match('/ipod/i',$ua) || preg_match('/phone/i',$ua) )
            <a href="tel:+3365058461"><img class="col-md-12 footer_contact" alt="" src="{{asset('local/assets/img/footer_2.png')}}"</img>  </a> @else

            @endif

        </div>


    </div>


</div>

@stop
