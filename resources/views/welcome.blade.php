@extends('layout.diseño')

@section('tituloPagina','Home')
    
@section('cuerpo')
        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Pagina Principal</h4>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card-box">
                                <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                <h4 class="mt-0 font-16">Conductores</h4>
                                <div class="row mb-4" >
                                    <div class="col-6">
                                        <a href="{{ route('personas.index') }}" class="logo text-center">
                                        <button type="button" href="persona.index"> 
                                            <img src="assets/images/users/user-1.jpg"  width="230"/>
                                        </button>
                                        </a>
                                    </div>
                                
                                </div>     

                            </div> <!-- end card-box-->
                        </div>

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Vehiculos</h4>
                                    <div class="row mb-4" >
                                        <div class="col-6">
                                            <a href="{{ route('vehiculos.index') }}" class="logo text-center">
                                            <button type="button"> 
                                                <img src="assets/images/taxiMod1.jpg"  width="230" height="230"/>
                                            </button>
                                            </a>
                                        </div>
                                    
                                    </div>     
    
                                </div> <!-- end card-box-->
                            </div>

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Asignaciones</h4>
                                    <div class="row mb-4" >
                                        <div class="col-6">
                                            <a href="{{ route('personasVehiculos.index') }}" class="logo text-center">
                                            <button type="button"> 
                                                <img src="assets/images/asignacion.jpg"  width="230" height="230"/>
                                            </button>
                                            </a>
                                        </div>
                                    
                                    </div>     
    
                                </div> <!-- end card-box-->
                            </div>
                        
                       
                    </div>
                    <!-- end row -->
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        
@endsection