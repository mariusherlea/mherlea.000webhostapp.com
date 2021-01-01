<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid #000000;
            border-collapse: collapse;
        }
    </style>
</head>

<a href="../index.php"><h1>ToDo</h1></a>
<br>

<table>
<?php



ob_start();
 include ("init.php");




if(isset($_POST['submit'])) {

    $search = $_POST['search'];





    $found_task = Todo::find_task_by_id($search);
    echo "<tr><td>".$found_task->id ."</td>";
    echo "<td>".$found_task->text ."</td>";
    echo "<td>".$found_task->time ."</td></tr></table><br><br>";
}

include '../../include/footer.php';
?>


