<?php

namespace app\api\controller\v1;

use think\Db;

class User
{
    public function read()
    {
        //$data = ['sdfs','sdfsd'];
        $data = Db::connect("mssql")
            ->name('t_usertype')
            ->query('select * from t_usertype ');
        $count = count($data);
        return json($data);
    }
}
