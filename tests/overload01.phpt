--TEST--
Function overloading test for time
--SKIPIF--
<?php 
	extension_loaded('timecop') or die('skip timecop not available');
	$required_func = array("timecop_freeze", "time", "timecop_orig_time");
	foreach ($required_func as $func_name) {
		if (!function_exists($func_name)) {
			die("skip $func_name() function is not available.");
		}
	}
--INI--
timecop.func_overload=1
--FILE--
<?php
$_SERVER['REQUEST_TIME']=0;
var_dump(time());
--EXPECT--
int(0)