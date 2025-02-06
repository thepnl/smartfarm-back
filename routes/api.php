<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\AskController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::get('/user-id', [AuthController::class, 'userId']);
Route::post('/login', [AuthController::class, 'login']);

//보안을 위해 미들웨어 추가
Route::middleware('auth:sanctum')->group(function() {
    //개인정보, 로그인, 로그아웃 Auth Dir > Login, Register, get/{id}
    Route::apiResource('me', 'App\Http\Controllers\Auth\AuthController'); 

});


Route::apiResource('homes', 'App\Http\Controllers\HomeController'); 



//ROUTE 관리자
include 'admin.php';

