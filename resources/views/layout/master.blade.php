<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Facebook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
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
</head>

<body>	
	<div class="wrapper">	

		{{--header start-->}}

		@include('header.header')
		
		{{--header end-->}}

		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<div class="main-left-sidebar no-margin">
									<div class="user-data full-width">
										<div class="user-profile">
											<div class="username-dt">
												<div class="usr-pic">
													<img src="{{asset('storage/postImages/'.$res->file)}}" alt="">
												</div>
											</div>{{--username-dt end--}}
											<div class="user-specs">
												<h3>{{$res->name}}</h3>
												<span>PHP Developer</span>
											</div>
										</div>{{--user-profile end--}}
										<ul class="user-fw-status">
											<li>
												<h4>Following</h4>
												<span>34</span>
											</li>
											<li>
												<h4>Followers</h4>
												<span>155</span>
											</li>
										</ul>
									</div>{{--user-data end--}}
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>Suggestions</h3>
											<i class="la la-ellipsis-v"></i>
										</div>{{--sd-title end--}}
										<div class="suggestions-list">
											<div class="suggestion-usd">
												<img src="images/resources/s1.png" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s2.png" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s3.png" alt="">
												<div class="sgt-text">
													<h4>Poonam</h4>
													<span>Wordpress Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s4.png" alt="">
												<div class="sgt-text">
													<h4>Bill Gates</h4>
													<span>C & C++ Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s5.png" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s6.png" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="view-more">
												<a href="#" title="">View More</a>
											</div>
										</div>{{--suggestions-list end--}}
									</div>{{--suggestions end--}}
									<div class="tags-sec full-width">
										<ul>
											<li><a href="#" title="">Help Center</a></li>
											<li><a href="#" title="">About</a></li>
											<li><a href="#" title="">Privacy Policy</a></li>
											<li><a href="#" title="">Community Guidelines</a></li>
											<li><a href="#" title="">Cookies Policy</a></li>
											<li><a href="#" title="">Career</a></li>
											<li><a href="#" title="">Language</a></li>
											<li><a href="#" title="">Copyright Policy</a></li>
										</ul>
										<div class="cp-sec">
											<img src="images/logo2.png" alt="">
											<p><img src="images/cp.png" alt="">Copyright 2019</p>
										</div>
									</div>{{--tags-sec end--}}
								</div>{{--main-left-sidebar end--}}
							</div>
							<div class="col-lg-6 col-md-8 no-pd">
								<div class="main-ws-sec">
									<div class="post-topbar">
										<div class="user-picy">
											<img src="{{asset('storage/postImages/'.$res->file)}}" alt="">
										</div>
										<div class="post-st">
											<ul>
												<li><a class="post_project active" href="#" title="">Get Started</a></li>
											</ul>
										</div>{{--post-st end--}}
									</div>{{--post-topbar end--}}
									<div class="posts-section">
										<div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="images/resources/us-pic.png" alt="">
													<div class="usy-name">
														<h3>Pravin Kumar</h3>
														<span><img src="images/clock.png" alt="">3 min ago</span>
													</div>
												</div>
												<div class="ed-opts">
													<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
													<ul class="ed-options">
														<li><a href="#" title="">Edit Post</a></li>
														<li><a href="#" title="">Unsaved</a></li>
														<li><a href="#" title="">Unbid</a></li>
														<li><a href="#" title="">Close</a></li>
														<li><a href="#" title="">Hide</a></li>
													</ul>
												</div>
											</div>
											
											<div class="job_descp p-2">
												<h3 class="text-center">Senior Wordpress Developer</h3>
												<img src="{{asset('images/pravin.jpg')}}">
											</div>
											<div class="job-status-bar">
												<ul class="like-com">
														<li>
															<a onclick="likePost(this)"><i class="fas fa-thumbs-up"></i></a>
														</li>
														<li>
															
														</li>
														<li>
															<a href="#">
																<i class="fas fa-thumbs-down"></i>
															</a>
														</li>
														<li>
															
														</li> 
														<li>
															<a onclick="showComment(this)" class="com"><i class="fas fa-comments"></i></a>
														</li>
														<li>
															
														</li>
												</ul>
												<a href="#"><i class="fas fa-eye"></i>Views 50</a>
											</div>
										</div>{{--post-bar end--}}
										<div class="top-profiles">
											<div class="pf-hd">
												<h3>Top Profiles</h3>
												<i class="la la-ellipsis-v"></i>
											</div>
											<div class="profiles-slider">
												<div class="user-profy">
													<img src="images/resources/user1.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div>{{--user-profy end--}}
												<div class="user-profy">
													<img src="images/resources/user2.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div>{{--user-profy end--}}
												<div class="user-profy">
													<img src="images/resources/user3.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div>{{--user-profy end--}}
												<div class="user-profy">
													<img src="images/resources/user1.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div>{{--user-profy end--}}
												<div class="user-profy">
													<img src="images/resources/user2.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div>{{--user-profy end--}}
												<div class="user-profy">
													<img src="images/resources/user3.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div>{{--user-profy end--}}
											</div>{{--profiles-slider end--}}
										</div>{{--top-profiles end--}}

