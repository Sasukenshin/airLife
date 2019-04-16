    @extends('layouts.master')
    @section('content')
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" height="50" width="50" alt="">  Air Life</a>
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
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"><i class="fas fa-fw fa-info-circle"></i>Informations générales </a>                            
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
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Revenue</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">$12099</h1>
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
                                        <h5 class="text-muted">Affiliate Revenue</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">$12099</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue2"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Refunds</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">0.00</h1>
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
                                        <h5 class="text-muted">Avg. Revenue Per User</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">$28000</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                            <span>-2.00%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Orders</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Image</th>
                                                        <th class="border-0">Product Name</th>
                                                        <th class="border-0">Product Id</th>
                                                        <th class="border-0">Quantity</th>
                                                        <th class="border-0">Price</th>
                                                        <th class="border-0">Order Time</th>
                                                        <th class="border-0">Customer</th>
                                                        <th class="border-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #1 </td>
                                                        <td>id000001 </td>
                                                        <td>20</td>
                                                        <td>$80.00</td>
                                                        <td>27-08-2018 01:22:12</td>
                                                        <td>Patricia J. King </td>
                                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #2 </td>
                                                        <td>id000002 </td>
                                                        <td>12</td>
                                                        <td>$180.00</td>
                                                        <td>25-08-2018 21:12:56</td>
                                                        <td>Rachel J. Wicker </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #3 </td>
                                                        <td>id000003 </td>
                                                        <td>23</td>
                                                        <td>$820.00</td>
                                                        <td>24-08-2018 14:12:77</td>
                                                        <td>Michael K. Ledford </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #4 </td>
                                                        <td>id000004 </td>
                                                        <td>34</td>
                                                        <td>$340.00</td>
                                                        <td>23-08-2018 09:12:35</td>
                                                        <td>Michael K. Ledford </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>
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
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Customer Acquisition</h5>
                                    <div class="card-body">
                                        <div class="ct-chart ct-golden-section" style="height: 354px;"></div>
                                        <div class="text-center">
                                            <span class="legend-item mr-2">
                                                    <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">Returning</span>
                                            </span>
                                            <span class="legend-item mr-2">

                                                    <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">First Time</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
              				                        <!-- product category  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"> Product Category</h5>
                                    <div class="card-body">
                                        <div class="ct-chart-category ct-golden-section" style="height: 315px;"></div>
                                        <div class="text-center m-t-40">
                                            <span class="legend-item mr-3">
                                                    <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full "></i></span><span class="legend-text">Man</span>
                                            </span>
                                            <span class="legend-item mr-3">
                                                <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">Woman</span>
                                            </span>
                                            <span class="legend-item mr-3">
                                                <span class="fa-xs text-info mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">Accessories</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end product category  -->
                                   <!-- product sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <!-- <div class="float-right">
                                                <select class="custom-select">
                                                    <option selected>Today</option>
                                                    <option value="1">Weekly</option>
                                                    <option value="2">Monthly</option>
                                                    <option value="3">Yearly</option>
                                                </select>
                                            </div> -->
                                        <h5 class="mb-0"> Product Sales</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="ct-chart-product ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end product sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- top perfomimg  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header">Top Performing Campaigns</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table no-wrap p-table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Campaign</th>
                                                        <th class="border-0">Visits</th>
                                                        <th class="border-0">Revenue</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Campaign#1</td>
                                                        <td>98,789 </td>
                                                        <td>$4563</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#2</td>
                                                        <td>2,789 </td>
                                                        <td>$325</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#3</td>
                                                        <td>1,459 </td>
                                                        <td>$225</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#4</td>
                                                        <td>5,035 </td>
                                                        <td>$856</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#5</td>
                                                        <td>10,000 </td>
                                                        <td>$1000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#5</td>
                                                        <td>10,000 </td>
                                                        <td>$1000</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">
                                                            <a href="#" class="btn btn-outline-light float-right">Details</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end top perfomimg  -->
                                <!-- ============================================================== -->
                            </div>
                        </div>

                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Sales</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">$12099</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">New Customer</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">1245</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- visitor  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Visitor</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">13000</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end visitor  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Orders</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">1340</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end total orders  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- total revenue  -->
                            <!-- ============================================================== -->
  
                            
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- category revenue  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Revenue by Category</h5>
                                    <div class="card-body">
                                        <div id="c3chart_category" style="height: 420px;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end category revenue  -->
                            <!-- ============================================================== -->

                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"> Total Revenue</h5>
                                    <div class="card-body">
                                        <div id="morris_totalrevenue"></div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$26,000</span><span class="text-success float-right">+9.45%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- social source  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header"> Sales By Social Source</h5>
                                    <div class="card-body p-0">
                                        <ul class="social-sales list-group list-group-flush">
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle facebook-bgcolor mr-2"><i class="fab fa-facebook-f"></i></span><span class="social-sales-name">Facebook</span><span class="social-sales-count text-dark">120 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle twitter-bgcolor mr-2"><i class="fab fa-twitter"></i></span><span class="social-sales-name">Twitter</span><span class="social-sales-count text-dark">99 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle instagram-bgcolor mr-2"><i class="fab fa-instagram"></i></span><span class="social-sales-name">Instagram</span><span class="social-sales-count text-dark">76 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle pinterest-bgcolor mr-2"><i class="fab fa-pinterest-p"></i></span><span class="social-sales-name">Pinterest</span><span class="social-sales-count text-dark">56 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle googleplus-bgcolor mr-2"><i class="fab fa-google-plus-g"></i></span><span class="social-sales-name">Google Plus</span><span class="social-sales-count text-dark">36 Sales</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn-primary-link">View Details</a>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end social source  -->
                                <!-- ============================================================== -->
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- sales traffice source  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header"> Sales By Traffic Source</h5>
                                    <div class="card-body p-0">
                                        <ul class="traffic-sales list-group list-group-flush">
                                            <li class="traffic-sales-content list-group-item "><span class="traffic-sales-name">Direct</span><span class="traffic-sales-amount">$4000.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Search<span class="traffic-sales-amount">$3123.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                                </span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Social<span class="traffic-sales-amount ">$3099.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                                </span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Referrals<span class="traffic-sales-amount ">$2220.00   <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1 text-danger">4.02%</span></span>
                                                </span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item "><span class="traffic-sales-name">Email<span class="traffic-sales-amount">$1567.00   <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1 text-danger">3.86%</span></span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn-primary-link">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales traffice source  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- sales traffic country source  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Sales By Country Traffic Source</h5>
                                    <div class="card-body p-0">
                                        <ul class="country-sales list-group list-group-flush">
                                            <li class="country-sales-content list-group-item"><span class="mr-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> </span>
                                                <span class="">United States</span><span class="float-right text-dark">78%</span>
                                            </li>
                                            <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i></span><span class="">Canada</span><span class="float-right text-dark">7%</span>
                                            </li>
                                            <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i></span><span class="">Russia</span><span class="float-right text-dark">4%</span>
                                            </li>
                                            <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-in" title="in" id="in"></i></span><span class="">India</span><span class="float-right text-dark">12%</span>
                                            </li>
                                            <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i></span><span class="">France</span><span class="float-right text-dark">16%</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn-primary-link">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales traffice country source  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
            </div>
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
    <style>
     @charset "UTF-8";
/**
 * Summary:
 *
 *  0. ELEMENT
 *      - 0.1. Body / Typography
 *      - 0.2. Type Elements
        - 0.3. Header
        - 0.4. Sidebar
        - 0.5. Container
        - 0.6. Pageheader
        - 0.7. Footer

   -------------------------

 *  1. Dashboard

 *      - 1.1. TYPE ELEMENT
 *      - 1.2. TYPE ELEMENT

   --------------------------

2. UI Elements

    - 2.1.  Alerts
    - 2.2.  Buttons
    - 2.3.  Cards
    - 2.4.  General
    - 2.5.  Modals
    - 2.6.  Notifications
    - 2.7.  Icon
    - 2.8.  Tabs
    - 2.9.  Accordions
    - 2.10. Typography
    - 2.11. Listgroup
    - 2.12. Multiselect
    - 2.13. Badge
    - 2.14. Pagination
    - 2.15. Switch Toogle
    - 2.16. Spinner


    ----------------------------

3. Charts

    - 3.1.  Chartist js
    - 3.2.  Sparklines
    - 3.3.  Chart.js
    - 3.4.  Morris.js
    - 3.5.  C3 Charts.js

     ----------------------------

4. Forms

    - 4.1.  Elements
    - 4.2.  Validations
    - 4.3.  Multiselect
    - 4.4.  Wizard
    - 4.5.  Input Mask
    - 4.6.  Summar Note text editor
    - 4.7.  Multi Upload


     ----------------------------


5. Tables

    - 5.1.  General
    - 5.2.  Data Tables
    - 5.3.  Table Filters



         ----------------------------


6. Pages

    - 6.1.   Blank Page
    - 6.2.   Blank Page Header
    - 6.3.   Login
    - 6.4.   Sign up
    - 6.5.   Forgot Password
    - 6.6.   Profile
    - 6.7.   Pricing
    - 6.8.   Timline
    - 6.9.   Calendar
    - 6.10.  Metrics
    - 6.11.  Media Object
    - 6.12.  Shortable / Nestable
    - 6.13.  404 Error






         ----------------------------

7. Email

    - 7.1.  Inbox
    - 7.2.  Email Detail
    - 7.3.  Email Compose
    - 7.4.  Message Chat

       ----------------------------


8. Layouts

    - 8.1. Primary Header
    - 8.2. Success Header
    - 8.3. Warning Header
    - 8.4. Danger Header
    - 8.5. Search Input
    - 8.6. Off Canvas Menu
    - 8.7. Without Left Sidebar
    - 8.8. Without Right Sidebar
    - 8.9. Without Both Sidebars
    - 8.10. Fixed Left Sidebar
    - 8.11. Boxed Layout
    - 8.12. Page Aside
    - 8.13. Collapsible Sidebar
    - 8.14. Sub Navigation



       ----------------------------


9. Maps

    - 9.1.  Google Map
    - 9.2.  Vector Map

       ----------------------------


10. Menu Level

    - 10.1.  Level 1
    - 10.2.  Level 2
   */


/* ==========================================================================
   0. ELEMENT
   ========================================================================== */


/* 0.1. Body / Typography
   ========================================================================== */

body {
    font-family: 'Circular Std Book';
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    color: #71748d;
    background-color: #efeff6;
    -webkit-font-smoothing: antialiased;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: #3d405c;
    margin: 0px 0px 15px 0px;
    font-family: 'Circular Std Medium';
}

h1 {
    font-size: 34px;
}

h2 {
    font-size: 28px;
    line-height: 30px;
}

h3 {
    font-size: 20px;
}

h4 {
    font-size: 16px;
    line-height: 26px;
}

h5 {
    font-size: 15px;
    line-height: 26px;
}

h6 {
    font-size: 12px;
}

p {
    margin: 0px 0px 20px 0px;
}

p:last-child {
    margin: 0px;
}

a {
    color: #71748d;
}

a:hover {
    color: #ff407b;
    text-decoration: none;
}

a:active,
a:hover {
    outline: 0;
    text-decoration: none;
}

ol,
ul {}

ol li,
ul li {}

.lead {
    font-size: 1.25rem;
    font-weight: 300;
    color: #3d3f5d;
}


/*--------------------
 Form
---------------------*/

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-size: 15px;
    color: #71748d;
}

.form-control {
    display: block;
    width: 100%;
    font-size: 14px;
    line-height: 1.42857143;
    color: #71748d;
    background-color: #fff;
    background-image: none;
    border: 1px solid #d2d2e4;
    border-radius: 2px;
}

.form-control:focus {
    color: #71748d;
    background-color: #fff;
    border-color: #a7a7f0;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(214, 214, 255, .75);
}

input[type=file] {
    color: #71748d;
    background-color: #fff;
    border-color: #a7a7f0;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(214, 214, 255, .75);
}

.col-form-label {
    font-size: 15px;
}

input {}

button {}

button:focus {
    outline: 0;
}

select.form-control {
    color: #71748d;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-position: 99% 52%;
    background-size: auto;
    background-repeat: no-repeat;
    background-image: url(/images/down-arrow.png);
    padding-right: 15px;
    border: 1px solid #d2d2e4;
    border-radius: 2px;
}

textarea.form-control {
    height: auto;
    color: #71748d;
    background-color: #fff;
    background-image: none;
    border: 1px solid #d2d2e4;
    border-radius: 2px;
    padding: 12px 16px;
}

input::-webkit-input-placeholder {
    color: #71748d !important;
}

input:focus::-webkit-input-placeholder {
    color: #5969ff !important;
}

textarea::-webkit-input-placeholder {
    color: #71748d !important;
}

textarea:focus::-webkit-input-placeholder {
    color: #5969ff !important;
}

button.btn {}

button.btn-default {}

button.btn-primary {}

address {}

.form-group {
    margin-bottom: 12px;
}

.form-control-lg {
    padding: 12px;
}


/* Custom-Chekbox
-------------------------------------------------------------- */

.custom-control {
    position: relative;
    min-height: 1.5rem;
    padding-left: 1.5rem;
}

.custom-control-input:checked~input[type="checkbox"] {
    background: #3d404e;
    border: #7f83a2 1px solid;
}

.custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
}

.custom-control-label {
    margin-bottom: 0;
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color: #5969ff;
    border-color: #5969ff;
}

.custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    background-color: #5969ff;
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::after {}

.custom-control-label::after {
    position: absolute;
    top: 7px;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
}

.custom-control-label::before {
    position: absolute;
    top: 7px;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #ffffff;
    border: 2px solid #d2d2e4;
}

.custom-radio .custom-control-input:checked~.custom-control-label::before {
    background-color: #5969ff;
    border-color: #5969ff;
}

.custom-control-input:disabled~.custom-control-label::before {
    background-color: #efeff6;
}

.custom-select-font-size {
    font-size: 14px;
}

.custom-control-input:focus~.custom-control-label::before {
    box-shadow: none;
}

.custom-valid.custom-control-input.is-valid:checked~.custom-control-label::before,
.was-validated .custom-control-input:valid:checked~.custom-control-label::before {
    background-color: #34ce57;
    border-color: #34ce57;
}

.custom-control-input.is-invalid~.custom-control-label::before,
.was-validated .custom-control-input:invalid~.custom-control-label::before {
    background-color: #ffdadd;
    border-color: #efa2a9;
}

.custom-control-input:disabled~.custom-control-label {
    color: #9295b0;
}

.custom-control-input.is-valid~.custom-control-label::before,
.was-validated .custom-control-input:valid~.custom-control-label::before {
    background-color: #c6ffd3;
    border: 2px solid #68df83;
}

.input-group-text {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding: 10px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
    color: #75748d;
    text-align: center;
    white-space: nowrap;
    background-color: #efeff6;
    border: 1px solid #d2d2e4;
    border-radius: 4px;
}

.section-block {
    margin: 16px 0px;
}

.section-title {
    font-weight: 500;
    margin-bottom: 5px;
}


/*-----------------------
Parsley Varifation
-------------------------*/

.parsley-errors-list.filled {
    margin-top: 10px;
    margin-bottom: 0;
    padding: 7px 29px;
    position: relative;
    background-color: #f96a6a;
    color: #FFF;
}


/*--------------------
 Padding / Margin
---------------------*/

.nopadding {
    padding: 0px;
}

.p-r-0 {
    padding-right: 0px;
}

.p-r-10 {
    padding-right: 10px;
}

.p-r-15 {
    padding-right: 15px;
}

.p-r-20 {
    padding-right: 20px;
}

.p-r-25 {
    padding-right: 25px;
}

.p-l-0 {
    padding-left: 0px;
}

.p-l-10 {
    padding-left: 10px;
}

.p-l-15 {
    padding-left: 15px;
}

.p-l-20 {
    padding-left: 20px;
}

.p-l-25 {
    padding-left: 25px;
}

.p-l-40 {
    padding-left: 40px;
}

.p-t-0 {
    padding-top: 0px;
}

.p-t-10 {
    padding-top: 10px;
}

.p-t-20 {
    padding-top: 20px;
}

.p-t-30 {
    padding-top: 30px;
}

.p-t-40 {
    padding-top: 40px;
}

.p-t-60 {
    padding-top: 60px;
}

.p-t-80 {
    padding-top: 80px;
}

.p-t-100 {
    padding-top: 100px;
}

