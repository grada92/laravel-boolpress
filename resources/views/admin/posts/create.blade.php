@extends('layouts.dashboard')

@section('content')

<form class="d-flex flex-column" action="{{route('admin.posts.store')}}" method="POST">

    @csrf

    <label class="" for="title">Titolo:</label>
    <input class="p-2"  type="text" name="title" value='{{ old('title', '') }}'
     required maxlength="250" minòength="1" />
     <label class="" for="content">Content:</label>
     <textarea type="text" name="content" minlength="1" rows="30" cols="70" class="p-4">{{ old('content', '') }}</textarea>




</form>

@endsection
