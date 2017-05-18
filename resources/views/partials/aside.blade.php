<div class="collection with-header">
    <li class="collection-header"><h5 class="blue-text">Categorías</h5></li>
    @foreach ($categories as $category)
    <a href="{{url('/search/category', $category->name)}}" class="collection-item grey-text text-darken-3"><span class="badge white-text blue-grey">{{$category->articles->count()}}</span>{{$category->name}}</a>
    @endforeach
</div>

<div class="collection with-header">
    <li class="collection-header"><h5 class="blue-text">Tags</h5></li>
    <li href="#!" class="collection-item">
    @foreach ($tags as $tag)
        <div class="chip">
        <a href="{{url('search/tags', $tag->name)}}">{{$tag->name}}</a>
        </div>
    @endforeach
    </li>
</div>