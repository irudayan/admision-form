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
    public function index(Request $request)
    {
        $usertype = Auth::user()->usertype;
        $userId = Admisionform::where('user_id', Auth::user()->id)->all();
dd($userId);

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
        $userId = Admisionform::where('user_id', Auth::user()->id)->first();

        if (empty($userId)) {
            return view ('backend.include.admision-form');
        } else {
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
        $addform->fullname = $request->input('fullname');
        $addform->mobileno = $request->input('mobileno');
        $addform->dateofbirth = $request->input('dateofbirth');
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
        $addform->category = $request->input('category');
        $addform->tribe = $request->input('tribe');
        $addform->postcode = $request->input('postcode');
        $addform->gender = $request->input('gender');
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
        $addform->schoolname = $request->input('schoolname');
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
        $addform->previousgrade = $request->input('previousgrade');
        $addform->DSE_English = $request->input('DSE_English');
        $addform->DSE_History = $request->input('DSE_History');
        $addform->DSE_Philosophy = $request->input('DSE_Philosophy');
        $addform->DSE_Pol_Science = $request->input('DSE_Pol_Science');
        $addform->DSE_Sociology = $request->input('DSE_Sociology');
        $addform->GE_English = $request->input('GE_English');
        $addform->GE_History = $request->input('GE_History');
        $addform->GE_Philosophy = $request->input('GE_Philosophy');
        $addform->GE_Pol_Science = $request->input('GE_Pol_Science');
        $addform->GE_Sociology = $request->input('GE_Sociology');
        $addform->SEC_English = $request->input('SEC_English');
        $addform->SEC_History = $request->input('SEC_History');
        $addform->SEC_Philosophy = $request->input('SEC_Philosophy');
        $addform->SEC_Pol_Science = $request->input('SEC_Pol_Science');
        $addform->SEC_Sociology = $request->input('SEC_Sociology');
        $addform->AECC_English = $request->input('AECC_English');
        $addform->AECC_History = $request->input('AECC_History');
        $addform->AECC_Philosophy = $request->input('AECC_Philosophy');
        $addform->AECC_Pol_Science = $request->input('AECC_Pol_Science');
        $addform->AECC_Sociology = $request->input('AECC_Sociology');
        $addform->Hon_Sub_1 = $request->input('Hon_Sub_1');
        $addform->Hon_Sub_2 = $request->input('Hon_Sub_2');
        $addform->Hon_Sub_3 = $request->input('Hon_Sub_3');
        $addform->Hon_Sub_4 = $request->input('Hon_Sub_4');
        $addform->Hon_Sub_5 = $request->input('Hon_Sub_5');
        $addform->General_Course_1 = $request->input('General_Course_1');
        $addform->General_Course_2 = $request->input('General_Course_2');
        $addform->General_Course_3 = $request->input('General_Course_3');
        $addform->General_Course_4 = $request->input('General_Course_4');
        $addform->General_Course_5 = $request->input('General_Course_5');

        

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
    public function formview(Admisionform $admisionform)
    {

        $form = Admisionform::where('user_id', Auth::user()->id)->first();

        if (empty($form)) {
            return view ('backend.include.admision-form');
        } else {
            $form->DSE_English = $form->DSE_English ?? "Nill";
            $form->DSE_History = $form->DSE_History ?? "Nill";
            $form->DSE_Philosophy = $form->DSE_Philosophy ?? "Nill";
            $form->DSE_Pol_Science = $form->DSE_Pol_Science ?? "Nill";
            $form->DSE_Sociology = $form->DSE_Sociology ?? "Nill";
            $form->GE_English = $form->GE_English ?? "Nill";
            $form->GE_History = $form->GE_History ?? "Nill";
            $form->GE_Philosophy = $form->GE_Philosophy ?? "Nill";
            $form->GE_Pol_Science = $form->GE_Pol_Science ?? "Nill";
            $form->SEC_English = $form->SEC_English ?? "Nill";
            $form->SEC_History = $form->SEC_History ?? "Nill";
            $form->SEC_Philosophy = $form->SEC_Philosophy ?? "Nill";
            $form->SEC_Pol_Science = $form->SEC_Pol_Science ?? "Nill";
            $form->SEC_Sociology = $form->SEC_Sociology ?? "Nill";
            $form->AECC_English = $form->AECC_English ?? "Nill";
            $form->AECC_History = $form->AECC_History ?? "Nill";
            $form->AECC_Philosophy = $form->AECC_Philosophy ?? "Nill";
            $form->AECC_Pol_Science = $form->AECC_Pol_Science ?? "Nill";
            $form->AECC_Sociology = $form->AECC_Sociology ?? "Nill";
            $form->Hon_Sub_1 = $form->Hon_Sub_1 ?? "Nill";
            $form->Hon_Sub_2 = $form->Hon_Sub_2 ?? "Nill";
            $form->Hon_Sub_3 = $form->Hon_Sub_3 ?? "Nill";
            $form->Hon_Sub_4 = $form->Hon_Sub_4 ?? "Nill";
            $form->Hon_Sub_5 = $form->Hon_Sub_5 ?? "Nill";
            $form->General_Course_1 = $form->General_Course_1 ?? "Nill";
            $form->General_Course_2 = $form->General_Course_2 ?? "Nill";
            $form->General_Course_3 = $form->General_Course_3 ?? "Nill";
            $form->General_Course_4 = $form->General_Course_4 ?? "Nill";
            $form->General_Course_5 = $form->General_Course_5 ?? "Nill";
        return view('backend.include.admision-form-view', compact('form'));
            
        }           
    }

    public function formPdf(Admisionform $admisionform)
    {
        $pdfform = Admisionform::where('user_id', Auth::user()->id)->first();

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


    public function formupdate(Request $request)
    {
       
        $admisionform = Admisionform::findOrFail($request->id);
        // $admisionform->update($request->all());
        $admisionform->user_id = $request->user()->id;
        $admisionform->fullname = $request->input('fullname');
        $admisionform->mobileno = $request->input('mobileno');
        $admisionform->dateofbirth = $request->input('dateofbirth');
        $admisionform->bloodgroup = $request->input('bloodgroup');
        $admisionform->email = $request->input('email');
        $admisionform->fathername = $request->input('fathername');
        $admisionform->mothername = $request->input('mothername');
        $admisionform->religion = $request->input('religion');
        $admisionform->motherphone = $request->input('motherphone');
        $admisionform->fatherphone = $request->input('fatherphone');
        $admisionform->fatheroccupation = $request->input('fatheroccupation');
        $admisionform->motheroccupation = $request->input('motheroccupation');
        $admisionform->permanentaddress = $request->input('permanentaddress');
        $admisionform->correspondentaddress = $request->input('correspondentaddress');
        $admisionform->localguardianname = $request->input('localguardianname');
        $admisionform->localguardianno = $request->input('localguardianno');
        $admisionform->category = $request->input('category');
        $admisionform->tribe = $request->input('tribe');
        $admisionform->postcode = $request->input('postcode');
        $admisionform->gender = $request->input('gender');
        $admisionform->country = $request->input('country');
        $admisionform->state = $request->input('state');
        $admisionform->hslcyear = $request->input('hslcyear');
        $admisionform->hslcrollno = $request->input('hslcrollno');
        $admisionform->hslcdivision = $request->input('hslcdivision');
        $admisionform->hslcpercentage = $request->input('hslcpercentage');
        $admisionform->hslcboard = $request->input('hslcboard');
        $admisionform->hsslcyear = $request->input('hsslcyear');
        $admisionform->hsslcrollno = $request->input('hsslcrollno');
        $admisionform->hsslcdivision = $request->input('hsslcdivision');
        $admisionform->hsslcpercentage = $request->input('hsslcpercentage');
        $admisionform->hsslcboard = $request->input('hsslcboard');
        $admisionform->schoolname = $request->input('schoolname');
        $admisionform->collegename = $request->input('collegename');
        $admisionform->schoollastattended = $request->input('schoollastattended');
        $admisionform->collegelastattended = $request->input('collegelastattended');
        $admisionform->boarduniversity = $request->input('boarduniversity');
        $admisionform->cerificateno = $request->input('cerificateno');
        $admisionform->certificatedate = $request->input('certificatedate');
        $admisionform->subject1 = $request->input('subject1');
        $admisionform->subject2 = $request->input('subject2');
        $admisionform->subject3 = $request->input('subject3');
        $admisionform->subject4 = $request->input('subject4');
        $admisionform->subject5 = $request->input('subject5');
        $admisionform->previouspercentage = $request->input('previouspercentage');
        $admisionform->previousgrade = $request->input('previousgrade');
        $admisionform->DSE_English = $request->input('DSE_English');
        $admisionform->DSE_History = $request->input('DSE_History');
        $admisionform->DSE_Philosophy = $request->input('DSE_Philosophy');
        $admisionform->DSE_Pol_Science = $request->input('DSE_Pol_Science');
        $admisionform->DSE_Sociology = $request->input('DSE_Sociology');
        $admisionform->GE_English = $request->input('GE_English');
        $admisionform->GE_History = $request->input('GE_History');
        $admisionform->GE_Philosophy = $request->input('GE_Philosophy');
        $admisionform->GE_Pol_Science = $request->input('GE_Pol_Science');
        $admisionform->GE_Sociology = $request->input('GE_Sociology');
        $admisionform->SEC_English = $request->input('SEC_English');
        $admisionform->SEC_History = $request->input('SEC_History');
        $admisionform->SEC_Philosophy = $request->input('SEC_Philosophy');
        $admisionform->SEC_Pol_Science = $request->input('SEC_Pol_Science');
        $admisionform->SEC_Sociology = $request->input('SEC_Sociology');
        $admisionform->AECC_English = $request->input('AECC_English');
        $admisionform->AECC_History = $request->input('AECC_History');
        $admisionform->AECC_Philosophy = $request->input('AECC_Philosophy');
        $admisionform->AECC_Pol_Science = $request->input('AECC_Pol_Science');
        $admisionform->AECC_Sociology = $request->input('AECC_Sociology');
        $admisionform->Hon_Sub_1 = $request->input('Hon_Sub_1');
        $admisionform->Hon_Sub_2 = $request->input('Hon_Sub_2');
        $admisionform->Hon_Sub_3 = $request->input('Hon_Sub_3');
        $admisionform->Hon_Sub_4 = $request->input('Hon_Sub_4');
        $admisionform->Hon_Sub_5 = $request->input('Hon_Sub_5');
        $admisionform->General_Course_1 = $request->input('General_Course_1');
        $admisionform->General_Course_2 = $request->input('General_Course_2');
        $admisionform->General_Course_3 = $request->input('General_Course_3');
        $admisionform->General_Course_4 = $request->input('General_Course_4');
        $admisionform->General_Course_5 = $request->input('General_Course_5');
        $formedit = $admisionform;

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
