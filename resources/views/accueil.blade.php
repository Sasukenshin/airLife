    @extends('layouts.master')
    @section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $( document ).ready(function() {
            datastypes = <?php echo json_encode($datastype) ;?>;
            datas = <?php echo json_encode($datas) ;?>;
            console.log(datas);
            if(typeof datas !== 'undefined' && datas.length > 0) {
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
            }
           
        });  
    </script>
    
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                            <div class="page-header">
                                <h2 class="pageheader-title">Tableau de bord général</h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">Tableau de bord</li>
                                            <li class="breadcrumb-item active" aria-current="page">Statistiques</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                <a href="ajout_capteur"><button type="submit" class="btn btn-primary btn-lg btn-block">Ajouter un capteur</button></a>
                            </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                            <?php
                                //die();
                                $div="";
                                if (count($datastype) % 4 == 0) {
                                    $div= "<div class='col-xl-3 col-md-6'>";
                                } elseif (count($datastype) % 3 == 0) {
                                    $div= "<div class='col-xl-4 col-md-4'>";
                                } elseif (count($datastype) % 2 == 0) {
                                    $div= "<div class='col-md-6'>";
                                } else
                                {
                                    $div= "<div class='col-12'>";
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
                                                        <?php 
                                                        if(isset($datas[0])){
                                                        foreach ($datas[0] as $key => $value) {
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
                                                        }?>
                                                    <tr>
                                                        <td colspan="9"><a href="#" class="btn btn-outline-light float-right">Voir Détails</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

                        </div>
                    </div>
                </div>
            </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->    
    
@stop