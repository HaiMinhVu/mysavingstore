@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Contacts</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="index.html">Home</a> / <span>Contacts</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content" class="space-top-none">
		
		<div class="space50">&nbsp;</div>
		<div class="row">
			<div class="col-sm-8">
				<h2>Contact Form</h2>
				<div class="space20">&nbsp;</div>
				<p>Please fill out the form below.</p>
				<div class="space20">&nbsp;</div>
				<form action="#" method="post" class="contact-form">	
					<div class="form-block">
						<input name="your-name" type="text" placeholder="Your Name (required)">
					</div>
					<div class="form-block">
						<input name="your-email" type="email" placeholder="Your Email (required)">
					</div>
					<div class="form-block">
						<input name="your-subject" type="text" placeholder="Subject">
					</div>
					<div class="form-block">
						<textarea name="your-message" placeholder="Your Message"></textarea>
					</div>
					<div class="form-block">
						<button type="submit" class="beta-btn primary">Send Message <i class="fa fa-chevron-right"></i></button>
					</div>
				</form>
			</div>
			<div class="col-sm-4">
				<h2>Contact Information</h2>
				<div class="space20">&nbsp;</div>

				<h6 class="contact-title">Address</h6>
				<p>
					4009 Knollbrook ln<br>
					Fort Worth, TX 76137
				</p>
				<div class="space20">&nbsp;</div>
				<h6 class="contact-title">Email</h6>
				<p>
					<a href="mailto:biz@betadesign.com">annhieukhivui2007@yahoo.com</a>
				</p>
			</div>
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->

<div class="beta-map">
	
	<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=4009%20Knollbrook%20Lane,%20Fort%20Worth,%20TX,%20USA+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" ></iframe></div>
</div>
@endsection