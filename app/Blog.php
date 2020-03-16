<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
    
    protected $table = 'blogs';

    public $timestamps = false;

    public function getForApi(): array {
        return [
            "title" => $this->title,
            "student" => Student::findOrFail($this->student_id)->getWithoutDetails()
        ];
    }

    public static function allForApi(): array {
        $data = [];
        foreach(self::all() as $blog) {
            $data[] = $blog->getForApi();
        }
        return $data;
    }
}