<?php
class RemoteDebug
{
 var $socket;
 
 var $connected;

 var $timed;
 
 function RemoteDebug($host = '127.0.0.1', $port = 9595){
  $this->host = $host;
  $this->port = $port;
  $this->connected = false;
  $this->socket = @fsockopen ($host, $port);
  if ($this->socket) {
   $this->connected = true;
  }
 }
 
 function RawDebug($message) {
  if ($this->connected) {
   $msg = "Debug: ".$message."\r\n";
   fputs($this->socket, $msg);
  }
 }
 
 function getMicroTime() {
  list($usec, $sec) = explode(" ",microtime()); 
  return ((float)$usec + (float)$sec);
 }
 
 function TimeDebug($message) {
  if ($this->connected) {
   $msg = "Timed Debug: ".strftime("%d/%m/%Y - %I:%M ",time()).strtoupper(strftime("%p",time())).": ".$message."\r\n";
   fputs($this->socket, $msg);
  }
 }
 
 function startTimer() {
  $this->timed = $this->getMicroTime();
 }
 
 function debugTimer($message) {
  if ($this->connected) {
   $diff = $this->getMicroTime() - $this->timed;
   $msg = "Timed: ( ".$diff." ): ".$message."\r\n";
   fputs($this->socket, $msg);
  }
 }
 
 function Disconnect() {
  if ($this->connected) {
   fclose($this->socket);
  }
 }
}
?>
