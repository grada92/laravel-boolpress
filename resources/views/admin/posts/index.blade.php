@extends('layouts.dashboard');

@section('content')
<a href="{{route('admin.posts.create')}}">Create new article</a>
@foreach ($posts as $post  )
<div>
    {{$post['title']}}
    <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">

    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">

    </form>
</div>

@endforeach
@endsection
