<?php 
include_once('remote_debug.php');
$debug = new RemoteDebug('127.0.0.1',9595);
$debug->RawDebug('This is the beginning of our debugging');
$debug->TimeDebug('This message should be timestamped');
$debug->startTimer();
for ($i=0; $i<100;$i++) {
 // do nothing 100 times
}
$debug->debugTimer('Done in 1st loop');
for ($i=0; $i<1000;$i++) {
 // do nothing 1000 times
}
$debug->debugTimer('Done in 2nd loop');
$debug->RawDebug('This is the last message');
$debug->Disconnect();
?>
