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

// Đoạn mã dưới đây chỉ được thực thi khi tệp này không được include hoặc require bởi tệp khác
if (basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
    (function () {
        $helloWorld = new HelloWorld();
        $helloWorld->sayHello();
    })();
}
