<?php

namespace App\Tests;

use App\CheckIfDoubleExist;
use PHPUnit\Framework\TestCase;

class CheckIfDoubleExistTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCheckIfExist(array $arr, bool $expected): void
    {
        $checkIfDoubleExist = new CheckIfDoubleExist();
        $result = $checkIfDoubleExist->checkIfExist($arr);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[10,2,5,3], true],
            [[3,1,7,11], false],
        ];
    }
}
