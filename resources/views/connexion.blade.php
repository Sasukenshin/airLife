@extends('layouts.master')
@section('content')

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div id="connexion-contain"
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="img\logo.png" width="80px" height="80px" alt="logo"></a><span class="splash-description">S'il vous plait, veuillez saisir vos informations</span></div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Se souvenir de moi</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Se connecter</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="inscription" class="footer-link">Créer un compte</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="forgot-password" class="footer-link">Alzheimer</a>
                </div>
            </div>
        </div>
    </div>
    
  
</body>
 
@stop
