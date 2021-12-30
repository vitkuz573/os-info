<?php

namespace vitkuz573;

class OsInfo
{
    /**
     * @return string
     */
    public static function getOS(): string
    {
        return PHP_OS_FAMILY;
    }
}