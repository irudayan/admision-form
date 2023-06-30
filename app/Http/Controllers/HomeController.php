<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admisionform;

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
         $usertype = Auth::user()->usertype;

            if($usertype == 'Admin') {

                $allData = Admisionform::all();

                $totalForm = Admisionform::count();
                $pendingForm = Admisionform::where('status','Pending')->count();
                $approvedForm = Admisionform::where('status','Approved')->count();

                return view('backend.include.dashboard',compact('usertype','allData','totalForm',
                            'pendingForm','approvedForm'));
            }else{

                $userId = Admisionform::where('user_id', Auth::user()->id)->first();
                // dd($userId);
                if (empty($userId)) {
                    return view ('backend.include.admision-form',compact('usertype'));
                } else {
                    return view('backend.include.status',compact('usertype','userId'));
                  
                }

               
            }
            
    }
}