.p-t-120 {
    padding-top: 120px;
}

.p-t-140 {
    padding-top: 140px;
}

.p-b-0 {
    padding-bottom: 0px;
}

.p-b-10 {
    padding-bottom: 10px;
}

.p-b-20 {
    padding-bottom: 20px;
}

.p-b-30 {
    padding-bottom: 30px;
}

.p-b-40 {
    padding-bottom: 40px;
}

.p-b-60 {
    padding-bottom: 60px;
}

.p-b-80 {
    padding-bottom: 80px;
}

.p-b-100 {
    padding-bottom: 100px;
}

.p-b-120 {
    padding-bottom: 120px;
}

.p-b-140 {
    padding-bottom: 140px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-r-10 {
    margin-right: 10px;
}

.m-r-15 {
    margin-right: 15px;
}

.m-r-20 {
    margin-right: 20px;
}

.m-r-25 {
    margin-right: 25px;
}

.m-l-0 {
    margin-left: 0px;
}

.m-l-10 {
    margin-left: 10px;
}

.m-l-15 {
    margin-left: 15px;
}

.m-l-20 {
    margin-left: 20px;
}

.m-l-25 {
    margin-left: 25px;
}

.m-t-0 {
    margin-top: 0px;
}

.m-t-10 {
    margin-top: 10px;
}

.m-t-20 {
    margin-top: 20px;
}

.m-t-30 {
    margin-top: 30px;
}

.m-t-40 {
    margin-top: 40px;
}

.m-t-60 {
    margin-top: 60px;
}

.m-t-80 {
    margin-top: 80px;
}

.m-t-100 {
    margin-top: 100px;
}

.m-t-120 {
    margin-top: 120px;
}

.m-b-0 {
    margin-bottom: 0px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-b-30 {
    margin-bottom: 30px;
}

.m-b-40 {
    margin-bottom: 40px;
}

.m-b-60 {
    margin-bottom: 60px;
}

.m-b-80 {
    margin-bottom: 80px;
}

.m-b-100 {
    margin-bottom: 100px;
}

.m-b-120 {
    margin-bottom: 120px;
}


/*--------------------
 Font Weight
---------------------*/

html body .font-bold {
    font-weight: 800;
}

html body .font-normal {
    font-weight: 400;
}

html body .font-light {
    font-weight: 300;
}

html body .font-medium {
    font-weight: 600;
}

html body .font-16 {
    font-size: 16px;
}

html body .font-12 {
    font-size: 12px;
}

html body .font-14 {
    font-size: 14px;
}

html body .font-10 {
    font-size: 10px;
}

html body .font-18 {
    font-size: 18px;
}

html body .font-20 {
    font-size: 20px;
}

html body .font-22 {
    font-size: 22px;
}

html body .font-24 {
    font-size: 24px;
}

html body .display-5 {
    font-size: 3rem;
}

html body .display-6 {
    font-size: 2.5rem;
}

html body .display-7 {
    font-size: 2rem;
}


/*--------------------
 Arrow  List
---------------------*/

.arrow {
    position: relative;
}

.arrow li {
    padding-left: 20px;
    line-height: 30px;
}

.arrow li:before {
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 900;
    display: inline-block;
    position: absolute;
    left: 0;
    font-size: 14px;
    color: #ff407b;
    content: '\f058';
    font-style: initial;
}

.bullet-check {
    position: relative;
}

.bullet-check li {
    padding-left: 25px;
    line-height: 30px;
}

.bullet-check li:before {
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 900;
    display: inline-block;
    position: absolute;
    left: 0;
    font-size: 14px;
    color: #22ce77;
    content: '\f00c';
    font-style: initial;
}


/*-----------------------
Background Color / Color
-------------------------*/

.bg-primary {
    background-color: #5969ff !important;
    color: #fff !important;
}

.bg-brand {
    background-color: #ffc750 !important;
}

.bg-secondary {
    background-color: #ff407b !important;
    color: #fff !important;
}

.bg-success {
    background-color: #2ec551 !important;
}

.bg-danger {
    background-color: #ef172c !important;
}

.bg-warning {
    background-color: #ffc108 !important;
}

.bg-info {
    background-color: #25d5f2 !important;
}

.bg-light {
    background-color: #f9f9ff !important;
}

.bg-dark {
    background-color: #2e2f39 !important;
}

.bg-primary-light {
    background-color: #dbdeff !important;
    color: #fff !important;
}

.bg-info-light {
    background-color: #dffaff !important;
    color: #fff;
}

.bg-secondary-light {
    background-color: #ffdbe6 !important;
}

.bg-danger-light {
    background-color: #fbd3d5 !important;
}

.bg-brand-light {
    background-color: #fff2d5 !important;
}

.bg-success-light {
    background-color: #c5fad3 !important;
}


/*-----------------------
Borders
-------------------------*/

.border-boxes span {
    display: inline-block;
    width: 5rem;
    height: 5rem;
    margin: .25rem;
    background-color: #fbfbfd;
}

.border {
    border: 1px solid #e6e6f2 !important;
}

.border-top {
    border-top: 1px solid #e6e6f2 !important;
}

.border-bottom {
    border-bottom: 1px solid #e6e6f2 !important;
}

.border-left {
    border-left: 1px solid #e6e6f2 !important;
}

.border-right {
    border-right: 1px solid #e6e6f2 !important
}


/*-----------------------
 Color
-------------------------*/

.text-primary {
    color: #5969ff !important;
}

.text-brand {
    color: #ffc750 !important;
}

.text-secondary {
    color: #ff407b !important;
}

.text-success {
    color: #2ec551 !important;
}

.text-danger {
    color: #ef172c !important;
}

.text-warning {
    bcolor: #ffc108 !important;
}

.text-info {
    color: #25d5f2 !important;
}

.text-light {
    color: #f0f0f8 !important;
}

.text-dark {
    color: #3d405c !important;
}

.text-gray {
    color: #868aa5 !important;
}

.text-muted {
    color: #7171a6 !important;
}

.rating-color {
    color: #ffa811;
}


/*-----------------------
Borders
-------------------------*/

.border-top-primary {
    border-top-color: #5969ff !important;
}

.border-3 {
    border-width: 3px !important;
}

.border-secondary {
    border-color: #ff407b !important;
}

.border-brand {
    border-color: #ffc750 !important;
}

.border-info {
    border-color: #25d5f2 !important;
}


/*-----------------------
Fontawesome size
-------------------------*/

.fa-xl {}

.fa-lg {}

.fa-md {}

.fa-sm {
    font-size: 24px !important;
}

.fa-xs {
    font-size: 11px !important;
}


/*-----------------------
Social Color
-------------------------*/

.facebook-color {
    color: #3c73df;
}

.twitter-color {
    color: #1ea2f2;
}

.instagram-color {
    color: #9361fa;
}

.rss-color {
    color: #ee802f;
}

.pinterest-color {
    color: #c8232c;
}

.youtube-color {
    color: #ff0000;
}

.medium-color {
    color: #00ab6c;
}

.googleplus-color {
    color: #d34836;
}

.snapchat-color {
    color: #FFFB00;
}


/*-----------------------
Social bg Color
-------------------------*/

.facebook-bgcolor {
    background-color: #3b5898;
    color: #fff;
}

.twitter-bgcolor {
    background-color: #1ea2f2;
    color: #fff;
}

.instagram-bgcolor {
    background-color: #9361fa;
    color: #fff;
}

.rss-bgcolor {
    background-color: #ee802f;
    color: #fff;
}

.pinterest-bgcolor {
    background-color: #c8232c;
    color: #fff;
}

.youtube-bgcolor {
    background-color: #ff0000;
    color: #fff;
}

.googleplus-bgcolor {
    background-color: #d34836;
    color: #fff;
}


/*-----------------------
Progress bar
-------------------------*/

.progress-bar {

    background-color: #5969ff;
}

.primary-progress-bar {
    background-color: #5969ff;
}

.progress-sm {
    height: 5px;
}

.progress-sm {
    height: 5px
}

.progress-md {
    height: 8px
}

.progress-lg {
    height: 12px
}

.progress-xl {
    height: 15px
}

.f-icon,
.if-icon,
.m-icon,
.sl-icon,
.t-icon,
.w-icon {
    cursor: pointer;
    padding: 13px 15px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.m-icon {
    width: 33%;
    display: inline-block;
}

.f-icon:hover,
.if-icon:hover,
.m-icon:hover,
.sl-icon:hover,
.t-icon:hover,
.w-icon:hover {
    background-color: #f8f9fa;
}


/*-----------------------
Legends
-------------------------*/

.legend-item {
    font-size: 14px;
}

.legend-title {}

.legend-text {}


/* ==========================================================================
   0.2. Type Elements
   ========================================================================== */


/* ==========================================================================
   0.3.  Header
   ========================================================================== */


/*-----------------------
Top Header
-------------------------*/

.dashboard-header {}

.dashboard-header .navbar {
    padding: 0px;
    border-bottom: 1px solid #e6e6f2;
    -webkit-box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
    box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
    -webkit-transition: all 0.3s ease;
    min-height: 60px;
}



.navbar-brand {
    display: inline-block;
    margin-right: 1rem;
    line-height: inherit;
    white-space: nowrap;
    padding: 11px 20px;
    font-size: 30px;
    text-transform: uppercase;
    font-weight: 700;
    color: #007bff;
}
.navbar-brand:hover{
    color: #007bff;
}
.navbar-right-top {}

.navbar-right-top .nav-item {
    border-right: 1px solid #e6e6f2;
}

.navbar-right-top .nav-item:last-child {
    border: none;
}

.navbar-right-top .nav-item .nav-link {
    padding: 13px 20px;
    font-size: 16px;
    line-height: 2;
    color: #82849f;
}


/* ------  top-search-bar --------  */

.top-search-bar {
    padding-top: 12px;
    padding-right: 24px;
}


/* ------  Notification Dropdown --------  */

.notification {}

.notification-dropdown {
    min-width: 320px;
}

.notification-dropdown,
.connection-dropdown,
.nav-user-dropdown {
    padding: 0px;
    margin: 0px;
}

.notification-title {
    font-size: 14px;
    color: #3d405c;
    text-align: center;
    padding: 8px 0px;
    border-bottom: 1px solid #e3e3e3;
    line-height: 1.5;
    background-color: #fffffe;
}

.notification-list {}

.notification-list .list-group-item {
    border-radius: 0px;
    padding: 12px;
    margin-top: -1px;
    border-left: transparent;
    border-right: transparent;
}

.notification-list .list-group-item.active {
    z-index: 2;
    color: #3d405c;
    background-color: #f7f7fb;
    border-color: #e1e1e7;
}

.notification-list .list-group-item-action:focus,
.list-group-item-action:hover {
    color: #404040;
    text-decoration: none;
    background-color: #f7f7fb;
}

.notification-list .list-group-item:last-child {}

.notification-info {}

.notification-info .notification-date {
    display: block;
    font-size: 11px;
    margin-top: 4px;
    text-transform: uppercase;
    color: #71748d;
}

.notification .dropdown-toggle::after,
.connection .dropdown-toggle::after,
.nav-user .dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border: none;
}

.notification-list-user-img {
    float: left;
}

.notification-list-user-block {
    padding-left: 50px;
    font-size: 14px;
    line-height: 21px;
}

.notification-list-user-name {
    color: #5969ff;
    font-size: 14px;
    margin-right: 8px;
}

.list-footer,
.conntection-footer {
    font-size: 14px;
    color: #fff;
    text-align: center;
    padding: 10px 0px;
    line-height: 1.5;
    font-weight: 700;
    background-color: #5969ff;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
}

.list-footer a,
.conntection-footer a {
    color: #fff;
}

.list-footer a:hover,
.conntection-footer a:hover {
    color: #fff;
}

.indicator {
    content: '';
    position: absolute;
    top: 16px;
    right: 23px;
    display: inline-block;
    width: 7px;
    height: 7px;
    border-radius: 100%;
    background-color: #ef172c;
    animation: .9s infinite beatHeart;
    transform-origin: center;
}

@keyframes beatHeart {
    0% {
        transform: scale(0.9);
    }
    25% {
        transform: scale(1.1);
    }
    40% {
        transform: scale(0.9);
    }
    60% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(0.9);
    }
}


/* ------  Connection --------  */

.connection {}

.connection-dropdown {}

.connection-list {
    width: 300px;
    padding: 20px;
}

.connection-item {
    border-radius: 3px;
    line-height: 32px;
    text-align: center;
    padding: 12px 7px 4px;
    display: block;
    border: 1px solid transparent;
    color: #3d405c;
    font-size: 12px;
}

.connection-item img {
    width: 32px;
}

.connection-item:hover {
    background-color: #fff;
    border: 1px solid #e6e6f2;
}

.connection-item span {
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}


/* ----- User Nav Dropdown -----*/

.nav-user {}

.nav-user-dropdown {
    padding: 0px;
    min-width: 230px;
    margin: 0px;
}

.nav-user-name {}

.nav-user-info {
    background-color: #5969ff;
    line-height: 1.4;
    padding: 12px;
    color: #fff;
    font-size: 13px;
    border-radius: 2px 2px 0 0;
}

.nav-user-info .status {
    float: left;
    top: 7px;
    left: 0px;
}

.nav-user-dropdown {}

.nav-user-dropdown .dropdown-item {
    display: block;
    width: 100%;
    padding: 12px 22px 15px;
    clear: both;
    font-weight: 400;
    color: #686972;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    font-size: 13px;
    line-height: 0.4;
}

.nav-user-dropdown .dropdown-item:hover {
    background-color: #f7f7fb;
}


/* ------  Top Header User Info --------  */


/* -------------------- 0.4. Sidebar ----------------------- */


.navigation-horizontal {

    width: 100%;
    height: 100%;

    overflow: auto;
   /* background-color: #fff;
    -webkit-box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
    box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
    -webkit-transition: all 0.3s ease;*/
}

.navigation-horizontal .nav-link[data-toggle="collapse"] {
    position: relative;
    display: flex;
    align-items: center;
}

.navigation-horizontal .nav-link[data-toggle="collapse"]::after {
    display: inline-block;
    width: 0;
    height: 0;
    position: absolute;
    right: 8px;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}

.navigation-horizontal .nav-link[data-toggle="collapse"][aria-expanded="false"]:after {
    transform: rotate(-90deg);
}

.navigation-horizontal .nav-link[data-toggle="collapse"]:after {
    transition: transform .35s ease, opacity .35s ease;
    opacity: .5;
}

.navigation-horizontal .navbar-nav {
    width: 100%;
}

.navigation-horizontal .navbar {
    position: relative;
    padding: 0px;
}

.navigation-horizontal .navbar-nav .nav-item {}

.navigation-horizontal .navbar-nav .nav-link {
   font-size: 13px;
    padding: 9px 30px 9px 20px;
    margin-bottom: 2px;
    color: #71789e;
    transition: 0.3s;
    margin: 6px 1px;
}

.navigation-horizontal .nav-link i {
    font-size: 14px;
    margin-right: 9px;
    text-align: center;
    vertical-align: middle;
    line-height: 16px;
}

.nav-divider {
    padding: 10px 14px;
    line-height: 30px;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 12px;
}

.navigation-horizontal .submenu {
       background-color: #e2e2eb;
    margin-top: -6px;
    margin-right: 1px;
    margin-left: 1px;
}

.navigation-horizontal .submenu .nav .nav-item .nav-link {
    font-size: 12px;
    padding: 0px 12px;
    transition: 0.3s;
    line-height: 1;
}

.navigation-horizontal .navbar-nav .nav-link:focus,
.navigation-horizontal .navbar-nav .nav-link.active {
    background-color: #e2e2eb;
    color: #3d405c;
    border-radius: 2px;
}

.navigation-horizontal .navbar-nav .nav-link:focus,
.navigation-horizontal .navbar-nav .nav-link:hover {
    background-color: #e2e2eb;
    color: #3d405c;
    border-radius: 2px;
}

.navigation-horizontal .submenu .nav .nav-item .nav-link:hover {
    color: #3d405c;
    border-radius: 2px;
    background-color: transparent;
}












/* -----------------------
Left Navigation Sidebar
------------------------- */

.nav-left-sidebar {
    position: fixed;
    width: 264px;
    height: 100%;
    top: 60px;
    overflow: auto;
    background-color: #fff;
    -webkit-box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
    box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
    -webkit-transition: all 0.3s ease;
}

.nav-left-sidebar .nav-link[data-toggle="collapse"] {
    position: relative;
    display: flex;
    align-items: center;
}

.nav-left-sidebar .nav-link[data-toggle="collapse"]::after {
    display: inline-block;
    width: 0;
    height: 0;
    position: absolute;
    right: 20px;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}

.nav-left-sidebar .nav-link[data-toggle="collapse"][aria-expanded="false"]:after {
    transform: rotate(-90deg);
}

.nav-left-sidebar .nav-link[data-toggle="collapse"]:after {
    transition: transform .35s ease, opacity .35s ease;
    opacity: .5;
}

.nav-left-sidebar .navbar-nav {
    width: 100%;
}

.nav-left-sidebar .navbar {
    position: relative;
    padding: 14px;
}

.nav-left-sidebar .navbar-nav .nav-item {}

.nav-left-sidebar .navbar-nav .nav-link {
    font-size: 14px;
    padding: 12px;
    /* margin-bottom: 2px; */
    color: #71789e;
    transition: 0.3s;
}

.nav-left-sidebar .nav-link i {
    font-size: 14px;
    margin-right: 9px;
    text-align: center;
    vertical-align: middle;
    line-height: 16px;
}

.nav-divider {
    padding: 10px 14px;
    line-height: 30px;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 12px;
}

.nav-left-sidebar .submenu {
    padding-left: 12px;
    padding-right: 12px;
    /* margin-top: 5px; */
    background: #24274a;
}

.nav-left-sidebar .submenu .nav .nav-item .nav-link {
    font-size: 14px;
    padding: 6px 12px;
    transition: 0.3s;
}

.nav-left-sidebar .navbar-nav .nav-link:focus,
.nav-left-sidebar .navbar-nav .nav-link.active {
    background-color: #e2e2eb;
    color: #3d405c;
    border-radius: 2px;
}

.nav-left-sidebar .navbar-nav .nav-link:focus,
.nav-left-sidebar .navbar-nav .nav-link:hover {
    background-color: #e2e2eb;
    color: #3d405c;
    border-radius: 2px;
}

.nav-left-sidebar .submenu .nav .nav-item .nav-link:hover {
    color: #3d405c;
    border-radius: 2px;
    background-color: transparent;
}

.nav-left-sidebar .navbar-toggler {
    background-color: #fff;
}
.navbar-toggler {
    padding: .25rem 0.5rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: .25rem;
}
/* -----------------------
Leftsidebar - Primary
------------------------- */

.sidebar-primary {
    background-color: #414da7;
}

.sidebar-primary .nav-divider {
    color: #ddddff;
}

.sidebar-primary.nav-left-sidebar .nav-link i {
    color: #8991d4;
}

.sidebar-primary.nav-left-sidebar .navbar-nav .nav-item {}

.sidebar-primary.nav-left-sidebar .navbar-nav .nav-link {
    color: #8991d4;
}

.sidebar-primary.nav-left-sidebar .navbar-nav .nav-link:focus,
.sidebar-primary.nav-left-sidebar .navbar-nav .nav-link:hover {
    color: #fff;
    background-color: #5761c2;
    border-radius: 2px;
}

.sidebar-primary.nav-left-sidebar .navbar-nav .nav-link:focus,
.sidebar-primary.nav-left-sidebar .navbar-nav .nav-link.active {
    background-color: #5761c2;
    color: #fff;
    border-radius: 2px;
}

.sidebar-primary.nav-left-sidebar .submenu .nav .nav-item .nav-link:hover {
    color: #fff;
    border-radius: 2px;
    background-color: transparent;
}


/* -----------------------
Leftsidebar - dark
------------------------- */

.sidebar-dark {
    background-color: #0e0c28;
    -webkit-box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
    box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
    -webkit-transition: all 0.3s ease;
}

.sidebar-dark .nav-divider {
    color: #a4aadb;
    font-size: 12px;
    letter-spacing: 1px;
}

.sidebar-dark.nav-left-sidebar .nav-link i {
    color: #7a80b4;
}

.sidebar-dark.nav-left-sidebar .navbar-nav .nav-item {}

.sidebar-dark.nav-left-sidebar .navbar-nav .nav-link {
    color: #7a80b4;
}

.sidebar-dark.nav-left-sidebar .navbar-nav .nav-link:focus,
.sidebar-dark.nav-left-sidebar .navbar-nav .nav-link:hover {
    color: #fff;
    background-color: #242849;
    border-radius: 2px;
}

.sidebar-dark.nav-left-sidebar .navbar-nav .nav-link:focus,
.sidebar-dark.nav-left-sidebar .navbar-nav .nav-link.active {
    background-color: #242849;
    color: #fff;
    border-radius: 2px;
}

.sidebar-dark.nav-left-sidebar .submenu .nav .nav-item .nav-link:hover {
    color: #fff;
    border-radius: 2px;
    background-color: #242849;
}

.sidebar-dark.nav-left-sidebar .navbar-nav .nav-item .badge{
    position: absolute;
    right: 40px;
    display: none;
}

/*-----navigation dark ---*/


/*-----------------------
Sidebar Page Navigations
-------------------------*/

.sidebar-nav-fixed {
    position: sticky;
    top: 5rem;
}

.sidebar-nav-fixed ul {}

.sidebar-nav-fixed ul li {}

.sidebar-nav-fixed ul li a {
    font-size: 14px;
    color: #71728e;
    display: block;
    padding: 5px 15px;
    background: transparent;
    border-radius: 4px;
    line-height: 1.8;
}

.sidebar-nav-fixed ul li a:hover {
    color: #5969ff;
}

.sidebar-nav-fixed ul li a.active {
    display: block;
    color: #5969ff;
    background: #e0e0fd;
}


/*--- Bootstrap Dropdown ----*/

.dropdown-menu {
    background: #fff;
    font-size: 14px;
    color: #3d405c;
    border: 1px solid #e6e6f2;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: .25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #3d405c;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

.dropdown-item:hover {
    color: #5969ff;
    background: #efeff6;
}

.page-section {}

.dropdown-item.active,
.dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #5969ff;
}


/* -------------------- 0.5.Container / Wrapper ----------------------- */


/*-----------------------
Container / Wrapper
-------------------------*/

.dashboard-main-wrapper {
    min-height: 100%;
    padding-top: 60px;
    position: relative;
}

.dashboard-wrapper {
    position: relative;
    left: 0;
    margin-left: 264px;
    min-height: 870px !important;
}

.dashboard-content {
    padding: 30px 30px 60px 30px;
}


/*-----------------------
Splash Container / Wrapper
-------------------------*/

.splash-container {
    width: 100%;
    max-width: 375px;
    padding: 15px;
    margin: auto;
}

.splash-container .card-header {
    padding: 20px;
}

.splash-description {
    text-align: center;
    display: block;
    line-height: 20px;
    font-size: 1rem;
    margin-top: 5px;
    padding-bottom: 10px;
}

.splash-title {
    text-align: center;
    display: block;
    font-size: 14px;
    font-weight: 300;
}

.splash-container .card-footer-item {
    padding: 12px 28px;
}


/* -------------------- 0.6.Pageheader ----------------------- */


/*-----------------------
Pageheader
-------------------------*/

.page-header {
    margin-bottom: 30px;
}

.page-breadcrumb {}

.page-breadcrumb .breadcrumb {}

.page-breadcrumb .breadcrumb-item {}

.page-breadcrumb .breadcrumb-link {
    color: #a6a6b7;
}

.page-breadcrumb .breadcrumb-link:hover {
    color: #5969ff;
}

.page-breadcrumb .breadcrumb {
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 0px;
    margin-bottom: 0px;
    list-style: none;
    background-color: transparent;
    border-radius: 0px;
    border-top: 1px solid #e0e4ef;
    padding-top: 10px;
    font-size: 12px;
}

.page-breadcrumb .breadcrumb .breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    color: #b1b1c0;
    content: "\f105";
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 600;
}

