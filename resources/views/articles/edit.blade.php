@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Article</h1>

        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="20" rows="10" class="form-control">{{ $article->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Article</button>
        </form>
    </div>
@endsection