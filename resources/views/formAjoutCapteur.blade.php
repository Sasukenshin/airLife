@extends('layouts.master')
@section('content')

<body>
    <div class="splash-container">
        <div id="connexion-contain"
        <div class="card ">
            <div class="card-header text-center"><span class="splash-description">Ajout d'un capteur</span></div>
            <div class="card-body">
                <form action="enregistrerCapteur" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="id_sensor" type="text" placeholder="Identifiant du capteur" autocomplete="off" required="">
                        @if($errors->has('id_sensor'))
                            <p class="text-danger">{{ $errors->first('id_sensor') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Ajouter</button>
                </form>
            </div>         
        </div>
    </div>
        
    @if (isset($error))
    <div class="alert alert-danger">
        {{ $error }}
    </div>
    @endif
    @if (isset($succes))
    <div class="alert alert-success">
        {{ $succes }}
    </div>
    @endif
    
</body>
 

@stop