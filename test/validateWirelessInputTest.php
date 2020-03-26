<?php
declare(strict_types = 1);
require_once('./functions.php');

use PHPUnit\Framework\TestCase;

class validateWirelessInputTest extends TestCase
{
    public function testThrowsErrorWhenGivenWrongType()
    {
        $this->expectException(TypeError::class);

        validateWirelessInput('Hello');
    }

    public function testThrowsErrorWhenGivenNoArgument()
    {
        $this->expectException(ArgumentCountError::class);

        validateWirelessInput();
    }

    public function testSuccessValidateWirelessInput()
    {
        $actual = validateWirelessInput(0);
        $expected = false;
        $this->assertSame($actual, $expected);
    }

    public function testFailValidateWirelessInput()
    {
        $actual = validateWirelessInput(2);
        $expected = true;
        $this->assertSame($actual, $expected);
    }
}
