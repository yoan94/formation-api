<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class BlogTest extends TestCase
{
    public function testStore() {
        $this->post("/blogs", [
            "student_id" => 3,
            "title" => "Blog de ouf"
        ], [
            "Authorization" => "pEpYp1NQGIN62dN1t0ALotrG21WXPoZB"
        ])->seeJson([
            "title" => "Blog de ouf"
        ]);
    }

    public function testDelete() {
        $studentId = 3;
        $this->delete("/blogs/$studentId", [], [
            "Authorization" => "pEpYp1NQGIN62dN1t0ALotrG21WXPoZB"
        ])->seeJson([
            "deleted" => $studentId
        ]);
    }
}
