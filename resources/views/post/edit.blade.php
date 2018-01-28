@extends('layouts.layout')
@section('content')
@if(count($errors->all()))
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif
@if(Session::get('success'))
   {{ Session::get('success') }}
@endif
<div class="container">
    <div class="row">
        <form method="post" action="{{ Route('post.edit',['id' =>$post['id'] ]) }}">
            <label>Title:</label>
            <input type="text" name="title" value="{{$post['title']}}" />
            <label>Description:</label>
            <input type="text" name="description" value="{{$post['description']}}"/>
            {{csrf_field()}}
            <input type="submit" name="submit" />
        </form>
    </div>
</div>
@endsection
@section('script')
<script></script>
@endsection
