@extends('layouts.admin')

@section('content')

    <style>
        .add-product a{
            top: 26px;

        }
        </style>
   
   @php
   $usertype = Auth::user()->usertype;
   @endphp

    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                     
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                       
                                        <div class="review-content-section">
                                          
                                            <div id="dropzone1" class="pro-ad">
                                               <br>
                                               
                                               
                                                <form method="GET" action="{{ url('/admisionform-view') }}"
                                                    class="dropzone dropzone-custom needsclick add-professors"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" id="id"
                                                        value="{{ $form->user_id }}">
                                                        <br>
                                                    <div class="row">
                                                      
                                                        <div class="panel-body file-body incon-ctn-view">
                                                            <a href="{{ url('formPdf', $form->id) }}">
                                                                <i class="fa fa-file-pdf-o text-danger"></i></a>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                           
                                                            <div class="form-group">
                                                                <input name="fullname" type="text" class="form-control"
                                                                    value="{{ $form->fullname }}" placeholder="Full Name"
                                                                    disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="country" type="text" class="form-control"
                                                                value="{{ $form->country }}" placeholder="country"
                                                                disabled>
                                                               
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="mobileno" type="text" class="form-control"
                                                                    value="{{ $form->mobileno }}"
                                                                    placeholder="Telephone No. /Contact No" disabled>

                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="email" class="form-control"
                                                                    value="{{ $form->email }}" placeholder="Email" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fathername" class="form-control"
                                                                    value="{{ $form->fathername }}"
                                                                    placeholder="Father's Name" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fatherphone"
                                                                    class="form-control" value="{{ $form->fatherphone }}"
                                                                    placeholder="Father Contact Number" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fatheroccupation"
                                                                    value="{{ $form->fatheroccupation }}"
                                                                    class="form-control" placeholder="Father Occupation" disabled>
                                                            </div>

                                                            <div class="form-group res-mg-t-15">
                                                                <textarea name="permanentaddress" placeholder="Permanent Address" disabled>{{ $form->permanentaddress }}</textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    name="localguardianname"
                                                                    value="{{ $form->localguardianname }}"
                                                                    placeholder="Local Guardian’s Name" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="category"
                                                                    placeholder="Category" value="{{ $form->category }}" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="state" type="text" class="form-control"
                                                                value="{{ $form->state }}" placeholder="state"
                                                                disabled>

                                                            </div>

                                                            <h4>Year of Passing HSLC Examination</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hslcyear" value="{{ $form->hslcyear }}"
                                                                    placeholder="Year" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hslcrollno" value="{{ $form->hslcrollno }}"
                                                                    placeholder="Roll No" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hslcdivision }}" name="hslcdivision"
                                                                    placeholder="Division" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hslcpercentage }}"
                                                                    name="hslcpercentage" placeholder="Percentage" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hslcboard }}" name="hslcboard"
                                                                    placeholder="Board" disabled>
                                                            </div>

                                                            <h4>School/College</h4>

                                                            <div class="form-group">
                                                                <input name="schoolname" type="text"
                                                                    value="{{ $form->schoolname }}" class="form-control"
                                                                    placeholder="School Name" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="collegename" type="text"
                                                                    value="{{ $form->collegename }}" class="form-control"
                                                                    placeholder="College Name" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="schoollastattended" type="text"
                                                                    value="{{ $form->schoollastattended }}"
                                                                    class="form-control"
                                                                    placeholder="School last Attended last" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="collegelastattended" type="text"
                                                                    class="form-control"
                                                                    value="{{ $form->collegelastattended }}"
                                                                    placeholder="College last Attended last" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="boarduniversity" type="text"
                                                                    class="form-control"
                                                                    value="{{ $form->boarduniversity }}"
                                                                    placeholder="Board/University indicate" disabled>
                                                            </div>


                                                            <div class="form-group">
                                                                <input name="cerificateno" type="text"
                                                                    class="form-control"
                                                                    value="{{ $form->cerificateno }}"
                                                                    placeholder="Migration Certificate: No" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="certificatedate" type="text"
                                                                    class="form-control"
                                                                    value="{{ $form->certificatedate }}"
                                                                    placeholder="Migration Certificate: Date" disabled>
                                                            </div>
                                                        </div>

                                                        {{-- right --}}
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="dateofbirth" id="finish" type="text"
                                                                    value="{{ $form->dateofbirth }}" class="form-control"
                                                                    placeholder="Date of Birth" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="gender" type="text" class="form-control"
                                                                value="{{ $form->gender }}" placeholder="Gender"
                                                                disabled>
                                                              
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="bloodgroup" type="text" class="form-control"
                                                                value="{{ $form->bloodgroup }}" placeholder="Blood Group"
                                                                disabled>
                                                             
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="religion" type="text" class="form-control"
                                                                value="{{ $form->religion }}" placeholder="Religion"
                                                                disabled>
                                                           
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" name="mothername"
                                                                    value="{{ $form->mothername }}" class="form-control"
                                                                    placeholder="Mother's Name" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="motherphone"
                                                                    class="form-control" value="{{ $form->motherphone }}"
                                                                    placeholder="Mother Contact Number" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="motheroccupation"
                                                                    value="{{ $form->motheroccupation }}"
                                                                    class="form-control" placeholder="Mother Occupation" disabled>
                                                            </div>

                                                            <div class="form-group res-mg-t-15">
                                                                <textarea name="correspondentaddress" placeholder="Correspondent Address" disabled>{{ $form->correspondentaddress }}</textarea>
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    name="localguardianno"
                                                                    value="{{ $form->localguardianno }}"
                                                                    placeholder="Local Guardian’s Contact No" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="tribe"
                                                                    value="{{ $form->tribe }}" placeholder="Tribe" disabled>
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="postcode" id="postcode" type="text"
                                                                    value="{{ $form->postcode }}" class="form-control"
                                                                    placeholder="Postcode" disabled>
                                                            </div>

                                                            <h4>Year of Passing HSSLC/PU Examination</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hsslcyear }}" name="hsslcyear"
                                                                    placeholder="Year" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hsslcrollno }}" name="hsslcrollno"
                                                                    placeholder="Roll No" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hsslcdivision }}"
                                                                    name="hsslcdivision" placeholder="Division" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hsslcpercentage }}"
                                                                    name="hsslcpercentage" placeholder="Percentage" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hsslcboard }}" name="hsslcboard"
                                                                    placeholder="Board" disabled>
                                                            </div>

                                                            <h4>Marks secured in previous Exam</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->subject1 }}" name="subject1"
                                                                    placeholder="Subject: 1" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->subject2 }}" name="subject2"
                                                                    placeholder="Subject: 2" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->subject3 }}" name="subject3"
                                                                    placeholder="Subject: 3" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->subject4 }}" name="subject4"
                                                                    placeholder="Subject: 4" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->subject5 }}" name="subject5"
                                                                    placeholder="Subject: 5" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->previouspercentage }}"
                                                                    name="previouspercentage" placeholder="Percentage: %" disabled>
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->previousgrade }}"
                                                                    name="previousgrade" placeholder="Grade" disabled>
                                                            </div>

                                                        </div>

                                                        <center>
                                                            <h4>BA Degree Offered At Sche</h4>
                                                            <center>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Core Course</th>
                                                                                <th>English</th>
                                                                                <th>DSE-History</th>
                                                                                <th>DSE-Philosophy</th>
                                                                                <th>DSE-Pol-Science</th>
                                                                                <th>DSE-Sociology</th>
                                                                           
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> <h5 style="text-align: left">DSE</h5></td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="DSE_English" value="{{ $form->DSE_English }}" placeholder="E1.English" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="DSE_History"  value="{{ $form->DSE_History }}" placeholder="E1.History" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="DSE_Philosophy"  value="{{ $form->DSE_Philosophy }}" placeholder="E1.Philosophy" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="DSE_Pol_Science"  value="{{ $form->DSE_Pol_Science }}" placeholder="E1.Pol.Science" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="DSE_Sociology"  value="{{ $form->DSE_Sociology }}" placeholder="E1.Sociology" disabled>
                                                                                </td>
                                                                                {{-- <td>
                                                                                    <input type="text" class="form-control" name="previousgrade" placeholder="Grade">
                                                                                </td> --}}
                                                                            </tr>
                                                                        </tbody>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> <h5 style="text-align: left">GE</h5></td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="GE_English"  value="{{ $form->GE_English }}" placeholder="E2.English" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="GE_History"  value="{{ $form->GE_History }}" placeholder="E2.History" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="GE_Philosophy"  value="{{ $form->GE_Philosophy }}" placeholder="E2.Philosophy" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="GE_Pol_Science"  value="{{ $form->GE_Pol_Science }}" placeholder="E2.Pol.Science" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="GE_Sociology"  value="{{ $form->GE_Sociology }}" placeholder="E2.Sociology" disabled>
                                                                                </td>
                                                                             
                                                                            </tr>
                                                                        </tbody>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> <h5 style="text-align: left">SEC</h5></td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="SEC_English"  value="{{ $form->SEC_English }}" placeholder="E3.English" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="SEC_History"  value="{{ $form->SEC_History }}" placeholder="E3.History" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="SEC_Philosophy"  value="{{ $form->SEC_Philosophy }}" placeholder="E3.Philosophy" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="SEC_Pol_Science"  value="{{ $form->SEC_Pol_Science }}" placeholder="E3.Pol.Science" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="SEC_Sociology"  value="{{ $form->SEC_Sociology }}" placeholder="E3.Sociology" disabled>
                                                                                </td>
                                                                          
                                                                            </tr>
                                                                        </tbody>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> <h5 style="text-align: left">AECC</h5></td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="AECC_English"  value="{{ $form->AECC_English }}" placeholder="E4.English" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="AECC_History"  value="{{ $form->AECC_History }}" placeholder="E4.History" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="AECC_Philosophy"  value="{{ $form->AECC_Philosophy }}" placeholder="E4.Philosophy" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="AECC_Pol_Science"  value="{{ $form->AECC_Pol_Science }}" placeholder="E4.Pol.Science" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="AECC_Sociology"  value="{{ $form->AECC_Sociology }}" placeholder="E4.Sociology" disabled>
                                                                                </td>
                                                                            
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
    
    
                                                        {{-- selected subject --}}
                                                    
                                                       <center>
                                                        <h4 >Selected Subjects</h4>
                                                    </center>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <!-- Table header -->
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Course</th>
                                                                                <th>Honours</th>
                                                                                <th>Elective I</th>
                                                                                <th>Elective II</th>
                                                                                <th>Elective III</th>
                                                                                <th>Elective IV</th>
                                                                               
                                                                            </tr>
                                                                        </thead>
                                                                        <!-- Table body -->
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> <h5 style="text-align: left">Honours Subject</h5></td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_1"  value="{{ $form->Hon_Sub_1 }}" placeholder="Hon-Sub-1" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_2"  value="{{ $form->Hon_Sub_2 }}" placeholder="Hon-Sub-2" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_3"  value="{{ $form->Hon_Sub_3 }}" placeholder="Hon-Sub-3" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_4"  value="{{ $form->Hon_Sub_4 }}" placeholder="Hon-Sub-4" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_5"  value="{{ $form->Hon_Sub_5 }}" placeholder="Hon-Sub-4" disabled>
                                                                                </td>
                                                                               
                                                                               
                                                                            </tr>
                                                                        </tbody>
                                                                      
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> <h5 style="text-align: left">General Course</h5></td>
                                                                                
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_1"  value="{{ $form->General_Course_1 }}" placeholder="General-Course-1" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_2"  value="{{ $form->General_Course_2 }}" placeholder="General-Course-2" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_3"  value="{{ $form->General_Course_3 }}" placeholder="General-Course-3" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_4"  value="{{ $form->General_Course_4 }}" placeholder="General-Course-4" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_5"  value="{{ $form->General_Course_5 }}" placeholder="General-Course-5" disabled>
                                                                                </td>
                                                                               
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                 
                                                  
                                                              
                                                    </div>

                                                </form>

                                                @if($usertype=='Admin')
                                                <center>
                                                    <h4>STATUS</h4>
                                                </center>
                                                <form method="POST" action="{{ url('/updateStatus') }}" class="dropzone dropzone-custom needsclick add-professors" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $form->id }}">
                                                    <div class="form-group">
                                                        <select name="status" class="form-control">
                                                            <option value="Pending">Pending</option>
                                                            <option value="Approved">Approved</option>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <a class="btn btn-default btn-close" href="{{ route('home') }}">Cancel</a>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endif
                                            

                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <div id="extra-area-chart" style="height: 180px;"></div>

    {{-- validation --}}
    <!-- jquery
                          ============================================ -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
                          ============================================ -->
    <!-- datepicker JS
                          ============================================ -->
    <script src="{{ asset('js/datepicker/jquery-ui.min.js') }}"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
                          ============================================ -->
    <script src="{{ asset('js/form-validation/jquery.form.min.js') }}"></script>
    <script src="{{ asset('js/form-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/form-validation/form-active.js') }}"></script>



    {{-- new --}}
@endsection
