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
<div class="contact-top">
<div class="container">
				
			<div class="contact">
			
	
					<div class="contact-down">
							<div class="contact-right">
								<h2>Input Data</h2>
								<p><div class="form-group"></div></p>
								<?= form_open_multipart(base_url().'input_data/upload_data'); ?>
								<div class="col-md-4 col-md-offset-4 contact-left">
									<div class="form-group">
										<label>Nama Tempat</label>
										<input type="text" name="judul" class="form-control">
									</div>
									<label>Deskripsi</label>
									 <div class="form-group">
									
										
									<textarea name="deskripsi" rows="10" cols="50" class="form-group"> </textarea>
									</div>
									
									<div class="form-group">
										<div class="radio">
											<label>
												Kuliner
												<input type="radio" name="id_kategori" value="1" placeholder="">
											</label>
										</div>
										<div class="radio">
											<label>
												Wisata
												<input type="radio" name="id_kategori" value="2" placeholder="">
											</label>
										</div>
									</div>
									<div class="form-group">
										<label>Lokasi</label>
										<select name="id_lokasi" id="" class="form-control">
											<?php foreach ($lokasi as $reslokasi): ?>
											<option value="<?= $reslokasi->id_lokasi ?>"><?= $reslokasi->nama_lokasi ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group">
										<label>Foto</label>
										<input type="file" name="foto" value="" placeholder="">
									</div>
									<div class="form-inline">
										<div class="form-group">
											<button class="btn btn-primary">POST</button>
										</div>
									</div>
									<?= form_open('input_data'); ?>
								</div>
								<div class="clearfix"> </div>
								</div>
			</div>
</div>	
	</div>
</div>
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