<?php 
if(!isset($_SERVER['PHP_AUTH_USER']) ||
    $_SERVER['PHP_AUTH_USER'] != "tn"||
    $_SERVER['PHP_AUTH_PW'] != "ophp-21")
{
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HHTP/1.0 401 Unauthorized');
    echo "Get outta heeere!";
    exit;
} else {
    echo "You are in!";
}