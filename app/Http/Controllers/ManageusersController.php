<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ManageusersController extends Controller
{
    public function managerusers()
    {
        $usertype = User::all();

        return view('backend.include.Manage-Users', compact('usertype'));
    }


    public function managerusersedit($id)
    {
        $usertypeedit = User::find($id);
        return response()->json($usertypeedit);
    }

    public function managerusersupdate(Request $request)
    {
        $user = Auth::user();
        $user->usertype = $request->input('usertype');
        $user->save();
        return response()->json($user->usertype . ' updated successfully');
    }
    
}


