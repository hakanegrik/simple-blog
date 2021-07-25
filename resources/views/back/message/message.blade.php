@extends('back.layouts.master')
@section('title','Mesajlar')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Mesaj Sayısı: {{$messages->count()}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Ad Soyad</th>
                        <th>Email Adresi</th>
                        <th>Konu</th>
                        <th>Mesaj</th>
                        <th>İşlemler</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->topic}}</td>
                            <td>{{$message->message}}</td>
                            <td>
                                <a href="{{route('admin.show.message',$message->id)}}" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i>  </a>
                                <a href="{{route('admin.delete.message',$message->id)}}" title="Sil" class="btn btn-sm btn-primary"><i class="fa fa-times"></i>  </a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
