    @extends('layouts.master')
    @section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>



    <script>
        $( document ).ready(function() {
            pageNumber=0;
            pagination=<?php echo json_encode($pagination) ;?>;
            datastypes = <?php echo json_encode($datastype) ;?>;
            datas = <?php echo json_encode($datas) ;?>;
            if(typeof datas !== 'undefined' && datas.length > 0) {
                for (var item in datastypes) {  
                    var libelle = datastypes[item]['LIBELLE']
                    for (let i = 0; i < libelle.length; i++) {
                        if(libelle[i] == " ") {
                            libelle[i]="";
                        }

                    }
                    var label_graph = [];
                    var data_graph = [];

                        for  (var data in datas) {
                            if(datas[data]['IDDATATYPE'] ==  datastypes[item]['IDDATATYPE']) {
                                label_graph.push(datas[data]['DATE']);
                                data_graph.push(datas[data]['VALEUR']);
                            }
                        }
                    console.log(data_graph);
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
            $( "#donnee_recente" ).on('click','#suivantPagination',function() {
                if ((pageNumber+1)*pagination < datas.length) {
                    $("#allData").empty();
                    pageNumber = pageNumber+1;
                    toAppend ="";
                    for(i=0; i<pagination ; i++){
                        j=0;
                        toAppend = toAppend.concat("<tr>");
                        for(var value in datas[pagination*pageNumber+i]) {
                            if (pagination*pageNumber+i <= datas.length && j>0) {
                                toAppend = toAppend.concat("<td>");
                                toAppend = toAppend.concat(datas[pagination*pageNumber+i][value])
                                toAppend = toAppend.concat("</td>");
                            }
                            j=j+1;
                        }
                        toAppend = toAppend.concat("</tr>");
                    }
                    if(datas.length-(pageNumber*pagination) <= pagination) {
                        toAppend = toAppend.concat(`<tr>
                                                <td><a id="precedentPagination" class="btn btn-outline-light float-right"><</a></td>
                                                <td></td>
                                                </tr>
                                                `)
                    } else {
                        toAppend = toAppend.concat(`<tr>
                                                <td><a id="precedentPagination" class="btn btn-outline-light float-right"><</a></td>
                                                <td><a id="suivantPagination" class="btn btn-outline-light float-right">></a></td>
                                                </tr>
                                                `)
                    }
                   
                    $( "#allData").append(toAppend);
                }         
            });
            $( "#donnee_recente" ).on('click','#precedentPagination',function() {
                if (pageNumber >  0) {
                    $("#allData").empty();
                    pageNumber = pageNumber-1;
                    toAppend ="";
                    for(i=0; i<pagination ; i++){
                        j=0;
                        toAppend = toAppend.concat("<tr>");
                        for(var value in datas[pagination*pageNumber+i]) {
                            if (pagination*pageNumber+i <= datas.length  && j>0) {
                                toAppend = toAppend.concat("<td>");
                                toAppend = toAppend.concat(datas[pagination*pageNumber+i][value])
                                toAppend = toAppend.concat("</td>");
                            }
                            j=j+1;
                        }
                        toAppend = toAppend.concat("</tr>");
                    }
                    if(pageNumber ==0) {
                        toAppend = toAppend.concat(`<tr>
                                                    <td></td>
                                                    <td><a id="suivantPagination" class="btn btn-outline-light float-right">></a></td>
                                                    `)
                    } else {
                        toAppend = toAppend.concat(`<tr>
                                                <td><a id="precedentPagination" class="btn btn-outline-light float-right"><</a></td>
                                                <td><a id="suivantPagination" class="btn btn-outline-light float-right">></a></td>
                                                `)
                    }
                    $( "#allData").append(toAppend);

                } else {

                }
                
                
            });
            function RefreshData()
            {
                $.ajax({
                        url:"{!! URL::to('refresh-accueil') !!}",
                        type: 'POST',
                        data: {_token: '{{csrf_token()}}' },
                        success: function (data) {
                            if  (!isEmpty(data)) {
                                location.reload();
                            }
                        },
                        error: function () {
                            console.log("Rafraichssement de la page érroné");
                        }

                })
            }
            function isEmpty(obj) {
                for(var key in obj) {
                    if(obj.hasOwnProperty(key))
                        return false;
                }
                return true;
            }
            setInterval( RefreshData, 25000 );
        });  
    </script>

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
            <div>
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Tableau de bord général</h2>
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
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div>
                        <div class="row">
                        @foreach ($datastype as $key => $datatype)
                            @if (count($datastype) % 4 == 0)
                            <div class='col-xl-3 col-md-6 '>
                            @elseif (count($datastype) % 3 == 0)
                            <div class='col-xl-4'>
                            @elseif (count($datastype) % 2 == 0)
                            <div class='col-md-6'>
                            @else
                            <div class='col-12'>
                            @endif
                                <div class='card'>
                                    <div class='card-body'>
                                        <h3 class='mb-1'>{{ $datatype->LIBELLE }}</h3>
                                        <div class='metric-value d-inline-block'>
                                            <h5 class='text-muted'>
                                            @php
                                                $allSensors = "";
                                                $i = 0;
                                            @endphp
                                            @foreach ($datastypesensor as $key2 => $datatypesensor)
                                                @if ($datatype->LIBELLE == $datatypesensor->LIBELLE)
                                                    @php
                                                        $allSensors .= $datatypesensor->NAMESENSOR;
                                                    @endphp
                                                    @if ($i % 2 == 0)
                                                        @php
                                                            $allSensors .= " / ";
                                                        @endphp
                                                    @else
                                                        @php
                                                            $allSensors .= "</br>";
                                                        @endphp
                                                    @endif
                                                @endif
                                            @endforeach
                                            @php
                                                $allSensors = substr($allSensors, 0, -3);
                                            @endphp
                                            {{  $allSensors }}
                                            </h5>
                                        </div>
                                    @isset($datas[0])
                                        @php
                                            $temp = new StdClass;
                                            $moy = 0;
                                            $i=0;
                                            $j=0;
                                            $evolution=0;
                                        @endphp
                                        @foreach($datas as $key => $value)
                                            @if($value->IDDATATYPE == $datatype->IDDATATYPE)
                                                @php
                                                    $temp->$i =$value;
                                                    $i=$i+1;
                                                @endphp
                                            @endif
                                        @endforeach
                                        @foreach($temp as $key => $value)
                                            @if($j < $i-1)
                                                @php
                                                    $moy = $moy + $value->VALEUR;
                                                    $j=$j+1;
                                                @endphp
                                            @else
                                                @php
                                                    if($i>1){
                                                        $moy= $moy/($i-1);
                                                    } else {
                                                        $moy=$value->VALEUR;
                                                    }

                                                    $evolution = (100* $value->VALEUR/$moy)-100;
                                                    $evolution = round($evolution,2);

                                                @endphp
                                            @endif
                                        @endforeach
                                    @if($evolution >= 0)
                                    <div class='metric-label d-inline-block float-right text-success font-weight-bold'>
                                    <span><i class='fa fa-fw fa-arrow-up'></i></span><span>{{$evolution}}%</span>
                                    @else
                                    <div class='metric-label d-inline-block float-right text-danger font-weight-bold'>
                                    <span><i class='fa fa-fw fa-arrow-down'></i></span><span>{{$evolution}}%</span>
                                    @endif
                                    </div>
                                    @endisset
                            </div>
                            @php
                                $canvasId = str_replace(" ","",$datatype->LIBELLE)
                            @endphp
                            <canvas id= {{ $canvasId }} > </canvas>
                        </div>
                    </div>
                    @endforeach
                    @php
                        $k=0;
                    @endphp
                        </div>
                        <div class="row">






                            <div class="col-12">
                                <div class="card">
                                    <h5 class="card-header">Données récentes </h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table id="donnee_recente" class="table">
                                                @isset($datas[0])
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        @foreach ($datas[0] as $key => $value)
                                                            @if($k>0)
                                                        <th id="{{ $k }}" class='border-0'> {{ $key }}</th>
                                                            @endif
                                                            @php
                                                                $k=$k+1;
                                                            @endphp
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                                <tbody id="allData">
                                                        @for ($i = 0; $i < $pagination; $i++)
                                                    <tr>
                                                            @php
                                                                $k=0;
                                                            @endphp
                                                            @isset($datas[$i])
                                                                @foreach ($datas[$i] as $key3 => $value2)
                                                                    @if($k>0)
                                                        <td>
                                                                        {{ $value2 }}
                                                        </td>
                                                                    @endif
                                                                    @php
                                                                        $k=$k+1;
                                                                    @endphp
                                                                @endforeach
                                                            @endisset
                                                    </tr>
                                                        @endfor                                
                                                    
                                                    <tr>
                                                        <td></td>
                                                        @if($pagination<$k)
                                                        <td><a id="suivantPagination" class="btn btn-outline-light float-right">></a></td>
                                                        @else
                                                        <td></td>
                                                        @endif
                                                    </tr>
                                                </tbody>
                                                @endisset
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
