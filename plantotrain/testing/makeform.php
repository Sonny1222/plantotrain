<?php
	function times() {
	
	$time=0;
	$times= array();
	while ($time <=60) {
	array_push($times, "$time");
	$time++;
	}
	foreach ($times as $t){
		echo "<option value=$t>$t</option>";
	}
	
	}
	
	
	function ages() {
	
	$age=13;
	$ages=array();
	while ($age <=99) {
	 array_push($ages, "$age");
	 $age++;
	}
	foreach ($ages as $a) {
		echo "<option value=$a>$a</option>";	
	}
	}
	
	function weight() {
	
	$weight=50;
	$weights=array();
	while ($weight <=250) {
	 array_push($weights, "$weight");
	 $weight++;
	}
	foreach ($weights as $w) {
		echo "<option value=$w>$w</option>";
	}
	}
	
	function miles(){
		
		$mile=35;
		$miles= array();
		while ($mile<=100) {
			array_push($miles, "$mile");
			$mile++;
		}
		foreach ($miles as $m) {
			echo "<option value=$m>$m</option>";
		}
	}
	
	function days() {
		
		$day=1;
		$days=array();
		while ($day <=31){
			array_push($days, "$day");
			$day++;
		}
		foreach ($days as $d){
			echo "<option value=$d>$d</option>";
		}
	}
	
	function years(){
		
		$year=2014;
		$years=array();
		while ($year <= 2020){
			array_push ($years, "$year");
			$year++;
		}
		foreach ($years as $y){
			echo "<option value=$y>$y</option>";
		}
		
	}
?>
