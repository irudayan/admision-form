@extends('layouts.admin')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Admision Form</a></li>
                            {{-- <li><a href="#reviews"> Status</a></li> --}}

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">

                                                <form method="GET" action="{{ url('/admisionform-view') }}"
                                                    class="dropzone dropzone-custom needsclick add-professors"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" id="id"
                                                        value="{{ $form->user_id }}">
                                                    <div class="row">
                                                        {{-- left --}}

                                                      
                                                        {{-- "{{ asset('logo/logo.JPG') }} --}}



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
                                                                {{-- <select name="country" class="form-control">
                                                                    <option value="none" disabled>Select country</option>
                                                                    <option value="India"
                                                                        {{ $form->country == 'India' ? 'selected' : '' }}>
                                                                        India</option>
                                                                    <option value="Pakistan"
                                                                        {{ $form->country == 'Pakistan' ? 'selected' : '' }}>
                                                                        Pakistan</option>
                                                                    <option value="America"
                                                                        {{ $form->country == 'America' ? 'selected' : '' }}>
                                                                        America</option>
                                                                    <option value="China"
                                                                        {{ $form->country == 'China' ? 'selected' : '' }}>
                                                                        China</option>
                                                                    <option value="Dubai"
                                                                        {{ $form->country == 'Dubai ' ? 'selected' : '' }}>
                                                                        Dubai</option>
                                                                    <option value="Nepal"
                                                                        {{ $form->country == 'Nepal' ? 'selected' : '' }}>
                                                                        Nepal</option>
                                                                </select> --}}
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

                                                                {{-- <select name="state" class="form-control">
                                                                    <option value="none" selected="" disabled="">
                                                                        Select state</option>
                                                                    <option value="Gujarat"
                                                                        {{ $form->state == 'Gujarat' ? 'selected' : '' }}>
                                                                        Gujarat</option>
                                                                    <option value="Maharastra"
                                                                        {{ $form->state == 'Maharastra' ? 'selected' : '' }}>
                                                                        Maharastra</option>
                                                                    <option value="Rajastan"
                                                                        {{ $form->state == 'Rajastan' ? 'selected' : '' }}>
                                                                        Rajastan</option>
                                                                    <option value="TamilNadu"
                                                                        {{ $form->state == 'TamilNadu' ? 'selected' : '' }}>
                                                                        TamilNadu</option>
                                                                </select> --}}


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
                                                                {{-- <select name="gender" class="form-control">
                                                                    <option value="">
                                                                        Select Gender</option>
                                                                    <option value="Male"
                                                                        {{ $form->gender == 'Male' ? 'selected' : '' }}>
                                                                        Male</option>
                                                                    <option value="Female"
                                                                        {{ $form->gender == 'Female' ? 'selected' : '' }}>
                                                                        Female</option>
                                                                </select> --}}
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="bloodgroup" type="text" class="form-control"
                                                                value="{{ $form->bloodgroup }}" placeholder="Blood Group"
                                                                disabled>
                                                                {{-- <select name="bloodgroup" class="form-control">
                                                                    <option value="">Select Blood Group</option>
                                                                    <option value="A+"
                                                                        {{ $form->bloodgroup == 'A+' ? 'selected' : '' }}>
                                                                        A+</option>
                                                                    <option value="A-"
                                                                        {{ $form->bloodgroup == 'A-' ? 'selected' : '' }}>
                                                                        A-</option>
                                                                    <option value="B+"
                                                                        {{ $form->bloodgroup == 'B+' ? 'selected' : '' }}>
                                                                        B+</option>
                                                                    <option value="AB+"
                                                                        {{ $form->bloodgroup == 'AB+' ? 'selected' : '' }}>
                                                                        AB+</option>
                                                                    <option value="AB-"
                                                                        {{ $form->bloodgroup == 'AB-' ? 'selected' : '' }}>
                                                                        AB-</option>
                                                                    <option value="O+"
                                                                        {{ $form->bloodgroup == 'O+' ? 'selected' : '' }}>
                                                                        O+</option>
                                                                    <option value="O-"
                                                                        {{ $form->bloodgroup == 'O-' ? 'selected' : '' }}>
                                                                        O-</option>
                                                                </select> --}}
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="religion" type="text" class="form-control"
                                                                value="{{ $form->religion }}" placeholder="Religion"
                                                                disabled>
                                                                {{-- <select name="religion" class="form-control">
                                                                    <option value="">
                                                                        Select Religion</option>
                                                                    <option value="Christian"
                                                                        {{ $form->religion == 'Christian' ? 'selected' : '' }}>
                                                                        Christian</option>
                                                                    <option value="Hindu"
                                                                        {{ $form->religion == 'Hindu' ? 'selected' : '' }}>
                                                                        Hindu</option>
                                                                    <option value="Muslim"
                                                                        {{ $form->religion == 'Muslim' ? 'selected' : '' }}>
                                                                        Muslim</option>
                                                                    <option value="Buddhist"
                                                                        {{ $form->religion == 'Buddhist' ? 'selected' : '' }}>
                                                                        Buddhist</option>
                                                                    <option value="Others"
                                                                        {{ $form->religion == 'Others' ? 'selected' : '' }}>
                                                                        Others</option>
                                                                </select> --}}
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
                                                                                {{-- <th>Generl: English I &II 
                                                                                    DSC I&II A,B, MIL-I,II
                                                                                    </th> --}}
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> <h5 style="text-align: left">DSE</h5></td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="DSE_English" placeholder="E1.English">
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
                                                                                {{-- <td>
                                                                                    <input type="text" class="form-control" name="previousgrade" placeholder="Grade">
                                                                                </td> --}}
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
                                                                                {{-- <td>
                                                                                    <input type="text" class="form-control" name="previousgrade" placeholder="Grade">
                                                                                </td> --}}
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
                                                                                {{-- <td>
                                                                                    <input type="text" class="form-control" name="previousgrade" placeholder="Grade">
                                                                                </td> --}}
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
                                                                                    <input type="text" class="form-control" name="Hon_Sub_1"  value="{{ $form->hsslcmarksheet }}" placeholder="Hon-Sub-1" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_2"  value="{{ $form->hsslcmarksheet }}" placeholder="Hon-Sub-2" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_3"  value="{{ $form->hsslcmarksheet }}" placeholder="Hon-Sub-3" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_4"  value="{{ $form->hsslcmarksheet }}" placeholder="Hon-Sub-4" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_5"  value="{{ $form->hsslcmarksheet }}" placeholder="Hon-Sub-4" disabled>
                                                                                </td>
                                                                               
                                                                               
                                                                            </tr>
                                                                        </tbody>
                                                                      
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> <h5 style="text-align: left">General Course</h5></td>
                                                                                
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_1"  value="{{ $form->hsslcmarksheet }}" placeholder="General-Course-1" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_2"  value="{{ $form->hsslcmarksheet }}" placeholder="General-Course-2" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_3"  value="{{ $form->hsslcmarksheet }}" placeholder="General-Course-3" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_4"  value="{{ $form->hsslcmarksheet }}" placeholder="General-Course-4" disabled>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_5"  value="{{ $form->hsslcmarksheet }}" placeholder="General-Course-5" disabled>
                                                                                </td>
                                                                               
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- <center>
                                                            <h4>File Upload</h4>
                                                            <center> --}}
                                                                {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label for="photo" class="control-label"
                                                                            style="text-align: left">Photo</label>
                                                                        <input type="file" class="form-control"
                                                                            id="photo" name="photo"
                                                                            value="{{ $form->photo }}" accept="image/*">
                                                                            <a href="{{ asset('photo/' . $form->photo) }}"
                                                                                target="_blank"
                                                                                class="btn btn-sm btn-secondary">
                                                                                <i class="fa fa-solid fa-file"></i>
                                                                                <span
                                                                                    class="img-title">{{ $form->photo }}</span>
                                                                            </a>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="hsslcmarksheet"
                                                                            class="control-label">HSLC & HSSLC Examination
                                                                            Mark Sheets</label>
                                                                        <input type="file" class="form-control"
                                                                            id="hsslcmarksheet" name="hsslcmarksheet"
                                                                            value="{{ $form->hsslcmarksheet }}"
                                                                            accept="image/*">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label for="hsslcadmitcard"
                                                                            class="control-label">HSSLC & HSSLC Examination
                                                                            Admit Card</label>
                                                                        <input type="file" class="form-control"
                                                                            id="hsslcadmitcard" name="hsslcadmitcard"
                                                                            placeholder="photo" accept="image/*"
                                                                            value="{{ $form->hsslcadmitcard }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="birthcertificate"
                                                                            class="control-label">Birth Certificate</label>
                                                                        <input type="file" class="form-control"
                                                                            id="birthcertificate" name="birthcertificate"
                                                                            value="{{ $form->birthcertificate }}"
                                                                            accept="image/*">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="communitycertificate"
                                                                            class="control-label">Schedule Tribe/Community
                                                                            Certificate</label>
                                                                        <input type="file" class="form-control"
                                                                            value="{{ $form->communitycertificate }}"
                                                                            name="communitycertificate" accept="image/*">
                                                                    </div>
                                                                </div> --}}
                                                    </div>

                                                </form>
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
