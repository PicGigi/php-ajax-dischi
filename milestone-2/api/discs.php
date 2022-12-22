<?php

$genre = empty($_GET['genre']) ? 'all' : strtolower($_GET['genre']);

include __DIR__ . '/../db/data.php';


if ($genre == 'all') {
	$arrShown = $arr_discs;
} else {
	$arrShown = array_filter($arr_discs, function ($disc) use ($genre) {
		return strtolower($disc['genre']) == $genre;
	});
}

header('Content-Type: application/json');

echo json_encode($arrShown);
