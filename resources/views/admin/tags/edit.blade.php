@extends('admin.template.main')
@section('title','Edit Tag')
@section('content')
    {!! Form::open(['route' => ['tags.update',$tag], 'method'=>'PUT'])!!}
        <div class="row center">
            <div class="col s12 ">
                <div class="card-panel">
                    <div class="input-field">
                        <i class="material-icons prefix">book</i>
                        {!! Form::text('name', $tag->name, ['class'=> 'validate', 'placeholder'=>'Nombre de tag','required' ]  )!!}
                        {!! Form::label('name', 'Nombre')!!}
                    </div>
                </div>
            </div>
            {!! Form::submit('Guardar', ['class'=>'btn blue '] )!!}
        </div>
    {!! Form::close()!!}
    
@endsection