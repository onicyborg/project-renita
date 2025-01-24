<?php

use App\Http\Controllers\AuditController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuisionerController;
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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register-post');
Route::post('/login', [AuthController::class, 'login'])->name('login-post');
Route::get('/{id}/quisioner', [AuditController::class, 'quisioner'])->name('quisioner');
Route::post('/token-submit/{id}', [AuditController::class, 'token_submit'])->name('token.submit');
Route::get('/{id}/form-quisioner', [AuditController::class, 'form_quisioner'])->name('form.quisioner');

Route::post('/submit-section-1/{id}/{token}', [QuisionerController::class, 'submit_section_1'])->name('submit.section-1');
Route::post('/submit-section-2/{id}/{token}', [QuisionerController::class, 'submit_section_2'])->name('submit.section-2');
Route::post('/submit-section-3/{id}/{token}', [QuisionerController::class, 'submit_section_3'])->name('submit.section-3');
Route::post('/submit-section-4/{id}/{token}', [QuisionerController::class, 'submit_section_4'])->name('submit.section-4');
Route::post('/submit-section-5/{id}/{token}', [QuisionerController::class, 'submit_section_5'])->name('submit.section-5');
Route::post('/submit-section-6/{id}/{token}', [QuisionerController::class, 'submit_section_6'])->name('submit.section-6');
Route::post('/submit-section-7/{id}/{token}', [QuisionerController::class, 'submit_section_7'])->name('submit.section-7');
Route::post('/submit-section-8/{id}/{token}', [QuisionerController::class, 'submit_section_8'])->name('submit.section-8');
Route::post('/submit-section-9/{id}/{token}', [QuisionerController::class, 'submit_section_9'])->name('submit.section-9');
Route::post('/submit-section-10/{id}/{token}', [QuisionerController::class, 'submit_section_10'])->name('submit.section-10');
Route::post('/submit-section-11/{id}/{token}', [QuisionerController::class, 'submit_section_11'])->name('submit.section-11');
Route::post('/submit-section-12/{id}/{token}', [QuisionerController::class, 'submit_section_12'])->name('submit.section-12');
Route::post('/submit-section-13/{id}/{token}', [QuisionerController::class, 'submit_section_13'])->name('submit.section-13');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/master-audit', [AuditController::class, 'index'])->name('master-audit');
    Route::post('/form-store', [AuditController::class, 'store'])->name('form.store');
    Route::delete('/form-delete/{id}', [AuditController::class, 'destroy'])->name('form.delete');
    Route::put('/form-update/{id}', [AuditController::class, 'update'])->name('form.update');

    Route::get('form-detail/{id}', [AuditController::class, 'show'])->name('form.detail');

    Route::post('/auditee-create/{id}', [AuditController::class, 'create_auditee'])->name('auditee.create');
    Route::put('/auditee-edit/{id}', [AuditController::class, 'edit_auditee'])->name('auditee.edit');
    Route::delete('/auditee-delete/{id}', [AuditController::class, 'delete_auditee'])->name('auditee.delete');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
