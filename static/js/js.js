$(function(){
	/*menu animation*/
	$('.header-bottom ul li ').mouseenter(function(){
		$('> ul',this).css('display','block');
	});

	$('.header-bottom ul li ').mouseleave(function(){
		$('> ul',this).css('display','none');
	});
	/*end*/
	
	/*join script*/
	if($('.join').length > 0){
		var form_chk = { id : false, pw : false, all : true }
		$('#id').keyup(function(){
			var id = $(this).val();
			if(/^[a-z]+[\w]{5,12}$/.test(id)){
				$.get('/action/service/id_chk',{'id':id},function(data){
					console.log(data);
					if(data == 0){
						$('.id_chk').html('사용가능한 아이디입니다.').css('color','green');
						form_chk.id = true;
					}else{
						$('.id_chk').html('중복된 아이디 입니다.').css('color','red');
						form_chk.id = false;
					}
				});
			}else{
				$('.id_chk').html('사용할수 없는 아이디입니다.').css('color','red');
			}
		});

		$('#pw_chk, #pw').keyup(function(){
			var pw = $('#pw').val();
			if(!/^[a-z0-9]{5,12}$/.test(pw)){
				$('#pw_chk').val('');
				$('#pw_chk').attr({'title':'비밀번호부터 입력해주세요.','disabled':'disabled'}).css({'border' : 'none','background':'#ddd'});
				form_chk.pw = false;
			}else{
				$('#pw_chk').removeAttr('title disabled').css({'border' : '1px solid #ddd','background':'#fff'});
				if(this.id === 'pw_chk'){
					if($('#pw_chk').val() === pw){
						$('#pw_chk_text').text('비밀번호와 일치합니다.').css('color','green');
						form_chk.pw = true;
					}else{
						$('#pw_chk_text').text('비밀번호와 일치하지 않습니다.').css('color','red');
						form_chk.pw = false;
					}
				}
			}
		});
		$('form').submit(function(){
			form_chk.all = true;
			$('.pilsu input').each(function(){
				if($(this).val() === ''){
					$(this).css('background',"red");
					form_chk.all = false;
				}else{
					$(this).css('background','#fff');
				}
			});
			console.log(!form_chk.all , !form_chk.id , !form_chk.pw , $('.auto').val() !== $('.auto_put').val());
			if(!form_chk.all || !form_chk.id || !form_chk.pw || $('.auto').val() !== $('.auto_put').val()){
				alert("필수입력사항을 확인해주세요.");
				return false;
			}else{
				var phone	= $('#phone1').val()+'-'+$('.phone2').val()+'-'+$('.phone3').val(),
					tel		= $('#tel1').val()+'-'+$('.tel2').val()+'-'+$('.tel3').val();

				$('#phone').val(phone);
				$('#tel').val(tel);
			}
		});
		$('.pilsu label').before("&#42;&nbsp;&nbsp;");

		/*auto join image*/

		var str = '1234567890qwertyuiopasdfghjklzxcvbnm',
			data = str.split('').sort(function(){ return 0.5-Math.random(); }).join('').substring(0,6);

		var canvas = document.querySelector('canvas'),
			ctx = canvas.getContext('2d');

		ctx.beginPath();
			ctx.font = '30px margun gothic';
			ctx.fillText(data,10,30);
			ctx.strokeStyle = 'red';
			ctx.moveTo(10,20.5);
			ctx.lineTo(120,20.5);
			ctx.stroke();
		ctx.closePath();
		
		var url = canvas.toDataURL();

		$('canvas').before('<img src="'+url+'" title="자동가입방지입니다." alt="자동가입방지입니다.">');
		$('canvas').remove();
		
		$('.auto').val(data);
	}/*join page end*/

	/*admin app page*/
	if($('.admin-app').length > 0){
		$('#date').datepicker();
		$('form').submit(function(){
			var cnt = 0;
			$('form > div [type=text]').each(function(){
				if(this.value == 0){
					cnt++;
					$(this).css('background','#ff9');
				}else{				
					$(this).css('background','#fff');
				}
			});

			if(cnt > 0){
				alert('입력정보를 모두 입력해주세요.');
				return false;
			}
		});
	}
	/*admin app page end*/

	if($('.reserve').length > 0){
		$('.tableSkin a').button();
	}
});