<?php
namespace app\api\controller\v2;

class User
{
    public function read()
    {
        $data = ['Hello','World'];
        return json($data);
    }
}