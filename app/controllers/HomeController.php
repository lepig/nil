<?php

/**
* HomeController
*/
class HomeController extends BaseController
{
    
    function __construct()
    {
        # code...
    }

    public function home()
    {
        $article = Article::first();
        // dump(__FILE__);
        require dirname(__FILE__) . '/../views/home.php';
    }
}