<?php
require_once("util-db.php");
require_once("model-champion.php");

$pageTitle = "Champion";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (addChampion($_POST['cName'], $_POST['cID', $_POST['lID'])) {
        echo '<div class="alert alert-success" role="alert">New Sport Added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}
    
$champion = selectChampion();
include "view-champion.php";
include "view-footer.php";
?>