.page-breadcrumb .breadcrumb-item.active {
    color: #71728e;
}

.pageheader-title {
    font-size: 24px;
    margin-bottom: 8px;
}

.pageheader-text {
    margin-bottom: 14px;
    display: none;
}


/* -------------------- 0.7.Footer ----------------------- */


/*-----------------------
 Footer
-------------------------*/

.footer {
    border-top: 1px solid rgba(152, 166, 173, .2);
    padding: 14px 30px 14px;
    color: #71748d;
    background-color: #fff;
    width: 100%;
    /*position: absolute; bottom: 0;*/
}

.footer-links {}

.footer .footer-links a {
    color: #71748d;
    margin-left: 1.5rem;
    -webkit-transition: all .4s;
    transition: all .4s;
}


/* ==========================================================================
  1. Dashboard Index-sales
   ========================================================================== */

.chart-widget-list {
    margin-top: 60px;
}

.chart-widget-list p {
    border-bottom: 1px solid #e6e6f2;
    margin-bottom: 8px;
    padding-bottom: 8px;
}

.sell-ratio {
    margin-bottom: 15px;
}

.sell-ratio .progress-bar {
    background-color: #25d5f2;
}


/* ==========================================================================
  2. Dashboard Index-Finance
   ========================================================================== */

.dashboard-finance {}

.dashboard-finance .ct-label {
    display: none;
}


/* ==========================================================================
  3. Dashboard Influencer
   ========================================================================== */

.dashboard-influence {}

.influencer-profile-data {}

.influencer-profile-data .user-avatar {
    margin-right: 40px;
}

.influencer-profile-data .user-avatar-info {
    display: block;
    margin-top: 14px;
}

.influencer-profile-data .user-avatar-name {
    float: left;
    padding-right: 20px;
}

.user-avatar-address {}

.influencer-profile-data .user-avatar-address {}

.influencer-profile-data .user-avatar-email {
    text-decoration: underline;
}

.influencer-profile-data .user-social-media {
    padding: 16px 99px;
    text-align: center;
    border-right: 1px solid #e6e6f2;
}

.influencer-profile-data .user-social-media:last-child {
    border-right: transparent;
}

.user-social-box {
    background-color: #f9f9fc;
    border-bottom-left-radius: .25rem;
    border-bottom-right-radius: .25rem;
}

.dashboard-influence .progress {
    width: 86%;
    background-color: #ededfa;
}

.campaign-table {}

.campaign-table .dropdown-toggle::after {
    display: none;
}

.campaign-card {
    padding-bottom: 25px;
    padding-top: 25px;
}

.campaign-img {
    margin-bottom: 25px;
}

.campaign-info {}


/* ==========================================================================
  3. Influencer Finder
   ========================================================================== */

.influence-finder {}

.influence-finder .user-social-media {
    padding: 16px 68px;
    text-align: center;
    border-right: 1px solid #e6e6f2;
}

.influence-finder .user-social-media:last-child {
    border-right: transparent;
}

.influence-finder .icon-circle {
    height: 40px;
    width: 40px;
    display: inline-block;
    padding: 9px;
    line-height: 1.7;
}

.search-btn {
    position: absolute;
    bottom: 20px;
    right: 20px;
}

.influence-finder button.btn {
    height: 47px;
    width: 110px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
}


/* ==========================================================================
 4. Influencer Profile
========================================================================== */

.influence-profile {}

.rating-star {
    font-size: 12px;
    padding-top: 8px;
    color: #ffa811;
}

.campaign-social-box {
    background-color: #f9f9fc;
    border-bottom-left-radius: .25rem;
    border-bottom-right-radius: .25rem;
}

.campaign-metrics {
    border-right: 1px solid #dee2e6;
    text-align: center;
    padding: 8px 79px;
}

.campaign-metrics:last-child {
    border-right: transparent;
}

.influence-profile-content.pills-regular .tab-content {
    background-color: transparent;
    padding: 0px;
    border: transparent;
    border-radius: 0px;
    border-top-left-radius: 0px;
}

.review-block {}

.review-text {}


/* ==========================================================================
  5. Dashboard Ecommerce
   ========================================================================== */

.dashboard-ecommerce {}


/* -------------- social sales -------------------*/

.social-sales {}

.social-sales-icon-circle {
    height: 40px;
    width: 40px;
    line-height: 1;
    text-align: center;
    border-radius: 100%;
    padding: 12px 13px;
    display: inline-block;
}

.social-sales-content {}

.social-sales-name {}

.social-sales-count {
    float: right;
    line-height: 2.9;
}


/* -------------- traffic sales -------------------*/

.traffic-sales {}

.traffic-sales-content {
    padding: 20px !important;
}

.traffic-sales-name {}

.traffic-sales-amount {
    float: right;
    color: #3d405c;
}


/* -------------- country sales -------------------*/

.country-sales {}

.country-sales-content {
    padding: 20px !important;
}




/* ==========================================================================
   Ecommerce Products
   ========================================================================== */

