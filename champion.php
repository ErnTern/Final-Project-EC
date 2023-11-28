<?php
require_once("util-db.php");
require_once("model-champion.php");

$pageTitle = "Champion";
include "view-header.php";
$champion = selectChampion();
include "view-champion.php";
include "view-footer.php";
?>
