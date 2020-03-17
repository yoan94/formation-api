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

// COMMENTAIRE

$router->get("/comments/last", "CommentController@last");

$router->get("/comments/{commentId:[0-9]+}", "CommentController@show");

$router->get("/articles/{articleId:[0-9]+}/comments", "CommentController@showArticle");

$router->post("/comments", [
    "middleware" => "authorization",
    "uses" => "CommentController@store"
]);

$router->delete("/comments/{commentId:[0-9]+}", [
    "middleware" => "authorization",
    "uses" => "CommentController@delete"
]);

// ---------------