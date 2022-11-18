@extends('layouts.dashboard');

@section('content')

<form action="{{route('admin.categories.store')}}" method="POST">
    @csrf

    <input name="name" type="text" placeholder="nuova categoria">
    <input type="submit" value="invia">

</form>


@endsection
