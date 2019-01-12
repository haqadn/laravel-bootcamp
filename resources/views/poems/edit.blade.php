@extends('app')

@section('title', 'Edit Poem')

@section('body')
    <form action="{{ route('poems.update', $poem) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="name" value="{{$poem->name}}">
        </div>
        <div class="form-group">
            <label for="title">Body</label>
            <textarea class="form-control" name="body">{{$poem->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection