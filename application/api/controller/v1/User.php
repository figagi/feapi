<?php
/**
 * Created by 七月.
 * Author: 七月
 * Date: 2017/4/17
 * Time: 2:05
 */

namespace app\api\controller\v1;
//
//use app\api\validate\IDMustBePostiveInt;
//use app\api\validate\TestValidate;
//use think\Validate;
use app\api\model\User as UserModel;

class User
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     *
     */
    public function getBanner($id)
    {
//        echo $id;
        return ['name'=> 'stark','id' => $id];
//        return json(['name'=> 'stark','id' => $id]);
    }

    public function CreatedUser(){
        $user           = new UserModel;
        $user->name     = 'thinkphp';
        $user->email    = 'thinkphp@qq.com';
        $user->save();


    }
}