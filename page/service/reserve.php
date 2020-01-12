<div class="reserve">

	<p class="explanation">회원이 대여한 가구</p>
	<table class="tableSkin">
		<thead>
			<tr>
				<th>제품명</th>
				<th>제조사</th>
				<th>제품용도</th>
				<th>반납</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($user as $key => $val){?>
			<tr>
				<td><?php echo $val['name']?></td>
				<td><?php echo $val['make']?></td>
				<td><?php echo $val['why']?></td>
				<td><a href="/action/service/return?idx=<?php echo $val['g_idx']?>&r_idx=<?php echo $val['r_idx']; ?>">반납</a></td>
			</tr>
			<?php }?>
		</tbody>
	</table>

	<p class="explanation">가구 리스트 :: ok = 대여가능 lanting = 대여중</p>
	<table class="tableSkin">
		<thead>
			<tr>
				<th>제품명</th>
				<th>제조사</th>
				<th>제품용도</th>
				<th>상태</th>
				<th>대여</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($list as $key => $val){?>
			<tr>
				<td><?php echo $val['name']?></td>
				<td><?php echo $val['make']?></td>
				<td><?php echo $val['why']?></td>
				<td><?php echo $val['type']?></td>
				<td><a href="/action/service/lanting?idx=<?php echo $val['idx']; ?>">대여</a></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>