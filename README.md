SSE and WebSockets Samples
==========================

**Requirements**:

* php > 5.4
* composer
* php curl extension

**Installation**:

Assuming that you have php and composer installed, go to the "websocket" folder 
and run:

    composer install


**How to run**:

In the main folder, just run the script:

    ./fireitup.sh

How it should work
------------------

Put the url **localhost:9000/sse/** for the Server Sent Event sample and 
the url **localhost:9000/websocket/** for the websocket sample.

In the websocket sample you gonna have the "ws" variable available in the scope
of your browser window. Run the "ws.send('your message goes here')" to have a 
message being broadcasted for every window opened in the **localhost:9000/websocket/** 
address.