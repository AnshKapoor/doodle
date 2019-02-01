<?php
include("../config.php");
if(isset($_POST["linkId"])){
  $query = $con->prepare("UPDATE sites SET clicks = clicks+1 WHERE id = :id");
}
else{
    echo "No Link passed to page";
}
 ?>