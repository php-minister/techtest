@extends('layouts.app')

@section('content')
    <div class="container">
    @if (session('status'))
        <div id="success_msg" style="color:green">
        <p>{{ session('status') }}</p>
        </div>
    @endif
        <h1>Articles</h1>
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Create New Article</a>
        <table id="articles" class="display">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>
                    <td><img src="{{ $article->image }}" /></td>
                    <td>
                        <a href="{{ route('articles.show', $article->id) }}">Show</a> |
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="float-right">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>       
                    </td>        
                </tr>
                @endforeach
            </tbody>    
        </table>
    </div>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
<script>
let table = new DataTable('#articles', {
    "paging": true,
	 "lengthChange": true,
	 "searching": true,
	 "ordering": true,
	 "info": true,
	 "autoWidth": true,
	 "reset":true
});
</script>

@endsection