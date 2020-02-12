<?php
namespace app\api\controller;

use think\Controller;
use think\Response;

class Test extends Controller
{
    public function index()
    {
        $data = ['sdfs','sdfsd'];
        
        return json($data);
    }
}
