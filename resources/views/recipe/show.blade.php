@extends('layouts.app')

@section('content')
    <div class="form-group">

        <h1>{{$recipe->title}}</h1>
        @if(auth()->user()->id == $recipe->user_id)
            <div class="d-flex flex-row ">
                <a href="{{route('recipe.edit', $recipe)}}">
                    <button class="ml-auto btn btn-success mr-1">Update</button>
                </a>
                <form action="{{route('recipe.show', $recipe)}}" method="post">
                    @csrf
                    @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        @endif
    </div>
@endsection
