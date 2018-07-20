<?php
function displayTreeView($array, $currentParent, $currLevel = 0, $prevLevel = -1) 
{
  foreach ($array as $categoryId => $category) {
    
    if ($currentParent == $category['parent_id']) {
      if ($currLevel > $prevLevel) echo " <ol class='tree'> ";
      
      if ($currLevel == $prevLevel) echo " </li> ";
      
      echo '<li> <label for="subfolder2">';

      if ($currLevel == 0)
        echo "Palette => ";
      else if ($currLevel == 1)
        echo "Boîte => ";
      else if ($currLevel == 2)
        echo "Produit => ";
      else if ($currLevel == 3)
        echo "Quantité => ";

      echo $category['name'].'</label> <input type="checkbox" name="subfolder2"/>';
      
      if ($currLevel > $prevLevel) { $prevLevel = $currLevel; }
      
      $currLevel++;
      
      displayTreeView ($array, $categoryId, $currLevel, $prevLevel);
      
      $currLevel--;
    }
  }
  
  if ($currLevel == $prevLevel) echo " </li>  </ol> ";
}

function arrayToTreeView($array)
{
  $treeView = array();
  $i = 1;
  foreach ($array as $palette)
  {
    $paletteIndex = $i;
    $treeView[$i++] = array('parent_id' => 0, 'name' => $palette[0]);

    foreach ($palette[1] as $box)
    {
      $boxIndex = $i;
      $treeView[$i++] = array('parent_id' => $paletteIndex, 'name' => $box[0]);

      foreach ($box[1] as $product)
      {
        $productIndex = $i;
        $treeView[$i++] = array('parent_id' => $boxIndex, 'name' => $product[0]);
        $treeView[$i++] = array('parent_id' => $productIndex, 'name' => $product[1]);
      }
    }
  }

  return $treeView;
}
?>