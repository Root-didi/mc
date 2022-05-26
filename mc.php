<?php
 
#Add servers here#
$servers = Array(
    '' => array(
        'ip' => '51.222.106.95',
        'port' => '25566',
        ),
    );
foreach ($servers as $key => $value) {
    echo $key . "";
    foreach ($value as $key => $value) {
        if($key == "ip") {
            $ip = $value;
        }
        if($key == "port") {
            $port = $value;
        }
    }
    $ping = json_decode(file_get_contents('http://api.minetools.eu/ping/' . $ip . '/' . $port . ''), true);
 
    if(empty($ping['error'])) {

        $online = $ping['players']['online'];
    }
    echo "" . $online ;

}
 
?> 
