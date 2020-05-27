@extends('layouts.app')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
@section('content')
    <div class="d-flex">
        <h1>{{Auth::user()->name}}</h1>
        <a class="ml-auto" href="{{route('recipe.create')}}">
            <button class="btn btn-success">Create Recipe</button>
        </a>
    </div>


    <div class="row">
    @forelse($recipes as $recipe)
        <div class="col-md-4 ">
            <a href="{{route('recipe.show', $recipe)}}">
                <div class="card mb-4 shadow-sm">
                    <div class="card-title alert-secondary text-center px-2">
                        <h4 class="mt-2">{{$recipe->title}}</h4>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-secondary" value="{{$recipe->id}}">Like {{$recipe->likes}}</button>
                            </div>
                            <small class="text-muted">{{$recipe->user->name}}</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @empty
        <div>
            <h1>Haven`t recipes</h1>
        </div>
    @endforelse
    </div>
    <div class="d-flex justify-content-center">
        {{ $recipes->links() }}
    </div>

@endsection
