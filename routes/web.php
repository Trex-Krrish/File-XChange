<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('authenticate');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/how-to-use', [HomeController::class, 'howToUse'])->name('how.to.use');
Route::get('/getting-started', [HomeController::class, 'landingPage'])->name('landing.page');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::post('/increment-download', [UserController::class, 'incrementDownload'])->name('increment.download');

    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
    Route::post('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');

    Route::group(['prefix' => 'comments'], function () {
        Route::get('/{id}', [CommentController::class, 'index'])->name('comments.index');
        Route::post('/create/{id}', [CommentController::class, 'store'])->name('comments.create');
        Route::delete('/delete', [CommentController::class, 'destroy'])->name('comments.delete');
    });

    Route::group(['prefix' => 'favorites'], function () {
        Route::get('/', [FavoriteController::class, 'index'])->name('favorite');
        Route::post('/', [FavoriteController::class, 'create'])->name('favorite.create');
        Route::delete('/', [FavoriteController::class, 'destroy'])->name('favorite.destroy');
        
    });

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [HomeController::class, 'profile'])->name('profile');
        Route::put('/update-username', [ProfileController::class, 'updateUsername'])->name('change.username');
        Route::put('/update-bio', [ProfileController::class, 'updateBio'])->name('change.bio');
        Route::put('/update-image', [ProfileController::class, 'updateImgae'])->name('change.image');
        Route::delete('/delete-image', [ProfileController::class, 'deleteImgae'])->name('delete.image');
        Route::put('/update-password', [ProfileController::class, 'updatePassword'])->name('change.password');
        
        Route::post('/get-user/detail', [ProfileController::class, 'getUserDetail'])->name('get.user.detail');
    });
});

Route::group(['middleware' => 'editor', 'prefix' => 'files'], function () {
    Route::get('/', [EditorController::class, 'index'])->name('manage.files');
    Route::post('/', [EditorController::class, 'create'])->name('files.create');
    Route::delete('/delete', [EditorController::class, 'destroy'])->name('files.delete');
    Route::get('/edit/{id}', [EditorController::class, 'editFile'])->name('edit.file.show');
    Route::put('/edit/{id}', [EditorController::class, 'update'])->name('edit.file');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminController::class, 'getLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::group(['middleware' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
        Route::get('/files', [AdminController::class, 'files'])->name('admin.files');
        Route::delete('/files-delete', [AdminController::class, 'filesDelete'])->name('admin.files.delete');
        Route::get('/comments', [AdminController::class, 'comments'])->name('admin.comments');
        Route::delete('/comments-delete', [AdminController::class, 'commentsDelete'])->name('admin.comments.delete');

        Route::post('/change-role', [AdminController::class, 'updateEditor'])->name('admin.change.role');
    });
});