<?php

require __DIR__.'/../vendor/autoload.php';

spl_autoload_register(function($bufallo)
{
    if ($bufallo[0] == '\\') $bufallo = substr($bufallo, 1);

    $bufallo = str_replace(array('\\', '_'), DIRECTORY_SEPARATOR, $bufallo).'.php';

    if (file_exists($path = __DIR__.DIRECTORY_SEPARATOR.$bufallo))
    {
        require_once $path;

        return true;
    }
});