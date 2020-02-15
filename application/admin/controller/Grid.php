<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;

class Grid extends Controller
{
  public function Index()
  {
    return $this->fetch();
  }
}
