<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>


</head>
<body>
<div class="container">
    <div class="row">
<div class="col-md-12">
    <h1>Facture numéro : {{$order->idpanier}}</h1>
    <div class="col-md-6" style="border-style: solid;">
        <h2>Adresse de facturation</h2>
        <div>
        <span>{{$order->Ffirstname}} {{$order->Flastname}} </span><br>
        <span>{{$order->Fcity}} {{$order->FpostalCode}}</span><br>
        <span>{{$order->Faddress}}</span><br>
        <span>{{$order->Fnum_tel}}</span><br>
        <span>{{$order->Femail}}</span>
        </div>
    </div>

    <div class="col-md-5" style="border-style: solid;">
    <h2>Adresse de livraison</h2>
    <div>
        <span>{{$order->Lfirstname}} {{$order->Llastname}} </span><br>
        <span>{{$order->Lcity}} {{$order->LpostalCode}}</span><br>
        <span>{{$order->Laddress}}</span><br>
        <span>{{$order->Lnum_tel}}</span><br>
        <span>{{$order->Lemail}}</span>
    </div>
    </div>
</div>
    </div>
    <table id="notification" class="table">
        <thead class="bg-light">
        <tr class="border-0">
            <th class='border-0 text-center'> Image </th>
            <th class='border-0 text-center'> Article </th>
            <th class='border-0 text-center'> Description </th>
            <th class='border-0 text-center'> Prix </th>

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
                    {{ $uneL->description }}
                </td>

                <td class="text-center">
                    {{ $uneL->prix }}
                </td>



            </tr>
        @endforeach
        </tbody>

    </table>
    <div id="col-md-12">
        <!--Texte du panier pour la loi Chatel-->
        <div class="texteperso"><p style="text-align: justify; "><span style="color:#e63937;"><strong>*</strong></span> Conformément au code de la consommation, vous avez un droit de rétractation dans un délai de 14 jours à partir de la livraison, sauf sur les produits visés par ce code.</p>
        </div>
    </div>


</div>


</body>
</html>