.product-thumbnail{ border:1px solid #e6e6f2; background-color: #fff; margin-bottom: 30px; }
.product-img{ text-align: center; padding: 35px 0px;  }
.product-img-head{position: relative;}
.ribbons{
    -webkit-clip-path: polygon(10% 25%, 10% 0, 35% 0%, 65% 0%, 90% 0, 90% 25%, 90% 50%, 91% 100%, 50% 73%, 10% 100%, 10% 50%);
clip-path: polygon(10% 25%, 10% 0, 35% 0%, 65% 0%, 90% 0, 90% 25%, 90% 50%, 91% 100%, 50% 73%, 10% 100%, 10% 50%);

    position: absolute;
    top: 0px;
    background-color: #59b3ff;
    padding: 31px 15px;
    text-align: center;
    left: 10px;  font-family: 'Circular Std Medium'; color: #fff;}

   .ribbons-text{transform: rotate(90deg);
    position: absolute;
    top: 11px;
    left: 10px;
    color: #fff;}
.product-wishlist-btn{height: 40px;
    width: 40px;
    border: 2px solid #dfdfec;
    border-radius: 100px;
    font-size: 18px;
    line-height: 2.3;
    color: #dfdfec;
    text-align: center;
    display: block;
    position: absolute;
    right: 15px;
    top: 15px;}
    .product-wishlist-btn:hover{border-color: #ff3367; color: #ff3367;transition: 0.3s ease;}
    .product-wishlist-btn.active{border-color: #ff3367; color: #ff3367;transition: 0.3s ease;}
.product-content{ border-top:1px solid #e6e6f2; padding: 23px;}
.product-content-head{ position: relative; margin-bottom: 25px; }
.product-title{font-size: 16px; margin-bottom: 5px;}
.product-rating{font-size: 12px;

    color: #ffa811;}
.product-price{ position: absolute; top: 0; right: 0; font-size: 16px; color: #3d405c;font-family: 'Circular Std Medium'; line-height: 1;}
.product-btn{}
.product-del{font-size: 14px; color: #71748d;}
.product-sidebar{ background-color: #fff; border:1px solid #e6e6f2;  }
.product-sidebar-widget{border-bottom: 1px solid #e6e6f2; padding: 10px 20px; margin-bottom: 10px;}
.product-sidebar-widget:last-child{border:0px;}
.product-sidebar-widget-title{font-size: 16px; margin-bottom: 10px;}

.custom-color-red.custom-radio .custom-control-input:checked~.custom-control-label::before {
    background-color: #a40000;
    border-color: #a40000;
}

.custom-color-blue.custom-radio .custom-control-input:checked~.custom-control-label::before{background-color: #0d4197; border-color: #0d4197}
.custom-color-yellow.custom-radio .custom-control-input:checked~.custom-control-label::before{background-color: #ffdc40; border-color: #ffdc40;}
.custom-color-black.custom-radio .custom-control-input:checked~.custom-control-label::before{background-color: #111111; border-color: #111111;}





.product-slider{background-color: #fff;  border-top-left-radius: 4px; border-bottom-left-radius: 4px; padding: 110px;}
.product-carousel{}
.product-carousel .carousel-indicators {
    position: absolute;
    right: 0;
    bottom: -80px;
    left: 0;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}

.product-carousel .carousel-indicators li {
  position: relative;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 10px;
    height: 10px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgb(224, 224, 231);
    border-radius: 100%;
}
.product-carousel .carousel-indicators li.active{ background-color: #5969ff; }
.product-carousel .carousel-control-next, .carousel-control-prev {display: none;}


.product-details{ background-color: #fff; padding: 30px; border-top-right-radius: 4px; border-bottom-right-radius: 4px; position: relative;}
.product-colors {padding-bottom: 10px; margin-bottom: 10px;}
.product-size{padding-bottom: 14px; margin-bottom: 10px; position: relative;}
.product-colors input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0;
    display: none;
}
.product-description{}


.product-colors label {
    display: inline-block;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    transition: all .2s ease-in-out;
    animation-timing-function: ease-in-out;
    animation-iteration-count: infinite;
    animation-duration: 1.6s;
    animation-name: dot-anim;
}
.product-colors .radio:checked + label {
    animation-play-state: paused;
}
.product-colors label:before {
     content: "\f00c";
    position: absolute;
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 900;
    padding: 0px;
    margin: 4px 8px;
    color: #fff;
    font-size:  14px;
}


.product-colors .radio:checked + label:after {
    background: transparent;
    transition: all .5s;
    transform: scale(1);
}
/**** BLUE Radio button code ****/
#radio-1 + label {
    left: -60vw;
    background: #0a3c93;
    animation-delay: 0s;
}
#radio-1 + label:before {
    transform: scale(0);
}
#radio-1:checked + label:before {
    transform: scale(1);
    transition: all .4s;
}


/**** Yellow Radio button code ****/
#radio-2 + label {
    left: -60vw;
    background: #ffdc40;
    animation-delay: 0s;
}
#radio-2 + label:before {
    transform: scale(0);
}
#radio-2:checked + label:before {
    transform: scale(1);
    transition: all .4s;
}

/**** Red Radio button code ****/
#radio-3 + label {
    left: -60vw;
    background: #a00000;
    animation-delay: 0s;
}
#radio-3 + label:before {
    transform: scale(0);
}
#radio-3:checked + label:before {
    transform: scale(1);
    transition: all .4s;
}



.product-qty{position: absolute;
    right: 0;
    top: 0px;}

.quantity {
  position: relative;
}

.product-qty input[type=number]::-webkit-inner-spin-button,
.product-qty input[type=number]::-webkit-outer-spin-button
{
  -webkit-appearance: none;
  margin: 0;
}

.product-qty input[type=number]
{
  -moz-appearance: textfield;
}

.quantity input {
  width: 65px;
  height: 41px;
  line-height: 1.65;
  float: left;
  display: block;
  padding: 0;
  margin: 0;
  padding-left: 20px;
  border: 1px solid #eee;
}

.quantity input:focus {
  outline: 0;
}

.quantity-nav {
  float: left;
  position: relative;
  height: 39px;
}

.quantity-button {
  position: relative;
  cursor: pointer;
  border-left: 1px solid #e6e6f2;
  width: 20px;
  text-align: center;
  color: #333;
  font-size: 13px;
  font-family: 'Circular Std Medium';

  line-height: 1.6;
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
  background-color: #efeff6;
}

.quantity-button.quantity-up {
  position: absolute;
  height: 50%;
  top: 0;
  border-bottom: 1px solid #e6e6f2;
}

.quantity-button.quantity-down {
  position: absolute;
  bottom: -1px;
  height: 50%;
}













/* ==========================================================================
  2. UI Elements
  ========================================================================== */


/* -----------------------
2.1  Alerts
-------------------------*/


/* -----------------------
2.2  Buttons
-------------------------*/

.btn {
    font-size: 14px;
    padding: 9px 16px;
    border-radius: 2px;
}

.btn-wishlist {
    background-color: #efeff6;
    border-radius: 100px;
    height: 30px;
    width: 30px;
    padding: 5px 3px;
    display: inline-block;
    font-size: 14px;
    color: #3d405c;
    text-align: center;
    line-height: 1.7;
}

.btn-wishlist:hover {
    background-color: #ff407b;
    color: #fff;
}


/*--- btn default --*/

.btn-brand {
    color: #2e2f39;
    background-color: #ffc750;
    border-color: #ffc750;
}

.btn-brand:hover {
    color: #2e2f39;
    background-color: #efb63e;
    border-color: #efb63e;
}

.btn-brand.focus,
.btn-brand:focus {
    color: #2e2f39;
    background-color: #efb63e;
    border-color: #efb63e;
    box-shadow: none;
}


/*--- btn primary --*/

.btn-primary {
    color: #fff;
    background-color: #5969ff;
    border-color: #5969ff;
}

.btn-primary:hover {
    color: #fff;
    background-color: #4656e9;
    border-color: #4656e9;
}

.btn-primary.focus,
.btn-primary:focus {
    color: #fff;
    background-color: #4656e9;
    border-color: #4656e9;
    box-shadow: 0 0 0 1px rgb(37, 52, 158);
}

.btn-primary:not(:disabled):not(.disabled).active:focus,
.btn-primary:not(:disabled):not(.disabled):active:focus,
.show>.btn-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgb(37, 52, 158);
}

.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active,
.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #4656e9;
    border-color: #4656e9;
}


/*--- btn secondary --*/

.btn-secondary {
    color: #fff;
    background-color: #ff407b;
    border-color: #ff407b;
}

.btn-secondary:hover {
    color: #fff;
    background-color: #f0346e;
    border-color: #f0346e;
}

.btn-secondary.focus,
.btn-secondary:focus {
    color: #fff;
    background-color: #f0346e;
    border-color: #f0346e;
    box-shadow: 0 0 0 1px rgb(222, 17, 80);
}

.btn-secondary:not(:disabled):not(.disabled).active,
.btn-secondary:not(:disabled):not(.disabled):active,
.show>.btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #f0346e;
    border-color: #f0346e;
}


/*--- btn success --*/

.btn-success {
    color: #fff;
    background-color: #2ec551;
    border-color: #2ec551;
}

.btn-success:hover {
    color: #fff;
    background-color: #21ae41;
    border-color: #21ae41;
}

.btn-success.focus,
.btn-success:focus {
    color: #fff;
    background-color: #21ae41;
    border-color: #21ae41;
    box-shadow: 0 0 0 1px rgb(18, 158, 50);
}

.btn-success:not(:disabled):not(.disabled).active,
.btn-success:not(:disabled):not(.disabled):active,
.show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #21ae41;
    border-color: #21ae41;
}


/*--- btn danger --*/

.btn-danger {
    color: #fff;
    background-color: #ef172c;
    border-color: #ef172c;
}

.btn-danger:hover {
    color: #fff;
    background-color: #da0419;
    border-color: #da0419;
}

.btn-danger.focus,
.btn-danger:focus {
    color: #fff;
    background-color: #da0419;
    border-color: #da0419;
    box-shadow: 0 0 0 1px rgb(218, 4, 25);
}

.btn-danger:not(:disabled):not(.disabled).active,
.btn-danger:not(:disabled):not(.disabled):active,
.show>.btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #da0419;
    border-color: #da0419;
}


/*--- btn warning --*/

.btn-warning {
    color: #2e2f39;
    background-color: #ffc108;
    border-color: #ffc108;
}

.btn-warning:hover {
    color: #2e2f39;
    background-color: #f3b600;
    border-color: #f3b600;
}

.btn-warning.focus,
.btn-warning:focus {
    color: #2e2f39;
    background-color: #f3b600;
    border-color: #f3b600;
    box-shadow: 0 0 0 1px rgb(238, 182, 0);
}

.btn-warning:not(:disabled):not(.disabled).active,
.btn-warning:not(:disabled):not(.disabled):active,
.show>.btn-warning.dropdown-toggle {
    color: #2e2f39;
    background-color: #f3b600;
    border-color: #f3b600;
}


/*--- btn info --*/

.btn-info {
    color: #fff;
    background-color: #25d5f2;
    border-color: #25d5f2;
}

.btn-info:hover {
    color: #fff;
    background-color: #17c0dc;
    border-color: #17c0dc;
}

.btn-info.focus,
.btn-info:focus {
    color: #fff;
    background-color: #17c0dc;
    border-color: #17c0dc;
    box-shadow: 0 0 0 1px rgb(238, 184, 22);
}

.btn-info:not(:disabled):not(.disabled).active,
.btn-info:not(:disabled):not(.disabled):active,
.show>.btn-info.dropdown-toggle {
    color: #fff;
    background-color: #17c0dc;
    border-color: #17c0dc;
}


/*--- btn light --*/

.btn-light {
    color: #71738d;
    background-color: #f0f0f8;
    border-color: #f0f0f8;
}

.btn-light:hover {
    color: #2e2f39;
    background-color: #d7d7df;
    border-color: #d7d7df;
}

.btn-light.focus,
.btn-light:focus {
    color: #2e2f39;
    background-color: #d7d7df;
    border-color: #d7d7df;
    box-shadow: 0 0 0 1px rgb(215, 215, 223);
}


/*--- btn dark --*/

.btn-dark {
    color: #fff;
    background-color: #2e2f39;
    border-color: #2e2f39;
}

.btn-dark:hover {
    color: #2e2f39;
    background-color: #d7d7df;
    border-color: #d7d7df;
}

.btn-dark.focus,
.btn-dark:focus {
    color: #fff;
    background-color: #d7d7df;
    border-color: #d7d7df;
    box-shadow: 0 0 0 1px rgb(46, 47, 57);
}


/*--- btn outline brand --*/

.btn-outline-brand {
    color: #2e2f39;
    background-color: transparent;
    border-color: #ffc750;
}

.btn-outline-brand:hover {
    color: #2e2f39;
    background-color: #ffc750;
    border-color: #ffc750;
}

.btn-outline-brand.focus,
.btn-outline-brand:focus {
    color: #2e2f39;
    background-color: transparent;
    border-color: #ffc750;
    box-shadow: 0 0 0 1px rgb(255, 195, 89);
}


/*--- btn outline primary --*/

.btn-outline-primary {
    color: #5969ff;
    background-color: transparent;
    border-color: #5969ff;
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #5969ff;
    border-color: #5969ff;
}

.btn-outline-primary.focus,
.btn-outline-primary:focus {
    color: #fff;
    background-color: #5969ff;
    border-color: #5969ff;
    box-shadow: 0 0 0 1px rgb(65, 77, 167);
}


/*--- btn outline secondary --*/

.btn-outline-secondary {
    color: #ff407b;
    background-color: transparent;
    border-color: #ff407b;
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #ff407b;
    border-color: #ff407b;
}

.btn-outline-secondary.focus,
.btn-outline-secondary:focus {
    color: #fff;
    background-color: #ff407b;
    border-color: #ff407b;
    box-shadow: 0 0 0 1px rgb(227, 45, 201);
}

.btn-outline-secondary:not(:disabled):not(.disabled).active,
.btn-outline-secondary:not(:disabled):not(.disabled):active,
.show>.btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #ff407b;
    border-color: #ff407b;
}


/*--- btn outline success --*/

.btn-outline-success {
    color: #2ec551;
    background-color: transparent;
    border-color: #2ec551;
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #2ec551;
    border-color: #2ec551;
}

.btn-outline-success.focus,
.btn-outline-success:focus {
    color: #fff;
    background-color: #2ec551;
    border-color: #2ec551;
    box-shadow: 0 0 0 1px rgb(40, 167, 69);
}


/*--- btn outline danger --*/

.btn-outline-danger {
    color: #ef172c;
    background-color: transparent;
    border-color: #ef172c;
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #ef172c;
    border-color: #ef172c;
}

.btn-outline-danger.focus,
.btn-outline-danger:focus {
    color: #fff;
    background-color: #ef172c;
    border-color: #ef172c;
    box-shadow: 0 0 0 1px rgb(239, 23, 44);
}


/*--- btn outline warning --*/

.btn-outline-warning {
    color: #2e2f39;
    background-color: transparent;
    border-color: #ffc108;
}

.btn-outline-warning:hover {
    color: #2e2f39;
    background-color: #ffc108;
    border-color: #ffc108;
}

.btn-outline-warning.focus,
.btn-outline-warning:focus {
    color: #2e2f39;
    background-color: #ffc108;
    border-color: #ffc108;
    box-shadow: 0 0 0 1px rgb(255, 193, 8);
}


/*--- btn outline info --*/

.btn-outline-info {
    color: #25d5f2;
    background-color: transparent;
    border-color: #25d5f2;
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #25d5f2;
    border-color: #25d5f2;
}

.btn-outline-info.focus,
.btn-outline-info:focus {
    color: #fff;
    background-color: #25d5f2;
    border-color: #0998b0;
    box-shadow: 0 0 0 1px rgb(238, 184, 22);
}


/*--- btn outline light --*/

.btn-outline-light {
    color: #7171a6;
    background-color: transparent;
    border-color: #e6e6f2;
}

.btn-outline-light:hover {
    color: #71748d;
    background-color: #f0f0f8;
    border-color: #cacae0;
}

.btn-outline-light.focus,
.btn-outline-light:focus {
    color: #71748d;
    background-color: #f0f0f8;
    border-color: #cacae0;
    box-shadow: 0 0 0 1px rgb(235, 235, 237);
}


/*--- btn outline-dark --*/

.btn-outline-dark {
    color: #2e2f39;
    background-color: transparent;
    border-color: #2e2f39;
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #2e2f39;
    border-color: #2e2f39;
}

.btn-outline-dark.focus,
.btn-outline-dark:focus {
    color: #fff;
    background-color: #2e2f39;
    border-color: #2e2f39;
    box-shadow: 0 0 0 1px rgb(46, 47, 57);
}


/*--- btn size --*/

.btn-xs {
    padding: 4px 10px;
    font-size: 12px;
}

.btn-sm {
    padding: 5px 12px;
    font-size: 14px;
}

.btn-lg {
    padding: 11px 20px;
    font-size: 15px;
}


/*--- btn social --*/

.btn-facebook {
    color: #fff;
    background-color: #3c73df;
    border-color: #3c73df;
}

.btn-google-plus {
    color: #fff;
    background-color: #eb5e4c;
    border-color: #eb5e4c;
}

.btn-twitter {
    color: #fff;
    background-color: #2caeff;
    border-color: #2caeff;
}

.btn-instagram {
    color: #fff;
    background-color: #9361fa;
    border-color: #9361fa;
}

.btn-pinterest {
    color: #fff;
    background-color: #c8232c;
    border-color: #c8232c;
}




/*--- cropper document btn --*/

.btn-rounded {
    border-radius: 100px;
}


/*--- cropper document btn --*/

.docs-buttons .btn,
.docs-data .input-group {
    margin-bottom: 5px;
}


/*-----------------------
btn-link
-------------------------*/

.btn-link {
    color: #5969ff;
}

.btn-link:hover {
    text-decoration: none;
}

.btn-primary-link {
    color: #5969ff !important;
}

.btn-brand-link {
    color: #ffc750 !important;
}

.btn-secondary-link {
    color: #ff407b !important;
}


/* -----------------------
2.3  Cards
-------------------------*/

.card {
    margin-bottom: 30px;
    border: none;
    -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
}

.card-header {
    background-color: #fff;
    border-bottom: 1px solid #e6e6f2;
}

.card-title {}

.card-subtitle {
    font-size: 14px;
}

.card-body {}

.card-text {}

.card-footer {
    border-top: 1px solid #e6e6f2;
    background: #f6f6ff;
}

.card-link {}

.toolbar {
    font-size: 18px;
}

.card-header-title {
    margin: 0;
    line-height: 2;
}

.card-toolbar-tabs {}

.card-toolbar-tabs .nav.nav-pills {}

.card-toolbar-tabs .nav.nav-pills .nav-item {}

.card-toolbar-tabs .nav.nav-pills .nav-item .nav-link {
    font-size: 14px;
    padding: 6px 10px;
}

.card-toolbar-tabs .nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #5969ff;
    background-color: transparent;
}


/*------------------------- Card Varience --------------------------*/

.card-figure {
    position: relative;
    padding: 10px;
    border-radius: 2px;
}

.card-figure .figure {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-bottom: 0;
}

.card-figure .figure-caption {
    display: block;
    margin-top: 10px;
    font-size: .875rem;
    color: inherit;
}

