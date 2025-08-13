<?php

use App\Livewire\DisplayTicket;
use App\Livewire\Ticket;
use Illuminate\Support\Facades\Route;

Route::get('/', DisplayTicket::class)->name('display');
Route::get('/antrian', Ticket::class)->name('antrian');
