<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\facultycontroller;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\buscontroller;
use App\Http\Controllers\bookcontroller;

Route :: get('/',[facultycontroller::class,'create']);
Route :: get('/student',[Studentcontroller::class,'create']);
Route ::get('/busadd',[buscontroller::class,'create']);
route ::post('/facultyread',[facultycontroller::class,'store']);
route :: post('/studentread',[Studentcontroller::class,'store']);
Route ::post('/busread',[buscontroller::class,'store']);
Route :: get('/book',[bookcontroller::class,'create']);
Route ::post('/bookread',[bookcontroller::class,'store']);