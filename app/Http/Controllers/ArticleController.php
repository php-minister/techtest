<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    // display all articles
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    // Store: Handle form submission
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
            //'image' => 'nullable|image|max:2048', // Validate the image file
        ]);
        
        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        //$path = $request->file('image') ? $request->file('image')->store('articles', 's3') : null;
        //$article->image_path = $path;
        $article->save();
        $request->session()->flash('status', 'Article has been created successfully');
        return redirect()->route('articles.index');
    }

    // Read: Show a single article
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', ['article' => $article]);
    }

    // Update: Show edit form
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', ['article' => $article]);
    }

    // Update: Handle form submission
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();

        return redirect()->route('articles.show', $id);
    }

    // Delete: Handle deletion
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index');
    }
}
