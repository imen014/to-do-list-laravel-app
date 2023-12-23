<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskList;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/tasks', function () {
   return view('index');
}
*/
Route::get('/tasks', [TaskList::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskList::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskList::class, 'store'])->name('tasks.store');



