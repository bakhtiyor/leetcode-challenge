<?php

namespace App;

/**
 * Excel Sheet Column Number
 *
 * Given a string columnTitle that represents the column title as appears in an Excel sheet, return its
 * corresponding column number. For example:
 * A -> 1 B -> 2 C -> 3 ... Z -> 26 AA -> 27 AB -> 28 ...
 * Example 1:
 * Input: columnTitle = "A" Output: 1
 *
 * Example 2:
 * Input: columnTitle = "AB" Output: 28
 *
 * https://leetcode.com/problems/excel-sheet-column-number
 */
class ExcelSheetColumnNumber
{
    /**
     * @param string $columnTitle
     * @return int
     */
    public function titleToNumber(string $columnTitle): int
    {
        $letters = $this->getLetters();
        $sum = 0;
        $pos = 0;
        $strLen = strlen($columnTitle);
        for ($i = $strLen - 1; $i >= 0; $i--) {
            $sum += $letters[$columnTitle[$i]] * (26 ** $pos);
            $pos++;
        }

        return $sum;
    }

    /**
     * @return array<string, int>
     */
    private function getLetters(): array
    {
        $columns = [];
        for ($i = 65; $i <= 90; $i++) {
            $columns[chr($i)] = $i - 64;
        }
        return $columns;
    }
}
