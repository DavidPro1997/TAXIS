@extends('layout.diseño')

@section('tituloPagina','Asignaciones')
    
@section('cuerpo')

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Asignacion de conductores y vehiculos</h4>
                                <h5 class="header-title mb-3">Se muestra los conductores asignados a los diferentes vehiculos de la compania</h5>
                                
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal" data-bs-whatever="@mdo">+ Añadir asignacion</button>

                                <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Nueva Asignacion</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="sub-header">
                                                Escoga un conductor y un vehiculo para su asignacion.
                                            </p>
                                          <form action="{{ route('personasvehiculos.store') }}" method="POST" >
                                            @csrf
                                            <div class="mb-3">
                                              <label for="recipient-name" class="col-form-label">Conductor:</label>
                                              
                                              <select class="custom-select" name="persona[]">
                                                @foreach($personas as $item)
                                                    <option value={{ $item['id'] }}>{{ $item['nombre'] . ' ' . $item['apellido'] }} </option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="mb-3">
                                              <label for="message-text" class="col-form-label">Vehiculo:</label>
                                              <select class="custom-select" name="vehiculo[]">
                                                @foreach($vehiculos as $item)
                                                    <option value={{ $item['id'] }}>{{ $item['marca'] . ' ' . $item['modelo'] }} </option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button class="btn btn-primary">
                                                  <span class="fa fa-user-plus"></span> Agregar 
                                              </button>
                                              </div>
                                          </form>
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div>


                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 
                    <br/>

                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                    @endif
                    

                    <div class="row">
                        <div class="col-xl-14">
                            <div class="card-box">
                                <h4 class="header-title mb-3">Informacion</h4>

                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover table-centered m-0">

                                        <thead class="thead-light">
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Cedula</th>
                                                <th>Telefono</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                                                                                                        
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($datos as $item)
                                            <tr>
                                                
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{ $item->nombre }}</h5>
                                                    
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{ $item->apellido }}</h5>
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{ $item->cedula }}</h5>
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{ $item->telefono }}</h5>
                                                </td>

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