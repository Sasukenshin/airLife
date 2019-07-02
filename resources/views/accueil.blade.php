    @extends('layouts.master')
    @section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $( document ).ready(function() {
            datastypes = <?php echo json_encode($datastype) ;?>;
            datas = <?php echo json_encode($datas) ;?>;
            console.log(datas);
            for (var item in datastypes) {
                var libelle = datastypes[item]['LIBELLE']
                for (let i = 0; i < libelle.length; i++) {
                    if(libelle[i] == " ") {
                        libelle[i]="";
                    }

                }
                console.log(libelle.replace(/ /g,""));
                var label_graph = [];
                var data_graph = [];
                for  (var data in datas) {
                    if(datas[data]['IDDATATYPE'] ==  datastypes[item]['IDDATATYPE']) {
                        label_graph.push(datas[data]['DATETIMEDATA']);
                        data_graph.push(datas[data]['DATASENSOR']);
                    }
                }
                var ctx = document.getElementById(libelle.replace(/ /g,"")).getContext('2d');
                var chart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'line',

                    // The data for our dataset
                    data: {
                        labels: label_graph,
                        datasets: [{
                            label: datastypes[item]['LIBELLE'],
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: data_graph
                        }]
                    },

                    // Configuration options go here
                    options: {}
                });
            }
           
        });  
    </script>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\vendor\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="css\vendor\fonts\circular-std\style.css" >
    <link rel="stylesheet" href="css\vendor\libs\css\style.css">
    <link rel="stylesheet" href="css\vendor\fonts\fontawesome\css\fontawesome-all.css">
    <link rel="stylesheet" href="css\vendor\charts\chartist-bundle\chartist.css">
    <link rel="stylesheet" href="css\vendor\charts\morris-bundle\morris.css">
    <link rel="stylesheet" href="css\vendor\fonts\material-design-iconic-font\css\materialdesignicons.min.css">
    <link rel="stylesheet" href="css\vendor\charts\c3charts\c3.css">
    <link rel="stylesheet" href="css\vendor\fonts\flag-icon-css\flag-icon.min.css">
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html"><img src="img\logo.png" height="50" width="50" alt="">  Air Life</a>
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
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
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
                                            <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">Plus</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Doe </h5>
                                    <span class="status"></span><span class="ml-2">Disponible</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Compte</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Paramètres</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Déconnexion</a>
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
                                            <a class="nav-link" href="#">Statistiques</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Visualisation en direct</a>
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
                                            <a class="nav-link" href="#">Capteurs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Air</a>
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
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Tableau de bord général </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Statistiques</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                            <?php
                                //die();
                                if (count($datastype) % 4 == 0) {
                                    $div= "<div class='col-xl-3 col-md-6'>";
                                } elseif (count($datastype) % 3 == 0) {
                                    $div= "<div class='col-xl-4 col-md-4'>";
                                } elseif (count($datastype) % 2 == 0) {
                                    $div= "<div class= col-md-6'>";
                                }
                                $div.="<div class='card'>";
                                $div.="<div class='card-body'>";
                                
                                foreach ($datastype as $key => $datatype) {
                                    $allSensors ="";
                                    //die(print_r($datastype));
                                    echo $div;
                                    echo "<h3 class='mb-1'>".$datatype->LIBELLE."</h3>";
                                    echo "<div class='metric-value d-inline-block'>";
                                    echo "<h5 class='text-muted'>";
                                    $i = 0;
                                    foreach ($datastypesensor as $key2 =>$datatypesensor) {
                                        if ($datatype->LIBELLE == $datatypesensor->LIBELLE) {
                                            $allSensors .= $datatypesensor->NAMESENSOR;
                                            if($i % 2 == 0){
                                                $allSensors .= " / ";
                                            } else {
                                                $allSensors .= "</br>";
                                            }
                                            $i = $i+1;
                                            //echo  $allSensors;
                                        }
                                    }
                                    echo substr($allSensors, 0, -3);
                                    echo "</h5>";
                                    echo "</div>";
                                    echo "<div class='metric-label d-inline-block float-right text-success font-weight-bold'>";
                                    echo "<span><i class='fa fa-fw fa-arrow-up'></i></span><span>5.86%</span>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<canvas id=\"".str_replace(" ","",$datatype->LIBELLE)."\"> </canvas>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                                
                            ?>
                            <!--div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Dioxyde de carbonne(CO2)</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">Danger</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Monoxyde de carbonne(CO)</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">Normal</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                            <span>-1.15%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue2"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Oxyde d'azote (NOX)</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">Normal</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                            <span>-3.21%</span>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue3"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Radon (Rn)</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">Normal</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                            <span>-3.00%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue4"></div>
                                </div>
                            </div-->
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- Données récentes  -->
                            <!-- ============================================================== -->
                            <div class="col-12">
                                <div class="card">
                                    <h5 class="card-header">Données récentes </h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <?php foreach ($datas[0] as $key => $value) {
                                echo " <th class='border-0'>".$key."</th>";
                            }
                                                        ?>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($datas as $key => $data) {
                                                            echo "<tr>";
                                                            foreach ($data as $key => $value) {
                                                                echo "<td>";
                                                                echo $value;
                                                                echo "</td>";
                                                            }
                                                            echo "</tr>";
                                                        }
                                                    ?>
                                                    <tr>
                                                        <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->
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
                                <a href="javascript: void(0);">A propos</a>
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
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    
    <script src="css\vendor\jquery\jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <!--script src="css\vendor\bootstrap\js\bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
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
    
@stop