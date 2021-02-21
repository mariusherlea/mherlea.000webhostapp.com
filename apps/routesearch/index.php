<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="<?php $_PHP_SELF ?>" method="get">

    <input type="text" name="start" placeholder="Start" />

    <input type="text" name="finish" placeholder="Finish" />

    <input type="submit" name="submit" />
</form>

<?php
// Check if the form is submitted
if (isset($_GET['submit'])) {

    // retrieve the form data by using the element's name attributes value as key
    $start = $_GET['start'];
    $finish = $_GET['finish']; // display the results

    $r1 = array(
        "Cugir 12:00 Vinerea 12:20 Sibot 12:40 AlbaIulia 13:40",
        "Vinerea 12:30 Cugir 12:40",
        "Cugir 12:50 Vinerea 13:00",
        "Cugir 14:50 Sibot 15:00");

    for ($i = 0; $i < count($r1); $i++) {
        $start1 = strpos($r1[$i], "$start");
        $finish1 = strpos($r1[$i], "$finish");
//    echo $start;
//    echo $finish;

        if ($start1 <$finish1) {
            echo "</br> $r1[$i] </br>";
        } else {
            echo " ";
        }
    }
}
?>


</body>
</html>
