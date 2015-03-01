<html>
	<head>
	
		<meta charset="utf-8" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		
		
		<body>
			<header>
				<h1>Invitation Participant</h1>
			</header>
			
			<?php include("menu.php"); ?>
			
			<form id="formMail" class="form-horizontal" role="form" action="cible.php" method="post">
				<div class="form-group">
						<label for="objet" class="col-sm-3 control-label">Objet: </label>
						<div class="col-sm-4">
							<input id="objet" type="text" class="form-control" placeholder="objet" required>
						</div>
				</div>
				<div class="form-group">
					<label for="choixQuestionnaire" class="col-sm-3 control-label">Choix Questionnaire: </label>
					<div class="col-sm-4">
						<select id="choixQuestionnaire" class="form-control" required>
						<option value="choix1">Choix 1</option>
						<option value="choix2">Choix 2</option>
						<option value="choix3">Choix 3</option>
						<option value="choix4">Choix 4</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-4">
					<label for="message" class="col-sm-3 control-label">Message: </label>
						<textarea id="message" class="form-control" placeholder="Votre message ici" display="inline-block" rows="6" cols="30" required>
						Votre message ici.
						</textarea>
					</div>
				</div>
				<div class="form-group">
						<div class="col-sm-offset-3 col-sm-10">
							<button id="ajouter" type="submit" class="btn btn-primary">Ajouter</button>						
						</div>
					</div>
			</p>
		</body>