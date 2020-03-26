<?php

require_once('./functions.php');

use PHPUnit\Framework\TestCase;

class validateNamesTest extends TestCase
{
    public function testThrowsErrorWhenGivenWrongType()
    {
        $this->expectException(TypeError::class);

        validateNames(['Hello!'], 'Hello');
    }

    public function testThrowsErrorWhenGivenNoArgument()
    {
        $this->expectException(ArgumentCountError::class);

        validateNames();
    }

    public function testSuccessValidateNames()
    {
        $actual = validateNames('Hello', '123');
        $expected = false;
        $this->assertSame($actual, $expected);
    }

    public function testFailValidateNames()
    {
        $actual = validateNames('Hello.', '123/');
        $expected = true;
        $this->assertSame($actual, $expected);
    }
}
