
@extends('front.layouts.master')
@section('title',$articles->title)
@section('content')
    @include('front.widgets.categoryWidget')
    <div class="col-md-7 mx-auto">
        <img src="{{$articles->image}}">
        {{$articles->content}}
    </div>
@endsection

