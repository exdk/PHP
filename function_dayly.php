<?php
function dayly() { //функция определения времени суток
	$hour = date('H');
	if ($hour > 00 && $hour < 05) {
		echo '<br>Доброй ночи, ';
	}
		elseif ($hour > 05 && $hour < 10) {
			echo '<br>Доброго утра, ';
		}
			elseif ($hour > 10 && $hour < 18) {
				echo '<br>Доброго дня, ';
			}
				elseif ($hour > 18) {
					echo '<br>Доброго вечера, ';
				}
}
?>
