<?php
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SportingController;
use App\Http\Controllers\TournamentsController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\TextUI\Configuration\GroupCollection;

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/layout', function () {
    return view('Layout.layout');
});


Route::get("/", [TournamentsController::class, "show_tournaments"]);
Route::get("/tournament/{Tournament_ID}", [TournamentsController::class, "show_tournament_datails"]);

Route::get('/sporting', [EventController::class, "show_sporting"]);
Route::get("/academic", [EventController::class, "show_academic"]);
Route::get('/events', [EventController::class, "show_sporting"]);
Route::get("/event/{Event_ID}", [EventController::class, "show_details"]);

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
