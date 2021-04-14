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
                        <label for="inputEmail4" class="form-label">Numero de predio</label>
                        <input type="number" class="form-control" id="num" name="num">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Titular</label>
                        <select id="titular" name="titular" class="form-select">
                        <option selected>Elegir...</option>
                        @foreach($var as $d)
                                <option value="{{$d->id}}">{{$d->nombres}} {{$d->apellidos}}</option>
                         @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                    <label for="inputState" class="form-label">Sucesor</label>
                        <select id="sucesor" name="sucesor" class="form-select">
                        <option selected>Elegir...</option>
                        @foreach($s as $c)
                                <option value="{{$c->id}}">{{$c->nombres}} {{$c->apellidos}}</option>
                         @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                    <label for="inputState" class="form-label">Vereda</label>
                        <select id="vereda" name="vereda" class="form-select">
                        <option selected>Elegir...</option>
                        @foreach($vereda as $v)
                                <option value="{{$v->id}}">{{$v->descripcion}}</option>
                         @endforeach
                        </select>
                    </div>
                       <div class="col-md-6">
                        <label for="inputZip" class="form-label">Archivo</label>
                         <!--<input type="file" class="form-control" id="ar" name="ar">-->
                         <input name="uploadedfile" id="uploadedfile" type="file" />
                      </div>
                    </div>
                   
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    </form>
                <!--end form--> 

                </div>
            </div>
        </div>
    </div>
@stop