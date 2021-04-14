@extends ('layouts.app')
@section('content')
<div class="py-12 bg-yellow-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{route('regisvereda')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Nombre de la Vereda</label>
                    <textarea class="form-control" id="des" name="des" rows="3" required></textarea>
                </div>
                <br>
                    <div class="col-md-6">
                      <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                    <br>
                   <!-- Button trigger modal -->
                    <div class="col-md-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Ver Veredas
                        </button>
                                                 
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Listado de Veredas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <!--tabla resul-->
                                  <table class="table table-info">
                                      <thead>
                                          <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Nombre de la vereda</th>
                                              
                                          </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($ver as $c)
                                            <tr>
                                              <td >{{ $c->id}} </td>
                                              <td> {{ $c->descripcion}} </td>
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