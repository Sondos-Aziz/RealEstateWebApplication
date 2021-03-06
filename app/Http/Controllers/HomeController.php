<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pro= Property::all();
         $property  = $pro->where('status' , 0);
        return view('welcome',compact('property'));
    }
        // return view('home');
    
        //this method for admin when he loggin into the application
        public function AdminDashboard(){
            return view('admin/home/index');
        }
}
