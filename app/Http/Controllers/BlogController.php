<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends ApiController {

    public function __construct() {}

    public function list() {
        return Blog::allForApi();
    }

    public function show(int $studentId) {
        try {
            return Blog::where("student_id", $studentId)->firstOrFail();
        } catch(\Exception $e) {
            return self::return404();
        }
    }

    public function store(Request $request) {
        $this->validate($request, [
            "student_id" => "required|integer|exists:students,id|unique:blogs,student_id",
            "title" => "required|min:1|max:80|string"
        ]);

        $blog = new Blog();
        $blog->student_id = $request->input("student_id");
        $blog->title = $request->input("title");
        $blog->save();
        return $blog;
    }

    public function delete(int $studentId) {
        Blog::where("student_id", $studentId)->firstOrFail()->delete();
        return [
            "deleted" => $studentId
        ];
    }

}
