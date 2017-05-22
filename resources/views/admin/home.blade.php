@extends('admin.template.main')

@section('title')
Home-{{Auth::user()->name}}
@endsection
@include('admin.template.partials.nav')
@section('content')
<div class="container">
    <div class="title m-b-md">
        <h1>Bienvenido! {{Auth::user()->name}}</h1>
    </div>
<a href="" class="btn "> Botonazo</a>
</div>
@endsection
