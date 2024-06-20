<?php

declare(strict_types=1);

namespace HelloWorld;

class HelloWorld
{
    public function sayHello(): void
    {
        echo 'Hello, World!';
    }
}

if (__FILE__ == realpath($_SERVER['SCRIPT_FILENAME'])) {
    $helloWorld = new HelloWorld();
    $helloWorld->sayHello();
}
