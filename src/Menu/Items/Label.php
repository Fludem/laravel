<?php

namespace Native\Laravel\Menu\Items;

use Native\Laravel\Menu\Contracts\MenuItem;

class Label extends MenuItem
{
    public function __construct(string $label)
    {
        $this->label = $label;
    }
}
