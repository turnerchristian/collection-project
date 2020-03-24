<?php

require_once('./functions.php');

use PHPUnit\Framework\TestCase;

class GetDataFromDBTest extends TestCase
{

    public function testThrowsErrorWhenGivenString()
    {
        $this->expectException(TypeError::class);

        getDataFromDB("Hello World!");
    }

    public function testThrowsErrorWhenGivenNoArgument()
    {
        $this->expectException(ArgumentCountError::class);

        getDataFromDB();
    }
}
