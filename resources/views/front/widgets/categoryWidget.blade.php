@isset($categories)
 <div class="col-md-2">
    <div class="list-group">
        @foreach($categories as $category)
        <li class="list-group-item">
            <a href="{{route('category',$category->slug)}}" >{{$category->name}} </a>
        </li>
        @endforeach
    </div>
 </div>
@endif
