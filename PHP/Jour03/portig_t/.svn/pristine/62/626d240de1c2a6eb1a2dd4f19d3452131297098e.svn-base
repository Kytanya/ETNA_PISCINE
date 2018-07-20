#!/usr/bin/env php
<?php
// login.php for login in /home/tiphanys/piscine_PHP/Jour03/portig_t/login
// 
// Made by PORTIGLIATTI Tiphanys
// Login   <portig_t@etna-alternance.net>
// 
// Started on  Wed Nov  1 20:34:26 2017 PORTIGLIATTI Tiphanys
// Last update Wed Nov  1 22:04:52 2017 PORTIGLIATTI Tiphanys
//

$i = 1;
$j = 0;
while ($i < $argc)
  {
    $login = $argv[$i];
    while (($j < 6) && ($login[$j] != "_"))
      {
	if ($login[0] == "-")
	  echo "KO\n";
	$j++;
      }
    if (($login[$j] >= "a") && ($login[$j] <= "z" ) ||
	($login[$j] >= "0") &&($login[$j] <= "9"))
      {
	$j++;
      }
    else
      echo "KO\n";
    if ((isset($login[$j + 1])) && ($login[$j + 1] == "_") &&
	($login[$j + 1] >= "a") &&
	($login[$j + 1] <= "z")) 
      echo "OK";
    $i++;
  }