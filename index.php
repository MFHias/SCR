<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("views/partials/header.php");

if ($_REQUEST['view']) {
  include("views/" . $_REQUEST['view'] . ".php");
}

include("views/welcome.php");


include("views/partials/footer.php");
?>