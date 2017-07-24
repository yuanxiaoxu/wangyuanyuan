<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/18
 * Time: 17:05
 */

namespace Home\Controller;


use Think\Controller;

class LoginController extends Controller
{
    public function login(){
        if(empty($_POST)){
            $this->display();
        }else{
            //dump($_POST);die;
            $user=M("users");
            $info=$user->where(array('username'=>$_POST['username'],'password'=>$_POST['password'],'status'=>1))->find();
            if($info){
                $this->redirect("Index/index");
            }else{
                $a="error";
                $this->assign("info",$a);
                $this->display();
                //echo "<script>window.history.go(-1)</script>";

            }
        }
    }
}