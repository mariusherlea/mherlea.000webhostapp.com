<?php

class User
{

    public static function find_all_users()
    {
        global $database;
        $result_set = $database->query("SELECT * FROM user_gallery");
        return $result_set;
    }

    public static function find_user_by_id($user_id)
    {
        global $database;
        $result_set = $database->query("SELECT * FROM user_gallery WHERE id=$user_id LIMIT 1");
        $found_user=mysqli_fetch_array($result_set);
        return $found_user;
    }

}
