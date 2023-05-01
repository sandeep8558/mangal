<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role;
            
            switch($role){

                case "Administrator":
                return redirect('/administrator');
                break;

                case "Staff":
                return redirect('/mystaff');
                break;

                case "Faculty":
                return redirect('/faculty');
                break;

                case "Student":
                return redirect('/student');
                break;

                default:
                Auth::logout();
                return redirect('/login');

            }
        }
    }
}
