<?php 
include_once ('./includes/header.php'); 
require_once ('./utils/database.php'); 
require ('./utils/showEvent.php'); ?>

<div class="container text-center">

<h2 class="mt-5 mb-3">Upcoming Events :</h2>
<p class="mb-5">All your favorite events will be listed here.</p>

<?php
if(isset($db)) {
    $topTwo = getRecentsTwoEvents($db);
    foreach ($topTwo as $event) {
        showEvent($event);
    }
}
?>

<h2>Sign Up now !</h2>
<p>
    To see, edit, add and delete events, you need an account.<br/>
    It's free and easy to use. Try it now.
</p>
<a href="signup.php" class="btn btn-primary">Sign Up</a>

</div>
<?php include_once ("./includes/footer.php"); ?>