.figure-title {
    margin: 0 0 .125rem;
    text-transform: capitalize;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-figure.has-hoverable {
    -webkit-transition: -webkit-transform .2s, -webkit-box-shadow .2s;
    transition: -webkit-transform .2s, -webkit-box-shadow .2s;
    transition: transform .2s, box-shadow .2s;
    transition: transform .2s, box-shadow .2s, -webkit-transform .2s, -webkit-box-shadow .2s;
}

.card-figure.has-hoverable:focus,
.card-figure.has-hoverable:hover {
    -webkit-transform: translate3d(0, -.25rem, 0);
    transform: translate3d(0, -.25rem, 0);
    -webkit-box-shadow: 0 5px 15px 0 rgba(61, 70, 79, .15);
    box-shadow: 0 5px 15px 0 rgba(61, 70, 79, .15);
}

.figure-img {
    position: relative;
    margin-bottom: 0;
    overflow: hidden;
}

.figure-img .img-link {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: hsla(0, 0%, 100%, .96);
    opacity: 0;
    z-index: 2;
    -webkit-transition: opacity .2s ease;
    transition: opacity .2s ease;
}

.card-figure:hover .img-link {
    opacity: 1;
}

.figure-img .img-link .tile {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -1rem;
    margin-left: -1rem;
}

.tile.bg-danger {
    color: #fff;
}

.tile-circle {
    border-radius: 4rem;
}

.figure-action {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    display: block;
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.card-figure:hover .figure-action {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    z-index: 2;
}

.figure-tools {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    padding: .5rem;
    opacity: 0;
    z-index: 2;
    -webkit-transition: opacity .3s ease;
    transition: opacity .3s ease;
}

.card-figure:hover .figure-tools {
    opacity: 1;
}

.figure-description {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 2.25rem .5rem;
    background-color: hsla(0, 0%, 100%, .96);
    opacity: 0;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
    z-index: 1;
}

.card-figure:hover .figure-description {
    opacity: 1;
}

.figure-attachment {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    min-height: 200px;
    background-color: #f5f5f5;
    overflow: hidden;
}

.btn-reset {
    padding: 0 2px;
    font-size: inherit;
    line-height: inherit;
    color: inherit;
    background-color: transparent;
    border: 0;
    cursor: pointer;
}


/*------------------------- Card Navigation --------------------------*/

.card-header-tabs {}

.card-header-pills {}

.pills-regular .card-header-pills.nav.nav-pills .nav-item .nav-link.active {
    background-color: #5969ff;
    color: #fff;
}


/* -----------------------
2.4  General
-------------------------*/


/*---------Tooltips----------*/


/*--------- Popovers ----------------*/

.popover {
    border: 1px solid rgb(230, 230, 242);
}

.bs-popover-auto[x-placement^=right] .arrow::before,
.bs-popover-right .arrow::before {
    left: 0;
    border-right-color: rgb(230, 230, 242);
}

.popover-header {
    padding: .5rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    color: inherit;
    background-color: #f7f7fd;
    border-bottom: 1px solid #efeff6;
    border-top-left-radius: calc(.3rem - 1px);
    border-top-right-radius: calc(.3rem - 1px);
}


/* -----------------------
2.5  Modals
-------------------------*/

.bd-example-row .row>.col,
.bd-example-row .row>[class^=col-] {
    padding-top: .75rem;
    padding-bottom: .75rem;
    background-color: rgba(86, 61, 124, .15);
    border: 1px solid rgba(86, 61, 124, .2);
}


/* -----------------------
2.6  Notification
-------------------------*/


/* -----------------------
2.7  Icon
-------------------------*/

.icon-circle {
    border-radius: 100%;
}

.icon-circle-small {
    line-height: 1;
    padding: 4px 2px;
    text-align: center;
    font-size: 12px;
    display: inline-block;
    border-radius: 100%;
}

.icon-circle-medium {
    line-height: 1;
    padding: 22px 2px;
    text-align: center;
    font-size: 12px;
    display: inline-block;
    border-radius: 100%;
}

.icon-box {}

.icon-box-xxl {}

.icon-box-xl {}

.icon-box-lg {
    height: 68px;
    width: 68px;
}

.icon-box-md {
    height: 32px;
    width: 32px;
}

.icon-box-sm {}

.icon-box-xs {
    height: 20px;
    width: 20px;
}


/* -----------------------
2.8  Tabs
-------------------------*/

.tab-regular {}

.tab-regular .nav.nav-tabs {
    border-bottom: transparent;
}

.tab-regular .nav.nav-tabs .nav-item {}

.tab-regular .nav.nav-tabs .nav-link {
    display: block;
    padding: 17px 49px;
    color: #71748d;
    background-color: #dddde8;
    margin-right: 5px;
    border-color: #dddde8;
}

.tab-regular .nav-tabs .nav-link:focus,
.nav-tabs .nav-link:hover {}

.tab-regular .nav-tabs .nav-link.active {
    background-color: #fff;
    border-color: #e6e6f2 #e6e6f2 #fff;
    color: #5969ff;
}

.tab-regular .tab-content {
    background-color: #fff;
    padding: 30px;
    border: 1px solid #e6e6f2;
    border-radius: 4px;
    border-top-left-radius: 0px
}


/*----- Tabs Vertical CSS ----*/

.tab-vertical {}

.tab-vertical .nav.nav-tabs {
    float: left;
    display: block;
    margin-right: 0px;
    border-bottom: 0;
}

.tab-vertical .nav.nav-tabs .nav-item {
    margin-bottom: 6px;
}

.tab-vertical .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    background: #fff;
    padding: 17px 49px;
    color: #71748d;
    background-color: #dddde8;
    -webkit-border-radius: 4px 0px 0px 4px;
    -moz-border-radius: 4px 0px 0px 4px;
    border-radius: 4px 0px 0px 4px;
}

.tab-vertical .nav-tabs .nav-link.active {
    color: #5969ff;
    background-color: #fff !important;
    border-color: transparent !important;
}

.tab-vertical .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 4px !important;
    border-top-right-radius: 0px !important;
}

.tab-vertical .tab-content {
    overflow: auto;
    -webkit-border-radius: 0px 4px 4px 4px;
    -moz-border-radius: 0px 4px 4px 4px;
    border-radius: 0px 4px 4px 4px;
    background: #fff;
    padding: 30px;
}


/*----- Tabs Outline CSS ----*/

.tab-outline {}

.tab-outline .nav.nav-tabs {
    border-bottom: transparent;
}

.tab-outline .nav.nav-tabs .nav-item .nav-link {
    display: block;
    padding: 17px 49px;
    color: #71748d;
    background-color: #e9e9f2;
    border-color: #c4c4cf #c4c4cf #c4c4cf;
    margin-right: 3px;
}

.tab-outline .nav.nav-tabs .nav-item {}

.tab-outline .nav-tabs .nav-link.active {
    color: #5969ff !important;
    background-color: transparent !important;
    border-color: #c4c4cf #c4c4cf #efeff6 !important;
}

.tab-outline .nav-tabs .nav-link:focus,
.nav-tabs .nav-link:hover {
    border-color: transparent;
    color: #5969ff !important;
}

.tab-outline .tab-content {
    padding: 30px;
    border: 1px solid #c4c4cf;
    border-radius: 4px;
    border-top-left-radius: 0px;
}


/*----- Tabs Vertical Outline CSS ----*/

.tab-vertical-outline {}

.tab-vertical-outline .nav.nav-tabs {
    float: left;
    display: block;
    margin-right: 0px;
    border-bottom: 0;
}

.tab-vertical-outline .nav.nav-tabs .nav-item {
    margin-bottom: 6px;
}

.tab-vertical-outline .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    background: #fff;
    padding: 17px 49px;
    color: #71748d;
    background-color: #e9e9f2;
    -webkit-border-radius: 4px 0px 0px 4px;
    -moz-border-radius: 4px 0px 0px 4px;
    border-radius: 4px 0px 0px 4px;
    border: 1px solid #c4c4cf !important;
}

.tab-vertical-outline .nav-tabs .nav-link.active {
    color: #5969ff;
    border: 1px solid #c4c4cf !important;
    background: transparent;
    border-right: 1px solid #efeff6 !important;
}

.tab-vertical-outline .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 4px !important;
    border-top-right-radius: 0px !important;
}

.tab-vertical-outline .tab-content {
    overflow: auto;
    -webkit-border-radius: 0px 4px 4px 4px;
    -moz-border-radius: 0px 4px 4px 4px;
    border-radius: 0px 4px 4px 4px;
    background: transparent;
    padding: 30px;
    border: 1px solid #c4c4cf;
    left: -1px;
    position: relative;
    z-index: -1;
}


/*--- Simple Card Tabs ----*/

.simple-card {
    background-color: #fff;
    border-radius: 4px;
    border: 1px solid #e9e9f2;
}

.simple-card .nav.nav-tabs {
    border-bottom: 1px solid #e6e6f2;
}

.simple-card .nav.nav-tabs .nav-item {}

.simple-card .nav.nav-tabs .nav-item .nav-link {
    padding: 17px 49px;
    color: #71748d;
    background: #f8f8fb;
    border-color: #e9e9f2 #e9e9f2 #e9e9f2;
    margin-right: -1px;
    border-radius: 0px;
    border-top: transparent;
}

.simple-card .nav-tabs .nav-link.active {
    color: #5969ff !important;
    background-color: transparent !important;
    border-color: #e9e9f2 #e9e9f2 #fff !important;
}

.simple-card .tab-content {
    padding: 30px;
}


/*--- Simple Card Outline Tabs ----*/

.simple-outline-card {
    border-radius: 4px;
    border: 1px solid #c4c4cf;
}

.simple-outline-card .nav.nav-tabs {
    border-bottom: 1px solid #c4c4cf;
}

.simple-outline-card .nav.nav-tabs .nav-item {}

.simple-outline-card .nav.nav-tabs .nav-item .nav-link {
    padding: 17px 49px;
    color: #71748d;
    background: #e9e9f2;
    border-color: #c4c4cf #c4c4cf #c4c4cf;
    margin-right: -1px;
    border-radius: 0px;
    border-top: transparent;
}

.simple-outline-card .nav-tabs .nav-link.active {
    color: #5969ff !important;
    background-color: transparent !important;
    border-color: #c4c4cf #c4c4cf #efeff6 !important;
}

.simple-outline-card .tab-content {
    padding: 30px;
}


/* -----------------------
Pills Regular
-------------------------*/

.pills-regular {}

.pills-regular .nav.nav-pills {}

.pills-regular .nav.nav-pills .nav-item {}

.pills-regular .nav.nav-pills .nav-item .nav-link {
    background-color: #dddde8;
    padding: 14px 26px;
    margin-right: 3px;
    color: #71748d;
    font-size: 16px;
    margin-bottom: 4px;
}

.pills-regular .nav.nav-pills .nav-item .nav-link.active {
    background-color: #fff;
    color: #5969ff;
}

.pills-regular .tab-content {
    background-color: #fff;
    padding: 30px;
    border-radius: 4px;
}


/* -----------------------
Pills Outline
-------------------------*/

.pills-outline {}

.pills-outline .nav.nav-pills {}

.pills-outline .nav.nav-pills .nav-item {}

.pills-outline .nav.nav-pills .nav-item .nav-link {
    background-color: transparent;
    padding: 16px 52px;
    margin-right: 3px;
    color: #71748d;
    border: 1px solid #c4c4cf;
}

.pills-outline .nav.nav-pills .nav-item .nav-link.active {
    background-color: transparent;
    color: #5969ff;
}

.pills-outline .tab-content {
    background-color: transparent;
    padding: 30px;
    border-radius: 4px;
    border: 1px solid #c4c4cf;
}


/* -----------------------
Pills vertical
-------------------------*/

.pills-vertical {}

.pills-vertical .nav.nav-pills {}

.pills-vertical .nav.nav-pills .nav-link {
    background-color: #dddde8;
    padding: 16px 52px;
    margin-bottom: 4px;
    color: #71748d;
}

.pills-vertical .nav.nav-pills .nav-link.active {
    background-color: #fff;
    color: #5969ff;
}

.pills-vertical .tab-content {
    background-color: #fff;
    padding: 30px;
    border-radius: 4px;
}


/* -----------------------
2.9  Accordions
-------------------------*/

.accrodion-regular {}

.accrodion-regular .card {
    margin-bottom: 5px;
}

.accrodion-regular .card-body {
    margin-top: -1px;
}

.accrodion-regular .card .card-header {
    font-size: 16px;
    padding: 10px;
    background-color: transparent;
}

.accrodion-regular .card .card-header:first-child {
    border-radius: calc(4px - 1px) calc(4px - 1px) 0 0;
}

.accrodion-regular .card .card-header .btn-link {
    color: #3d405c;
    text-decoration: none;
}

.accrodion-regular .card .card-header .btn-link:hover {
    color: #f12357;
    text-decoration: none;
}

.accrodion-outline {}

.accrodion-outline .card {
    margin-bottom: 5px;
    background-color: transparent;
    border-color: #d9d9e3;
    box-shadow: none;
}

.accrodion-outline .card-body {
    border: 1px solid #d9d9e3;
    margin-top: -1px;
}

.accrodion-outline .card .card-header {
    font-size: 16px;
    padding: 10px;
    border: 1px solid #d9d9e3;
    background-color: transparent;
}

.accrodion-outline .card .card-header:first-child {
    border-radius: calc(4px - 1px) calc(4px - 1px) 0 0;
}

.accrodion-outline .card .card-header .btn-link {
    color: #3d405c;
    text-decoration: none;
}

.accrodion-outline .card .card-header .btn-link:hover {
    color: #f12357;
    text-decoration: none;
}


/* -----------------------
2.10  Typography
-------------------------*/


/* -----------------------
2.11  Listgroup
-------------------------*/

.list-group-item {
    position: relative;
    display: block;
    padding: 16px 20px;
    margin-bottom: -1px;
    border: 1px solid #e6e6f2;
}


/* -----------------------
2.12  Multiselect
-------------------------*/


/*-----------------------
2.13 Badge
-------------------------*/

.badge {
    display: inline-block;
    padding: 3px 7px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
}

.badge-primary {
    background-color: #5969ff;
}

.badge-primary[href]:focus,
.badge-primary[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #4656e9;
}

.badge-brand {
    background-color: #ffb739;
    color: #2e2f39;
}

.badge-brand[href]:focus,
.badge-brand[href]:hover {
    color: #2e2f39;
    background-color: #efb63e;
    text-decoration: none;
}

.badge-secondary {
    background-color: #ff407b;
}

.badge-secondary[href]:focus,
.badge-secondary[href]:hover {
    color: #fff;
    background-color: #ff407b;
    text-decoration: none;
}

.badge-success {
    background-color: #21ae41;
}

.badge-success[href]:focus,
.badge-success[href]:hover {
    color: #fff;
    background-color: #21ae41;
    text-decoration: none;
}

.badge-danger {
    background-color: #da0419;
}

.badge-danger[href]:focus,
.badge-danger[href]:hover {
    color: #fff;
    background-color: #ef172c;
    text-decoration: none;
}

.badge-warning {
    background-color: #f3b600;
    color: #2e2f39;
}

.badge-warning[href]:focus,
.badge-warning[href]:hover {
    color: #2e2f39;
    background-color: #f3b600;
    text-decoration: none;
}

.badge-info {
    background-color: #0998b0;
}

.badge-info[href]:focus,
.badge-info[href]:hover {
    color: #fff;
    background-color: #17c0dc;
    text-decoration: none;
}

.badge-light {
    background-color: #efeff6;
    color: #757691;
}

.badge-light[href]:focus,
.badge-light[href]:hover {
    color: #2e2f39;
    background-color: #d7d7df;
    text-decoration: none;
}

.badge-dark {
    background-color: #1f202b;
}

.badge-light[href]:focus,
.badge-light[href]:hover {
    color: #2e2f39;
    background-color: #d7d7df;
    text-decoration: none;
}

.dashboard-badges {}

.badge-dot {
    border-radius: 100%;
    padding: 4px;
    display: inline-block;
    margin-right: 3px;
}

.label {
    padding: 3px 10px;
    line-height: 13px;
    color: #fff;
    font-weight: 400;
    border-radius: 2px;
    font-size: 75%;
}

.label-rounded {
    border-radius: 60px;
}

.label-primary {
    background-color: #5969ff;
}

.label-success {
    background-color: #2ec551;
}

.label-danger {
    background-color: #ef172c;
}


/*-----------------------
2.14 Pagination
-------------------------*/

.page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: 0px;
    margin-right: 5px;
    line-height: 1.25;
    color: #71748d;
    background-color: #fff;
    border: 1px solid #e6e6f2;
    border-radius: 3px;
    line-height: 1;
}

.page-link:hover {
    z-index: 2;
    color: #fff;
    text-decoration: none;
    background-color: #5969ff;
    border-color: #5969ff;
}

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #5969ff;
    border-color: #5969ff;
}


/*-----------------------
2.15 Spinner
-------------------------*/

.spinner-xxl {
    width: 150px;
    height: 150px;
}

