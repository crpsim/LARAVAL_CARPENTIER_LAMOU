<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Http\Resources\CommentResource;
use App\Models\Comment;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
        

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return new ArticleResource($article);
    }


    public function index()
    {
        return ArticleResource::collection(Article::all());
    }

    public function show_comment($id)
    {
        $comment = Comment::findOrFail($id);
        return new CommentResource($comment);
    }
}


