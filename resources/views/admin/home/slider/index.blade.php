@extends('admin.master')

@section('title')
    Manage Slider
@endsection

@section('body')
    <div class="page-wrapper">
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12 mx-auto">
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="m-b-10 sub-title  text-primary">Manage Slider</h3>
                            <div class="float-right">
                                <a href="{{route('sliders.create')}}" class="btn btn-primary">Create</a>
                            </div>
                            <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>
                        </div>
                        <div class="card-block">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$slider->title}}</td>
                                        <td><img src="{{asset($slider->image)}}" alt="" width="50"></td>
                                        <td>
                                            <a href="" class="btn btn-primary">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- Basic Form Inputs card end -->

                </div>
            </div>
        </div>
        <!-- Page body end -->
    </div>
@endsection




