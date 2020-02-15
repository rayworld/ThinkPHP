<?php

namespace app\api\controller\v1;

use app\api\model\UserTest;
use think\exception\HttpException;
use think\Db;

class User
{
    public function read()
    {
        //$data = ['sdfs','sdfsd'];
        $user_list_query = Db::connect("mysql")
            ->name('user_test')
            ->paginate(10);
        $dept_list_arr = $user_list_query->toArray();
        //json数组
        $arr = array();
        $arr['code'] = 0;
        $arr['msg'] = "";
        $arr['count'] = $dept_list_arr['total'];
        $arr['per_page'] = $dept_list_arr['per_page'];
        $arr['current_page'] = $dept_list_arr['current_page'];
        $arr['data'] = $dept_list_arr['data'];
        $arr_json = json($arr);
        return $arr_json;
    }
}
