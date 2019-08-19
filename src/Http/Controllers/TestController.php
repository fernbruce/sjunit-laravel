<?php 
namespace ShineYork\SJunitLaravel\Http\Controllers;

use Illuminate\Routing\Controller;

class TestController extends Controller{

    public function index(){
             return '这是测试sjunit的一个测试控制器,测试的目标是与Laravel集成控制器和服务';
    }



}
