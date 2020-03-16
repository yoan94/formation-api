<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends ApiController {

    public function __construct() {
        //
    }

    public function list() {
        return Student::allForApi();
    }

    public function show(int $id) {
        try {
            return Student::findOrFail($id)->getForApi();
        } catch(\Exception $e) {
            return self::return404();
        }
    }

    public function store(Request $request) {
        $this->validate($request, [
            "name"      => "required|min:1|max:60",
            "firstname" => "required|min:1|max:60",
            "birthdate" => "required|size:10|date",
            "major"     => "array",
            "major.*"   => "min:1|max:30",
            "marks"     => "array",
            "marks.*"   => "integer"
        ]);

        $student = new Student();

        $student->name = $request->input("name");
        $student->firstname = $request->input("firstname");
        $student->birthdate = $request->input("birthdate");
        $student->major = $request->input("major", []);
        $student->marks = $request->input("marks", []);

        $student->save();

        return $student->getForApi();
    }

    public function delete(Request $request, int $id) {
        Student::destroy($id);
        return [
            "deleted" => $id
        ];
    }

}
