    @extends('layouts.master')
    @section('content')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $( document ).ready(function() {
            $( ".delete_icone" ).click(function() {
                event.preventDefault();
                idCapteur = $(this).attr("id")
                $.ajax({
                    url:"{!! URL::to('delete_capteur') !!}",
                    type: 'POST',
                    data: {idCapteur: idCapteur, _token: '{{csrf_token()}}' },

                    success: function (data, statut) {
                        if (data == 1) {
                            $("#"+idCapteur).parent().parent().remove()
                        } else {
                            alert("Erreur lors de la suppression")
                        }
                    }

                })
            });
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
                                <h2 class="pageheader-title">Capteurs</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">Tableau de bord</li>
                                            <li class="breadcrumb-item active" aria-current="page">Capteurs</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                <a href="ajout_capteur"><button type="submit" class="btn btn-primary btn-lg btn-block">Ajouter un capteur</button></a>
                            </div>
                    </div>
                        <div class="row">
                            <!-- ============================================================== -->

                                          <!-- Données récentes  -->
                            <!-- ============================================================== -->
                            <div class="col-12">
                                <div class="card">
                                    <h5 class="card-header">Vos capteur</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table id="donnee_recente" class="table">
                                                @isset($capteurs)
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class='border-0'> Capteurs </th>
                                                        <th class='border-0' colspan='2'> Gaz </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="allData">
                                                    @foreach ($capteurs as $capteur => $value)
                                                    <tr>
                                                        <td>
                                                        {{ $capteur }}
                                                        </td>
                                                        <td>
                                                        {{ $value->GAZ }}
                                                        </td>
                                                        <td>
                                                        <a href="" class="fas fa-2x fa-minus-circle delete_icone" id='{{ $value->IDSENSOR }}'></a>
                                                        </td>
                                                    </tr>  
                                                    @endforeach                          
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