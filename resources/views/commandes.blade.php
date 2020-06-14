<!--View qui sert à voir son profil.-->
@extends('layouts.master')
@section('content')

    <head>
        <title>Notifications</title>
    </head>


    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">


                <h1 class="panel-title text-center">Historique de mes commandes</h1>


                <div class="row">

                    @isset($commandes)
                    <table id="notification" class="table">

                            <thead class="bg-light">
                            <tr class="border-0">
                                <th class='border-0 text-center'> Date</th>
                                <th class='border-0 text-center'> Mode de livraison</th>
                                <th class='border-0 text-center'> Moyen de paiement</th>
                                <th class='border-0 text-center'> Montant TTC</th>
                                <th class='border-0 text-center'> PDF de votre facture</th>
                            </tr>
                            </thead>
                            <tbody id="allData">
                            @foreach ($commandes as $uneC)
                                <tr>
                                    <td class="text-center">
                                        {{ $uneC->dateValidation }}
                                    </td>
                                    <td class="text-center">
                                        {{ $uneC->moyenlivraison }}
                                    </td>
                                    <td class="text-center">
                                        {{ $uneC->moyenpaiement }}
                                    </td>
                                    <td class="text-center">
                                        {{ $uneC->totalTTC }}€
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('downloadPDF', ['ID' => $uneC->idpanier ] ) }}">Télécharger le pdf</a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                    </table>
                        @endisset
                        @empty($commandes)
                            <h2>Aucune commande à afficher</h2>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    Vous n'avez pas passé de commandes
                                </div>

                            </div>


                    @endempty
                </div>
            </div>
        </div>

    </div>
@stop
