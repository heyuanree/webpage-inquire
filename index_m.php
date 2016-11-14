<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>网站综合查询-<?php echo $text['title'];?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="alternate" media="only screen and (max-width: 640px)" href="">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--
    <script src="js/hm.js" type="text/javascript"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery_002.js" type="text/javascript"></script>
    <script src="js/node.js" type="text/javascript"></script>
    <script src="js/dialog.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            sitedir="/";
            var domain = '';toloading(domain);
        });
    </script>
  -->
</head>
<body><div class="wrapper">
    <!--
    <div id="logo" class="f_left"><a href="" title="网站综合查询,搜索引擎收录查询,网站价值评估查询_Web3389站长工具"><img src="logo.jpg" alt="网站综合查询,搜索引擎收录查询,网站价值评估查询_Web3389站长工具" width="314" height="52"></a></div>
    -->
    <div id="banner" class="f_right"><script src="js/f1.js" type="text/javascript"></script>
    </div>
</div>
<div class="wrapper cal">
    <div id="menu">
        <ul>
            <!--
            <li><a href="http://www.web3389.com/" title="首页"><div></div></a></li>
            <li><a href="http://www.web3389.com/" title="网站综合查询"><div></div></a></li>
            <li><a href="http://www.web3389.com/lishi/" title="网站历史数据"><div></div></a></li>
            <li><a href="http://ip.web3389.com/" title="IP查询"><div></div></a></li>
            <li><a href="http://whois.web3389.com/" title="Whois查询"><div></div></a></li>
            <li><a href="http://seo.web3389.com/" title="收录查询"><div></div></a></li>
            <li><a href="http://pr.web3389.com/" title="PR查询"><div></div></a></li>
            <li><a href="http://beian.web3389.com/" title="备案查询"><div></div></a></li>
            -->
        </ul>
    </div>
</div>
<div class="wrapper cal">
    <div style="border-bottom:1px #D5D5D5 solid;height:0px;font-size:0px;line-height:0px;width:972px;margin:0px auto;"></div>
    <div id="content" align="center">
        <script src="js/daohang.js" type="text/javascript"></script>

        <script src="js/f7.js" type="text/javascript"></script><script type="text/javascript">
        /*728*20，web3389*/
        var cpro_id = "u2075211";
    </script>
        <script src="js/c_002.js" type="text/javascript"></script>

    </div><div style="border-bottom:1px #D5D5D5 solid;height:0px;font-size:0px;line-height:0px;width:972px;margin:0px auto;"></div>
</div>
<script type="text/javascript">

    var cpro_id = "u2790355";
