<?php
function parseResultAlgo($array)
{
	$newArray = array();
	$newArrayIndex = 0;
	for ($i = 0; isset($array[$i]); $i++)
	{
		$isDuplicate = false;
		for ($j = 0; isset($newArray[$j]); $j++)
		{
			if ($array[$i]['paletteId'] == $newArray[$j][0])
			{
				$isDuplicate = true;
				$newArray[$j][1][] = [ $array[$i]['boxId'], $array[$i]['products'] ];
			}
		}
		if ($isDuplicate == false)
		{
			$newArray[$newArrayIndex] = [ $array[$i]['paletteId'], [] ];
			$newArray[$newArrayIndex][1][] = [ $array[$i]['boxId'], $array[$i]['products'] ];
			$newArrayIndex += 1;
		}
	}

	return $newArray;
}

function	algo($item, $nb_item_wanted)
{
	//set total_item
	$total_item_toget = 0;
	foreach ($nb_item_wanted as $temp_nbr)
		$total_item_toget += $temp_nbr[1];

  	//boucle total, chaque boucle = 1 carton choisis (continue_ jusqu'a ce que tout est trouver)
  	while ($total_item_toget > 0)
    {
    	$best_choice = NULL;
    	$nb_best_ch = 0;

    	// test de chaque carton pour voir qui rapporte le plus de piece
    	foreach ($item as $test)
		{
	  	$testnbr = 0;
	  	// comparaison de contenue dans le carton avec ce qu'on a besion
	  	foreach ($test['products'] as $values)
	    {
	    	foreach ($nb_item_wanted as $itemcheck)
			{
		  		if ($itemcheck[0] == $values[0])
		    	{
		      		if ($values[1] <= $itemcheck[1])
						$testnbr += $values[1];
		      		else
						$testnbr += $itemcheck[1];
		    	}
			}
	    }
	  // enregistrement du meilleur carton
	  if ($testnbr > $nb_best_ch)
	    {
	      $best_choice = $test;
	      $nb_best_ch = $testnbr;
	    }
	}
    // sortie de l'algo si il n'y a pas assez de stock pour finaliser la commande
    if ($nb_best_ch == 0)
		return false;
    // modification du carton choisis pour afficher exactement ce qu'on prend
    // et update de la demande
    for ($c = 0; ($best_choice['boxId'] != $item[$c]['boxId']); $c++);
    	for ($i = 0; isset($item[$c]['products'][$i]); $i++)
		{
	  		for ($z = 0; isset($nb_item_wanted[$z]); $z++)
	    	{
	      		if ($nb_item_wanted[$z][0] == $item[$c]['products'][$i][0])
				{
		  			if ($item[$c]['products'][$i][1] > $nb_item_wanted[$z][1])
		    		{
		      			$item[$c]['products'][$i][1] = $nb_item_wanted[$z][1];
		      			$nb_item_wanted[$z][1] = 0;
		    		}
		  			else
		    			$nb_item_wanted[$z][1] -= $item[$c]['products'][$i][1];
				}
	    	}
	  		$total_item_toget = 0;
	  		foreach ($nb_item_wanted as $temp_nbr)
	    		$total_item_toget += $temp_nbr[1];
		}
      	// enregistrement du carton choisis
      	$final_choice[] = $item[$c];
      	// vidage du carton
      	for ($y = 0; isset($item[$c]['products'][$y]); $y++)
			$item[$c]['products'][$y][1] = 0;
	}
  	$parsed = parseResultAlgo($final_choice);
  	return $parsed;
}
?>