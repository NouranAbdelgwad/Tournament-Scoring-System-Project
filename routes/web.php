<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

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


Route::get('/signup', function () {
    return view('signup');
});
Route::get('/layout', function () {
    return view('Layout.layout');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/sporting', function () {
    return view('sporting_events');
});
Route::get('/academic', function () {
    return view('academic_events');
});
Route::get('/events', function () {
    return view('sporting_events');
});
Route::get('/login', function () {
    return view('login');
});
Route::get("/team_individual", [RoleController::class, "role"]);

Route::get("/individual", function(){
    return view("individual_sign_up");
});

Route::get("/team", function(){
    return view("team_sign_up");
});

Route::get("/VersaQuest", function(){
    return view("VersaQuest");
});
Route::get("/teams_rank", function(){
    return view("teams_rank");
});
Route::get("/individuals_rank", function(){
    return view("individuals_rank");
});
Route::get("/invalid", function(){
    return view("invalid");
});
