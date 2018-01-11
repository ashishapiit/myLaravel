@extends('layouts.layout')
@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <h3>{{ $post['title'] }}</h3>
        <div>{{ $post['description'] }}</div>
    </div>
    @endforeach
</div>
@endsection
@section('script')
<script></script>
@endsection
