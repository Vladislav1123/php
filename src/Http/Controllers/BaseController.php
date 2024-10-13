<?php

namespace Vladislav\Registration\Http\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class BaseController
{
    protected function render(string $template = '', array $data = [])
    {
        $loader = new FilesystemLoader();
        $loader->addPath(__DIR__ . '/../../resources/views');
        $loader->addPath(__DIR__ . '/../../resources/views/layouts');
        $loader->addPath(__DIR__ . '/../../resources/views/pages');

        $twig = new Environment($loader, [
            'cache' => false
        ]);

       $html = $twig->render($template, $data);

       echo $html;
    }
}