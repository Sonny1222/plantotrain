<?php
	
	function stringtonum($time){
		$n = sscanf($time, '%d:%d:%d', $h, $m, $s);
		$times = array($h,$m,$s);
		return $times;
	}
	
	

?>