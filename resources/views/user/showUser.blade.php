@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado usuarios</div>


                <div class="panel-body">
                  
                      <table class="table border">
                          <thead>
                            <th>Id</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Carrera</th>
                            <th>Rol</th>
                          </thead>
                        <body>
                          
                            <tr>
                              <td>{{ $user->id}}</td>
                              <td>{{ $user->codigo}}</td>
                              <td>{{ $user->nombre}}</td>
                              <td>{{ $user->correo}}</td>
                              <td>{{ $user->carrera->carrera}}</td>
                              <td>{{ $user->rol}}</td>
                            </tr>
                        
                        </body>
                      </table>
                     
                     
                      
                </div>
            </div>
            <div class="row">
        <div class="col-md-8 col-md-offset-2">
          {!!Form::open()!!}
          {!!From::label('program_id', 'seleccione el programa ', ['class'=>''])!!}
          {!!Form::select('program_id',programas,null,['class'=>'from-control'])!!}
          {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection