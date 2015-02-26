<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
if (!function_exists('mysql2date')) {
	function mysql2date($mdate) {
		return preg_replace('#(\d{4})-(\d{2})-(\d{2})#', '$3.$2.$1', $mdate);
	}

}
if (!function_exists('date2mysql')) {
	function date2mysql($mdate) {
		return preg_replace('#(\d{2}).(\d{2}).(\d{4})#', '$3-$2-$1', $mdate);
	}

}
if (!function_exists('getPrevDate')) {
	function getPrevDate($dat) {
		date_default_timezone_set('Europe/Moscow');
		list($yyyy, $mm, $dd) = explode("-", $dat);
		$d = mktime(0, 0, 0, $mm, $dd, $yyyy) - 24 * 60 * 60;
		list($dd, $tt) = explode(" ", unix_to_human($d, TRUE, 'eu'));
		return $dd;
	}

}
//end
