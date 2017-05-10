@extends('admin.template.main')

@section('title', 'Edit category')

@section('content')
<div class="container">
    { {!!Form::open(['route'=>['categories.update',$category->id] ,'method'=> 'PUT']) !!}
         <div class="row center">
            <div class="col s12 ">
                <div class="card-panel">
                    <div class="input-field">
                        <i class="material-icons prefix">book</i>
                        {!! Form::text('name',['class'=> 'validate', 'placeholder'=>'Nombre' ]  )!!}
                        {!! Form::label('name', 'Nombre de categoria')!!}
                    </div>
                </div>
            </div>
            {!! Form::submit('Editar', ['class'=>'btn blue '] )!!}
        </div>
         
    {!!Form::close() !!}
    
</div>
@endsection