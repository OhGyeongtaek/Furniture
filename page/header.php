<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" href="/static/css/commen.css" />
  <link rel="stylesheet" href="/static/css/<?php echo $link.'.css'?>" />
  <link rel="stylesheet" href="/static/css/ui.css" />
  <link rel="stylesheet" href="/static/css/print.css" />
  <script type="text/javascript" src="/static/js/jquery.js"></script>
  <script type="text/javascript" src="/static/js/jquery_ui.js"></script>
  <script type="text/javascript" src="/static/js/js.js"></script>
  <title>Document</title>
 </head>
 <body>
 <div class="wrap">
	<div id="header">
		<div class="header">
			<div class="header-top">
				<ul>
					<li><a href="/view/else/sitemap">SITEMAP</a></li>
					<li><a href="mailTo:admin@furniture.co.kr">Contact Us</a></li>
					<li>가입한 회원수  &#58; <?php echo @$cnt_user?>명</li>
					<li>가구보유 건수 &#58; <?php echo @$cnt_gagu?>건</li>
					<?php if(isset($_SESSION['id'])){ ?>
					<li><a href="/action/service/logout">LOGOUT</a></li>
					<?php }else{?>
					<li><a href="/view/service/login">LOGIN</a></li>
					<?php }?>
				</ul>
			</div>
			<div class="header-bottom">
				<h1 id="logo"><a href="/view"><img src="/static/img/logo.png" alt="logo" /></a></h1>
				<ul>
					<li><a href="/view">HOME</a></li>
					<?php foreach(menuModel::$menu as $key => $val){?>
					<li>
						<a href="/view/<?php echo $key.'/'.$key?>"><?php echo $val['title']?></a>
						<?php
							if(isset($val['sub'])){
								echo '<ul>';
								foreach($val['sub'] as $skey => $sval){
						?>
							<li><a href="/view/<?php echo $key.'/'.$skey?>"><?php echo $sval; ?></a></li>
						<?php
								}
								echo '</ul>';
							}
						?>
					</li>
					<?php } ?>
				</ul>			
			</div>
		</div>
	</div>