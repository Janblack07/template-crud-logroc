@extends('welcome')
@section('contenido')
<h1>Hola desde index</h1>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabla para mostrar todas las personas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body ">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>id</th>
              <th>Nombre de la persona</th>
              <th>Apellido de la persona</th>
              <th>Cedula de la persona</th>
              <th>Edad de la persona</th>
              <th class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($personas as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombreP}}</td>
                    <td>{{$item->apellidoP}}</td>
                    <td>{{$item->cedulaP}}</td>
                    <td>{{$item->edadP}}</td>
                    <td class="d:flex justify-content-between align-items-center">
                        <a href="{{route('persona.edit',$item->id)}}" class="btn btn-primary d:block w-100">Edit</a>
                        <form action="{{route('persona.delete',$item->id)}}" method="POST" class="d:block w-100">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger ">Delete</button>
                        </form>

                    </td>
                </tr>
                @empty
                <tr>
                    <td>no existen datos</td>
                    <td>no existen datos</td>
                    <td>no existen datos</td>
                    <td>no existen datos</td>
                    <td>no existen datos</td>
                </tr>
                @endforelse
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>
@endsection
