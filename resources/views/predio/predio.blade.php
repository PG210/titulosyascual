@extends ('layouts.app')
@section('content')
<div class="py-12 bg-blue-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <!--formulario-->
                 <form class="row g-3" action="{{route('regispredio')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">No Resolucion de Cabildo</label>
                        <input type="number" class="form-control" id="num" name="num" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Fecha Resolucion</label>
                        <input type="date" class="form-control" id="fec" name="fec" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Nombre Predio</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Titular</label>
                        <select id="titular" name="titular" class="form-select" required>
                        <option selected>Elegir...</option>
                        @foreach($var as $d)
                                <option value="{{$d->id}}">{{$d->nombres}} {{$d->apellidos}}</option>
                         @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                    <label for="inputState" class="form-label">Sucesor</label>
                        <select id="sucesor" name="sucesor" class="form-select" required>
                        <option selected>Elegir...</option>
                        @foreach($s as $c)
                                <option value="{{$c->id}}">{{$c->nombres}} {{$c->apellidos}}</option>
                         @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                    <label for="inputState" class="form-label">Vereda</label>
                        <select id="vereda" name="vereda" class="form-select" required>
                        <option selected>Elegir...</option>
                        @foreach($vereda as $v)
                                <option value="{{$v->id}}">{{$v->descripcion}}</option>
                         @endforeach
                        </select>
                    </div>
                       <div class="col-md-6">
                        <label for="inputZip" class="form-label">Archivo</label>
                         <!--<input type="file" class="form-control" id="ar" name="ar">-->
                         <input name="uploadedfile" id="uploadedfile" type="file" required />
                      </div>
                      <div class="col-md-6">
                     <!--espacio de modal-->
                    </div>
                      <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    <div class="col-md-3">
                     <!--espacio de modal-->
                    </div>
                    <!-- Button trigger modal -->
                    <div class="col-md-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Ver Sucesores
                        </button>
                         
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ver predio</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <!--tabla resul-->
                                  <table class="table table-info">
                                      <thead>
                                          <tr>
                                              <th scope="col">No Resulucion Cabildo</th>
                                              <!--<th scope="col">Fecha Resolucion</th>-->
                                              <th scope="col">Nombre Predio</th>
                                              <th scope="col">Archivo</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($pre as $c)
                                            <tr>
                                              <td >{{ $c->numero}} </td>
                                              <td> {{ $c->nombre}} </td>
                                              <td> {{ $c->archivo}}</td>
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



                    </div>  
                    
                                     
                    </form>
                <!--end form--> 
                    

                </div>
            </div>
        </div>
    </div>
@stop