@extends('admin.template.main')

@section('title', 'Crear Usuario')
@include('admin.template.partials.nav')
@section('content')
    <script>
        var num_opciones = 1;
        var numcheckbox = 0;
        function habilitaDeshabilita(esto)
        
        {
            if (esto.checked){
                        if (numcheckbox >= num_opciones) {
                                esto.checked = false;
                                alert ("Solo Puedes Seleccionar 1");
                        } else {
                                numcheckbox++;
                        }
                } else {
                        numcheckbox--;
                }
        }

    </script>
<div class="container">
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <script type="text/javascript" src="">
                alert('$error');
            </script>
        @endforeach
    @endif
    {!!Form::open(['route' => 'users.store', 'method' => 'POST', ]) !!}
    <!-- ojo con el prefijo admin, no se usa!-->
        <div class="row center">
            <div class="col s12 ">
                <div class="card-panel">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        {!! Form::text('name', null, ['class'=> 'validate', 'placeholder'=>'Nombre' ]  )!!}
                        {!! Form::label('name', 'Nombre')!!}
                    </div>
              
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
         
                    <div class="input-field">
                        {!!Form::label('type','Tipo')!!}<br><br>
                        {!!Form::select('type',[''=>'','member'=>'Miembro','admin'=>'Administrador'],null)!!}
                        
                    </div>
                    
                    {!! Form::submit('Registrar', ['class'=>'btn blue '] )!!}
                </div>
            </div>
      </div>
    {!!Form::close()!!}
    
</div>
            
@endsection