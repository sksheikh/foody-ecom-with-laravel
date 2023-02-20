@extends('admin.master')

@section('title')
    Add Slider
@endsection

@section('body')
    <div class="page-wrapper">
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="m-b-10 sub-title text-primary">Add Slider</h3>
                            <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>
                        </div>
                        <div class="card-block">
                            <form action="{{route('create-slider')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Heading</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" placeholder="Enter your slider heading" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control" accept="image/*">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-primary" value="Add slider">
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



