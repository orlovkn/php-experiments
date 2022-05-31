<?php

namespace App;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentController;

class ControllerFactory
{
    public function make(array $route)
    {
        $controller = $route[0] ?? '';

        return match ($controller) {
            'blog' => new BlogController(),
            'about', 'contacts' => new ContentController(),
            default => new HomeController(),
        };
    }
}
