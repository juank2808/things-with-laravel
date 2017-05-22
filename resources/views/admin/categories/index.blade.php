@extends('admin.template.main')

@section('title', 'Categories List')
@include('admin.template.partials.nav')
@section('content')
<div class="container">
    <a href="{{url('admin/categories/create')}}"class="right waves-effect waves-red btn blue">Crear</a>
    <h1>Categorías</h1>
    
    <ul class="collapsible popout" data-collapsible="accordion">
        @foreach( $categories as $category )
        <li>
            <div class="collapsible-header">
                {{$category->name}}
                <a class="waves-effect waves-light btn red right" href="{{route ('admin.categories.destroy', $category->id )}}"><i class="material-icons">delete</i></a>
                <a class="waves-effect waves-light btn yellow right" href="{{route ('admin.categories.edit', $category->id)}}"><i class="material-icons">mode_edit</i></a>
            </div>
            
        </li>
        @endforeach
    </ul>
</div>
@endsection