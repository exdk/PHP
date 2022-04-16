<?php
function weekRus() { //функция определения дня недели на русском
	$week = date('l');
	if ($week == 'Sunday') {
		echo 'воскресенье.';
	}
	if ($week == 'Monday') {
		echo 'понедельник.';
	}
	if ($week == 'Tuesday') {
		echo 'вторник.';
	}
	if ($week == 'Wednesday') {
		echo 'среда.';
	}
	if ($week == 'Thursday') {
		echo 'четверг.';
	}
	if ($week == 'Friday') {
		echo 'пятница.';
	}
	if ($week == 'Saturday') {
		echo 'суббота.';
	}
}
?>
