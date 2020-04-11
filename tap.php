<?php

if (! function_exists('tap')) {
    function tap($value, $callable)
    {
        $callable($value);

        return $value;
    }
}
