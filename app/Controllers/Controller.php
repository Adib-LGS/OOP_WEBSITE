<?php
namespace App\Controllers;


class Controller
{

    protected function view( string $path, array $params = null)
    {
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS . $path . '.php';
        $params ? extract($params) : null;
        $content = ob_get_clean();
        require VIEWS . 'layouts.php';
    }
    
}
