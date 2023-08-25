<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActiveUserController;
use App\Http\Controllers\GoogleCalendarController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HolidayController;

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
    return view('admin/login');
});

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/user-details', function () {
//     return view('admin.userdetails');
// })->middleware(['auth', 'verified']);


Route::get('/user-dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified'])->name('user_dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    #Notification mark as Read

    Route::post('/mark-as-read', [UserDetailController::class, 'markNotification'])->name('markNotification');
    Route::get('/get-notification', [UserDetailController::class, 'showNotifications'])->name('get-notification');
    Route::get('/noti-edit', [UserDetailController::class, 'notiedit'])->name('noti-edit');
    Route::post('/add_plans', [UserDetailController::class, 'add_plans'])->name('add_plans');
    Route::get('/get-user-details', [UserDetailController::class, 'get_customer_details'])->name('get_customer_details');


    // Routes entry/exit
    Route::get('/entryicon', [ActiveUserController::class, 'entryshow'])->name('entryicon');
    Route::get('/exiticon', [ActiveUserController::class, 'exitshow'])->name('exiticon');
    Route::post('/newentry', [ActiveUserController::class, 'store'])->name('newentry');
    Route::post('/exitentry', [ActiveUserController::class, 'update'])->name('exitentry');
    Route::get('/getallentry', [ActiveUserController::class, 'index'])->name('getallentry');
    Route::get('/getuserentry', [ActiveUserController::class, 'getuserentry'])->name('getuserentry');
    Route::get('/birthday', [ActiveUserController::class, 'birthday'])->name('birthday');
    Route::get('/activities', [ActiveUserController::class, 'activity'])->name('activities');
    Route::get('/holidays', [ActiveUserController::class, 'create'])->name('holidays');
    Route::post('/addsolarium', [ActiveUserController::class, 'addsolarium'])->name('addsolarium');
    Route::post('/exitsolarium', [ActiveUserController::class, 'exitsolarium'])->name('exitsolarium');


    // routes for ctrt+ v
    Route::get('/paste', [ActiveUserController::class, 'paste'])->name('paste');


    // Routes Daily Overview
    Route::get('/orders', [HistoryController::class, 'index'])->name('orders');
    Route::get('/count_new_users', [HistoryController::class, 'show'])->name('count_new_users');
    Route::get('/count_present', [HistoryController::class, 'store'])->name('count_present');




    //Route redirection url
    Route::get('/user-details/{card_number}', [HistoryController::class, 'create']);
    Route::get('/admin-dashboard/{card_number}', [HistoryController::class, 'edit']);

    //Route holiday Module 
    Route::get('/get-holidays', [HolidayController::class, 'index'])->name('get-holidays');
    Route::get('/holiday-fetchall', [HolidayController::class, 'fetchAll'])->name('holiday-fetchall');
    Route::post('/add_holiday', [HolidayController::class, 'add_holiday'])->name('add_holiday');
    Route::get('/edit_holiday', [HolidayController::class, 'edit_holiday'])->name('edit_holiday');





    Route::get('/events', [GoogleCalendarController::class, 'index'])->name('events');




    Route::get('/user-details', [UserDetailController::class, 'index'])->name('user-details');
    Route::post('/user-store', [UserDetailController::class, 'store'])->name('store');
    Route::get('/fetchall', [UserDetailController::class, 'fetchAll'])->name('fetchAll');
    Route::delete('/user-delete', [UserDetailController::class, 'delete'])->name('user-delete');
    Route::get('/user-edit', [UserDetailController::class, 'edit'])->name('user-edit');
    Route::get('/user-edit_noti', [UserDetailController::class, 'editnoti'])->name('user-edit_noti');
    Route::post('/user-update', [UserDetailController::class, 'update'])->name('update');
});

require __DIR__ . '/auth.php';


Route::get('/migrate', function () {
    \Artisan::call('migrate');
    // \Artisan::call('db:seed');
    dd('migrated!');
});

Route::get('/seeder', function () {
    \Artisan::call('db:seed');
    dd('seeder is done!');
});
// Route::get('/seeder1', function () {
//     \Artisan::call('db:seed --class=SettingPlanSeeder');
//     dd('seeder is done!');
// });

// Route::get('/make', function () {
//     \Artisan::call('make:model Activities --migration');

//     dd('use succesfully created!');
// });
// Route::get('/contro', function () {
//     \Artisan::call('make:controller  HolidayController ');

//     dd('use succesfully model created!');
// });
//Clear Cache facade value:
Route::get('reboot', function () {
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('key:generate');

    dd("Cache CLear done!");
});
