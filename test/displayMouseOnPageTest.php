<?php

require_once('./functions.php');

use PHPUnit\Framework\TestCase;

class DisplayMouseOnPageTest extends TestCase
{

    public function testThrowsErrorWhenGivenString()
    {
        $this->expectException(TypeError::class);

        displayMouseOnPage("Hello World!");
    }

    public function testThrowsErrorWhenGivenNoArgument()
    {
        $this->expectException(ArgumentCountError::class);

        displayMouseOnPage();
    }
}
