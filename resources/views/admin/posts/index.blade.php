@extends('layouts.dashboard');

@section('content')
<a href="{{route('admin.posts.create')}}">Create new article</a>
@foreach ($posts as $post  )
{{$post['title']}}

@endforeach
@endsection
