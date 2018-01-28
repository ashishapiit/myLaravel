@extends('layouts.layout')
@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <h3>{{ $post['title'] }}
            <div class="pull-right">
                <a href="{{ Route('post.update', ['id'=> $post['id']]) }}">Edit</a>
                <a href="{{ Route('post.delete', ['id'=> $post['id']]) }}">Delete</a>
            </div>
        </h3>
        <div>{{ $post['description'] }}</div>
        <div><a href="{{ Route('post.like', ['id'=> $post['id']]) }}">Like(<span>{{ count($post->likes) }}</span>)</a></div>
    </div>
    @endforeach
</div>
@endsection
@section('script')
<script></script>
@endsection