.spinner-xl {
    width: 120px;
    height: 120px;
}

.spinner-lg {
    width: 100px;
    height: 100px;
}

.spinner-md {
    width: 80px;
    height: 80px;
}

.spinner-sm {
    width: 60px;
    height: 60px;
}

.spinner-xs {
    width: 30px;
    height: 30px;
}

.dashboard-spinner {
    margin: 0px 8px;
    border-radius: 50%;
    background-color: transparent;
    border: 6px solid transparent;
    border-top: 6px solid #5969ff;
    border-left: 6px solid #5969ff;
    -webkit-animation: 1s spin linear infinite;
    animation: 1s spin linear infinite;
    display: inline-block;
}

.spinner-primary {
    border-top-color: #5969ff;
    border-left-color: #5969ff;
}

.spinner-secondary {
    border-top-color: #6c757d;
    border-left-color: #6c757d;
}

.spinner-success {
    border-top-color: #2ec551;
    border-left-color: #2ec551;
}

.spinner-danger {
    border-top-color: #dc3545;
    border-left-color: #dc3545;
}

.spinner-warning {
    border-top-color: #ffc107;
    border-left-color: #ffc107;
}

.spinner-info {
    border-top-color: #17a2b8;
    border-left-color: #17a2b8;
}

@-webkit-keyframes spin {
    from {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes spin {
    from {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}


/*-----------------------
2.16 Switch Toggle
-------------------------*/

.switch-button.switch-button-xs {
    height: 20px;
    line-height: 16px;
    width: 50px;
}

.switch-button {
    display: inline-block;
    border-radius: 50px;
    background-color: #9e9eaf;
    width: 60px;
    height: 27px;
    padding: 4px;
    position: relative;
    overflow: hidden;
    vertical-align: middle;
}

.switch-button input[type=checkbox] {
    display: none;
}

.switch-button input[type=checkbox]:checked+span label {
    float: right;
    border-color: #2a75f3;
}

.switch-button.switch-button-xs label {
    height: 12px;
    width: 12px;
}

.switch-button input[type=checkbox]:checked+span label:before {
    position: absolute;
    font-size: 12px;
    font-weight: 600;
    z-index: 0;
    content: "ON";
    color: #FFF;
    left: 0;
    text-align: left;
    padding-left: 10px;
}

.switch-button.switch-button-xs label:before {
    line-height: 21px;
}

.switch-button label:before {
    position: absolute;
    font-size: 12px;
    font-weight: 600;
    z-index: 0;
    content: "OFF";
    right: 0;
    display: block;
    width: 100%;
    height: 100%;
    line-height: 27px;
    top: 0;
    text-align: right;
    padding-right: 10px;
    color: #FFF;
}

.switch-button input[type=checkbox]:checked+span {
    background-color: #5969ff;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 4px;
}

.switch-button.switch-button-sm label {
    height: 16px;
    width: 16px;
}

.switch-button label {
    border-radius: 50%;
    box-shadow: 0 0 1px 1px #FFF inset;
    background-color: #FFF;
    margin: 0;
    height: 19px;
    width: 19px;
    z-index: 1;
    display: inline-block;
    cursor: pointer;
    background-clip: padding-box;
}

.switch-button.switch-button-sm {
    height: 24px;
    width: 57px;
    line-height: 20px;
}

.switch-button.switch-button-lg {
    height: 30px;
    line-height: 32px;
    width: 64px;
}

.switch-button.switch-button-success input[type=checkbox]:checked+span {
    background-color: #2ec551;
}

.switch-button.switch-button-warning input[type=checkbox]:checked+span {
    background-color: #ffc750;
}

.switch-button.switch-button-danger input[type=checkbox]:checked+span {
    background-color: #ef172c;
}


/* ==========================================================================
  3. Charts
  ========================================================================== */


/*-----------------------
3.1 Chartist.js
-------------------------*/

.ct-line.ct-threshold-above,
.ct-point.ct-threshold-above,
.ct-bar.ct-threshold-above {
    stroke: #f05b4f;
}

.ct-line.ct-threshold-below,
.ct-point.ct-threshold-below,
.ct-bar.ct-threshold-below {
    stroke: #59922b;
}

.ct-area.ct-threshold-above {
    fill: #f05b4f;
}

.ct-area.ct-threshold-below {
    fill: #59922b;
}


/*-----------------------
3.2 Sprkling.js
-------------------------*/

.spark-chart {
    display: inline-block;
}

.spark-chart-info {
    display: inline-block;
    float: right;
}


/*-----------------------
3.3 Charts.js
-------------------------*/


/*-----------------------
3.4 Morris.js
-------------------------*/


/*-----------------------
3.5 C3 Charts.js
-------------------------*/


/* ==========================================================================
  4. Forms
  ========================================================================== */


/*-----------------------
4.1.  Form Elements
------------------*/


/*-----------------------
4.2.  Form Validations
------------------*/


/*-----------------------
4.3.  Multiseelct
-----------------*/


/*-----------------------
4.4.  Wizard
------------------*/


/*-----------------------
4.5.  Summar Note / Text Editor
------------------*/


/*-----------------------
4.6.  Multiupload
--------------------*/


/* ==========================================================================
 5. Table
 ========================================================================== */


/*-----------------------
5.1.  General
--------------------*/

.table {
    margin-bottom: 0px;
}

.table td,
.table th {
    padding: 10px;
    vertical-align: middle;
    border-top: 1px solid #e6e6f2;
    font-weight: normal;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #e6e6f2;
}

.table thead th,
.table th {
    color: #3d405c;
    font-family: 'Circular Std Medium';
}

.table-bordered {
    border: 1px solid #e6e6f2;
}

.table-bordered td,
.table-bordered th {
    border: 1px solid #e6e6f2;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(230, 230, 242, .5);
}

.table-hover tbody tr:hover {
    background-color: rgba(230, 230, 242, .5);
}


/*-----------------------
5.2.  Data Tables
--------------------*/


/*-- row group table */

tr.group,
tr.group:hover {
    background-color: #5969ff !important;
    color: #fff;
    font-family: 'Circular Std Medium';
    font-size: 18px;
}


/*-----------------------
5.3. Table Filters
--------------------*/


/* ==========================================================================
 6. Pages
 ========================================================================== */


/*-----------------------
6.1 Blank Page
-------------------------*/


/*-----------------------
6.2 Blank Page Header
-------------------------*/


/*-----------------------
6.3 Login
-------------------------*/


/*-----------------------
6.4 Sign up Page
-------------------------*/


/*-----------------------
6.5 Forgot Password
-------------------------*/


/*-----------------------
6.6 Profile
-------------------------*/


/*-----------------------
6.7 Pricing
-------------------------*/


/*-----------------------
6.8 Timeline
-------------------------*/


/* --------------------------------

Patterns - reusable parts of our design

-------------------------------- */

@media only screen and (min-width:1170px) {
    .cd-is-hidden {
        visibility: hidden;
    }
}


/* --------------------------------

Vertical Timeline - by CodyHouse.co

-------------------------------- */

.cd-timeline {
    overflow: hidden;
    margin: 2em auto;
}

.cd-timeline__container {
    position: relative;
    width: 90%;
    max-width: 1170px;
    margin: 0 auto;
    padding: 2em 0;
}

.cd-timeline__container::before {
    /* this is the vertical line */
    content: '';
    position: absolute;
    top: 0;
    left: 18px;
    height: 100%;
    width: 4px;
    background: #dedee9;
}

@media only screen and (min-width:1170px) {
    .cd-timeline {
        margin-top: 3em;
        margin-bottom: 3em;
    }
    .cd-timeline__container::before {
        left: 50%;
        margin-left: -2px;
    }
}

.cd-timeline__block {
    position: relative;
    margin: 2em 0;
}

.cd-timeline__block:after {
    /* clearfix */
    content: "";
    display: table;
    clear: both;
}

.cd-timeline__block:first-child {
    margin-top: 0;
}

.cd-timeline__block:last-child {
    margin-bottom: 0;
}

@media only screen and (min-width:1170px) {
    .cd-timeline__block {
        margin: 4em 0;
    }
}

.cd-timeline__img {
    position: absolute;
    top: 0;
    left: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    -webkit-box-shadow: 0 0 0 4px white, inset 0 2px 0 rgba(0, 0, 0, 0.08), 0 3px 0 4px rgba(0, 0, 0, 0.05);
    box-shadow: 0 0 0 4px white, inset 0 2px 0 rgba(0, 0, 0, 0.08), 0 3px 0 4px rgba(0, 0, 0, 0.05);
}

.cd-timeline__img img {
    display: block;
    width: 24px;
    height: 24px;
    position: relative;
    left: 50%;
    top: 50%;
    margin-left: -12px;
    margin-top: -12px;
}

.cd-timeline__img.cd-timeline__img--picture {
    background: #2ec551;
}

.cd-timeline__img.cd-timeline__img--movie {
    background: #ef172c;
}

.cd-timeline__img.cd-timeline__img--location {
    background: #ffc108;
}

@media only screen and (min-width:1170px) {
    .cd-timeline__img {
        width: 60px;
        height: 60px;
        left: 50%;
        margin-left: -30px;
        /* Force Hardware Acceleration */
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    .cd-timeline__img.cd-timeline__img--bounce-in {
        visibility: visible;
        -webkit-animation: cd-bounce-1 0.6s;
        animation: cd-bounce-1 0.6s;
    }
}

@-webkit-keyframes cd-bounce-1 {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }
    100% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}

@keyframes cd-bounce-1 {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }
    100% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}

.cd-timeline__content {
    position: relative;
    margin-left: 60px;
    background: white;
    border-radius: 0.25em;
    padding: 1em;
    border: none;
    -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
}

.cd-timeline__content:after {
    /* clearfix */
    content: "";
    display: table;
    clear: both;
}

.cd-timeline__content::before {
    /* triangle next to content block */
    content: '';
    position: absolute;
    top: 16px;
    right: 100%;
    height: 0;
    width: 0;
    border: 7px solid transparent;
    border-right: 7px solid white;
}

.cd-timeline__content h2 {}

.cd-timeline__content p,
.cd-timeline__read-more,
.cd-timeline__date {}

.cd-timeline__content p {}

.cd-timeline__read-more,
.cd-timeline__date {
    display: inline-block;
}

.cd-timeline__read-more {
    float: right;
    padding: .8em 1em;
    background: #acb7c0;
    color: white;
    border-radius: 0.25em;
}

.cd-timeline__read-more:hover {
    background-color: #bac4cb;
}

.cd-timeline__date {
    float: left;
    padding: .8em 0;
    opacity: .7;
}

@media only screen and (min-width:768px) {
    .cd-timeline__content h2 {}
    .cd-timeline__content p {}
    .cd-timeline__read-more,
    .cd-timeline__date {}
}

@media only screen and (min-width:1170px) {
    .cd-timeline__content {
        margin-left: 0;
        padding: 1.6em;
        width: 45%;
        /* Force Hardware Acceleration */
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    .cd-timeline__content::before {
        top: 24px;
        left: 100%;
        border-color: transparent;
        border-left-color: white;
    }
    .cd-timeline__read-more {
        float: left;
    }
    .cd-timeline__date {
        position: absolute;
        width: 100%;
        left: 122%;
        top: 6px;
        font-size: 18px;
    }
    .cd-timeline__block:nth-child(even) .cd-timeline__content {
        float: right;
    }
    .cd-timeline__block:nth-child(even) .cd-timeline__content::before {
        top: 24px;
        left: auto;
        right: 100%;
        border-color: transparent;
        border-right-color: white;
    }
    .cd-timeline__block:nth-child(even) .cd-timeline__read-more {
        float: right;
    }
    .cd-timeline__block:nth-child(even) .cd-timeline__date {
        left: auto;
        right: 122%;
        text-align: right;
    }
    .cd-timeline__content.cd-timeline__content--bounce-in {
        visibility: visible;
        -webkit-animation: cd-bounce-2 0.6s;
        animation: cd-bounce-2 0.6s;
    }
}

@media only screen and (min-width:1170px) {

    /* inverse bounce effect on even content blocks */
    .cd-timeline__block:nth-child(even) .cd-timeline__content.cd-timeline__content--bounce-in {
        -webkit-animation: cd-bounce-2-inverse 0.6s;
        animation: cd-bounce-2-inverse 0.6s;
    }
}

@-webkit-keyframes cd-bounce-2 {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100px);
        transform: translateX(-100px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(20px);
        transform: translateX(20px);
    }
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes cd-bounce-2 {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100px);
        transform: translateX(-100px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(20px);
        transform: translateX(20px);
    }
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@-webkit-keyframes cd-bounce-2-inverse {
    0% {
        opacity: 0;
        -webkit-transform: translateX(100px);
        transform: translateX(100px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(-20px);
        transform: translateX(-20px);
    }
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes cd-bounce-2-inverse {
    0% {
        opacity: 0;
        -webkit-transform: translateX(100px);
        transform: translateX(100px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(-20px);
        transform: translateX(-20px);
    }
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}


/*-----------------------
6.9 404 error
-------------------------*/

.error-section {
    padding: 74px 0px;
}

.error-section-content {
    padding-top: 30px;
    color: #3d405c;
    padding-bottom: 30px;
}


/*-----------------------
6.9 Calendar
-------------------------*/

#calendar1 {
    margin: 0 auto;
}

#wrap {
    /* width: 1100px; */
    margin: 0 auto;
}

#external-events {
    float: left;
    width: 270px;
    padding: 0 20px;
    border: 1px solid #e0e4ef;
    background: #f9f9ff;
    text-align: left;
    border-radius: 4px;
}

#external-events h4 {
    font-size: 16px;
    margin-top: 0;
    padding-top: 1em;
}

#external-events .fc-event {
    margin: 10px 0;
    cursor: pointer;
}

#external-events p {
    margin: 1.5em 0;
    font-size: 11px;
    color: #666;
}

#external-events p input {
    margin: 0;
    vertical-align: middle;
}

#calendar {
    float: right;
    width: 1240px;
}


/*-----------------------
6.10 Metrics
-------------------------*/

.metric-row {
    margin-bottom: 1.25rem;
    border-radius: .25rem;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -10px;
    margin-left: -10px;
}

.metric-value {
    margin-bottom: 0;
    line-height: 1;
    white-space: nowrap;
}

.metric-label {
    font-size: .875rem;
    font-weight: 500;
    color: #686f76;
    white-space: nowrap;
}

.metric-label:last-child {
    margin-top: .5rem;
    margin-bottom: 0;
}

.metric-value>sub,
.metric-value>sup {
    color: #ffa76a;
    font-size: .5em;
}

.card-metric {
    text-align: center;
    background-color: #fff;
    border: none;
    border-radius: 4px;
    -webkit-box-shadow: 0 0 0 1px rgba(61, 70, 79, .05), 0 1px 3px 0 rgba(61, 70, 79, .15);
    box-shadow: 0 0 0 1px rgba(61, 70, 79, .05), 0 1px 3px 0 rgba(61, 70, 79, .15);
}

.metric-row .metric {
    margin: 8px 0;
    min-height: 136px;
}

.metric-bordered {
    border: 1px solid #d4d5d7;
}

.metric-value>sub {
    bottom: 5px;
}


/*-----------------------
6.11 Media Objects
-------------------------*/

.dashboard-media-object .card-footer {
    padding: 0px;
}

.btn-account {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin: 0;
    border: 0;
    -ms-flex-wrap: none;
    flex-wrap: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background: none;
    color: inherit;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    cursor: pointer;
    -webkit-transition: background-color .15s;
    transition: background-color .15s;
    outline: 0;
}

.btn-account .account-summary {
    margin-right: 16px;
    margin-left: 8px;
    display: block;
    text-align: left;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    overflow: hidden;
    text-overflow: clip;
    white-space: nowrap;
}

.btn-account .account-description,
.btn-account .account-name {
    margin: 0;
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    font-weight: 500;
    line-height: 16px;
}

.btn-account .account-description {
    font-size: 12px;
    font-weight: 400;
    opacity: .7;
}

.user-avatar {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    margin-bottom: 10px;
}

.avatar-badge {
    position: absolute;
    right: 3px;
    bottom: 4px;
    display: block;
    width: 8px;
    height: 8px;
    line-height: 1.6;
    text-align: center;
    font-size: 8px;
    color: #fff;
    background-color: #a9acb0;
    border-radius: 8px;
    -webkit-box-shadow: 0 0 0 2px #fff;
    box-shadow: 0 0 0 2px #fff;
    z-index: 2;
}

