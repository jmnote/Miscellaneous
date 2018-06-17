<?php
function get_random_indian_style_name() {
	$names = [
		['시끄러운','말많은','푸른','적색','조용한','웅크린','백색','지혜로운','용감한','날카로운','욕심많은'],
		['늑대','태양','양','매','황소','불꽃','나무','달빛','말','돼지','하늘','바람'],
		['와(과) 함께 춤을','의 기상','은(는) 그림자속에','','의 환생','의 죽음',' 아래에서','을(를) 보라','이(가) 노래하다',' 그림자','의 일격','에게 쫓기는 사람','의 행진','의 왕','의 유령','을(를) 죽인자','은(는) 맨날 잠잔다','처럼','의 고향','의 전사','은(는) 나의 친구','의 노래','의 정령','의 파수꾼','의 악마','와(과) 같은 사람','을(를) 쓰러뜨린 자','의 혼','은(는) 말이 없다']
	];
	return $names[0][array_rand($names[0])].' '
		.$names[1][array_rand($names[1])]
		.$names[2][array_rand($names[2])];
}
var_dump( get_random_indian_style_name() );
var_dump( get_random_indian_style_name() );
var_dump( get_random_indian_style_name() );
var_dump( get_random_indian_style_name() );
var_dump( get_random_indian_style_name() );
# string(34) "푸른 돼지이(가) 노래하다"
# string(23) "백색 돼지의 노래"
# string(20) "푸른 말의 기상"
# string(29) "지혜로운 바람 그림자"
# string(38) "말많은 태양와(과) 함께 춤을"

