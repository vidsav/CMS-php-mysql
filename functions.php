<?php

/**
* Debugging
*/

if (!function_exists('d')) {
    function d()
    {
        $vars = func_get_args();
        echo '<pre>';
        foreach ($vars as $var) {
            echo '<strong>(' . gettype($var) . ')</strong> ';
            print_r($var);
        }
        echo '</pre>';

        return;
    }
}

if (!function_exists('dd')) {
    function dd()
    {
        call_user_func_array('d', func_get_args());
        die();
    }
}

?>