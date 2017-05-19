  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header blue-grey darken-2 blue-grey-text text-lighten-3">Categorías</div>
      <div class="collapsible-body blue-grey darken-2">
          
            @foreach ($categories as $category)
            <p ><a href="{{url('/search/category', $category->name)}}" class="collection-item  white-text">
            {{$category->name}}</a><span class="badge white-text deep-orange accent-3">{{$category->articles->count()}}</span></p>
            @endforeach
      </div>
    </li>
    <li>
        <div class="collapsible-header blue-grey darken-2 blue-grey-text text-lighten-3">Tags</div>
        <div class="collapsible-body blue-grey darken-2">
        @foreach ($tags as $tag)
            <div class="chip">
            <a href="{{url('search/tags', $tag->name)}}">{{$tag->name}}</a>
            </div>
        @endforeach
        </div>
    </li>
  </ul>
        