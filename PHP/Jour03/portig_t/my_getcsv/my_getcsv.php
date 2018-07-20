#!/usr/bin/env php
<?php
// my_getcsv.php for my_getcsv in /home/tiphanys/piscine_PHP/Jour03/portig_t/my_getcsv
//
// Made by PORTIGLIATTI Tiphanys
// Login   <portig_t@etna-alternance.net>
// 
// Started on  Wed Nov  1 13:07:16 2017 PORTIGLIATTI Tiphanys
// Last update Wed Nov  1 15:08:12 2017 PORTIGLIATTI Tiphanys
//

function my_getcsv($handle, $str = ",", $str2 = "\n")
{
  $content = fread($handle, 1024);
  $i = 0;
  $j = 0;
  $k = 0;
  $var = "";
  while (isset($content[$i]))
    {
      if (($content[$i] != $str) && ($content[$i] != $str2))
	  $var .= $content[$i];
      else if ($content[$i] == $str)
	{
	  $tab[$k][$j] = $var; 
	  $j++;
	  $var = "";
	}
      else if ($content[$i] == $str2)
	{
	  $tab[$k][$j] = $var;
	  $k++;
	  $var = "";
	  $j = 0;
	}
      $i++;
    }
  return ($tab);
}
?>