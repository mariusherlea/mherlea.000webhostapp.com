
<?php



ob_start();
 include("includes/init.php");




if(isset($_POST['create'])) {

    $user_c= new User();
    $user_c->username = $_POST['username'];
    $user_c->password=$_POST['password'];
    $user_c->first_name=$_POST['first_name'];
    $user_c->last_name=$_POST['last_name'];

    $user_c->create();

    echo ("User " . $user_c->username . " was succesfully created");
}




