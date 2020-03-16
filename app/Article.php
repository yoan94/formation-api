<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $table = "articles";

    public function getWithoutDetails() {
        $blog = Blog::findOrFail($this->blog_id);
        return [
            "id" => $this->id,
            "blog_id" => $blog->id,
            "student_id" => $blog->student_id,
            "title" => $this->title,
            "created_at" => $this->created_at
        ];
    }

    public function getwithDetails() {
        $blog = Blog::findOrFail($this->blog_id);
        $student = Student::findOrFail($blog->student_id);
        return [
            "id" => $this->id,
            "blog" => [
                "id" => $blog->id,
                "title" => $blog->title
            ],
            "student" => $student->getWithoutDetails(),
            "title" => $this->title,
            "text" => $this->text,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }

    public static function allWithoutDetails() {
        $data = [];
        foreach(self::all() as $article) {
            $data[] = $article->getWithoutDetails();
        }
        return $data;
    }

    public static function allOfBlogWithoutDetails(int $blogId) {
        $data = [];
        foreach(self::where("blog_id", $blogId) as $article) {
            $data[] = $article->getWithoutDetails();
        }
        return $data;
    }
}