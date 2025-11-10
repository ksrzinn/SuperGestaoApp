<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

// Route::get('/', 'PrincipalController@principal');

// Route::get('/', PrincipalController::class . '@principal');

Route::get('/', [PrincipalController::class, 'principal']); //Versão mais nova do PHP 8+

Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/login');

Route::group(['prefix' => 'app', 'as' => 'app.'], function () {
    Route::get('/clients')->name('clients');
    // Route::get('/fornecedores')->name('fornecedores');
    Route::get('/products')->name('products');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('indexFornecedor');
});
// Route::prefix('/app')->group(function () {
//     Route::get('/clients');
//     Route::get('/fornecedores');
//     Route::get('/products');
// });

Route::get('rota1', function () {
    echo 'Rota 1';
})->name('site.rota1');

Route::get('rota2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');

// Route::redirect('/rota2', '/rota1');
