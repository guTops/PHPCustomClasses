<?php
$redis = new Redis();
//��������
$redis -> zAdd('{ip}:end.asc',"{$end}","{$id}");
$redis -> hmset("{ip}:{$id}", array('country' => "{$country}", 
'province' => "{$province}",'city' => "{$city}",'min' => "{$start}",'max' => "{$end}"));

//��ȡ����
$data = $redis->zRangeByScore('{ip}:end.asc', $iplong ,"+inf", array('limit' => array(0, 1)));
$id = $data['0'];
$redis -> hMget("{ip}:{$id}",array("country","province","city"));