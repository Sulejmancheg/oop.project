<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

require_once(__DIR__ .DIRECTORY_SEPARATOR. 'autoload.php');
spl_autoload_register(['Autoload', 'loader']);

$asus = new \application\Asus('Intel',8192,3072,1,'Asus1');
$asus->Start();
$asus->PrintParametrs();
//$asus->Shutdown();
try {
    $asus->PrintParametrs();
}catch(Exception $exception){
    echo $exception->getMessage().'<br>';
    echo $exception->getLine().' in '.$exception->getFile();
}

//function divideByZero($a,$b){
//    if ($b ==0){
//        throw new Exception('Divide by Zero<br>');
//    }
//    return $a/$b;
//}
//
//try{ echo divideByZero(4,0);
//
//}catch (Exception $exception){
//    echo $exception->getMessage();
//    echo $exception->getLine().'<br>';
//    echo $exception->getFile().'<br>'.'<br>';
//}