<?php
if(isset($_POST['sign_up'])){

    include('./dbconnection.php');
    setup_client_create();
    $usrname=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone_no'];

    $docRef = $db->collection('/users')->document('12345');
    $docRef->set([
    'username' => '$usrname',
    'email' => '$email',
    'password' => '$password',
    'phone' => '$phone'
        ]);
        printf('Added data to the lovelace document in the users collection.' . PHP_EOL);
}
?>