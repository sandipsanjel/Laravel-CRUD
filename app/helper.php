<?php

// echo "help";

if (!function_exists('p'))
{
    function p($data){
        echo '<pre>';
        print_r($data);
     echo "<pre>";//used for print_r so we don't have tp write agian and again same code
    }
}
// if (!function_exists('prx')) {
//     function prx($arr)
//     {
//         echo '<pre>';
//         print_r($arr);
//         die();
//     }
// }




if (!function_exists('get_formatted_date')){
    function get_formatted_date($date , $format)
    {
        $formattedDate =date($format, strtotime($date));
        return $formattedDate;
    }
}