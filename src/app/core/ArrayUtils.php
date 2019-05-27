<?php

/*
    Class : ArrayUtils
    Some custom utility functions for Arrays that are not build into php
    methods:
    - isAssoc 
        Checks if passed array is associative or indexed array
        get all the keys of the array
        creates range of all lenght of array
        check if keys are sequential indexes

*/
class ArrayUtils
{
    public static function isAssoc($arr)
    {
        return array_keys($arr) !== range(0, count($arr) - 1); 
    }
}