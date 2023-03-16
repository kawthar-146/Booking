<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Service; 
use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       
        $services = Service::all();
        $team = Team::all();
        return view('home', compact('services'),compact('team'));
    }
}
