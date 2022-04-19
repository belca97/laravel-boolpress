<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Tutte le rotte definite dentro \api rispondono ad un prefisso che è \api

Route::get('/posts', 'Api\PostController@index');
