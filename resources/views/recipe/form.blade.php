<?php $update = isset($recipe);
?>
@extends('layouts.app')

@section('content')
    <form class="my-3" action="{{$update ? route('recipe.update', $recipe) : route('recipe.store')}}" method="post">
        @if($update)
            @method('PUT')
        @endif
        @csrf
        <div class="form-group">
            <input id="title" name="title" class="form-control" placeholder="Title" autocomplete="off" value="{{$recipe->title ?? ( old('title') ?? '')}}">
        </div>
        <div class="form-group">
            <input id="text" name="text" class="form-control" placeholder="Recipe" autocomplete="off" value="{{$recipe->text ?? ( old('text') ?? '')}}">
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger d-flex">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button class="btn btn-success">{{$update ? 'Update' : 'Create'}}</button>
        <a href="{{ URL::previous() }}">
            <button class="btn btn-danger">Back</button>
        </a>

    </form>

@endsection
