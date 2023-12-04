<?php
require_once("util-db.php");
require_once("model-filter.php");

$pageTitle = "Champion by Class";
include "view-header.php";
$champion = selectChampion();
$class1= selectClass();
include "view-filter.php";
include "view-footer.php";
?>
