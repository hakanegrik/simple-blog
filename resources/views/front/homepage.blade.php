@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')
    @include('front.widgets.categorywidget')
        <div class="col-md-7 mx-auto">
@include('front.widgets.articleListWidget')
        </div>
@endsection

