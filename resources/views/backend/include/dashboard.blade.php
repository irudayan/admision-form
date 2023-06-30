@extends('layouts.admin')

@section('content')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
    <div class="analytics-sparkle-area">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="analytics-sparkle-line reso-mg-b-30">
                      <div class="analytics-content">
                          <h4>Admision Form Total</h4>
                          <center><h1><span class="counter">{{ $totalForm }}</span></h1></center>
                          <span class="text-success">20%</span>
                          <div class="progress m-b-0">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="analytics-sparkle-line reso-mg-b-30">
                      <div class="analytics-content">
                          <h4>Approved Form Total</h4>
                          <center><h1><span class="counter">{{ $approvedForm }}</span></h1></center>
                          <span class="text-danger">30%</span>
                          <div class="progress m-b-0">
                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                      <div class="analytics-content">
                        <h4>Pending Form Total</h4>
                        <center><h1><span class="counter">{{ $pendingForm }}</span></h1></center>
                          
                          <span class="text-info">60%</span>
                          <div class="progress m-b-0">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                          </div>
                      </div>
                  </div>
              </div>
              {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                      <div class="analytics-content">
                          <h5>Chemical Engineering</h5>
                          <h2>$<span class="counter">3500</span> </h2>
                          <span class="text-inverse">80%</span>
                          <div class="progress m-b-0">
                              <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
                          </div>
                      </div>
                  </div>
              </div> --}}
          </div>
      </div>
  </div>


  <div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    {{-- <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Status</a></li> --}}
                        {{-- <li><a href="#reviews"> Status</a></li> --}}

                    {{-- </ul> --}}
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="product-status mg-b-15">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="product-status-wrap">
                                                    <h4>Status List</h4>
                                             
                                                    <div class="asset-inner">
                                                        <table>
                                                            <tr>
                                                              <th>No</th>
                                                              <th>Name</th>
                                                              <th>Mobile No</th>
                                                              <th>Email</th>
                                                              <th>Status</th>
                                                              <th>Setting</th>
                                                            </tr>
                                                            
                                                            @foreach ($allData as $key=>$value)
                                                                <td>{{ ++$key }}</td>
                                                                <td>{{ $value->fullname }}</td>
                                                                <td>{{ $value->mobileno }}</td>
                                                                <td>{{ $value->email }}</td>
                                                               <td>
                                                                            <button class="pd-setting {{ $value->status == 'active' ? 'btn-blue' : 'btn-red'}}">
                                                                                {{ $value->status }}
                                                                            </button>
                                                                        </td>
                                                              <td>
                                                                {{-- <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                                                                  <a href="{{ url('formedit', $value->id) }}">
                                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                                  </a>
                                                                </button> --}}
                                                          
                                                                <button data-toggle="tooltip" title="view" class="pd-setting-ed">
                                                                  <a href="{{ url('admisionform-view', $value->id) }}">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                  </a>
                                                                </button>
                                                              </td>
                                                            </tr>
                                                            @endforeach 
                                                          </table>
                                                          
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
        </div>
    </div>
</div>
  {{-- <div class="product-sales-area mg-tb-30">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="product-sales-chart">
                      <div class="portlet-title">
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                  <div class="caption pro-sl-hd">

                                    {{-- dashboard --}}

   


                                    
                                  </div>
                              </div>
                             
                          </div>
                      </div>
                      
                      <div id="extra-area-chart" style="height: 356px;"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>\
  
  </section>
@endsection
