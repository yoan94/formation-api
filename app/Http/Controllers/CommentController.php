<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends ApiController {
    public function __construct() {}

    public function last() {
        return Comment::getLast();
    }

    public function show(int $commentId) {
        return Comment::findOrFail($commentId)->getWithDetails();
    }

    public function showArticle(int $articleId) {
        return Comment::where("article_id", $articleId);
    }

    public function store(Request $request) {
        $this->validate($request, [
            "article_id" => "required|integer|exists:articles,id",
            "text" => "required|string|min:2|max:50000"
        ]);
        $comment = new Comment();
        $comment->article_id = $request->input("article_id");
        $comment->text = $request->input("text");
        $comment->likes = 0;
        $comment->save();
        return $comment->getWithDetails();
    }

    public function delete(int $commentId) {
        Comment::findOrFail($commentId)->delete();
        return [
            "deleted" => $commentId
        ];
    }
}