{{--  --}}

										@foreach($post as $posts)
										<div class="posty">
											<div class="post-bar no-margin">
												<div class="post_topbar">
													<div class="usy-dt p-2">
														<img src="{{asset('storage/postImages/'.$posts->file)}}" alt="" class="profileImage">
														<div class="usy-name">
															<h3>{{$posts->name}}</h3>
															<span><img src="images/clock.png" alt="">{{$posts->created_at->diffForHumans()}}</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="job_descp">
													<h3 class="text-center">{{$posts->text}}					
													</h3>
													@php $extension = pathinfo($posts->post_file, PATHINFO_EXTENSION) 
													@endphp
													@php
													$array = array("jpg","png","bmp","jpeg","gif")
													@endphp
													@if(in_array($extension,$array))
													<img src="{{asset('storage/postImages/'.$posts->post_file)}}">
													@else
													<video src="{{asset('storage/postImages/'.$posts->post_file)}}" controls></video>
													@endif

													
													
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a onclick="likePost(this,'{{$posts->id}}',1)"><i class="fas fa-thumbs-up"></i></a>
														</li>
														<li id="{{$posts->id}}like">
															{{(($posts->like == 0?'':$posts->like))}}
														</li>
														<li>
															<a onclick="likePost(this,'{{$posts->id}}',0)">
																<i class="fas fa-thumbs-down"></i>
															</a>
														</li>
														<li id="{{$posts->id}}dislike">
															{{(($posts->dislike == 0?'':$posts->dislike))}}
														</li> 
														<li>
															<a onclick="showComment(this)" class="com"><i class="fas fa-comments"></i></a>
														</li>
														<li>
															{{(($posts->comment == 0?'':$posts->comment))}}
														</li>
													</ul>
													<a href="#"><i class="fas fa-eye"></i>Views 50</a>
												</div>
											</div>{{--post-bar end--}}
											<div class="comment-section">
												<div class="comment-sec">
													<ul>
														<li>
															<div class="comment-list">
																<div class="bg-img">
																	<img src="images/resources/bg-img1.png" alt="">
																</div>
																<div class="comment">
																	<h3>John Doe</h3>
																	<span><img src="images/clock.png" alt=""> 3 min ago</span>
																	<p>Lorem ipsum dolor sit amet, </p>
																	<a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
																</div>
															</div>{{--comment-list end--}}
															<ul>
																<li>
																	<div class="comment-list">
																		<div class="bg-img">
																			<img src="images/resources/bg-img2.png" alt="">
																		</div>
																		<div class="comment">
																			<h3>John Doe</h3>
																			<span><img src="images/clock.png" alt=""> 3 min ago</span>
																			<p>Hi John </p>
																			<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
																		</div>
																	</div>{{--comment-list}}end-->
																</li>
															</ul>
														</li>
														<li>
															<div class="comment-list">
																<div class="bg-img">
																	<img src="images/resources/bg-img3.png" alt="">
																</div>
																<div class="comment">
																	<h3>John Doe</h3>
																	<span><img src="images/clock.png" alt=""> 3 min ago</span>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
																	<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
																</div>
															</div>{{--comment-list end--}}
														</li>
													</ul>
												</div>{{--comment-sec end--}}
												<div class="post-comment">
													<div class="cm_img">
														<img src="images/resources/bg-img4.png" alt="">
													</div>
													<div class="comment_box">
														<form>
															<input type="text" placeholder="Post a comment">
															<button type="submit">Send</button>
														</form>
													</div>
												</div>{{--post-comment end--}}
											</div>{{--comment-section end--}}
										</div>{{--posty end--}}


