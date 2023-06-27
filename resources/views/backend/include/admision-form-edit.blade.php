@extends('layouts.admin')

@section('content')
<style>
    .control-label {
      text-align: left;
    }
  </style>
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
                            <li class="active"><a href="#description">Basic Information</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form method="POST" action="{{ url('/formupdate') }}"
                                                    class="dropzone dropzone-custom needsclick add-professors"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" id="id"
                                                        value="{{ $formedit->id }}">
                                                    <div class="row">
                                                        {{-- left --}}
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="fullname" type="text" class="form-control"
                                                                    value="{{ $formedit->fullname }}"
                                                                    placeholder="Full Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="country" class="form-control">
                                                                    <option value="none" disabled>Select country</option>
                                                                    <option value="India"
                                                                        {{ $formedit->country == 'India' ? 'selected' : '' }}>
                                                                        India</option>
                                                                    <option value="Pakistan"
                                                                        {{ $formedit->country == 'Pakistan' ? 'selected' : '' }}>
                                                                        Pakistan</option>
                                                                    <option value="America"
                                                                        {{ $formedit->country == 'America' ? 'selected' : '' }}>
                                                                        America</option>
                                                                    <option value="China"
                                                                        {{ $formedit->country == 'China' ? 'selected' : '' }}>
                                                                        China</option>
                                                                    <option value="Dubai"
                                                                        {{ $formedit->country == 'Dubai' ? 'selected' : '' }}>
                                                                        Dubai</option>
                                                                    <option value="Nepal"
                                                                        {{ $formedit->country == 'Nepal' ? 'selected' : '' }}>
                                                                        Nepal</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="mobileno" type="text" class="form-control"
                                                                    value="{{ $formedit->mobileno }}"
                                                                    placeholder="Telephone No. /Contact No">

                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="email" class="form-control"
                                                                    value="{{ $formedit->email }}" placeholder="Email">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fathername" class="form-control"
                                                                    value="{{ $formedit->fathername }}"
                                                                    placeholder="Father's Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fatherphone"
                                                                    class="form-control"
                                                                    value="{{ $formedit->fatherphone }}"
                                                                    placeholder="Father Contact Number">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fatheroccupation"
                                                                    value="{{ $formedit->fatheroccupation }}"
                                                                    class="form-control" placeholder="Father Occupation">
                                                            </div>

                                                            <div class="form-group res-mg-t-15">
                                                                <textarea name="permanentaddress" placeholder="Permanent Address">{{ $formedit->permanentaddress }}</textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    name="localguardianname"
                                                                    value="{{ $formedit->localguardianname }}"
                                                                    placeholder="Local Guardian’s Name">
                                                            </div>

                                                            

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="category"
                                                                    placeholder="Category"
                                                                    value="{{ $formedit->category }}">
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="state" class="form-control">
                                                                    <option value="">
                                                                        Select state</option>
                                                                    <option value="Gujarat"
                                                                        {{ $formedit->state == 'Gujarat' ? 'selected' : '' }}>
                                                                        Gujarat</option>
                                                                    <option value="Maharastra"
                                                                        {{ $formedit->state == 'Maharastra' ? 'selected' : '' }}>
                                                                        Maharastra</option>
                                                                    <option value="Rajastan"
                                                                        {{ $formedit->state == 'Rajastan' ? 'selected' : '' }}>
                                                                        Rajastan</option>
                                                                    <option value="TamilNadu"
                                                                        {{ $formedit->state == 'TamilNadu' ? 'selected' : '' }}>
                                                                        TamilNadu</option>
                                                                </select>

                                                            </div>

                                                            <h4>Year of Passing HSLC Examination</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" name="hslcyear"
                                                                    value="{{ $formedit->hslcyear }}" placeholder="Year">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hslcrollno" value="{{ $formedit->hslcrollno }}"
                                                                    placeholder="Roll No">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->hslcdivision }}"
                                                                    name="hslcdivision" placeholder="Division">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->hslcpercentage }}"
                                                                    name="hslcpercentage" placeholder="Percentage">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->hslcboard }}" name="hslcboard"
                                                                    placeholder="Board">
                                                            </div>

                                                            <h4>School/College</h4>

                                                            <div class="form-group">
                                                                <input name="schoolname" type="text"
                                                                    value="{{ $formedit->schoolname }}"
                                                                    class="form-control" placeholder="School Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="collegename" type="text"
                                                                    value="{{ $formedit->collegename }}"
                                                                    class="form-control" placeholder="College Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="schoollastattended" type="text"
                                                                    value="{{ $formedit->schoollastattended }}"
                                                                    class="form-control"
                                                                    placeholder="School last Attended last">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="collegelastattended" type="text"
                                                                    class="form-control"
                                                                    value="{{ $formedit->collegelastattended }}"
                                                                    placeholder="College last Attended last">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="boarduniversity" type="text"
                                                                    class="form-control"
                                                                    value="{{ $formedit->boarduniversity }}"
                                                                    placeholder="Board/University indicate">
                                                            </div>


                                                            <div class="form-group">
                                                                <input name="cerificateno" type="text"
                                                                    class="form-control"
                                                                    value="{{ $formedit->cerificateno }}"
                                                                    placeholder="Migration Certificate: No">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="certificatedate" type="text"
                                                                    class="form-control"
                                                                    value="{{ $formedit->certificatedate }}"
                                                                    placeholder="Migration Certificate: Date">
                                                            </div>
                                                        </div>

                                                        {{-- right --}}
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            {{-- <div class="form-group">
                                                                <input name="dateofbirth" id="finish" type="text"
                                                                    value="{{ $formedit->dateofbirth }}"
                                                                    class="form-control" placeholder="Date of Birth">
                                                            </div> --}}

                                                            <div class="form-group">
                                                                <input name="dateofbirth" id="finish" type="text"
                                                                value="{{ $formedit->dateofbirth }}"  class="form-control" placeholder="Date of Birth">
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="gender" class="form-control">
                                                                    <option value="">
                                                                        Select Gender</option>
                                                                    <option value="Male"
                                                                        {{ $formedit->gender == 'Male' ? 'selected' : '' }}>
                                                                        Male</option>
                                                                    <option value="Female"
                                                                        {{ $formedit->gender == 'Female' ? 'selected' : '' }}>
                                                                        Female</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="bloodgroup" class="form-control">
                                                                    <option value="">
                                                                        Select Blood Group</option>
                                                                    <option value="A+"
                                                                        {{ $formedit->bloodgroup == 'A+' ? 'selected' : '' }}>
                                                                        A+</option>
                                                                    <option value="A-"
                                                                        {{ $formedit->bloodgroup == 'A-' ? 'selected' : '' }}>
                                                                        A-</option>
                                                                    <option value="B+"
                                                                        {{ $formedit->bloodgroup == 'B+' ? 'selected' : '' }}>
                                                                        B+</option>
                                                                    <option value="AB+"
                                                                        {{ $formedit->bloodgroup == 'AB+' ? 'selected' : '' }}>
                                                                        AB+</option>
                                                                    <option value="AB-"
                                                                        {{ $formedit->bloodgroup == 'AB-' ? 'selected' : '' }}>
                                                                        AB-</option>
                                                                    <option value="O+"
                                                                        {{ $formedit->bloodgroup == 'O+' ? 'selected' : '' }}>
                                                                        O+</option>
                                                                    <option value="O-"
                                                                        {{ $formedit->bloodgroup == 'O-' ? 'selected' : '' }}>
                                                                        O-</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="religion" class="form-control">
                                                                    <option value="none" selected="" disabled="">
                                                                        Select Religion</option>
                                                                    <option value="Christian"
                                                                        {{ $formedit->religion == 'Christian' ? 'selected' : '' }}>
                                                                        Christian</option>
                                                                    <option value="Hindu"
                                                                        {{ $formedit->religion == 'Hindu' ? 'selected' : '' }}>
                                                                        Hindu</option>
                                                                    <option value="Muslim"
                                                                        {{ $formedit->religion == 'Muslim' ? 'selected' : '' }}>
                                                                        Muslim</option>
                                                                    <option value="Buddhist"
                                                                        {{ $formedit->religion == 'Buddhist' ? 'selected' : '' }}>
                                                                        Buddhist</option>
                                                                    <option value="Others"
                                                                        {{ $formedit->religion == 'Others' ? 'selected' : '' }}>
                                                                        Others</option>
                                                                </select>
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" name="mothername"
                                                                    value="{{ $formedit->mothername }}"
                                                                    class="form-control" placeholder="Mother's Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="motherphone"
                                                                    class="form-control"
                                                                    value="{{ $formedit->motherphone }}"
                                                                    placeholder="Mother Contact Number">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="motheroccupation"
                                                                    value="{{ $formedit->motheroccupation }}"
                                                                    class="form-control" placeholder="Mother Occupation">
                                                            </div>

                                                            <div class="form-group res-mg-t-15">
                                                                <textarea name="correspondentaddress" placeholder="Correspondent Address">{{ $formedit->correspondentaddress }}</textarea>
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    name="localguardianno"
                                                                    value="{{ $formedit->localguardianno }}"
                                                                    placeholder="Local Guardian’s Contact No">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="tribe"
                                                                    value="{{ $formedit->tribe }}" placeholder="Tribe">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="postcode" id="postcode" type="text"
                                                                    value="{{ $formedit->postcode }}"
                                                                    class="form-control" placeholder="Postcode">
                                                            </div>

                                                            <h4>Year of Passing HSSLC/PU Examination</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->hsslcyear }}" name="hsslcyear"
                                                                    placeholder="Year">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->hsslcrollno }}"
                                                                    name="hsslcrollno" placeholder="Roll No">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->hsslcdivision }}"
                                                                    name="hsslcdivision" placeholder="Division">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->hsslcpercentage }}"
                                                                    name="hsslcpercentage" placeholder="Percentage">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->hsslcboard }}" name="hsslcboard"
                                                                    placeholder="Board">
                                                            </div>

                                                            <h4>Marks secured in previous Exam</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->subject1 }}" name="subject1"
                                                                    placeholder="Subject: 1">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->subject2 }}" name="subject2"
                                                                    placeholder="Subject: 2">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->subject3 }}" name="subject3"
                                                                    placeholder="Subject: 3">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->subject4 }}" name="subject4"
                                                                    placeholder="Subject: 4">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->subject5 }}" name="subject5"
                                                                    placeholder="Subject: 5">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->previouspercentage }}"
                                                                    name="previouspercentage" placeholder="Percentage: %">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $formedit->previousgrade }}"
                                                                    name="previousgrade" placeholder="Grade">
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
                                                                                    <input type="text" class="form-control" name="DSE_History"  value="{{ $formedit->DSE_History }}" placeholder="E1.History">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="DSE_Philosophy"  value="{{ $formedit->DSE_Philosophy }}" placeholder="E1.Philosophy">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="DSE_Pol_Science"  value="{{ $formedit->DSE_Pol_Science }}" placeholder="E1.Pol.Science">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="DSE_Sociology"  value="{{ $formedit->DSE_Sociology }}" placeholder="E1.Sociology">
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
                                                                                    <input type="text" class="form-control" name="GE_English"  value="{{ $formedit->GE_English }}" placeholder="E2.English">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="GE_History"  value="{{ $formedit->GE_History }}" placeholder="E2.History">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="GE_Philosophy"  value="{{ $formedit->GE_Philosophy }}" placeholder="E2.Philosophy">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="GE_Pol_Science"  value="{{ $formedit->GE_Pol_Science }}" placeholder="E2.Pol.Science">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="GE_Sociology"  value="{{ $formedit->GE_Sociology }}" placeholder="E2.Sociology">
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
                                                                                    <input type="text" class="form-control" name="SEC_English"  value="{{ $formedit->SEC_English }}" placeholder="E3.English">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="SEC_History"  value="{{ $formedit->SEC_History }}" placeholder="E3.History">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="SEC_Philosophy"  value="{{ $formedit->SEC_Philosophy }}" placeholder="E3.Philosophy">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="SEC_Pol_Science"  value="{{ $formedit->SEC_Pol_Science }}" placeholder="E3.Pol.Science">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="SEC_Sociology"  value="{{ $formedit->SEC_Sociology }}" placeholder="E3.Sociology">
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
                                                                                    <input type="text" class="form-control" name="AECC_English"  value="{{ $formedit->AECC_English }}" placeholder="E4.English">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="AECC_History"  value="{{ $formedit->AECC_History }}" placeholder="E4.History">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="AECC_Philosophy"  value="{{ $formedit->AECC_Philosophy }}" placeholder="E4.Philosophy">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="AECC_Pol_Science"  value="{{ $formedit->AECC_Pol_Science }}" placeholder="E4.Pol.Science">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="AECC_Sociology"  value="{{ $formedit->AECC_Sociology }}" placeholder="E4.Sociology">
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
                                                                                    <input type="text" class="form-control" name="Hon_Sub_1"  value="{{ $formedit->Hon_Sub_1 }}" placeholder="Hon-Sub-1">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_2"  value="{{ $formedit->Hon_Sub_2 }}" placeholder="Hon-Sub-2">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_3"  value="{{ $formedit->Hon_Sub_3 }}" placeholder="Hon-Sub-3">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_4"  value="{{ $formedit->Hon_Sub_4 }}" placeholder="Hon-Sub-4">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="Hon_Sub_5"  value="{{ $formedit->Hon_Sub_5 }}" placeholder="Hon-Sub-4">
                                                                                </td>
                                                                               
                                                                               
                                                                            </tr>
                                                                        </tbody>
                                                                      
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> <h5 style="text-align: left">General Course</h5></td>
                                                                                
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_1"  value="{{ $formedit->General_Course_1 }}" placeholder="General-Course-1">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_2"  value="{{ $formedit->General_Course_2 }}" placeholder="General-Course-2">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_3"  value="{{ $formedit->General_Course_3 }}" placeholder="General-Course-3">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_4"  value="{{ $formedit->General_Course_4 }}" placeholder="General-Course-4">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" name="General_Course_5"  value="{{ $formedit->General_Course_5 }}" placeholder="General-Course-5">
                                                                                </td>
                                                                               
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        



                                                        <center>
                                                            <h4>File Upload</h4>
                                                            <center>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                    {{-- <div class="form-group">
                                                                        <label for="photo">Photo:</label>
                                                                        @if ($formedit->photo)
                                                                            <input type="file" class="form-control"
                                                                                id="photo" name="photo"
                                                                                accept="image/*" >
                                                                            <input type="hidden" name="old-photo"
                                                                                value="{{ $formedit->photo }}">
                                                                            <a href="{{ asset('photo/' . $formedit->photo) }}"
                                                                                target="_blank"
                                                                                class="btn btn-sm btn-secondary">
                                                                                <i class="fa fa-solid fa-file"></i>
                                                                                <span
                                                                                    class="img-title">{{ $formedit->photo }}</span>
                                                                            </a>
                                                                            
                                                                        @endif
                                                                    </div> --}}

                                                                    <div class="form-group">
                                                                        <label for="photo">Photo:</label>
                                                                        @if ($formedit->photo)
                                                                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                                                                            <input type="hidden" name="old-photo" value="{{ $formedit->photo }}">
                                                                            <a href="{{ asset('photo/' . $formedit->photo) }}" target="_blank" class="btn btn-sm btn-secondary">
                                                                                <i class="fa fa-solid fa-file"></i>
                                                                                <span class="img-title">{{ $formedit->photo }}</span>
                                                                            </a>
                                                                        @else
                                                                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                                                                        @endif
                                                                    </div>
                                                                    

                                                                    
                                                                    <div class="form-group">
                                                                        <label for="hsslcmarksheet"
                                                                            class="control-label">HSLC & HSSLC Examination
                                                                            Mark Sheets</label>
                                                                        @if ($formedit->hsslcmarksheet)
                                                                            <input type="file" class="form-control"
                                                                                id="hsslcmarksheet" name="hsslcmarksheet"
                                                                                accept="image/*">
                                                                            <input type="hidden"
                                                                                name="old-hsslcmarksheet"
                                                                                value="{{ $formedit->hsslcmarksheet }}">
                                                                            <a href="{{ asset('hsslcmarksheet/' . $formedit->hsslcmarksheet) }}"
                                                                                target="_blank"
                                                                                class="btn btn-sm btn-secondary">
                                                                                <i class="fa fa-solid fa-file"></i>
                                                                                <span
                                                                                    class="img-title">{{ $formedit->hsslcmarksheet }}</span>
                                                                            </a>
                                                                        @else
                                                                            <input type="file" class="form-control"
                                                                                id="hsslcmarksheet" name="hsslcmarksheet"
                                                                                accept="image/*">
                                                                        @endif
                                                                    </div>

                                                                </div>
                                                                {{-- </div> --}}

                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                                                                    <div class="form-group">
                                                                        <label for="hsslcadmitcard"
                                                                            class="control-label">HSSLC & HSSLC Examination
                                                                            Admit Card</label>
                                                                        @if ($formedit->hsslcadmitcard)
                                                                            <input type="file" class="form-control"
                                                                                id="hsslcadmitcard" name="hsslcadmitcard"
                                                                                accept="image/*">
                                                                            <input type="hidden"
                                                                                name="old-hsslcadmitcard"
                                                                                value="{{ $formedit->hsslcadmitcard }}">
                                                                                <a href="{{ asset('hsslcadmitcard/' . $formedit->hsslcadmitcard) }}"
                                                                                    target="_blank"
                                                                                    class="btn btn-sm btn-secondary">
                                                                                    <i class="fa fa-solid fa-file"></i>
                                                                                    <span
                                                                                        class="img-title">{{ $formedit->hsslcadmitcard }}</span>
                                                                                </a>
                                                                        @else
                                                                            <input type="file" class="form-control"
                                                                                id="hsslcadmitcard" name="hsslcadmitcard"
                                                                                accept="image/*">
                                                                        @endif
                                                                    </div>



                                                                    <div class="form-group">
                                                                        <label for="birthcertificate"
                                                                            class="control-label">Birth Certificate</label>
                                                                        @if ($formedit->birthcertificate)
                                                                            <input type="file" class="form-control"
                                                                                id="birthcertificate"
                                                                                name="birthcertificate" accept="image/*">
                                                                            <input type="hidden"
                                                                                name="old-birthcertificate"
                                                                                value="{{ $formedit->birthcertificate }}">
                                                                            <a href="{{ asset('birthcertificate/' . $formedit->birthcertificate) }}"
                                                                                target="_blank"
                                                                                class="btn btn-sm btn-secondary">
                                                                                <i class="fa fa-solid fa-file"></i>
                                                                                <span
                                                                                    class="img-title">{{ $formedit->birthcertificate }}</span>
                                                                            </a>
                                                                        @else
                                                                            <input type="file" class="form-control"
                                                                                id="birthcertificate"
                                                                                name="birthcertificate" accept="image/*">
                                                                        @endif
                                                                    </div>
                                                                    


                                                                    <div class="form-group">
                                                                        <label for="communitycertificate"
                                                                            class="control-label">Schedule
                                                                            Tribe/Community</label>
                                                                        @if ($formedit->communitycertificate)
                                                                            <input type="file" class="form-control"
                                                                                id="communitycertificate"
                                                                                name="communitycertificate"
                                                                                accept="image/*">
                                                                            <input type="hidden"
                                                                                name="old-communitycertificate"
                                                                                value="{{ $formedit->communitycertificate }}">
                                                                            <a href="{{ asset('communitycertificate/' . $formedit->communitycertificate) }}"
                                                                                target="_blank"
                                                                                class="btn btn-sm btn-secondary">
                                                                                <i class="fa fa-solid fa-file"></i>
                                                                                <span
                                                                                    class="img-title">{{ $formedit->communitycertificate }}</span>
                                                                            </a>
                                                                        @else
                                                                            <input type="file" class="form-control"
                                                                                id="communitycertificate"
                                                                                name="communitycertificate"
                                                                                accept="image/*">
                                                                        @endif
                                                                    </div>


                                                                </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <a href="{{ route('status') }}">
                                                                    <button
                                                                        class="btn btn-default btn-close">Cancel</button>
                                                                </a>
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light">Update</button>
                                                            </div>
                                                        </div>

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
@endsection
