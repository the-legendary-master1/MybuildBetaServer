<?php

namespace App\Http\Controllers;

use App\Sidebar;
use Illuminate\Http\Request;

class AdminDataController extends Controller
{    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sidebar() 
    {
        $sidebars = Sidebar::all();
        return response()->json(['sidebars' => $sidebars]);
    }
}
