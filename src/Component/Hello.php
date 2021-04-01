<?php
declare(strict_types=1);

namespace App\Component;

class Hello 
{
    public string $name;

    public function __toString(): string
    {
        return "<p>Hello <strong>{$this->name}</strong></p>";
    }
}
