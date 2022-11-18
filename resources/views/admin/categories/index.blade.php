@extends('layouts.dashboard');

@section('content')
<a href="{{route('admin.categories.create')}}">Create new category</a>
@foreach ($categories as $category)
                            <!--Guardare le rotte da terminale admin/categories/{category}-->
<div>{{$category->name}}</div>    <!--Prendo anche id che distingue la categoria da prendere-->
<form action="{{ route('admin.categories.destroy', $category->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Elimina">


</form>

@endforeach



@endsection
