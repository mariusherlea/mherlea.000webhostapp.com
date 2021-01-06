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

<a href="../index.php"><h1>Timetable</h1></a>
<br>

<table>
<?php



ob_start();
 include ("init.php");




if(isset($_POST['submit'])) {

    $search = $_POST['search'];





    $found_task = Routes::find_route_by_id($search);
    echo "<tr><td>".$found_task->id ."</td>";
    echo "<td>".$found_task->route ."</td>";
    echo "<td>".$found_task->stop ."</td>";
    echo "<td>".$found_task->location ."</td>";
    echo "<td>".$found_task->stop_time ."</td>";
    echo "<td>".$found_task->start_time ."</td></tr></table><br><br>";
}

if(isset($_POST['select'])) {

    $select = $_POST['select'];





    $found_task = Routes::select_routes($select);
    echo "<tr><td>".$found_task->id ."</td>";
    echo "<td>".$found_task->route ."</td>";
    echo "<td>".$found_task->stop ."</td>";
    echo "<td>".$found_task->location ."</td>";
    echo "<td>".$found_task->stop_time ."</td>";
    echo "<td>".$found_task->start_time ."</td></tr></table><br><br>";
}

include '../../include/footer.php';
?>


