<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Newton MindMeld</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/animations.css" type="text/css">
<link rel="stylesheet" href="assets/css/styles.css" type="text/css">
</head>
<body>
<div class="pt-page pt-page-login pt-page-current pt-page-current">
		<div class="wrapper">
				<div id="login" class="inside-content">
						<h2 class="text-center">Welcome</h2>
						<h4 class="text-center m-b-60">Please enter the below details.</h4>
						<form class="loginform" id="loginform" action="#" method="POST" role="form">
								<div class="login-container">
										<div class="form-group has-feedback">
												<input class="form-control" placeholder="Username" name="name" type="text" required />
												<span class="inputicon form-control-feedback" aria-hidden="true"></span> </div>
										<div class="form-group has-feedback">
												<input class="form-control" placeholder="Email" name="email" type="email" required />
												<span class="inputicon form-control-feedback" aria-hidden="true"></span> </div>
										<div class="form-group has-feedback">
												<input class="form-control" placeholder="Number" name="number" type="tel" required />
												<span class="inputicon form-control-feedback" aria-hidden="true"></span> </div>
								</div>
								<div class="social-wrapper">
										<h4 class="text-center">Please link your social profiles</h4>
										<div class="social-buttons text-center">
												<label class="custom-control custom-checkbox instagram">
														<input type="checkbox" name="social_profile" value="instagram" class="custom-control-input" />
														<span class="custom-control-indicator"></span> </label>
												<label class="custom-control custom-checkbox facebook">
														<input type="checkbox" name="social_profile" value="facebook" class="custom-control-input" />
														<span class="custom-control-indicator"></span> </label>
												<label class="custom-control custom-checkbox twitter">
														<input type="checkbox" name="social_profile" value="twitter" class="custom-control-input" />
														<span class="custom-control-indicator"></span> </label>
												<label class="custom-control custom-checkbox pinterest">
														<input type="checkbox" name="social_profile" value="pinterest" class="custom-control-input" />
														<span class="custom-control-indicator"></span> </label>
										</div>
								</div>
								<div class="text-center">
										<button type="submit" class="btn cstmbtn"><span class="fa fa-check pull-right"></span> let’s begin</button>
										<p class="help-text pt-3">By entering the details, you agree to the<br/>
												<a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p>
								</div>
						</form>
				</div>
		</div>
