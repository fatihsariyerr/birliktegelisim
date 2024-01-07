<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TimerController;
use App\Http\Controllers\authcontroller;

 

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

Route::get('/lightmain',[AdminController::class,'lightmain']);
Route::get('/lightrandevu',[AdminController::class,'lightrandevu']);
Route::get('/lightprofile',[AdminController::class,'lightprofile']);
Route::get('/lightprice',[AdminController::class,'lightprice']);
Route::post('/lightupload_price', [AdminController::class, 'lightupload_price']);
Route::post('/lightmusaitlikdegistir', [AdminController::class, 'lightmusaitlikdegistir']);
Route::get('/lightmusaitlikbelirle',[AdminController::class,'lightmusaitlikbelirle']);
Route::get('/lightmakaleekle', [AdminController::class, 'lightmakaleekle']);
Route::post('/lightmakale_ekle', [AdminController::class, 'lightmakale_ekle']);
Route::post('/lightupdateabout', [AdminController::class, 'lightupdateabout']);
Route::get('/lightformgoruntule',[AdminController::class,'lightformgoruntule']);
Route::post('/lightselectgdf', [AdminController::class, 'lightselectgdf']);
Route::get('/gdfoku',[AdminController::class,'gdfoku']);
Route::post('/lightgdfgoruntule', [AdminController::class, 'lightgdfgoruntule']);
Route::get('/lightmessage',[AdminController::class,'lightmessage']);
Route::get('/lightadddoctor',[AdminController::class,'lightadddoctor']);
Route::post('/lightupload_doctor', [AdminController::class, 'lightupload']);
Route::get('/lightuyeler',[AdminController::class,'lightuyelerview']);


Route::get('/get-timer/{roomname}', [TimerController::class, 'getTimer']);

Route::get('/gunsecimi/{doctorId}/{selectedDate}', [HomeController::class, 'gunSecimi']);

Route::get('/roomdelete/{roomname}', [HomeController::class, 'roomdelete']);

Route::get('/joinchat/{id}',[HomeController::class,'katil']);
Route::get('/gelisimdegerlendirmeformu',[HomeController::class,'gelisimroute']);
Route::get('/gelisimseldegerlendirmeformu',[HomeController::class,'gelisimseldegerlendirmeformu']);
Route::get('/formgoruntule',[AdminController::class,'formgoruntule']);

Route::get('/musaitlikbelirle',[AdminController::class,'musaitlikbelirle']);

Route::post('/gdfgoruntule', [AdminController::class, 'gdfgoruntule']);
Route::post('/selectgdf', [AdminController::class, 'selectgdf']);
Route::post('/sonucugonder', [HomeController::class, 'sonucugonder']);

Route::post('/musaitlikdegistir', [AdminController::class, 'musaitlikdegistir']);

Route::post('/testebasla', [HomeController::class, 'testebasla']);

Route::get('/payment/{id}', [HomeController::class, 'odemeyapblade']);
Route::get('/yaslaragoregelisimozellikleri',[HomeController::class, 'yaslaragoregelisim']);
Route::get('/get-doctor-fee/{id}', [HomeController::class, 'getDoctorFee']);



Route::get('/takvim', [AdminController::class, 'takvim']);

Route::get('/profile/{slug}', [HomeController::class, 'getprofile']);
Route::get('/', [HomeController::class, 'redirect']);

Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/add_doctor_view', [AdminController::class, 'addview']);

Route::post('/updateabout', [AdminController::class, 'updateabout']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::post('/appointment', [HomeController::class, 'appointment']);

Route::post('/yorumyap', [HomeController::class, 'yorumyap']);
Route::get('/mesajlar', [AdminController::class, 'mesajlar']);
Route::get('/updateprofile', [AdminController::class, 'updateprofile']);

Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/makaleekle', [AdminController::class, 'makaleekle']);

Route::post('/submit', [HomeController::class, 'submit']);

Route::get('/okundu', [AdminController::class, 'okundu']);


Route::get('/send/{id}', [HomeController::class, 'sendNotification']);

Route::get('/doctors', [HomeController::class, 'doctors']);
Route::get('/makaleler', [HomeController::class, 'makaleler']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/addblog', [AdminController::class, 'addblog']);
Route::get('/uploadprice', [AdminController::class, 'uploadprice']);
Route::post('/upload_price', [AdminController::class, 'upload_price']);

Route::get('/myappointment', [HomeController::class, 'myappointment']);




Route::get('/status', [HomeController::class, 'statusCheck']);


Route::get('/delete_appointment/{id}', [AdminController::class, 'delete']);
Route::get('/cancel_appointment/{id}', [HomeController::class, 'cancelappointment']);
Route::get('/accept_appointment/{id}', [AdminController::class, 'acceptappointment']);
Route::get('/admincancel_appointment/{id}', [AdminController::class, 'cancelappointment']);


Route::get('/mesajokundu/{id}', [AdminController::class, 'mesajokundu']);

Route::get('/showappointment', [AdminController::class, 'showappointment']);
Route::get('/blog/{slug}',[BlogController::class, 'blog']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
