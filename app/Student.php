<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    
    protected $table = 'students';

    protected $casts = [
        'major' => 'array',
        'marks' => 'array'
    ];

    public function getForApi() {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "firstname" => $this->firstname,
            "birthdate" => $this->birthdate,
            "major" => $this->major,
            "marks" => $this->marks
        ];
    }

    public function getWithoutDetails() {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "firstname" => $this->firstname
        ];
    }

    /**
     * @return Student[]
     */
    public static function allForApi(): array {
        $data = [];
        foreach(self::all() as $student) {
            $data[] = $student->getForApi();
        }
        return $data;
    }
}