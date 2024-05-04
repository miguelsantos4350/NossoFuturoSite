<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('distribution.index');
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//artigos
Route::resource('articles', 'ArticleController');

Route::get('/articles', function () {
    return view('articles.index');
});

Route::get('/carticles', function () {
    return view('articles.create');
});


//imagens
Route::resource('images', 'ImageController');
Route::get('/images', 'UploadController@getUploadForm');
Route::post('/images', 'UploadController@postUploadForm');


//comentarios
Route::resource('comments', 'CommentController');

//gostos
Route::resource('likes', 'LikeController');

//contactos
Route::get('/contacts', function () {
    return view('contacts.index');
});

Route::resource('contacts', 'ContactController');

//quiz (quizz)
Route::resource('{quizz_id}/questions','QuestionController');
Route::resource('quizzs', 'QuizzController');
Route::get('/teste', 'QuizController@teste')->name('teste');

Route::get('/quizzs', function () {
    return view('quizzs.index');
});

//users
