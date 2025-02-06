<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TrainController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\FormOptionController;
use App\Http\Controllers\Admin\AskController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\ParticipantController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BoardController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\BusController;
use App\Http\Controllers\Admin\CardinalController;
use App\Http\Controllers\Admin\DonationController;
use Illuminate\Support\Facades\Route;

//관리자
Route::group(['middleware' => ['auth:sanctum'], 'prefix' => 'admin'], function () {
  
});