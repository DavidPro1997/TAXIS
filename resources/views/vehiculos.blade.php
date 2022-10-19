@extends('layout.diseño')

@section('tituloPagina','Vehiculos')
    
@section('cuerpo')
        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Vehiculos</h4>
                                <h5 class="header-title mb-3">Se muestra los vehiculos disponibles en la compania</h5>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 

    
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card-box">
                                <h4 class="header-title mb-3">Informacion</h4>

                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover table-centered m-0">

                                        <thead class="thead-light">
                                            <tr>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>                                       
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($datos as $item)
                                            <tr>
                                                
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{ $item->marca }}</h5>
                                                    
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{ $item->modelo }}</h5>
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{ $item->año }}</h5>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
@endsection