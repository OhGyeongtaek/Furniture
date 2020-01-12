<div class="join">
	<h3>&nbsp;
		<span>Welcome to Dream Rental</span>
		<p>Dream Rental에 오신것을 환영합니다.</p>
	</h3>
	<form action="/action/service/join_save" method="post">
		<input type="hidden" id="tel" name="tel"/>
		<input type="hidden" id="phone" name="phone"/>
		<p class="sub-title">&#42;가 붙은 항목은 필수 입력사항입니다.</p>
		<table>
			<tbody>
				<tr class="pilsu">
					<th><label for="name">이름</label></th>
					<td><input type="text" name="name" id="name" /></td>
				</tr>
				<tr class="pilsu">
					<th><label for="id">I D</label></th>
					<td>
						<input type="text" id="id" name="id" />
						<span class="id_chk"></span>
					</td>
				</tr>
				<tr class="pilsu">
					<th><label for="pw">Password</label></th>
					<td><input type="password" id="pw" name="pw" /></td>
				</tr>
				<tr class="pilsu">
					<th><label for="pw_chk">Password Check</label></th>
					<td><input type="password" disabled="disabled" id="pw_chk" title="비밀번호 먼저 확인해주세요."/><span id="pw_chk_text"></span></td>
				</tr>
				<tr class="pilsu">
					<th><label for="mail">mail</label></th>
					<td><input type="text" name="mail" id="mail" /></td>
				</tr>
				<tr>
					<th><label for="man">성별</label></th>
					<td>
						<label for="man">남자</label>
						<input type="radio" checked id="man" name="sex" value="man" />
						<label for="wommen">여자</label>
						<input type="radio" id="wommen" name="sex" value="wommen" />
					</td>
				</tr>
				<tr>
					<th><label for="address">주소</label></th>
					<td><input type="text" name="address" id="address" /></td>
				</tr>
				<tr>
					<th><label for="tel1">전화번호</label></th>
					<td>
						<input type="text" id="tel1" class="tel1" size="5" maxlength="3"/>
						<input type="text" class="tel2" size="6" maxlength="4"/>
						<input type="text" class="tel3" size="6" maxlength="4"/>
					</td>
				</tr>
				<tr>
					<th><label for="phone1">핸드폰 번호</label></th>
					<td>
						<input type="text" id="phone1" class="phone1" size="5" maxlength="3" />
						<input type="text" class="phone2" size="5" maxlength="4" />
						<input type="text" class="phone3" size="5" maxlength="4" />
					</td>
				</tr>
				<tr class="pilsu">
					<th><label for="auto_put">자동가입방지</label></th>
					<td>
						<canvas width="150" height="70"></canvas>
						<input type="text" class="auto_put" />
						<input type="hidden" class="auto" />
					</td>
				</tr>
			</tbody>
		</table>
		<div class="box-center">
			<input type="submit" value="확인"/>
			<input type="reset" value="취소"/>		
		</div>
	</form>
</div>