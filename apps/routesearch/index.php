<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="<?php $_PHP_SELF ?>" method="get">

    <input type="text" name="start" placeholder="Start"/>

    <input type="text" name="finish" placeholder="Finish"/>

    <input type="submit" name="submit"/>
</form>

<?php
// Check if the form is submitted
if (isset($_GET['submit'])) {

    // retrieve the form data by using the element's name attributes value as key
    $start = $_GET['start'];
    $finish = $_GET['finish']; // display the results

    $r1 = array(
        "Vinerea 6:20 Cugir 6:30",
        "Vinerea 7:20 Cugir 7:30 inclusiv S si D",
        "Vinerea 8:20 Cugir 8:30",
        "Vinerea 09:00 Cugir 09:15 doar S si D",
        "Vinerea 9:30 Cugir 9:40",
        "Vinerea 11:00 Cugir 11:10 inclusiv S si D",
        "Vinerea 12:30 Cugir 12:40",
        "Vinerea 13:00 Cugir 13:10 doar S si D",
        "Vinerea 13:30 Cugir 13:40",
        "Vinerea 14:30 Cugir 14:40",
        "Vinerea 15:30 Cugir 15:40",
        "Vinerea 16:50 Cugir 16:40",
        "Vinerea 18:00 Cugir 18:40",
        "Vinerea 18:50 Cugir 19:00",
        "Vinerea 22:30 Cugir 22:40",


        "Cugir 7:00, Vinerea 7:10",
        "Cugir 7:45, Vinerea 7:55 doar S si D",
        "Cugir 8:00, Vinerea 8:10",
        "Cugir 8:35, Vinerea 7:10 doar S si D",
        "Cugir 9:00, Vinerea 9:10",
        "Cugir 10:35, Vinerea 10:45 inclusiv S si D",
        "Cugir 12:05, Vinerea 12:15",
        "Cugir 12:35, Vinerea 7:10 doar S si D",
        "Cugir 13:05, Vinerea 13:15",
        "Cugir 14:05, Vinerea 14:15",
        "Cugir 15:05, Vinerea 15:15",
        "Cugir 16:00, Vinerea 16:15",
        "Cugir 17:30, Vinerea 17:35",
        "Cugir 18:20, Vinerea 18:30",
        "Cugir 19:30, Vinerea 19:40",
        "Cugir 23:10, Vinerea 23:20",


    );

    for ($i = 0; $i < count($r1); $i++) {
        $start1 = strpos($r1[$i], "$start");
        $finish1 = strpos($r1[$i], "$finish");
//    echo $start;
//    echo $finish;

        if ($start1 < $finish1) {

            echo "$r1[$i] </br>";
        } else {
            echo " ";
        }

    }
}
?>


</body>
</html>
