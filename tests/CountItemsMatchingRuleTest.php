<?php

namespace App\Tests;

use App\CountItemsMatchingRule;
use PHPUnit\Framework\TestCase;

class CountItemsMatchingRuleTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountMatches(array $items, string $ruleKey, string $ruleValue, int $expected): void
    {
        $sut = new CountItemsMatchingRule();
        $this->assertEquals($expected, $sut->countMatches($items, $ruleKey, $ruleValue));
    }

    public function dataProvider(): array
    {
        return [
            [
                [["phone","blue","pixel"],["computer","silver","lenovo"],["phone","gold","iphone"]], "color", "silver", 1
            ],
            [
                [["phone","blue","pixel"],["computer","silver","phone"],["phone","gold","iphone"]], "type", "phone", 2
            ]
        ];
    }
}
