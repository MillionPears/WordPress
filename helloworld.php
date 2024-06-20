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

function run(): void
{
    $helloWorld = new HelloWorld();
    $helloWorld->sayHello();
}

run();
