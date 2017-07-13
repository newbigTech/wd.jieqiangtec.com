<?php
include("../include/common.inc.php");
$cid=Char_Cv("cid");
$wid=Char_Cv("wid");
$uid=Char_Cv("uid");
if(!$cid || !$wid || !$uid){
  ero($language['error_comefrom']);
  exit();
}
$language_dialog=$db->select("setting","language","companyid='$cid'");
if(!$language_dialog)$language_dialog=$lang_dialog;
include_once('../language/'.$language_dialog.'/dialog.php');
$ntype=Char_Cv("ntype");
switch($ntype){
  case"book":
    $sort=Char_Cv("sort");
    $realname=Char_Cv("realname");
    $phone=Char_Cv("phone");
    $email=Char_Cv("email");
    $im=Char_Cv("im");
    $co=Char_Cv("co");
    $db->insert("book","companyid,workerid,clientid,sort,realname,phone,email,im,co,addtime,addip","$cid|$wid|$uid|$sort|$realname|$phone|$email|$im|$co|$time|$onlineip");
    $db->insert("message","companyid,workerid,clientid,action,content,addtime","$cid|$wid|$uid|5|book|$now");
    print('<script>alert("'.str_replace('"','\"',$language['success_book']).'");top.bookform.reset;</script>');
    break;
  case"phone":
    $sort=Char_Cv("sort");
    $realname=Char_Cv("realname");
    $phone=Char_Cv("phone");
    $co=Char_Cv("co");
    $db->insert("phone","companyid,workerid,clientid,sort,realname,phone,co,addtime,addip","$cid|$wid|$uid|$sort|$realname|$phone|$co|$time|$onlineip");
    $db->insert("message","companyid,workerid,clientid,action,content,addtime","$cid|$wid|$uid|5|phone|$now");
    print('<script>alert("'.str_replace('"','\"',$language['success_phone']).'");top.phoneform.reset;</script>');
    break;
  case"order":
    $sort=Char_Cv("sort");
    $title=Char_Cv("title");
    $buynum=Char_Cv("buynum");
    $realname=Char_Cv("realname");
    $phone=Char_Cv("phone");
    $email=Char_Cv("email");
    $im=Char_Cv("im");
    $co=Char_Cv("co");
    $db->insert("order","companyid,workerid,clientid,title,buynum,realname,phone,email,im,co,addtime,addip","$cid|$wid|$uid|$title|$buynum|$realname|$phone|$email|$im|$co|$time|$onlineip");
    $db->insert("message","companyid,workerid,clientid,action,content,addtime","$cid|$wid|$uid|5|order|$now");
    print('<script>alert("'.str_replace('"','\"',$language['success_order']).'");top.orderform.reset;</script>');
    break;
}
?>