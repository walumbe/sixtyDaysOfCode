<?php
// validate data
// determine if data is in proper form
// sanitize date
// remove any illegal characters from the data
// filter_list() - list what the php filter extension offers

// var_dump(filter_list());
// filter_var() is used to both sanitize and validate data

$_number = 12;
$min = 0;
$max = 20;
if(filter_var($_number, FILTER_VALIDATE_INT) == 0 || !filter_var($_number, FILTER_VALIDATE_INT) == false)
{
    echo "<pre>";
    var_dump("Valid Integer");
    echo "</pre>";
}else{
    echo "<pre>";
    var_dump("Invalid Integer");
    echo "</pre>";
}


if(filter_var($_number, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range"=> $max)))== false)
{
    echo "<pre>";
    var_dump("Number is not within range");
    echo "</pre>";
}
else {
    echo "<pre>";
    var_dump("Number is wihin range");
    echo "</pre>";
}
// validate an ip address
$ip = "127.0.0.1";

if(!filter_var($ip, FILTER_VALIDATE_IP) == false)
{
    echo "<pre>";
    var_dump("Valid Ip address");
    echo "</pre>";
}else {
    var_dump("Invalid Ip Address");
}

// validate email address
$email  = "nathanwalumbe@gmail.com";

if(!filter_var($email, FILTER_VALIDATE_EMAIL) == false)
{
    echo "<pre>";
    var_dump("Valid email address");
    echo "</pre>";
}
else 
{
    echo "<pre>";
    var_dump("Inavlid email Address");
    echo "</pre>";
}

// sanitize url
$url = "https://kutasimiyu.com";

if(!filter_var($url, FILTER_SANITIZE_URL) == false)
{
    echo "<pre>";
    var_dump("Valid Url");
    echo "</pre>";
}
else {
    echo "<pre>";
    var_dump("Invalid Url");
    echo "</pre>";
}

// validate IPV6

$ipv6 = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if(filter_var($ipv6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) == false)
{
    echo "<pre>";
    var_dump("Invalid IPV6");
    echo "</pre>";
}
else
{
    echo "<pre>";
    var_dump("Valid IPV6");
    echo "</pre>";
}

$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
