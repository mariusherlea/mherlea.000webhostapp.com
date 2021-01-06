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
                echo $user->id . " " . $user->username . " " . $user->first_name . " " . $user->last_name . "<br>";

            }

            /*$found_user = User::find_user_by_id(1);
            echo $found_user->first_name;

            //insert user
            $user2 = User::find_user_by_id(13);
            $user2->password = "test";
            $user2->first_name="what";
            $user2->last_name="ever";
            $user2->save();

            $user1=new User();
            $user1->username="whatever200";
            $user1->save();*/
            ?>
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
            <h2>Delete by Id</h2>

            <form action="../admin/delete.php" method="post">
                Task id: <input name="del" type="number"><br>

                <button name="delete" type="submit">Delete it</button>
            </form>


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