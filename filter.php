<?php
require_once("util-db.php");
require_once("filter.php");

$pageTitle = "Champion by Class";
include "view-header.php";
$champion = selectChampion();
include "view-filter.php";
include "view-footer.php";
?>
