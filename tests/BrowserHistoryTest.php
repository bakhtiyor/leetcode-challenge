<?php

namespace App\Tests;

use App\BrowserHistory;
use PHPUnit\Framework\TestCase;

class BrowserHistoryTest extends TestCase
{
    public function testBrowserHistory(): void
    {
        $urls = [
            'https://leetcode.com',
            'https://google.com',
            'https://facebook.com',
            'https://youtube.com',
            'https://linkedin.com',
        ];

        $browserHistory = new BrowserHistory($urls[0]);
        $browserHistory->visit($urls[1]);
        $browserHistory->visit($urls[2]);
        $browserHistory->visit($urls[3]);

        $this->assertSame($urls[2], $browserHistory->back(1));
        $this->assertSame($urls[1], $browserHistory->back(1));
        $this->assertSame($urls[2], $browserHistory->forward(1));
        $browserHistory->visit($urls[4]);
        $browserHistory->forward(2);
        $this->assertSame($urls[1], $browserHistory->back(2));
        $this->assertSame($urls[0], $browserHistory->back(7));
    }
}
