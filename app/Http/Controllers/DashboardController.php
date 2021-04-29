<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $roleUser = User::find(Auth::user()->id)->roles->first()->name;

        $employee = User::count();

        $product = Product::count();

        return view('dashboard.index', compact('roleUser', 'product'));
    }
}
