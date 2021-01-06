<div class="container-fluid">


    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header">
                Time Table

            </h1>
            <table class="table table-dark">
                <?php


                //find all user and deserialization


                //              print_r($route2);

                $founded_routes = Routes::find_all_routes();


                foreach ($founded_routes as $f_route) {

                    echo "<tr><td>" . $f_route->id . "</td>";
                    echo "<td>" . $f_route->route . " </td> ";
                    echo "<td>" . $f_route->stop . "</td>";
                    echo "<td>" . $f_route->location . "</td>";
                    echo "<td>" . $f_route->stop_time . "</td>";
                    echo "<td>" . $f_route->start_time . "</td></tr>";


                }


                $route1 = array_slice($founded_routes, 0, 5);
                $route2 = array_slice($founded_routes, 5, 6);


                function direction($rou)
                {

                    for ($i = 0; $i <= 4; $i++) {

                        echo $rou[$i]->route ;
                        if ($rou[$i]->location === $rou[$i + 1]->location) {
                            echo "<br> ";
                        } else {
                            if ($rou[$i]->stop < $rou[$i + 1]->stop) {

                                echo " pleaca de la " . $rou[$i]->location;

                                break;

                            } else {
                                echo " pleaca de la " . $rou[$i+1]->location;
                                break;
                            }
                        }
                    }
                }

                direction($route1);
                direction($route2);

                ?>


            </table>
            <h2>Search by Id</h2>

            <form action="includes/find.php" method="post">
                Route id: <input name="search" type="number"><br>

                <button name="submit" type="submit">Search</button>
            </form>


            <h2>Select Route</h2>

            <form action="includes/select.php" method="post">
                Route id: <input name="select_number" type="number"><br>

                <button name="select" type="submit">Select</button>


                <?php

                ?>

        </div>
    </div>
    <!-- /.row -->

</div>