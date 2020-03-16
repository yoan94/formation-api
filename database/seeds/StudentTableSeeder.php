<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Student;
use Illuminate\Support\Facades\Date;

class StudentTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            "name" => "Haroon",
            "firstname" => "Connor",
            "birthdate" => Date::create(2000, 01, 01),
            "major" => ['HTML', 'CSS', 'Javascript'],
            "marks" => [20, 20, 10]
        ]);
        Student::create([
            "name" => "Frazer",
            "firstname" => "Stephen",
            "birthdate" => Date::create(2000, 01, 01),
            "major" => ['HTML', 'CSS', 'Javascript'],
            "marks" => [20, 20, 10]
        ]);
        Student::create([
            "name" => "Farhan",
            "firstname" => "Lee",
            "birthdate" => Date::create(2000, 01, 01),
            "major" => ['HTML', 'CSS', 'Javascript'],
            "marks" => [20, 20, 10]
        ]);
    }
}