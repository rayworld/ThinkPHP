<?php

namespace app\api\controller\v1;

use app\api\model\UserTest;
use think\exception\HttpException;
use think\Db;
use think\Request;

class User
{
    public function read(Request $request)
    {
        //$data = ['sdfs','sdfsd'];
        //获取总条数
        $list = Db::connect("mysql")
            ->name('user_test')
            ->all();
        $count = count($list);

        //获取每页显示的条数
        $limit = $request->param('limit');
        //获取当前页数
        $page = $request->param('page');

        //计算出从那条开始查询
        $tol = ($page - 1) * $limit;
        // 查询出当前页数显示的数据
        $list = Db::connect("mysql")
            ->name('user_test')
            ->limit($tol, $limit)
            ->select();

        //返回数据
        $arr = array();
        $arr['code'] = 0;
        $arr['msg'] = "";
        $arr['count'] = $count;
        $arr['data'] = $list;
        $arr_json = json($arr);

        return $arr_json;
    }


    public function insertuser()
    {
        return json(1);
    }
}
