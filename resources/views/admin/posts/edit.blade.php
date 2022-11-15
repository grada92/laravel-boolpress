@extends('layouts.dashboard')

@section('content')


<form class="d-flex flex-column" action="{{ route('admin.posts.update', $post->id) }}" method="post">
    @csrf
    @method('put')
    <label class="" for="title">Titolo:</label>
    <input class="p-2" style="width: 300px" type="text" name="title"
    value='{{ old('title', $post->title) }}' required maxlength="250" minlength='1'>

    <label class="" for="content">Content:</label>
    <textarea type="text" name="content" minlength="1" rows="30" cols="70" class="p-4">{{ old('content', $post->content) }}</textarea>

    <div class=" pt-5 d-flex justify-content-center">
        <input type="submit" class="btn btn-warning" value="Aggiorna">
    </div>

</form>
@endsection
