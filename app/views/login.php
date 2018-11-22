<?php
include_once('header.php');
?>
<div class="login-dark">
    <form method="post">
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
        <div id='error'></div>
        <div class="form-group"> <input type="text" class="form-control" name="username" placeholder="Username"  oninvalid="this.setCustomValidity('What is your Username?')" oninput="setCustomValidity('')" required>
        </div>
        <div class="form-group"><input type="Password" class="form-control" name="password" placeholder="Password"  oninvalid="this.setCustomValidity('What is your Password?')" oninput="setCustomValidity('')" required>
        </div>
        
        <div class="form-group"><button class="btn btn-primary btn-block" name='login'type="submit">Log In</button></div><a href="<?php echo "index.php?".md5("controller")."=".md5('register')?>" class="forgot">Register Here</a></form>

</div>