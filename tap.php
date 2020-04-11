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
