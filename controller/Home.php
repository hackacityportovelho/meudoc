<?php

namespace Controllers;

use View;

/*
    Project: MeuDoc
*/
class Home extends Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Home/index.html');
    }
}
