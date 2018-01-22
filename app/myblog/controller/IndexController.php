<?php
namespace app\myblog\controller;

use cmf\controller\HomeBaseController;

class IndexController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch(':index');
    }

    public function about(){
        return $this->fetch(':about');
    }

    public function listpic(){
        return $this->fetch(':listpic');
    }
    public function newslistpic(){
        return $this->fetch(':newslistpic');
    }
}
