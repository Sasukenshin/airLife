<!doctype html>
<html>
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



{{--    notifications --}}
    @if (auth()->check())
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    @endif
    <script>
       function getNotifications()
       {
           $.ajax({
               url:"{!! URL::to('getNotificationsUser') !!}",
               type: 'POST',
               data: {_token: '{{csrf_token()}}'},

               success: function (data, statut) {
                   var i= 0;
                   $( ".notification-list" ).empty();
                   $.each(data, function () {


                       $( ".notification-list" ).append( "<a href=\"#\" class=\"list-group-item list-group-item-action active\">" +
                           "                                                <div class=\"notification-info\">" +
                           "                                                  <div class=\"notification-list-user-img\"><img src=\"img/user.png\"  class=\"user-avatar-md rounded-circle\"></div>" +
                           "                                                  <div class=\"notification-list-user-block\">"+data[i].textnotification+
                           "                                                        <div class=\"notification-date\">"+data[i].datenotif +"</div>" +
                           "                                               </div>" +
                           "                                                   </div> " +
                           "                                                                     </a>" );
                       i++;
                   });


               }

           })
       }
        var OneSignal = window.OneSignal || [];

        OneSignal.push(function() {
            OneSignal.init({
                appId: "b0b15de8-0982-4a93-afc8-ad4c7c0e109f",
                notifyButton: {
                    enable: true,
                },
                allowLocalhostAsSecureOrigin: true,
            });
            OneSignal.sendTag("user_id", "4444", function (tagsSent) {
                // Callback called when tags have finished sending
                //console.log("Tags have finished sending!");
            });
            OneSignal.getUserId(function (id) {


                $.ajax({
                    url:"{!! URL::to('addIdOneSignal') !!}",
                    type: 'POST',
                    data: { id_onesignal : id, _token: '{{csrf_token()}}' },

                    success: function (data, statut) {
                       // alert(data);
                    }

                })



            });
        });
    </script>




</head>


