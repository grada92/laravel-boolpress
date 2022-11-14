@extends('layouts.dashboard');

@section('content')

@foreach ($posts as $post  )
{{$post['title']}}

@endforeach
@endsection
