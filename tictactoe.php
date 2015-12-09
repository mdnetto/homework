<?php

$top_row = array_fill(0, 3, "");
$middle_row = array_fill(0, 3, "");
$bottom_row = array_fill(0, 3, "");

$board = array($top_row, $middle_row, $bottom_row);

//function buildBoard (constructs the board);



function didWin($board, $ticOrTac) {

	if (checkRowsOrColumns($board, $ticOrTac)) {
		return true;
	}

	// make this prettier (maybe iterate over matrix)
	$column1 = array($board[0][0], $board[1][0], $board[2][0]);
	$column2 = array($board[0][1], $board[1][1], $board[2][1]);
	$column3 = array($board[0][2], $board[1][2], $board[2][2]);

	$inverted_board = array($column1, $column2, $column3);

	if (checkRoworColumnWin($inverted_board, $ticOrTac)) {
		return true;
	}

	// builds diagonal board with two arrays
	// check if diagonal wins

	return false;
}

function checkRoworColumnWin($board, $ticOrTac) {
	if ($ticOrTac == "x") {
		$opposite = "o";
	} else {
		$opposite = "x";
	}

	foreach ($board as $row) {
		if (in_array($ticOrTac, $row) && (!in_array($opposite, $row)) && (!in_array("", $row))) {
			return true;
		}
	}
	return false;
}

$board[0] = ["o", "", "x"];
$board[1] = ["x", "", "o"];
$board[2] = ["o", "", "x"];

var_dump(didWin($board, "o"));

//validation only x or o allowed
//board only contains valid things
//


