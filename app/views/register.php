<?php
include_once('header.php');
?>

<div class="login-dark">
    <form method="post">
        <h2 class="sr-only">Register Form</h2>
        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>

        <div class="form-group"> <input type="text" class="form-control" name="username" placeholder="Username"  oninvalid="this.setCustomValidity('What is your username?')" oninput="setCustomValidity('')" required>
        </div>
        <div class="form-group"><input type="Password" class="form-control" name="password" placeholder="Password"  oninvalid="this.setCustomValidity('What is your password?')" oninput="setCustomValidity('')" required>
        </div>
        <div class="form-group"><input type="Password" class="form-control" name="password2" placeholder="Confirm Password"  oninvalid="this.setCustomValidity('Confirm your password')" oninput="setCustomValidity('')" required>
        </div>

        <div class="form-group"><button class="btn btn-primary btn-block" name="register_submit"type="submit">Register</button>
        </div><a href="index.php" class="forgot">Back</a>
    </form>
</div>
