@extends('layouts.master')
@section('content')

        <div class="col-md-12 well well-md">

          <h1>Modification des préferences profil</h1></center>
            <br><br>

            {!! Form::open(['url' => 'modifierPreference']) !!}
            <div class="container">

                    <div class="row">
                        <div class="col-md-8 col-xs-12 col-sm-6 col-lg-4">
                            <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                        </div>
                        <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                            <div class="container" style="border-bottom:1px solid black">
                                <h2 class="panel-title">{{$unC->FIRSTNAME}} {{$unC->LASTNAME}}</h2>
                            </div>
                            </br>
                            <ul class="container details">
                                <li> 
                                    <label class="col-md-4 control-label">Taille pagination  :</label>
                                    <input type="text" style="width:150px;"value="{{$unC->PAGINATION}}" name="pagination" required="">
                                </li>
                                @isset($erreurPagination)
                                    <p class="text-danger">{!! $erreurPagination !!}  </p>
                                @endif
                                <li>
                                    <label class="col-md-4 control-label">Seuils</label>
                                    <ul class="container details" >
                                    @foreach ($seuils as $key => $value)
                                    <li> 
                                        <label class="col-md-4 control-label">  {{$value->gaz }} </label>
                                        <input type="text" style="width:150px;"value="{{$value->seuil}}" name="seuil{{$value->iddatatype }}" required="">
                                    </li>
                                    @isset ($warnings['seuil'.$value->iddatatype])
                                    <p class="text-warning">{!! $warnings['seuil'.$value->iddatatype] !!}  </p>
                                    @endisset
                                    @endforeach
                                    </ul>
                                </li>
                                        
                            </ul>

                            <div class="panel-footer">

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Valider</button>
                                        <a href="{{url( '/profil') }}"data-original-title="Editer preference utilisateur" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="fas fa-edit"> Retour</i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

            </div>
            {!! Form::close() !!}

        </div>
        @stop

