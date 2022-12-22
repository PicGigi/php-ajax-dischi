<?php

include __DIR__ . '/../db/data.php';

$arrGenres = [];

foreach($arr_discs as $disc) {
	if(!in_array($disc['genre'], $arrGenres)){
		$arrGenres[] = $disc['genre'];
	}
}

header('Content-Type: application/json');
echo json_encode($arrGenres);