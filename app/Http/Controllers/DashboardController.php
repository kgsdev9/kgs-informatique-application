<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard() {
        return view('dashboard.index', [
            'article'=> Article::where('user_id', '=', Auth::user()->id)->count()
        ]);
    }
}
