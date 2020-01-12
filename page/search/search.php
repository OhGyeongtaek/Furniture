<div class="search">
	<form action="/view/search/search" method="get">
		<input type="text" name="key"/>
		<input type="submit" value="확인" />
	</form>
	<?php if(isset($_GET['key'])){?>
	<?php if(isset($_SESSION['id'])){ ?>
	<table class="tableSkin">
		<thead>
			<th>가구명</th>
			<th>제조사</th>
			<th>입수일</th>
			<th>사용용도</th>
			<th>상태</th>
			<th>대여</th>
		</thead>
		<tbody>
		<?php foreach($data as $key => $val){ ?>
			<tr>
				<td><?php echo $val['name']?></td>
				<td><?php echo $val['make']?></td>
				<td><?php echo $val['date']?></td>
				<td><?php echo $val['why']?></td>
				<td><?php echo $val['type']?></td>
				<td><a href="/action/service/lanting?idx=<?php echo $val['idx']?>">대여</a></td>
			</tr>
		<?php }?>
		</tbody>
	</table>
	<?php }else{ ?>
	<table class="tableSkin">
		<thead>
			<th>가구명</th>
			<th>제조사</th>
			<th>입수일</th>
			<th>사용용도</th>
		</thead>
		<tbody>
		<?php foreach($data as $key => $val){ ?>
			<tr>
				<td><?php echo $val['name']?></td>
				<td><?php echo $val['make']?></td>
				<td><?php echo $val['date']?></td>
				<td><?php echo $val['why']?></td>
			</tr>
		<?php }?>
		</tbody>
	</table>
	<?php } }?>
</div>