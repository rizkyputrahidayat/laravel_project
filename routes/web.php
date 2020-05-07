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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');
// Route kedalam index
Route::get('/students', 'StudentsController@index');
// membuat tambah data
Route::get('/students/create', 'StudentsController@create');
// Route kedalam show dengan data student
// Jika klik students maka akan kedalam student yang dimana akan memanggil show
Route::get('/students/{student}', 'StudentsController@show');
// Jika ada didalam student maka arahkan kedalam store, dengan method post pada form create
Route::post('/students', 'StudentsController@store');
// dari create blade php menggunakan action /student, akan diarahkan ke route ini,
// dan akan dilanjutkan ke StudentsControlelr didalam model store

// Route untuk mengarahkan ke destroy, (delete)
Route::delete('/students/{student}', 'StudentsController@destroy');
// Route dengan method delete, yang diarahkan kestudent dengan id student, 
// akan diarahkan kedalam method destoy didalam controller

// Membuat untuk form edit
Route::get('/students/{student}/edit', 'StudentsController@edit');

// Membuat route untuk menangkap dari file edit dan akan dialihkan kedalam update pada studentscontroller
Route::patch('/students/{student}', 'StudentsController@update');
