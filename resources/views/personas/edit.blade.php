@extends('welcome')
@section('contenido')
<h1>Hola desde edit</h1>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-10 mx-auto">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registro de Persona</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('persona.update',$personas->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label >Nombre de la persona</label>
                                <input type="text" class="form-control"  placeholder="Nombre de la persona" name="nombreP" value="{{$personas->nombreP}}">
                            </div>
                            <div class="form-group">
                                <label >Apellido de la persona</label>
                                <input type="text" class="form-control"  placeholder="Apellido de la persona" name="apellidoP" value="{{$personas->apellidoP}}">
                            </div>
                            <div class="form-group">
                                <label >Edad de la persona</label>
                                <input type="number" class="form-control"  placeholder="Edad de la persona" name="edadP" value="{{$personas->edadP}}">
                            </div>
                            <div class="form-group">
                                <label >Cedula de la persona</label>
                                <input type="text" class="form-control"  placeholder="Cedula de la persona" name="cedulaP" value="{{$personas->cedulaP}}">
                            </div>
                            <div >
                               <button class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                        <!-- /.card-body -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
