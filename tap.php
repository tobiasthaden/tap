<?php

if (! function_exists('tap')) {
    /**
     * Call the given callback with the given value then return the value.
     *
     * @param  mixed  $value
     * @param  callable  $callable
     * @return mixed
     */
    function tap($value, $callable)
    {
        $callable($value);

        return $value;
    }
}

if (! function_exists('array_tap')) {
    /**
     * Call the given callback with the given value then return the value.
     *
     * @param  array  $array
     * @param  callable  $callable
     * @return array
     */
    function array_tap($array, $callable)
    {
        foreach ($array as $item) {
            $callable($item);
        }

        return $array;
    }
}
