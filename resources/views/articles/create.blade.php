@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Article</h1>

        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Article</button>
        </form>
    </div>
@endsection