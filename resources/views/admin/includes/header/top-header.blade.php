@extends('admin.master')

@section('title')
    Top Header
@endsection

@section('body')
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="card-block">
                <h5 class="m-b-10">Top Header</h5>
                <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <ul class="breadcrumb-title b-t-default p-t-10">
                    <li class="breadcrumb-item">
                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Header</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Top Header</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Top Header</h5>
                            <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                            <div class="card-header-right"><i
                                    class="icofont icofont-spinner-alt-5"></i></div>

                            <div class="card-header-right">
                                <i class="icofont icofont-spinner-alt-5"></i>
                            </div>

                            <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>

                        </div>
                        <div class="card-block">
                            <h4 class="sub-title">Top Left Header</h4>
                            <form action="{{route('add-top-left-header')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="address" placeholder="Enter your address" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" placeholder="Enter you email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-primary" value="Add info">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!-- Basic Form Inputs card end -->

                </div>
            </div>
        </div>
        <!-- Page body end -->
    </div>
@endsection


