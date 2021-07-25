@extends('back.layouts.master')
@section('title','Makale Oluştur')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('admin.makaleler.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Makale Başlığı</label>
                    <input type="text" name="title" class="form-control" required> </input>
                </div>

                <div class="form-group">
                    <label>Makale İçerik</label>
                    <textarea class="form-control" name="content1" rows="4"> </textarea>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-success"> Oluştur </button>

                </div>


            </form>

            </div>
        </div>
    </div>
@endsection