</script>
<script src="js/f.js" type="text/javascript"></script>
<div class="wrapper cal" style="padding:0">
    <div id="content">
        <p>&nbsp;</p>
        <div class="sbox">
            <div class="stitle simg1">
              <table class=table width="100%">
                <tr>
                  <td align=center><a href="/index.html" style="text-decoration:none">网站综合查询</a></td>
                  <td align=center><a href="/index_phone.html" style="text-decoration:none">手机号查询</a></td>
                  <!--<td align=center><a href="index_keywords.html" style="text-decoration:none">关键字查询</a></td>-->
                </tr>
              </table>
            </div>
            <div class="scontent">
                <div class="center">
                    <form id="s" name="s" method="get" action="/search.php" onsubmit="return formcheck_url();">
                        请输入您要查询的内容：
                        <input class="input" name="search" id="str" value="<?php echo $text['url'];?>" size="60" type="text">
                        <input class="btn" id="en" value="查  询" type="submit">
                    </form>
                    <p style="padding-top:8px;"></p>
                    <p style="padding-top:8px;"></p>
                </div>
                <div class="box_l f_left">
                    <table class="tables" width="100%" cellspacing="0" cellpadding="0" bordercolor="#A2C6D3" border="1" bgcolor="#E5F2FA">
                        <tbody><tr>
                            <td width="100"></td>
                            <td class="bgFFF" width="500" align="right" height="25"><span id="s_updatetime">更新时间：刚刚</span>&nbsp;&nbsp;</td>
                        </tr>
                        <tr id="s_beians">
                            <td align="right" height="25">网站域名：</td>
                            <td class="bgFFF"><div style="float:left;" class="loading" id="s_domain">
                                <h3><?php echo $text['url'];?></h3>
                            </div>
                                &nbsp;&nbsp;</td>
                        </tr>
                        <tr id="s_titles">
                            <td align="right" height="25">网站标题：</td>
                            <td class="bgFFF"><div class="loading" id="s_title"><?php echo $text['title'];?></div></td>
                        </tr>
                        <tr id="s_descriptions">
                            <td align="right" height="25">网站简介：</td>
                            <td class="bgFFF"><div class="loading" id="s_description"><?php echo $text['description'];?></div></td>
                        </tr>
                        <tr id="s_keywordss">
                            <td align="right" height="25">网站关键字：</td>
                            <td class="bgFFF"><div class="loading" id="s_keywords"><?php echo $text['keywords'];?></div></td>
                        </tr>
                        <tr id='s_history'>
                            <td align="center" height="130">大家都在搜：</td>
                            <td class="bgFFF">
                              <div class="loading" id="s_history">
                                <ul class=s_list>
                                  <li>&nbsp;&nbsp;<a href=<?php echo "http://103.55.26.54/cha/".substr($text['history'][0],0,strlen($text['history'][0])-1).".html";?> target="_blank" title=<?php echo $text['history_title'][0];?>><?php echo $text['history']['0']?></a></li>
                                  <li>&nbsp;&nbsp;<a href=<?php echo "http://103.55.26.54/cha/".substr($text['history'][1],0,strlen($text['history'][0])-1).".html";?> target="_blank" title=<?php echo $text['history_title'][1];?>><?php echo $text['history']['1']?></a></li>
                                  <li>&nbsp;&nbsp;<a href=<?php echo "http://103.55.26.54/cha/".substr($text['history'][2],0,strlen($text['history'][0])-1).".html";?> target="_blank" title=<?php echo $text['history_title'][2];?>><?php echo $text['history']['2']?></a></li>
                                  <li>&nbsp;&nbsp;<a href=<?php echo "http://103.55.26.54/cha/".substr($text['history'][3],0,strlen($text['history'][0])-1).".html";?> target="_blank" title=<?php echo $text['history_title'][3];?>><?php echo $text['history']['3']?></a></li>
                                  <li>&nbsp;&nbsp;<a href=<?php echo "http://103.55.26.54/cha/".substr($text['history'][4],0,strlen($text['history'][0])-1).".html";?> target="_blank" title=<?php echo $text['history_title'][4];?>><?php echo $text['history']['4']?></a></li>
                                </ul>
                              </div>
                            </td>
                        </tr>
                        <!--
                        <tr id="s_beians">
                            <td width="100" align="right" height="25">备案情况：</td>
                            <td class="bgFFF" width="500"><div class="loading" id="s_beian">

                              <a href="http://beian.web3389.com/beian/******" target="_blank" title="备案信息"></a>
                            </div></td>
                        </tr>
                      -->
                        </tbody></table>
                    <p style="padding-top:8px;"></p>
                    <script src="js/c787878.js" type="text/javascript"></script>

                    <p style="padding-top:8px;"></p>

                    <p style="padding-top:8px;"></p>
                    <table>
                        <tbody><tr>
                            <td width="310">
                                <script type="text/javascript">
                                    var cpro_id="u2375173";
                                    (window["cproStyleApi"] = window["cproStyleApi"] || {})[cpro_id]={at:"3",rsi0:"300",rsi1:"250",pat:"6",tn:"baiduCustNativeAD",rss1:"#FFFFFF",conBW:"1",adp:"1",ptt:"0",titFF:"%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91",titFS:"14",rss2:"#000000",titSU:"0",ptbg:"90",piw:"0",pih:"0",ptp:"0"}
                                </script>
                                <script src="js/c_003.js" type="text/javascript"></script>
                                <!--script src="http://e.e70123.com/cpc/?68901_2_13_0|1|2_0045c3__" charset="gb2312"></script--></td>
                            <td width="310">
                                <script type="text/javascript">
                                    var sogou_ad_id=489776;
                                    var sogou_ad_height=250;
                                    var sogou_ad_width=300;
                                </script>
                                <script type="text/javascript" src="js/c.js"></script>
                                <!--script src="http://e.e70123.com/cpc/?68901_2_13_0|1|2_0045c3__" charset="gb2312"></script--></td>
                        </tr>
                        </tbody></table>
                    <p style="padding-top:8px;"></p>
                </div>

                <div class="cal"></div>
                <p>&nbsp;</p>
            </div>
        </div>
        <p>&nbsp;</p>
    </div>
    <img src="image/box_bottom.gif" alt="box_bottom" width="980" height="25"> </div>
<div align="center">
    <style type="text/css">.wz-sf{position: fixed;left:32px;bottom: 2px;width: 130px;height: 244px;background:url(image/zxj_g_2016_10_17.jpg) 0 0 no-repeat;z-index:9999;}.wz-sf i{display: block;position: absolute;width: 16px;height: 16px;font-style: normal;line-height: 16px;text-align: center;cursor: pointer;right:2px;top:2px;color:#000;background: #fff;opacity:0.5;filter:alpha(opacity=5);}.wz-sf i:hover{opacity:0.75;filter:alpha(opacity=75);}</style>
    <script type="text/javascript">
        var sogou_ad_id=425296;
        var sogou_ad_height=90;
        var sogou_ad_width=970;
    </script>
    <script type="text/javascript" src="js/l.js"></script>
</div>

<div class="wrapper">
    <div id="bottom">
        <p>
            <a href="" rel="nofollow" target="_blank" alt="关于我们">关于我们</a>
            <a href="" target="_blank" alt="查询记录">查询记录</a>
            <a href="" target="_blank" alt="备案查询记录">备案查询记录</a>
            <a href="" rel="nofollow" target="_blank" alt="免责声明">免责声明</a>
            <a href="" rel="nofollow" target="_blank" alt="删除页面">删除页面</a>
        </p>
        <p>Copyright 2015 All rights reserved. </p>
    </div>
</div>

<div style="display:none;">
    <script type="text/javascript">var _hmt = _hmt || [];(function() {  var hm = document.createElement("script");  hm.src = "//hm.baidu.com/hm.js?3fd9d095ae33cd474b57af75271886d7";  var s = document.getElementsByTagName("script")[0];   s.parentNode.insertBefore(hm, s);})();</script>
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254852562'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1254852562' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1254852562"></span><script src="z_stat.php" type="text/javascript"></script>
    <script src="17764544.js" type="text/javascript"></script>
    <noscript><a href="http://www.51.la/?17764544" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/17764544.asp" style="border:none" /></a></noscript>
</div>
<script language="javascript" src="mediaController.php">
</script>


</body></html>
