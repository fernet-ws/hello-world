<?php
declare(strict_types=1);

namespace App\Component;

class Button 
{
    public $onClick;
    public ?string $ariaLabel = null;

    public function __toString(): string
    {
        $onClickHtml = onClick($this->onClick);
        $ariaLabel = $this->ariaLabel ? "aria-label=\"$this->ariaLabel\"" : '';
        return "<a class=\"button\" {$ariaLabel} {$onClickHtml}>{$this->childContent}</a>";
    }
}
