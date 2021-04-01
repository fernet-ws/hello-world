<?php
declare(strict_types=1);

namespace App\Component;

use App\Service\NumberToWord;
use Fernet\StatefulComponent;

class Counter 
{
    use StatefulComponent;

    private NumberToWord $numberToWord;

    public function __construct(NumberToWord $numberToWord)
    {
        $this->initState(number: 0);
        $this->numberToWord = $numberToWord;
    }

    public function __toString(): string
    {
        ob_start(); ?>

        <h2><?= $this->numberToWord->convert($this->state->number) ?></h2>
        <p>
          <a class="button" <?= onClick(function () {
            $this->setState(number: $this->state->number + 1);
        }) ?>>Increment</a>

          <?php /* This <Button> component generates the same HTML than the above <a>. We need to use the params function in order to pass non-strings values */ ?>
          <Button <?= params(onClick: function () {
            $this->setState(number: $this->state->number * 2);
        }) ?>>Double</Button>

          <Button <?= params(onClick: function () {
            $this->setState(number: 0);
          }) ?>>Clean</Button>
        </p>
<?php 
        return ob_get_clean();
    }
}

