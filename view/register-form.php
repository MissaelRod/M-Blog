<?php
require_once (__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div>
       <!--puts the titles for the email, username,and password-->
        <lable for="email">Email: </lable>
        <input type="text" name="email" />
    </div>
    
    <div>
        <lable for="username">Username: </lable>
        <input type="text" name="username" />
    </div>
    
    <div>
        <lable for="password">Password: </lable>
        <input type="password" name="password" />
    </div>
    
    <div>
        <!--adds a submit button to the register page-->
        <button type="submit">Submit</button>
    </div>
</form>