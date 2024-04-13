<?php
session_start();
include_once ('./includes/header.php');
if (isset($_SESSION['error'])) {
        echo '<div class="alert alert-danger text-center" role="alert">' . $_SESSION['error'] . '</div>';
        session_unset();
}
include_once ('./includes/footer.php');
?>