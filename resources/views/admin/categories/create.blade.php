@extends('admin.template.main')

@section('title', 'Agregar Categoría')
@section('content')
    
    {!!Form::open(['route'=>'categories.store','method'=> 'POST']) !!}
         <div class="row center">
            <div class="col s12 ">
                <div class="card-panel">
                    <div class="input-field">
                        <i class="material-icons prefix">book</i>
                        {!! Form::text('name', null, ['class'=> 'validate', 'placeholder'=>'Nombre' ]  )!!}
                        {!! Form::label('name', 'Nombre de categoria')!!}
                    </div>
                </div>
            </div>
            {!! Form::submit('Crear', ['class'=>'btn blue '] )!!}
        </div>
         
    {!!Form::close() !!}
    
@endsection