</div>
<div id="questionSeries">
<form action="#" id="questions" name="reviewform" method="POST">
<input type="hidden" value="15" id="reviewUser"  />
		<div class="pt-page pt-page-1">
				<div class="wrapper">
						<div class="inside-content question-container">
								<div class="question-grid">
										<div class="btn-group" data-toggle="buttons">
												<div class="row">
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-1.jpg" alt="" />
																				<input name="question_one" value="que-img-1.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-2.jpg" alt="" />
																				<input name="question_one" value="que-img-2.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-3.jpg" alt="" />
																				<input name="question_one" value="que-img-3.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-4.jpg" alt="" />
																				<input name="question_one" value="que-img-4.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
												</div>
										</div>
								</div>
								<ul class="list-unstyled clearfix slide-navigation">
										<li>&nbsp;</li>
										<li class="fav-text text-center"> Choose your favourite </li>
										<li><a href="#" data-id="slide-next" class="slide-next disabled"></a></li>
								</ul>
						</div>
				</div>
		</div>
		
		<div class="pt-page pt-page-2">
				<div class="wrapper">
						<div class="inside-content question-container">
								<div class="question-grid">
										<div class="btn-group" data-toggle="buttons">
												<div class="row">
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-5.jpg" alt="" />
																				<input name="question_two" value="que-img-5.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-6.jpg" alt="" />
																				<input name="question_two" value="que-img-6.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-7.jpg" alt="" />
																				<input name="question_two" value="que-img-7.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-8.jpg" alt="" />
																				<input name="question_two" value="que-img-8.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
												</div>
										</div>
								</div>
								<ul class="list-unstyled clearfix slide-navigation">
										<li><a href="#" data-id="slide-prev" class="slide-prev"></a></li>
										<li class="fav-text text-center"> Choose your favourite </li>
										<li><a href="#" data-id="slide-next" class="slide-next disabled"></a></li>
								</ul>
						</div>
				</div>
		</div>
		<div class="pt-page pt-page-3">
				<div class="wrapper">
						<div class="inside-content question-container">
								<div class="question-grid">
										<div class="btn-group" data-toggle="buttons">
												<div class="row">
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-9.jpg" alt="" />
																				<input name="question_three" value="que-img-9.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-10.jpg" alt="" />
																				<input name="question_three" value="que-img-10.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-11.jpg" alt="" />
																				<input name="question_three" value="que-img-11.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-12.jpg" alt="" />
																				<input name="question_three" value="que-img-12.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
												</div>
										</div>
								</div>
								<ul class="list-unstyled clearfix slide-navigation">
										<li><a href="#" data-id="slide-prev" class="slide-prev active"></a></li>
										<li class="fav-text text-center"> Choose your favourite </li>
										<li><a href="#" data-id="slide-next" class="slide-next disabled"></a></li>
								</ul>
						</div>
				</div>
		</div>
		<div class="pt-page pt-page-4">
				<div class="wrapper">
						<div class="inside-content question-container">
								<div class="question-grid">
										<div class="btn-group" data-toggle="buttons">
												<div class="row">
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-13.jpg" alt="" />
																				<input name="question_four" value="que-img-13.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-14.jpg" alt="" />
																				<input name="question_four" value="que-img-14.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-15.jpg" alt="" />
																				<input name="question_four" value="que-img-15.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-16.jpg" alt="" />
																				<input name="question_four" value="que-img-16.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
												</div>
										</div>
								</div>
								<ul class="list-unstyled clearfix slide-navigation">
										<li><a href="#" data-id="slide-prev" class="slide-prev active"></a></li>
										<li class="fav-text text-center"> Choose your favourite </li>
										<li><a href="#" data-id="slide-next" class="slide-next disabled"></a></li>
								</ul>
						</div>
				</div>
		</div>
		<div class="pt-page pt-page-5">
				<div class="wrapper">
						<div class="inside-content question-container">
								<div class="question-grid">
										<div class="btn-group" data-toggle="buttons">
												<div class="row">
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-17.jpg" alt="" />
																				<input name="question_five" value="que-img-17.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-18.jpg" alt="" />
																				<input name="question_five" value="que-img-18.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-19.jpg" alt="" />
																				<input name="question_five" value="que-img-19.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-20.jpg" alt="" />
																				<input name="question_five" value="que-img-20.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
												</div>
										</div>
								</div>
								<ul class="list-unstyled clearfix slide-navigation">
										<li><a href="#"  data-id="slide-prev" class="slide-prev active"></a></li>
										<li class="fav-text text-center"> Choose your favourite </li>
										<li><a href="#" data-id="slide-next" class="slide-next disabled"></a></li>
								</ul>
						</div>
				</div>
		</div>
		<div class="pt-page pt-page-6">
				<div class="wrapper">
						<div class="inside-content question-container">
								<div class="question-grid">
										<div class="btn-group" data-toggle="buttons">
												<div class="row">
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-21.jpg" alt="" />
																				<input name="question_six" value="que-img-21.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-22.jpg" alt="" />
																				<input name="question_six" value="que-img-22.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-23.jpg" alt="" />
																				<input name="question_six" value="que-img-23.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-24.jpg" alt="" />
																				<input name="question_six" value="que-img-24.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
												</div>
										</div>
								</div>
								<ul class="list-unstyled clearfix slide-navigation">
										<li><a href="#" data-id="slide-prev" class="slide-prev active"></a></li>
										<li class="fav-text text-center"> Choose your favourite </li>
										<li><a href="#" data-id="slide-next" class="slide-next disabled"></a></li>
								</ul>
						</div>
				</div>
		</div>
		<div class="pt-page pt-page-7">
				<div class="wrapper">
						<div class="inside-content question-container">
								<div class="question-grid">
										<div class="btn-group" data-toggle="buttons">
												<div class="row">
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-25.jpg" alt="" />
																				<input name="question_seven" value="que-img-25.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-26.jpg" alt="" />
																				<input name="question_seven" value="que-img-26.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-27.jpg" alt="" />
																				<input name="question_seven" value="que-img-27.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-28.jpg" alt="" />
																				<input name="question_seven" value="que-img-28.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
												</div>
										</div>
								</div>
								<ul class="list-unstyled clearfix slide-navigation">
										<li><a href="#" data-id="slide-prev" class="slide-prev active"></a></li>
										<li class="fav-text text-center"> Choose your favourite </li>
										<li><a href="#" data-id="slide-next" class="slide-next disabled"></a></li>
								</ul>
						</div>
				</div>
		</div>
		<div class="pt-page pt-page-8">
				<div class="wrapper">
						<div class="inside-content question-container">
								<div class="question-grid">
										<div class="btn-group" data-toggle="buttons">
												<div class="row">
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-29.jpg" alt="" />
																				<input name="question_eight" value="que-img-29.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-30.jpg" alt="" />
																				<input name="question_eight" value="que-img-30.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-31.jpg" alt="" />
																				<input name="question_eight" value="que-img-31.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-32.jpg" alt="" />
																				<input name="question_eight" value="que-img-32.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
												</div>
										</div>
								</div>
								<ul class="list-unstyled clearfix slide-navigation">
										<li><a href="#" data-id="slide-prev" class="slide-prev active"></a></li>
										<li class="fav-text text-center"> Choose your favourite </li>
										<li><a href="#" data-id="slide-next" class="slide-next disabled"></a></li>
								</ul>
						</div>
				</div>
		</div> 
		
		<div class="pt-page pt-page-9">
				<div class="wrapper">
						<div class="inside-content question-container">
								<div class="question-grid">
										<div class="btn-group" data-toggle="buttons">
												<div class="row">
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-33.jpg" alt="" />
																				<input name="question_nine" value="que-img-33.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-34.jpg" alt="" />
																				<input name="question_nine" value="que-img-34.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-35.jpg" alt="" />
																				<input name="question_nine" value="que-img-35.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
														<div class="col col-6 text-center">
																<div class="form-group qustion-img">
																		<label class="btn btn-primary"> <img src="assets/img/questions/que-img-36.jpg" alt="" />
																				<input name="question_nine" value="que-img-36.jpg" type="radio" autocomplete="off" hidden />
																		</label>
																</div>
														</div>
												</div>
										</div>
								</div>
								<ul class="list-unstyled clearfix slide-navigation">
										<li><a href="#" data-id="slide-prev" class="slide-prev active"></a></li>
										<li class="fav-text text-center"> Choose your favourite </li>
										<li><a href="#" data-id="slide-next" class="slide-next disabled"></a></li>
								</ul>
						</div>
				</div>
		</div>
