<?php

require_once('./functions.php');

use PHPUnit\Framework\TestCase;

class validateInfoTest extends TestCase
{
    public function testThrowsErrorWhenMissingInputs()
    {
        $this->expectException(ArgumentCountError::class);

        validateInfo("Hello World!", "Mouse Brand Here");
    }

    public function testThrowsErrorWhenGivenNoArgument()
    {
        $this->expectException(ArgumentCountError::class);

        validateInfo();
    }

    public function testThrowsErrorWhenWrongTypeInserted()
    {
        $this->expectException(TypeError::class);

        validateInfo("Hello World!", [6]);
    }

    public function testSuccessValidateInfo()
    {
        $actual = validateInfo("Hello World", 'Hello again', 998);
        $expected = 'true';
        $this->assertSame($actual, $expected);
    }
}