{{--  --}}
											@endforeach

										<div class="process-comm">
											<div class="spinner">
												<div class="bounce1"></div>
												<div class="bounce2"></div>
												<div class="bounce3"></div>
											</div>
										</div>{{--process-comm end--}}



									</div>{{--posts-section end--}}
								</div>{{--main-ws-sec end--}}
							</div>
							<div class="col-lg-3 pd-right-none no-pd">
								<div class="right-sidebar">
									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>Status</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
										<div class="jobs-list">
											<div class="job-info" id="activeStatus">

											</div>{{--job-info end--}}
										</div>
									</div>
									<div class="widget suggestions full-width">
										<div class="sd-title">
											<h3>Most Viewed People</h3>
											<i class="la la-ellipsis-v"></i>
										</div>{{--sd-title end--}}
										<div class="suggestions-list">
											<div class="suggestion-usd">
												<img src="images/resources/s1.png" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s2.png" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s3.png" alt="">
												<div class="sgt-text">
													<h4>Poonam</h4>
													<span>Wordpress Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s4.png" alt="">
												<div class="sgt-text">
													<h4>Bill Gates</h4>
													<span>C &amp; C++ Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s5.png" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s6.png" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="view-more">
												<a href="#" title="">View More</a>
											</div>
										</div>{{--suggestions-list end--}}
									</div>
								</div>{{--right-sidebar end--}}
							</div>
						</div>
					</div>{{-- main-section-data end--}}
				</div> 
			</div>
		</main>




		<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Post Here</h3>
				<div class="post-project-fields">
					<form id="postForm">
						<div class="row">
							<div class="col-lg-12">
								<textarea name="description" placeholder="Write Something Here"></textarea>
								<div class="error" id="error_description"></div>
							</div>
							<div class="col-lg-12">
								<ul>
									<li>
										<input type="file" name="filePost" id="filePost">
									</li>
									<label for="filePost" class="btn btn-info">Add Photo/Video</label>
									<li>
										<button class="active" type="submit">Post</button>
									</li>
									<div class="error" id="error_filePost"></div>
								</ul>
							</div>
						</div>
					</form>
				</div>{{--post-project-fields end--}}
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div>{{--post-project end--}}
		</div>{{--post-project-popup end--}}


		<div class="chatbox-list">
			<div class="chatbox">
				<div class="conversation-box">
					<div class="con-title mg-3">
						<div class="chat-user-info">
							<img src="images/resources/us-img1.png" alt="">
							<h3>John Doe <span class="status-info"></span></h3>
						</div>
						<div class="st-icons">
							<a href="#" title=""><i class="la la-cog"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
						</div>
					</div>
					<div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div>
						<div class="date-nd">
							<span>Sunday, August 24</span>
						</div>
						<div class="chat-msg st2">
							<p>Cras ultricies ligula.</p>
							<span>5 minutes ago</span>
						</div>
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div>
					</div>{{--chat-list end--}}
					<div class="typing-msg">
						<form>
							<textarea placeholder="Type a message here"></textarea>
							<button type="submit"><i class="fa fa-send"></i></button>
						</form>
						<ul class="ft-options">
							<li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
							<li><a href="#" title=""><i class="la la-camera"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
						</ul>
					</div>{{--typing-msg end--}}
				</div>{{--chat-history end--}}
			</div>
		</div>{{--chatbox-list end--}}

	</div>{{--theme-layout end--}}


<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/additional-methods.min.js')}}"></script>
<script type="text/javascript" src="{{asset('custom-js/create-post.js')}}"></script>
<script type="text/javascript" src="{{asset('custom-js/chatting.js')}}"></script>
<script type="text/javascript">
	let APP_URL = {!! json_encode(url('/')) !!}+"/";
</script>
<script>
$(document).mouseup(function(e){
var con=$('.notification-box');
if (!con.is(e.target) && con.has(e.target).length == 0) {
	$('.notification-box').hide();
}
var con=$('.user-account-settingss');
if (!con.is(e.target) && con.has(e.target).length == 0) {
	$('.user-account-settingss').hide();
}
var con=$('.comment-section');
if (!con.is(e.target) && con.has(e.target).length == 0) {
	$('.comment-section').hide();
}
});
</script>
<script>
	function showComment(arg){
		$(arg).parent().parent().parent().parent().next().toggle();
	}
</script>
</body>
</html>