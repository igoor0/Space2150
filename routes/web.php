<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShipModulesController;
use App\Http\Controllers\ModuleCrewController;
use App\Http\Controllers\CrewSkillsController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/shipmodules/list', [ShipModulesController::class, 'index']);
Route::get('/shipmodules/add', [ShipModulesController::class, 'create']) -> middleware('auth');
Route::post('/shipmodules/save', [ShipModulesController::class, 'store']);
Route::get('/shipmodules/edit/{id}', [ShipModulesController::class, 'edit'])->middleware('auth');
Route::post('/shipmodules/update/{id}', [ShipModulesController::class, 'update']);
Route::get('/shipmodules/show/{id}', [ShipModulesController::class, 'show'])->middleware('auth');
Route::post('/shipmodules/delete/{id}', [ShipModulesController::class, 'destroy']);
Route::get('/shipmodules/crew/{id}', [ShipModulesController::class, 'showCrew']);
Route::get('/modulecrew/list', [ModuleCrewController::class, 'index']);
Route::get('/modulecrew/add', [ModuleCrewController::class, 'create'])->middleware('auth');
Route::post('/modulecrew/save', [ModuleCrewController::class, 'store']);
Route::get('/modulecrew/edit/{id}', [ModuleCrewController::class, 'edit'])->middleware('auth');
Route::post('/modulecrew/update/{id}', [ModuleCrewController::class, 'update']);
Route::get('/modulecrew/show/{id}', [ModuleCrewController::class, 'show'])->middleware('auth');
Route::post('/modulecrew/delete/{id}', [ModuleCrewController::class, 'destroy']);
Route::get('/crewskills/list', [CrewSkillsController::class, 'index']);
Route::get('/crewskills/add', [CrewSkillsController::class, 'create'])->middleware('auth');
Route::post('/crewskills/save', [CrewSkillsController::class, 'store']);
Route::get('/crewskills/edit/{id}', [CrewSkillsController::class, 'edit'])->middleware('auth');
Route::post('/crewskills/update/{id}', [CrewSkillsController::class, 'update']);
Route::get('/crewskills/show/{id}', [CrewSkillsController::class, 'show'])->middleware('auth');
Route::post('/crewskills/delete/{id}', [CrewSkillsController::class, 'destroy']);
Route::get('/login', [HomeController::class, 'changeAuthState']);
Route::get('/logout', [HomeController::class, 'changeAuthState']);
Route::get('/register', [HomeController::class, 'register']);
require __DIR__.'/auth.php';
