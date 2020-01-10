<?php

if (! function_exist('remove_spaces')) {
    function remove_spaces($string){
        $result = str_replace(' ', '', $string);
        return $result;
    }
}
