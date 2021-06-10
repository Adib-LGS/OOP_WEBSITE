<?php
namespace App\Controllers;

class BlogController  
{
    public function index()
    {
        echo 'Home page return view';
    }

    public function show(int $id)
    {
        echo 'post ' . $id;
    }
}
