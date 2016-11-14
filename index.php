<?php
  header("Content-Type:text/html charset:utf-8");
  require "QueryList/vendor/autoload.php";
  use QL\QueryList;

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
////////////////////////////////////////////////////////////
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
    };
    array_push($history_title,$tmp[0]['title']);
  };

//////////////////////////////////////////////////////////
  $arr = array(
    'text'=>array(
      'history' => array($history[4],$history[3],$history[2],$history[1],$history[0]),
      'history_title' => array($history_title[0],$history_title[1],$history_title[2],$history_title[3],$history_title[4])
    ),
  );

  $fileFullName = "index.htm";
  extract($arr);
  ob_start();
  require('index_m.php');
  $out = ob_get_clean();

  $f = fopen($fileFullName,'w');
  fwrite($f, $out);
  fclose($f);


  echo "<script>window.location.href='$fileFullName';</script>";

?>
