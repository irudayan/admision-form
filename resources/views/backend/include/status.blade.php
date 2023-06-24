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
                            <li class="active"><a href="#description">Status</a></li>
                            {{-- <li><a href="#reviews"> Status</a></li> --}}

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="product-status mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="product-status-wrap">
                                                        <h4>Status List</h4>
                                                        <div class="add-product">
                                                            <a href="#">PDF</a>
                                                        </div>
                                                        <div class="asset-inner">
                                                            <table>
                                                                <tr>
                                                                  <th>Name</th>
                                                                  <th>Mobile No</th>
                                                                  <th>Email</th>
                                                                  <th>Status</th>
                                                                  <th>Setting</th>
                                                                </tr>
                                                                <tr>
                                                                 
                                                                        <td>{{ $status->fullname }}</td>
                                                                        <td>{{ $status->mobileno }}</td>
                                                                        <td>{{ $status->email }}</td>
                                                                  <td>
                                                                    <button class="pd-setting">Active</button>
                                                                  </td>
                                                                  <td>
                                                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                                                                      <a href="{{ url('formedit', $status->id) }}">
                                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                                      </a>
                                                                    </button>
                                                              
                                                                    <button data-toggle="tooltip" title="view" class="pd-setting-ed">
                                                                      <a href="{{ url('admisionform-view', $status->id) }}">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                      </a>
                                                                    </button>
                                                                  </td>
                                                                </tr>
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

<div id="extra-area-chart" style="height: 180px;"></div>

@endsection
