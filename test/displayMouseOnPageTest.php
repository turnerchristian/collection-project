<?php

require_once('./MakePlantEntryTileTest.php');

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
