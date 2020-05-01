<?php
//session_start();
require_once("tools.php");
topNav('Login');
styleCurrentNavLink('background-color: #383838; color: white;');
?>

<main>
    <form class="login" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="POST">
        <input type="text" name="email" class="login-input" placeholder="Email Address">
        <input type="password" name="password" class="login-input" placeholder="Password">
        <input type="submit" value="Login" class="button-login">
    </form>    
</main>

<?php
bottomFooter();
?>