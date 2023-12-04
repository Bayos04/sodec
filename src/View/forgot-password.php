<?php
$title = "Accueil";
ob_start();
?>

<?php
$page = ob_get_clean();
include "src/View/sample.php";