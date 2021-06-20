<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <base href="{{ asset('public/fontend') }}/">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Shop xe mô hình </title><link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="assets/dest/css/style.css">
	<link rel="stylesheet" href="assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="assets/dest/css/huong-style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	
</head>
<body>
	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> 89- Nguyễn Văn Vinh, Trung Hưng, Yên Mĩ</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0868 085 8888</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="">Đăng kí</a></li>
						<?php
                        $customer_name =Session::get('name');
                        ?>

                        <?php
                            $customer_id = Session::get('id');
                            if($customer_id != NULL){
                        ?>
                            <li><a href="{{URL::to('loginaa')}}"><i class="fa fa-user"></i><?php echo $customer_name ?></a></li>
                            <li><a href="{{URL::to('logout')}}">Đăng xuất</a></li>
                        <?php
                        }
						else {
                            ?>
                            <li><a href="{{URL::to('loginaa')}}">Đăng nhập</a></li>
                            <?php
							}
							?>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="index.html" id="logo"><img  src="image/product/logo_mohinh.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/">
					        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						
						<div class="cart">

								<a href="{{asset('show-cart')}}">Giỏ hàng </a> <i class="fa fa-chevron-down"></i>
							
							
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{ asset('/trang_chu') }}">Trang chủ</a></li>
						<li><a href="#">Loại sản phẩm</a>
							<ul class="sub-menu">
							@foreach ($loai_sp as $loai)																					
								 <li><a href="{{ asset('loai_sanpham/'.$loai->id)}}">{{$loai->name}}</a></li>															
							@endforeach
						</ul>
						</li>
						<li><a href="{{ asset('/gioi_thieu') }}">Giới thiệu</a></li>
						<li><a href="{{ asset('/lien_he') }}">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	
	@yield('content')

	<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Instagram </h4>
						<p>30 , CA 94108 Điện thoại: +78 123 456 78</p>
						<div id="beta-instagram-feed"><div></div></div>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="widget">
						<h4 class="widget-title">Thông tin</h4>
						<div>
							<ul>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Thiết kế web</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Phát triển web</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tiếp thị</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Lời khuyên</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tài nguyên</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Hình minh họa</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
				 <div class="col-sm-10">
					<div class="widget">
						<h4 class="widget-title">Liên hệ chúng tôi</h4>
						<div>
							<div class="contact-info">
								<i class="fa fa-map-marker"></i>
								<p>30 Trung Hưng-Yên Mĩ-Hưng yên, CA 94108 Điện thoại: +78 123 456 78</p>
								
							</div>
						</div>
					</div>
				  </div>
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Đăng ký bản tin</h4>
						<form action="#" method="post">
							<input type="email" name="your_email">
							<button class="pull-right" type="submit">Đăng kí <i class="fa fa-chevron-right"></i></button>
						</form>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Chính sách bảo mật. (©) 2021</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="assets/dest/js/jquery.js"></script>
	<script src="assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="assets/dest/vendors/animo/Animo.js"></script>
	<script src="assets/dest/vendors/dug/dug.js"></script>
	<script src="assets/dest/js/scripts.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/dest/js/waypoints.min.js"></script>
	<script src="assets/dest/js/wow.min.js"></script>
	
	<!--customjs-->
	<script src="assets/dest/js/custom2.js"></script>
	<script src="assets/dest/js/addcart.js"></script>
	<script src="assets/dest/js/deletecart.js"></script>
	<script src="assets/dest/js/editcart.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>

@yield('js')
</body>
</html>
