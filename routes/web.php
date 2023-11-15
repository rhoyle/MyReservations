<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AcceptInvitation;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('signed')
    ->get('invitation/{invitation}/accept', AcceptInvitation::class)
    ->name('invitation.accept');
