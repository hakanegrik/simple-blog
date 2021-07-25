@extends('back.layouts.master')
@section('title','Gelen Mesaj')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Gelen Mesaj</h6>
        </div>
        <div class="card-body">

                <div class="form-group">
                    <label>Gönderen</label>
                    <input type="text" name="title" class="form-control" value="{{$messages->name}}" required> </input>
                </div>
                <div class="form-group">
                    <label>Mail Adresi</label>
                    <input type="text" name="title" class="form-control" value="{{$messages->email}}" required> </input>
                </div>
                <div class="form-group">
                    <label>Konu</label>
                    <input type="text" name="title" class="form-control" value="{{$messages->topic}}" required> </input>
                </div>

                <div class="form-group">
                    <label>Mesaj</label>
                    <textarea class="form-control" name="content1" rows="4">{!! $messages->message !!} </textarea>

                </div>

                <div class="form-group">
                    <a href="{{route('admin.messages')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Geri Dön </a>

                </div>
        </div>
    </div>

@endsection
