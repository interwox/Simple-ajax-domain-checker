<?php

/********************************************************************************************************************
* Created by Interwox
* Website: www.interwox.com
* License: GNU
* 
*********************************************************************************************************************/

$domain = $_POST['search_domain'];
 if ( gethostbyname($domain) != $domain ) {
  echo "<h3><font color=red>USED.</></h2>";
 }
 else {
  echo "<h3><font color=green>NOT USED.</></h2>";
 }













?>
