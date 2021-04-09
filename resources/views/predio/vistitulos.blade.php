@extends ('layouts.app')
@section('content')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <!--tabla-->
                <table class="table table-info">
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
                        <!---->
                        </tr>
                            @endforeach
                        </tbody>
                </table>
                <!--end table-->
                </div>
            </div>
        </div>
    </div>
@stop