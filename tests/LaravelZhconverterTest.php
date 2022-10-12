<?php

use PHPUnit\Framework\TestCase;
use Seta0909\LaravelZhconverter\LaravelZhconverter;

class LaravelZhconverterTest extends TestCase
{

    public function provideBasicCase()
    {
        yield ['这个村子弥漫着一种懒散而颓废的感觉', LaravelZhconverter::translate('這個村子彌漫着一種懶散而頹廢的感覺', 'CN')];
        yield ['這個村子彌漫着一種懶散而頹廢的感覺', LaravelZhconverter::translate('这个村子弥漫着一种懒散而颓废的感觉', 'TW')];
    }

    /**
     * @dataProvider provideBasicCase
     */
    public function testBasic($expected, $actual)
    {
        $this->assertSame($expected, $actual);
    }
}
