<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact | webgiaodoannhanh</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.cssv')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.cssv')}}" rel="stylesheet">    
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
    <title>Contact</title>
</head>
<body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +0336677269</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> dangtrung2812@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->
            
            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <?php
                                       $customer_id = Session::get('customer_id');
                                       $shipping_id = Session::get('shipping_id');
                                       if($customer_id!=NULL && $shipping_id==NULL){ 
                                     ?>
                                      <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                    
                                    <?php
                                     }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                     ?>
                                     <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                     <?php 
                                    }else{
                                    ?>
                                     <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                    <?php
                                     }
                                    ?>
                                   
                                    <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                    <?php
                                       $customer_id = Session::get('customer_id');
                                       if($customer_id!=NULL){ 
                                     ?>
                                      <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
                                    
                                    <?php
                                }else{
                                     ?>
                                     <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                                     <?php 
                                 }
                                     ?>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->
        
            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div> 
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
                                    <li ><a href="{{URL::to('/san-pham')}}" >Sản phẩm</a></li>
                                     <li><a href="{{URL::to('/show-cart')}}" >Giỏ hàng</a></li> 
                                    <li><a href="{{URL::to('/contact')}}" >Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <form action="{{URL::to('/tim-kiem')}}" method="POST">
                                {{csrf_field()}}
                            <div class="search_box pull-right">
                                <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                                <input type="submit" style="margin-top:0;color:#666" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->
    <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Liên <strong> hệ</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14896.507253029407!2d105.76031428709538!3d21.027611304812247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454bab9b67e93%3A0xbbe16aced529963f!2zTeG7uSDEkMOsbmgsIE5hbSBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1575908365977!5m2!1svi!2s" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
                        <br>
	    				<h2 class="title text-center"> Phản hồi </h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Tên của bạn">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Tiêu đề">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Nội dung"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="gửi">
				            </div>
				        </form>
	    			</div>
                </div>
                <br>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Thông tin</h2>
	    				<address>
                            <p> Webgiaodoannhanh </p>
                            <br>
                            <p> Mỹ Đình - Nam Từ Liêm - Hà Nội </p>
                            <br>
                            <p> SĐT: 0336677269 </p>
                            <br>
                            <p>Email: dangtrung2812@gmail.com</p>
                            <br>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
    <footer id="footer"><!--Footer-->
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                   
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2> List danh mục </h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Nước ngọt</a></li>
                                <li><a href="#">Đồ ăn nhanh</a></li>
                                <li><a href="#">Gà</a></li>
                                <li><a href="#">Cơm suất</a></li>
                                <li><a href="#">Bánh mì</a></li>
                            </ul>
                        </div>
                    </div>
        
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Webgiaodoannhanh.com.vn</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li> Mỹ Đình - Nam Từ Liêm - Hà Nội</li>
                                <li> 0336677269 </li>
                                <li> dangtrung2812@gmail.com </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2> Nhận thông tin từ chúng tôi </h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Email của bạn" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2019 www.webbandoannhanh.com.vn.</p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script type="{{asset('public/frontend/text/javascript')}}" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="{{asset('public/frontend/text/javascript')}}" src="js/gmaps.js"></script>
	<script src="{{asset('public/frontend/js/contact.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>