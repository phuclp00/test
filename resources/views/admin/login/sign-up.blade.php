@extends('login.master')
@section('name')
<!-- Sign up Start -->
<section class="sign-in-page">
    <div class="container p-0">
        <div class="row no-gutters height-self-center">
            <div class="col-sm-12 align-self-center page-content rounded">
                <div class="row m-0">
                    <div class="col-sm-12 sign-in-page-data">
                        <div class="sign-in-from bg-primary rounded">
                            <h3 class="mb-0 text-center text-white">Sign Up</h3>
                            <p class="text-center text-white">Enter your email address and password to access admin
                                panel.</p>
                            <form class="mt-4 form-text">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> User Name</label>
                                    <input type="text" name="username" class="form-control mb-0" id="exampleInputEmail1"
                                        placeholder="Your Full Name" value="{{old('username')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Email address</label>
                                    <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail2"
                                        placeholder="Enter email" value="{{old('email')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1"
                                        placeholder="Password" value="{{old('password')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="repassword" class="form-control mb-0" id="exampleInputPassword1"
                                        placeholder="Re-Password" value="{{old('repassword')}}">
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I accept <a href="#"
                                                class="text-light">Terms and Conditions</a></label>
                                    </div>
                                </div>
                                <div class="sign-info text-center">
                                    <button type="submit" class="btn btn-white d-block w-100 mb-2">Sign Up</button>
                                    <span class="text-dark d-inline-block line-height-2">Already Have Account ? <a
                                            href="{{route('admin_login')}}" class="text-white">Log In</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sign up END -->
@endsection