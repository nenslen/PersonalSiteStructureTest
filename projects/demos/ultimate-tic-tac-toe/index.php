<!DOCTYPE html>

<?php require 'functions.php'; ?>
<?php require '../../../functions.php'; ?>

<html lang="en">
<head>
	<?php drawHead('Ultimate Tic Tac Toe', '../../../'); ?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/tictactoe.js"></script>
	<script src="js/gamelogic.js"></script>
	<script src="js/bot.js"></script>
	<!--
	<title>Ultimate Tic Tac Toe</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="TicTacToe.js"></script>
	<script src="gameLogic.js"></script>
	<script src="Bot.js"></script>
-->
</head>
<body>
	<?php drawHeader('small'); ?>
	

	<div class="wrapper wrapper-no-margin-top">
		<div class='section-wrapper'>
			<div class="section">
				<h1 class="section-header top-header">Ultimate Tic Tac Toe</h1>
				<div class="section-content">

					<div id="game">
						<?php drawBoard(); ?>
					</div>



					<button class="button" id="startButton">New Game</button>
					<div class="card" id="settings-menu">

						<span class="item">
							Game Speed
							<div class="gameSpeed_slider">
								<input class="gameSpeed_range" type="range" value="40" min="1" max="200">
							</div>
						</span>
						

						<div class="grid grid-2">
							<!-- Difficulty -->
							<div>
								<span class="item">
									Difficulty
									<div class="option">
										<input id="level1" type="radio" name="difficultyradio" value="1">
										<label for="level1">Easy</label>
									</div>
									<div class="option">
										<input id="level2" type="radio" name="difficultyradio" value="2" checked>
										<label for="level2">Medium</label>
									</div>
								</span>
							</div>


							<!-- Game Mode -->
							<div>
								<span class="item">
									Game Mode
									<div class="option">
										<input id="type1" type="radio" name="gamemoderadio" value="hvh" checked>
										<label for="type1">Human vs Human</label>
									</div>
									<div class="option">
										<input id="type2" type="radio" name="gamemoderadio" value="hvc">
										<label for="type2">Human vs Computer</label>
									</div>
									<div class="option">
										<input id="type3" type="radio" name="gamemoderadio" value="cvc">
										<label for="type3">Computer vs Computer</label>
									</div>
								</span>
							</div>
						</div>
					</div>
					

			        <h1 class="section-header">About</h1>

			        <p id="description">About ultimate tic tac toe</p>
			        

			        <h1 class="section-header">Details</h1>

			        <h2 class="section-header-small">How it works</h2>
			        <p>How it works section</p>
			        
			        <p>For source code, visit the <a href="https://github.com/nenslen/Connect4">github page for this project</a>.</p>
				</div>
			</div>
		</div>

		<div id="modal">
			<div class="modal-content">
				<span class="playerLetter">X</span> Wins!dfg
				</br>Click anywhere to continue
			</div>
		</div>

		<?php drawFooter(); ?>
	</div>
	

	
</body>
</html>