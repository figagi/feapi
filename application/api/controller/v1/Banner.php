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
        return ['name'=> 'stark','id' => $id];
//        return json(['name'=> 'stark','id' => $id]);
    }


}