@extends('admin.login.master')
<!-- Sign in Start -->
@section('login')
<section class="sign-in-page">
    <div class="container p-0">
        <div class="row no-gutters height-self-center">
            <div class="col-sm-12 align-self-center page-content rounded">
                <div class="row m-0">
                    <div class="col-sm-12 sign-in-page-data">
                        <div class="sign-in-from bg-primary rounded">
                            <h3 class="mb-0 text-center text-white">Sign in</h3>
                            <p class="text-center text-white">Enter your email address or username and password to
                                access admin panel.</p>
                            <form action="{{route('admin_login')}}" class="mt-4 form-text" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control mb-0"
                                        id="email" placeholder="Enter username" value="{{old('email')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <a href="#" class="float-right text-dark">Forgot password?</a>
                                    <input type="password" name="password" class="form-control mb-0"
                                        id="password" placeholder="Password" value="{{old('password')}}">
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                </div>
                                <div class="sign-info text-center">
                                    <button type="submit" class="btn btn-white d-block w-100 mb-2">Sign in</button>
                                    <span class="text-dark dark-color d-inline-block line-height-2">Don't have an
                                        account? <a href="{{route('admin_register_view')}}" class="text-white">Sign
                                            up</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sign in END -->
@endsection