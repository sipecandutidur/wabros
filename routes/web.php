<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenerateToken;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Contact;
use App\Models\Dashboard;
use App\Models\ProductPackages;
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

Route::get('/', function(){
    return view('productlist', [
        'title' => 'Whatsapp Bross',
        'products' => ProductPackages::all(),
    ]);
});

Route::get('/api', [GenerateToken::class, 'index']);

Route::get('/api/contact', [GenerateToken::class, 'contact']);

Route::get('/api/start-session', [GenerateToken::class, 'startsession']);

Route::get('/api/status', [GenerateToken::class, 'statussession']);

Route::get('/dashboard', function(){
    return view('dashboard.dashboardpanel', [
        'title' => 'Dashboard | Whatsapp Bross',
        'chat' => Dashboard::all(),
    ]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentiate']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/dashboard/messages', MessageController::class)->middleware('auth');

Route::get('/dasboard/contact/checkSlug', [ContactController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/contact', ContactController::class)->middleware('auth');

Route::get('/dashboard/profile', [UserController::class, 'index'])->middleware('auth');


Route::get('/test', function(){
    return view('test', [

    ]);
});
