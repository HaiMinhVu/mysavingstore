<div id="footer" class="color-div">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="widget">
					<h4 class="widget-title">Information</h4>
					<div>
						<ul>
							@foreach($menu as $row)
							<li><a href="category/{{$row->id}}"><i class="fa fa-chevron-right"></i>{{$row->name}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
			 <div class="col-sm-12">
				<div class="widget">
					<h4 class="widget-title">Contact Us</h4>
					<div>
						<div class="contact-info">
							<i class="fa fa-map-marker"></i>
							<p>Fort Worth, TX 76137</p>
							<p>Phone: 682 559 4341</p>
						</div>
					</div>
				</div>
			  </div>
			</div>
		</div> <!-- .row -->
	</div> <!-- .container -->
</div> <!-- #footer -->
<div class="copyright">
	<div class="container">
		<!-- <p class="pull-left">Website được phát triển bởi <a href="http://vucongthanh.com/">Vũ Công Thành</a></p>
		<p class="pull-right pay-options">
			<a href="#"><img src="assets/dest/images/pay/master.jpg" alt="" /></a>
			<a href="#"><img src="assets/dest/images/pay/pay.jpg" alt="" /></a>
			<a href="#"><img src="assets/dest/images/pay/visa.jpg" alt="" /></a>
			<a href="#"><img src="assets/dest/images/pay/paypal.jpg" alt="" /></a>
		</p>
		<div class="clearfix"></div> -->
	</div> <!-- .container -->
</div> <!-- .copyright -->