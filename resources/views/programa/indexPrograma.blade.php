@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Programas </div>


                <div class="panel-body">
                    @if(count($programas)>0)
                      <table>
                        <th>Nombre del programa</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>

                        <body>
                            @foreach($programas as $programa)
                            <tr>
                              <td>{{ $programa->id}}</td>
                               <td>{{ $programa->nombre}}</td>
                               <td>{{ $programa->hoirario}}</td>

                               <td>
                                <td colspan="3">
                                  @foreach($programa->users as $user)
                                  <ul>

                                    <li>{{$user-nombre}}--{{$user->rol}} </li>
                                  </ul>
                                  @endforeach


                               </td>





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
