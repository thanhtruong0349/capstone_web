<?php

include("../includes/connect.php");

$link = Connection();

$query = "SELECT `TimeStamp`, MAX(`Temperature`) as Temperature, `Humidity`
group by DATE(`TimeStamp`)";
$result=mysqli_query($link, "SELECT * FROM `templog` ORDER BY `TimeStamp` DESC");
  //$result = mysqli_query($link, $query);

if ( ! $result ) {
  echo mysqli_error($link);
  die;
}

mysqli_close($link);
/*
  $data = array();

  for ($x = 0; $x < mysqli_num_rows($result); $x++) {
    $data[] = mysqli_fetch_assoc($result);
  }
*/
  ?>
