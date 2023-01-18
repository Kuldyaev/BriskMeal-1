<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\RecipeController as AdminRecipeController;
use App\Http\Controllers\Admin\AllergenController as AdminAllergenController;
use App\Http\Controllers\Admin\PreferenceController as AdminPreferenceController;
use App\Http\Controllers\Admin\UnitController as AdminUnitController;
use App\Http\Controllers\Admin\IngredientController as AdminIngredientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/** Админка */
Route::name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/recipes', [AdminRecipeController::class, 'list'])->name('recipes.list');
        Route::apiResource('recipes', AdminRecipeController::class)->only([
            'destroy', 'update', 'store'
        ]);

        Route::get('/allergens', [AdminAllergenController::class, 'list'])->name('allergens.list');
        Route::apiResource('allergens', AdminAllergenController::class)->only([
            'destroy', 'update', 'store'
        ]);

        Route::get('/preferences', [AdminPreferenceController::class, 'list'])->name('preferences.list');
        Route::apiResource('preferences', AdminPreferenceController::class)->only([
            'destroy', 'update', 'store'
        ]);

        Route::get('/units', [AdminUnitController::class, 'list'])->name('units.list');
        Route::apiResource('units', AdminUnitController::class)->only([
            'destroy', 'update', 'store'
        ]);

        Route::get('/ingredients', [AdminIngredientController::class, 'list'])->name('ingredients.list');
        Route::apiResource('ingredients', AdminIngredientController::class)->only([
            'destroy', 'update', 'store'
        ]);
    });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
