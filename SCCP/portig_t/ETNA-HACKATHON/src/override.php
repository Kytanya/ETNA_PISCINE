<?php
if (!empty($_GET['algo_result']))
{
  $treeViewArray = $_GET['algo_result'];
}
?>

<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/pageStyle.css" />
  </head>

  <body>
  	<h1>SELECTION MANUELLE</h1>

    <?php
    if (!empty($_GET['error']) && $_GET['error'] == "true")
    {
      echo "<div class='errorMessage'>La sélection n'est pas valide !</div>";
    }
    ?>

    <?php echo '<form action="checkOverride.php?algo_result='.$treeViewArray.'" method="post">'; ?>
  		<input type="hidden" id="numberLine" name="numberLine" value="1" />
  		<div id="lines">
  			<div class="inline">
          <div class="col-title">PALETTE ID</div>
          <div class="col-title">BOITE ID</div>
  				<div class="col-title">PRODUIT ID</div>
          <div class="col-title">QUANTITE</div>
        </div>
        <div class="inline">
          <input type="text" name="paletteId1" autofocus required />
          <input type="text" name="boxId1" required />
  				<input type="text" name="productId1" required />
  				<input type="number" name="quantity1" min="1" required />
  			</div>
  		</div>

      <div style="width:100%; height: 3em;"><input class="addButton" type="button" value="+" onclick="addLine()" /></div>

      <div id="nav-button">
        <?php echo '<a class="button" href="algo_validation.php?algo_result='.$treeViewArray.'"><input type="button" value="Annuler" /></a>'; ?>
        <input class="button" type="submit" value="Valider" />
      </div>
  	</form>

    <footer>
      <a href="https://slack.com/intl/fr-fr" ><img src="../img/slack_logo.png" class="logo_slack" /></a>
      <img src="../img/logo_vp.jpg" class="logo_vp"/>
    </footer>
  </body>

</html>

<script type="text/javascript">
	function addLine() {
		var value = parseInt(document.getElementById("numberLine").value, 10);
		value++;
		document.getElementById("numberLine").value = value;

		var div = document.createElement('div');
		div.className="inline";
		div.innerHTML = '<input type="text" name="paletteId' + value.toString() + '" autofocus required /> <input type="text" name="boxId' + value.toString() + '" required /> <input type="text" name="productId' + value.toString() + '" required /> <input type="number" name="quantity' + value.toString() + '" min="1" required />';

		document.getElementById("lines").appendChild(div);
	}
</script>