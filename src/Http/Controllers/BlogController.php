<?php

namespace App\Http\Controllers;

class BlogController implements ControllerInterface
{
    public function index()
    {
        echo '<h2>blog controller</h2>';
    }

    public function show(string $slug)
    {
        echo '<h2>blog controller</h2>';
        echo $slug;
    }
}
