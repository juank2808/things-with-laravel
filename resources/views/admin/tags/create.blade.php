@extends('admin.template.main')
@section('title','Add tags')
@include('admin.template.partials.nav')
@section('content')
    {!! Form::open(['route' => 'tags.store', 'method'=>'POST'])!!}
        <div class="row center">
            <div class="col s12 ">
                <div class="card-panel">
                    <div class="input-field">
                        <i class="material-icons prefix">book</i>
                        {!! Form::text('name', null, ['class'=> 'validate', 'placeholder'=>'Nombre de tag','required' ]  )!!}
                        {!! Form::label('name', 'Nombre')!!}
                    </div>
                </div>
            </div>
            {!! Form::submit('Registrar', ['class'=>'btn blue '] )!!}
        </div>
    {!! Form::close()!!}
    
@endsection