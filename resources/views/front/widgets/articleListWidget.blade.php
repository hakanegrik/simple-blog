@foreach($articles as $article)
    <div class="post-preview">
        <img src="{{$article->image}}">
        <a href="{{route('single',$article->title)}}">
            <h2 class="post-title">
                {{$article->title}}
            </h2>
            <h3 class="post-subtitle">
                {{$article->content}}
            </h3>
        </a>
        <p class="post-meta"> Kategori:
            <a href="#">{{$article->category_id}}</a>
            {{$article->created_at}}
        </p>
    </div>
    @if(!$loop->last)
        <hr>
    @endif
@endforeach
{{$articles->links("pagination::bootstrap-4")}}
