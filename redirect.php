<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$buscas=require 'buscas.php';
$q=@$_GET['q'];
$q=trim($q);
$q=urlencode($q);
$key=@$_GET['key'];
if(isset($buscas[$key])){
    //https://www.php.net/manual/pt_BR/function.str-replace.php
    $str=$buscas[$key];
    if(
    $key=='dailymotion' OR
    $key=='tpb'
    ){
        $q=urldecode($q);
    }
    if(
    $key=='informal'
    ){
        $q=urldecode($q);
        $q=str_replace(" ","-",$q);
        $q=urlencode($q);
    }    
    $str=str_replace("%s",$q,$str);
    header('Location: '.$str);
}else{
    print '404';
}
?>
