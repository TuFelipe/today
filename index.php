<?php

$today = date("d-m");
$specialday = file_get_contents($today.".php");

if ($specialday){
  echo $specialday;
}

else{
  header("Refresh:0; url=normalday.php");
}

?>