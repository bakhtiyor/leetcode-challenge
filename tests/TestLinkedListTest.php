<?php

namespace App\Tests;

use App\library\ListNode;
use PHPUnit\Framework\TestCase;

class TestLinkedListTest extends TestCase
{
    public function testTest()
    {
        $list = new ListNode();
        $list->addLast(10);
        $list->addLast(20);
        $list->addLast(30);
        $list->addFirst(5);

        $this->assertSame(0, $list->indexOf(5));
        $this->assertTrue($list->contains(5));
        $this->assertFalse($list->contains(15));
        $list->removeFirst();
        $this->assertFalse($list->contains(5));
        $this->assertSame(0, $list->indexOf(10));

        $list->removeLast();
        $this->assertFalse($list->last->val === 30);
        $this->assertTrue($list->last->val === 20);
    }
}
