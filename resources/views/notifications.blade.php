<!--View qui sert à voir son profil.-->
@extends('layouts.master')
@section('content')

<head>
    <title>Notifications</title>
</head>


    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12" >


                    <h1 class="panel-title text-center">Vos notifications</h1>

                <div class="container">
                    <div>
                        <div class="row">


                            <table id="notification" class="table">
                                @isset($mesNotifications)
                                    <thead class="bg-light">
                                    <tr class="border-0">
                                        <th class='border-0 text-center'> Notifications </th>
                                        <th class='border-0 text-center'> Date notification </th>
                                    </tr>
                                    </thead>
                                    <tbody id="allData">
                                    @foreach ($mesNotifications as $uneN)
                                        <tr>
                                            <td class="text-center">
                                                {{ $uneN->textnotification }}
                                            </td>
                                            <td class="text-center">
                                                {{ $uneN->datenotif }}
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                @endisset
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
