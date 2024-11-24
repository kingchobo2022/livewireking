<?php

use App\Livewire\CreateCustomer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('customers/create', CreateCustomer::class);