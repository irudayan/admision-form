@extends('layouts.admin')

@section('content')
    <div class="analytics-sparkle-area">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="analytics-sparkle-line reso-mg-b-30">
                      <div class="analytics-content">
                          <h5>Computer Technologies</h5>
                          <h2>$<span class="counter">5000</span></h2>
                          <span class="text-success">20%</span>
                          <div class="progress m-b-0">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="analytics-sparkle-line reso-mg-b-30">
                      <div class="analytics-content">
                          <h5>Accounting Technologies</h5>
                          <h2>$<span class="counter">3000</span> </h2>
                          <span class="text-danger">30%</span>
                          <div class="progress m-b-0">
                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                      <div class="analytics-content">
                          <h5>Electrical Engineering</h5>
                          <h2>$<span class="counter">2000</span> </h2>
                          <span class="text-info">60%</span>
                          <div class="progress m-b-0">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
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
              </div>
          </div>
      </div>
  </div>
  <div class="product-sales-area mg-tb-30">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="product-sales-chart">
                      <div class="portlet-title">
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                  <div class="caption pro-sl-hd">
                                      <span class="caption-subject"><b>Form</b></span>
                                  </div>
                              </div>
                             
                          </div>
                      </div>
                      
                      <div id="extra-area-chart" style="height: 356px;"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  </section>
@endsection
