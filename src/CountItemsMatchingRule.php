<?php

namespace App;

/**
 * Count Items Matching a Rule
 *
 * You are given an array items, where each items[i] = [type_i, color_i, name_i] describes the type, color, and name of
 * the i-th item. You are also given a rule represented by two strings, ruleKey and ruleValue.
 * The i-th item is said to match the rule if one of the following is true:
 *  - ruleKey == "type" and ruleValue == type_i.
 *  - ruleKey == "color" and ruleValue == color_i.
 *  - ruleKey == "name" and ruleValue == name_i.
 * Return the number of items that match the given rule.
 *
 * Example 1:
 * Input: items = [["phone","blue","pixel"],["computer","silver","lenovo"],["phone","gold","iphone"]],
 * ruleKey = "color", ruleValue = "silver"
 * Output: 1
 * Explanation: There is only one item matching the given rule, which is ["computer","silver","lenovo"].
 *
 * Example 2:
 * Input: items = [["phone","blue","pixel"],["computer","silver","phone"],["phone","gold","iphone"]],
 * ruleKey = "type", ruleValue = "phone"
 * Output: 2
 * Explanation: There are only two items matching the given rule, which are ["phone","blue","pixel"] and
 * ["phone","gold","iphone"]. Note that the item ["computer","silver","phone"] does not match.
 *
 * https://leetcode.com/problems/count-items-matching-a-rule
 */
class CountItemsMatchingRule
{
    /**
     * @param string[][] $items
     * @param string $ruleKey
     * @param string $ruleValue
     * @return int
     */
    public function countMatches(array $items, string $ruleKey, string $ruleValue): int
    {
        $count = 0;
        foreach ($items as $item) {
            if ($item[$this->getRuleKeyIndex($ruleKey)] === $ruleValue) {
                $count++;
            }
        }

        return $count;
    }

    private function getRuleKeyIndex(string $ruleKey): int
    {
        $ruleKeys = [
            'type' => 0,
            'color' => 1,
            'name' => 2,
        ];

        return $ruleKeys[$ruleKey];
    }
}
