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

    /**
     * @return false|string
     */
    public static function getHostname()
    {
        return gethostname();
    }

    /**
     * @return string
     */
    public static function getRelease(): string
    {
        return php_uname('r');
    }

    /**
     * @return string
     */
    public static function getVersion(): string
    {
        return php_uname('v');
    }

    /**
     * @return string
     */
    public static function getArchitecture(): string
    {
        return php_uname('m');
    }
}