<div class="admin-lant">
	<p>현제 페이지에서는 등록된 가구들의 상태를 확인할 수 있는 페이지 입니다.</p>
	<div class="admin-header">
		<p>ok : 사용가능 lanting : 빌려감</p>
	</div>
	<table class="tableSkin">
		<thead>
			<tr>
				<th>가구이름</th>
				<th>제조사</th>
				<th>사용용도</th>
				<th>상태</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($list as $key => $val){ ?>
			<tr>
				<td><?php echo $val['name']?></td>
				<td><?php echo $val['make']?></td>
				<td><?php echo $val['why']?></td>
				<td><?php echo $val['type']?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>