<?php

namespace App\Tests;

use App\library\BinarySearchNode;
use App\library\BinarySearchTree;
use App\library\BinaryTree;
use App\library\TreeNode;
use App\TwoSumIVBST;
use PHPUnit\Framework\TestCase;

class TwoSumIVBSTTest extends TestCase
{
    /** @dataProvider twoSumIVBSTTestProvider */
    public function testFindTarget(array $array, int $target, bool $expected): void
    {
        $root = new BinarySearchNode(null);
        /** @var int $item */
        foreach ($array as $item) {
            $root->insert(new BinarySearchNode($item));
        }
        $twoSumIVBST = new TwoSumIVBST();
        $result = $twoSumIVBST->findTarget($root, $target);

        $this->assertEquals($expected, $result);
    }

    public function twoSumIVBSTTestProvider(): array
    {
        return [
            [[5,3,6,2,4,null,7], 9, true],
            [[5,3,6,2,4,null,7], 28, false],
            [[2,1,3], 1, false]
        ];
    }
}
