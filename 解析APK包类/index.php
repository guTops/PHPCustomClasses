<?php
ob_start();
for($i = 0; $i < 10; $i++)
{
    echo $i . "<br />\n";
    echo str_repeat(' ', 1024);
    flush();
    ob_flush();
    
    sleep(1);
}