<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
use Illuminate\Http\Request;

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

// Route::get('/', function (Request $request) {
//     $uri = $request->path();
//     if ($request->has('url')) {
//         // @dd($request);
//        $survey_redirect = $request->input('url');
//     } else {
//         return redirect('https://library.vcu.edu');
//     }
//     // @dd('completed form already');
//     return redirect($survey_redirect);
// });

Route::get('/', function (Request $request) {
    $sesh = Session::all();
    return redirect('surveys/?url=')->with($sesh);
});


Route::resource('surveys', SurveyController::class);
