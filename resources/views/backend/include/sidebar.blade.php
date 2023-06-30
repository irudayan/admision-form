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

                        @if($usertype=='Users')
                        {{-- @dd('in'); --}}

                        <li class="active">
                            <a class="has-arrow" href="{{ url('home') }}">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Education</span>
								</a>
                                <ul class="submenu-angle" aria-expanded="true">
                                    @if ($dataview->isEmpty())
                                        <li><a title="Widgets" href="{{ url('status') }}"><span class="mini-sub-pro">status</span></a></li>
                                    @else
                                        <li><a title="Widgets" href="{{ url('status') }}"><span class="mini-sub-pro">status</span></a></li>
                                    @endif
                                    {{-- <li><a title="Widgets" href="{{ url('admisionform-view') }}"><span class="mini-sub-pro">View Admission Form</span></a></li> --}}
                                </ul>
                            
                        </li>
                                 @endif          
                        @if($usertype=='Admin')

                        <li class="active">
                            <a class="has-arrow" href="{{ url('home') }}">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Education</span>
								</a>
                                <ul class="submenu-angle" aria-expanded="true">
                                    {{-- @if ($dataview->isEmpty()) --}}
                                    {{-- @dd($dataview->isEmpty()); --}}
                                        <li><a title="Widgets" href="{{ url('home') }}"><span class="mini-sub-pro">Dashboard</span></a></li>
                                    {{-- @else
                                        <li><a title="Widgets" href="{{ url('dashboard') }}"><span class="mini-sub-pro">dashboard</span></a></li> --}}
                                    {{-- @endif --}}
                                    {{-- <li><a title="Widgets" href="{{ url('admisionform-view') }}"><span class="mini-sub-pro">View Admission Form</span></a></li> --}}
                                </ul>
                            
                        </li>


                        <li>
                            <a title="Landing Page" href="{{ ('manageusers') }}" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> 
                                <span class="mini-click-non">Manage Users</span></a>
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