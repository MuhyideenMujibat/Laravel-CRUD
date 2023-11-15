<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberList; 

Route::get("list",[MemberList::class,"showList"]);
Route::get("delete/{id}",[MemberList::class,"deleteList"]);
Route::get("edit/{id}",[MemberList::class,"showId"]);
Route::post("edit",[MemberList::class,"updateId"]);
