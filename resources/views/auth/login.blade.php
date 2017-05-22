@extends('admin.template.main')

@section('title','Login')

@section('content')
@include('admin.template.partials.nav')
    {!!Form::open(['route'=>'login','method'=> 'POST'])!!}
    <div class="row">
            <div class="col s12 m7 l6 offset-m3 offset-l3 ">
                <div class="collection">
                    <div class="collection-item">
                        <div class="collection-item">
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
            </div>
      </div>
    
    {!!Form::close()!!}
@endsection