<?php 

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    echo 'Username: ' .$username;
    echo '<br>';
    echo 'Password: ' . $password;
    echo '<br>';
    echo 'Email: ' . $email;

}