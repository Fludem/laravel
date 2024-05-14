<?php

namespace Native\Laravel\Menu\Items;


use Native\Laravel\Menu\Contracts\MenuItem;

class Checkbox extends MenuItem
{
    protected string $type = 'checkbox';

    public function __construct(string $label, protected bool $isChecked = false, protected ?string $accelerator = null)
    {
        $this->label = $label;
    }
}
