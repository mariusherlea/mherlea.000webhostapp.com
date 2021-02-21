<?php
include '../include/header.php';
?>

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
        "Cugir 6:00 Vinerea 6:08 Sibot 6:15 Balomir 6:20 Tartaria 6:25 Vint 6:30 AlbaIulia 6:45",
        "Cugir 7:00 Vinerea 7:08 Sibot 7:15 Balomir 7:20 Tartaria 7:25 Vint 7:30 AlbaIulia 7:45 inclusiv S si D",
        "Cugir 8:00 Vinerea 8:08 Sibot 8:15 Balomir 8:20 Tartaria 8:25 Vint 8:30 AlbaIulia 8:45",
        "Cugir 9:00 Vinerea 9:08 Sibot 9:15 Balomir 9:20 Tartaria 9:25 Vint 9:30 AlbaIulia 9:45 inclusiv S si D",
        "Cugir 10:00 Vinerea 10:08 Sibot 10:15 Balomir 10:20 Tartaria 10:25 Vint 10:30 AlbaIulia 10:45",
        "Cugir 11:00 Vinerea 11:08 Sibot 11:15 Balomir 11:20 Tartaria 11:25 Vint 11:30 AlbaIulia 11:45 doar S si D",
        "Cugir 12:00 Vinerea 12:08 Sibot 12:15 Balomir 12:20 Tartaria 12:25 Vint 12:30 AlbaIulia 12:45",
        "Cugir 14:00 Vinerea 14:08 Sibot 14:15 Balomir 14:20 Tartaria 14:25 Vint 14:30 AlbaIulia 14:45",
        "Cugir 15:00 Vinerea 15:08 Sibot 15:15 Balomir 15:20 Tartaria 15:25 Vint 15:30 AlbaIulia 15:45 inclusiv S si D",
        "Cugir 16:00 Vinerea 16:08 Sibot 16:15 Balomir 16:20 Tartaria 16:25 Vint 16:30 AlbaIulia 16:45",
        "Cugir 18:00 Vinerea 18:08 Sibot 18:15 Balomir 18:20 Tartaria 18:25 Vint 18:30 AlbaIulia 19:45",
        "AlbaIulia 6:00 Vint 6:10 Tartaria 6:15 Balomir 6:20 Sibot 6:30 Vinerea 6:37 Cugir 6:45",
        "AlbaIulia 7:00 Vint 7:10 Tartaria 7:15 Balomir 7:20 Sibot 7:30 Vinerea 7:37 Cugir 7:45",
        "AlbaIulia 8:00 Vint 8:10 Tartaria 8:15 Balomir 8:20 Sibot 8:30 Vinerea 8:37 Cugir 8:45 inclusiv S si D",
        "AlbaIulia 9:00 Vint 9:10 Tartaria 9:15 Balomir 9:20 Sibot 9:30 Vinerea 9:37 Cugir 9:45",
        "AlbaIulia 10:00 Vint 10:10 Tartaria 10:15 Balomir 10:20 Sibot 10:30 Vinerea 10:37 Cugir 10:45 inclusiv S si D",
        "AlbaIulia 11:00 Vint 11:10 Tartaria 11:15 Balomir 11:20 Sibot 11:30 Vinerea 11:37 Cugir 11:45",
        "AlbaIulia 12:00 Vint 12:10 Tartaria 12:15 Balomir 12:20 Sibot 12:30 Vinerea 12:37 Cugir 12:45 doar S si D",
        "AlbaIulia 13:00 Vint 13:10 Tartaria 13:15 Balomir 13:20 Sibot 13:30 Vinerea 13:37 Cugir 13:45",
        "AlbaIulia 15:00 Vint 15:10 Tartaria 15:15 Balomir 15:20 Sibot 15:30 Vinerea 15:37 Cugir 15:45",
        "AlbaIulia 16:00 Vint 16:10 Tartaria 16:15 Balomir 16:20 Sibot 16:30 Vinerea 16:37 Cugir 16:45 inclusiv S si D",
        "AlbaIulia 17:00 Vint 17:10 Tartaria 17:15 Balomir 17:20 Sibot 17:30 Vinerea 17:37 Cugir 17:45",
        "AlbaIulia 19:00 Vint 19:10 Tartaria 19:15 Balomir 19:20 Sibot 19:30 Vinerea 19:37 Cugir 19:45",

    );

    for ($i = 0; $i < count($r1); $i++) {
        $start1 = stripos($r1[$i], "$start");
        $finish1 = stripos($r1[$i], "$finish");
        $con = true;
        if ($start1 === false) {
            $con = false;
        }
        if ($finish1 === false) {
            $con = false;
        }

        if ($con) {
//            echo "start: " . $start1 . " ;finis: " . $finish1 . "</br>";
            if ($start1 < $finish1) {

                echo "$r1[$i] </br><hr>";


            } else {
                echo " ";
            }
        }
//            echo $start1.">>>".$finish1."</br>";


    }
}
?>

<?php
include '../include/footer.php';
?>
