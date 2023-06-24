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
                            <li class="active"><a href="#description">Admi</a></li>
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
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="fullname" type="text" class="form-control"
                                                                    value="{{ $form->fullname }}" placeholder="Full Name"
                                                                    disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="country" class="form-control">
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
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="mobileno" type="text" class="form-control"
                                                                    value="{{ $form->mobileno }}"
                                                                    placeholder="Telephone No. /Contact No">

                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="email" class="form-control"
                                                                    value="{{ $form->email }}" placeholder="Email">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fathername" class="form-control"
                                                                    value="{{ $form->fathername }}"
                                                                    placeholder="Father's Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fatherphone"
                                                                    class="form-control" value="{{ $form->fatherphone }}"
                                                                    placeholder="Father Contact Number">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fatheroccupation"
                                                                    value="{{ $form->fatheroccupation }}"
                                                                    class="form-control" placeholder="Father Occupation">
                                                            </div>

                                                            {{-- <div class="form-group res-mg-t-15">
                                                                    <textarea name="permanentaddress" placeholder="Permanent Address">
                                                                        value="{{$form->permanentaddress}}"
                                                                    </textarea>
                                                                </div> --}}
                                                            <div class="form-group res-mg-t-15">
                                                                <textarea name="permanentaddress" placeholder="Permanent Address">{{ $form->permanentaddress }}</textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    name="localguardianname"
                                                                    value="{{ $form->localguardianname }}"
                                                                    placeholder="Local Guardian’s Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="category"
                                                                    placeholder="Category" value="{{ $form->Category }}">
                                                            </div>

                                                            <div class="form-group">

                                                                <select name="state" class="form-control">
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
                                                                </select>


                                                            </div>

                                                            <h4>Year of Passing HSLC Examination</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hslcyear" value="{{ $form->hslcyear }}"
                                                                    placeholder="Year">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hslcrollno" value="{{ $form->hslcrollno }}"
                                                                    placeholder="Roll No">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hslcdivision }}" name="hslcdivision"
                                                                    placeholder="Division">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hslcpercentage }}"
                                                                    name="hslcpercentage" placeholder="Percentage">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hslcboard }}" name="hslcboard"
                                                                    placeholder="Board">
                                                            </div>

                                                            <h4>School/College</h4>

                                                            <div class="form-group">
                                                                <input name="schoolname" type="text"
                                                                    value="{{ $form->schoolname }}" class="form-control"
                                                                    placeholder="School Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="collegename" type="text"
                                                                    value="{{ $form->collegename }}" class="form-control"
                                                                    placeholder="College Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="schoollastattended" type="text"
                                                                    value="{{ $form->schoollastattended }}"
                                                                    class="form-control"
                                                                    placeholder="School last Attended last">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="collegelastattended" type="text"
                                                                    class="form-control"
                                                                    value="{{ $form->collegelastattended }}"
                                                                    placeholder="College last Attended last">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="boarduniversity" type="text"
                                                                    class="form-control"
                                                                    value="{{ $form->boarduniversity }}"
                                                                    placeholder="Board/University indicate">
                                                            </div>


                                                            <div class="form-group">
                                                                <input name="cerificateno" type="text"
                                                                    class="form-control"
                                                                    value="{{ $form->cerificateno }}"
                                                                    placeholder="Migration Certificate: No">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="certificatedate" type="text"
                                                                    class="form-control"
                                                                    value="{{ $form->certificatedate }}"
                                                                    placeholder="Migration Certificate: Date">
                                                            </div>
                                                        </div>

                                                        {{-- right --}}
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="dateofbirth" id="finish" type="text"
                                                                    value="{{ $form->dateofbirth }}" class="form-control"
                                                                    placeholder="Date of Birth">
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="gender" class="form-control">
                                                                    <option value="">
                                                                        Select Gender</option>
                                                                    <option value="Male"
                                                                        {{ $form->gender == 'Male' ? 'selected' : '' }}>
                                                                        Male</option>
                                                                    <option value="Female"
                                                                        {{ $form->gender == 'Female' ? 'selected' : '' }}>
                                                                        Female</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="bloodgroup" class="form-control">
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
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="religion" class="form-control">
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
                                                                </select>
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" name="mothername"
                                                                    value="{{ $form->mothername }}" class="form-control"
                                                                    placeholder="Mother's Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="motherphone"
                                                                    class="form-control" value="{{ $form->motherphone }}"
                                                                    placeholder="Mother Contact Number">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="motheroccupation"
                                                                    value="{{ $form->motheroccupation }}"
                                                                    class="form-control" placeholder="Mother Occupation">
                                                            </div>

                                                            <div class="form-group res-mg-t-15">
                                                                <textarea name="correspondentaddress" placeholder="Correspondent Address" value="{{ $form->correspondentaddress }}"></textarea>
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    name="localguardianno"
                                                                    value="{{ $form->localguardianno }}"
                                                                    placeholder="Local Guardian’s Contact No">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="tribe"
                                                                    value="{{ $form->tribe }}" placeholder="Tribe">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="postcode" id="postcode" type="text"
                                                                    value="{{ $form->postcode }}" class="form-control"
                                                                    placeholder="Postcode">
                                                            </div>

                                                            <h4>Year of Passing HSSLC/PU Examination</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hsslcyear }}" name="hsslcyear"
                                                                    placeholder="Year">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hsslcrollno }}" name="hsslcrollno"
                                                                    placeholder="Roll No">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hsslcdivision }}"
                                                                    name="hsslcdivision" placeholder="Division">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hsslcpercentage }}"
                                                                    name="hsslcpercentage" placeholder="Percentage">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->hsslcboard }}" name="hsslcboard"
                                                                    placeholder="Board">
                                                            </div>

                                                            <h4>Marks secured in previous Exam</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->subject1 }}" name="subject1"
                                                                    placeholder="Subject: 1">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->subject2 }}" name="subject2"
                                                                    placeholder="Subject: 2">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->subject3 }}" name="subject3"
                                                                    placeholder="Subject: 3">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->subject4 }}" name="subject4"
                                                                    placeholder="Subject: 4">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->subject5 }}" name="subject5"
                                                                    placeholder="Subject: 5">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->previouspercentage }}"
                                                                    name="previouspercentage" placeholder="Percentage: %">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $form->previousgrade }}"
                                                                    name="previousgrade" placeholder="Grade">
                                                            </div>

                                                        </div>
                                                        <center>
                                                            <h4>File Upload</h4>
                                                            <center>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label for="photo" class="control-label"
                                                                            style="text-align: left">Photo</label>
                                                                        <input type="file" class="form-control"
                                                                            id="photo" name="photo"
                                                                            value="{{ $form->photo }}" accept="image/*">
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



    {{-- new --}}
@endsection
