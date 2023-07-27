<?php

namespace App\Tests;

use App\CheckIfMatrixIsXMatrix;
use PHPUnit\Framework\TestCase;

class CheckIfMatrixIsXMatrixTest extends TestCase
{
    /** @dataProvider dataProvider  */
    public function testCheckXMatrix(array $grid, bool $expected): void
    {
        $checkIfMatrixIsXMatrix = new CheckIfMatrixIsXMatrix();
        $this->assertEquals($expected, $checkIfMatrixIsXMatrix->checkXMatrix($grid));
    }

    public function dataProvider(): array
    {
        return [
            [
                'grid' => [[2,0,0,1],[0,3,1,0],[0,5,2,0],[4,0,0,2]],
                'expected' => true,
            ],
            [
                'grid' => [[5,7,0],[0,3,1],[0,5,0]],
                'expected' => false,
            ],
        ];
    }
}
