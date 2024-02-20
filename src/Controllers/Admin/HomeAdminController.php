<?php
namespace Nguye\EzCode\Controllers\Admin;

use Nguye\EzCode\Commons\Controller;

class HomeAdminController extends Controller
{
    public function index()
    {
        $this->renderViewAdmin('home');
    }
}