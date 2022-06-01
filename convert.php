<?php
function char_to_dec($A){
	$i=ord($A);
	if ($i>=97 && $i<=122){
		return ($i-96);
	} else if ($i>=65 && $i<=90){
		return ($i-38);
	} else {
		return null;
	}
}

function dec_to_char($A){
	if ($A>=1 && $A<=26){
		return (chr($A+96));
	} else if ($A>=27 && $A<=52){
		return (chr($A+38));
	} else {
		return null;
	}
}



?>
