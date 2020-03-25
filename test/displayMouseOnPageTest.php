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

    public function testSuccessDisplayMouseOnPage()
    {
        $actualInput[0] = ['name' => 'Razer Viper',
            'brand' => 'Razer',
            'weight' => 70,
            'image' => 'https://images.maxgaming.com/data/product/1200f960/razer_viper_ambidextrios_gamingmus_6.png',
            'is_wireless' => 0];
        $actual = displayMouseOnPage($actualInput);
        $expected = "<div class=\"mouseDiv\"><h6>Razer Viper</h6><img src='https://images.maxgaming.com/data/product/1200f960/razer_viper_ambidextrios_gamingmus_6.png'><p>Brand: Razer<p><p>Weight: 70g<p><p>Type: Wired<p></div>";
        $this->assertEquals($actual, $expected);
    }
}
