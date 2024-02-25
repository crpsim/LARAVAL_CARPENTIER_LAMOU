<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\CommentResource;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return ArticleResource::collection($articles);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article = Article::create($validatedData);
        return new ArticleResource($article);
    }

    public function show(Article $article)
    {
        return new ArticleResource($article);
    }

    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article->update($validatedData);
        return new ArticleResource($article);
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return response()->json(['message' => 'Article supprimé.']);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $articles = Article::where('title', 'like', '%' . $searchTerm . '%')->get();
        return ArticleResource::collection($articles);
    }

    public function comments(string $id)
    {
        $article = Article::findOrFail($id);
        $comments = $article->comments;
        return CommentResource::collection($comments);
    }
    
}
