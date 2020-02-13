<?php

namespace app\api\controller\v1;

use think\Db;

class User
{
    public function read()
    {
        //$data = ['sdfs','sdfsd'];
        $data = Db::connect("mssql")->name('t_User_Bak')->select();
        return json($data);
    }
}
