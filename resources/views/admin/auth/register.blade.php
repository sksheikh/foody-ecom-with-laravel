@extends('admin.auth.master')

@section('title')
    Login
@endsection


@section('body')
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg py-5">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="signup-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" action="{{route('register')}}" method="post">
                            @csrf
                            <div class="text-center">
                                <img src="{{asset('/')}}admin/assets/images/logo.png" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up. It is fast and easy.</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" name="name" class="form-control" placeholder="Enter your full name">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="email" class="form-control" placeholder="Your Email Address">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" placeholder="Choose Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                    <span class="md-line"></span>
                                </div>

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <input type="submit" value="Sign up now" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Have you already an account? <b><a href="{{route('login')}}">Login here</a></b></p>
                                        <p class="text-inverse text-left"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{asset('/')}}admin/assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
@endsection

