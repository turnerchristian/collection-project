<?php

require_once('./functions.php');

use PHPUnit\Framework\TestCase;

class EchoMiceTest extends TestCase {

    public function testThrowsErrorWhenGivenString() {
        $this->expectException(TypeError::class);

        echoMice("Hello World!");
    }

    public function testThrowsErrorWhenGivenNoArgument() {
        $this->expectException(ArgumentCountError::class);

        echoMice();
    }
}
