<?php require '../includes/head.php' ?>
	<body>
		<?php require '../includes/navbar.php' ?>
		<header id="headercontact">
			<h1 class="titreheader">CONTACT</h1>
		</header>
		<div class="content">
			<h2></h2>
			<form>
				<input type="text" name="namecontact" value="NAME AND SURNAME">
				<input type="text" name="emailcontact" value="YOUR E-MAIL">
				<br />
				<select>
					<option value="fr">France</option>
					<option value="us">United-States</option>
					<option value="uk">United-Kingdom</option>
					<option value="sw">Swiss</option>
				</select>
				<select>
					<option value="distributor">A DISTRIBUTOR</option>
					<option value="shop">A SHOP</option>
					<option value="rider">A RIDER</option>
					<option value="client">A CLIENT</option>
				</select>
				<br />
				<input type="" name="">
				<br />
				<input type="submit" name="submitcontact" value="SEND">
			</form>
		</div>
	</body>
	<?php require '../includes/footer.php' ?>