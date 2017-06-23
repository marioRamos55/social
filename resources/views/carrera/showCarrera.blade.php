@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado carreras</div>


                <div class="panel-body">
                   
                      <table class="table border">
                        <th>Id</th>
                        <th>Carrera</th>
                        <th>Acciones</th>
                        <th></th>
                        <th></th>

                        <body>
                           
                            <tr>
                              <td>{{ $carrera->id}}</td>
                               <td>{{ $carrera->carrera}}</td>
                               <td>
                                <a href="{{ route('carrera.edit',$carrera->id)}}" class="btn btn-warning">
                                editar
                                </a>

                             {!! Form::open(['route' =>['carrera.destroy',
                             $carrera->id],'method'=>'delete']) !!}
                             {!! Form::submit('eliminar',['class'=>'btn btn-danger'])!!}
                             {!! Form::close() !!}
                            

                        


                               </td>
                            </tr>
                          
                        </body>
                      </table>
                  
                      <span>No  hay carreras registradas</span>
                
                     
                                      <!--   <a href="/carrera/create" class="btn btn-succes">Nueva carrera</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
