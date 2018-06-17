<?php
function proc_josa($ex) {
	$pps = ['은(는)','이(가)','을(를)','과(와)'];
	foreach( $pps as $pp ) {
		$pos = mb_strpos($ex, $pp);
		if( $pos === false || $pos < 1 ) continue;
		$ch = mb_substr($ex, $pos-1, 1);
		if(!preg_match('/[가-힣]/',$ch)) continue;
		$code = (ord($ch{0}) & 0x0F) << 12 | (ord($ch{1}) & 0x3F) << 6 | (ord($ch{2}) & 0x3F);
		if( ( $code - 44032 ) % 28 == 0 ) $pp2 = mb_substr($pp ,2, 1);
		else $pp2 = mb_substr($pp, 0, 1);
		$ex = mb_substr($ex,0,$pos) . $pp2 . mb_substr($ex,$pos+4);
	}
	return $ex;
}
function get_random_indian_style_name() {
	$names = [
		['시끄러운','말많은','푸른','적색','조용한','웅크린','백색','지혜로운','용감한','날카로운','욕심많은'],
		['늑대','태양','양','매','황소','불꽃','나무','달빛','말','돼지','하늘','바람'],
		['과(와) 함께 춤을','의 기상','은(는) 그림자속에','','의 환생','의 죽음',' 아래에서','을(를) 보라','이(가) 노래하다',' 그림자','의 일격','에게 쫓기는 사람','의 행진','의 왕','의 유령','을(를) 죽인자','은(는) 맨날 잠잔다','처럼','의 고향','의 전사','은(는) 나의 친구','의 노래','의 정령','의 파수꾼','의 악마','과(와) 같은 사람','을(를) 쓰러뜨린 자','의 혼','은(는) 말이 없다']
	];
	return proc_josa( $names[0][array_rand($names[0])].' '
		.$names[1][array_rand($names[1])]
		.$names[2][array_rand($names[2])] );
}
var_dump( get_random_indian_style_name() );
var_dump( get_random_indian_style_name() );
var_dump( get_random_indian_style_name() );
var_dump( get_random_indian_style_name() );
var_dump( get_random_indian_style_name() );

