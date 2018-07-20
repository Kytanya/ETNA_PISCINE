#!/usr/bin/env php
<?php
// capitalize.php for content in /home/tiphanys/piscine_PHP/Jour03/portig_t/capitalize
// 
// Made by PORTIGLIATTI Tiphanys
// Login   <portig_t@etna-alternance.net>
// 
// Started on  Mon Oct 30 20:03:59 2017 PORTIGLIATTI Tiphanys
// Last update Wed Nov  1 22:32:13 2017 PORTIGLIATTI Tiphanys
//

$i = 0;
while (isset($argc[$i]))
  {
    if (!file_exists($argv[$i]))
      {
	echo "capitalize_file: {$argv[$i]}: No such file or directory\n";
      }
    else if (is_dir($argv[$i]))
      {
	echo "capitalize_file: {$argv[$i]}: Is a directory\n";
      }
    else if (!is_readable($argv[$i]))
      {
	echo "capitalize_file: {$argv[$i]}: Permission denied\n";
      }
    else if(!fopen($argv[$i], "r"))
      echo "capitalize_file: {$argv[$i]}: Cannot open file\n";
    else
      {
	$open = fopen($argv[1], "r");
	$str = fread($open, filesize($argv[1]));
	fclose($open);
	$open = fopen($argv[1], "w");
	while (isset($str[$i]))
	  {
	    if ($str[0] >= "a" && $str[0] <= "z")
	      {
		$str[0] = chr(ord($str[0]) - 32);
	      }
	    if ((($str[$i] == ".") || ($str[$i] == "!") || ($str[$i] == "?"))
		&& (isset($str[$i + 1])))
	      {
		$i++;
		if ((($str[$i] == " ") || ($str[$i] == "\n") ||
		     ($str[$i] == "\t")) && (isset($str[$i + 1])))
		  {
		    $i++;
		    $str[$i] = chr(ord($str[$i]) - 32);
		  }
	      }
	    else
	      $i++;
	  }
	fwrite($open, $str);
	fclose($open);
      }
  }
