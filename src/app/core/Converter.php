<?php


// converter class with static function
// converts:
// - object private props to assoc array
// - assoc array to private obj properties
// => object must have get/set functions
class Converter
{

    public static function toObject(array $array, $object)
    {
        // get the class name of the object
        $class = get_class($object);
        // get the methods in the containing class
        // store in array
        $methods = get_class_methods($class); 

        // loop through the methods of the class
        // filter the set functions & call them
        foreach($methods as $method)
        {
            //check if method starts with set
            preg_match(' /^(set)(.*?)$/i', $method, $results);
            $pre = $results[1] ?? '';
            $k = $results[2] ?? ''; 
            $k = strtolower(substr($k, 0, 1)).substr($k, 1);
            if($pre == 'set' && !empty($array[$k]))
            {
                $object->$method($array[$k]); 
            }
        }

        return $object; 
    }


    public static function toAssocArray($object)
    {
         $array = array();
        $class = get_class($object); 
        $methods = get_class_methods($class); 

        foreach($methods as $method)
        {
            preg_match(' /^(get)(.*?)$/i', $method, $results); 
            $pre = $results[1] ?? ''; 
            $k = $results[2] ?? ''; 
            $k = strtolower(substr($k, 0,1)).substr($k,1); 
            if($pre == 'get')
            {
                $array[$k] = $object->$method(); 
            }
        }

        return $array; 
    }
}