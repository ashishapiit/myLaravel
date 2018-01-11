@extends('layouts.layout')
@section('header')

@if(count($errors->all()))
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif



{{ $name }}

<form method="post" action="admin/create">
    <input type="text" name="name"/>
     <input type="text" name="email"/>
      <input type="text" name="phone"/>
    {{csrf_field()}}
    <input type="submit" name="submit" />
</form>
<a href="{{URL::to('admin/create')}}">admin create</a>
<a href="{{ Route("admin.create") }}">admin create</a>
<a href="{{ Route("admin.update", ['id'=> "Ashish"]) }}">admin update</a>
	{{config('app.url')}}
<div>My Name is {{ $abc = 5 }} </div>
@for($i = 0; $i< 10; $i++)
<div>This is {{ $i }}</div>
@endfor

@endsection
@section('script')
<script></script>
@endsection
