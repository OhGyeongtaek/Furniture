<div class="service-app">
	<form action="/action/service/app_save" method="post">
		<table>
			<tr>
				<th><label for="name">제품명</label></th>
				<td><input type="text" name="name" id="name" /></td>
			</tr>
			<tr>
				<th><label for="make">제조사</label></th>
				<td><input type="text" name="make" id="make" /></td>
			</tr>
			<tr>
				<th><label for="why">사용용도</label></th>
				<td><input type="text" name="why" id="why" /></td>
			</tr>
		</table>
		<div class="box-center">
			<input type="submit" value="신청" />
			<a href="/view">취소</a>
		</div>
	</form>
</div>