<?php

  $server="sql302.epizy.com";
  $username="epiz_28933642";
  $password="vR5jVl1sUXINh8";
  $dbname="epiz_28933642_hospitalsystem";
  $link = mysql_connect($server, $username,$password,$dbname);
  if($link==NULL) echo "Impossible to connect to serveur MySql ";
  $b=mysql_select_db("epiz_28933642_hospitalsystem");
?>
