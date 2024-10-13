<?php

namespace Vladislav\Registration\Http\Controllers;

use Vladislav\Registration\Http\Controllers\BaseController;

class IndexController extends BaseController
{

    public function index()
    {
       return $this->render('index.twig');
    }
}