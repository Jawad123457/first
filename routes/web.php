<?php

use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\BlogDetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\NftDetailsComponent;
use App\Http\Livewire\SubmitNftComponent;
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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', HomeComponent::class)->name('home');
Route::get('/blog', BlogComponent::class)->name('blog');
Route::get('/blog/{slug}', BlogDetailsComponent::class)->name('blogDetails');
Route::get('/nft/{slug}', NftDetailsComponent::class)->name('nftDetails');
Route::get('/submit', SubmitNftComponent::class)->name('submit');
