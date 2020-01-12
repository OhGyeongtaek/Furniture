<div class="admin-app">
	<form action="/action/admin/app_save" method ="post">
		<p>현제 페이지에서는 가구관리자가 신규가구를 등록할 수 있는 페이지 입니다.</p>
		<div>
			<dl>
				<dt><label for="name">가구명</label></dt>
				<dd><input type="text" name="name" id="name" /></dd>
			</dl>
			<dl>
				<dt><label for="make">제조사</label></dt>
				<dd><input type="text" name="make" id="make" /></dd>
			</dl>
			<dl>
				<dt><label for="date">입수일</label></dt>
				<dd><input type="text" name="date" id="date" /></dd>
			</dl>
			<dl>
				<dt><label for="why">사용용도</label></dt>
				<dd><input type="text" name="why" id="why" /></dd>
			</dl>
		</div>
		<div class="box-center">
			<input type="submit" value="확인" />
			<a href="/view">취소</a>
		</div>
	</form>
</div>