</form>
</div>
<div id="review-details">
		<div class="pt-page pt-page-1-review btn-review">
				<div class="wrapper">
						<div class="inside-content question-container">
								<h2 class="text-center">You're all set!</h2>
								<figure class="text-center sign-img"><img src="assets/img/check-sign-img.png" /></figure>
								<div class="text-center">
										<button type="button" data-id="btnReview" class="btn cstmbtn"><span class="fa fa-arrow-right pull-right"></span> Reviews</button>
										<hr class="cstm-divider mb-0">
										<p class="help-text help-text-dark pt-3">You can edit or review your choices after this step.</p>
								</div>
						</div>
				</div>
		</div>
		<div class="pt-page pt-page-2-review btn-onReview">
				<div class="wrapper">
						<div class="inside-content question-container">
								<h3 class="text-center">Please review your choices</h3>
								<h4 class="text-center">Click on the thumbnail to edit.</h4>
								<div id="questionReviewContainer"></div>
								
								<script id="questionReviewTemplate" type="text/x-jQuery-tmpl">
									<div class="final-answer-list clearfix">
										<div class="row">
												<div class="col col-4 final-answer"> <a href="#" data-title="1" data-id="pt-page-1" class="pt-page-review"> <img src="assets/img/questions/${questionOne}" /> </a> </div>
												<div class="col col-4 final-answer"> <a href="#" data-title="2" data-id="pt-page-2" class="pt-page-review"> <img src="assets/img/questions/${questionTwo}" /> </a> </div>
												<div class="col col-4 final-answer"> <a href="#" data-title="3" data-id="pt-page-3" class="pt-page-review"> <img src="assets/img/questions/${questionThree}" /> </a> </div>
										</div>
										<div class="row">
												<div class="col col-4 final-answer"> <a href="#" data-title="4" data-id="pt-page-4" class="pt-page-review"> <img src="assets/img/questions/${questionFour}" /> </a> </div>
												<div class="col col-4 final-answer"> <a href="#" data-title="5" data-id="pt-page-5" class="pt-page-review"> <img src="assets/img/questions/${questionFive}" /> </a> </div>
												<div class="col col-4 final-answer"> <a href="#" data-title="6" data-id="pt-page-6" class="pt-page-review"> <img src="assets/img/questions/${questionSix}" /> </a> </div>
										</div>
										<div class="row">
												<div class="col col-4 final-answer"> <a href="#" data-title="7" data-id="pt-page-7" class="pt-page-review"> <img src="assets/img/questions/${questionSeven}" /> </a> </div>
												<div class="col col-4 final-answer"> <a href="#" data-title="8" data-id="pt-page-8" class="pt-page-review"> <img src="assets/img/questions/${questionEight}" /> </a> </div>
												<div class="col col-4 final-answer"> <a href="#" data-title="9" data-id="pt-page-9" class="pt-page-review"> <img src="assets/img/questions/${questionNine}" /> </a> </div>
										</div>
								</div>
								
								</script>
								
							
								
								<div class="text-center">
										<button type="button" data-id="btnSubmit" class="btn cstmbtn cstmbtn2"><span class="fa fa-arrow-right pull-right"></span> Submit</button>
								</div>
						</div>
				</div>
		</div>
		<div class="pt-page pt-page-3-review btn-thankyou">
				<div class="wrapper">
						<div class="inside-content question-container">
								<h2 class="text-center">Thank you</h2>
								<figure class="text-center sign-img"><img src="assets/img/thumb.png" /></figure>
						</div>
				</div>
		</div>
</div>
<script src="assets/js/jquery.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/js/jquery.tmpl.js"></script>
<script src="assets/js/tether.min.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/js/validator.min.js" type="text/javascript"></script> 
<script src="assets/js/main.js" type="text/javascript"></script>
</body>
</html>