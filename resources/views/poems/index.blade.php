@extends('app')

@section('title', 'All my poems')

@section('body')
    <ul>
        @foreach($poems as $poem)
            <li>
                <a href="{{ route('poems.show', $poem) }}">{{ $poem->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection