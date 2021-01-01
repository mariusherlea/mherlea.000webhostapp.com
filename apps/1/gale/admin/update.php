
<?php



ob_start();
 include("includes/init.php");




if(isset($_POST['update'])) {

    $user_c= new User();
    $user_c->id = $_POST['id'];
    $user_c->username = $_POST['username'];
    $user_c->password=$_POST['password'];
    $user_c->first_name=$_POST['first_name'];
    $user_c->last_name=$_POST['last_name'];

    $user_c->update();

    echo ("User " . $user_c->username . " was succesfully updated");
}




