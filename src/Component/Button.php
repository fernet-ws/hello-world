<?php
declare(strict_types=1);

namespace App\Component;

class Button 
{
    public $onClick;

    public function __toString(): string
    {
        $onClickHtml = onClick($this->onClick);
        return "<a class=\"button\" {$onClickHtml}>{$this->childContent}</a>";
    }
}
