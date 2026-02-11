<?php

namespace Abhysta\BelajarMvcPhp\Controller;

class HomeController
{
    function index()
    {
        $model = [
            "title" => "Belajar"
        ];
        require __DIR__ .  "/../View/HomeView.php";
    }
}
