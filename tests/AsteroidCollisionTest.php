<?php

namespace App\Tests;

use App\AsteroidCollision;
use PHPUnit\Framework\TestCase;

class AsteroidCollisionTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testAsteroidCollision(array $asteroids, array $expected): void
    {
        $asteroidCollision = new AsteroidCollision();
        $this->assertEquals($expected, $asteroidCollision->asteroidCollision($asteroids));
    }

    public function dataProvider(): array
    {
        return [
            [[5,10,-5], [5,10]],
            [[8,-8], []],
            [[10,2,-5], [10]],
        ];
    }
}
