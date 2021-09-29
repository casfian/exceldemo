<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\StudentController;

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



//utk excel
Route::get('importExportView', [MyController::class, 'importExportView']);
Route::get('export', [MyController::class, 'export'])->name('export');
Route::post('import', [MyController::class, 'import'])->name('import');

//utk pdf
Route::get('seepdf', function () {
    $data = [
        'title' => 'Welcome PDF',
        'date' => date('m/d/Y'),
        'author' => 'Caspian'
    ];
    return view('mypdfview', $data);
});
Route::get('generatepdf', [PDFController::class, 'generatepdf'])->name('downloadpdf');

Route::get('student', [StudentController::class, 'index']);