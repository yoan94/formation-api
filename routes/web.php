<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get("/", function () use ($router) {
    return [
        "app" => [
            "name" => "Formation test API",
            "description" => "Une API de test pour la formation."
        ]
    ];
});

// STUDENT

$router->get("/students", "StudentController@list");

$router->get("/students/{id:[0-9]+}", "StudentController@show");

$router->post("/students", [
    "middleware" => "authorization",
    "uses" => "StudentController@store"
]);

$router->delete("/students/{id:[0-9]+}", [
    "middleware" => "authorization",
    "uses" => "StudentController@delete"
]);

// BLOG

$router->get("/blogs", "BlogController@list");

$router->get("/blogs/{studentId:[0-9]+}", "BlogController@show");

$router->post("/blogs", [
    "middleware" => "authorization",
    "uses" => "BlogController@store"
]);

$router->delete("/blogs/{studentId:[0-9]+}", [
    "middleware" => "authorization",
    "uses" => "BlogController@delete"
]);

// ARTICLES

$router->get("/articles", "ArticleController@list");

$router->get("/articles/{articleId:[0-9]+}", "ArticleController@show");

$router->get("/blogs/{blogId:[0-9]+}/articles", "ArticleController@showBlog");

$router->post("/articles", [
    "middleware" => "authorization",
    "uses" => "ArticleController@store"
]);

$router->delete("/articles/{articleId:[0-9]+}", [
    "middleware" => "authorization",
    "uses" => "ArticleController@delete"
]);

// ---------------

$router->get("/test", function () {
    return '
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>

    /*
    $.ajax({
        url : "/students", // La ressource ciblée
        type : "POST", // Le type de la requête HTTP.
        data : {
            name: "Lol",
            firstname: "Test",
            birthdate: "2005-05-20",
            major: ["HTML", "CSS", "JS"],
            marks: [30, 10, 20, 40, 60]
        },
        headers : {
            Authorization: "pEpYp1NQGIN62dN1t0ALotrG21WXPoZB"
        },
        success: function (b) {
            console.log(b)
        }
    });
    */

    


    </script>';
});