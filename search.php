<?php
/**********
  Time:2016-11-11
  Author:Ree
**********/
  header("Content-Type: text/html; charset=utf-8");
  require "QueryList/vendor/autoload.php";
  require "Snoopy/Snoopy.class.php";
  use QL\QueryList;

//读取文件最后几行的数据，并保存数组，倒序输出
function get_last_lines($file, $line)
{
  $all_line_number = 0;
  $arr = array();
  $handle = fopen($file,'r');
  if($handle)
  {
    while(!feof($handle))
    {
      $buffer = fgets($handle);
      $all_line_number++;
    }
  }
  fclose($handle);
  $handle = fopen($file,'r');
  $current_line = $all_line_number - $line;
  $i = 1;
  while($i!=$current_line)
  {
    $buffer=fgets($handle);
    $i++;
  }
  while(!feof($handle))
  {
    $arr[]=fgets($handle);
  }
  return $arr;
}


  $in_url = $_GET['search'];
  $out_url = "http://".$in_url;
  $f = fopen('history_search.txt','a+');
  fwrite($f,$in_url."\n");
  fclose($f);

  $rule = array(
    'title' => array('head title','text'),
    'keywords' => array('head meta[name="keywords"]','content'),
    'description' => array('head meta[name="description"]','content')
  );

  $data = QueryList::Query($out_url, $rule)->data;

  $encode = mb_detect_encoding($data[0]['title'],array('ASCII','GB2312','GBK','UTF-8'));
  if($encode == 'GB2312'){
    $data[0]['title'] = iconv('GB2312','utf-8',$data[0]['title']);
  }
  //历史记录查询
  $f = 'history_search.txt';
  $history = array();
  $line=5;
  $history = get_last_lines($f,$line);

  $history_title = array();
  $i = 0;
  $rule_1 = array(
    'title' => array('head title','text')
  );
  for($i = 0; $i < 5; $i++)
  {
    $history_tmp = "http://".$history[4-$i];
    $history_tmp = substr($history_tmp,0,strlen($history_tmp)-1);
    $tmp = QueryList::Query($history_tmp, $rule_1)->data;
    $encode = mb_detect_encoding($tmp[0]['title'],array('GB2312','GBK','UTF-8'));
    if($encode == 'GB2312' || $encode == 'EUC-CN'){
      $tmp[0]['title'] = iconv('GB2312','UTF-8',$tmp[0]['title']);
    }
    array_push($history_title,$tmp[0]['title']);
  };
/***********************************************************************/
  $arr = array(
    'text'=>array(
      'title' => $data[0]['title'],
      'url' => $in_url,
      'description' => $data[0]['description'],
      'keywords' => $data[0]['keywords'],
      'history' => array($history[4],$history[3],$history[2],$history[1],$history[0]),
      'history_title' => array($history_title[0],$history_title[1],$history_title[2],$history_title[3],$history_title[4])
    ),
  );

  $filePath = 'cha/';
  $fileName = $in_url.'.html';
  $fileFullName = $filePath.$fileName;
  extract($arr);
  ob_start();
  require('index_m.php');
  $out = ob_get_clean();

  $f = fopen($fileFullName,'w');
  fwrite($f, $out);
  fclose($f);

  echo "<script>window.location.href='$fileFullName';</script>";

?>
