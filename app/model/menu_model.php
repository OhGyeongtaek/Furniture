<?php
	class menuModel{
		public static $menu = array(
			'intro'		=> array(
				'title' => '소개',
				'sub'	=> array(
					'intro' => '인사말',
					'guide' => '대여안내'
				)
			),
			'search'	=> array(
				'title' => '통합검색'		
			),
			'service'	=> array(
				'title' => '회원서비스',
				'sub'	=> array(
					'join' => '회원가입',
					'app' => '가구신청',
					'reserve' => '대여예약&#47;현황조회'
				)
			),
			'admin'		=> array(
				'title' => '관리자',
				'sub'	=> array(
					'app'		=> '신규가구등록',
					'search'	=> '신청가구조회',
					'lant'		=> '대여업무조회'
				)
			),
			'board'		=> array(
				'title' => '자유게시판'
			),
		);
	}