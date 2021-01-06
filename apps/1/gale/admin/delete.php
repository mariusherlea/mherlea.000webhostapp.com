<?php

ob_start();
include("includes/init.php");




if(isset($_POST['delete'])) {

    $user_c = User::find_user_by_id($_POST['del']);


    $user_c->delete();

    echo ("User was succesfully created");
}

