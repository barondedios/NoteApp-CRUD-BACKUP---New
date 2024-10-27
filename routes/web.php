<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


Route::get('/', function() {
    return view('welcome');
});

Route::get('/my-notes', function() {
    return view('my-notes');
});

Route::get('/add-notes', function() {
    return view('add-notes');
});


Route::get('/my-profile', function() {
    return view('my-profile');
});

Route::get('/reminder', function() {
    return view('reminder');
});

Route::get('/task-tracker', function() {
    return view('task-tracker');
});

Route::get('/notes', [NoteController::class, 'showAllNotes'])->name('showAllNotes');
//CREATE
Route::get('/notes/create', [NoteController::class, 'createNote'])->name('createNote');
Route::post('/notes/store', [NoteController::class, 'storeNote'])->name('storeNote');
//READ
Route::get('/notes/{id}', [NoteController::class, 'viewNote'])->name('viewNote');
//UPDATE
Route::get('/notes/{id}/edit', [NoteController::class, 'editNote'])->name('editNote');
Route::put('/notes/{id}/update', [NoteController::class, 'updateNote'])->name('updateNote');

//DELETE
Route::delete('/notes/{id}/delete', [NoteController::class, 'deleteNote'])->name('deleteNote');