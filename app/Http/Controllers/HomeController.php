<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $doctors = Doctor::all();
        return view('pages.home', compact('services', 'doctors'));
    }
}
