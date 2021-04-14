@extends ('layouts.app')
@section('content')
<div class="py-12 bg-blue-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form class="row g-3" action="{{route('registitular')}}" method="POST">
                   @csrf
                    <div class="col-md-4">
                      <label for="validationDefault01" class="form-label">Nombres</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="col-md-4">
                      <label for="validationDefault02" class="form-label">Apellidos</label>
                      <input type="text" class="form-control" id="apellido" name="apellido"  required>
                    </div>
                    <div class="col-md-4">
                    <label for="validationDefault04" class="form-label">Tipo Documento</label>
                      <select class="form-select" id="idoc" name="idoc" required>
                        <option selected disabled value="">Elejir...</option>
                        @foreach($var as $d)
                                <option value="{{$d->id}}">{{$d->descripcion}}</option>
                         @endforeach
                      </select>
                      </div>
                   <div class="col-md-3">
                    <label for="validationDefault03" class="form-label">No Documento</label>
                      <input type="number" class="form-control" id="cedula" name="cedula"  required>
                    </div>
                    <div class="col-md-6">
                      <label for="validationDefault03" class="form-label">Direccion</label>
                      <input type="text" class="form-control" id="dir" name="dir"  required>
                    </div>
                    <div class="col-md-3">
                     <label for="validationDefault03" class="form-label">Telefono</label>
                      <input type="number" class="form-control" id="tel" name="tel"  required>
                    </div>
                    <div class="col-md-6">
                      <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                    <div class="col-md-3">
                     <!--espacio de modal-->
                    </div>
                      <!-- Button trigger modal -->
                    <div class="col-md-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Ver Titulares
                        </button>
                                                 
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Listado de Titulares</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <!--tabla resul-->
                                  <table class="table table-info">
                                      <thead>
                                          <tr>
                                              <th scope="col">No Documento</th>
                                              <th scope="col">Tipo Documento</th>
                                              <th scope="col">Nombres </th>
                                              <th scope="col">Apellidos</th>
                                              <th scope="col">Direccion</th>
                                              <th scope="col">Telefono</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($ti as $c)
                                            <tr>
                                              <td >{{ $c->cedula}} </td>
                                              <td> {{ $c->descripcion}} </td>
                                              <td> {{ $c->nombres}}</td>
                                              <td> {{ $c->apellidos}}</td>
                                              <td> {{ $c->direccion}}</td>
                                              <td> {{ $c->telefono}}</td>
                                              </tr>
                                      @endforeach
                                      </tbody>
                                  </table>
                                  <!--final tabla-->
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <!--end modal-->

                  </form>
                    
                </div>
            </div>
        </div>
    </div>
@stop