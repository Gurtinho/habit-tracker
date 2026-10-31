<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        $habits = Auth::user()->habits;

        return view('dashboard', compact('habits'));
    }
}
