<?php

namespace App\library;

class VersionControl
{
    private int $version = 0;

    public function setBadVersion(int $version): void
    {
        $this->version = $version;
    }

    public function isBadVersion(int $version): bool
    {
        return ($version === $this->version);
    }
}
