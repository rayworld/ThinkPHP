<?php

namespace app\api\controller\v2;

use PHPExcel;
use PHPExcel_IOFactory;
use model\User;

class Admin
{
    public function read()
    {
        $data = ['Hello', 'World'];
        return json($data);
    }
}
