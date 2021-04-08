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
        <a href="https://github.com/fernet-ws/hello-world" target="_blank"><span class="icon-github"></span> View the code</a>
    </footer>
    <script async src="https://cdn.panelbear.com/analytics.js?site=9giMuZX5Wzn"></script>
    <script>
        window.panelbear = window.panelbear || function() { (window.panelbear.q = window.panelbear.q || []).push(arguments); };
        panelbear('config', { site: '9giMuZX5Wzn' });
    </script>
    <LiveReload />
  </body>
</html><?php
    return ob_get_clean();
    }
}
