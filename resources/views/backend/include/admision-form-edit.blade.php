@extends('layouts.admin')

@section('content')
@if(session('success'))
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
                                                    <input type="hidden" name="id" id="id" value="{{ $formedit->id }}">
                                                    <div class="row">
                                                        {{-- left --}}
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="fullname" type="text" class="form-control"
                                                                value="{{$formedit->fullname}}"  placeholder="Full Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="country" class="form-control">
                                                                    <option value="none" disabled>Select country</option>
                                                                    <option value="India" {{$formedit->country == 'India' ? 'selected' : ''}}>India</option>
                                                                    <option value="Pakistan" {{$formedit->country == 'Pakistan' ? 'selected' : ''}}>Pakistan</option>
                                                                    <option value="America" {{$formedit->country == 'America' ? 'selected' : ''}}>America</option>
                                                                    <option value="China" {{$formedit->country == 'China' ? 'selected' : ''}}>China</option>
                                                                    <option value="Dubai" {{$formedit->country == 'Dubai' ? 'selected' : ''}}>Dubai</option>
                                                                    <option value="Nepal" {{$formedit->country == 'Nepal' ? 'selected' : ''}}>Nepal</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="mobileno" type="text" class="form-control"
                                                                value="{{$formedit->mobileno}}"  placeholder="Telephone No. /Contact No">
                                                              
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="email" class="form-control"
                                                                value="{{$formedit->email}}"  placeholder="Email">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fathername" class="form-control"
                                                                value="{{$formedit->fathername}}"  placeholder="Father's Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fatherphone"
                                                                    class="form-control" value="{{$formedit->fatherphone}}"
                                                                    placeholder="Father Contact Number">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fatheroccupation" value="{{$formedit->fatheroccupation}}"
                                                                    class="form-control" placeholder="Father Occupation">
                                                            </div>

                                                            <div class="form-group res-mg-t-15">
                                                                <textarea name="permanentaddress" placeholder="Permanent Address">{{$formedit->permanentaddress}}</textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    name="localguardianname" value="{{$formedit->localguardianname}}"
                                                                    placeholder="Local Guardian’s Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="category"
                                                                    placeholder="Category" value="{{$formedit->Category}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="state" class="form-control">
                                                                    <option value="" >
                                                                        Select state</option>
                                                                    <option value="Gujarat" {{$formedit->state == 'Gujarat' ? 'selected' : ''}}>Gujarat</option>
                                                                    <option value="Maharastra" {{ $formedit->state  == 'Maharastra' ? 'selected' : '' }} >Maharastra</option>
                                                                    <option value="Rajastan" {{ $formedit->state == 'Rajastan' ? 'selected' : '' }}>Rajastan</option>
                                                                    <option value="TamilNadu" {{ $formedit->state == 'TamilNadu' ? 'selected' : '' }}>TamilNadu</option>
                                                                </select>
                                                            
                                                            </div>

                                                            <h4>Year of Passing HSLC Examination</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" name="hslcyear" value="{{$formedit->hslcyear}}"
                                                                    placeholder="Year">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" name="hslcrollno" value="{{$formedit->hslcrollno}}"
                                                                    placeholder="Roll No">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->hslcdivision}}"
                                                                    name="hslcdivision" placeholder="Division">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->hslcpercentage}}"
                                                                    name="hslcpercentage" placeholder="Percentage">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->hslcboard}}"
                                                                    name="hslcboard" placeholder="Board">
                                                            </div>

                                                            <h4>School/College</h4>

                                                            <div class="form-group">
                                                                <input name="schoolname" type="text" value="{{$formedit->schoolname}}"
                                                                    class="form-control" placeholder="School Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="collegename" type="text" value="{{$formedit->collegename}}"
                                                                    class="form-control" placeholder="College Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="schoollastattended" type="text" value="{{$formedit->schoollastattended}}"
                                                                    class="form-control"
                                                                    placeholder="School last Attended last">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="collegelastattended" type="text"
                                                                    class="form-control" value="{{$formedit->collegelastattended}}"
                                                                    placeholder="College last Attended last">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="boarduniversity" type="text"
                                                                    class="form-control" value="{{$formedit->boarduniversity}}"
                                                                    placeholder="Board/University indicate">
                                                            </div>


                                                            <div class="form-group">
                                                                <input name="cerificateno" type="text"
                                                                    class="form-control" value="{{$formedit->cerificateno}}"
                                                                    placeholder="Migration Certificate: No">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="certificatedate" type="text"
                                                                    class="form-control" value="{{$formedit->certificatedate}}"
                                                                    placeholder="Migration Certificate: Date">
                                                            </div>
                                                        </div>

                                                        {{-- right --}}
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="dateofbirth" id="finish" type="text" value="{{$formedit->dateofbirth}}"
                                                                    class="form-control" placeholder="Date of Birth">
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="gender" class="form-control">
                                                                    <option value="">
                                                                        Select Gender</option>
                                                                    <option value="Male" {{ $formedit->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                                    <option value="Female" {{ $formedit->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="bloodgroup" class="form-control">
                                                                    <option value="" >
                                                                        Select Blood Group</option>
                                                                    <option value="A+" {{ $formedit->bloodgroup == 'A+' ? 'selected' : '' }}>A+</option>
                                                                    <option value="A-" {{ $formedit->bloodgroup == 'A-' ? 'selected' : '' }}>A-</option>
                                                                    <option value="B+" {{ $formedit->bloodgroup == 'B+' ? 'selected' : '' }}>B+</option>
                                                                    <option value="AB+" {{ $formedit->bloodgroup == 'AB+' ? 'selected' : '' }}>AB+</option>
                                                                    <option value="AB-" {{ $formedit->bloodgroup == 'AB-' ? 'selected' : '' }}>AB-</option>
                                                                    <option value="O+" {{ $formedit->bloodgroup == 'O+' ? 'selected' : '' }}>O+</option>
                                                                    <option value="O-" {{ $formedit->bloodgroup == 'O-' ? 'selected' : '' }}>O-</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="religion" class="form-control">
                                                                    <option value="none" selected="" disabled="">
                                                                        Select Religion</option>
                                                                    <option value="Christian" {{ $formedit->religion == 'Christian' ? 'selected' : '' }}>Christian</option>
                                                                    <option value="Hindu" {{ $formedit->religion == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                                    <option value="Muslim" {{ $formedit->religion == 'Muslim' ? 'selected' : '' }}>Muslim</option>
                                                                    <option value="Buddhist" {{ $formedit->religion == 'Buddhist' ? 'selected' : '' }}>Buddhist</option>
                                                                    <option value="Others" {{ $formedit->religion == 'Others' ? 'selected' : '' }}>Others</option>
                                                                </select>
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" name="mothername" value="{{$formedit->mothername}}"
                                                                    class="form-control" placeholder="Mother's Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="motherphone"
                                                                    class="form-control" value="{{$formedit->motherphone}}"
                                                                    placeholder="Mother Contact Number">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="motheroccupation" value="{{$formedit->motheroccupation}}"
                                                                    class="form-control" placeholder="Mother Occupation">
                                                            </div>

                                                            <div class="form-group res-mg-t-15">
                                                                <textarea name="correspondentaddress" placeholder="Correspondent Address" value="{{$formedit->correspondentaddress}}"></textarea>
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    name="localguardianno" value="{{$formedit->localguardianno}}"
                                                                    placeholder="Local Guardian’s Contact No">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="tribe"  value="{{$formedit->tribe}}"
                                                                    placeholder="Tribe">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="postcode" id="postcode" type="text" value="{{$formedit->postcode}}"
                                                                    class="form-control" placeholder="Postcode">
                                                            </div>

                                                            <h4>Year of Passing HSSLC/PU Examination</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->hsslcyear}}"
                                                                    name="hsslcyear" placeholder="Year">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->hsslcrollno}}"
                                                                    name="hsslcrollno" placeholder="Roll No">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->hsslcdivision}}"
                                                                    name="hsslcdivision" placeholder="Division">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->hsslcpercentage}}"
                                                                    name="hsslcpercentage" placeholder="Percentage">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->hsslcboard}}"
                                                                    name="hsslcboard" placeholder="Board">
                                                            </div>

                                                            <h4>Marks secured in previous Exam</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->subject1}}"
                                                                    name="subject1" placeholder="Subject: 1">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->subject2}}"
                                                                    name="subject2" placeholder="Subject: 2">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->subject3}}"
                                                                    name="subject3" placeholder="Subject: 3">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->subject4}}"
                                                                    name="subject4" placeholder="Subject: 4">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->subject5}}"
                                                                    name="subject5" placeholder="Subject: 5">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->previouspercentage}}"
                                                                    name="previouspercentage" placeholder="Percentage: %">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" value="{{$formedit->previousgrade}}"
                                                                    name="previousgrade" placeholder="Grade">
                                                            </div>

                                                        </div>
                                                        <center>
                                                            <h4>File Upload</h4>
                                                            <center>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    {{-- <div class="form-group">
                                                                        <label for="photo" class="control-label"
                                                                            style="text-align: left">Photo:</label>
                                                                        <input type="file" class="form-control"
                                                                            id="photo" name="photo" value="{{$formedit->photo}}"
                                                                            accept="image/*">
                                                                    </div> --}}

                                                                    <div class="form-group">
                                                                        <label for="photo" class="control-label" style="text-align: left">Photo:</label>
                                                                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                                                                        @if ($formedit->photo)
                                                                        {{-- @dd($formedit->photo); --}}
                                                                            <img src="{{ asset('photo/'.$formedit->photo) }}" alt="Current Photo" style="max-width: 200px; margin-top: 10px;">
                                                                            @endif
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="hsslcmarksheet"
                                                                            class="control-label">HSLC & HSSLC Examination
                                                                            Mark Sheets</label>
                                                                        <input type="file" class="form-control"
                                                                            id="hsslcmarksheet" name="hsslcmarksheet" value="{{$formedit->hsslcmarksheet}}"
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
                                                                            placeholder="photo" accept="image/*" value="{{$formedit->hsslcadmitcard}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="birthcertificate"
                                                                            class="control-label">Birth Certificate</label>
                                                                        <input type="file" class="form-control"
                                                                            id="birthcertificate" name="birthcertificate" value="{{$formedit->birthcertificate}}"
                                                                            accept="image/*">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="communitycertificate"
                                                                            class="control-label">Schedule Tribe/Community
                                                                            Certificate</label>
                                                                        <input type="file" class="form-control" value="{{$formedit->communitycertificate}}"
                                                                            name="communitycertificate" accept="image/*">
                                                                    </div>
                                                                </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <a href="{{ route('status') }}">
                                                                    <button class="btn btn-default btn-close">Cancel</button>
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
