@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                                   @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif




                <div class="panel-heading">Registro de carrera</div>
                      @if(isset($carrera))
                    {!! Form::model($carrera,['route' =>['carrera.update',$carrera->id],'method'=>'patch']) !!}
                        @else
                            {!! Form::open(['route' => 'carrera.store']) !!}
                        @endif    
                            {!! Form::label('carrera','carrera') !!}
                            
                            {!! Form::text('carrera',null) !!}


                            {!! Form::submit('Aceptar',['class'=>'btn btn-sucess'])!!}
               

                        {!! Form::close() !!}


                
            </div>
        </div>
    </div>
</div>
@endsection
