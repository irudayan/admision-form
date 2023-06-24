<?php

namespace App\Http\Controllers;

use App\Models\Admisionform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

use function PHPUnit\Framework\isEmpty;

class AdmisionformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usertype = Auth::user()->usertype;

        return view('backend.include.admin-status');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function status(Request $request)
    {
        $status = Admisionform::where('user_id', Auth::user()->id)->first();

        if (empty($status)) {
            return view ('backend.include.admision-form');
        } else {
        return view('backend.include.status', compact('status'));
          
        }
        // return view('backend.include.status');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function formstore(Request $request)
    {
        // dd($request);
        //   $addform->user_id = $request->user()->id;

        $addform = new Admisionform();
        $addform->user_id = $request->user()->id;
        $addform->fullname = $request->input('fullname');
        $addform->mobileno = $request->input('mobileno');
        $addform->bloodgroup = $request->input('bloodgroup');
        $addform->email = $request->input('email');
        $addform->fathername = $request->input('fathername');
        $addform->mothername = $request->input('mothername');
        $addform->religion = $request->input('religion');
        $addform->motherphone = $request->input('motherphone');
        $addform->fatherphone = $request->input('fatherphone');
        $addform->fatheroccupation = $request->input('fatheroccupation');
        $addform->motheroccupation = $request->input('motheroccupation');
        $addform->permanentaddress = $request->input('permanentaddress');
        $addform->correspondentaddress = $request->input('correspondentaddress');
        $addform->localguardianname = $request->input('localguardianname');
        $addform->localguardianno = $request->input('localguardianno');
        $addform->tribe = $request->input('tribe');
        $addform->postcode = $request->input('postcode');
        $addform->country = $request->input('country');
        $addform->state = $request->input('state');
        $addform->hslcyear = $request->input('hslcyear');
        $addform->hslcrollno = $request->input('hslcrollno');
        $addform->hslcdivision = $request->input('hslcdivision');
        $addform->hslcpercentage = $request->input('hslcpercentage');
        $addform->hslcboard = $request->input('hslcboard');
        $addform->hsslcyear = $request->input('hsslcyear');
        $addform->hsslcrollno = $request->input('hsslcrollno');
        $addform->hsslcdivision = $request->input('hsslcdivision');
        $addform->hsslcpercentage = $request->input('hsslcpercentage');
        $addform->hsslcboard = $request->input('hsslcboard');
        $addform->collegename = $request->input('collegename');
        $addform->schoollastattended = $request->input('schoollastattended');
        $addform->collegelastattended = $request->input('collegelastattended');
        $addform->boarduniversity = $request->input('boarduniversity');
        $addform->cerificateno = $request->input('cerificateno');
        $addform->certificatedate = $request->input('certificatedate');
        $addform->subject1 = $request->input('subject1');
        $addform->subject2 = $request->input('subject2');
        $addform->subject3 = $request->input('subject3');
        $addform->subject4 = $request->input('subject4');
        $addform->subject5 = $request->input('subject5');
        $addform->previouspercentage = $request->input('previouspercentage');
        // $addform->hsslcmarksheet = $request->input('hsslcmarksheet');
        // $addform->birthcertificate = $request->input('birthcertificate');
        // $addform->communitycertificate = $request->input('communitycertificate');

        
        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $addform->photo = $photo->getClientOriginalName(); // Set the photo field 
            $photo->move('photo',$addform->photo); // Save the file  the "photos" directory
        }
        if ($request->file('hsslcmarksheet')) {
            $hsslcmarksheet = $request->file('hsslcmarksheet');
            $addform->hsslcmarksheet = $hsslcmarksheet->getClientOriginalName(); 
            $hsslcmarksheet->move('hsslcmarksheet',$addform->hsslcmarksheet); 
        }
        if ($request->file('birthcertificate')) {
            $birthcertificate = $request->file('birthcertificate');
            $addform->birthcertificate = $birthcertificate->getClientOriginalName(); 
            $birthcertificate->move('birthcertificate',$addform->birthcertificate); 
        }
        if ($request->file('communitycertificate')) {
            $communitycertificate = $request->file('communitycertificate');
            $addform->communitycertificate = $communitycertificate->getClientOriginalName(); 
            $communitycertificate->move('communitycertificate',$addform->communitycertificate);
        }
        $addform->save();

    return redirect()->route('status')->with('success','Admision form has been created successfully.');

    }




    /**
     * Display the specified resource.
     */
    public function formview(Admisionform $admisionform)
    {
        
                 $form = Admisionform::where('user_id', Auth::user()->id)->first();

                    if (empty($form)) {
                        return view ('backend.include.admision-form');
                    } else {
                    return view('backend.include.admision-form-view', compact('form'));
                      
                    }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function formedit($id)
    {
        $formedit = Admisionform::find($id);
        return view('backend.include.admision-form-edit', compact('formedit'));

    }


    public function formupdate(Request $request)
    {
       
        $admisionform = Admisionform::findOrFail($request->id);
        $admisionform->update($request->all());
        $formedit = $admisionform;

     return redirect()->route('status');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admisionform $admisionform)
    {
        //
    }
}
