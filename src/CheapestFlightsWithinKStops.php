<?php

namespace App;

/**
 * Cheapest Flights Within K Stops
 *
 * There are n cities connected by some number of flights. You are given an array flights where
 * flights[i] = [from_i, to_i, price_i] indicates that there is a flight from city from_i to city to_i with cost price_i
 * You are also given three integers src, dst, and k, return the cheapest price from src to dst with at most k stops.
 * If there is no such route, return -1.
 *
 * Example 1:
 * Input: n = 4, flights = [[0,1,100],[1,2,100],[2,0,100],[1,3,600],[2,3,200]], src = 0, dst = 3, k = 1
 * Output: 700
 * Explanation:
 * The optimal path with at most 1 stop from city 0 to 3 is marked in red and has cost 100 + 600 = 700.
 * Note that the path through cities [0,1,2,3] is cheaper but is invalid because it uses 2 stops.
 *
 * Example 2:
 * Input: n = 3, flights = [[0,1,100],[1,2,100],[0,2,500]], src = 0, dst = 2, k = 1
 * Output: 200
 * Explanation:
 * The optimal path with at most 1 stop from city 0 to 2 is marked in red and has cost 100 + 100 = 200.
 *
 * https://leetcode.com/problems/cheapest-flights-within-k-stops
 */
class CheapestFlightsWithinKStops
{
    /**
     * Solution using Bellman Ford's algorithm
     * @param int $n
     * @param array<array-key, array<array-key, int>> $flights
     * @param int $src
     * @param int $dst
     * @param int $k
     * @return int
     */
    public function findCheapestPrice(int $n, array $flights, int $src, int $dst, int $k): int
    {
        $prices = array_fill(0, $n, PHP_INT_MAX);
        $prices[$src] = 0;

        for ($i = 0; $i < $k + 1; $i++) {
            $tmpPrices = array_slice($prices, 0); //copy the array without the reference
            foreach ($flights as $flight) {
                $source = $flight[0];
                $destination = $flight[1];
                $price = $flight[2];
                if ($prices[$source] === PHP_INT_MAX) {
                    continue;
                }
                if ($prices[$source] + $price < $tmpPrices[$destination]) {
                    $tmpPrices[$destination] = $prices[$source] + $price;
                }
            }
            $prices = array_slice($tmpPrices, 0);
        }
        if ($prices[$dst] === PHP_INT_MAX) {
            return -1;
        }
        return $prices[$dst];
    }
}
