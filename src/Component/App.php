<?php
declare(strict_types=1);

namespace App\Component;

class App
{
    private string $title = 'Simple app in Fernet';

    public function __toString(): string
    {
        ob_start(); ?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->title ?></title>
    <link rel="stylesheet" href="/css/styles.css">
    <FernetFavicon />
  </head>
  <body>
    <div class="ribbon"><span>BETA</span></div>
    <h1><?= $this->title ?></h1>
    <section>
      <Hello name="World" />
    </section>
    <section>
      <Counter />
    </section>
    <footer>
        <a href="https://github.com/pragmore/hello-world-in-fernet">View the code</a>
    </footer>
    <LiveReload />
  </body>
</html><?php
    return ob_get_clean();
    }
}
