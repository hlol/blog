<?php

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
    return view('welcome');
});
/***************  with *************
Route::get('/about', function () {
    $first_name = 'hela';
    $last_name ='nmr';
    return view('pages/about')->with('firstName',$first_name)->with('lastName',$last_name);
});
*/

/************* table of data *************
Route::get('/about', function () {
    $data=[
        'first_name' => 'hela',
        'last_name' => 'nmr'
    ];
   
    return view('pages/about',$data);
});*/
/************* variable  ************
Route::get('/about', function () {
    $view = view('pages/about');
    $view->first_name = 'Hela';
    $view->last_name = 'Nmr';
    return $view;

});
*/

/************ with CamelCase ********
Route::get('/about',function(){
return view('pages/about')->withFirstName('heila')->withLastName('nmr');

});*/

/*********** compact()********** */
Route::get('/about',function(){
$first_name ='<h1>helaa</h1>';
$last_name = 'nemri';

return view('pages/about',compact('last_name','first_name'));
});

Route::get('/events',function(){

$events =[
'premier event',
'conférence PHP',
'conférence JEE',
'conférence Symfony','premier event',
'conférence PHP',
'conférence JEE',
'conférence Symfony',
];
return view('events/index',compact('events'));
});


Route::get('/article/{n}','ArticleController@show')->where('n', '[0-9]+')->name('article');//nommer une route

Route::get('/hello','WelcomeController@index')->name('hello');

Route::get('users','UsersController@create');
Route::post('users','UsersController@store');
Route::get('contact','ContactController@create');
Route::post('contact','ContactController@store');