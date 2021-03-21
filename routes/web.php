<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;

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
//Route::get('/', [UserController::class, 'index'])->middleware('auth'); // Middleware
Route::get('/', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('posts', function () {
    $posts = Post::get();

    foreach ($posts as $post) {
        echo "
        $post->id
        <strong>{$post->user->get_name}</strong>
        $post->get_title <br>";
    }
});

Route::get('userss', function () {
    $users = User::get();


   // dd($users->load('posts'));

    foreach ($users as $user) {
        echo "
        $user->id
        <strong>{$user->get_name}</strong>
        {$user->posts->count()} <br>";
    }
});
