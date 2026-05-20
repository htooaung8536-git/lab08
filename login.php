<?php include 'header.inc'; ?>

<h2>Login Page</h2>

<form action="process.php" method="POST">

    <label for = "username">Username:</label>
    <input type="text" name="username" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <br><br>

    <input type="hidden" name="token" value="J24041896">
    <input type="submit" value="Login">

</form>
