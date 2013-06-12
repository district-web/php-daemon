<?php
include_once 'Lib/daemon.php';

\DistrictWeb\PhpDaemon\Lib\Daemon::run();

// declare(ticks=1);
//pcntl_signal(SIGUSR1, function() {
//	echo 'Got SIGUSR1';
//});
for ($i=0; $i < 1800; $i++) { 
	echo "\n$i";
	sleep(1);
}
