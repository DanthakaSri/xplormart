@extends('layouts.baseApp')

@section('title','Contact Us')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')
<!-- PAGE TITLE SECTION -->
<section class="clearfix pageTitleSection bg-image" style="background-image: url(img/background/contact-us.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pageTitle">
					<h2>Contact Us</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- CONTACT SECTION -->
<section class="clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="contactInfo">
					<ul class="list-unstyled list-address">
						<li>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							Ellengowan Dr,  <br> Casuarina NT 0810
						</li>
						<li>
							<i class="fa fa-phone" aria-hidden="true"></i>
							(08) 8946 6666 <br> (08) 8946 6667
						</li>
						<li>
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<a href="#">info@xplormart.com</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-8 col-xs-12">
				<div class="signUpFormArea">
					<div class="priceTableTitle">
						<h2>Get inTouch</h2>
						<p>Please feel free to contact us if you have queries, require more information or require to update any info of markets.</p>
                        <p>Please send your query by sending an email to info@xplormart.com or press the button below. </p>
					</div>
					<div class="signUpForm">
						<form action="mailto:info@explormart.com" method="">
							<div class="formSection">
								<div class="row">
									<!-- <div class="form-group col-sm-6 col-xs-12">
										<label for="selectSome" class="control-label">Subject*</label>
										<div class="contactSelect">
											<select name="guiest_id8" id="guiest_id8" class="select-drop form-control">
												<option value="0">-- Select Subject --</option>
												<option value="1">General queries</option>
												<option value="2">Special queries</option>
												<option value="3">Market details update queries</option>            
											</select>
										</div>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="companyName" class="control-label">Company Name*</label>
										<input type="text" class="form-control" id="companyName">
									</div>
									<div class="form-group col-xs-12">
										<label for="yourName" class="control-label">Your Name*</label>
										<input type="text" class="form-control" id="yourName">
									</div>
									<div class="form-group col-xs-12">
										<label for="emailAddress" class="control-label">Email Address*</label>
										<input type="email" class="form-control" id="emailAddress">
									</div>
									<div class="form-group col-xs-12">
										<label for="textBox" class="control-label">Query*</label>
										<textarea class="form-control" rows="3"></textarea>
									</div> -->
									<div class="form-group col-xs-12 mb0">
                                    <button type="submit" class="btn btn-primary sendQ">Send your query now</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection