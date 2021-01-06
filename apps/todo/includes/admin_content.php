<div class="container-fluid">


    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header">
                ToDo List

            </h1>
<table class="table table-dark">
            <?php


            //find all user and deserialization
            $todo = Routes::find_all_routes();

            foreach ($todo as $task) {
                echo "<tr><td>".$task->id . "</td>";
                echo "<td>".$task->text . " </td> ";
                echo "<td>".$task->time . "</td></tr>";

            } ?>
</table>
<h2>Search by Id</h2>

            <form action="includes/find.php" method="post">
                Task id: <input name="search" type="number"><br>

                <button name="submit" type="submit">Search</button>
            </form>

            <?php

?>

        </div>
    </div>
    <!-- /.row -->

</div>