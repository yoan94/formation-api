<?php

namespace App\Http\Controllers;

class StudentController extends Controller {

    public function __construct() {
        //
    }

    public function list() {
        return [
            "students" => [
                [
                    "id" => 1,
                    "firstname" => "Prénom ici",
                    "lastname" => "Nom de famille ici",
                    "age" => 19,
                    "level" => [
                        "HTML" => 5,
                        "CSS" => 5,
                        "Javascript" => 5
                    ]
                ]
            ]
        ];
    }

}
