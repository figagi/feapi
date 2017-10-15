<?php
namespace app\api\controller;

use think\Controller;

class Test extends Controller
{
    public function index()
    {
        return [
        'stark',
        'stark'
      ];
    }

    public function update($id)
    {
        $id = input('put.id');
        return $id;
    }
}
