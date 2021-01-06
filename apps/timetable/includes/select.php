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






    if(isset($_POST['select'])) {

        $select = $_POST['select_number'];





        $selected_route = Routes::select_routes($select);

            foreach ($selected_route as $f_route) {
                echo "<tr><td>".$f_route->id . "</td>";
                echo "<td>".$f_route->route . " </td> ";
                echo "<td>".$f_route->stop . "</td>";
                echo "<td>".$f_route->location . "</td>";
                echo "<td>".$f_route->stop_time . "</td>";
                echo "<td>".$f_route->start_time . "</td></tr>";
  }
    }

