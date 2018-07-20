<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/pageStyle.css" />
  </head>

  <body>
  	<h1>COMMANDE</h1>

    <?php
    if (!empty($_GET['error']) && $_GET['error'] == "true")
    {
      echo "<div class='errorMessage'>La sélection n'est pas valide !</div>";
    }
    if (!empty($_GET['success']) && $_GET['success'] == "true")
    {
      echo "<div class='successMessage'>La commande a été envoyé !</div>";
    }
    ?>

  	<form action="algo_validation.php" method="post">
  		<input type="hidden" id="numberLine" name="numberLine" value="1" />
      <div id="lines">
  			<div class="inline">
          <label class="col-title">PRODUIT ID</label>
          <label class="col-title">QUANTITE</label>
        </div>
        <div class="inline">
  				<input type="text" name="productId1" autofocus required />
  				<input type="number" name="quantity1" min="1" required />
  			</div>
  		</div>
      <div style="width:100%; height: 3em;"><input class="addButton" type="button" value="+" onclick="addLine()" /></div>
      <div id="nav-button">
        <a href="command.php"><input type="button" value="Annuler" /></a>
        <input type="submit" value="Valider" />
      </div>
  	</form>
    <footer>
      <a href="https://slack.com/intl/fr-fr" ><img src="../img/slack_logo.png" /></a>
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
		div.innerHTML = '<input type="text" name="productId' + value.toString() + '" autofocus required /><input type="number" name="quantity' + value.toString() + '" min="1" required />';

		document.getElementById("lines").appendChild(div);
	}
</script>