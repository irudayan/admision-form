@php
$usertype = Auth::user()->usertype;
$dataview = \App\Models\Admisionform::where('user_id', Auth::user()->id)->get();
@endphp




    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{ url('home') }}"><img class="main-logo" src="img/logo/logosn.png" alt="" /></a>
                <strong><a href="{{ url('home') }}"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="{{ url('home') }}">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Education</span>
								</a>
                                <ul class="submenu-angle" aria-expanded="true">
                                    @if ($dataview->isEmpty())
                                        <li><a title="Widgets" href="{{ url('admin-status') }}"><span class="mini-sub-pro">status</span></a></li>
                                    @else
                                        <li><a title="Widgets" href="{{ url('status') }}"><span class="mini-sub-pro">status</span></a></li>
                                    @endif
                                    {{-- <li><a title="Widgets" href="{{ url('admisionform-view') }}"><span class="mini-sub-pro">View Admission Form</span></a></li> --}}
                                </ul>
                            
                        </li>
                                           
                        @if($usertype=='Admin')

                        <li>
                            <a title="Landing Page" href="{{ ('manageusers') }}" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> 
                                <span class="mini-click-non">Manage Users</span></a>
                        </li>

                        <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="#"><span class="mini-sub-pro">All Professors</span></a></li>
                                <li><a title="Add Professor" href="#"><span class="mini-sub-pro">Add Professor</span></a></li>
                                <li><a title="Edit Professor" href="#"><span class="mini-sub-pro">Edit Professor</span></a></li>
                                <li><a title="Professor Profile" href="#"><span class="mini-sub-pro">Professor Profile</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="#"><span class="mini-sub-pro">All Students</span></a></li>
                                <li><a title="Add Students" href="#"><span class="mini-sub-pro">Add Student</span></a></li>
                                <li><a title="Edit Students" href="#"><span class="mini-sub-pro">Edit Student</span></a></li>
                                <li><a title="Students Profile" href="#"><span class="mini-sub-pro">Student Profile</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="#"><span class="mini-sub-pro">All Courses</span></a></li>
                                <li><a title="Add Courses" href="#"><span class="mini-sub-pro">Add Course</span></a></li>
                                <li><a title="Edit Courses" href="#"><span class="mini-sub-pro">Edit Course</span></a></li>
                                <li><a title="Courses Profile" href="#"><span class="mini-sub-pro">Courses Info</span></a></li>
                                <li><a title="course Payment" href="#"><span class="mini-sub-pro">Courses Payment</span></a></li>
                            </ul>
                        </li>

                        @endif
                         <li>
                            <a title="Landing Page" href="{{ route('logout') }}"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" aria-expanded="false">
                            <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">{{ __('Logout') }}</span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>