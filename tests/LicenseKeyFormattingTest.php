<?php

namespace App\Tests;

use App\LicenseKeyFormatting;
use PHPUnit\Framework\TestCase;

class LicenseKeyFormattingTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testLicenseKeyFormatting(string $str, int $k, string $expected): void
    {
        $licenseKeyFormatting = new LicenseKeyFormatting();
        $result = $licenseKeyFormatting->licenseKeyFormatting($str, $k);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['2-5g-3-J', 2, '2-5G-3J'],
            ['r', 1, 'R'],
            ['5F3Z-2e-9-w', 4, '5F3Z-2E9W'],
            ['5F3Z-2e-9-w', 4, '5F3Z-2E9W'],
        ];
    }
}
