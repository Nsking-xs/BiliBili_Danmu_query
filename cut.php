<?php
$input = fopen(intval($argv[1]), "r");//打开未分割的字典
while(!feof($input))
{
   $output = fopen(str_replace("\r\n", "", substr(fgets($input),-5)), "a");//将字典条目按照CRC32b值前3位进行分别存储，存储进"前三位".txt内
     echo fgets($input);
     fwrite($output,fgets($input));
     fclose($output);
}
fclose($input);
?> 
