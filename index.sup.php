<?php

// print
$request = $_SERVER['REQUEST_URI'];

switch($request){
	case'/':
		require __DIR__.'/19_pro/index.php';
		break;
	case'/admin':
		require __DIR__.'/19_pro/admin/admin.php';
		break;
	case'/admin/parag':
		require __DIR__.'/19_pro/admin/admin.parag.php';
		break;

	case'/admin/cards':
		require __DIR__.'/19_pro/admin/admin.cards.php';
		break;

	case'/admin/anchors':
		require __DIR__.'/19_pro/admin/admin.anchors.php';
		break;

	default:
		http_response_code(404);
        require __DIR__ . '/19_pro/404.php';
        break;
}