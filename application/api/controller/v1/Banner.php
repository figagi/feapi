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

//use think\Validate;

class Banner
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
        /**
         * @id banner id 号
         */
//         ['name'=> 'stark','id' => $id];
//        return ['name'=> 'stark','id' => $id];

        $user           = new UserModel;
        $user->username     = 'thinkphp';
        $user->email    = 'thinkphp@qq.com';
        $user->save();
        return ['name'=> $user,'id' => $id];

//        $data = [
//            'name' => 'starks12222222222222222',
//            'mail' => 'wsd@qq.com'
//        ];

//        $validate = new Validate([
//            'name' => 'require|max:10',
//            'mail' => 'email'
//        ]);
//        $result = $validate->batch()->check($data);
//        var_dump($result);
//        var_dump($data);
//        var_dump($validate->getError());

//        die;
//        return $data;
    }

    public function testSave(){
//        $user           = new User;
//        $user->name     = 'thinkphp';
//        $user->email    = 'thinkphp@qq.com';
//        $user->save();
    }

    public function CreatedUser(){
//        retrun ['name' => 'stark'];


        $user           = new UserModel;
        $user->name     = 'thinkphp';
        $user->email    = 'thinkphp@qq.com';
        $user->save();


    }

}