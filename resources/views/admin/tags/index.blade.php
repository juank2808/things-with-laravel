@extends('admin.template.main')
@section('title','Tags List')
@section('content')
<div class="container">
    <a href="{{url('admin/tags/create')}}"class="right waves-effect waves-lights btn-large btn-floating blue "><i class="material-icons">add</i></a>
    <div class="row col s5">
        <ul class="collection col s5">
            <li class="collection-item">
            <!--<form>-->
            <!--    <div class="input-field">-->
            <!--      <input id="search" type="search" required>-->
            <!--      <label class="label-icon" for="search"><i class="material-icons">search</i></label>-->
            <!--      <i class="material-icons">close</i>-->
            <!--    </div>-->
            <!--</form>-->
            {!!Form::open(['route'=>'tags.index', 'method'=>'GET'])!!}
                <div class="input-field">
                    {!!Form::text('name', null,['id'=>'search', 'type'=>'search', 'placeholder'=>'Buscar', 'class'=>'autocomplete'])!!}
                    {!!Form::label('','',['class'=>'label-icon', 'for'=>'search'] )!!}
                
                    
                </div>
            {!!Form::close()!!}
            </li>
        </ul>
    </div>
    <h1>Tags</h1>
    
    <ul class="collapsible popout" data-collapsible="accordion">
        @foreach( $tags as $tag )
        <li>
            <div class="collapsible-header hoverable">
                {{$tag->name}}
                <a class="waves-effect waves-light btn-floating red right" href="{{route ('admin.tags.destroy', $tag->id)}}"><i class="small material-icons ">delete</i></a>
                <a class="waves-effect waves-red btn-floating blue right" href="{{route('admin.tags.edit', $tag->id)}}"><i class="small material-icons ">mode_edit</i></a>
            </div>
            
        </li>
        @endforeach
    </ul>
</div>
@endsection