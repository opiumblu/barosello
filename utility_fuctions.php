<?php

function add_prefix($element) {
	return "%c".$element;
}

function add_color($element) {
	$out = "";
	switch ((string)$element) {
		case 'Baro':
			$out = '"color:green"';
			break;
		case 'Sello':
			$out = '"color:red"';
			break;
		case 'Nando':
			$out = '"color:orange"';
			break;
		case 'BaroSello':
			$out = '"color:blue"';
			break;
		default:
			$out = '"color:black"';
			break;
	}
	
	return $out;
}

function barosello_filter($element) {
	return ((string)$element) == 'BaroSello';
}

function baro_filter($element) {
	return ((string)$element) == 'Baro';
}

function sello_filter($element) {
	return ((string)$element) == 'Sello';
}

?>
