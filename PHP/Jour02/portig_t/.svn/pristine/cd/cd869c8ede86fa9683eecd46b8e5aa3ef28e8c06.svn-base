#!/usr/bin/env php
<?php
// content.php for content in /home/tiphanys/piscine_PHP/Jour02/portig_t/content
// 
// Made by PORTIGLIATTI Tiphanys
// Login   <portig_t@etna-alternance.net>
// 
// Started on  Mon Oct 30 20:03:59 2017 PORTIGLIATTI Tiphanys
// Last update Mon Oct 30 23:17:29 2017 PORTIGLIATTI Tiphanys
//

$i = 1;
while ($argc > $i)
  {
    if (!file_exists($argv[$i]))
      {
	echo "content.php: {$argv[$i]}: No such file or directory\n";
      }
    else if (is_dir($argv[$i]))
      {
	echo "content.php: {$argv[$i]}: Is a directory\n}";
      }
    else if (!is_readable($argv[$i]))
      {
	echo "content.php: {$argv[$i]}: Permission denied\n";
      }
    else if(!fopen($argv[$i], "r"))
      echo "content.php: {$argv[$i]}: Cannot open file\n";
    else
      {
	$open = fopen($argv[$i], "r");
	echo fread($open, filesize($argv[$i]));
	fclose($open);
      }
    $i++;
  }
