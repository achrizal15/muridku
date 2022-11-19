<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiswaController;
use  App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Dashboard');
    })->name("dashboard");
    Route::group(["prefix" => "master", "as" => "master."], function () {
        Route::get("/role", [RoleController::class, "index"])->name("role");
        Route::get("/role/add", [RoleController::class, "add"])->name("role.add");
        Route::post("/role", [RoleController::class, "store"])->name("role.store");
        Route::get("/role/edit/{role}", [RoleController::class, "edit"])->name("role.edit");
        Route::put("/role/{role}", [RoleController::class, "put"])->name("role.put");
        Route::delete("/role/{role}", [RoleController::class, "destroy"])->name("role.delete");
        // user
        Route::get("/user", [UserController::class, "index"])->name("user");
        Route::get("/user/add", [UserController::class, "add"])->name("user.add");
        Route::post("/user", [UserController::class, "store"])->name("user.store");
        Route::get("/user/edit/{user}", [UserController::class, "edit"])->name("user.edit");
        Route::put("/user/{user}", [UserController::class, "put"])->name("user.put");
        Route::delete("/user/{user}", [UserController::class, "destroy"])->name("user.delete");
        // siswa
        Route::get("/siswa", [SiswaController::class, "index"])->name("siswa");
        Route::get("/siswa/add", [SiswaController::class, "add"])->name("siswa.add");
        Route::post("/siswa", [SiswaController::class, "store"])->name("siswa.store");
        Route::get("/siswa/edit/{siswa}", [SiswaController::class, "edit"])->name("siswa.edit");
        Route::put("/siswa/{siswa}", [SiswaController::class, "put"])->name("siswa.put");
        Route::delete("/siswa/{siswa}", [SiswaController::class, "destroy"])->name("siswa.delete");
        // kelas
        Route::get("/kelas", [KelasController::class, "index"])->name("kelas");
        Route::get("/kelas/add", [KelasController::class, "add"])->name("kelas.add");
        Route::post("/kelas", [KelasController::class, "store"])->name("kelas.store");
        Route::get("/kelas/edit/{kelas}", [KelasController::class, "edit"])->name("kelas.edit");
        Route::put("/kelas/{kelas}", [KelasController::class, "put"])->name("kelas.put");
        Route::delete("/kelas/{kelas}", [KelasController::class, "destroy"])->name("kelas.delete");
        // mata-pelajaran
        Route::get("/mata-pelajaran", function () {
            return Inertia::render('Dashboard');
        })->name("mata-pelajaran");
        // tahun-ajaran
        Route::get("/tahun-ajaran", function () {
            return Inertia::render('Dashboard');
        })->name("tahun-ajaran");
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
