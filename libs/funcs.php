<?php
function xemmang($ar)
{
    echo '<pre>',print_r($ar),'</pre>';
}

function chuyentrang($url)
{
    header('location: '.$url);
}
function msg($noidung,$type='success')
{
    return '<div class="alert alert-'.$type.'">'.$noidung.'</div>';
}
function islogin()
{
    return  isset($_SESSION['login_status'])  && $_SESSION['login_status'];
}
function post($name)
{
    if(isset($_POST[$name]))
    {
        return trim($_POST[$name]);
    }else{
        return '';
    }
}
function get($name)
{
    if(isset($_GET[$name]))
    {
        return trim($_GET[$name]);
    }else{
        return '';
    }
}