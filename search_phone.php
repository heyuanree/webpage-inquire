<?php
/**********
  Time:2016-11-11
  Author:Ree
**********/
  header("Content-Type: text/html; charset=utf-8");
  require "QueryList/vendor/autoload.php";
  //echo "<script>alert('ok');</script>";

  use QL\QueryList;

  $in_number = $_GET['search'];
  $out_url = "http://shouji.supfree.net/fish.asp?cat=".$in_number;

  $rule = array(
    'place_belong_to' => array('div.cdiv:nth-child(3) > p:nth-child(4)','text'),
    'number_segment' => array('div.cdiv:nth-child(3) > p:nth-child(5) > a:nth-child(2)','text'),
    'card_type' => array('div.cdiv:nth-child(3) > p:nth-child(6)','text'),
    'ISP' => array('div.cdiv:nth-child(3) > p:nth-child(7) > a:nth-child(2)','text'),
    'card_inside' => array('div.cdiv:nth-child(3) > p:nth-child(8) > a:nth-child(2)','text'),
    'communication_standard' => array('div.cdiv:nth-child(3) > p:nth-child(9) > a:nth-child(2)','text')
  );

//div.cdiv:nth-child(3) > p:nth-child(4)
//div.cdiv:nth-child(3) > p:nth-child(5) > a:nth-child(2)
//div.cdiv:nth-child(3) > p:nth-child(6)
//div.cdiv:nth-child(3) > p:nth-child(7) > a:nth-child(2)
//div.cdiv:nth-child(3) > p:nth-child(8) > a:nth-child(2)
//div.cdiv:nth-child(3) > p:nth-child(9) > a:nth-child(2)

  $data = QueryList::Query($out_url, $rule)->data;

  $data[0]['place_belong_to'] = iconv('GB2312','UTF-8',$data[0]['place_belong_to']);
  $data[0]['place_belong_to'] = mb_substr($data[0]['place_belong_to'],4,NULL,'UTF-8');
  $data[0]['card_type'] = iconv('GB2312','UTF-8',$data[0]['card_type']);
  $data[0]['card_type'] = mb_substr($data[0]['card_type'],4,NULL,'UTF-8');
  $data[0]['card_inside'] = iconv('GB2312','UTF-8',$data[0]['card_inside']);
  $data[0]['ISP'] = iconv('GB2312','UTF-8',$data[0]['ISP']);


  $arr = array(
    'text' => array(
      'number' => $in_number,
      'place_belong_to' => $data[0]['place_belong_to'],
      'number_segment' => $data[0]['number_segment'],
      'card_type' => $data[0]['card_type'],
      'card_inside' => $data[0]['card_inside'],
      'ISP' => $data[0]['ISP'],
      'communication_standard' => $data[0]['communication_standard']
    ),
  );

  $filePath = 'number/';
  $fileName = $in_number.'.html';
  $fileFullName = $filePath.$fileName;
  extract($arr);
  ob_start();
  require('index_phone_m.php');
  $out = ob_get_clean();

  $f = fopen($fileFullName,'w');
  fwrite($f, $out);
  fclose($f);

  echo "<script>window.location.href='$fileFullName';</script>";

?>
