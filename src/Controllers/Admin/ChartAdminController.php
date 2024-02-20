<?php
namespace Nguye\EzCode\Controllers\Admin;
use Nguye\EzCode\Commons\Controller;
class ChartAdminController extends Controller{
    public function index(){
        $this->renderViewAdmin('charts.index');
    }
}