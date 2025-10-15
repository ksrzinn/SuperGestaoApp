<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

// Route::get('/', 'PrincipalController@principal');

// Route::get('/', PrincipalController::class . '@principal');

Route::get('/', [PrincipalController::class, 'principal']); //Versão mais nova do PHP 8+

Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', [ContactController::class, 'contact']);


Route::get('/contact/{name}/{category_id}', function(string $name, int $category_id = 1) {
    echo "Estamos aqui: $name, $category_id";
})->where('category_id', '[0-9]+')->where('name', '[A-Za-z]+');


