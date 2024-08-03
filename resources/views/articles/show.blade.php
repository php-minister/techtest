@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->content }}</p>
        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit</a>

        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection