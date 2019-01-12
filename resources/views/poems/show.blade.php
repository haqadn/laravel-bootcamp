@extends('app')

@section('title', $poem->name)

@section('body')
    {{ $poem->body }}

    <div class="row">
        <a href="{{ route('poems.edit', $poem) }}"
           class="btn btn-info">
            Edit
        </a>
        <form method="post" action="{{ route('poems.destroy', $poem) }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection