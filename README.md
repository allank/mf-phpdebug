# phpdebug

> This was useful in 2006/2007 for sending debug output from server side PHP scripts somewhere.  There are probably many many more elegant solutions now.  Keeping this here for archival purposes.

Socket program to receive PHP debug messages

![phpdebug-2](https://cloud.githubusercontent.com/assets/1370157/7101163/2dcd6b96-e04b-11e4-8bad-8e6d52190ad6.jpg)

With this small script and program, you can spam your debug data to the program listening on a socket on a different machine. I use it for receiving messages from server side PHP scripts that have been called from Flash.

It's also great for debugging scripts that are outputting image data, as there again you can't really write any debug data to the browser.

Grab the executable for the platform you want to receive the debug messages on, and the PHP archive for the include file and usage script.
