<?php
function dateto($date){
	$date_fra=explode('-',$date);
	$output=$date_fra[2].'-'.$date_fra[1].'-'.$date_fra[0];
	return $output;
?>