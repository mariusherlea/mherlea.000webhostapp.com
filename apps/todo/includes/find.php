<?php ob_start();
 include ("init.php");




if(isset($_POST['submit'])) {

    $search = $_POST['search'];





    $found_task = Todo::find_task_by_id($search);
    echo $found_task->text;
}


?>


