<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;

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

    $tasks = array(
        array(
            'id' => 1,
            'name' => 'Sleep at 10.00pm',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            'order' => 1,
            'end_time' => '1 Dec 20200',
        ),
        array(
            'id' => 2,
            'name' => 'lunch at 02.00pm',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            'order' => 2,
            'end_time' => '16 Dec 20200',
        ),
        array(
            'id' => 1,
            'name' => 'Breakfast at 8.00am',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            'order' => 3,
            'end_time' => '20 Dec 20200',
        ),

    );

    return view('welcome', ["tasks"=> $tasks]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
