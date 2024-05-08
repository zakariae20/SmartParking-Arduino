<?php

use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\PlaceController;
use Illuminate\Support\Facades\Route;



Route::get('/liste', [UtilisateurController::class,'liste'])->name('utlisateur_liste');
Route::get('/placeok', [PlaceController::class,'liste'])->name('place');


Route::get('/', function () {
    return view('utilisateur.login');
})->name('utilisateur_login');
Route::get('/aboutus', function () {
    return view('layout.aboutus');
})->name('utilisateur_aboutus');
Route::get('/utilisateur/ajouter',[UtilisateurController::class,'ajouter'])->name('utilisateur_ajouter');
Route::post('/utilisateur/add',[UtilisateurController::class,'add'])->name('utilisateur_add');
Route::post('/utilisateur/add2',[UtilisateurController::class,'admin_add_utilisateur'])->name('admin_add_utilisateur');
Route::post('/',[UtilisateurController::class,'checkCredentials'])->name('utilisateur_login');
// Route::get('/login', [UtilisateurController::class,'checkCredentials'])->name('login');

Route::get('/placeid',[PlaceController::class,'liste'])->middleware('checkAuth')->name('available');

Route::get('/place', function () {
    return view('place.placeav');
})->name('place_available');
Route::get('/userdetails', function () {
    return view('utilisateur.details');
})->name('utilisateur_details');

Route::get('/utilisateur/modifier/{id}',[UtilisateurController::class,'modify'])->name('utilisateur_modify');
Route::post('/utilisateur/update',[UtilisateurController::class,'update'])->name('utilisateur_update');
Route::get('/utilisateur/delete/{id}',[UtilisateurController::class,'delete'])->name('utilisateur_delete');

Route::get('/hed', function () {
    return view('layout.header');
});