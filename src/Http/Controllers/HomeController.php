<?php

namespace App\Http\Controllers;

class HomeController implements ControllerInterface
{
    public function index()
    {
        echo '<h2>home controller</h2>';
    }
}
