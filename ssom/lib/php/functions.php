<?php

// print pretty
function print_p($d) {
   echo "<pre>",print_r($d),"</pre>";
}


function file_get_json($filename) {
   $file = file_get_contents($filename);
   return json_decode($file);
}


function makeConn() {
   include "auth.php";

   @$conn = new mysqli(...MYSQLIAuth());

   if($conn->connect_errno) die($conn->connect_error);

   $conn->set_charset('utf8');

   return $conn;
}