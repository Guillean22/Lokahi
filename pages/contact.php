<?php require '../includes/head.php' ?>
	<body>
		<?php require '../includes/navbar.php' ?>
		<div id="headercontact">
			<h1 class="titreheader">CONTACT</h1>
		</div>
		<div class="content">
			<h4>CONTACT</h4>
			<p style="color: #f14928;">___</p>
			<form>
				<div class="formcontact">
					<input type="text" class="textcontact" name="namecontact" value="NAME AND SURNAME">
					<input type="text" class="textcontact" name="emailcontact" value="YOUR E-MAIL">
				</div>
				<div class="formcontact">
					<select class="selectcontact">
						<option value="_co_">COUNTRY</option>
						<option value="fr">France</option>
						<option value="us">United-States</option>
						<option value="uk">United-Kingdom</option>
						<option value="sw">Swiss</option>
					</select>
					<select class="selectcontact">
						<option value="_cli_">I AM :</option>
						<option value="distributor">A DISTRIBUTOR</option>
						<option value="shop">A SHOP</option>
						<option value="rider">A RIDER</option>
						<option value="client">A CLIENT</option>
					</select>
				</div>
				<div class="formcontact">
					<textarea class="textareacontact" name="areacontact">TAPE YOUR MESSAGE HERE :</textarea>
				</div>
				<div class="formcontact">
					<input type="submit"  class="buttoncontact" name="submitcontact" value="SEND">
				</div>
			</form>
		</div>
	</body>
	<?php require '../includes/footer.php' ?>