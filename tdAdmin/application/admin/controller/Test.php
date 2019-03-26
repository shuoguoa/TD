<?php
/**
 * Created by PhpStorm.
 * User: 管理员
 * Date: 2019/3/26
 * Time: 12:37
 */

namespace app\admin\controller;

use app\common\controller\Common;
class Test extends Common
{
    public function hello(){
//        echo $_SERVER['HTTP_ORIGIN'];
        echo 888;
//        $header = Request::instance()->header();
//        var_dump($header);exit;
//        $param = $this->param;
//        return $param['name'];
    }
}
