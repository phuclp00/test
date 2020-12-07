﻿@extends('master')
@section('content')

@include('public.slide.slide_header')
<!-- Start My Account Area -->
@if(session()->has('account_info_warning'))
	{!!session()->get('account_info_warning')!!}
@endif
	

<section class="my_account_area pt--80 pb--55 bg--white">
		<div class="container">
			<div class="row my-2">
				<div class="col-lg-8 order-lg-2">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
						</li>
						<li class="nav-item">
							<a href="" data-target="#messages" data-toggle="tab" class="nav-link">Contact info</a>
						</li>
						<li class="nav-item">
							<a href="" data-target="#edit" data-toggle="tab" class="nav-link">other info</a>
						</li>
					</ul>
					<div class="tab-content py-4">
						<div class="tab-pane active" id="profile">
							<h5 class="mb-3">User Profile</h5>
							<div class="row">
								<div class="col-md-6">
									<h6>About</h6>
									<p>
										Web Designer, UI/UX Engineer
									</p>
									<h6>Hobbies</h6>
									<p>
										Indie music, skiing and hiking. I love the great outdoors.
									</p>
								</div>
								<div class="col-md-6">
									<h6>Recent badges</h6>
									<a href="#" class="badge badge-dark badge-pill">html5</a>
									<a href="#" class="badge badge-dark badge-pill">react</a>
									<a href="#" class="badge badge-dark badge-pill">codeply</a>
									<a href="#" class="badge badge-dark badge-pill">angularjs</a>
									<a href="#" class="badge badge-dark badge-pill">css3</a>
									<a href="#" class="badge badge-dark badge-pill">jquery</a>
									<a href="#" class="badge badge-dark badge-pill">bootstrap</a>
									<a href="#" class="badge badge-dark badge-pill">responsive-design</a>
									<hr>
									<span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
									<span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
									<span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
								</div>
								<div class="col-md-12">
									<h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent
										Activity</h5>
									<table class="table table-sm table-hover table-striped">
										<tbody>
											<tr>
												<td>
													<strong>Abby</strong> joined ACME Project Team in
													<strong>`Collaboration`</strong>
												</td>
											</tr>
											<tr>
												<td>
													<strong>Gary</strong> deleted My Board1 in
													<strong>`Discussions`</strong>
												</td>
											</tr>
											<tr>
												<td>
													<strong>Kensington</strong> deleted MyBoard3 in
													<strong>`Discussions`</strong>
												</td>
											</tr>
											<tr>
												<td>
													<strong>John</strong> deleted My Board1 in
													<strong>`Discussions`</strong>
												</td>
											</tr>
											<tr>
												<td>
													<strong>Skell</strong> deleted his post Look at Why this is.. in
													<strong>`Discussions`</strong>
												</td>
											</tr>
										</tbody>
									</table>
									@if(session()->has('update_info'))
									{!!session()->get('update_info')!!}
									@endif
								</div>
							</div>
							<!--/row-->
						</div>
						<div class="tab-pane" id="messages">
							<div class="alert alert-info alert-dismissable">
								<a class="panel-close close" data-dismiss="alert">×</a> This is an
								<strong>.alert</strong>. Use this to show important messages to the user.
							</div>
							<table class="table table-hover table-striped">
								<tbody>
									<tr>
										<td>
											<span class="float-right font-weight-bold">3 hrs ago</span> Here is your a
											link to the latest summary report from the..
										</td>
									</tr>
									<tr>
										<td>
											<span class="float-right font-weight-bold">Yesterday</span> There has been a
											request on your account since that was..
										</td>
									</tr>
									<tr>
										<td>
											<span class="float-right font-weight-bold">9/10</span> Porttitor vitae
											ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
										</td>
									</tr>
									<tr>
										<td>
											<span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt
											ullamcorper eros eget luctus.
										</td>
									</tr>
									<tr>
										<td>
											<span class="float-right font-weight-bold">9/4</span> Maxamillion ais the
											fix for tibulum tincidunt ullamcorper eros.
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="edit">
							<form action="{{route('account_update',$data->user_name)}}" method="POST" role="form">
								{{ csrf_field() }}
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Full Name</label>
									<div class="col-lg-9">
										<input class="form-control" id="full_name" name="fullname" type="text"
											value="{{$data->full_name}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Email</label>
									<div class="col-lg-9">
										<input class="form-control" id="email" type="email" name="email_register"
											value="{{$data->email}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Phone</label>
									<div class="col-lg-9">
										<input class="form-control" id="phone" type="text" name="phone"
											value="{{$data->phone}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Address</label>
									<div class="col-lg-9">
										<input class="form-control" id="street" name="street" type="text"
											value="{{$data->street}}" placeholder="{{$data->street}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label"></label>
									<div class="col-lg-6">
										<input class="form-control" id="district" name="district" type="text"
											value="{{$data->district}}" placeholder="District">
									</div>
									<div class="col-lg-3">
										<input class="form-control" id="city" name="city" type="text"
											value="{{$data->city}}" placeholder="Province/City">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Password</label>
									<div class="col-lg-9">
										<input class="form-control" id="password_register" name="password_register"
											type="password" value="11111122333">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
									<div class="col-lg-9">
										<input class="form-control" id="re_password" name="re_password" type="password"
											value="11111122333">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label"></label>
									<div class="col-lg-9">
										<input type="reset" class="btn btn-secondary" value="Cancel">
										<input type="submit" id="submit_changes" class="btn btn-primary"
											value="Save Changes">
									</div>
								</div>
							</form>
							<div id="loaddata"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 order-lg-1 text-center">
					
					<img src="source_project/images/users/{{$data->img}}" class="mx-auto img-fluid img-circle d-block"
						alt="avatar">
					<h6 class="mt-2">Upload a different photo</h6>
					<label class="custom-file">
						<form action="{{route('update_img',[$data->user_name])}}" method="get">
							<div class="input">
							<label for="file" value="Choose Picture" ></label>
								<input type="file" id="file" name="file" class="custom-file-input" value="file">
								<span class="custom-file-control">Choose file</span>
							</div>
							<button class="btn btn-primary active" role="button"> OK</button>
						</form>
					</label>
				</div>
			</div>
		</div>
</section>
<!-- End My Account Area -->



@endsection