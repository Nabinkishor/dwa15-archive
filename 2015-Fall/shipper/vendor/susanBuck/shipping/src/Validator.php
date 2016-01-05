<?php
namespace susanBuck\Shipping;

class Validator
{
    public static function checkIfNull($value, $name)
    {
        if ($value === null) {
            throw new \LogicException("$name is not set");
        }
    }
}
