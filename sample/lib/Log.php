<?php

/*

	Author  : S S Rajapaksha <ssrajapaksha@outlook.com>
	Licence : Apache License, Version 2.0

*/

class Logger{
	public function WriteLog($logStream){
		$_LOGFILE = 'LogData.log';
		
		$file = fopen($_LOGFILE, 'a');
		fwrite($file, '['.date('D M j G:i:s T Y').'] '.$logStream.'\n');
		fclose($file);
	}
}
?>