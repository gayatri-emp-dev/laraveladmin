<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data['vehicles'] = Vehicle::orderBy('id', 'asc')->get();
        return view('vehicles.index',$data);
        //return view('dashboard');
    }
}
