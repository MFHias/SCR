<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("views/partials/header.php");

$default_view = "welcome";
$view = $default_view;

if (isset($_REQUEST['view'])) {
  if (file_exists(__DIR__ . '/views/' . $_REQUEST['view'] . ".php")) {
    $view = $_REQUEST['view'];
  }
}

include("views/" . $view . ".php");

include("views/partials/footer.php");