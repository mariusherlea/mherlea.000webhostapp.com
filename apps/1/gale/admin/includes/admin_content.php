<div class="container-fluid">


    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php


            //find all user and deserialization
            $users = User::find_all_users();

            foreach ($users as $user) {
                echo $user->id ." ".$user->username . "<br>";

            }

            /*$found_user = User::find_user_by_id(1);
            echo $found_user->first_name;

            //insert user
*/ ?>
<h1>Create</h1>
            <form action="../admin/create.php" method="post">
                Username: <input name="username" type="text"><br>
                Password: <input name="password" type="password"><br>
                First Name: <input name="first_name" type="text"><br>
                Last Name: <input name="last_name" type="text"><br>
                <button name="create" type="submit">Create it</button>
            </form>
<h1>Update</h1>
            <form action="../admin/update.php" method="post">
                Id: <input name="id" type="number"><br>
                Username: <input name="username" type="text"><br>
                Password: <input name="password" type="password"><br>
                First Name: <input name="first_name" type="text"><br>
                Last Name: <input name="last_name" type="text"><br>
                <button name="update" type="submit">Update it</button>
            </form>


            <?php
/*            $user_c = new User();
            $user_c->username = "Alta";
            $user_c->password = "789";
            $user_c->first_name = "Tot";
            $user_c->last_name = "nuam";
            $user_c->id='8';

            $user_c->update();


            */?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>