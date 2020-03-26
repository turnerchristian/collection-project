<?php
declare(strict_types = 1);
require_once('./functions.php');

use PHPUnit\Framework\TestCase;


class validateWeightTest extends TestCase
{
    public function testThrowsErrorWhenGivenWrongType()
    {
        $this->expectException(TypeError::class);

        validateWeight(['99lol']);
    }

    public function testThrowsErrorWhenGivenNoArgument()
    {
        $this->expectException(ArgumentCountError::class);

        validateWeight();
    }

    public function testSuccessValidateWeight()
    {
        $actual = validateWeight(988);
        $expected = false;
        $this->assertSame($actual, $expected);
    }

}
