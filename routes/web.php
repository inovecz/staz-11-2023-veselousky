<?php
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\RequestsMessagesController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\RequestController;
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


Route::post('/odoslat', [RequestsController::class, 'submitForm']);

Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'tenant_name' => 'required',
        'password' => 'required|confirmed',
    ]);

    $user = \App\Models\User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'tenant_name' => $request->input('tenant_name'),
        'password' => Hash::make($request->input('password')),
    ]);

    return "Užívateľ bol úspešne zaregistrovaný.";
})->name('register');

Route::get('/',function(){
    return view('whistleblowing');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dash', function () {
    return redirect('/dashboard');
});

Route::get('/formular', function () {
    if (Auth::check()) {
        return view('clients.nahlasenie');
    } else {
        return view('formar');
    }
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





// Clients routes
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::get('/clients/{id}', [ClientController::class, 'view'])->name('clients.view');
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

Route::post('/clients/create', [ClientController::class, 'createPost'])->name('clients.createPost');
Route::post('/clients/{id}/edit', [ClientController::class, 'editPost'])->name('clients.editPost');
Route::post('/clients/{id}/delete', [ClientController::class, 'deletePost'])->name('clients.deletePost');


// Tenants routes
Route::get('/tenants/create', [TenantController::class, 'create'])->name('tenants.create');
Route::get('/tenants/{id}/edit', [TenantController::class, 'edit'])->name('tenants.edit');
Route::get('/tenants/{id}', [TenantController::class, 'view'])->name('tenants.view');
Route::get('/tenants', [TenantController::class, 'index'])->name('tenants.index');

Route::post('/tenants/create', [TenantController::class, 'createPost'])->name('tenants.createPost');
Route::post('/tenants/{id}/edit', [TenantController::class, 'editPost'])->name('tenants.editPost');
Route::post('/tenants/{id}/delete', [TenantController::class, 'deletePost'])->name('tenants.deletePost');

// Requests routes
Route::get('/requests/create', [RequestsController::class, 'create'])->name('requests.create');
Route::get('/requests/{id}/edit', [RequestsController::class, 'edit'])->name('requests.edit');
Route::get('/requests/{id}', [RequestsController::class, 'view'])->name('requests.view');
Route::get('/requests', [RequestsController::class, 'index'])->name('requests.index');

Route::post('/requests/create', [RequestsController::class, 'createPost'])->name('requests.createPost');
Route::post('/requests/{id}/edit', [RequestsController::class, 'editPost'])->name('requests.editPost');
Route::post('/requests/{id}/delete', [RequestsController::class, 'deletePost'])->name('requests.deletePost');

// Requests_messages routes
Route::get('/requests_messages/create', [RequestsMessagesController::class, 'create'])->name('requestsMessages.create');
Route::get('requests_messages/{id}/edit', [RequestsMessagesController::class, 'edit'])->name('requestsMessages.edit');
Route::get('/requests_messages/{id}', [RequestsMessagesController::class, 'view'])->name('requestsMessages.view');
Route::get('/requests_messages', [RequestsMessagesController::class, 'index'])->name('requests_messages.index');

Route::post('/requests_messages/create', [RequestsMessagesController::class, 'createPost'])->name('requestsMessages.createPost');
Route::post('/requests_messages/{id}/edit', [RequestsMessagesController::class, 'editPost'])->name('requestsMessages.editPost');
Route::post('/requests_messages/{id}/delete', [RequestsMessagesController::class, 'deletePost'])->name('requestsMessages.deletePost');

