<?php
$page = "index";
if(str_contains($_SERVER["PHP_SELF"], "signup.php")){
    $page = "signup";
}
?>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid container">
            <a class="navbar-brand" href="./index.php">Event Manager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link <?= $page === "index" ? "active aria-active" : "" ?> " aria-current="page" href="./index.php">Home</a>
                    <a class="nav-link <?= $page === "signup" ? "active aria-active" : "" ?>" href="./signup.php">Sign Up</a>
                </div>
            </div>
    </div>
</nav>