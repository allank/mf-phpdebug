Socket program to receive PHP debug messages.

![http://mf-phpdebug.googlecode.com/files/phpdebug.jpg](http://mf-phpdebug.googlecode.com/files/phpdebug.jpg)

With this small script and program, you can spam your debug data to the program listening on a socket on a different machine.  I use it for receiving messages from server side PHP scripts that have been called from Flash.

It's also great for debugging scripts that are outputting image data, as there again you can't really write any debug data to the browser.

Grab the executable for the platform you want to receive the debug messages on, and the PHP archive for the include file and usage script.