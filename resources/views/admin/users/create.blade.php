@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')
    {!!Form::open(['route' => 'users.store', 'method' => 'POST', ]) !!}
    <!-- ojo con el prefijo admin, no se usa!-->
        <div class="row">
            <div class="input-field">
                {!! Form::text('name', null, ['class'=> 'validate', 'placeholder'=>'Nombre' ]  )!!}
                {!! Form::label('name', 'Nombre')!!}
            </div>
            <div class="input-field">
                {!! Form::email('email', null, ['class'=> 'validate', 'placeholder'=>'example@example.com' ]  )!!}
                {!! Form::label('E-mail', 'E-mail')!!}
            </div>
            <div class="input-field">
                {!! Form::password('password', ['class'=> 'validate', 'placeholder'=>'Password' ]  )!!}
                {!! Form::label('Password', 'Password')!!}
            </div>
            <div class="input-field">
                {{ Form::select('type',['member' => 'Miembro', 'admin'=>'Administrador'], null )}}
                {!! Form::label('type', 'Tipo')!!}
            </div>
            {!! Form::submit('Registrar', ['class'=>'btn blue '] )!!}
        </div>
    {!!Form::close()!!}

@endsection