<?php

namespace App;

/**
 * Excel Sheet Column Title
 *
 * Given an integer columnNumber, return its corresponding column title as it appears in an Excel sheet.
 * For example:
 * A -> 1
 * B -> 2
 * C -> 3
 * ...
 * Z -> 26
 * AA -> 27
 * AB -> 28
 * ...
 * Example 1:
 * Input: columnNumber = 1
 * Output: "A"
 *
 * Example 2:
 * Input: columnNumber = 28
 * Output: "AB"
 *
 * Example 3:
 * Input: columnNumber = 701
 * Output: "ZY"
 *
 * https://leetcode.com/problems/excel-sheet-column-title
 */
class ExcelSheetColumnTitle
{
    /**
     * @param int $columnNumber
     * @return string
     */
    public function convertToTitle(int $columnNumber): string
    {
        $columnTitle = '';
        while ($columnNumber > 0) {
            $remainder = ($columnNumber - 1) % 26;
            $columnTitle .= chr(65 + $remainder);
            $columnNumber = (int) (($columnNumber - 1 - $remainder) / 26);
        }
        return strrev($columnTitle);
    }
}
