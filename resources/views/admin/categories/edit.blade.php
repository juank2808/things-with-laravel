@extends('admin.template.main')
@section('title','Edit Tag')
@include('admin.template.partials.nav')
@section('content')
    {!! Form::open(['route' => ['categories.update',$category], 'method'=>'PUT'])!!}
        <div class="row center">
            <div class="col s12 ">
                <div class="card-panel">
                    <div class="input-field">
                        <i class="material-icons prefix">book</i>
                        {!! Form::text('name', $category->name, ['class'=> 'validate', 'placeholder'=>'Nombre de tag','required' ]  )!!}
                        {!! Form::label('name', 'Nombre')!!}
                    </div>
                </div>
            </div>
            {!! Form::submit('Guardar', ['class'=>'btn blue '] )!!}
        </div>
    {!! Form::close()!!}
    
@endsection