<?php

use App\Http\Controllers\Employe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Medicament;;
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

Route::get('/', function () {
    return view('welcome');
});

// CREATE

        Route::get('/getemploye', [Employe::class,'getAllEmploye'])->name('getallemploye');

        Route::get('/getmedicament', [Medicament::class,'getAllMedicament'])->name('getallmedicament');

// FIN CREATE





// READ

    // BY ID

        Route::get('/getemploye/{id}', [Employe::class,'getEmployeById(id)'])->name('getemployebyid');

        Route::get('/getmedicament/{id}', [Medicament::class,'getMedicamentById(id)'])->name('getmedicamentbyid');

    // GET ALL

        Route::get('/getemploye', [Employe::class,'getAllEmploye'])->name('getallemploye');

        Route::get('/getmedicament', [Medicament::class,'getAllMedicament'])->name('getallmedicament');

// FIN READ





// UPDATE





// FIN UPDATE





// DELETE

Route::get('/delemployee/{id}', [Employe::class,'delEmploye(id)'])->name('delemployee');

Route::get('/delmedicament/{id}', [Medicament::class,'delMedicament(id)'])->name('delmedicament');

// FIN DELETE