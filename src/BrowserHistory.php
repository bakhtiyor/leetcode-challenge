<?php

namespace App;

/**
 * Design Browser History
 *
 * You have a browser of one tab where you start on the homepage and you can visit another url, get back in the history
 * number of steps or move forward in the history number of steps.
 * Implement the BrowserHistory class:
 * - BrowserHistory(string homepage) Initializes the object with the homepage of the browser.
 * - void visit(string url) Visits url from the current page. It clears up all the forward history.
 * - string back(int steps) Move steps back in history. If you can only return x steps in the history and steps > x, you
 * will return only x steps. Return the current url after moving back in history at most steps.
 * - string forward(int steps) Move steps forward in history. If you can only forward x steps in the history and
 * steps > x, you will forward only x steps. Return the current url after forwarding in history at most steps.
 *
 * https://leetcode.com/problems/design-browser-history
 */
class BrowserHistory {
    /** @var array <array-key, string> */
    private array $history = [];
    private int $currentPosition = 0;

    public function __construct(string $homepage)
    {
        $this->history[] = $homepage;
    }

    public function visit(string $url): void
    {
        // Add the URL to the history and clear all the forward history.
        $this->history = array_slice($this->history, 0, $this->currentPosition + 1);
        $this->history[] = $url;
        $this->currentPosition++;
    }

    public function back(int $steps): string
    {
        // Move the current position back by $steps steps.
        $this->currentPosition = max(0, $this->currentPosition - $steps);
        return (string) $this->history[$this->currentPosition];
    }

    public function forward(int $steps): string
    {
        // Move the current position forward by $steps steps.
        $this->currentPosition = min(count($this->history) - 1, $this->currentPosition + $steps);
        return (string) $this->history[$this->currentPosition];
    }
}
