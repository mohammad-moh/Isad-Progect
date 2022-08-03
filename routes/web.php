<?php

use App\Http\Controllers\AttachedController;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\CommitmentController;
use App\Http\Controllers\HousingController;
use App\Http\Controllers\LivingController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PrimaryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SystemNotifyController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/dash', function () {
    return view('dash');
});

Route::get('/full-main', function () {
    return view('fullmain');
});


Route::group(['prefix'=>'notification'], function(){
    Route::get('/create', [SystemNotifyController::class, 'create'])->name('notification.create');
    Route::post('/store', [SystemNotifyController::class, 'store'])->name('notification.store');
});



Route::group(['middleware'=>'auth', 'prefix'=>'primary' ],function () {
    Route::get('index', [PrimaryController::class, 'index'])->name('primary.index');
    Route::get('create', [PrimaryController::class, 'create'])->name('primary.create');
    Route::post('store', [PrimaryController::class, 'store'])->name('primary.store');
    Route::get('show/{id}', [PrimaryController::class, 'show'])->name('primary.show');
    Route::get('edit/{id}', [PrimaryController::class, 'edit'])->name('primary.edit');
    Route::post('update/{id}', [PrimaryController::class, 'update'])->name('primary.update');
    Route::get('delete/{id}', [PrimaryController::class, 'destroy'])->name('primary.delete');
});

// Route For housing 
Route::group(['middleware'=>'auth', 'prefix'=>'housing' ],function(){
    Route::get('index', [HousingController::class, 'index'])->name('housing.index');
    Route::get('create', [HousingController::class, 'create'])->name('housing.create');
    Route::post('store', [HousingController::class, 'store'])->name('housing.store');
    Route::get('show/{id}', [HousingController::class, 'show'])->name('housing.show');
    Route::get('edit/{id}', [HousingController::class, 'edit'])->name('housing.edit');
    Route::post('update/{id}', [HousingController::class, 'update'])->name('housing.update');
    Route::get('delete/{id}', [HousingController::class, 'destroy'])->name('housing.delete');
});

// Routes For living income
Route::group(['middleware'=>'auth', 'prefix'=>'living' ],function(){
    Route::get('index', [LivingController::class, 'index'])->name('living.index');
    Route::get('create', [LivingController::class, 'create'])->name('living.create');
    Route::post('store', [LivingController::class, 'store'])->name('living.store');
    Route::get('show/{id}', [LivingController::class, 'show'])->name('living.show');
    Route::get('edit/{id}', [LivingController::class, 'edit'])->name('living.edit');
    Route::post('update/{id}', [LivingController::class, 'update'])->name('living.update');
    Route::get('delete/{id}', [LivingController::class, 'destroy'])->name('living.delete');
});
// Routes For beneficiary’s affiliates–

Route::group(['middleware'=>'auth', 'prefix'=>'beneficiary' ],function(){
    Route::get('index', [BeneficiaryController::class, 'index'])->name('beneficiary.index');
    Route::get('create', [BeneficiaryController::class, 'create'])->name('beneficiary.create');
    Route::post('store', [BeneficiaryController::class, 'store'])->name('beneficiary.store');
    Route::get('show/{id}', [BeneficiaryController::class, 'show'])->name('beneficiary.show');
    Route::get('edit/{id}', [BeneficiaryController::class, 'edit'])->name('beneficiary.edit');
    Route::post('update/{id}', [BeneficiaryController::class, 'update'])->name('beneficiary.update');
    Route::get('delete/{id}', [BeneficiaryController::class, 'destroy'])->name('beneficiary.delete');
});

// Routes For commitments that hinder the family

Route::group(['middleware'=>'auth', 'prefix'=>'commitment' ],function(){
    Route::get('index', [CommitmentController::class, 'index'])->name('commitment.index');
    Route::get('create', [CommitmentController::class, 'create'])->name('commitment.create');
    Route::post('store', [CommitmentController::class, 'store'])->name('commitment.store');
    Route::get('show/{id}', [CommitmentController::class, 'show'])->name('commitment.show');
    Route::get('edit/{id}', [CommitmentController::class, 'edit'])->name('commitment.edit');
    Route::post('update/{id}', [CommitmentController::class, 'update'])->name('commitment.update');
    Route::get('delete/{id}', [CommitmentController::class, 'destroy'])->name('commitment.delete');
});

// Route For attached media

Route::group(['middleware'=>'auth', 'prefix'=>'attached' ],function(){
    Route::get('index', [AttachedController::class, 'index'])->name('attached.index');
    Route::get('create', [AttachedController::class, 'create'])->name('attached.create');
    Route::post('store', [AttachedController::class, 'store'])->name('attached.store');
    Route::get('show/{id}', [AttachedController::class, 'show'])->name('attached.show');
    Route::get('edit/{id}', [AttachedController::class, 'edit'])->name('attached.edit');
    Route::post('update/{id}', [AttachedController::class, 'update'])->name('attached.update');
    Route::get('delete/{id}', [AttachedController::class, 'destroy'])->name('attached.delete');
});

// Route For personal information

Route::group(['middleware'=>'auth', 'prefix'=>'personal' ],function(){
    Route::get('index', [PersonalController::class, 'index'])->name('personal.index');
    Route::get('create', [PersonalController::class, 'create'])->name('personal.create');
    Route::post('store', [PersonalController::class, 'store'])->name('personal.store');
    Route::get('show/{id}', [PersonalController::class, 'show'])->name('personal.show');
    Route::get('edit/{id}', [PersonalController::class, 'edit'])->name('personal.edit');
    Route::post('update/{id}', [PersonalController::class, 'update'])->name('personal.update');
    Route::get('delete/{id}', [PersonalController::class, 'destroy'])->name('personal.delete');
});


Route::get('/search' , [SearchController::class, 'index'])->name('search');