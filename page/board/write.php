<div class="board-write">
	<form action="/action/board/board_save" method="post">
		<input type="text" name="title" title="제목을 입력하세요."/>
		<textarea name="text" id="text" cols="30" rows="10" title="내용을 입력하세요."></textarea>
		<div class="box-center">
			<input type="submit" value="확인" />
			<a href="/view/board/board">취소</a>
		</div>
	</form>
</div>