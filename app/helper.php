<?php

if(!function_exists('formated_date')){
    function formated_date($date, $format){
        return date($format, strtotime($date));
    }
}