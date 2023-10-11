<?php

namespace App\Tests;

use App\SimplifyPath;
use PHPUnit\Framework\TestCase;

class SimplifyPathTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSimplifyPath(string $path, string $expected): void
    {
        $obj = new SimplifyPath();
        $this->assertEquals($expected, $obj->simplifyPath($path));
    }

    public function dataProvider(): array
    {
        return [
            ['/home/', '/home'],
            ['/../', '/'],
            ['/home//foo/', '/home/foo'],
            ['/a/./b/../../c/', '/c'],
            ['/a/../../b/../c//.//', '/c'],
            ['/a//b////c/d//././/..', '/a/b/c'],
        ];
    }
}
