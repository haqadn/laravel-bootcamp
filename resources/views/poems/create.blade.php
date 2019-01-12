@extends('app')

@section('title', 'Create Poem')

@section('body')
    <form action="{{ route('poems.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="title">Body</label>
            <textarea class="form-control" name="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection