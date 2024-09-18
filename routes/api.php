<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    $user = User::get();
    return response()->json(['totalUser' => $user->count(), 'data' => $user], 200);
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
