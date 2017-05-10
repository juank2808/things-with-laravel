@extends('admin.template.main')

@section('title', 'Editar Usuario')

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
    {!!Form::open(['route' => ['users.update',$user], 'method' => 'PUT' ]) !!}
        
        <div class="row center">
            <div class="col s12 ">
                <div class="card-panel">
                    <span class="card-title"><h3>Editar a {{$user->name}}</h3></span>
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        {!! Form::text('name', $user->name, ['class'=> 'validate', 'placeholder'=>'Nombre' ]  )!!}
                        {!! Form::label('name', 'Nombre')!!}
                    </div>
              
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        {!! Form::email('email', $user->email, ['class'=> 'validate', 'placeholder'=>'example@example.com' ]  )!!}
                        {!! Form::label('E-mail', 'E-mail')!!}
                    </div>
         
             
                    <div class="input-field">
                        {!!Form::label('type','Tipo')!!}<br><br>
                        {!!Form::select('type',[''=>'','member'=>'Miembro','admin'=>'Administrador'],$user->type)!!}
                        
                    </div>
                    
                    {!! Form::submit('Editar', ['class'=>'btn blue '] )!!}
                </div>
            </div>
      </div>
    {!!Form::close()!!}
    
    
            
@endsection