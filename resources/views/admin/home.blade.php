@extends('admin.template.main')

@section('title')
Bienvenido
@endsection

@section('content')
<div class="container">
    <div class="title m-b-md">
        <h1>Bienvenido! {{Auth::user()->name}}</h1>
    </div>
<a href="" class="btn "> Botonazo</a>
</div>
@endsection
