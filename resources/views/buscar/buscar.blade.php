@extends ('layouts.app')
@section('content')
<div class="py-12 bg-yellow-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <!--acordeon-->
            <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Buscar por Nombre del Titular
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!--buscar por nombre-->
                                <form class="d-flex"  action="{{route('bus')}}" method="POST" >
                                @csrf
                                    <input class="form-control me-2" type="search" placeholder="Ej: Yanira Benavides" aria-label="Search" name="busqueda" id="busqueda">
                                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                                </form>
                                <br>
                                    <!--tabla-->
                                    <table class="table table-info letra">
                                        <thead>
                                    <tr>
                                        <th scope="col">No Cedula</th>
                                        <th scope="col">Nombres</th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Titulo</th>
                                    </tr>
                                        </thead>
                                            <tbody>
                                            @foreach($tit as $c)
                                            <tr>
                                                <td> {{ $c->cedula}}</td>
                                                <td> {{ $c->nombres}}</td>
                                                <td> {{ $c->apellidos}}</td>
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
                        
                                <br>
                            <!--finalizar-->
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Buscar por Nombre del Sucesor
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                         <!--aqui colocar el buscar sucesor-->
                                <!--buscar por nombre-->
                                <form class="d-flex"  action="{{route('bus')}}" method="POST" >
                                @csrf
                                    <input class="form-control me-2" type="search" placeholder="Ej: Yanira Benavides" aria-label="Search" name="sucesor" id="sucesor">
                                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                                </form>
                                <br>
                                    <!--tabla-->
                                    <table class="table table-info letra">
                                        <thead>
                                    <tr>
                                        <th scope="col">No Cedula</th>
                                        <th scope="col">Nombres</th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Titulo</th>
                                    </tr>
                                        </thead>
                                            <tbody>
                                            @foreach($su as $d)
                                            <tr>
                                                <td> {{ $d->cedula}}</td>
                                                <td> {{ $d->nombres}}</td>
                                                <td> {{ $d->apellidos}}</td>
                                                <td><a href="{{route('descargas', $d->archivo)}}" 
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
                         <!--aqui finaliza-->
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Buscar Titular por Cedula
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                              <!--aqui colocar el buscar sucesor-->
                                <!--buscar por nombre-->
                                <form class="d-flex"  action="{{route('bus')}}" method="POST" >
                                @csrf
                                    <input class="form-control me-2" type="number" placeholder="Ej: 1085923..." aria-label="Search" name="ced" id="ced">
                                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                                </form>
                                <br>
                                    <!--tabla-->
                                    <table class="table table-info letra">
                                        <thead>
                                    <tr>
                                        <th scope="col">No Cedula</th>
                                        <th scope="col">Nombres</th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Titulo</th>
                                    </tr>
                                        </thead>
                                            <tbody>
                                            @foreach($cedula as $r)
                                            <tr>
                                                <td> {{ $r->cedula}}</td>
                                                <td> {{ $r->nombres}}</td>
                                                <td> {{ $r->apellidos}}</td>
                                                <td><a href="{{route('descargas', $r->archivo)}}" 
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
                         <!--aqui finaliza-->
                                   
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Buscar Sucesor por cedula
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                         <!--aqui colocar el buscar sucesor-->
                                <!--buscar por nombre-->
                                <form class="d-flex"  action="{{route('bus')}}" method="POST" >
                                @csrf
                                    <input class="form-control me-2" type="number" placeholder="Ej: 10859423..." aria-label="Search" name="cedulasus" id="cedulasus">
                                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                                </form>
                                <br>
                                    <!--tabla-->
                                    <table class="table table-info letra">
                                        <thead>
                                    <tr>
                                        <th scope="col">No Cedula</th>
                                        <th scope="col">Nombres</th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Titulo</th>
                                    </tr>
                                        </thead>
                                            <tbody>
                                            @foreach($suc as $s)
                                            <tr>
                                                <td> {{ $s->cedula}}</td>
                                                <td> {{ $s->nombres}}</td>
                                                <td> {{ $s->apellidos}}</td>
                                                <td><a href="{{route('descargas', $s->archivo)}}" 
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
                         <!--aqui finaliza-->
                        </div>
                        </div>
                    </div>

            
            <!--end acordeon-->
           </div>  
        </div>
    </div>
@stop