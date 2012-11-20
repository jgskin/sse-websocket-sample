#! /bin/bash
# start the http server
echo 'start the web server'
php -S localhost:9000 &
# start the websocket server
echo 'start websocket server'
php -q websocket/server.php &