<div class="admin-search">
	<?php if(isset($list[0]['name'])){?>
	<table class="tableSkin">
		<thead>
			<tr>
				<th>가구이름</th>
				<th>제조사</th>
				<th>사용용도</th>
				<th>확인</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($list as $key => $val){?>
			<tr>
				<td><?php echo $val['name']?></td>
				<td><?php echo $val['make']?></td>
				<td><?php echo $val['why']?></td>
				<td><a href="/action/admin/admin_update?idx=<?php echo $val['idx']?>">등록</a></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
	<?php }else{?>
	<p class="not-list">회원들이 신청한 가구가 없습니다.</p>
	<?php }?>
</div>