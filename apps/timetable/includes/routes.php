<?php

class Routes
{
    protected static $db_table="routes";
    public $id;
    public $route;
    public $stop;
    public $location;
    public $stop_time;
    public $start_time;


    public static function find_all_routes()
    {
        return self::find_this_query("SELECT * FROM ".self::$db_table);



    }


    public static function select_routes($route_id)
    {
        return self::find_this_query("SELECT * FROM ".self::$db_table. " WHERE route=$route_id ");



    }


    public static function find_route_by_id($route_id)
    {
        $the_result_array = self::find_this_query("SELECT * FROM ".self::$db_table." WHERE id=$route_id ");

//        if(!empty($the_result_array)){
//           $first_item =  array_shift($the_result_array);
//           return $first_item;
//        } else {
//            return false;
//        }

        return !empty($the_result_array) ? array_shift($the_result_array) : false;



        return $found_route;
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