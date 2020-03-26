<?php
require_once('./functions.php');

use PHPUnit\Framework\TestCase;

class checkInputLengthTest extends TestCase
{
    public function testThrowsErrorWhenGivenWrongType()
    {
        $this->expectException(TypeError::class);

        checkInputLength(['Hello!'], 'Hello', true);
    }

    public function testThrowsErrorWhenGivenNoArgument()
    {
        $this->expectException(ArgumentCountError::class);

        checkInputLength();
    }

    public function testSuccessCheckInputLength()
    {
        $actual = checkInputLength('Hello', '123', '88');
        $expected = false;
        $this->assertSame($actual, $expected);
    }

    public function testFailCheckInputLength()
    {
        $actual = checkInputLength('Hello this is gonna be a long as string because I am try to test that if I go over 100 characters that it fails so this should be about hopefully', '123/', '0');
        $expected = true;
        $this->assertSame($actual, $expected);
    }
}
