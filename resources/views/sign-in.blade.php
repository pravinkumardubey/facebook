<!DOCTYPE html>
<html>

{{-- Mirrored from gambolthemes.net/workwise-new/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Feb 2020 04:04:59 GMT --}}
<head>
	<meta charset="UTF-8">
	<title>Facebook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome-font-awesome.min.css')}}">
	<link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
		<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
 
</head>


<body class="sign-in">
	<div class="wrapper">		
		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
									<img src="images/images.jpg" alt="">
									<p>Facebook helps you connect and share with the people in your life.</p>
								</div>
								{{--cm-logo end--}}
								<img src="images/OBaVg52wtTZ.png" alt="">			
							</div>{{--cmp-info end--}}
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">
									<li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>				
									<li data-tab="tab-2"><a href="#" title="">Sign up</a></li>				
								</ul>			
								<div class="sign_in_sec current" id="tab-1">
									
									<h3>Sign in</h3>
									<form id="loginForm">
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="username" placeholder="Username">
													<i class="la la-user"></i>
													<div class="error" id="error_username"></div>
												</div>
												{{--sn-field end--}}
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="passwd" placeholder="Password">
													<i class="la la-lock"></i>
													<div class="error" id="error_passwd"></div>
												</div>
											</div>
											<a href="#" title="" class="text-center">Forgot Password?</a>
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Sign in</button>
											</div>
										</div>
									</form>
								</div>
								{{--sign_in_sec end--}}
								<div class="sign_in_sec" id="tab-2">
									<div class="signup-tab">
										<i class="fa fa-long-arrow-left"></i>
										<h2>Create an account</h2>
										
									</div>
									{{--signup-tab end--}}
									<div class="dff-tab current" id="tab-3">
										<form id="myform">
											<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="name" placeholder="Full Name">
														<i class="la la-user"></i>
														<div class="error" id="error_name"></div>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="email" name="email" placeholder="Email">
														<i class="fas fa-user-cog"></i>
														<div class="error" id="error_email"></div>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Password">
														<i class="la la-lock"></i>
														<div class="error" id="error_password"></div>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="date" name="dob" placeholder="Dob">
														<i class="fas fa-calendar search-icon"></i>
														<div class="error" id="error_dob"></div>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
												<label>Gender</label>
											<label for="gender_male">
											  <input  type="radio" id="gender_male" value="male" name="gender" />
											  Male
											</label>
											<label for="gender_female">
											  <input  type="radio" id="gender_female" value="female" name="gender"/>
											  Female
											</label>
										</div><br>
										<div class="error" id="error_gender"></div>
											<label for="gender" class="error"></label>
											<br/>
											<button type="submit" value="submit">Get Started</button>
											</form>
									</div>
									{{--dff-tab end--}}
								</div>		
							</div>
							{{--login-sec end--}}
						</div>
					</div>		
				</div>
				{{--signin-pop end--}}
			</div>
			{{--signin-popup end--}}
			<div class="footy-sec">
				<div class="container">
					<ul>
						<li><a href="#" title="">English (UK)</a></li>
						<li><a href="#" title="">हिन्दी</a></li>
					</ul>
					<p><img src="images/copy-icon.png" alt="">Copyright 2020</p>
				</div>
			</div>{{--footy-sec end--}}
		</div>{{--sign-in-page end--}}
	</div>
	{{--theme-layout end--}}
<script>
	let APP_URL = {!! json_encode(url('/')) !!}+"/";
</script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/additional-methods.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script type="text/javascript" src="{{asset('custom-js/sign-in.js')}}"></script>
</body>

{{-- Mirrored from gambolthemes.net/workwise-new/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Feb 2020 04:05:00 GMT --}}
</html>