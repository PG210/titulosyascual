@extends ('layouts.app')
@section('content')
<div class="py-12 bg-yellow-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{route('regiscaja')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Numero de Caja</label>
                    <input type="number" class="form-control" id="exampleFormControlTextarea1" id="num" name="num" rows="3" min="0" max="500"></textarea>
                </div>
                <div class="mb-3">
                    <select class="form-select form-select mb-3" aria-label=".form-select example" id="titulo" name="titulo">
                    <option selected>Seleccionar Carpeta</option>
                    @foreach($var as $d)
                                <option value="{{$d->id}}">{{$d->numero}}</option>
                    @endforeach
                    </select>
                </div>
                    <div class="col-12">
                      <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
@stop