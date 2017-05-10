@extends('admin.template.main')

@section('title','Login')

@section('content')
    {!!Form::open(['route'=>'login','method'=> 'POST'])!!}
    <div class="row center">
            <div class="col s12 ">
                <div class="card-panel">
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        {!! Form::email('email', null, ['class'=> 'validate', 'placeholder'=>'example@example.com' ]  )!!}
                        {!! Form::label('E-mail', 'E-mail')!!}
                    </div>
          
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        {!! Form::password('password', ['class'=> 'validate', 'placeholder'=>'Password' ]  )!!}
                        {!! Form::label('Password', 'Password')!!}
                    </div>

                    
                    {!! Form::submit('Entrar', ['class'=>'btn blue '] )!!}
                </div>
            </div>
      </div>
    
    {!!Form::close()!!}
@endsection