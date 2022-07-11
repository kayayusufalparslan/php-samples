<?php

class Helper
{
    public static function Load()
    {
        //Directory of a file
        $helperDir = realpath('.') . '/app/helper';

        if ($dh = opendir($helperDir)) {
            while ($file = readdir($dh)) {
                if (is_file($helperDir . '/' . $file)) {
                    require $helperDir . '/' . $file;
                }
            }
        }
    }
}
