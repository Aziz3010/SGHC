<?php

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SettingsTwoController;
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

// Route::get('/', [SettingsController::class, "index"]);

// Route::get('/admin', function () {
//     return view("admin/dashboard");
// });

// Route::get('/admin/settings/rearrange', [SettingsController::class, "showForms"]);
// Route::post('/admin/settings/rearrange', [SettingsController::class, "reArrange"]);

// ////////////////////////////////////////////////////////////////////////////////////

Route::get('/', [SettingsTwoController::class, "index"]);

Route::get('/admin', function () {
    return view("admin/dashboard");
});

Route::get('/admin/settingsTwo/rearrange', [SettingsTwoController::class, "showForms"]);
Route::post('/admin/settingsTwo/rearrange', [SettingsTwoController::class, "reArrange"]);
