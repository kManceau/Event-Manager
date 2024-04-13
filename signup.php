<?php 
include_once ('./includes/header.php'); 
require_once ('./utils/database.php'); 
require ('./utils/showEvent.php'); ?>

<div class="container text-center">
    <h2 class="my-5">Sign Up</h2>

<?php 
if((isset($_POST['username']))
    && (isset($_POST['email']))
    && (isset($_POST['password1'])) 
    && ($_POST['password1'] === $_POST['password2'])){
        $_SESSION['user'] = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password1'],
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname']
        ];
}

if(!isset($_SESSION['user'])){
    include('./utils/signup_form.php');
} else {
    echo '<div class="alert alert-success" role="alert">Successfully signed up !</div>';
    session_unset();
}
?>
</div>
<?php include_once ("./includes/footer.php"); ?>