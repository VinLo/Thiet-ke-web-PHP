<?php 
class sanpham extends database
{
    function __construct()
    {
        parent::__construct();
    }
    function _list()
    {
        return $this->setquery('select * from sanpham where trangthai!=-1 ')->loadrows();
    }
    function _item($id)
    {
        //echo $id;
        return $this->setquery('select * from sanpham where ma=? and trangthai!=-1 limit 1')
        ->loadrow([$id]);
    }
}
?>