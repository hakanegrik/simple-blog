
@extends('front.layouts.master')
@section('title','İletisim')
@section('content')

        <div class="col-lg-8 col-md-10 mx-auto">
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            <p>İletişime Geçebilirsiniz</p>
            <form method="post" action="{{route('contactPost')}}">
                @csrf
                <div class="control-group">
                    <div class="form-group  controls">
                        <label>Ad Soyad</label>
                        <input type="text" class="form-control" placeholder="Ad Soyad" name="name" required >
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group controls">
                        <label>Email Adresi</label>
                        <input type="email" class="form-control" placeholder="Email Adres" name="email" required >
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 controls">
                        <label>Konu </label>
                        <select class="form-control" name="topic">
                        <option>Bilgi</option>
                        <option>Destek</option>
                        <option>Genel</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group controls">
                        <label>Mesaj</label>
                        <textarea rows="5" class="form-control" placeholder="Mesaj" name="message"  ></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
            </form>
        </div>
    </div>
@endsection









