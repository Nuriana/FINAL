<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Website Bandung For Bandung</title>
<link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Graphic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script>
		$(document).ready(function () {
		    size_li = $("#myList li").size();
		    x=3;
		    $('#myList li:lt('+x+')').show();
		    $('#loadMore').click(function () {
		        x= (x+1 <= size_li) ? x+1 : size_li;
		        $('#myList li:lt('+x+')').show();
		    });
		    $('#showLess').click(function () {
		        x=(x-1<0) ? 1 : x-1;
		        $('#myList li').not(':lt('+x+')').hide();
		    });
		});
	</script>

</head>
<body>
<!-- header -->
<div class="banner">
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="<?= base_url('home') ?>"><img src="<?= base_url() ?>assets/images/LOGO.png" class="img-responsive" alt="" /></a>
			</div>
			<div class="header-right">
				<ul>
					<li><a href="#"><i class="fb"> </i></a></li>
					<li><a href="#"><i class="twt"> </i></a></li>
				<li>
				<div class="search2">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
						<input type="submit" value="">
					</form>
				</div></li>
					<div class="clearfix"></div>
				</ul>
					
			</div>
				<div class="clearfix"> </div>
			</div>
				<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-15">
						<li class="active"><a href="<?= base_url('home') ?>">HOME</a></li>
							<li><a href="<?= base_url('about') ?>" data-hover="ABOUT">ABOUT</a></li>
							<li><a href="<?= base_url('photos') ?>" data-hover="PHOTOS">PHOTOS</a></li>
							<li><a href="<?= base_url('contact') ?>" data-hover="CONTACT">CONTACT</a></li>
							<li><a href="<?= base_url('input_data') ?>" data-hover="POST">POST</a></li>
							<?php if ($this->session->userdata('email') == TRUE){ ?>	
								<li><a href="<?= base_url('input_data/logout') ?>" data-hover="LOGOUT">LOGOUT</a></li>
							<?php }else{ ?>
								<li><a href="<?= base_url('login') ?>" data-hover="LOGIN">LOGIN</a></li>
							<?php } ?>							
							<li class="pull-right"><a href="" data-hover=""><?php echo "" . date("l d/m/Y");?></a></li>
								<div class="clearfix"> </div>
						</ul>
				</div>

						<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 					 
	</div> 
</div>
<!-- header -->

	<?php foreach ($tampildetail as $tampil): ?>
<div class="photos">
<div class="container">
		<h2><?= $tampil->judul ?></h2>	
	<div class="details">
		<div class="container">
			<div class="det_pic">
				  <img src="<?= base_url() ?><?= $tampil->path.$tampil->nama_foto ?>" class="container" alt="">
			</div>
			<div class="details">
			</div>
			<h2>Deskripsi
			</h2>
			<div class="det_text">
		

			<p><?= $tampil->deskripsi ?></p>	
			</div>
			<ul class="links">
				  		 <li><i class="date"> </i><span class="icon_text"><?= $tampil->tgl_input ?></span></li>
				  		 <li><a href="#"><i class="admin"> </i><span class="icon_text"><?= $tampil->nama ?></span></a></li>
				    </ul>
			 <div class="comments1">
								<h4>KOMENTAR</h4>
			  				<div class="comments-main">
									<div class="col-md-2 cmts-main-left">
			
									</div>
									<div class="col-md-10 cmts-main-right">
										<h5></h5>
										<p></p>
										<div class="cmts">
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
			  				</div>
			<div class="lev">
			<div class="leave">
				<h4>KOMENTAR</h4>
				</div>
				<form id="commentform">
				    <label for="author">Nama</label>
						<input id="author" name="author" type="text" value="" size="30" aria-required="true">
						<label for="email">Email</label>
						<input id="email" name="email" type="text" value="" size="30" aria-required="true">
						<label for="url">Blogspot</label>
						<input id="url" name="url" type="text" value="" size="30">
						<label for="comment">Komentar</label>
						<textarea></textarea>
					 <div class="clearfix"></div>
			           <input name="submit" type="submit" id="submit" value="Kirim">
					<div class="clearfix"></div>
				   </form>
				  </div>
				  
		</div>
	</div>
	</div>
	</div>
	<?php endforeach; ?>
<!-- footer -->
<div class="footer">
		<div class="container">
			<div class="col-md-6 col-md-offset-4 contact-left">
				<div class="top1">
					<i class="ham"></i>
				</div>
				<div class="top2">
					<h6>Copyrights © BankaretaStudio</h6>
					<h6>2015</h6>
				</div>
				
	</div>
<!-- footer -->
</body>
</html>