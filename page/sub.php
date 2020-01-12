<?php 
	$menu = menuModel::$menu;
	$chk = isset($menu[$_GET['controller']]['sub']);
	$class = $chk? '' : 'active';
?>
<div id="body">
	<div class="cont-top"></div>
	<div class="cont-bottom">
		<h3 class="nav">
			<ul>
				<li><a href="/view">HOME</a></li>
				<li class="<?php echo $class;?>"> &gt;
					<a href="/view/<?php echo $_GET['controller'].'/'.$_GET['controller']; ?>">
						<?php echo $menu[$_GET['controller']]['title']?>
					</a>
				</li>
				<?php if($chk && isset($menu[$_GET['controller']]['sub'][$_GET['method']])){ ?>
				<li class="active"> &gt;
					<strong>
						<?php echo $menu[$_GET['controller']]['sub'][$_GET['method']]?>
					</strong>
				</li>
				<?php }?>
			</ul>
		</h3>
		<h4>
			<strong><?php echo $menu[$_GET['controller']]['title']; ?></strong>
			Dream Rental홈페이지에 방문하신 것을 환영합니다.
		</h4>
		<ul class="site-menu">
			<?php
				if(isset($menu[$_GET['controller']]['sub'])){
				foreach($menu[$_GET['controller']]['sub'] as $key => $val){
				$class = $key === $_GET['method']? 'active' : '';
			?>
			<li class="<?php echo $class; ?>">
				<a href="/view/<?php echo $_GET['controller'].'/'.$key?>">
					<?php echo $val; ?>
				</a>
			</li>
			<?php } } ?>
		</ul>
		<div class="content">
			<?php
				include PAGE.$_GET['controller'].'/'.$_GET['method'].'.php';
			?>
		</div>
	</div>
</div>