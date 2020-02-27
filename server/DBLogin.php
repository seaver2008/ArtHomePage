<?php


class DBLogin
{
    var $con;
    //登陆数据库并选择指定数据库
    function login(){
        $this->con = new mysqli("localhost","root","","pro");
        if (!$this->con){
            die('Could not connect: ' . mysqli_error());
        }
        mysqli_set_charset($this->con,'utf8');
    }
    //关闭数据库链接
    function close(){
        mysqli_close($this->con);
    }
}