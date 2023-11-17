<?php


use App\Http\Controllers\TaskController; // Ditambahkan

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('home');

})->name('home'); 




Route::get('/tasks/', [TaskController::class, 'index'])->name('tasks.index'); // name ditambahkan
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::prefix('tasks')

    ->name('tasks.')

    ->controller(TaskController::class)

    ->group(function () {

        Route::get('/', 'index')->name('index');

        Route::get('{id}/edit', 'edit')->name('edit');

    });


(object) [

    'id' => 1, // Id ini digunakan pada path untuk menspesifikasi task mana yang diubah

    'name' => 'Develop Final Project',

    'detail' => 'Kanban project using PHP and Laravel',

    'due_date' => '2023-04-30',

    'status' => 'not_started',

];