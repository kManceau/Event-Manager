<?php
echo '<form action="signup.php" method="post">'
    .   '<div class="row my-3">'
    .       '<div class="col">'
    .           '<label for="username" class="form-label">Username :</label>'
    .           '<input type="text" class="form-control" id="username" name="username" required>'
    .       '</div>'
    .       '<div class="col">'
    .           '<label for="email" class="form-label">Email :</label>'
    .           '<input type="email" class="form-control" id="email" name="email" required>'
    .       '</div>'
    .   '</div>'
    .   '<div class="row my-3">'
    .       '<div class="col">'
    .           '<label for="firstname" class="form-label">First Name :</label>'
    .          '<input type="text" class="form-control" id="firstname" name="firstname" required>'
    .       '</div>'
    .       '<div class="col">'
    .           '<label for="lastname" class="form-label">Last Name :</label>'
    .           '<input type="text" class="form-control" id="lastname" name="lastname" required>'
    .       '</div>'
    .   '</div>'
    .   '<div class="row my-3">'
    .       '<div class="col">'
    .           '<label for="password1" class="form-label">Password :</label>'
    .           '<input type="password" class="form-control" id="password1" name="password1" required>'
    .       '</div>'
    .       '<div class="col">'
    .           '<label for="password2" class="form-label">Confirm Password :</label>'
    .           '<input type="password" class="form-control" id="password2" name="password2" required>'
    .       '</div>'
    .   '</div>'
    .   '<p>All fields are required</p>'
    .   '<input type="submit" class="btn btn-primary my-3" value="Sign Up">'
    .   '</form>';