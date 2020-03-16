<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Blog;

class ArticleController extends ApiController {
    public function __construct() {}

    public function list() {
        return Article::allWithoutDetails();
    }

    public function show(int $articleId) {
        return Article::findOrFail($articleId)->getwithDetails();
    }

    public function showBlog(int $blogId) {
        return Article::allOfBlogWithoutDetails($blogId);
    }

    public function store(Request $request) {
        $this->validate($request, [
            "blog_id" => "required|integer|exists:blogs,id",
            "title" => "required|string|min:3|max:200",
            "text" => "required|string|min:2|max:50000"
        ]);

        $article = new Article();
        $article->blog_id = $request->input("blog_id");
        $article->title = $request->input("title");
        $article->text = $request->input("text");
        $article->save();

        return $article;
    }

    public function delete(int $articleId) {
        Article::findOrFail($articleId)->delete();
        return [
            "deleted" => $articleId
        ];
    }
}