<body>

    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{route('accueil')}}"><img src="img\logo.png" height="50" width="50" alt="">  Air Life</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">

                        @if (auth()->check())
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" onclick="getNotifications();" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notifications</div>
                                    <div class="notification-list"></div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="{{route('notifications')}}">Voir toutes les notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        @endif
                     
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img\user.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    @if (auth()->check())
                                        <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }} </h5>

                                    @else
                                        <h5 class="mb-0 text-white nav-user-name">Air Life</h5>
                                    @endif
                                </div>
                                <a class="dropdown-item" href="{{route('panier')}}"><i class="fas fa-shopping-basket"></i> Panier</a>
                                @if (auth()->check())
                                    <a class="dropdown-item" href="profil"><i class="fas fa-user mr-2"></i>Profil </a>
                                    <a class="dropdown-item" href="{{route('commandes')}}"><i class="fas fa-list"></i> &nbsp Mes Commandes </a>
                                    <a class="dropdown-item" href="deconnexion"><i class="fas fa-power-off mr-2"></i>Déconnexion</a>

                                @else
                                    <a class="dropdown-item" href="{{route('connexion')}}"><i class="fas fa-power-off mr-2"></i>Connexion</a>

                                    <a class="dropdown-item" href="inscription"><i class="fas fa-sign-in-alt mr-2"></i>Inscription</a>
                                    <a class="dropdown-item" href="forgot-password"><i class="fas fa-unlock mr-2"></i>Mot de passe oublié</a>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @if (auth()->check())
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Menu</a>
                    <button class="navbar-toggler mt-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>

                            <li class="nav-item d-block d-lg-none">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-user-circle"></i>Profil</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        @if (auth()->check())
                                            <li class="nav-item">
                                                 <a class="nav-link" href="profil">Profil </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{route('notifications')}}">Voir toutes les notifications</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{route('commandes')}}">Mes commandes</a>
                                            </li>
                                            <li class="nav-item">
                                                 <a class="nav-link" href="deconnexion">Déconnexion</a>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('connexion')}}">Connexion</a>
                                            </li>
                                            <li class="nav-item">
                                                 <a class="nav-link" href="inscription"></i>Inscription</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="forgot-password">Mot de passe oublié</a>
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Tableau de bord</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="statistique">Statistiques</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="accueil">Visualisation en direct</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="capteur">Capteurs</a>
                                        </li>

                                        <li class="nav-item d-block d-lg-none">
                                            <a class="nav-link" href="capteur">test</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-divider">
                                Administration
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-fw fa-info-circle"></i>Informations générales</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="info-capteurs">Capteurs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="info-air">Air</a>
                                        </li>


                                    </ul>

                                </div>
                            </li>
                            <li class="nav-item d-block d-lg-none">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-user-circle"></i>Boutique</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('panier')}}">Panier</a>
                                        </li>

                                        <li class="nav-item d-block d-lg-none">
                                            <a class="nav-link" href="{{route('boutique')}}">Liste des articles</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-none d-lg-block" href="{{route('boutique')}}" ><i class="fas fa-shopping-cart"></i> Boutique</a>

                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        @else
            <div class="nav-left-sidebar sidebar-dark d-block d-lg-none">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Menu</a>
                        <button class="navbar-toggler mt-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-divider">
                                    Menu
                                </li>

                                <li class="nav-item d-block d-lg-none">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-user-circle"></i>Profil</a>
                                    <div id="submenu-4" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            @if (auth()->check())
                                                <li class="nav-item">
                                                    <a class="nav-link" href="profil">Profil </a>
                                                </li>
                                                <li>
                                                    <a lass="nav-link" href="{{route('commandes')}}">Mes commandes</a>
                                                </li>
                                                <li>
                                                    <a lass="nav-link" href="{{route('notifications')}}">Voir toutes les notifications</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="deconnexion">Déconnexion</a>
                                                </li>
                                            @else
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('connexion')}}">Connexion</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="inscription"></i>Inscription</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="forgot-password">Mot de passe oublié</a>
                                                </li>
                                            @endif

                                        </ul>
                                    </div>
                                </li>
                                @if (auth()->check())
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Tableau de bord</a>
                                    <div id="submenu-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="statistique">Statistiques</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/">Visualisation en direct</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="capteur">Capteurs</a>
                                            </li>

                                            <li class="nav-item d-block d-lg-none">
                                                <a class="nav-link" href="capteur">test</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                @endif
                                <li class="nav-divider">
                                    Administration
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-fw fa-info-circle"></i>Informations générales</a>
                                    <div id="submenu-2" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="info-capteurs">Capteurs</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="info-air">Air</a>
                                            </li>


                                        </ul>

                                    </div>
                                </li>
                                <li class="nav-item d-block d-lg-none">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-user-circle"></i>Boutique</a>
                                    <div id="submenu-3" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('panier')}}">Panier</a>
                                            </li>

                                            <li class="nav-item d-block d-lg-none">
                                                <a class="nav-link" href="{{route('boutique')}}">Liste des articles</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-none d-lg-block" href="{{route('boutique')}}" ><i class="fas fa-shopping-cart"></i> Boutique</a>

                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
@endif

        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->

    </div>


    @if (auth()->check())
    <div class="dashboard-wrapper connected-right">
        @else
            <div class="dashboard-wrapper">
    @endif
        @yield('content')



    </div>

</div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    Copyright © 2019. Tous droits réservés.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="{{route('cgu')}}">CGU</a>
                        <a href="about">À propos</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="{{route('contact')}}">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</body>
    <script src="css\vendor\slimscroll\jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="js\main-js.js"></script>
    <!-- chart chartist js -->
    <script src="css\vendor\charts\chartist-bundle\chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="css\vendor\charts\sparkline\jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="css\vendor\charts\morris-bundle\raphael.min.js"></script>
    <script src="css\vendor\charts\morris-bundle\morris.js"></script>
    <!-- chart c3 js -->
    <script src="css\vendor\charts\c3charts\c3.min.js"></script>
    <script src="css\vendor\charts\c3charts\d3-5.4.0.min.js"></script>
    <script src="css\vendor\charts\c3charts\C3chartjs.js"></script>
    <script src="css\vendor\slimscroll\jquery.slimscroll.js"></script>
    <script src="css\vendor\select2\js\select2.min.js"></script>
    <script src="css\vendor\summernote\js\summernote-bs4.js"></script>

</html>



