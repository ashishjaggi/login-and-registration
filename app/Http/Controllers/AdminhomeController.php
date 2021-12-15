<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminhomeController extends Controller
{
    /**
     * Display login page.
     * 
     * @return Renderable
     */
    public function perform()
    {
        return view('admindashboard.index');
    }

}
