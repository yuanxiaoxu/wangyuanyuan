<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/22
 * Time: 21:36
 */

namespace Home\Controller;
use Think\Controller;


class UploadController extends Controller
{
    public function pic_upload(){
        if(empty($_FILES)){
            $this->show();
        }else{
            $files=$_FILES;
            $date = date("Ymd", time());
            $path="Public/uploads/$date/";
            if(!is_dir("Public/uploads")){
                mkdir("Public/uploads");
            }
            if(!is_dir($path)){
                mkdir($path);
            }
            $name = iconv("UTF-8", "gb2312", $files['pic']['name']);
            $imagePath = $path.$name;
            move_uploaded_file($files['pic']['tmp_name'],$imagePath);
            dump("/".$imagePath);
        }
    }
}