.avatar-badge.online {
    background-color: #00a28a;
}

.avatar-badge.idle {
    background-color: #ec935e;
}

.avatar-badge.busy {
    background-color: #ea6759;
}

.avatar-badge.offline {
    color: #a9acb0;
    background-color: #a9acb0;
}

.avatar-badge.has-indicator {
    width: 10px;
    height: 10px;
}

.avatar-group {
    display: inline-block;
}

.avatar-group .user-avatar img {
    -webkit-box-shadow: 0 0 0 2px #fff;
    box-shadow: 0 0 0 2px #fff;
}

.avatar-group .user-avatar+.user-avatar {
    display: inline-block;
    margin-left: -10px;
}

.avatar-group .user-avatar:focus,
.avatar-group .user-avatar:hover {
    z-index: 2;
}

.user-avatar-floated {
    margin-top: -50px;
    z-index: 2;
}

.metric {
    position: relative;
    padding: 16px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    border-radius: 4px;
    cursor: default;
}

.metric-label:last-child {
    margin-top: 12px;
    margin-bottom: 0;
}

.card-footer-item {
    padding: 12px 35px;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    text-align: center;
    display: inline-block;
}

.card-footer-item-bordered:not(:last-child) {
    border-right: 1px solid rgb(230, 230, 242);
}


/*-------------------- User icon sizes ---------------------*/

.user-avatar-xxl {
    height: 128px;
    width: 128px;
}

.user-avatar-xl {
    height: 90px;
    width: 90px;
}

.user-avatar-lg {
    height: 48px;
    width: 48px;
}

.user-avatar-md {
    height: 32px;
    width: 32px;
}

.user-avatar-sm {
    height: 24px;
    width: 24px;
}

.user-avatar-xs {
    height: 18px;
    width: 18px;
}


/*-----------------------
6.12 Shortable / Nesetable
-------------------------*/

.dashboard-short-list {}

.drag-handle,
.drag-indicator {
    cursor: move;
    cursor: -webkit-grab;
    cursor: grab;
}

.card-header+.list-group .list-group-item:first-child {
    border-top: 0;
}

.list-group-bordered .list-group-item {
    border-color: rgba(19, 29, 40, .125);
}

/*.list-group-item:first-child {
    border-width: 0 0 1px;
}*/

.drag-indicator {
    display: inline-block;
    margin: 0 .5em;
    height: 8px;
    width: 6px;
    background-image: url(/images/drag-indicator.png);
    -webkit-transform: translate3d(-.5em, 0, 0);
    transform: translate3d(-.5em, 0, 0);
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.dashboard-short-list .list-group-item {
    display: flex;
}

.dd {
    position: relative;
    display: block;
    margin: 0;
    padding: 0;
    max-width: 100%;
    list-style: none;
    font-size: 13px;
    line-height: 20px;
}

.dd-list {
    display: block;
    position: relative;
    margin: 0;
    padding: 0;
    list-style: none;
    width: 100%;
}

.dd-list .dd-list {
    padding-left: 30px;
}

.dd-collapsed .dd-list {
    display: none;
}

.dd-item,
.dd-empty,
.dd-placeholder {
    display: block;
    position: relative;
    margin: 0;
    padding: 0;
    min-height: 20px;
    font-size: 13px;
    line-height: 20px;
}

.dd-handle {
    margin-bottom: -1px;
    padding: .75rem 1rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #fff;
    border-top: 1px solid rgba(19, 29, 40, .125);
    border-bottom: 1px solid rgba(19, 29, 40, .125);
}

.dd-handle:hover {
    color: #5969ff;
    background: #fff;
}

.dd-item>button {
    display: block;
    position: relative;
    cursor: pointer;
    float: left;
    width: 34px;
    height: 20px;
    margin: 18px 0;
    padding: 0;
    text-indent: 100%;
    white-space: nowrap;
    overflow: hidden;
    border: 0;
    background: transparent;
    font-size: 12px;
    line-height: 1;
    text-align: center;
    font-weight: bold;
}

.dd-item>button:before {
    content: '+';
    display: block;
    position: absolute;
    width: 100%;
    text-align: center;
    text-indent: 0;
    font-size: 14px;
}

.dd-item>button[data-action="collapse"]:before {
    content: '-';
}

.dd-placeholder,
.dd-empty {
    margin: 5px 0;
    padding: 0;
    min-height: 30px;
    background: #f5f5f5;
    border: 1px dashed #b6bcbf;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}

.dd-empty {
    border: 1px dashed #bbb;
    min-height: 100px;
    background-color: #f5f5f5;
    background-image: -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
    background-image: -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
    background-image: linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
    background-size: 60px 60px;
    background-position: 0 0, 30px 30px;
}

.dd-dragel {
    position: absolute;
    pointer-events: none;
    z-index: 9999;
}

.dd-dragel>.dd-item .dd-handle {
    margin-top: 0;
}

.dd-dragel .dd-handle {
    -webkit-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1);
    box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1);
}


/**
* Nestable Extras
*/

.nestable-lists {
    display: block;
    clear: both;
    padding: 30px 0;
    width: 100%;
    border: 0;
    border-top: 2px solid #ddd;
    border-bottom: 2px solid #ddd;
}

#nestable-menu {
    padding: 0;
    margin: 20px 0;
}

#nestable-output,
#nestable2-output {
    width: 100%;
    height: 7em;
    font-size: 0.75em;
    line-height: 1.333333em;
    font-family: Consolas, monospace;
    padding: 5px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}

#nestable2 .dd-handle {}

#nestable2 .dd-handle:hover {}

#nestable2 .dd-item>button:before {}

.dd-hover>.dd-handle {
    background: #5969ff !important;
}


/**
* Nestable Draggable Handles
*/

