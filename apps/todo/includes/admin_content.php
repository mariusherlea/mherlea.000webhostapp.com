<div class="container-fluid">


    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header">
                ToDo List

            </h1>

            <?php


            //find all user and deserialization
            $todo = Todo::find_all_task();

            foreach ($todo as $task) {
                echo $task->id . "  ";
                echo $task->text . "  ";
                echo $task->time . "<br>";

            } ?>

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