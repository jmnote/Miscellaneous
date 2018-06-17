<?php
function proc_josa($ex) {
	$pps = ["은(는)","이(가)","을(를)","과(와)"];
	foreach( $pps as $pp ) {
		$ex = preg_replace_callback("/(.)".preg_quote($pp)."/u",
			function($matches) use($pp) {
				$ch = $matches[1];
				$has_jongsung = true;
				if(preg_match('/[가-힣]/',$ch)) {
					$code = (ord($ch{0})&0x0F)<<12 | (ord($ch{1})&0x3F)<<6 | (ord($ch{2})&0x3F);
					$has_jongsung = ( ($code-16)%28 != 0 );
				}
				else if(preg_match('/[2459]/', $ch)) $has_jongsung = false;
				return $ch.mb_substr($pp,($has_jongsung?0:2),1);
			}, $ex);
	}
	return $ex;
}
var_dump( proc_josa("말이(가) 노래한다") );
var_dump( proc_josa("매이(가) 노래한다") );
var_dump( proc_josa("바람이(가) 노래한다") );
var_dump( proc_josa("황소이(가) 노래한다") );
# string(19) "말이 노래한다"
# string(19) "매가 노래한다"
# string(22) "바람이 노래한다"
# string(22) "황소가 노래한다"
var_dump( proc_josa("욕심많은 말을(를) 쓰러뜨린 자") );
var_dump( proc_josa("욕심많은 매을(를) 쓰러뜨린 자") );
var_dump( proc_josa("욕심많은 바람을(를) 쓰러뜨린 자") );
var_dump( proc_josa("욕심많은 황소을(를) 쓰러뜨린 자") );
# string(36) "욕심많은 말을 쓰러뜨린 자"
# string(36) "욕심많은 매를 쓰러뜨린 자"
# string(39) "욕심많은 바람을 쓰러뜨린 자"
# string(39) "욕심많은 황소를 쓰러뜨린 자"
var_dump( proc_josa("나은(는) 너을(를) 조심한다") );
var_dump( proc_josa("갑이(가) 을을(를) 사랑한다") );
var_dump( proc_josa("말과(와) 매과(와) 바람과(와) 황소") );
var_dump( proc_josa("0과(와) 1과(와) 2과(와) 3과(와) 4과(와) 5의 곱은(는)?") );
# string(26) "나는 너를 조심한다"
# string(26) "갑이 을을 사랑한다"
# string(30) "말과 매와 바람과 황소"
# string(37) "0과 1과 2와 3과 4와 5의 곱은?"
