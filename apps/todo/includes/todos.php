<?php

class Todo
{

    public $id;
    public $text;
    public $time;


    public static function find_all_task()
    {
        return self::find_this_query("SELECT * FROM todo");



    }

    public static function find_task_by_id($task_id)
    {
        $the_result_array = self::find_this_query("SELECT * FROM todo
WHERE id=$task_id LIMIT 1");

//        if(!empty($the_result_array)){
//           $first_item =  array_shift($the_result_array);
//           return $first_item;
//        } else {
//            return false;
//        }

        return !empty($the_result_array) ? array_shift($the_result_array) : false;



        return $found_user;
    }

    public static function find_this_query($sql)
    {
        global $database;
        $result_set = $database->query($sql);

        $the_object_array=array();

        while ($row = mysqli_fetch_array($result_set)){
            $the_object_array[]= self::instantiation($row);
        }

        return $the_object_array;
    }

    public static function instantiation($the_record)
    {

        $the_object = new self();

//        $the_object->id = $founded_user['id'];
//        $the_object->username = $founded_user['username'];
//        $the_object->password = $founded_user['password'];
//        $the_object->first_name = $founded_user['first_name'];
//        $the_object->last_name = $founded_user['last_name'];

        foreach ($the_record as $the_attribute => $value) {
            if ($the_object->has_the_attribute($the_attribute)) {
                $the_object->$the_attribute = $value;
            }
        }

        return $the_object;

    }

    private function has_the_attribute($the_attribute)
    {
        $object_properties = get_object_vars($this);

        return array_key_exists($the_attribute, $object_properties);

            }
}