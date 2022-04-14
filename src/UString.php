<?php
declare(strict_types=1);

namespace siushin\utils;

class UString
{
    /**
     * Dos转Unix（ \r\n或\r 转 \n）
     * @param string $string
     * @return string
     */
    public static function Dos2Unix(string $string): string
    {
        return str_replace(["\r\n", "\r"], "\n", $string);
    }
}