@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado usuarios</div>


                <div class="panel-body">
                    @if(count($users)>0)
                      <table class="table border">
                          <thead>
                            <th>Id</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Carrera</th>
                            <th>Rol</th>
                            <th>Acceso nombre correo</th>
                          </thead>
                        <body>
                            @foreach($users as $user)
                            <tr>
                              <td>{{ $user->id}}</td>
                              <td>{{ $user->codigo}}</td>
                              <td>{{ $user->nombre}}</td>
                              <td>{{ $user->correo}}</td>
                              <td>{{ $user->carrera->carrera}}</td>
                              <td>{{ $user->rol}}</td>
                              <td>{{ $user->usuario_correo}}</td>
                              <td>{{ $user->numero_programas}}</td>
                            </tr>
                            @endforeach
                        </body>
                      </table>
                      @else
                      <span>No  hay carreras registradas</span>
                      @endif
                     
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection