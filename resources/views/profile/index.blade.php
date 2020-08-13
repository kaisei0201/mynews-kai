@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row">
        <h2>My Profile</h2>
    </div>
    <hr color="#c0c0c0">
    <div class="row">
        <div class="posts col-md-20 mx-auto mt-10">
            @foreach($posts as $post)
            <div class="post">
                <div class="row">
                    <div class="text col-md-6">
                        <div class="date" mt-3>
                            作成日 {{ $post->updated_at->format('Y年m月d日') }}
                        </div>
                        <br><br>
                        <div class="name" mt-3>
                            【氏名】<br>{{ str_limit($post->name, 150) }}
                        </div>
                        <br><br>
                        <div class="gender mt-3">
                            【性別】<br>{{ str_limit($post->gender, 1500) }}
                        </div>
                        <br><br>
                        <div class="hobby mt-3">
                            【趣味】<br>{{ str_limit($post->hobby, 1500) }}
                        </div>
                        <br><br>
                        <div class="introduction mt-3">
                            【自己紹介】<br>{{ str_limit($post->introduction, 1500) }}
                        </div>
                    </div>
                </div>
            </div>
            <hr color="#c0c0c0">
            @endforeach
        </div>
    </div>
</div>
@endsection