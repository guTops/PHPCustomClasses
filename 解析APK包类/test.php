<?php
/*解析安卓apk包中的压缩XML文件，还原和读取XML内容
依赖功能：需要PHP的ZIP包函数支持。*/
include('Apkparser.php');
$appObj  = new Apkparser(); 
$targetFile = "/mnt/com.tencent.mm_6.3.22_liqucn.com.apk";//apk所在的路径地址
$res   = $appObj->open($targetFile);
echo $appObj->getAppName();     // 应用名称
echo "<br/>"; 
echo $appObj->getPackage();    // 应用包名
echo "<br/>";
echo $appObj->getVersionName();  // 版本名称
echo "<br/>";
echo $appObj->getVersionCode();  // 版本代码
echo "<br/>";
?>