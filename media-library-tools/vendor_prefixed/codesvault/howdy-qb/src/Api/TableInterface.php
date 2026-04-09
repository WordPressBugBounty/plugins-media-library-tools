<?php

namespace TinySolutions\mlt\Vendor\CodesVault\Howdyqb\Api;

interface TableInterface
{
    public function drop();
    public function dropIfExists();
    public function truncate();
}
