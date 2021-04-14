@extends ('layouts.app')
@section('content')
<div class="py-12 bg-blue-400">
<br>

      <!--tabla-->
      <table class="table table-info letra">
                    <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Caja</th>
                    <th scope="col">No Carpeta</th>
                    <th scope="col">Numero Predio</th>
                    <th scope="col">Nombre Predio</th>
                    <th scope="col">Nombre Titular</th>
                    <th scope="col">Apellido Titular</th>
                    <th scope="col">Cedula Titular</th>
                    <th scope="col">Nombre Sucesor</th>
                    <th scope="col">Apellido Sucesor</th>
                    <th scope="col">Cedula Sucesor</th>
                    <th scope="col">Titulo</th>
                </tr>
                    </thead>
                        <tbody>
                          @foreach($tit as $c)
                        <tr>
                        <td >{{ $c->iden}} </td>
                        <!--caja-->
                        <td >{{ $c->cajanum}} </td>
                        <!--carpeta-->
                        <td >{{ $c->carnum}} </td>
                        <!--predio-->
                            <td> {{ $c->numpre}} </td>
                            <td> {{ $c->nompre}}</td>
                        <!--titular-->
                            <td> {{ $c->titnom}}</td>
                            <td> {{ $c->titape}}</td>
                            <td> {{ $c->titced}}</td>
                        <!--sucesor-->
                            <td> {{ $c->sunom}}</td>
                            <td> {{ $c->suape}}</td>
                            <td> {{ $c->suced}}</td>
                            <td><a href="{{route('descargas', $c->archivo)}}" 
                             class="btn btn-success" download="titulo">
                              Descargar 
                             </a>
                             </td>
                        <!---->
                        </tr>
                            @endforeach
                        </tbody>
                </table>
                <!--end table-->
                <br>
                <style>
                  .letra{
                      font-size:12px;
                  }
                </style>
      </div>
@stop