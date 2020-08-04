{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')にProfileの編集'を埋め込む --}}
@section('title', 'Profileの編集')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>MyProfile編集画面</h2>
            <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                <!-- errors内に個数があるならば配列中の個数を返す -->
                <ul>
                    @foreach($errors->all() as $e)
                    <!-- $errors内をループし、その中身を$eで表示する -->
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2">氏名</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="name" rows="1">{{ old('body') }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">性別</label>
                    <div class="col-md-10">
                        <input type="radio" name="gender" value="male">男性
                        <input type="radio" name="gender" value="male">女性
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">趣味</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="hobby" rows="10">{{ old('body') }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">自己紹介欄</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="introduction" rows="12">{{ old('body') }}</textarea>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $profile_form->id }}">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
            </form>
        </div>
    </div>
</div>
@endsection