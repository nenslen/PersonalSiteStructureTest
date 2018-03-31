<?php
	function drawBoard() {
?>
		<div class="large-board-wrapper">
			<div class="large-board">
<?php
			for($i = 1; $i <= 9; $i++) {
?>
				<div class="large-tile" id=<?php echo "'" . $i . "'" ?>>
					<div class="small-board">
<?php
						for($j = 1; $j <= 9; $j++) {
?>
							<div class="small-tile validTile validBackground" id=<?php echo "'" . $i . $j . "'" ?>></div>
<?php
						}
?>
					</div>
				</div>
<?php
			}
?>
			</div>
		</div>
<?php
	}
?>
<!--

/*
		echo '<div class="board">';

		// 3 Large rows
		$id1 = 1;
		for($i = 1; $i <= 3; $i++) {
			echo '<div class="row">';

			// 3 Large tiles
			for($j = 1; $j <= 3; $j++) {
				//echo '<div class="largeTile validBoardX validBackground" id="' . $id1 . '">';
				echo '<div class="largeTile" id="' . $id1 . '">';

				// 3 Small rows
				$id2 = 1;
				for($k = 1; $k <= 3; $k++) {
					echo '<div class="row">';

					// 3 Small tiles
					for($l = 1; $l <= 3; $l++) {
						//echo '<div class="tile validTile validBackground" id="' . $id1 . $id2++ .'"></div>';
						echo '<div class="tile" id="' . $id1 . $id2++ .'"></div>';
					}
					echo '</div>';
				}
				$id1++;
				echo '</div>';
			}
			echo '</div>';
		}
		echo '</div>';
	}
	*/
?>
-->