#!/usr/bin/env php
<?php
// count_word_sort.php for count_word_sort in /home/tiphanys/piscine_PHP/Jour04/portig_t/count_word_sort
// 
// Made by PORTIGLIATTI Tiphanys
// Login   <portig_t@etna-alternance.net>
// 
// Started on  Thu Nov  2 09:13:50 2017 PORTIGLIATTI Tiphanys
// Last update Thu Nov  2 16:55:53 2017 PORTIGLIATTI Tiphanys
//

$i = 1;
while (isset($argv[$i]))
  {
    if (!file_exists($argv[$i]))
      {
	echo "count_word_sort: {$argv[$i]} : No such file or directory\n";
      }
    else if (is_dir($argv[$i]))
      {
	echo "count_word_sort: {$argv[$i]} : Is a directory\n";
      }
    else if (!is_readable($argv[$i]))
      {
	echo "count_word_sort: {$argv[$i]} : Permission denied\n";
      }
    else if (!is_writable($argv[$i]))
      {
	echo "count_word_sort: {$argv[$i]} : Cannot open file\n";
      }
    else
      {
	$open = file_get_contents($argv[$i], "r");
	$open = str_replace(["\n", "\d", ",", "."], "", $open);
	$tab = explode(" ", $open);
      }
    $i++;
  }
$i = 0;
$j = 0;
$memory = [];
while (isset($tab[$i]))
  {
    $k = 0;
    while (isset($tab[$j]))
      {
       	if (!in_array($tab[$i], $memory) && $tab[$i] == $tab[$j])
	  $k++;
	$j++;
      }
    $j = $i;
    if(!in_array($tab[$i], $memory))
      {
	echo $tab[$i]." ".$k . "\n";
	$memory[] = $tab[$i];
      }
    $i++;
  }