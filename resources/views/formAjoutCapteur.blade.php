@extends('layouts.master')
@section('content')

</br>
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
<form action="enregistrerCapteur" method="POST">
    {{ csrf_field() }}
    <input name="id_sensor" type="text" placeholder="Identifiant" autocomplete="off" required="" >
    <button type="submit">Enregistrer</button>
</form>

@stop