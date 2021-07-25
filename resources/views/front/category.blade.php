@extends('front.layouts.master')
@section('title',$category->name)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">
                @foreach($articles as $article)
                    <div class="post-preview">
                        <a href="{{route('single',$article->title)}}">
                            <h2 class="post-title">
                                {{$article->title}}
                                Man must explore, and this is exploration at its greatest
                            </h2>

                            <h3 class="post-subtitle">
                                {{$article->content}}
                                Problems look mighty small from 150 miles up
                            </h3>
                        </a>

                        <p class="post-meta">
                            <a href="#">{{$article->category_id}}</a>
                            {{$article->created_at}}</p>
                        @endforeach
                    </div>
                    <hr>
                    <hr>
                    <!-- Pager -->
                    <div class="clearfix">
                        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                    </div>
            </div>
        </div>
    </div>
    @include('front.widgets.categoryWidget')
@endsection

