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

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');


Route::post('/posts', 'PostsController@store');



// Controller
// Model
// Migration


// Requests 101:

// GET /posts (to see all posts or the @index of posts)

// GET /posts/create (Form to create new post)

// POST /posts (where the form submits to store it in db)

// GET/posts/{id}/edit (to go to the form to edit a post)

// PATCH /posts/{id} (where the edit form above would post to

// DELETE /posts{id} (fires off to delete specific resource)
