<?php

use App\Models\User;
use App\Models\Bus;
use App\Models\Hometown;

use App\Models\Destination;


use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| i'll do
|
*/

Route::get('/', function () {
    return view('first.first');
});
Route::get('/jadwal', function () {
    return view('first.jadwal', [
        'buses' => Bus::all(),
        'hometowns' => Hometown::all(),
        'destinations' => Destination::all()
    ]);
});
Route::get('/jadwal/{bus:id}', function ($id) {
    return view('first.show', [
        'title' => 'JADWAL | DETAIL',
        'bus' => Bus::find($id)
    ]);
});
Route::get('/informasi', function () {

    return view('first.info');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);





Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'create']);
Route::get('/wellcome', [FrontendController::class, 'index']);

Route::get('/second', function () {
    return view('second.tsdash', [
        'title' => 'ADMIN'
    ]);
})->middleware('auth');


Route::get('/info', function () {
    return view('second.info.index', [
        'title' => 'INFORMASI'
    ]);
});
Route::resource('/jdwl', JadwalController::class)->middleware('auth');

// Route::get('/jdwl', [JadwalController::class, 'index']);
Route::resource('admin', AdminController::class)->middleware('admin');

// Route::get('/admin', [AdminController::class, 'index']);

Route::get('/getUser', function (Request $request) {
    if ($request->ajax()) {
        $data = User::latest()->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
})->name('user.index');