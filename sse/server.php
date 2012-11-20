<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache'); // recommended to prevent caching of event data.

while (true) {
    echo 'data: ' . 'server time: ' . date("h:i:s", time()) . PHP_EOL;
    echo PHP_EOL;
    ob_flush();
    flush();

    sleep(1);
}