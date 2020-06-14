<head>

    <title>Air Life</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\vendor\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="css\vendor\fonts\circular-std\style.css" >
    <link rel="stylesheet" href="css\libs\css\style.css">
    <link rel="stylesheet" href="css\vendor\fonts\fontawesome\css\fontawesome-all.css">
    <link rel="stylesheet" href="css\vendor\charts\chartist-bundle\chartist.css">
    <link rel="stylesheet" href="css\vendor\charts\morris-bundle\morris.css">
    <link rel="stylesheet" href="css\vendor\fonts\material-design-iconic-font\css\materialdesignicons.min.css">
    <link rel="stylesheet" href="css\vendor\charts\c3charts\c3.css">
    <link rel="stylesheet" href="css\vendor\fonts\flag-icon-css\flag-icon.min.css">
    <link rel="stylesheet" href="css\vendor\select2\css\select2.css">
    <link rel="stylesheet" href="css\vendor\summernote\css\summernote-bs4.css">



</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div id="connexion-contain">
        <div class="card ">
            <div class="card-header text-center"><a href="/ProjetSCU/public/"><img class="logo-img" src="img\logo.png" width="80px" height="80px" alt="logo"></a><span class="splash-description">S'il vous plait, veuillez saisir vos informations de connexion</span></div>
            <div class="card-body">
                <form action="connexion" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="login" type="text" placeholder="Identifiant" autocomplete="off" required="" value="{{ old('login') }}">
                        @if($errors->has('login'))
                            <p class="text-danger">{{ $errors->first('login') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="mdp" type="password" placeholder="Mot de passe" required="">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Se souvenir de moi</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Se connecter</button>
                </form>
            </div>
            @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="inscription" class="footer-link">Créer un compte</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="forgot-password" class="footer-link">Mot de passe oublié</a>
                </div>
            </div>
        </div>
    </div>
    
    </div>
</body>

