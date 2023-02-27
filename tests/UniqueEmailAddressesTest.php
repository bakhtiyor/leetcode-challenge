<?php

namespace App\Tests;

use App\UniqueEmailAddresses;
use PHPUnit\Framework\TestCase;

class UniqueEmailAddressesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testNumUniqueEmails(int $expected, array $emails): void
    {
        $uniqueEmailAddresses = new UniqueEmailAddresses();
        $result = $uniqueEmailAddresses->numUniqueEmails($emails);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [2, ["test.email+alex@leetcode.com","test.e.mail+bob.cathy@leetcode.com","testemail+david@lee.tcode.com"]],
            [3, ["a@leetcode.com","b@leetcode.com","c@leetcode.com"]]
        ];
    }
}
