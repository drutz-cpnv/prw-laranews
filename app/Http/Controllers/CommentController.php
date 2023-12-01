<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Article $article, Request $request)
    {
        if ($article->archived_at)
            abort(403);

        $article->comments()->create($request->all());
        return redirect()->route('articles.show', $article);
    }
}
