<div class="board">
	<div class="board-header">
		<a href="/view/board/write">글쓰기</a>
	</div>
	<div class="list">
		<?php foreach($list as $key => $val){ ?>
		<ul>
			<li><?php echo $key+1;?></li>
			<li><a href="/view/board/view?idx=<?php echo $val['idx']; ?>"><?php echo $val['title']?></a></li>
			<li><?php echo $val['name']?></li>
			<li><?php echo $val['day']?></li>
		</ul>
		<?php } ?>	
	</div>
</div>