<?php

$x = '{"cID":"01","cName":"\u7c21\u5949\u541b","cSex":"F",
    "cBirthday":"1987-04-04","cEmail":"elven@superstar.com","cPhone":"0922988876",
    "cAddr":"\u53f0\u5317\u5e02\u6fdf\u6d32\u5317\u8def12\u865f"}';

$obj = json_decode($x, true); //true/false =>是否轉成陣列
var_dump($obj);
echo $obj["cID"];
echo $obj->cID;


