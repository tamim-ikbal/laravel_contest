<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __invoke(Request $request): View
    {
        return view('backend.dashboard');
    }
}
