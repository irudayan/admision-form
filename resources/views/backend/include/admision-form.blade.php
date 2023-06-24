@extends('layouts.admin')

@section('content')
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
                                                <form action="{{ route('formstore') }}" method="POST"
                                                    class="dropzone dropzone-custom needsclick add-professors" enctype="multipart/form-data"
                                                    id="demo1-upload">
                                                    @csrf
                                                    <div class="row">
                                                           
                                                        {{-- left --}}
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="fullname" type="text" class="form-control"
                                                                    placeholder="Full Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="country" class="form-control">
                                                                    <option value="none" selected="" disabled="">
                                                                        Select country</option>
                                                                    <option value="India">India</option>
                                                                    <option value="Pakistan">Pakistan</option>
                                                                    <option value="America">America</option>
                                                                    <option value="China">China</option>
                                                                    <option value="Dubai">Dubai</option>
                                                                    <option value="Nepal">Nepal</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="fullname" type="text" class="form-control"  placeholder="Full Name">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <input name="mobileno" type="text" class="form-control"
                                                                    placeholder="Telephone No. /Contact No">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="email" class="form-control"
                                                                    placeholder="Email">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fathername" class="form-control"
                                                                    placeholder="Father's Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fatherphone"
                                                                    class="form-control"
                                                                    placeholder="Father Contact Number">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="fatheroccupation"
                                                                    class="form-control" placeholder="Father Occupation">
                                                            </div>

                                                            <div class="form-group res-mg-t-15">
                                                                <textarea name="permanentaddress" placeholder="Permanent Address"></textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    name="localguardianname"
                                                                    placeholder="Local Guardian’s Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="category"
                                                                    placeholder="Category">
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="state" class="form-control">
                                                                    <option value="none" selected="" disabled="">
                                                                        Select state</option>
                                                                    <option value="Gujarat">Gujarat</option>
                                                                    <option value="Maharastra">Maharastra</option>
                                                                    <option value="Rajastan">Rajastan</option>
                                                                    <option value="TamilNadu">TamilNadu</option>
                                                                </select>
                                                            </div>

                                                            <h4>Year of Passing HSLC Examination</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" name="hslcyear"
                                                                    placeholder="Year">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" name="hslcrollno"
                                                                    placeholder="Roll No">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hslcdivision" placeholder="Division">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hslcpercentage" placeholder="Percentage">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hslcboard" placeholder="Board">
                                                            </div>

                                                            <h4>School/College</h4>

                                                            <div class="form-group">
                                                                <input name="schoolname" type="text"
                                                                    class="form-control" placeholder="School Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="collegename" type="text"
                                                                    class="form-control" placeholder="College Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="schoollastattended" type="text"
                                                                    class="form-control"
                                                                    placeholder="School last Attended last">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="collegelastattended" type="text"
                                                                    class="form-control"
                                                                    placeholder="College last Attended last">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="boarduniversity" type="text"
                                                                    class="form-control"
                                                                    placeholder="Board/University indicate">
                                                            </div>


                                                            <div class="form-group">
                                                                <input name="cerificateno" type="text"
                                                                    class="form-control"
                                                                    placeholder="Migration Certificate: No">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="certificatedate" type="text"
                                                                    class="form-control"
                                                                    placeholder="Migration Certificate: Date">
                                                            </div>
                                                        </div>

                                                        {{-- right --}}
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="dateofbirth" id="finish" type="text"
                                                                    class="form-control" placeholder="Date of Birth">
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="gender" class="form-control">
                                                                    <option value="none" selected="" disabled="">
                                                                        Select Gender</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="">Female</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="bloodgroup" class="form-control">
                                                                    <option value="none" selected="" disabled="">
                                                                        Select Blood Group</option>
                                                                    <option value="A+">A+</option>
                                                                    <option value="B+">A-</option>
                                                                    <option value="B+">B+</option>
                                                                    <option value="AB+">AB+</option>
                                                                    <option value="AB-">AB-</option>
                                                                    <option value="O+">O+</option>
                                                                    <option value="O-">O-</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="religion" class="form-control">
                                                                    <option value="none" selected="" disabled="">
                                                                        Select Religion</option>
                                                                    <option value="Christian">Christian</option>
                                                                    <option value="Hindu">Hindu</option>
                                                                    <option value="Muslim">Muslim</option>
                                                                    <option value="Buddhist">Buddhist</option>
                                                                    <option value="Others">Others</option>
                                                                </select>
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" name="mothername"
                                                                    class="form-control" placeholder="Mother's Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="motherphone"
                                                                    class="form-control"
                                                                    placeholder="Mother Contact Number">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" name="motheroccupation"
                                                                    class="form-control" placeholder="Mother Occupation">
                                                            </div>

                                                            <div class="form-group res-mg-t-15">
                                                                <textarea name="correspondentaddress" placeholder="Correspondent Address"></textarea>
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    name="localguardianno"
                                                                    placeholder="Local Guardian’s Contact No">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="tribe"
                                                                    placeholder="Tribe">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="postcode" id="postcode" type="text"
                                                                    class="form-control" placeholder="Postcode">
                                                            </div>

                                                            <h4>Year of Passing HSSLC/PU Examination</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hsslcyear" placeholder="Year">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hsslcrollno" placeholder="Roll No">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hsslcdivision" placeholder="Division">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hsslcpercentage" placeholder="Percentage">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="hsslcboard" placeholder="Board">
                                                            </div>

                                                            <h4>Marks secured in previous Exam</h4>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="subject1" placeholder="Subject: 1">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="subject2" placeholder="Subject: 2">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="subject3" placeholder="Subject: 3">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="subject4" placeholder="Subject: 4">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="subject5" placeholder="Subject: 5">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="previouspercentage" placeholder="Percentage: %">
                                                            </div>

                                                            <div class="form-group ">
                                                                <input type="text" class="form-control"
                                                                    name="previousgrade" placeholder="Grade">
                                                            </div>

                                                        </div>
                                                        {{-- <div class="form-group "> --}}
                                                            {{-- <input type="text" class="form-control"
                                                                name="previousgrade" placeholder="Grade"> --}}
                                                        {{-- </div> --}}

                                                    </div>


                                                        {{-- file --}}
                                                     

                                                        <center>
                                                            <h4>File Upload</h4>
                                                            <center>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                       
                                                                      <label class="control-label" style="text-align: left">Photo</label>
                                                                      <input type="file" class="form-control" id="photo" name="photo"  accept="image/*">
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label for="hsslcmarksheet" class="control-label">HSLC & HSSLC Examination Mark Sheets</label>
                                                                      <input type="file" class="form-control" id="hsslcmarksheet" name="hsslcmarksheet" accept="image/*">
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                      <label for="hsslcadmitcard" class="control-label">HSSLC & HSSLC Examination Admit Card</label>
                                                                      <input type="file" class="form-control" id="hsslcadmitcard" name="hsslcadmitcard" placeholder="photo" accept="image/*">
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label for="birthcertificate" class="control-label">Birth Certificate</label>
                                                                      <input type="file" class="form-control" id="birthcertificate" name="birthcertificate" accept="image/*">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="communitycertificate" class="control-label">Schedule Tribe/Community Certificate</label>
                                                                        <input type="file" class="form-control" name="communitycertificate" accept="image/*">
                                                                      </div>
                                                                  </div>
                                                     </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
