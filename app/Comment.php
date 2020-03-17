<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    protected $table = "comments";

    public function getWithDetails() {
        $article = Article::findOrFail($this->article_id);
        $blog = Blog::findOrFail($article->blog_id);
        return [
            "id" => $this->id,
            "article" => [
                "id" => $article->id,
                "title" => $article->title
            ],
            "blog" => [
                "id" => $blog->id,
                "title" => $blog->title,
                "student_id" => $blog->student_id
            ],
            "text" => $this->text,
            "likes" => $this->likes,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }

    public static function getLast() {
        return Comment::orderBy("id", "desc")->take(10)->get();
    }
}