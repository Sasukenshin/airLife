    @extends('layouts.master')
    @section('content')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <div class="container-fluid dashboard-content ">
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
        <div class="row">
            <div class='col-12'>
                <div class="card ">
                    <div class="card-header text-center"><span class="splash-description">Période des valeurs</span></div>
                        <div class="card-body">
                            <form action="statistique" method="post">
                                @csrf
                                <div class="form-row">
                                    <!--input class="form-control form-control-lg" name="id_sensor" type="text" placeholder="Identifiant du capteur" autocomplete="off" required=""-->
                                    <div class="col-6">
                                        <label for="dateDebut">Date de début</label>
                                        <input class="form-control"  type="date" id="dateDebut" name="dateDebut" value={{ $dateDebut }} required="">
                                    </div>
                                    <div class="col-6">
                                        <label for="dateFin">Date de fin</label>
                                        <input class="form-control" type="date" id="dateFin" name="dateFin" value={{ $dateFin }} required="">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
        <div >
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <h5 class="card-header">Données par gaz </h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table id="donnee_recente" class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class='border-0'> Nom des capteurs</th>
                                                <th class='border-0'> Nombre de relevé</th>
                                                <th class='border-0'> Moyenne des relevé</th>
                                                <th class='border-0'> Médiane des relevé</th>
                                                <th class='border-0'> Maximal relevé</th>
                                                <th class='border-0'> Minimum relevé</th>
                                            </tr>
                                        </thead>
                                        <tbody id="allData">
                                            @foreach ($stat_par_gaz as $counter => $value)
                                            <tr class="border-0">  
                                            <th>{{$value->CAPTEUR }}</th> 
                                            <th>{{$value->NB_RELEVE}}</th>
                                            <th>{{$value->MOYENNE}}</th> 
                                            <th>{{$value->MEDIANE}}</th> 
                                            <th>{{$value->MAX}}</th> 
                                            <th>{{$value->MIN}}</th> 
                                            </tr>
                                            
                                            
                                            @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
                <div class="row">
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->

                                    <!-- Données récentes  -->
                    <!-- ============================================================== -->
                    <div class="col-12">
                        <div class="card">
                            <h5 class="card-header">Données par capteurs </h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table id="donnee_recente" class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class='border-0'> Nom des capteurs</th>
                                                <th class='border-0'> Nombre de relevé</th>
                                                <th class='border-0'> Nombre de jour de depuis mise en service</th>
                                            </tr>
                                        </thead>
                                        <tbody id="allData">
                                        
                                            @foreach ($stat_par_capteurs as $counter => $value)
                                            <tr class="border-0">  
                                            <th>{{$value->CAPTEUR }}</th> 
                                            <th>{{$value->NB_RELEVE}}</th> 
                                            @if($value->NB_RELEVE >1)
                                            <th>{{$value->DUREE_VIE}} jours</th> 
                                            @else
                                            <th>{{$value->DUREE_VIE}} jour</th> 
                                            @endif
                                            </tr>
                                            
                                            
                                            @endforeach
                                        
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
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->

@stop
