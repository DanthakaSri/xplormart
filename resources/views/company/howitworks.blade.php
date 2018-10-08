@extends('layouts.baseApp')

@section('title','How It Works')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')
<!-- PAGE TITLE SECTION -->
<section class="clearfix pageTitleSection" style="background-image: url(img/background/how.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pageTitle">
					<h2>how it works</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- HOW WORKS SECTION -->
<section class="clearfix howWorksSection">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="howWorksInner">
					<div class="row">
						<div class="col-sm-4 col-sm-push-8 col-xs-12">
							<div class="howWorksImage text-right"><img src="img/works/works-big-1.png" alt="Image Works"></div>
						</div>
						<div class="col-sm-8 col-sm-pull-4 col-xs-12">
							<div class="howWorksInfo text-left">
								<p>Step 1</p>
								<h3>Find what you want</h3>
								<p>User can search a local market based on keyword, type and current location and it will provide best results for your search.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="howWorksInner">
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<div class="howWorksImage text-left"><img src="img/works/works-big-2.png" alt="Image Works"></div>
						</div>
						<div class="col-sm-8 col-xs-12">
							<div class="howWorksInfo text-right">
								<p>Step 2</p>
								<h3>Review and rate markets</h3>
								<p>We need your accurate feedback to improve the quality of our services and it will help other users to find accurate markets quickly.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="howWorksInner">
					<div class="row">
						<div class="col-sm-4 col-sm-push-8 col-xs-12">
							<div class="howWorksImage text-right"><img src="img/works/works-big-3.png" alt="Image Works"></div>
						</div>
						<div class="col-sm-8 col-sm-pull-4 col-xs-12">
							<div class="howWorksInfo text-left">
								<p>Step 3</p>
								<h3>Add markets</h3>
								<p>If you truly own a market or have authority to publish about markets, please feel free to add markets and grow this platform.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection