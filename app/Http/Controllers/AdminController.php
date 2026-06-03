<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $users = User::all(); // Ambil semua data user
        return view('admin.dashboard', compact('users'));
    }
}