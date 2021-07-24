<?php

$server_scope = [
    'PHP_SELF', 
    'SERVER_NAME', 
    'HTTP_HOST', 
    'HTTP_REFERER', 
    'HTTP_USER_AGENT', 
    'SCRIPT_NAME',
    'SCRIPT_FILENAME',
    'HTTP_ACCEPT',
    'SERVER_SOFTWARE',
    'SERVER_PROTOCOL',
    'REQUEST_METHOD',
    'REQUEST_TIME',
    'QUERY_STRING',
    'GATEWAY_INTERFACE',
    'SERVER_ADDR',
    'HTTP_ACCEPT_CHARSET',
    'HTTPS',
    'REMOTE_ADDR',
    'REMOTE_HOST',
    'REMOTE_PORT',
    'SERVER_ADMIN',
    'SERVER_PORT',
    'SERVER_SIGNATURE',
    'PATH_TRANSLATED',
    'SCRIPT_URI',
];

foreach ($server_scope as $k => $v) {
    echo "$server_scope[$k]: $_SERVER[$v] <br>";
}

?>
