@extends('layouts.baseApp')

@section('title','Terms and Conditions')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')
<!-- PAGE TITLE SECTION -->
<section class="clearfix pageTitleSection bg-image" style="background-image: url(img/background/terms.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pageTitle">
					<h2>Terms and Conditions</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- TERMS INFO SECTION -->
<section class="clearfix termsInfoSection">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="list-unstyled termsList">
					<li>
						<p>To advertise your market please ensure that you read the following terms and conditions.</p>
					</li>
					<li>
						<h3>Fair use of site</h3>
						<p>We are not responsible for any damages caused by the use of this website, or by posting markets here. Please use our site at your own discretion and exercise good judgement as well as common sense when adding markets here.</p>
					</li>
					<li>
						<h3>Market deletion</h3>
						<p>We reserve the right to remove any markets if we feel that they're infringing on any laws or if they contain objectionable material such as adult content (including images, vulgar language, content or links). In such cases, the business poster will receive a full refund for the market.</p>
					</li>
					<li>
						<h3>Security and privacy</h3>
						<p>We make every possible attempt to keep your personal information safe, using the latest technology in Internet security. However, you should be aware that our site, as well as any other site, can potentially be a target for hackers. Please do not post any information on the site that is sensitive or that you would not want disclosed in case of an unlikely security breach. We use cookies to store information locally for advanced features of the site's operation, such as favorites, notes and alerts. Your personal details are not shared, rented or sold to any external companies or advertisers under any circumstances.</p>
					</li>
					<li>
						<h3>Governing Law</h3>
						<p>Government laws can be vary based on regions and we recommend to read goverment polices in your local before posting any market.</p>
					</li>
					<li>
						<h3>Contact Us</h3>
						<p>If you have any questions, concerns, or suggestions regarding this terms, please <a href="/contact">contact us</a>.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection