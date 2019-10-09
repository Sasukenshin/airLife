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
                <a class="navbar-brand" href="/ProjetSCU/public/"><img src="img\logo.png" height="50" width="50" alt="">  Air Life</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Rechercher..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="img\user.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Capteur 1</span>a détecté un nouveau gaz.
                                                        <div class="notification-date">Il y a 2 min</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="img\user.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Capteur 2</span>est arrêté.
                                                        <div class="notification-date">Il y a 2 jours</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="img\user.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Capteur 1</span>a détecté un danger.
                                                        <div class="notification-date">Il y a 15 min</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="img\user.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Capteur 2</span>a redémarré.
                                                        <div class="notification-date">Il y a 12 min</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">Voir toutes les notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="img\github-logo.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="img\facebook-logo.jpg" alt="" > <span>Facebook</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="img\dropbox-logo.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="img\twitter-logo.png" alt=""> <span>Twitter</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="img\instagram-logo.png" alt="" ><span>Instagram</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="img\slack-logo.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img\user.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    @if (auth()->check())
                                        <h5 class="mb-0 text-white nav-user-name">{{ $user_firstname }} {{ $user_lastname }} </h5>
                                    @else
                                        <h5 class="mb-0 text-white nav-user-name">Air Life</h5>
                                    @endif
                                </div>
                                @if (auth()->check())
                                    <a class="dropdown-item" href="deconnexion"><i class="fas fa-power-off mr-2"></i>Déconnexion</a>
                                @else
                                    <a class="dropdown-item" href="connexion"><i class="fas fa-power-off mr-2"></i>Connexion</a>
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
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Menu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Tableau de bord</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/">Statistiques</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Visualisation en direct</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="capteur">Capteurs</a>
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
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        
    </div>

<div>
    
    <div class="dashboard-wrapper">

        @yield('content')
        
         <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2019. Tous droits réservés.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="about">À propos</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        
    </div>
  
</div>
</body>
    
    <script src="css\vendor\jquery\jquery-3.3.1.min.js"></script>
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
    <script src="js\dashboard-ecommerce.js"></script>
    <script src="css\vendor\slimscroll\jquery.slimscroll.js"></script>
    <script src="css\vendor\select2\js\select2.min.js"></script>
    <script src="css\vendor\summernote\js\summernote-bs4.js"></script>
    
</html>



