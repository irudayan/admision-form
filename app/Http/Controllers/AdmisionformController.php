<?php

namespace App\Http\Controllers;

use App\Models\Admisionform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use PDF;

use function PHPUnit\Framework\isEmpty;

class AdmisionformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//     public function index()
//     {
//         $usertype = Auth::user()->usertype;
// dd('hjello');
//         return view('backend.include.status',compact('usertype'));
//     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function status(Request $request)
    {
        $userId = Admisionform::where('user_id', Auth::user()->id)->first();

        if (empty($userId)) {
            // dd('in');
            return view ('backend.include.admision-form');
        } else {
            // dd('heernf');
        return view('backend.include.status', compact('userId'));
          
        }
        // return view('backend.include.status');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function formstore(Request $request)
    {
        //   $addform->user_id = $request->user()->id;

        $addform = new Admisionform();
        $addform->user_id = $request->user()->id;
        $addform->fullname = $request->fullname;
        $addform->mobileno = $request->mobileno;
        $addform->dateofbirth = $request->dateofbirth;
        $addform->bloodgroup = $request->bloodgroup;
        $addform->email = $request->email;
        $addform->fathername = $request->fathername;
        $addform->mothername = $request->mothername;
        $addform->religion = $request->religion;
        $addform->motherphone = $request->motherphone;
        $addform->fatherphone = $request->fatherphone;
        $addform->fatheroccupation = $request->fatheroccupation;
        $addform->motheroccupation = $request->motheroccupation;
        $addform->permanentaddress = $request->permanentaddress;
        $addform->correspondentaddress = $request->correspondentaddress;
        $addform->localguardianname = $request->localguardianname;
        $addform->localguardianno = $request->localguardianno;
        $addform->category = $request->category;
        $addform->tribe = $request->tribe;
        $addform->postcode = $request->postcode;
        $addform->gender = $request->gender;
        $addform->country = $request->country;
        $addform->state = $request->state;
        $addform->hslcyear = $request->hslcyear;
        $addform->hslcrollno = $request->hslcrollno;
        $addform->hslcdivision = $request->hslcdivision;
        $addform->hslcpercentage = $request->hslcpercentage;
        $addform->hslcboard = $request->hslcboard;
        $addform->hsslcyear = $request->hsslcyear;
        $addform->hsslcrollno = $request->hsslcrollno;
        $addform->hsslcdivision = $request->hsslcdivision;
        $addform->hsslcpercentage = $request->hsslcpercentage;
        $addform->hsslcboard = $request->hsslcboard;
        $addform->schoolname = $request->schoolname;
        $addform->collegename = $request->collegename;
        $addform->schoollastattended = $request->schoollastattended;
        $addform->collegelastattended = $request->collegelastattended;
        $addform->boarduniversity = $request->boarduniversity;
        $addform->cerificateno = $request->cerificateno;
        $addform->certificatedate = $request->certificatedate;
        $addform->subject1 = $request->subject1;
        $addform->subject2 = $request->subject2;
        $addform->subject3 = $request->subject3;
        $addform->subject4 = $request->subject4;
        $addform->subject5 = $request->subject5;
        $addform->previouspercentage = $request->previouspercentage;
        $addform->previousgrade = $request->previousgrade;
        $addform->DSE_English = $request->DSE_English;
        $addform->DSE_History = $request->DSE_History;
        $addform->DSE_Philosophy = $request->DSE_Philosophy;
        $addform->DSE_Pol_Science = $request->DSE_Pol_Science;
        $addform->DSE_Sociology = $request->DSE_Sociology;
        $addform->GE_English = $request->GE_English;
        $addform->GE_History = $request->GE_History;
        $addform->GE_Philosophy = $request->GE_Philosophy;
        $addform->GE_Pol_Science = $request->GE_Pol_Science;
        $addform->GE_Sociology = $request->GE_Sociology;
        $addform->SEC_English = $request->SEC_English;
        $addform->SEC_History = $request->SEC_History;
        $addform->SEC_Philosophy = $request->SEC_Philosophy;
        $addform->SEC_Pol_Science = $request->SEC_Pol_Science;
        $addform->SEC_Sociology = $request->SEC_Sociology;
        $addform->AECC_English = $request->AECC_English;
        $addform->AECC_History = $request->AECC_History;
        $addform->AECC_Philosophy = $request->AECC_Philosophy;
        $addform->AECC_Pol_Science = $request->AECC_Pol_Science;
        $addform->AECC_Sociology = $request->AECC_Sociology;
        $addform->Hon_Sub_1 = $request->Hon_Sub_1;
        $addform->Hon_Sub_2 = $request->Hon_Sub_2;
        $addform->Hon_Sub_3 = $request->Hon_Sub_3;
        $addform->Hon_Sub_4 = $request->Hon_Sub_4;
        $addform->Hon_Sub_5 = $request->Hon_Sub_5;
        $addform->General_Course_1 = $request->General_Course_1;
        $addform->General_Course_2 = $request->General_Course_2;
        $addform->General_Course_3 = $request->General_Course_3;
        $addform->General_Course_4 = $request->General_Course_4;
        $addform->General_Course_5 = $request->General_Course_5;
        // $addform->status = $request->status;

        

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
        if ($request->file('hsslcadmitcard')) {
            $hsslcadmitcard = $request->file('hsslcadmitcard');
            $addform->hsslcadmitcard = $hsslcadmitcard->getClientOriginalName(); 
            $hsslcadmitcard->move('hsslcadmitcard',$addform->hsslcadmitcard); 
        }
        if ($request->file('communitycertificate')) {
            $communitycertificate = $request->file('communitycertificate');
            $addform->communitycertificate = $communitycertificate->getClientOriginalName(); 
            $communitycertificate->move('communitycertificate',$addform->communitycertificate);
        }
        // dd($addform);

        $addform->save();

    return redirect()->route('status')->with('success','Admision form has been created successfully.');

    }




    /**
     * Display the specified resource.
     */
    public function formview(Request $request)
    {
        $id = $request->id;
        $form = Admisionform::where('id',$id)->first();
        $usertype = Auth::user()->usertype;
  
        if (empty($form) && $usertype == 'Users') {
            
            return view ('backend.include.admision-form');
        }else {

            dd($request);

        return view('backend.include.admision-form-view', compact('form'));
    }
}
    

    

    public function formPdf(Request $request)
    {
        // $pdfform = Admisionform::where('user_id', Auth::user()->id)->first();
        $id = $request->id;
        $pdfform = Admisionform::where('id',$id)->first();
        $pdfform->DSE_English = $pdfform->DSE_English ?? "Nill";
        $pdfform->DSE_History = $pdfform->DSE_History ?? "Nill";
        $pdfform->DSE_Philosophy = $pdfform->DSE_Philosophy ?? "Nill";
        $pdfform->DSE_Pol_Science = $pdfform->DSE_Pol_Science ?? "Nill";
        $pdfform->DSE_Sociology = $pdfform->DSE_Sociology ?? "Nill";
        $pdfform->GE_English = $pdfform->GE_English ?? "Nill";
        $pdfform->GE_History = $pdfform->GE_History ?? "Nill";
        $pdfform->GE_Philosophy = $pdfform->GE_Philosophy ?? "Nill";
        $pdfform->GE_Pol_Science = $pdfform->GE_Pol_Science ?? "Nill";
        $pdfform->SEC_English = $pdfform->SEC_English ?? "Nill";
        $pdfform->SEC_History = $pdfform->SEC_History ?? "Nill";
        $pdfform->SEC_Philosophy = $pdfform->SEC_Philosophy ?? "Nill";
        $pdfform->SEC_Pol_Science = $pdfform->SEC_Pol_Science ?? "Nill";
        $pdfform->SEC_Sociology = $pdfform->SEC_Sociology ?? "Nill";
        $pdfform->AECC_English = $pdfform->AECC_English ?? "Nill";
        $pdfform->AECC_History = $pdfform->AECC_History ?? "Nill";
        $pdfform->AECC_Philosophy = $pdfform->AECC_Philosophy ?? "Nill";
        $pdfform->AECC_Pol_Science = $pdfform->AECC_Pol_Science ?? "Nill";
        $pdfform->AECC_Sociology = $pdfform->AECC_Sociology ?? "Nill";
        $pdfform->Hon_Sub_1 = $pdfform->Hon_Sub_1 ?? "Nill";
        $pdfform->Hon_Sub_2 = $pdfform->Hon_Sub_2 ?? "Nill";
        $pdfform->Hon_Sub_3 = $pdfform->Hon_Sub_3 ?? "Nill";
        $pdfform->Hon_Sub_4 = $pdfform->Hon_Sub_4 ?? "Nill";
        $pdfform->Hon_Sub_5 = $pdfform->Hon_Sub_5 ?? "Nill";
        $pdfform->General_Course_1 = $pdfform->General_Course_1 ?? "Nill";
        $pdfform->General_Course_2 = $pdfform->General_Course_2 ?? "Nill";
        $pdfform->General_Course_3 = $pdfform->General_Course_3 ?? "Nill";
        $pdfform->General_Course_4 = $pdfform->General_Course_4 ?? "Nill";
        $pdfform->General_Course_5 = $pdfform->General_Course_5 ?? "Nill";
  
        $pdf = PDF::loadView('backend.include.admision-form-pdf', ['data' => $pdfform])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->setPaper('a4')->download('application.pdf');

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function formedit($id)
    {
        $formedit = Admisionform::find($id);
        // dd($formedit);
        return view('backend.include.admision-form-edit', compact('formedit'));

    }

   

   

    public function updateStatus(Request $request)
    {
        $id = $request->iid;
     
        $status = $request->status;

        $statusUpdate = Admisionform::where('id', $id)->update(['status' => $status]);
        return redirect()->route('home')->with('success', 'Admission form Approved successfully.');
    }
    
    

 


    public function formupdate(Request $request)
    {
       
        $admisionform = Admisionform::findOrFail($request->id);
        // $admisionform->update($request->all());
        // dd($admisionform);
        $admisionform->user_id = $request->user()->id;
        $admisionform->fullname = $request->fullname;
        $admisionform->mobileno = $request->mobileno;
        $admisionform->dateofbirth = $request->dateofbirth;
        $admisionform->bloodgroup = $request->bloodgroup;
        $admisionform->email = $request->email;
        $admisionform->fathername = $request->fathername;
        $admisionform->mothername = $request->mothername;
        $admisionform->religion = $request->religion;
        $admisionform->motherphone = $request->motherphone;
        $admisionform->fatherphone = $request->fatherphone;
        $admisionform->fatheroccupation = $request->fatheroccupation;
        $admisionform->motheroccupation = $request->motheroccupation;
        $admisionform->permanentaddress = $request->permanentaddress;
        $admisionform->correspondentaddress = $request->correspondentaddress;
        $admisionform->localguardianname = $request->localguardianname;
        $admisionform->localguardianno = $request->localguardianno;
        $admisionform->category = $request->category;
        $admisionform->tribe = $request->tribe;
        $admisionform->postcode = $request->postcode;
        $admisionform->gender = $request->gender;
        $admisionform->country = $request->country;
        $admisionform->state = $request->state;
        $admisionform->hslcyear = $request->hslcyear;
        $admisionform->hslcrollno = $request->hslcrollno;
        $admisionform->hslcdivision = $request->hslcdivision;
        $admisionform->hslcpercentage = $request->hslcpercentage;
        $admisionform->hslcboard = $request->hslcboard;
        $admisionform->hsslcyear = $request->hsslcyear;
        $admisionform->hsslcrollno = $request->hsslcrollno;
        $admisionform->hsslcdivision = $request->hsslcdivision;
        $admisionform->hsslcpercentage = $request->hsslcpercentage;
        $admisionform->hsslcboard = $request->hsslcboard;
        $admisionform->schoolname = $request->schoolname;
        $admisionform->collegename = $request->collegename;
        $admisionform->schoollastattended = $request->schoollastattended;
        $admisionform->collegelastattended = $request->collegelastattended;
        $admisionform->boarduniversity = $request->boarduniversity;
        $admisionform->cerificateno = $request->cerificateno;
        $admisionform->certificatedate = $request->certificatedate;
        $admisionform->subject1 = $request->subject1;
        $admisionform->subject2 = $request->subject2;
        $admisionform->subject3 = $request->subject3;
        $admisionform->subject4 = $request->subject4;
        $admisionform->subject5 = $request->subject5;
        $admisionform->previouspercentage = $request->previouspercentage;
        $admisionform->previousgrade = $request->previousgrade;
        $admisionform->DSE_English = $request->DSE_English;
        $admisionform->DSE_History = $request->DSE_History;
        $admisionform->DSE_Philosophy = $request->DSE_Philosophy;
        $admisionform->DSE_Pol_Science = $request->DSE_Pol_Science;
        $admisionform->DSE_Sociology = $request->DSE_Sociology;
        $admisionform->GE_English = $request->GE_English;
        $admisionform->GE_History = $request->GE_History;
        $admisionform->GE_Philosophy = $request->GE_Philosophy;
        $admisionform->GE_Pol_Science = $request->GE_Pol_Science;
        $admisionform->GE_Sociology = $request->GE_Sociology;
        $admisionform->SEC_English = $request->SEC_English;
        $admisionform->SEC_History = $request->SEC_History;
        $admisionform->SEC_Philosophy = $request->SEC_Philosophy;
        $admisionform->SEC_Pol_Science = $request->SEC_Pol_Science;
        $admisionform->SEC_Sociology = $request->SEC_Sociology;
        $admisionform->AECC_English = $request->AECC_English;
        $admisionform->AECC_History = $request->AECC_History;
        $admisionform->AECC_Philosophy = $request->AECC_Philosophy;
        $admisionform->AECC_Pol_Science = $request->AECC_Pol_Science;
        $admisionform->AECC_Sociology = $request->AECC_Sociology;
        $admisionform->Hon_Sub_1 = $request->Hon_Sub_1;
        $admisionform->Hon_Sub_2 = $request->Hon_Sub_2;
        $admisionform->Hon_Sub_3 = $request->Hon_Sub_3;
        $admisionform->Hon_Sub_4 = $request->Hon_Sub_4;
        $admisionform->Hon_Sub_5 = $request->Hon_Sub_5;
        $admisionform->General_Course_1 = $request->General_Course_1;
        $admisionform->General_Course_2 = $request->General_Course_2;
        $admisionform->General_Course_3 = $request->General_Course_3;
        $admisionform->General_Course_4 = $request->General_Course_4;
        $admisionform->General_Course_5 = $request->General_Course_5;
        $admisionform->status = $request->status;
        // $formedit = $admisionform;

            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $photoName = $photo->getClientOriginalName();
                $photo->move('photo', $photoName);
                if ($request->has('old-photo')) {
                    $oldPhotoPath = public_path('photo/' . $request->input('old-photo'));
                    if (file_exists($oldPhotoPath)) {
                        unlink($oldPhotoPath); // Delete the old image file
                    }
                }
                $admisionform->photo = $photoName;
            }

        if ($request->hasFile('hsslcmarksheet')) {
            $hsslcmarksheet = $request->file('hsslcmarksheet');
            $hsslcmarksheetName = $hsslcmarksheet->getClientOriginalName(); 
            $hsslcmarksheet->move('hsslcmarksheet',$hsslcmarksheetName); 
            if ($request->has('old-hsslcmarksheet')) {
                $oldHsslcmarksheetPath = public_path('hsslcmarksheet/' . $request->input('old-hsslcmarksheet'));
                if (file_exists($oldHsslcmarksheetPath)) {
                    unlink($oldHsslcmarksheetPath); // Delete the old image file
                }
                $admisionform->hsslcmarksheet = $hsslcmarksheetName;
            }
        }

        if ($request->hasFile('hsslcadmitcard')) {
            $hsslcadmitcard = $request->file('hsslcadmitcard');
            $hsslcadmitcardName = $hsslcadmitcard->getClientOriginalName(); 
            $hsslcadmitcard->move('hsslcadmitcard',$hsslcadmitcardName); 
            if ($request->has('old-hsslcadmitcard')) {
                $oldHsslcadmitcardPath = public_path('hsslcadmitcard/' . $request->input('old-hsslcadmitcard'));
                if (file_exists($oldHsslcadmitcardPath)) {
                    unlink($oldHsslcadmitcardPath); // Delete the old image file
                }
                $admisionform->hsslcadmitcard = $hsslcadmitcardName;
            }
        }

        if ($request->file('birthcertificate')) {
            $birthcertificate = $request->file('birthcertificate');
            $birthcertificateName = $birthcertificate->getClientOriginalName(); 
            $birthcertificate->move('birthcertificate',$birthcertificateName); 
            if ($request->has('old-birthcertificate')) {
                $oldBirthcertificatePath = public_path('birthcertificate/' . $request->input('old-birthcertificate'));
                if (file_exists($oldBirthcertificatePath)) {
                    unlink($oldBirthcertificatePath); // Delete the old image file
                }
                $admisionform->birthcertificate = $birthcertificateName;
            }
        }


        if ($request->file('communitycertificate')) {
            $communitycertificate = $request->file('communitycertificate');
            $communitycertificateName = $communitycertificate->getClientOriginalName(); 
            $communitycertificate->move('communitycertificate',$communitycertificateName);
            if ($request->has('old-communitycertificate')) {
                $oldCommunitycertificatePath = public_path('communitycertificate/' . $request->input('old-communitycertificate'));
                if (file_exists($oldCommunitycertificatePath)) {
                    unlink($oldCommunitycertificatePath); // Delete the old image file
                }
                $admisionform->communitycertificate = $communitycertificateName;
            }
        }
        $admisionform->save();
// dd($admisionform);
     return redirect()->route('status')->with('success', 'Admission form has been updated successfully.');

    }

 


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admisionform $admisionform)
    {
        //
    }
}