.dd3-content {
    display: block;
    height: 30px;
    margin: 5px 0;
    padding: 5px 10px 5px 40px;
    color: #333;
    text-decoration: none;
    font-weight: bold;
    border: 1px solid #ccc;
    background: #fafafa;
    background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
    background: -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
    background: linear-gradient(to top, #fafafa 0%, #eee 100%);
    -webkit-border-radius: 3px;
    border-radius: 3px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}

.dd3-content:hover {
    color: #2ea8e5;
    background: #fff;
}

.dd-dragel>.dd3-item>.dd3-content {
    margin: 0;
}

.dd3-item>button {
    margin-left: 30px;
}

.dd3-handle {
    position: absolute;
    margin: 0;
    left: 0;
    top: 0;
    cursor: pointer;
    width: 30px;
    text-indent: 100%;
    white-space: nowrap;
    overflow: hidden;
    border: 1px solid #aaa;
    background: #ddd;
    background: -webkit-linear-gradient(top, #ddd 0%, #bbb 100%);
    background: -moz-linear-gradient(top, #ddd 0%, #bbb 100%);
    background: linear-gradient(to top, #ddd 0%, #bbb 100%);
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.dd3-handle:before {
    content: '≡';
    display: block;
    position: absolute;
    left: 0;
    top: 3px;
    width: 100%;
    text-align: center;
    text-indent: 0;
    color: #fff;
    font-size: 20px;
    font-weight: normal;
}

.dd3-handle:hover {
    background: #ddd;
}


/**
* Socialite
*/

.socialite {
    display: block;
    float: left;
    height: 35px;
}


/*-----------------------
6.13 404 Error
-------------------------*/


/*-----------------------
6.14 Comments Widget
-------------------------*/

.comment-widgets {
    position: relative;
    margin-bottom: 10px;
}

.comment-widgets .comment-row {
    border-bottom: 1px solid transparent;
    padding: 14px;
    display: flex;
    margin: 10px 0;
}

.comment-widgets .comment-row:last-child {
    border-bottom: 0px;
}

.comment-widgets .comment-row:hover,
.comment-widgets .comment-row.active {
    background: rgba(0, 0, 0, 0.05);
}

.comment-text {
    padding-left: 15px;
    width: 100%;
}

.comment-text:hover .comment-footer .action-icons,
.comment-text.active .comment-footer .action-icons {
    visibility: visible;
}

.comment-text p {
    max-height: 65px;
    width: 100%;
    overflow: hidden;
}

.comment-footer .action-icons {
    visibility: hidden;
}

.comment-footer .action-icons a {
    padding-left: 7px;
    vertical-align: middle;
    color: #9e9fa7;
}

.comment-footer .action-icons a:hover,
.comment-footer .action-icons a.active {
    color: #5969ff;
}


/*-----------------------
6.14 mail box widget
-------------------------*/

.mailbox .drop-title {
    font-weight: 600;
    padding: 11px 20px 15px;
    border-radius: 2px 2px 0 0;
    position: relative;
}

.mailbox .drop-title:after {
    content: "";
    position: absolute;
    opacity: 0.2;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    background-size: cover;
}

.mailbox .nav-link {
    border-top: 1px solid #e9ecef;
    padding-top: 15px;
    color: #3e5569;
}

.mailbox .message-center {
    position: relative;
}

.mailbox .message-center .message-item {
    border-bottom: 1px solid #e9ecef;
    display: block;
    text-decoration: none;
    padding: 9px 15px;
}

.mailbox .message-center .message-item:hover {
    background: #f8f9fa;
}

.mailbox .message-center .message-item .message-title {
    color: #212529;
}

.mailbox .message-center .message-item .user-img {
    width: 40px;
    position: relative;
    display: inline-block;
    margin: 0 0px 15px 0;
}

.mailbox .message-center .message-item .user-img img {
    width: 100%;
}

.mailbox .message-center .message-item .user-img .profile-status {
    border: 2px solid #fff;
    border-radius: 50%;
    display: inline-block;
    height: 10px;
    left: 30px;
    position: absolute;
    top: 1px;
    width: 10px;
}

.mailbox .message-center .message-item .user-img .online {
    background: #36bea6;
}

.mailbox .message-center .message-item .user-img .busy {
    background: #f62d51;
}

.mailbox .message-center .message-item .user-img .away {
    background: #ffbc34;
}

.mailbox .message-center .message-item .user-img .offline {
    background: #ffbc34;
}

.mailbox .message-center .message-item .mail-contnet {
    display: inline-block;
    width: 75%;
    padding-left: 10px;
    vertical-align: middle;
}

.mailbox .message-center .message-item .mail-contnet .message-title {
    margin: 5px 0px 0;
}

.mailbox .message-center .message-item .mail-contnet .mail-desc,
.mailbox .message-center .message-item .mail-contnet .time {
    font-size: 12px;
    display: block;
    margin: 1px 0;
    text-overflow: ellipsis;
    overflow: hidden;
    color: #a1aab2;
    white-space: nowrap;
}


/* ==========================================================================
7. Email Componants
========================================================================== */


/*------------------------
7.1  Inbox
----------------------------*/

.page-aside {
    background: none repeat scroll 0 0 #ffffff;
    width: 280px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 265px;
    border-right: 1px solid #e6e6f2;
    margin-top: 61px;
    padding-bottom: 61px;
    color: #404040;
}

.page-aside .aside-header {
    padding: 20px 22px;
    position: relative;
}

.aside-header {}

.aside-header .navbar-toggle {
    background: 0 0;
    display: none;
    outline: 0;
    border: 0;
    padding: 0 11px 0 0;
    text-align: right;
    margin: 0;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: absolute;
}

.aside-header .navbar-toggle .icon {
    font-size: 24px;
    color: #71738d;
}

.aside-nav .nav li .icon {
    font-size: 13px;
    vertical-align: middle;
    text-align: center;
    min-width: 19px;
    margin-right: 6px;
    color: #71748d;
}

.aside-nav .nav li.active a {
    color: #f12257;
    background: #fff0f4;
}

.aside-nav .nav li.active a .icon {
    color: #4285f4;
}

.aside-header .title {
    display: block;
    margin: 10px 0 0;
    font-size: 27px;
    line-height: 27px;
    font-weight: 300;
    color: #3d405c;
}

.aside-header .description {
    color: #71748d;
    margin: 0;
}

.aside-nav.collapse {
    display: block;
}

.aside-nav {
    visibility: visible;
    font-size: 14px;
}

.aside-content .nav {
    display: block;
}

.aside-content .nav li a {
    display: block;
    position: relative;
}

.aside-nav .nav li a {
    color: #71748d;
    padding: 10px 20px;
}

.aside-content .nav li a:hover {
    text-decoration: none;
    background-color: #efeff6;
}

.aside-nav .nav li.active a .icon {
    color: #dd1151;
}

.email-list-item .from {
    display: block;
    font-weight: 400;
    font-size: 1rem;
    margin: 0 0 1px 0;
}

.email-list-item .msg {
    margin: 0;
    color: #71738d;
}

.email-list-item .icon {
    margin-right: 7px;
    font-size: 1.154rem;
    vertical-align: middle;
    color: #3d405c;
}

.aside-nav .nav li .badge {
    float: right;
    font-size: 14px;
    font-weight: 300;
    padding: 3px 6px;
}

.aside-nav .title {
    display: block;
    color: #3d405c;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 20px 0 0;
    padding: 8px 22px 4px;
}

.aside-compose {
    text-align: center;
    padding: 14px 25px;
}

.dashboard-main-wrapper .main-content {
    margin-left: 266px;
    width: auto;
}

.email-inbox-header {
    background-color: #fff;
    padding: 25px 25px;
}

.email-title {
    display: block;
    margin: 3px 0 0;
    font-size: 22px;
    font-weight: 300;
}

.email-title .icon {
    font-size: 22px;
    color: #71738d;
}

.email-title .new-messages {
    font-size: 1rem;
    color: #3d405c;
    margin-left: 3px;
}

.input-search .input-group-btn {
    position: absolute;
    display: block;
    width: auto;
    top: 1px;
    right: 1px;
    z-index: 3;
}

.input-search .input-group-btn .btn {
    padding: 5px 10px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 1px;
    border-top-right-radius: 1px;
}

.email-filters {
    padding: 20px;
    border-bottom: 1px solid #e6e6f2;
    background-color: #fff;
    display: table;
    width: 100%;
    border-top: 1px solid #e6e6f2;
}



.email-filters .be-select-all.custom-checkbox {
    display: inline-block;
    vertical-align: middle;
    padding: 0;
    margin: 0 30px 0 0;
}

.btn-group,
.btn-group-vertical {
    position: relative;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    vertical-align: middle;
}

.email-filters input {
    margin-right: 8px;
}

.custom-control-label {
    position: static;
    display: inline-block;
    line-height: 2;
}

.email-filters .email-filters-right {
    text-align: right;
}

.email-filters>div {
    display: table-cell;
    vertical-align: middle;
}

.email-pagination-indicator {
    display: inline-block;
    vertical-align: middle;
    margin-right: 13px;
}

.email-list {
    background: #eee;
}

.email-list-item {
    border-bottom: 1px solid #e6e6f2;
    padding: 10px 20px;
    display: table;
    width: 100%;
    cursor: pointer;
    position: relative;
    background-color: #fcfcff;
    font-size: 14px;
}

.email-list-item--unread {
    background-color: #ffffff;
}

.email-list-item--unread .from,
.email-list-item--unread .msg {
    color: #3d405c;
    font-weight: 800;
    -webkit-font-smoothing: initial;
}

.email-list-item--unread .msg {
    color: #3d405c;
}

.email-list-actions {
    width: 40px;
}

.email-list-actions,
.email-list-detail {
    vertical-align: top;
    display: table-cell;
}

.email-list-actions .favorite {
    display: block;
    padding-top: 5px;
    padding-left: 1px;
    line-height: 15px;
}

.email-list-actions .favorite span {
    font-size: 12px;
    line-height: 10px;
    color: silver;
}

.email-list-actions .favorite:hover span {
    color: #8d8d8d;
}

.email-list-actions .favorite.active span {
    color: #ffc600;
}

.email-list-item:hover {
    background-color: #fff;
}

.email-list-actions .custom-checkbox {
    padding: 0;
    margin-top: -2px;
}

.email-list-actions .custom-checkbox.custom-control {
    margin-bottom: 0;
}


/*-------------------
7.2  Email Details
--------------------*/

.email-head {
    background-color: #fff;
}

.email-head-subject {
    padding: 25px 25px;
    border-bottom: 1px solid #e6e6f2;
}

.email-head-subject .title {
    display: block;
    font-size: 1.769rem;
    font-weight: 300;
    color: #3d405c;
}

.email-head-subject .title>a.active .icon {
    color: #ffc600;
}

.email-head-subject .title>a .icon {
    color: silver;
    font-size: 14px;
    margin-right: 6px;
    vertical-align: middle;
    line-height: 31px;
    position: relative;
    top: -1px;
}

.email-head-subject .icons {
    font-size: 14px;
    float: right;
}

.email-head-subject .icons .icon {
    color: #71738d;
    margin-left: 12px;
    vertical-align: middle;
}

.email-head-sender .avatar {
    float: left;
    margin-right: 10px;
}

.email-head-sender {
    padding: 13px 25px;
    line-height: 40px;
}

.email-head-sender .date {
    float: right;
    font-size: 12px;
}

.email-head-sender .avatar {
    float: left;
    margin-right: 10px;
}

.email-head-sender .sender {
    font-size: 1.15rem;
}

.email-head-sender .sender .actions {
    display: inline-block;
    position: relative;
}

.email-head-sender .sender .icon {
    font-size: 1.538rem;
    line-height: 16px;
    color: #5a5a5a;
    margin-left: 7px;
}

.email-body {
    background-color: #fff;
    border-top: 1px solid #e6e6f2;
    padding: 30px 28px;
}

.email-attachments {
    background-color: #fff;
    padding: 25px 28px;
    border-top: 1px solid #e6e6f2;
}

.email-attachments .title {
    display: block;
    font-weight: 500;
}

.email-attachments .title span {
    font-weight: 400;
}

.email-attachments ul {
    list-style: none;
    margin: 15px 0 0;
    padding: 0;
}

.email-attachments ul>li {
    line-height: 23px;
}

.email-attachments ul>li a {
    color: #404040;
    font-weight: 500;
}

.email-attachments ul>li .icon {
    vertical-align: middle;
    color: #737373;
    margin-right: 2px;
}

.email-attachments ul>li span {
    font-weight: 400;
}


/*-------------------
7.3 Email Compose
----------------------*/

.email-head-title {
    padding: 25px 25px;
    border-bottom: 1px solid #e6e6f2;
    display: block;
    font-weight: 400;
    color: #3d405c;
    font-size: 1.769rem;
}

.email-head-title .icon {
    color: #696969;
    margin-right: 12px;
    vertical-align: middle;
    line-height: 31px;
    position: relative;
    top: -1px;
    float: left;
    font-size: 1.538rem;
}

.email-compose-fields {
    background-color: #fff;
    border-bottom: 1px solid #e6e6f2;
    padding: 30px 30px 20px;
}

.form-group.row {
    margin-bottom: 0;
    padding: 12px 0;
}

.form-group.row label {
    white-space: nowrap;
}

.email-compose-fields label {
    padding-top: 15px;
}

.email.editor {
    background-color: #fff;
}

.email.action-send {
    padding: 20px 0px;
}

.btn-space {
    margin-right: 5px;
    margin-bottom: 5px;
}

.breadcrumb {
    margin: 0;
    background-color: transparent;
}




/*-------------------
7.4  Message Chat Module
----------------------*/

.chat-body{overflow: hidden;}

.chat-module {
    height: 100%;
    display: flex;
    flex-direction: column;
    flex: 1;
    justify-content: space-between;

}
.chat-module {
    height: calc(100vh - 105px);
}
.dashboard-main-wrapper .content-container>.chat-module {
    /*height: 100%;*/
}

.dashboard-main-wrapper .content-container>.chat-module {
    overflow: hidden;
    padding: 1.5rem;
}

.chat-module .chat-module-body {
    width: 100%;
    position: absolute;
    top: 55px;
    height: calc(100% - 4rem);
    overflow-y: scroll;
    padding-right: 1.5rem;
    -ms-overflow-style: none;
}

.dashboard-main-wrapper .content-container>.chat-module .chat-module-body {
    width: 100%;
    padding-right: 0;
}

.chat-module .chat-module-top {
    display: flex;
    flex-direction: column;
    flex: 1;
    max-height: calc(100% - 3.5rem);
    position: relative;
}

.avatar {
    width: 2.25rem;
    height: 2.25rem;
    border-radius: 50%;
    border: 2px solid #F7F9FA;
    background: #F7F9FA;
    color: #fff;
}

.media-attachment {
    padding-left: 0.75rem;
    align-items: center;
    border-left: 4px solid #E9EEF2;
}

.chat-item .media-attachment {
    border-color: #dedee4;
}
.chat-item-author{color: #333;}

.media-attachment:not(:first-child) {
    margin-top: 0.75rem;
}

.media-attachment div.avatar {
    border: none;
}

.avatar.bg-primary {
    display: flex;
    align-items: center;
    justify-content: center;
}

.avatar.bg-primary i {
    font-size: 14px;
}

.media {
    display: flex;
    align-items: flex-start;
}

.chat-item {
    font-size: .875rem;
    line-height: 1.3125rem;
}

.dashboard-main-wrapper .content-container>.chat-module .chat-item {
    padding-bottom: 1.5rem;
}

.dashboard-main-wrapper .content-container>.chat-module .chat-item:not(:last-child) {
    border-bottom: 1px solid #e6e6f2;
}

.dashboard-main-wrapper .content-container>.chat-module .chat-item .media-body {
    background: none;
}

.chat-item>.media-body {
    margin-left: 0.75rem;
    border-radius: 0.5rem;
    padding: 6px 1px;
    background: transparent;
}

.media-body {
    flex: 1;
}

.chat-item+.chat-item {
    margin-top: 0.75rem;
}

.chat-item .chat-item-title {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.375rem;
}

.dashboard-main-wrapper .main-container {
    overflow: hidden;
    flex: 1;
}

.dashboard-main-wrapper .content-container {
    display: flex;
    height: calc(100vh - 3.5625rem);
}

.dashboard-main-wrapper .content-container>.chat-module .chat-item .media-body {
    padding: 0;
    background: none;
}

.media-attachment .media-body>a {
    display: block;
}

.media-attachment .media-body {
    margin-left: 0.75rem;
}

.chat-module .chat-module-bottom {
    position: relative;
    padding-top: 1rem;
    border-top: 1px solid #E9EEF2;
    background: #efeff6;

}

.chat-form {
    position: relative;
}

.chat-module .chat-module-bottom textarea {
    max-height: 9rem;
}

.chat-form textarea {
    padding-right: 3.375rem;
}

.chat-form-buttons {
    position: absolute;
    top: 6px;
    right: 0.25rem;
    display: flex;
    align-items: center;
}

.chat-form-buttons button {
    padding: 0;
}

.chat-form-buttons .custom-file-naked {
    width: 1.5rem;
    margin-left: 0.375rem;
    top: 5px;
}

.custom-file-naked {
    cursor: pointer;
    width: auto;
    height: auto;
}

.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(2.125rem + 2px);
    margin-bottom: 0;
}

.custom-file-naked .custom-file-input {
    width: auto;
    height: auto;
    cursor: pointer;
}

.custom-file-naked .custom-file-label {
    border: none;
    background: none;
    padding: 0;
    margin: 0;
    height: auto;
    cursor: pointer;
}

.chat-form-buttons i {
    color: #6c757d;
    font-size: 1.25rem;
    cursor: pointer;
}

.custom-file-label::after {
    display: none;
}

.chat-sidebar {
    height: 100%;
    overflow: hidden;
    width: 384px;
    border-left: 1px solid #e6e6f2;
    display: flex;
    flex-direction: column;
    background: #fff;
}

.chat-sidebar-content {
    max-height: 100%;
    display: flex;
    flex-direction: column;
    flex: 1;
}

.text-small {
    font-size: .875rem;
    line-height: 1.3125rem;
}

.chat-team-sidebar {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.chat-team-sidebar .chat-team-sidebar-top {
    padding: 1.5rem;
}

.align-items-center {
    align-items: center !important;
}

.chat-team-sidebar .nav {
    margin-top: 1.5rem;
}

.chat-team-sidebar .nav-tabs {
    border-radius: 4px;
    background: #EEF2F5;
}

.chat-team-sidebar .nav-tabs .nav-item {
    margin: .5rem;
}

.chat-team-sidebar .nav-tabs .nav-link:not(.active) {
    color: rgba(33, 37, 41, 0.5);
}

.chat-team-sidebar .nav-tabs .nav-link {
    font-size: 14px;
    font-weight: 500;
    border-radius: 4px;
    padding: 10px;
    transition: color .35s ease-out;
}

.chat-team-sidebar .chat-team-sidebar-bottom,
.chat-team-sidebar .chat-team-sidebar-bottom .tab-content {
    flex: 1;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.chat-team-sidebar .chat-team-sidebar-bottom,
.chat-team-sidebar .chat-team-sidebar-bottom .tab-content {
    flex: 1;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.chat-team-sidebar .tab-pane {
    overflow-y: none;
    -ms-overflow-style: none;
    height: 100%;
}

.chat-team-sidebar .list .list-group-item {
    width: 100%;
}

.sidebar form.dropzone {
    padding: 0 1.5rem;
}

form.dropzone {
    width: 100%;
    margin-bottom: 1.5rem;
}

.sidebar .dz-message {
    background: #F7F9FA;
    padding: 1rem;
}

.dz-message {
    text-align: center;
    padding: 1.5rem;
    display: block;
    font-size: .875rem;
    font-weight: 500;
    opacity: 1;
    cursor: pointer;
    border-radius: 0.5rem;
    background: #fff;
    border: 1px dashed #E9EEF2;
    transition: all .35s ease;
    color: rgba(108, 117, 125, 0.5);
}

.dropzone-previews {
    width: 100%;
}

.dz-file-representation img:not([src]) {
    display: none;
}

.dz-file-representation img {
    position: absolute;
    object-fit: cover;
}

.dz-preview .avatars li:last-child {
    transition: opacity .35s ease;
    opacity: 0;
}

.dz-loading {
    opacity: 1;
    transition: opacity .35s ease;
    position: absolute;
    left: 1.1875rem;
}

.list-group-activity .avatars {
    margin-right: 0.75rem;
    display: flex;
    align-items: center;
}

.list-group-activity span {
    margin-right: 0.25rem;
}

.list-group-activity .avatars>li:first-child {
    position: relative;
    z-index: 2;
}

.avatar {
    width: 2.25rem;
    height: 2.25rem;
    border-radius: 50%;
    border: 2px solid #F7F9FA;
    background: #F7F9FA;
    color: #fff;
}

.avatars>li {
    display: inline-block;
}

.chat-team-sidebar .list-group-activity .avatar {
    border-color: #fff;
}

.avatars {
    padding-left: 0;
    list-style: none;
    margin: 0;
}

.avatar.bg-primary {
    display: flex;
    align-items: center;
    justify-content: center;
}

.avatars>li+li {
    margin-left: -0.75rem;
}

.btn-options {
    color: #6c757d;
    padding: 0;
    background: none;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
}


/* ==========================================================================
9. Map
========================================================================== */


/*----------------------
9.1 Google Map
---------------------------*/

.gmaps {
    height: 350px;
    width: 100%;
}

#map-1 {
    height: 400px;
}

#map-2 {
    height: 400px;
}

#map-3 {
    height: 400px;
}


/*----------------------
9.2 Vector Map
---------------------------*/


/*-------------------------------------------------------------------
Media Query
-------------------------------------------------------------------*/


/*==========  Non-Mobile First Method  ==========*/


/* Large Devices, Wide Screens */

@media only screen and (max-width:1400px) {.product-price{position: initial;}.product-slider {
    background-color: #fff;
    border-top-left-radius: 4px;
    padding: 131px 28px;}

    .influencer-profile-data .user-social-media {
    padding: 16px 56px;
    text-align: center;
    border-right: 1px solid #e6e6f2;
}
}
@media only screen and (max-width:1200px) {.product-price{position: initial;}.product-slider{padding: 131px 30px;}
/*--------- dashboard-influence -------- */
    .user-social-media {
        padding: 16px 45px;
        text-align: center;
        width: 100%;
        border-bottom: 1px solid #dee2e6;
        border-right: transparent !important;
    }


}


/* Medium Devices, Desktops */

@media only screen and (max-width:992px) {

/*--------- dashboard-influence -------- */
    .user-social-media {
        padding: 16px 45px;
        text-align: center;
        width: 100%;
        border-bottom: 1px solid #dee2e6;
        border-right: transparent !important;
    }

}


/* Small Devices, Tablets */

@media only screen and (max-width:768px) {
    .dashboard-content {
    padding: 20px 20px 60px 20px;
}
    .nav-left-sidebar .navbar a {
        color: #fff;
        font-size: 18px;
    }
    .nav-left-sidebar .navbar {
        padding: 14px;
    }
    .nav-left-sidebar {
        width: 100%;
        position: relative;
        top: 0px;
        right: 0px;
    }
    .dashboard-wrapper {
        margin-left: 0px;
    }
    .dashboard-footer {
        margin-left: 0px;
    }
    .nav-left-sidebar .navbar-toggler {
        background-color: #fff;
    }

    /* infulencer dahboard */
    .dashboard-influence .card-footer-item {
        padding: 11px 54px;
    }
    .influencer-profile .tab-regular .nav.nav-tabs .nav-item .nav-link,
    .influencer-profile .tab-regular .nav.nav-pills .nav-item .nav-link {
        display: block;
        padding: 17px 13px;
    }

    /* Inbox */
    .page-aside {
        background: none repeat scroll 0 0 #ffffff;
        width: 280px;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        border-right: 1px solid #e6e6f2;
        margin-top: 0;
        padding-bottom: 0px;
        color: #404040;
    }

    /*--------- dashboard-product-single -------- */
.product-slider{padding: 131px 30px;}
.product-carousel .carousel-indicators{bottom: -30px;}

/*--------- dashboard-influence -------- */
    .user-social-media {
        padding: 16px 45px;
        text-align: center;
        width: 100%;
        border-bottom: 1px solid #dee2e6;
        border-right: transparent !important;
    }


}


/* Extra Small Devices, Phones */

@media only screen and (max-width:480px) {
    .dashboard-content {
    padding: 20px 20px 60px 20px;
}
    .nav-left-sidebar .navbar a {
        color: #fff;
    }
    .nav-left-sidebar .navbar-toggler {
        background-color: #fff;
    }
    .aside-header .navbar-toggle {
        display: block;
    }
    .nav-left-sidebar .navbar {
        padding: 14px;
    }
    .nav-left-sidebar {
        width: 100%;
        position: relative;
        top: 0px;
        right: 0px;
    }

    .dashboard-wrapper {
        margin-left: 0px;
    }
    .dashboard-footer {
        margin-left: 0px;
    }
    .page-aside {
        background: none repeat scroll 0 0 #fff;
        width: 100%;
        height: 100%;
        position: relative;
        top: 0;
        left: 0px;
        border-right: transparent;
        margin-top: 0px;
        padding-bottom: 0px;
        color: #404040;
        border-bottom: 1px solid #e6e6f2;
    }
    .aside-nav.collapse {
        display: none;
    }
    .dashboard-main-wrapper .main-content {
        margin-left: 0px;
        width: auto;
    }
    .aside-nav.show {
        display: block;
    }

    /*--------- dashboard-influence -------- */
    .user-social-media {
        padding: 16px 45px;
        text-align: center;
        width: 100%;
        border-bottom: 1px solid #dee2e6;
        border-right: transparent !important;
    }
    .user-social-media:last-child {
        border-bottom: transparent;
        border-right: transparent !important;
    }
    .dashboard-influence .progress {
        width: 74%;
    }
    .footer {
        margin-left: 0px;
    }
    .influencer-profile-data .user-avatar {
        float: initial;
    }
    .influencer-profile-data .user-avatar-name {
        float: initial;
    }
    .dashboard-influence .card-footer-item {
        padding: 11px 48px;
    }

    /*--------- dashboard-profile -------- */
    .tab-regular .nav.nav-tabs .nav-item .nav-link,
    .tab-regular .nav.nav-pills .nav-item .nav-link {
        display: block;
        padding: 17px 38px;
    }
    .tab-regular .nav.nav-tabs .nav-item,
    .tab-regular .nav.nav-pills .nav-item {
        margin-bottom: 5px;
    }
  /*--------- dashboard-product-single -------- */
.product-slider{padding: 30px 10px;}
.product-carousel .carousel-indicators{bottom: -30px;}
.simple-card .nav.nav-tabs .nav-item .nav-link {
    padding: 17px 29px;}
}




/* Custom, iPhone Retina */
@media only screen and (max-width:320px) {}
    </style>
@stop